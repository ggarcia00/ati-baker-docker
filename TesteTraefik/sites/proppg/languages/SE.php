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
 * @version         $Id: SE.php 1282 2010-01-30 05:29:56Z Luisehahne $
 * @filesource		$HeadURL: http://svn.websitebaker2.org/branches/2.8.x/wb/languages/SE.php $
 * @lastmodified    $Date: 2010-01-30 06:29:56 +0100 (Sa, 30. Jan 2010) $
 *
 */

// use languageedit-module to modify this file

// Define that this file is loaded
if(!defined('LANGUAGE_LOADED')) {
define('LANGUAGE_LOADED', true);
}

// Set the language information
$language_code = 'SE';
$language_name = 'Svenska';
$language_version = '2.8';
$language_platform = '2.8.x';
$language_author = 'Markus Eriksson, Peppe Bergqvist';
$language_license = 'GNU General Public License';

// Menu titles
$MENU['START'] = 'Hem';
$MENU['PAGES'] = 'Sidor';
$MENU['MEDIA'] = 'Mediabibliotek';
$MENU['ADDONS'] = 'Till&auml;gg';
$MENU['MODULES'] = 'Moduler';
$MENU['TEMPLATES'] = 'Mallar';
$MENU['LANGUAGES'] = 'Spr&aring;k';
$MENU['PREFERENCES'] = 'Mina uppgifter';
$MENU['SETTINGS'] = 'Inst&auml;llningar';
$MENU['ADMINTOOLS'] = 'Admin-Tools';
$MENU['ACCESS'] = 'R&auml;ttigheter';
$MENU['USERS'] = 'Anv&auml;ndare';
$MENU['GROUPS'] = 'Grupper';
$MENU['HELP'] = 'Hj&auml;lp';
$MENU['VIEW'] = 'Visa sida';
$MENU['LOGOUT'] = 'Logga ut';
$MENU['LOGIN'] = 'Logga in';
$MENU['FORGOT'] = 'Skicka inloggningsuppgifter';

// Section overviews
$OVERVIEW['START'] = 'Administration &ouml;versyn';
$OVERVIEW['PAGES'] = 'Redigera dina sidor...';
$OVERVIEW['MEDIA'] = 'Redigera inneh&aring;ll i mediabiblioteket...';
$OVERVIEW['MODULES'] = 'Behandla WebsiteBaker moduler...';
$OVERVIEW['TEMPLATES'] = '&Auml;ndra utseendet med mallar...';
$OVERVIEW['LANGUAGES'] = 'Behandla WebsiteBaker spr&aring;k...';
$OVERVIEW['PREFERENCES'] = '&Auml;ndra inst&auml;llningar som e-postadress, l&ouml;senord, etc... ';
$OVERVIEW['SETTINGS'] = '&Auml;ndra inst&auml;llningar f&ouml;r WebsiteBaker...';
$OVERVIEW['USERS'] = 'Behandla anv&auml;ndare som kan logga in till WebsiteBaker...';
$OVERVIEW['GROUPS'] = 'Behandla anv&auml;ndargrupper och deras system&aring;tkomst...';
$OVERVIEW['HELP'] = 'Hitta svar p&aring; dina fr&aring;gor (p&aring; engelska)...';
$OVERVIEW['VIEW'] = 'Titta p&aring; dina sidor i ett nytt f&ouml;nster...';
$OVERVIEW['ADMINTOOLS'] = 'Access the WebsiteBaker administration tools...';

// Headings
$HEADING['MODIFY_DELETE_PAGE'] = '&Auml;ndra/radera sida';
$HEADING['DELETED_PAGES'] = 'Raderade sidor';
$HEADING['ADD_PAGE'] = 'Skapa ny sida';
$HEADING['ADD_HEADING'] = 'Rubrik';
$HEADING['MODIFY_PAGE'] = '&Auml;ndra sida';
$HEADING['MODIFY_PAGE_SETTINGS'] = '&Auml;ndra sidans inst&auml;llningar';
$HEADING['MODIFY_ADVANCED_PAGE_SETTINGS'] = '&Auml;ndra avancerade inst&auml;llningar f&ouml;r sidan';
$HEADING['MANAGE_SECTIONS'] = 'Redigera sektioner';
$HEADING['MODIFY_INTRO_PAGE'] = '&Auml;ndra F&ouml;rstasidan';

$HEADING['BROWSE_MEDIA'] = 'Mediabibliotek';
$HEADING['CREATE_FOLDER'] = 'Skapa ny mapp';
$HEADING['UPLOAD_FILES'] = 'Ladda Upp fil(er)';

$HEADING['INSTALL_MODULE'] = 'Installera modul';
$HEADING['UNINSTALL_MODULE'] = 'Avinstallera modul';
$HEADING['MODULE_DETAILS'] = 'Moduldetaljer';

$HEADING['INSTALL_TEMPLATE'] = 'Installera mall';
$HEADING['UNINSTALL_TEMPLATE'] = 'Avinstallera mall';
$HEADING['TEMPLATE_DETAILS'] = 'Malldetaljer';

$HEADING['INSTALL_LANGUAGE'] = 'Installera spr&aring;k';
$HEADING['UNINSTALL_LANGUAGE'] = 'Avinstallera spr&aring;k';
$HEADING['LANGUAGE_DETAILS'] = 'Spr&aring;kdetaljer';

$HEADING['MY_SETTINGS'] = 'Mina uppgifter';
$HEADING['MY_EMAIL'] = 'Min e-post';
$HEADING['MY_PASSWORD'] = 'Mitt l&ouml;senord';

