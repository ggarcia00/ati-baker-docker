<?php
/**
 *
 * @category        frontend
 * @package         functions
 * @author          WebsiteBaker Project
 * @copyright       2004-2009, Ryan Djurovich
 * @copyright       2009-2010, Website Baker Org. e.V.
 * @link			http://www.websitebaker2.org/
 * @license         http://www.gnu.org/licenses/gpl.html
 * @platform        WebsiteBaker 2.8.x
 * @requirements    PHP 4.3.4 and higher
 * @version         $Id: frontend.functions.php 1277 2010-01-28 05:18:18Z Luisehahne $
 * @filesource		$HeadURL: http://svn.websitebaker2.org/branches/2.8.x/wb/framework/frontend.functions.php $
 * @lastmodified    $Date: 2010-01-28 06:18:18 +0100 (Do, 28. Jan 2010) $
 *
*/

if(!defined('WB_URL')) {
	header('Location: ../index.php');
	exit(0);
}

// references to objects and variables that changed their names

$admin = &$wb;

$default_link=&$wb->default_link;

$page_trail=&$wb->page_trail;
$page_description=&$wb->page_description;
$page_keywords=&$wb->page_keywords;
$page_link=&$wb->link;

// extra_sql is not used anymore - this is basically a register_globals exploit prevention...
$extra_sql=&$wb->extra_sql;
$extra_where_sql=&$wb->extra_where_sql;

$include_head_link_css = '';
$include_body_links = '';
$include_head_links = '';
// workout to included frontend.css, fronten.js and frontend_body.js in snippets
$query="SELECT directory FROM ".TABLE_PREFIX."addons WHERE type = 'module' AND function = 'snippet'";
$query_result=$database->query($query);
if ($query_result->numRows()>0) {
	while ($row = $query_result->fetchRow()) {
		$module_dir = $row['directory'];
		if (file_exists(WB_PATH.'/modules/'.$module_dir.'/include.php')) {
			include(WB_PATH.'/modules/'.$module_dir.'/include.php');
			/* check if frontend.css file needs to be included into the <head></head> of index.php
			*/
			if( file_exists(WB_PATH .'/modules/'.$module_dir.'/frontend.css')) {
				$include_head_link_css .= '<link href="'.WB_URL.'/modules/'.$module_dir.'/frontend.css"';
				$include_head_link_css .= ' rel="stylesheet" type="text/css" media="screen" />'."\n";
				$include_head_file = 'frontend.css';
			}
			// check if frontend.js file needs to be included into the <body></body> of index.php
			if(file_exists(WB_PATH .'/modules/'.$module_dir.'/frontend.js')) {
				$include_head_links .= '<script src="'.WB_URL.'/modules/'.$module_dir.'/frontend.js" type="text/javascript"></script>'."\n";
				$include_head_file = 'frontend.js';
			}
			// check if frontend_body.js file needs to be included into the <body></body> of index.php
			if(file_exists(WB_PATH .'/modules/'.$module_dir.'/frontend_body.js')) {
				$include_body_links .= '<script src="'.WB_URL.'/modules/'.$module_dir.'/frontend_body.js" type="text/javascript"></script>'."\n";
				$include_body_file = 'frontend_body.js';
			}
		}
	}
}

// Frontend functions
if (!function_exists('page_link')) {
	function page_link($link) {
		global $wb;
		return $wb->page_link($link);
	}
}

