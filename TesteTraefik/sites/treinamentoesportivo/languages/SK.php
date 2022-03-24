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
 * @version         $Id: SK.php 1282 2010-01-30 05:29:56Z Luisehahne $
 * @filesource		$HeadURL: http://svn.websitebaker2.org/branches/2.8.x/wb/languages/SK.php $
 * @lastmodified    $Date: 2010-01-30 06:29:56 +0100 (Sa, 30. Jan 2010) $
 *
 */

// use languageedit-module to modify this file

// Define that this file is loaded
if(!defined('LANGUAGE_LOADED')) {
define('LANGUAGE_LOADED', true);
}

// Set the language information
$language_code = 'SK';
$language_name = 'Slovensky';
$language_version = '2.8';
$language_platform = '2.8.x';
$language_author = 'Michal Kurtulik - YONIX.SK';
$language_license = 'GNU General Public License';

// Menu titles
$MENU['START'] = '&Uacute;vod';
$MENU['PAGES'] = 'Str&aacute;nky';
$MENU['MEDIA'] = 'M&eacute;dia';
$MENU['ADDONS'] = 'Roz&#353;&iacute;renie';
$MENU['MODULES'] = 'Moduly';
$MENU['TEMPLATES'] = '&#352;ablony';
$MENU['LANGUAGES'] = 'Jazyky';
$MENU['PREFERENCES'] = 'Mo&#382;nosti';
$MENU['SETTINGS'] = 'Nastavenia';
$MENU['ADMINTOOLS'] = 'N&aacute;stroje';
$MENU['ACCESS'] = 'Pr&iacute;stup';
$MENU['USERS'] = 'U&#382;&iacute;vatelia';
$MENU['GROUPS'] = 'Skupiny';
$MENU['HELP'] = 'N&aacute;poveda';
$MENU['VIEW'] = 'Zobrazi&#357;';
$MENU['LOGOUT'] = 'Odhl&aacute;si&#357;';
$MENU['LOGIN'] = 'Prihl&aacute;senie';
$MENU['FORGOT'] = 'Z&iacute;ska&#357; zabudnut&eacute; prihlasovacie &uacute;daje';

// Section overviews
$OVERVIEW['START'] = 'Administrat&iacute;vny prehlad';
$OVERVIEW['PAGES'] = 'Spravova&#357; webov&eacute; str&aacute;nky...';
$OVERVIEW['MEDIA'] = 'Spravova&#357; s&uacute;bory v adres&aacute;ri m&eacute;di&iacute;...';
$OVERVIEW['MODULES'] = 'Spravova&#357; moduly...';
$OVERVIEW['TEMPLATES'] = 'Zmeni&#357; vzh&#318;ad a chovanie webu pomocou &#353;ablon...';
$OVERVIEW['LANGUAGES'] = 'Spravova&#357; jazyky...';
$OVERVIEW['PREFERENCES'] = 'Zmena nastavenia e-mailovej adresy, hesla, atd... ';
$OVERVIEW['SETTINGS'] = 'Zmena nastavenia...';
$OVERVIEW['USERS'] = 'Spravova&#357; u&#382;ivatelov...';
$OVERVIEW['GROUPS'] = 'Spravova&#357; skupiny u&#382;ivatelov a ich opr&aacute;vnen&iacute;...';
$OVERVIEW['HELP'] = 'M&aacute;te ot&aacute;zku? H&#318;adajte odpove&#271;...';
$OVERVIEW['VIEW'] = 'R&yacute;chlo prezrie&#357; str&aacute;nky v novom okne...';
$OVERVIEW['ADMINTOOLS'] = 'Administra&#269;n&eacute; n&aacute;stroje...';

// Headings
$HEADING['MODIFY_DELETE_PAGE'] = 'Zmenit/Vymaza&#357; str&aacute;nku';
$HEADING['DELETED_PAGES'] = 'Vymazan&eacute; str&aacute;nky';
$HEADING['ADD_PAGE'] = 'Prida&#357; str&aacute;nku';
$HEADING['ADD_HEADING'] = 'Prida&#357; z&aacute;hlavie';
$HEADING['MODIFY_PAGE'] = 'Upravi&#357; str&aacute;nku';
$HEADING['MODIFY_PAGE_SETTINGS'] = 'Zmeni&#357; nastavenie str&aacute;nky';
$HEADING['MODIFY_ADVANCED_PAGE_SETTINGS'] = 'Zmeni&#357; pokro&#269;il&eacute; nastavenie str&aacute;nky';
$HEADING['MANAGE_SECTIONS'] = 'Spravova&#357; sekcie';
$HEADING['MODIFY_INTRO_PAGE'] = 'Zmeni&#357; &uacute;vodn&uacute; (intro) str&aacute;nku';

$HEADING['BROWSE_MEDIA'] = 'Prehliada&#269; m&eacute;di&iacute;';
$HEADING['CREATE_FOLDER'] = 'Vytvori&#357; adres&aacute;r';
$HEADING['UPLOAD_FILES'] = 'Nahra&#357; s&uacute;bor(y)';

$HEADING['INSTALL_MODULE'] = 'Nain&#353;talovat modul';
$HEADING['UNINSTALL_MODULE'] = 'Odin&#353;talovat modul';
$HEADING['MODULE_DETAILS'] = 'Detaily modulu';

$HEADING['INSTALL_TEMPLATE'] = 'Nain&#353;talovat &#353;ablonu';
$HEADING['UNINSTALL_TEMPLATE'] = 'Odi&#353;talovat &#353;ablonu';
$HEADING['TEMPLATE_DETAILS'] = 'Detaily &#353;ablony';

$HEADING['INSTALL_LANGUAGE'] = 'Nain&#353;talovat jazyk';
$HEADING['UNINSTALL_LANGUAGE'] = 'Odin&#353;talovat jazyk';
$HEADING['LANGUAGE_DETAILS'] = 'Detaily jazyka';

$HEADING['MY_SETTINGS'] = 'Moje nastavenie';
$HEADING['MY_EMAIL'] = 'M&ocirc;j e-mail';
$HEADING['MY_PASSWORD'] = 'Moje heslo';

$HEADING['GENERAL_SETTINGS'] = 'Obecn&eacute; nastavenie';
$HEADING['DEFAULT_SETTINGS'] = 'Implicitn&eacute; nastavenie';
$HEADING['SEARCH_SETTINGS'] = 'Nastavenie vyh&#318;ad&aacute;vania';
$HEADING['FILESYSTEM_SETTINGS'] = 'Nastavenie syst&eacute;mu s&uacute;borov';
$HEADING['SERVER_SETTINGS'] = 'Nastavenie serveru';
$HEADING['WBMAILER_SETTINGS'] = 'Nastavenia E-Mailu';
$HEADING['ADMINISTRATION_TOOLS'] = 'Administra&#269;n&eacute; n&aacute;stroje';

$HEADING['MODIFY_DELETE_USER'] = 'Zmeni&#357;/Vymaza&#357; u&#382;&iacute;vatelov';
$HEADING['ADD_USER'] = 'Prida&#357; u&#382;&iacute;vate&#318;ov';
$HEADING['MODIFY_USER'] = 'Zmeni&#357; u&#382;&iacute;vatelov';