$HEADING['GENERAL_SETTINGS'] = 'Generella inst&auml;llningar';
$HEADING['DEFAULT_SETTINGS'] = 'Standardinst&auml;llningar';
$HEADING['SEARCH_SETTINGS'] = 'S&ouml;kinst&auml;llningar';
$HEADING['FILESYSTEM_SETTINGS'] = 'Inst&auml;llningar f&ouml;r Filsystem';
$HEADING['SERVER_SETTINGS'] = 'Server Inst&auml;llningar';
$HEADING['WBMAILER_SETTINGS'] = 'Mailer Settings';
$HEADING['ADMINISTRATION_TOOLS'] = 'Administrationsverktyg';

$HEADING['MODIFY_DELETE_USER'] = '&Auml;ndra/radera anv&auml;ndare';
$HEADING['ADD_USER'] = 'Skapa ny anv&auml;ndare';
$HEADING['MODIFY_USER'] = '&Auml;ndra anv&auml;ndare';

$HEADING['MODIFY_DELETE_GROUP'] = '&Auml;ndra/radera grupp';
$HEADING['ADD_GROUP'] = 'Skapa ny grupp';
$HEADING['MODIFY_GROUP'] = '&Auml;ndra grupp';

$HEADING['ADDON_PRECHECK_FAILED'] = 'Add-On requirements not met';
$HEADING['INVOKE_MODULE_FILES'] = 'Execute module files manually';

