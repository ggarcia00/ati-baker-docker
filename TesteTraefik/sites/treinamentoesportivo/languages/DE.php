<?php
/**
 *
 * @category        framework
 * @package         language
 * @author          WebsiteBaker Project
 * @copyright       2004-2009, Ryan Djurovich
 * @copyright       2009-2010, Website Baker Org. e.V.
 * @link			http://www.website baker2.org/
 * @license         http://www.gnu.org/licenses/gpl.html
 * @platform        WebsiteBaker 2.8.x
 * @requirements    PHP 4.3.4 and higher
 * @version         $Id: DE.php 1282 2010-01-30 05:29:56Z Luisehahne $
 * @filesource		$HeadURL: http://svn.websitebaker2.org/branches/2.8.x/wb/languages/DE.php $
 * @lastmodified    $Date: 2010-01-30 06:29:56 +0100 (Sa, 30. Jan 2010) $
 *
 */

// use languageedit-module to modify this file

// Define that this file is loaded
if(!defined('LANGUAGE_LOADED')) {
define('LANGUAGE_LOADED', true);
}

// Set the language information
$language_code = 'DE';
$language_name = 'Deutsch';
$language_version = '2.8';
$language_platform = '2.8.x';
$language_author = 'Stefan Braunewell, Matthias Gallas';
$language_license = 'GNU General Public License';

// Menu titles
$MENU['START'] = 'Start';
$MENU['PAGES'] = 'Seiten';
$MENU['MEDIA'] = 'Medien';
$MENU['ADDONS'] = 'Erweiterungen';
$MENU['MODULES'] = 'Module';
$MENU['TEMPLATES'] = 'Designvorlagen';
$MENU['LANGUAGES'] = 'Sprachen';
$MENU['PREFERENCES'] = 'Einstellungen';
$MENU['SETTINGS'] = 'Optionen';
$MENU['ADMINTOOLS'] = 'Admin-Tools';
$MENU['ACCESS'] = 'Benutzerverwaltung';
$MENU['USERS'] = 'Benutzer';
$MENU['GROUPS'] = 'Gruppen';
$MENU['HELP'] = 'Hilfe';
$MENU['VIEW'] = 'Ansicht';
$MENU['LOGOUT'] = 'Abmelden';
$MENU['LOGIN'] = 'Anmeldung';
$MENU['FORGOT'] = 'Anmelde-Details anfordern';

// Section overviews
$OVERVIEW['START'] = '&Uuml;berblick &uuml;ber die Verwaltung';
$OVERVIEW['PAGES'] = 'Verwaltung Ihrer Webseiten...';
$OVERVIEW['MEDIA'] = 'Verwaltung der im Medienordner gespeicherten Dateien...';
$OVERVIEW['MODULES'] = 'Verwaltung der WebsiteBaker Module...';
$OVERVIEW['TEMPLATES'] = '&Auml;ndern des Designs Ihrer Webseite mit Vorlagen...';
$OVERVIEW['LANGUAGES'] = 'Sprachen verwalten...';
$OVERVIEW['PREFERENCES'] = '&Auml;ndern pers&ouml;nlicher Einstellungen wie E-Mail Adresse, Passwort, usw.... ';
$OVERVIEW['SETTINGS'] = '&Auml;ndern der Optionen f&uuml;r WebsiteBaker...';
$OVERVIEW['USERS'] = 'Verwaltung von Benutzern, die sich in WebsiteBaker einloggen d&uuml;rfen...';
$OVERVIEW['GROUPS'] = 'Verwaltung von Gruppen und Ihrer Zugangsberechtigungen...';
$OVERVIEW['HELP'] = 'Noch Fragen? Hier finden Sie Antworten';
$OVERVIEW['VIEW'] = 'Ansicht Ihrer Webseite in einem neuen Fenster...';
$OVERVIEW['ADMINTOOLS'] = 'Zugriff auf die WebsiteBaker Verwaltungsprogramme...';

// Headings
$HEADING['MODIFY_DELETE_PAGE'] = 'Seite &auml;ndern/Seite l&ouml;schen';
$HEADING['DELETED_PAGES'] = 'gel&ouml;schte Seiten';
$HEADING['ADD_PAGE'] = 'Seite hinzuf&uuml;gen';
$HEADING['ADD_HEADING'] = 'Kopf hinzuf&uuml;gen';
$HEADING['MODIFY_PAGE'] = 'Seite &auml;ndern';
$HEADING['MODIFY_PAGE_SETTINGS'] = 'Seitenoptionen &auml;ndern';
$HEADING['MODIFY_ADVANCED_PAGE_SETTINGS'] = 'Erweiterte Seitenoptionen &auml;ndern';
$HEADING['MANAGE_SECTIONS'] = 'Abschnitte verwalten';
$HEADING['MODIFY_INTRO_PAGE'] = 'Eingangsseite &auml;ndern';

$HEADING['BROWSE_MEDIA'] = 'Medien durchsuchen';
$HEADING['CREATE_FOLDER'] = 'Ordner erstellen';
$HEADING['UPLOAD_FILES'] = 'Datei(en) &uuml;bertragen';

$HEADING['INSTALL_MODULE'] = 'Modul installieren';
$HEADING['UNINSTALL_MODULE'] = 'Modul deinstallieren';
$HEADING['MODULE_DETAILS'] = 'Details zum Modul';

$HEADING['INSTALL_TEMPLATE'] = 'Designvorlage installieren';
$HEADING['UNINSTALL_TEMPLATE'] = 'Designvorlage deinstallieren';
$HEADING['TEMPLATE_DETAILS'] = 'Details zur Designvorlage';

$HEADING['INSTALL_LANGUAGE'] = 'Sprache hinzuf&uuml;gen';
$HEADING['UNINSTALL_LANGUAGE'] = 'Sprache l&ouml;schen';
$HEADING['LANGUAGE_DETAILS'] = 'Details zur Sprache';

$HEADING['MY_SETTINGS'] = 'Einstellungen';
$HEADING['MY_EMAIL'] = 'E-Mail Adresse';
$HEADING['MY_PASSWORD'] = 'Passwort';

$HEADING['GENERAL_SETTINGS'] = 'Allgemeine Optionen';
$HEADING['DEFAULT_SETTINGS'] = 'Standardeinstellungen';
$HEADING['SEARCH_SETTINGS'] = 'Suchoptionen';
$HEADING['FILESYSTEM_SETTINGS'] = 'Dateisystemoptionen';
$HEADING['SERVER_SETTINGS'] = 'Servereinstellungen';
$HEADING['WBMAILER_SETTINGS'] = 'Maileinstellungen';
$HEADING['ADMINISTRATION_TOOLS'] = 'Verwaltungsprogramme';

