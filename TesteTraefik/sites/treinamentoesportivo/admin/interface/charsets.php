<?php

// $Id: charsets.php 915 2009-01-21 19:27:01Z Ruebenwurzel $

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

*/

/*

Charset list file

This file is used to generate a list of charsets for the user to select

*/

if(!defined('WB_URL')) {
	header('Location: ../index.php');
	exit(0);
}

// Create array
$CHARSETS = array();
$CHARSETS['utf-8'] = 'Unicode (utf-8)';
$CHARSETS['iso-8859-1'] = 'Latin-1 Western European (iso-8859-1)';
$CHARSETS['iso-8859-2'] = 'Latin-2 Central European (iso-8859-2)';
$CHARSETS['iso-8859-3'] = 'Latin-3 Southern European (iso-8859-3)';
$CHARSETS['iso-8859-4'] = 'Latin-4 Baltic (iso-8859-4)';
$CHARSETS['iso-8859-5'] = 'Cyrillic (iso-8859-5)';
$CHARSETS['iso-8859-6'] = 'Arabic (iso-8859-6)';
$CHARSETS['iso-8859-7'] = 'Greek (iso-8859-7)';
$CHARSETS['iso-8859-8'] = 'Hebrew (iso-8859-8)';
$CHARSETS['iso-8859-9'] = 'Latin-5 Turkish (iso-8859-9)';
$CHARSETS['iso-8859-10'] = 'Latin-6 Nordic (iso-8859-10)';
$CHARSETS['iso-8859-11'] = 'Thai (iso-8859-11)';
$CHARSETS['gb2312'] = 'Chinese Simplified (gb2312)';
$CHARSETS['big5'] = 'Chinese Traditional (big5)';
$CHARSETS['iso-2022-jp'] = 'Japanese (iso-2022-jp)';
$CHARSETS['iso-2022-kr'] = 'Korean (iso-2022-kr)';

?>