// Other text
$TEXT['OPEN'] = 'Open';
$TEXT['ADD'] = 'L&auml;gg till';
$TEXT['MODIFY'] = '&Auml;ndra';
$TEXT['SETTINGS'] = 'Inst&auml;llningar';
$TEXT['DELETE'] = 'Radera';
$TEXT['SAVE'] = 'Spara';
$TEXT['RESET'] = '&Aring;ngra';
$TEXT['LOGIN'] = 'Logga In';
$TEXT['RELOAD'] = 'Ladda Om';
$TEXT['CANCEL'] = 'Avbryt';
$TEXT['NAME'] = 'Namn';
$TEXT['PLEASE_SELECT'] = 'V&auml;nligen v&auml;lj';
$TEXT['TITLE'] = 'Titel';
$TEXT['PARENT'] = 'Underliggande till';
$TEXT['TYPE'] = 'Typ';
$TEXT['VISIBILITY'] = 'Synlighetsgrad';
$TEXT['PRIVATE'] = 'Privat';
$TEXT['PUBLIC'] = 'Offentligt';
$TEXT['NONE'] = 'Ingen';
$TEXT['NONE_FOUND'] = 'Inget hittades';
$TEXT['CURRENT'] = 'Nuvarande';
$TEXT['CHANGE'] = '&Auml;ndra';
$TEXT['WINDOW'] = 'F&ouml;nster';
$TEXT['DESCRIPTION'] = 'Beskrivning';
$TEXT['KEYWORDS'] = 'Nyckelord';
$TEXT['ADMINISTRATORS'] = 'Administratorer';
$TEXT['PRIVATE_VIEWERS'] = 'Privata anv&auml;ndare';
$TEXT['EXPAND'] = '&Ouml;ppna';
$TEXT['COLLAPSE'] = 'St&auml;ng';
$TEXT['MOVE_UP'] = 'Flytta Upp';
$TEXT['MOVE_DOWN'] = 'Flytta Ner';
$TEXT['RENAME'] = 'D&ouml;p om';
$TEXT['MODIFY_SETTINGS'] = 'Redigera inst&auml;llningar';
$TEXT['MODIFY_CONTENT'] = 'Redigera inneh&aring;ll';
$TEXT['VIEW'] = 'Visa';
$TEXT['UP'] = 'Upp';
$TEXT['FORGOTTEN_DETAILS'] = 'Gl&ouml;mt dina uppgifter?';
$TEXT['NEED_TO_LOGIN'] = 'Logga in?';
$TEXT['SEND_DETAILS'] = 'Skicka uppgifter';
$TEXT['USERNAME'] = 'Anv&auml;ndarnamn';
$TEXT['PASSWORD'] = 'L&ouml;senord';
$TEXT['HOME'] = 'Hem';
$TEXT['TARGET_FOLDER'] = 'M&aring;lmapp';
$TEXT['OVERWRITE_EXISTING'] = 'Skriv &ouml;ver nuvarande';
$TEXT['FILE'] = 'Fil';
$TEXT['FILES'] = 'Filer';
$TEXT['FOLDER'] = 'Mapp';
$TEXT['FOLDERS'] = 'Mappar';
$TEXT['CREATE_FOLDER'] = 'Skapa mapp';
$TEXT['UPLOAD_FILES'] = 'Ladda upp filer';
$TEXT['CURRENT_FOLDER'] = 'Nuvarande mapp';
$TEXT['TO'] = 'Till';
$TEXT['FROM'] = 'Fr&aring;n';
$TEXT['INSTALL'] = 'Installera';
$TEXT['UNINSTALL'] = 'Avinstallera';
$TEXT['VIEW_DETAILS'] = 'Visa detaljer';
$TEXT['DISPLAY_NAME'] = 'Visa namn';
$TEXT['AUTHOR'] = 'F&ouml;rfattare';
$TEXT['VERSION'] = 'Version';
$TEXT['DESIGNED_FOR'] = 'Skapad f&ouml;r';
$TEXT['DESCRIPTION'] = 'Beskrivning';
$TEXT['EMAIL'] = 'E-post';
$TEXT['LANGUAGE'] = 'Spr&aring;k';
$TEXT['TIMEZONE'] = 'Tidzon';
$TEXT['CURRENT_PASSWORD'] = 'Nuvarande l&ouml;senord';
$TEXT['NEW_PASSWORD'] = 'Nytt l&ouml;senord';
$TEXT['RETYPE_NEW_PASSWORD'] = 'Nytt l&ouml;senord igen';
$TEXT['ACTIVE'] = 'Aktiv';
$TEXT['DISABLED'] = 'Inaktiverad';
$TEXT['ENABLED'] = 'Aktiverad';
$TEXT['RETYPE_PASSWORD'] = 'Skriv l&ouml;senordet igen';
$TEXT['GROUP'] = 'Grupp';
$TEXT['SYSTEM_PERMISSIONS'] = 'Systemtill&aring;telse';
$TEXT['MODULE_PERMISSIONS'] = 'Modultill&aring;telse';
$TEXT['SHOW_ADVANCED'] = 'Visa avancerade val';
$TEXT['HIDE_ADVANCED'] = 'G&ouml;m avancerade val';
$TEXT['BASIC'] = 'Standard';
$TEXT['ADVANCED'] = 'Avancerat';
$TEXT['WEBSITE'] = 'Websida';
$TEXT['DEFAULT'] = 'Standard';
$TEXT['KEYWORDS'] = 'Nyckelord';
$TEXT['TEXT'] = 'Text';
$TEXT['HEADER'] = 'Huvud';
$TEXT['FOOTER'] = 'Fot';
$TEXT['TEMPLATE'] = 'Mall';
$TEXT['THEME'] = 'Backend-Theme';
$TEXT['INSTALLATION'] = 'Installation';
$TEXT['DATABASE'] = 'Databas';
$TEXT['HOST'] = 'Host';
$TEXT['INTRO'] = 'Inledning';
$TEXT['PAGE'] = 'Sida';
$TEXT['SIGNUP'] = 'Registrera';
$TEXT['PHP_ERROR_LEVEL'] = 'PHP felrapport niv&aring;';
$TEXT['ADMIN'] = 'Admin';
$TEXT['PATH'] = 'S&ouml;kv&auml;g';
$TEXT['URL'] = 'URL';
$TEXT['FRONTEND'] = 'Front-end';
$TEXT['EXTENSION'] = '&Auml;ndelse';
$TEXT['TABLE_PREFIX'] = 'Tabell prefix';
$TEXT['CHANGES'] = '&Auml;ndringar';
$TEXT['ADMINISTRATION'] = 'Administration';
$TEXT['FORGOT_DETAILS'] = 'Gl&ouml;mt dina uppgifter?';
$TEXT['LOGGED_IN'] = 'Inloggad';
$TEXT['WELCOME_BACK'] = 'V&auml;lkommen tillbaka';
$TEXT['FULL_NAME'] = 'Ditt hela namn';
$TEXT['ACCOUNT_SIGNUP'] = 'Kontoregistrering';
$TEXT['LINK'] = 'Link';
$TEXT['ANCHOR'] = 'Anchor';
$TEXT['TARGET'] = 'M&aring;lf&ouml;nster';
$TEXT['NEW_WINDOW'] = 'Nytt f&ouml;nster';
$TEXT['SAME_WINDOW'] = 'Samma f&ouml;nster';
$TEXT['TOP_FRAME'] = 'Top frame';
$TEXT['PAGE_LEVEL_LIMIT'] = 'Sidniv&aring; gr&auml;ns';
$TEXT['SUCCESS'] = 'Lyckades';
$TEXT['ERROR'] = 'FEL';
$TEXT['ARE_YOU_SURE'] = '&Auml;r du s&auml;ker?';
$TEXT['YES'] = 'Ja';
$TEXT['NO'] = 'Nej';
$TEXT['SYSTEM_DEFAULT'] = 'Systemets standard';
$TEXT['PAGE_TITLE'] = 'Sidans titel';
$TEXT['MENU_TITLE'] = 'Menyns titel';
$TEXT['ACTIONS'] = '&Aring;tg&auml;rder';
$TEXT['UNKNOWN'] = 'Ok&auml;nd';
$TEXT['BLOCK'] = 'Block';
$TEXT['SEARCH'] = 'S&ouml;k';
$TEXT['SEARCHING'] = 'S&ouml;ker';
$TEXT['POST'] = 'Nyhet';
$TEXT['COMMENT'] = 'Kommentar';
$TEXT['COMMENTS'] = 'Kommentarer';
$TEXT['COMMENTING'] = 'Kommenterar';
$TEXT['SHORT'] = 'Ingress';
$TEXT['LONG'] = 'Br&ouml;dtext';
$TEXT['LOOP'] = 'Loop';
$TEXT['FIELD'] = 'F&auml;lt';
$TEXT['REQUIRED'] = 'Obligatoriskt';
$TEXT['LENGTH'] = 'L&auml;ngd';
$TEXT['MESSAGE'] = 'Meddelande';
$TEXT['SUBJECT'] = '&Auml;mne';
$TEXT['MATCH'] = 'Matcha';
$TEXT['ALL_WORDS'] = 'Alla ord';
$TEXT['ANY_WORDS'] = 'N&aring;got ord';
$TEXT['EXACT_MATCH'] = 'Exakt matchning';
$TEXT['SHOW'] = 'Visa';
$TEXT['HIDE'] = 'G&ouml;m';
$TEXT['START_PUBLISHING'] = 'Starta publicering';
$TEXT['FINISH_PUBLISHING'] = 'Avsluta publicering';
$TEXT['DATE'] = 'Datum';
$TEXT['START'] = 'Starta';
$TEXT['END'] = 'Stopp';
$TEXT['IMAGE'] = 'Bild';
$TEXT['ICON'] = 'Icon';
$TEXT['SECTION'] = 'Sektion';
$TEXT['DATE_FORMAT'] = 'Datumformat';
$TEXT['TIME_FORMAT'] = 'Tidsformat';
$TEXT['RESULTS'] = 'Resultat';
$TEXT['RESIZE'] = 'Storleks&auml;ndra';
$TEXT['MANAGE'] = 'Behandla';
$TEXT['CODE'] = 'Kod';
$TEXT['WIDTH'] = 'Bredd';
$TEXT['HEIGHT'] = 'H&ouml;jd';
$TEXT['MORE'] = 'Mer';
$TEXT['READ_MORE'] = 'L&auml;s mer';
$TEXT['CHANGE_SETTINGS'] = '&Auml;ndra inst&auml;llningar';
$TEXT['CURRENT_PAGE'] = 'Nuvarande sida';
$TEXT['CLOSE'] = 'St&auml;ng';
$TEXT['INTRO_PAGE'] = 'F&ouml;rstasida';
$TEXT['INSTALLATION_URL'] = 'Installation URL';
$TEXT['INSTALLATION_PATH'] = 'Installation s&ouml;kv&auml;g';
$TEXT['PAGE_EXTENSION'] = 'Sidors fil&auml;ndelse';
$TEXT['NO_RESULTS'] = 'Inget resultat';
$TEXT['WEBSITE_TITLE'] = 'Websitens titel';
$TEXT['WEBSITE_DESCRIPTION'] = 'Websitens beskrivning';
$TEXT['WEBSITE_KEYWORDS'] = 'Websitens nyckelord';
$TEXT['WEBSITE_HEADER'] = 'Websitens huvud';
$TEXT['WEBSITE_FOOTER'] = 'Websitens fot';
$TEXT['RESULTS_HEADER'] = 'Resultat huvud';
$TEXT['RESULTS_LOOP'] = 'Resultat loop';
$TEXT['RESULTS_FOOTER'] = 'Resultat fot';
$TEXT['LEVEL'] = 'Niv&aring;';
$TEXT['NOT_FOUND'] = 'Hittades inte';
$TEXT['PAGE_SPACER'] = 'Mellanrum sida';
$TEXT['MATCHING'] = 'Matching';
$TEXT['TEMPLATE_PERMISSIONS'] = 'Till&aring;telse mallar';
$TEXT['PAGES_DIRECTORY'] = 'Sidors mapp';
$TEXT['MEDIA_DIRECTORY'] = 'Media mapp';
$TEXT['FILE_MODE'] = 'Fil s&auml;tt';
$TEXT['USER'] = 'Anv&auml;ndare';
$TEXT['OTHERS'] = 'Andra';
$TEXT['READ'] = 'L&auml;s';
$TEXT['WRITE'] = 'Skriv';
$TEXT['EXECUTE'] = 'K&ouml;ra script';
$TEXT['SMART_LOGIN'] = 'Smart inloggning';
$TEXT['REMEMBER_ME'] = 'Kom ih&aring;g mig';
$TEXT['FILESYSTEM_PERMISSIONS'] = 'R&auml;ttigheter filsystem';
$TEXT['DIRECTORIES'] = 'Mappar';
$TEXT['DIRECTORY_MODE'] = 'Mappar s&auml;tt';
$TEXT['LIST_OPTIONS'] = 'Visa val';
$TEXT['OPTION'] = 'Val';
$TEXT['ALLOW_MULTIPLE_SELECTIONS'] = 'Till&aring;t flera val';
$TEXT['TEXTFIELD'] = 'Textrad';
$TEXT['TEXTAREA'] = 'Textruta';
$TEXT['SELECT_BOX'] = 'Valruta';
$TEXT['CHECKBOX_GROUP'] = 'Valruta flera';
$TEXT['RADIO_BUTTON_GROUP'] = 'Radioknapp flera';
$TEXT['SIZE'] = 'Storlek';
$TEXT['DEFAULT_TEXT'] = 'Standardtext';
$TEXT['SEPERATOR'] = 'Separator';
$TEXT['BACK'] = 'Tillbaka';
$TEXT['UNDER_CONSTRUCTION'] = 'Under uppbygnad.... Kommer snart';
$TEXT['MULTISELECT'] = 'Flerval';
$TEXT['SHORT_TEXT'] = 'Kort text';
$TEXT['LONG_TEXT'] = 'L&aring;ng text';
$TEXT['HOMEPAGE_REDIRECTION'] = 'Omstyrning hemsida';
$TEXT['HEADING'] = 'Rubrik';
$TEXT['MULTIPLE_MENUS'] = 'Flera menyer';
$TEXT['REGISTERED'] = 'Registrerad';
$TEXT['SECTION_BLOCKS'] = 'Sektioner block';
$TEXT['REGISTERED_VIEWERS'] = 'Registrerade anv&auml;ndare';
$TEXT['ALLOWED_VIEWERS'] = 'Till&aring;tna att se';
$TEXT['SUBMISSION_ID'] = 'Inskickning ID';
$TEXT['SUBMISSIONS'] = 'Inskickningar';
$TEXT['SUBMITTED'] = 'Inskickat';
$TEXT['MAX_SUBMISSIONS_PER_HOUR'] = 'Max poster per timme';
$TEXT['SUBMISSIONS_STORED_IN_DATABASE'] = 'Poster som sparas i databasen';
$TEXT['EMAIL_ADDRESS'] = 'E-postadress';
$TEXT['CUSTOM'] = 'Sedvanlig';
$TEXT['ANONYMOUS'] = 'Anonym';
$TEXT['SERVER_OPERATING_SYSTEM'] = 'Serveroperativsystem';
$TEXT['WORLD_WRITEABLE_FILE_PERMISSIONS'] = 'Skrivr&auml;ttigheter filer';
$TEXT['LINUX_UNIX_BASED'] = 'Linux/Unix';
$TEXT['WINDOWS'] = 'Windows';
$TEXT['HOME_FOLDER'] = 'Hemmapp';
$TEXT['HOME_FOLDERS'] = 'Hemmappar';
$TEXT['PAGE_TRASH'] = 'Papperskorg';
$TEXT['INLINE'] = 'Aktiverad';
$TEXT['SEPARATE'] = 'Separerat';
$TEXT['DELETED'] = 'Raderat';
$TEXT['VIEW_DELETED_PAGES'] = 'Visa raderade sidor';
$TEXT['EMPTY_TRASH'] = 'T&ouml;m papperskorgen';
$TEXT['TRASH_EMPTIED'] = 'Papperskorgen t&ouml;md';
$TEXT['ADD_SECTION'] = 'L&auml;gg till sektion';
$TEXT['POST_HEADER'] = 'Nyhet huvud';
$TEXT['POST_FOOTER'] = 'Nyhet fot';
$TEXT['POSTS_PER_PAGE'] = 'Inl&auml;gg per sida';
$TEXT['RESIZE_IMAGE_TO'] = 'Storleks&auml;ndra bilden till';
$TEXT['UNLIMITED'] = 'Obegr&auml;nsat';
$TEXT['OF'] = 'Av';
$TEXT['OUT_OF'] = 'Utav';
$TEXT['NEXT'] = 'N&auml;sta';
$TEXT['PREVIOUS'] = 'F&ouml;reg&aring;ende';
$TEXT['NEXT_PAGE'] = 'N&auml;sta sida';
$TEXT['PREVIOUS_PAGE'] = 'F&ouml;reg&aring;ende sida';
$TEXT['ON'] = 'Den';
$TEXT['LAST_UPDATED_BY'] = 'Senast uppdaterad av';
$TEXT['RESULTS_FOR'] = 'Resultat f&ouml;r';
$TEXT['TIME'] = 'Tid';
$TEXT['REDIRECT_AFTER'] = 'Redirect after';
$TEXT['WYSIWYG_STYLE'] = 'WYSIWYG stil';
$TEXT['WYSIWYG_EDITOR'] = 'WYSIWYG redigerare';
$TEXT['SERVER_EMAIL'] = 'Server e-post';
$TEXT['MENU'] = 'Meny';
$TEXT['MANAGE_GROUPS'] = 'Behandla grupper';
$TEXT['MANAGE_USERS'] = 'Behandla anv&auml;ndare';
$TEXT['PAGE_LANGUAGES'] = 'Sidors spr&aring;k';
$TEXT['HIDDEN'] = 'G&ouml;md';
$TEXT['MAIN'] = 'Huvudmenyn';
$TEXT['RENAME_FILES_ON_UPLOAD'] = '&Auml;ndra filnamn vid uppladdning';
$TEXT['APP_NAME'] = 'Namn p&aring; applikation';
$TEXT['SESSION_IDENTIFIER'] = 'Sessionsidentifierare';
$TEXT['SEC_ANCHOR'] = 'Section-Anchor text';
$TEXT['BACKUP'] = 'Backup';
$TEXT['RESTORE'] = '&Aring;terst&auml;ll';
$TEXT['BACKUP_DATABASE'] = 'Backup av databas';
$TEXT['RESTORE_DATABASE'] = '&Aring;terst&auml;ll databas';
$TEXT['BACKUP_ALL_TABLES'] = 'Backup av samtliga tabeller i databasen';
$TEXT['BACKUP_WB_SPECIFIC'] = 'Backup av endast tabeller f&ouml;r WB';
$TEXT['BACKUP_MEDIA'] = 'Backup av media';
$TEXT['RESTORE_MEDIA'] = '&Aring;terst&auml;ll media';
$TEXT['ADMINISTRATION_TOOL'] = 'Administrationsverktyg';
$TEXT['CAPTCHA_VERIFICATION'] = 'Captchaverifiering (&auml;ven kallat verifierings nummer) ';
$TEXT['VERIFICATION'] = 'Verifikation';
$TEXT['DEFAULT_CHARSET'] = 'Standardtypsnitt';
$TEXT['CHARSET'] = 'Typsnitt';
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
$MESSAGE['FRONTEND']['SORRY_NO_VIEWING_PERMISSIONS'] = 'Tyv&auml;rr, du har inte till&aring;telse att titta p&aring; denna sida';
$MESSAGE['FRONTEND']['SORRY_NO_ACTIVE_SECTIONS'] = 'Sorry, no active content to display';

