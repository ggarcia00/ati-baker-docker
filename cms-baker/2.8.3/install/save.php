<?php
/**
 *
 * @category        backend
 * @package         install
 * @author          WebsiteBaker Project
 * @copyright       2004-2009, Ryan Djurovich
 * @copyright       2009-2011, Website Baker Org. e.V.
 * @link			http://www.websitebaker2.org/
 * @license         http://www.gnu.org/licenses/gpl.html
 * @platform        WebsiteBaker 2.8.x
 * @requirements    PHP 5.2.2 and higher
 * @version      	$Id: save.php 1568 2012-01-10 04:33:22Z Luisehahne $
 * @filesource		$HeadURL:  $
 * @lastmodified    $Date: $
 *
 */

$debug = true;

if (true === $debug) {
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
}
// Start a session
if(!defined('SESSION_STARTED')) {
	session_name('wb_session_id');
	session_start();
	define('SESSION_STARTED', true);
}
// get random-part for session_name()
list($usec,$sec) = explode(' ',microtime());
srand((float)$sec+((float)$usec*100000));
$session_rand = rand(1000,9999);

// Function to set error
function set_error($message, $field_name = '') {
	global $_POST;
	if(isset($message) AND $message != '') {
		// Copy values entered into session so user doesn't have to re-enter everything
		if(isset($_POST['website_title'])) {
			$_SESSION['wb_url'] = $_POST['wb_url'];
			$_SESSION['default_timezone'] = $_POST['default_timezone'];
			$_SESSION['default_language'] = $_POST['default_language'];
			if(!isset($_POST['operating_system'])) {
				$_SESSION['operating_system'] = 'linux';
			} else {
				$_SESSION['operating_system'] = $_POST['operating_system'];
			}
			if(!isset($_POST['world_writeable'])) {
				$_SESSION['world_writeable'] = false;
			} else {
				$_SESSION['world_writeable'] = true;
			}
			$_SESSION['database_host'] = $_POST['database_host'];
			$_SESSION['database_username'] = $_POST['database_username'];
			$_SESSION['database_password'] = $_POST['database_password'];
			$_SESSION['database_name'] = $_POST['database_name'];
			$_SESSION['table_prefix'] = $_POST['table_prefix'];
			if(!isset($_POST['install_tables'])) {
				$_SESSION['install_tables'] = false;
			} else {
				$_SESSION['install_tables'] = true;
			}
			$_SESSION['website_title'] = $_POST['website_title'];
			$_SESSION['admin_username'] = $_POST['admin_username'];
			$_SESSION['admin_email'] = $_POST['admin_email'];
			$_SESSION['admin_password'] = $_POST['admin_password'];
			$_SESSION['admin_repassword'] = $_POST['admin_repassword'];
		}
		// Set the message
		$_SESSION['message'] = $message;
		// Set the element(s) to highlight
		if($field_name != '') {
			$_SESSION['ERROR_FIELD'] = $field_name;
		}
		// Specify that session support is enabled
		$_SESSION['session_support'] = '<font class="good">Enabled</font>';
		// Redirect to first page again and exit
		header('Location: index.php?sessions_checked=true');
		exit();
	}
}
/* */

// Function to workout what the default permissions are for files created by the webserver
function default_file_mode($temp_dir) {
	$v = explode(".",PHP_VERSION);
	$v = $v[0].$v[1];
	if($v > 41 AND is_writable($temp_dir)) {
		$filename = $temp_dir.'/test_permissions.txt';
		$handle = fopen($filename, 'w');
		fwrite($handle, 'This file is to get the default file permissions');
		fclose($handle);
		$default_file_mode = '0'.substr(sprintf('%o', fileperms($filename)), -3);
		unlink($filename);
	} else {
		$default_file_mode = '0777';
	}
	return $default_file_mode;
}

// Function to workout what the default permissions are for directories created by the webserver
function default_dir_mode($temp_dir) {
	$v = explode(".",PHP_VERSION);
	$v = $v[0].$v[1];
	if($v > 41 AND is_writable($temp_dir)) {
		$dirname = $temp_dir.'/test_permissions/';
		mkdir($dirname);
		$default_dir_mode = '0'.substr(sprintf('%o', fileperms($dirname)), -3);
		rmdir($dirname);
	} else {
		$default_dir_mode = '0777';
	}
	return $default_dir_mode;
}

function add_slashes($input) {
	if ( get_magic_quotes_gpc() || ( !is_string($input) ) ) {
		return $input;
	}
	$output = addslashes($input);
	return $output;
}

