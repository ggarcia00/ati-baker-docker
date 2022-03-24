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
 * @version         $Id: FI.php 1282 2010-01-30 05:29:56Z Luisehahne $
 * @filesource		$HeadURL: http://svn.websitebaker2.org/branches/2.8.x/wb/languages/FI.php $
 * @lastmodified    $Date: 2010-01-30 06:29:56 +0100 (Sa, 30. Jan 2010) $
 *
 */

// use languageedit-module to modify this file

// Define that this file is loaded
if(!defined('LANGUAGE_LOADED')) {
define('LANGUAGE_LOADED', true);
}

// Set the language information
$language_code = 'FI';
$language_name = 'Suomi';
$language_version = '2.8';
$language_platform = '2.8.x';
$language_author = 'Pekka Koskela';
$language_license = 'GNU General Public License';

// Menu titles
$MENU['START'] = 'Alku';
$MENU['PAGES'] = 'Sivut';
$MENU['MEDIA'] = 'Tiedostot';
$MENU['ADDONS'] = 'Lis&auml;osat';
$MENU['MODULES'] = 'Moduulit';
$MENU['TEMPLATES'] = 'Sivupohjat';
$MENU['LANGUAGES'] = 'Kielet';
$MENU['PREFERENCES'] = 'Omat tiedot';
$MENU['SETTINGS'] = 'Asetukset';
$MENU['ADMINTOOLS'] = 'Admin-Tools';
$MENU['ACCESS'] = 'K&auml;ytt&auml;j&auml;t';
$MENU['USERS'] = 'K&auml;ytt&auml;j&auml;t';
$MENU['GROUPS'] = 'Ryhm&auml;';
$MENU['HELP'] = 'Apu';
$MENU['VIEW'] = 'Katsele';
$MENU['LOGOUT'] = 'Kirjaudu ulos';
$MENU['LOGIN'] = 'Kirjaudu';
$MENU['FORGOT'] = 'Salasana unohtunut';

// Section overviews
$OVERVIEW['START'] = 'P&auml;&auml;k&auml;ytt&auml;j&auml;tila';
$OVERVIEW['PAGES'] = 'Sivujen hallinta...';
$OVERVIEW['MEDIA'] = 'Tiedostojen hallinta...';
$OVERVIEW['MODULES'] = 'Moduulien hallinta...';
$OVERVIEW['TEMPLATES'] = 'Muuta sivupohjaa...';
$OVERVIEW['LANGUAGES'] = 'Muuta kieli...';
$OVERVIEW['PREFERENCES'] = 'S&auml;hk&ouml;postiosoite, salsana... ';
$OVERVIEW['SETTINGS'] = 'WebsiteBakerin asetukset...';
$OVERVIEW['USERS'] = 'K&auml;ytt&auml;j&auml;hallinta...';
$OVERVIEW['GROUPS'] = 'k&auml;ytt&auml;j&auml;ryhm&auml;t...';
$OVERVIEW['HELP'] = 'Kysymykset, vastaukset...';
$OVERVIEW['VIEW'] = 'Tarkastele sivuja...';
$OVERVIEW['ADMINTOOLS'] = 'Access the WebsiteBaker administration tools...';

// Headings
$HEADING['MODIFY_DELETE_PAGE'] = 'Muokka/poista sivu';
$HEADING['DELETED_PAGES'] = 'Poistetut sivut';
$HEADING['ADD_PAGE'] = 'Lis&auml;&auml; sivu';
$HEADING['ADD_HEADING'] = 'Lis&auml;&auml; otsikko';
$HEADING['MODIFY_PAGE'] = 'Muokkaa sivua';
$HEADING['MODIFY_PAGE_SETTINGS'] = 'Muuta sivun asetuksia';
$HEADING['MODIFY_ADVANCED_PAGE_SETTINGS'] = 'Muuta sivun lis&auml;asetuksia';
$HEADING['MANAGE_SECTIONS'] = 'Muokkaa osia';
$HEADING['MODIFY_INTRO_PAGE'] = 'Muokkaa esisivua';

$HEADING['BROWSE_MEDIA'] = 'Selaa tiedostoja';
$HEADING['CREATE_FOLDER'] = 'Luo kansio';
$HEADING['UPLOAD_FILES'] = 'Lataa palvelimelle';

$HEADING['INSTALL_MODULE'] = 'Asenna moduuli';
$HEADING['UNINSTALL_MODULE'] = 'Poista moduuli';
$HEADING['MODULE_DETAILS'] = 'Moduulin tietoja';

$HEADING['INSTALL_TEMPLATE'] = 'Asenna sivupohja';
$HEADING['UNINSTALL_TEMPLATE'] = 'Poista sivupohja';
$HEADING['TEMPLATE_DETAILS'] = 'Sivupohjan info';

$HEADING['INSTALL_LANGUAGE'] = 'Asenna kieli';
$HEADING['UNINSTALL_LANGUAGE'] = 'Poista kieli';
$HEADING['LANGUAGE_DETAILS'] = 'Kielen tiedot';

$HEADING['MY_SETTINGS'] = 'Omat tiedot';
$HEADING['MY_EMAIL'] = 'S&auml;hk&ouml;postiosoite';
$HEADING['MY_PASSWORD'] = 'Salasana';