$MESSAGE['ADMIN']['INSUFFICIENT_PRIVELLIGES'] = 'Du har inte till&aring;telse att vara h&auml;r';

$MESSAGE['LOGIN']['BOTH_BLANK'] = 'Skriv in ditt anv&auml;ndarnamn & L&ouml;senord';
$MESSAGE['LOGIN']['USERNAME_BLANK'] = 'Skriv ditt anv&auml;ndarnamn';
$MESSAGE['LOGIN']['PASSWORD_BLANK'] = 'Skriv ditt l&ouml;senord';
$MESSAGE['LOGIN']['USERNAME_TOO_SHORT'] = 'Anv&auml;ndarnamnet &auml;r f&ouml;r kort';
$MESSAGE['LOGIN']['PASSWORD_TOO_SHORT'] = 'L&ouml;senordet &auml;r f&ouml;r kort';
$MESSAGE['LOGIN']['USERNAME_TOO_LONG'] = 'Anv&auml;ndarnamnet &auml;r f&ouml;r l&aring;ngt';
$MESSAGE['LOGIN']['PASSWORD_TOO_LONG'] = 'L&ouml;senordet &auml;r f&ouml;r l&aring;ngt';
$MESSAGE['LOGIN']['AUTHENTICATION_FAILED'] = 'Felaktigt anv&auml;ndarnamn eller l&ouml;senord';

