<?php
/**
 *
 * @category        framework
 * @package         language
 * @author          WebsiteBaker Project
 * @copyright       2004-2009, Ryan Djurovich
 * @copyright       2009-2010, Website Baker Org. e.V.
 * @link			http://www.websitebaker2.org/
 * @license         http://www.gnu.org/licenses/gpl.html
 * @platform        WebsiteBaker 2.8.x
 * @requirements    PHP 4.3.4 and higher
 * @version         $Id: CS.php 1282 2010-01-30 05:29:56Z Luisehahne $
 * @filesource		$HeadURL: http://svn.websitebaker2.org/branches/2.8.x/wb/languages/CS.php $
 * @lastmodified    $Date: 2010-01-30 06:29:56 +0100 (Sa, 30. Jan 2010) $
 *
 */

// use languageedit-module to modify this file

// Define that this file is loaded
if(!defined('LANGUAGE_LOADED')) {
define('LANGUAGE_LOADED', true);
}

// Set the language information
$language_code = 'CS';
$language_name = '&#268;e&scaron;tina';
$language_version = '2.8';
$language_platform = '2.8.x';
$language_author = 'WebStep, s.r.o.';
$language_license = 'GNU General Public License';

// Menu titles
$MENU['START'] = '&Uacute;vod';
$MENU['PAGES'] = 'Str&aacute;nky';
$MENU['MEDIA'] = 'M&eacute;dia';
$MENU['ADDONS'] = 'Roz&scaron;&iacute;&#345;en&iacute;';
$MENU['MODULES'] = 'Moduly';
$MENU['TEMPLATES'] = '&Scaron;ablony';
$MENU['LANGUAGES'] = 'Jazyky';
$MENU['PREFERENCES'] = 'Mo&#382;nosti';
$MENU['SETTINGS'] = 'Nastaven&iacute;';
$MENU['ADMINTOOLS'] = 'Admin-Tools';
$MENU['ACCESS'] = 'P&#345;&iacute;stup';
$MENU['USERS'] = 'U&#382;ivatel&eacute;';
$MENU['GROUPS'] = 'Skupiny';
$MENU['HELP'] = 'N&aacute;pov&#283;da';
$MENU['VIEW'] = 'Zobrazit';
$MENU['LOGOUT'] = 'Odhl&aacute;sit';
$MENU['LOGIN'] = 'P&#345;ihl&aacute;&scaron;en&iacute;';
$MENU['FORGOT'] = 'Z&iacute;skat zapomenut&eacute; p&#345;ihla&scaron;ovac&iacute; &uacute;daje';

// Section overviews
$OVERVIEW['START'] = 'Administra&#269;n&iacute; p&#345;ehled';
$OVERVIEW['PAGES'] = 'Spravovat webov&eacute; str&aacute;nky...';
$OVERVIEW['MEDIA'] = 'Spravovat soubory v adres&aacute;&#345;i m&eacute;di&iacute;...';
$OVERVIEW['MODULES'] = 'Spravovat moduly WebsiteBakeru...';
$OVERVIEW['TEMPLATES'] = 'Zm&#283;nit vzhled a chov&aacute;n&iacute; webu pomoc&iacute; &scaron;ablon...';
$OVERVIEW['LANGUAGES'] = 'Spravovat jazyky WebsiteBakeru...';
$OVERVIEW['PREFERENCES'] = 'Zm&#283;na nastaven&iacute; e-mailov&eacute; adresy, hesla, atd... ';
$OVERVIEW['SETTINGS'] = 'Zm&#283;na nastaven&iacute; WebsiteBakeru...';
$OVERVIEW['USERS'] = 'Spravovat u&#382;ivate WebsiteBakeru...';
$OVERVIEW['GROUPS'] = 'Spravovat skupiny u&#382;ivatel&#367; a jejich opr&aacute;vn&#283;n&iacute;...';
$OVERVIEW['HELP'] = 'M&aacute;te ot&aacute;zku? Hledejte odpov&#283;&#271;...';
$OVERVIEW['VIEW'] = 'Rychle prohl&eacute;dhout str&aacute;nky v nov&eacute;m okn&#283;...';
$OVERVIEW['ADMINTOOLS'] = 'Access the WebsiteBaker administration tools...';

// Headings
$HEADING['MODIFY_DELETE_PAGE'] = 'Zm&#283;nit/Smazat str&aacute;nku';
$HEADING['DELETED_PAGES'] = 'Smazan&eacute; str&aacute;nky';
$HEADING['ADD_PAGE'] = 'P&#345;idat str&aacute;nku';
$HEADING['ADD_HEADING'] = 'P&#345;idat z&aacute;hlav&iacute;';
$HEADING['MODIFY_PAGE'] = 'Upravit str&aacute;nku';
$HEADING['MODIFY_PAGE_SETTINGS'] = 'Zm&#283;nit nastaven&iacute; str&aacute;nky';
$HEADING['MODIFY_ADVANCED_PAGE_SETTINGS'] = 'Zm&#283;nit pokro&#269;il&aacute; nastaven&iacute; str&aacute;nky';
$HEADING['MANAGE_SECTIONS'] = 'Spravovat sekce';
$HEADING['MODIFY_INTRO_PAGE'] = 'Zm&#283;nit &uacute;vodn&iacute; (intro) str&aacute;nku';

$HEADING['BROWSE_MEDIA'] = 'Prohl&iacute;&#382;e&#269; m&eacute;di&iacute;';
$HEADING['CREATE_FOLDER'] = 'Vytvo&#345;it adres&aacute;&#345;';
$HEADING['UPLOAD_FILES'] = 'Nahr&aacute;t soubor(y)';

$HEADING['INSTALL_MODULE'] = 'Nainstalovat modul';
$HEADING['UNINSTALL_MODULE'] = 'Odinstalovat modul';
$HEADING['MODULE_DETAILS'] = 'Detaily modulu';

$HEADING['INSTALL_TEMPLATE'] = 'Nainstalovat &scaron;ablonu';
$HEADING['UNINSTALL_TEMPLATE'] = 'Odinstalovat &scaron;ablonu';
$HEADING['TEMPLATE_DETAILS'] = 'Detaily &scaron;ablony';

$HEADING['INSTALL_LANGUAGE'] = 'Nainstalovat jazyk';
$HEADING['UNINSTALL_LANGUAGE'] = 'Odinstalovat jazyk';
$HEADING['LANGUAGE_DETAILS'] = 'Detaily jazyka';

$HEADING['MY_SETTINGS'] = 'Moje nastaven&iacute;';
$HEADING['MY_EMAIL'] = 'M&#367;j e-mail';
$HEADING['MY_PASSWORD'] = 'Moje heslo';

$HEADING['GENERAL_SETTINGS'] = 'Obecn&aacute; nastaven&iacute;';
$HEADING['DEFAULT_SETTINGS'] = 'Implicitn&iacute; nastaven&iacute;';
$HEADING['SEARCH_SETTINGS'] = 'Nastaven&iacute; vyhled&aacute;v&aacute;n&iacute;';
$HEADING['FILESYSTEM_SETTINGS'] = 'Nastaven&iacute; syst&eacute;mu soubor&#367;';
$HEADING['SERVER_SETTINGS'] = 'Nastaven&iacute; serveru';
$HEADING['WBMAILER_SETTINGS'] = 'Mailer Settings';
$HEADING['ADMINISTRATION_TOOLS'] = 'N&aacute;stroje administrace';

