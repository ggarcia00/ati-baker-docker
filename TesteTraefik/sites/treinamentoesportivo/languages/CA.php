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
 * @version         $Id: CA.php 1282 2010-01-30 05:29:56Z Luisehahne $
 * @filesource		$HeadURL: http://svn.websitebaker2.org/branches/2.8.x/wb/languages/CA.php $
 * @lastmodified    $Date: 2010-01-30 06:29:56 +0100 (Sa, 30. Jan 2010) $
 *
 */

// use languageedit-module to modify this file

// Define that this file is loaded
if(!defined('LANGUAGE_LOADED')) {
define('LANGUAGE_LOADED', true);
}

// Set the language information
$language_code = 'CA';
$language_name = 'Catalan';
$language_version = '2.8';
$language_platform = '2.8.x';
$language_author = 'Carles Escrig (simkin)';
$language_license = 'GNU General Public License';

// Menu titles
$MENU['START'] = 'Inici';
$MENU['PAGES'] = 'P&agrave;gines';
$MENU['MEDIA'] = 'Fitxers';
$MENU['ADDONS'] = 'Afegits';
$MENU['MODULES'] = 'M&ograve;duls';
$MENU['TEMPLATES'] = 'Plantilles';
$MENU['LANGUAGES'] = 'Idiomes';
$MENU['PREFERENCES'] = 'Perfil';
$MENU['SETTINGS'] = 'Par&agrave;metres';
$MENU['ADMINTOOLS'] = 'Admin-Tools';
$MENU['ACCESS'] = 'Acc&eacute;s';
$MENU['USERS'] = 'Usuaris';
$MENU['GROUPS'] = 'Grups';
$MENU['HELP'] = 'Ajuda';
$MENU['VIEW'] = 'Veure';
$MENU['LOGOUT'] = 'Eixir';
$MENU['LOGIN'] = 'Entrar';
$MENU['FORGOT'] = 'Demanar Dades del Compte';

// Section overviews
$OVERVIEW['START'] = '&Iacute;ndex d\'Administraci&oacute;';
$OVERVIEW['PAGES'] = 'Administreu les p&agrave;gines de la vostra web...';
$OVERVIEW['MEDIA'] = 'Administreu la carpeta de fitxers...';
$OVERVIEW['MODULES'] = 'Administreu els m&ograve;duls de WebsiteBaker...';
$OVERVIEW['TEMPLATES'] = 'Canvieu l\'aspecte i estil de la vostra p&agrave;gina amb plantilles...';
$OVERVIEW['LANGUAGES'] = 'Administreu els idiomes de WebsiteBaker...';
$OVERVIEW['PREFERENCES'] = 'Canvieu les prefer&egrave;ncies com l\'adre&ccedil;a de correu electr&ograve;nic, contrasenya, etc... ';
$OVERVIEW['SETTINGS'] = 'Canvieu els par&agrave;metres de WebsiteBaker...';
$OVERVIEW['USERS'] = 'Administreu els usuaris que poden identificar-se a WebsiteBaker...';
$OVERVIEW['GROUPS'] = 'Administreu els grups d\'usuaris i els seus permisos de sistema...';
$OVERVIEW['HELP'] = 'Teniu una pregunta? Trobeu la vostra resposta...';
$OVERVIEW['VIEW'] = 'Veure i navegar r&agrave;pidament la vostra p&agrave;gina web en una nova finestra...';
$OVERVIEW['ADMINTOOLS'] = 'Access the WebsiteBaker administration tools...';

// Headings
$HEADING['MODIFY_DELETE_PAGE'] = 'Modifica/Esborra P&agrave;gina';
$HEADING['DELETED_PAGES'] = 'P&agrave;gines Esborrades';
$HEADING['ADD_PAGE'] = 'Afegeix P&agrave;gina';
$HEADING['ADD_HEADING'] = 'Afegeix Encap&ccedil;alament';
$HEADING['MODIFY_PAGE'] = 'Modifica P&agrave;gina';
$HEADING['MODIFY_PAGE_SETTINGS'] = 'Modifica els Par&agrave;metres de la P&agrave;gina';
$HEADING['MODIFY_ADVANCED_PAGE_SETTINGS'] = 'Modifica els Par&agrave;metres Avan&ccedil;ats de la P&agrave;gina';
$HEADING['MANAGE_SECTIONS'] = 'Administra les Seccions';
$HEADING['MODIFY_INTRO_PAGE'] = 'Modifica P&agrave;gina Introduct&ograve;ria';

$HEADING['BROWSE_MEDIA'] = 'Explorar Fitxers';
$HEADING['CREATE_FOLDER'] = 'Crea Carpeta';
$HEADING['UPLOAD_FILES'] = 'Penja Fitxer(s)';

$HEADING['INSTALL_MODULE'] = 'Instal&middot;la M&ograve;dul';
$HEADING['UNINSTALL_MODULE'] = 'Desinstal&middot;la M&ograve;dul';
$HEADING['MODULE_DETAILS'] = 'Detalls del M&ograve;dul';

$HEADING['INSTALL_TEMPLATE'] = 'Instal&middot;la Plantilla';
$HEADING['UNINSTALL_TEMPLATE'] = 'Desinstal&middot;la Plantilla';
$HEADING['TEMPLATE_DETAILS'] = 'Detalls de la Plantilla';

$HEADING['INSTALL_LANGUAGE'] = 'Instal&middot;la Idioma';
$HEADING['UNINSTALL_LANGUAGE'] = 'Desinstal&middot;la Idioma';
$HEADING['LANGUAGE_DETAILS'] = 'Detalls de l\'Idioma';