$MESSAGE['SIGNUP']['NO_EMAIL'] = 'Du m&aring;ste skriva en e-postadress';
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

$MESSAGE['FORGOT_PASS']['NO_DATA'] = 'Skriv din e-postadress';
$MESSAGE['FORGOT_PASS']['EMAIL_NOT_FOUND'] = 'E-postadressen som du skrev in kan inte hittas i v&aring;r databas';
$MESSAGE['FORGOT_PASS']['CANNOT_EMAIL'] = 'Kunde inte skicka l&ouml;senordet, v&auml;nligen kontakta administratat&ouml;ren';
$MESSAGE['FORGOT_PASS']['PASSWORD_RESET'] = 'Ditt anv&auml;ndarnamn & l&ouml;senord har skickats till din e-postadress';
$MESSAGE['FORGOT_PASS']['ALREADY_RESET'] = 'L&ouml;senordet kan bara &auml;ndras max en g&aring;ng per timme';

$MESSAGE['START']['WELCOME_MESSAGE'] = 'V&auml;lkommen till administrationen av WebsiteBaker';
$MESSAGE['START']['INSTALL_DIR_EXISTS'] = 'VARNING, installationsmappen finns fortfarande kvar!';
$MESSAGE['START']['CURRENT_USER'] = 'Du &auml;r inloggad som:';