$HEADING['GENERAL_SETTINGS'] = 'Asetukset';
$HEADING['DEFAULT_SETTINGS'] = 'Oletusasetukset';
$HEADING['SEARCH_SETTINGS'] = 'Etsinn&auml;n asetukset';
$HEADING['FILESYSTEM_SETTINGS'] = 'Tiedostoj&auml;rjestelm&auml;';
$HEADING['SERVER_SETTINGS'] = 'Palvelimen asetukset';
$HEADING['WBMAILER_SETTINGS'] = 'Mailer Settings';
$HEADING['ADMINISTRATION_TOOLS'] = 'Ty&ouml;kalut';

$HEADING['MODIFY_DELETE_USER'] = 'Muokkaa/poista k&auml;ytt&auml;j&auml;';
$HEADING['ADD_USER'] = 'Lis&auml;&auml; k&auml;ytt&auml;j&auml;';
$HEADING['MODIFY_USER'] = 'Muokka k&auml;ytt&auml;j&auml;&auml;';

$HEADING['MODIFY_DELETE_GROUP'] = 'Muokkaa/poista ryhm&auml;';
$HEADING['ADD_GROUP'] = 'Lis&auml;&auml; ryhm&auml;';
$HEADING['MODIFY_GROUP'] = 'Muokkaa ryhm&auml;&auml;';

$HEADING['ADDON_PRECHECK_FAILED'] = 'Add-On requirements not met';
$HEADING['INVOKE_MODULE_FILES'] = 'Execute module files manually';