$HEADING['MY_SETTINGS'] = 'Els meus Par&agrave;metres';
$HEADING['MY_EMAIL'] = 'El meu Correu';
$HEADING['MY_PASSWORD'] = 'La meua Contrasenya';

$HEADING['GENERAL_SETTINGS'] = 'Par&agrave;metres Generals';
$HEADING['DEFAULT_SETTINGS'] = 'Par&agrave;metres per Defecte';
$HEADING['SEARCH_SETTINGS'] = 'Par&agrave;metres de Cerca';
$HEADING['FILESYSTEM_SETTINGS'] = 'Par&agrave;metres del Sistema de Fitxers';
$HEADING['SERVER_SETTINGS'] = 'Server Settings';
$HEADING['WBMAILER_SETTINGS'] = 'Mailer Settings';
$HEADING['ADMINISTRATION_TOOLS'] = 'Administration Tools';

$HEADING['MODIFY_DELETE_USER'] = 'Modifica/Esborra Usuari';
$HEADING['ADD_USER'] = 'Afegeix Usuari';
$HEADING['MODIFY_USER'] = 'Modifica Usuari';

$HEADING['MODIFY_DELETE_GROUP'] = 'Modifica/Esborra Grup';
$HEADING['ADD_GROUP'] = 'Afegeix Grup';
$HEADING['MODIFY_GROUP'] = 'Modifica Grup';

$HEADING['ADDON_PRECHECK_FAILED'] = 'Add-On requirements not met';
$HEADING['INVOKE_MODULE_FILES'] = 'Execute module files manually';

