<?php

// $Id: NO.php 1014 2009-06-25 18:54:41Z Ruebenwurzel $

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
NORSK LANGUAGE FILE FOR THE ADDON: OUTPUT_FILTER
-----------------------------------------------------------------------------------------
*/

// Headings and text outputs
$MOD_MAIL_FILTER['HEADING']	= 'Valg: Filtrering av ut data';
$MOD_MAIL_FILTER['HOWTO']	= 'Du kan gj&oslash;re innstillinger for utdatafitreringen i valgene nedenfor.<p style="line-height:1.5em;"><strong>Tips: </strong>Mailto linker kan krypteres av en Javascript funksjon. For &aring; f&aring; benyttet denne funksjonen, m&aring; det legges til f&oslash;lgende PHP kode <code style="background:#FFA;color:#900;">&lt;?php register_frontend_modfiles(\'js\');?&gt;</code> inn i &lt;head&gt; seksjonen i index.php p&aring; design malen din. Uten denne modifikasjonen, vil kun @ karakterer i mailto linker bli erstattet.</p>';
$MOD_MAIL_FILTER['WARNING']						= '<p style="color: red; line-height:1.5em;"><strong>Warning: </strong>This function is now available as a Droplet. The next major release of website baker will not include this filter anymore. Please concider using the <a href="?tool=droplets">Droplet</a> [[EmailFilter]]</p>';

// Text and captions of form elements
$MOD_MAIL_FILTER['BASIC_CONF']	= 'Enkel Epost konfigurasjon';
$MOD_MAIL_FILTER['EMAIL_FILTER']	= 'Filtrer Epost adresser i tekst';
$MOD_MAIL_FILTER['MAILTO_FILTER']	= 'Filtrer Epost adresser i mailto linker';
$MOD_MAIL_FILTER['ENABLED']	= 'P&aring;sl&aring;tt';
$MOD_MAIL_FILTER['DISABLED']	= 'Avsl&aring;tt';

$MOD_MAIL_FILTER['REPLACEMENT_CONF']= 'Endringe i Epost adresser';
$MOD_MAIL_FILTER['AT_REPLACEMENT']	= 'Bytt "@" med';
$MOD_MAIL_FILTER['DOT_REPLACEMENT']	= 'Bytt "." med';

?>