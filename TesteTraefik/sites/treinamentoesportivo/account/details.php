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
 * @version         $Id: details.php 1277 2010-01-28 05:18:18Z Luisehahne $
 * @filesource		$HeadURL: http://svn.websitebaker2.org/branches/2.8.x/wb/account/details.php $
 * @lastmodified    $Date: 2010-01-28 06:18:18 +0100 (Do, 28. Jan 2010) $
 *
 */

if(!defined('WB_URL')) {
	header('Location: ../pages/index.php');
	exit(0);
}

// Get entered values
$display_name = $wb->add_slashes(strip_tags($wb->get_post('display_name')));
$language = $wb->get_post_escaped('language');
$timezone = $wb->get_post_escaped('timezone')*60*60;
$date_format = $wb->get_post_escaped('date_format');
$time_format = $wb->get_post_escaped('time_format');

// Create a javascript back link
$js_back = "javascript: history.go(-1);";

// Update the database
$database = new database();
$query = "UPDATE ".TABLE_PREFIX."users SET display_name = '$display_name', language = '$language', timezone = '$timezone', date_format = '$date_format', time_format = '$time_format' WHERE user_id = '".$wb->get_user_id()."'";
$database->query($query);
if($database->is_error()) {
	$wb->print_error($database->get_error,'index.php',false);
} else {
	$wb->print_success($MESSAGE['PREFERENCES']['DETAILS_SAVED'], WB_URL.'/account/preferences.php');
	$_SESSION['DISPLAY_NAME'] = $display_name;
	$_SESSION['LANGUAGE'] = $language;
	// Update date format
	if($date_format != '') {
		$_SESSION['DATE_FORMAT'] = $date_format;
		if(isset($_SESSION['USE_DEFAULT_DATE_FORMAT'])) { unset($_SESSION['USE_DEFAULT_DATE_FORMAT']); }
	} else {
		$_SESSION['USE_DEFAULT_DATE_FORMAT'] = true;
		if(isset($_SESSION['DATE_FORMAT'])) { unset($_SESSION['DATE_FORMAT']); }
	}
	// Update time format
	if($time_format != '') {
		$_SESSION['TIME_FORMAT'] = $time_format;
		if(isset($_SESSION['USE_DEFAULT_TIME_FORMAT'])) { unset($_SESSION['USE_DEFAULT_TIME_FORMAT']); }
	} else {
		$_SESSION['USE_DEFAULT_TIME_FORMAT'] = true;
		if(isset($_SESSION['TIME_FORMAT'])) { unset($_SESSION['TIME_FORMAT']); }
	}
	// Update timezone
	if($timezone != '-72000') {
		$_SESSION['TIMEZONE'] = $timezone;
		if(isset($_SESSION['USE_DEFAULT_TIMEZONE'])) { unset($_SESSION['USE_DEFAULT_TIMEZONE']); }
	} else {
		$_SESSION['USE_DEFAULT_TIMEZONE'] = true;
		if(isset($_SESSION['TIMEZONE'])) { unset($_SESSION['TIMEZONE']); }
	}
}

?>