$MESSAGE['SETTINGS']['UNABLE_OPEN_CONFIG'] = 'Kunde inte &ouml;ppna konfigurationsfilen';
$MESSAGE['SETTINGS']['UNABLE_WRITE_CONFIG'] = 'Kan inte skriva till konfigurationsfilen';
$MESSAGE['SETTINGS']['SAVED'] = 'Inst&auml;llningarna sparades';
$MESSAGE['SETTINGS']['MODE_SWITCH_WARNING'] = 'Observera: Om du klickar p&aring; denna knapp s&aring; f&ouml;rsvinner all ny information som inte sparats';
$MESSAGE['SETTINGS']['WORLD_WRITEABLE_WARNING'] = 'Observera: detta rekomenderas endast f&ouml;r tillf&auml;llig pr&ouml;vning av sidorna';

$MESSAGE['USERS']['ADDED'] = 'Anv&auml;ndaren lades till';
$MESSAGE['USERS']['SAVED'] = 'Anv&auml;ndaren sparades';
$MESSAGE['USERS']['DELETED'] = 'Anv&auml;ndaren Raderades';
$MESSAGE['USERS']['NO_GROUP'] = 'Ingen grupp valdes';
$MESSAGE['USERS']['USERNAME_TOO_SHORT'] = 'Anv&auml;ndarnamnet &auml;r f&ouml;r kort';
$MESSAGE['USERS']['PASSWORD_TOO_SHORT'] = 'L&ouml;senordet &auml;r for kort';
$MESSAGE['USERS']['PASSWORD_MISMATCH'] = 'L&ouml;senorden du skrev var inte lika';
$MESSAGE['USERS']['INVALID_EMAIL'] = 'E-post adressen &auml;r felaktig';
$MESSAGE['USERS']['EMAIL_TAKEN'] = 'E-post adressen du skrev finns redan i v&aring;r Databas';
$MESSAGE['USERS']['USERNAME_TAKEN'] = 'Anv&auml;ndarnamnet du skrev &auml;r upptaget';
$MESSAGE['USERS']['CHANGING_PASSWORD'] = 'Observera: Dessa f&auml;lt ska du bara skriva i om du vill &Auml;NDRA L&ouml;senordet';
$MESSAGE['USERS']['CONFIRM_DELETE'] = 'Vill du verkligen radera anv&auml;ndaren?';

$MESSAGE['GROUPS']['ADDED'] = 'Gruppen lades till';
$MESSAGE['GROUPS']['SAVED'] = 'Gruppen sparades';
$MESSAGE['GROUPS']['DELETED'] = 'Gruppen raderades';
$MESSAGE['GROUPS']['GROUP_NAME_BLANK'] = 'Gruppen m&aring;ste ha ett namn';
$MESSAGE['GROUPS']['CONFIRM_DELETE'] = 'Vill du verkligen radera gruppen med alla dess anv&auml;ndare?';
$MESSAGE['GROUPS']['NO_GROUPS_FOUND'] = 'Ingen grupp hittades';
$MESSAGE['GROUPS']['GROUP_NAME_EXISTS'] = 'Gruppnamnet finns redan';