$HEADING['MODIFY_DELETE_USER'] = 'Zm&#283;nit/Smazat u&#382;ivatele';
$HEADING['ADD_USER'] = 'P&#345;idat u&#382;ivatele';
$HEADING['MODIFY_USER'] = 'Zm&#283;nit u&#382;ivatele';

$HEADING['MODIFY_DELETE_GROUP'] = 'Zm&#283;nit/Smazat skupinu';
$HEADING['ADD_GROUP'] = 'P&#345;idat skupinu';
$HEADING['MODIFY_GROUP'] = 'Zm&#283;nit skupinu';

$HEADING['ADDON_PRECHECK_FAILED'] = 'Add-On requirements not met';
$HEADING['INVOKE_MODULE_FILES'] = 'Execute module files manually';

// Other text
$TEXT['OPEN'] = 'Open';
$TEXT['ADD'] = 'P&#345;idat';
$TEXT['MODIFY'] = 'Zm&#283;nit';
$TEXT['SETTINGS'] = 'Nastaven&iacute;';
$TEXT['DELETE'] = 'Smazat';
$TEXT['SAVE'] = 'Ulo&#382;it';
$TEXT['RESET'] = 'Vy&#269;istit';
$TEXT['LOGIN'] = 'P&#345;ihl&aacute;sit';
$TEXT['RELOAD'] = 'Obnovit';
$TEXT['CANCEL'] = 'Zru&scaron;it';
$TEXT['NAME'] = 'N&aacute;zev';
$TEXT['PLEASE_SELECT'] = 'Vyberte pros&iacute;m';
$TEXT['TITLE'] = 'N&aacute;zev';
$TEXT['PARENT'] = 'Nad&#345;azen&yacute;';
$TEXT['TYPE'] = 'Typ';
$TEXT['VISIBILITY'] = 'Viditelnost';
$TEXT['PRIVATE'] = 'Soukrom&aacute;';
$TEXT['PUBLIC'] = 'Ve&#345;ejn&aacute;';
$TEXT['NONE'] = 'Nen&iacute;';
$TEXT['NONE_FOUND'] = 'Nic nenalezeno';
$TEXT['CURRENT'] = 'Sou&#269;asn&yacute;';
$TEXT['CHANGE'] = 'Zm&#283;nit';
$TEXT['WINDOW'] = 'Okno';
$TEXT['DESCRIPTION'] = 'Popis';
$TEXT['KEYWORDS'] = 'Kl&iacute;&#269;ov&aacute; slova';
$TEXT['ADMINISTRATORS'] = 'Spr&aacute;vci';
$TEXT['PRIVATE_VIEWERS'] = 'Opr&aacute;vn&#283;n&iacute; k prohl&iacute;&#382;en&iacute;';
$TEXT['EXPAND'] = 'Rozbalit';
$TEXT['COLLAPSE'] = 'Sbalit';
$TEXT['MOVE_UP'] = 'Posunout nahoru';
$TEXT['MOVE_DOWN'] = 'Posunout dol&#367;';
$TEXT['RENAME'] = 'P&#345;ejm.';
$TEXT['MODIFY_SETTINGS'] = 'Zm&#283;nit nastaven&iacute;';
$TEXT['MODIFY_CONTENT'] = 'Zm&#283;nit obsah';
$TEXT['VIEW'] = 'Zobrazit';
$TEXT['UP'] = 'Nahoru';
$TEXT['FORGOTTEN_DETAILS'] = 'Zapom&#283;li jste svoje p&#345;ihla&scaron;ovac&iacute; &uacute;daje?';
$TEXT['NEED_TO_LOGIN'] = 'Chcete se p&#345;ihl&aacute;sit?';
$TEXT['SEND_DETAILS'] = 'Zaslat p&#345;ihla&scaron;ovac&iacute; &uacute;daje';
$TEXT['USERNAME'] = 'Jm&eacute;no';
$TEXT['PASSWORD'] = 'Heslo';
$TEXT['HOME'] = 'Dom&#367;';
$TEXT['TARGET_FOLDER'] = 'C&iacute;lov&yacute; adres&aacute;&#345;';
$TEXT['OVERWRITE_EXISTING'] = 'P&#345;epsat existuj&iacute;c&iacute;';
$TEXT['FILE'] = 'soubor';
$TEXT['FILES'] = 'soubory';
$TEXT['FOLDER'] = 'adres&aacute;&#345;';
$TEXT['FOLDERS'] = 'adres&aacute;&#345;e';
$TEXT['CREATE_FOLDER'] = 'Vytvo&#345;it adres&aacute;&#345;';
$TEXT['UPLOAD_FILES'] = 'Nahr&aacute;t soubor(y)';
$TEXT['CURRENT_FOLDER'] = 'Sou&#269;asn&yacute; adres&aacute;&#345;';
$TEXT['TO'] = 'na';
$TEXT['FROM'] = 'od';
$TEXT['INSTALL'] = 'Instalovat';
$TEXT['UNINSTALL'] = 'Odinstalovat';
$TEXT['VIEW_DETAILS'] = 'Zobrazit';
$TEXT['DISPLAY_NAME'] = 'Jm&eacute;no';
$TEXT['AUTHOR'] = 'Autor';
$TEXT['VERSION'] = 'Verze';
$TEXT['DESIGNED_FOR'] = 'Vyvinuto pro';
$TEXT['DESCRIPTION'] = 'Popis';
$TEXT['EMAIL'] = 'E-mail';
$TEXT['LANGUAGE'] = 'Jazyk';
$TEXT['TIMEZONE'] = '&#268;asov&eacute; p&aacute;smo';
$TEXT['CURRENT_PASSWORD'] = 'Sou&#269;asn&eacute; heslo';
$TEXT['NEW_PASSWORD'] = 'Nov&eacute; heslo';
$TEXT['RETYPE_NEW_PASSWORD'] = 'Znovu nov&eacute; heslo';
$TEXT['ACTIVE'] = 'Aktivn&iacute;';
$TEXT['DISABLED'] = 'Vypnuto';
$TEXT['ENABLED'] = 'Zapnuto';
$TEXT['RETYPE_PASSWORD'] = 'Znovu heslo';
$TEXT['GROUP'] = 'Skup.';
$TEXT['SYSTEM_PERMISSIONS'] = 'Syst&eacute;mov&aacute; opr&aacute;vn&#283;n&iacute;';
$TEXT['MODULE_PERMISSIONS'] = 'Opr&aacute;vn&#283;n&iacute; k modul&#367;m';
$TEXT['SHOW_ADVANCED'] = 'Zobrazit pokro&#269;il&eacute; volby';
$TEXT['HIDE_ADVANCED'] = 'Skr&yacute;t pokro&#269;il&eacute; volby';
$TEXT['BASIC'] = 'Z&aacute;kladn&iacute;';
$TEXT['ADVANCED'] = 'Pokro&#269;il&yacute;';
$TEXT['WEBSITE'] = 'WWW';
$TEXT['DEFAULT'] = 'V&yacute;choz&iacute;';
$TEXT['KEYWORDS'] = 'Kl&iacute;&#269;ov&aacute; slova';
$TEXT['TEXT'] = 'Text';
$TEXT['HEADER'] = 'Z&aacute;hlav&iacute;';
$TEXT['FOOTER'] = 'Z&aacute;pat&iacute;';
$TEXT['TEMPLATE'] = '&Scaron;ablona';
$TEXT['THEME'] = 'Backend-Theme';
$TEXT['INSTALLATION'] = 'Instalace';
$TEXT['DATABASE'] = 'Datab&aacute;ze';
$TEXT['HOST'] = 'Hostitel';
$TEXT['INTRO'] = 'Intro';
$TEXT['PAGE'] = 'Str&aacute;nka';
$TEXT['SIGNUP'] = 'Registrace';
$TEXT['PHP_ERROR_LEVEL'] = '&Uacute;rove&#328; hl&aacute;&scaron;en&iacute; chyb PHP';
$TEXT['ADMIN'] = 'Admin';
$TEXT['PATH'] = 'Cesta';
$TEXT['URL'] = 'URL';
$TEXT['FRONTEND'] = 'Front-end';
$TEXT['EXTENSION'] = 'Roz&scaron;&iacute;&#345;en&iacute;';
$TEXT['TABLE_PREFIX'] = 'Prefix tabulek';
$TEXT['CHANGES'] = 'Zm&#283;ny';
$TEXT['ADMINISTRATION'] = 'Administrace';
$TEXT['FORGOT_DETAILS'] = 'Zapomnenut&eacute; heslo?';
$TEXT['LOGGED_IN'] = 'p&#345;ihl&aacute;&scaron;en';
$TEXT['WELCOME_BACK'] = 'V&iacute;tejte';
$TEXT['FULL_NAME'] = 'Cel&eacute; jm&eacute;no';
$TEXT['ACCOUNT_SIGNUP'] = 'Registrace &uacute;&#269;tu';
$TEXT['LINK'] = 'Odkaz';
$TEXT['ANCHOR'] = 'Anchor';
$TEXT['TARGET'] = 'Sm&#283;&#345;uje do';
$TEXT['NEW_WINDOW'] = 'nov&eacute;ho okna';
$TEXT['SAME_WINDOW'] = 'p&#367;vodn&iacute;ho okna';
$TEXT['TOP_FRAME'] = 'svrchn&iacute;ho r&aacute;mu';
$TEXT['PAGE_LEVEL_LIMIT'] = 'Limit &uacute;rovn&iacute; str&aacute;nek';
$TEXT['SUCCESS'] = '&Uacute;sp&#283;&scaron;n&#283; provedeno';
$TEXT['ERROR'] = 'Chyba';
$TEXT['ARE_YOU_SURE'] = 'Jste si jisti?';
$TEXT['YES'] = 'Ano';
$TEXT['NO'] = 'Ne';
$TEXT['SYSTEM_DEFAULT'] = 'Implicitn&iacute; v syst&eacute;mu';
$TEXT['PAGE_TITLE'] = 'Titulek str&aacute;nky';
$TEXT['MENU_TITLE'] = 'Titulek menu';
$TEXT['ACTIONS'] = 'Akce';
$TEXT['UNKNOWN'] = 'Nezn&aacute;m&yacute;';
$TEXT['BLOCK'] = 'Blok';
$TEXT['SEARCH'] = 'Vyhled&aacute;v&aacute;n&iacute;';
$TEXT['SEARCHING'] = 'Vyhled&aacute;v&aacute;n&iacute;';
$TEXT['POST'] = 'p&#345;&iacute;sp&#283;vek';
$TEXT['COMMENT'] = 'Koment&aacute;&#345;';
$TEXT['COMMENTS'] = 'Koment&aacute;&#345;e';
$TEXT['COMMENTING'] = 'Koment&aacute;&#345;e';
$TEXT['SHORT'] = 'Kr&aacute;tk&yacute; popis';
$TEXT['LONG'] = 'Dlouh&yacute; popis';
$TEXT['LOOP'] = 'T&#283;lo';
$TEXT['FIELD'] = 'Pole';
$TEXT['REQUIRED'] = 'Povinn&yacute;';
$TEXT['LENGTH'] = 'D&eacute;lka';
$TEXT['MESSAGE'] = 'Zpr&aacute;va';
$TEXT['SUBJECT'] = 'P&#345;edm&#283;t';
$TEXT['MATCH'] = 'Shoda';
$TEXT['ALL_WORDS'] = 'V&scaron;echna slova';
$TEXT['ANY_WORDS'] = 'Cokoliv';
$TEXT['EXACT_MATCH'] = 'P&#345;esn&aacute; shoda';
$TEXT['SHOW'] = 'Zobrazit';
$TEXT['HIDE'] = 'Skr&yacute;t';
$TEXT['START_PUBLISHING'] = 'Za&#269;&aacute;tek publikace';
$TEXT['FINISH_PUBLISHING'] = 'Konec publikace';
$TEXT['DATE'] = 'Datum';
$TEXT['START'] = 'Za&#269;&aacute;tek';
$TEXT['END'] = 'Konec';
$TEXT['IMAGE'] = 'Obr&aacute;zek';
$TEXT['ICON'] = 'Ikona';
$TEXT['SECTION'] = 'Sekce';
$TEXT['DATE_FORMAT'] = 'Form&aacute;t data';
$TEXT['TIME_FORMAT'] = 'Form&aacute;t &#269;asu';
$TEXT['RESULTS'] = 'V&yacute;sledky';
$TEXT['RESIZE'] = 'Zm&#283;na velikosti';
$TEXT['MANAGE'] = 'Spravovat';
$TEXT['CODE'] = 'K&oacute;d jazyka';
$TEXT['WIDTH'] = '&Scaron;&iacute;&#345;ka';
$TEXT['HEIGHT'] = 'V&yacute;&scaron;ka';
$TEXT['MORE'] = 'V&iacute;ce';
$TEXT['READ_MORE'] = 'v&iacute;ce...';
$TEXT['CHANGE_SETTINGS'] = 'Zm&#283;nit nastaven&iacute;';
$TEXT['CURRENT_PAGE'] = 'Str&aacute;nka';
$TEXT['CLOSE'] = 'Zav&#345;&iacute;t';
$TEXT['INTRO_PAGE'] = '&Uacute;vodn&iacute; (intro) str&aacute;nka';
$TEXT['INSTALLATION_URL'] = 'URL instalace';
$TEXT['INSTALLATION_PATH'] = 'Cesta instalace';
$TEXT['PAGE_EXTENSION'] = 'P&#345;&iacute;pona str&aacute;nek';
$TEXT['NO_RESULTS'] = '&#381;&aacute;dn&yacute; v&yacute;sledek';
$TEXT['WEBSITE_TITLE'] = 'N&aacute;zev webu';
$TEXT['WEBSITE_DESCRIPTION'] = 'Popis webu';
$TEXT['WEBSITE_KEYWORDS'] = 'Kl&iacute;&#269;ov&aacute; slova';
$TEXT['WEBSITE_HEADER'] = 'Z&aacute;hlav&iacute; webu';
$TEXT['WEBSITE_FOOTER'] = 'Z&aacute;pat&iacute; webu';
$TEXT['RESULTS_HEADER'] = 'Z&aacute;hlav&iacute; v&yacute;sledk&#367;';
$TEXT['RESULTS_LOOP'] = 'Polo&#382;ka v&yacute;sledk&#367;';
$TEXT['RESULTS_FOOTER'] = 'Z&aacute;pat&iacute; v&yacute;sledk&#367;';
$TEXT['LEVEL'] = '&Uacute;rove&#328;';
$TEXT['NOT_FOUND'] = 'Nenalezeno';
$TEXT['PAGE_SPACER'] = 'Znak mezery';
$TEXT['MATCHING'] = 'Odpov&iacute;daj&iacute;c&iacute;';
$TEXT['TEMPLATE_PERMISSIONS'] = 'Pr&aacute;va k &scaron;ablon&#283;';
$TEXT['PAGES_DIRECTORY'] = 'Adres&aacute;&#345; str&aacute;nek';
$TEXT['MEDIA_DIRECTORY'] = 'Adres&aacute;&#345; m&eacute;di&iacute;';
$TEXT['FILE_MODE'] = 'M&oacute;d soubor&#367;';
$TEXT['USER'] = 'U&#382;ivatel';
$TEXT['OTHERS'] = 'Ostatn&iacute;';
$TEXT['READ'] = '&#268;ten&iacute;';
$TEXT['WRITE'] = 'Z&aacute;pis';
$TEXT['EXECUTE'] = 'Spu&scaron;t&#283;n&iacute;';
$TEXT['SMART_LOGIN'] = 'Chytr&eacute; p&#345;ihl&aacute;&scaron;en&iacute;';
$TEXT['REMEMBER_ME'] = 'Zapamatovat &uacute;daje';
$TEXT['FILESYSTEM_PERMISSIONS'] = 'Pr&aacute;va souborov&eacute;ho syst&eacute;mu';
$TEXT['DIRECTORIES'] = 'Adres&aacute;&#345;e';
$TEXT['DIRECTORY_MODE'] = 'M&oacute;d adres&aacute;&#345;&#367;';
$TEXT['LIST_OPTIONS'] = 'Seznam voleb';
$TEXT['OPTION'] = 'Volby';
$TEXT['ALLOW_MULTIPLE_SELECTIONS'] = 'Povolit v&iacute;cen&aacute;sobn&eacute; v&yacute;b&#283;ry';
$TEXT['TEXTFIELD'] = 'Vstupn&iacute; &#345;&aacute;dek';
$TEXT['TEXTAREA'] = 'Vstupn&iacute; pole';
$TEXT['SELECT_BOX'] = 'V&yacute;b&#283;rov&eacute; pole';
$TEXT['CHECKBOX_GROUP'] = 'Skupina zatrh&aacute;vac&iacute;ch pol&iacute;';
$TEXT['RADIO_BUTTON_GROUP'] = 'Skupina radio-pol&iacute;';
$TEXT['SIZE'] = 'Velikost';
$TEXT['DEFAULT_TEXT'] = 'V&yacute;choz&iacute; text';
$TEXT['SEPERATOR'] = 'Odd&#283;lova&#269;';
$TEXT['BACK'] = 'Zp&#283;t';
$TEXT['UNDER_CONSTRUCTION'] = 'Ve v&yacute;stavb&#283;';
$TEXT['MULTISELECT'] = 'V&iacute;cen&aacute;sobn&eacute; v&yacute;b&#283;rov&eacute; pole';
$TEXT['SHORT_TEXT'] = 'Kr&aacute;tk&yacute; text';
$TEXT['LONG_TEXT'] = 'Dlouh&yacute; text';
$TEXT['HOMEPAGE_REDIRECTION'] = 'P&#345;esm&#283;rov&aacute;n&iacute; homepage';
$TEXT['HEADING'] = 'Z&aacute;hlav&iacute;';
$TEXT['MULTIPLE_MENUS'] = 'V&iacute;cen&aacute;sobn&aacute; menu';
$TEXT['REGISTERED'] = 'Pro registrovan&eacute;';
$TEXT['SECTION_BLOCKS'] = 'Bloky sekc&iacute;';
$TEXT['REGISTERED_VIEWERS'] = 'Opr&aacute;vn&#283;n&iacute; k prohl&iacute;&#382;en&iacute;';
$TEXT['ALLOWED_VIEWERS'] = 'Opr&aacute;vn&#283;n&iacute; k prohl&iacute;&#382;en&iacute;';
$TEXT['SUBMISSION_ID'] = 'ID formul&aacute;&#345;e';
$TEXT['SUBMISSIONS'] = 'Odeslan&eacute; formul&aacute;&#345;e';
$TEXT['SUBMITTED'] = 'Odesl&aacute;no';
$TEXT['MAX_SUBMISSIONS_PER_HOUR'] = 'Max. po&#269;et odesl&aacute;n&iacute; za hodinu';
$TEXT['SUBMISSIONS_STORED_IN_DATABASE'] = 'Odeslan&eacute; formul&aacute;&#345;e';
$TEXT['EMAIL_ADDRESS'] = 'E-mailov&aacute; adresa';
$TEXT['CUSTOM'] = 'Vlastn&iacute; nastaven&iacute;';
$TEXT['ANONYMOUS'] = 'Anonymn&iacute;';
$TEXT['SERVER_OPERATING_SYSTEM'] = 'Opera&#269;n&iacute; syst&eacute;m serveru';
$TEXT['WORLD_WRITEABLE_FILE_PERMISSIONS'] = 'Pr&aacute;va z&aacute;pisu &amp;quot;pro cel&yacute; sv&#283;t&amp;quot;';
$TEXT['LINUX_UNIX_BASED'] = 'Zalo&#382;en na Linux/Unix';
$TEXT['WINDOWS'] = 'Windows';
$TEXT['HOME_FOLDER'] = 'Domovsk&yacute; adres&aacute;&#345;';
$TEXT['HOME_FOLDERS'] = 'Domovsk&eacute; adres&aacute;&#345;e';
$TEXT['PAGE_TRASH'] = 'Ko&scaron; str&aacute;nek';
$TEXT['INLINE'] = 'In-line';
$TEXT['SEPARATE'] = 'Odd&#283;len&#283;';
$TEXT['DELETED'] = 'Smaz&aacute;no';
$TEXT['VIEW_DELETED_PAGES'] = 'Zobrazit smazan&eacute; str&aacute;nky';
$TEXT['EMPTY_TRASH'] = 'Vypr&aacute;zdnit ko&scaron;';
$TEXT['TRASH_EMPTIED'] = 'Ko&scaron; vypr&aacute;zdn&#283;n';
$TEXT['ADD_SECTION'] = 'P&#345;idat sekci';
$TEXT['POST_HEADER'] = 'Z&aacute;hlav&iacute; p&#345;&iacute;sp&#283;vku';
$TEXT['POST_FOOTER'] = 'Z&aacute;pat&iacute; p&#345;&iacute;sp&#283;vku';
$TEXT['POSTS_PER_PAGE'] = 'P&#345;&iacute;sp&#283;vk&#367; na str&aacute;nku';
$TEXT['RESIZE_IMAGE_TO'] = 'Zm&#283;nit velikost obr&aacute;zku na';
$TEXT['UNLIMITED'] = 'Neomezen&yacute;';
$TEXT['OF'] = 'Z';
$TEXT['OUT_OF'] = 'Z';
$TEXT['NEXT'] = 'N&aacute;sleduj&iacute;c&iacute;';
$TEXT['PREVIOUS'] = 'P&#345;edchoz&iacute;';
$TEXT['NEXT_PAGE'] = 'N&aacute;sleduj&iacute;c&iacute; str&aacute;nka';
$TEXT['PREVIOUS_PAGE'] = 'P&#345;edchoz&iacute; str&aacute;nka';
$TEXT['ON'] = 'Na';
$TEXT['LAST_UPDATED_BY'] = 'Posledn&iacute; zm&#283;na:';
$TEXT['RESULTS_FOR'] = 'V&yacute;sledky pro';
$TEXT['TIME'] = '&#268;as';
$TEXT['REDIRECT_AFTER'] = 'Redirect after';
$TEXT['WYSIWYG_STYLE'] = 'WYSIWYG styl';
$TEXT['WYSIWYG_EDITOR'] = 'WYSIWYG editor';
$TEXT['SERVER_EMAIL'] = 'Syt&eacute;mov&yacute; e-mail';
$TEXT['MENU'] = 'Menu';
$TEXT['MANAGE_GROUPS'] = 'Spravovat skupiny';
$TEXT['MANAGE_USERS'] = 'Spravovat u&#382;ivatele';
$TEXT['PAGE_LANGUAGES'] = 'Jazykov&eacute; verze str&aacute;nek';
$TEXT['HIDDEN'] = 'Skryt&aacute;';
$TEXT['MAIN'] = 'Hlavn&iacute;';
$TEXT['RENAME_FILES_ON_UPLOAD'] = 'P&#345;ejm. soubory po nahr&aacute;n&iacute;';
$TEXT['APP_NAME'] = 'N&aacute;zev aplikace';
$TEXT['SESSION_IDENTIFIER'] = 'Identifik&aacute;tor session';
$TEXT['SEC_ANCHOR'] = 'Section-Anchor text';
$TEXT['BACKUP'] = 'Z&aacute;lohov&aacute;n&iacute;';
$TEXT['RESTORE'] = 'Obnova ze z&aacute;lohy';
$TEXT['BACKUP_DATABASE'] = 'Z&aacute;lohovat datab&aacute;zi';
$TEXT['RESTORE_DATABASE'] = 'Obnovit datab&aacute;zi ze z&aacute;lohy';
$TEXT['BACKUP_ALL_TABLES'] = 'Z&aacute;lohovat v&scaron;echny tabulky v datab&aacute;zi';
$TEXT['BACKUP_WB_SPECIFIC'] = 'Z&aacute;lohovat pouze tabulky WebsiteBakeru';
$TEXT['BACKUP_MEDIA'] = 'Zaz&aacute;lohovat m&eacute;dia';
$TEXT['RESTORE_MEDIA'] = 'Obnovit m&eacute;dia ze z&aacute;lohy';
$TEXT['ADMINISTRATION_TOOL'] = 'Administra&#269;n&iacute; n&aacute;stroje';
$TEXT['CAPTCHA_VERIFICATION'] = 'Kontrola obr. k&oacute;dem';
$TEXT['VERIFICATION'] = 'Verifikace';
$TEXT['DEFAULT_CHARSET'] = 'V&yacute;choz&iacute; k&oacute;dov&aacute; str&aacute;nka';
$TEXT['CHARSET'] = 'K&oacute;dov&aacute; str&aacute;nka';
$TEXT['MODULE_ORDER'] = 'Module-order for searching';
$TEXT['MAX_EXCERPT'] = 'Max lines of excerpt';
$TEXT['TIME_LIMIT'] = 'Max time to gather excerpts per module';
$TEXT['PUBL_START_DATE'] = 'Start date';
$TEXT['PUBL_END_DATE'] = 'End date';
$TEXT['CALENDAR'] = 'Calender';
$TEXT['DELETE_DATE'] = 'Delete date';
$TEXT['WBMAILER_DEFAULT_SETTINGS_NOTICE'] = 'Please specify a default "FROM" address and "SENDER" name below. It is recommended to use a FROM address like: <strong>admin@yourdomain.com</strong>. Some mail provider (e.g. <em>mail.com</em>) may reject mails with a FROM: address like <em>name@mail.com</em> sent via a foreign relay to avoid spam.<br /><br />The default values are only used if no other values are specified by WebsiteBaker. If your server supports <acronym title="Simple mail transfer protocol">SMTP</acronym>, you may want use this option for outgoing mails.';
$TEXT['WBMAILER_DEFAULT_SENDER_MAIL'] = 'Default From Mail';
$TEXT['WBMAILER_DEFAULT_SENDER_NAME'] = 'Default Sender Name';
$TEXT['WBMAILER_NOTICE'] = '<strong>SMTP Mailer Settings:</strong><br />The settings below are only required if you want to send mails via <acronym title="Simple mail transfer protocol">SMTP</acronym>. If you do not know your SMTP host or you are not sure about the required settings, simply stay with the default mail routine: PHP MAIL.';
$TEXT['WBMAILER_FUNCTION'] = 'Mail Routine';
$TEXT['WBMAILER_SMTP_HOST'] = 'SMTP Host';
$TEXT['WBMAILER_PHP'] = 'PHP MAIL';
$TEXT['WBMAILER_SMTP'] = 'SMTP';
$TEXT['WBMAILER_SMTP_AUTH'] = 'SMTP Authentification';
$TEXT['WBMAILER_SMTP_AUTH_NOTICE'] = 'only activate if your SMTP host requires authentification';
$TEXT['WBMAILER_SMTP_USERNAME'] = 'SMTP Username';
$TEXT['WBMAILER_SMTP_PASSWORD'] = 'SMTP Password';
$TEXT['PLEASE_LOGIN'] = 'Please login';
$TEXT['CAP_EDIT_CSS'] = 'Edit CSS';
$TEXT['HEADING_CSS_FILE'] = 'Actual module file: ';
$TEXT['TXT_EDIT_CSS_FILE'] = 'Edit the CSS definitions in the textarea below.';
$TEXT['CODE_SNIPPET'] = "Code-snippet";
$TEXT['REQUIREMENT'] = "Requirement";
$TEXT['INSTALLED'] = "installed";
$TEXT['NOT_INSTALLED'] = "not installed";
$TEXT['ADDON'] = "Add-On";
$TEXT['EXTENSION'] = "Extension";
$TEXT['UNZIP_FILE'] = "Upload and unpack a zip archive";
$TEXT['DELETE_ZIP'] = "Delete zip archive after unpacking";