//function to highlight search results
if(!function_exists('search_highlight')) {
function search_highlight($foo='', $arr_string=array()) {
	require_once(WB_PATH.'/framework/functions.php');
	static $string_ul_umlaut = FALSE;
	static $string_ul_regex = FALSE;
	if($string_ul_umlaut===FALSE || $string_ul_regex===FALSE)
		require(WB_PATH.'/search/search_convert.php');
	$foo = entities_to_umlauts($foo, 'UTF-8');
	array_walk($arr_string, create_function('&$v,$k','$v = preg_quote($v, \'~\');'));
	$search_string = implode("|", $arr_string);
	$string = str_replace($string_ul_umlaut, $string_ul_regex, $search_string);
	// the highlighting
	// match $string, but not inside <style>...</style>, <script>...</script>, <!--...--> or HTML-Tags
	// Also droplet tags are now excluded from highlighting.
	// split $string into pieces - "cut away" styles, scripts, comments, HTML-tags and eMail-addresses
	// we have to cut <pre> and <code> as well.
	// for HTML-Tags use <(?:[^<]|<.*>)*> which will match strings like <input ... value="<b>value</b>" >
	$matches = preg_split("~(\[\[.*\]\]|<style.*</style>|<script.*</script>|<pre.*</pre>|<code.*</code>|<!--.*-->|<(?:[^<]|<.*>)*>|\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,8}\b)~iUs",$foo,-1,(PREG_SPLIT_DELIM_CAPTURE|PREG_SPLIT_NO_EMPTY));
	if(is_array($matches) && $matches != array()) {
		$foo = "";
		foreach($matches as $match) {
			if($match{0}!="<" && !preg_match('/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,8}$/i', $match) && !preg_match('~\[\[.*\]\]~', $match)) {
				$match = str_replace(array('&lt;', '&gt;', '&amp;', '&quot;', '&#039;', '&nbsp;'), array('<', '>', '&', '"', '\'', "\xC2\xA0"), $match);
				$match = preg_replace('~('.$string.')~ui', '_span class=_highlight__$1_/span_',$match);
				$match = str_replace(array('&', '<', '>', '"', '\'', "\xC2\xA0"), array('&amp;', '&lt;', '&gt;', '&quot;', '&#039;', '&nbsp;'), $match);
				$match = str_replace(array('_span class=_highlight__', '_/span_'), array('<span class="highlight">', '</span>'), $match);
			}
			$foo .= $match;
		}
	}
	
	if(DEFAULT_CHARSET != 'utf-8') {
		$foo = umlauts_to_entities($foo, 'UTF-8');
	}
	return $foo;
}
}

// Old menu call invokes new menu function
if (!function_exists('page_menu')) {
	function page_menu($parent = 0, $menu_number = 1, $item_template = '<li[class]>[a] [menu_title] [/a]</li>', $menu_header = '<ul>', $menu_footer = '</ul>', $default_class = ' class="menu_default"', $current_class = ' class="menu_current"', $recurse = LEVEL) {
		global $wb;
		$wb->menu_number=$menu_number;
		$wb->menu_item_template=$item_template;
		$wb->menu_item_footer='';
		$wb->menu_parent = $parent;
		$wb->menu_header = $menu_header; 
		$wb->menu_footer = $menu_footer;
		$wb->menu_default_class = $default_class;
		$wb->menu_current_class = $current_class;
		$wb->menu_recurse = $recurse+2; 	
		$wb->menu();
		unset($wb->menu_parent);
		unset($wb->menu_number);
		unset($wb->menu_item_template);
		unset($wb->menu_item_footer);
		unset($wb->menu_header);
		unset($wb->menu_footer);
		unset($wb->menu_default_class);
		unset($wb->menu_current_class);
		unset($wb->menu_start_level);
		unset($wb->menu_collapse);
		unset($wb->menu_recurse);
	}
}

if (!function_exists('show_menu')) {
	function show_menu($menu_number = NULL, $start_level=NULL, $recurse = NULL, $collapse = NULL, $item_template = NULL, $item_footer = NULL, $menu_header = NULL, $menu_footer = NULL, $default_class = NULL, $current_class = NULL, $parent = NULL) {
		global $wb;
		if (isset($menu_number))
			$wb->menu_number=$menu_number;
		if (isset($start_level))
			$wb->menu_start_level=$start_level;
		if (isset($recurse))
			$wb->menu_recurse=$recurse;
		if (isset($collapse))
			$wb->menu_collapse=$collapse;
		if (isset($item_template))
			$wb->menu_item_template=$item_template;
		if (isset($item_footer))
			$wb->menu_item_footer=$item_footer;
		if (isset($menu_header))
			$wb->menu_header=$menu_header;
		if (isset($menu_footer))
			$wb->menu_footer=$menu_footer;
		if (isset($default_class))
			$wb->menu_default_class=$default_class;
		if (isset($current_class))
			$wb->menu_current_class=$current_class;
		if (isset($parent))
			$wb->menu_parent=$parent;
		$wb->menu();
		unset($wb->menu_recurse);
		unset($wb->menu_parent);
		unset($wb->menu_start_level);
	}
}

