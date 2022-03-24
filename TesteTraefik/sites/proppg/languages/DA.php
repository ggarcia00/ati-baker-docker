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
 * @version         $Id: DA.php 1282 2010-01-30 05:29:56Z Luisehahne $
 * @filesource		$HeadURL: http://svn.websitebaker2.org/branches/2.8.x/wb/languages/DA.php $
 * @lastmodified    $Date: 2010-01-30 06:29:56 +0100 (Sa, 30. Jan 2010) $
 *
 */

// use languageedit-module to modify this file

// Define that this file is loaded
if(!defined('LANGUAGE_LOADED')) {
define('LANGUAGE_LOADED', true);
}

// Set the language information
$language_code = 'DA';
$language_name = 'Dansk';
$language_version = '2.8';
$language_platform = '2.8.x';
$language_author = 'Achrist';
$language_license = 'GNU General Public License';

// Menu titles
$MENU['START'] = 'Hjem';
$MENU['PAGES'] = 'Sider';
$MENU['MEDIA'] = 'Medie-filer';
$MENU['ADDONS'] = 'Add-ons';
$MENU['MODULES'] = 'Moduler';
$MENU['TEMPLATES'] = 'Skabeloner';
$MENU['LANGUAGES'] = 'Sprog';
$MENU['PREFERENCES'] = 'Pr&aelig;ferencer';
$MENU['SETTINGS'] = 'Indstillinger';
$MENU['ADMINTOOLS'] = 'Admin-v&aelig;rkt&oslash;jer';
$MENU['ACCESS'] = 'Adgang';
$MENU['USERS'] = 'Brugere';
$MENU['GROUPS'] = 'Grupper';
$MENU['HELP'] = 'Hj&aelig;lp';
$MENU['VIEW'] = 'Vis';
$MENU['LOGOUT'] = 'Log ud';
$MENU['LOGIN'] = 'Log ind';
$MENU['FORGOT'] = 'Modtag login oplysninger';

// Section overviews
$OVERVIEW['START'] = 'Administrationsoversigt';
$OVERVIEW['PAGES'] = 'Administr&eacute;r dine websider...';
$OVERVIEW['MEDIA'] = 'Administr&eacute;r filer i mappen medier...';
$OVERVIEW['MODULES'] = 'Administr&eacute;r WebsiteBaker moduler...';
$OVERVIEW['TEMPLATES'] = 'Skift udseende og layout/design p&aring; din webside v.h.a. skabeloner....';
$OVERVIEW['LANGUAGES'] = 'Administration af sprog i WebsiteBaker...';
$OVERVIEW['PREFERENCES'] = 'Tilpas pr&aelig;ferencer s&aring;som email-adresse, adgangskode, etc... ';
$OVERVIEW['SETTINGS'] = 'Tilpas indstillinger for WebsiteBaker...';
$OVERVIEW['USERS'] = 'Administr&eacute;r brugere som kan logge ind p&aring; WebsiteBaker systemet...';
$OVERVIEW['GROUPS'] = 'Administr&eacute;r brugergrupper og deres systemrettigheder...';
$OVERVIEW['HELP'] = 'Sp&oslash;rgsm&aring;l? Find dine svar her...';
$OVERVIEW['VIEW'] = 'Hurtig visning og gennemsyn af dit Websted i et nyt vindue..';
$OVERVIEW['ADMINTOOLS'] = 'WebsiteBaker administrationsv&aelig;rkt&oslash;jer...';

// Headings
$HEADING['MODIFY_DELETE_PAGE'] = 'Ret/slet side';
$HEADING['DELETED_PAGES'] = 'Slettede sider';
$HEADING['ADD_PAGE'] = 'Tilf&oslash;j side';
$HEADING['ADD_HEADING'] = 'Tilf&oslash;j overskrift';
$HEADING['MODIFY_PAGE'] = 'Rediger side';
$HEADING['MODIFY_PAGE_SETTINGS'] = 'Rediger side-indstillinger';
$HEADING['MODIFY_ADVANCED_PAGE_SETTINGS'] = 'Rediger avancerede indstillinger for hjemmesiden';
$HEADING['MANAGE_SECTIONS'] = 'Administr&eacute;r sektioner';
$HEADING['MODIFY_INTRO_PAGE'] = 'Rediger intro-side';

$HEADING['BROWSE_MEDIA'] = 'Gennemse medie-mappe';
$HEADING['CREATE_FOLDER'] = 'Opret mappe';
$HEADING['UPLOAD_FILES'] = 'Overf&oslash;r fil(er)';

$HEADING['INSTALL_MODULE'] = 'Install&eacute;r modul';
$HEADING['UNINSTALL_MODULE'] = 'Afinstall&eacute;r modul';
$HEADING['MODULE_DETAILS'] = 'Info om modul';

$HEADING['INSTALL_TEMPLATE'] = 'Install&eacute;r skabelon';
$HEADING['UNINSTALL_TEMPLATE'] = 'Afinstall&eacute;r skabelon';
$HEADING['TEMPLATE_DETAILS'] = 'Info om skabelon';

$HEADING['INSTALL_LANGUAGE'] = 'Install&eacute;r sprog';
$HEADING['UNINSTALL_LANGUAGE'] = 'Afinstall&eacute;r sprog';
$HEADING['LANGUAGE_DETAILS'] = 'Info om sprog';

$HEADING['MY_SETTINGS'] = 'Mine indstillinger';
$HEADING['MY_EMAIL'] = 'Min email-adresse';
$HEADING['MY_PASSWORD'] = 'Min adgangskode';

$HEADING['GENERAL_SETTINGS'] = 'Generelle indstillinger';
$HEADING['DEFAULT_SETTINGS'] = 'Standard indstillinger';
$HEADING['SEARCH_SETTINGS'] = 'S&oslash;ge-indstillinger';
$HEADING['FILESYSTEM_SETTINGS'] = 'Filsystem-indstillinger';
$HEADING['SERVER_SETTINGS'] = 'Server-indstillinger';
$HEADING['WBMAILER_SETTINGS'] = 'E-mail-indstillinger';
$HEADING['ADMINISTRATION_TOOLS'] = 'Administrationsv&aelig;rkt&oslash;jer';

