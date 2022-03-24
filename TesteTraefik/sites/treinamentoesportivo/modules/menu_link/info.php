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

*/

/* History:
2.8 - June 2009
- Improved the pagelist (thorn)
- Added different redirect types 301 or 302 (thorn)
- Set platform version 2.8

2.7 - 24. Jan. 2008 - doc
- added language support, changed platform to 2.7

2.6.1.1 - 16. Jan. 2008 - thorn
- added table mod_menu_link
- added install.php, delete.php, add.php
- changed wb/index.php: redirect if page is menu_link
- removed special-handling of menu_link in: admin/pages/settings2.php

*/

$module_directory = 'menu_link';
$module_name = 'Menu Link';
$module_function = 'page';
$module_version = '2.8';
$module_platform = '2.8.x';
$module_author = 'Ryan Djurovich, thorn';
$module_license = 'GNU General Public License';
$module_description = 'This module allows you to insert a link into the menu.';

?>