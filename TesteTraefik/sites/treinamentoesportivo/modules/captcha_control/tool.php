<?php

// $Id: tool.php 1179 2009-11-24 18:15:00Z Luisehahne $

/*

 Website Baker Project <http://www.websitebaker.org/>
 Copyright (C) 2004-2009, Ryan Djurovich

 Website Baker is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 Website Baker is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with Website Baker; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

*/

// direct access prevention
defined('WB_PATH') OR die(header('Location: ../index.php'));

// check if module language file exists for the language set by the user (e.g. DE, EN)
if(!file_exists(WB_PATH .'/modules/captcha_control/languages/'.LANGUAGE .'.php')) {
	// no module language file exists for the language set by the user, include default module language file EN.php
	require_once(WB_PATH .'/modules/captcha_control/languages/EN.php');
} else {
	// a module language file exists for the language defined by the user, load it
	require_once(WB_PATH .'/modules/captcha_control/languages/'.LANGUAGE .'.php');
}

$table = TABLE_PREFIX.'mod_captcha_control';

// check if data was submitted
if(isset($_POST['save_settings'])) {
	// get configuration settings
	$enabled_captcha = ($_POST['enabled_captcha'] == '1') ? '1' : '0';
	$enabled_asp = ($_POST['enabled_asp'] == '1') ? '1' : '0';
	$captcha_type = $admin->add_slashes($_POST['captcha_type']);
	
	// update database settings
	$database->query("UPDATE $table SET
		enabled_captcha = '$enabled_captcha',
		enabled_asp = '$enabled_asp',
		captcha_type = '$captcha_type'
	");

	// save text-captchas
	if($captcha_type == 'text') { // ct_text
		$text_qa=$admin->add_slashes($_POST['text_qa']);
		if(!preg_match('/### .*? ###/', $text_qa)) {
			$database->query("UPDATE $table SET ct_text = '$text_qa'");
		}
	}
	
	// check if there is a database error, otherwise say successful
	if($database->is_error()) {
		$admin->print_error($database->get_error(), $js_back);
	} else {
		$admin->print_success($MESSAGE['PAGES']['SAVED'], ADMIN_URL.'/admintools/tool.php?tool=captcha_control');
	}

} else {
	
	// include captcha-file
	require_once(WB_PATH .'/include/captcha/captcha.php');

	// load text-captchas
	$text_qa='';
	if($query = $database->query("SELECT ct_text FROM $table")) {
		$data = $query->fetchRow();
		$text_qa = $data['ct_text'];
	}
	if($text_qa == '')
		$text_qa = $MOD_CAPTCHA_CONTROL['CAPTCHA_TEXT_DESC'];

// script to load image
?>
<script type="text/javascript">
	var pics = new Array();

	pics["ttf_image"] = new Image();
	pics["ttf_image"].src = "<?php echo WB_URL.'/include/captcha/captchas/ttf_image.png'?>";

	pics["calc_image"] = new Image();
	pics["calc_image"].src = "<?php echo WB_URL.'/include/captcha/captchas/calc_image.png'?>";

	pics["calc_ttf_image"] = new Image();
	pics["calc_ttf_image"].src = "<?php echo WB_URL.'/include/captcha/captchas/calc_ttf_image.png'?>";

	pics["old_image"] = new Image();
	pics["old_image"].src = "<?php echo WB_URL.'/include/captcha/captchas/old_image.png'?>";
	
	pics["calc_text"] = new Image();
	pics["calc_text"].src = "<?php echo WB_URL.'/include/captcha/captchas/calc_text.png'?>";
	
	pics["text"] = new Image();
	pics["text"].src = "<?php echo WB_URL.'/include/captcha/captchas/text.png'?>";

	function load_captcha_image() {
		document.captcha_example.src = pics[document.store_settings.captcha_type.value].src;
		toggle_text_qa();
	}
	
	function toggle_text_qa() {
		if(document.store_settings.captcha_type.value == 'text' ) {
			document.getElementById('text_qa').style.display = '';
		} else {
			document.getElementById('text_qa').style.display = 'none';
		}
	}

</script>
<?php

	// connect to database and read out captcha settings
	if($query = $database->query("SELECT * FROM $table")) {
		$data = $query->fetchRow();
		$enabled_captcha = $data['enabled_captcha'];
		$enabled_asp = $data['enabled_asp'];
		$captcha_type = $data['captcha_type'];
	} else {
		// something went wrong, use dummy value
		$enabled_captcha = '1';
		$enabled_asp = '1';
		$captcha_type = 'calc_text';
	}
		
	// write out heading
	echo '<h2>' .$MOD_CAPTCHA_CONTROL['HEADING'] .'</h2>';

	// output the form with values from the database
	echo '<p>' .$MOD_CAPTCHA_CONTROL['HOWTO'] .'</p>';
?>
<form name="store_settings" action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
	<table width="98%" cellspacing="0" border="0" cellpadding="5px" class="row_a">
	<tr><td colspan="2"><strong><?php echo $MOD_CAPTCHA_CONTROL['CAPTCHA_CONF'];?>:</strong></td></tr>
	<tr>
		<td width="30%"><?php echo $MOD_CAPTCHA_CONTROL['CAPTCHA_TYPE'];?>:</td>
		<td>
		<select name="captcha_type" id="captcha_type" onchange="load_captcha_image()" style="width: 98%;">
			<?php foreach($useable_captchas AS $key=>$text) {
			echo "<option value=\"$key\" ".($captcha_type==$key ? ' selected="selected"' : '').">$text</option>";
			} ?>
		</select>
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td align="left" width="150px">
            <img alt="captcha_example" id="captcha_example" src="<?php echo WB_URL.'/include/captcha/captchas/'.$captcha_type.'.png'?>" />
        </td>
	</tr>
	<tr id="text_qa" style="display:<?php if($captcha_type=='text') echo ''; else echo 'none'; ;?>;">
		<td valign="top" class="setting_name"><?php echo $MOD_CAPTCHA_CONTROL['CAPTCHA_ENTER_TEXT'];?>:</td>
		<td class="setting_value" colspan="2">
			<textarea name="text_qa" cols="60" rows="10"><?php echo $text_qa; ?></textarea>
		</td>
	</tr>
	<tr>
		<td><?php echo $MOD_CAPTCHA_CONTROL['USE_SIGNUP_CAPTCHA'];?>:</td>
		<td>
			<input type="radio" <?php echo ($enabled_captcha=='1') ?'checked="checked"' :'';?>
				name="enabled_captcha" value="1" /><?php echo $MOD_CAPTCHA_CONTROL['ENABLED'];?>
			<input type="radio" <?php echo ($enabled_captcha=='0') ?'checked="checked"' :'';?>
				name="enabled_captcha" value="0" /><?php echo $MOD_CAPTCHA_CONTROL['DISABLED'];?>
		</td>
	</tr>
	<tr><td>&nbsp;</td><td style="font-size:smaller;"><?php echo $MOD_CAPTCHA_CONTROL['CAPTCHA_EXP'];?></td></tr>
	<tr><td colspan="2"><br /><strong><?php echo $MOD_CAPTCHA_CONTROL['ASP_CONF'];?>:</strong></td></tr>
	<tr>
		<td><?php echo $MOD_CAPTCHA_CONTROL['ASP_TEXT'];?>:</td>
		<td>
			<input type="radio" <?php echo ($enabled_asp=='1') ?'checked="checked"' :'';?>
				name="enabled_asp" value="1" /><?php echo $MOD_CAPTCHA_CONTROL['ENABLED'];?>
			<input type="radio" <?php echo ($enabled_asp=='0') ?'checked="checked"' :'';?>
				name="enabled_asp" value="0" /><?php echo $MOD_CAPTCHA_CONTROL['DISABLED'];?>
		</td>
	</tr>
	<tr>
        <td>&nbsp;</td>
        <td style="font-size:smaller;"><?php echo $MOD_CAPTCHA_CONTROL['ASP_EXP'];?></td>
    </tr>
	</table>
	<input type="submit" name="save_settings" style="margin-top:10px; width:140px;" value="<?php echo $TEXT['SAVE']; ?>" />
</form>
<?php
}

?>