// Other text
$TEXT['OPEN'] = 'Open';
$TEXT['ADD'] = 'Afegeix';
$TEXT['MODIFY'] = 'Modifica';
$TEXT['SETTINGS'] = 'Par&agrave;metres';
$TEXT['DELETE'] = 'Esborra';
$TEXT['SAVE'] = 'Desa';
$TEXT['RESET'] = 'Reinicia';
$TEXT['LOGIN'] = 'Identificaci&oacute;';
$TEXT['RELOAD'] = 'Recarrega';
$TEXT['CANCEL'] = 'Cancel&middot;la';
$TEXT['NAME'] = 'Nom';
$TEXT['PLEASE_SELECT'] = 'Per favor trieu';
$TEXT['TITLE'] = 'T&iacute;tol';
$TEXT['PARENT'] = 'Mare';
$TEXT['TYPE'] = 'Tipus';
$TEXT['VISIBILITY'] = 'Visibilitat';
$TEXT['PRIVATE'] = 'Privat';
$TEXT['PUBLIC'] = 'P&uacute;blic';
$TEXT['NONE'] = 'Cap';
$TEXT['NONE_FOUND'] = 'No s\'ha trobat cap';
$TEXT['CURRENT'] = 'Actual';
$TEXT['CHANGE'] = 'Canvia';
$TEXT['WINDOW'] = 'Finestra';
$TEXT['DESCRIPTION'] = 'Descripci&oacute;';
$TEXT['KEYWORDS'] = 'Paraules Clau';
$TEXT['ADMINISTRATORS'] = 'Administradors';
$TEXT['PRIVATE_VIEWERS'] = 'Visualitzadors Privats';
$TEXT['EXPAND'] = 'Expandeix';
$TEXT['COLLAPSE'] = 'Contrau';
$TEXT['MOVE_UP'] = 'Mou Amunt';
$TEXT['MOVE_DOWN'] = 'Mou Avall';
$TEXT['RENAME'] = 'Reanomena';
$TEXT['MODIFY_SETTINGS'] = 'Modifica Par&agrave;metres';
$TEXT['MODIFY_CONTENT'] = 'Modifica Contingut';
$TEXT['VIEW'] = 'Veure';
$TEXT['UP'] = 'Amunt';
$TEXT['FORGOTTEN_DETAILS'] = 'Heu oblidat la contrasenya?';
$TEXT['NEED_TO_LOGIN'] = 'Voleu identificar-vos?';
$TEXT['SEND_DETAILS'] = 'Envia les Dades';
$TEXT['USERNAME'] = 'Nom d\'Usuari';
$TEXT['PASSWORD'] = 'Contrasenya';
$TEXT['HOME'] = 'Inici';
$TEXT['TARGET_FOLDER'] = 'Carpeta de dest&iacute;';
$TEXT['OVERWRITE_EXISTING'] = 'Sobreescriure';
$TEXT['FILE'] = 'fitxer';
$TEXT['FILES'] = 'fitxers';
$TEXT['FOLDER'] = 'carpeta';
$TEXT['FOLDERS'] = 'carpetes';
$TEXT['CREATE_FOLDER'] = 'Crea Carpeta';
$TEXT['UPLOAD_FILES'] = 'Penja Fitxer(s)';
$TEXT['CURRENT_FOLDER'] = 'Carpeta Actual';
$TEXT['TO'] = 'a';
$TEXT['FROM'] = 'des de';
$TEXT['INSTALL'] = 'Instal&middot;la';
$TEXT['UNINSTALL'] = 'Desinstal&middot;la';
$TEXT['VIEW_DETAILS'] = 'Veure Detalls';
$TEXT['DISPLAY_NAME'] = 'Nom a Mostrar';
$TEXT['AUTHOR'] = 'Autor';
$TEXT['VERSION'] = 'Versi&oacute;';
$TEXT['DESIGNED_FOR'] = 'Dissenyat Per';
$TEXT['DESCRIPTION'] = 'Descripci&oacute;';
$TEXT['EMAIL'] = 'Correu';
$TEXT['LANGUAGE'] = 'Idioma';
$TEXT['TIMEZONE'] = 'Fus Horari';
$TEXT['CURRENT_PASSWORD'] = 'Contrasenya Actual';
$TEXT['NEW_PASSWORD'] = 'Nova Contrasenya';
$TEXT['RETYPE_NEW_PASSWORD'] = 'Nova Contrasenya (de nou)';
$TEXT['ACTIVE'] = 'Actiu';
$TEXT['DISABLED'] = 'Inhabilitat';
$TEXT['ENABLED'] = 'Habilitat';
$TEXT['RETYPE_PASSWORD'] = 'Contrasenya (de nou)';
$TEXT['GROUP'] = 'Grup';
$TEXT['SYSTEM_PERMISSIONS'] = 'Permisos de Sistema';
$TEXT['MODULE_PERMISSIONS'] = 'Permisos de M&ograve;dul';
$TEXT['SHOW_ADVANCED'] = 'Mostra Opcions Avan&ccedil;ades';
$TEXT['HIDE_ADVANCED'] = 'Oculta Opcions Avan&ccedil;ades';
$TEXT['BASIC'] = 'B&agrave;sic';
$TEXT['ADVANCED'] = 'Avan&ccedil;at';
$TEXT['WEBSITE'] = 'P&agrave;gina Web';
$TEXT['DEFAULT'] = 'Per defecte';
$TEXT['KEYWORDS'] = 'Paraules Clau';
$TEXT['TEXT'] = 'Text';
$TEXT['HEADER'] = 'Cap&ccedil;alera';
$TEXT['FOOTER'] = 'Peu';
$TEXT['TEMPLATE'] = 'Plantilla';
$TEXT['THEME'] = 'Backend-Theme';
$TEXT['INSTALLATION'] = 'Instal&middot;laci&oacute;';
$TEXT['DATABASE'] = 'Base de Dades';
$TEXT['HOST'] = 'Servidor';
$TEXT['INTRO'] = 'Entrada';
$TEXT['PAGE'] = 'P&agrave;gina';
$TEXT['SIGNUP'] = 'Registre';
$TEXT['PHP_ERROR_LEVEL'] = 'Nivell d\'Informe d\'Error de PHP';
$TEXT['ADMIN'] = 'Admin';
$TEXT['PATH'] = 'Ruta';
$TEXT['URL'] = 'URL';
$TEXT['FRONTEND'] = 'Frontal';
$TEXT['EXTENSION'] = 'Extensions';
$TEXT['TABLE_PREFIX'] = 'Prefix de Taula';
$TEXT['CHANGES'] = 'Canvis';
$TEXT['ADMINISTRATION'] = 'Administraci&oacute;';
$TEXT['FORGOT_DETAILS'] = 'Heu oblidat els Detalls?';
$TEXT['LOGGED_IN'] = 'Identificat';
$TEXT['WELCOME_BACK'] = 'Benvingut de nou';
$TEXT['FULL_NAME'] = 'Nom Complet';
$TEXT['ACCOUNT_SIGNUP'] = 'Registre de Compte';
$TEXT['LINK'] = 'Enlla&ccedil;';
$TEXT['ANCHOR'] = 'Anchor';
$TEXT['TARGET'] = 'Dest&iacute;';
$TEXT['NEW_WINDOW'] = 'Nova Finestra';
$TEXT['SAME_WINDOW'] = 'La Mateixa Finestra';
$TEXT['TOP_FRAME'] = 'Top Frame';
$TEXT['PAGE_LEVEL_LIMIT'] = 'L&iacute;mit de Nivell de P&agrave;gina';
$TEXT['SUCCESS'] = '&Egrave;xit';
$TEXT['ERROR'] = 'Error';
$TEXT['ARE_YOU_SURE'] = 'Esteu segur?';
$TEXT['YES'] = 'S&iacute;';
$TEXT['NO'] = 'No';
$TEXT['SYSTEM_DEFAULT'] = 'Per Defecte del Sistema';
$TEXT['PAGE_TITLE'] = 'T&iacute;tol de la P&agrave;gina';
$TEXT['MENU_TITLE'] = 'T&iacute;tol del Men&uacute;';
$TEXT['ACTIONS'] = 'Accions';
$TEXT['UNKNOWN'] = 'Desconegut';
$TEXT['BLOCK'] = 'Bloc';
$TEXT['SEARCH'] = 'Cerca';
$TEXT['SEARCHING'] = 'Recerca';
$TEXT['POST'] = 'Missatge';
$TEXT['COMMENT'] = 'Comentari';
$TEXT['COMMENTS'] = 'Comentaris';
$TEXT['COMMENTING'] = 'Comentaris';
$TEXT['SHORT'] = 'Curt';
$TEXT['LONG'] = 'Llarg';
$TEXT['LOOP'] = 'Repetici&oacute;';
$TEXT['FIELD'] = 'Camp';
$TEXT['REQUIRED'] = 'Requerit';
$TEXT['LENGTH'] = 'Longitud';
$TEXT['MESSAGE'] = 'Missatge';
$TEXT['SUBJECT'] = 'Assumpte';
$TEXT['MATCH'] = 'Coincidir';
$TEXT['ALL_WORDS'] = 'Totes les Paraules';
$TEXT['ANY_WORDS'] = 'Qualsevol Paraula';
$TEXT['EXACT_MATCH'] = 'Coincid&egrave;ncia Exacta';
$TEXT['SHOW'] = 'Mostra';
$TEXT['HIDE'] = 'Amaga';
$TEXT['START_PUBLISHING'] = 'Inici de Publicaci&oacute;';
$TEXT['FINISH_PUBLISHING'] = 'Fi de Publicaci&oacute;';
$TEXT['DATE'] = 'Data';
$TEXT['START'] = 'Inici';
$TEXT['END'] = 'Fi';
$TEXT['IMAGE'] = 'Imatge';
$TEXT['ICON'] = 'Icona';
$TEXT['SECTION'] = 'Secci&oacute;';
$TEXT['DATE_FORMAT'] = 'Format de Data';
$TEXT['TIME_FORMAT'] = 'Format de Temps';
$TEXT['RESULTS'] = 'Resultats';
$TEXT['RESIZE'] = 'Redimensiona';
$TEXT['MANAGE'] = 'Administreu';
$TEXT['CODE'] = 'Codi';
$TEXT['WIDTH'] = 'Amplada';
$TEXT['HEIGHT'] = 'Al&ccedil;ada';
$TEXT['MORE'] = 'M&eacute;s';
$TEXT['READ_MORE'] = 'Llegir M&eacute;s';
$TEXT['CHANGE_SETTINGS'] = 'Canvia Par&agrave;metres';
$TEXT['CURRENT_PAGE'] = 'P&agrave;gina Actual';
$TEXT['CLOSE'] = 'Tanca';
$TEXT['INTRO_PAGE'] = 'P&agrave;gina d\'Entrada';
$TEXT['INSTALLATION_URL'] = 'URL d\'Instal&middot;laci&oacute;';
$TEXT['INSTALLATION_PATH'] = 'Ruta d\'Instal&middot;laci&oacute;';
$TEXT['PAGE_EXTENSION'] = 'Extensi&oacute; de P&agrave;gina';
$TEXT['NO_RESULTS'] = 'Cap Resultat';
$TEXT['WEBSITE_TITLE'] = 'T&iacute;tol del Lloc Web';
$TEXT['WEBSITE_DESCRIPTION'] = 'Descripci&oacute; del Lloc Web';
$TEXT['WEBSITE_KEYWORDS'] = 'Paraules clau del Lloc Web';
$TEXT['WEBSITE_HEADER'] = 'Cap&ccedil;alera del Lloc Web';
$TEXT['WEBSITE_FOOTER'] = 'Peu del Lloc Web';
$TEXT['RESULTS_HEADER'] = 'Cap&ccedil;alera de Resultats';
$TEXT['RESULTS_LOOP'] = 'Bucle de Resultats';
$TEXT['RESULTS_FOOTER'] = 'Peu de Resultats';
$TEXT['LEVEL'] = 'Nivell';
$TEXT['NOT_FOUND'] = 'No Trobat';
$TEXT['PAGE_SPACER'] = 'Separador de P&agrave;gina';
$TEXT['MATCHING'] = 'Matching';
$TEXT['TEMPLATE_PERMISSIONS'] = 'Permisos de Plantilla';
$TEXT['PAGES_DIRECTORY'] = 'Directori de P&agrave;gines';
$TEXT['MEDIA_DIRECTORY'] = 'Directori de Fitxers';
$TEXT['FILE_MODE'] = 'Mode Fitxer';
$TEXT['USER'] = 'Usuari';
$TEXT['OTHERS'] = 'Altres';
$TEXT['READ'] = 'Lectura';
$TEXT['WRITE'] = 'Escriptura';
$TEXT['EXECUTE'] = 'Execuci&oacute;';
$TEXT['SMART_LOGIN'] = 'Identificaci&oacute; R&agrave;pida';
$TEXT['REMEMBER_ME'] = 'Recorda les meues dades';
$TEXT['FILESYSTEM_PERMISSIONS'] = 'Permisos del Sistema de Fitxers';
$TEXT['DIRECTORIES'] = 'Directoris';
$TEXT['DIRECTORY_MODE'] = 'Mode Directori';
$TEXT['LIST_OPTIONS'] = 'Llista Opcions';
$TEXT['OPTION'] = 'Opci&oacute;';
$TEXT['ALLOW_MULTIPLE_SELECTIONS'] = 'Permetre Diverses Seleccions';
$TEXT['TEXTFIELD'] = 'Camp de text';
$TEXT['TEXTAREA'] = '&Agrave;rea de text';
$TEXT['SELECT_BOX'] = 'Quadre de Selecci&oacute;';
$TEXT['CHECKBOX_GROUP'] = 'Grup de quadres de verificaci&oacute;';
$TEXT['RADIO_BUTTON_GROUP'] = 'Grup de Botons';
$TEXT['SIZE'] = 'Mida';
$TEXT['DEFAULT_TEXT'] = 'Text per defecte';
$TEXT['SEPERATOR'] = 'Separador';
$TEXT['BACK'] = 'Arrere';
$TEXT['UNDER_CONSTRUCTION'] = 'En Construcci&oacute;';
$TEXT['MULTISELECT'] = 'Multi-selecci&oacute;';
$TEXT['SHORT_TEXT'] = 'Text Curt';
$TEXT['LONG_TEXT'] = 'Text Llarg';
$TEXT['HOMEPAGE_REDIRECTION'] = 'Redirecci&oacute; de P&agrave;gina Inicial';
$TEXT['HEADING'] = 'Encap&ccedil;alament';
$TEXT['MULTIPLE_MENUS'] = 'Diversos Men&uacute;s';
$TEXT['REGISTERED'] = 'Registrat';
$TEXT['SECTION_BLOCKS'] = 'Blocs de la Secci&oacute;';
$TEXT['REGISTERED_VIEWERS'] = 'Visualitzadors Registrats';
$TEXT['ALLOWED_VIEWERS'] = 'Allowed Viewers';
$TEXT['SUBMISSION_ID'] = 'ID de Tramesa';
$TEXT['SUBMISSIONS'] = 'Trameses';
$TEXT['SUBMITTED'] = 'Tram&eacute;s';
$TEXT['MAX_SUBMISSIONS_PER_HOUR'] = 'Trameses M&agrave;x. Per Hora';
$TEXT['SUBMISSIONS_STORED_IN_DATABASE'] = 'Trameses Emmagatzemades a la Base de Dades';
$TEXT['EMAIL_ADDRESS'] = 'Adre&ccedil;a de Correu';
$TEXT['CUSTOM'] = 'Personalitzat';
$TEXT['ANONYMOUS'] = 'An&ograve;nim';
$TEXT['SERVER_OPERATING_SYSTEM'] = 'Sistema Operatiu del Servidor';
$TEXT['WORLD_WRITEABLE_FILE_PERMISSIONS'] = 'Permisos d\'escriptura de fitxer per a tothom';
$TEXT['LINUX_UNIX_BASED'] = 'Basat en Linux/Unix';
$TEXT['WINDOWS'] = 'Windows';
$TEXT['HOME_FOLDER'] = 'Carpeta de l\'usuari';
$TEXT['HOME_FOLDERS'] = 'Carpetes dels usuaris';
$TEXT['PAGE_TRASH'] = 'Paperera';
$TEXT['INLINE'] = 'Inserida';
$TEXT['SEPARATE'] = 'Separada';
$TEXT['DELETED'] = 'Esborrat';
$TEXT['VIEW_DELETED_PAGES'] = 'Mostra P&agrave;gines Esborrades';
$TEXT['EMPTY_TRASH'] = 'Buida la Paperera';
$TEXT['TRASH_EMPTIED'] = 'Paperera Buidada';
$TEXT['ADD_SECTION'] = 'Afegeix Secci&oacute;';
$TEXT['POST_HEADER'] = 'Post Header';
$TEXT['POST_FOOTER'] = 'Post Footer';
$TEXT['POSTS_PER_PAGE'] = 'Posts Per Page';
$TEXT['RESIZE_IMAGE_TO'] = 'Redimensiona Imatge A';
$TEXT['UNLIMITED'] = 'Il&middot;limitat';
$TEXT['OF'] = 'De';
$TEXT['OUT_OF'] = 'Fora De';
$TEXT['NEXT'] = 'Seg&uuml;ent';
$TEXT['PREVIOUS'] = 'Anterior';
$TEXT['NEXT_PAGE'] = 'P&agrave;gina Seg&uuml;ent';
$TEXT['PREVIOUS_PAGE'] = 'P&agrave;gina Anterior';
$TEXT['ON'] = 'A';
$TEXT['LAST_UPDATED_BY'] = '&Uacute;ltima Actualitzaci&oacute; Per';
$TEXT['RESULTS_FOR'] = 'Resultats De';
$TEXT['TIME'] = 'Temps';
$TEXT['REDIRECT_AFTER'] = 'Redirect after';
$TEXT['WYSIWYG_STYLE'] = 'Estil WYSIWYG';
$TEXT['WYSIWYG_EDITOR'] = 'WYSIWYG Editor';
$TEXT['SERVER_EMAIL'] = 'Correu del Servidor';
$TEXT['MENU'] = 'Men&uacute;';
$TEXT['MANAGE_GROUPS'] = 'Administra els Grups';
$TEXT['MANAGE_USERS'] = 'Administra els Usuaris';
$TEXT['PAGE_LANGUAGES'] = 'Idiomes de la p&agrave;gina';
$TEXT['HIDDEN'] = 'Amagat';
$TEXT['MAIN'] = 'Principal';
$TEXT['RENAME_FILES_ON_UPLOAD'] = 'Rename Files On Upload';
$TEXT['APP_NAME'] = 'Application Name';
$TEXT['SESSION_IDENTIFIER'] = 'Session Identifier';
$TEXT['SEC_ANCHOR'] = 'Section-Anchor text';
$TEXT['BACKUP'] = 'Backup';
$TEXT['RESTORE'] = 'Restore';
$TEXT['BACKUP_DATABASE'] = 'Backup Database';
$TEXT['RESTORE_DATABASE'] = 'Restore Database';
$TEXT['BACKUP_ALL_TABLES'] = 'Backup all tables in database';
$TEXT['BACKUP_WB_SPECIFIC'] = 'Backup only WB-specific tables';
$TEXT['BACKUP_MEDIA'] = 'Backup Media';
$TEXT['RESTORE_MEDIA'] = 'Restore Media';
$TEXT['ADMINISTRATION_TOOL'] = 'Administration tool';
$TEXT['CAPTCHA_VERIFICATION'] = 'Captcha Verification';
$TEXT['VERIFICATION'] = 'Verification';
$TEXT['DEFAULT_CHARSET'] = 'Default Charset';
$TEXT['CHARSET'] = 'Charset';
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
$MESSAGE['FRONTEND']['SORRY_NO_VIEWING_PERMISSIONS'] = 'Ho sentim, no teniu permisos per a veure aquesta p&agrave;gina';
$MESSAGE['FRONTEND']['SORRY_NO_ACTIVE_SECTIONS'] = 'Sorry, no active content to display';

