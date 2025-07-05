<?php

use MediaWiki\Title\Title;
use MediaWiki\Hook\AlternateEditHook;
use MediaWiki\MediaWikiServices;
use MediaWiki\User\UserGroupManager;

/**
 * Hooked functions used by the PrivateDomains extension.
 *
 * @file
 */
class PrivateDomainsHooks implements AlternateEditHook {
	/**
	 * @var UserGroupManager
	 */
	private $userGroupManager;

	/**
	 * @param UserGroupManager $userGroupManager
	 */
	public function __construct( UserGroupManager $userGroupManager ) {
		$this->userGroupManager = $userGroupManager;
	}

	/**
	 * If user isn't a member of any of the allowed user groups, then deny
	 * access to edit page and show information box.
	 *
	 * @param EditPage $editpage
	 * @return bool
	 */
	public function onAlternateEdit( $editpage ) {
		$user = $editpage->getContext()->getUser();
		$groups = $this->userGroupManager->getUserEffectiveGroups( $user );
		if (
			$user->isAnon() ||
			( $user->isRegistered() && !in_array( 'privatedomains', $groups ) &&
				!in_array( 'staff', $groups ) && !in_array( 'bureaucrat', $groups ) )
		) {
			$out = $editpage->getContext()->getOutput();
			$out->setPageTitle( wfMessage( 'badaccess' )->text() );
			$out->setHTMLTitle( wfMessage( 'errorpagetitle' )->text() );
			$affiliateName = SpecialPrivateDomains::getParam( 'privatedomains-affiliatename' );
			$out->addHTML( '<div class="errorbox" style="width:92%;"><strong>' );
			$out->addWikiMsg( 'privatedomains-invalidemail', $affiliateName );
			$out->addHTML( '</strong></div><br /><br /><br />' );
			return false;
		}
		return true;
	}

	/**
	 * If user has confirmed and allowed email address then add them to the
	 * privatedomains user group.
	 *
	 * This is called both after a user has successfully logged into the wiki
	 * and also after the user has successfully confirmed their e-mail address.
	 *
	 * @param User $user
	 * @return bool
	 */
	public static function onUserLoginComplete( $user ) {
		$userGroupManager = MediaWikiServices::getInstance()->getUserGroupManager();
		if ( $user->isEmailConfirmed() ) {
			$domainsStr = SpecialPrivateDomains::getParam( 'privatedomains-domains' );
			if ( $domainsStr != '' ) {
				$email = strtolower( $user->mEmail );
				// get suffix domain name
				preg_match( "/([^@]+)@(.+)$/i", $email, $matches );
				$emailDomain = $matches[2];
				$domainsArr = explode( "\n", $domainsStr );
				foreach ( $domainsArr as $allowedDomain ) {
					$allowedDomain = strtolower( $allowedDomain );
					if ( preg_match( "/.*?$allowedDomain$/", $emailDomain ) ) {
						$userGroupManager->addUserToGroup( $user, 'privatedomains' );
						return true;
					}
				}
			}
		}
		$userGroupManager->removeUserFromGroup( $user, 'privatedomains' );
		return true;
	}

}
