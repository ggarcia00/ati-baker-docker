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
 * @version         $Id: ES.php 1282 2010-01-30 05:29:56Z Luisehahne $
 * @filesource		$HeadURL: http://svn.websitebaker2.org/branches/2.8.x/wb/languages/ES.php $
 * @lastmodified    $Date: 2010-01-30 06:29:56 +0100 (Sa, 30. Jan 2010) $
 *
 */

// use languageedit-module to modify this file

// Define that this file is loaded
if(!defined('LANGUAGE_LOADED')) {
define('LANGUAGE_LOADED', true);
}

// Set the language information
$language_code = 'ES';
$language_name = 'Spanish';
$language_version = '2.8';
$language_platform = '2.8.x';
$language_author = 'Samuel Mateo, Jr. | samuelmateo.com';
$language_license = 'GNU General Public License';

// Menu titles
$MENU['START'] = 'Inicio';
$MENU['PAGES'] = 'P&aacute;ginas';
$MENU['MEDIA'] = 'Media';
$MENU['ADDONS'] = 'Add-ons';
$MENU['MODULES'] = 'M&oacute;dulos';
$MENU['TEMPLATES'] = 'Plantillas';
$MENU['LANGUAGES'] = 'Lenguajes';
$MENU['PREFERENCES'] = 'Preferencias';
$MENU['SETTINGS'] = 'Configuraci&oacute;n';
$MENU['ADMINTOOLS'] = 'Admin-Tools';
$MENU['ACCESS'] = 'Acceso';
$MENU['USERS'] = 'Usuarios';
$MENU['GROUPS'] = 'Grupos';
$MENU['HELP'] = 'Ayuda';
$MENU['VIEW'] = 'Vista Preliminar';
$MENU['LOGOUT'] = 'Salir';
$MENU['LOGIN'] = 'Entrar';
$MENU['FORGOT'] = 'Recuperar los detalles de registro';

// Section overviews
$OVERVIEW['START'] = 'Administraci&oacute;n General';
$OVERVIEW['PAGES'] = 'Administrar p&aacute;ginas del web...';
$OVERVIEW['MEDIA'] = 'Administrar archivos en la carpeta Media...';
$OVERVIEW['MODULES'] = 'Administrar m&oacute;dulos de WebsiteBaker...';
$OVERVIEW['TEMPLATES'] = 'Administrar plantillas de apariencia...';
$OVERVIEW['LANGUAGES'] = 'Administrar lenguajes...';
$OVERVIEW['PREFERENCES'] = 'Cambiar preferencias de email, contrase&ntilde;a, etc... ';
$OVERVIEW['SETTINGS'] = 'Configurar WebsiteBaker...';
$OVERVIEW['USERS'] = 'Administrar acceso de usuarios a WebsiteBaker...';
$OVERVIEW['GROUPS'] = 'Administrar groups de usuarios y sus permisos...';
$OVERVIEW['HELP'] = 'Respuestas a tus preguntas...';
$OVERVIEW['VIEW'] = 'Ver y explorar tu sitio en una nueva ventana...';
$OVERVIEW['ADMINTOOLS'] = 'Access the WebsiteBaker administration tools...';

// Headings
$HEADING['MODIFY_DELETE_PAGE'] = 'Modificar/Eliminar P&aacute;gina';
$HEADING['DELETED_PAGES'] = 'P&aacute;ginas Eliminadas';
$HEADING['ADD_PAGE'] = 'Agregar P&aacute;gina';
$HEADING['ADD_HEADING'] = 'Agregar Encabezado';
$HEADING['MODIFY_PAGE'] = 'Modificar P&aacute;gina';
$HEADING['MODIFY_PAGE_SETTINGS'] = 'Modificar Configuraci&oacute;n de P&aacute;gina';
$HEADING['MODIFY_ADVANCED_PAGE_SETTINGS'] = 'Modificar Configuraci&oacute;n Avanzada de P&aacute;gina';
$HEADING['MANAGE_SECTIONS'] = 'Administrar Secciones';
$HEADING['MODIFY_INTRO_PAGE'] = 'Modificar P&aacute;gina Intro';

$HEADING['BROWSE_MEDIA'] = 'Explorar Media';
$HEADING['CREATE_FOLDER'] = 'Crear Carpeta';
$HEADING['UPLOAD_FILES'] = 'Subir Archivo(s)';

$HEADING['INSTALL_MODULE'] = 'Instalar M&oacute;dulo';
$HEADING['UNINSTALL_MODULE'] = 'Desinstalar M&oacute;dulo';
$HEADING['MODULE_DETAILS'] = 'Detalles de M&oacute;dulo';

$HEADING['INSTALL_TEMPLATE'] = 'Instalar Plantilla';
$HEADING['UNINSTALL_TEMPLATE'] = 'Desinstalar Plantilla';
$HEADING['TEMPLATE_DETAILS'] = 'Detalles de Plantilla';

$HEADING['INSTALL_LANGUAGE'] = 'Instalar Lenguaje';
$HEADING['UNINSTALL_LANGUAGE'] = 'Desinstalar Lenguaje';
$HEADING['LANGUAGE_DETAILS'] = 'Detalles del Lenguaje';

$HEADING['MY_SETTINGS'] = 'Mi Configuraci&oacute;n';
$HEADING['MY_EMAIL'] = 'Mi Email';
$HEADING['MY_PASSWORD'] = 'Mi Contrase&ntilde;a';