$MESSAGE['ADMIN']['INSUFFICIENT_PRIVELLIGES'] = 'No teniu privilegis suficients per estar ac&iacute;';

$MESSAGE['LOGIN']['BOTH_BLANK'] = 'Per favor introdu&iuml;u el vostre nom d\'usuari i contrasenya a baix';
$MESSAGE['LOGIN']['USERNAME_BLANK'] = 'Per favor introdu&iuml;u un nom d\'usuari';
$MESSAGE['LOGIN']['PASSWORD_BLANK'] = 'Per favor introdu&iuml;u una contrasenya';
$MESSAGE['LOGIN']['USERNAME_TOO_SHORT'] = 'El nom d\'usuari &eacute;s massa curt';
$MESSAGE['LOGIN']['PASSWORD_TOO_SHORT'] = 'La contrasenya &eacute;s massa curta';
$MESSAGE['LOGIN']['USERNAME_TOO_LONG'] = 'El nom d\'usuari &eacute;s massa llarg';
$MESSAGE['LOGIN']['PASSWORD_TOO_LONG'] = 'La contrasenya &eacute;s massa llarga';
$MESSAGE['LOGIN']['AUTHENTICATION_FAILED'] = 'Nom d\'usuari o contrasenya incorrectes';

$MESSAGE['SIGNUP']['NO_EMAIL'] = 'Heu d\'Introduir una adre&ccedil;a de correu';
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

