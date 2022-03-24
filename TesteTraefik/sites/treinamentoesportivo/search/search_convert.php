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
 * @version         $Id: search_convert.php 1281 2010-01-30 04:57:58Z Luisehahne $
 * @filesource		$HeadURL: http://svn.websitebaker2.org/branches/2.8.x/wb/search/search_convert.php $
 * @lastmodified    $Date: 2010-01-30 05:57:58 +0100 (Sa, 30. Jan 2010) $
 *
 */

if(!defined('WB_URL')) {
	header('Location: ../index.php');
	exit(0);
}
if(!isset($search_lang)) $search_lang = LANGUAGE;

// umlaut to '(upper|lower)' for preg_match()
// this is UTF-8-encoded
// there is no need for a translation-table anymore since we use u-switch (utf-8) for preg-functions
// remember that we use the i-switch, too. [No need for (ae|Ae)]

$string_ul_umlaut = array();
$string_ul_regex = array();

// but add some national stuff
if($search_lang=='DE') { // add special handling for german umlauts (ä==ae, ...)
	$string_ul_umlaut_add = array(
		"\xc3\x9f", // german SZ-Ligatur
		"\xc3\xa4", // german ae
		"\xc3\xb6", // german oe
		"\xc3\xbc", // german ue
		"\xc3\x84", // german Ae
		"\xc3\x96", // german Oe
		"\xc3\x9c", // german Ue
		// these are not that usual
		"\xEF\xAC\x84", // german ffl-ligatur
		"ffl",          // german ffl-ligatur
		"\xEF\xAC\x83", // german ffi-ligatur
		"ffi",          // german ffi-ligatur
		"0xEF\xAC\x80", // german ff-Ligatur
		"ff",           // german ff-Ligatur
		"\xEF\xAC\x81", // german fi-ligatur
		"fi",           // german fi-ligatur
		"\xEF\xAC\x82", // german fl-ligatur
		"fl",           // german fl-ligatur
		"\xEF\xAC\x85", // german st-Ligatur (long s)
		"st",           // german st-Ligatur
		"\xEF\xAC\x86"  // german st-ligatur (round-s)
	);
	$string_ul_regex_add = array(
		"(\xc3\x9f|ss)", // german SZ.Ligatur
		"(\xc3\xa4|ae)", // german ae
		"(\xc3\xb6|oe)", // german oe
		"(\xc3\xbc|ue)", // german ue
		"(\xc3\x84|Ae)", // german Ae
		"(\xc3\x96|Oe)", // german Oe
		"(\xc3\x9c|Ue)", // german Ue
		// these are not that usual
		"(\xEF\xAC\x84|ffl)", // german ffl-ligatur
		"(\xEF\xAC\x84|ffl)", // german ffl-ligatur
		"(\xEF\xAC\x83|ffi)", // german ffi-ligatur
		"(\xEF\xAC\x83|ffi)", // german ffi-ligatur
		"(\xEF\xAC\x80|ff)",  // german ff-Ligatur
		"(\xEF\xAC\x80|ff)",  // german ff-Ligatur
		"(\xEF\xAC\x81|fi)",  // german fi-Ligatur
		"(\xEF\xAC\x81|fi)",  // german fi-Ligatur
		"(\xEF\xAC\x82|fl)",  // german fl-ligatur
		"(\xEF\xAC\x82|fl)",  // german fl-ligatur
		"(\xEF\xAC\x85|st)",  // german st-Ligatur (long s)
		"(\xEF\xAC\x85|st|\xEF\xAC\x86)",  // german st-Ligaturs
		"(\xEF\xAC\x86|st)"  // german st-ligatur (round-s)
	);
	$string_ul_umlaut = array_merge($string_ul_umlaut_add, $string_ul_umlaut);
	$string_ul_regex = array_merge($string_ul_regex_add, $string_ul_regex);
}


?>