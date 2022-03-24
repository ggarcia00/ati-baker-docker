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
 * @version         $Id: IT.php 1282 2010-01-30 05:29:56Z Luisehahne $
 * @filesource		$HeadURL: http://svn.websitebaker2.org/branches/2.8.x/wb/languages/IT.php $
 * @lastmodified    $Date: 2010-01-30 06:29:56 +0100 (Sa, 30. Jan 2010) $
 *
 */

// use languageedit-module to modify this file

// Define that this file is loaded
if(!defined('LANGUAGE_LOADED')) {
define('LANGUAGE_LOADED', true);
}

// Set the language information
$language_code = 'IT';
$language_name = 'Italiano';
$language_version = '2.8';
$language_platform = '2.8.x';
$language_author = 'Roberto Rossi';
$language_license = 'GNU General Public License';

// Menu titles
$MENU['START'] = 'Avvio';
$MENU['PAGES'] = 'Pagine';
$MENU['MEDIA'] = 'Media';
$MENU['ADDONS'] = 'Add-ons';
$MENU['MODULES'] = 'Moduli';
$MENU['TEMPLATES'] = 'Templates';
$MENU['LANGUAGES'] = 'Lingua';
$MENU['PREFERENCES'] = 'Preferenze';
$MENU['SETTINGS'] = 'Impostazioni';
$MENU['ADMINTOOLS'] = 'Admin-Tools';
$MENU['ACCESS'] = 'Accesso';
$MENU['USERS'] = 'Utenti';
$MENU['GROUPS'] = 'Gruppi';
$MENU['HELP'] = 'Aiuto';
$MENU['VIEW'] = 'Visualizza';
$MENU['LOGOUT'] = 'Log-out';
$MENU['LOGIN'] = 'Login';
$MENU['FORGOT'] = 'Recupera dati di login';

// Section overviews
$OVERVIEW['START'] = 'Funzioni di amministrazione';
$OVERVIEW['PAGES'] = 'Gestisci le pagine del sito...';
$OVERVIEW['MEDIA'] = 'Gestisci i file nella cartella Media...';
$OVERVIEW['MODULES'] = 'Gestisci i moduli di WebsiteBaker...';
$OVERVIEW['TEMPLATES'] = 'Cambia la grafica del sito con i templates...';
$OVERVIEW['LANGUAGES'] = 'Gestisci le lingue del sito...';
$OVERVIEW['PREFERENCES'] = 'Cambia preferenze come email, password, etc... ';
$OVERVIEW['SETTINGS'] = 'Cambia le impostazioni di WebsiteBaker...';
$OVERVIEW['USERS'] = 'Gestisci gli utenti che possono collegarsi a WebsiteBaker...';
$OVERVIEW['GROUPS'] = 'Gestisci gruppi utenti e permessi...';
$OVERVIEW['HELP'] = 'Trova risposte alle tue domande...';
$OVERVIEW['VIEW'] = 'Visualizza il sito in una nuova finestra...';
$OVERVIEW['ADMINTOOLS'] = 'Access the WebsiteBaker administration tools...';

// Headings
$HEADING['MODIFY_DELETE_PAGE'] = 'Modifica/Elimina una pagina';
$HEADING['DELETED_PAGES'] = 'Pagine cancellate';
$HEADING['ADD_PAGE'] = 'Aggiungi una pagina';
$HEADING['ADD_HEADING'] = 'Aggiungi una Intestazione';
$HEADING['MODIFY_PAGE'] = 'Modifica la pagina';
$HEADING['MODIFY_PAGE_SETTINGS'] = 'Modifica Page Settings';
$HEADING['MODIFY_ADVANCED_PAGE_SETTINGS'] = 'Modifica impostazioni avanzate';
$HEADING['MANAGE_SECTIONS'] = 'Gestisci le sezioni';
$HEADING['MODIFY_INTRO_PAGE'] = 'Modifica la pagina d\'introduzione';

$HEADING['BROWSE_MEDIA'] = 'Sfoglia i Media';
$HEADING['CREATE_FOLDER'] = 'Crea cartella';
$HEADING['UPLOAD_FILES'] = 'Carica i File';

$HEADING['INSTALL_MODULE'] = 'Installa il Modulo';
$HEADING['UNINSTALL_MODULE'] = 'Disinstalla il Modulo';
$HEADING['MODULE_DETAILS'] = 'Dettagli del Modulo';

$HEADING['INSTALL_TEMPLATE'] = 'Installa un Template';
$HEADING['UNINSTALL_TEMPLATE'] = 'Disinstalla il Template';
$HEADING['TEMPLATE_DETAILS'] = 'Dettagli Template';

$HEADING['INSTALL_LANGUAGE'] = 'Installa lingua';
$HEADING['UNINSTALL_LANGUAGE'] = 'Disinstalla lingua';
$HEADING['LANGUAGE_DETAILS'] = 'Dettagli lingua';

$HEADING['MY_SETTINGS'] = 'Mie impostazioni';
$HEADING['MY_EMAIL'] = 'Mia Email';
$HEADING['MY_PASSWORD'] = 'Mia Password';