$HEADING['MODIFY_DELETE_USER'] = '&Auml;ndern/L&ouml;schen von Benutzern';
$HEADING['ADD_USER'] = 'Benutzer hinzuf&uuml;gen';
$HEADING['MODIFY_USER'] = 'Benutzer &auml;ndern';

$HEADING['MODIFY_DELETE_GROUP'] = '&Auml;ndern/L&ouml;schen von Gruppen';
$HEADING['ADD_GROUP'] = 'Gruppen hinzuf&uuml;gen';
$HEADING['MODIFY_GROUP'] = 'Gruppen &auml;ndern';

$HEADING['ADDON_PRECHECK_FAILED'] = 'Add-On Voraussetzungen nicht erf&uuml;llt';
$HEADING['INVOKE_MODULE_FILES'] = 'Moduldateien manuell aufrufen';

// Other text
$TEXT['OPEN'] = '&Ouml;ffnen';
$TEXT['ADD'] = 'Hinzuf&uuml;gen';
$TEXT['MODIFY'] = '&Auml;ndern';
$TEXT['SETTINGS'] = 'Optionen';
$TEXT['DELETE'] = 'Entfernen';
$TEXT['SAVE'] = 'Speichern';
$TEXT['RESET'] = 'Zur&uuml;cksetzen';
$TEXT['LOGIN'] = 'Anmeldung';
$TEXT['RELOAD'] = 'Neu laden';
$TEXT['CANCEL'] = 'Abbrechen';
$TEXT['NAME'] = 'Name';
$TEXT['PLEASE_SELECT'] = 'Bitte ausw&auml;hlen';
$TEXT['TITLE'] = 'Titel';
$TEXT['PARENT'] = '&Uuml;bergeordnete Datei';
$TEXT['TYPE'] = 'Art';
$TEXT['VISIBILITY'] = 'Sichtbarkeit';
$TEXT['PRIVATE'] = 'Privat';
$TEXT['PUBLIC'] = '&Ouml;ffentlich';
$TEXT['NONE'] = 'Keine';
$TEXT['NONE_FOUND'] = 'Keine gefunden';
$TEXT['CURRENT'] = 'Aktuell';
$TEXT['CHANGE'] = '&Auml;ndern';
$TEXT['WINDOW'] = 'Fenster';
$TEXT['DESCRIPTION'] = 'Beschreibung';
$TEXT['KEYWORDS'] = 'Schl&uuml;sselw&ouml;rter';
$TEXT['ADMINISTRATORS'] = 'Administratoren';
$TEXT['PRIVATE_VIEWERS'] = 'Private Nutzer';
$TEXT['EXPAND'] = 'Erweitern';
$TEXT['COLLAPSE'] = 'Reduzieren';
$TEXT['MOVE_UP'] = 'Aufw&auml;rts verschieben';
$TEXT['MOVE_DOWN'] = 'Abw&auml;rts verschieben';
$TEXT['RENAME'] = 'Umbenennen';
$TEXT['MODIFY_SETTINGS'] = 'Optionen &auml;ndern';
$TEXT['MODIFY_CONTENT'] = 'Inhalt &auml;ndern';
$TEXT['VIEW'] = 'Ansicht';
$TEXT['UP'] = 'Aufw&auml;rts';
$TEXT['FORGOTTEN_DETAILS'] = 'Haben Sie Ihre pers&ouml;nlichen Daten vergessen?';
$TEXT['NEED_TO_LOGIN'] = 'M&uuml;ssen Sie sich einloggen?';
$TEXT['SEND_DETAILS'] = 'Anmeldedaten senden';
$TEXT['USERNAME'] = 'Benutzername';
$TEXT['PASSWORD'] = 'Passwort';
$TEXT['HOME'] = 'Home';
$TEXT['TARGET_FOLDER'] = 'Zielordner';
$TEXT['OVERWRITE_EXISTING'] = '&Uuml;berschreibe bestehende';
$TEXT['FILE'] = 'Datei';
$TEXT['FILES'] = 'Dateien';
$TEXT['FOLDER'] = 'Ordner';
$TEXT['FOLDERS'] = 'Ordner';
$TEXT['CREATE_FOLDER'] = 'Ordner anlegen';
$TEXT['UPLOAD_FILES'] = 'Datei(en) &uuml;bertragen';
$TEXT['CURRENT_FOLDER'] = 'Aktueller Ordner';
$TEXT['TO'] = 'an';
$TEXT['FROM'] = 'von';
$TEXT['INSTALL'] = 'Installieren';
$TEXT['UNINSTALL'] = 'Deinstallieren';
$TEXT['VIEW_DETAILS'] = 'Details';
$TEXT['DISPLAY_NAME'] = 'Angezeigter Name';
$TEXT['AUTHOR'] = 'Autor';
$TEXT['VERSION'] = 'Version';
$TEXT['DESIGNED_FOR'] = 'Entworfen f&uuml;r';
$TEXT['DESCRIPTION'] = 'Beschreibung';
$TEXT['EMAIL'] = 'E-Mail';
$TEXT['LANGUAGE'] = 'Sprache';
$TEXT['TIMEZONE'] = 'Zeitzone';
$TEXT['CURRENT_PASSWORD'] = 'Bisheriges Passwort';
$TEXT['NEW_PASSWORD'] = 'Neues Passwort';
$TEXT['RETYPE_NEW_PASSWORD'] = 'Neues Passwort wiederholen';
$TEXT['ACTIVE'] = 'Aktiv';
$TEXT['DISABLED'] = 'Ausgeschaltet';
$TEXT['ENABLED'] = 'Eingeschaltet';
$TEXT['RETYPE_PASSWORD'] = 'Geben Sie bitte Ihr Passwort nochmal ein';
$TEXT['GROUP'] = 'Gruppe';
$TEXT['SYSTEM_PERMISSIONS'] = 'Zugangsberechtigungen';
$TEXT['MODULE_PERMISSIONS'] = 'Modulberechtigungen';
$TEXT['SHOW_ADVANCED'] = 'Erweiterte Optionen anzeigen';
$TEXT['HIDE_ADVANCED'] = 'Erweiterte Optionen verdecken';
$TEXT['BASIC'] = 'Einfach';
$TEXT['ADVANCED'] = 'Erweitert';
$TEXT['WEBSITE'] = 'Webseite';
$TEXT['DEFAULT'] = 'Standard';
$TEXT['KEYWORDS'] = 'Schl&uuml;sselw&ouml;rter';
$TEXT['TEXT'] = 'Text';
$TEXT['HEADER'] = 'Kopfzeile';
$TEXT['FOOTER'] = 'Fu&szlig;zeile';
$TEXT['TEMPLATE'] = 'Template';
$TEXT['THEME'] = 'Backend-Theme';
$TEXT['INSTALLATION'] = 'Installation';
$TEXT['DATABASE'] = 'Datenbank';
$TEXT['HOST'] = 'Host';
$TEXT['INTRO'] = 'Eingangs';
$TEXT['PAGE'] = 'Seite';
$TEXT['SIGNUP'] = 'Registrierung';
$TEXT['PHP_ERROR_LEVEL'] = 'PHP Fehlerberichte';
$TEXT['ADMIN'] = 'Admin';
$TEXT['PATH'] = 'Pfad';
$TEXT['URL'] = 'URL';
$TEXT['FRONTEND'] = 'Frontend';
$TEXT['EXTENSION'] = 'Endungen';
$TEXT['TABLE_PREFIX'] = 'TabellenPr&auml;fix';
$TEXT['CHANGES'] = '&Auml;nderungen';
$TEXT['ADMINISTRATION'] = 'Verwaltung';
$TEXT['FORGOT_DETAILS'] = 'Haben Sie Ihre pers&ouml;nlichen Daten vergessen?';
$TEXT['LOGGED_IN'] = 'Angemeldet';
$TEXT['WELCOME_BACK'] = 'Willkommen zur&uuml;ck';
$TEXT['FULL_NAME'] = 'Voller Name';
$TEXT['ACCOUNT_SIGNUP'] = 'Registrierung';
$TEXT['LINK'] = 'Link';
$TEXT['ANCHOR'] = 'Anker';
$TEXT['TARGET'] = 'Ziel';
$TEXT['NEW_WINDOW'] = 'Neues Fenster';
$TEXT['SAME_WINDOW'] = 'Gleiches Fenster';
$TEXT['TOP_FRAME'] = 'Frameset sprengen';
$TEXT['PAGE_LEVEL_LIMIT'] = 'Limit der Seitenebenen';
$TEXT['SUCCESS'] = 'Erfolgreich';
$TEXT['ERROR'] = 'Fehler';
$TEXT['ARE_YOU_SURE'] = 'Sind Sie sicher?';
$TEXT['YES'] = 'Ja';
$TEXT['NO'] = 'Nein';
$TEXT['SYSTEM_DEFAULT'] = 'Standardeinstellung';
$TEXT['PAGE_TITLE'] = 'Seitentitel';
$TEXT['MENU_TITLE'] = 'Men&uuml;titel';
$TEXT['ACTIONS'] = 'Aktionen';
$TEXT['UNKNOWN'] = 'Unbekannt';
$TEXT['BLOCK'] = 'Block';
$TEXT['SEARCH'] = 'Suche';
$TEXT['SEARCHING'] = 'suchen';
$TEXT['POST'] = 'Beitrag';
$TEXT['COMMENT'] = 'Kommentar';
$TEXT['COMMENTS'] = 'Kommentare';
$TEXT['COMMENTING'] = 'kommentieren';
$TEXT['SHORT'] = 'Kurz';
$TEXT['LONG'] = 'Lang';
$TEXT['LOOP'] = 'Schleife';
$TEXT['FIELD'] = 'Feld';
$TEXT['REQUIRED'] = 'Erforderlich';
$TEXT['LENGTH'] = 'L&auml;nge';
$TEXT['MESSAGE'] = 'Nachricht';
$TEXT['SUBJECT'] = 'Betreff';
$TEXT['MATCH'] = '&Uuml;bereinstimmung';
$TEXT['ALL_WORDS'] = 'Alle W&ouml;rter';
$TEXT['ANY_WORDS'] = 'Einzelne W&ouml;rter';
$TEXT['EXACT_MATCH'] = 'Genaue Wortfolge';
$TEXT['SHOW'] = 'zeigen';
$TEXT['HIDE'] = 'verstecken';
$TEXT['START_PUBLISHING'] = 'Beginn der Ver&ouml;ffentlichung';
$TEXT['FINISH_PUBLISHING'] = 'Ende der Ver&ouml;ffentlichung';
$TEXT['DATE'] = 'Datum';
$TEXT['START'] = 'Start';
$TEXT['END'] = 'Ende';
$TEXT['IMAGE'] = 'Bild';
$TEXT['ICON'] = 'Symbol';
$TEXT['SECTION'] = 'Abschnitt';
$TEXT['DATE_FORMAT'] = 'Datumsformat';
$TEXT['TIME_FORMAT'] = 'Zeitformat';
$TEXT['RESULTS'] = 'Resultate';
$TEXT['RESIZE'] = 'Gr&ouml;&szlig;e &auml;ndern';
$TEXT['MANAGE'] = 'Verwalten Sie';
$TEXT['CODE'] = 'Code';
$TEXT['WIDTH'] = 'Breite';
$TEXT['HEIGHT'] = 'H&ouml;he';
$TEXT['MORE'] = 'Mehr';
$TEXT['READ_MORE'] = 'Weiterlesen';
$TEXT['CHANGE_SETTINGS'] = 'Einstellungen &auml;ndern';
$TEXT['CURRENT_PAGE'] = 'Aktuelle Seite';
$TEXT['CLOSE'] = 'Schlie&szlig;en';
$TEXT['INTRO_PAGE'] = 'Eingangsseite';
$TEXT['INSTALLATION_URL'] = 'Installationsadresse(URL)';
$TEXT['INSTALLATION_PATH'] = 'Installationspfad';
$TEXT['PAGE_EXTENSION'] = 'Dateiendungen';
$TEXT['NO_RESULTS'] = 'Keine Ergebnisse';
$TEXT['WEBSITE_TITLE'] = 'Webseitentitel';
$TEXT['WEBSITE_DESCRIPTION'] = 'Webseitenbeschreibung';
$TEXT['WEBSITE_KEYWORDS'] = 'Schl&uuml;sselw&ouml;rter';
$TEXT['WEBSITE_HEADER'] = 'Kopfzeile';
$TEXT['WEBSITE_FOOTER'] = 'Fu&szlig;zeile';
$TEXT['RESULTS_HEADER'] = 'Ergebnisse &Uuml;berschrift';
$TEXT['RESULTS_LOOP'] = 'Ergebnisse Schleife';
$TEXT['RESULTS_FOOTER'] = 'Ergebnisse Fu&szlig;zeile';
$TEXT['LEVEL'] = 'Ebene';
$TEXT['NOT_FOUND'] = 'Nicht gefunden';
$TEXT['PAGE_SPACER'] = 'Leerzeichen';
$TEXT['MATCHING'] = 'passende';
$TEXT['TEMPLATE_PERMISSIONS'] = 'Zugriffsrechte f&uuml;r Vorlagen';
$TEXT['PAGES_DIRECTORY'] = 'Seitenverzeichnis';
$TEXT['MEDIA_DIRECTORY'] = 'Medienverzeichnis';
$TEXT['FILE_MODE'] = 'Dateimodus';
$TEXT['USER'] = 'Besitzer';
$TEXT['OTHERS'] = 'Alle';
$TEXT['READ'] = 'Lesen';
$TEXT['WRITE'] = 'Schreiben';
$TEXT['EXECUTE'] = 'Ausf&uuml;hren';
$TEXT['SMART_LOGIN'] = 'Intelligente Anmeldung';
$TEXT['REMEMBER_ME'] = 'Passwort speichern';
$TEXT['FILESYSTEM_PERMISSIONS'] = 'Zugriffsrechte';
$TEXT['DIRECTORIES'] = 'Verzeichnisse';
$TEXT['DIRECTORY_MODE'] = 'Verzeichnismodus';
$TEXT['LIST_OPTIONS'] = 'Auswahlliste';
$TEXT['OPTION'] = 'Option';
$TEXT['ALLOW_MULTIPLE_SELECTIONS'] = 'Mehrfachauswahl';
$TEXT['TEXTFIELD'] = 'Kurztext';
$TEXT['TEXTAREA'] = 'Langtext';
$TEXT['SELECT_BOX'] = 'Auswahlliste';
$TEXT['CHECKBOX_GROUP'] = 'Kontrollk&auml;stchen';
$TEXT['RADIO_BUTTON_GROUP'] = 'Optionsfeld';
$TEXT['SIZE'] = 'Gr&ouml;&szlig;e';
$TEXT['DEFAULT_TEXT'] = 'Standardtext';
$TEXT['SEPERATOR'] = 'Separator';
$TEXT['BACK'] = 'Zur&uuml;ck';
$TEXT['UNDER_CONSTRUCTION'] = 'In Bearbeitung';
$TEXT['MULTISELECT'] = 'Mehrfachauswahl';
$TEXT['SHORT_TEXT'] = 'Kurztext';
$TEXT['LONG_TEXT'] = 'Langtext';
$TEXT['HOMEPAGE_REDIRECTION'] = 'URL Umleitung zur Homepage';
$TEXT['HEADING'] = '&Uuml;berschrift';
$TEXT['MULTIPLE_MENUS'] = 'Mehrere Men&uuml;s';
$TEXT['REGISTERED'] = 'registriert';
$TEXT['SECTION_BLOCKS'] = 'Bl&ouml;cke';
$TEXT['REGISTERED_VIEWERS'] = 'registrierter Besucher';
$TEXT['ALLOWED_VIEWERS'] = 'genehmigter Besucher';
$TEXT['SUBMISSION_ID'] = 'Eintragungs-ID';
$TEXT['SUBMISSIONS'] = 'Eintragungen';
$TEXT['SUBMITTED'] = 'eingetragen';
$TEXT['MAX_SUBMISSIONS_PER_HOUR'] = 'Max. Eintragungen pro Stunde';
$TEXT['SUBMISSIONS_STORED_IN_DATABASE'] = 'Max. gespeicherte Eintragungen';
$TEXT['EMAIL_ADDRESS'] = 'E-Mail Adresse';
$TEXT['CUSTOM'] = 'Benutzerdefiniert';
$TEXT['ANONYMOUS'] = 'Anonym';
$TEXT['SERVER_OPERATING_SYSTEM'] = 'Server Betriebssystem';
$TEXT['WORLD_WRITEABLE_FILE_PERMISSIONS'] = 'Einstellungen f&uuml;r Schreibrechte';
$TEXT['LINUX_UNIX_BASED'] = 'Linux/Unix basierend';
$TEXT['WINDOWS'] = 'Windows';
$TEXT['HOME_FOLDER'] = 'Home Verzeichnis';
$TEXT['HOME_FOLDERS'] = 'Home Verzeichnisse';
$TEXT['PAGE_TRASH'] = 'Seiten M&uuml;lleimer';
$TEXT['INLINE'] = 'Integriert';
$TEXT['SEPARATE'] = 'Separat';
$TEXT['DELETED'] = 'Gel&ouml;scht';
$TEXT['VIEW_DELETED_PAGES'] = 'gel&ouml;schte Seiten anschauen';
$TEXT['EMPTY_TRASH'] = 'M&uuml;lleimer leeren';
$TEXT['TRASH_EMPTIED'] = 'M&uuml;lleimer geleert';
$TEXT['ADD_SECTION'] = 'Abschnitt hinzuf&uuml;gen';
$TEXT['POST_HEADER'] = 'Nachricht Kopfzeile';
$TEXT['POST_FOOTER'] = 'Nachricht Fu&szlig;zeile';
$TEXT['POSTS_PER_PAGE'] = 'Nachrichten pro Seite';
$TEXT['RESIZE_IMAGE_TO'] = 'Bildgr&ouml;&szlig;e ver&auml;ndern auf';
$TEXT['UNLIMITED'] = 'Unbegrenzt';
$TEXT['OF'] = 'von';
$TEXT['OUT_OF'] = 'von';
$TEXT['NEXT'] = 'n&auml;chste';
$TEXT['PREVIOUS'] = 'vorherige';
$TEXT['NEXT_PAGE'] = 'n&auml;chste Seite';
$TEXT['PREVIOUS_PAGE'] = 'vorherige Seite';
$TEXT['ON'] = 'Am';
$TEXT['LAST_UPDATED_BY'] = 'zuletzt ge&auml;ndert von';
$TEXT['RESULTS_FOR'] = 'Ergebnisse f&uuml;r';
$TEXT['TIME'] = 'Zeit';
$TEXT['REDIRECT_AFTER'] = 'Weiterleitung nach';
$TEXT['WYSIWYG_STYLE'] = 'WYSIWYG Stil';
$TEXT['WYSIWYG_EDITOR'] = 'WYSIWYG Editor';
$TEXT['SERVER_EMAIL'] = 'Server E-Mail';
$TEXT['MENU'] = 'Men&uuml;';
$TEXT['MANAGE_GROUPS'] = 'Gruppen verwalten';
$TEXT['MANAGE_USERS'] = 'Benutzer verwalten';
$TEXT['PAGE_LANGUAGES'] = 'Seitensprache';
$TEXT['HIDDEN'] = 'Versteckt';
$TEXT['MAIN'] = 'Hauptblock';
$TEXT['RENAME_FILES_ON_UPLOAD'] = 'Datei nach Hochladen umbenennen';
$TEXT['APP_NAME'] = 'Verwaltungswerkzeuge';
$TEXT['SESSION_IDENTIFIER'] = 'Sitzungs ID';
$TEXT['SEC_ANCHOR'] = 'Abschnitts-Anker Text';
$TEXT['BACKUP'] = 'Sichern';
$TEXT['RESTORE'] = 'Wiederherstellen';
$TEXT['BACKUP_DATABASE'] = 'Datenbank sichern';
$TEXT['RESTORE_DATABASE'] = 'Datenbank wiederherstellen';
$TEXT['BACKUP_ALL_TABLES'] = 'komplette Datenbank sichern';
$TEXT['BACKUP_WB_SPECIFIC'] = 'nur WB Tabellen sichern';
$TEXT['BACKUP_MEDIA'] = 'Dateien sichern';
$TEXT['RESTORE_MEDIA'] = 'Dateien wiederherstellen';
$TEXT['ADMINISTRATION_TOOL'] = 'Verwaltungsprogramme';
$TEXT['CAPTCHA_VERIFICATION'] = 'Captcha Pr&uuml;fziffer';
$TEXT['VERIFICATION'] = 'Pr&uuml;fziffer';
$TEXT['DEFAULT_CHARSET'] = 'Standard Zeichensatz';
$TEXT['CHARSET'] = 'Zeichensatz';
$TEXT['MODULE_ORDER'] = 'Modulreihenfolge f&uuml;r die Suche';
$TEXT['MAX_EXCERPT'] = 'Max Anzahl Zitate pro Seite';
$TEXT['TIME_LIMIT'] = 'Zeitlimit zur Erstellung der Zitate pro Modul';
$TEXT['PUBL_START_DATE'] = 'Start Datum';
$TEXT['PUBL_END_DATE'] = 'End Datum';
$TEXT['CALENDAR'] = 'Kalender';
$TEXT['DELETE_DATE'] = 'Datum l&ouml;schen';
$TEXT['WBMAILER_DEFAULT_SETTINGS_NOTICE'] = 'Bitte geben Sie eine Standard "VON" Adresse und einen Sendernamen an. Als Absender Adresse empfiehlt sich ein Format wie: <strong>admin@IhreWebseite.de</strong>. Manche E-Mail Provider (z.B. <em>mail.de</em>) stellen keine E-Mails zu, die nicht &uuml;ber den Provider selbst verschickt wurden, in der Absender Adresse aber den Namen des E-Mail Providers <em>name@mail.de</em> enthalten. Die Standard Werte werden nur verwendet, wenn keine anderen Werte von WebsiteBaker gesetzt wurden. Wenn Ihr Service Provider <acronym title="Simple Mail Transfer Protocol">SMTP</acronym> anbietet, sollten Sie diese Option f&uuml;r ausgehende E-Mails verwenden.';
$TEXT['WBMAILER_DEFAULT_SENDER_MAIL'] = 'Standard "VON" Adresse';
$TEXT['WBMAILER_DEFAULT_SENDER_NAME'] = 'Standard Absender Name';
$TEXT['WBMAILER_NOTICE'] = '<strong>SMTP Maileinstellungen:</strong><br />Die nachfolgenden Einstellungen m&uuml;ssen nur angepasst werden, wenn Sie E-Mail &uuml;ber <acronym title="Simple Mail Transfer Protocol">SMTP</acronym> verschicken wollen. Wenn Sie Ihren SMTP Server nicht kennen, oder Sie sich unsicher bei den Einstellungen sind, verwenden Sie einfach die Standard E-Mail Routine: PHP MAIL.';
$TEXT['WBMAILER_FUNCTION'] = 'E-Mail Routine';
$TEXT['WBMAILER_SMTP_HOST'] = 'SMTP Host';
$TEXT['WBMAILER_PHP'] = 'PHP MAIL';
$TEXT['WBMAILER_SMTP'] = 'SMTP';
$TEXT['WBMAILER_SMTP_AUTH'] = 'SMTP Authentifikation';
$TEXT['WBMAILER_SMTP_AUTH_NOTICE'] = 'nur aktivieren, wenn SMTP Authentifikation ben&ouml;tigt wird';
$TEXT['WBMAILER_SMTP_USERNAME'] = 'SMTP Benutzername';
$TEXT['WBMAILER_SMTP_PASSWORD'] = 'SMTP Passwort';
$TEXT['PLEASE_LOGIN'] = 'Bitte anmelden';
$TEXT['CAP_EDIT_CSS'] = 'Bearbeite CSS';
$TEXT['HEADING_CSS_FILE'] = 'Aktuelle Moduldatei: ';
$TEXT['TXT_EDIT_CSS_FILE'] = 'Bearbeite die CSS Definitionen im nachfolgenden Textfeld.';
$TEXT['CODE_SNIPPET'] = "Funktionserweiterung";
$TEXT['REQUIREMENT'] = "Voraussetzung";
$TEXT['INSTALLED'] = "installiert";
$TEXT['NOT_INSTALLED'] = "nicht installiert";
$TEXT['ADDON'] = "Addon";
$TEXT['EXTENSION'] = "Extension";
$TEXT['UNZIP_FILE'] = "Zip-Archiv hochladen und entpacken";
$TEXT['DELETE_ZIP'] = "Zip-Archiv nach dem entpacken l&ouml;schen";

