<?php
/**
 *
 * @category        frontend
 * @package         account
 * @author          WebsiteBaker Project
 * @copyright       2004-2009, Ryan Djurovich
 * @copyright       2009-2010, Website Baker Org. e.V.
 * @link			http://www.websitebaker2.org/
 * @license         http://www.gnu.org/licenses/gpl.html
 * @platform        WebsiteBaker 2.8.x
 * @requirements    PHP 4.3.4 and higher
 * @version         $Id: login.php 1277 2010-01-28 05:18:18Z Luisehahne $
 * @filesource		$HeadURL: http://svn.websitebaker2.org/branches/2.8.x/wb/account/login.php $
 * @lastmodified    $Date: 2010-01-28 06:18:18 +0100 (Do, 28. Jan 2010) $
 *
 */

require_once("../config.php");

// Make sure the login is enabled
if(!FRONTEND_LOGIN) {
	if(INTRO_PAGE) {
		header('Location: '.WB_URL.PAGES_DIRECTORY.'/index.php');
		exit(0);
	} else {
		header('Location: '.WB_URL.'/index.php');
		exit(0);
	}
}

// Required page details
$page_id = 0;
$page_description = '';
$page_keywords = '';
define('PAGE_ID', 0);
define('ROOT_PARENT', 0);
define('PARENT', 0);
define('LEVEL', 0);
define('PAGE_TITLE', $TEXT['PLEASE_LOGIN']);
define('MENU_TITLE', $TEXT['PLEASE_LOGIN']);
define('VISIBILITY', 'public');
// Set the page content include file
define('PAGE_CONTENT', WB_PATH.'/account/login_form.php');

require_once(WB_PATH.'/framework/class.login.php');

// Create new login app
$redirect = strip_tags((isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] : '');
$thisApp = new Login(
							array(
									"MAX_ATTEMPS" => "3",
									"WARNING_URL" => THEME_URL."/templates/warning.html",
									"USERNAME_FIELDNAME" => 'username',
									"PASSWORD_FIELDNAME" => 'password',
									"REMEMBER_ME_OPTION" => SMART_LOGIN,
									"MIN_USERNAME_LEN" => "2",
									"MIN_PASSWORD_LEN" => "2",
									"MAX_USERNAME_LEN" => "30",
									"MAX_PASSWORD_LEN" => "30",
									"LOGIN_URL" => WB_URL."/account/login.php?redirect=" .$redirect,
									"DEFAULT_URL" => WB_URL.PAGES_DIRECTORY."/index.php",
									"TEMPLATE_DIR" => THEME_PATH."/templates",
									"TEMPLATE_FILE" => "login.htt",
									"FRONTEND" => true,
									"FORGOTTEN_DETAILS_APP" => WB_URL."/account/forgot.php",
									"USERS_TABLE" => TABLE_PREFIX."users",
									"GROUPS_TABLE" => TABLE_PREFIX."groups",
									"REDIRECT_URL" => $redirect
							)
					);

// Set extra outsider var
$globals[] = 'thisApp';

// Include the index (wrapper) file
require(WB_PATH.'/index.php');


?>