$MESSAGE['FORGOT_PASS']['NO_DATA'] = 'Per favor introdu&iuml;u la vostra adre&ccedil;a de correu a baix';
$MESSAGE['FORGOT_PASS']['EMAIL_NOT_FOUND'] = 'El correu que heu introdu&iuml;t no s\'ha trobat a la base de dades';
$MESSAGE['FORGOT_PASS']['CANNOT_EMAIL'] = 'No ha estat possible enviar la contrasenya, per favor contacteu amb l\'administrador del sistema';
$MESSAGE['FORGOT_PASS']['PASSWORD_RESET'] = 'El nom d\'usuari i contrasenya han estat enviats a la vostra adre&ccedil;a de correu';
$MESSAGE['FORGOT_PASS']['ALREADY_RESET'] = 'La contrasenya no es pot reiniciar m&eacute;s d\'un cop per hora, disculpeu';

$MESSAGE['START']['WELCOME_MESSAGE'] = 'Benvingut/da al Panell de Control de WebsiteBaker';
$MESSAGE['START']['INSTALL_DIR_EXISTS'] = 'Atenci&oacute;, el Directori d\'Instal&middot;laci&oacute; Encara Existeix!';
$MESSAGE['START']['CURRENT_USER'] = 'Actualment esteu identificat com a:';