$HEADING['MODIFY_DELETE_GROUP'] = 'Zmeni&#357;/Vymaza&#357; skupinu';
$HEADING['ADD_GROUP'] = 'Prida&#357; skupinu';
$HEADING['MODIFY_GROUP'] = 'Zmeni&#357; skupinu';

$HEADING['ADDON_PRECHECK_FAILED'] = 'Nie s&uacute; splnen&eacute; po&#382;iadavky pre roz&#353;&iacute;renie';
$HEADING['INVOKE_MODULE_FILES'] = 'Spustite  in&#353;tal&aacute;ciu modulu ru&#269;ne';

// Other text
$TEXT['OPEN'] = 'Otvori&#357;';
$TEXT['ADD'] = 'Prida&#357;';
$TEXT['MODIFY'] = 'Zmeni&#357;';
$TEXT['SETTINGS'] = 'Nastavenie';
$TEXT['DELETE'] = 'Vymaza&#357;';
$TEXT['SAVE'] = 'Ulo&#382;i&#357;';
$TEXT['RESET'] = 'Vy&#269;isti&#357;';
$TEXT['LOGIN'] = 'Prihl&aacute;si&#357;';
$TEXT['RELOAD'] = 'Obnovi&#357;';
$TEXT['CANCEL'] = 'Zru&#353;i&#357;';
$TEXT['NAME'] = 'N&aacute;zov';
$TEXT['PLEASE_SELECT'] = 'Vyberte pros&iacute;m';
$TEXT['TITLE'] = 'N&aacute;zov';
$TEXT['PARENT'] = 'Nadraden&yacute;';
$TEXT['TYPE'] = 'Typ';
$TEXT['VISIBILITY'] = 'Vidite&#318;nos&#357;';
$TEXT['PRIVATE'] = 'S&uacute;kromn&aacute;';
$TEXT['PUBLIC'] = 'Verejn&aacute;';
$TEXT['NONE'] = 'Nie je';
$TEXT['NONE_FOUND'] = 'Ni&#269; sa nena&#353;lo';
$TEXT['CURRENT'] = 'S&uacute;&#269;asn&yacute;';
$TEXT['CHANGE'] = 'Zmeni&#357;';
$TEXT['WINDOW'] = 'Okno';
$TEXT['DESCRIPTION'] = 'Popis';
$TEXT['KEYWORDS'] = 'K&#318;&uacute;&#269;ov&eacute; slov&aacute;';
$TEXT['ADMINISTRATORS'] = 'Spr&aacute;vcovia';
$TEXT['PRIVATE_VIEWERS'] = 'Opr&aacute;vnenie k prezeraniu';
$TEXT['EXPAND'] = 'Rozbali&#357;';
$TEXT['COLLAPSE'] = 'Zbali&#357;';
$TEXT['MOVE_UP'] = 'Posun&uacute;&#357; nahor';
$TEXT['MOVE_DOWN'] = 'Posun&uacute;&#357; dole';
$TEXT['RENAME'] = 'Premenova&#357;.';
$TEXT['MODIFY_SETTINGS'] = 'Zmeni&#357; nastavenie';
$TEXT['MODIFY_CONTENT'] = 'Zmeni&#357; obsah';
$TEXT['VIEW'] = 'Zobrazi&#357;';
$TEXT['UP'] = 'Nahor';
$TEXT['FORGOTTEN_DETAILS'] = 'Zabudli ste svoje prihlasovanie &uacute;daje ?';
$TEXT['NEED_TO_LOGIN'] = 'Chcete sa prihl&aacute;si&#357;?';
$TEXT['SEND_DETAILS'] = 'Zasla&#357; prihlasovanie &uacute;daje';
$TEXT['USERNAME'] = 'Meno';
$TEXT['PASSWORD'] = 'Heslo';
$TEXT['HOME'] = 'Domov';
$TEXT['TARGET_FOLDER'] = 'Cie&#318;ov&yacute; adres&aacute;r';
$TEXT['OVERWRITE_EXISTING'] = 'Prep&iacute;sa&#357; existuj&uacute;ci';
$TEXT['FILE'] = 's&uacute;bor';
$TEXT['FILES'] = 's&uacute;bory';
$TEXT['FOLDER'] = 'adres&aacute;r';
$TEXT['FOLDERS'] = 'adres&aacute;re';
$TEXT['CREATE_FOLDER'] = 'Vytvorit adres&aacute;r';
$TEXT['UPLOAD_FILES'] = 'Nahra&#357; s&uacute;bor(y)';
$TEXT['CURRENT_FOLDER'] = 'S&uacute;&#269;asn&yacute; adres&aacute;r';
$TEXT['TO'] = 'na';
$TEXT['FROM'] = 'od';
$TEXT['INSTALL'] = 'In&#353;talovat';
$TEXT['UNINSTALL'] = 'Odin&#353;talovat';
$TEXT['VIEW_DETAILS'] = 'Zobrazi&#357;';
$TEXT['DISPLAY_NAME'] = 'Meno';
$TEXT['AUTHOR'] = 'Autor';
$TEXT['VERSION'] = 'Verzia';
$TEXT['DESIGNED_FOR'] = 'Vyvinut&eacute; pre';
$TEXT['DESCRIPTION'] = 'Popis';
$TEXT['EMAIL'] = 'E-mail';
$TEXT['LANGUAGE'] = 'Jazyk';
$TEXT['TIMEZONE'] = '&#268;asov&eacute; p&aacute;smo';
$TEXT['CURRENT_PASSWORD'] = 'S&uacute;&#269;asn&eacute; heslo';
$TEXT['NEW_PASSWORD'] = 'Nov&eacute; heslo';
$TEXT['RETYPE_NEW_PASSWORD'] = 'Znovu nov&eacute; heslo';
$TEXT['ACTIVE'] = 'Akt&iacute;vny';
$TEXT['DISABLED'] = 'Vypnut&eacute;';
$TEXT['ENABLED'] = 'Zapnut&eacute;';
$TEXT['RETYPE_PASSWORD'] = 'Znovu heslo';
$TEXT['GROUP'] = 'Skupina';
$TEXT['SYSTEM_PERMISSIONS'] = 'Syst&eacute;mov&eacute; opr&aacute;vnenie';
$TEXT['MODULE_PERMISSIONS'] = 'Opr&aacute;vnenie k modulom';
$TEXT['SHOW_ADVANCED'] = 'Zobrazi&#357; pokro&#269;il&eacute; vo&#318;by';
$TEXT['HIDE_ADVANCED'] = 'Skry&#357; pokro&#269;il&eacute; vo&#318;by';
$TEXT['BASIC'] = 'Z&aacute;kladn&yacute;';
$TEXT['ADVANCED'] = 'Pokro&#269;il&yacute;';
$TEXT['WEBSITE'] = 'WWW';
$TEXT['DEFAULT'] = 'V&yacute;chodz&iacute;';
$TEXT['KEYWORDS'] = 'K&#318;&uacute;&#269;ov&eacute; slov&aacute;';
$TEXT['TEXT'] = 'Text';
$TEXT['HEADER'] = 'Z&aacute;hlavie';
$TEXT['FOOTER'] = 'Z&aacute;p&auml;tie';
$TEXT['TEMPLATE'] = '&#352;ablona';
$TEXT['THEME'] = 'Backend-Theme';
$TEXT['INSTALLATION'] = 'In&#353;tal&aacute;cia';
$TEXT['DATABASE'] = 'Datab&aacute;za';
$TEXT['HOST'] = 'Hostite&#318;';
$TEXT['INTRO'] = 'Intro';
$TEXT['PAGE'] = 'Str&aacute;nka';
$TEXT['SIGNUP'] = 'Registr&aacute;cia';
$TEXT['PHP_ERROR_LEVEL'] = '&Uacute;rove&#328; hl&aacute;senia ch&yacute;b PHP';
$TEXT['ADMIN'] = 'Admin';
$TEXT['PATH'] = 'Cesta';
$TEXT['URL'] = 'URL';
$TEXT['FRONTEND'] = 'Front-end';
$TEXT['EXTENSION'] = 'Roz&#353;&iacute;renie';
$TEXT['TABLE_PREFIX'] = 'Prefix tabuliek';
$TEXT['CHANGES'] = 'Zmeny';
$TEXT['ADMINISTRATION'] = 'Administrat&iacute;va';
$TEXT['FORGOT_DETAILS'] = 'Zabudnut&eacute; heslo?';
$TEXT['LOGGED_IN'] = 'prihl&aacute;senie';
$TEXT['WELCOME_BACK'] = 'Vitajte';
$TEXT['FULL_NAME'] = 'Cel&eacute; meno';
$TEXT['ACCOUNT_SIGNUP'] = 'Registr&aacute;cia &uacute;&#269;tu';
$TEXT['LINK'] = 'Odkaz';
$TEXT['ANCHOR'] = 'Anchor';
$TEXT['TARGET'] = 'Smeruje do';
$TEXT['NEW_WINDOW'] = 'nov&eacute;ho okna';
$TEXT['SAME_WINDOW'] = 'p&ocirc;vodn&eacute;ho okna';
$TEXT['TOP_FRAME'] = 'vrchn&eacute;ho r&aacute;mu';
$TEXT['PAGE_LEVEL_LIMIT'] = 'Limit &uacute;rovne str&aacute;nok';
$TEXT['SUCCESS'] = '&Uacute;spe&#353;ne preveden&eacute;';
$TEXT['ERROR'] = 'Chyba';
$TEXT['ARE_YOU_SURE'] = 'Ste si ist&iacute;?';
$TEXT['YES'] = 'Ano';
$TEXT['NO'] = 'Nie';
$TEXT['SYSTEM_DEFAULT'] = 'Implicitn&eacute; v syst&eacute;me';
$TEXT['PAGE_TITLE'] = 'Titulok str&aacute;nky';
$TEXT['MENU_TITLE'] = 'Titulok menu';
$TEXT['ACTIONS'] = 'Akcia';
$TEXT['UNKNOWN'] = 'Nezn&aacute;m&yacute;';
$TEXT['BLOCK'] = 'Blok';
$TEXT['SEARCH'] = 'Vyh&#318;ad&aacute;vanie';
$TEXT['SEARCHING'] = 'Vyh&#318;ad&aacute;vanie';
$TEXT['POST'] = 'pr&iacute;spevok';
$TEXT['COMMENT'] = 'Koment&aacute;r';
$TEXT['COMMENTS'] = 'Koment&aacute;re';
$TEXT['COMMENTING'] = 'Koment&aacute;re';
$TEXT['SHORT'] = 'Kr&aacute;tky popis';
$TEXT['LONG'] = 'Dlh&yacute; popis';
$TEXT['LOOP'] = 'Telo';
$TEXT['FIELD'] = 'Pole';
$TEXT['REQUIRED'] = 'Povinn&yacute;';
$TEXT['LENGTH'] = 'D&#314;&#382;ka';
$TEXT['MESSAGE'] = 'Spr&aacute;va';
$TEXT['SUBJECT'] = 'Predmet';
$TEXT['MATCH'] = 'Zhoda';
$TEXT['ALL_WORDS'] = 'V&#353;etky slov&aacute;';
$TEXT['ANY_WORDS'] = '&#268;oko&#318;vek';
$TEXT['EXACT_MATCH'] = 'Presn&aacute; zhoda';
$TEXT['SHOW'] = 'Zobrazi&#357;';
$TEXT['HIDE'] = 'Skry&#357;';
$TEXT['START_PUBLISHING'] = 'Za&#269;iatok publik&aacute;cie';
$TEXT['FINISH_PUBLISHING'] = 'Koniec publik&aacute;cie';
$TEXT['DATE'] = 'D&aacute;tum';
$TEXT['START'] = 'Za&#269;iatok';
$TEXT['END'] = 'Koniec';
$TEXT['IMAGE'] = 'Obr&aacute;zok';
$TEXT['ICON'] = 'Ikona';
$TEXT['SECTION'] = 'Sekcia';
$TEXT['DATE_FORMAT'] = 'Form&aacute;t d&aacute;tumu';
$TEXT['TIME_FORMAT'] = 'Form&aacute;t &#269;asu';
$TEXT['RESULTS'] = 'V&yacute;sledky';
$TEXT['RESIZE'] = 'Zmena ve&#318;kosti';
$TEXT['MANAGE'] = 'Spravova&#357;';
$TEXT['CODE'] = 'K&oacute;d jazyka';
$TEXT['WIDTH'] = '&#352;&iacute;rka';
$TEXT['HEIGHT'] = 'V&yacute;&#353;ka';
$TEXT['MORE'] = 'Viacej';
$TEXT['READ_MORE'] = '&#269;&iacute;taj viac...';
$TEXT['CHANGE_SETTINGS'] = 'Zmeni&#357; nastavenie';
$TEXT['CURRENT_PAGE'] = 'Str&aacute;nka';
$TEXT['CLOSE'] = 'Zavrie&#357;';
$TEXT['INTRO_PAGE'] = '&Uacute;vodn&aacute; (intro) str&aacute;nka';
$TEXT['INSTALLATION_URL'] = 'URL in&#353;tal&aacute;cia';
$TEXT['INSTALLATION_PATH'] = 'Cesta in&#353;tal&aacute;cie';
$TEXT['PAGE_EXTENSION'] = 'Pr&iacute;pona str&aacute;nok';
$TEXT['NO_RESULTS'] = '&#381;iadny v&yacute;sledok';
$TEXT['WEBSITE_TITLE'] = 'N&aacute;zov webu';
$TEXT['WEBSITE_DESCRIPTION'] = 'Popis webu';
$TEXT['WEBSITE_KEYWORDS'] = 'K&#318;&uacute;&#269;ov&eacute; slov&aacute;';
$TEXT['WEBSITE_HEADER'] = 'Z&aacute;hlavie webu';
$TEXT['WEBSITE_FOOTER'] = 'Z&aacute;p&auml;tie webu';
$TEXT['RESULTS_HEADER'] = 'Z&aacute;hlavie v&yacute;sledkov';
$TEXT['RESULTS_LOOP'] = 'Polo&#382;ka v&yacute;sledkov';
$TEXT['RESULTS_FOOTER'] = 'Z&aacute;p&auml;tie v&yacute;sledkov';
$TEXT['LEVEL'] = '&Uacute;rove&#328;';
$TEXT['NOT_FOUND'] = 'Nen&aacute;jdene';
$TEXT['PAGE_SPACER'] = 'Znak medzery';
$TEXT['MATCHING'] = 'Zodpovedaj&uacute;ci';
$TEXT['TEMPLATE_PERMISSIONS'] = 'Pr&aacute;va k &#353;ablone';
$TEXT['PAGES_DIRECTORY'] = 'Adres&aacute;r str&aacute;nok';
$TEXT['MEDIA_DIRECTORY'] = 'Adres&aacute;r m&eacute;di&iacute;';
$TEXT['FILE_MODE'] = 'M&oacute;d s&uacute;borov';
$TEXT['USER'] = 'U&#382;&iacute;vate&#318;';
$TEXT['OTHERS'] = 'Ostatn&yacute;';
$TEXT['READ'] = '&#268;&iacute;tanie';
$TEXT['WRITE'] = 'Z&aacute;pis';
$TEXT['EXECUTE'] = 'Spustenie';
$TEXT['SMART_LOGIN'] = 'M&uacute;dre prihl&aacute;senie';
$TEXT['REMEMBER_ME'] = 'Zapam&auml;ta&#357; &uacute;daje';
$TEXT['FILESYSTEM_PERMISSIONS'] = 'Pr&aacute;va s&uacute;borov&eacute;ho syst&eacute;mu';
$TEXT['DIRECTORIES'] = 'Adres&aacute;re';
$TEXT['DIRECTORY_MODE'] = 'M&oacute;d adres&aacute;rov';
$TEXT['LIST_OPTIONS'] = 'Zoznam volieb';
$TEXT['OPTION'] = 'Vo&#318;by';
$TEXT['ALLOW_MULTIPLE_SELECTIONS'] = 'Povolit viacn&aacute;sobn&eacute; v&yacute;bery';
$TEXT['TEXTFIELD'] = 'Vstupn&yacute; riadok';
$TEXT['TEXTAREA'] = 'Vstupn&eacute; pole';
$TEXT['SELECT_BOX'] = 'V&yacute;berov&eacute; pole';
$TEXT['CHECKBOX_GROUP'] = 'Skupina za&#353;krt&aacute;vac&iacute;ch pol&iacute;';
$TEXT['RADIO_BUTTON_GROUP'] = 'Skupina radio-pol&iacute;';
$TEXT['SIZE'] = 'Ve&#318;kos&#357;';
$TEXT['DEFAULT_TEXT'] = 'Prednastaven&yacute; text';
$TEXT['SEPERATOR'] = 'Odde&#318;ova&#269;';
$TEXT['BACK'] = 'Sp&auml;&#357;';
$TEXT['UNDER_CONSTRUCTION'] = 'Vo v&yacute;stavbe';
$TEXT['MULTISELECT'] = 'Viacn&aacute;sobn&eacute; v&yacute;berov&eacute; pole';
$TEXT['SHORT_TEXT'] = 'Kr&aacute;tk&yacute; text';
$TEXT['LONG_TEXT'] = 'Dlh&yacute; text';
$TEXT['HOMEPAGE_REDIRECTION'] = 'Presmerovanie hlavnej str&aacute;nky';
$TEXT['HEADING'] = 'Z&aacute;hlavie';
$TEXT['MULTIPLE_MENUS'] = 'Viacn&aacute;sobn&eacute; menu';
$TEXT['REGISTERED'] = 'Pre registrovan&yacute;ch';
$TEXT['START'] = '&#352;tart';
$TEXT['SECTION_BLOCKS'] = 'Bloky sekci&iacute;';
$TEXT['REGISTERED_VIEWERS'] = 'Opr&aacute;vnenie k prezeraniu';
$TEXT['ALLOWED_VIEWERS'] = 'Opr&aacute;vnenie k prezeraniu';
$TEXT['SUBMISSION_ID'] = 'ID formul&aacute;re';
$TEXT['SUBMISSIONS'] = 'Odoslan&eacute; formul&aacute;re';
$TEXT['SUBMITTED'] = 'Odoslan&eacute;';
$TEXT['MAX_SUBMISSIONS_PER_HOUR'] = 'Max. po&#269;et odoslan&yacute;ch za hodinu';
$TEXT['SUBMISSIONS_STORED_IN_DATABASE'] = 'Odoslan&eacute; formul&aacute;re';
$TEXT['EMAIL_ADDRESS'] = 'E-mailov&aacute; adresa';
$TEXT['CUSTOM'] = 'Vlastn&eacute; nastavenie';
$TEXT['ANONYMOUS'] = 'Anonymn&eacute;';
$TEXT['SERVER_OPERATING_SYSTEM'] = 'Opera&#269;n&yacute; syst&eacute;m serveru';
$TEXT['WORLD_WRITEABLE_FILE_PERMISSIONS'] = 'Pr&aacute;va z&aacute;pisu &quot;pre cel&yacute; svet&quot;';
$TEXT['LINUX_UNIX_BASED'] = 'Zalo&#382;en&yacute; na Linux/Unix';
$TEXT['WINDOWS'] = 'Windows';
$TEXT['HOME_FOLDER'] = 'Domovsk&yacute; adres&aacute;r';
$TEXT['HOME_FOLDERS'] = 'Domovsk&eacute; adres&aacute;re';
$TEXT['PAGE_TRASH'] = 'K&ocirc;&#353; str&aacute;nok';
$TEXT['INLINE'] = 'In-line';
$TEXT['SEPARATE'] = 'Oddelene';
$TEXT['DELETED'] = 'Vymazan&eacute;';
$TEXT['VIEW_DELETED_PAGES'] = 'Zobrazi&#357; vymazan&eacute; str&aacute;nky';
$TEXT['EMPTY_TRASH'] = 'Vypr&aacute;zdni&#357; k&ocirc;&#353;';
$TEXT['TRASH_EMPTIED'] = 'K&ocirc;&#353; vypr&aacute;zdnen&yacute;';
$TEXT['ADD_SECTION'] = 'Prida&#357; sekciu';
$TEXT['POST_HEADER'] = 'Z&aacute;hlavie pr&iacute;spevku';
$TEXT['POST_FOOTER'] = 'Z&aacute;p&auml;tie pr&iacute;spevku';
$TEXT['POSTS_PER_PAGE'] = 'Pr&iacute;spevky na str&aacute;nku';
$TEXT['RESIZE_IMAGE_TO'] = 'Zmeni&#357; ve&#318;kos&#357; obr&aacute;zku na';
$TEXT['UNLIMITED'] = 'Neobmedzen&yacute;';
$TEXT['OF'] = 'Z';
$TEXT['OUT_OF'] = 'Z';
$TEXT['NEXT'] = 'Nasleduj&uacute;ci';
$TEXT['PREVIOUS'] = 'Predch&aacute;dzaj&uacute;ci';
$TEXT['NEXT_PAGE'] = 'Nasleduj&uacute;ca str&aacute;nka';
$TEXT['PREVIOUS_PAGE'] = 'Predch&aacute;dzaj&uacute;ca str&aacute;nka';
$TEXT['ON'] = 'Na';
$TEXT['LAST_UPDATED_BY'] = 'Posledn&aacute;  zmena:';
$TEXT['RESULTS_FOR'] = 'V&yacute;sledky pre';
$TEXT['TIME'] = '&#268;as';
$TEXT['WYSIWYG_STYLE'] = 'WYSIWYG styl';
$TEXT['WYSIWYG_EDITOR'] = 'WYSIWYG editor';
$TEXT['SERVER_EMAIL'] = 'Syt&eacute;mov&yacute; e-mail';
$TEXT['MENU'] = 'Menu';
$TEXT['MANAGE_GROUPS'] = 'Spravova&#357; skupiny';
$TEXT['MANAGE_USERS'] = 'Spravova&#357; u&#382;ivate&#318;ov';
$TEXT['PAGE_LANGUAGES'] = 'Jazykov&eacute; verzie str&aacute;nok';
$TEXT['HIDDEN'] = 'Skryt&aacute;';
$TEXT['MAIN'] = 'Hlavn&yacute;';
$TEXT['RENAME_FILES_ON_UPLOAD'] = 'Premenova&#357;. s&uacute;bory pre nahr&aacute;vanie';
$TEXT['APP_NAME'] = 'N&aacute;zov aplik&aacute;cie';
$TEXT['SESSION_IDENTIFIER'] = 'Identifik&aacute;tor session';
$TEXT['SEC_ANCHOR'] = 'Section-Anchor text';
$TEXT['BACKUP'] = 'Z&aacute;lohovanie';
$TEXT['RESTORE'] = 'Obnova zo z&aacute;lohy';
$TEXT['BACKUP_DATABASE'] = 'Z&aacute;lohova&#357; datab&aacute;zu';
$TEXT['RESTORE_DATABASE'] = 'Obnovi&#357; datab&aacute;zu zo z&aacute;lohy';
$TEXT['BACKUP_ALL_TABLES'] = 'Z&aacute;lohova&#357; v&#353;etky tabu&#318;ky v datab&aacute;ze';
$TEXT['BACKUP_WB_SPECIFIC'] = 'Z&aacute;lohova&#357; iba tabu&#318;ky CMS Syst&eacute;mu';
$TEXT['BACKUP_MEDIA'] = 'Zaz&aacute;lohova&#357;  m&eacute;dia';
$TEXT['RESTORE_MEDIA'] = 'Obnovi&#357; m&eacute;dia zo z&aacute;lohy';
$TEXT['ADMINISTRATION_TOOL'] = 'Administrat&iacute;vne n&aacute;stroje';
$TEXT['CAPTCHA_VERIFICATION'] = 'Kontrola obr. k&oacute;dom';
$TEXT['VERIFICATION'] = 'Verifik&aacute;cia';
$TEXT['DEFAULT_CHARSET'] = 'V&yacute;chodzia k&oacute;dov&aacute; str&aacute;nka';
$TEXT['CHARSET'] = 'K&oacute;dov&aacute; str&aacute;nka';
$TEXT['MODULE_ORDER'] = 'Module-order for searching';
$TEXT['MAX_EXCERPT'] = 'Max lines of excerpt';
$TEXT['TIME_LIMIT'] = 'Max time to gather excerpts per module';
$TEXT['PUBL_START_DATE'] = 'Po&#269;iato&#269;n&yacute; d&aacute;tum';
$TEXT['PUBL_END_DATE'] = 'Kone&#269;n&yacute; d&aacute;tum';
$TEXT['CALENDAR'] = 'Kalend&aacute;r';
$TEXT['DELETE_DATE'] = 'Zmaza&#357; d&aacute;tum';
$TEXT['WBMAILER_DEFAULT_SETTINGS_NOTICE'] = 'Please specify a default FROM address and SENDER name below. It is recommended to use a FROM address like: <strong>admin@yourdomain.com</strong>. Some mail provider (e.g. <em>mail.com</em>) may reject mails with a FROM: address like <em>name@mail.com</em> sent via a foreign relay to avoid spam.<br /><br />The default values are only used if no other values are specified by WebsiteBaker. If your server supports <acronym title="Simple mail transfer protocol">SMTP</acronym>, you may want use this option for outgoing mails.';
$TEXT['WBMAILER_DEFAULT_SENDER_MAIL'] = 'Prednastaven&yacute; E-Mail odosielatela';
$TEXT['WBMAILER_DEFAULT_SENDER_NAME'] = 'Prednastaven&eacute; meno odosielatela';
$TEXT['WBMAILER_NOTICE'] = '<strong>SMTP Mailer Settings:</strong><br />The settings below are only required if you want to send mails via <acronym title=Simple mail transfer protocol>SMTP</acronym>. If you do not know your SMTP host or you are not sure about the required settings, simply stay with the default mail routine: PHP MAIL.';
$TEXT['WBMAILER_FUNCTION'] = 'Sp&ocirc;sob odoslania e-mailu';
$TEXT['WBMAILER_SMTP_HOST'] = 'SMTP server';
$TEXT['WBMAILER_PHP'] = 'PHP skript';
$TEXT['WBMAILER_SMTP'] = 'SMTP server';
$TEXT['WBMAILER_SMTP_AUTH'] = 'SMTP Overenie';
$TEXT['WBMAILER_SMTP_AUTH_NOTICE'] = 'only activate if your SMTP host requires authentification';
$TEXT['WBMAILER_SMTP_USERNAME'] = 'SMTP meno';
$TEXT['WBMAILER_SMTP_PASSWORD'] = 'SMTP heslo';
$TEXT['PLEASE_LOGIN'] = 'Pros&iacute;m prihl&aacute;ste sa';
$TEXT['CAP_EDIT_CSS'] = 'Uprav CSS';
$TEXT['HEADING_CSS_FILE'] = 'Actual module file: ';
$TEXT['TXT_EDIT_CSS_FILE'] = 'Edit the CSS definitions in the textarea below.';
$TEXT['CODE_SNIPPET'] = 'Code-snippet';
$TEXT['REQUIREMENT'] = 'Requirement';
$TEXT['INSTALLED'] = 'Nain&#353;talovan&eacute;';
$TEXT['NOT_INSTALLED'] = 'Nenain&#353;talovan&eacute;';
$TEXT['ADDON'] = 'Add-On';
$TEXT['EXTENSION'] = 'Extension';
$TEXT['UNZIP_FILE'] = 'Nahraj a rozba&#318; zip s&uacute;bor';
$TEXT['DELETE_ZIP'] = 'Zmaza&#357; zip s&uacute;bor po rozbalen&iacute;';