/*
* Função que monta o menu de acordo com o css da UEL
*/
if (!function_exists('page_menu_uel')) {
        //Marcelo - 12/01/2011 - 09:08
        function page_menu_uel($menu_number = 1, $start_level=0, $recurse = -1, $collapse = false, $item_template = '<li class="submenu">[a][menu_title][/a]', $item_footer = '</li>', $menu_header = '<ul>', $menu_footer = '</ul>', $default_class = 'class="submenu"', $parent = 0) {
                global $wb;
                $wb->menu_number=$menu_number;
                $wb->menu_start_level=$start_level;
                $wb->menu_recurse=$recurse;
                $wb->menu_collapse=$collapse;
                $wb->menu_item_template=$item_template;
                $wb->menu_item_footer=$item_footer;
                $wb->menu_header=$menu_header;
                $wb->menu_footer=$menu_footer;
                $wb->menu_default_class=$default_class;
                $wb->menu_parent=$parent;

                $wb->menu_uel();
                unset($wb->menu_number);
                unset($wb->menu_start_level);
                unset($wb->menu_recurse);
                unset($wb->menu_collapse);
                unset($wb->menu_item_template);
                unset($wb->menu_item_footer);
                unset($wb->menu_header);
                unset($wb->menu_footer);
                unset($wb->menu_default_class);
                unset($wb->menu_start_level);
                unset($wb->menu_parent);
        }
}

/*
* Função que monta o menu de acordo com o css da UEL
*/
if (!function_exists('show_menu_uel')) {
        function show_menu_uel($menu_number = NULL, $start_level=NULL, $recurse = NULL, $collapse = NULL, $item_template = NULL, $item_footer = NULL, $menu_header = NULL, $menu_footer = NULL, $default_class = NULL, $current_class = NULL, $parent = NULL) {
                global $wb;
                if (isset($menu_number))
                        $wb->menu_number=$menu_number;
                if (isset($start_level))
                        $wb->menu_start_level=$start_level;
                if (isset($recurse))
                        $wb->menu_recurse=$recurse;
                if (isset($collapse))
                        $wb->menu_collapse=$collapse;
                if (isset($item_template))
                        $wb->menu_item_template=$item_template;
                if (isset($item_footer))
                        $wb->menu_item_footer=$item_footer;
                if (isset($menu_header))
                        $wb->menu_header=$menu_header;
                if (isset($menu_footer))
                        $wb->menu_footer=$menu_footer;
                if (isset($default_class))
                        $wb->menu_default_class=$default_class;
                if (isset($current_class))
                        $wb->menu_current_class=$current_class;
                if (isset($parent))
                        $wb->menu_parent=$parent;
                $wb->menu_uel();
                unset($wb->menu_recurse);
                unset($wb->menu_parent);
                unset($wb->menu_start_level);
        }
}