// Begin check to see if form was even submitted
// Set error if no post vars found
if(!isset($_POST['website_title'])) {
	set_error('Please fill-in the form below');
}
// End check to see if form was even submitted

// Begin path and timezone details code

// Check if user has entered the installation url
if(!isset($_POST['wb_url']) OR $_POST['wb_url'] == '') {
	set_error('Please enter an absolute URL', 'wb_url');
} else {
	$wb_url = $_POST['wb_url'];
}
// Remove any slashes at the end of the URL
if(substr($wb_url, strlen($wb_url)-1, 1) == "/") {
	$wb_url = substr($wb_url, 0, strlen($wb_url)-1);
}
if(substr($wb_url, strlen($wb_url)-1, 1) == "\\") {
	$wb_url = substr($wb_url, 0, strlen($wb_url)-1);
}
if(substr($wb_url, strlen($wb_url)-1, 1) == "/") {
	$wb_url = substr($wb_url, 0, strlen($wb_url)-1);
}
if(substr($wb_url, strlen($wb_url)-1, 1) == "\\") {
	$wb_url = substr($wb_url, 0, strlen($wb_url)-1);
}
// Get the default time zone
if(!isset($_POST['default_timezone']) OR !is_numeric($_POST['default_timezone'])) {
	set_error('Please select a valid default timezone', 'default_timezone');
} else {
	$default_timezone = $_POST['default_timezone']*60*60;
}
// End path and timezone details code

// Get the default language
$allowed_languages = array('BG','CA', 'CS', 'DA', 'DE', 'EN', 'ES', 'ET', 'FI', 'FR', 'HR', 'HU', 'IT', 'LV', 'NL', 'NO', 'PL', 'PT', 'RU','SE','SK','TR');
if(!isset($_POST['default_language']) OR !in_array($_POST['default_language'], $allowed_languages)) {
	set_error('Please select a valid default backend language','default_language');
} else {
	$default_language = $_POST['default_language'];
	// make sure the selected language file exists in the language folder
	if(!file_exists('../languages/' .$default_language .'.php')) {
		set_error('The language file: \'' .$default_language .'.php\' is missing. Upload file to language folder or choose another language','default_language');
	}
}
// End default language details code

// Begin operating system specific code
// Get operating system
if(!isset($_POST['operating_system']) OR $_POST['operating_system'] != 'linux' AND $_POST['operating_system'] != 'windows') {
	set_error('Please select a valid operating system');
} else {
	$operating_system = $_POST['operating_system'];
}
// Work-out file permissions
if($operating_system == 'windows') {
	$file_mode = '0777';
	$dir_mode = '0777';
} elseif(isset($_POST['world_writeable']) AND $_POST['world_writeable'] == 'true') {
	$file_mode = '0777';
	$dir_mode = '0777';
} else {
	$file_mode = default_file_mode('../temp');
	$dir_mode = default_dir_mode('../temp');
}
// End operating system specific code

// Begin database details code
// Check if user has entered a database host
if(!isset($_POST['database_host']) OR $_POST['database_host'] == '') {
	set_error('Please enter a database host name', 'database_host');
} else {
	$database_host = $_POST['database_host'];
}
// Check if user has entered a database username
if(!isset($_POST['database_username']) OR $_POST['database_username'] == '') {
	set_error('Please enter a database username','database_username');
} else {
	$database_username = $_POST['database_username'];
}
// Check if user has entered a database password
if(!isset($_POST['database_password'])) {
	set_error('Please enter a database password', 'database_password');
} else {
	$database_password = $_POST['database_password'];
}
// Check if user has entered a database name
if(!isset($_POST['database_name']) OR $_POST['database_name'] == '') {
	set_error('Please enter a database name', 'database_name');
} else {
	// make sure only allowed characters are specified
	if(preg_match('/[^a-z0-9_-]+/i', $_POST['database_name'])) {
		// contains invalid characters (only a-z, A-Z, 0-9 and _ allowed to avoid problems with table/field names)
		set_error('Only characters a-z, A-Z, 0-9, - and _ allowed in database name.', 'database_name');
	}
	$database_name = $_POST['database_name'];
}
// Get table prefix
if(preg_match('/[^a-z0-9_]+/i', $_POST['table_prefix'])) {
	// contains invalid characters (only a-z, A-Z, 0-9 and _ allowed to avoid problems with table/field names)
	set_error('Only characters a-z, A-Z, 0-9 and _ allowed in table_prefix.', 'table_prefix');
} else {
	$table_prefix = $_POST['table_prefix'];
}

// Find out if the user wants to install tables and data
if(isset($_POST['install_tables']) AND $_POST['install_tables'] == 'true') {
	$install_tables = true;
} else {
	$install_tables = false;
}
// End database details code

