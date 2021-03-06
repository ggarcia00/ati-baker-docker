<?php
/**
 *
 * @category        backend
 * @package         install
 * @author          WebsiteBaker Project
 * @copyright       2009-2012, WebsiteBaker Org. e.V.
 * @link			http://www.websitebaker2.org/
 * @license         http://www.gnu.org/licenses/gpl.html
 * @platform        WebsiteBaker 2.8.x
 * @requirements    PHP 5.2.2 and higher
 * @version      	$Id: index.php 1609 2012-02-09 22:51:44Z Luisehahne $
 * @filesource		$HeadURL: svn://isteam.dynxs.de/wb_svn/wb280/tags/2.8.3/wb/install/index.php $
 * @lastmodified    $Date: 2012-02-09 23:51:44 +0100 (Do, 09. Feb 2012) $
 *
 */

// Start a session
if(!defined('SESSION_STARTED')) {
	session_name('wb_session_id');
	session_start();
	define('SESSION_STARTED', true);
}

$mod_path = dirname(str_replace('\\', '/', __FILE__));
$doc_root = rtrim(realpath($_SERVER['DOCUMENT_ROOT']),'/');
$mod_name = basename($mod_path);
$wb_path = dirname(dirname(realpath( __FILE__)));
$wb_root = str_replace(realpath($doc_root),'',$wb_path);

// Function to highlight input fields which contain wrong/missing data
function field_error($field_name='') {
	if(!defined('SESSION_STARTED') || $field_name == '') return;
	if(isset($_SESSION['ERROR_FIELD']) && $_SESSION['ERROR_FIELD'] == $field_name) {
		return ' class="wrong"';
	}
}

$installFlag = true;
// Check if the page has been reloaded
if(!isset($_GET['sessions_checked']) OR $_GET['sessions_checked'] != 'true') {
	// Set session variable
	$_SESSION['session_support'] = '<font class="good">Enabled</font>';
	// Reload page
	header('Location: index.php?sessions_checked=true');
	exit(0);
} else {
	// Check if session variable has been saved after reload
	if(isset($_SESSION['session_support'])) {
		$session_support = $_SESSION['session_support'];
	} else {
		$installFlag = false;
		$session_support = '<font class="bad">Disabled</font>';
	}
}
// Check if AddDefaultCharset is set
$e_adc=false;
$sapi=php_sapi_name();
if(strpos($sapi, 'apache')!==FALSE || strpos($sapi, 'nsapi')!==FALSE) {
	flush();
	$apache_rheaders=apache_response_headers();
	foreach($apache_rheaders AS $h) {
		if(strpos($h, 'html; charset')!==FALSE) {
			preg_match('/charset\s*=\s*([a-zA-Z0-9- _]+)/', $h, $match);
			$apache_charset=$match[1];
			$e_adc=$apache_charset;
		}
	}
}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>WebsiteBaker Installation Wizard</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<link href="stylesheet.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript">

function confirm_link(message, url) {
	if(confirm(message)) location.href = url;
}
function change_os(type) {
	if(type == 'linux') {
		document.getElementById('operating_system_linux').checked = true;
		document.getElementById('operating_system_windows').checked = false;
		document.getElementById('file_perms_box').style.display = 'none';
	} else if(type == 'windows') {
		document.getElementById('operating_system_linux').checked = false;
		document.getElementById('operating_system_windows').checked = true;
		document.getElementById('file_perms_box').style.display = 'none';
	}
}
</script>
</head>
<body>
<div class="body">
<table summary="" cellpadding="0" cellspacing="0">
<tr style="background: #a9c9ea;">
	<td valign="top">
		<img src="../templates/wb_theme/images/logo.png" alt="Logo" />
	</td>
	<td>
		<h1 style="border:none; margin-top:1em;font-size:150%;">Installation Wizard</h1>
	</td>
</tr>
</table>