if (!function_exists('page_content')) {
	function page_content($block = 1) {
		// Get outside objects
		global $TEXT,$MENU,$HEADING,$MESSAGE;
		global $globals;
		global $database;
		global $wb;
		$admin = & $wb;
		if ($wb->page_access_denied==true)
        {
	        echo $MESSAGE['FRONTEND']['SORRY_NO_VIEWING_PERMISSIONS'];
			return;
		}
		if ($wb->page_no_active_sections==true)
        {
	        echo $MESSAGE['FRONTEND']['SORRY_NO_ACTIVE_SECTIONS'];
			return;
		}
		if(isset($globals) AND is_array($globals))
        {
            foreach($globals AS $global_name)
            {
                global $$global_name;
                }
        }
		// Make sure block is numeric
		if(!is_numeric($block)) { $block = 1; }
		// Include page content
		if(!defined('PAGE_CONTENT') OR $block!=1)
        {
			$page_id=$wb->page_id;
            // set session variable to save page_id only if PAGE_CONTENT is empty
            $_SESSION['PAGE_ID'] = !isset($_SESSION['PAGE_ID']) ? $page_id : $_SESSION['PAGE_ID'];
            // set to new value if page_id changed and not 0
            if(($page_id != 0) AND ($_SESSION['PAGE_ID'] <> $page_id))
            {
            $_SESSION['PAGE_ID'] = $page_id;
            }

			// First get all sections for this page
			$query_sections = $database->query("SELECT section_id,module,publ_start,publ_end FROM ".TABLE_PREFIX."sections WHERE page_id = '".$page_id."' AND block = '$block' ORDER BY position");
			// If none were found, check if default content is supposed to be shown
			if($query_sections->numRows() == 0) {
				if ($wb->default_block_content=='none') {
					return;
				}
				if (is_numeric($wb->default_block_content)) {
					$page_id=$wb->default_block_content;
				} else {
					$page_id=$wb->default_page_id;
				}				
				$query_sections = $database->query("SELECT section_id,module,publ_start,publ_end FROM ".TABLE_PREFIX."sections WHERE page_id = '".$page_id."' AND block = '$block' ORDER BY position");
				// Still no cotent found? Give it up, there's just nothing to show!
				if($query_sections->numRows() == 0) {
					return;
				}
			}
			// Loop through them and include their module file
			while($section = $query_sections->fetchRow()) {
				// skip this section if it is out of publication-date
				$now = time();
				if( !(($now<=$section['publ_end'] || $section['publ_end']==0) && ($now>=$section['publ_start'] || $section['publ_start']==0)) ) {
					continue;
				}
				$section_id = $section['section_id'];
				$module = $section['module'];
				// make a anchor for every section.
				if(defined('SEC_ANCHOR') && SEC_ANCHOR!='') {
					echo '<a class="section_anchor" id="'.SEC_ANCHOR.$section_id.'" name="'.SEC_ANCHOR.$section_id.'"></a>';
				}

				// fetch content -- this is where to place possible output-filters (before highlighting)
				ob_start(); // fetch original content
				require(WB_PATH.'/modules/'.$module.'/view.php');
				$content = ob_get_contents();
				ob_end_clean();

				// highlights searchresults
				if(isset($_GET['searchresult']) && is_numeric($_GET['searchresult']) && !isset($_GET['nohighlight']) && isset($_GET['sstring']) && !empty($_GET['sstring'])) {
					$arr_string = explode(" ", $_GET['sstring']);
					if($_GET['searchresult']==2) { // exact match
						$arr_string[0] = str_replace("_", " ", $arr_string[0]);
					}
					echo search_highlight($content, $arr_string);
				} else {
					echo $content;
				}
			}
		}
        else
        {

			require(PAGE_CONTENT);
		}
	}
}

if (!function_exists('show_content')) {
	function show_content($block=1) {
		page_content($block);
	}
}

