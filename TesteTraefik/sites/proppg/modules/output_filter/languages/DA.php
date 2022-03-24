<?php

// $Id: DA.php 1097 2009-07-27 06:58:07Z Ruebenwurzel $

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
  DANISH LANGUAGE FILE FOR THE ADDON: OUTPUT_FILTER
 -----------------------------------------------------------------------------------------
*/

// Headings and text outputs
$MOD_MAIL_FILTER['HEADING'] = 'Indstillinger: Output-filter';
$MOD_MAIL_FILTER['HOWTO'] = 'Du kan konfigurere output-filteret med indstillingerne nedenfor.<p style="line-height:1.5em;"><strong>Tip: </strong>Mailadresser kan krypteres vedhj&Atilde;&brvbar;lp af en  Javascript-funktion. For at g&Atilde;¸re brug af denne indstilling, skal du tilf&Atilde;¸je PHP-koden <code style="background:#FFA;color:#900;"><?php register_frontend_modfiles(js);?></code> til <head> sektionnen af  index.php i din template (layout-skabelon). Uden denne &Atilde;&brvbar;ndring vil kun @-tegnet i email-adressen blive erstattet.</p>';
$MOD_MAIL_FILTER['WARNING'] = '<p style="color: red; line-height:1.5em;"><strong>Advarsel: </strong>Denne funktion fundes nu som en droplet. Den n&Atilde;&brvbar;ste hovedversion af Website Baker vil ikke indeholde dette filter. Brug i stedet <a href="?tool=droplets">Droplet</a> [[EmailFilter]]</p>';

// Text and captions of form elements
$MOD_MAIL_FILTER['BASIC_CONF'] = 'Email grundindstillinger';
$MOD_MAIL_FILTER['EMAIL_FILTER'] = 'Filtrer emailadresser i tekst';
$MOD_MAIL_FILTER['MAILTO_FILTER'] = 'Filtrer emailadresser i mailto-links';
$MOD_MAIL_FILTER['ENABLED'] = 'Aktiveret';
$MOD_MAIL_FILTER['DISABLED'] = 'Deaktiveret';

$MOD_MAIL_FILTER['REPLACEMENT_CONF'] = 'Email erstatninger';
$MOD_MAIL_FILTER['AT_REPLACEMENT'] = 'Erstat "@" med';
$MOD_MAIL_FILTER['DOT_REPLACEMENT'] = 'Erstat "." med';

?>