$HEADING['GENERAL_SETTINGS'] = 'Configuraci&oacute;n General';
$HEADING['DEFAULT_SETTINGS'] = 'Configuraci&oacute;n Original';
$HEADING['SEARCH_SETTINGS'] = 'Configuraci&oacute;n del Search';
$HEADING['FILESYSTEM_SETTINGS'] = 'Configuraci&oacute;n del sistema de Ficheros';
$HEADING['SERVER_SETTINGS'] = 'Configuraci&oacute;n del Servidor';
$HEADING['WBMAILER_SETTINGS'] = 'Mailer Settings';
$HEADING['ADMINISTRATION_TOOLS'] = 'Herramientas de administraci&oacute;n';

$HEADING['MODIFY_DELETE_USER'] = 'Modificar/Eliminar Usuario';
$HEADING['ADD_USER'] = 'Agregar Usuario';
$HEADING['MODIFY_USER'] = 'Modificar Usuario';

$HEADING['MODIFY_DELETE_GROUP'] = 'Modificar/Eliminar Grupo';
$HEADING['ADD_GROUP'] = 'Agregar Grupo';
$HEADING['MODIFY_GROUP'] = 'Modificar Grupo';

$HEADING['ADDON_PRECHECK_FAILED'] = 'Add-On requirements not met';
$HEADING['INVOKE_MODULE_FILES'] = 'Execute module files manually';

