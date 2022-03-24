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
 * @version         $Id: PT.php 1282 2010-01-30 05:29:56Z Luisehahne $
 * @filesource		$HeadURL: http://svn.websitebaker2.org/branches/2.8.x/wb/languages/PT.php $
 * @lastmodified    $Date: 2010-01-30 06:29:56 +0100 (Sa, 30. Jan 2010) $
 *
 */

// use languageedit-module to modify this file

// Define that this file is loaded
if(!defined('LANGUAGE_LOADED')) {
define('LANGUAGE_LOADED', true);
}

// Set the language information
$language_code = 'PT';
$language_name = 'Portuguese (Brazil)';
$language_version = '2.8';
$language_platform = '2.8.x';
$language_author = 'Daniel Neto';
$language_license = 'GNU General Public License';

// Menu titles
$MENU['START'] = 'In&iacute;cio';
$MENU['PAGES'] = 'P&aacute;ginas';
$MENU['MEDIA'] = 'M&iacute;dia';
$MENU['ADDONS'] = 'Add-ons';
$MENU['MODULES'] = 'M&oacute;dulos';
$MENU['TEMPLATES'] = 'Temas (Templates)';
$MENU['LANGUAGES'] = 'Idiomas';
$MENU['PREFERENCES'] = 'Prefer&ecirc;ncias';
$MENU['SETTINGS'] = 'Configura&ccedil;&otilde;es';
$MENU['ADMINTOOLS'] = 'Admin-Tools';
$MENU['ACCESS'] = 'Acessos';
$MENU['USERS'] = 'Usu&aacute;rios';
$MENU['GROUPS'] = 'Grupos';
$MENU['HELP'] = 'Ajuda';
$MENU['VIEW'] = 'Visualizar';
$MENU['LOGOUT'] = 'Log-out';
$MENU['LOGIN'] = 'Login';
$MENU['FORGOT'] = 'Receber Detalhes do Login';

// Section overviews
$OVERVIEW['START'] = 'Vis&atilde;o Geral da Administra&ccedil;&atilde;o';
$OVERVIEW['PAGES'] = 'Gerencie as P&aacute;ginas do seu site...';
$OVERVIEW['MEDIA'] = 'Gerencie os arquivos armazenados na pasta Media...';
$OVERVIEW['MODULES'] = 'Gerencie os M&oacute;dulos do WebsiteBaker...';
$OVERVIEW['TEMPLATES'] = 'Altere a apar&ecirc;ncia do seu site com temas(templates)...';
$OVERVIEW['LANGUAGES'] = 'Gerencie os idiomas do seu website...';
$OVERVIEW['PREFERENCES'] = 'Altere suas prefer&ecirc;ncias como email, senha, etc... ';
$OVERVIEW['SETTINGS'] = 'Altere as configura&ccedil;&otilde;es do WebsiteBaker...';
$OVERVIEW['USERS'] = 'Gerencie os usu&aacute;rios que podem logar no WebsiteBaker...';
$OVERVIEW['GROUPS'] = 'Gerencie os grupos de usu&aacute;rios e suas permiss&otilde;es de sistema...';
$OVERVIEW['HELP'] = 'D&uacute;vidas? Encontre respostas...';
$OVERVIEW['VIEW'] = 'Visualize e navegue em seu website atrav&eacute;s de uma nova janela...';
$OVERVIEW['ADMINTOOLS'] = 'Access the WebsiteBaker administration tools...';

// Headings
$HEADING['MODIFY_DELETE_PAGE'] = 'Modificar/Apagar P&aacute;gina';
$HEADING['DELETED_PAGES'] = 'P&aacute;ginas apagadas';
$HEADING['ADD_PAGE'] = 'Adicionar P&aacute;gina';
$HEADING['ADD_HEADING'] = 'Adicionar Cabe&ccedil;alho';
$HEADING['MODIFY_PAGE'] = 'Modificar P&aacute;gina';
$HEADING['MODIFY_PAGE_SETTINGS'] = 'Modificar Configura&ccedil;&otilde;es da P&aacute;gina';
$HEADING['MODIFY_ADVANCED_PAGE_SETTINGS'] = 'Modificar Configura&ccedil;&otilde;es Avan&ccedil;adas da P&aacute;gina';
$HEADING['MANAGE_SECTIONS'] = 'Gerenciar Sess&otilde;es';
$HEADING['MODIFY_INTRO_PAGE'] = 'Modificar P&aacute;gina de Introdu&ccedil;&atilde;o';

$HEADING['BROWSE_MEDIA'] = 'Navegar pela M&iacute;dia';
$HEADING['CREATE_FOLDER'] = 'Criar Pasta';
$HEADING['UPLOAD_FILES'] = 'Enviar Arquivo(s)';

$HEADING['INSTALL_MODULE'] = 'Instalar M&oacute;dulo';
$HEADING['UNINSTALL_MODULE'] = 'Desinstalar M&oacute;dulo';
$HEADING['MODULE_DETAILS'] = 'Detalhes do M&oacute;dulo';

$HEADING['INSTALL_TEMPLATE'] = 'Instalar Tema (Template)';
$HEADING['UNINSTALL_TEMPLATE'] = 'Desinstalar Tema (Template)';
$HEADING['TEMPLATE_DETAILS'] = 'Detalhes do Tema (Template)';

$HEADING['INSTALL_LANGUAGE'] = 'Instalar Idioma';
$HEADING['UNINSTALL_LANGUAGE'] = 'Desinstalar Idioma';
$HEADING['LANGUAGE_DETAILS'] = 'Detalhes do Idioma';

$HEADING['MY_SETTINGS'] = 'Minhas Configura&ccedil;&otilde;es';
$HEADING['MY_EMAIL'] = 'Meu Email';
$HEADING['MY_PASSWORD'] = 'Minha Senha';