$MESSAGE['SETTINGS']['UNABLE_OPEN_CONFIG'] = 'No ha estat possible obrir el fitxer de configuraci&oacute;';
$MESSAGE['SETTINGS']['UNABLE_WRITE_CONFIG'] = 'No es pot escriure al fitxer de configuraci&oacute;';
$MESSAGE['SETTINGS']['SAVED'] = 'Par&agrave;metres desats amb &egrave;xit';
$MESSAGE['SETTINGS']['MODE_SWITCH_WARNING'] = 'Av&iacute;s: Pr&eacute;mer aquest bot&oacute; reinicia tots els canvis no desats';
$MESSAGE['SETTINGS']['WORLD_WRITEABLE_WARNING'] = 'Av&iacute;s: a&ccedil;&ograve; nom&eacute;s &eacute;s recomana per a entorns de proves';

$MESSAGE['USERS']['ADDED'] = 'Usuari afegit amb &egrave;xit';
$MESSAGE['USERS']['SAVED'] = 'Usuari desat amb &egrave;xit';
$MESSAGE['USERS']['DELETED'] = 'Usuari esborrat amb &egrave;xit';
$MESSAGE['USERS']['NO_GROUP'] = 'No s\'ha seleccionat cap grup';
$MESSAGE['USERS']['USERNAME_TOO_SHORT'] = 'El nom d\'usuari introdu&iuml;t &eacute;s massa curt';
$MESSAGE['USERS']['PASSWORD_TOO_SHORT'] = 'La contrasenya introdu&iuml;da &eacute;s massa curta';
$MESSAGE['USERS']['PASSWORD_MISMATCH'] = 'La contrasenya introdu&iuml;da no coincideix';
$MESSAGE['USERS']['INVALID_EMAIL'] = 'L\'adre&ccedil;a de correu introdu&iuml;da &eacute;s inv&agrave;lida';
$MESSAGE['USERS']['EMAIL_TAKEN'] = 'L\'adre&ccedil;a de correu que heu introdu&iuml;t ja est&agrave; en &uacute;s';
$MESSAGE['USERS']['USERNAME_TAKEN'] = 'El nom d\'usuari introdu&iuml;t ja est&agrave; en &uacute;s';
$MESSAGE['USERS']['CHANGING_PASSWORD'] = 'Av&iacute;s: Nom&eacute;s haur&iacute;eu d\'introduir valors als camps superiors si voleu canviar aquestes contrasenyes d\'usuari';
$MESSAGE['USERS']['CONFIRM_DELETE'] = 'Esteu segur de voler esborrar l\'usuari seleccionat?';

$MESSAGE['GROUPS']['ADDED'] = 'Grup afegit amb &egrave;xit';
$MESSAGE['GROUPS']['SAVED'] = 'Grup desat amb &egrave;xit';
$MESSAGE['GROUPS']['DELETED'] = 'Grup esborrat amb &egrave;xit';
$MESSAGE['GROUPS']['GROUP_NAME_BLANK'] = 'El nom del grup &eacute;s buit';
$MESSAGE['GROUPS']['CONFIRM_DELETE'] = 'Esteu segur de voler esborrar el grup seleccionat (i qualsevol usuari que pertanyi a aquest)?';
$MESSAGE['GROUPS']['NO_GROUPS_FOUND'] = 'No s\'han trobat grups';
$MESSAGE['GROUPS']['GROUP_NAME_EXISTS'] = 'Group name already exists';

$MESSAGE['PREFERENCES']['DETAILS_SAVED'] = 'Dades desades amb &egrave;xit';
$MESSAGE['PREFERENCES']['EMAIL_UPDATED'] = 'Correu actualitzat amb &egrave;xit';
$MESSAGE['PREFERENCES']['CURRENT_PASSWORD_INCORRECT'] = 'La contrasenya (actual) que heu introdu&iuml;t &eacute;s incorrecta';
$MESSAGE['PREFERENCES']['PASSWORD_CHANGED'] = 'Contrasenya canviada amb &egrave;xit';

