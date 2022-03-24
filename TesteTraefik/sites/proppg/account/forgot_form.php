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
 * @version         $Id: forgot_form.php 1277 2010-01-28 05:18:18Z Luisehahne $
 * @filesource		$HeadURL: http://svn.websitebaker2.org/branches/2.8.x/wb/account/forgot_form.php $
 * @lastmodified    $Date: 2010-01-28 06:18:18 +0100 (Do, 28. Jan 2010) $
 *
 */

if(!defined('WB_URL')) {
	header('Location: ../pages/index.php');
	exit(0);
}

// Create new database object
$database = new database();

// Check if the user has already submitted the form, otherwise show it
if(isset($_POST['email']) && $_POST['email'] != "" &&
    preg_match("/([0-9a-zA-Z]+[-._+&])*[0-9a-zA-Z]+@([-0-9a-zA-Z]+[.])+[a-zA-Z]{2,6}/i", $_POST['email'])) {
	$email = strip_tags($_POST['email']);
	
	// Check if the email exists in the database
	$query = "SELECT user_id,username,display_name,email,last_reset,password FROM ".TABLE_PREFIX."users WHERE email = '".$wb->add_slashes($_POST['email'])."'";
	$results = $database->query($query);
	if($results->numRows() > 0) {
	
		// Get the id, username, email, and last_reset from the above db query
		$results_array = $results->fetchRow();
		
		// Check if the password has been reset in the last 2 hours
		$last_reset = $results_array['last_reset'];
		$time_diff = time()-$last_reset; // Time since last reset in seconds
		$time_diff = $time_diff/60/60; // Time since last reset in hours
		if($time_diff < 2) {
			
			// Tell the user that their password cannot be reset more than once per hour
			$message = $MESSAGE['FORGOT_PASS']['ALREADY_RESET'];
			
		} else {
		
			$old_pass = $results_array['password'];

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
			$database->query("UPDATE ".TABLE_PREFIX."users SET password = '".md5($new_pass)."', last_reset = '".time()."' WHERE user_id = '".$results_array['user_id']."'");
			
			if($database->is_error()) {
				// Error updating database
				$message = $database->get_error();
			} else {
				// Setup email to send
				$mail_to = $email;
				$mail_subject = $MESSAGE['SIGNUP2']['SUBJECT_LOGIN_INFO'];

				// Replace placeholders from language variable with values
				$search = array('{LOGIN_DISPLAY_NAME}', '{LOGIN_WEBSITE_TITLE}', '{LOGIN_NAME}', '{LOGIN_PASSWORD}');
				$replace = array($results_array['display_name'], WEBSITE_TITLE, $results_array['username'], $new_pass); 
				$mail_message = str_replace($search, $replace, $MESSAGE['SIGNUP2']['BODY_LOGIN_INFO']);

				// Try sending the email
				if($wb->mail(SERVER_EMAIL,$mail_to,$mail_subject,$mail_message)) { 
					$message = $MESSAGE['FORGOT_PASS']['PASSWORD_RESET'];
					$display_form = false;
				} else {
					$database->query("UPDATE ".TABLE_PREFIX."users SET password = '".$old_pass."' WHERE user_id = '".$results_array['user_id']."'");
					$message = $MESSAGE['FORGOT_PASS']['CANNOT_EMAIL'];
				}
			}
		
		}

	} else {
		// Email doesn't exist, so tell the user
		$message = $MESSAGE['FORGOT_PASS']['EMAIL_NOT_FOUND'];
	}
	
} else {
	$email = '';
}

if(!isset($message)) {
	$message = $MESSAGE['FORGOT_PASS']['NO_DATA'];
	$message_color = '000000';
} else {
	$message_color = 'FF0000';
}
	
?>
<h1 style="text-align: center;"><?php echo $MENU['FORGOT']; ?></h1>

<form name="forgot_pass" action="<?php echo WB_URL.'/account/forgot.php'; ?>" method="post">
	<input type="hidden" name="url" value="{URL}" />
		<table cellpadding="5" cellspacing="0" border="0" align="center" width="500">
		<tr>
			<td height="40" align="center" style="color: #<?php echo $message_color; ?>;" colspan="2">
			<?php echo $message; ?>
			</td>
		</tr>
		<?php if(!isset($display_form) OR $display_form != false) { ?>
		<tr>
			<td height="10" colspan="2"></td>
		</tr>
		<tr>
			<td width="165" height="30" align="right"><?php echo $TEXT['EMAIL']; ?>:</td>
			<td><input type="text" maxlength="255" name="email" value="<?php echo $email; ?>" style="width: 180px;" /></td>
			<td><input type="submit" name="submit" value="<?php echo $TEXT['SEND_DETAILS']; ?>" style="width: 180px; font-size: 10px; color: #003366; border: 1px solid #336699; background-color: #DDDDDD; padding: 3px; text-transform: uppercase;" /></td>
		</tr>
<!--
		<tr>
			<td>&nbsp;</td>
		</tr>
		<tr style="display: {DISPLAY_FORM}">
			<td height="10" colspan="2"></td>
		</tr>
-->
		<?php } ?>
		</table>
</form>