// Other text
$TEXT['OPEN'] = 'Open';
$TEXT['ADD'] = 'Agregar';
$TEXT['MODIFY'] = 'Modificar';
$TEXT['SETTINGS'] = 'Configuraci&oacute;n';
$TEXT['DELETE'] = 'Eliminar';
$TEXT['SAVE'] = 'Guardar';
$TEXT['RESET'] = 'Reiniciar';
$TEXT['LOGIN'] = 'Entrar';
$TEXT['RELOAD'] = 'Recargar';
$TEXT['CANCEL'] = 'Cancelar';
$TEXT['NAME'] = 'nombre';
$TEXT['PLEASE_SELECT'] = 'Elegir';
$TEXT['TITLE'] = 'T&iacute;tulo';
$TEXT['PARENT'] = 'Padre';
$TEXT['TYPE'] = 'Tipo';
$TEXT['VISIBILITY'] = 'Visibilidad';
$TEXT['PRIVATE'] = 'Privada';
$TEXT['PUBLIC'] = 'P&uacute;blica';
$TEXT['NONE'] = 'Ninguno';
$TEXT['NONE_FOUND'] = 'Ninguna';
$TEXT['CURRENT'] = 'Corriente';
$TEXT['CHANGE'] = 'Cambiar';
$TEXT['WINDOW'] = 'Ventana';
$TEXT['DESCRIPTION'] = 'Descripci&oacute;n';
$TEXT['KEYWORDS'] = 'Palabras Clave';
$TEXT['ADMINISTRATORS'] = 'Administradores';
$TEXT['PRIVATE_VIEWERS'] = 'Usuarios privados';
$TEXT['EXPAND'] = 'Expandir';
$TEXT['COLLAPSE'] = 'Colapsar';
$TEXT['MOVE_UP'] = 'Subir';
$TEXT['MOVE_DOWN'] = 'Bajar';
$TEXT['RENAME'] = 'Renombrar';
$TEXT['MODIFY_SETTINGS'] = 'Cambiar Configuraci&oacute;n';
$TEXT['MODIFY_CONTENT'] = 'Modificar Contenido';
$TEXT['VIEW'] = 'Ver';
$TEXT['UP'] = 'Arriba';
$TEXT['FORGOTTEN_DETAILS'] = '&iquest;Lo ha olvidado?';
$TEXT['NEED_TO_LOGIN'] = '&iquest;Necesita Entrar?';
$TEXT['SEND_DETAILS'] = 'Enviar Detalles';
$TEXT['USERNAME'] = 'Usuario';
$TEXT['PASSWORD'] = 'Contrase&ntilde;a';
$TEXT['HOME'] = 'Inicio';
$TEXT['TARGET_FOLDER'] = 'Carpeta';
$TEXT['OVERWRITE_EXISTING'] = 'Sobreescribir';
$TEXT['FILE'] = 'Archivo';
$TEXT['FILES'] = 'Archivos';
$TEXT['FOLDER'] = 'Carpeta';
$TEXT['FOLDERS'] = 'Carpetas';
$TEXT['CREATE_FOLDER'] = 'Crear Carpeta';
$TEXT['UPLOAD_FILES'] = 'Subir Archivo(s)';
$TEXT['CURRENT_FOLDER'] = 'Carpeta Actual';
$TEXT['TO'] = 'Para';
$TEXT['FROM'] = 'De';
$TEXT['INSTALL'] = 'Instalar';
$TEXT['UNINSTALL'] = 'Desinstalar';
$TEXT['VIEW_DETAILS'] = 'Ver Detalles';
$TEXT['DISPLAY_NAME'] = 'Mostrar Nombre';
$TEXT['AUTHOR'] = 'Autor';
$TEXT['VERSION'] = 'Versi&oacute;n';
$TEXT['DESIGNED_FOR'] = 'Dise&ntilde;ado para';
$TEXT['DESCRIPTION'] = 'Descripci&oacute;n';
$TEXT['EMAIL'] = 'Email';
$TEXT['LANGUAGE'] = 'Lenguaje';
$TEXT['TIMEZONE'] = 'Huso Horario';
$TEXT['CURRENT_PASSWORD'] = 'Contrase&ntilde;a Actual';
$TEXT['NEW_PASSWORD'] = 'Nueva Contrase&ntilde;a';
$TEXT['RETYPE_NEW_PASSWORD'] = 'Repetir Nueva Contrase&ntilde;a';
$TEXT['ACTIVE'] = 'Activo';
$TEXT['DISABLED'] = 'Deshabilitado';
$TEXT['ENABLED'] = 'Habilitado';
$TEXT['RETYPE_PASSWORD'] = 'Repetir Contrase&ntilde;a';
$TEXT['GROUP'] = 'Grupo';
$TEXT['SYSTEM_PERMISSIONS'] = 'Permisos de Sistema';
$TEXT['MODULE_PERMISSIONS'] = 'Permisos de Modulo';
$TEXT['SHOW_ADVANCED'] = 'Ver Opciones Avanzadas';
$TEXT['HIDE_ADVANCED'] = 'Ocultar Opciones Avanzadas';
$TEXT['BASIC'] = 'Basico';
$TEXT['ADVANCED'] = 'Avanzado';
$TEXT['WEBSITE'] = 'Website';
$TEXT['DEFAULT'] = 'Original';
$TEXT['KEYWORDS'] = 'Palabras Clave';
$TEXT['TEXT'] = 'Texto';
$TEXT['HEADER'] = 'Encabezado';
$TEXT['FOOTER'] = 'Pie de p&aacute;gina';
$TEXT['TEMPLATE'] = 'Plantilla';
$TEXT['THEME'] = 'Backend-Theme';
$TEXT['INSTALLATION'] = 'Instalaci&oacute;n';
$TEXT['DATABASE'] = 'Base de datos';
$TEXT['HOST'] = 'Host';
$TEXT['INTRO'] = 'Intro';
$TEXT['PAGE'] = 'P&aacute;gina';
$TEXT['SIGNUP'] = 'Firmar';
$TEXT['PHP_ERROR_LEVEL'] = 'Nivel de Reporte de Errores de PHP';
$TEXT['ADMIN'] = 'Admin';
$TEXT['PATH'] = 'Ruta de acceso';
$TEXT['URL'] = 'URL';
$TEXT['FRONTEND'] = 'Front-end';
$TEXT['EXTENSION'] = 'Extensi&oacute;n';
$TEXT['TABLE_PREFIX'] = 'Prefijo de tablas';
$TEXT['CHANGES'] = 'Cambios';
$TEXT['ADMINISTRATION'] = 'Administraci&oacute;n';
$TEXT['FORGOT_DETAILS'] = '&iquest;Olvid&oacute; los detalles?';
$TEXT['LOGGED_IN'] = 'Conectado';
$TEXT['WELCOME_BACK'] = 'Bienvenido';
$TEXT['FULL_NAME'] = 'Nombre Completo';
$TEXT['ACCOUNT_SIGNUP'] = 'Abrir Cuenta';
$TEXT['LINK'] = 'Enlace';
$TEXT['ANCHOR'] = 'Anchor';
$TEXT['TARGET'] = 'Objetivo';
$TEXT['NEW_WINDOW'] = 'Nueva Ventana';
$TEXT['SAME_WINDOW'] = 'Misma Ventana';
$TEXT['TOP_FRAME'] = 'Marco Superior';
$TEXT['PAGE_LEVEL_LIMIT'] = 'Niveles de P&aacute;ginas';
$TEXT['SUCCESS'] = '&Eacute;xito';
$TEXT['ERROR'] = 'Error';
$TEXT['ARE_YOU_SURE'] = '&iquest;Esta seguro?';
$TEXT['YES'] = 'Si';
$TEXT['NO'] = 'No';
$TEXT['SYSTEM_DEFAULT'] = 'Original del Sistema';
$TEXT['PAGE_TITLE'] = 'T&iacute;tulo de la P&aacute;gina';
$TEXT['MENU_TITLE'] = 'T&iacute;tulo del Men&uacute;';
$TEXT['ACTIONS'] = 'Acciones';
$TEXT['UNKNOWN'] = 'Desconocido';
$TEXT['BLOCK'] = 'Block';
$TEXT['SEARCH'] = 'Buscar';
$TEXT['SEARCHING'] = 'Buscando';
$TEXT['POST'] = 'Post';
$TEXT['COMMENT'] = 'Comentario';
$TEXT['COMMENTS'] = 'Comentarios';
$TEXT['COMMENTING'] = 'Comentando';
$TEXT['SHORT'] = 'Corto';
$TEXT['LONG'] = 'Largo';
$TEXT['LOOP'] = 'Bucle';
$TEXT['FIELD'] = 'Campo';
$TEXT['REQUIRED'] = 'Obligatorio';
$TEXT['LENGTH'] = 'Largo';
$TEXT['MESSAGE'] = 'Mensaje';
$TEXT['SUBJECT'] = 'Asunto';
$TEXT['MATCH'] = 'Coincidencia';
$TEXT['ALL_WORDS'] = 'Todas las palabras';
$TEXT['ANY_WORDS'] = 'Alguna de las palabras';
$TEXT['EXACT_MATCH'] = 'Frase exacta';
$TEXT['SHOW'] = 'Ver';
$TEXT['HIDE'] = 'Ocultar';
$TEXT['START_PUBLISHING'] = 'Iniciar Publicaci&oacute;n';
$TEXT['FINISH_PUBLISHING'] = 'Terminar Publicaci&oacute;n';
$TEXT['DATE'] = 'Fecha';
$TEXT['START'] = 'Inicio';
$TEXT['END'] = 'Fin';
$TEXT['IMAGE'] = 'Imagen';
$TEXT['ICON'] = 'Icono';
$TEXT['SECTION'] = 'Secci&oacute;n';
$TEXT['DATE_FORMAT'] = 'Formato de Fecha';
$TEXT['TIME_FORMAT'] = 'Formato de Hora';
$TEXT['RESULTS'] = 'Resultados';
$TEXT['RESIZE'] = 'Tama&ntilde;o';
$TEXT['MANAGE'] = 'Administrar';
$TEXT['CODE'] = 'C&oacute;digo';
$TEXT['WIDTH'] = 'Ancho';
$TEXT['HEIGHT'] = 'Altura';
$TEXT['MORE'] = 'M&aacute;s';
$TEXT['READ_MORE'] = 'M&aacute;s Informaci&oacute;n';
$TEXT['CHANGE_SETTINGS'] = 'Cambiar Configuraci&oacute;n';
$TEXT['CURRENT_PAGE'] = 'P&aacute;gina Actual';
$TEXT['CLOSE'] = 'Cerrar';
$TEXT['INTRO_PAGE'] = 'P&aacute;gina Intro';
$TEXT['INSTALLATION_URL'] = 'URL de Instalaci&oacute;n';
$TEXT['INSTALLATION_PATH'] = 'Ruta de Instalaci&oacute;n';
$TEXT['PAGE_EXTENSION'] = 'Extensi&oacute;n de P&aacute;gina';
$TEXT['NO_RESULTS'] = 'Ning&uacute;n Resultado';
$TEXT['WEBSITE_TITLE'] = 'T&iacute;tulo del Web';
$TEXT['WEBSITE_DESCRIPTION'] = 'Descripci&oacute;n del Web';
$TEXT['WEBSITE_KEYWORDS'] = 'Palabras Clave del Web';
$TEXT['WEBSITE_HEADER'] = 'Encabezado del Web';
$TEXT['WEBSITE_FOOTER'] = 'Pie de p&aacute;gina del Web';
$TEXT['RESULTS_HEADER'] = 'Encabezado de Resultados';
$TEXT['RESULTS_LOOP'] = 'Bucle de Resultados';
$TEXT['RESULTS_FOOTER'] = 'Pie de P&aacute;gina de Resultados';
$TEXT['LEVEL'] = 'Nivel';
$TEXT['NOT_FOUND'] = 'No Encontrado.';
$TEXT['PAGE_SPACER'] = 'Separador de P&aacute;gina';
$TEXT['MATCHING'] = 'Coincidencia';
$TEXT['TEMPLATE_PERMISSIONS'] = 'Permisos de plantilla';
$TEXT['PAGES_DIRECTORY'] = 'Directorio de P&aacute;ginas';
$TEXT['MEDIA_DIRECTORY'] = 'Directorio de Media';
$TEXT['FILE_MODE'] = 'Modo de Archivo';
$TEXT['USER'] = 'Ususario';
$TEXT['OTHERS'] = 'Otros';
$TEXT['READ'] = 'Lectura';
$TEXT['WRITE'] = 'Escritura';
$TEXT['EXECUTE'] = 'Ejecuci&oacute;n';
$TEXT['SMART_LOGIN'] = 'Entrada Inteligente';
$TEXT['REMEMBER_ME'] = 'Recu&eacute;rdame';
$TEXT['FILESYSTEM_PERMISSIONS'] = 'Permisos del Sistema de Archivos';
$TEXT['DIRECTORIES'] = 'Directorios';
$TEXT['DIRECTORY_MODE'] = 'Modo de Directorios';
$TEXT['LIST_OPTIONS'] = 'Opciones de Lista';
$TEXT['OPTION'] = 'Opci&oacute;n';
$TEXT['ALLOW_MULTIPLE_SELECTIONS'] = 'Selecciones M&uacute;ltiples';
$TEXT['TEXTFIELD'] = 'Campo de texto';
$TEXT['TEXTAREA'] = 'Textarea';
$TEXT['SELECT_BOX'] = 'Caja de selecci&oacute;n';
$TEXT['CHECKBOX_GROUP'] = 'Grupo de Checkbox ';
$TEXT['RADIO_BUTTON_GROUP'] = 'Gupo Bot&oacute;n de Radio';
$TEXT['SIZE'] = 'Tama&ntilde;o';
$TEXT['DEFAULT_TEXT'] = 'Texto Predeterminado';
$TEXT['SEPERATOR'] = 'Separador';
$TEXT['BACK'] = 'Volver';
$TEXT['UNDER_CONSTRUCTION'] = 'En Construcci&oacute;n';
$TEXT['MULTISELECT'] = 'Multi-selecci&oacute;n';
$TEXT['SHORT_TEXT'] = 'Texto Corto';
$TEXT['LONG_TEXT'] = 'Texto largo';
$TEXT['HOMEPAGE_REDIRECTION'] = 'Redirecci&oacute;n a la p&aacute;gina de Inicio';
$TEXT['HEADING'] = 'Encabezado';
$TEXT['MULTIPLE_MENUS'] = 'Men&uacute;s M&uacute;ltiples';
$TEXT['REGISTERED'] = 'Registrado';
$TEXT['SECTION_BLOCKS'] = 'Bloques de la Secci&oacute;n';
$TEXT['REGISTERED_VIEWERS'] = 'Visitantes Registrados';
$TEXT['ALLOWED_VIEWERS'] = 'Espectadores Permitidos';
$TEXT['SUBMISSION_ID'] = 'Presentaci&oacute;n ID';
$TEXT['SUBMISSIONS'] = 'Presentaciones';
$TEXT['SUBMITTED'] = 'Presentado';
$TEXT['MAX_SUBMISSIONS_PER_HOUR'] = 'Max. Presentaciones por hora';
$TEXT['SUBMISSIONS_STORED_IN_DATABASE'] = 'Presenciaciones Guardadas en la base de datos';
$TEXT['EMAIL_ADDRESS'] = 'Direcci&oacute;n de Email';
$TEXT['CUSTOM'] = 'Personalizado';
$TEXT['ANONYMOUS'] = 'An&oacute;nimo';
$TEXT['SERVER_OPERATING_SYSTEM'] = 'Sistema Operativo del Servidor';
$TEXT['WORLD_WRITEABLE_FILE_PERMISSIONS'] = 'Permisos de escritura para todos';
$TEXT['LINUX_UNIX_BASED'] = 'basado en Linux/Unix ';
$TEXT['WINDOWS'] = 'Windows';
$TEXT['HOME_FOLDER'] = 'Carpeta Inicio';
$TEXT['HOME_FOLDERS'] = 'Carpetas Inicio';
$TEXT['PAGE_TRASH'] = 'Papelera en P&aacute;gina';
$TEXT['INLINE'] = 'En l&iacute;nea';
$TEXT['SEPARATE'] = 'Separado';
$TEXT['DELETED'] = 'Eliminado';
$TEXT['VIEW_DELETED_PAGES'] = 'Ver P&aacute;ginas Eliminadas';
$TEXT['EMPTY_TRASH'] = 'Vaciar Papelera';
$TEXT['TRASH_EMPTIED'] = 'Papelera Vac&iacute;a';
$TEXT['ADD_SECTION'] = 'Agregar Secci&oacute;n';
$TEXT['POST_HEADER'] = 'Post Encabezado';
$TEXT['POST_FOOTER'] = 'Post Pie';
$TEXT['POSTS_PER_PAGE'] = 'Posts Por P&aacute;gina';
$TEXT['RESIZE_IMAGE_TO'] = 'Redimensionar imagen a';
$TEXT['UNLIMITED'] = 'Ilimitado';
$TEXT['OF'] = 'De';
$TEXT['OUT_OF'] = 'Fuera De';
$TEXT['NEXT'] = 'Siguiente';
$TEXT['PREVIOUS'] = 'Anterior';
$TEXT['NEXT_PAGE'] = 'Siguiente P&aacute;gina';
$TEXT['PREVIOUS_PAGE'] = 'P&aacute;gina Anterior';
$TEXT['ON'] = 'En';
$TEXT['LAST_UPDATED_BY'] = 'Editado por';
$TEXT['RESULTS_FOR'] = 'Resultados para';
$TEXT['TIME'] = 'Hora';
$TEXT['REDIRECT_AFTER'] = 'Redirect after';
$TEXT['WYSIWYG_STYLE'] = 'WYSIWYG';
$TEXT['WYSIWYG_EDITOR'] = 'Editor WYSIWYG';
$TEXT['SERVER_EMAIL'] = 'Servidor de Email';
$TEXT['MENU'] = 'Menu';
$TEXT['MANAGE_GROUPS'] = 'Administrar Grupos';
$TEXT['MANAGE_USERS'] = 'Administrar Usuarios';
$TEXT['PAGE_LANGUAGES'] = 'Lenguages de P&aacute;gina';
$TEXT['HIDDEN'] = 'Oculto';
$TEXT['MAIN'] = 'Principal';
$TEXT['RENAME_FILES_ON_UPLOAD'] = 'Renombrar los ficheros en la subida';
$TEXT['APP_NAME'] = 'Nombre de aplicaci&oacute;n';
$TEXT['SESSION_IDENTIFIER'] = 'Identificador de Sesi&oacute;n';
$TEXT['SEC_ANCHOR'] = 'Section-Anchor text';
$TEXT['BACKUP'] = 'Copia de seguridad';
$TEXT['RESTORE'] = 'Restaurar';
$TEXT['BACKUP_DATABASE'] = 'Base de datos de seguridad';
$TEXT['RESTORE_DATABASE'] = 'Restaurar base de datos';
$TEXT['BACKUP_ALL_TABLES'] = 'Reserva todas las Tablas de la Base de Datos';
$TEXT['BACKUP_WB_SPECIFIC'] = 'Reserva solamente las tablas de WB';
$TEXT['BACKUP_MEDIA'] = 'Copia de seguridad de los Medios';
$TEXT['RESTORE_MEDIA'] = 'Restaurar Medios';
$TEXT['ADMINISTRATION_TOOL'] = 'Herramienta de Administraci&oacute;n';
$TEXT['CAPTCHA_VERIFICATION'] = 'Verificaci&oacute;n de Captcha (clave)';
$TEXT['VERIFICATION'] = 'Verificaci&oacute;n';
$TEXT['DEFAULT_CHARSET'] = 'Conjunto de caracteres por defecto';
$TEXT['CHARSET'] = 'Conjunto de Caraceteres';
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
$MESSAGE['FRONTEND']['SORRY_NO_VIEWING_PERMISSIONS'] = 'Perd&oacute;n, no tiene permiso para ver esta p&aacute;gina';
$MESSAGE['FRONTEND']['SORRY_NO_ACTIVE_SECTIONS'] = 'Sorry, no active content to display';