// Success/error messages
$MESSAGE['FRONTEND']['SORRY_NO_VIEWING_PERMISSIONS'] = 'Nem&aacute;te opr&aacute;vn&#283;n&iacute; prohl&iacute;&#382;et tuto str&aacute;nku';
$MESSAGE['FRONTEND']['SORRY_NO_ACTIVE_SECTIONS'] = 'Sorry, no active content to display';

$MESSAGE['ADMIN']['INSUFFICIENT_PRIVELLIGES'] = 'Nedostate&#269;n&aacute; opr&aacute;vn&#283;n&iacute;';

$MESSAGE['LOGIN']['BOTH_BLANK'] = 'Zadejte pros&iacute;m svoje p&#345;ihla&scaron;ovac&iacute; &uacute;daje:';
$MESSAGE['LOGIN']['USERNAME_BLANK'] = 'Zadejte sv&eacute; u&#382;ivatelsk&eacute; jm&eacute;no';
$MESSAGE['LOGIN']['PASSWORD_BLANK'] = 'Zadejte sv&eacute; heslo';
$MESSAGE['LOGIN']['USERNAME_TOO_SHORT'] = 'Zadan&eacute; jm&eacute;no je p&#345;&iacute;li&scaron; kr&aacute;tk&eacute;';
$MESSAGE['LOGIN']['PASSWORD_TOO_SHORT'] = 'Zadan&eacute; heslo je p&#345;&iacute;li&scaron; kr&aacute;tk&eacute;';
$MESSAGE['LOGIN']['USERNAME_TOO_LONG'] = 'Zadan&eacute; jm&eacute;no je p&#345;&iacute;li&scaron; dlouh&eacute;';
$MESSAGE['LOGIN']['PASSWORD_TOO_LONG'] = 'Zadan&eacute; heslo je p&#345;&iacute;li&scaron; dlouh&eacute;';
$MESSAGE['LOGIN']['AUTHENTICATION_FAILED'] = 'Jm&eacute;no nebo heslo nen&iacute; platn&eacute;';