$HEADING['MODIFY_DELETE_USER'] = 'Ret/slet bruger';
$HEADING['ADD_USER'] = 'Tilf&oslash;j bruger';
$HEADING['MODIFY_USER'] = 'Ret bruger';

$HEADING['MODIFY_DELETE_GROUP'] = 'Ret/slet gruppe';
$HEADING['ADD_GROUP'] = 'Tilf&oslash;j gruppe';
$HEADING['MODIFY_GROUP'] = 'Ret gruppe';

$HEADING['ADDON_PRECHECK_FAILED'] = 'Add-On krav er ikke opfyldt';
$HEADING['INVOKE_MODULE_FILES'] = 'Eksekver modulfiler manuelt';

// Other text
$TEXT['OPEN'] = '&Aring;ben';
$TEXT['ADD'] = 'Tilf&oslash;j';
$TEXT['MODIFY'] = 'Ret';
$TEXT['SETTINGS'] = 'Indstillinger';
$TEXT['DELETE'] = 'Slet';
$TEXT['SAVE'] = 'Gem';
$TEXT['RESET'] = 'Nulstil';
$TEXT['LOGIN'] = 'Log ind';
$TEXT['RELOAD'] = 'Opdat&eacute;r';
$TEXT['CANCEL'] = 'Annull&eacute;r';
$TEXT['NAME'] = 'Navn';
$TEXT['PLEASE_SELECT'] = 'V&aelig;lg venligst';
$TEXT['TITLE'] = 'Titel';
$TEXT['PARENT'] = 'Overliggende niveau';
$TEXT['TYPE'] = 'Type';
$TEXT['VISIBILITY'] = 'Synlighed';
$TEXT['PRIVATE'] = 'Privat';
$TEXT['PUBLIC'] = 'Offentlig';
$TEXT['NONE'] = 'Usynlig';
$TEXT['NONE_FOUND'] = 'Ingen fundet';
$TEXT['CURRENT'] = 'Nuv&aelig;rende';
$TEXT['CHANGE'] = 'Ret';
$TEXT['WINDOW'] = 'Vindue';
$TEXT['DESCRIPTION'] = 'Beskrivelse';
$TEXT['KEYWORDS'] = 'N&oslash;gleord';
$TEXT['ADMINISTRATORS'] = 'Administratorer';
$TEXT['PRIVATE_VIEWERS'] = 'Private bes&oslash;gende';
$TEXT['EXPAND'] = 'Fold ud';
$TEXT['COLLAPSE'] = 'Fold sammen';
$TEXT['MOVE_UP'] = 'Flyt op';
$TEXT['MOVE_DOWN'] = 'Flyt ned';
$TEXT['RENAME'] = 'Omd&oslash;b';
$TEXT['MODIFY_SETTINGS'] = 'Skift indstillinger';
$TEXT['MODIFY_CONTENT'] = 'Ret indhold';
$TEXT['VIEW'] = 'Se';
$TEXT['UP'] = 'Op';
$TEXT['FORGOTTEN_DETAILS'] = 'Har du glemt dine login-oplysninger?';
$TEXT['NEED_TO_LOGIN'] = 'Brug for at logge ind?';
$TEXT['SEND_DETAILS'] = 'Send oplysninger';
$TEXT['USERNAME'] = 'Brugernavn';
$TEXT['PASSWORD'] = 'Adgangskode';
$TEXT['HOME'] = 'Hjem';
$TEXT['TARGET_FOLDER'] = 'Mappeplacering';
$TEXT['OVERWRITE_EXISTING'] = 'Overskriv eksisterende';
$TEXT['FILE'] = 'Fil';
$TEXT['FILES'] = 'Filer';
$TEXT['FOLDER'] = 'Mappe';
$TEXT['FOLDERS'] = 'Mapper';
$TEXT['CREATE_FOLDER'] = 'Opret mappe';
$TEXT['UPLOAD_FILES'] = 'Overf&oslash;r fil(er)';
$TEXT['CURRENT_FOLDER'] = 'Nuv&aelig;rende mappe';
$TEXT['TO'] = 'Til';
$TEXT['FROM'] = 'Fra';
$TEXT['INSTALL'] = 'Install&eacute;r';
$TEXT['UNINSTALL'] = 'Afinstall&eacute;r';
$TEXT['VIEW_DETAILS'] = 'Se oplysninger';
$TEXT['DISPLAY_NAME'] = 'Vis navn';
$TEXT['AUTHOR'] = 'Udvikler/forfatter';
$TEXT['VERSION'] = 'Version';
$TEXT['DESIGNED_FOR'] = 'Designet til';
$TEXT['DESCRIPTION'] = 'Beskrivelse';
$TEXT['EMAIL'] = 'Email-adresse';
$TEXT['LANGUAGE'] = 'Sprog';
$TEXT['TIMEZONE'] = 'Tidszone';
$TEXT['CURRENT_PASSWORD'] = 'Nuv&aelig;rende adgangskode';
$TEXT['NEW_PASSWORD'] = 'Ny adgangskode';
$TEXT['RETYPE_NEW_PASSWORD'] = 'Skriv ny adgangskode igen';
$TEXT['ACTIVE'] = 'Aktiv';
$TEXT['DISABLED'] = 'Deaktiveret';
$TEXT['ENABLED'] = 'Aktiveret';
$TEXT['RETYPE_PASSWORD'] = 'Indtast adgangskode igen';
$TEXT['GROUP'] = 'Gruppe';
$TEXT['SYSTEM_PERMISSIONS'] = 'Systemrettigheder';
$TEXT['MODULE_PERMISSIONS'] = 'Modulrettigheder';
$TEXT['SHOW_ADVANCED'] = 'Vis avancerede indstillnger';
$TEXT['HIDE_ADVANCED'] = 'Skjul avancerede indstillinger';
$TEXT['BASIC'] = 'Basisindstillinger';
$TEXT['ADVANCED'] = 'Avanceret';
$TEXT['WEBSITE'] = 'Websted';
$TEXT['DEFAULT'] = 'Standard';
$TEXT['KEYWORDS'] = 'N&oslash;gleord';
$TEXT['TEXT'] = 'Tekst';
$TEXT['HEADER'] = 'Hoved (overligger)';
$TEXT['FOOTER'] = 'Fod (bund)';
$TEXT['TEMPLATE'] = 'Skabelon';
$TEXT['THEME'] = 'Backend-tema';
$TEXT['INSTALLATION'] = 'Installation';
$TEXT['DATABASE'] = 'Database';
$TEXT['HOST'] = 'V&aelig;rt';
$TEXT['INTRO'] = 'Introduktion';
$TEXT['PAGE'] = 'Side';
$TEXT['SIGNUP'] = 'Registrering';
$TEXT['PHP_ERROR_LEVEL'] = 'PHP fejlrapporteringsniveau';
$TEXT['ADMIN'] = 'Admin';
$TEXT['PATH'] = 'Sti';
$TEXT['URL'] = 'URL';
$TEXT['FRONTEND'] = 'Websted (vis siden)';
$TEXT['EXTENSION'] = 'Udvidelse';
$TEXT['TABLE_PREFIX'] = 'Tabelpr&aelig;fix';
$TEXT['CHANGES'] = '&AElig;ndringer';
$TEXT['ADMINISTRATION'] = 'Administr&eacute;r';
$TEXT['FORGOT_DETAILS'] = 'Glemt login-oplysninger?';
$TEXT['LOGGED_IN'] = 'Logget ind';
$TEXT['WELCOME_BACK'] = 'Velkommen igen';
$TEXT['FULL_NAME'] = 'Fulde navn';
$TEXT['ACCOUNT_SIGNUP'] = 'Kontoregistrering';
$TEXT['LINK'] = 'Link';
$TEXT['ANCHOR'] = 'Bogm&aelig;rke';
$TEXT['TARGET'] = 'M&aring;l';
$TEXT['NEW_WINDOW'] = 'Nyt vindue';
$TEXT['SAME_WINDOW'] = 'Samme vindue';
$TEXT['TOP_FRAME'] = 'Top frame';
$TEXT['PAGE_LEVEL_LIMIT'] = 'Max. sideantal';
$TEXT['SUCCESS'] = 'Oplysninger gemt';
$TEXT['ERROR'] = 'Der opstod en fejl';
$TEXT['ARE_YOU_SURE'] = 'Er du sikker?';
$TEXT['YES'] = 'Ja';
$TEXT['NO'] = 'Nej';
$TEXT['SYSTEM_DEFAULT'] = 'Systemstandard';
$TEXT['PAGE_TITLE'] = 'Titel p&aring; side';
$TEXT['MENU_TITLE'] = 'Menutitel';
$TEXT['ACTIONS'] = 'Handlinger';
$TEXT['UNKNOWN'] = 'Ukendt';
$TEXT['BLOCK'] = 'Blok';
$TEXT['SEARCH'] = 'S&oslash;g';
$TEXT['SEARCHING'] = 'S&oslash;gefunktion';
$TEXT['POST'] = 'Indl&aelig;g';
$TEXT['COMMENT'] = 'Kommentar';
$TEXT['COMMENTS'] = 'Kommentarer';
$TEXT['COMMENTING'] = 'Kommentere';
$TEXT['SHORT'] = 'Kort';
$TEXT['LONG'] = 'Lang';
$TEXT['LOOP'] = 'Liste';
$TEXT['FIELD'] = 'Felt';
$TEXT['REQUIRED'] = 'Kr&aelig;vet';
$TEXT['LENGTH'] = 'L&aelig;ngde';
$TEXT['MESSAGE'] = 'Indl&aelig;g';
$TEXT['SUBJECT'] = 'Emne';
$TEXT['MATCH'] = 'Match';
$TEXT['ALL_WORDS'] = 'Alle ordene';
$TEXT['ANY_WORDS'] = 'Bare et af ordene';
$TEXT['EXACT_MATCH'] = 'Eksakt s&oslash;gning';
$TEXT['SHOW'] = 'Vis';
$TEXT['HIDE'] = 'Skjul';
$TEXT['START_PUBLISHING'] = 'Start offentligg&oslash;relse';
$TEXT['FINISH_PUBLISHING'] = 'Afslut offentligg&oslash;relse';
$TEXT['DATE'] = 'Dato';
$TEXT['START'] = 'Start';
$TEXT['END'] = 'Slut';
$TEXT['IMAGE'] = 'Billede';
$TEXT['ICON'] = 'Ikon';
$TEXT['SECTION'] = 'Sektion';
$TEXT['DATE_FORMAT'] = 'Datoformat';
$TEXT['TIME_FORMAT'] = 'Tidsformat';
$TEXT['RESULTS'] = 'Resultater';
$TEXT['RESIZE'] = 'Skift st&oslash;rrelse';
$TEXT['MANAGE'] = 'Administr&eacute;r';
$TEXT['CODE'] = 'Kode';
$TEXT['WIDTH'] = 'Bredde';
$TEXT['HEIGHT'] = 'H&oslash;jde';
$TEXT['MORE'] = 'Mere';
$TEXT['READ_MORE'] = 'L&aelig;s mere';
$TEXT['CHANGE_SETTINGS'] = 'Skift indstillinger';
$TEXT['CURRENT_PAGE'] = 'Nuv&aelig;rende side';
$TEXT['CLOSE'] = 'Luk';
$TEXT['INTRO_PAGE'] = 'Intro-side';
$TEXT['INSTALLATION_URL'] = 'Installations URL';
$TEXT['INSTALLATION_PATH'] = 'Installationssti';
$TEXT['PAGE_EXTENSION'] = 'Side-udvidelse';
$TEXT['NO_RESULTS'] = 'Intet fundet';
$TEXT['WEBSITE_TITLE'] = 'Titel p&aring; dit websted';
$TEXT['WEBSITE_DESCRIPTION'] = 'Beskrivelse af dit websted';
$TEXT['WEBSITE_KEYWORDS'] = 'Webstedsn&oslash;gleord';
$TEXT['WEBSITE_HEADER'] = 'Webstedshoved';
$TEXT['WEBSITE_FOOTER'] = 'Webstedsfod (bund)';
$TEXT['RESULTS_HEADER'] = 'Resultathoved';
$TEXT['RESULTS_LOOP'] = 'Resultatliste';
$TEXT['RESULTS_FOOTER'] = 'Resultatfod (bund)';
$TEXT['LEVEL'] = 'Niveau';
$TEXT['NOT_FOUND'] = 'Ikke fundet';
$TEXT['PAGE_SPACER'] = 'Side pladsmark&oslash;r';
$TEXT['MATCHING'] = 'Matchende';
$TEXT['TEMPLATE_PERMISSIONS'] = 'Skabelon-tilladelser';
$TEXT['PAGES_DIRECTORY'] = 'Sidebibliotek (mappe)';
$TEXT['MEDIA_DIRECTORY'] = 'Mediebibliotek (mappe)';
$TEXT['FILE_MODE'] = 'Filtilstand';
$TEXT['USER'] = 'Bruger';
$TEXT['OTHERS'] = 'Andre';
$TEXT['READ'] = 'L&aelig;s';
$TEXT['WRITE'] = 'Skriv';
$TEXT['EXECUTE'] = 'Udf&oslash;r';
$TEXT['SMART_LOGIN'] = 'Smart Log-ind';
$TEXT['REMEMBER_ME'] = 'Husk mig';
$TEXT['FILESYSTEM_PERMISSIONS'] = 'Filesystem - Tilladelser';
$TEXT['DIRECTORIES'] = 'Biblioteker (mapper)';
$TEXT['DIRECTORY_MODE'] = 'Bibliotekstilstand';
$TEXT['LIST_OPTIONS'] = 'Vis valgmuligheder';
$TEXT['OPTION'] = 'Mulighed';
$TEXT['ALLOW_MULTIPLE_SELECTIONS'] = 'Tillad flere valg samtidig';
$TEXT['TEXTFIELD'] = 'Tekstfelt';
$TEXT['TEXTAREA'] = 'Tekstomr&aring;de';
$TEXT['SELECT_BOX'] = 'Afkrydsningsboks';
$TEXT['CHECKBOX_GROUP'] = 'Afkrydsningsgruppe';
$TEXT['RADIO_BUTTON_GROUP'] = 'Radioknap-gruppe';
$TEXT['SIZE'] = 'St&oslash;rrelse';
$TEXT['DEFAULT_TEXT'] = 'Standardtekst';
$TEXT['SEPERATOR'] = 'Separator';
$TEXT['BACK'] = 'Tilbage';
$TEXT['UNDER_CONSTRUCTION'] = 'Under konstruktion';
$TEXT['MULTISELECT'] = 'Multi-valg';
$TEXT['SHORT_TEXT'] = 'Kort tekst';
$TEXT['LONG_TEXT'] = 'Lang tekst';
$TEXT['HOMEPAGE_REDIRECTION'] = 'Viderestilling af hjemmeside';
$TEXT['HEADING'] = 'Overskrift';
$TEXT['MULTIPLE_MENUS'] = 'Flere menuer';
$TEXT['REGISTERED'] = 'Registrerede';
$TEXT['SECTION_BLOCKS'] = 'Sektionsblokke';
$TEXT['REGISTERED_VIEWERS'] = 'Registrerede brugere';
$TEXT['ALLOWED_VIEWERS'] = 'Tilladte brugere';
$TEXT['SUBMISSION_ID'] = 'Tilmeldings-ID';
$TEXT['SUBMISSIONS'] = 'Indsendte bidrag';
$TEXT['SUBMITTED'] = 'Indsendt';
$TEXT['MAX_SUBMISSIONS_PER_HOUR'] = 'Max. indsendte bidrag pr. time';
$TEXT['SUBMISSIONS_STORED_IN_DATABASE'] = 'Indsendte bidrag gemt i databasen';
$TEXT['EMAIL_ADDRESS'] = 'Email-adresse';
$TEXT['CUSTOM'] = 'Brugerdefineret';
$TEXT['ANONYMOUS'] = 'Anonym';
$TEXT['SERVER_OPERATING_SYSTEM'] = 'Server operativsystem';
$TEXT['WORLD_WRITEABLE_FILE_PERMISSIONS'] = 'Globale skriverettigheder';
$TEXT['LINUX_UNIX_BASED'] = 'Linux/Unix baseret';
$TEXT['WINDOWS'] = 'Windows';
$TEXT['HOME_FOLDER'] = 'Hjemmebibliotek (mappe)';
$TEXT['HOME_FOLDERS'] = 'Hjemmebiblioteker (mapper)';
$TEXT['PAGE_TRASH'] = 'Papirkurv til sider';
$TEXT['INLINE'] = 'Indbygget';
$TEXT['SEPARATE'] = 'Separat';
$TEXT['DELETED'] = 'Slettet';
$TEXT['VIEW_DELETED_PAGES'] = 'Vis slettede sider';
$TEXT['EMPTY_TRASH'] = 'T&oslash;m papirkurv';
$TEXT['TRASH_EMPTIED'] = 'Papirkurv t&oslash;mt';
$TEXT['ADD_SECTION'] = 'Tilf&oslash;j sektion';
$TEXT['POST_HEADER'] = 'Hoved p&aring; indl&aelig;g';
$TEXT['POST_FOOTER'] = 'Fod (bund) p&aring; indl&aelig;g';
$TEXT['POSTS_PER_PAGE'] = 'Indl&aelig;g pr. side';
$TEXT['RESIZE_IMAGE_TO'] = 'Forst&oslash;r/formindsk billede til';
$TEXT['UNLIMITED'] = 'Ubegr&aelig;nset';
$TEXT['OF'] = 'af';
$TEXT['OUT_OF'] = 'ud af i alt';
$TEXT['NEXT'] = 'N&aelig;ste';
$TEXT['PREVIOUS'] = 'Forrige';
$TEXT['NEXT_PAGE'] = 'N&aelig;ste side';
$TEXT['PREVIOUS_PAGE'] = 'Forrige side';
$TEXT['ON'] = 'D.';
$TEXT['LAST_UPDATED_BY'] = 'Sidst opdateret af:';
$TEXT['RESULTS_FOR'] = 'Resultater for';
$TEXT['TIME'] = 'Tid';
$TEXT['REDIRECT_AFTER'] = 'Videresend efter';
$TEXT['WYSIWYG_STYLE'] = 'WYSIWYG-stil';
$TEXT['WYSIWYG_EDITOR'] = 'WYSIWYG-editor';
$TEXT['SERVER_EMAIL'] = 'Server email';
$TEXT['MENU'] = 'Menu';
$TEXT['MANAGE_GROUPS'] = 'Administr&eacute;r grupper';
$TEXT['MANAGE_USERS'] = 'Administr&eacute;r brugere';
$TEXT['PAGE_LANGUAGES'] = 'Sprog';
$TEXT['HIDDEN'] = 'Skjult';
$TEXT['MAIN'] = 'Hovedoversigt';
$TEXT['RENAME_FILES_ON_UPLOAD'] = 'Omd&oslash;b filer under opload';
$TEXT['APP_NAME'] = 'Applikationsnavn';
$TEXT['SESSION_IDENTIFIER'] = 'Sessions-ID';
$TEXT['SEC_ANCHOR'] = 'Sektionsankertekst';
$TEXT['BACKUP'] = 'Backup';
$TEXT['RESTORE'] = 'Gendannelse';
$TEXT['BACKUP_DATABASE'] = 'Backup af database';
$TEXT['RESTORE_DATABASE'] = 'Gendan database';
$TEXT['BACKUP_ALL_TABLES'] = 'Lav backup af alle tabeller i databasen';
$TEXT['BACKUP_WB_SPECIFIC'] = 'Lav kun backup af WB-specifikke tabeller';
$TEXT['BACKUP_MEDIA'] = 'Lav backup af medie-filer';
$TEXT['RESTORE_MEDIA'] = 'Gendan medie-filer';
$TEXT['ADMINISTRATION_TOOL'] = 'Administrationsv&aelig;rkt&oslash;jer';
$TEXT['CAPTCHA_VERIFICATION'] = 'Captcha verifikation';
$TEXT['VERIFICATION'] = 'Indtast verifikationstal';
$TEXT['DEFAULT_CHARSET'] = 'Standard tegns&aelig;t';
$TEXT['CHARSET'] = 'Tegns&aelig;t';
$TEXT['MODULE_ORDER'] = 'Modul-r&aelig;kkef&oslash;lge ved s&oslash;gning';
$TEXT['MAX_EXCERPT'] = 'Max linier i uddrag';
$TEXT['TIME_LIMIT'] = 'Max tid til uddrag per modul';
$TEXT['PUBL_START_DATE'] = 'Startdato';
$TEXT['PUBL_END_DATE'] = 'Slutdato';
$TEXT['CALENDAR'] = 'Kalender';
$TEXT['DELETE_DATE'] = 'Slet dato';
$TEXT['WBMAILER_DEFAULT_SETTINGS_NOTICE'] = 'Angiv standard "FRA"-adresse og "AFSENDER"-navn nedenfor. Det anbefales at angive FRA-adresse som: <strong>admin@dit-dom&aelig;ne.dk</strong>. Nogle udbydere (f.eks. <em>mail.com</em>) kan afvise emails med en FRA-adresse som <em>navn@mail.com</em>, hvis de er sendt via en anden udbyder, for at undg&aring; spam.<br /><br />Standardv&aelig;rdierne benyttes kun, hvis ingen andre v&aelig;rdier angives i WebsiteBaker. Hvis din server underst&oslash;tter <acronym title="Simple mail transfer protocol">SMTP</acronym>, kan du v&aelig;lge at bruge denne til udg&aring;ende emails.';
$TEXT['WBMAILER_DEFAULT_SENDER_MAIL'] = 'Standard fra-adresse';
$TEXT['WBMAILER_DEFAULT_SENDER_NAME'] = 'Standard afsendernavn';
$TEXT['WBMAILER_NOTICE'] = '<strong>SMTP mail-program indstillinger:</strong><br />Indstillingerne nedenfor er kun n&oslash;dvendige, hvis du vil sende emails via <acronym title="Simple mail transfer protocol">SMTP</acronym>. Hvis du ikke kender adressen p&aring; din SMTP-v&aelig;rt eller de kr&aelig;vede indstillinger, s&aring; hold dig til standardprogrammet, PHP MAIL.';
$TEXT['WBMAILER_FUNCTION'] = 'Mailprogram';
$TEXT['WBMAILER_SMTP_HOST'] = 'SMTP-v&aelig;rt';
$TEXT['WBMAILER_PHP'] = 'PHP MAIL';
$TEXT['WBMAILER_SMTP'] = 'SMTP';
$TEXT['WBMAILER_SMTP_AUTH'] = 'SMTP brugeradgangskontrol';
$TEXT['WBMAILER_SMTP_AUTH_NOTICE'] = '- skal kun anvendes hvis din SMTP-v&aelig;rt bruger adgangskontrol';
$TEXT['WBMAILER_SMTP_USERNAME'] = 'SMTP brugernavn';
$TEXT['WBMAILER_SMTP_PASSWORD'] = 'SMTP adgangskode';
$TEXT['PLEASE_LOGIN'] = 'Log ind';
$TEXT['CAP_EDIT_CSS'] = 'Rediger CSS';
$TEXT['HEADING_CSS_FILE'] = 'Aktuel modulfil: ';
$TEXT['TXT_EDIT_CSS_FILE'] = 'Rediger CSS definitioner i tekstfeltet nedenfor';
$TEXT['CODE_SNIPPET'] = 'Kodestump';
$TEXT['REQUIREMENT'] = 'Krav';
$TEXT['INSTALLED'] = 'installeret';
$TEXT['NOT_INSTALLED'] = 'ikke installeret';
$TEXT['ADDON'] = 'Add-On';
$TEXT['EXTENSION'] = 'Udvidelse';
$TEXT['UNZIP_FILE'] = 'Overf&oslash;r og udpak et zip-arkiv';
$TEXT['DELETE_ZIP'] = 'Slet zip-arkiv efter udpakning';