// Begin website title code
// Get website title
if(!isset($_POST['website_title']) OR $_POST['website_title'] == '') {
	set_error('Please enter a website title', 'website_title');
} else {
	$website_title = add_slashes($_POST['website_title']);
}
// End website title code

// Begin admin user details code
// Get admin username
if(!isset($_POST['admin_username']) OR $_POST['admin_username'] == '') {
	set_error('Please enter a username for the Administrator account','admin_username');
} else {
	$admin_username = $_POST['admin_username'];
}
// Get admin email and validate it
if(!isset($_POST['admin_email']) OR $_POST['admin_email'] == '') {
	set_error('Please enter an email for the Administrator account','admin_email');
} else {
	if(preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/i', $_POST['admin_email'])) {
		$admin_email = $_POST['admin_email'];
	} else {
		set_error('Please enter a valid email address for the Administrator account','admin_email');
	}
}
// Get the two admin passwords entered, and check that they match
if(!isset($_POST['admin_password']) OR $_POST['admin_password'] == '') {
	set_error('Please enter a password for the Administrator account','admin_password');
} else {
	$admin_password = $_POST['admin_password'];
}
if(!isset($_POST['admin_repassword']) OR $_POST['admin_repassword'] == '') {
	set_error('Please make sure you re-enter the password for the Administrator account','admin_repassword');
} else {
	$admin_repassword = $_POST['admin_repassword'];
}
if($admin_password != $admin_repassword) {
	set_error('Sorry, the two Administrator account passwords you entered do not match','admin_repassword');
}
// End admin user details code

// Try and write settings to config file
$config_content = "" .
"<?php\n".
"\n".
"define('DB_TYPE', 'mysql');\n".
"define('DB_HOST', '$database_host');\n".
"define('DB_NAME', '$database_name');\n".
"define('DB_USERNAME', '$database_username');\n".
"define('DB_PASSWORD', '$database_password');\n".
"define('TABLE_PREFIX', '$table_prefix');\n".
"\n".
"define('WB_PATH', dirname(__FILE__));\n".
"define('WB_URL', '$wb_url');\n".
"define('ADMIN_PATH', WB_PATH.'/admin');\n".
"define('ADMIN_URL', WB_URL.'/admin');\n".
"\n".
"require_once(WB_PATH.'/framework/initialize.php');\n".
"\n".
"";

$config_filename = '../config.php';
// Check if the file exists and is writable first.
if(file_exists($config_filename) AND is_writable($config_filename)) {
	if(!$handle = fopen($config_filename, 'w')) {
		set_error("Cannot open the configuration file ($config_filename)");
	} else {
		if (fwrite($handle, $config_content) === FALSE) {
			set_error("Cannot write to the configuration file ($config_filename)");
		}
		// Close file
		fclose($handle);
	}
} else {
	set_error("The configuration file $config_filename is not writable. Change its permissions so it is, then re-run step 4.");
}

// Define configuration vars
define('DB_TYPE', 'mysql');
define('DB_HOST', $database_host);
define('DB_NAME', $database_name);
define('DB_USERNAME', $database_username);
define('DB_PASSWORD', $database_password);
define('TABLE_PREFIX', $table_prefix);
define('WB_PATH', str_replace(array('/install','\install'), '',dirname(__FILE__)));
define('WB_URL', $wb_url);
define('ADMIN_PATH', WB_PATH.'/admin');
define('ADMIN_URL', $wb_url.'/admin');

// Check if the user has entered a correct path
if(!file_exists(WB_PATH.'/framework/class.admin.php')) {
	set_error('It appears the Absolute path that you entered is incorrect');
}

// Try connecting to database	
if(!@mysql_connect(DB_HOST, DB_USERNAME, DB_PASSWORD)) {
	set_error('Database host name, username and/or password incorrect. MySQL Error:<br />'.mysql_error());
}

// Try to create the database
mysql_query('CREATE DATABASE `'.$database_name.'`');

// Close the mysql connection
mysql_close();

$sSecMod = (defined('SECURE_FORM_MODULE') && SECURE_FORM_MODULE != '') ? '.'.SECURE_FORM_MODULE : '';
$sSecMod = WB_PATH.'/framework/SecureForm'.$sSecMod.'.php';
require_once($sSecMod);

require_once(WB_PATH.'/framework/class.admin.php');

// Dummy class to allow modules' install scripts to call $admin->print_error
class admin_dummy extends admin
{
	var $error='';
	function print_error($message)
	{
		$this->error=$message;
	}
}

// Include WB functions file
require_once(WB_PATH.'/framework/functions.php');