// Success/error messages
$MESSAGE['FRONTEND']['SORRY_NO_VIEWING_PERMISSIONS'] = 'Nem&aacute;te opr&aacute;vnenie prezera&#357; t&uacute;to str&aacute;nku';
$MESSAGE['FRONTEND']['SORRY_NO_ACTIVE_SECTIONS'] = 'Sorry, no active content to display';

$MESSAGE['ADMIN']['INSUFFICIENT_PRIVELLIGES'] = 'Nedostato&#269;n&eacute; opr&aacute;vnenie';

$MESSAGE['LOGIN']['BOTH_BLANK'] = 'Zadejte pros&iacute;m svoje prihlasovacie &uacute;daje:';
$MESSAGE['LOGIN']['USERNAME_BLANK'] = 'Zadejte svoje u&#382;ivate&#318;sk&eacute; meno';
$MESSAGE['LOGIN']['PASSWORD_BLANK'] = 'Zadejte svoje heslo';
$MESSAGE['LOGIN']['USERNAME_TOO_SHORT'] = 'Zadan&eacute; meno je pr&iacute;li&#353; kr&aacute;tke';
$MESSAGE['LOGIN']['PASSWORD_TOO_SHORT'] = 'Zadan&eacute; heslo je pr&iacute;li&#353; kr&aacute;tke';
$MESSAGE['LOGIN']['USERNAME_TOO_LONG'] = 'Zadan&eacute; meno je pr&iacute;li&#353; dlh&eacute;';
$MESSAGE['LOGIN']['PASSWORD_TOO_LONG'] = 'Zadan&eacute; heslo je pr&iacute;li&#353; dlh&eacute;';
$MESSAGE['LOGIN']['AUTHENTICATION_FAILED'] = 'Meno alebo heslo nie je platn&eacute;';