// Success/error messages
$MESSAGE['FRONTEND']['SORRY_NO_VIEWING_PERMISSIONS'] = 'Beklager - du har ikke adgang til at se denne side';
$MESSAGE['FRONTEND']['SORRY_NO_ACTIVE_SECTIONS'] = 'Beklager - intet aktivit indhold at vise';

$MESSAGE['ADMIN']['INSUFFICIENT_PRIVELLIGES'] = 'Du har ikke den forn&oslash;dne adgang til dette omr&aring;de';

$MESSAGE['LOGIN']['BOTH_BLANK'] = 'Indtast venligst dit brugernavn og din adgangskode nedenfor';
$MESSAGE['LOGIN']['USERNAME_BLANK'] = 'Angiv et brugernavn';
$MESSAGE['LOGIN']['PASSWORD_BLANK'] = 'Angiv en adgangskode ';
$MESSAGE['LOGIN']['USERNAME_TOO_SHORT'] = 'Det indtastede brugernavn er for KORT';
$MESSAGE['LOGIN']['PASSWORD_TOO_SHORT'] = 'Den indtastede adgangskode er for KORT';
$MESSAGE['LOGIN']['USERNAME_TOO_LONG'] = 'Det indtastede brugernavn er for LANGT';
$MESSAGE['LOGIN']['PASSWORD_TOO_LONG'] = 'Den indtastede adgangskode er for LANG';
$MESSAGE['LOGIN']['AUTHENTICATION_FAILED'] = 'Brugernavn og/eller adgangskode er forkert';

