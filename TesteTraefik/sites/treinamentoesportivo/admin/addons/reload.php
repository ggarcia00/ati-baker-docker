<?php
/**
 *
 * @category        admin
 * @package         addons
 * @author          WebsiteBaker Project
 * @copyright       2004-2009, Ryan Djurovich
 * @copyright       2009-2010, Website Baker Org. e.V.
 * @link			http://www.websitebaker2.org/
 * @license         http://www.gnu.org/licenses/gpl.html
 * @platform        WebsiteBaker 2.8.x
 * @requirements    PHP 4.3.4 and higher
 * @version         $Id: reload.php 1281 2010-01-30 04:57:58Z Luisehahne $
 * @filesource		$HeadURL:  $
 * @lastmodified    $Date:  $
 *
 */

/**
 * check if there is anything to do
 */
$post_check = array('reload_modules', 'reload_templates', 'reload_languages');
foreach ($post_check as $index => $key) {
	if (!isset($_POST[$key])) unset($post_check[$index]);
}
if (count($post_check) == 0) die(header('Location: index.php?advanced'));

/**
 * check if user has permissions to access this file
 */
// include WB configuration file and WB admin class
require_once('../../config.php');
require_once('../../framework/class.admin.php');

// check user permissions for admintools (redirect users with wrong permissions)
$admin = new admin('Admintools', 'admintools', false, false);
if ($admin->get_permission('admintools') == false) die(header('Location: ../../index.php'));

// check if the referer URL if available
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 
	(isset($HTTP_SERVER_VARS['HTTP_REFERER']) ? $HTTP_SERVER_VARS['HTTP_REFERER'] : '');

// if referer is set, check if script was invoked from "admin/modules/index.php"
$required_url = ADMIN_URL . '/addons/index.php';
if ($referer != '' && (!(strpos($referer, $required_url) !== false || strpos($referer, $required_url) !== false))) 
	die(header('Location: ../../index.php'));

// include WB functions file
require_once(WB_PATH . '/framework/functions.php');

// load WB language file
require_once(WB_PATH . '/languages/' . LANGUAGE .'.php');

// create Admin object with admin header
$admin = new admin('Addons', '', true, false);
$js_back = ADMIN_URL . '/addons/index.php?advanced';

/**
 * Reload all specified Addons
 */
$msg = array();
$table = TABLE_PREFIX . 'addons';

foreach ($post_check as $key) {
	switch ($key) {
		case 'reload_modules':
			if ($handle = opendir(WB_PATH . '/modules')) {
				// delete modules from database
				$sql = "DELETE FROM `$table` WHERE `type` = 'module'";
				$database->query($sql);

				// loop over all modules
				while(false !== ($file = readdir($handle))) {
					if ($file != '' && substr($file, 0, 1) != '.' && $file != 'admin.php' && $file != 'index.php') {
						load_module(WB_PATH . '/modules/' . $file);
					}
				}
				closedir($handle);
				// add success message
				$msg[] = $MESSAGE['ADDON']['MODULES_RELOADED'];

			} else {
				// provide error message and stop
				$admin->print_error($MESSAGE['ADDON']['ERROR_RELOAD'], $js_back);
			}
			break;
			
		case 'reload_templates':
			if ($handle = opendir(WB_PATH . '/templates')) {
				// delete templates from database
				$sql = "DELETE FROM `$table` WHERE `type` = 'template'";
				$database->query($sql);

				// loop over all templates
				while(false !== ($file = readdir($handle))) {
					if($file != '' AND substr($file, 0, 1) != '.' AND $file != 'index.php') {
						load_template(WB_PATH . '/templates/' . $file);
					}
				}
				closedir($handle);
				// add success message
				$msg[] = $MESSAGE['ADDON']['TEMPLATES_RELOADED'];

			} else {
				// provide error message and stop
				$admin->print_error($MESSAGE['ADDON']['ERROR_RELOAD'], $js_back);
			}
			break;

		case 'reload_languages':
			if ($handle = opendir(WB_PATH . '/languages/')) {
				// delete languages from database
				$sql = "DELETE FROM `$table` WHERE `type` = 'language'";
				$database->query($sql);
			
				// loop over all languages
				while(false !== ($file = readdir($handle))) {
					if ($file != '' && substr($file, 0, 1) != '.' && $file != 'index.php') {
						load_language(WB_PATH . '/languages/' . $file);
					}
				}
				closedir($handle);
				// add success message
				$msg[] = $MESSAGE['ADDON']['LANGUAGES_RELOADED'];
				
			} else {
				// provide error message and stop
				$admin->print_error($MESSAGE['ADDON']['ERROR_RELOAD'], $js_back);
			}
			break;
	}
}

// output success message
$admin->print_success(implode($msg, '<br />'), $js_back);
$admin->print_footer();

?>