$MESSAGE['SIGNUP']['NO_EMAIL'] = 'Mus&iacute;te zadat e-mailovou adresu';
$MESSAGE['SIGNUP2']['SUBJECT_LOGIN_INFO'] = 'Your login details...';
$MESSAGE['SIGNUP2']['BODY_LOGIN_INFO'] = <<< EOT
Hello {LOGIN_DISPLAY_NAME},

Your '{LOGIN_WEBSITE_TITLE}' login details are:
Username: {LOGIN_NAME}
Password: {LOGIN_PASSWORD}

Your password has been set to the one above.
This means that your old password will no longer work.

If you have received this message in error, please delete it immediately.
EOT;

$MESSAGE['FORGOT_PASS']['NO_DATA'] = 'Zadejte svoji e-mailovou adresu:';
$MESSAGE['FORGOT_PASS']['EMAIL_NOT_FOUND'] = 'Zadan&aacute; e-mailov&aacute; adresa nebyla nalezena';
$MESSAGE['FORGOT_PASS']['CANNOT_EMAIL'] = 'Nelze odeslat heslo e-mailem, kontaktujte pros&iacute;m spr&aacute;vce syst&eacute;mu';
$MESSAGE['FORGOT_PASS']['PASSWORD_RESET'] = 'Va&scaron;e u&#382;ivatelsk&eacute; jm&eacute;no a heslo byly odesl&aacute;ny na Va&scaron;i e-mailovou adresu';
$MESSAGE['FORGOT_PASS']['ALREADY_RESET'] = 'Heslo nem&#367;&#382;e b&yacute;t p&#345;enastaveno v&iacute;cekr&aacute;t b&#283;hem jedn&eacute; hodiny';

