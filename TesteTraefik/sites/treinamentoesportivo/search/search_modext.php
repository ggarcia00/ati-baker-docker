<?php
/**
 *
 * @category        frontend
 * @package         search
 * @author          WebsiteBaker Project
 * @copyright       2004-2009, Ryan Djurovich
 * @copyright       2009-2010, Website Baker Org. e.V.
 * @link			http://www.websitebaker2.org/
 * @license         http://www.gnu.org/licenses/gpl.html
 * @platform        WebsiteBaker 2.8.x
 * @requirements    PHP 4.3.4 and higher
 * @version         $Id: search_modext.php 1281 2010-01-30 04:57:58Z Luisehahne $
 * @filesource		$HeadURL: http://svn.websitebaker2.org/branches/2.8.x/wb/search/search_modext.php $
 * @lastmodified    $Date: 2010-01-30 05:57:58 +0100 (Sa, 30. Jan 2010) $
 *
 */

// make the url-string for highlighting
function make_url_searchstring($search_match, $search_url_array) {
	$link = "";
	if ($search_match != 'exact') {
		$str = implode(" ", $search_url_array);
		$link = "?searchresult=1&amp;sstring=".urlencode($str);
	} else {
		$str = str_replace(' ', '_', $search_url_array[0]);
		$link = "?searchresult=2&amp;sstring=".urlencode($str);
	}
	return $link;
}

// make date and time for "last modified by... on ..."-string
function get_page_modified($page_modified_when) {
	global $TEXT;
	if($page_modified_when > 0) {
		$date = gmdate(DATE_FORMAT, $page_modified_when+TIMEZONE);
		$time = gmdate(TIME_FORMAT, $page_modified_when+TIMEZONE);
	} else {
		$date = $TEXT['UNKNOWN'].' '.$TEXT['DATE'];
		$time = $TEXT['UNKNOWN'].' '.$TEXT['TIME'];
	}
	return array($date, $time);
}

// make username and displayname for "last modified by... on ..."-string
function get_page_modified_by($page_modified_by, $users) {
	global $TEXT;
	// check for existing user-id
	if(!isset($users[$page_modified_by]))
		$page_modified_by = 0;
	
	$username = $users[$page_modified_by]['username'];
	$displayname = $users[$page_modified_by]['display_name'];
	return array($username, $displayname);
}

// checks if _all_ searchwords matches
function is_all_matched($text, $search_words) {
	$all_matched = true;
	foreach ($search_words AS $word) {
		if(!preg_match('/'.$word.'/ui', $text)) {
			$all_matched = false;
			break;
		}
	}
	return $all_matched;
}

// checks if _any_ of the searchwords matches
function is_any_matched($text, $search_words) {
	$any_matched = false;
	$word = '('.implode('|', $search_words).')';
	if(preg_match('/'.$word.'/ui', $text)) {
		$any_matched = true;
	}
	return $any_matched;
}

