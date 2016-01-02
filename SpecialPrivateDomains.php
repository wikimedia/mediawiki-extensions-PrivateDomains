<?php
/**
 * PrivateDomains extension - allows to restrict editing to users with a
 * certain e-mail address
 *
 * @file
 * @ingroup Extensions
 * @author Inez Korczyński <korczynski@gmail.com>
 * @author Jack Phoenix <jack@countervandalism.net>
 * @link https://www.mediawiki.org/wiki/Extension:PrivateDomains Documentation
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

/**
 * Main extension class
 * Defines the new special page, Special:PrivateDomains
 */
class PrivateDomains extends SpecialPage {

	/**
	 * Constructor -- set up the new special page
	 */
	public function __construct() {
		parent::__construct( 'PrivateDomains'/*class*/, 'privatedomains'/*restriction*/ );
	}

	/**
	 * Saves a message in the MediaWiki: namespace.
	 *
	 * @param string $name Name of the MediaWiki message
	 * @param mixed $value Value of the message
	 */
	function saveParam( $name, $value ) {
		$nameTitle = Title::newFromText( $name, NS_MEDIAWIKI );
		$article = new Article( $nameTitle );

		$article->doEdit( $value, '' );
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
			$article = new Article( $nameTitle );
			return $article->getContent();
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

		$this->setHeaders();

		$msg = '';

		if ( $request->wasPosted() ) {
			if ( $request->getText( 'action' ) == 'submit' ) {
				$this->saveParam( 'privatedomains-domains', $request->getText( 'listdata' ) );
				$this->saveParam( 'privatedomains-affiliatename', $request->getText( 'affiliateName' ) );
				$this->saveParam( 'privatedomains-emailadmin', $request->getText( 'optionalPrivateDomainsEmail' ) );

				$msg = $this->msg( 'saveprivatedomains-success' )->text();
			}
		}

		$this->mainForm( $msg );
	}

	/**
	 * Shows the main form in Special:PrivateDomains
	 */
	private function mainForm( $msg ) {
		$out = $this->getOutput();
		$user = $this->getUser();

		$titleObj = SpecialPage::getTitleFor( 'PrivateDomains' );
		$action = htmlspecialchars( $titleObj->getLocalURL( 'action=submit' ) );

		// Can the user execute the action?
		if ( !$user->isAllowed( 'privatedomains' ) ) {
			$this->displayRestrictionError();
			return;
		}

		// Is the database in read-only mode?
		if ( wfReadOnly() ) {
			$out->readOnlyPage();
			return;
		}

		// Is the user blocked?
		if ( $user->isBlocked() ) {
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
		<label for="affiliateName"><br />' . $this->msg( 'privatedomains-affiliatenamelabel' )->text() . ' </label>
		<input type="text" name="affiliateName" width="30" value="' . $this->getParam( 'privatedomains-affiliatename' ) . '" />
		<label for="optionalEmail"><br />' . $this->msg( 'privatedomains-emailadminlabel' )->text() . ' </label>
		<input type="text" name="optionalPrivateDomainsEmail" value="' . $this->getParam( 'privatedomains-emailadmin' ) . '" />' );
		$out->addWikiMsg( 'privatedomains-instructions' );
		$out->addHTML( '<textarea name="listdata" rows="10" cols="40">' . $this->getParam( 'privatedomains-domains' ) . '</textarea>' );
		$out->addHTML( '<br /><input type="submit" name="saveList" value="' . $this->msg( 'saveprefs' )->plain() . '" />' );
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

		$out->setPageTitle( $this->msg( 'badaccess' )->text() );
		$out->setHTMLTitle( $this->msg( 'errorpagetitle' )->text() );
		$out->setRobotPolicy( 'noindex,nofollow' );
		$out->setArticleRelated( false );
		$out->mBodytext = '';

		$groups = array_map( array( 'User', 'makeGroupLinkWiki' ),
			User::getGroupsWithPermission( $this->mRestriction ) );
		$privatedomains_emailadmin = PrivateDomains::getParam( 'privatedomains-emailadmin' );
		if ( $groups ) {
			$out->addWikiMsg( 'badaccess-groups',
				$lang->commaList( $groups ),
				count( $groups ) );
			if ( $privatedomains_emailadmin != '' ) {
				$out->addWikiMsg( 'privatedomains-ifemailcontact', $privatedomains_emailadmin );
			}
		} else {
			$out->addWikiMsg( 'badaccess-group0' );
		}
		$out->returnToMain();
	}

	protected function getGroupName() {
		return 'wiki';
	}
}