$MESSAGE['ADMIN']['INSUFFICIENT_PRIVELLIGES'] = 'Privilegios insuficientes para estar aqu&iacute;';

$MESSAGE['LOGIN']['BOTH_BLANK'] = 'Ingrese su Nombre de Usuario y Contrase&ntilde;a';
$MESSAGE['LOGIN']['USERNAME_BLANK'] = 'Ingrese su Nombre de Usuario';
$MESSAGE['LOGIN']['PASSWORD_BLANK'] = 'ingrese su Contrase&ntilde;a';
$MESSAGE['LOGIN']['USERNAME_TOO_SHORT'] = 'Nombre de Usuario muy corto';
$MESSAGE['LOGIN']['PASSWORD_TOO_SHORT'] = 'Contrase&ntilde;a muy corta';
$MESSAGE['LOGIN']['USERNAME_TOO_LONG'] = 'Nombre de Usuario muy largo';
$MESSAGE['LOGIN']['PASSWORD_TOO_LONG'] = 'Contrase&ntilde;a muy larga';
$MESSAGE['LOGIN']['AUTHENTICATION_FAILED'] = 'El Nombre de Usuario o Pasword incorrecto';

$MESSAGE['SIGNUP']['NO_EMAIL'] = 'Debe ingresar una direccion de email';
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