$MESSAGE['PREFERENCES']['DETAILS_SAVED'] = 'Uppgifterna sparades';
$MESSAGE['PREFERENCES']['EMAIL_UPDATED'] = 'E-postadressen uppdaterades';
$MESSAGE['PREFERENCES']['CURRENT_PASSWORD_INCORRECT'] = 'Det (nuvarande) l&ouml;senordet du skrev &auml;r inte r&auml;tt';
$MESSAGE['PREFERENCES']['PASSWORD_CHANGED'] = 'L&ouml;senordet &auml;ndrades';

$MESSAGE['TEMPLATES']['CHANGE_TEMPLATE_NOTICE'] = 'Observera: f&ouml;r att &auml;ndra Mall, m&aring;ste du g&aring; till Sektionen Inst&auml;llningar';

$MESSAGE['MEDIA']['DIR_DOT_DOT_SLASH'] = 'Kan inte inkludera ../ i mappens namn';
$MESSAGE['MEDIA']['DIR_DOES_NOT_EXIST'] = 'Mappen finns inte';
$MESSAGE['MEDIA']['TARGET_DOT_DOT_SLASH'] = 'Kan inte ha ../ i mappens m&aring;l';
$MESSAGE['MEDIA']['NAME_DOT_DOT_SLASH'] = 'Kan inte inkludera ../ i namnet';
$MESSAGE['MEDIA']['NAME_INDEX_PHP'] = 'Kan inte anv&auml;nda index.php som Namn';
$MESSAGE['MEDIA']['NONE_FOUND'] = 'Ingen media hittades i mappen';
$MESSAGE['MEDIA']['FILE_NOT_FOUND'] = 'Filen hittades inte';
$MESSAGE['MEDIA']['DELETED_FILE'] = 'Filen raderades';
$MESSAGE['MEDIA']['DELETED_DIR'] = 'Mappen raderades';
$MESSAGE['MEDIA']['CONFIRM_DELETE'] = 'Vill du verkligen radera f&auml;ljande fil/mapp?';
$MESSAGE['MEDIA']['CANNOT_DELETE_FILE'] = 'Kan inte radera filen';
$MESSAGE['MEDIA']['CANNOT_DELETE_DIR'] = 'Kan inte radera mappen';
$MESSAGE['MEDIA']['BLANK_NAME'] = 'Du skrev inget nytt namn';
$MESSAGE['MEDIA']['BLANK_EXTENSION'] = 'Du skrev ingen fil&auml;ndelse';
$MESSAGE['MEDIA']['RENAMED'] = 'Namn&auml;ndring utf&ouml;rdes';
$MESSAGE['MEDIA']['CANNOT_RENAME'] = 'Namn&auml;ndring utf&ouml;rdes INTE';
$MESSAGE['MEDIA']['FILE_EXISTS'] = 'Det finns redan en fil med samma namn';
$MESSAGE['MEDIA']['DIR_EXISTS'] = 'Det finns redan en mapp med samma namn';
$MESSAGE['MEDIA']['DIR_MADE'] = 'Mappen skapades';
$MESSAGE['MEDIA']['DIR_NOT_MADE'] = 'Kunde inte skapa mapp';
$MESSAGE['MEDIA']['SINGLE_UPLOADED'] = ' filen laddades upp';
$MESSAGE['MEDIA']['UPLOADED'] = ' filerna laddades upp';

$MESSAGE['PAGES']['ADDED'] = 'Sidan lades till';
$MESSAGE['PAGES']['ADDED_HEADING'] = 'Sidans huvud lades till';
$MESSAGE['PAGES']['PAGE_EXISTS'] = 'En sida med samma eller liknande titel finns redan';
$MESSAGE['PAGES']['CANNOT_CREATE_ACCESS_FILE'] = 'Fel vid skapande av fil (otillr&auml;cklig till&aring;telse)';
$MESSAGE['PAGES']['CANNOT_DELETE_ACCESS_FILE'] = 'Fel vid radering av fil (otillr&auml;cklig till&aring;telse)';
$MESSAGE['PAGES']['NOT_FOUND'] = 'Sidan hittades inte';
$MESSAGE['PAGES']['SAVED'] = 'Sidan sparades';
$MESSAGE['PAGES']['SAVED_SETTINGS'] = 'Sidans inst&auml;llningar sparades';
$MESSAGE['PAGES']['NOT_SAVED'] = 'Fel n&auml;r sidan sparades';
$MESSAGE['PAGES']['DELETE_CONFIRM'] = 'Vill du verkligen radera sidan med alla dess undersidor?';
$MESSAGE['PAGES']['DELETED'] = 'Sidan raderades';
$MESSAGE['PAGES']['RESTORED'] = 'Sidan &aring;terskapades';
$MESSAGE['PAGES']['BLANK_PAGE_TITLE'] = 'Skriv en titel p&aring; sidan';
$MESSAGE['PAGES']['BLANK_MENU_TITLE'] = 'Skriv en titel p&aring; menyn';
$MESSAGE['PAGES']['REORDERED'] = 'Sidorna omordnades';
$MESSAGE['PAGES']['CANNOT_REORDER'] = 'Fel vid omordning av sidorna';
$MESSAGE['PAGES']['INSUFFICIENT_PERMISSIONS'] = 'Du har inte til&aring;telse att redigera denna sida';
$MESSAGE['PAGES']['INTRO_NOT_WRITABLE'] = 'Kan inte skriva till filen /pages/intro.php (otillr&auml;klig till&aring;telse)';
$MESSAGE['PAGES']['INTRO_SAVED'] = 'F&ouml;rstasidan sparades';
$MESSAGE['PAGES']['LAST_MODIFIED'] = 'Senast redigerad av';
$MESSAGE['PAGES']['INTRO_LINK'] = 'Klicka h&auml;r f&ouml;r att redigera F&ouml;rstasidan';
$MESSAGE['PAGES']['SECTIONS_PROPERTIES_SAVED'] = 'Sektionens inst&auml;llningar sparades';
$MESSAGE['PAGES']['RETURN_TO_PAGES'] = 'Tillbaka till Sidor';