// Success/error messages
$MESSAGE['FRONTEND']['SORRY_NO_VIEWING_PERMISSIONS'] = 'Sie sind nicht berechtigt, diese Seite zu sehen';
$MESSAGE['FRONTEND']['SORRY_NO_ACTIVE_SECTIONS'] = 'Kein aktiver Inhalt auf dieser Seite vorhanden';

$MESSAGE['ADMIN']['INSUFFICIENT_PRIVELLIGES'] = 'Ungen&uuml;gende Zugangsberechtigungen';

$MESSAGE['LOGIN']['BOTH_BLANK'] = 'Bitte geben Sie unten Ihren Benutzernamen und Passwort ein';
$MESSAGE['LOGIN']['USERNAME_BLANK'] = 'Bitte geben Sie Ihren Benutzernamen ein';
$MESSAGE['LOGIN']['PASSWORD_BLANK'] = 'Bitte geben Sie Ihr Passwort ein';
$MESSAGE['LOGIN']['USERNAME_TOO_SHORT'] = 'Der angegebene Benutzername ist zu kurz';
$MESSAGE['LOGIN']['PASSWORD_TOO_SHORT'] = 'Das angegebene Passwort ist zu kurz';
$MESSAGE['LOGIN']['USERNAME_TOO_LONG'] = 'Der angegebene Benutzername ist zu lang';
$MESSAGE['LOGIN']['PASSWORD_TOO_LONG'] = 'Das angegebene Passwort ist zu lang';
$MESSAGE['LOGIN']['AUTHENTICATION_FAILED'] = 'Der Benutzername oder das Passwort ist nicht korrekt';

