<?php
/**
 * PrivateDomains extension - allows to restrict editing to users with a
 * certain e-mail address
 *
 * @file
 * @ingroup Extensions
 * @author Inez Korczyński <korczynski@gmail.com>
 * @author Jack Phoenix
 * @link https://www.mediawiki.org/wiki/Extension:PrivateDomains Documentation
 * @license GPL-2.0-or-later
 */

use MediaWiki\Html\Html;
use MediaWiki\MediaWikiServices;
use MediaWiki\Title\Title;

/**
 * Main extension class
 * Defines the new special page, Special:PrivateDomains
 */
class SpecialPrivateDomains extends SpecialPage {

	/**
	 * Constructor -- set up the new special page
	 */
	public function __construct() {
		parent::__construct( 'PrivateDomains'/*class*/, 'privatedomains'/*restriction*/ );
	}

	public function doesWrites() {
		return true;
	}

	/**
	 * Saves a message in the MediaWiki: namespace.
	 *
	 * @param string $name Name of the MediaWiki message
	 * @param mixed $value Value of the message
	 */
	function saveParam( $name, $value ) {
		$nameTitle = Title::newFromText( $name, NS_MEDIAWIKI );
		$page = MediaWikiServices::getInstance()->getWikiPageFactory()->newFromTitle( $nameTitle );

		$page->doUserEditContent(
			ContentHandler::makeContent( $value, $nameTitle ),
			$this->getUser(),
			''
		);
	}

	/**
	 * Fetches the content of a defined MediaWiki message.
	 *
	 * @param string $name Name of the MediaWiki message
	 * @return string Page content if the supplied page exists or an empty string
	 */
	static function getParam( $name ) {
		$nameTitle = Title::newFromText( $name, NS_MEDIAWIKI );
		if ( $nameTitle->exists() ) {
			$page = MediaWikiServices::getInstance()->getWikiPageFactory()->newFromTitle( $nameTitle );
			return $page->getContent()->getNativeData();
		} else {
			return '';
		}
	}

	/**
	 * Show the special page
	 *
	 * @param mixed|null $par Parameter passed to the page
	 */
	public function execute( $par ) {
		$request = $this->getRequest();
		$user = $this->getUser();

		$this->setHeaders();

		$msg = '';

		if ( $request->wasPosted() ) {
			$tokenOk = $user->matchEditToken( $request->getVal( 'wpEditToken' ) );
			if ( !$tokenOk ) {
				$msg = $this->msg( 'sessionfailure' )->parse();
			}

			if ( $request->getText( 'action' ) == 'submit' && $tokenOk ) {
				$this->saveParam( 'privatedomains-domains', $request->getText( 'listdata' ) );
				$this->saveParam( 'privatedomains-affiliatename', $request->getText( 'affiliateName' ) );
				$this->saveParam( 'privatedomains-emailadmin', $request->getText( 'optionalPrivateDomainsEmail' ) );

				$msg = $this->msg( 'saveprivatedomains-success' )->escaped();
			}
		}

		$this->mainForm( $msg );
	}

	/**
	 * Shows the main form in Special:PrivateDomains
	 *
	 * @param string $msg
	 */
	private function mainForm( $msg ) {
		$out = $this->getOutput();
		$user = $this->getUser();

		$titleObj = SpecialPage::getTitleFor( 'PrivateDomains' );
		$action = htmlspecialchars( $titleObj->getLocalURL( 'action=submit' ) );

		// Can the user execute the action?
		$this->checkPermissions();

		// Is the database in read-only mode?
		$this->checkReadOnly();

		// Is the user blocked?
		if ( $user->getBlock() ) {
			throw new UserBlockedError( $user->getBlock() );
		}

		// If there was a message, display it.
		if ( $msg != '' ) {
			$out->addHTML(
				'<div class="successbox" style="width:92%;"><h2>' . $msg .
				'</h2></div><br /><br /><br />'
			);
		}

		// Render the main form for changing PrivateDomains' settings.
		$out->addHTML(
			'<form name="privatedomains" id="privatedomains" method="post" action="' . $action . '">
		<label for="affiliateName"><br />' . $this->msg( 'privatedomains-affiliatenamelabel' )->escaped() . ' </label>
		<input type="text" name="affiliateName" width="30" value="' . $this->getParam( 'privatedomains-affiliatename' ) . '" />
		<label for="optionalEmail"><br />' . $this->msg( 'privatedomains-emailadminlabel' )->escaped() . ' </label>
		<input type="text" name="optionalPrivateDomainsEmail" value="' . $this->getParam( 'privatedomains-emailadmin' ) . '" />' );
		$out->addWikiMsg( 'privatedomains-instructions' );
		$out->addHTML( '<textarea name="listdata" rows="10" cols="40">' . $this->getParam( 'privatedomains-domains' ) . '</textarea>' );
		$out->addHTML( Html::hidden( 'wpEditToken', $user->getEditToken() ) );
		$out->addHTML( '<br /><input type="submit" name="saveList" value="' . $this->msg( 'saveprefs' )->escaped() . '" />' );
		$out->addHTML( '</form>' );
	}

	/**
	 * Custom version of SpecialPage::displayRestrictionError for PrivateDomains.
	 * This is OutputPage::permissionRequired with some modifications.
	 * The big change here is that we display 'privatedomains-ifcontact'
	 * message if user doesn't have the permission to access the special page.
	 */
	function displayRestrictionError() {
		$lang = $this->getLanguage();
		$out = $this->getOutput();
		$context = $this->getContext();

		$out->setPageTitle( $this->msg( 'badaccess' )->text() );
		$out->setHTMLTitle( $this->msg( 'errorpagetitle' )->text() );
		$out->setRobotPolicy( 'noindex,nofollow' );
		$out->setArticleRelated( false );
		$out->mBodytext = '';
		$groups = MediaWikiServices::getInstance()->getGroupPermissionsLookup()
			->getGroupsWithPermission( $this->mRestriction );
		$groupLinks = [];

		foreach ( $groups as $group ) {
			$groupLinks[] = UserGroupMembership::getLink( $group, $context, $this->getGroupName() );
		}
		$privatedomains_emailadmin = self::getParam( 'privatedomains-emailadmin' );
		if ( $groupLinks ) {
			$out->addWikiMsg( 'badaccess-groups',
				$lang->commaList( $groupLinks ),
				count( $groupLinks ) );
			if ( $privatedomains_emailadmin != '' ) {
				$out->addWikiMsg( 'privatedomains-ifemailcontact', $privatedomains_emailadmin );
			}
		} else {
			$out->addWikiMsg( 'badaccess-group0' );
		}
		$out->returnToMain();
	}

	/**
	 * @return string
	 */
	protected function getGroupName() {
		return 'wiki';
	}
}
