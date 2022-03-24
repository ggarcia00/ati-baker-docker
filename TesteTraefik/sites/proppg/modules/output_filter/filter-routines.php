<?php

// $Id: filter-routines.php 1208 2009-12-03 18:06:39Z Luisehahne $

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
 * @category   frontend
 * @package    outputfilter
 * @author(s)  Dietmar Wöllbrink <Luisehahne>, Dietrich Roland Pehlke <Aldus>
 * @platform   WB 2.8.0
 * @require    PHP 5.2.x
 * @license    http://www.gnu.org/licenses/gpl.html
 * @link       http://project.websitebaker2.org/browser/branches/2.8.x/wb/modules/output_filter/filter-routines.php
 * @changeset   2009/12/03 change searchstring mdcr.js, workout crypt emails

*/

// prevent this file from being accessed directly
if(!defined('WB_PATH')) die(header('Location: ../index.php'));

// function to read the current filter settings
if (!function_exists('get_output_filter_settings')) {
	function get_output_filter_settings() {
		global $database, $admin;
		// connect to database and read out filter settings
		$result = $database->query("SELECT * FROM " .TABLE_PREFIX ."mod_output_filter");
		if($result && $result->numRows() > 0) {
			// get all data
			$data = $result->fetchRow();
			$filter_settings['email_filter'] = $admin->strip_slashes($data['email_filter']);
			$filter_settings['mailto_filter'] = $admin->strip_slashes($data['mailto_filter']);
			$filter_settings['at_replacement'] = $admin->strip_slashes($data['at_replacement']);
			$filter_settings['dot_replacement'] = $admin->strip_slashes($data['dot_replacement']);
		} else {
			// something went wrong, use default values
			$filter_settings['email_filter'] = '0';
			$filter_settings['mailto_filter'] = '0';
			$filter_settings['at_replacement'] = '(at)';
			$filter_settings['dot_replacement'] = '(dot)';
		}
		
		// return array with filter settings
		return $filter_settings;
	}
}

// function to filter the output before displaying it on the frontend
if (!function_exists('filter_frontend_output')) {
	function filter_frontend_output($content) {
		// get output filter settings from database
		$filter_settings = get_output_filter_settings();
		
		// work out the defined output filter mode: possible output filter modes: [0], 1, 2, 3, 6, 7
		// 2^0 * (0.. disable, 1.. enable) filtering of mail addresses in text
		// 2^1 * (0.. disable, 1.. enable) filtering of mail addresses in mailto links
		// 2^2 * (0.. disable, 1.. enable) Javascript mailto encryption (only if mailto filtering enabled)

		// only filter output if we are supposed to
		if($filter_settings['email_filter'] != '1' && $filter_settings['mailto_filter'] != '1'){
			// nothing to do ...
			return $content;
		}

		// check if non mailto mail addresses needs to be filtered
		$output_filter_mode = ($filter_settings['email_filter'] == '1') ? 1 : 0;		// 0|1

		// check if mailto mail addresses needs to be filtered
		if($filter_settings['mailto_filter'] == '1') {
			$output_filter_mode = $output_filter_mode + 2;								// 0|2
						
			// check if Javascript mailto encryption is enabled (call register_frontend_functions in the template)
			$search = '<script src="' .WB_URL .'/modules/output_filter/js/mdcr.js" type="text/javascript"></script>';
			$search_droplet = '<script src="' .WB_URL .'/modules/droplets/js/mdcr.js" type="text/javascript"></script>';
			if(strpos($content, $search) !== false || strpos($content, $search_droplet) !== false) { 
				$output_filter_mode = $output_filter_mode + 4;							// 0|4
			}
		}
		
		// define some constants so we do not call the database in the callback function again
		define('OUTPUT_FILTER_MODE', (int) $output_filter_mode);
		define('OUTPUT_FILTER_AT_REPLACEMENT', $filter_settings['at_replacement']);
		define('OUTPUT_FILTER_DOT_REPLACEMENT', $filter_settings['dot_replacement']);
		
		// first search part to find all mailto email addresses
		$pattern = '#(<a[^<]*href\s*?=\s*?"\s*?mailto\s*?:\s*?)([A-Z0-9._%+-]+@(?:[A-Z0-9-]+\.)+[A-Z]{2,4})([^"]*?)"([^>]*>)(.*?)</a>';
		// second part to find all non mailto email addresses
		$pattern .= '|(value\s*=\s*"|\')??\b([A-Z0-9._%+-]+@(?:[A-Z0-9-]+\.)+[A-Z]{2,4})\b#i';
		/*
		Sub 1:\b(<a.[^<]*href\s*?=\s*?"\s*?mailto\s*?:\s*?)			-->	"<a id="yyy" class="xxx" href = " mailto :" ignoring white spaces
		Sub 2:([A-Z0-9._%+-]+@(?:[A-Z0-9-]+\.)+[A-Z]{2,4})			-->	the email address in the mailto: part of the mail link
		Sub 3:([^"]*?)"												--> possible ?Subject&cc... stuff attached to the mail address
		Sub 4:([^>]*>)												--> all class or id statements after the mailto but before closing ..>
		Sub 5:(.*?)</a>\b											--> the mailto text; all characters between >xxxxx</a>
		Sub 6:|\b([A-Z0-9._%+-]+@(?:[A-Z0-9-]+\.)+[A-Z]{2,4})\b		--> email addresses which may appear in the text (require word boundaries)
		*/
			
		// find all email addresses embedded in the content and filter them using a callback function
		$content = preg_replace_callback($pattern, 'filter_mail_addresses', $content);
		return $content;
	}
}		