$HEADING['GENERAL_SETTINGS'] = 'Impostazioni Generali';
$HEADING['DEFAULT_SETTINGS'] = 'Impostazioni Default';
$HEADING['SEARCH_SETTINGS'] = 'Impostazioni di Ricerca';
$HEADING['FILESYSTEM_SETTINGS'] = 'Impostazioni del Filesystem';
$HEADING['SERVER_SETTINGS'] = 'Impostazioni del Server ';
$HEADING['WBMAILER_SETTINGS'] = 'Mailer Settings';
$HEADING['ADMINISTRATION_TOOLS'] = 'Tool di Amministrazione';

$HEADING['MODIFY_DELETE_USER'] = 'Modifica/Elimina Utente';
$HEADING['ADD_USER'] = 'Aggiungi Utente';
$HEADING['MODIFY_USER'] = 'Modifica Utente';

$HEADING['MODIFY_DELETE_GROUP'] = 'Modifica/Elimina Gruppo';
$HEADING['ADD_GROUP'] = 'Aggiungi Gruppo';
$HEADING['MODIFY_GROUP'] = 'Modifica Gruppo';

$HEADING['ADDON_PRECHECK_FAILED'] = 'Add-On requirements not met';
$HEADING['INVOKE_MODULE_FILES'] = 'Execute module files manually';