// collects the matches from text in excerpt_array
function get_excerpts($text, $search_words, $max_excerpt_num) {
	$match_array = array();
	$excerpt_array = array();
	$word = '('.implode('|', $search_words).')';

	//Filter droplets from the page data
	preg_match_all('~\[\[(.*?)\]\]~', $text, $matches);
	foreach ($matches[1] as $match) {
		$text = str_replace('[['.$match.']]', '', $text);					
	}

	// Build the regex-string
	if(strpos(strtoupper(PHP_OS), 'WIN')===0) { // windows -> see below
		$str1=".!?;";
		$str2=".!?;";
	} else { // linux & Co.
		// start-sign: .!?; + INVERTED EXCLAMATION MARK - INVERTED QUESTION MARK - DOUBLE EXCLAMATION MARK - INTERROBANG - EXCLAMATION QUESTION MARK - QUESTION EXCLAMATION MARK - DOUBLE QUESTION MARK - HALFWIDTH IDEOGRAPHIC FULL STOP - IDEOGRAPHIC FULL STOP - IDEOGRAPHIC COMMA
		$str1=".!?;"."\xC2\xA1"."\xC2\xBF"."\xE2\x80\xBC"."\xE2\x80\xBD"."\xE2\x81\x89"."\xE2\x81\x88"."\xE2\x81\x87"."\xEF\xBD\xA1"."\xE3\x80\x82"."\xE3\x80\x81";
		// stop-sign: .!?; + DOUBLE EXCLAMATION MARK - INTERROBANG - EXCLAMATION QUESTION MARK - QUESTION EXCLAMATION MARK - DOUBLE QUESTION MARK - HALFWIDTH IDEOGRAPHIC FULL STOP - IDEOGRAPHIC FULL STOP - IDEOGRAPHIC COMMA
		$str2=".!?;"."\xE2\x80\xBC"."\xE2\x80\xBD"."\xE2\x81\x89"."\xE2\x81\x88"."\xE2\x81\x87"."\xEF\xBD\xA1"."\xE3\x80\x82"."\xE3\x80\x81";
	}
	$regex='/(?:^|\b|['.$str1.'])([^'.$str1.']{0,200}?'.$word.'[^'.$str2.']{0,200}(?:['.$str2.']|\b|$))/uis';
	if(version_compare(PHP_VERSION, '4.3.3', '>=') &&
	   strpos(strtoupper(PHP_OS), 'WIN')!==0
	) { // this may crash windows server, so skip if on windows
		// jump from match to match, get excerpt, stop if $max_excerpt_num is reached
		$last_end = 0; $offset = 0;
		while(preg_match('/'.$word.'/uis', $text, $match_array, PREG_OFFSET_CAPTURE, $last_end)) {
			$offset = ($match_array[0][1]-206 < $last_end)?$last_end:$match_array[0][1]-206;
			if(preg_match($regex, $text, $matches, PREG_OFFSET_CAPTURE, $offset)) {
				$last_end = $matches[1][1]+strlen($matches[1][0])-1;
				if(!preg_match('/\b[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\./', $matches[1][0])) // skip excerpts with email-addresses
					$excerpt_array[] = trim($matches[1][0]);
				if(count($excerpt_array)>=$max_excerpt_num) {
					$excerpt_array = array_unique($excerpt_array);
					if(count($excerpt_array) >= $max_excerpt_num)
						break;
				}
			} else { // problem: preg_match failed - can't find a start- or stop-sign
				$last_end += 201; // jump forward and try again
			}
		}
	} else { // compatible, but may be very slow with large pages
		if(preg_match_all($regex, $text, $match_array)) {
			foreach($match_array[1] AS $string) {
				if(!preg_match('/\b[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\./', $string))  // skip excerpts with email-addresses
					$excerpt_array[] = trim($string);
				
			}
		}
	}
	return $excerpt_array;
}

// makes excerpt_array a string ready to print out
function prepare_excerpts($excerpt_array, $search_words, $max_excerpt_num) {
	// excerpts: text before and after a single excerpt, html-tag for markup
	$EXCERPT_BEFORE =       '...&nbsp;';
	$EXCERPT_AFTER =        '&nbsp;...<br />';
	$EXCERPT_MARKUP_START = '<b>';
	$EXCERPT_MARKUP_END =   '</b>';
	// remove duplicate matches from $excerpt_array, if any.
	$excerpt_array = array_unique($excerpt_array);
	// use the first $max_excerpt_num excerpts only
	if(count($excerpt_array) > $max_excerpt_num) {
		$excerpt_array = array_slice($excerpt_array, 0, $max_excerpt_num);
	}
	// prepare search-string
	$string = "(".implode("|", $search_words).")";
	// we want markup on search-results page,
	// but we need some 'magic' to prevent <br />, <b>... from being highlighted
	$excerpt = '';
	foreach($excerpt_array as $str) {
		$excerpt .= '#,,#'.preg_replace("/($string)/iu","#,,,,#$1#,,,,,#",$str).'#,,,#';
	}
	$excerpt = str_replace(array('&','<','>','"','\'',"\xC2\xA0"), array('&amp;','&lt;','&gt;','&quot;','&#039;','&nbsp;'), $excerpt);
	$excerpt = str_replace(array('#,,,,#','#,,,,,#'), array($EXCERPT_MARKUP_START,$EXCERPT_MARKUP_END), $excerpt);
	$excerpt = str_replace(array('#,,#','#,,,#'), array($EXCERPT_BEFORE,$EXCERPT_AFTER), $excerpt);
	// prepare to write out
	if(DEFAULT_CHARSET != 'utf-8') {
		$excerpt = umlauts_to_entities($excerpt, 'UTF-8');
	}
	return $excerpt;
}