$MESSAGE['FORGOT_PASS']['NO_DATA'] = 'Por favor ingrese su direccion de email';
$MESSAGE['FORGOT_PASS']['EMAIL_NOT_FOUND'] = 'Email no encontrado en base de datos';
$MESSAGE['FORGOT_PASS']['CANNOT_EMAIL'] = 'No puedo enviarle la contrase&ntilde;a, contacte a su Administrador';
$MESSAGE['FORGOT_PASS']['PASSWORD_RESET'] = 'Nombre de Usuario y Contrase&ntilde;a enviados a su direccion de email';
$MESSAGE['FORGOT_PASS']['ALREADY_RESET'] = 'La contrase&ntilde;a no puede ser cambiada m&aacute;s de una vez por hora';

$MESSAGE['START']['WELCOME_MESSAGE'] = 'Bienvenido a la consola de Administraci&oacute;n';
$MESSAGE['START']['INSTALL_DIR_EXISTS'] = 'El directorio de instalaci&oacute;n todav&iacute;a existe. Es buena idea eliminarlo!';
$MESSAGE['START']['CURRENT_USER'] = 'Est&aacute;s conectado como:';

$MESSAGE['SETTINGS']['UNABLE_OPEN_CONFIG'] = 'No se pudo abrir el archivo de configuraci&oacute;n';
$MESSAGE['SETTINGS']['UNABLE_WRITE_CONFIG'] = 'No se pudo escribir en el archivo de configuraci&oacute;n';
$MESSAGE['SETTINGS']['SAVED'] = 'Configuraci&oacute;n guardada';
$MESSAGE['SETTINGS']['MODE_SWITCH_WARNING'] = 'Atenci&oacute;n: Este bot&oacute;n eliminar&aacute; los cambios que no hayan sido guardados.';
$MESSAGE['SETTINGS']['WORLD_WRITEABLE_WARNING'] = 'Atenci&oacute;n: S&oacute;lo recomendado para entornos de prueba';

