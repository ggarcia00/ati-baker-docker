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
 * @version         $Id: email.php 1277 2010-01-28 05:18:18Z Luisehahne $
 * @filesource		$HeadURL: http://svn.websitebaker2.org/branches/2.8.x/wb/account/email.php $
 * @lastmodified    $Date: 2010-01-28 06:18:18 +0100 (Do, 28. Jan 2010) $
 *
 */

if(!defined('WB_URL')) {
	header('Location: ../index.php');
	exit(0);
}

// Get the values entered
$current_password = $wb->get_post('current_password');
$email = $wb->get_post('email');

// Create a javascript back link
$js_back = "javascript: history.go(-1);";

// Get existing password
$database = new database();
$query = "SELECT user_id FROM ".TABLE_PREFIX."users WHERE user_id = '".$wb->get_user_id()."' AND password = '".md5($current_password)."'";
$results = $database->query($query);

// Validate values
if($results->numRows() == 0) {
	$wb->print_error($MESSAGE['PREFERENCES']['CURRENT_PASSWORD_INCORRECT'], $js_back, false);
}
// Validate values
if(!$wb->validate_email($email)) {
	$wb->print_error($MESSAGE['USERS']['INVALID_EMAIL'], $js_back, false);
}

$email = $wb->add_slashes($email);

// Update the database
$database = new database();
$query = "UPDATE ".TABLE_PREFIX."users SET email = '$email' WHERE user_id = '".$wb->get_user_id()."' AND password = '".md5($current_password)."'";
$database->query($query);
if($database->is_error()) {
	$wb->print_error($database->get_error,'index.php', false);
} else {
	$wb->print_success($MESSAGE['PREFERENCES']['EMAIL_UPDATED'], WB_URL.'/account/preferences.php');
	$_SESSION['EMAIL'] = $email;
}

?>