$HEADING['GENERAL_SETTINGS'] = 'Configura&ccedil;&otilde;es Gerais';
$HEADING['DEFAULT_SETTINGS'] = 'Configura&ccedil;&otilde;es Padr&atilde;o';
$HEADING['SEARCH_SETTINGS'] = 'Configura&ccedil;&otilde;es de Busca';
$HEADING['FILESYSTEM_SETTINGS'] = 'Configura&ccedil;&otilde;es de Sistema de Arquivos';
$HEADING['SERVER_SETTINGS'] = 'Configura&ccedil;&otilde;es do Servidor';
$HEADING['WBMAILER_SETTINGS'] = 'Mailer Settings';
$HEADING['ADMINISTRATION_TOOLS'] = 'Ferramentas de Administra&ccedil;&atilde;o';

$HEADING['MODIFY_DELETE_USER'] = 'Modificar/Apagar Usu&aacute;rio';
$HEADING['ADD_USER'] = 'Adicionar Usu&aacute;rio';
$HEADING['MODIFY_USER'] = 'Modificar Usu&aacute;rio';

$HEADING['MODIFY_DELETE_GROUP'] = 'Modificar/Apagar Grupo';
$HEADING['ADD_GROUP'] = 'Adicionar Grupo';
$HEADING['MODIFY_GROUP'] = 'Modificar Grupo';

$HEADING['ADDON_PRECHECK_FAILED'] = 'Add-On requirements not met';
$HEADING['INVOKE_MODULE_FILES'] = 'Execute module files manually';

