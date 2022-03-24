<?php
/**
 *
 * @category        admin
 * @package         settings
 * @author          WebsiteBaker Project
 * @copyright       2004-2009, Ryan Djurovich
 * @copyright       2009-2010, Website Baker Org. e.V.
 * @link			http://www.websitebaker2.org/
 * @license         http://www.gnu.org/licenses/gpl.html
 * @platform        WebsiteBaker 2.8.x
 * @requirements    PHP 4.3.4 and higher
 * @version         $Id: save.php 1281 2010-01-30 04:57:58Z Luisehahne $
 * @filesource		$HeadURL: http://svn.websitebaker2.org/branches/2.8.x/wb/admin/settings/save.php $
 * @lastmodified    $Date: 2010-01-30 05:57:58 +0100 (Sa, 30. Jan 2010) $
 *
 */

// prevent this file from being accessed directly in the browser (would set all entries in DB settings table to '')
if(!isset($_POST['default_language']) || $_POST['default_language'] == '') die(header('Location: index.php'));

// Find out if the user was view advanced options or not
if($_POST['advanced'] == 'yes' ? $advanced = '?advanced=yes' : $advanced = '');

// Print admin header
require('../../config.php');
require_once(WB_PATH.'/framework/class.admin.php');
if($advanced == '') {
	$admin = new admin('Settings', 'settings_basic');
	$_POST['database_password'] = DB_PASSWORD;
} else {
	$admin = new admin('Settings', 'settings_advanced');
}

// Create a javascript back link
$js_back = "javascript: history.go(-1);";

// Ensure that the specified default email is formally valid
if(isset($_POST['server_email']))
{
	$_POST['server_email'] = strip_tags($_POST['server_email']);
	if(!eregi("^([0-9a-zA-Z]+[-._+&])*[0-9a-zA-Z]+@([-0-9a-zA-Z]+[.])+[a-zA-Z]{2,6}$", $_POST['server_email'])) {
		$admin->print_error($MESSAGE['USERS']['INVALID_EMAIL'].
			'<br /><strong>Email: '.htmlentities($_POST['server_email']).'</strong>', $js_back);
	}
}

// Work-out file mode
if($advanced == '')
{
	// Check if should be set to 777 or left alone
	if(isset($_POST['world_writeable']) AND $_POST['world_writeable'] == 'true')
    {
		$file_mode = '0777';
		$dir_mode = '0777';
	} else {
		$file_mode = STRING_FILE_MODE;
		$dir_mode = STRING_DIR_MODE;
	}
} else {
	// Work-out the octal value for file mode
	$u = 0;
	if(isset($_POST['file_u_r']) AND $_POST['file_u_r'] == 'true') {
		$u = $u+4;
	}
	if(isset($_POST['file_u_w']) AND $_POST['file_u_w'] == 'true') {
		$u = $u+2;
	}
	if(isset($_POST['file_u_e']) AND $_POST['file_u_e'] == 'true') {
		$u = $u+1;
	}
	$g = 0;
	if(isset($_POST['file_g_r']) AND $_POST['file_g_r'] == 'true') {
		$g = $g+4;
	}
	if(isset($_POST['file_g_w']) AND $_POST['file_g_w'] == 'true') {
		$g = $g+2;
	}
	if(isset($_POST['file_g_e']) AND $_POST['file_g_e'] == 'true') {
		$g = $g+1;
	}
	$o = 0;
	if(isset($_POST['file_o_r']) AND $_POST['file_o_r'] == 'true') {
		$o = $o+4;
	}
	if(isset($_POST['file_o_w']) AND $_POST['file_o_w'] == 'true') {
		$o = $o+2;
	}
	if(isset($_POST['file_o_e']) AND $_POST['file_o_e'] == 'true') {
		$o = $o+1;
	}
	$file_mode = "0".$u.$g.$o;
	// Work-out the octal value for dir mode
	$u = 0;
	if(isset($_POST['dir_u_r']) AND $_POST['dir_u_r'] == 'true') {
		$u = $u+4;
	}
	if(isset($_POST['dir_u_w']) AND $_POST['dir_u_w'] == 'true') {
		$u = $u+2;
	}
	if(isset($_POST['dir_u_e']) AND $_POST['dir_u_e'] == 'true') {
		$u = $u+1;
	}
	$g = 0;
	if(isset($_POST['dir_g_r']) AND $_POST['dir_g_r'] == 'true') {
		$g = $g+4;
	}
	if(isset($_POST['dir_g_w']) AND $_POST['dir_g_w'] == 'true') {
		$g = $g+2;
	}
	if(isset($_POST['dir_g_e']) AND $_POST['dir_g_e'] == 'true') {
		$g = $g+1;
	}
	$o = 0;
	if(isset($_POST['dir_o_r']) AND $_POST['dir_o_r'] == 'true') {
		$o = $o+4;
	}
	if(isset($_POST['dir_o_w']) AND $_POST['dir_o_w'] == 'true') {
		$o = $o+2;
	}
	if(isset($_POST['dir_o_e']) AND $_POST['dir_o_e'] == 'true') {
		$o = $o+1;
	}
	$dir_mode = "0".$u.$g.$o;
}

// Create new database object
/*$database = new database(); */

// Query current settings in the db, then loop through them and update the db with the new value
$query = "SELECT name FROM ".TABLE_PREFIX."settings";
$results = $database->query($query);
while($setting = $results->fetchRow())
{
	$setting_name = $setting['name'];
	$value = $admin->get_post($setting_name);
	if ($setting_name!='wb_version')
    {
		$allow_tags_in_fields = array('website_header', 'website_footer','wbmailer_smtp_password');
		if(!in_array($setting_name, $allow_tags_in_fields)) {
			$value = strip_tags($value);
		}
		switch ($setting_name) {
			case 'default_timezone':
				$value=$value*60*60;
				break;
			case 'string_dir_mode':
				$value=$dir_mode;
				break;
			case 'string_file_mode':
				$value=$file_mode;
				break;
			case 'pages_directory':
				if(trim($value)=='/') $value='';
				break;
		}
		$value = $admin->add_slashes($value);
		$database->query("UPDATE ".TABLE_PREFIX."settings SET value = '$value' WHERE name = '$setting_name'");
	}
}

// Query current search settings in the db, then loop through them and update the db with the new value
$query = "SELECT name, value FROM ".TABLE_PREFIX."search WHERE extra = ''";
$results = $database->query($query);
while($search_setting = $results->fetchRow())
{
	$old_value = $search_setting['value'];
	$setting_name = $search_setting['name'];
	$post_name = 'search_'.$search_setting['name'];
    // hold old value if post is empty
    // check search template
    $value = ( ($admin->get_post($post_name) == '') AND ($setting_name != 'template') ) ? $old_value : $admin->get_post($post_name);

	$value = $admin->add_slashes($value);
	$database->query("UPDATE ".TABLE_PREFIX."search SET value = '$value' WHERE name = '$setting_name'");
}

// Check if there was an error updating the db
if($database->is_error()) {
	$admin->print_error($database->get_error, ADMIN_URL.'/settings/index.php'.$advanced);
	$admin->print_footer();
	exit();
}

$admin->print_success($MESSAGE['SETTINGS']['SAVED'], ADMIN_URL.'/settings/index.php'.$advanced);
$admin->print_footer();

?>