$MESSAGE['SIGNUP']['NO_EMAIL'] = 'Du skal indtaste en gyldig email-adresse';
$MESSAGE['SIGNUP2']['SUBJECT_LOGIN_INFO'] = 'Dine login-oplysninger...';
$MESSAGE['SIGNUP2']['BODY_LOGIN_INFO'] = <<< EOT
Hej {LOGIN_DISPLAY_NAME},

Dine '{LOGIN_WEBSITE_TITLE}' loginoplysninger er:
Brugernavn: {LOGIN_NAME}
Adgangskode: {LOGIN_PASSWORD}

Din adgangskode er sat til ovenst&aring;ende.
Det betyder, at din gamle adgangskode ikke virker mere.

Hvis du har modtaget denne besked ved en fejl, bedes du straks slette den.
EOT;

$MESSAGE['FORGOT_PASS']['NO_DATA'] = 'Indtast din email-adresse nedenfor';
$MESSAGE['FORGOT_PASS']['EMAIL_NOT_FOUND'] = 'Den email-adresse du indtastede findes ikke i vores database';
$MESSAGE['FORGOT_PASS']['CANNOT_EMAIL'] = 'Kunne ikke sende din adgangskode til din email-adresse - Kontakt en systemadministrator';
$MESSAGE['FORGOT_PASS']['PASSWORD_RESET'] = 'Dit brugernavn og din adgangskode er nu afsendt til din email-adresse';
$MESSAGE['FORGOT_PASS']['ALREADY_RESET'] = 'Adgangskode kan kun nulstilles 1 gang i timen - beklager!';