// Other text
$TEXT['OPEN'] = 'Open';
$TEXT['ADD'] = 'Adicionar';
$TEXT['MODIFY'] = 'Modificar';
$TEXT['SETTINGS'] = 'Configura&ccedil;&otilde;es';
$TEXT['DELETE'] = 'Apagar';
$TEXT['SAVE'] = 'Salvar';
$TEXT['RESET'] = 'Redefinir';
$TEXT['LOGIN'] = 'Login';
$TEXT['RELOAD'] = 'Recarregar';
$TEXT['CANCEL'] = 'Cancelar';
$TEXT['NAME'] = 'Nome';
$TEXT['PLEASE_SELECT'] = 'Por Favor escolha';
$TEXT['TITLE'] = 'T&iacute;tulo';
$TEXT['PARENT'] = 'Parent';
$TEXT['TYPE'] = 'Tipo';
$TEXT['VISIBILITY'] = 'Visibilidade';
$TEXT['PRIVATE'] = 'Privado';
$TEXT['PUBLIC'] = 'P&uacute;blico';
$TEXT['NONE'] = 'Nenhum';
$TEXT['NONE_FOUND'] = 'Nada Encontrado';
$TEXT['CURRENT'] = 'Atual';
$TEXT['CHANGE'] = 'Alterar';
$TEXT['WINDOW'] = 'Window';
$TEXT['DESCRIPTION'] = 'Descri&ccedil;&atilde;o';
$TEXT['KEYWORDS'] = 'Keywords';
$TEXT['ADMINISTRATORS'] = 'Administrators';
$TEXT['PRIVATE_VIEWERS'] = 'Private Viewers';
$TEXT['EXPAND'] = 'Expand';
$TEXT['COLLAPSE'] = 'Collapse';
$TEXT['MOVE_UP'] = 'Mover para Cima';
$TEXT['MOVE_DOWN'] = 'Mover para Baixo';
$TEXT['RENAME'] = 'Renomear';
$TEXT['MODIFY_SETTINGS'] = 'Modificar Configura&ccedil;&otilde;es';
$TEXT['MODIFY_CONTENT'] = 'Modificar Conte&uacute;do';
$TEXT['VIEW'] = 'Ver';
$TEXT['UP'] = 'Cima';
$TEXT['FORGOTTEN_DETAILS'] = 'Esqueceu suas credenciais?';
$TEXT['NEED_TO_LOGIN'] = 'Precisar fazer log-in?';
$TEXT['SEND_DETAILS'] = 'Enviar credenciais';
$TEXT['USERNAME'] = 'Usu&aacute;rio';
$TEXT['PASSWORD'] = 'Senha';
$TEXT['HOME'] = 'Home';
$TEXT['TARGET_FOLDER'] = 'Pasta Alvo';
$TEXT['OVERWRITE_EXISTING'] = 'Substituir Existente';
$TEXT['FILE'] = 'Arquivo';
$TEXT['FILES'] = 'Arquivos';
$TEXT['FOLDER'] = 'Pasta';
$TEXT['FOLDERS'] = 'Pastas';
$TEXT['CREATE_FOLDER'] = 'Criar Pasta';
$TEXT['UPLOAD_FILES'] = 'Enviar Arquivo(s)';
$TEXT['CURRENT_FOLDER'] = 'Pasta Atual';
$TEXT['TO'] = 'Para';
$TEXT['FROM'] = 'De';
$TEXT['INSTALL'] = 'Instalar';
$TEXT['UNINSTALL'] = 'Desinstalar';
$TEXT['VIEW_DETAILS'] = 'Ver Detalhes';
$TEXT['DISPLAY_NAME'] = 'Nome de Exibi&ccedil;&atilde;o';
$TEXT['AUTHOR'] = 'Autor';
$TEXT['VERSION'] = 'Vers&atilde;o';
$TEXT['DESIGNED_FOR'] = 'Designado para';
$TEXT['DESCRIPTION'] = 'Descri&ccedil;&atilde;o';
$TEXT['EMAIL'] = 'Email';
$TEXT['LANGUAGE'] = 'Idioma';
$TEXT['TIMEZONE'] = 'Fuso Hor&aacute;rio';
$TEXT['CURRENT_PASSWORD'] = 'Senha Atual';
$TEXT['NEW_PASSWORD'] = 'Nova Senha';
$TEXT['RETYPE_NEW_PASSWORD'] = 'Confirme a Nova Senha';
$TEXT['ACTIVE'] = 'Ativo';
$TEXT['DISABLED'] = 'Desabilitado';
$TEXT['ENABLED'] = 'Habilitado';
$TEXT['RETYPE_PASSWORD'] = 'Confirme a Senha';
$TEXT['GROUP'] = 'Grupo';
$TEXT['SYSTEM_PERMISSIONS'] = 'Permiss&otilde;es de Sistema';
$TEXT['MODULE_PERMISSIONS'] = 'Permiss&otilde;es de M&oacute;dulo';
$TEXT['SHOW_ADVANCED'] = 'Exibir Op&ccedil;&otilde;es Avan&ccedil;adas';
$TEXT['HIDE_ADVANCED'] = 'Ocultar Op&ccedil;&otilde;es Avan&ccedil;adas';
$TEXT['BASIC'] = 'B&aacute;sico';
$TEXT['ADVANCED'] = 'Avan&ccedil;ado';
$TEXT['WEBSITE'] = 'Website';
$TEXT['DEFAULT'] = 'Padr&atilde;o';
$TEXT['KEYWORDS'] = 'Keywords';
$TEXT['TEXT'] = 'Texto';
$TEXT['HEADER'] = 'Cabe&ccedil;alho';
$TEXT['FOOTER'] = 'Rodap&eacute;';
$TEXT['TEMPLATE'] = 'Tema (Template)';
$TEXT['THEME'] = 'Backend-Theme';
$TEXT['INSTALLATION'] = 'Instala&ccedil;&atilde;o';
$TEXT['DATABASE'] = 'Banco de Dados';
$TEXT['HOST'] = 'Host';
$TEXT['INTRO'] = 'Introdu&ccedil;&atilde;o';
$TEXT['PAGE'] = 'P&aacute;gina';
$TEXT['SIGNUP'] = 'Inscrever';
$TEXT['PHP_ERROR_LEVEL'] = 'PHP Error Reporting Level';
$TEXT['ADMIN'] = 'Admin';
$TEXT['PATH'] = 'Caminho';
$TEXT['URL'] = 'URL';
$TEXT['FRONTEND'] = 'Front-end';
$TEXT['EXTENSION'] = 'Extens&atilde;o';
$TEXT['TABLE_PREFIX'] = 'Prefixo da Tabela';
$TEXT['CHANGES'] = 'Altera&ccedil;&otilde;es';
$TEXT['ADMINISTRATION'] = 'Administra&ccedil;&atilde;o';
$TEXT['FORGOT_DETAILS'] = 'Esqueceu as credenciais?';
$TEXT['LOGGED_IN'] = 'Logado';
$TEXT['WELCOME_BACK'] = 'Bem-Vindo';
$TEXT['FULL_NAME'] = 'Nome Completo';
$TEXT['ACCOUNT_SIGNUP'] = 'Assinatura de Conta';
$TEXT['LINK'] = 'Link';
$TEXT['ANCHOR'] = 'Anchor';
$TEXT['TARGET'] = 'Target';
$TEXT['NEW_WINDOW'] = 'New Window';
$TEXT['SAME_WINDOW'] = 'Same Window';
$TEXT['TOP_FRAME'] = 'Top Frame';
$TEXT['PAGE_LEVEL_LIMIT'] = 'Limite de N&iacute;veis de P&aacute;gina';
$TEXT['SUCCESS'] = 'Sucesso';
$TEXT['ERROR'] = 'Erro';
$TEXT['ARE_YOU_SURE'] = 'Voc&ecirc; tem certeza?';
$TEXT['YES'] = 'Sim';
$TEXT['NO'] = 'N&atilde;o';
$TEXT['SYSTEM_DEFAULT'] = 'Padr&atilde;o do Sistema';
$TEXT['PAGE_TITLE'] = 'T&iacute;tulo da P&aacute;gina';
$TEXT['MENU_TITLE'] = 'T&iacute;tulo do Menu';
$TEXT['ACTIONS'] = 'A&ccedil;&otilde;es';
$TEXT['UNKNOWN'] = 'Desconhecido';
$TEXT['BLOCK'] = 'Block';
$TEXT['SEARCH'] = 'Busca';
$TEXT['SEARCHING'] = 'Buscando';
$TEXT['POST'] = 'Post';
$TEXT['COMMENT'] = 'Coment&aacute;rio';
$TEXT['COMMENTS'] = 'Coment&aacute;rios';
$TEXT['COMMENTING'] = 'Coment&aacute;rios';
$TEXT['SHORT'] = 'Curto';
$TEXT['LONG'] = 'Longo';
$TEXT['LOOP'] = 'La&ccedil;o de Repeti&ccedil;&atilde;o';
$TEXT['FIELD'] = 'Campo';
$TEXT['REQUIRED'] = 'Requerido';
$TEXT['LENGTH'] = 'Tamanho';
$TEXT['MESSAGE'] = 'Mensagem';
$TEXT['SUBJECT'] = 'Assunto';
$TEXT['MATCH'] = 'Possua';
$TEXT['ALL_WORDS'] = 'Todas as Palavras';
$TEXT['ANY_WORDS'] = 'Qualquer Palavra';
$TEXT['EXACT_MATCH'] = 'Express&atilde;o Exata';
$TEXT['SHOW'] = 'Exibir';
$TEXT['HIDE'] = 'Ocultar';
$TEXT['START_PUBLISHING'] = 'Start Publishing';
$TEXT['FINISH_PUBLISHING'] = 'Finish Publishing';
$TEXT['DATE'] = 'Data';
$TEXT['START'] = 'In&iacute;cio';
$TEXT['END'] = 'Fim';
$TEXT['IMAGE'] = 'Imagem';
$TEXT['ICON'] = '&Iacute;cone';
$TEXT['SECTION'] = 'Sess&atilde;o';
$TEXT['DATE_FORMAT'] = 'Formato de Data';
$TEXT['TIME_FORMAT'] = 'Formato de Hora';
$TEXT['RESULTS'] = 'Resultados';
$TEXT['RESIZE'] = 'Redimentsionar';
$TEXT['MANAGE'] = 'Gerenciar';
$TEXT['CODE'] = 'C&oacute;digo';
$TEXT['WIDTH'] = 'Altura';
$TEXT['HEIGHT'] = 'Largura';
$TEXT['MORE'] = 'Mais';
$TEXT['READ_MORE'] = 'Leia Mais';
$TEXT['CHANGE_SETTINGS'] = 'Alterar Configura&ccedil;&otilde;es';
$TEXT['CURRENT_PAGE'] = 'P&aacute;gina Atual';
$TEXT['CLOSE'] = 'Fechar';
$TEXT['INTRO_PAGE'] = 'P&aacute;gina de Introdu&ccedil;&atilde;o';
$TEXT['INSTALLATION_URL'] = 'URL de Instala&ccedil;&atilde;o';
$TEXT['INSTALLATION_PATH'] = 'Caminho de Instala&ccedil;&atilde;o';
$TEXT['PAGE_EXTENSION'] = 'Extens&atilde;o da P&aacute;gina';
$TEXT['NO_RESULTS'] = 'Sem Resultados';
$TEXT['WEBSITE_TITLE'] = 'T&iacute;tulo do Website';
$TEXT['WEBSITE_DESCRIPTION'] = 'Descri&ccedil;&atilde;o do Website';
$TEXT['WEBSITE_KEYWORDS'] = 'Website Keywords';
$TEXT['WEBSITE_HEADER'] = 'Cabe&ccedil;alho do Website';
$TEXT['WEBSITE_FOOTER'] = 'Rodap&eacute; do Website';
$TEXT['RESULTS_HEADER'] = 'Cabe&ccedil;alho dos Resultados';
$TEXT['RESULTS_LOOP'] = 'La&ccedil;o de Repeti&ccedil;&atilde;o dos Resultados';
$TEXT['RESULTS_FOOTER'] = 'Rodap&eacute; dos Resultados';
$TEXT['LEVEL'] = 'N&iacute;vel';
$TEXT['NOT_FOUND'] = 'N&atilde;o Encotnrado';
$TEXT['PAGE_SPACER'] = 'Espa&ccedil;ador de P&aacute;gina';
$TEXT['MATCHING'] = 'Matching';
$TEXT['TEMPLATE_PERMISSIONS'] = 'Permiss&otilde;es do Tema (Template)';
$TEXT['PAGES_DIRECTORY'] = 'Diret&oacute;rio de P&aacute;ginas';
$TEXT['MEDIA_DIRECTORY'] = 'Diret&oacute;rio de M&iacute;dia';
$TEXT['FILE_MODE'] = 'Modo de Arquivo';
$TEXT['USER'] = 'Usu&aacute;rio';
$TEXT['OTHERS'] = 'Outros';
$TEXT['READ'] = 'Ler';
$TEXT['WRITE'] = 'Escrever';
$TEXT['EXECUTE'] = 'Executar';
$TEXT['SMART_LOGIN'] = 'Login Inteligente';
$TEXT['REMEMBER_ME'] = 'Lembrar-me';
$TEXT['FILESYSTEM_PERMISSIONS'] = 'Permiss&otilde;es de Sistema de Arquivos';
$TEXT['DIRECTORIES'] = 'Diret&oacute;rios';
$TEXT['DIRECTORY_MODE'] = 'Modo de Diret&oacute;rio';
$TEXT['LIST_OPTIONS'] = 'Op&ccedil;&otilde;es de Lista';
$TEXT['OPTION'] = 'Op&ccedil;&atilde;o';
$TEXT['ALLOW_MULTIPLE_SELECTIONS'] = 'Permitir Multipla Sele&ccedil;&atilde;o';
$TEXT['TEXTFIELD'] = 'Textfield';
$TEXT['TEXTAREA'] = 'Textarea';
$TEXT['SELECT_BOX'] = 'Select Box';
$TEXT['CHECKBOX_GROUP'] = 'Checkbox Group';
$TEXT['RADIO_BUTTON_GROUP'] = 'Radio Button Group';
$TEXT['SIZE'] = 'Tamanho';
$TEXT['DEFAULT_TEXT'] = 'Testo Padr&atilde;o';
$TEXT['SEPERATOR'] = 'Separador';
$TEXT['BACK'] = 'Volta';
$TEXT['UNDER_CONSTRUCTION'] = 'Em Constru&ccedil;&atilde;o';
$TEXT['MULTISELECT'] = 'Multipla-Sele&ccedil;&atilde;o';
$TEXT['SHORT_TEXT'] = 'Texto Curto';
$TEXT['LONG_TEXT'] = 'Texto Longo';
$TEXT['HOMEPAGE_REDIRECTION'] = 'Redirecionamento de P&aacute;gina';
$TEXT['HEADING'] = 'Cabe&ccedil;alho';
$TEXT['MULTIPLE_MENUS'] = 'M&uacute;ltiplos Menus';
$TEXT['REGISTERED'] = 'Registrado';
$TEXT['SECTION_BLOCKS'] = 'Section Blocks';
$TEXT['REGISTERED_VIEWERS'] = 'Registered Viewers';
$TEXT['ALLOWED_VIEWERS'] = 'Allowed Viewers';
$TEXT['SUBMISSION_ID'] = 'Submission ID';
$TEXT['SUBMISSIONS'] = 'Submiss&otilde;es';
$TEXT['SUBMITTED'] = 'Submetido';
$TEXT['MAX_SUBMISSIONS_PER_HOUR'] = 'Max. Submiss&otilde;es por Hora';
$TEXT['SUBMISSIONS_STORED_IN_DATABASE'] = 'Submiss&otilde;es armazenadas no banco de dados';
$TEXT['EMAIL_ADDRESS'] = 'Endre&ccedil;or de Email';
$TEXT['CUSTOM'] = 'Pr&oacute;prio';
$TEXT['ANONYMOUS'] = 'An&ocirc;nimo';
$TEXT['SERVER_OPERATING_SYSTEM'] = 'Sistema Operacional do Servidor';
$TEXT['WORLD_WRITEABLE_FILE_PERMISSIONS'] = 'World-writeable file permissions';
$TEXT['LINUX_UNIX_BASED'] = 'Linux/Unix based';
$TEXT['WINDOWS'] = 'Windows';
$TEXT['HOME_FOLDER'] = 'Home Folder';
$TEXT['HOME_FOLDERS'] = 'Home Folders';
$TEXT['PAGE_TRASH'] = 'Page Trash';
$TEXT['INLINE'] = 'In-line';
$TEXT['SEPARATE'] = 'Separado';
$TEXT['DELETED'] = 'Apagado';
$TEXT['VIEW_DELETED_PAGES'] = 'Exibir P&aacute;ginas Exclu&iacute;das';
$TEXT['EMPTY_TRASH'] = 'Esvaziar Lixeira';
$TEXT['TRASH_EMPTIED'] = 'Lixiera Vazia';
$TEXT['ADD_SECTION'] = 'Adicionar Sess&atilde;o';
$TEXT['POST_HEADER'] = 'Cabe&ccedil;alho do Post';
$TEXT['POST_FOOTER'] = 'Rodap&eacute; do Post';
$TEXT['POSTS_PER_PAGE'] = 'Posts por P&aacute;gina';
$TEXT['RESIZE_IMAGE_TO'] = 'Redimensionar Imagem Para';
$TEXT['UNLIMITED'] = 'Ilimitado';
$TEXT['OF'] = 'de';
$TEXT['OUT_OF'] = 'Out Of';
$TEXT['NEXT'] = 'Pr&oacute;ximo';
$TEXT['PREVIOUS'] = 'Anterior';
$TEXT['NEXT_PAGE'] = 'Pr&oacute;xima P&aacute;gina';
$TEXT['PREVIOUS_PAGE'] = 'P&aacute;gina Anterior';
$TEXT['ON'] = 'On';
$TEXT['LAST_UPDATED_BY'] = '&Uacute;ltima atualiza&ccedil;&atilde;o por';
$TEXT['RESULTS_FOR'] = 'Resultados para';
$TEXT['TIME'] = 'Hora';
$TEXT['REDIRECT_AFTER'] = 'Redirect after';
$TEXT['WYSIWYG_STYLE'] = 'WYSIWYG Style';
$TEXT['WYSIWYG_EDITOR'] = 'WYSIWYG Editor';
$TEXT['SERVER_EMAIL'] = 'Servidor de Email';
$TEXT['MENU'] = 'Menu';
$TEXT['MANAGE_GROUPS'] = 'Gerenciar Grupos';
$TEXT['MANAGE_USERS'] = 'Gerenciar Usu&aacute;rios';
$TEXT['PAGE_LANGUAGES'] = 'Idioma da P&aacute;gina';
$TEXT['HIDDEN'] = 'Oculto';
$TEXT['MAIN'] = 'Principal';
$TEXT['RENAME_FILES_ON_UPLOAD'] = 'Renomear Arquivos ao Enviar';
$TEXT['APP_NAME'] = 'Nome da Aplica&ccedil;&atilde;o';
$TEXT['SESSION_IDENTIFIER'] = 'Identificador de Sess&atilde;o';
$TEXT['SEC_ANCHOR'] = 'Section-Anchor text';
$TEXT['BACKUP'] = 'Backup';
$TEXT['RESTORE'] = 'Restaurar';
$TEXT['BACKUP_DATABASE'] = 'Backup do Banco de Dados';
$TEXT['RESTORE_DATABASE'] = 'Restaurar Banco de Dados';
$TEXT['BACKUP_ALL_TABLES'] = 'Backup de Todas as Tabelas no Banco de Dados';
$TEXT['BACKUP_WB_SPECIFIC'] = 'Backup somente tabelas espec&iacute;ficas';
$TEXT['BACKUP_MEDIA'] = 'Backup M&iacute;dia';
$TEXT['RESTORE_MEDIA'] = 'Restaurar M&iacute;dia';
$TEXT['ADMINISTRATION_TOOL'] = 'Ferramenta de Administra&ccedil;&atilde;o';
$TEXT['CAPTCHA_VERIFICATION'] = 'Verifica&ccedil;&atilde;o Captcha';
$TEXT['VERIFICATION'] = 'Verifica&ccedil;&atilde;o';
$TEXT['DEFAULT_CHARSET'] = 'Codifica&ccedil;&atilde;o Padr&atilde;o';
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
$MESSAGE['FRONTEND']['SORRY_NO_VIEWING_PERMISSIONS'] = 'Desculpe, voc&ecirc; n&atilde;o tem permiss&atilde;o para ver essa p&aacute;gina';
$MESSAGE['FRONTEND']['SORRY_NO_ACTIVE_SECTIONS'] = 'Sorry, no active content to display';