$MESSAGE['START']['WELCOME_MESSAGE'] = 'V&iacute;tejte v Administra&#269;n&iacute; &#269;&aacute;sti';
$MESSAGE['START']['INSTALL_DIR_EXISTS'] = 'Pozor, st&aacute;le existuje instala&#269;n&iacute; adres&aacute;&#345;!';
$MESSAGE['START']['CURRENT_USER'] = 'Jste p&#345;ihl&aacute;&scaron;eni jako:';

$MESSAGE['SETTINGS']['UNABLE_OPEN_CONFIG'] = 'Nelze otev&#345;&iacute;t soubor s konfigurac&iacute;';
$MESSAGE['SETTINGS']['UNABLE_WRITE_CONFIG'] = 'Nelze zapisovat do souboru s konfigurac&iacute;';
$MESSAGE['SETTINGS']['SAVED'] = 'Nastaven&iacute; bylo &uacute;sp&#283;&scaron;n&#283; ulo&#382;eno';
$MESSAGE['SETTINGS']['MODE_SWITCH_WARNING'] = 'Pozn.: stisknut&iacute;m tohoto tla&#269;&iacute;tka dojde k zahozen&iacute; neulo&#382;en&yacute;ch zm&#283;n';
$MESSAGE['SETTINGS']['WORLD_WRITEABLE_WARNING'] = 'Pozn.: zapnut&iacute; t&eacute;to volby se doporu&#269;uje jen v testovac&iacute;m prost&#345;ed&iacute;';