// Other text
$TEXT['OPEN'] = 'Open';
$TEXT['ADD'] = 'Lis&auml;&auml;';
$TEXT['MODIFY'] = 'Muokkaa';
$TEXT['SETTINGS'] = 'Asetukset';
$TEXT['DELETE'] = 'Poista';
$TEXT['SAVE'] = 'Talleta';
$TEXT['RESET'] = 'Peruuta';
$TEXT['LOGIN'] = 'Kirjaudu';
$TEXT['RELOAD'] = 'Lataa uudelleen';
$TEXT['CANCEL'] = 'Peruuta';
$TEXT['NAME'] = 'Nimi';
$TEXT['PLEASE_SELECT'] = 'Valitset';
$TEXT['TITLE'] = 'Otsikko';
$TEXT['PARENT'] = 'Is&auml;nt&auml;';
$TEXT['TYPE'] = 'Tyyppi';
$TEXT['VISIBILITY'] = 'N&auml;kyvyys';
$TEXT['PRIVATE'] = 'Yksityinen';
$TEXT['PUBLIC'] = 'Julkinen';
$TEXT['NONE'] = 'Ei mik&auml;&auml;n';
$TEXT['NONE_FOUND'] = 'Ei l&ouml;ytynyt';
$TEXT['CURRENT'] = 'Nykyinen';
$TEXT['CHANGE'] = 'Muuta';
$TEXT['WINDOW'] = 'Ikkuna';
$TEXT['DESCRIPTION'] = 'Kuvaus';
$TEXT['KEYWORDS'] = 'Avainsanat';
$TEXT['ADMINISTRATORS'] = 'P&auml;&auml;k&auml;ytt&auml;j&auml;t';
$TEXT['PRIVATE_VIEWERS'] = 'Yksityiset';
$TEXT['EXPAND'] = 'Laajenna';
$TEXT['COLLAPSE'] = 'Kutista';
$TEXT['MOVE_UP'] = 'Siirr&auml; yl&ouml;s';
$TEXT['MOVE_DOWN'] = 'Aiirr&auml; alas';
$TEXT['RENAME'] = 'Nime&auml; uudelleen';
$TEXT['MODIFY_SETTINGS'] = 'Muuta asetuksia';
$TEXT['MODIFY_CONTENT'] = 'Muokkaa sis&auml;lt&ouml;&auml;t';
$TEXT['VIEW'] = 'Katsele';
$TEXT['UP'] = 'Yl&ouml;s';
$TEXT['FORGOTTEN_DETAILS'] = 'Salasa unohtunut?';
$TEXT['NEED_TO_LOGIN'] = 'Kirjaudu?';
$TEXT['SEND_DETAILS'] = 'L&auml;het&auml; tiedot';
$TEXT['USERNAME'] = 'K&auml;ytt&auml;j&auml;nimi';
$TEXT['PASSWORD'] = 'Salasana';
$TEXT['HOME'] = 'Koti';
$TEXT['TARGET_FOLDER'] = 'Kohdekansio';
$TEXT['OVERWRITE_EXISTING'] = 'Korvaa';
$TEXT['FILE'] = 'Tiedosto';
$TEXT['FILES'] = 'Tiedostot';
$TEXT['FOLDER'] = 'Kansio';
$TEXT['FOLDERS'] = 'Kansiot';
$TEXT['CREATE_FOLDER'] = 'Luo kansio';
$TEXT['UPLOAD_FILES'] = 'Lataa palvelimelle';
$TEXT['CURRENT_FOLDER'] = 'Nykyinen kansio';
$TEXT['TO'] = 'Minne';
$TEXT['FROM'] = 'Mist&auml;';
$TEXT['INSTALL'] = 'Asenna';
$TEXT['UNINSTALL'] = 'Poista';
$TEXT['VIEW_DETAILS'] = 'N&auml;yt&auml; tiedot';
$TEXT['DISPLAY_NAME'] = 'Nimi';
$TEXT['AUTHOR'] = 'Luonut';
$TEXT['VERSION'] = 'Versio';
$TEXT['DESIGNED_FOR'] = 'Suunniteltu';
$TEXT['DESCRIPTION'] = 'Kuvaus';
$TEXT['EMAIL'] = 'S&auml;hk&ouml;posti';
$TEXT['LANGUAGE'] = 'Kieli';
$TEXT['TIMEZONE'] = 'Aikavy&ouml;hyke';
$TEXT['CURRENT_PASSWORD'] = 'Vanha salasana';
$TEXT['NEW_PASSWORD'] = 'Uusi salasana';
$TEXT['RETYPE_NEW_PASSWORD'] = 'Kirjoita uudelleen';
$TEXT['ACTIVE'] = 'K&auml;yt&ouml;ss&auml;';
$TEXT['DISABLED'] = 'Poistettu k&auml;yt&ouml;st&auml;';
$TEXT['ENABLED'] = 'Salli';
$TEXT['RETYPE_PASSWORD'] = 'Kirjoita uudeleen';
$TEXT['GROUP'] = 'Ryhm&auml;';
$TEXT['SYSTEM_PERMISSIONS'] = 'Oikeudet';
$TEXT['MODULE_PERMISSIONS'] = 'Moduulien hallinta';
$TEXT['SHOW_ADVANCED'] = 'N&auml;yt&auml; lis&auml;asetukset';
$TEXT['HIDE_ADVANCED'] = 'Piilota lis&auml;asetukset';
$TEXT['BASIC'] = 'Perus';
$TEXT['ADVANCED'] = 'Lis&auml;asetukset';
$TEXT['WEBSITE'] = 'www-sivu';
$TEXT['DEFAULT'] = 'Nykyinen';
$TEXT['KEYWORDS'] = 'Avainsanat';
$TEXT['TEXT'] = 'Teksti';
$TEXT['HEADER'] = 'Yl&auml;tunniste';
$TEXT['FOOTER'] = 'Alatunniste';
$TEXT['TEMPLATE'] = 'Sivupohja';
$TEXT['THEME'] = 'Backend-Theme';
$TEXT['INSTALLATION'] = 'Asentaminen';
$TEXT['DATABASE'] = 'Tietokanta';
$TEXT['HOST'] = 'Palvelin';
$TEXT['INTRO'] = 'Esisivu';
$TEXT['PAGE'] = 'Sivu';
$TEXT['SIGNUP'] = 'Rekister&ouml;ityminen';
$TEXT['PHP_ERROR_LEVEL'] = 'PHP:n virheraportointitapa';
$TEXT['ADMIN'] = 'Admin';
$TEXT['PATH'] = 'Polku';
$TEXT['URL'] = 'URL';
$TEXT['FRONTEND'] = 'Johdanto';
$TEXT['EXTENSION'] = 'Liite';
$TEXT['TABLE_PREFIX'] = 'Taulukon ominaisuudet';
$TEXT['CHANGES'] = 'Muutokset';
$TEXT['ADMINISTRATION'] = 'Administration';
$TEXT['FORGOT_DETAILS'] = 'Peruuta tiedot?';
$TEXT['LOGGED_IN'] = 'Kirjautunut';
$TEXT['WELCOME_BACK'] = 'N&auml;kemiin';
$TEXT['FULL_NAME'] = 'Nimi';
$TEXT['ACCOUNT_SIGNUP'] = 'Kirjaunut';
$TEXT['LINK'] = 'Linkki';
$TEXT['ANCHOR'] = 'Anchor';
$TEXT['TARGET'] = 'Kohde';
$TEXT['NEW_WINDOW'] = 'Uuteen ikkunaan';
$TEXT['SAME_WINDOW'] = 'Nykyiseen ikkunaan';
$TEXT['TOP_FRAME'] = 'Frameset sprengen';
$TEXT['PAGE_LEVEL_LIMIT'] = 'Tasoja enint&auml;&auml;n';
$TEXT['SUCCESS'] = 'Onnistui';
$TEXT['ERROR'] = 'Virhe';
$TEXT['ARE_YOU_SURE'] = 'Oletko varma?';
$TEXT['YES'] = 'Kyll&auml;';
$TEXT['NO'] = 'Ei';
$TEXT['SYSTEM_DEFAULT'] = 'Oletus';
$TEXT['PAGE_TITLE'] = 'Sivun otsikko';
$TEXT['MENU_TITLE'] = 'Valikkoteksti';
$TEXT['ACTIONS'] = 'Tila';
$TEXT['UNKNOWN'] = 'Tuntematon';
$TEXT['BLOCK'] = 'Tekstialue';
$TEXT['SEARCH'] = 'Etsi';
$TEXT['SEARCHING'] = 'Etsii..';
$TEXT['POST'] = 'Liite';
$TEXT['COMMENT'] = 'Kommentti';
$TEXT['COMMENTS'] = 'Kommentit';
$TEXT['COMMENTING'] = 'Kommentoi';
$TEXT['SHORT'] = 'Lyhyesti';
$TEXT['LONG'] = 'Lis&auml;&auml;';
$TEXT['LOOP'] = 'Silmukka';
$TEXT['FIELD'] = 'Kentt&auml;';
$TEXT['REQUIRED'] = 'Pakollinen';
$TEXT['LENGTH'] = 'Pituus';
$TEXT['MESSAGE'] = 'Viesti';
$TEXT['SUBJECT'] = 'Aihe';
$TEXT['MATCH'] = 'Vastaavuus';
$TEXT['ALL_WORDS'] = 'Joka sana';
$TEXT['ANY_WORDS'] = 'Jokin sanoista';
$TEXT['EXACT_MATCH'] = 'Tarkalleen';
$TEXT['SHOW'] = 'N&auml;yt&auml;';
$TEXT['HIDE'] = 'Piilota';
$TEXT['START_PUBLISHING'] = 'Julkaise';
$TEXT['FINISH_PUBLISHING'] = 'Lopeta julkaisu';
$TEXT['DATE'] = 'P&auml;iv&auml;ys';
$TEXT['START'] = 'Alku';
$TEXT['END'] = 'Loppu';
$TEXT['IMAGE'] = 'Kuva';
$TEXT['ICON'] = 'Kuvake';
$TEXT['SECTION'] = 'Osa';
$TEXT['DATE_FORMAT'] = 'P&auml;iv&auml;yksen muoto';
$TEXT['TIME_FORMAT'] = 'Ajan muoto ';
$TEXT['RESULTS'] = 'Tulokset';
$TEXT['RESIZE'] = 'Muuta kokoa';
$TEXT['MANAGE'] = 'Hallinnoi';
$TEXT['CODE'] = 'Koodi';
$TEXT['WIDTH'] = 'Leveys';
$TEXT['HEIGHT'] = 'Korkeus';
$TEXT['MORE'] = 'Lis&auml;&auml;';
$TEXT['READ_MORE'] = 'Lue lis&auml;&auml;..';
$TEXT['CHANGE_SETTINGS'] = 'Muuta asetuksia';
$TEXT['CURRENT_PAGE'] = 'Nykyinen sivu';
$TEXT['CLOSE'] = 'Sulje';
$TEXT['INTRO_PAGE'] = 'Esisivu';
$TEXT['INSTALLATION_URL'] = 'Asennus URL';
$TEXT['INSTALLATION_PATH'] = 'Asennuspolku';
$TEXT['PAGE_EXTENSION'] = 'Sivun tarkennin';
$TEXT['NO_RESULTS'] = 'Ei l&ouml;ytynyt';
$TEXT['WEBSITE_TITLE'] = 'Sivuston otsikko';
$TEXT['WEBSITE_DESCRIPTION'] = 'Sivuston kuvaus';
$TEXT['WEBSITE_KEYWORDS'] = 'Sivusaton avainsanat';
$TEXT['WEBSITE_HEADER'] = 'Johdanto';
$TEXT['WEBSITE_FOOTER'] = 'Alatunniste';
$TEXT['RESULTS_HEADER'] = 'Tulokset';
$TEXT['RESULTS_LOOP'] = 'Tulossilmukka';
$TEXT['RESULTS_FOOTER'] = 'Alatuniste';
$TEXT['LEVEL'] = 'Taso';
$TEXT['NOT_FOUND'] = 'Ei l&ouml;ytynyt';
$TEXT['PAGE_SPACER'] = 'Sivujen erotin ';
$TEXT['MATCHING'] = 'Etsii';
$TEXT['TEMPLATE_PERMISSIONS'] = 'Sivupohjat';
$TEXT['PAGES_DIRECTORY'] = 'Sivukansio';
$TEXT['MEDIA_DIRECTORY'] = 'Tiedostokansio';
$TEXT['FILE_MODE'] = 'Tiedostomuoto';
$TEXT['USER'] = 'K&auml;ytt&auml;j&auml;';
$TEXT['OTHERS'] = 'Muut';
$TEXT['READ'] = 'Lue';
$TEXT['WRITE'] = 'Kirjoita';
$TEXT['EXECUTE'] = 'Suorita';
$TEXT['SMART_LOGIN'] = 'Kirjautuminen';
$TEXT['REMEMBER_ME'] = 'Palauta ';
$TEXT['FILESYSTEM_PERMISSIONS'] = 'Tiedosto-oikeudet';
$TEXT['DIRECTORIES'] = 'Kansiot';
$TEXT['DIRECTORY_MODE'] = 'Kansion muoto';
$TEXT['LIST_OPTIONS'] = 'Listan tyyppi';
$TEXT['OPTION'] = 'Lis&auml;asteus';
$TEXT['ALLOW_MULTIPLE_SELECTIONS'] = 'Salli monivalinta';
$TEXT['TEXTFIELD'] = 'Tekstikentt&auml;';
$TEXT['TEXTAREA'] = 'Tekstialue';
$TEXT['SELECT_BOX'] = 'Valinta';
$TEXT['CHECKBOX_GROUP'] = 'Valintaryhm&auml;';
$TEXT['RADIO_BUTTON_GROUP'] = 'Radiopainikkeet';
$TEXT['SIZE'] = 'Koko';
$TEXT['DEFAULT_TEXT'] = 'Oletusteksti';
$TEXT['SEPERATOR'] = 'Erotin';
$TEXT['BACK'] = 'Paluu';
$TEXT['UNDER_CONSTRUCTION'] = 'Ty&ouml;n alla';
$TEXT['MULTISELECT'] = 'Monivalinta';
$TEXT['SHORT_TEXT'] = 'Lyhyesti';
$TEXT['LONG_TEXT'] = 'Tarkemmin';
$TEXT['HOMEPAGE_REDIRECTION'] = 'Kotisivun uudelleen ohjaus';
$TEXT['HEADING'] = 'Otsikko';
$TEXT['MULTIPLE_MENUS'] = 'Monivalikko';
$TEXT['REGISTERED'] = 'Rekister&ouml;itynyt';
$TEXT['SECTION_BLOCKS'] = 'Osa';
$TEXT['REGISTERED_VIEWERS'] = 'Rekister&ouml;ity';
$TEXT['ALLOWED_VIEWERS'] = 'Allowed Viewers';
$TEXT['SUBMISSION_ID'] = 'Alasivun ID';
$TEXT['SUBMISSIONS'] = 'Alasivu';
$TEXT['SUBMITTED'] = 'Siirretty alisivuksi';
$TEXT['MAX_SUBMISSIONS_PER_HOUR'] = 'Salasana l&auml;hetet&auml;&auml;n vain kerran tunnissa';
$TEXT['SUBMISSIONS_STORED_IN_DATABASE'] = 'Salasana talletettu tietokantaan';
$TEXT['EMAIL_ADDRESS'] = 'S&auml;hk&ouml;postiosoite';
$TEXT['CUSTOM'] = 'Asiakas';
$TEXT['ANONYMOUS'] = 'Anonyymi';
$TEXT['SERVER_OPERATING_SYSTEM'] = 'Palvelimen k&auml;ytt&ouml;j&auml;rjestelm&auml;';
$TEXT['WORLD_WRITEABLE_FILE_PERMISSIONS'] = 'Kirjoitusoikeudet';
$TEXT['LINUX_UNIX_BASED'] = 'Linux/Unix';
$TEXT['WINDOWS'] = 'Windows';
$TEXT['HOME_FOLDER'] = 'Kotikansio';
$TEXT['HOME_FOLDERS'] = 'Kotikansiot';
$TEXT['PAGE_TRASH'] = 'Roskakori';
$TEXT['INLINE'] = 'Per&auml;kk&auml;in';
$TEXT['SEPARATE'] = 'Erill&auml;&auml;n';
$TEXT['DELETED'] = 'Poistettu';
$TEXT['VIEW_DELETED_PAGES'] = 'N&auml;yt&auml; poistetut';
$TEXT['EMPTY_TRASH'] = 'Tyhjenn&auml; roskakori';
$TEXT['TRASH_EMPTIED'] = 'Tyhjennetty';
$TEXT['ADD_SECTION'] = 'Asenna osa';
$TEXT['POST_HEADER'] = 'Alaotsikko';
$TEXT['POST_FOOTER'] = 'Lis&auml;alaviite';
$TEXT['POSTS_PER_PAGE'] = 'Osaa sivulla';
$TEXT['RESIZE_IMAGE_TO'] = 'Muuta kuvan koko';
$TEXT['UNLIMITED'] = 'Rajaton';
$TEXT['OF'] = 'Of';
$TEXT['OUT_OF'] = 'Out Of';
$TEXT['NEXT'] = 'Seuraava';
$TEXT['PREVIOUS'] = 'Edellinen';
$TEXT['NEXT_PAGE'] = 'Seuraava sivu';
$TEXT['PREVIOUS_PAGE'] = 'Edellinen sivu';
$TEXT['ON'] = 'On';
$TEXT['LAST_UPDATED_BY'] = 'P&auml;ivitetty';
$TEXT['RESULTS_FOR'] = 'Tulokset';
$TEXT['TIME'] = 'Aika';
$TEXT['REDIRECT_AFTER'] = 'Redirect after';
$TEXT['WYSIWYG_STYLE'] = 'WYSIWYG tyyli';
$TEXT['WYSIWYG_EDITOR'] = 'WYSIWYG muokkain';
$TEXT['SERVER_EMAIL'] = 'Palvelimen s&auml;hk&ouml;posti';
$TEXT['MENU'] = 'Valikko';
$TEXT['MANAGE_GROUPS'] = 'Ryhmien hallinta';
$TEXT['MANAGE_USERS'] = 'K&auml;ytt&auml;j&auml;hallinta';
$TEXT['PAGE_LANGUAGES'] = 'Sivun kieli';
$TEXT['HIDDEN'] = 'Piilotettu';
$TEXT['MAIN'] = 'P&auml;&auml;';
$TEXT['RENAME_FILES_ON_UPLOAD'] = 'Nime&auml; ladatut';
$TEXT['APP_NAME'] = 'Sovelluksen nimi';
$TEXT['SESSION_IDENTIFIER'] = 'Tunniste';
$TEXT['SEC_ANCHOR'] = 'Section-Anchor text';
$TEXT['BACKUP'] = 'Varmuuskopioi';
$TEXT['RESTORE'] = 'Palauta';
$TEXT['BACKUP_DATABASE'] = 'Varmista tietokanta';
$TEXT['RESTORE_DATABASE'] = 'Palauta tietokanta';
$TEXT['BACKUP_ALL_TABLES'] = 'Backup all tables in database';
$TEXT['BACKUP_WB_SPECIFIC'] = 'Backup only WB-specific tables';
$TEXT['BACKUP_MEDIA'] = 'Varmista...';
$TEXT['RESTORE_MEDIA'] = 'Palauta...';
$TEXT['ADMINISTRATION_TOOL'] = 'Ty&ouml;kalu';
$TEXT['CAPTCHA_VERIFICATION'] = 'Captcha varmistus';
$TEXT['VERIFICATION'] = 'Varmistus';
$TEXT['DEFAULT_CHARSET'] = 'Oletusmerkrkist&ouml;';
$TEXT['CHARSET'] = 'Merkist&ouml;';
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
$MESSAGE['FRONTEND']['SORRY_NO_VIEWING_PERMISSIONS'] = 'Oikeutesi eiv&auml;t riit&auml;...';
$MESSAGE['FRONTEND']['SORRY_NO_ACTIVE_SECTIONS'] = 'Sorry, no active content to display';

