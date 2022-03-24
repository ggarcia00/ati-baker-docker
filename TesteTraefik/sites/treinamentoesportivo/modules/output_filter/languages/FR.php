<?php

// $Id: FR.php 1014 2009-06-25 18:54:41Z Ruebenwurzel $

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
  FRENCH LANGUAGE FILE FOR THE ADDON: OUTPUT_FILTER
 -----------------------------------------------------------------------------------------
*/
//Module Description
$module_description = 'Ce module g&egrave;re le filtrage des donn&eacute;es avant affichage &agrave; l&apos;utilisateur. Permets de filtrer les liens mailto et les adresses emails.';

// Headings and text outputs
$MOD_MAIL_FILTER['HEADING']				= 'Options: Output Filter';
$MOD_MAIL_FILTER['HOWTO']						= 'Vous pouvez configurer le filtrage des donn&eacute;es avant affichage gr&acirc;ce aux options ci-dessous.<p style="line-height:1.5em;"><strong>Conseil: </strong>Les liens Mailto peuvent &ecirc;tre crypt&eacute;s &agrave; l&apos;aide d&apos;une fonction Javascript. Pour utiliser cette fonctionnalit&eacute;, vous devez ajouter le code PHP <code style="background:#FFA;color:#900;">&lt;?php register_frontend_modfiles(&apos;js&apos;);?&gt;</code> dans la partie &lt;head&gt; de index.php de votre fichier mod&egrave;le. Sans cette modification, seulement le caract&egrave;re @ sera remplac&eacute; dans le champ mailto.</p>';
$MOD_MAIL_FILTER['WARNING']						= '<p style="color: red; line-height:1.5em;"><strong>Warning: </strong>This function is now available as a Droplet. The next major release of website baker will not include this filter anymore. Please concider using the <a href="?tool=droplets">Droplet</a> [[EmailFilter]]</p>';

// Text and captions of form elements
$MOD_MAIL_FILTER['BASIC_CONF']			= 'Configuration de base des Emails';
$MOD_MAIL_FILTER['EMAIL_FILTER']		= 'Filtrer le texte des Emails';
$MOD_MAIL_FILTER['MAILTO_FILTER']		= 'Filtrer les liens mailto des Emails';
$MOD_MAIL_FILTER['ENABLED']					= 'Activ&eacute;';
$MOD_MAIL_FILTER['DISABLED']				= 'D&eacute;sactiv&eacute;';

$MOD_MAIL_FILTER['REPLACEMENT_CONF']= 'Remplacements';
$MOD_MAIL_FILTER['AT_REPLACEMENT']	= 'Remplacer "@" par';
$MOD_MAIL_FILTER['DOT_REPLACEMENT']	= 'Remplacer "." par';

?>