$MESSAGE['ADMIN']['INSUFFICIENT_PRIVELLIGES'] = 'Privil&eacute;gios Insuficientes para estar aqui';

$MESSAGE['LOGIN']['BOTH_BLANK'] = 'Favor inserir usu&aacute;rio e senha abaixo';
$MESSAGE['LOGIN']['USERNAME_BLANK'] = 'Favor Inserir o usu&aacute;rio';
$MESSAGE['LOGIN']['PASSWORD_BLANK'] = 'Favor Inserir a senha';
$MESSAGE['LOGIN']['USERNAME_TOO_SHORT'] = 'O usu&aacute;rio fornecido &eacute; curto demais';
$MESSAGE['LOGIN']['PASSWORD_TOO_SHORT'] = 'A senha fornecida &eacute; curta demais';
$MESSAGE['LOGIN']['USERNAME_TOO_LONG'] = 'O usu&aacute;rio fornecido &eacute; longo demais';
$MESSAGE['LOGIN']['PASSWORD_TOO_LONG'] = 'A senha fornecida &eacute; longa demais';
$MESSAGE['LOGIN']['AUTHENTICATION_FAILED'] = 'Usu&aacute;rio ou senha incorretos';

$MESSAGE['SIGNUP']['NO_EMAIL'] = 'Voc&ecirc; precisa informar um endere&ccedil;o de email';
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