$MESSAGE['GENERIC']['FILL_IN_ALL'] = 'G&aring; tillbaka och fyll i alla f&auml;lt';
$MESSAGE['GENERIC']['FILE_TYPE'] = 'Observera att filen du laddar upp m&aring;ste vara i formatet:';
$MESSAGE['GENERIC']['FILE_TYPES'] = 'Observera att filen du laddar upp m&aring;ste vara i ett av f&ouml;ljande format:';
$MESSAGE['GENERIC']['CANNOT_UPLOAD'] = 'Kan inte ladda upp fil';
$MESSAGE['GENERIC']['ALREADY_INSTALLED'] = 'Redan installerat';
$MESSAGE['GENERIC']['NOT_INSTALLED'] = 'Inte installerat';
$MESSAGE['GENERIC']['CANNOT_UNINSTALL'] = 'Kan inte avinstallera';
$MESSAGE['GENERIC']['CANNOT_UNZIP'] = 'Kan inte packa upp filen';
$MESSAGE['GENERIC']['INSTALLED'] = 'Installerat';
$MESSAGE['GENERIC']['UPGRADED'] = 'Uppgradering genomf&ouml;rd';
$MESSAGE['GENERIC']['UNINSTALLED'] = 'Avinstallerat';
$MESSAGE['GENERIC']['BAD_PERMISSIONS'] = 'Kan inte skriva i m&aring;lmappen';
$MESSAGE['GENERIC']['INVALID'] = 'Filen du laddade upp &auml;r ogilltig';
$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IN_USE'] = 'Kan inte avinstallera: filen anv&auml;nds just nu';

$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IN_USE_TMPL'] = "<br /><br />{{type}} <b>{{type_name}}</b> could not be uninstalled, because it is still in use on {{pages}}.<br /><br />";
$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IN_USE_TMPL_PAGES'] = "this page;these pages";
$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IS_DEFAULT_TEMPLATE'] = "Can't uninstall the template <b>{{name}}</b>, because it is the default template!";

$MESSAGE['GENERIC']['WEBSITE_UNDER_CONSTRUCTION'] = 'Website Under Construction';
$MESSAGE['GENERIC']['PLEASE_CHECK_BACK_SOON'] = 'V&auml;nligen kom tillbaka snart...';
$MESSAGE['GENERIC']['PLEASE_BE_PATIENT'] = 'V&auml;nligen ha t&aring;lamod, det h&auml;r kan ta en stund.';
$MESSAGE['GENERIC']['ERROR_OPENING_FILE'] = 'Fel vid &ouml;ppnande av fil.';
$MESSAGE['GENERIC']['INVALID_ADDON_FILE'] = 'Invalid WebsiteBaker installation file. Please check the *.zip format.';
$MESSAGE['GENERIC']['INVALID_LANGUAGE_FILE'] = 'Invalid WebsiteBaker language file. Please check the text file.';

$MESSAGE['MOD_FORM']['REQUIRED_FIELDS'] = 'Du m&aring;ste fylla i f&ouml;ljande f&auml;lt';
$MESSAGE['MOD_FORM']['EXCESS_SUBMISSIONS'] = 'Tyv&auml;rr, detta formul&auml;r har skickats f&ouml;r m&aring;nga g&aring;nger inom denna timme. F&ouml;rs&ouml;k igen om ett tag.';
$MESSAGE['MOD_FORM']['INCORRECT_CAPTCHA'] = 'Verifieringsnumret (ocks&aring; k&auml;nt som Captcha) som du angav &auml;r felaktigt. Om du har problem med att l&auml;sa ut Captcha, v&auml;nligen s&auml;nd email till: '.SERVER_EMAIL.'';

$MESSAGE['ADDON']['RELOAD'] = 'Update database with information from Add-on files (e.g. after FTP upload).';
$MESSAGE['ADDON']['ERROR_RELOAD'] = 'Error while updating the Add-On information.';
$MESSAGE['ADDON']['MODULES_RELOADED'] = 'Moduler laddades om';
$MESSAGE['ADDON']['TEMPLATES_RELOADED'] = 'Mallar laddades om';
$MESSAGE['ADDON']['LANGUAGES_RELOADED'] = 'Spr&aring;k laddades om';
$MESSAGE['ADDON']['PRECHECK_FAILED'] = 'Add-on installation failed. Your system does not fulfill the requirements of this Add-on. To make this Add-on working on your system, please fix the issues summarized below.';
$MESSAGE['ADDON']['MANUAL_INSTALLATION'] = 'When modules are uploaded via FTP (not recommended), the module installation files <tt>install.php</tt>, <tt>upgrade.php</tt> or <tt>uninstall.php</tt> will not be executed automatically. Those modules may not work correct or do not uninstall properly.<br /><br />You can execute the module files manually for modules uploaded via FTP below.';
$MESSAGE['ADDON']['MANUAL_INSTALLATION_WARNING'] = 'Warning: Existing module database entries will get lost. Only use this option if you experience problems with modules uploaded via FTP.';

?>