// function to filter mail addresses embedded in text or mailto links before outputing them on the frontend
if (!function_exists('filter_mail_addresses')) {
	function filter_mail_addresses($match) { 
		
		// check if required output filter mode is defined
		if(!(defined('OUTPUT_FILTER_MODE') && defined('OUTPUT_FILTER_MODE') && defined('OUTPUT_FILTER_MODE'))) {
			return $match[0];
		}
		
		$search = array('@', '.');
		$replace = array(OUTPUT_FILTER_AT_REPLACEMENT ,OUTPUT_FILTER_DOT_REPLACEMENT);
		
		// check if the match contains the expected number of subpatterns (6|8)
		if(count($match) == 8) {
			/**
				OUTPUT FILTER FOR EMAIL ADDRESSES EMBEDDED IN TEXT
			**/
			
			// 1.. text mails only, 3.. text mails + mailto (no JS), 7 text mails + mailto (JS)
			if(!in_array(OUTPUT_FILTER_MODE, array(1,3,7))) return $match[0];

			// do not filter mail addresses included in input tags (<input ... value = "test@mail)
			if (strpos($match[6], 'value') !== false) return $match[0];
			
			// filtering of non mailto email addresses enabled
			return str_replace($search, $replace, $match[0]);
				
		} elseif(count($match) == 6) {
			/**
				OUTPUT FILTER FOR EMAIL ADDRESSES EMBEDDED IN MAILTO LINKS
			**/

			// 2.. mailto only (no JS), 3.. text mails + mailto (no JS), 6.. mailto only (JS), 7.. all filters active
			if(!in_array(OUTPUT_FILTER_MODE, array(2,3,6,7))) return $match[0];
			
			// check if last part of the a href link: >xxxx</a> contains a email address we need to filter
			$pattern = '#[A-Z0-9._%+-]+@(?:[A-Z0-9-]+\.)+[A-Z]{2,4}#i';
			if(preg_match_all($pattern, $match[5], $matches)) {
				foreach($matches as $submatch) {
					foreach($submatch as $value) {
						// replace all . and all @ in email address parts by (dot) and (at) strings
						$match[5] = str_replace($value, str_replace($search, $replace, $value), $match[5]);
					}
				}
			}

			// check if Javascript encryption routine is enabled
			if(in_array(OUTPUT_FILTER_MODE, array(6,7))) {
				/** USE JAVASCRIPT ENCRYPTION FOR MAILTO LINKS **/
				
				// extract possible class and id attribute from ahref link
				preg_match('/class\s*?=\s*?("|\')(.*?)\1/ix', $match[0], $class_attr);
				$class_attr = empty($class_attr) ? '' : 'class="' . $class_attr[2] . '" ';
				preg_match('/id\s*?=\s*?("|\')(.*?)\1/ix', $match[0], $id_attr);
				$id_attr = empty($id_attr) ? '' : 'id="' . $id_attr[2] . '" ';
				
				// preprocess mailto link parts for further usage
				$search = array('@', '.', '_', '-'); $replace = array('F', 'Z', 'X', 'K');
				$email_address = str_replace($search, $replace, strtolower($match[2]));
				$email_subject = rawurlencode(html_entity_decode($match[3]));
				
				// create a random encryption key for the Caesar cipher
				mt_srand((double)microtime()*1000000);	// (PHP < 4.2.0)
				$shift = mt_rand(1, 25);
				
				// encrypt the email using an adapted Caesar cipher
		  		$encrypted_email = "";
				for($i = strlen($email_address) -1; $i > -1; $i--) {
					if(preg_match('#[FZXK0-9]#', $email_address[$i], $characters)) {
						$encrypted_email .= $email_address[$i];
					} else {	
						$encrypted_email .= chr((ord($email_address[$i]) -97 + $shift) % 26 + 97);
					}
				}
				$encrypted_email .= chr($shift + 97);

				// build the encrypted Javascript mailto link
				$mailto_link  = "<a {$class_attr}{$id_attr}href=\"javascript:mdcr('$encrypted_email','$email_subject')\">" .$match[5] ."</a>";
				
				return $mailto_link;	

			} else {
				/** DO NOT USE JAVASCRIPT ENCRYPTION FOR MAILTO LINKS **/

				// as minimum protection, replace replace @ in the mailto part by (at)
				// dots are not transformed as this would transform my.name@domain.com into: my(dot)name(at)domain(dot)com
				
				// rebuild the mailto link from the subpatterns (at the missing characters " and </a>")
				return $match[1] .str_replace('@', OUTPUT_FILTER_AT_REPLACEMENT, $match[2]) .$match[3] .'"' .$match[4] .$match[5] .'</a>';
				// if you want to protect both, @ and dots, comment out the line above and remove the comment from the line below
				// return $match[1] .str_replace($search, $replace, $match[2]) .$match[3] .'"' .$match[4] .$match[5] .'</a>';
			}
		
		}
		
		// number of subpatterns do not match the requirements ... do nothing
		return $match[0];
	}		
}

?>