$MESSAGE['TEMPLATES']['CHANGE_TEMPLATE_NOTICE'] = 'Av&iacute;s: per a canviar la plantilla heu d\'anar a la secci&oacute; Par&agrave;metres';

$MESSAGE['MEDIA']['DIR_DOT_DOT_SLASH'] = 'No es pot incloure ../ al nom de la carpeta';
$MESSAGE['MEDIA']['DIR_DOES_NOT_EXIST'] = 'Directory does not exist';
$MESSAGE['MEDIA']['TARGET_DOT_DOT_SLASH'] = 'No es pot tenir ../ a la carpeta de dest&iacute;';
$MESSAGE['MEDIA']['NAME_DOT_DOT_SLASH'] = 'No es pot incloure ../ al nom';
$MESSAGE['MEDIA']['NAME_INDEX_PHP'] = 'No es pot usar index.php com a nom';
$MESSAGE['MEDIA']['NONE_FOUND'] = 'No s\'han trobat fitxers a la carpeta actual';
$MESSAGE['MEDIA']['FILE_NOT_FOUND'] = 'Fitxer no trobat';
$MESSAGE['MEDIA']['DELETED_FILE'] = 'Fitxer esborrat amb &egrave;xit';
$MESSAGE['MEDIA']['DELETED_DIR'] = 'Carpeta esborrada amb &egrave;xit';
$MESSAGE['MEDIA']['CONFIRM_DELETE'] = 'Esteu segur que voleu esborrar el seg&uuml;ent fitxer o carpeta?';
$MESSAGE['MEDIA']['CANNOT_DELETE_FILE'] = 'No es pot esborrar el fitxer seleccionat';
$MESSAGE['MEDIA']['CANNOT_DELETE_DIR'] = 'No es pot esborrar la carpeta seleccionada';
$MESSAGE['MEDIA']['BLANK_NAME'] = 'No heu introdu&iuml;t un nou nom';
$MESSAGE['MEDIA']['BLANK_EXTENSION'] = 'No heu introdu&iuml;t una extensi&oacute; de fitxer';
$MESSAGE['MEDIA']['RENAMED'] = 'S\'ha canviat el nom amb &egrave;xit';
$MESSAGE['MEDIA']['CANNOT_RENAME'] = 'No s\'ha pogut canviar el nom';
$MESSAGE['MEDIA']['FILE_EXISTS'] = 'Ja existeix un fitxer amb el nom que heu introdu&iuml;t';
$MESSAGE['MEDIA']['DIR_EXISTS'] = 'Ja existeix una carpeta amb el nom que heu introdu&iuml;t';
$MESSAGE['MEDIA']['DIR_MADE'] = 'Carpeta creada amb &egrave;xit';
$MESSAGE['MEDIA']['DIR_NOT_MADE'] = 'No s\'ha pogut crear la carpeta';
$MESSAGE['MEDIA']['SINGLE_UPLOADED'] = ' fitxer s\'ha penjat amb &egrave;xit';
$MESSAGE['MEDIA']['UPLOADED'] = ' fitxers han estat penjats amb &egrave;xit';

$MESSAGE['PAGES']['ADDED'] = 'P&agrave;gina afegida amb &egrave;xit';
$MESSAGE['PAGES']['ADDED_HEADING'] = 'Cap&ccedil;alera de p&agrave;gina afegida amb &egrave;xit';
$MESSAGE['PAGES']['PAGE_EXISTS'] = 'Existeix una p&agrave;gina amb el mateix t&iacute;tol o similar';
$MESSAGE['PAGES']['CANNOT_CREATE_ACCESS_FILE'] = 'Error creant el fitxer d\'acc&eacute;s al directori /pages (privilegis insuficients)';
$MESSAGE['PAGES']['CANNOT_DELETE_ACCESS_FILE'] = 'Error esborrant el fitxer d\'acc&eacute;s al directori /pages (privilegis insuficients)';
$MESSAGE['PAGES']['NOT_FOUND'] = 'No s\'ha trobat la p&agrave;gina';
$MESSAGE['PAGES']['SAVED'] = 'P&agrave;gina desada amb &egrave;xit';
$MESSAGE['PAGES']['SAVED_SETTINGS'] = 'Par&agrave;metres de p&agrave;gina desats amb &egrave;xit';
$MESSAGE['PAGES']['NOT_SAVED'] = 'Error desant la p&agrave;gina';
$MESSAGE['PAGES']['DELETE_CONFIRM'] = 'Esteu segur de voler esborrar la p&agrave;gina seleccionada';
$MESSAGE['PAGES']['DELETED'] = 'P&agrave;gina esborrada amb &egrave;xit';
$MESSAGE['PAGES']['RESTORED'] = 'P&agrave;gina restaurada amb &egrave;xit';
$MESSAGE['PAGES']['BLANK_PAGE_TITLE'] = 'Per favor introdu&iuml;u un t&iacute;tol de p&agrave;gina';
$MESSAGE['PAGES']['BLANK_MENU_TITLE'] = 'Per favor introdu&iuml;u un t&iacute;tol per al men&uacute;';
$MESSAGE['PAGES']['REORDERED'] = 'P&agrave;gina re-ordenada amb &egrave;xit';
$MESSAGE['PAGES']['CANNOT_REORDER'] = 'Error re-ordenant p&agrave;gina';
$MESSAGE['PAGES']['INSUFFICIENT_PERMISSIONS'] = 'No teniu permisos per a modificar aquesta p&agrave;gina';
$MESSAGE['PAGES']['INTRO_NOT_WRITABLE'] = 'No s\'ha pogut escriure al fitxer /pages/intro.php (privilegis insuficients)';
$MESSAGE['PAGES']['INTRO_SAVED'] = 'P&agrave;gina d\'entrada desada amb &egrave;xit';
$MESSAGE['PAGES']['LAST_MODIFIED'] = '&Uacute;ltima modificaci&oacute; per';
$MESSAGE['PAGES']['INTRO_LINK'] = 'Premeu AC&Iacute; per a modificar la p&agrave;gina d\'entrada';
$MESSAGE['PAGES']['SECTIONS_PROPERTIES_SAVED'] = 'Propietats de la secci&oacute; desades amb &egrave;xit';
$MESSAGE['PAGES']['RETURN_TO_PAGES'] = 'Torna a les p&agrave;gines';