$MESSAGE['USERS']['ADDED'] = 'Nuevo usuario agregado';
$MESSAGE['USERS']['SAVED'] = 'Usuario guardado';
$MESSAGE['USERS']['DELETED'] = 'Usuario eliminado';
$MESSAGE['USERS']['NO_GROUP'] = 'Ning&uacute;n grupo fue seleccionado';
$MESSAGE['USERS']['USERNAME_TOO_SHORT'] = 'Nombre de Usuario muy corto';
$MESSAGE['USERS']['PASSWORD_TOO_SHORT'] = 'Contrase&ntilde;a muy corta';
$MESSAGE['USERS']['PASSWORD_MISMATCH'] = 'Las contrase&ntilde;as no coinciden';
$MESSAGE['USERS']['INVALID_EMAIL'] = 'Email inv&aacute;lido';
$MESSAGE['USERS']['EMAIL_TAKEN'] = 'Email en uso';
$MESSAGE['USERS']['USERNAME_TAKEN'] = 'Nombre de Usuario ocupado';
$MESSAGE['USERS']['CHANGING_PASSWORD'] = 'Atenci&oacute;n: Solo debe escribir en estos campos si desea cambiar la contrase&ntilde;a de este usuario.';
$MESSAGE['USERS']['CONFIRM_DELETE'] = '&iquest;Esta seguro que desea eliminar el usuario?';

$MESSAGE['GROUPS']['ADDED'] = 'Nuevo grupo agregado';
$MESSAGE['GROUPS']['SAVED'] = 'Grupo guardado';
$MESSAGE['GROUPS']['DELETED'] = 'Grupo eliminado';
$MESSAGE['GROUPS']['GROUP_NAME_BLANK'] = 'El nombre del grupo est&aacute; vaci&oacute;';
$MESSAGE['GROUPS']['CONFIRM_DELETE'] = '&iquest;Est&aacute; seguro que desea eliminar el grupo selecciondo (y los usuarios que lo componen)?';
$MESSAGE['GROUPS']['NO_GROUPS_FOUND'] = 'No hay ning&ntilde;n grupo';
$MESSAGE['GROUPS']['GROUP_NAME_EXISTS'] = 'Nombre de grupo ya existe';

