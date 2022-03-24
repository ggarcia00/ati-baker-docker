<?php

// $Id: thumb.php 1035 2009-07-06 22:34:35Z Ruebenwurzel $

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

require('../../config.php');
include_once('resize_img.php');
if (isset($_GET['img']) && isset($_GET['t'])) {
	$image = addslashes($_GET['img']);
	$type = addslashes($_GET['t']);
	$media = WB_PATH.MEDIA_DIRECTORY;
	$img=new RESIZEIMAGE($media.$image);
	if ($img->imgWidth) {
		if ($type == 1) {
			$img->resize_limitwh(50,50);
		} else if ($type == 2) {
			$img->resize_limitwh(200,200);
		} 
		$img->close();
	} else {
		header ("Content-type: image/jpeg");
		readfile ( "nopreview.jpg" );
	}
}
?>