$MESSAGE['FORGOT_PASS']['NO_DATA'] = 'Favor inserir seu email abaixo';
$MESSAGE['FORGOT_PASS']['EMAIL_NOT_FOUND'] = 'O email informado n&atilde;o pode ser encontrado no banco de dados';
$MESSAGE['FORGOT_PASS']['CANNOT_EMAIL'] = 'N&atilde;o foi poss&iacute;vel enviar a senha, favor contatar o administrador do sistema';
$MESSAGE['FORGOT_PASS']['PASSWORD_RESET'] = 'Seu usu&aacute;rio e senha foram enviados para seu endere&ccedil;o de email';
$MESSAGE['FORGOT_PASS']['ALREADY_RESET'] = 'A senha n&atilde;o pode ser redefinida mais de uma vez por hora, desculpe';

$MESSAGE['START']['WELCOME_MESSAGE'] = 'Bem-Vindo &agrave; Administra&ccedil;&atilde;o do WebsiteBaker';
$MESSAGE['START']['INSTALL_DIR_EXISTS'] = 'Aviso, O diret&oacute;rio "INSTALL" ainda existe!';
$MESSAGE['START']['CURRENT_USER'] = 'Voc&ecirc; est&aacute; logado como:';

$MESSAGE['SETTINGS']['UNABLE_OPEN_CONFIG'] = 'N&atilde;o foi possivel abrir o arquivo de configura&ccedil;&atilde;o';
$MESSAGE['SETTINGS']['UNABLE_WRITE_CONFIG'] = 'N&atilde;o foi possivel gravar no aquivo de configura&ccedil;&atilde;o';
$MESSAGE['SETTINGS']['SAVED'] = 'Altera&ccedil;&otilde;es armazenadas com sucesso';
$MESSAGE['SETTINGS']['MODE_SWITCH_WARNING'] = 'Aten&ccedil;&atilde;o: Pressionando esse bot&atilde;o, todas as altera&ccedil;&otilde;es n&atilde;o salvas, ser&atilde;o perdidas';
$MESSAGE['SETTINGS']['WORLD_WRITEABLE_WARNING'] = 'Aten&ccedil;&atilde;o: Somente recomendado para ambientes de teste';

