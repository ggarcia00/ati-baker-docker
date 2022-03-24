<?php
/**
 *
 * @category        admin
 * @package         login
 * @author          WebsiteBaker Project
 * @copyright       2004-2009, Ryan Djurovich
 * @copyright       2009-2010, Website Baker Org. e.V.
 * @link			http://www.websitebaker2.org/
 * @license         http://www.gnu.org/licenses/gpl.html
 * @platform        WebsiteBaker 2.8.x
 * @requirements    PHP 4.3.4 and higher
 * @version         $Id: index.php 1281 2010-01-30 04:57:58Z Luisehahne $
 * @filesource		$HeadURL: http://svn.websitebaker2.org/branches/2.8.x/wb/admin/login/index.php $
 * @lastmodified    $Date: 2010-01-30 05:57:58 +0100 (Sa, 30. Jan 2010) $
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

$thisApp = new Login(
							array(
									'MAX_ATTEMPS' => "3",
									'WARNING_URL' => THEME_URL."/templates/warning.html",
									'USERNAME_FIELDNAME' => $username_fieldname,
									'PASSWORD_FIELDNAME' => $password_fieldname,
									'REMEMBER_ME_OPTION' => SMART_LOGIN,
									'MIN_USERNAME_LEN' => "2",
									'MIN_PASSWORD_LEN' => "2",
									'MAX_USERNAME_LEN' => "30",
									'MAX_PASSWORD_LEN' => "30",
									'LOGIN_URL' => ADMIN_URL."/login/index.php",
									'DEFAULT_URL' => ADMIN_URL."/start/index.php",
									'TEMPLATE_DIR' => THEME_PATH."/templates",
									'TEMPLATE_FILE' => "login.htt",
									'FRONTEND' => false,
									'FORGOTTEN_DETAILS_APP' => ADMIN_URL."/login/forgot/index.php",
									'USERS_TABLE' => TABLE_PREFIX."users",
									'GROUPS_TABLE' => TABLE_PREFIX."groups",
							)
					);

?>