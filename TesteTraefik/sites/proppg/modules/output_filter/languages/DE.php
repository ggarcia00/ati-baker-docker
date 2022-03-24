<?php

// $Id: DE.php 1014 2009-06-25 18:54:41Z Ruebenwurzel $

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
  DEUTSCHE SPRACHDATEI FUER DAS MODUL: OUTPUT_FILTER
 -----------------------------------------------------------------------------------------
*/

// Deutsche Modulbeschreibung
$module_description 					= 'Dieses Modul erlaubt die Filterung von Inhalten vor der Anzeige im Frontendbereich. Unterst&uuml;zt die Filterung von Emailadressen in mailto Links und Text.';

// Ueberschriften und Textausgaben
$MOD_MAIL_FILTER['HEADING']				= 'Optionen: Ausgabe Filterung';
$MOD_MAIL_FILTER['HOWTO']				= '&Uuml;ber nachfolgende Optionen kann die Ausgabefilterung konfiguriert werden.<p style="line-height:1.5em;"><strong>Tipp: </strong>Mailto Links k&ouml;nnen mit einer Javascript Routine verschl&uuml;sselt werden. Um diese Option zu aktivieren muss der PHP Befehl <code style="background:#FFA;color:#900;">&lt;?php register_frontend_modfiles(\'js\');?&gt;</code> im &lt;head&gt; Bereich der index.php Ihres Templates eingebunden werden. Ohne diese &Auml;nderungen wird nur das @ Zeichen im mailto: Teil ersetzt.</p>';
$MOD_MAIL_FILTER['WARNING']				= '<p style="color: red; line-height:1.5em;"><strong>Achtung: </strong>Diese Funktion ist auch als Droplet verf&uuml;gbar. Ab der n&auml;chsten WB Version wird der Output-Filter deswegen nicht mehr enthalten sein. Es wird empfohlen deine Seiten auf das <a href="?tool=droplets">Droplet</a> [[EmailFilter]] umzustellen.</p>';

// Text von Form Elementen
$MOD_MAIL_FILTER['BASIC_CONF']			= 'Grundeinstellungen';
$MOD_MAIL_FILTER['EMAIL_FILTER']		= 'Filtere E-Mail Adressen im Text';
$MOD_MAIL_FILTER['MAILTO_FILTER']		= 'Filtere E-Mail Adressen in mailto Links';
$MOD_MAIL_FILTER['ENABLED']				= 'Aktiviert';
$MOD_MAIL_FILTER['DISABLED']			= 'Ausgeschaltet';

$MOD_MAIL_FILTER['REPLACEMENT_CONF']	= 'Email Ersetzungen';
$MOD_MAIL_FILTER['AT_REPLACEMENT']		= 'Ersetze "@" durch';
$MOD_MAIL_FILTER['DOT_REPLACEMENT']		= 'Ersetze "." durch';

?>