$MESSAGE['ADMIN']['INSUFFICIENT_PRIVELLIGES'] = 'Oikeutesi eiv&auml;t riit&auml;...';

$MESSAGE['LOGIN']['BOTH_BLANK'] = 'Kirjoita k&auml;ytt&auml;j&auml;tunnus ja salasana';
$MESSAGE['LOGIN']['USERNAME_BLANK'] = 'K&auml;ytt&auml;j&auml;tunnus!';
$MESSAGE['LOGIN']['PASSWORD_BLANK'] = 'Salasana';
$MESSAGE['LOGIN']['USERNAME_TOO_SHORT'] = 'Tunnus liian lyhyt';
$MESSAGE['LOGIN']['PASSWORD_TOO_SHORT'] = 'Salasana liian lyhyt';
$MESSAGE['LOGIN']['USERNAME_TOO_LONG'] = 'Lian pitk&auml; tunnus';
$MESSAGE['LOGIN']['PASSWORD_TOO_LONG'] = 'Liian pitk&auml; salasana';
$MESSAGE['LOGIN']['AUTHENTICATION_FAILED'] = 'K&auml;ytt&auml;j&auml;tunnus/salsana v&auml;&auml;r&auml;';

$MESSAGE['SIGNUP']['NO_EMAIL'] = 'Anna s&auml;hk&ouml;postiosoite';
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

