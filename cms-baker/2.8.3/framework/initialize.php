<?php
/**
 *
 * @category        framework
 * @package         initialize
 * @author          WebsiteBaker Project
 * @copyright       2004-2009, Ryan Djurovich
 * @copyright       2009-2011, Website Baker Org. e.V.
 * @link			http://www.websitebaker2.org/
 * @license         http://www.gnu.org/licenses/gpl.html
 * @platform        WebsiteBaker 2.8.x
 * @requirements    PHP 5.2.2 and higher
 * @version         $Id: initialize.php 1598 2012-02-06 15:32:03Z Luisehahne $
 * @filesource		$HeadURL: svn://isteam.dynxs.de/wb_svn/wb280/tags/2.8.3/wb/framework/initialize.php $
 * @lastmodified    $Date: 2012-02-06 16:32:03 +0100 (Mo, 06. Feb 2012) $
 *
 */

/* -------------------------------------------------------- */
// Must include code to stop this file being accessed directly
require_once(dirname(__FILE__).'/globalExceptionHandler.php');
if(!defined('WB_PATH')) { throw new IllegalFileException(); }
/* -------------------------------------------------------- */
//set_include_path(get_include_path() . PATH_SEPARATOR . WB_PATH);

if (file_exists(WB_PATH.'/framework/class.database.php')) {
	$sTmpReferer = '';
	if (isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] != '') {
	        $tmp0 = parse_url($_SERVER['HTTP_REFERER']);
       if ($tmp0 !== false) {
                $tmp0['host'] = isset($tmp0['host']) ? $tmp0['host'] : '';
                $tmp0['path'] = isset($tmp0['path']) ? $tmp0['path'] : '';
                $tmp0['fragment'] = isset($tmp0['fragment']) ? '#'.$tmp0['fragment'] : '';
                $tmp1 = parse_url(WB_URL);
                if ($tmp1 !== false) {
                        $tmp1['host'] = isset($tmp1['host']) ? $tmp1['host'] : '';
                        $tmp1['path'] = isset($tmp1['path']) ? $tmp1['path'] : '';
                        if (strpos($tmp0['host'].$tmp0['path'], $tmp1['host'].$tmp1['path']) !== false) {
                                $sTmpReferer = WB_URL.$tmp0['path'].$tmp0['fragment'];
                        }
                }
        }
	}
	$_SERVER['HTTP_REFERER'] = $sTmpReferer;
	date_default_timezone_set('UTC');
	require_once(WB_PATH.'/framework/class.database.php');

	// Create database class
	$database = new database();

    if(version_compare(PHP_VERSION, '5.3.0', '<'))
    {
        set_magic_quotes_runtime(0); // Disable magic_quotes_runtime
    }
	// Get website settings (title, keywords, description, header, and footer)
	$query_settings = "SELECT name,value FROM ".TABLE_PREFIX."settings";
	$get_settings = $database->query($query_settings);
	if($database->is_error()) { die($database->get_error()); }
	if($get_settings->numRows() == 0) { die("Settings not found"); }
	while($setting = $get_settings->fetchRow()) {
		$setting_name=strtoupper($setting['name']);
		$setting_value=$setting['value'];
		if ($setting_value=='false')
			$setting_value=false;
		if ($setting_value=='true')
			$setting_value=true;
		@define($setting_name,$setting_value);
	}
	@define('DO_NOT_TRACK', (isset($_SERVER['HTTP_DNT'])));
	$string_file_mode = STRING_FILE_MODE;
	define('OCTAL_FILE_MODE',(int) octdec($string_file_mode));
	$string_dir_mode = STRING_DIR_MODE;
	define('OCTAL_DIR_MODE',(int) octdec($string_dir_mode));
	$sSecMod = (defined('SECURE_FORM_MODULE') && SECURE_FORM_MODULE != '') ? '.'.SECURE_FORM_MODULE : '';
	$sSecMod = WB_PATH.'/framework/SecureForm'.$sSecMod.'.php';
	require_once($sSecMod);
	if (!defined("WB_INSTALL_PROCESS")) {
		// get CAPTCHA and ASP settings
		$table = TABLE_PREFIX.'mod_captcha_control';
		if( ($get_settings = $database->query("SELECT * FROM $table LIMIT 1")) ) {
			if($get_settings->numRows() == 0) { die("CAPTCHA-Settings not found"); }
			$setting = $get_settings->fetchRow();
			if($setting['enabled_captcha'] == '1') define('ENABLED_CAPTCHA', true);
			else define('ENABLED_CAPTCHA', false);
			if($setting['enabled_asp'] == '1') define('ENABLED_ASP', true);
			else define('ENABLED_ASP', false);
			define('CAPTCHA_TYPE', $setting['captcha_type']);
			define('ASP_SESSION_MIN_AGE', (int)$setting['asp_session_min_age']);
			define('ASP_VIEW_MIN_AGE', (int)$setting['asp_view_min_age']);
			define('ASP_INPUT_MIN_AGE', (int)$setting['asp_input_min_age']);
		}
	}

	// set error-reporting
	if(intval(ER_LEVEL) > 0 )
	{
		error_reporting(ER_LEVEL);
		if( intval(ini_get ( 'display_errors' )) == 0 )
		{
			ini_set('display_errors', 1);
		}
	}
	// Start a session
	if(!defined('SESSION_STARTED')) {
		session_name(APP_NAME.'_session_id');
		@session_start();
		define('SESSION_STARTED', true);
	}
	if(defined('ENABLED_ASP') && ENABLED_ASP && !isset($_SESSION['session_started']))
		$_SESSION['session_started'] = time();

	// Get users language
	if(isset($_GET['lang']) AND $_GET['lang'] != '' AND !is_numeric($_GET['lang']) AND strlen($_GET['lang']) == 2) {
	  	define('LANGUAGE', strtoupper($_GET['lang']));
		$_SESSION['LANGUAGE']=LANGUAGE;
	} else {
		if(isset($_SESSION['LANGUAGE']) AND $_SESSION['LANGUAGE'] != '') {
			define('LANGUAGE', $_SESSION['LANGUAGE']);
		} else {
			define('LANGUAGE', DEFAULT_LANGUAGE);
		}
	}
	
	// Load Language file
	if(!defined('LANGUAGE_LOADED')) {
		if(!file_exists(WB_PATH.'/languages/'.LANGUAGE.'.php')) {
			exit('Error loading language file '.LANGUAGE.', please check configuration');
		} else {
			require_once(WB_PATH.'/languages/'.LANGUAGE.'.php');
		}
	}
	
	// Get users timezone
	if(isset($_SESSION['TIMEZONE'])) {
		define('TIMEZONE', $_SESSION['TIMEZONE']);
	} else {
		define('TIMEZONE', DEFAULT_TIMEZONE);
	}
	// Get users date format
	if(isset($_SESSION['DATE_FORMAT'])) {
		define('DATE_FORMAT', $_SESSION['DATE_FORMAT']);
	} else {
		define('DATE_FORMAT', DEFAULT_DATE_FORMAT);
	}
	// Get users time format
	if(isset($_SESSION['TIME_FORMAT'])) {
		define('TIME_FORMAT', $_SESSION['TIME_FORMAT']);
	} else {
		define('TIME_FORMAT', DEFAULT_TIME_FORMAT);
	}

	// Set Theme dir
	define('THEME_URL', WB_URL.'/templates/'.DEFAULT_THEME);
	define('THEME_PATH', WB_PATH.'/templates/'.DEFAULT_THEME);

    // extended wb_settings
	define('EDIT_ONE_SECTION', false);

	define('EDITOR_WIDTH', 0);

}