// Other text
$TEXT['OPEN'] = 'Open';
$TEXT['ADD'] = 'Aggiungi';
$TEXT['MODIFY'] = 'Modifica';
$TEXT['SETTINGS'] = 'Settings';
$TEXT['DELETE'] = 'Elimina';
$TEXT['SAVE'] = 'Salva';
$TEXT['RESET'] = 'Resetta';
$TEXT['LOGIN'] = 'Login';
$TEXT['RELOAD'] = 'Ricarica';
$TEXT['CANCEL'] = 'Annulla';
$TEXT['NAME'] = 'Nome';
$TEXT['PLEASE_SELECT'] = 'Prego seleziona';
$TEXT['TITLE'] = 'Titolo';
$TEXT['PARENT'] = 'Parente';
$TEXT['TYPE'] = 'Tipo';
$TEXT['VISIBILITY'] = 'Visibilit&agrave;';
$TEXT['PRIVATE'] = 'Privato';
$TEXT['PUBLIC'] = 'Pubblico';
$TEXT['NONE'] = 'Nessuna';
$TEXT['NONE_FOUND'] = 'Nessuno trovato';
$TEXT['CURRENT'] = 'Corrente';
$TEXT['CHANGE'] = 'Cambia';
$TEXT['WINDOW'] = 'Finestra';
$TEXT['DESCRIPTION'] = 'Descrizione';
$TEXT['KEYWORDS'] = 'Parole chiave';
$TEXT['ADMINISTRATORS'] = 'Amministratori';
$TEXT['PRIVATE_VIEWERS'] = 'Visione privata';
$TEXT['EXPAND'] = 'Espandi';
$TEXT['COLLAPSE'] = 'Restringi';
$TEXT['MOVE_UP'] = 'Muovi su';
$TEXT['MOVE_DOWN'] = 'Muovi gi&Atilde;&sup1;';
$TEXT['RENAME'] = 'Rinomina';
$TEXT['MODIFY_SETTINGS'] = 'Modifica Impostazioni';
$TEXT['MODIFY_CONTENT'] = 'Modifica Contenuto';
$TEXT['VIEW'] = 'Vedi';
$TEXT['UP'] = 'Su';
$TEXT['FORGOTTEN_DETAILS'] = 'Dimenticati i dati?';
$TEXT['NEED_TO_LOGIN'] = 'Bisogno di login?';
$TEXT['SEND_DETAILS'] = 'Invia i dati';
$TEXT['USERNAME'] = 'Username';
$TEXT['PASSWORD'] = 'Password';
$TEXT['HOME'] = 'Home';
$TEXT['TARGET_FOLDER'] = 'Cartella di destinazione';
$TEXT['OVERWRITE_EXISTING'] = 'Sovrascrivi esistenti';
$TEXT['FILE'] = 'File';
$TEXT['FILES'] = 'Files';
$TEXT['FOLDER'] = 'Cartella';
$TEXT['FOLDERS'] = 'Folders';
$TEXT['CREATE_FOLDER'] = 'Crea Cartella';
$TEXT['UPLOAD_FILES'] = 'Carica File(s)';
$TEXT['CURRENT_FOLDER'] = 'Cartella corrente';
$TEXT['TO'] = 'A';
$TEXT['FROM'] = 'Da';
$TEXT['INSTALL'] = 'Installa';
$TEXT['UNINSTALL'] = 'Disinstalla';
$TEXT['VIEW_DETAILS'] = 'Vedi dettagli';
$TEXT['DISPLAY_NAME'] = 'Mostra il nome';
$TEXT['AUTHOR'] = 'Autore';
$TEXT['VERSION'] = 'Versione';
$TEXT['DESIGNED_FOR'] = 'Progettato per';
$TEXT['DESCRIPTION'] = 'Descrizione';
$TEXT['EMAIL'] = 'Email';
$TEXT['LANGUAGE'] = 'Lingua';
$TEXT['TIMEZONE'] = 'Fuso orario';
$TEXT['CURRENT_PASSWORD'] = 'Password corrente';
$TEXT['NEW_PASSWORD'] = 'Nuova Password';
$TEXT['RETYPE_NEW_PASSWORD'] = 'Riscrivi Nuova Password';
$TEXT['ACTIVE'] = 'Attivo';
$TEXT['DISABLED'] = 'Disabilitato';
$TEXT['ENABLED'] = 'Abilitato';
$TEXT['RETYPE_PASSWORD'] = 'Riscrivi Password';
$TEXT['GROUP'] = 'Gruppo';
$TEXT['SYSTEM_PERMISSIONS'] = 'Permessi di sistema';
$TEXT['MODULE_PERMISSIONS'] = 'Permessi del Modulo';
$TEXT['SHOW_ADVANCED'] = 'Mostra opzioni avanzate';
$TEXT['HIDE_ADVANCED'] = 'Nascondi opzioni avanzate';
$TEXT['BASIC'] = 'Base';
$TEXT['ADVANCED'] = 'Avanzato';
$TEXT['WEBSITE'] = 'Website';
$TEXT['DEFAULT'] = 'Default';
$TEXT['KEYWORDS'] = 'Parole chiave';
$TEXT['TEXT'] = 'Testo';
$TEXT['HEADER'] = 'Intestazione';
$TEXT['FOOTER'] = 'Pi&egrave; di pagina';
$TEXT['TEMPLATE'] = 'Template';
$TEXT['THEME'] = 'Backend-Theme';
$TEXT['INSTALLATION'] = 'Installazione';
$TEXT['DATABASE'] = 'Database';
$TEXT['HOST'] = 'Host';
$TEXT['INTRO'] = 'Introduzione';
$TEXT['PAGE'] = 'Pagina';
$TEXT['SIGNUP'] = 'Iscrizione';
$TEXT['PHP_ERROR_LEVEL'] = 'PHP Error Reporting Level';
$TEXT['ADMIN'] = 'Admin';
$TEXT['PATH'] = 'Path';
$TEXT['URL'] = 'URL';
$TEXT['FRONTEND'] = 'Front-end';
$TEXT['EXTENSION'] = 'Estensioni';
$TEXT['TABLE_PREFIX'] = 'Table Prefix';
$TEXT['CHANGES'] = 'Modifiche';
$TEXT['ADMINISTRATION'] = 'Amministrazione';
$TEXT['FORGOT_DETAILS'] = 'Dimenticato i dati?';
$TEXT['LOGGED_IN'] = 'Logged-In';
$TEXT['WELCOME_BACK'] = 'Bentornato';
$TEXT['FULL_NAME'] = 'Nome completo';
$TEXT['ACCOUNT_SIGNUP'] = 'Iscrizione Account';
$TEXT['LINK'] = 'Link';
$TEXT['ANCHOR'] = 'Anchor';
$TEXT['TARGET'] = 'Destinazione';
$TEXT['NEW_WINDOW'] = 'Nuova finestra';
$TEXT['SAME_WINDOW'] = 'Stessa finestra';
$TEXT['TOP_FRAME'] = 'Top Frame';
$TEXT['PAGE_LEVEL_LIMIT'] = 'Limite del livello di pagina';
$TEXT['SUCCESS'] = 'Successo';
$TEXT['ERROR'] = 'Errore';
$TEXT['ARE_YOU_SURE'] = 'Sei sicuro?';
$TEXT['YES'] = 'S&igrave;';
$TEXT['NO'] = 'No';
$TEXT['SYSTEM_DEFAULT'] = 'Default di sistema';
$TEXT['PAGE_TITLE'] = 'Titolo Pagina';
$TEXT['MENU_TITLE'] = 'Titolo Menu';
$TEXT['ACTIONS'] = 'Azioni';
$TEXT['UNKNOWN'] = 'Sconosciuto';
$TEXT['BLOCK'] = 'Block';
$TEXT['SEARCH'] = 'Ricerca';
$TEXT['SEARCHING'] = 'Ricerca';
$TEXT['POST'] = 'Post';
$TEXT['COMMENT'] = 'Commento';
$TEXT['COMMENTS'] = 'Commenti';
$TEXT['COMMENTING'] = 'Commentare';
$TEXT['SHORT'] = 'Breve';
$TEXT['LONG'] = 'Estesa';
$TEXT['LOOP'] = 'Loop';
$TEXT['FIELD'] = 'Campo';
$TEXT['REQUIRED'] = 'Obbligatorio';
$TEXT['LENGTH'] = 'Lunghezza';
$TEXT['MESSAGE'] = 'Messaggio';
$TEXT['SUBJECT'] = 'Soggetto';
$TEXT['MATCH'] = 'Confronto';
$TEXT['ALL_WORDS'] = 'Tutte le parole';
$TEXT['ANY_WORDS'] = 'Qualsiasi parola';
$TEXT['EXACT_MATCH'] = 'Confronto Esatto';
$TEXT['SHOW'] = 'Mostra';
$TEXT['HIDE'] = 'Nascondi';
$TEXT['START_PUBLISHING'] = 'Inizio pubblicazione';
$TEXT['FINISH_PUBLISHING'] = 'Fine publicazione';
$TEXT['DATE'] = 'Data';
$TEXT['START'] = 'Avvio';
$TEXT['END'] = 'Fine';
$TEXT['IMAGE'] = 'Immagine';
$TEXT['ICON'] = 'Icona';
$TEXT['SECTION'] = 'Sezione';
$TEXT['DATE_FORMAT'] = 'Formato data';
$TEXT['TIME_FORMAT'] = 'Formato ora';
$TEXT['RESULTS'] = 'Risultati';
$TEXT['RESIZE'] = 'Ridimensiona';
$TEXT['MANAGE'] = 'Gestisci';
$TEXT['CODE'] = 'Codice';
$TEXT['WIDTH'] = 'Larghezza';
$TEXT['HEIGHT'] = 'Altezza';
$TEXT['MORE'] = 'Continua';
$TEXT['READ_MORE'] = 'Continua a leggere';
$TEXT['CHANGE_SETTINGS'] = 'Cambia Impostazioni';
$TEXT['CURRENT_PAGE'] = 'Pagina corrente';
$TEXT['CLOSE'] = 'Chiudi';
$TEXT['INTRO_PAGE'] = 'Pagina d\'introduzione';
$TEXT['INSTALLATION_URL'] = 'URL di installazione';
$TEXT['INSTALLATION_PATH'] = 'Path di installazione';
$TEXT['PAGE_EXTENSION'] = 'Estensione di Pagina';
$TEXT['NO_RESULTS'] = 'Nessun risultato';
$TEXT['WEBSITE_TITLE'] = 'Website Titolo';
$TEXT['WEBSITE_DESCRIPTION'] = 'Website Descrizione';
$TEXT['WEBSITE_KEYWORDS'] = 'Website Parole chiave';
$TEXT['WEBSITE_HEADER'] = 'Website Intestazione';
$TEXT['WEBSITE_FOOTER'] = 'Website Pi&egrave; di pagina';
$TEXT['RESULTS_HEADER'] = 'Risultati Intestazione';
$TEXT['RESULTS_LOOP'] = 'Risultati Loop';
$TEXT['RESULTS_FOOTER'] = 'Risultati Pi&egrave; di pagina';
$TEXT['LEVEL'] = 'Livello';
$TEXT['NOT_FOUND'] = 'Non trovato';
$TEXT['PAGE_SPACER'] = 'Separatore di Pagina';
$TEXT['MATCHING'] = 'Confronto';
$TEXT['TEMPLATE_PERMISSIONS'] = 'Permessi dei Template';
$TEXT['PAGES_DIRECTORY'] = 'Pagine Directory';
$TEXT['MEDIA_DIRECTORY'] = 'Media Directory';
$TEXT['FILE_MODE'] = 'Modalit&agrave; File';
$TEXT['USER'] = 'User';
$TEXT['OTHERS'] = 'Altri';
$TEXT['READ'] = 'Lettura';
$TEXT['WRITE'] = 'Scrittura';
$TEXT['EXECUTE'] = 'Esecuzione';
$TEXT['SMART_LOGIN'] = 'Smart Login';
$TEXT['REMEMBER_ME'] = 'Ricordami';
$TEXT['FILESYSTEM_PERMISSIONS'] = 'Permessi del Filesystem';
$TEXT['DIRECTORIES'] = 'Directories';
$TEXT['DIRECTORY_MODE'] = 'Modalit&agrave; Directory';
$TEXT['LIST_OPTIONS'] = 'Opzioni di elenco';
$TEXT['OPTION'] = 'Opzioni';
$TEXT['ALLOW_MULTIPLE_SELECTIONS'] = 'Permetti selezioni multiple';
$TEXT['TEXTFIELD'] = 'Campo di testo';
$TEXT['TEXTAREA'] = 'Area di testo';
$TEXT['SELECT_BOX'] = 'Campo di selezione';
$TEXT['CHECKBOX_GROUP'] = 'Checkbox Gruppo';
$TEXT['RADIO_BUTTON_GROUP'] = 'Radio Button Gruppo';
$TEXT['SIZE'] = 'Dimensione';
$TEXT['DEFAULT_TEXT'] = 'Testo di default';
$TEXT['SEPERATOR'] = 'Separatore';
$TEXT['BACK'] = 'Indietro';
$TEXT['UNDER_CONSTRUCTION'] = 'In costruzione';
$TEXT['MULTISELECT'] = 'Multi-selezione';
$TEXT['SHORT_TEXT'] = 'Testo breve';
$TEXT['LONG_TEXT'] = 'Testo lungo';
$TEXT['HOMEPAGE_REDIRECTION'] = 'Homepage Redirezione';
$TEXT['HEADING'] = 'Intestazione';
$TEXT['MULTIPLE_MENUS'] = 'Menu multipli';
$TEXT['REGISTERED'] = 'Registrato';
$TEXT['SECTION_BLOCKS'] = 'Blocchi di Sezione';
$TEXT['REGISTERED_VIEWERS'] = 'Utenti registrati';
$TEXT['ALLOWED_VIEWERS'] = 'Allowed Viewers';
$TEXT['SUBMISSION_ID'] = 'Iscrizione ID';
$TEXT['SUBMISSIONS'] = 'Iscrizioni';
$TEXT['SUBMITTED'] = 'Iscritto';
$TEXT['MAX_SUBMISSIONS_PER_HOUR'] = 'Max. Iscizioni per ora';
$TEXT['SUBMISSIONS_STORED_IN_DATABASE'] = 'Iscrizioni memorizzate nel Database';
$TEXT['EMAIL_ADDRESS'] = 'Indirizzo Email';
$TEXT['CUSTOM'] = 'Custom';
$TEXT['ANONYMOUS'] = 'Anonimo';
$TEXT['SERVER_OPERATING_SYSTEM'] = 'Server Operating System';
$TEXT['WORLD_WRITEABLE_FILE_PERMISSIONS'] = 'Permesso di scrittura file a chiunque';
$TEXT['LINUX_UNIX_BASED'] = 'Linux/Unix based';
$TEXT['WINDOWS'] = 'Windows';
$TEXT['HOME_FOLDER'] = 'Cartella Home';
$TEXT['HOME_FOLDERS'] = 'Cartelle Home';
$TEXT['PAGE_TRASH'] = 'Cestino';
$TEXT['INLINE'] = 'In-line';
$TEXT['SEPARATE'] = 'Separa';
$TEXT['DELETED'] = 'Eliminato';
$TEXT['VIEW_DELETED_PAGES'] = 'Vedi Pagine Eliminate';
$TEXT['EMPTY_TRASH'] = 'Svuota Cestino';
$TEXT['TRASH_EMPTIED'] = 'Cestino Svuotato';
$TEXT['ADD_SECTION'] = 'Aggiungi Sezione';
$TEXT['POST_HEADER'] = 'Post Intestazione';
$TEXT['POST_FOOTER'] = 'Post Pi&egrave; di pagina';
$TEXT['POSTS_PER_PAGE'] = 'Post Per Pagina';
$TEXT['RESIZE_IMAGE_TO'] = 'Ridimensiona immagine a';
$TEXT['UNLIMITED'] = 'Illimitato';
$TEXT['OF'] = 'Di';
$TEXT['OUT_OF'] = 'Di';
$TEXT['NEXT'] = 'Successivo';
$TEXT['PREVIOUS'] = 'Precedente';
$TEXT['NEXT_PAGE'] = 'Pagina successiva';
$TEXT['PREVIOUS_PAGE'] = 'Pagina precedente';
$TEXT['ON'] = 'Su';
$TEXT['LAST_UPDATED_BY'] = 'Ultima modifica di';
$TEXT['RESULTS_FOR'] = 'Risultati per';
$TEXT['TIME'] = 'Ora';
$TEXT['REDIRECT_AFTER'] = 'Redirect after';
$TEXT['WYSIWYG_STYLE'] = 'WYSIWYG Style';
$TEXT['WYSIWYG_EDITOR'] = 'WYSIWYG Editor';
$TEXT['SERVER_EMAIL'] = 'Server Email';
$TEXT['MENU'] = 'Menu';
$TEXT['MANAGE_GROUPS'] = 'Gestisci i Gruppi';
$TEXT['MANAGE_USERS'] = 'Gestisci gli Utenti';
$TEXT['PAGE_LANGUAGES'] = 'Pagina Lingue';
$TEXT['HIDDEN'] = 'Nascosto';
$TEXT['MAIN'] = 'Principale';
$TEXT['RENAME_FILES_ON_UPLOAD'] = 'Rinomina i Files per il Caricamento';
$TEXT['APP_NAME'] = 'Nome Applicazione';
$TEXT['SESSION_IDENTIFIER'] = 'Identificazione della sessione';
$TEXT['SEC_ANCHOR'] = 'Section-Anchor text';
$TEXT['BACKUP'] = 'Backup';
$TEXT['RESTORE'] = 'Restore';
$TEXT['BACKUP_DATABASE'] = 'Backup del Database';
$TEXT['RESTORE_DATABASE'] = 'Restore del Database';
$TEXT['BACKUP_ALL_TABLES'] = 'Backup all tables in database';
$TEXT['BACKUP_WB_SPECIFIC'] = 'Backup only WB-specific tables';
$TEXT['BACKUP_MEDIA'] = 'Backup Media';
$TEXT['RESTORE_MEDIA'] = 'Restore Media';
$TEXT['ADMINISTRATION_TOOL'] = 'Tool di Amministrazione';
$TEXT['CAPTCHA_VERIFICATION'] = 'verificaCaptcha ';
$TEXT['VERIFICATION'] = 'Verifica';
$TEXT['DEFAULT_CHARSET'] = 'Carattere di Default';
$TEXT['CHARSET'] = 'Caratteri';
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
$MESSAGE['FRONTEND']['SORRY_NO_VIEWING_PERMISSIONS'] = 'Spaicente, non ha i permessi per vedere la pagina';
$MESSAGE['FRONTEND']['SORRY_NO_ACTIVE_SECTIONS'] = 'Sorry, no active content to display';