$MESSAGE['FORGOT_PASS']['NO_DATA'] = 'Anna s&auml;hk&ouml;postiosoite';
$MESSAGE['FORGOT_PASS']['EMAIL_NOT_FOUND'] = 'Virheellinen s&auml;hk&ouml;postiosoite';
$MESSAGE['FORGOT_PASS']['CANNOT_EMAIL'] = 'Salasanan postitus ei onnistu, ota yhteytt&auml; p&auml;&auml;k&auml;ytt&auml;j&auml;&auml;n';
$MESSAGE['FORGOT_PASS']['PASSWORD_RESET'] = 'Salasana ja k&auml;ytt&auml;j&auml;tunnus postitettu';
$MESSAGE['FORGOT_PASS']['ALREADY_RESET'] = 'Salasanan vaiho vain kerran tunnissa!';

$MESSAGE['START']['WELCOME_MESSAGE'] = 'Tervetuloa sivuston hallintaan';
$MESSAGE['START']['INSTALL_DIR_EXISTS'] = 'Poista asennuskansio!';
$MESSAGE['START']['CURRENT_USER'] = 'Olet kirjautunut nimell&auml;:';

$MESSAGE['SETTINGS']['UNABLE_OPEN_CONFIG'] = 'Konfigurointitiedostoa ei voi vavata';
$MESSAGE['SETTINGS']['UNABLE_WRITE_CONFIG'] = 'Konfiguraation kirjoitus ei onnistu';
$MESSAGE['SETTINGS']['SAVED'] = 'Asetusten talletus onnitui';
$MESSAGE['SETTINGS']['MODE_SWITCH_WARNING'] = 'Klikattaessa h&auml;vi&auml;v&auml;t kaikki tallettamattomat muutokset';
$MESSAGE['SETTINGS']['WORLD_WRITEABLE_WARNING'] = 'Susitellaan ainoastaan testitarkoituksiin';