$MESSAGE['USERS']['ADDED'] = 'Usu&aacute;rio adicionado com sucesso';
$MESSAGE['USERS']['SAVED'] = 'Usu&aacute;rio armazenado com sucesso';
$MESSAGE['USERS']['DELETED'] = 'Usu&aacute;rio apagado com sucesso';
$MESSAGE['USERS']['NO_GROUP'] = 'Nenhum grupo selecionado';
$MESSAGE['USERS']['USERNAME_TOO_SHORT'] = 'O usu&aacute;rio fornecido &eacute; curto demais';
$MESSAGE['USERS']['PASSWORD_TOO_SHORT'] = 'A senha fornecida &eacute; curta demais';
$MESSAGE['USERS']['PASSWORD_MISMATCH'] = 'As senhas fornecidas n&atilde;o conferem';
$MESSAGE['USERS']['INVALID_EMAIL'] = 'O email fornecido &eacute; inv&aacute;lido';
$MESSAGE['USERS']['EMAIL_TAKEN'] = 'O endere&ccedil;o de email informado j&aacute; est&aacute; sendo utilizado';
$MESSAGE['USERS']['USERNAME_TAKEN'] = 'O usu&aacute;rio informado j&aacute; est&aacute; sendo utilizado';
$MESSAGE['USERS']['CHANGING_PASSWORD'] = 'Aten&ccedil;&atilde;o: Voc&ecirc; deve preencher os campos abaixo se deseja alterar a senha';
$MESSAGE['USERS']['CONFIRM_DELETE'] = 'Voc&ecirc; tem certeza que deseja apagar o usu&aacute;rio selecionado?';

$MESSAGE['GROUPS']['ADDED'] = 'Grupo adicionado com sucesso';
$MESSAGE['GROUPS']['SAVED'] = 'Grupo armazenado com sucesso';
$MESSAGE['GROUPS']['DELETED'] = 'Grupo apagado com sucesso';
$MESSAGE['GROUPS']['GROUP_NAME_BLANK'] = 'O nome do grupo est&aacute; em branco';
$MESSAGE['GROUPS']['CONFIRM_DELETE'] = 'Voc&ecirc; tem certeza que deseja apagar o grupo selecionado (e usu&aacute;rios pertencentes ao grupo)?';
$MESSAGE['GROUPS']['NO_GROUPS_FOUND'] = 'N&atilde;o foram encotrados grupos';
$MESSAGE['GROUPS']['GROUP_NAME_EXISTS'] = 'Nome do Grupo j&aacute; existe';

$MESSAGE['PREFERENCES']['DETAILS_SAVED'] = 'Detalhes armazenados  com sucesso';
$MESSAGE['PREFERENCES']['EMAIL_UPDATED'] = 'Email atualizado com sucesso';
$MESSAGE['PREFERENCES']['CURRENT_PASSWORD_INCORRECT'] = 'A senha(atual) informada n&atilde;o est&aacute; correta';
$MESSAGE['PREFERENCES']['PASSWORD_CHANGED'] = 'Senha alterada com sucesso';

$MESSAGE['TEMPLATES']['CHANGE_TEMPLATE_NOTICE'] = 'Aten&ccedil;&atilde;o: para alterar o tema (template) voc&ecirc; precisa ir at&eacute; a sess&atilde;o Configura&ccedil;&otilde;es';