$MESSAGE['SIGNUP']['NO_EMAIL'] = 'Mus&iacute;te zada&#357; e-mailovou adresu';
$MESSAGE['SIGNUP2']['SUBJECT_LOGIN_INFO'] = 'Vase prihlasovacie udaje...';
$MESSAGE['SIGNUP2']['BODY_LOGIN_INFO'] = <<< EOT
V&aacute;&#382;en&yacute;  {LOGIN_DISPLAY_NAME},

Pre Va&#353;e prihl&aacute;senie do '{LOGIN_WEBSITE_TITLE}' pou&#382;ite:
Meno: {LOGIN_NAME}
Heslo: {LOGIN_PASSWORD}

Va&#353;e heslo bolo nastaven&eacute; na nov&eacute;, uveden&eacute; vy&#353;&#353;ie.
To znamen&aacute;, &#382;e va&#353;e star&eacute; heslo u&#382; nebude fungova&#357;.

Ak ste t&uacute;to spr&aacute;vu dostali omylom, pros&iacute;m, ihne&#271; ju zma&#382;te.
EOT;

$MESSAGE['FORGOT_PASS']['NO_DATA'] = 'Zadajte svoju e-mailovou adresu:';
$MESSAGE['FORGOT_PASS']['EMAIL_NOT_FOUND'] = 'Zadan&aacute; e-mailov&aacute; adresa alebola n&aacute;jden&aacute;';
$MESSAGE['FORGOT_PASS']['CANNOT_EMAIL'] = 'Nejde odosla&#357;  heslo e-mailom, kontaktujte pros&iacute;m spr&aacute;vcu syst&eacute;mu';
$MESSAGE['FORGOT_PASS']['PASSWORD_RESET'] = 'Va&#353;e u&#382;&iacute;vate&#318;sk&eacute; meno a heslo boli odoslan&eacute; na Va&#353;u e-mailovou adresu';
$MESSAGE['FORGOT_PASS']['ALREADY_RESET'] = 'Heslo nem&ocirc;&#382;e by&#357; prenastaven&eacute; viackr&aacute;t  behom jednej hodiny';