$MESSAGE['USERS']['ADDED'] = 'Lis&auml;tty';
$MESSAGE['USERS']['SAVED'] = 'Talletettu';
$MESSAGE['USERS']['DELETED'] = 'Poistettu';
$MESSAGE['USERS']['NO_GROUP'] = 'Valitse ryhm&auml;!';
$MESSAGE['USERS']['USERNAME_TOO_SHORT'] = 'K&auml;ytt&auml;j&auml;tunnus liian lyhyt';
$MESSAGE['USERS']['PASSWORD_TOO_SHORT'] = 'Salasana liian lyhyt';
$MESSAGE['USERS']['PASSWORD_MISMATCH'] = 'Salasanat eiv&auml;t t&auml;sm&auml;&auml;';
$MESSAGE['USERS']['INVALID_EMAIL'] = 'Virheellinen s&auml;hk&ouml;postiosoite';
$MESSAGE['USERS']['EMAIL_TAKEN'] = 'S&auml;hk&ouml;postiosoite k&auml;yt&ouml;ss&auml;!';
$MESSAGE['USERS']['USERNAME_TAKEN'] = 'K&auml;ytt&auml;j&auml;tynnus varattu, valitse uusi';
$MESSAGE['USERS']['CHANGING_PASSWORD'] = 'Jos haluat vaihtaa salasanan, t&auml;yt&auml; vain ko kent&auml;t';
$MESSAGE['USERS']['CONFIRM_DELETE'] = 'Haluatko poistaa k&auml;ytt&auml;j&auml;n?';

$MESSAGE['GROUPS']['ADDED'] = 'Ryhm&auml;n lis&auml;ys onnistui';
$MESSAGE['GROUPS']['SAVED'] = 'Rym&auml; talletettu';
$MESSAGE['GROUPS']['DELETED'] = 'Ryhm&auml; poistettu';
$MESSAGE['GROUPS']['GROUP_NAME_BLANK'] = 'Ryhm&auml;n nimi puuttuu';
$MESSAGE['GROUPS']['CONFIRM_DELETE'] = 'Haluatko poistaa ryhm&auml;n ja kakki sen k&auml;ytt&auml;j&auml;t?';
$MESSAGE['GROUPS']['NO_GROUPS_FOUND'] = 'Ryhm&auml;&auml; ei l&ouml;ydy';
$MESSAGE['GROUPS']['GROUP_NAME_EXISTS'] = 'Ryhm&auml;n nimi varattu';