$MESSAGE['USERS']['ADDED'] = 'U&#382;ivatel byl &uacute;sp&#283;&scaron;n&#283; p&#345;id&aacute;n';
$MESSAGE['USERS']['SAVED'] = 'U&#382;ivatel byl &uacute;sp&#283;&scaron;n&#283; ulo&#382;en';
$MESSAGE['USERS']['DELETED'] = 'U&#382;ivatel byl &uacute;sp&#283;&scaron;n&#283; smaz&aacute;n';
$MESSAGE['USERS']['NO_GROUP'] = 'Nebyla vybr&aacute;na skupina';
$MESSAGE['USERS']['USERNAME_TOO_SHORT'] = 'Zadan&eacute; u&#382;ivatelsk&eacute; jm&eacute;no je p&#345;&iacute;li&scaron; kr&aacute;tk&eacute;';
$MESSAGE['USERS']['PASSWORD_TOO_SHORT'] = 'Zadan&eacute; heslo je p&#345;&iacute;li&scaron; kr&aacute;tk&eacute;';
$MESSAGE['USERS']['PASSWORD_MISMATCH'] = 'Zadan&aacute; hesla nejsou shodn&aacute;';
$MESSAGE['USERS']['INVALID_EMAIL'] = 'Zadan&aacute; e-mailov&aacute; adresa je neplatn&aacute;';
$MESSAGE['USERS']['EMAIL_TAKEN'] = 'Zadan&aacute; e-mailov&aacute; adresa je ji&#382; pou&#382;&iacute;v&aacute;na';
$MESSAGE['USERS']['USERNAME_TAKEN'] = 'U&#382;ivatel se stejn&yacute;m u&#382;ivatelsk&yacute;m jm&eacute;nem ji&#382; existuje';
$MESSAGE['USERS']['CHANGING_PASSWORD'] = 'Pozn.: vypl&#328;te pouze hodnoty v&yacute;&scaron;e pokud si p&#345;ejete zm&#283;nit heslo';
$MESSAGE['USERS']['CONFIRM_DELETE'] = 'Jste si jisti, &#382;e chcete smazat tohoto u&#382;ivatele?';

$MESSAGE['GROUPS']['ADDED'] = 'Skupina byla &uacute;sp&#283;&scaron;n&#283; p&#345;id&aacute;na';
$MESSAGE['GROUPS']['SAVED'] = 'Skupina byla &uacute;sp&#283;&scaron;n&#283; ulo&#382;ena';
$MESSAGE['GROUPS']['DELETED'] = 'Skupina byla &uacute;sp&#283;&scaron;n&#283; smaz&aacute;na';
$MESSAGE['GROUPS']['GROUP_NAME_BLANK'] = 'N&aacute;zev skupiny je pr&aacute;zdn&yacute;';
$MESSAGE['GROUPS']['CONFIRM_DELETE'] = 'Jste si jisti, &#382;e chcete smazat tuto skupimu (a v&scaron;echny jej&iacute; u&#382;ivatele)?';
$MESSAGE['GROUPS']['NO_GROUPS_FOUND'] = 'Nenalezena &#382;&aacute;dn&aacute; skupina';
$MESSAGE['GROUPS']['GROUP_NAME_EXISTS'] = 'Tato skupina ji&#382; existuje';

$MESSAGE['PREFERENCES']['DETAILS_SAVED'] = 'Detaily byly &uacute;sp&#283;&scaron;n&#283; ulo&#382;eny';
$MESSAGE['PREFERENCES']['EMAIL_UPDATED'] = 'E-mail byl &uacute;sp&#283;&scaron;n&#283; ulo&#382;en';
$MESSAGE['PREFERENCES']['CURRENT_PASSWORD_INCORRECT'] = 'Sou&#269;asn&eacute; heslo neodpov&iacute;d&aacute;';
$MESSAGE['PREFERENCES']['PASSWORD_CHANGED'] = 'Heslo bylo &uacute;sp&#283;&scaron;n&#283; zm&#283;n&#283;no';

