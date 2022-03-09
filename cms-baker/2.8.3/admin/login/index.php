<?php
/**
 *
 * @category        admin
 * @package         login
 * @author          Ryan Djurovich, WebsiteBaker Project
 * @copyright       2009-2011, Website Baker Org. e.V.
 * @link			http://www.websitebaker2.org/
 * @license         http://www.gnu.org/licenses/gpl.html
 * @platform        WebsiteBaker 2.8.x
 * @requirements    PHP 5.2.2 and higher
 * @version         $Id: index.php 1529 2011-11-25 05:03:32Z Luisehahne $
 * @filesource		$HeadURL: svn://isteam.dynxs.de/wb_svn/wb280/tags/2.8.3/wb/admin/login/index.php $
 * @lastmodified    $Date: 2011-11-25 06:03:32 +0100 (Fr, 25. Nov 2011) $
 *
*/

require_once("../../config.php");
require_once(WB_PATH."/framework/class.login.php");

if(defined('SMART_LOGIN') AND SMART_LOGIN == 'enabled') {
	// Generate username field name
	$username_fieldname = 'username_';
	$password_fieldname = 'password_';
	$salt = "abchefghjkmnpqrstuvwxyz0123456789";
	srand((double)microtime()*1000000);
	$i = 0;
	while ($i <= 7) {
		$num = rand() % 33;
		$tmp = substr($salt, $num, 1);
		$username_fieldname = $username_fieldname . $tmp;
		$password_fieldname = $password_fieldname . $tmp;
		$i++;
	}
} else {
	$username_fieldname = 'username';
	$password_fieldname = 'password';
}

$admin = new admin('Start', '', false, false);
$ThemeUrl = WB_URL.$admin->correct_theme_source('warning.html');
// Setup template object, parse vars to it, then parse it
$ThemePath = realpath(WB_PATH.$admin->correct_theme_source('login.htt'));

$thisApp = new Login( array(
						'MAX_ATTEMPS' => "3",
						'WARNING_URL' => $ThemeUrl.'/warning.html',
						'USERNAME_FIELDNAME' => $username_fieldname,
						'PASSWORD_FIELDNAME' => $password_fieldname,
						'REMEMBER_ME_OPTION' => SMART_LOGIN,
						'MIN_USERNAME_LEN' => "2",
						'MIN_PASSWORD_LEN' => "2",
						'MAX_USERNAME_LEN' => "30",
						'MAX_PASSWORD_LEN' => "30",
						'LOGIN_URL' => ADMIN_URL."/login/index.php",
						'DEFAULT_URL' => ADMIN_URL."/start/index.php",
						'TEMPLATE_DIR' => $ThemePath,
						'TEMPLATE_FILE' => "login.htt",
						'FRONTEND' => false,
						'FORGOTTEN_DETAILS_APP' => ADMIN_URL."/login/forgot/index.php",
						'USERS_TABLE' => TABLE_PREFIX."users",
						'GROUPS_TABLE' => TABLE_PREFIX."groups",
				)
		);
