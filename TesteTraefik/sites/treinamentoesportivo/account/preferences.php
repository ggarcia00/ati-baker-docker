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
 * @version         $Id: preferences.php 1277 2010-01-28 05:18:18Z Luisehahne $
 * @filesource		$HeadURL: http://svn.websitebaker2.org/branches/2.8.x/wb/account/preferences.php $
 * @lastmodified    $Date: 2010-01-28 06:18:18 +0100 (Do, 28. Jan 2010) $
 *
 */

require_once('../config.php');

if(!FRONTEND_LOGIN) {
	if(INTRO_PAGE) {
		header('Location: '.WB_URL.PAGES_DIRECTORY.'/index.php');
		exit(0);
	} else {
		header('Location: '.WB_URL.'/index.php');
		exit(0);
	}
}

require_once(WB_PATH.'/framework/class.wb.php');
$wb_inst = new wb();
if ($wb_inst->is_authenticated()==false) {
	header('Location: '.WB_URL.'/account/login.php');
	exit(0);
}

// Required page details
$page_id = 0;
$page_description = '';
$page_keywords = '';
define('PAGE_ID', 0);
define('ROOT_PARENT', 0);
define('PARENT', 0);
define('LEVEL', 0);
define('PAGE_TITLE', $MENU['PREFERENCES']);
define('MENU_TITLE', $MENU['PREFERENCES']);
define('MODULE', '');
define('VISIBILITY', 'public');

// Set the page content include file
if(isset($_POST['current_password']) AND isset($_POST['new_password'])) {
	define('PAGE_CONTENT', WB_PATH.'/account/password.php');
} elseif(isset($_POST['current_password']) AND isset($_POST['email'])) {
	define('PAGE_CONTENT', WB_PATH.'/account/email.php');
} elseif(isset($_POST['display_name'])) {
	define('PAGE_CONTENT', WB_PATH.'/account/details.php');
} else {
	define('PAGE_CONTENT', WB_PATH.'/account/preferences_form.php');
}

// Include the index (wrapper) file
require(WB_PATH.'/index.php');

?>