// Re-connect to the database, this time using in-build database class
require_once(WB_PATH.'/framework/class.login.php');

$database=new database();

// Check if we should install tables
if($install_tables == true) {
	if (!defined('WB_INSTALL_PROCESS')) define ('WB_INSTALL_PROCESS', true);
	// Remove tables if they exist

	// Pages table
	$pages = "DROP TABLE IF EXISTS `".TABLE_PREFIX."pages`";
	$database->query($pages);
	// Sections table
	$sections = "DROP TABLE IF EXISTS `".TABLE_PREFIX."sections`";
	$database->query($sections);
	// Settings table
	$settings = "DROP TABLE IF EXISTS `".TABLE_PREFIX."settings`";
	$database->query($settings);
	// Users table
	$users = "DROP TABLE IF EXISTS `".TABLE_PREFIX."users`";
	$database->query($users);
	// Groups table
	$groups = "DROP TABLE IF EXISTS `".TABLE_PREFIX."groups`";
	$database->query($groups);
	// Search table
	$search = "DROP TABLE IF EXISTS `".TABLE_PREFIX."search`";
	$database->query($search);
	// Addons table
	$addons = "DROP TABLE IF EXISTS `".TABLE_PREFIX."addons`";
	$database->query($addons);
				
	// Try installing tables
	
	// Pages table
	$pages = 'CREATE TABLE `'.TABLE_PREFIX.'pages` ( `page_id` INT NOT NULL auto_increment,'
	       . ' `parent` INT NOT NULL DEFAULT \'0\','
	       . ' `root_parent` INT NOT NULL DEFAULT \'0\','
	       . ' `level` INT NOT NULL DEFAULT \'0\','
	       . ' `link` TEXT NOT NULL,'
	       . ' `target` VARCHAR( 7 ) NOT NULL DEFAULT \'\' ,'
	       . ' `page_title` VARCHAR( 255 ) NOT NULL DEFAULT \'\' ,'
	       . ' `menu_title` VARCHAR( 255 ) NOT NULL DEFAULT \'\' ,'
	       . ' `description` TEXT NOT NULL ,'
	       . ' `keywords` TEXT NOT NULL ,'
	       . ' `page_trail` TEXT NOT NULL  ,'
	       . ' `template` VARCHAR( 255 ) NOT NULL DEFAULT \'\' ,'
	       . ' `visibility` VARCHAR( 255 ) NOT NULL DEFAULT \'\' ,'
	       . ' `position` INT NOT NULL DEFAULT \'0\','
	       . ' `menu` INT NOT NULL DEFAULT \'0\','
	       . ' `language` VARCHAR( 5 ) NOT NULL DEFAULT \'\' ,'
	       . ' `searching` INT NOT NULL DEFAULT \'0\','
	       . ' `admin_groups` TEXT NOT NULL ,'
	       . ' `admin_users` TEXT NOT NULL ,'
	       . ' `viewing_groups` TEXT NOT NULL ,'
	       . ' `viewing_users` TEXT NOT NULL ,'
	       . ' `modified_when` INT NOT NULL DEFAULT \'0\','
	       . ' `modified_by` INT NOT NULL  DEFAULT \'0\','
	       . ' PRIMARY KEY ( `page_id` ) '
	       . ' ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci';
	$database->query($pages);
	
	// Sections table
	$pages = 'CREATE TABLE `'.TABLE_PREFIX.'sections` ( `section_id` INT NOT NULL auto_increment,'
	       . ' `page_id` INT NOT NULL DEFAULT \'0\','
	       . ' `position` INT NOT NULL DEFAULT \'0\','
	       . ' `module` VARCHAR( 255 ) NOT NULL DEFAULT \'\' ,'
	       . ' `block` VARCHAR( 255 ) NOT NULL DEFAULT \'\' ,'
	       . ' `publ_start` VARCHAR( 255 ) NOT NULL DEFAULT \'0\' ,'
	       . ' `publ_end` VARCHAR( 255 ) NOT NULL DEFAULT \'0\' ,' 
	       . ' PRIMARY KEY ( `section_id` ) '
	       . ' ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci';
	$database->query($pages);

	require(ADMIN_PATH.'/interface/version.php');
	
	// Settings table
	$settings='CREATE TABLE `'.TABLE_PREFIX.'settings` ( `setting_id` INT NOT NULL auto_increment,'
		. ' `name` VARCHAR( 255 ) NOT NULL DEFAULT \'\' ,'
		. ' `value` TEXT NOT NULL ,'
		. ' PRIMARY KEY ( `setting_id` ) '
		. ' ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci';
	$database->query($settings);

	$settings_rows=	"INSERT INTO `".TABLE_PREFIX."settings` "
	." (name, value) VALUES "
	." ('wb_version', '".VERSION."'),"
	." ('wb_revision', '".REVISION."'),"
 	." ('wb_sp', '".SP."'),"
	." ('website_title', '$website_title'),"
	." ('website_description', ''),"
	." ('website_keywords', ''),"
	." ('website_header', ''),"
	." ('website_footer', ''),"
	." ('wysiwyg_style', 'font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px;'),"
	." ('er_level', ''),"
	." ('default_language', '$default_language'),"
	." ('app_name', 'wb_$session_rand'),"
	." ('sec_anchor', 'wb_'),"
	." ('default_timezone', '$default_timezone'),"
	." ('default_date_format', 'M d Y'),"
	." ('default_time_format', 'g:i A'),"
	." ('redirect_timer', '1500'),"
	." ('home_folders', 'true'),"
	." ('warn_page_leave', '1'),"
	." ('default_template', 'round'),"
	." ('default_theme', 'wb_theme'),"
	." ('default_charset', 'utf-8'),"
	." ('multiple_menus', 'true'),"
	." ('page_level_limit', '4'),"
	." ('intro_page', 'false'),"
	." ('page_trash', 'inline'),"
	." ('homepage_redirection', 'false'),"
	." ('page_languages', 'true'),"
	." ('wysiwyg_editor', 'fckeditor'),"
	." ('manage_sections', 'true'),"
	." ('section_blocks', 'true'),"
	." ('smart_login', 'true'),"
	." ('frontend_login', 'false'),"
	." ('frontend_signup', 'false'),"
	." ('search', 'public'),"
	." ('page_extension', '.php'),"
	." ('page_spacer', '-'),"
	." ('pages_directory', '/pages'),"
	." ('rename_files_on_upload', 'ph.*?,cgi,pl,pm,exe,com,bat,pif,cmd,src,asp,aspx'),"
	." ('media_directory', '/media'),"
	." ('operating_system', '$operating_system'),"
	." ('string_file_mode', '$file_mode'),"
	." ('string_dir_mode', '$dir_mode'),"
	." ('wbmailer_routine', 'phpmail'),"
	." ('server_email', '$admin_email'),"		// avoid that mail provider (e.g. mail.com) reject mails like yourname@mail.com
	." ('wbmailer_default_sendername', 'WB Mailer'),"
	." ('wbmailer_smtp_host', ''),"
	." ('wbmailer_smtp_auth', ''),"
	." ('wbmailer_smtp_username', ''),"
	." ('wbmailer_smtp_password', ''),"
	." ('fingerprint_with_ip_octets', '2'),"
	." ('secure_form_module', ''),"
	." ('mediasettings', '')";
	$database->query($settings_rows);
	//GUILHERME - ATI
	$users = 'CREATE TABLE `'.TABLE_PREFIX.'users` ( `user_id` INT NOT NULL auto_increment,'
	       . ' `group_id` INT NOT NULL DEFAULT \'0\','
	       . ' `groups_id` VARCHAR( 255 ) NOT NULL DEFAULT \'0\','
	       . ' `active` INT NOT NULL DEFAULT \'0\','
	       . ' `username` VARCHAR( 255 ) NOT NULL DEFAULT \'\' ,'
	       . ' `password` VARCHAR( 255 ) NOT NULL DEFAULT \'\' ,'
	       . ' `remember_key` VARCHAR( 255 ) NOT NULL DEFAULT \'\','
	       . ' `last_reset` INT NOT NULL DEFAULT \'0\','
	       . ' `display_name` VARCHAR( 255 ) NOT NULL DEFAULT \'\' ,'
	       . ' `email` TEXT NOT NULL ,'
	       . ' `timezone` INT NOT NULL DEFAULT \'0\','
	       . ' `date_format` VARCHAR( 255 ) NOT NULL DEFAULT \'\' ,'
	       . ' `time_format` VARCHAR( 255 ) NOT NULL DEFAULT \'\' ,'
	       . ' `language` VARCHAR( 5 ) NOT NULL DEFAULT \'' .$default_language .'\' ,'
	       . ' `home_folder` TEXT ,'
	       . ' `login_when` INT NOT NULL  DEFAULT \'0\','
	       . ' `login_ip` VARCHAR( 15 ) NOT NULL DEFAULT \'\' ,'
	       . ' PRIMARY KEY ( `user_id` ) '
	       . ' )';
	$database->query($users);
	// Groups table
	$groups = 'CREATE TABLE `'.TABLE_PREFIX.'groups` ( `group_id` INT NOT NULL auto_increment,'
	        . ' `name` VARCHAR( 255 ) NOT NULL DEFAULT \'\' ,'
	        . ' `system_permissions` TEXT NOT NULL ,'
	        . ' `module_permissions` TEXT NOT NULL ,'
	        . ' `template_permissions` TEXT NOT NULL ,'
	        . ' PRIMARY KEY ( `group_id` ) '
	        . ' ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci';
	$database->query($groups);
	
	// Search settings table
	$search = 'CREATE TABLE `'.TABLE_PREFIX.'search` ( `search_id` INT NOT NULL auto_increment,'
	        . ' `name` VARCHAR( 255 ) NOT NULL DEFAULT \'\' ,'
	        . ' `value` TEXT NOT NULL ,'
	        . ' `extra` TEXT NOT NULL ,'
	        . ' PRIMARY KEY ( `search_id` ) '
	        . ' ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci';
	$database->query($search);
	
	// Addons table
	$addons = 'CREATE TABLE `'.TABLE_PREFIX.'addons` ( '
			.'`addon_id` INT NOT NULL auto_increment ,'
			.'`type` VARCHAR( 255 ) NOT NULL DEFAULT \'\' ,'
			.'`directory` VARCHAR( 255 ) NOT NULL DEFAULT \'\' ,'
			.'`name` VARCHAR( 255 ) NOT NULL DEFAULT \'\' ,'
			.'`description` TEXT NOT NULL ,'
			.'`function` VARCHAR( 255 ) NOT NULL DEFAULT \'\' ,'
			.'`version` VARCHAR( 255 ) NOT NULL DEFAULT \'\' ,'
			.'`platform` VARCHAR( 255 ) NOT NULL DEFAULT \'\' ,'
			.'`author` VARCHAR( 255 ) NOT NULL DEFAULT \'\' ,'
			.'`license` VARCHAR( 255 ) NOT NULL DEFAULT \'\' ,'
			.' PRIMARY KEY ( `addon_id` ) '
			.' ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci';
	$database->query($addons);

	// Insert default data
	
	// Admin group
	$full_system_permissions = 'pages,pages_view,pages_add,pages_add_l0,pages_settings,pages_modify,pages_intro,pages_delete,media,media_view,media_upload,media_rename,media_delete,media_create,addons,modules,modules_view,modules_install,modules_uninstall,templates,templates_view,templates_install,templates_uninstall,languages,languages_view,languages_install,languages_uninstall,settings,settings_basic,settings_advanced,access,users,users_view,users_add,users_modify,users_delete,groups,groups_view,groups_add,groups_modify,groups_delete,admintools';
	$insert_admin_group = "INSERT INTO `".TABLE_PREFIX."groups` VALUES ('1', 'Administrators', '$full_system_permissions', '', '')";
	$database->query($insert_admin_group);
	// Admin user
	$insert_admin_user = "INSERT INTO `".TABLE_PREFIX."users` (user_id,group_id,groups_id,active,username,password,email,display_name) VALUES ('1','1','1','1','$admin_username','".md5($admin_password)."','$admin_email','Administrator')";
	$database->query($insert_admin_user);
	// Search header
	$search_header = addslashes('
<h1>[TEXT_SEARCH]</h1>

<form name="searchpage" action="[WB_URL]/search/index.php" method="get">
<table cellpadding="3" cellspacing="0" border="0" width="500">
<tr>
<td>
<input type="hidden" name="search_path" value="[SEARCH_PATH]" />
<input type="text" name="string" value="[SEARCH_STRING]" style="width: 100%;" />
</td>
<td width="150">
<input type="submit" value="[TEXT_SEARCH]" style="width: 100%;" />
</td>
</tr>
<tr>
<td colspan="2">
<input type="radio" name="match" id="match_all" value="all"[ALL_CHECKED] />
<label for="match_all">[TEXT_ALL_WORDS]</label>
<input type="radio" name="match" id="match_any" value="any"[ANY_CHECKED] />
<label for="match_any">[TEXT_ANY_WORDS]</label>
<input type="radio" name="match" id="match_exact" value="exact"[EXACT_CHECKED] />
<label for="match_exact">[TEXT_EXACT_MATCH]</label>
</td>
</tr>
</table>

</form>

<hr />
	');
	$insert_search_header = "INSERT INTO `".TABLE_PREFIX."search` VALUES ('', 'header', '$search_header', '')";
	$database->query($insert_search_header);
	// Search footer
	$search_footer = addslashes('');
	$insert_search_footer = "INSERT INTO `".TABLE_PREFIX."search` VALUES ('', 'footer', '$search_footer', '')";
	$database->query($insert_search_footer);
	// Search results header
	$search_results_header = addslashes(''.
'[TEXT_RESULTS_FOR] \'<b>[SEARCH_STRING]</b>\':
<table cellpadding="2" cellspacing="0" border="0" width="100%" style="padding-top: 10px;">');
	$insert_search_results_header = "INSERT INTO `".TABLE_PREFIX."search` VALUES ('', 'results_header', '$search_results_header', '')";
	$database->query($insert_search_results_header);
	// Search results loop
	$search_results_loop = addslashes(''.
'<tr style="background-color: #F0F0F0;">
<td><a href="[LINK]">[TITLE]</a></td>
<td align="right">[TEXT_LAST_UPDATED_BY] [DISPLAY_NAME] ([USERNAME]) [TEXT_ON] [DATE]</td>
</tr>
<tr><td colspan="2" style="text-align: justify; padding-bottom: 5px;">[DESCRIPTION]</td></tr>
<tr><td colspan="2" style="text-align: justify; padding-bottom: 10px;">[EXCERPT]</td></tr>');

	$insert_search_results_loop = "INSERT INTO `".TABLE_PREFIX."search` VALUES ('', 'results_loop', '$search_results_loop', '')";
	$database->query($insert_search_results_loop);
	// Search results footer
	$search_results_footer = addslashes("</table>");
	$insert_search_results_footer = "INSERT INTO `".TABLE_PREFIX."search` VALUES ('', 'results_footer', '$search_results_footer', '')";
	$database->query($insert_search_results_footer);
	// Search no results
	$search_no_results = addslashes('<tr><td><p>[TEXT_NO_RESULTS]</p></td></tr>');
	$insert_search_no_results = "INSERT INTO `".TABLE_PREFIX."search` VALUES ('', 'no_results', '$search_no_results', '')";
	$database->query($insert_search_no_results);
	// Search module-order
	$search_module_order = addslashes('faqbaker,manual,wysiwyg');
	$insert_search_module_order = "INSERT INTO `".TABLE_PREFIX."search` VALUES ('', 'module_order', '$search_module_order', '')";
	$database->query($insert_search_module_order);
	// Search max lines of excerpt
	$search_max_excerpt = addslashes('15');
	$insert_search_max_excerpt = "INSERT INTO `".TABLE_PREFIX."search` VALUES ('', 'max_excerpt', '$search_max_excerpt', '')";
	$database->query($insert_search_max_excerpt);
	// max time to search per module
	$search_time_limit = addslashes('0');
	$insert_search_time_limit = "INSERT INTO `".TABLE_PREFIX."search` VALUES ('', 'time_limit', '$search_time_limit', '')";
	$database->query($insert_search_time_limit);
	// some config-elements
	$database->query("INSERT INTO `".TABLE_PREFIX."search` VALUES ('', 'cfg_enable_old_search', 'true', '')");
	$database->query("INSERT INTO `".TABLE_PREFIX."search` VALUES ('', 'cfg_search_keywords', 'true', '')");
	$database->query("INSERT INTO `".TABLE_PREFIX."search` VALUES ('', 'cfg_search_description', 'true', '')");
	$database->query("INSERT INTO `".TABLE_PREFIX."search` VALUES ('', 'cfg_show_description', 'true', '')");
	$database->query("INSERT INTO `".TABLE_PREFIX."search` VALUES ('', 'cfg_enable_flush', 'false', '')");
	// Search template
	$database->query("INSERT INTO `".TABLE_PREFIX."search` (name) VALUES ('template')");

	require_once(WB_PATH.'/framework/initialize.php');

	// Include the PclZip class file (thanks to
	require_once(WB_PATH.'/include/pclzip/pclzip.lib.php');

	// Install add-ons
	if(file_exists(WB_PATH.'/install/modules')) {
		// Unpack pre-packaged modules
			
	}
	if(file_exists(WB_PATH.'/install/templates')) {
		// Unpack pre-packaged templates
		
	}
	if(file_exists(WB_PATH.'/install/languages')) {
		// Unpack pre-packaged languages
		
	}

	$admin=new admin_dummy('Start','',false,false);

	// Load addons into DB
	$dirs['modules'] = WB_PATH.'/modules/';
	$dirs['templates'] = WB_PATH.'/templates/';
	$dirs['languages'] = WB_PATH.'/languages/';

	foreach($dirs AS $type => $dir) {
		if($handle = opendir($dir)) {
			while(false !== ($file = readdir($handle))) {
				if($file != '' AND substr($file, 0, 1) != '.' AND $file != 'admin.php' AND $file != 'index.php') {
					// Get addon type
					if($type == 'modules') {
						load_module($dir.'/'.$file, true);
						// Pretty ugly hack to let modules run $admin->set_error
						// See dummy class definition admin_dummy above
						if ($admin->error!='') {
							set_error($admin->error);
						}
					} elseif($type == 'templates') {
						load_template($dir.'/'.$file);
					} elseif($type == 'languages') {
						load_language($dir.'/'.$file);
					}
				}
			}
		closedir($handle);
		}
	}
	
	// Check if there was a database error
	if($database->is_error()) {
		set_error($database->get_error());
	}

// end of if install_tables	
} else {
	/**
	 *	DB - Exists
	 *	Tables also?
	 *
	 */
	$requested_tables = array("pages","sections","settings","users","groups","search","addons");
	for($i=0;$i<count($requested_tables);$i++) $requested_tables[$i] = $table_prefix.$requested_tables[$i];
	
	$result = mysql_list_tables( DB_NAME );
	$all_tables = array();
	for($i=0; $i < mysql_num_rows($result); $i++) $all_tables[] = mysql_table_name($result, $i);

	$missing_tables = array();
	foreach($requested_tables as $temp_table) {
		if (!in_array($temp_table, $all_tables)) {
			$missing_tables[] = $temp_table;
		}
	}
	
	/**
	 *	If one or more needed tables are missing, so 
	 *	we can't go on and have to display an error
	 */
	if ( count($missing_tables) > 0 ) {
		$error_message  = "One or more tables are missing in the selected database <b><font color='#990000'>".DB_NAME."</font></b>.<br />";
		$error_message .= "Please install the missing tables or choose 'install tables' as recommend.<br />";
		$error_message .= "Missing tables are: <b>".implode(", ", $missing_tables)."</b>";
		
		set_error( $error_message );
	}
	
	/**
	 *	Try to get some default settings ...
	 */
	$vars = array(
		'DEFAULT_THEME'	=> "wb_theme",
		'THEME_URL'		=> WB_URL."/templates/wb_theme",
		'THEME_PATH'	=> WB_PATH."/templates/wb_theme",
		'LANGUAGE'		=> $_POST['default_language'],
		'SERVER_EMAIL'	=> "admin@yourdomain.com",
		'SMART_LOGIN'	=> false
	);
	foreach($vars as $k => $v) if (!defined($k)) define($k, $v);
	
	if (!isset($MESSAGE)) include (WB_PATH."/languages/".LANGUAGE.".php");
	
	/**
	 *	The important part ...
	 *	Is there an valid user?
	 */
	$result = $database->query("SELECT * from ".$table_prefix."users where username='".$_POST['admin_username']."'");
	if ( $database->is_error() ) {
		set_error ($database->get_error() );
	}
	if ($result->numRows() == 0) {
		/**
		 *	No matches found ... user properly unknown
	 	 */
	 	set_error ("Unkown user. Please use a valid username.");
	} else {
	 	
		$data = $result->fetchRow();
	 	/**
	 	 *	Does the password match
	 	 */
	 	if ( md5($_POST['admin_password']) != $data['password']) {
	 		set_error ("Password didn't match");
	 	}
	}
}

$ThemeUrl = WB_URL.$admin->correct_theme_source('warning.html');
// Setup template object, parse vars to it, then parse it
$ThemePath = realpath(WB_PATH.$admin->correct_theme_source('login.htt'));

// Log the user in and go to Website Baker Administration
$thisApp = new Login(
		array(
				"MAX_ATTEMPS" => "50",
				"WARNING_URL" => $ThemeUrl."/warning.html",
				"USERNAME_FIELDNAME" => 'admin_username',
				"PASSWORD_FIELDNAME" => 'admin_password',
				"REMEMBER_ME_OPTION" => SMART_LOGIN,
				"MIN_USERNAME_LEN" => "2",
				"MIN_PASSWORD_LEN" => "3",
				"MAX_USERNAME_LEN" => "30",
				"MAX_PASSWORD_LEN" => "30",
				'LOGIN_URL' => ADMIN_URL."/login/index.php",
				'DEFAULT_URL' => ADMIN_URL."/start/index.php",
				'TEMPLATE_DIR' => $ThemePath,
				'TEMPLATE_FILE' => 'login.htt',
				'FRONTEND' => false,
				'FORGOTTEN_DETAILS_APP' => ADMIN_URL."/login/forgot/index.php",
				'USERS_TABLE' => TABLE_PREFIX."users",
				'GROUPS_TABLE' => TABLE_PREFIX."groups",
		)
);
