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
 * @version         $Id: signup_form.php 1281 2010-01-30 04:57:58Z Luisehahne $
 * @filesource		$HeadURL: http://svn.websitebaker2.org/branches/2.8.x/wb/account/signup_form.php $
 * @lastmodified    $Date: 2010-01-30 05:57:58 +0100 (Sa, 30. Jan 2010) $
 *
 */

if(!defined('WB_URL')) {
	header('Location: ../index.php');
	exit(0);
}
require_once(WB_PATH.'/include/captcha/captcha.php');

?>

<h1>&nbsp;<?php echo $TEXT['SIGNUP']; ?></h1>

<form name="user" action="<?php echo WB_URL.'/account/signup.php'; ?>" method="post">

	<?php if(ENABLED_ASP) { // add some honeypot-fields
	?>
    <div style="display:none;">
	<input type="hidden" name="submitted_when" value="<?php $t=time(); echo $t; $_SESSION['submitted_when']=$t; ?>" />
	<p class="nixhier">
	email-address:
	<label for="email-address">Leave this field email-address blank:</label>
	<input id="email-address" name="email-address" size="60" value="" /><br />
	username (id):
	<label for="name">Leave this field name blank:</label>
	<input id="name" name="name" size="60" value="" /><br />
	Full Name:
	<label for="full_name">Leave this field full_name blank:</label>
	<input id="full_name" name="full_name" size="60" value="" /><br />
	</p>
	<?php }
	?>
    </div>
<table cellpadding="5" cellspacing="0" border="0" width="90%">
<tr>
	<td width="180"><?php echo $TEXT['USERNAME']; ?>:</td>
	<td class="value_input">
		<input type="text" name="username" maxlength="30" style="width:300px;"/>
	</td>
</tr>
<tr>
	<td><?php echo $TEXT['DISPLAY_NAME']; ?> (<?php echo $TEXT['FULL_NAME']; ?>):</td>
	<td class="value_input">
		<input type="text" name="display_name" maxlength="255" style="width:300px;" />
	</td>
</tr>
<tr>
	<td><?php echo $TEXT['EMAIL']; ?>:</td>
	<td class="value_input">
		<input type="text" name="email" maxlength="255" style="width:300px;"/>
	</td>
</tr>
<?php
// Captcha
if(ENABLED_CAPTCHA) {
	?><tr>
		<td class="field_title"><?php echo $TEXT['VERIFICATION']; ?>:</td>
		<td><?php call_captcha(); ?></td>
		</tr>
	<?php
}
?>
<tr>
	<td>&nbsp;</td>
	<td>
		<input type="submit" name="submit" value="<?php echo $TEXT['SIGNUP']; ?>" />
		<input type="reset" name="reset" value="<?php echo $TEXT['RESET']; ?>" />
	</td>
</tr>
</table>

</form>

<br />
&nbsp; 