$MESSAGE['PREFERENCES']['DETAILS_SAVED'] = 'Tiedot tallennettu';
$MESSAGE['PREFERENCES']['EMAIL_UPDATED'] = 'S&auml;hp&ouml;stiosoite p&auml;ivitetty';
$MESSAGE['PREFERENCES']['CURRENT_PASSWORD_INCORRECT'] = 'Nykyinen salasana v&auml;&auml;r&auml;';
$MESSAGE['PREFERENCES']['PASSWORD_CHANGED'] = 'Salasanan vaiho onnistui';

$MESSAGE['TEMPLATES']['CHANGE_TEMPLATE_NOTICE'] = 'Sivupohjan voi vaihtaa asetukset-kohdasta';

$MESSAGE['MEDIA']['DIR_DOT_DOT_SLASH'] = 'Merkki ../ ei kelpaa ';
$MESSAGE['MEDIA']['DIR_DOES_NOT_EXIST'] = 'Kansion nimi varattu';
$MESSAGE['MEDIA']['TARGET_DOT_DOT_SLASH'] = 'Merkki&auml; ../ ei voi k&auml;ytt&auml;&auml; ';
$MESSAGE['MEDIA']['NAME_DOT_DOT_SLASH'] = 'Merkki&auml; ../ ei voi k&auml;ytt&auml;&auml;';
$MESSAGE['MEDIA']['NAME_INDEX_PHP'] = 'Nimi index.php ei kelpaa';
$MESSAGE['MEDIA']['NONE_FOUND'] = 'Tiedostokansio tyhj&auml;';
$MESSAGE['MEDIA']['FILE_NOT_FOUND'] = 'Tiedostoa ei l&ouml;ydy';
$MESSAGE['MEDIA']['DELETED_FILE'] = ' Tiedosto pistettu';
$MESSAGE['MEDIA']['DELETED_DIR'] = 'Kansio poistettu';
$MESSAGE['MEDIA']['CONFIRM_DELETE'] = 'Halutko poistaa tiedoston/kansion?';
$MESSAGE['MEDIA']['CANNOT_DELETE_FILE'] = 'Tiedostoa ei voi poistaa';
$MESSAGE['MEDIA']['CANNOT_DELETE_DIR'] = 'Kansion poistamienen ei onnistu';
$MESSAGE['MEDIA']['BLANK_NAME'] = 'Et antanut nime&auml;';
$MESSAGE['MEDIA']['BLANK_EXTENSION'] = 'Et kirjoittanut tiedoston tarkennetta';
$MESSAGE['MEDIA']['RENAMED'] = 'Udelleen nimetty';
$MESSAGE['MEDIA']['CANNOT_RENAME'] = 'Ei voinut uudelleen nimet&auml;';
$MESSAGE['MEDIA']['FILE_EXISTS'] = 'Saman niminen tiedosto olemassa';
$MESSAGE['MEDIA']['DIR_EXISTS'] = 'Saman niminen kansio olemassa';
$MESSAGE['MEDIA']['DIR_MADE'] = 'Kansio luotu';
$MESSAGE['MEDIA']['DIR_NOT_MADE'] = 'Kansiota ei voi luoda';
$MESSAGE['MEDIA']['SINGLE_UPLOADED'] = ' tiedosto ladattu';
$MESSAGE['MEDIA']['UPLOADED'] = ' tiedostot ladattu';

$MESSAGE['PAGES']['ADDED'] = 'Sivu lis&auml;tty';
$MESSAGE['PAGES']['ADDED_HEADING'] = 'Otsikko lis&auml;tty';
$MESSAGE['PAGES']['PAGE_EXISTS'] = 'Otsikko k&auml;yt&ouml;ss&auml;';
$MESSAGE['PAGES']['CANNOT_CREATE_ACCESS_FILE'] = 'K&auml;ytt&ouml;oiketesi eiv&auml;t riit&auml;';
$MESSAGE['PAGES']['CANNOT_DELETE_ACCESS_FILE'] = 'Oikeutesi eiv&auml;t riit&auml;';
$MESSAGE['PAGES']['NOT_FOUND'] = 'Sivua ei l&ouml;ydy';
$MESSAGE['PAGES']['SAVED'] = 'Sivu tallennettu';
$MESSAGE['PAGES']['SAVED_SETTINGS'] = 'Sivun asetukset tallennettu';
$MESSAGE['PAGES']['NOT_SAVED'] = 'Tannennusvirhe!';
$MESSAGE['PAGES']['DELETE_CONFIRM'] = 'Poistetaanko sivu ja sen alisivut?';
$MESSAGE['PAGES']['DELETED'] = 'Sivu poistettu';
$MESSAGE['PAGES']['RESTORED'] = 'Sivusto tallennettu';
$MESSAGE['PAGES']['BLANK_PAGE_TITLE'] = 'Kirjoita sivun nimi';
$MESSAGE['PAGES']['BLANK_MENU_TITLE'] = 'Kirjoita valikkon tule teksti';
$MESSAGE['PAGES']['REORDERED'] = 'Sivut j&auml;rjestelty uudelleen';
$MESSAGE['PAGES']['CANNOT_REORDER'] = 'Sivujen j&auml;rjestely ei onnistu';
$MESSAGE['PAGES']['INSUFFICIENT_PERMISSIONS'] = 'Oikeutesi eiv&auml;t riit&auml;';
$MESSAGE['PAGES']['INTRO_NOT_WRITABLE'] = 'Ei voi kirjoittaa /pages/intro.php (oikeutesi eiv&auml;t riit&auml;)';
$MESSAGE['PAGES']['INTRO_SAVED'] = 'Esisivu tallennettu';
$MESSAGE['PAGES']['LAST_MODIFIED'] = 'P&auml;ivitt&auml;nyt';
$MESSAGE['PAGES']['INTRO_LINK'] = 'Muuta esisivua';
$MESSAGE['PAGES']['SECTIONS_PROPERTIES_SAVED'] = 'Asetukset tallennettu';
$MESSAGE['PAGES']['RETURN_TO_PAGES'] = 'Palaa sivuille...';

