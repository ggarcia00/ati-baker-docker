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
 * @version         $Id: class.admin.php 1281 2010-01-30 04:57:58Z Luisehahne $
 * @filesource		$HeadURL: http://svn.websitebaker2.org/branches/2.8.x/wb/framework/class.admin.php $
 * @lastmodified    $Date: 2010-01-30 05:57:58 +0100 (Sa, 30. Jan 2010) $
 *
 */

if(!defined('WB_URL')) {
	header('Location: ../index.php');
	exit(0);
}

require_once(WB_PATH.'/framework/class.wb.php');

// Include PHPLIB template class
require_once(WB_PATH."/include/phplib/template.inc");

// Get WB version
require_once(ADMIN_PATH.'/interface/version.php');

// Include EditArea wrapper functions
require_once(WB_PATH . '/include/editarea/wb_wrapper_edit_area.php');

/*
Begin user changeable settings
*/


class admin extends wb {
	// Authenticate user then auto print the header
	function admin($section_name, $section_permission = 'start', $auto_header = true, $auto_auth = true) {
		$this->wb();
		global $MESSAGE;
		// Specify the current applications name
		$this->section_name = $section_name;
		$this->section_permission = $section_permission;
		// Authenticate the user for this application
		if($auto_auth == true) {
			// First check if the user is logged-in
			if($this->is_authenticated() == false) {
				header('Location: '.ADMIN_URL.'/login/index.php');
				exit(0);
			}
			// Now check if they are allowed in this section
			if($this->get_permission($section_permission) == false) {
				die($MESSAGE['ADMIN']['INSUFFICIENT_PRIVELLIGES']);
			}
		}
		
		// Check if the backend language is also the selected language. If not, send headers again.
		global $database;
		$get_user_language = @$database->query("SELECT language FROM ".TABLE_PREFIX.
			"users WHERE user_id = '" .(int) $this->get_user_id() ."'");
		$user_language = ($get_user_language) ? $get_user_language->fetchRow() : '';
		// prevent infinite loop if language file is not XX.php (e.g. DE_du.php)
		$user_language = substr($user_language[0],0,2);
		// obtain the admin folder (e.g. /admin)
		$admin_folder = str_replace(WB_PATH, '', ADMIN_PATH);
		if((LANGUAGE != $user_language) && file_exists(WB_PATH .'/languages/' .$user_language .'.php')
			&& strpos($_SERVER['PHP_SELF'],$admin_folder.'/') !== false) {
			// check if page_id is set
			$page_id_url = (isset($_GET['page_id'])) ? '&page_id=' .(int) $_GET['page_id'] : '';
			$section_id_url = (isset($_GET['section_id'])) ? '&section_id=' .(int) $_GET['section_id'] : '';
			if(isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] != '') { // check if there is an query-string
				header('Location: '.$_SERVER['PHP_SELF'] .'?lang='.$user_language .$page_id_url .$section_id_url.'&'.$_SERVER['QUERY_STRING']);
			} else {
				header('Location: '.$_SERVER['PHP_SELF'] .'?lang='.$user_language .$page_id_url .$section_id_url);
			}
			exit();
		}