$MESSAGE['ADMIN']['INSUFFICIENT_PRIVELLIGES'] = 'Privilegi insufficienti per essere qui';

$MESSAGE['LOGIN']['BOTH_BLANK'] = 'Prego inserire username e password';
$MESSAGE['LOGIN']['USERNAME_BLANK'] = 'Prego inserire lo username';
$MESSAGE['LOGIN']['PASSWORD_BLANK'] = 'Prego inserire una password';
$MESSAGE['LOGIN']['USERNAME_TOO_SHORT'] = 'Username troppo corto';
$MESSAGE['LOGIN']['PASSWORD_TOO_SHORT'] = 'Password troppo corta';
$MESSAGE['LOGIN']['USERNAME_TOO_LONG'] = 'Username troppo lungo';
$MESSAGE['LOGIN']['PASSWORD_TOO_LONG'] = 'Password troppo lunga';
$MESSAGE['LOGIN']['AUTHENTICATION_FAILED'] = 'Username o password errati';

$MESSAGE['SIGNUP']['NO_EMAIL'] = 'Deve inserire un indirizzo di email';
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

$MESSAGE['FORGOT_PASS']['NO_DATA'] = 'Prego inserire email';
$MESSAGE['FORGOT_PASS']['EMAIL_NOT_FOUND'] = 'L\'Email inserita non &egrave; stata trovata nel database';
$MESSAGE['FORGOT_PASS']['CANNOT_EMAIL'] = 'Impossibile inviare l\'email. Contattare l\'ammnistratore';
$MESSAGE['FORGOT_PASS']['PASSWORD_RESET'] = 'Username e password sono stati inviati per email';
$MESSAGE['FORGOT_PASS']['ALREADY_RESET'] = 'La Password non pu&Atilde;&sup2; essere modificata pi&Atilde;&sup1; di una volta all\'ora';