$MESSAGE['START']['WELCOME_MESSAGE'] = 'Vitajte v administrat&iacute;vnej &#269;asti';
$MESSAGE['START']['INSTALL_DIR_EXISTS'] = 'Pozor, st&aacute;le existuje in&#353;tala&#269;n&yacute; adres&aacute;r!';
$MESSAGE['START']['CURRENT_USER'] = 'Ste prihl&aacute;sen&yacute; ako:';

$MESSAGE['SETTINGS']['UNABLE_OPEN_CONFIG'] = 'Nejde otvori s&uacute;bor s konfigurciou';
$MESSAGE['SETTINGS']['UNABLE_WRITE_CONFIG'] = 'Nejde zapisova&#357; do s&uacute;boru s konfigur&aacute;ciou';
$MESSAGE['SETTINGS']['SAVED'] = 'Nastavenie bolo &uacute;&#353;spene ulo&#382;en&eacute;';
$MESSAGE['SETTINGS']['MODE_SWITCH_WARNING'] = 'Pozn.: stla&#269;en&iacute;m tohto tla&#269;&iacute;tka d&ocirc;jde k zahodeniu neulo&#382;en&yacute;ch zmien';
$MESSAGE['SETTINGS']['WORLD_WRITEABLE_WARNING'] = 'Pozn.: zapnutie tejto vo&#318;by sa doporu&#269;uje  len v testovacom prostred&iacute;';