// work out what the link-anchor should be
function make_url_target($page_link_target, $text, $search_words) {
	// 1. e.g. $page_link_target=="&monthno=5&year=2007" - module-dependent target. Do nothing.
	// 2. $page_link_target=="#!wb_section_..." - the user wants the section-target, so do nothing.
	// 3. $page_link_target=="#wb_section_..." - try to find a better target, use the section-target as fallback.
	// 4. $page_link_target=="" - do nothing
	if(version_compare(PHP_VERSION, '4.3.3', ">=") && substr($page_link_target,0,12)=='#wb_section_') {
		$word = '('.implode('|', $search_words).')';
		preg_match('/'.$word.'/ui', $text, $match, PREG_OFFSET_CAPTURE);
		if($match && is_array($match[0])) {
			$x=$match[0][1]; // position of first match
			// is there an anchor nearby?
			if(preg_match_all('/<(?:[^>]+id|\s*a[^>]+name)\s*=\s*"(.*)"/iU', substr($text,0,$x), $match, PREG_OFFSET_CAPTURE)) {
				$anchor='';
				foreach($match[1] AS $array) {
					if($array[1] > $x) {
						break;
					}
					$anchor = $array[0];
				}
				if($anchor != '') {
					$page_link_target = '#'.$anchor;
				}
			}
		}
	}
	elseif(substr($page_link_target,0,13)=='#!wb_section_') {
		$page_link_target = '#'.substr($page_link_target, 2);
	}
	
	// since wb 2.7.1 the section-anchor is configurable - SEC_ANCHOR holds the anchor name
	if(substr($page_link_target,0,12)=='#wb_section_') {
		if(defined('SEC_ANCHOR') && SEC_ANCHOR!='') {
			$sec_id = substr($page_link_target, 12);
			$page_link_target = '#'.SEC_ANCHOR.$sec_id;
		} else { // section-anchors are disabled
			$page_link_target = '';
		}
	}
	
	return $page_link_target;
}

// wrapper for compatibility with old print_excerpt()
function print_excerpt($page_link, $page_link_target, $page_title, $page_description, $page_modified_when, $page_modified_by, $text, $max_excerpt_num, $func_vars, $pic_link="") {
	$mod_vars = array(
		'page_link' => $page_link,
		'page_link_target' => $page_link_target,
		'page_title' => $page_title,
		'page_description' => $page_description,
		'page_modified_when' => $page_modified_when,
		'page_modified_by' => $page_modified_by,
		'text' => $text,
		'max_excerpt_num' => $max_excerpt_num,
		'pic_link' => $pic_link
	);
	print_excerpt2($mod_vars, $func_vars);
}

/* These functions can be used in module-supplied search_funcs
 * -----------------------------------------------------------
 * print_excerpt2() - the main-function to use in all search_funcs
 * print_excerpt() - wrapper for compatibility-reason. Use print_excerpt2() instead.
 * list_files_dirs() - lists all files and dirs below a given directory
 * clear_filelist() - keeps only wanted or removes unwanted entries in file-list.
 */
 