$MESSAGE['SIGNUP']['NO_EMAIL'] = 'Bitte geben Sie Ihre E-Mail Adresse an';
$MESSAGE['SIGNUP2']['SUBJECT_LOGIN_INFO'] = 'Deine WB Logindaten ...';
$MESSAGE['SIGNUP2']['BODY_LOGIN_INFO'] = <<< EOT
Hallo {LOGIN_DISPLAY_NAME},

Deine neuen Logindaten f&uuml;r '{LOGIN_WEBSITE_TITLE}' lauten:
Benutzername: {LOGIN_NAME}
Passwort: {LOGIN_PASSWORD}

Dein bisheriges Passwort wurde durch das neue Passwort oben ersetzt.
Das bisherige Passwort ist nicht mehr g&uuml;ltig.

Wenn Du dieses E-Mail versehentlich erhalten hast, bitte einfach l&ouml;schen.
EOT;

$MESSAGE['FORGOT_PASS']['NO_DATA'] = 'Bitte geben Sie nachfolgend Ihre E-Mail Adresse an';
$MESSAGE['FORGOT_PASS']['EMAIL_NOT_FOUND'] = 'Die angegebene E-Mail Adresse wurde nicht in der Datenbank gefunden';
$MESSAGE['FORGOT_PASS']['CANNOT_EMAIL'] = 'Das Passwort konnte nicht versendet werden, bitte kontaktieren Sie den Systemadministrator';
$MESSAGE['FORGOT_PASS']['PASSWORD_RESET'] = 'Ihr Benutzername und Ihr Passwort wurden an Ihre E-Mail Adresse gesendet';
$MESSAGE['FORGOT_PASS']['ALREADY_RESET'] = 'Das Passwort kann nur einmal pro Stunde zur&uuml;ckgesetzt werden';