$MESSAGE['TEMPLATES']['CHANGE_TEMPLATE_NOTICE'] = 'Pozn.: zm&#283;na &scaron;ablony se prov&aacute;d&iacute; v sekci Nastaven&iacute;';

$MESSAGE['MEDIA']['DIR_DOT_DOT_SLASH'] = 'Nelze pou&#382;&iacute;t ../ v n&aacute;zvu adres&aacute;&#345;e';
$MESSAGE['MEDIA']['DIR_DOES_NOT_EXIST'] = 'Adres&aacute;&#345; neexistuje';
$MESSAGE['MEDIA']['TARGET_DOT_DOT_SLASH'] = 'Nelze pou&#382;&iacute;t ../ v c&iacute;lov&eacute;m adres&aacute;&#345;i';
$MESSAGE['MEDIA']['NAME_DOT_DOT_SLASH'] = 'Nelze pou&#382;&iacute;t ../ v n&aacute;zvu';
$MESSAGE['MEDIA']['NAME_INDEX_PHP'] = 'Nelze pou&#382;&iacute;t index.php jako n&aacute;zev';
$MESSAGE['MEDIA']['NONE_FOUND'] = 'Nenalezen &#382;&aacute;dn&yacute; soubor';
$MESSAGE['MEDIA']['FILE_NOT_FOUND'] = 'Soubor nenalezen';
$MESSAGE['MEDIA']['DELETED_FILE'] = 'Soubor byl &uacute;sp&#283;&scaron;n&#283; smaz&aacute;n';
$MESSAGE['MEDIA']['DELETED_DIR'] = 'Adres&aacute;&#345; byl &uacute;sp&#283;&scaron;n&#283; smaz&aacute;n';
$MESSAGE['MEDIA']['CONFIRM_DELETE'] = 'Jste si jisti, &#382;e chcete smazat n&aacute;sleduj&iacute;c&iacute; soubory nebo adres&aacute;&#345;e?';
$MESSAGE['MEDIA']['CANNOT_DELETE_FILE'] = 'Nelze smazat vybran&yacute; soubor';
$MESSAGE['MEDIA']['CANNOT_DELETE_DIR'] = 'Nelze smazat vybran&yacute; adres&aacute;&#345;';
$MESSAGE['MEDIA']['BLANK_NAME'] = 'Nezadali jste nov&yacute; n&aacute;zev';
$MESSAGE['MEDIA']['BLANK_EXTENSION'] = 'Nezadali jste p&#345;&iacute;ponu souboru';
$MESSAGE['MEDIA']['RENAMED'] = 'P&#345;ejmenov&aacute;n&iacute; prob&#283;hlo &uacute;sp&#283;&scaron;n&#283;';
$MESSAGE['MEDIA']['CANNOT_RENAME'] = 'P&#345;ejmenov&aacute;n&iacute; se nezda&#345;ilo';
$MESSAGE['MEDIA']['FILE_EXISTS'] = 'Soubor se stejn&yacute;m n&aacute;zvem ji&#382; existuje';
$MESSAGE['MEDIA']['DIR_EXISTS'] = 'Adres&aacute;&#345; se stejn&yacute;m n&aacute;zvem ji&#382; existuje';
$MESSAGE['MEDIA']['DIR_MADE'] = 'Adres&aacute;&#345; byl &uacute;sp&#283;&scaron;n&#283; vytvo&#345;en';
$MESSAGE['MEDIA']['DIR_NOT_MADE'] = 'Nelze vytvo&#345;it adres&aacute;&#345;';
$MESSAGE['MEDIA']['SINGLE_UPLOADED'] = ' soubor byl &uacute;sp&#283;&scaron;n&#283; nahr&aacute;n';
$MESSAGE['MEDIA']['UPLOADED'] = ' soubory byly &uacute;sp&#283;&scaron;n&#283; nahr&aacute;ny';

$MESSAGE['PAGES']['ADDED'] = 'Str&aacute;nka byla &uacute;sp&#283;&scaron;n&#283; p&#345;id&aacute;na';
$MESSAGE['PAGES']['ADDED_HEADING'] = 'Z&aacute;hlav&iacute; str&aacute;nky bylo &uacute;sp&#283;&scaron;n&#283; p&#345;id&aacute;no';
$MESSAGE['PAGES']['PAGE_EXISTS'] = 'Str&aacute;nka se stejn&yacute;m nebo podobn&yacute;m n&aacute;zvem ji&#382; existuje';
$MESSAGE['PAGES']['CANNOT_CREATE_ACCESS_FILE'] = 'Do&scaron;lo k chyb&#283; p&#345;i vytv&aacute;&#345;en&iacute; p&#345;&iacute;supov&eacute;ho souboru v adres&aacute;&#345;i str&aacute;nek (nedostate&#269;n&aacute; opr&aacute;vn&#283;n&iacute;)';
$MESSAGE['PAGES']['CANNOT_DELETE_ACCESS_FILE'] = 'Do&scaron;lo k chyb&#283; p&#345;i maz&aacute;n&iacute; p&#345;&iacute;supov&eacute;ho souboru v adres&aacute;&#345;i str&aacute;nek (nedostate&#269;n&aacute; opr&aacute;vn&#283;n&iacute;)';
$MESSAGE['PAGES']['NOT_FOUND'] = 'Str&aacute;nka nenalezena';
$MESSAGE['PAGES']['SAVED'] = 'Str&aacute;nka byla &uacute;sp&#283;&scaron;n&#283; ulo&#382;ena';
$MESSAGE['PAGES']['SAVED_SETTINGS'] = 'Nastaven&iacute; str&aacute;nky bylo &uacute;sp&#283;&scaron;n&#283; ulo&#382;eno';
$MESSAGE['PAGES']['NOT_SAVED'] = 'Do&scaron;lo k chyb&#283; p&#345;i ukl&aacute;d&aacute;n&iacute; str&aacute;nky';
$MESSAGE['PAGES']['DELETE_CONFIRM'] = 'Jste si jisti, &#382;e chcete smazat tuto str&aacute;nku (a v&scaron;echny podstr&aacute;nky)';
$MESSAGE['PAGES']['DELETED'] = 'Str&aacute;nka byla &uacute;sp&#283;&scaron;n&#283; smaz&aacute;na';
$MESSAGE['PAGES']['RESTORED'] = 'Str&aacute;nka byla &uacute;sp&#283;&scaron;n&#283; obnovena';
$MESSAGE['PAGES']['BLANK_PAGE_TITLE'] = 'Zadejte n&aacute;zev str&aacute;nky';
$MESSAGE['PAGES']['BLANK_MENU_TITLE'] = 'Zadejte n&aacute;zev v menu';
$MESSAGE['PAGES']['REORDERED'] = 'Str&aacute;nka byla &uacute;sp&#283;&scaron;n&#283; p&#345;esunuta';
$MESSAGE['PAGES']['CANNOT_REORDER'] = 'Do&scaron;lo k chyb&#283; p&#345;i zm&#283;n&#283; po&#345;ad&iacute; str&aacute;nky';
$MESSAGE['PAGES']['INSUFFICIENT_PERMISSIONS'] = 'Nem&aacute;te opr&aacute;vn&#283;n&iacute; ke zm&#283;n&#283; t&eacute;to str&aacute;nky';
$MESSAGE['PAGES']['INTRO_NOT_WRITABLE'] = 'Nelze zapisovat do souboru /pages/intro.php (nedostate&#269;n&aacute; opr&aacute;vn&#283;n&iacute;)';
$MESSAGE['PAGES']['INTRO_SAVED'] = 'Str&aacute;nka byla &uacute;sp&#283;&scaron;n&#283; ulo&#382;ena';
$MESSAGE['PAGES']['LAST_MODIFIED'] = 'Posledn&iacute; zm&#283;na:';
$MESSAGE['PAGES']['INTRO_LINK'] = 'Zm&#283;nit &uacute;vodn&iacute; (intro) str&aacute;nku';
$MESSAGE['PAGES']['SECTIONS_PROPERTIES_SAVED'] = 'Nastaven&iacute; sekce bylo &uacute;sp&#283;&scaron;n&#283; ulo&#382;eno';
$MESSAGE['PAGES']['RETURN_TO_PAGES'] = 'Zp&#283;t na str&aacute;nky';