$MESSAGE['START']['WELCOME_MESSAGE'] = 'Velkommen til administration af din WebsiteBaker';
$MESSAGE['START']['INSTALL_DIR_EXISTS'] = 'ADVARSEL! Installationsbiblioteket (mappen) findes stadig p&aring; serveren. Du b&oslash;r slette den straks af hensyn til sikkerheden!';
$MESSAGE['START']['CURRENT_USER'] = 'Du er lige nu logget ind som:';

$MESSAGE['SETTINGS']['UNABLE_OPEN_CONFIG'] = 'Er ikke i stand til at &aring;bne konfigurationsfilen';
$MESSAGE['SETTINGS']['UNABLE_WRITE_CONFIG'] = 'Kan ikke skrive til konfigurationsfilen (check rettigheder for filen)';
$MESSAGE['SETTINGS']['SAVED'] = 'Indstillingerne er gemt';
$MESSAGE['SETTINGS']['MODE_SWITCH_WARNING'] = '<br>OBS: Ved at klikke p&aring; denne knap tabes alle &aelig;ndringer, der ikke er gemt!';
$MESSAGE['SETTINGS']['WORLD_WRITEABLE_WARNING'] = 'OBS! Dette anbefales kun i testmilj&oslash;er ';

$MESSAGE['USERS']['ADDED'] = 'Brugeren er oprettet';
$MESSAGE['USERS']['SAVED'] = 'Brugeren er gemt';
$MESSAGE['USERS']['DELETED'] = 'Brugeren er slettet';
$MESSAGE['USERS']['NO_GROUP'] = 'Ingen gruppe er valgt';
$MESSAGE['USERS']['USERNAME_TOO_SHORT'] = 'Det angivne brugernavn er for kort';
$MESSAGE['USERS']['PASSWORD_TOO_SHORT'] = 'Den angivne adgangskode er for kort';
$MESSAGE['USERS']['PASSWORD_MISMATCH'] = 'De to adgangskoder du indtastede  er ikke ens';
$MESSAGE['USERS']['INVALID_EMAIL'] = 'Email-adressen du indtastede er ugyldig';
$MESSAGE['USERS']['EMAIL_TAKEN'] = 'Den email-adresse du indtastede findes i forvejen';
$MESSAGE['USERS']['USERNAME_TAKEN'] = 'Brugernavnet du indtastede er allerede optaget af en anden bruger';
$MESSAGE['USERS']['CHANGING_PASSWORD'] = 'OBS! Du skal kun indtaste v&aelig;rdier i felterne ovenfor, s&aring;fremt du &oslash;nsker at &aelig;ndre denne brugers adgangskode';
$MESSAGE['USERS']['CONFIRM_DELETE'] = 'Er du sikker p&aring; at du vil slette den valgte bruger?';