if (!function_exists('show_breadcrumbs'))
{
	function show_breadcrumbs($sep = ' &raquo; ',$level = 0, $links = true, $depth = -1, $title = 'You are here: ')
    {
		global $wb;
		$page_id = $wb->page_id;

		if ($page_id != 0)
		{
	 		global $database;
			$counter = 0;
            // get links as array
            $bread_crumbs = $wb->page_trail;
            $count = sizeof($bread_crumbs);
            // level can't be greater than sum of links
            $level = ($count <= $level ) ? $count-1 : $level;
            // set level from which to show, delete indexes in array
			$crumbs = array_slice($bread_crumbs, $level );
            $depth = ($depth <= 0) ? sizeof($crumbs) : $depth;
            // if empty array, set orginal links
            $crumbs = (!empty($crumbs)) ?  $crumbs : $wb->page_trail;
            $total_crumbs = ( ($depth <= 0) OR ($depth > sizeof($crumbs)) ) ? sizeof($crumbs) : $depth;
            print '<div class="breadcrumb"><span class="title">'.$title.'</span>';
          //  print_r($crumbs);
			foreach ($crumbs as $temp)
            {
                if($counter == $depth) { break; }
                    // set links and separator
					$query_menu = $database->query("SELECT * FROM ".TABLE_PREFIX."pages WHERE page_id = $temp");
					$page = $query_menu->fetchRow();

                    $show_crumb = (($links == true) AND ($temp != $page_id))
                            ? '<a href="'.page_link($page['link']).'" class="link">'.$page['menu_title'].'</a>'
                            : '<span class="crumb">'.MENU_TITLE.'</span>';

                    // Permission
                    switch ($page['visibility'])
                    {
                        case 'none' :
                        case 'hidden' :
                        // if show, you know there is an error in a hidden page
                            print $show_crumb.'&nbsp;';
                        break;
                        default :
                            print $show_crumb;
                        break;
                    }

                    if ( ( $counter <> $total_crumbs-1 ) )
                    {
                        print '<span class="separator">'.$sep.'</span>';
                    }
	            $counter++;
            }
            print "</div>\n";
		}
	}
}

// Function for page title
if (!function_exists('page_title')) {
	function page_title($spacer = ' - ', $template = '[WEBSITE_TITLE][SPACER][PAGE_TITLE]') {
		$vars = array('[WEBSITE_TITLE]', '[PAGE_TITLE]', '[MENU_TITLE]', '[SPACER]');
		$values = array(WEBSITE_TITLE, PAGE_TITLE, MENU_TITLE, $spacer);
		echo str_replace($vars, $values, $template);
	}
}

// Function for page description
if (!function_exists('page_description')) {
	function page_description() {
		global $wb;
		if ($wb->page_description!='') {
			echo $wb->page_description;
		} else {
			echo WEBSITE_DESCRIPTION;
		}
	}
}

// Function for page keywords
if (!function_exists('page_keywords')) {
	function page_keywords() {
		global $wb;
		if ($wb->page_keywords!='') {
			echo $wb->page_keywords;
		} else {
			echo WEBSITE_KEYWORDS;
		}
	}
}

// Function for page header
if (!function_exists('page_header')) {
	function page_header($date_format = 'Y') {
		echo WEBSITE_HEADER;
	}
}

// Function for page footer
if (!function_exists('page_footer')) {
	function page_footer($date_format = 'Y') {
		global $starttime;
		$vars = array('[YEAR]', '[PROCESS_TIME]');
		$processtime=array_sum(explode(" ",microtime()))-$starttime;
		$values = array(gmdate($date_format),$processtime);
		echo str_replace($vars, $values, WEBSITE_FOOTER);
	}
}

function bind_jquery ($file_id='jquery')
{
        $jquery_links = '';
		/* include the Javascript jquery api  */
		if( $file_id == 'jquery' AND file_exists(WB_PATH .'/include/jquery/jquery-min.js'))
        {
            $wbpath = str_replace('\\','/',WB_PATH);  // fixed localhost problem with ie
			$jquery_links .= "<script type=\"text/javascript\">\n"
                ."var URL = '".WB_URL."';\n"
               /* ."var WB_PATH = '".$wbpath."';\n" */
                ."var WB_URL = '".WB_URL."';\n"
                ."var TEMPLATE_DIR = '".TEMPLATE_DIR."';\n"
                ."</script>\n";

			$jquery_links .= '<script src="'.WB_URL.'/include/jquery/jquery-min.js" type="text/javascript"></script>'."\n";
			$jquery_links .= '<script src="'.WB_URL.'/include/jquery/jquery-ui-min.js" type="text/javascript"></script>'."\n";
			$jquery_links .= '<script src="'.WB_URL.'/include/jquery/jquery-insert.js" type="text/javascript"></script>'."\n";
            /* workout to insert ui.css and theme */
            $jquery_theme =  WB_PATH.'/modules/jquery/jquery_theme.js';
			$jquery_links .=  file_exists($jquery_theme)
                ? '<script src="'.WB_URL.'/modules/jquery/jquery_theme.js" type="text/javascript"></script>'."\n"
                : '<script src="'.WB_URL.'/include/jquery/jquery_theme.js" type="text/javascript"></script>'."\n";
            /* workout to insert plugins functions, set in templatedir */
            $jquery_frontend_file = TEMPLATE_DIR.'/jquery_frontend.js';
			$jquery_links .= file_exists(str_replace( WB_URL, WB_PATH, $jquery_frontend_file))
                ? '<script src="'.$jquery_frontend_file.'" type="text/javascript"></script>'."\n"
                : '';
		}
    return $jquery_links;
}