$MESSAGE['PREFERENCES']['DETAILS_SAVED'] = 'Detalles guardados';
$MESSAGE['PREFERENCES']['EMAIL_UPDATED'] = 'Email guardado';
$MESSAGE['PREFERENCES']['CURRENT_PASSWORD_INCORRECT'] = 'El (actual) es incorrecto';
$MESSAGE['PREFERENCES']['PASSWORD_CHANGED'] = 'Contrase&ntilde;a cambiada';

$MESSAGE['TEMPLATES']['CHANGE_TEMPLATE_NOTICE'] = 'Atenci&oacute;n: para cambiar la plantilla ir a la secci&oacute;n de Configuraci&oacute;n';

$MESSAGE['MEDIA']['DIR_DOT_DOT_SLASH'] = 'No puede incluir ../ en el nombre de carpeta';
$MESSAGE['MEDIA']['DIR_DOES_NOT_EXIST'] = 'El directorio no existe';
$MESSAGE['MEDIA']['TARGET_DOT_DOT_SLASH'] = 'No puede tener ../ en el nombre de carpeta';
$MESSAGE['MEDIA']['NAME_DOT_DOT_SLASH'] = 'No puede incluir ../ en el nombre';
$MESSAGE['MEDIA']['NAME_INDEX_PHP'] = 'No se puede usar index.php como nombre';
$MESSAGE['MEDIA']['NONE_FOUND'] = 'No hay medias en esta carpeta';
$MESSAGE['MEDIA']['FILE_NOT_FOUND'] = 'Archivo no encontrado';
$MESSAGE['MEDIA']['DELETED_FILE'] = 'Archivo eliminado';
$MESSAGE['MEDIA']['DELETED_DIR'] = 'Carpeta eliminada';
$MESSAGE['MEDIA']['CONFIRM_DELETE'] = '&iquest;Est&aacute; seguro que desea eliminar la siguiente carpeta o archivo?';
$MESSAGE['MEDIA']['CANNOT_DELETE_FILE'] = 'No se puede eliminar el archivo seleccionado';
$MESSAGE['MEDIA']['CANNOT_DELETE_DIR'] = 'No se puede eliminar la carpeta seleccionada';
$MESSAGE['MEDIA']['BLANK_NAME'] = 'No ha ingresado un nombre nuevo';
$MESSAGE['MEDIA']['BLANK_EXTENSION'] = 'No ha ingresado una extensi&oacute;n de archivo';
$MESSAGE['MEDIA']['RENAMED'] = 'El Nombre ha sido cambiado';
$MESSAGE['MEDIA']['CANNOT_RENAME'] = 'El Nombre no ha sido cambiado';
$MESSAGE['MEDIA']['FILE_EXISTS'] = 'Ese archivo ya existe';
$MESSAGE['MEDIA']['DIR_EXISTS'] = 'Esa carpeta ya existe';
$MESSAGE['MEDIA']['DIR_MADE'] = 'Carpeta creada';
$MESSAGE['MEDIA']['DIR_NOT_MADE'] = 'No se pudo crear carpeta';
$MESSAGE['MEDIA']['SINGLE_UPLOADED'] = ' archivo recibido correctamente';
$MESSAGE['MEDIA']['UPLOADED'] = ' archivos recibidos correctamente';

$MESSAGE['PAGES']['ADDED'] = 'P&aacute;gina agregada';
$MESSAGE['PAGES']['ADDED_HEADING'] = 'Encabezado de P&aacute;gina agregado';
$MESSAGE['PAGES']['PAGE_EXISTS'] = 'Ya existe una p&aacute;gina con un t&iacute;tulo igual o similar';
$MESSAGE['PAGES']['CANNOT_CREATE_ACCESS_FILE'] = 'Error creando archivo de acceso en el directorio /pages (privilegios insuficientes)';
$MESSAGE['PAGES']['CANNOT_DELETE_ACCESS_FILE'] = 'Error eliminando archivo de acceso en el directorio /pages (privilegios insuficientes)';
$MESSAGE['PAGES']['NOT_FOUND'] = 'No se ha encontrado la p&aacute;gina';
$MESSAGE['PAGES']['SAVED'] = 'P&aacute;gina guardada correctamente';
$MESSAGE['PAGES']['SAVED_SETTINGS'] = 'Configuraci&oacute;n de P&aacute;gina guardada';
$MESSAGE['PAGES']['NOT_SAVED'] = 'Error guardando la p&aacute;gina';
$MESSAGE['PAGES']['DELETE_CONFIRM'] = 'Est&aacute; seguro que desea eliminar esta p&aacute;gina y todas sus sub-p&aacute;ginas';
$MESSAGE['PAGES']['DELETED'] = 'P&aacute;gina eliminada';
$MESSAGE['PAGES']['RESTORED'] = 'P&aacute;gina recuperada';
$MESSAGE['PAGES']['BLANK_PAGE_TITLE'] = 'Ingrese un t&iacute;tulo de p&aacute;gina';
$MESSAGE['PAGES']['BLANK_MENU_TITLE'] = 'Inagrese un t&iacute;tulo de men&uacute;';
$MESSAGE['PAGES']['REORDERED'] = 'Orden de p&aacute;gina cambiado';
$MESSAGE['PAGES']['CANNOT_REORDER'] = 'Error reordenando la p&aacute;gina';
$MESSAGE['PAGES']['INSUFFICIENT_PERMISSIONS'] = 'Usted no tiene permiso para modificar esta p&aacute;gina';
$MESSAGE['PAGES']['INTRO_NOT_WRITABLE'] = 'No se pudo escribir en el archivo /pages/intro.php (privilegios insuficientes)';
$MESSAGE['PAGES']['INTRO_SAVED'] = 'Intro guardada';
$MESSAGE['PAGES']['LAST_MODIFIED'] = '&Uacute;ltima modificaci&oacute;n hecha por';
$MESSAGE['PAGES']['INTRO_LINK'] = 'Pinche aqu&iacute; para modificar Intro';
$MESSAGE['PAGES']['SECTIONS_PROPERTIES_SAVED'] = 'Propiedades de la secci&oacute;n guardadas';
$MESSAGE['PAGES']['RETURN_TO_PAGES'] = 'Volver a las p&aacute;ginas';