$MESSAGE['START']['WELCOME_MESSAGE'] = 'Willkommen in der WebsiteBaker Verwaltung';
$MESSAGE['START']['INSTALL_DIR_EXISTS'] = 'Das Installations-Verzeichnis "/install" existiert noch! Dies stellt ein Sicherheitsrisiko dar. Bitte l&ouml;schen.';
$MESSAGE['START']['CURRENT_USER'] = 'Sie sind momentan angemeldet als:';

$MESSAGE['SETTINGS']['UNABLE_OPEN_CONFIG'] = 'Konfigurationsdatei konnte nicht ge&ouml;ffnet werden';
$MESSAGE['SETTINGS']['UNABLE_WRITE_CONFIG'] = 'Die Konfigurationsdatei konnte nicht geschrieben werden';
$MESSAGE['SETTINGS']['SAVED'] = 'Die Optionen wurden erfolgreich gespeichert';
$MESSAGE['SETTINGS']['MODE_SWITCH_WARNING'] = 'Bitte beachten Sie: Wenn Sie dieses Feld anklicken, werden alle ungespeicherten &Auml;nderungen zur&uuml;ckgesetzt';
$MESSAGE['SETTINGS']['WORLD_WRITEABLE_WARNING'] = 'Bitte beachten Sie: Dies wird nur zu Testzwecken empfohlen';