// prints the excerpts for one section
function print_excerpt2($mod_vars, $func_vars) {
	extract($func_vars, EXTR_PREFIX_ALL, 'func');
	extract($mod_vars, EXTR_PREFIX_ALL, 'mod');
	global $TEXT;
	// check $mod_...vars
	if(!isset($mod_page_link))          $mod_page_link = $func_page_link;
	if(!isset($mod_page_link_target))   $mod_page_link_target = "";
	if(!isset($mod_page_title))         $mod_page_title = $func_page_title;
	if(!isset($mod_page_description))   $mod_page_description = $func_page_description;
	if(!isset($mod_page_modified_when)) $mod_page_modified_when = $func_page_modified_when;
	if(!isset($mod_page_modified_by))   $mod_page_modified_by = $func_page_modified_by;
	if(!isset($mod_text))               $mod_text = "";
	if(!isset($mod_max_excerpt_num))    $mod_max_excerpt_num = $func_default_max_excerpt;
	if(!isset($mod_pic_link))           $mod_pic_link = "";
	if(!isset($mod_no_highlight))       $mod_no_highlight = false;
	if(!isset($func_enable_flush))      $func_enable_flush = false; // set this in db: wb_search.cfg_enable_flush [READ THE DOC BEFORE]
	if(isset($mod_ext_charset)) $mod_ext_charset = strtolower($mod_ext_charset);
	else $mod_ext_charset = '';

	if($mod_text == "") // nothing to do
		{ return false; }

	if($mod_no_highlight) // no highlighting
		{ $mod_page_link_target = "&amp;nohighlight=1".$mod_page_link_target; }
	// clean the text:
	$mod_text = preg_replace('#<(!--.*--|style.*</style|script.*</script)>#iU', ' ', $mod_text);
	$mod_text = preg_replace('#<(br( /)?|dt|/dd|/?(h[1-6]|tr|table|p|li|ul|pre|code|div|hr))[^>]*>#i', '.', $mod_text);
	$mod_text = preg_replace('/(\v\s?|\s\s)+/', ' ', $mod_text);
	$mod_text = preg_replace('/\s\./', '.', $mod_text);
	if($mod_ext_charset!='') { // data from external database may have a different charset
		require_once(WB_PATH.'/framework/functions-utf8.php');
		switch($mod_ext_charset) {
		case 'latin1':
		case 'cp1252':
			$mod_text = charset_to_utf8($mod_text, 'CP1252');
			break;
		case 'cp1251':
			$mod_text = charset_to_utf8($mod_text, 'CP1251');
			break;
		case 'latin2':
			$mod_text = charset_to_utf8($mod_text, 'ISO-8859-2');
			break;
		case 'hebrew':
			$mod_text = charset_to_utf8($mod_text, 'ISO-8859-8');
			break;
		case 'greek':
			$mod_text = charset_to_utf8($mod_text, 'ISO-8859-7');
			break;
		case 'latin5':
			$mod_text = charset_to_utf8($mod_text, 'ISO-8859-9');
			break;
		case 'latin7':
			$mod_text = charset_to_utf8($mod_text, 'ISO-8859-13');
			break;
		case 'utf8':
		default:
			$mod_text = charset_to_utf8($mod_text, 'UTF-8');
		}
	} else {
	$mod_text = entities_to_umlauts($mod_text, 'UTF-8');
	}
	$anchor_text = $mod_text; // make an copy containing html-tags
	$mod_text = strip_tags($mod_text);
	$mod_text = str_replace(array('&gt;','&lt;','&amp;','&quot;','&#039;','&apos;','&nbsp;'), array('>','<','&','"','\'','\'',"\xC2\xA0"), $mod_text);
	$mod_text = '.'.trim($mod_text).'.';
	// Do a fast scan over $mod_text first. This will speedup things a lot.
	if($func_search_match == 'all') {
		if(!is_all_matched($mod_text, $func_search_words))
			return false;
	}
	elseif(!is_any_matched($mod_text, $func_search_words)) {
		return false;
	}
	// search for an better anchor - this have to be done before strip_tags() (may fail if search-string contains <, &, amp, gt, lt, ...)
	$anchor =  make_url_target($mod_page_link_target, $anchor_text, $func_search_words);

	// make the link from $mod_page_link, add anchor
	$link = "";
	$link = page_link($mod_page_link);
	if(strpos($mod_page_link, 'http:')===FALSE)
		$link .= make_url_searchstring($func_search_match, $func_search_url_array);
	$link .= $anchor;

	// now get the excerpt
	$excerpt = "";
	$excerpt_array = array();
	if($mod_max_excerpt_num > 0) {
		if(!$excerpt_array = get_excerpts($mod_text, $func_search_words, $mod_max_excerpt_num)) {
			return false;
		}
		$excerpt = prepare_excerpts($excerpt_array, $func_search_words, $mod_max_excerpt_num);
	}

	// handle thumbs - to deactivate this look in the module's search.php: $show_thumb (or maybe in the module's settings-page)
	if($mod_pic_link != "") {
		$excerpt = '<table class="excerpt_thumb" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td width="110" valign="top"><a href="'.$link.'"><img src="'.WB_URL.'/'.MEDIA_DIRECTORY.$mod_pic_link.'" alt="" /></a></td><td>'.$excerpt.'</td></tr></tbody></table>';
	}

	// print-out the excerpt
	$vars = array();
	$values = array();
	list($date, $time) = get_page_modified($mod_page_modified_when);
	list($username, $displayname) = get_page_modified_by($mod_page_modified_by, $func_users);
	$vars = array('[LINK]', '[TITLE]', '[DESCRIPTION]', '[USERNAME]','[DISPLAY_NAME]','[DATE]','[TIME]','[TEXT_LAST_UPDATED_BY]','[TEXT_ON]','[EXCERPT]');
	$values = array(
		$link,
		$mod_page_title,
		$mod_page_description,
		$username,
		$displayname,
		$date,
		$time,
		$TEXT['LAST_UPDATED_BY'],
		$TEXT['ON'],
		$excerpt
	);
	echo str_replace($vars, $values, $func_results_loop_string);
	if($func_enable_flush) { // ATTN: this will bypass output-filters and may break template-layout or -filters
		ob_flush();flush();
	}
	return true;
}

