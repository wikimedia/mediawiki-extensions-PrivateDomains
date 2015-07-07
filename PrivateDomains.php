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

// Extension credits that will show up on Special:Version
$wgExtensionCredits['specialpage'][] = array(
	'name' => 'PrivateDomains',
	'version' => '1.4.0',
	'author' => array( 'Inez Korczyński', 'Jack Phoenix' ),
	'description' => 'Allows to restrict editing to users with a certain e-mail address',
	'url' => 'https://www.mediawiki.org/wiki/Extension:PrivateDomains',
	'license-name' => 'GPL-2.0+',
);

// Set up the new special page
$wgAutoloadClasses['PrivateDomains'] = __DIR__ . '/SpecialPrivateDomains.php';
$wgMessagesDirs['PrivateDomains'] = __DIR__ . '/i18n';
$wgSpecialPages['PrivateDomains'] = 'PrivateDomains';

$wgAutoloadClasses['PrivateDomainsHooks'] = __DIR__ . '/PrivateDomainsHooks.php';
$wgHooks['AlternateEdit'][] = 'PrivateDomainsHooks::onAlternateEdit';
$wgHooks['UserLoginComplete'][] = 'PrivateDomainsHooks::onUserLoginComplete';
$wgHooks['ConfirmEmailComplete'][] = 'PrivateDomainsHooks::onUserLoginComplete';

# set 'privatedomains' right to users in staff or bureaucrat group
$wgAvailableRights[] = 'privatedomains';
$wgGroupPermissions['staff']['privatedomains'] = true;
$wgGroupPermissions['bureaucrat']['privatedomains'] = true;

# overwrite standard groups permissions
$wgGroupPermissions['staff']['edit'] = true;
$wgGroupPermissions['bureaucrat']['edit'] = true;
$wgGroupPermissions['user']['edit'] = false;
$wgGroupPermissions['*']['edit'] = false;
$wgGroupPermissions['privatedomains']['edit'] = true;

$wgGroupPermissions['staff']['upload'] = true;
$wgGroupPermissions['bureaucrat']['upload'] = true;
$wgGroupPermissions['user']['upload'] = false;
$wgGroupPermissions['*']['upload'] = false;
$wgGroupPermissions['privatedomains']['upload'] = true;

$wgGroupPermissions['staff']['move'] = true;
$wgGroupPermissions['bureaucrat']['move'] = true;
$wgGroupPermissions['user']['move'] = false;
$wgGroupPermissions['*']['move'] = false;
$wgGroupPermissions['privatedomains']['move'] = true;

$wgGroupPermissions['user']['reupload'] = false;
$wgGroupPermissions['*']['reupload'] = false;
$wgGroupPermissions['privatedomains']['reupload'] = true;

$wgGroupPermissions['user']['reupload-shared'] = false;
$wgGroupPermissions['*']['reupload-shared'] = false;
$wgGroupPermissions['privatedomains']['reupload-shared'] = true;

$wgGroupPermissions['user']['minoredit'] = false;
$wgGroupPermissions['*']['minoredit'] = false;
$wgGroupPermissions['privatedomains']['minoredit'] = true;