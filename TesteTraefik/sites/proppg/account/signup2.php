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
 * @version         $Id: signup2.php 1281 2010-01-30 04:57:58Z Luisehahne $
 * @filesource		$HeadURL: http://svn.websitebaker2.org/branches/2.8.x/wb/account/signup2.php $
 * @lastmodified    $Date: 2010-01-30 05:57:58 +0100 (Sa, 30. Jan 2010) $
 *
 */

if(!defined('WB_URL')) {
	header('Location: ../pages/index.php');
	exit(0);
}

require_once(WB_PATH.'/framework/class.wb.php');
$wb = new wb('Start', 'start', false, false);

// Create new database object
$database = new database();

// Get details entered
$groups_id = FRONTEND_SIGNUP;
$active = 1;
$username = strtolower(strip_tags($wb->get_post_escaped('username')));
$display_name = strip_tags($wb->get_post_escaped('display_name'));
$email = $wb->get_post('email');

// Create a javascript back link
$js_back = "javascript: history.go(-1);";

// Check values
if($groups_id == "") {
	$wb->print_error($MESSAGE['USERS']['NO_GROUP'], $js_back, false);
}
if(strlen($username) < 3) {
	$wb->print_error($MESSAGE['USERS']['USERNAME_TOO_SHORT'], $js_back, false);
}
if($email != "") {
	if($wb->validate_email($email) == false) {
		$wb->print_error($MESSAGE['USERS']['INVALID_EMAIL'], $js_back, false);
	}
} else {
	$wb->print_error($MESSAGE['SIGNUP']['NO_EMAIL'], $js_back, false);
}

$email = $wb->add_slashes($email);

// Captcha
if(ENABLED_CAPTCHA) {
	if(isset($_POST['captcha']) AND $_POST['captcha'] != ''){
		// Check for a mismatch
		if(!isset($_POST['captcha']) OR !isset($_SESSION['captcha']) OR $_POST['captcha'] != $_SESSION['captcha']) {
			$wb->print_error($MESSAGE['MOD_FORM']['INCORRECT_CAPTCHA'], $js_back, false);
		}
	} else {
		$wb->print_error($MESSAGE['MOD_FORM']['INCORRECT_CAPTCHA'], $js_back, false);
	}
}
if(isset($_SESSION['captcha'])) { unset($_SESSION['captcha']); }

// Generate a random password then update the database with it
$new_pass = '';
$salt = "abchefghjkmnpqrstuvwxyz0123456789";
srand((double)microtime()*1000000);
$i = 0;
while ($i <= 7) {
	$num = rand() % 33;
	$tmp = substr($salt, $num, 1);
	$new_pass = $new_pass . $tmp;
	$i++;
}
$md5_password = md5($new_pass);

// Check if username already exists
$results = $database->query("SELECT user_id FROM ".TABLE_PREFIX."users WHERE username = '$username'");
if($results->numRows() > 0) {
	$wb->print_error($MESSAGE['USERS']['USERNAME_TAKEN'], $js_back, false);
}

// Check if the email already exists
$results = $database->query("SELECT user_id FROM ".TABLE_PREFIX."users WHERE email = '".$wb->add_slashes($email)."'");
if($results->numRows() > 0) {
	if(isset($MESSAGE['USERS']['EMAIL_TAKEN'])) {
		$wb->print_error($MESSAGE['USERS']['EMAIL_TAKEN'], $js_back, false);
	} else {
		$wb->print_error($MESSAGE['USERS']['INVALID_EMAIL'], $js_back, false);
	}
}

// MD5 supplied password
$md5_password = md5($new_pass);

// Inser the user into the database
$query = "INSERT INTO ".TABLE_PREFIX."users (group_id,groups_id,active,username,password,display_name,email) VALUES ('$groups_id', '$groups_id', '$active', '$username','$md5_password','$display_name','$email')";
$database->query($query);

if($database->is_error()) {
	// Error updating database
	$message = $database->get_error();
} else {
	// Setup email to send
	$mail_to = $email;
	$mail_subject = $MESSAGE['SIGNUP2']['SUBJECT_LOGIN_INFO'];

	// Replace placeholders from language variable with values
	$search = array('{LOGIN_DISPLAY_NAME}', '{LOGIN_WEBSITE_TITLE}', '{LOGIN_NAME}', '{LOGIN_PASSWORD}');
	$replace = array($display_name, WEBSITE_TITLE, $username, $new_pass); 
	$mail_message = str_replace($search, $replace, $MESSAGE['SIGNUP2']['BODY_LOGIN_INFO']);

	// Try sending the email
	if($wb->mail(SERVER_EMAIL,$mail_to,$mail_subject,$mail_message)) { 
		$display_form = false;
		$wb->print_success($MESSAGE['FORGOT_PASS']['PASSWORD_RESET'], WB_URL.'/account/login.php');
	} else {
		$database->query("DELETE FROM ".TABLE_PREFIX."users WHERE username = '$username'");
		$wb->print_error($MESSAGE['FORGOT_PASS']['CANNOT_EMAIL'], $js_back, false);
	}
}

?>