$MESSAGE['USERS']['ADDED'] = 'Der Benutzer wurde erfolgreich hinzugef&uuml;gt';
$MESSAGE['USERS']['SAVED'] = 'Der Benutzer wurde erfolgreich gespeichert';
$MESSAGE['USERS']['DELETED'] = 'Der Benutzer wurde erfolgreich gel&ouml;scht';
$MESSAGE['USERS']['NO_GROUP'] = 'Es wurde keine Gruppe ausgew&auml;hlt';
$MESSAGE['USERS']['USERNAME_TOO_SHORT'] = 'Der eingegebene Benutzername war zu kurz';
$MESSAGE['USERS']['PASSWORD_TOO_SHORT'] = 'Das eingegebene Passwort war zu kurz';
$MESSAGE['USERS']['PASSWORD_MISMATCH'] = 'Das angegebene Passwort ist ung&uuml;ltig';
$MESSAGE['USERS']['INVALID_EMAIL'] = 'Die angegebene E-Mail Adresse ist ung&uuml;ltig';
$MESSAGE['USERS']['EMAIL_TAKEN'] = 'Die angegebene E-Mail Adresse wird bereits verwendet';
$MESSAGE['USERS']['USERNAME_TAKEN'] = 'Der angegebene Benutzername wird bereits verwendet';
$MESSAGE['USERS']['CHANGING_PASSWORD'] = 'Bitte beachten Sie: Sie sollten in die obigen Felder nur Werte eingeben, wenn Sie das Passwort dieses Benutzers &auml;ndern m&ouml;chten';
$MESSAGE['USERS']['CONFIRM_DELETE'] = 'Sind Sie sicher, dass Sie den ausgew&auml;hlten Benutzer l&ouml;schen m&ouml;chten?';

$MESSAGE['GROUPS']['ADDED'] = 'Die Gruppe wurde erfolgreich hinzugef&uuml;gt';
$MESSAGE['GROUPS']['SAVED'] = 'Die Gruppe wurde erfolgreich gespeichert';
$MESSAGE['GROUPS']['DELETED'] = 'Die Gruppe wurde erfolgreich gel&ouml;scht';
$MESSAGE['GROUPS']['GROUP_NAME_BLANK'] = 'Der Gruppenname wurde nicht angegeben';
$MESSAGE['GROUPS']['CONFIRM_DELETE'] = 'Sind Sie sicher, dass Sie die ausgew&auml;hlte Gruppe l&ouml;schen m&ouml;chten (und alle Benutzer, die dazugeh&ouml;ren)?';
$MESSAGE['GROUPS']['NO_GROUPS_FOUND'] = 'Keine Gruppen gefunden';
$MESSAGE['GROUPS']['GROUP_NAME_EXISTS'] = 'Der Gruppenname existiert bereits';

$MESSAGE['PREFERENCES']['DETAILS_SAVED'] = 'Pers&ouml;nliche Daten wurden erfolgreich gespeichert';
$MESSAGE['PREFERENCES']['EMAIL_UPDATED'] = 'E-Mail Einstellung ge&auml;ndert';
$MESSAGE['PREFERENCES']['CURRENT_PASSWORD_INCORRECT'] = 'Das alte Passwort, das Sie angegeben haben, ist ung&uuml;ltig';
$MESSAGE['PREFERENCES']['PASSWORD_CHANGED'] = 'Das Passwort wurde erfolgreich ge&auml;ndert';

