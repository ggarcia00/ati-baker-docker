<?php

// $Id: add.php 915 2009-01-21 19:27:01Z Ruebenwurzel $

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
The Website Baker Project would like to thank Rudolph Lartey <www.carbonect.com>
for his contributions to this module - adding extra field types
*/

// Insert an extra rows into the database
$header = '<table cellpadding=\"2\" cellspacing=\"0\" border=\"0\" width=\"98%\">';
$field_loop = '<tr><td class=\"field_title\">{TITLE}{REQUIRED}:</td><td>{FIELD}</td></tr>';
$footer = '<tr><td>&nbsp;</td>
<td>
<input type=\"submit\" name=\"submit\" value=\"Submit Form\" />
</td>
</tr>
</table>';
$email_to = $admin->get_email();
$email_from = '';
$email_fromname = '';
$email_subject = 'Results from form on website...';
$success_page = 'none';
$success_email_to = '';
$success_email_from = $admin->get_email();
$success_email_fromname = '';
$success_email_text = 'Thank you for submitting your form on '.WEBSITE_TITLE;
$success_email_text = addslashes($success_email_text);
$success_email_subject = 'You have submitted a form';
$max_submissions = 50;
$stored_submissions = 50;
$use_captcha = true;
$database->query("INSERT INTO ".TABLE_PREFIX."mod_form_settings (page_id,section_id,header,field_loop,footer,email_to,email_from,email_fromname,email_subject,success_page,success_email_to,success_email_from,success_email_fromname,success_email_text,success_email_subject,max_submissions,stored_submissions,use_captcha) VALUES ('$page_id','$section_id','$header','$field_loop','$footer','$email_to','$email_from','$email_fromname','$email_subject','$success_page','$success_email_to','$success_email_from','$success_email_fromname','$success_email_text','$success_email_subject','$max_submissions','$stored_submissions','$use_captcha')");

?>