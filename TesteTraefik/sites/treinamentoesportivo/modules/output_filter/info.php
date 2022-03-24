<?php

// $Id: info.php 1203 2009-11-30 13:45:26Z Luisehahne $

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

 -----------------------------------------------------------------------------------------
  Output Filter tool for Website Baker v2.7
  Licencsed under GNU, written by Christian Sommer (Doc)
 -----------------------------------------------------------------------------------------
   v0.11  (Chritian Sommer; 06 Feb, 2008)
    ~ renamed module to output filter, splitted email filter in two functions (text emails, mailto links)

   v0.10  (Christian Sommer; 21 Jan, 2008)
    ~ initial module release (Note: requires WB 2.7 core file changes to work)

*/

$module_directory 	= 'output_filter';
$module_name 				= 'Frontend Output Filter';
$module_function 		= 'tool';
$module_version 		= '0.11';
$module_platform 		= '2.7 | 2.8.x';
$module_author 			= 'Christian Sommer (doc)';
$module_license 		= 'GNU General Public License';
$module_description = 'This module allows to filter the output before displaying it on the frontend. Support for filtering mailto links and mail addresses in strings.';

?>