$MESSAGE['START']['WELCOME_MESSAGE'] = 'Benvenuto alla pagina di Amministrazione di WebsiteBaker';
$MESSAGE['START']['INSTALL_DIR_EXISTS'] = 'Attenzione, la directory di installazione esiste gi&agrave;!';
$MESSAGE['START']['CURRENT_USER'] = 'Sei registrato come:';

$MESSAGE['SETTINGS']['UNABLE_OPEN_CONFIG'] = 'Impossibile aprire il file di configurazione';
$MESSAGE['SETTINGS']['UNABLE_WRITE_CONFIG'] = 'Impossibile scrivere il file di configurazione';
$MESSAGE['SETTINGS']['SAVED'] = 'Impostazioni salvate con successo';
$MESSAGE['SETTINGS']['MODE_SWITCH_WARNING'] = 'Attenzione: premendo questo pulsante si resettano le impostazioni modificate e non salvate';
$MESSAGE['SETTINGS']['WORLD_WRITEABLE_WARNING'] = 'Raccomandato solo in fase di test';

$MESSAGE['USERS']['ADDED'] = 'Utente aggiunto';
$MESSAGE['USERS']['SAVED'] = 'Utente salvato';
$MESSAGE['USERS']['DELETED'] = 'Utente eliminato';
$MESSAGE['USERS']['NO_GROUP'] = 'Nessun gruppo selezionato';
$MESSAGE['USERS']['USERNAME_TOO_SHORT'] = 'Username troppo corto';
$MESSAGE['USERS']['PASSWORD_TOO_SHORT'] = 'Password troppo corta';
$MESSAGE['USERS']['PASSWORD_MISMATCH'] = 'Le password non coincidono';
$MESSAGE['USERS']['INVALID_EMAIL'] = 'Email non valida';
$MESSAGE['USERS']['EMAIL_TAKEN'] = 'Email gi&agrave; in uso';
$MESSAGE['USERS']['USERNAME_TAKEN'] = 'Username gi&agrave; utilizzato';
$MESSAGE['USERS']['CHANGING_PASSWORD'] = 'Attenzione: devi inserire solo valori validi se vuoi cambiare la password utente';
$MESSAGE['USERS']['CONFIRM_DELETE'] = 'Sei sicuro di voler eliminare gli utenti selezionati?';