$MESSAGE['GENERIC']['FILL_IN_ALL'] = 'Vuelva y complete todos los campos';
$MESSAGE['GENERIC']['FILE_TYPE'] = 'El archivo a subir debe ser del siguiente formato:';
$MESSAGE['GENERIC']['FILE_TYPES'] = 'El archivo a subir debe ser de uno de los siguientes formatos:';
$MESSAGE['GENERIC']['CANNOT_UPLOAD'] = 'No se pudos subir archivo';
$MESSAGE['GENERIC']['ALREADY_INSTALLED'] = 'Ya instalado';
$MESSAGE['GENERIC']['NOT_INSTALLED'] = 'No instalado';
$MESSAGE['GENERIC']['CANNOT_UNINSTALL'] = 'No se puede desinstalar';
$MESSAGE['GENERIC']['CANNOT_UNZIP'] = 'No se pudo descomprimir (zip)';
$MESSAGE['GENERIC']['INSTALLED'] = 'Instalaci&oacute;n correcta';
$MESSAGE['GENERIC']['UPGRADED'] = 'Actualizaci&oacute;n Completada';
$MESSAGE['GENERIC']['UNINSTALLED'] = 'Desinstalaci&oacute;n correcta';
$MESSAGE['GENERIC']['BAD_PERMISSIONS'] = 'No se pudo escribir en el directorio';
$MESSAGE['GENERIC']['INVALID'] = 'Archivo inv&aacute;lido';
$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IN_USE'] = 'Desinstalaci&oacute;n erronea: el archivo seleccionado est&aacute; en uso';

$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IN_USE_TMPL'] = "<br />No se puede desinstalar el {{type}} <b>{{type_name}}</b>, dado que se est&aacute; utilizando {{pages}}:<br /><br />";
$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IN_USE_TMPL_PAGES'] = "en la p&aacute;gina siguiente;en las p&aacute;ginas siguientes";
$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IS_DEFAULT_TEMPLATE'] = "No se puede desinstalar el template {{name}} dado que se trata del template est&aacute;ndar.";

$MESSAGE['GENERIC']['WEBSITE_UNDER_CONSTRUCTION'] = 'Website Under Construction';
$MESSAGE['GENERIC']['PLEASE_CHECK_BACK_SOON'] = 'Vuelva pronto...';
$MESSAGE['GENERIC']['PLEASE_BE_PATIENT'] = 'Por favor, sea paciente. Esto puede tardar un rato.';
$MESSAGE['GENERIC']['ERROR_OPENING_FILE'] = 'Error abriendo fichero.';
$MESSAGE['GENERIC']['INVALID_ADDON_FILE'] = 'Invalid WebsiteBaker installation file. Please check the *.zip format.';
$MESSAGE['GENERIC']['INVALID_LANGUAGE_FILE'] = 'Invalid WebsiteBaker language file. Please check the text file.';

$MESSAGE['MOD_FORM']['REQUIRED_FIELDS'] = 'Debe completar los siguiente campos';
$MESSAGE['MOD_FORM']['EXCESS_SUBMISSIONS'] = 'Disculpe este formulario ha sido enviado demasiadas veces seguidas. Vuelva a intentarlo en una hora.';
$MESSAGE['MOD_FORM']['INCORRECT_CAPTCHA'] = 'El n&uacute;mero de verificaci&oacute;n que ha introducido es incorrecto. Si est&aacute;s teniendo problemas ley&eacute;ndolo, por favor, env&iacute;e un e-mail a: '.SERVER_EMAIL.'';

$MESSAGE['ADDON']['RELOAD'] = 'Update database with information from Add-on files (e.g. after FTP upload).';
$MESSAGE['ADDON']['ERROR_RELOAD'] = 'Error while updating the Add-On information.';
$MESSAGE['ADDON']['MODULES_RELOADED'] = 'M&oacute;dulos recargados correctamente';
$MESSAGE['ADDON']['TEMPLATES_RELOADED'] = 'Plantillas recargadas correctamente';
$MESSAGE['ADDON']['LANGUAGES_RELOADED'] = 'Lenguajes recargados correctamente';
$MESSAGE['ADDON']['PRECHECK_FAILED'] = 'Add-on installation failed. Your system does not fulfill the requirements of this Add-on. To make this Add-on working on your system, please fix the issues summarized below.';
$MESSAGE['ADDON']['MANUAL_INSTALLATION'] = 'When modules are uploaded via FTP (not recommended), the module installation files <tt>install.php</tt>, <tt>upgrade.php</tt> or <tt>uninstall.php</tt> will not be executed automatically. Those modules may not work correct or do not uninstall properly.<br /><br />You can execute the module files manually for modules uploaded via FTP below.';
$MESSAGE['ADDON']['MANUAL_INSTALLATION_WARNING'] = 'Warning: Existing module database entries will get lost. Only use this option if you experience problems with modules uploaded via FTP.';

?>