$MESSAGE['GROUPS']['ADDED'] = 'Gruppen er tilf&oslash;jet';
$MESSAGE['GROUPS']['SAVED'] = 'Gruppen er gemt';
$MESSAGE['GROUPS']['DELETED'] = 'Gruppen er slettet';
$MESSAGE['GROUPS']['GROUP_NAME_BLANK'] = 'Gruppenavn er ikke udfyldt';
$MESSAGE['GROUPS']['CONFIRM_DELETE'] = 'Er du helt sikker p&aring; du vil slette denne gruppe (og alle brugere som tilh&oslash;rer den)?';
$MESSAGE['GROUPS']['NO_GROUPS_FOUND'] = 'Der blev ikke fundet nogen grupper';
$MESSAGE['GROUPS']['GROUP_NAME_EXISTS'] = 'Gruppens navn findes allerede';

$MESSAGE['PREFERENCES']['DETAILS_SAVED'] = 'Oplysningerne er gemt';
$MESSAGE['PREFERENCES']['EMAIL_UPDATED'] = 'Email-adresse opdateret';
$MESSAGE['PREFERENCES']['CURRENT_PASSWORD_INCORRECT'] = 'Den (nuv&aelig;rende) adgangskode som du indtastede er ikke korrekt';
$MESSAGE['PREFERENCES']['PASSWORD_CHANGED'] = 'Adgangskode &aelig;ndret';

