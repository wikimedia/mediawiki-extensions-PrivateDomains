<?php
/**
 * Hooked functions used by the PrivateDomains extension.
 *
 * @file
 */
class PrivateDomainsHooks {

	/**
	 * If user isn't a member of any of the allowed user groups, then deny
	 * access to edit page and show information box.
	 *
	 * @param EditPage $editpage
	 * @return bool
	 */
	public static function onAlternateEdit( $editpage ) {
		global $wgUser;
		$groups = $wgUser->getEffectiveGroups();
		if (
			$wgUser->isAnon() ||
			$wgUser->isLoggedIn() && !in_array( 'privatedomains', $groups ) &&
			!in_array( 'staff', $groups ) && !in_array( 'bureaucrat', $groups )
		)
		{
			global $wgOut;
			$wgOut->setPageTitle( wfMessage( 'badaccess' )->text() );
			$wgOut->setHTMLTitle( wfMessage( 'errorpagetitle' )->text() );
			$affiliateName = PrivateDomains::getParam( 'privatedomains-affiliatename' );
			$wgOut->addHTML( '<div class="errorbox" style="width:92%;"><strong>' );
			$wgOut->addWikiMsg( 'privatedomains-invalidemail', $affiliateName );
			$wgOut->addHTML( '</strong></div><br /><br /><br />' );
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
		if ( $user->isEmailConfirmed() ) {
			$domainsStr = PrivateDomains::getParam( 'privatedomains-domains' );
			if ( $domainsStr != '' ) {
				$email = strtolower( $user->mEmail );
				// get suffix domain name
				preg_match( "/([^@]+)@(.+)$/i", $email, $matches );
				$emailDomain = $matches[2];
				$domainsArr = explode( "\n", $domainsStr );
				foreach ( $domainsArr as $allowedDomain ) {
					$allowedDomain = strtolower( $allowedDomain );
					if ( preg_match( "/.*?$allowedDomain$/", $emailDomain ) ) {
						$user->addGroup( 'privatedomains' );
						return true;
					}
				}
			}
		}
		$user->removeGroup( 'privatedomains' );
		return true;
	}

}