$MESSAGE['USERS']['ADDED'] = 'U&#382;&iacute;vate&#318; bol &uacute;spe&#353;ne pridan&yacute;';
$MESSAGE['USERS']['SAVED'] = 'U&#382;&iacute;vate&#318; bol &uacute;spe&#353;ne ulo&#382;en&yacute;';
$MESSAGE['USERS']['DELETED'] = 'U&#382;&iacute;vate&#318; bol &uacute;spe&#353;ne zmazan&yacute;';
$MESSAGE['USERS']['NO_GROUP'] = 'alebola vybran&aacute; skupina';
$MESSAGE['USERS']['USERNAME_TOO_SHORT'] = 'Zadan&eacute; u&#382;ivate&#318;sk&eacute; meno je pr&iacute;li&#353; kr&aacute;tke';
$MESSAGE['USERS']['PASSWORD_TOO_SHORT'] = 'Zadan&eacute; heslo je pr&iacute;li&#353; kr&aacute;tk&eacute;';
$MESSAGE['USERS']['PASSWORD_MISMATCH'] = 'Zadan&eacute; hesl&aacute; nie s&uacute; zhodn&eacute;';
$MESSAGE['USERS']['INVALID_EMAIL'] = 'Zadan&aacute; e-mailov&aacute; adresa je neplatn&aacute;';
$MESSAGE['USERS']['EMAIL_TAKEN'] = 'Zadan&aacute; e-mailov&aacute; adresa je u&#382; pou&#382;&iacute;van&aacute;';
$MESSAGE['USERS']['USERNAME_TAKEN'] = 'U&#382;ivate&#318; s rovnak&yacute;m u&#382;&iacute;vate&#318;sk&yacute;m menom  u&#382; existuje';
$MESSAGE['USERS']['CHANGING_PASSWORD'] = 'Pozn.: vypl&#328;te iba hodnoty hore pokia&#318; si prajete zmeni&#357; heslo';
$MESSAGE['USERS']['CONFIRM_DELETE'] = 'Ste si ist&yacute;, &#382;e chcete vymaza&#357; tohoto u&#382;&iacute;vate&#318;a?';

$MESSAGE['GROUPS']['ADDED'] = 'Skupina bola &uacute;spe&#353;ne pridan&aacute;';
$MESSAGE['GROUPS']['SAVED'] = 'Skupina bola &uacute;spe&#353;ne ulo&#382;en&aacute;';
$MESSAGE['GROUPS']['DELETED'] = 'Skupina bola &uacute;spe&#353;ne zmazan&aacute;';
$MESSAGE['GROUPS']['GROUP_NAME_BLANK'] = 'N&aacute;zov skupiny je pr&aacute;zdny';
$MESSAGE['GROUPS']['CONFIRM_DELETE'] = 'Ste si isti, &#382;e chcete zmaza&#357; t&uacute;to skupimu (a v&#353;etk&yacute;ch jej u&#382;ivatelov)?';
$MESSAGE['GROUPS']['NO_GROUPS_FOUND'] = 'Nen&aacute;jden&aacute; &#382;iadn&aacute; skupina';
$MESSAGE['GROUPS']['GROUP_NAME_EXISTS'] = 'Tato skupina u&#382; existuje';