$MESSAGE['TEMPLATES']['CHANGE_TEMPLATE_NOTICE'] = 'OBS: For at &aelig;ndre skabelonen skal du g&aring; til punktet indstillinger';

$MESSAGE['MEDIA']['DIR_DOT_DOT_SLASH'] = 'Kan ikke inkludere ../ i mappenavnet';
$MESSAGE['MEDIA']['DIR_DOES_NOT_EXIST'] = 'Mappen eksisterer ikke';
$MESSAGE['MEDIA']['TARGET_DOT_DOT_SLASH'] = 'Kan ikke have ../ i placeringen af biblioteket (mappen)';
$MESSAGE['MEDIA']['NAME_DOT_DOT_SLASH'] = 'Kan ikke inkludere ../ i navnet';
$MESSAGE['MEDIA']['NAME_INDEX_PHP'] = 'Kan ikke anvende index.php som navn';
$MESSAGE['MEDIA']['NONE_FOUND'] = 'Der blev ikke fundet medie-filer i det p&aring;g&aelig;ldende bibliotek (mappe)';
$MESSAGE['MEDIA']['FILE_NOT_FOUND'] = 'Filen ikke fundet';
$MESSAGE['MEDIA']['DELETED_FILE'] = 'Filen er slettet';
$MESSAGE['MEDIA']['DELETED_DIR'] = 'Bibliotek (mappe) slettet';
$MESSAGE['MEDIA']['CONFIRM_DELETE'] = 'Er du sikker p&aring; du &oslash;nsker at slette flg. fil/bibliotek (mappe)?';
$MESSAGE['MEDIA']['CANNOT_DELETE_FILE'] = 'Kan ikke slette den valgte fil';
$MESSAGE['MEDIA']['CANNOT_DELETE_DIR'] = 'Kan ikke slette valgte bibliotek (mappe)';
$MESSAGE['MEDIA']['BLANK_NAME'] = 'Du indtastede ikke et nyt navn';
$MESSAGE['MEDIA']['BLANK_EXTENSION'] = 'Du har ikke angivet en filtype';
$MESSAGE['MEDIA']['RENAMED'] = 'Omd&oslash;bning udf&oslash;rt';
$MESSAGE['MEDIA']['CANNOT_RENAME'] = 'Omd&oslash;bning kunne ikke udf&oslash;res';
$MESSAGE['MEDIA']['FILE_EXISTS'] = 'Der findes allerede en fil med det navn du indtastede';
$MESSAGE['MEDIA']['DIR_EXISTS'] = 'Der findes allerede et bibliotek (en mappe) med det navn du indtastede!';
$MESSAGE['MEDIA']['DIR_MADE'] = 'Bibliotek (mappe) blev oprettet';
$MESSAGE['MEDIA']['DIR_NOT_MADE'] = 'Kunne ikke oprette biblioteket (mappen)';
$MESSAGE['MEDIA']['SINGLE_UPLOADED'] = 'fil blev overf&oslash;rt';
$MESSAGE['MEDIA']['UPLOADED'] = 'filer blev overf&oslash;rt';

$MESSAGE['PAGES']['ADDED'] = 'Siden er tilf&oslash;jet';
$MESSAGE['PAGES']['ADDED_HEADING'] = 'Overskrift til side tilf&oslash;jet';
$MESSAGE['PAGES']['PAGE_EXISTS'] = 'Der findes allerede en side med dette eller lign. navn';
$MESSAGE['PAGES']['CANNOT_CREATE_ACCESS_FILE'] = 'Fejl under oprettelse af adgangsfil i /pages biblioteket (mappen) (utilstr&aelig;kkelige rettigheder)';
$MESSAGE['PAGES']['CANNOT_DELETE_ACCESS_FILE'] = 'Fejl under sletning af adgangsfil i /pages biblioteket  (utilstr&aelig;kkelige rettigheder)';
$MESSAGE['PAGES']['NOT_FOUND'] = 'Siden blev ikke fundet';
$MESSAGE['PAGES']['SAVED'] = 'Siden er gemt';
$MESSAGE['PAGES']['SAVED_SETTINGS'] = 'Side-indstillinger er gemt';
$MESSAGE['PAGES']['NOT_SAVED'] = 'Der opstod en fejl under fors&oslash;get p&aring; at gemme siden';
$MESSAGE['PAGES']['DELETE_CONFIRM'] = 'Er du sikker p&aring; du &oslash;nsker at slette den valgte side (og alle dens undersider)';
$MESSAGE['PAGES']['DELETED'] = 'Siden er slettet';
$MESSAGE['PAGES']['RESTORED'] = 'Siden er gendannet';
$MESSAGE['PAGES']['BLANK_PAGE_TITLE'] = 'Indtast venligst en overskrift til siden';
$MESSAGE['PAGES']['BLANK_MENU_TITLE'] = 'Indtast venligst en overskrift til menuen';
$MESSAGE['PAGES']['REORDERED'] = 'Siden er omorganiseret';
$MESSAGE['PAGES']['CANNOT_REORDER'] = 'Fejl ved fors&oslash;g p&aring; at omorganisere siden';
$MESSAGE['PAGES']['INSUFFICIENT_PERMISSIONS'] = 'Du har ikke rettigheder til at &aelig;ndre denne side';
$MESSAGE['PAGES']['INTRO_NOT_WRITABLE'] = 'Kan ikke skrive til filen /pages/intro.php (utilstr&aelig;kkelige rettigheder)';
$MESSAGE['PAGES']['INTRO_SAVED'] = 'Introside gemt';
$MESSAGE['PAGES']['LAST_MODIFIED'] = 'Sidste &aelig;ndring blev foretaget af:';
$MESSAGE['PAGES']['INTRO_LINK'] = 'Klik HER for at &aelig;ndre din intro-side!';
$MESSAGE['PAGES']['SECTIONS_PROPERTIES_SAVED'] = 'Egenskaber for sektion er &aelig;ndret';
$MESSAGE['PAGES']['RETURN_TO_PAGES'] = 'Tilbage til sider';