$MESSAGE['GROUPS']['ADDED'] = 'Gruppo aggiunto';
$MESSAGE['GROUPS']['SAVED'] = 'Gruppo salvato';
$MESSAGE['GROUPS']['DELETED'] = 'Gruppo eliminato';
$MESSAGE['GROUPS']['GROUP_NAME_BLANK'] = 'Il nome del Gruppo &egrave; vuoto';
$MESSAGE['GROUPS']['CONFIRM_DELETE'] = 'Sei sicuro di voler eliminare il gruppo selezionato e tutti i suoi utenti?';
$MESSAGE['GROUPS']['NO_GROUPS_FOUND'] = 'Nessun gruppo trovato';
$MESSAGE['GROUPS']['GROUP_NAME_EXISTS'] = 'Nome di Gruppo gia Esistente';

$MESSAGE['PREFERENCES']['DETAILS_SAVED'] = 'Dettagli salvati';
$MESSAGE['PREFERENCES']['EMAIL_UPDATED'] = 'Email aggiornata';
$MESSAGE['PREFERENCES']['CURRENT_PASSWORD_INCORRECT'] = 'La password corrente inserita &egrave; errata';
$MESSAGE['PREFERENCES']['PASSWORD_CHANGED'] = 'Password cambiata';

$MESSAGE['TEMPLATES']['CHANGE_TEMPLATE_NOTICE'] = 'Per cambiare il Template andare alla sezione Impostazioni';