$MESSAGE['TEMPLATES']['CHANGE_TEMPLATE_NOTICE'] = 'Bitte beachten Sie: Um eine andere Designvorlage auszuw&auml;hlen, benutzen Sie den Bereich "Optionen"';

$MESSAGE['MEDIA']['DIR_DOT_DOT_SLASH'] = 'Der Verzeichnisname darf nicht ../ enthalten';
$MESSAGE['MEDIA']['DIR_DOES_NOT_EXIST'] = 'Verzeichnis existiert nicht';
$MESSAGE['MEDIA']['TARGET_DOT_DOT_SLASH'] = 'Der Name des Zielverzeichnisses darf nicht ../ enthalten';
$MESSAGE['MEDIA']['NAME_DOT_DOT_SLASH'] = 'Der Name darf nicht ../ enthalten';
$MESSAGE['MEDIA']['NAME_INDEX_PHP'] = 'Der Dateiname index.php kann nicht verwendet werden';
$MESSAGE['MEDIA']['NONE_FOUND'] = 'Im aktuellen Verzeichnis konnten keine Dateien (z.B. Bilder) gefunden werden';
$MESSAGE['MEDIA']['FILE_NOT_FOUND'] = 'Die Datei konnte nicht gefunden werden';
$MESSAGE['MEDIA']['DELETED_FILE'] = 'Die Datei wurde gel&ouml;scht';
$MESSAGE['MEDIA']['DELETED_DIR'] = 'Das Verzeichnis wurde gel&ouml;scht';
$MESSAGE['MEDIA']['CONFIRM_DELETE'] = 'Sind Sie sicher, dass Sie die folgende Datei oder Verzeichnis l&ouml;schen m&ouml;chten?';
$MESSAGE['MEDIA']['CANNOT_DELETE_FILE'] = 'Die ausgew&auml;hlte Datei konnte nicht gel&ouml;scht werden';
$MESSAGE['MEDIA']['CANNOT_DELETE_DIR'] = 'Das ausgew&auml;hlte Verzeichnis konnte nicht gel&ouml;scht werden';
$MESSAGE['MEDIA']['BLANK_NAME'] = 'Sie haben keinen neuen Namen angegeben';
$MESSAGE['MEDIA']['BLANK_EXTENSION'] = 'Sie haben keine Dateiendung angegeben';
$MESSAGE['MEDIA']['RENAMED'] = 'Das Umbenennen war erfolgreich';
$MESSAGE['MEDIA']['CANNOT_RENAME'] = 'Das Umbenennen war nicht erfolgreich';
$MESSAGE['MEDIA']['FILE_EXISTS'] = 'Eine Datei mit dem angegebenen Namen existiert bereits';
$MESSAGE['MEDIA']['DIR_EXISTS'] = 'Ein Verzeichnis mit dem angegebenen Namen existiert bereits';
$MESSAGE['MEDIA']['DIR_MADE'] = 'Das Verzeichnis wurde erfolgreich angelegt';
$MESSAGE['MEDIA']['DIR_NOT_MADE'] = 'Das Verzeichnis konnte nicht angelegt werden';
$MESSAGE['MEDIA']['SINGLE_UPLOADED'] = 'Datei wurde erfolgreich &uuml;bertragen';
$MESSAGE['MEDIA']['UPLOADED'] = 'Dateien wurden erfolgreich &uuml;bertragen';

$MESSAGE['PAGES']['ADDED'] = 'Die Seite wurde erfolgreich hinzugef&uuml;gt';
$MESSAGE['PAGES']['ADDED_HEADING'] = 'Seitenkopf erfolgreich hinzugef&uuml;gt';
$MESSAGE['PAGES']['PAGE_EXISTS'] = 'Eine Seite mit einem &auml;hnlichen oder demselben Titel existiert bereits';
$MESSAGE['PAGES']['CANNOT_CREATE_ACCESS_FILE'] = 'Beim Anlegen der Zugangsdatei im Verzeichnis /pages ist ein Fehler aufgetreten (Ungen&uuml;gende Zugangsrechte)';
$MESSAGE['PAGES']['CANNOT_DELETE_ACCESS_FILE'] = 'Beim L&ouml;schen der Zugangsdatei im Verzeichnis /pages ist ein Fehler aufgetreten (Ungen&uuml;gende Zugangsrechte)';
$MESSAGE['PAGES']['NOT_FOUND'] = 'Die Seite konnte nicht gefunden werden';
$MESSAGE['PAGES']['SAVED'] = 'Die Seite wurde erfolgreich gespeichert';
$MESSAGE['PAGES']['SAVED_SETTINGS'] = 'Die Seiteneinstellungen wurden erfolgreich gespeichert';
$MESSAGE['PAGES']['NOT_SAVED'] = 'Beim Speichern der Seite ist ein Fehler aufgetreten';
$MESSAGE['PAGES']['DELETE_CONFIRM'] = 'Sind Sie sicher, dass Sie die ausgew&auml;hlte Seite l&ouml;schen m&ouml;chten';
$MESSAGE['PAGES']['DELETED'] = 'Die Seite wurde erfolgreich gel&ouml;scht';
$MESSAGE['PAGES']['RESTORED'] = 'Die Seite wurde erfolgreich wiederhergestellt';
$MESSAGE['PAGES']['BLANK_PAGE_TITLE'] = 'Bitte geben Sie einen Titel f&uuml;r die Seite ein';
$MESSAGE['PAGES']['BLANK_MENU_TITLE'] = 'Bitte geben Sie einen Men&uuml;titel ein';
$MESSAGE['PAGES']['REORDERED'] = 'Die Seite wurde erfolgreich neu zusammengestellt';
$MESSAGE['PAGES']['CANNOT_REORDER'] = 'Bei der Zusammenstellung der Seite ist ein Fehler aufgetreten';
$MESSAGE['PAGES']['INSUFFICIENT_PERMISSIONS'] = 'Sie haben keine Berechtigung, diese Seite zu &auml;ndern';
$MESSAGE['PAGES']['INTRO_NOT_WRITABLE'] = 'Es konnte nicht in die Datei /pages/intro.php geschrieben werden (ungen&uuml;gende Zugangsrechte)';
$MESSAGE['PAGES']['INTRO_SAVED'] = 'Eingangsseite wurde erfolgreich gespeichert';
$MESSAGE['PAGES']['LAST_MODIFIED'] = 'Die letzte &Auml;nderung wurde durchgef&uuml;hrt von';
$MESSAGE['PAGES']['INTRO_LINK'] = 'Bitte klicken Sie HIER um die Eingangsseite zu &auml;ndern';
$MESSAGE['PAGES']['SECTIONS_PROPERTIES_SAVED'] = 'Einstellungen f&uuml;r diesen Abschnitt erfolgreich gespeichert';
$MESSAGE['PAGES']['RETURN_TO_PAGES'] = 'Zur&uuml;ck zum Seitenmen&uuml;';