$MESSAGE['PREFERENCES']['DETAILS_SAVED'] = 'Detaily boly &uacute;spe&#353;ne ulo&#382;en&eacute;';
$MESSAGE['PREFERENCES']['EMAIL_UPDATED'] = 'E-mail bol &uacute;spe&#353;ne ulo&#382;en&yacute;';
$MESSAGE['PREFERENCES']['CURRENT_PASSWORD_INCORRECT'] = 'S&uacute;&#269;asn&eacute; heslo nezodpoved&aacute;';
$MESSAGE['PREFERENCES']['PASSWORD_CHANGED'] = 'Heslo bolo &uacute;spe&#353;ne zmenen&eacute;';

$MESSAGE['TEMPLATES']['CHANGE_TEMPLATE_NOTICE'] = 'Pozn.: zmena &#353;ablony sa prov&aacute;dza v sekcii Nastavenia';

$MESSAGE['MEDIA']['DIR_DOT_DOT_SLASH'] = 'Nejde pou&#382;i&#357; ../ v n&aacute;zve adres&aacute;ra';
$MESSAGE['MEDIA']['DIR_DOES_NOT_EXIST'] = 'Adres&aacute;r neexistuje';
$MESSAGE['MEDIA']['TARGET_DOT_DOT_SLASH'] = 'Nejde pou&#382;i&#357; ../ v cielovom adres&aacute;ry';
$MESSAGE['MEDIA']['NAME_DOT_DOT_SLASH'] = 'Nejde pou&#382;i&#357; ../ v n&aacute;zvu';
$MESSAGE['MEDIA']['NAME_INDEX_PHP'] = 'Nejde pou&#382;i&#357; index.php ako n&aacute;zov';
$MESSAGE['MEDIA']['NONE_FOUND'] = 'Nen&aacute;jden&yacute; &#382;iadn&yacute; s&uacute;bor';
$MESSAGE['MEDIA']['FILE_NOT_FOUND'] = 'S&uacute;bor nen&aacute;jden&yacute;';
$MESSAGE['MEDIA']['DELETED_FILE'] = 'S&uacute;bor bol &uacute;spe&#353;ne zmazan&yacute;';
$MESSAGE['MEDIA']['DELETED_DIR'] = 'Adres&aacute;r bol &uacute;spe&#353;ne zmazan&yacute;';
$MESSAGE['MEDIA']['CONFIRM_DELETE'] = 'Ste si ist&iacute;, &#382;e chcete zmaza&#357; n&aacute;sleduj&uacute;ce s&uacute;bory alebo adres&aacute;re?';
$MESSAGE['MEDIA']['CANNOT_DELETE_FILE'] = 'Ned&aacute; sa zmaza&#357; vybran&yacute; soubor';
$MESSAGE['MEDIA']['CANNOT_DELETE_DIR'] = 'Ned&aacute; sa zmaza&#357; vybran&yacute; adres&aacute;r';
$MESSAGE['MEDIA']['BLANK_NAME'] = 'Nezadali ste nov&yacute; n&aacute;zov';
$MESSAGE['MEDIA']['BLANK_EXTENSION'] = 'Nezadali ste pr&iacute;ponu s&uacute;boru';
$MESSAGE['MEDIA']['RENAMED'] = 'Premenovanie prebehlo &uacute;spe&#353;ne';
$MESSAGE['MEDIA']['CANNOT_RENAME'] = 'Premenovanie sa nepodarilo';
$MESSAGE['MEDIA']['FILE_EXISTS'] = 'S&uacute;bor z rovnak&yacute;m n&aacute;zvom u&#382; existuje';
$MESSAGE['MEDIA']['DIR_EXISTS'] = 'Adres&aacute;r z rovnak&yacute;m n&aacute;zvem u&#382; existuje';
$MESSAGE['MEDIA']['DIR_MADE'] = 'Adres&aacute;r bol &uacute;spe&#353;ne vytvoren&yacute;';
$MESSAGE['MEDIA']['DIR_NOT_MADE'] = 'Ned&aacute; sa vytvori&#357; adres&aacute;r';
$MESSAGE['MEDIA']['SINGLE_UPLOADED'] = ' s&uacute;bor bol &uacute;spe&#353;ne nahran&yacute;';
$MESSAGE['MEDIA']['UPLOADED'] = ' s&uacute;bory boly &uacute;spe&#353;ne nahr&aacute;n&eacute;';

$MESSAGE['PAGES']['ADDED'] = 'Str&aacute;nka bola &uacute;spe&#353;ne pridan&aacute;';
$MESSAGE['PAGES']['ADDED_HEADING'] = 'Z&aacute;hlavie str&aacute;nky bolo &uacute;spe&#353;ne pridan&eacute;';
$MESSAGE['PAGES']['PAGE_EXISTS'] = 'Str&aacute;nka z rovnak&yacute;m alebo podobn&yacute;m n&aacute;zvom u&#382; existuje';
$MESSAGE['PAGES']['CANNOT_CREATE_ACCESS_FILE'] = 'Do&#353;lo k chybe pri vytv&aacute;ran&iacute; pr&iacute;stupov&eacute;ho s&uacute;boru v adres&aacute;ri str&aacute;nok (nedostato&#269;n&eacute; opr&aacute;vnenie)';
$MESSAGE['PAGES']['CANNOT_DELETE_ACCESS_FILE'] = 'Do&#353;lo k chybe pri maz&aacute;n&iacute; pr&iacute;supov&eacute;ho s&uacute;boru v adres&aacute;ri str&aacute;nek (nedostato&#269;n&eacute; opr&aacute;vnenie)';
$MESSAGE['PAGES']['NOT_FOUND'] = 'Str&aacute;nka nen&aacute;jden&aacute;';
$MESSAGE['PAGES']['SAVED'] = 'Str&aacute;nka bola &uacute;spe&#353;ne ulo&#382;ena';
$MESSAGE['PAGES']['SAVED_SETTINGS'] = 'Nastavenie str&aacute;nky bolo &uacute;spe&#353;ne ulo&#382;en&eacute;';
$MESSAGE['PAGES']['NOT_SAVED'] = 'Do&#353;lo k chybe pri ukl&aacute;d&aacute;n&iacute; str&aacute;nky';
$MESSAGE['PAGES']['DELETE_CONFIRM'] = 'Ste si ist&iacute;, &#382;e chcete zmaza&#357; tuto str&aacute;nku (a v&#353;etky podstr&aacute;nky)';
$MESSAGE['PAGES']['DELETED'] = 'Str&aacute;nka bola &uacute;spe&#353;ne zmazan&aacute;';
$MESSAGE['PAGES']['RESTORED'] = 'Str&aacute;nka bola &uacute;spe&#353;ne obnoven&aacute;';
$MESSAGE['PAGES']['BLANK_PAGE_TITLE'] = 'Zadajte n&aacute;zov str&aacute;nky';
$MESSAGE['PAGES']['BLANK_MENU_TITLE'] = 'Zadajte n&aacute;zov v menu';
$MESSAGE['PAGES']['REORDERED'] = 'Str&aacute;nka bola &uacute;spe&#353;ne presunut&aacute;';
$MESSAGE['PAGES']['CANNOT_REORDER'] = 'Do&#353;lo k chybe pri zmene poradia str&aacute;nky';
$MESSAGE['PAGES']['INSUFFICIENT_PERMISSIONS'] = 'Nem&aacute;te opr&aacute;vnenie k zmene tejto str&aacute;nky';
$MESSAGE['PAGES']['INTRO_NOT_WRITABLE'] = 'Ned&aacute; sa zapisova&#357; do s&uacute;boru /pages/intro.php (nedostato&#269;n&eacute; opr&aacute;vnenia)';
$MESSAGE['PAGES']['INTRO_SAVED'] = 'Str&aacute;nka bola &uacute;spe&#353;ne ulo&#382;en&aacute;';
$MESSAGE['PAGES']['LAST_MODIFIED'] = 'Posledn&aacute; zmena:';
$MESSAGE['PAGES']['INTRO_LINK'] = 'Zmeni&#357; &uacute;vodn&uacute; (intro) str&aacute;nku';
$MESSAGE['PAGES']['SECTIONS_PROPERTIES_SAVED'] = 'Nastavenia sekcie boli &uacute;spe&#353;ne ulo&#382;en&eacute;';
$MESSAGE['PAGES']['RETURN_TO_PAGES'] = 'Sp&auml;&#357; na str&aacute;nky';