$MESSAGE['GENERIC']['FILL_IN_ALL'] = 'Pros&iacute;m vra&#357;te se zp&#283;t a vypl&#328;te v&scaron;echna pole';
$MESSAGE['GENERIC']['FILE_TYPE'] = 'Nahr&aacute;van&yacute; soubory mus&iacute; b&yacute;t n&aacute;sleduj&iacute;c&iacute;ho form&aacute;tu:';
$MESSAGE['GENERIC']['FILE_TYPES'] = 'Nahr&aacute;van&yacute; soubor mus&iacute; m&iacute;t jeden z n&aacute;sleduj&iacute;c&iacute;ch form&aacute;t&#367;:';
$MESSAGE['GENERIC']['CANNOT_UPLOAD'] = 'Nelze nahr&aacute;t soubor';
$MESSAGE['GENERIC']['ALREADY_INSTALLED'] = 'Ji&#382; d&#345;&iacute;ve nainstalov&aacute;no';
$MESSAGE['GENERIC']['NOT_INSTALLED'] = 'Nenainstalov&aacute;no';
$MESSAGE['GENERIC']['CANNOT_UNINSTALL'] = 'Nelze odinstalovat';
$MESSAGE['GENERIC']['CANNOT_UNZIP'] = 'Nelze rozbalit (rozzipovat) soubor';
$MESSAGE['GENERIC']['INSTALLED'] = 'Instalace prob&#283;hla &uacute;sp&#283;&scaron;n&#283;';
$MESSAGE['GENERIC']['UPGRADED'] = 'Aktualizace prob&#283;hla &uacute;sp&#283;&scaron;n&#283;';
$MESSAGE['GENERIC']['UNINSTALLED'] = 'Odinstalace prob&#283;hla &uacute;sp&#283;&scaron;n&#283;';
$MESSAGE['GENERIC']['BAD_PERMISSIONS'] = 'Nelze zapisovat do c&iacute;lov&eacute;ho adres&aacute;&#345;e';
$MESSAGE['GENERIC']['INVALID'] = 'Nahr&aacute;van&yacute; soubor je neplatn&yacute;';
$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IN_USE'] = 'Nelze odinstalovat: soubor je pr&aacute;v&#283; pou&#382;&iacute;v&aacute;n';

$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IN_USE_TMPL'] = "<br /><br />{{type}} <b>{{type_name}}</b> could not be uninstalled, because it is still in use on {{pages}}.<br /><br />";
$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IN_USE_TMPL_PAGES'] = "this page;these pages";
$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IS_DEFAULT_TEMPLATE'] = "Can't uninstall the template <b>{{name}}</b>, because it is the default template!";

$MESSAGE['GENERIC']['WEBSITE_UNDER_CONSTRUCTION'] = 'Str&aacute;nky jsou ve v&yacute;stavb&#283;';
$MESSAGE['GENERIC']['PLEASE_CHECK_BACK_SOON'] = 'Zkuste to p&#345;&iacute;&scaron;t&#283;...';
$MESSAGE['GENERIC']['PLEASE_BE_PATIENT'] = '&#268;ekejte pros&iacute;m, operace m&#367;&#382;e chv&iacute;li trvat.';
$MESSAGE['GENERIC']['ERROR_OPENING_FILE'] = 'Do&scaron;lo k chyb&#283; p&#345;i otev&iacute;r&aacute;n&iacute; souboru.';
$MESSAGE['GENERIC']['INVALID_ADDON_FILE'] = 'Invalid WebsiteBaker installation file. Please check the *.zip format.';
$MESSAGE['GENERIC']['INVALID_LANGUAGE_FILE'] = 'Invalid WebsiteBaker language file. Please check the text file.';

$MESSAGE['MOD_FORM']['REQUIRED_FIELDS'] = 'Mus&iacute;te vyplnit n&aacute;sleduj&iacute;c&iacute; pole';
$MESSAGE['MOD_FORM']['EXCESS_SUBMISSIONS'] = 'Omlouv&aacute;me se, ale tento formul&aacute;&#345; dos&aacute;hl limitu povolen&yacute;ch odesl&aacute;n&iacute; pro tuto hodinu. Pros&iacute;m zkuste to znovu v dal&scaron;&iacute; hodin&#283;..';
$MESSAGE['MOD_FORM']['INCORRECT_CAPTCHA'] = 'Kontroln&iacute; k&oacute;d (zn&aacute;m&yacute; jako Captcha) neodpov&iacute;d&aacute;. Pokud m&aacute;te probl&eacute;my s p&#345;e&#269;ten&iacute;m tohoto k&oacute;du, kontaktujte '.SERVER_EMAIL.'';

$MESSAGE['ADDON']['RELOAD'] = 'Update database with information from Add-on files (e.g. after FTP upload).';
$MESSAGE['ADDON']['ERROR_RELOAD'] = 'Error while updating the Add-On information.';
$MESSAGE['ADDON']['MODULES_RELOADED'] = 'Moduly byly &uacute;sp&#283;&scaron;n&#283; p&#345;ehr&aacute;ny';
$MESSAGE['ADDON']['TEMPLATES_RELOADED'] = '&Scaron;ablony byly &uacute;sp&#283;&scaron;n&#283; p&#345;ehr&aacute;ny';
$MESSAGE['ADDON']['LANGUAGES_RELOADED'] = 'Jazyky byly &uacute;sp&#283;&scaron;n&#283; p&#345;ehr&aacute;ny';
$MESSAGE['ADDON']['PRECHECK_FAILED'] = 'Add-on installation failed. Your system does not fulfill the requirements of this Add-on. To make this Add-on working on your system, please fix the issues summarized below.';
$MESSAGE['ADDON']['MANUAL_INSTALLATION'] = 'When modules are uploaded via FTP (not recommended), the module installation files <tt>install.php</tt>, <tt>upgrade.php</tt> or <tt>uninstall.php</tt> will not be executed automatically. Those modules may not work correct or do not uninstall properly.<br /><br />You can execute the module files manually for modules uploaded via FTP below.';
$MESSAGE['ADDON']['MANUAL_INSTALLATION_WARNING'] = 'Warning: Existing module database entries will get lost. Only use this option if you experience problems with modules uploaded via FTP.';

?>