// Function to add optional module Javascript into the <body> section of the frontend
if(!function_exists('register_frontend_modfiles_body'))
{
	function register_frontend_modfiles_body($file_id="js")
    {
		// sanity check of parameter passed to the function
		$file_id = strtolower($file_id);
		if($file_id !== "css" && $file_id !== "javascript" && $file_id !== "js" && $file_id !== "jquery")
        {
			return;
		}

       // define constant indicating that the register_frontent_files was invoked
       if(!defined('MOD_FRONTEND_BODY_JAVASCRIPT_REGISTERED')) define('MOD_FRONTEND_BODY_JAVASCRIPT_REGISTERED', true);
		global $wb, $database, $include_body_links;
		// define default baselink and filename for optional module javascript files
		$body_links = "";

		/* include the Javascript jquery api  */
        $body_links .= bind_jquery($file_id);

		if($file_id !== "css" && $file_id == "js" && $file_id !== "jquery")
        {
    		$base_link = '<script src="'.WB_URL.'/modules/{MODULE_DIRECTORY}/frontend_body.js" type="text/javascript"></script>';
    		$base_file = "frontend_body.js";

			// ensure that frontend_body.js is only added once per module type
    		if(!empty($include_body_links))
            {
    			if(strpos($body_links, $include_body_links) === false)
                {
    				$body_links .= $include_body_links;
    			}
    			$include_body_links = '';
    		}

    		// gather information for all models embedded on actual page
    		$page_id = $wb->page_id;
    		$query_modules = $database->query("SELECT module FROM " .TABLE_PREFIX ."sections
    				WHERE page_id=$page_id AND module<>'wysiwyg'");

    		while($row = $query_modules->fetchRow())
            {
    			// check if page module directory contains a frontend_body.js file
    			if(file_exists(WB_PATH ."/modules/" .$row['module'] ."/$base_file"))
                {
    			// create link with frontend_body.js source for the current module
    				$tmp_link = str_replace("{MODULE_DIRECTORY}", $row['module'], $base_link);

    				// define constant indicating that the register_frontent_files_body was invoked
    					if(!defined('MOD_FRONTEND_BODY_JAVASCRIPT_REGISTERED')) { define('MOD_FRONTEND_BODY_JAVASCRIPT_REGISTERED', true);}

    				// ensure that frontend_body.js is only added once per module type
    				if(strpos($body_links, $tmp_link) === false)
                    {
    					$body_links .= $tmp_link;
    				}
    			}
    		}
        }

		print $body_links."\n"; ;
	}
}


// Function to add optional module Javascript or CSS stylesheets into the <head> section of the frontend
if(!function_exists('register_frontend_modfiles'))
{
	function register_frontend_modfiles($file_id="css")
    {
		// sanity check of parameter passed to the function
		$file_id = strtolower($file_id);
		if($file_id !== "css" && $file_id !== "javascript" && $file_id !== "js" && $file_id !== "jquery")
        {
			return;
		}

		global $wb, $database, $include_head_link_css, $include_head_links;
		// define default baselink and filename for optional module javascript and stylesheet files
		$head_links = "";

        switch ($file_id)
        {
            case 'css':
			$base_link = '<link href="'.WB_URL.'/modules/{MODULE_DIRECTORY}/frontend.css"';
			$base_link.= ' rel="stylesheet" type="text/css" media="screen" />';
			$base_file = "frontend.css";
    		if(!empty($include_head_link_css))
            {
              $head_links .=  !strpos($head_links, $include_head_link_css) ? $include_head_link_css : '';
              $include_head_link_css = '';
            }
            break;
            case 'jquery':
            $head_links .= bind_jquery($file_id);
            break;
            case 'js':
			$base_link = '<script src="'.WB_URL.'/modules/{MODULE_DIRECTORY}/frontend.js" type="text/javascript"></script>';
			$base_file = "frontend.js";
    		if(!empty($include_head_links))
            {
              $head_links .= !strpos($head_links, $include_head_links) ? $include_head_links : '';
              $include_head_links = '';
            }
            break;
            default:
            break;
		}

        if( $file_id != 'jquery')
        {
    		// gather information for all models embedded on actual page
    		$page_id = $wb->page_id;
    		$query_modules = $database->query("SELECT module FROM " .TABLE_PREFIX ."sections
    				WHERE page_id=$page_id AND module<>'wysiwyg'");

    		while($row = $query_modules->fetchRow())
            {
    			// check if page module directory contains a frontend.js or frontend.css file
    			if(file_exists(WB_PATH ."/modules/" .$row['module'] ."/$base_file"))
                {
    			// create link with frontend.js or frontend.css source for the current module
    				$tmp_link = str_replace("{MODULE_DIRECTORY}", $row['module'], $base_link);

    				// define constant indicating that the register_frontent_files was invoked
    				if($file_id == 'css')
                    {
    					if(!defined('MOD_FRONTEND_CSS_REGISTERED')) define('MOD_FRONTEND_CSS_REGISTERED', true);
    				} else
                    {
    					if(!defined('MOD_FRONTEND_JAVASCRIPT_REGISTERED')) define('MOD_FRONTEND_JAVASCRIPT_REGISTERED', true);
    				}
    				// ensure that frontend.js or frontend.css is only added once per module type
    				if(strpos($head_links, $tmp_link) === false)
                    {
    					$head_links .= $tmp_link."\n";
    				}
    			};
    		}
        		// include the Javascript email protection function
        		if( $file_id != 'css' && file_exists(WB_PATH .'/modules/droplets/js/mdcr.js'))
                {
        			$head_links .= '<script src="'.WB_URL.'/modules/droplets/js/mdcr.js" type="text/javascript"></script>'."\n";
        		}
                elseif( $file_id != 'css' && file_exists(WB_PATH .'/modules/output_filter/js/mdcr.js'))
                {
        			$head_links .= '<script src="'.WB_URL.'/modules/output_filter/js/mdcr.js" type="text/javascript"></script>'."\n";
        		}
        }
        print $head_links;
    }
}
    function get_parent_page_title($id) {
        global $database;
        //ECHO __FILE__;
        // Get title
        $query = $database->query("SELECT page_title FROM ".TABLE_PREFIX."pages WHERE page_id = '$id'");
        $fetch = $query->fetchRow();
        // Return title
        if($fetch['page_title']){
            return $fetch['page_title']." - ";
      }
    }
// Begin WB < 2.4.x template compatibility code
	// Make extra_sql accessable through private_sql
	$private_sql = $extra_sql;
	$private_where_sql = $extra_where_sql;
	// Query pages for menu
	$menu1 = $database->query("SELECT page_id,menu_title,page_title,link,target,visibility$extra_sql FROM ".TABLE_PREFIX."pages WHERE parent = '0' AND $extra_where_sql ORDER BY position ASC");
	// Check if current pages is a parent page and if we need its submenu
	if(PARENT == 0) {
		// Get the pages submenu
		$menu2 = $database->query("SELECT page_id,menu_title,page_title,link,target,visibility$extra_sql FROM ".TABLE_PREFIX."pages WHERE parent = '".PAGE_ID."' AND $extra_where_sql ORDER BY position ASC");
	} else {
		// Get the pages submenu
		$menu2 = $database->query("SELECT page_id,menu_title,page_title,link,target,visibility$extra_sql FROM ".TABLE_PREFIX."pages WHERE parent = '".PARENT."' AND $extra_where_sql ORDER BY position ASC");
	}
// End WB < 2.4.x template compatibility code
// Include template file


?>