$MESSAGE['GENERIC']['FILL_IN_ALL'] = 'Pros&iacute;m vra&#357;te se sp&auml;&#357; a vypl&#328;te v&#353;etky polia';
$MESSAGE['GENERIC']['FILE_TYPE'] = 'Nahr&aacute;van&eacute; s&uacute;bory musia by&#357; n&aacute;sleduj&uacute;ceho form&aacute;tu:';
$MESSAGE['GENERIC']['FILE_TYPES'] = 'Nahr&aacute;van&yacute; soubor mus&iacute; ma&#357; jeden z n&aacute;sleduj&uacute;c&iacute;ch form&aacute;tov:';
$MESSAGE['GENERIC']['CANNOT_UPLOAD'] = 'Ned&aacute; sa nahra&#357; s&uacute;bor';
$MESSAGE['GENERIC']['ALREADY_INSTALLED'] = 'U&#382; nain&#353;talovan&eacute;';
$MESSAGE['GENERIC']['NOT_INSTALLED'] = 'Nenain&#353;talovan&eacute;';
$MESSAGE['GENERIC']['CANNOT_UNINSTALL'] = 'Ned&aacute; sa odin&#353;talova&#357;';
$MESSAGE['GENERIC']['CANNOT_UNZIP'] = 'Ned&aacute; sa rozbali&#357; (rozzipova&#357;) s&uacute;bor';
$MESSAGE['GENERIC']['INSTALLED'] = 'In&#353;tal&aacute;cia prebehla &uacute;spe&#353;ne';
$MESSAGE['GENERIC']['UPGRADED'] = 'Aktualiz&aacute;cia prebehla &uacute;spe&#353;ne';
$MESSAGE['GENERIC']['UNINSTALLED'] = 'Odin&#353;tal&aacute;cia prebehla &uacute;spe&#353;ne';
$MESSAGE['GENERIC']['BAD_PERMISSIONS'] = 'Ned&aacute; sa zapisovat do cielov&eacute;ho adres&aacute;ra';
$MESSAGE['GENERIC']['INVALID'] = 'Nahr&aacute;van&yacute; s&uacute;bor je neplatn&yacute;';
$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IN_USE'] = 'Ned&aacute; sa odin&#353;talova&#357;: s&uacute;bor je pr&aacute;ve pou&#382;&iacute;van&yacute;';

$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IN_USE_TMPL'] = '<br /><br />{{type}} <b>{{type_name}}</b> ned&aacute; sa odin&#353;talova&#357;, preto&#382;e sa pou&#382;&iacute;va na {{pages}}.<br /><br />';
$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IN_USE_TMPL_PAGES'] = 't&aacute;to str&aacute;nka; tieto str&aacute;nky';
$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IS_DEFAULT_TEMPLATE'] = 'Nem&ocirc;&#382;e&#357;e odin&#353;talova&#357; &#353;abl&oacute;nu <b>{{name}}</b>, preto&#382;e je nastaven&aacute; ako predvolen&aacute; &#353;abl&oacute;na!';

$MESSAGE['GENERIC']['WEBSITE_UNDER_CONSTRUCTION'] = 'Str&aacute;nky sa moment&aacute;lne pripravuj&uacute;';
$MESSAGE['GENERIC']['PLEASE_CHECK_BACK_SOON'] = 'Pros&iacute;m, nav&#353;t&iacute;vte n&aacute;s nesk&ocirc;r...';
$MESSAGE['GENERIC']['PLEASE_BE_PATIENT'] = '&#268;ekejte pros&iacute;m, operacia m&ocirc;&#382;e chv&iacute;&#318;u trva&#357;.';
$MESSAGE['GENERIC']['ERROR_OPENING_FILE'] = 'Do&#353;lo k chybe pri otvaran&iacute; s&uacute;boru.';
$MESSAGE['GENERIC']['INVALID_ADDON_FILE'] = 'Invalid WebsiteBaker installation file. Please check the *.zip format.';
$MESSAGE['GENERIC']['INVALID_LANGUAGE_FILE'] = 'Invalid WebsiteBaker language file. Please check the text file.';

$MESSAGE['MOD_FORM']['REQUIRED_FIELDS'] = 'Mus&iacute;te vyplni&#357; n&aacute;sleduj&uacute;ce pole';
$MESSAGE['MOD_FORM']['EXCESS_SUBMISSIONS'] = 'Ospravedl&#328;ujeme sa, ale tento formul&aacute;r dosiahol limitu povolen&yacute;ch odeslan&iacute; pre t&uacute;to hodinu. Pros&iacute;m sk&uacute;ste to znovu v dal&#353;iej hodine..';
$MESSAGE['MOD_FORM']['INCORRECT_CAPTCHA'] = 'Kontroln&yacute; k&oacute;d (zn&aacute;m&yacute; ako Captcha) nezodpoved&aacute;. Pokia&#318; m&aacute;te probl&eacute;my s pre&#269;&iacute;tan&iacute;m tohoto k&oacute;du, kontaktujte '.SERVER_EMAIL;

$MESSAGE['ADDON']['RELOAD'] = 'Update database with information from Add-on files (e.g. after FTP upload).';
$MESSAGE['ADDON']['ERROR_RELOAD'] = 'Error while updating the Add-On information.';
$MESSAGE['ADDON']['MODULES_RELOADED'] = 'Moduly boly &uacute;spe&#353;ne prehran&eacute;';
$MESSAGE['ADDON']['TEMPLATES_RELOADED'] = '&#352;ablony boly &uacute;spe&#353;ne prehran&eacute;';
$MESSAGE['ADDON']['LANGUAGES_RELOADED'] = 'Jazyky boly &uacute;spe&#353;ne prehran&eacute;';
$MESSAGE['ADDON']['PRECHECK_FAILED'] = 'Add-on installation failed. Your system does not fulfill the requirements of this Add-on. To make this Add-on working on your system, please fix the issues summarized below.';
$MESSAGE['ADDON']['MANUAL_INSTALLATION'] = 'When modules are uploaded via FTP (not recommended), the module installation files <tt>install.php</tt>, <tt>upgrade.php</tt> or <tt>uninstall.php</tt> will not be executed automatically. Those modules may not work correct or do not uninstall properly.<br /><br />You can execute the module files manually for modules uploaded via FTP below.';
$MESSAGE['ADDON']['MANUAL_INSTALLATION_WARNING'] = 'Warning: Existing module database entries will get lost. Only use this option if you experience problems with modules uploaded via FTP.';

?>
