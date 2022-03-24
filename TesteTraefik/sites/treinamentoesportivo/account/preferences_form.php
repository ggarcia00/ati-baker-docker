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
 * @version         $Id: preferences_form.php 1281 2010-01-30 04:57:58Z Luisehahne $
 * @filesource		$HeadURL: http://svn.websitebaker2.org/branches/2.8.x/wb/account/preferences_form.php $
 * @lastmodified    $Date: 2010-01-30 05:57:58 +0100 (Sa, 30. Jan 2010) $
 *
 */

if(!defined('WB_URL')) die(header('Location: ../../index.php'));

?>

<h2>&nbsp;<?php print $HEADING['MY_SETTINGS']; ?></h2>

<form name="user" action="<?php print WB_URL.'/account/preferences.php'; ?>" method="post" style="margin-bottom: 5px;">
<input type="hidden" name="user_id" value="{USER_ID}" />

<table cellpadding="5" cellspacing="0" border="0" width="97%">
<tr>
	<td width="140"><?php print $TEXT['DISPLAY_NAME']; ?>:</td>
	<td class="value_input">
		<input type="text" name="display_name" style="width: 380px;" maxlength="255" value="<?php print $wb->get_display_name(); ?>" />
	</td>
</tr>
<tr>
	<td><?php print $TEXT['LANGUAGE']; ?>:</td>
	<td>
		<select name="language" style="width: 380px;">
		<?php
		/**
		 *
		 *	Getting the languages from the database. (addons)
		 *	It's a little bit corious, but the language-shortform is
		 *	storred in the field "directory" ...
		 *
		 */
		$query = "SELECT directory, name from ".TABLE_PREFIX."addons where type='language' order by 'name'";
		$result = $database->query($query);
		if ($result) {
			$options_html = "";
			while($data = $result->fetchRow()) {
				$sel = ($data['directory'] == LANGUAGE) ? " selected=\"selected\" " : "";
				$options_html .= "<option value=\"".$data['directory']."\" ".$sel.">".$data['name']." (".$data['directory'].")</option>\n";
			}
			echo $options_html;
		}
		?>
		</select>
	</td>
</tr>
<tr>
	<td><?php print $TEXT['TIMEZONE']; ?>:</td>
	<td>
		<select name="timezone" style="width: 380px;">
			<option value="-20"><?php print $TEXT['PLEASE_SELECT']; ?>...</option>
			<?php
				// Insert default timezone values
				require_once(ADMIN_PATH.'/interface/timezones.php');
				$test_time = $wb->get_timezone();
				$options_html = "";
				foreach($TIMEZONES as $hour_offset => $title) {
					$sel = ($test_time == $hour_offset*60*60) ? " selected=\"selected\" " : ""; 
					$options_html .= "<option value=\"".$hour_offset."\" ".$sel.">".$title."</option>\n";
				}
				print $options_html;
?>

		</select>
	</td>
</tr>
<tr>
	<td><?php print $TEXT['DATE_FORMAT']; ?>:</td>
	<td>
		<select name="date_format" style="width: 98%;">
			<option value=""><?php print $TEXT['PLEASE_SELECT']; ?>...</option>
			<?php
			// Insert date format list
			$user_time = true;
			require_once(ADMIN_PATH.'/interface/date_formats.php');
			foreach($DATE_FORMATS AS $format => $title) {
				$format = str_replace('|', ' ', $format); // Add's white-spaces (not able to be stored in array key)
				if($format != 'system_default') {
					$value = $format;
				} else {
					$value = '';
				}
				if(DATE_FORMAT == $format AND !isset($_SESSION['USE_DEFAULT_DATE_FORMAT'])) {
					$selected = ' selected="selected"';
				} elseif($format == 'system_default' AND isset($_SESSION['USE_DEFAULT_DATE_FORMAT'])) {
					$selected = ' selected="selected"';
				} else {
					$selected = '';
				}
				print '<option value="'.$value.'"'.$selected.'>'.$title.'</option>'."\n";
			}
			?>
		</select>
	</td>
</tr>
<tr>
	<td><?php print $TEXT['TIME_FORMAT']; ?>:</td>
	<td>
		<select name="time_format" style="width: 98%;">
			<option value=""><?php print $TEXT['PLEASE_SELECT']; ?>...</option>
			<?php
			// Insert time format list
			$user_time = true;
			require_once(ADMIN_PATH.'/interface/time_formats.php');
			foreach($TIME_FORMATS AS $format => $title)
            {
				$format = str_replace('|', ' ', $format); // Add's white-spaces (not able to be stored in array key)
                $value = ($format != 'system_default') ? $format : '';

                $selected = ((TIME_FORMAT == $format AND ! isset($_SESSION['USE_DEFAULT_TIME_FORMAT']))
                    OR ($format == 'system_default' AND isset($_SESSION['USE_DEFAULT_TIME_FORMAT'])))
                	? ' selected="selected"' : '';

				print '<option value="'.$value.'"'.$selected.'>'.$title.'</option>';
			}
			?>
		</select>
	</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td>
		<input type="submit" name="submit" value="<?php print $TEXT['SAVE']; ?>" />
		<input type="reset" name="reset" value="<?php print $TEXT['RESET']; ?>" />
	</td>
</tr>
</table>

</form>

<h2>&nbsp;<?php print $HEADING['MY_EMAIL']; ?></h2>

<form name="email" action="<?php print WB_URL.'/account/preferences.php'; ?>" method="post" style="margin-bottom: 5px;">
<input type="hidden" name="user_id" value="{USER_ID}" />

<table cellpadding="5" cellspacing="0" border="0" width="97%">
<tr>
	<td width="140"><?php print $TEXT['CURRENT_PASSWORD']; ?>:</td>
	<td>
		<input type="password" name="current_password" style="width: 380px;" />
	</td>
</tr>
<tr>
	<td><?php print $TEXT['EMAIL']; ?>:</td>
	<td class="value_input">
		<input type="text" name="email" style="width: 380px;" maxlength="255" value="<?php print $wb->get_email(); ?>" />
	</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td>
		<input type="submit" name="submit" value="<?php print $TEXT['SAVE']; ?>" />
		<input type="reset" name="reset" value="<?php print $TEXT['RESET']; ?>" />
	</td>
</tr>
</table>

</form>


<h2>&nbsp;<?php print $HEADING['MY_PASSWORD']; ?></h2>

<form name="user" action="<?php print WB_URL.'/account/preferences.php'; ?>" method="post">
<input type="hidden" name="user_id" value="{USER_ID}" />

<table cellpadding="5" cellspacing="0" border="0" width="97%">
<tr>
	<td width="140"><?php print $TEXT['CURRENT_PASSWORD']; ?>:</td>
	<td>
		<input type="password" name="current_password" style="width: 380px;" />
	</td>
</tr>
<tr>
	<td><?php print $TEXT['NEW_PASSWORD']; ?>:</td>
	<td>
		<input type="password" name="new_password" style="width: 380px;" />
	</td>
</tr>
<tr>
	<td><?php print $TEXT['RETYPE_NEW_PASSWORD']; ?>:</td>
	<td>
		<input type="password" name="new_password2" style="width: 380px;" />
	</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td>
		<input type="submit" name="submit" value="<?php print $TEXT['SAVE']; ?>" />
		<input type="reset" name="reset" value="<?php print $TEXT['RESET']; ?>" />
	</td>
</tr>
</table>

</form>