$MESSAGE['MEDIA']['DIR_DOT_DOT_SLASH'] = 'N&atilde;o foi poss&iacute;vel incluir ../ no nome da pasta';
$MESSAGE['MEDIA']['DIR_DOES_NOT_EXIST'] = 'Diret&oacute;rio n&atilde;o existe';
$MESSAGE['MEDIA']['TARGET_DOT_DOT_SLASH'] = 'N&atilde;o pode possuir ../ na pasta alvo';
$MESSAGE['MEDIA']['NAME_DOT_DOT_SLASH'] = 'N&atilde;o foi possivel incluir ../ no nome';
$MESSAGE['MEDIA']['NAME_INDEX_PHP'] = 'N&atilde;o &eacute; possivel usar index.php como nome';
$MESSAGE['MEDIA']['NONE_FOUND'] = 'Nenhuma arquivo de m&iacute;dia encontrado na pasta atual';
$MESSAGE['MEDIA']['FILE_NOT_FOUND'] = 'Arquivo n&atilde;o encontrado';
$MESSAGE['MEDIA']['DELETED_FILE'] = 'Arquivo apagado com sucesso';
$MESSAGE['MEDIA']['DELETED_DIR'] = 'Pasta apagada com sucesso';
$MESSAGE['MEDIA']['CONFIRM_DELETE'] = 'Tem certeza que deseja apagar o seguinte arquivo ou pasta?';
$MESSAGE['MEDIA']['CANNOT_DELETE_FILE'] = 'N&atilde;o foi poss&iacute;vel apagar o arquivo selecionado';
$MESSAGE['MEDIA']['CANNOT_DELETE_DIR'] = 'N&atilde;o foi poss&iacute;vel apagar a pasta selecionada';
$MESSAGE['MEDIA']['BLANK_NAME'] = 'Voc&ecirc; n&atilde;o inseriu um nome novo';
$MESSAGE['MEDIA']['BLANK_EXTENSION'] = 'Voc&ecirc; n&atilde;o inseriou uma extens&atilde;o de arquivo';
$MESSAGE['MEDIA']['RENAMED'] = 'Renomeado com sucesso';
$MESSAGE['MEDIA']['CANNOT_RENAME'] = 'Erro ao Renomear';
$MESSAGE['MEDIA']['FILE_EXISTS'] = 'Um arquivo com esse nome j&aacute; existe';
$MESSAGE['MEDIA']['DIR_EXISTS'] = 'Uma pasta com esse nome j&aacute; existe';
$MESSAGE['MEDIA']['DIR_MADE'] = 'Pasta criada com sucesso';
$MESSAGE['MEDIA']['DIR_NOT_MADE'] = 'N&atilde;o foi poss&iacute;vel criar a pasta';
$MESSAGE['MEDIA']['SINGLE_UPLOADED'] = ' arquivo enviado com sucesso';
$MESSAGE['MEDIA']['UPLOADED'] = ' arquivos enviados com sucesso';

$MESSAGE['PAGES']['ADDED'] = 'P&aacute;gina adicionada com sucesso';
$MESSAGE['PAGES']['ADDED_HEADING'] = 'Cabe&ccedil;alho da P&aacute;gina adicionado com sucesso.';
$MESSAGE['PAGES']['PAGE_EXISTS'] = 'Uma p&aacute;gina com o mesmo nome ou similar j&aacute; existe';
$MESSAGE['PAGES']['CANNOT_CREATE_ACCESS_FILE'] = 'Erro ao criar o arquivo no diret&oacute;rio /pages (Privil&eacute;gios Insuficientes)';
$MESSAGE['PAGES']['CANNOT_DELETE_ACCESS_FILE'] = 'Erro ao apagar o arquivo no diret&oacute;rio /pages (Privil&eacute;gios Insuficientes)';
$MESSAGE['PAGES']['NOT_FOUND'] = 'P&aacute;gina n&atilde;o encontrada';
$MESSAGE['PAGES']['SAVED'] = 'P&aacute;gina armazenada com sucesso';
$MESSAGE['PAGES']['SAVED_SETTINGS'] = 'Configura&ccedil;&otilde;es de P&aacute;gina armazenadas com sucesso';
$MESSAGE['PAGES']['NOT_SAVED'] = 'Erro ao armazenar a p&aacute;gina';
$MESSAGE['PAGES']['DELETE_CONFIRM'] = 'Tem certeza que deseja apagar a p&aacute;gina selecionada(e todas as suas sub-p&aacute;ginas)';
$MESSAGE['PAGES']['DELETED'] = 'P&aacute;gina apagada com sucesso';
$MESSAGE['PAGES']['RESTORED'] = 'Pagina Restaurada com sucesso';
$MESSAGE['PAGES']['BLANK_PAGE_TITLE'] = 'Favor Inserir T&iacute;tulo da P&aacute;gina';
$MESSAGE['PAGES']['BLANK_MENU_TITLE'] = 'Favor Inserir T&iacute;tulo do Menu';
$MESSAGE['PAGES']['REORDERED'] = 'Re-ordena&ccedil;&atilde;o feita com sucesso';
$MESSAGE['PAGES']['CANNOT_REORDER'] = 'Erro na re-ordena&ccedil;&atilde;o da p&aacute;gina';
$MESSAGE['PAGES']['INSUFFICIENT_PERMISSIONS'] = 'Voc&ecirc; n&atilde;o tem permiss&atilde;o para Modificar essa p&aacute;gina';
$MESSAGE['PAGES']['INTRO_NOT_WRITABLE'] = 'N&atilde;o foi poss&iacute;vel gravar o arquivo /pages/intro.php (Privil&eacute;gios Insuficientes)';
$MESSAGE['PAGES']['INTRO_SAVED'] = 'P&aacute;gina de Introdu&ccedil;&atilde;o armazenada com sucesso';
$MESSAGE['PAGES']['LAST_MODIFIED'] = '&Uacute;ltima modifica&ccedil;&atilde;o por';
$MESSAGE['PAGES']['INTRO_LINK'] = 'Clique AQUI para modificar a P&aacute;gina de Introdu&ccedil;&atilde;o';
$MESSAGE['PAGES']['SECTIONS_PROPERTIES_SAVED'] = 'Propriedades da Sess&atilde;o foram armazenadas com sucesso';
$MESSAGE['PAGES']['RETURN_TO_PAGES'] = 'Retornar &agrave; P&aacute;ginas';

