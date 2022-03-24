<?php

// $Id: droplets.php 1138 2009-08-25 10:18:21Z ruud $

/*
*	@version	1.0.2
*	@author		Ruud Eisinga (Ruud) John (PCWacht)
*	@date		June 2009
*
*	droplets are small codeblocks that are called from anywhere in the template. 
* 	To call a droplet just use [[dropletname]]. optional parameters for a droplet can be used like [[dropletname?parameter=value&parameter2=value]]\
*
*   1.0.2, bugfix. Reused the evalDroplet function so the extracted parameters will be only available within the scope of the eval and cleared when ready.
*/

function evalDroplets ($wb_page_data) {
	global $database;
	$parameter = array();
	preg_match_all('~\[\[(.*?)\]\]~', $wb_page_data, $matches);
	foreach ($matches[1] as $match) {
		if (strpos($match,"?")) {
			list ($droplet,$params) = explode("?",$match);
			if(!empty($params)) {
				$params = html_entity_decode($params,ENT_COMPAT,DEFAULT_CHARSET); // make sure we can parse the parameters correctly
				$paramarray = explode("&",$params); //create array of parms as parm=value
				foreach ($paramarray as $paramelement) {
					$parameterTemp = explode("=", $paramelement,2);
					if (count($parameterTemp) == 2)
						$parameter[$parameterTemp[0]] = htmlentities($parameterTemp[1],ENT_COMPAT,DEFAULT_CHARSET); //re-encode the parameter values
					else
						$parameter['parm'] = htmlentities($parameterTemp[0],ENT_COMPAT,DEFAULT_CHARSET);
				}
			}
		} else {
			$droplet = $match;
			$parameter = "";
		}
		$query_content = $database->query("SELECT * FROM ".TABLE_PREFIX."mod_droplets WHERE name = '$droplet' AND active = 1 ");
		if ($query_content && $query_content->numRows() > 0){
			$fetch_content = $query_content->fetchRow();
			$codedata = ($fetch_content['code']);
			$newvalue = evalDroplet($codedata, $parameter, $wb_page_data);
			if ($newvalue == "" && !$newvalue === true) 
				$newvalue = "<font color=\"red\">Error in: $match, no correct returnvalue.</font>";
			if ($newvalue === true) 
				$newvalue = "";
			$wb_page_data = str_replace("[[".$match."]]", $newvalue, $wb_page_data);
		}
	}
	return $wb_page_data;
}

function evalDroplet($droplet, $params, &$wb_page_data) {
    if(is_array($params)) extract($params, EXTR_SKIP);
	return eval($droplet);
}
?>