$MESSAGE['GENERIC']['FILL_IN_ALL'] = 'Palaa ja t&auml;yt&auml; kaikki kent&auml;t';
$MESSAGE['GENERIC']['FILE_TYPE'] = 'Tiedostotyypin tulee olla jokin seuraavista:';
$MESSAGE['GENERIC']['FILE_TYPES'] = 'Tiedostotyypin tulee olla jjokin seuraavista:';
$MESSAGE['GENERIC']['CANNOT_UPLOAD'] = 'Lataus ei onnistu';
$MESSAGE['GENERIC']['ALREADY_INSTALLED'] = 'Asennettu, uudelleen asennus ei onnistu';
$MESSAGE['GENERIC']['NOT_INSTALLED'] = 'Ei ole asennettu';
$MESSAGE['GENERIC']['CANNOT_UNINSTALL'] = 'Ei voi poistaa';
$MESSAGE['GENERIC']['CANNOT_UNZIP'] = 'Zip-tiedostoa ei voi purkaa';
$MESSAGE['GENERIC']['INSTALLED'] = 'Asennettu';
$MESSAGE['GENERIC']['UPGRADED'] = 'P&auml;ivitetty';
$MESSAGE['GENERIC']['UNINSTALLED'] = 'Poistettu';
$MESSAGE['GENERIC']['BAD_PERMISSIONS'] = 'Kohdekansioon ei voi kirjoittaa';
$MESSAGE['GENERIC']['INVALID'] = 'Ladatussa tiedostossa virhe';
$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IN_USE'] = 'Tiedosto k&auml;yt&ouml;ss&auml;, tiedostoa ei voi poistaa';

$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IN_USE_TMPL'] = "<br /><br />{{type}} <b>{{type_name}}</b> could not be uninstalled, because it is still in use on {{pages}}.<br /><br />";
$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IN_USE_TMPL_PAGES'] = "this page;these pages";
$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IS_DEFAULT_TEMPLATE'] = "Can't uninstall the template <b>{{name}}</b>, because it is the default template!";

$MESSAGE['GENERIC']['WEBSITE_UNDER_CONSTRUCTION'] = 'Website Under Construction';
$MESSAGE['GENERIC']['PLEASE_CHECK_BACK_SOON'] = 'Tervetuluoa my&ouml;hemmin...';
$MESSAGE['GENERIC']['PLEASE_BE_PATIENT'] = 'Hetkinen...';
$MESSAGE['GENERIC']['ERROR_OPENING_FILE'] = 'Virhe tiedostoa avattaessa.';
$MESSAGE['GENERIC']['INVALID_ADDON_FILE'] = 'Invalid WebsiteBaker installation file. Please check the *.zip format.';
$MESSAGE['GENERIC']['INVALID_LANGUAGE_FILE'] = 'Invalid WebsiteBaker language file. Please check the text file.';

$MESSAGE['MOD_FORM']['REQUIRED_FIELDS'] = 'T&auml;yt&auml; kent&auml;t';
$MESSAGE['MOD_FORM']['EXCESS_SUBMISSIONS'] = 'Rajoitus voimassa, yrit&auml; tunnin kuluttua uudelleen';
$MESSAGE['MOD_FORM']['INCORRECT_CAPTCHA'] = 'Tarkistusluku (Captcha) virheellinen ';

$MESSAGE['ADDON']['RELOAD'] = 'Update database with information from Add-on files (e.g. after FTP upload).';
$MESSAGE['ADDON']['ERROR_RELOAD'] = 'Error while updating the Add-On information.';
$MESSAGE['ADDON']['MODULES_RELOADED'] = 'Moduulin lataus onnistui';
$MESSAGE['ADDON']['TEMPLATES_RELOADED'] = 'Sivupohjan lataus onnistui';
$MESSAGE['ADDON']['LANGUAGES_RELOADED'] = 'Kielen lataus onnistui';
$MESSAGE['ADDON']['PRECHECK_FAILED'] = 'Add-on installation failed. Your system does not fulfill the requirements of this Add-on. To make this Add-on working on your system, please fix the issues summarized below.';
$MESSAGE['ADDON']['MANUAL_INSTALLATION'] = 'When modules are uploaded via FTP (not recommended), the module installation files <tt>install.php</tt>, <tt>upgrade.php</tt> or <tt>uninstall.php</tt> will not be executed automatically. Those modules may not work correct or do not uninstall properly.<br /><br />You can execute the module files manually for modules uploaded via FTP below.';
$MESSAGE['ADDON']['MANUAL_INSTALLATION_WARNING'] = 'Warning: Existing module database entries will get lost. Only use this option if you experience problems with modules uploaded via FTP.';

?>