<form name="website_baker_installation_wizard" action="save.php" method="post">
<input type="hidden" name="url" value="" />
<input type="hidden" name="username_fieldname" value="admin_username" />
<input type="hidden" name="password_fieldname" value="admin_password" />
<input type="hidden" name="remember" id="remember" value="true" />

		<div style="padding: 5px; text-align: center; font-weight: bold;">
			Welcome to the WebsiteBaker Installation Wizard.
		</div>
		<?php
		if(isset($_SESSION['message']) AND $_SESSION['message'] != '') {
			?><div  style="width: 700px; padding: 10px; margin-bottom: 5px; border: 1px solid #FF0000; background-color: #FFDBDB;"><b>Error:</b> <?php echo $_SESSION['message']; ?></div><?php
		}
		?>
		<table summary="" cellpadding="0" cellspacing="0" border="0">
		<tr>
			<td colspan="6" class="step-row"><h1 class="step-row">Step 1</h1>&nbsp;Please check the following requirements are met before continuing...</td>
		</tr>
		<?php if($session_support != '<font class="good">Enabled</font>') { ?>
		<tr>
			<td colspan="6" class="error">Please note: PHP Session Support may appear disabled if your browser does not support cookies.</td>
		</tr>
		<?php } ?>
		<tr>
			<td style="color: #666666;">PHP Version > 5.2.1</td>
			<td>
				<?php
			   if (version_compare(PHP_VERSION, '5.2.1', '>'))
			   {
					?><font class="good">Yes</font><?php
				} else {
					$installFlag = false;
					?><font class="bad">No</font><?php
				}
				?>
			</td>
			<td style="color: #666666;">PHP Session Support</td>
			<td><?php echo $session_support; ?></td>
		</tr>
	<tr>
		<td style="color: #666666;">Server DefaultCharset</td>
			<td>
				<?php
					$chrval = (($e_adc != '') && (strtolower($e_adc) != 'utf-8') ? true : false);
					if($chrval == false) {
						?><font class="good">
						<?php echo (($e_adc=='') ? 'OK' : $e_adc) ?>
						</font>
						<?php
					} else {
						?><font class="bad"><?php echo $e_adc ?></font><?php
					}

				?>
			</td>
			<td style="color: #666666;">PHP Safe Mode</td>
			<td>
				<?php
				if(ini_get('safe_mode')=='' || strpos(strtolower(ini_get('safe_mode')), 'off')!==FALSE || ini_get('safe_mode')==0) {
					?><font class="good">Disabled</font><?php
				} else {
					$installFlag = false;
					?><font class="bad">Enabled</font><?php
				}
				?>
			</td>
		</tr>
		<?php if($chrval == true) {
		?>
		<tr>
			<td colspan="6" style="font-size: 10px;" class="bad">
<p class="warning">
<b>Please note:</b> Yor webserver is configured to deliver <b><?php echo $e_adc;?></b> charset only.<br />
To display national special characters (e.g.: &auml; &aacute;) in clear manner, switch off this preset please(or let it do by your hosting provider).<br />
In any case you can choose <b><?php echo $e_adc;?></b> in the settings of WebsiteBaker.<br />
But this solution does not guarranty a correct displaying of the content from all modules!
</p>
</td>
</tr>
<?php } ?>
</table>
<table summary="" cellpadding="3" cellspacing="0">
<tr>
	<td colspan="8" class="step-row"><h1 class="step-row">Step 2</h1>&nbsp;Please check the following files/folders are writeable before continuing...</td>
</tr>
<?php
	$config = '<font class="good">Writeable</font>';
	$config_content = "<?php\n";
	$configFile = '/config.php';
	if(!isset($_SESSION['config_rename']) )
	{
// cnfig.php or config.php.new
		if( (file_exists($wb_path.$configFile)==true))
		{
// next operation only if file is writeable
			if(is_writeable($wb_path.$configFile))
			{
// already installed? it's not empty
				if ( filesize($wb_path.$configFile) > 128)
				{
					$installFlag = false;
					$config = '<font class="bad">Not empty!!?</font>';
// try to open and to write
				} elseif( !$handle = fopen($wb_path.$configFile, 'w') )
				{
					$installFlag = false;
	                $config = '<font class="bad">Not Writeable</font>';
				} else {
					if (fwrite($handle, $config_content) === FALSE) {
						$installFlag = false;
		                $config = '<font class="bad">Not Writeable</font>';
					} else {
						$config = '<font class="good">Writeable</font>';
						$_SESSION['config_rename'] = true;
					}
					// Close file
					fclose($handle);
					}
			} else {
				$installFlag = false;
                $config = '<font class="bad">Not Writeable</font>';
			}
// it's config.php.new
		} elseif((file_exists($wb_path.'/config.php.new')==true))
		{
			$configFile = '/config.php.new';
			$installFlag = false;
			$config = '<font class="bad">Please rename</font>';
		} else
		{
			$installFlag = false;
			$config = '<font class="bad">Missing!!?</font>';
		}
	}
