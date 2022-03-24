<?php

// $Id: NL.php 998 2009-06-17 20:59:09Z ruud $

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
$MOD_MAIL_FILTER['HEADING']				= 'Beheersinstellingen: Output Filter';
$MOD_MAIL_FILTER['HOWTO']				= 'Hier kan je de uitvoer filteren met onderstaande opties.<p style="line-height:1.5em;"><strong>Tip: </strong>Mailto links kunnen gecodeerd worden door een Javascript functie. Om van deze optie gebruik te kunnen maken moet je de PHP code <code style="background:#FFA;color:#900;">&lt;?php register_frontend_modfiles(\'js\');?&gt;</code> in de &lt;head&gt; sectie van het index.php bestand van je template plaatsen. Zonder deze aanpassing zal enkel het @ teken in het mailto deel vervangen worden.</p>';
$MOD_MAIL_FILTER['WARNING']				= '<p style="color: red; line-height:1.5em;"><strong>Waarschuwing: </strong>Deze functionaliteit is vanaf nu ook beschikbaar als Droplet. De volgende versie van Website Baker (2.9) zal dit filter dan ook niet meer ondersteunen. Gebruik voortaan de <a href="?tool=droplets">Droplet</a> [[EmailFilter]]</p>';

// Text and captions of form elements
$MOD_MAIL_FILTER['BASIC_CONF']			= 'E-mail Configuratie';
$MOD_MAIL_FILTER['EMAIL_FILTER']		= 'Filter E-mail adressen in tekst';
$MOD_MAIL_FILTER['MAILTO_FILTER']		= 'Filter E-mail adressen in mailto links';
$MOD_MAIL_FILTER['ENABLED']				= 'Aan';
$MOD_MAIL_FILTER['DISABLED']			= 'Uit';

$MOD_MAIL_FILTER['REPLACEMENT_CONF']	= 'Vervang E-mail tekens';
$MOD_MAIL_FILTER['AT_REPLACEMENT']		= 'Vervang "@" door';
$MOD_MAIL_FILTER['DOT_REPLACEMENT']		= 'Vervang "." door';

?>