$MESSAGE['GENERIC']['FILL_IN_ALL'] = 'Bitte alle Felder ausf&uuml;llen';
$MESSAGE['GENERIC']['FILE_TYPE'] = 'Bitte beachten Sie, dass Sie nur den folgenden Dateityp ausw&auml;hlen k&ouml;nnen:';
$MESSAGE['GENERIC']['FILE_TYPES'] = 'Bitte beachten Sie, dass Sie nur folgende Dateitypen ausw&auml;hlen k&ouml;nnen:';
$MESSAGE['GENERIC']['CANNOT_UPLOAD'] = 'Die Datei kann nicht &uuml;bertragen werden';
$MESSAGE['GENERIC']['ALREADY_INSTALLED'] = 'Bereits installiert';
$MESSAGE['GENERIC']['NOT_INSTALLED'] = 'Nicht installiert';
$MESSAGE['GENERIC']['CANNOT_UNINSTALL'] = 'Deinstallation fehlgeschlagen';
$MESSAGE['GENERIC']['CANNOT_UNZIP'] = 'Fehler beim Entpacken';
$MESSAGE['GENERIC']['INSTALLED'] = 'Erfolgreich installiert';
$MESSAGE['GENERIC']['UPGRADED'] = 'Erfolgreich aktualisiert';
$MESSAGE['GENERIC']['UNINSTALLED'] = 'Erfolgreich deinstalliert';
$MESSAGE['GENERIC']['BAD_PERMISSIONS'] = 'Kann im Zielverzeichnis nicht schreiben';
$MESSAGE['GENERIC']['INVALID'] = 'Die &uuml;bertragene Datei ist ung&uuml;ltig';
$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IN_USE'] = 'Deinstallation nicht m&ouml;glich: Datei wird benutzt';

$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IN_USE_TMPL'] = "<br /><br />Das {{type}} <b>{{type_name}}</b> kann nicht deinstalliert werden, weil es auf {{pages}} benutzt wird:<br /><br />";
$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IN_USE_TMPL_PAGES'] = "folgender Seite;folgenden Seiten";
$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IS_DEFAULT_TEMPLATE'] = "Das Template <b>{{name}}</b> kann nicht deinstalliert werden, weil es das Standardtemplate ist!";

$MESSAGE['GENERIC']['WEBSITE_UNDER_CONSTRUCTION'] = 'Momentan in Bearbeitung';
$MESSAGE['GENERIC']['PLEASE_CHECK_BACK_SOON'] = 'Bitte versuchen Sie es sp&auml;ter noch einmal ...';
$MESSAGE['GENERIC']['PLEASE_BE_PATIENT'] = 'Die Datenbanksicherung kann je nach Gr&ouml;&szlig;e der Datenbank einige Zeit dauern.';
$MESSAGE['GENERIC']['ERROR_OPENING_FILE'] = 'Fehler beim &Ouml;ffnen der Datei.';
$MESSAGE['GENERIC']['INVALID_ADDON_FILE'] = 'Ung&uuml;ltige WebsiteBaker Installationsdatei. Bitte *.zip Format pr&uuml;fen.';
$MESSAGE['GENERIC']['INVALID_LANGUAGE_FILE'] = 'Ung&uuml;ltige WebsiteBaker Sprachdatei. Bitte Textdatei pr&uuml;fen.';

$MESSAGE['MOD_FORM']['REQUIRED_FIELDS'] = 'Bitte folgende Angaben erg&auml;nzen';
$MESSAGE['MOD_FORM']['EXCESS_SUBMISSIONS'] = 'Dieses Formular wurde zu oft aufgerufen. Bitte versuchen Sie es in einer Stunde noch einmal.';
$MESSAGE['MOD_FORM']['INCORRECT_CAPTCHA'] = 'Die eingegebene Pr&uuml;fziffer stimmt nicht &uuml;berein. Wenn Sie Probleme mit dem Lesen der Pr&uuml;fziffer haben, bitte schreiben Sie eine E-Mail an uns: '.SERVER_EMAIL.'';

$MESSAGE['ADDON']['RELOAD'] = 'Abgleich der Datenbank mit den Informationen aus den Addon-Dateien (z.B. nach FTP Upload).';
$MESSAGE['ADDON']['ERROR_RELOAD'] = 'Fehler beim Abgleich der Addon Informationen.';
$MESSAGE['ADDON']['MODULES_RELOADED'] = 'Module erfolgreich geladen';
$MESSAGE['ADDON']['TEMPLATES_RELOADED'] = 'Designvorlagen erfolgreich geladen';
$MESSAGE['ADDON']['LANGUAGES_RELOADED'] = 'Sprachen erfolgreich geladen';
$MESSAGE['ADDON']['PRECHECK_FAILED'] = 'Installation fehlgeschlagen. Dein System erf&uuml;llt nicht alle Voraussetzungen die f&uuml;r diese Erweiterung ben&ouml;tigt werden. Um diese Erweiterung nutzen zu k&ouml;nnen, m&uuml;ssen nachfolgende Updates durchgef&uuml;hrt werden.';
$MESSAGE['ADDON']['MANUAL_INSTALLATION'] = 'Beim Hochladen oder L&ouml;schen von Modulen per FTP (nicht empfohlen), werden eventuell vorhandene Moduldateien <tt>install.php</tt>, <tt>upgrade.php</tt> oder <tt>uninstall.php</tt> nicht automatisch ausgef&uuml;hrt. Solche Module funktionieren daher meist nicht richtig, oder hinterlassen Datenbankeintr&auml;ge beim L&ouml;schen per FTP.<br /><br /> Nachfolgend k&ouml;nnen die Moduldateien von per FTP hochgeladenen Modulen manuell ausgef&uuml;hrt werden.';
$MESSAGE['ADDON']['MANUAL_INSTALLATION_WARNING'] = 'Warnung: Eventuell vorhandene Datenbankeintr&auml;ge eines Moduls gehen verloren. Bitte nur bei bei Problemen mit per FTP hochgeladenen Modulen verwenden. ';

?>