?>
		<tr>
			<td style="color: #666666;"><?php print $wb_root.$configFile ?></td>
			<td colspan="2" ><?php echo $config ?></td>
		</tr>
		<tr>
			<td style="color: #666666;"><?php print $wb_root ?>/pages/</td>
			<td><?php if(is_writable('../pages/')) { echo '<font class="good">Writeable</font>'; } elseif(!file_exists('../pages/')) {$installFlag = false; echo '<font class="bad">Directory Not Found</font>'; } else { echo '<font class="bad">Unwriteable</font>'; } ?></td>
			<td style="color: #666666;"><?php print $wb_root ?>/media/</td>
			<td><?php if(is_writable('../media/')) { echo '<font class="good">Writeable</font>'; } elseif(!file_exists('../media/')) {$installFlag = false; echo '<font class="bad">Directory Not Found</font>'; } else { echo '<font class="bad">Unwriteable</font>'; } ?></td>
			<td style="color: #666666;"><?php print $wb_root ?>/templates/</td>
			<td><?php if(is_writable('../templates/')) { echo '<font class="good">Writeable</font>'; } elseif(!file_exists('../templates/')) {$installFlag = false; echo '<font class="bad">Directory Not Found</font>'; } else { echo '<font class="bad">Unwriteable</font>'; } ?></td>
		</tr>
		<tr>
			<td style="color: #666666;"><?php print $wb_root ?>/modules/</td>
			<td><?php if(is_writable('../modules/')) { echo '<font class="good">Writeable</font>'; } elseif(!file_exists('../modules/')) {$installFlag = false; echo '<font class="bad">Directory Not Found</font>'; } else { echo '<font class="bad">Unwriteable</font>'; } ?></td>
			<td style="color: #666666;"><?php print $wb_root ?>/languages/</td>
			<td><?php if(is_writable('../languages/')) { echo '<font class="good">Writeable</font>'; } elseif(!file_exists('../languages/')) {$installFlag = false; echo '<font class="bad">Directory Not Found</font>'; } else { echo '<font class="bad">Unwriteable</font>'; } ?></td>
			<td style="color: #666666;"><?php print $wb_root ?>/temp/</td>
			<td><?php if(is_writable('../temp/')) { echo '<font class="good">Writeable</font>'; } elseif(!file_exists('../temp/')) {$installFlag = false; echo '<font class="bad">Directory Not Found</font>'; } else { echo '<font class="bad">Unwriteable</font>'; } ?></td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		</table>
		<table summary="" cellpadding="3" cellspacing="0" >
		<tr>
			<td colspan="2" class="step-row"><h1 class="step-row">Step 3</h1>&nbsp;Please check URL settings, and select a default timezone and a default backend language...</td>
		</tr>
		<tr>
			<td class="name">
				Absolute URL:
			</td>
			<td class="value">
				<?php
				// Try to guess installation URL
				$guessed_url = 'http://'.$_SERVER["SERVER_NAME"].$_SERVER["SCRIPT_NAME"];
				$guessed_url = rtrim(dirname($guessed_url), 'install');
				?>
				<input <?php echo field_error('wb_url');?> type="text" tabindex="1" name="wb_url" style="width: 99%;" value="<?php if(isset($_SESSION['wb_url'])) { echo $_SESSION['wb_url']; } else { echo $guessed_url; } ?>" />
			</td>
		</tr>
		<tr>
			<td class="name">
				Default Timezone:
			</td>
			<td>
				<select <?php echo field_error('default_timezone');?> tabindex="3" name="default_timezone" style="width: 100%;">
					<?php
					$TIMEZONES['-12'] = 'GMT - 12 Hours';
					$TIMEZONES['-11'] = 'GMT -11 Hours';
					$TIMEZONES['-10'] = 'GMT -10 Hours';
					$TIMEZONES['-9'] = 'GMT -9 Hours';
					$TIMEZONES['-8'] = 'GMT -8 Hours';
					$TIMEZONES['-7'] = 'GMT -7 Hours';
					$TIMEZONES['-6'] = 'GMT -6 Hours';
					$TIMEZONES['-5'] = 'GMT -5 Hours';
					$TIMEZONES['-4'] = 'GMT -4 Hours';
					$TIMEZONES['-3.5'] = 'GMT -3.5 Hours';
					$TIMEZONES['-3'] = 'GMT -3 Hours';
					$TIMEZONES['-2'] = 'GMT -2 Hours';
					$TIMEZONES['-1'] = 'GMT -1 Hour';
					$TIMEZONES['0'] = 'GMT';
					$TIMEZONES['1'] = 'GMT +1 Hour';
					$TIMEZONES['2'] = 'GMT +2 Hours';
					$TIMEZONES['3'] = 'GMT +3 Hours';
					$TIMEZONES['3.5'] = 'GMT +3.5 Hours';
					$TIMEZONES['4'] = 'GMT +4 Hours';
					$TIMEZONES['4.5'] = 'GMT +4.5 Hours';
					$TIMEZONES['5'] = 'GMT +5 Hours';
					$TIMEZONES['5.5'] = 'GMT +5.5 Hours';
					$TIMEZONES['6'] = 'GMT +6 Hours';
					$TIMEZONES['6.5'] = 'GMT +6.5 Hours';
					$TIMEZONES['7'] = 'GMT +7 Hours';
					$TIMEZONES['8'] = 'GMT +8 Hours';
					$TIMEZONES['9'] = 'GMT +9 Hours';
					$TIMEZONES['9.5'] = 'GMT +9.5 Hours';
					$TIMEZONES['10'] = 'GMT +10 Hours';
					$TIMEZONES['11'] = 'GMT +11 Hours';
					$TIMEZONES['12'] = 'GMT +12 Hours';
					$TIMEZONES['13'] = 'GMT +13 Hours';
					foreach($TIMEZONES AS $hour_offset => $title) {
						?>
							<option value="<?php echo $hour_offset; ?>"<?php if(isset($_SESSION['default_timezone']) AND $_SESSION['default_timezone'] == $hour_offset) { echo ' selected="selected"'; } elseif(!isset($_SESSION['default_timezone']) AND $hour_offset == 0) { echo ' selected="selected"'; } ?>><?php echo $title; ?></option>
						<?php
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td class="name">
				Default Language:
			</td>
			<td>
				<select <?php echo field_error('default_language');?> tabindex="3" name="default_language" style="width: 100%;">
					<?php
					$DEFAULT_LANGUAGE = array(
						'BG'=>'Bulgarian', 'CA'=>'Catalan', 'CS'=>'&#268;e&scaron;tina', 'DA'=>'Danish', 'DE'=>'Deutsch', 'EN'=>'English',
						'ES'=>'Spanish', 'ET'=>'Eesti', 'FI'=>'Suomi', 'FR'=>'Fran&ccedil;ais',
						'HR'=>'Hrvatski', 'HU'=>'Magyar','IT'=>'Italiano', 'LV'=>'Latviesu',
						'NL'=>'Nederlands', 'NO'=>'Norsk', 'PL'=>'Polski', 'PT'=>'Portuguese (Brazil)', 'RU'=>'Russian', 'SE'=>'Svenska','SK'=>'Slovensky','TR'=>'Turkish'
					);
					foreach($DEFAULT_LANGUAGE as $lang_id => $lang_title) {
						?>
							<option value="<?php echo $lang_id; ?>"<?php if(isset($_SESSION['default_language']) AND $_SESSION['default_language'] == $lang_id) { echo ' selected="selected"'; } elseif(!isset($_SESSION['default_language']) AND $lang_id == 'EN') { echo ' selected="selected"'; } ?>><?php echo $lang_title; ?></option>
						<?php
					}
					?>
				</select>
			</td>
		</tr>
		</table>
		<table border="0" summary="" cellpadding="0" cellspacing="0">
		<tr>
			<td class="step-row" colspan="3"><h1 class="step-row">Step 4</h1>&nbsp;Please specify your operating system information below...</td>
		</tr>
		<tr>
			<td class="name">&nbsp;
				Server Operating System:
			</td>
			<td style="">
				<input type="radio" tabindex="4" name="operating_system" id="operating_system_linux" onclick="document.getElementById('file_perms_box').style.display = 'none';" value="linux"<?php if(!isset($_SESSION['operating_system']) OR $_SESSION['operating_system'] == 'linux') { echo ' checked="checked"'; } ?> />
				<span style="cursor: pointer;" onclick="javascript: change_os('linux');">Linux/Unix based</span>
				<br />
				<input type="radio" tabindex="5" name="operating_system" id="operating_system_windows" onclick="document.getElementById('file_perms_box').style.display = 'none';" value="windows"<?php if(isset($_SESSION['operating_system']) AND $_SESSION['operating_system'] == 'windows') { echo ' checked="checked"'; } ?> />
				<span style="cursor: pointer;" onclick="javascript: change_os('windows');">Windows</span>
			</td>
		</tr>
		<tr>
			<td class="name">&nbsp;</td>
			<td class="value">
				<div id="file_perms_box" style="line-height:2em; position: relative; width: 100%;float:left; margin: 0; padding: 0; display: <?php if(isset($_SESSION['operating_system']) AND $_SESSION['operating_system'] == 'windows') { echo 'none'; } else { echo 'none'; } ?>;">
					<input type="checkbox" tabindex="6" name="world_writeable" id="world_writeable" value="true"<?php if(isset($_SESSION['world_writeable']) AND $_SESSION['world_writeable'] == true) { echo ' checked="checked'; } ?> />
 					<label style=" margin: 0;  " for="world_writeable">
						World-writeable file permissions (777)
					</label>
				<br />
					<p class="warning">(Please note: only recommended for testing environments)</p>
				</div>
			</td>
		</tr>
		</table>
		<table summary="" cellpadding="0" cellspacing="0">
    		<tr>
    			<td colspan="2" class="step-row"><h1 class="step-row">Step 5</h1>&nbsp;Please enter your MySQL database server details below...</td>
    		</tr>
    		<tr>
    			<td class="name">Host Name</td>
    			<td class="value">
    				<input <?php echo field_error('database_host');?> type="text" tabindex="7" name="database_host" value="<?php if(isset($_SESSION['database_host'])) { echo $_SESSION['database_host']; } else { echo 'localhost'; } ?>" />
    			</td>
    		</tr>
    		<tr>
    			<td class="name">Database Name&nbsp;([a-zA-Z0-9_-])</td>
    			<td class="value">
    				<input <?php echo field_error('database_name')?> type="text" tabindex="8" name="database_name" value="<?php if(isset($_SESSION['database_name'])) { echo $_SESSION['database_name']; } else { echo 'DatabaseName'; } ?>" />
    			</td>
    		</tr>
		<tr>
			<td class="name">Table Prefix&nbsp;([a-zA-Z0-9_])</td>
			<td class="value">
				<input <?php echo field_error('table_prefix')?> type="text" tabindex="11" name="table_prefix" value="<?php if(isset($_SESSION['table_prefix'])) { echo $_SESSION['table_prefix']; } else { echo 'wb_'; } ?>" />
			</td>
		</tr>
		<tr>
    			<td class="name">Username:</td>
    			<td class="value">
    				<input <?php echo field_error('database_username');?> type="text" tabindex="9" name="database_username" value="<?php if(isset($_SESSION['database_username'])) { echo $_SESSION['database_username']; } else { echo 'root'; } ?>" />
    			</td>
		</tr>
		<tr>
    			<td class="name">Password:</td>
    			<td class="value">
    				<input type="password" tabindex="10" name="database_password" value="<?php if(isset($_SESSION['database_password'])) { echo $_SESSION['database_password']; } ?>" />
    			</td>
		</tr>
		<tr>
			<td class="name hide" colspan="2">
				<input type="checkbox" tabindex="12" name="install_tables" id="install_tables" value="true"<?php if(!isset($_SESSION['install_tables'])) { echo ' checked="checked"'; } elseif($_SESSION['install_tables'] == 'true') { echo ' checked="checked"'; } ?> />
				<label for="install_tables" style="color: #666666;">Install Tables</label>
				<br />
				<span style="font-size: 1px; color: #666666;">(Please note: May remove existing tables and data)</span>
			</td>
		</tr>
		</table>
		<table summary="" cellpadding="0" cellspacing="0" >
		<tbody>
		<tr>
			<td colspan="2" class="step-row"><h1 class="step-row">Step 6</h1>&nbsp;Please enter your website title below...</td>
		</tr>
		<tr>
			<td class="name">Website Title:</td>
			<td class="value">
				<input <?php echo field_error('website_title');?> type="text" tabindex="13" name="website_title" value="<?php if(isset($_SESSION['website_title'])) { echo $_SESSION['website_title']; } else { echo 'Enter your website title'; } ?>" />
			</td>
		</tr>
		</tbody>
		</table>
		<table summary="" cellpadding="0" cellspacing="0" border="0">
		<tr>
			<td colspan="2" class="step-row"><h1 class="step-row">Step 7</h1> Please enter your Administrator account details below...</td>
		</tr>
		<tr>
			<td class="name">Loginname:</td>
			<td class="value">
				<input <?php echo field_error('admin_username');?> type="text" tabindex="14" name="admin_username" value="<?php if(isset($_SESSION['admin_username'])) { echo $_SESSION['admin_username']; } else { echo 'admin'; } ?>" />
			</td>
		</tr>
		<tr>
			<td class="name">Email:</td>
			<td class="value">
				<input <?php echo field_error('admin_email');?> type="text" tabindex="15" name="admin_email" value="<?php if(isset($_SESSION['admin_email'])) { echo $_SESSION['admin_email']; } ?>" />
			</td>
		</tr>
		<tr>
			<td class="name">Password:</td>
			<td class="value">
				<input <?php echo field_error('admin_password');?> type="password" tabindex="16" name="admin_password" value="" />
			</td>
		</tr>
		<tr>
			<td class="name">Re-Password:</td>
			<td class="value">
				<input <?php echo field_error('admin_repassword');?> type="password" tabindex="17" name="admin_repassword" value=""  />
			</td>
		</tr>
		</table>
		<table summary="" cellpadding="0" cellspacing="0">
				<tr valign="top">
					<td><strong>Please note: &nbsp;</strong></td>
				</tr>
				<tr valign="top">
					<td>
						<p class="warning">
						WebsiteBaker is released under the
						<a href="http://www.gnu.org/licenses/gpl.html" target="_blank" tabindex="19">GNU General Public License</a>
						<br />
						By clicking install, you are accepting the license.
						</p>
					</td>
				</tr>
				<tr valign="top">
			<td>
			<p class="center">
				<?php if($installFlag == true) { ?>
				<input type="submit" tabindex="20" name="install" value="Install WebsiteBaker" />
				<?php } else { ?>
				<input type="button" tabindex="20" name="restart" value="Check your Settings in Step1 or Step2" class="submit" onclick="javascript: window.location = '<?php print $_SERVER['SCRIPT_NAME'] ?>';" />
				<?php } ?>
			</p>
			</td>
		</tr>
		</table>

</form>

	<div style="padding: 10px 0px 10px 0px; text-align:center;">
		<!-- Please note: the below reference to the GNU GPL should not be removed, as it provides a link for users to read about warranty, etc. -->
		<a href="http://www.websitebaker2.org/" style="color: #000000;" target="_blank">WebsiteBaker</a>
		is	released under the
		<a href="http://www.gnu.org/licenses/gpl.html" style="color: #000000;" target="_blank">GNU General Public License</a>
		<!-- Please note: the above reference to the GNU GPL should not be removed, as it provides a link for users to read about warranty, etc. -->
	</div >
</div>

</body>
</html>