$MESSAGE['GENERIC']['FILL_IN_ALL'] = 'Favor retornar e preencher todos os campos';
$MESSAGE['GENERIC']['FILE_TYPE'] = 'O arquivo a ser enviado precisa ser do seguinte formato:';
$MESSAGE['GENERIC']['FILE_TYPES'] = 'O arquivo a ser enviado precisa ser de algum dos seguintes formatos:';
$MESSAGE['GENERIC']['CANNOT_UPLOAD'] = 'N&atilde;o foi poss&iacute;vel enviar o arquivo';
$MESSAGE['GENERIC']['ALREADY_INSTALLED'] = 'J&aacute; est&aacute; instalado';
$MESSAGE['GENERIC']['NOT_INSTALLED'] = 'N&atilde;o Instalado';
$MESSAGE['GENERIC']['CANNOT_UNINSTALL'] = 'N&atilde;o foi poss&iacute;vel desinstalar';
$MESSAGE['GENERIC']['CANNOT_UNZIP'] = 'N&atilde;o foi poss&iacute;vel descompactar';
$MESSAGE['GENERIC']['INSTALLED'] = 'Instalado com Sucesso';
$MESSAGE['GENERIC']['UPGRADED'] = 'Atualizado com Sucesso';
$MESSAGE['GENERIC']['UNINSTALLED'] = 'Desinstalado com Sucesso';
$MESSAGE['GENERIC']['BAD_PERMISSIONS'] = 'N&atilde;o foi poss&iacute;vel gravar no diret&oacute;rio de destino';
$MESSAGE['GENERIC']['INVALID'] = 'O arquivo enviado &eacute; inv&aacute;lido';
$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IN_USE'] = 'N&atilde;o foi poss&iacute;vel desinstalar: O arquivo selecionado est&aacute; em uso';

$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IN_USE_TMPL'] = "<br /><br />O m&oacute;dulo n&atilde;o <b>{{type_name}}</b> pode ser desinstalado porque est&aacute; a ser utilizado {{pages}}.<br /><br />";
$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IN_USE_TMPL_PAGES'] = "na seguinte p&aacute;gina;nas seguintes p&aacute;ginas";
$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IS_DEFAULT_TEMPLATE'] = "O Template n&atilde;o pode ser desinstalado porque &eacute; o Template padr&atilde;o";

$MESSAGE['GENERIC']['WEBSITE_UNDER_CONSTRUCTION'] = 'Website Em Constru&ccedil;&atilde;o';
$MESSAGE['GENERIC']['PLEASE_CHECK_BACK_SOON'] = 'Favor retornar em breve...';
$MESSAGE['GENERIC']['PLEASE_BE_PATIENT'] = 'Aguarde, isso pode levar algum tempo.';
$MESSAGE['GENERIC']['ERROR_OPENING_FILE'] = 'Erro ao abrir o arquivo.';
$MESSAGE['GENERIC']['INVALID_ADDON_FILE'] = 'Invalid WebsiteBaker installation file. Please check the *.zip format.';
$MESSAGE['GENERIC']['INVALID_LANGUAGE_FILE'] = 'Invalid WebsiteBaker language file. Please check the text file.';

$MESSAGE['MOD_FORM']['REQUIRED_FIELDS'] = 'Voc&ecirc; precisa preencher os seguintes campos';
$MESSAGE['MOD_FORM']['EXCESS_SUBMISSIONS'] = 'Desculpe, este formul&aacute;rio foi submetido v&aacute;rias vezes nessa hora. Favor tentar novamente dentro de uma hora.';
$MESSAGE['MOD_FORM']['INCORRECT_CAPTCHA'] = 'O N&uacute;mero de Verifica&ccedil;&atilde;o (conhecido como Captcha) que voc&ecirc; entrou, &eacute; inv&aacute;lido. Se estiver tendo problemas usando o Captcha, envie uma mensagem para: '.SERVER_EMAIL.'';

$MESSAGE['ADDON']['RELOAD'] = 'Update database with information from Add-on files (e.g. after FTP upload).';
$MESSAGE['ADDON']['ERROR_RELOAD'] = 'Error while updating the Add-On information.';
$MESSAGE['ADDON']['MODULES_RELOADED'] = 'M&oacute;dulos recarregados com sucesso';
$MESSAGE['ADDON']['TEMPLATES_RELOADED'] = 'Temas (Templates) recarregados com sucesso';
$MESSAGE['ADDON']['LANGUAGES_RELOADED'] = 'Idiomas recarregados com sucesso';
$MESSAGE['ADDON']['PRECHECK_FAILED'] = 'Add-on installation failed. Your system does not fulfill the requirements of this Add-on. To make this Add-on working on your system, please fix the issues summarized below.';
$MESSAGE['ADDON']['MANUAL_INSTALLATION'] = 'When modules are uploaded via FTP (not recommended), the module installation files <tt>install.php</tt>, <tt>upgrade.php</tt> or <tt>uninstall.php</tt> will not be executed automatically. Those modules may not work correct or do not uninstall properly.<br /><br />You can execute the module files manually for modules uploaded via FTP below.';
$MESSAGE['ADDON']['MANUAL_INSTALLATION_WARNING'] = 'Warning: Existing module database entries will get lost. Only use this option if you experience problems with modules uploaded via FTP.';

?>