$MESSAGE['GENERIC']['FILL_IN_ALL'] = 'Per favor torneu arrere i completeu tots els camps';
$MESSAGE['GENERIC']['FILE_TYPE'] = 'Per favor recordeu que el fitxer que pengeu ha d\'estar en un dels seg&uuml;ents formats:';
$MESSAGE['GENERIC']['FILE_TYPES'] = 'Per favor recordeu que els fitxers que pengeu han d\'estar en un dels seg&uuml;ents formats:';
$MESSAGE['GENERIC']['CANNOT_UPLOAD'] = 'No s\'ha pogut penjar el fitxer';
$MESSAGE['GENERIC']['ALREADY_INSTALLED'] = 'Ja est&agrave; instal&middot;lat';
$MESSAGE['GENERIC']['NOT_INSTALLED'] = 'No est&agrave; instal&middot;lat';
$MESSAGE['GENERIC']['CANNOT_UNINSTALL'] = 'No s\'ha pogut desinstal&middot;lar';
$MESSAGE['GENERIC']['CANNOT_UNZIP'] = 'No s\'ha pogut descomprimir el fitxer';
$MESSAGE['GENERIC']['INSTALLED'] = 'Instal&middot;lat amb &egrave;xit';
$MESSAGE['GENERIC']['UPGRADED'] = 'Upgraded successfully';
$MESSAGE['GENERIC']['UNINSTALLED'] = 'Desinstal&middot;lat amb &egrave;xit';
$MESSAGE['GENERIC']['BAD_PERMISSIONS'] = 'No s\'ha pogut escriure al directori de dest&iacute;';
$MESSAGE['GENERIC']['INVALID'] = 'El fitxer que heu penjat no &eacute;s v&agrave;lid';
$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IN_USE'] = 'No s\'ha pogut desinstal&middot;lar: s\'est&agrave; usant el fitxer seleccionat';

$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IN_USE_TMPL'] = "<br /><br />{{type}} <b>{{type_name}}</b> could not be uninstalled, because it is still in use on {{pages}}.<br /><br />";
$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IN_USE_TMPL_PAGES'] = "this page;these pages";
$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IS_DEFAULT_TEMPLATE'] = "Can't uninstall the template <b>{{name}}</b>, because it is the default template!";

$MESSAGE['GENERIC']['WEBSITE_UNDER_CONSTRUCTION'] = 'Lloc Web en Construcci&oacute;';
$MESSAGE['GENERIC']['PLEASE_CHECK_BACK_SOON'] = 'Per favor torneu-ho a intentar prompte...';
$MESSAGE['GENERIC']['PLEASE_BE_PATIENT'] = 'Please be patient, this might take a while.';
$MESSAGE['GENERIC']['ERROR_OPENING_FILE'] = 'Error opening file.';
$MESSAGE['GENERIC']['INVALID_ADDON_FILE'] = 'Invalid WebsiteBaker installation file. Please check the *.zip format.';
$MESSAGE['GENERIC']['INVALID_LANGUAGE_FILE'] = 'Invalid WebsiteBaker language file. Please check the text file.';

$MESSAGE['MOD_FORM']['REQUIRED_FIELDS'] = 'Heu d\'introduir les dades per als seg&uuml;ents camps';
$MESSAGE['MOD_FORM']['EXCESS_SUBMISSIONS'] = 'Ho sentim, aquest formulari ha estat enviat massa vegades durant l\'&uacute;ltima hora. Per favor torneu-ho a intentar d\'ac&iacute; una hora.';
$MESSAGE['MOD_FORM']['INCORRECT_CAPTCHA'] = 'The verification number (also known as Captcha) that you entered is incorrect. If you are having problems reading the Captcha, please email: '.SERVER_EMAIL.'';

$MESSAGE['ADDON']['RELOAD'] = 'Update database with information from Add-on files (e.g. after FTP upload).';
$MESSAGE['ADDON']['ERROR_RELOAD'] = 'Error while updating the Add-On information.';
$MESSAGE['ADDON']['MODULES_RELOADED'] = 'Modules reloaded successfully';
$MESSAGE['ADDON']['TEMPLATES_RELOADED'] = 'Templates reloaded successfully';
$MESSAGE['ADDON']['LANGUAGES_RELOADED'] = 'Languages reloaded successfully';
$MESSAGE['ADDON']['PRECHECK_FAILED'] = 'Add-on installation failed. Your system does not fulfill the requirements of this Add-on. To make this Add-on working on your system, please fix the issues summarized below.';
$MESSAGE['ADDON']['MANUAL_INSTALLATION'] = 'When modules are uploaded via FTP (not recommended), the module installation files <tt>install.php</tt>, <tt>upgrade.php</tt> or <tt>uninstall.php</tt> will not be executed automatically. Those modules may not work correct or do not uninstall properly.<br /><br />You can execute the module files manually for modules uploaded via FTP below.';
$MESSAGE['ADDON']['MANUAL_INSTALLATION_WARNING'] = 'Warning: Existing module database entries will get lost. Only use this option if you experience problems with modules uploaded via FTP.';

?>