// list all files and dirs in $dir (recursive), omits '.', '..', and hidden files/dirs
// returns an array of two arrays ($files[] and $dirs[]).
// usage: list($files,$dirs) = list_files_dirs($directory);
//        $depth: get subdirs (true/false)
function list_files_dirs($dir, $depth=true, $files=array(), $dirs=array()) {
	$dh=opendir($dir);
	while(($file = readdir($dh)) !== false) {
		if($file{0} == '.' || $file == '..') {
			continue;
		}
		if(is_dir($dir.'/'.$file)) {
			if($depth) {
				$dirs[] = $dir.'/'.$file;
				list($files, $dirs) = list_files_dirs($dir.'/'.$file, $depth, $files, $dirs);
			}
		} else {
			$files[] = $dir.'/'.$file;
		}
	}
	closedir($dh);
	natcasesort($files);
	natcasesort($dirs);
	return(array($files, $dirs));
}

// keeps only wanted entries in array $files. $str have to be an eregi()-compatible regex
function clear_filelist($files, $str, $keep=true) {
	// options: $keep = true  : remove all non-matching entries
	//          $keep = false : remove all matching entries
	$c_filelist = array();
	if($str == '')
		return $files;
	foreach($files as $file) {
		if($keep) {
			if(eregi($str, $file)) {
				$c_filelist[] = $file;
			}
		} else {
			if(!eregi($str, $file)) {
				$c_filelist[] = $file;
			}
		}
	}
	return($c_filelist);
}

?>