$MESSAGE['MEDIA']['DIR_DOT_DOT_SLASH'] = 'Impossibile includere ../ nel nome della cartella';
$MESSAGE['MEDIA']['DIR_DOES_NOT_EXIST'] = 'La Cartella non esiste';
$MESSAGE['MEDIA']['TARGET_DOT_DOT_SLASH'] = 'Impossibile avere ../ nella cartella di destinazione';
$MESSAGE['MEDIA']['NAME_DOT_DOT_SLASH'] = 'Impossibile includere ../ nel nome';
$MESSAGE['MEDIA']['NAME_INDEX_PHP'] = 'Impossibile usare index.php come nome';
$MESSAGE['MEDIA']['NONE_FOUND'] = 'Nessun Media trovato nella cartella corrente';
$MESSAGE['MEDIA']['FILE_NOT_FOUND'] = 'File non trovato';
$MESSAGE['MEDIA']['DELETED_FILE'] = 'File eliminato';
$MESSAGE['MEDIA']['DELETED_DIR'] = 'Cartella eliminata';
$MESSAGE['MEDIA']['CONFIRM_DELETE'] = 'Sei sicuro di voler eliminare il file o la cartella corrente?';
$MESSAGE['MEDIA']['CANNOT_DELETE_FILE'] = 'Impossibile eliminare il file';
$MESSAGE['MEDIA']['CANNOT_DELETE_DIR'] = 'impossibile eliminare la cartella';
$MESSAGE['MEDIA']['BLANK_NAME'] = 'Non hai inserito un nuovo nome';
$MESSAGE['MEDIA']['BLANK_EXTENSION'] = 'Non hai inserito una estensione del file';
$MESSAGE['MEDIA']['RENAMED'] = 'Rinominato con successo';
$MESSAGE['MEDIA']['CANNOT_RENAME'] = 'Impossibile rinominare';
$MESSAGE['MEDIA']['FILE_EXISTS'] = 'Esiste gi&agrave; un file con lo stesso nome';
$MESSAGE['MEDIA']['DIR_EXISTS'] = 'Esiste gi&agrave; una cartella con lo stesso nome';
$MESSAGE['MEDIA']['DIR_MADE'] = 'Cartella creata';
$MESSAGE['MEDIA']['DIR_NOT_MADE'] = 'Impossibile creare la cartella';
$MESSAGE['MEDIA']['SINGLE_UPLOADED'] = ' file caricato con successo';
$MESSAGE['MEDIA']['UPLOADED'] = ' file sono stati caricati con successo';

$MESSAGE['PAGES']['ADDED'] = 'Pagina aggiunta';
$MESSAGE['PAGES']['ADDED_HEADING'] = 'Pagina intestazione aggiunta';
$MESSAGE['PAGES']['PAGE_EXISTS'] = 'Esiste gi&agrave; una pagina con lo stesso nome';
$MESSAGE['PAGES']['CANNOT_CREATE_ACCESS_FILE'] = 'Errore nel creare un file di permessi (privilegi insufficienti)';
$MESSAGE['PAGES']['CANNOT_DELETE_ACCESS_FILE'] = 'Errore nel cancellare un file di permessi (privilegi insufficienti)';
$MESSAGE['PAGES']['NOT_FOUND'] = 'Pagina non trovata';
$MESSAGE['PAGES']['SAVED'] = 'Pagina salvata';
$MESSAGE['PAGES']['SAVED_SETTINGS'] = 'Impostazioni della pagina salvate';
$MESSAGE['PAGES']['NOT_SAVED'] = 'Errore nel salvare la pagina';
$MESSAGE['PAGES']['DELETE_CONFIRM'] = 'Sei sicuro di voler eliminare la pagina e tutte le sotto-pagine?';
$MESSAGE['PAGES']['DELETED'] = 'Pagina eliminata';
$MESSAGE['PAGES']['RESTORED'] = 'Pagina recuperata';
$MESSAGE['PAGES']['BLANK_PAGE_TITLE'] = 'Prego inserisci un titolo';
$MESSAGE['PAGES']['BLANK_MENU_TITLE'] = 'Prego inserisci un titolo';
$MESSAGE['PAGES']['REORDERED'] = 'Pagina riordinata';
$MESSAGE['PAGES']['CANNOT_REORDER'] = 'Errore nel riordinare la pagina';
$MESSAGE['PAGES']['INSUFFICIENT_PERMISSIONS'] = 'Non hai i permessi per modificare la pagina';
$MESSAGE['PAGES']['INTRO_NOT_WRITABLE'] = 'Impossibile scrivere sul file /pages/intro.php (privilegi insufficienti)';
$MESSAGE['PAGES']['INTRO_SAVED'] = 'Pagina di introduzione salvata';
$MESSAGE['PAGES']['LAST_MODIFIED'] = 'Ultima modifica di';
$MESSAGE['PAGES']['INTRO_LINK'] = 'Clicca qui per modificare la pagina d\'introduzione';
$MESSAGE['PAGES']['SECTIONS_PROPERTIES_SAVED'] = 'Propriet&agrave; di sezione salvate';
$MESSAGE['PAGES']['RETURN_TO_PAGES'] = 'Ritorna alle pagine';