$MESSAGE['GENERIC']['FILL_IN_ALL'] = 'G&aring; venligst tilbage og udfyld alle felter';
$MESSAGE['GENERIC']['FILE_TYPE'] = 'OBS: V&aelig;r opm&aelig;rksom p&aring; at den fil du vil over&oslash;re skal v&aelig;re i flg. format:';
$MESSAGE['GENERIC']['FILE_TYPES'] = 'OBS: V&aelig;r opm&aelig;rksom p&aring; at den fil du vil over&oslash;re skal v&aelig;re i et af flg. formater:';
$MESSAGE['GENERIC']['CANNOT_UPLOAD'] = 'Kunne ikke over&oslash;re filen';
$MESSAGE['GENERIC']['ALREADY_INSTALLED'] = 'Er allerede installeret';
$MESSAGE['GENERIC']['NOT_INSTALLED'] = 'Ikke installeret';
$MESSAGE['GENERIC']['CANNOT_UNINSTALL'] = 'Kan ikke afinstallere';
$MESSAGE['GENERIC']['CANNOT_UNZIP'] = 'Kan ikke udpakke fil';
$MESSAGE['GENERIC']['INSTALLED'] = 'Installeret';
$MESSAGE['GENERIC']['UPGRADED'] = 'Opgraderet';
$MESSAGE['GENERIC']['UNINSTALLED'] = 'Afinstalleret';
$MESSAGE['GENERIC']['BAD_PERMISSIONS'] = 'Kan ikke skrive i det valgte modtagebibliotek (mappe)';
$MESSAGE['GENERIC']['INVALID'] = 'Filen du over&oslash;rte er fejlbeh&aelig;ftet';
$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IN_USE'] = 'Kan ikke afinstallere: Den valgte fil er i brug';

$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IN_USE_TMPL'] = '<br /><br />{{type}} <b>{{type_name}}</b> kan ikke afinstalleres, da den stadig bruges p&aring; {{pages}}.<br /><br />';
$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IN_USE_TMPL_PAGES'] = 'denne side;disse sider';
$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IS_DEFAULT_TEMPLATE'] = 'Kan ikke afinstallere skabelonen <b>{{name}}</b>, da den er standardskabelonen!';

$MESSAGE['GENERIC']['WEBSITE_UNDER_CONSTRUCTION'] = 'Website under konstruktion';
$MESSAGE['GENERIC']['PLEASE_CHECK_BACK_SOON'] = 'Kom venligst igen senere...';
$MESSAGE['GENERIC']['PLEASE_BE_PATIENT'] = 'V&aelig;r t&aring;lmodig, dette kan godt vare et stykke tid.';
$MESSAGE['GENERIC']['ERROR_OPENING_FILE'] = 'Fejl ved &aring;bning af filen.';
$MESSAGE['GENERIC']['INVALID_ADDON_FILE'] = 'WebsiteBaker installationsfil ikke i korrekt format. Kontroller *.zip formatet.';
$MESSAGE['GENERIC']['INVALID_LANGUAGE_FILE'] = 'WebsiteBaker sprogfil ikke i korrekt format. Kontroller tekstfilen.';

$MESSAGE['MOD_FORM']['REQUIRED_FIELDS'] = 'Du skal udfylde f&oslash;lgende felter:';
$MESSAGE['MOD_FORM']['EXCESS_SUBMISSIONS'] = 'Beklager! Denne formular er blevet afsendt for mange gange indenfor den sidste time, og du vil derfor blive afvist - Pr&oslash;v igen om en times tid!';
$MESSAGE['MOD_FORM']['INCORRECT_CAPTCHA'] = 'Verifikations tallene (ogs&aring; kendt som Captcha) som du tastede er ikke korrekte. Hvis du har problemer med at l&aelig;se Captha tallene, s&aring; kontakt venligst sidens Administrator p&aring; denne mailadresse: '.SERVER_EMAIL.'';

$MESSAGE['ADDON']['RELOAD'] = 'Opdater databasen med information fra  Add-on-filer (f.eks. efter en FPT-overf&oslash;rsel).';
$MESSAGE['ADDON']['ERROR_RELOAD'] = 'Fejl under opdatering af Add-On information.';
$MESSAGE['ADDON']['MODULES_RELOADED'] = 'Moduler opdateret fejlfrit';
$MESSAGE['ADDON']['TEMPLATES_RELOADED'] = 'Skabelinger opdateret fejlfrit';
$MESSAGE['ADDON']['LANGUAGES_RELOADED'] = 'Sprog opdateret fejlfrit';
$MESSAGE['ADDON']['PRECHECK_FAILED'] = 'Add-on-installation mislykkedes. Dit system lever ikke op til de krav, denne Add-on stiller. For at f&aring; denne Add-on til at fungere p&aring; dit system, m&aring; du bringe f&oslash;lgende forhold i orden.';
$MESSAGE['ADDON']['MANUAL_INSTALLATION'] = 'N&aring;r moduler overf&oslash;res via FTP (anbefales ikke), vil modul-installationsfilerne <tt>install.php</tt>, <tt>upgrade.php</tt> og <tt>uninstall.php</tt> ikke bliver udf&oslash;rt automatisk. Disse moduler vil eventuelt ikke fungere korrekt eller kan ikke afinstalleres rigtigt.<br /><br />Du kan eksekvere modulfiler manuelt for module, der er overf&oslash;rt via FTP, nedenfor.';
$MESSAGE['ADDON']['MANUAL_INSTALLATION_WARNING'] = 'Advarsel: Eksisterende databaseregistreringer om modulerne vil g&aring; tabt. Anvend kun denne mulighed, hvis du oplever problemer med at overf&oslash;re via FTP.';

?>
