<?php

// $Id: EN.php 998 2009-06-17 20:59:09Z ruud $

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
  ENGLISH LANGUAGE FILE FOR THE ADDON: OUTPUT_FILTER
 -----------------------------------------------------------------------------------------
*/

// Headings and text outputs
$MOD_MAIL_FILTER['HEADING']				= 'Options: Output Filter';
$MOD_MAIL_FILTER['HOWTO']						= 'You can configure the output filtering with the options below.<p style="line-height:1.5em;"><strong>Tip: </strong>Mailto links can be encrypted by a Javascript function. To make use of this option, one needs to add the PHP code <code style="background:#FFA;color:#900;">&lt;?php register_frontend_modfiles(\'js\');?&gt;</code> into the &lt;head&gt; section of the index.php of your template. Without this modification, only the @ character in the mailto part will be replaced.</p>';
$MOD_MAIL_FILTER['WARNING']						= '<p style="color: red; line-height:1.5em;"><strong>Warning: </strong>This function is now available as a Droplet. The next major release of website baker will not include this filter anymore. Please concider using the <a href="?tool=droplets">Droplet</a> [[EmailFilter]]</p>';

// Text and captions of form elements
$MOD_MAIL_FILTER['BASIC_CONF']			= 'Basic Email Configuration';
$MOD_MAIL_FILTER['EMAIL_FILTER']		= 'Filter Email addresses in text';
$MOD_MAIL_FILTER['MAILTO_FILTER']		= 'Filter Email addresses in mailto links';
$MOD_MAIL_FILTER['ENABLED']					= 'Enabled';
$MOD_MAIL_FILTER['DISABLED']				= 'Disabled';

$MOD_MAIL_FILTER['REPLACEMENT_CONF']= 'Email Replacements';
$MOD_MAIL_FILTER['AT_REPLACEMENT']	= 'Replace "@" by';
$MOD_MAIL_FILTER['DOT_REPLACEMENT']	= 'Replace "." by';

?>