		// Auto header code
		if($auto_header == true) {
			$this->print_header();
		}
	}
	
	// Print the admin header
	function print_header($body_tags = '') {
		// Get vars from the language file
		global $MENU;
		global $MESSAGE;
		global $TEXT;
		// Connect to database and get website title
		global $database;
		$get_title = $database->query("SELECT value FROM ".TABLE_PREFIX."settings WHERE name = 'website_title'");
		$title = $get_title->fetchRow();
		$header_template = new Template(THEME_PATH.'/templates');
		$header_template->set_file('page', 'header.htt');
		$header_template->set_block('page', 'header_block', 'header');
		if(defined('DEFAULT_CHARSET')) {
			$charset=DEFAULT_CHARSET;
		} else {
			$charset='utf-8';
		}

		// work out the URL for the 'View menu' link in the WB backend
		// if the page_id is set, show this page otherwise show the root directory of WB
		$view_url = WB_URL;
		if(isset($_GET['page_id'])) {
			// extract page link from the database
			$result = @$database->query("SELECT link FROM " .TABLE_PREFIX ."pages WHERE page_id = '" .(int) addslashes($_GET['page_id']) ."'");
			$row = @$result->fetchRow();
			if($row) $view_url .= PAGES_DIRECTORY .$row['link']. PAGE_EXTENSION;
		}

		$header_template->set_var(	array(
													'SECTION_NAME' => $MENU[strtoupper($this->section_name)],
													'BODY_TAGS' => $body_tags,
													'WEBSITE_TITLE' => ($title['value']),
													'TEXT_ADMINISTRATION' => $TEXT['ADMINISTRATION'],
													'CURRENT_USER' => $MESSAGE['START']['CURRENT_USER'],
													'DISPLAY_NAME' => $this->get_display_name(),
													'CHARSET' => $charset,
													'LANGUAGE' => strtolower(LANGUAGE),
													'VERSION' => VERSION,
													'REVISION' => REVISION,
													'WB_URL' => WB_URL,
													'ADMIN_URL' => ADMIN_URL,
													'THEME_URL' => THEME_URL,
													'TITLE_START' => $MENU['START'],
													'TITLE_VIEW' => $MENU['VIEW'],
													'TITLE_HELP' => $MENU['HELP'],
													'TITLE_LOGOUT' =>  $MENU['LOGOUT'],
													'URL_VIEW' => $view_url,
													'URL_HELP' => 'http://www.websitebaker.org/',
													'BACKEND_MODULE_CSS' => $this->register_backend_modfiles('css'),	// adds backend.css
													'BACKEND_MODULE_JS'  => $this->register_backend_modfiles('js')		// adds backend.js
													)
											);

		// Create the menu
		$menu = array(
					array(ADMIN_URL.'/pages/index.php', '', $MENU['PAGES'], 'pages', 1),
					array(ADMIN_URL.'/media/index.php', '', $MENU['MEDIA'], 'media', 1),
					array(ADMIN_URL.'/addons/index.php', '', $MENU['ADDONS'], 'addons', 1),
					array(ADMIN_URL.'/preferences/index.php', '', $MENU['PREFERENCES'], 'preferences', 0),
					array(ADMIN_URL.'/settings/index.php', '', $MENU['SETTINGS'], 'settings', 1),
					array(ADMIN_URL.'/admintools/index.php', '', $MENU['ADMINTOOLS'], 'admintools', 1),
					array(ADMIN_URL.'/access/index.php', '', $MENU['ACCESS'], 'access', 1)
					);
		$header_template->set_block('header_block', 'linkBlock', 'link');
		foreach($menu AS $menu_item) {
			$link = $menu_item[0];
			$target = ($menu_item[1] == '') ? '_self' : $menu_item[1];
			$title = $menu_item[2];
			$permission_title = $menu_item[3];
			$required = $menu_item[4];
			$replace_old = array(ADMIN_URL, WB_URL, '/', 'index.php');
			if($required == false OR $this->get_link_permission($permission_title)) {
				$header_template->set_var('LINK', $link);
				$header_template->set_var('TARGET', $target);
				// If link is the current section apply a class name
				if($permission_title == strtolower($this->section_name)) {
					$header_template->set_var('CLASS', $menu_item[3] . ' current');
				} else {
					$header_template->set_var('CLASS', $menu_item[3]);
				}
				$header_template->set_var('TITLE', $title);
				// Print link
				$header_template->parse('link', 'linkBlock', true);
			}
		}
		$header_template->parse('header', 'header_block', false);
		$header_template->pparse('output', 'page');
	}
	
	// Print the admin footer
	function print_footer() {
		// include the required file for Javascript admin
		if(file_exists(WB_PATH.'/modules/jsadmin/jsadmin_backend_include.php')){
		@include(WB_PATH.'/modules/jsadmin/jsadmin_backend_include.php');
		}
		$footer_template = new Template(THEME_PATH.'/templates');
		$footer_template->set_file('page', 'footer.htt');
		$footer_template->set_block('page', 'footer_block', 'header');
		$footer_template->set_var(array(
						'BACKEND_BODY_MODULE_JS' => $this->register_backend_modfiles_body('js'),
						'WB_URL' => WB_URL,
						'WB_PATH' => WB_PATH,
						'ADMIN_URL' => ADMIN_URL,
						'THEME_URL' => THEME_URL,
			 ) );
		$footer_template->parse('header', 'footer_block', false);
		$footer_template->pparse('output', 'page');
	}
	
	// Return a system permission
	function get_permission($name, $type = 'system') {
		// Append to permission type
		$type .= '_permissions';
		// Check if we have a section to check for
		if($name == 'start') {
			return true;
		} else {
			// Set system permissions var
			$system_permissions = $this->get_session('SYSTEM_PERMISSIONS');
			// Set module permissions var
			$module_permissions = $this->get_session('MODULE_PERMISSIONS');
			// Set template permissions var
			$template_permissions = $this->get_session('TEMPLATE_PERMISSIONS');
			// Return true if system perm = 1
			if (isset($$type) && is_array($$type) && is_numeric(array_search($name, $$type))) {
				if($type == 'system_permissions') {
					return true;
				} else {
					return false;
				}
			} else {
				if($type == 'system_permissions') {
					return false;
				} else {
					return true;
				}
			}
		}
	}
		
	function get_user_details($user_id) {
		global $database;
		$query_user = "SELECT username,display_name FROM ".TABLE_PREFIX."users WHERE user_id = '$user_id'";
		$get_user = $database->query($query_user);
		if($get_user->numRows() != 0) {
			$user = $get_user->fetchRow();
		} else {
			$user['display_name'] = 'Unknown';
			$user['username'] = 'unknown';
		}
		return $user;
	}	
	
	function get_page_details($page_id) {
		global $database;
		$query = "SELECT page_id,page_title,menu_title,modified_by,modified_when FROM ".TABLE_PREFIX."pages WHERE page_id = '$page_id'";
		$results = $database->query($query);
		if($database->is_error()) {
			$this->print_header();
			$this->print_error($database->get_error());
		}
		if($results->numRows() == 0) {
			$this->print_header();
			$this->print_error($MESSAGE['PAGES']['NOT_FOUND']);
		}
		$results_array = $results->fetchRow();
		return $results_array;
	}	
	
	/** Function get_page_permission takes either a numerical page_id,
	 * upon which it looks up the permissions in the database,
	 * or an array with keys admin_groups and admin_users  
	 */
	function get_page_permission($page,$action='admin') {
		if ($action!='viewing') $action='admin';
		$action_groups=$action.'_groups';
		$action_users=$action.'_users';
		if (is_array($page)) {
				$groups=$page[$action_groups];
				$users=$page[$action_users];
		} else {				
			global $database;
			$results = $database->query("SELECT $action_groups,$action_users FROM ".TABLE_PREFIX."pages WHERE page_id = '$page'");
			$result = $results->fetchRow();
			$groups = explode(',', str_replace('_', '', $result[$action_groups]));
			$users = explode(',', str_replace('_', '', $result[$action_users]));
		}

		$in_group = FALSE;
		foreach($this->get_groups_id() as $cur_gid){
		    if (in_array($cur_gid, $groups)) {
		        $in_group = TRUE;
		    }
		}
		if((!$in_group) AND !is_numeric(array_search($this->get_user_id(), $users))) {
			return false;
		}
		return true;
	}
		

	// Returns a system permission for a menu link
	function get_link_permission($title) {
		$title = str_replace('_blank', '', $title);
		$title = strtolower($title);
		// Set system permissions var
		$system_permissions = $this->get_session('SYSTEM_PERMISSIONS');
		// Set module permissions var
		$module_permissions = $this->get_session('MODULE_PERMISSIONS');
		if($title == 'start') {
			return true;
		} else {
			// Return true if system perm = 1
			if(is_numeric(array_search($title, $system_permissions))) {
				return true;
			} else {
				return false;
			}
		}
	}

	// Function to add optional module Javascript or CSS stylesheets into the <body> section of the backend
	function register_backend_modfiles_body($file_id="js")
		{
		// sanity check of parameter passed to the function
		$file_id = strtolower($file_id);
		if($file_id !== "javascript" && $file_id !== "js")
		{
			return;
		}
		global $database;
        $body_links = "";
		// define default baselink and filename for optional module javascript and stylesheet files
		if($file_id == "js") {
			$base_link = '<script type="text/javascript" src="'.WB_URL.'/modules/{MODULE_DIRECTORY}/backend_body.js"></script>';
			$base_file = "backend_body.js";
		}
		// check if backend_body.js files needs to be included to the <body></body> section of the backend
		if(isset($_GET['tool']))
			{
			// check if displayed page contains a installed admin tool
			$result = $database->query("SELECT * FROM " .TABLE_PREFIX ."addons
				WHERE type = 'module' AND function = 'tool' AND directory = '".addslashes($_GET['tool'])."'");
			if($result->numRows())
				{
				// check if admin tool directory contains a backend_body.js file to include
				$tool = $result->fetchRow();
				if(file_exists(WB_PATH ."/modules/" .$tool['directory'] ."/$base_file"))
				{
					// return link to the backend_body.js file
					return str_replace("{MODULE_DIRECTORY}", $tool['directory'], $base_link);
				}
			}
		} elseif(isset($_GET['page_id']) or isset($_POST['page_id']))
		{
			// check if displayed page in the backend contains a page module
			if (isset($_GET['page_id']))
			{
				$page_id = (int) addslashes($_GET['page_id']);
			} else {
				$page_id = (int) addslashes($_POST['page_id']);
			}
			// gather information for all models embedded on actual page
			$query_modules = $database->query("SELECT module FROM " .TABLE_PREFIX ."sections
				WHERE page_id=$page_id");
			while($row = $query_modules->fetchRow()) {
				// check if page module directory contains a backend_body.js file
				if(file_exists(WB_PATH ."/modules/" .$row['module'] ."/$base_file")) {
					// create link with backend_body.js source for the current module
					$tmp_link = str_replace("{MODULE_DIRECTORY}", $row['module'], $base_link);
					// ensure that backend_body.js is only added once per module type
					if(strpos($body_links, $tmp_link) === false) {
						$body_links .= $tmp_link ."\n";
					}
				}
			}
			// write out links with all external module javascript/CSS files, remove last line feed
			return rtrim($body_links);
		}
	}


	// Function to add optional module Javascript or CSS stylesheets into the <head> section of the backend
	function register_backend_modfiles($file_id="css") {
		// sanity check of parameter passed to the function
		$file_id = strtolower($file_id);
		if($file_id !== "css" && $file_id !== "javascript" && $file_id !== "js") {
			return;
		}

		global $database;
		// define default baselink and filename for optional module javascript and stylesheet files
		$head_links = "";
		if($file_id == "css") {
      	$base_link = '<link href="'.WB_URL.'/modules/{MODULE_DIRECTORY}/backend.css"';
			$base_link.= ' rel="stylesheet" type="text/css" media="screen" />';
			$base_file = "backend.css";
		} else {
			$base_link = '<script type="text/javascript" src="'.WB_URL.'/modules/{MODULE_DIRECTORY}/backend.js"></script>';
			$base_file = "backend.js";
		}

		// check if backend.js or backend.css files needs to be included to the <head></head> section of the backend
		if(isset($_GET['tool'])) {
			// check if displayed page contains a installed admin tool
			$result = $database->query("SELECT * FROM " .TABLE_PREFIX ."addons
				WHERE type = 'module' AND function = 'tool' AND directory = '".addslashes($_GET['tool'])."'");

			if($result->numRows()) {
				// check if admin tool directory contains a backend.js or backend.css file to include
				$tool = $result->fetchRow();
				if(file_exists(WB_PATH ."/modules/" .$tool['directory'] ."/$base_file")) {
        			// return link to the backend.js or backend.css file
					return str_replace("{MODULE_DIRECTORY}", $tool['directory'], $base_link);
				}
			}
		} elseif(isset($_GET['page_id']) or isset($_POST['page_id'])) {
			// check if displayed page in the backend contains a page module
			if (isset($_GET['page_id'])) {
				$page_id = (int) addslashes($_GET['page_id']);
			} else {
				$page_id = (int) addslashes($_POST['page_id']);
			}

    		// gather information for all models embedded on actual page
			$query_modules = $database->query("SELECT module FROM " .TABLE_PREFIX ."sections
				WHERE page_id=$page_id");

    		while($row = $query_modules->fetchRow()) {
				// check if page module directory contains a backend.js or backend.css file
      		if(file_exists(WB_PATH ."/modules/" .$row['module'] ."/$base_file")) {
					// create link with backend.js or backend.css source for the current module
					$tmp_link = str_replace("{MODULE_DIRECTORY}", $row['module'], $base_link);
        			// ensure that backend.js or backend.css is only added once per module type
        			if(strpos($head_links, $tmp_link) === false) {
						$head_links .= $tmp_link ."\n";
					}
				}
    		}
    		// write out links with all external module javascript/CSS files, remove last line feed
			return rtrim($head_links);
		}
	}
}

?>