$MESSAGE['GENERIC']['FILL_IN_ALL'] = 'Prego torna indietro e compila tutti i campi';
$MESSAGE['GENERIC']['FILE_TYPE'] = 'Nota che il file caricato deve essere dei seguenti formati:';
$MESSAGE['GENERIC']['FILE_TYPES'] = 'Nota che i file caricati devono essere dei seguenti formati:';
$MESSAGE['GENERIC']['CANNOT_UPLOAD'] = 'Impossibile caricare i file';
$MESSAGE['GENERIC']['ALREADY_INSTALLED'] = 'Gi&agrave; installato';
$MESSAGE['GENERIC']['NOT_INSTALLED'] = 'Non installato';
$MESSAGE['GENERIC']['CANNOT_UNINSTALL'] = 'Impossibile disinstallare';
$MESSAGE['GENERIC']['CANNOT_UNZIP'] = 'impossibile decomprimere il file';
$MESSAGE['GENERIC']['INSTALLED'] = 'Installato con successo';
$MESSAGE['GENERIC']['UPGRADED'] = 'Aggiornato con successo';
$MESSAGE['GENERIC']['UNINSTALLED'] = 'Disinstallato con successo';
$MESSAGE['GENERIC']['BAD_PERMISSIONS'] = 'Impossibile scrivere sulla directory';
$MESSAGE['GENERIC']['INVALID'] = 'Il file caricato &egrave; non valido';
$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IN_USE'] = 'Impossibile disisntallare: file in uso';

$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IN_USE_TMPL'] = "<br /><br />{{type}} <b>{{type_name}}</b> could not be uninstalled, because it is still in use on {{pages}}.<br /><br />";
$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IN_USE_TMPL_PAGES'] = "this page;these pages";
$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IS_DEFAULT_TEMPLATE'] = "Can't uninstall the template <b>{{name}}</b>, because it is the default template!";

$MESSAGE['GENERIC']['WEBSITE_UNDER_CONSTRUCTION'] = 'Website Under Construction';
$MESSAGE['GENERIC']['PLEASE_CHECK_BACK_SOON'] = 'Torna presto...';
$MESSAGE['GENERIC']['PLEASE_BE_PATIENT'] = 'Attendi pazientemente...';
$MESSAGE['GENERIC']['ERROR_OPENING_FILE'] = 'Errore nella apertura del file.';
$MESSAGE['GENERIC']['INVALID_ADDON_FILE'] = 'Invalid WebsiteBaker installation file. Please check the *.zip format.';
$MESSAGE['GENERIC']['INVALID_LANGUAGE_FILE'] = 'Invalid WebsiteBaker language file. Please check the text file.';

$MESSAGE['MOD_FORM']['REQUIRED_FIELDS'] = 'Devi inserire tutti i dati nei seguenti campi';
$MESSAGE['MOD_FORM']['EXCESS_SUBMISSIONS'] = 'Spiacente: hai compilato questa form troppe volte nell\'ultima ora.';
$MESSAGE['MOD_FORM']['INCORRECT_CAPTCHA'] = 'Il numero di controllo (chiama Captcha) che hai inserito non &egrave; valido. Se hai problemi con la lettura del Captcha, invia un email email: '.SERVER_EMAIL.'';

$MESSAGE['ADDON']['RELOAD'] = 'Update database with information from Add-on files (e.g. after FTP upload).';
$MESSAGE['ADDON']['ERROR_RELOAD'] = 'Error while updating the Add-On information.';
$MESSAGE['ADDON']['MODULES_RELOADED'] = 'Moduli ricaricati con successo';
$MESSAGE['ADDON']['TEMPLATES_RELOADED'] = 'Templates ricaricati con successo';
$MESSAGE['ADDON']['LANGUAGES_RELOADED'] = 'Lingue ricaricate con successo';
$MESSAGE['ADDON']['PRECHECK_FAILED'] = 'Add-on installation failed. Your system does not fulfill the requirements of this Add-on. To make this Add-on working on your system, please fix the issues summarized below.';
$MESSAGE['ADDON']['MANUAL_INSTALLATION'] = 'When modules are uploaded via FTP (not recommended), the module installation files <tt>install.php</tt>, <tt>upgrade.php</tt> or <tt>uninstall.php</tt> will not be executed automatically. Those modules may not work correct or do not uninstall properly.<br /><br />You can execute the module files manually for modules uploaded via FTP below.';
$MESSAGE['ADDON']['MANUAL_INSTALLATION_WARNING'] = 'Warning: Existing module database entries will get lost. Only use this option if you experience problems with modules uploaded via FTP.';

?>