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
 * @version         $Id: FR.php 1282 2010-01-30 05:29:56Z Luisehahne $
 * @filesource		$HeadURL: http://svn.websitebaker2.org/branches/2.8.x/wb/languages/FR.php $
 * @lastmodified    $Date: 2010-01-30 06:29:56 +0100 (Sa, 30. Jan 2010) $
 *
 */

// use languageedit-module to modify this file

// Define that this file is loaded
if(!defined('LANGUAGE_LOADED')) {
define('LANGUAGE_LOADED', true);
}

// Set the language information
$language_code = 'FR';
$language_name = 'Fran&ccedil;ais';
$language_version = '2.8';
$language_platform = '2.8.x';
$language_author = 'Marin Susac';
$language_license = 'GNU General Public License';

// Menu titles
$MENU['START'] = 'Accueil';
$MENU['PAGES'] = 'Contenu';
$MENU['MEDIA'] = 'Media';
$MENU['ADDONS'] = 'Extensions';
$MENU['MODULES'] = 'Modules';
$MENU['TEMPLATES'] = 'Th&egrave;mes';
$MENU['LANGUAGES'] = 'Langues';
$MENU['PREFERENCES'] = 'Pr&eacute;f&eacute;rences';
$MENU['SETTINGS'] = 'R&eacute;glages';
$MENU['ADMINTOOLS'] = 'Outils d&apos;administration';
$MENU['ACCESS'] = 'Acc&egrave;s';
$MENU['USERS'] = 'Utilisateurs';
$MENU['GROUPS'] = 'Groupes';
$MENU['HELP'] = 'Aide';
$MENU['VIEW'] = 'Voir le site';
$MENU['LOGOUT'] = 'D&eacute;connexion';
$MENU['LOGIN'] = 'Connexion';
$MENU['FORGOT'] = 'Retrouver vos identifiants de connexion';

// Section overviews
$OVERVIEW['START'] = 'Pr&eacute;sentation de l&apos;administration';
$OVERVIEW['PAGES'] = 'Gestion du contenu du site';
$OVERVIEW['MEDIA'] = 'Gestion des fichiers media (images, t&eacute;l&eacute;chargements...)';
$OVERVIEW['MODULES'] = 'Gestion des modules du site';
$OVERVIEW['TEMPLATES'] = 'Gestion des th&egrave;mes et modification de l&apos;apparence du site';
$OVERVIEW['LANGUAGES'] = 'Gestion des langues du site';
$OVERVIEW['PREFERENCES'] = 'Gestion de vos pr&eacute;f&eacute;rences (email, mot de passe...) ';
$OVERVIEW['SETTINGS'] = 'Configuration du site';
$OVERVIEW['USERS'] = 'Gestion des acc&egrave;s au site';
$OVERVIEW['GROUPS'] = 'Gestions des groupes d&apos;utilisateurs et des permissions';
$OVERVIEW['HELP'] = 'Aide et FAQ sur l&apos;utilisation du site';
$OVERVIEW['VIEW'] = 'Aper&ccedil;u du site dans une nouvelle fen&ecirc;tre';
$OVERVIEW['ADMINTOOLS'] = 'Acc&egrave;s aux outils d&apos;administration de WebsiteBaker...';

// Headings
$HEADING['MODIFY_DELETE_PAGE'] = 'Modifier/Supprimer une page';
$HEADING['DELETED_PAGES'] = 'Pages effac&eacute;es';
$HEADING['ADD_PAGE'] = 'Ajouter une page';
$HEADING['ADD_HEADING'] = 'Ajouter un ent&ecirc;te';
$HEADING['MODIFY_PAGE'] = 'Modifier une page';
$HEADING['MODIFY_PAGE_SETTINGS'] = 'Modifier les propri&eacute;t&eacute;s de la page';
$HEADING['MODIFY_ADVANCED_PAGE_SETTINGS'] = 'Modifier les propri&eacute;t&eacute;s avanc&eacute;es de la page';
$HEADING['MANAGE_SECTIONS'] = 'Gestion des rubriques';
$HEADING['MODIFY_INTRO_PAGE'] = 'Modifier la page d&apos;accueil';

$HEADING['BROWSE_MEDIA'] = 'Parcourir le dossier media';
$HEADING['CREATE_FOLDER'] = 'Cr&eacute;er un dossier';
$HEADING['UPLOAD_FILES'] = 'Uploader des fichiers';

$HEADING['INSTALL_MODULE'] = 'Installer un module';
$HEADING['UNINSTALL_MODULE'] = 'D&eacute;sinstaller un module';
$HEADING['MODULE_DETAILS'] = 'Propri&eacute;t&eacute;s du module';

$HEADING['INSTALL_TEMPLATE'] = 'Installer un th&egrave;me';
$HEADING['UNINSTALL_TEMPLATE'] = 'D&eacute;sinstaller un th&egrave;me';
$HEADING['TEMPLATE_DETAILS'] = 'Propri&eacute;t&eacute;s du th&egrave;me';

$HEADING['INSTALL_LANGUAGE'] = 'Installer une langue';
$HEADING['UNINSTALL_LANGUAGE'] = 'D&eacute;sinstaller une langue';
$HEADING['LANGUAGE_DETAILS'] = 'Propri&eacute;t&eacute;s de la langue';

$HEADING['MY_SETTINGS'] = 'Mes pr&eacute;f&eacute;rences';
$HEADING['MY_EMAIL'] = 'Mon email';
$HEADING['MY_PASSWORD'] = 'Mon mot de passe';

$HEADING['GENERAL_SETTINGS'] = 'R&eacute;glages';
$HEADING['DEFAULT_SETTINGS'] = 'R&eacute;glages par d&eacute;faut';
$HEADING['SEARCH_SETTINGS'] = 'R&eacute;glages de la recherche';
$HEADING['FILESYSTEM_SETTINGS'] = 'R&eacute;glages des fichiers syst&egrave;mes';
$HEADING['SERVER_SETTINGS'] = 'R&eacute;glages du serveur';
$HEADING['WBMAILER_SETTINGS'] = 'R&eacute;glages de l&apos;envoi de mail';
$HEADING['ADMINISTRATION_TOOLS'] = 'Outils d&apos;administration';

$HEADING['MODIFY_DELETE_USER'] = 'Modifier/Supprimer un utilisateur';
$HEADING['ADD_USER'] = 'Ajouter un utilisateur';
$HEADING['MODIFY_USER'] = 'Modifier un utilisateur';

$HEADING['MODIFY_DELETE_GROUP'] = 'Modifier/Supprimer un groupe';
$HEADING['ADD_GROUP'] = 'Ajouter un groupe';
$HEADING['MODIFY_GROUP'] = 'Modifier un groupe';

$HEADING['ADDON_PRECHECK_FAILED'] = 'Les param&egrave;tres requis de l&apos;extension ne sont pas v&eacute;rifi&eacute;s';
$HEADING['INVOKE_MODULE_FILES'] = 'Ex&eacute;cuter manuellement les fichiers module';

// Other text
$TEXT['OPEN'] = 'Ouvert';
$TEXT['ADD'] = 'Ajouter';
$TEXT['MODIFY'] = 'Modifier';
$TEXT['SETTINGS'] = 'R&eacute;glages';
$TEXT['DELETE'] = 'Supprimer';
$TEXT['SAVE'] = 'Sauvegarder';
$TEXT['RESET'] = 'R&eacute;initialiser';
$TEXT['LOGIN'] = 'Connexion';
$TEXT['RELOAD'] = 'Actualiser';
$TEXT['CANCEL'] = 'Annuler';
$TEXT['NAME'] = 'Nom';
$TEXT['PLEASE_SELECT'] = 'S&eacute;lectionnez';
$TEXT['TITLE'] = 'Titre';
$TEXT['PARENT'] = 'Parent';
$TEXT['TYPE'] = 'Type';
$TEXT['VISIBILITY'] = 'Visibilit&eacute;';
$TEXT['PRIVATE'] = 'Priv&eacute;e';
$TEXT['PUBLIC'] = 'Publique';
$TEXT['NONE'] = 'Aucun';
$TEXT['NONE_FOUND'] = 'Aucune occurence trouv&eacute;e';
$TEXT['CURRENT'] = 'Courant';
$TEXT['CHANGE'] = 'Changer';
$TEXT['WINDOW'] = 'Fen&ecirc;tre';
$TEXT['DESCRIPTION'] = 'Description';
$TEXT['KEYWORDS'] = 'Mots cl&eacute;s';
$TEXT['ADMINISTRATORS'] = 'Administrateurs';
$TEXT['PRIVATE_VIEWERS'] = 'Utilisateurs priv&eacute;s';
$TEXT['EXPAND'] = 'D&eacute;ployer';
$TEXT['COLLAPSE'] = 'Contracter';
$TEXT['MOVE_UP'] = 'Au dessus';
$TEXT['MOVE_DOWN'] = 'Au dessous';
$TEXT['RENAME'] = 'Renommer';
$TEXT['MODIFY_SETTINGS'] = 'Modifier les r&eacute;glages';
$TEXT['MODIFY_CONTENT'] = 'Modifier le contenu';
$TEXT['VIEW'] = 'Aper&ccedil;u';
$TEXT['UP'] = 'Haut';
$TEXT['FORGOTTEN_DETAILS'] = 'Identifiants oubli&eacute;s ?';
$TEXT['NEED_TO_LOGIN'] = 'Identification obligatoire';
$TEXT['SEND_DETAILS'] = 'Valider';
$TEXT['USERNAME'] = 'Identifiant';
$TEXT['PASSWORD'] = 'Mot de passe';
$TEXT['HOME'] = 'Accueil';
$TEXT['TARGET_FOLDER'] = 'Dossier de destination';
$TEXT['OVERWRITE_EXISTING'] = 'Ecraser les donn&eacute;es (si d&eacute;j&agrave; existantes)';
$TEXT['FILE'] = 'Fichier';
$TEXT['FILES'] = 'Fichiers';
$TEXT['FOLDER'] = 'Dossier';
$TEXT['FOLDERS'] = 'Dossiers';
$TEXT['CREATE_FOLDER'] = 'Cr&eacute;er un dossier';
$TEXT['UPLOAD_FILES'] = 'Uploader un/des fichier(s)';
$TEXT['CURRENT_FOLDER'] = 'Dossier courant';
$TEXT['TO'] = 'vers';
$TEXT['FROM'] = 'de';
$TEXT['INSTALL'] = 'Installer';
$TEXT['UNINSTALL'] = 'D&eacute;sinstaller';
$TEXT['VIEW_DETAILS'] = 'Propri&eacute;t&eacute;s';
$TEXT['DISPLAY_NAME'] = 'Afficher le nom';
$TEXT['AUTHOR'] = 'Auteur';
$TEXT['VERSION'] = 'Version';
$TEXT['DESIGNED_FOR'] = 'Cr&eacute;&eacute; par';
$TEXT['DESCRIPTION'] = 'Description';
$TEXT['EMAIL'] = 'Email';
$TEXT['LANGUAGE'] = 'Langue';
$TEXT['TIMEZONE'] = 'Fuseau horaire';
$TEXT['CURRENT_PASSWORD'] = 'Mot de passe actuel';
$TEXT['NEW_PASSWORD'] = 'Nouveau mot de passe';
$TEXT['RETYPE_NEW_PASSWORD'] = 'Saisissez &agrave; nouveau votre nouveau mot de passe';
$TEXT['ACTIVE'] = 'Actif';
$TEXT['DISABLED'] = 'D&eacute;sactiv&eacute;';
$TEXT['ENABLED'] = 'Activ&eacute;';
$TEXT['RETYPE_PASSWORD'] = 'Saisissez &agrave; nouveau votre mot de passe';
$TEXT['GROUP'] = 'Groupe';
$TEXT['SYSTEM_PERMISSIONS'] = 'Permissions syst&egrave;me';
$TEXT['MODULE_PERMISSIONS'] = 'Permissions sur les modules';
$TEXT['SHOW_ADVANCED'] = 'Afficher les options avanc&eacute;es';
$TEXT['HIDE_ADVANCED'] = 'Cacher les options avanc&eacute;es';
$TEXT['BASIC'] = 'Classique';
$TEXT['ADVANCED'] = 'Avanc&eacute;';
$TEXT['WEBSITE'] = 'Site internet';
$TEXT['DEFAULT'] = 'D&eacute;faut';
$TEXT['KEYWORDS'] = 'Mots cl&eacute;s';
$TEXT['TEXT'] = 'Texte';
$TEXT['HEADER'] = 'Ent&ecirc;te';
$TEXT['FOOTER'] = 'Pied de page';
$TEXT['TEMPLATE'] = 'Th&egrave;me';
$TEXT['THEME'] = 'Th&egrave;me graphique de l&apos;interface d&apos;administration';
$TEXT['INSTALLATION'] = 'Installation';
$TEXT['DATABASE'] = 'Base de donn&eacute;es';
$TEXT['HOST'] = 'H&ocirc;te';
$TEXT['INTRO'] = 'Introduction';
$TEXT['PAGE'] = 'Page';
$TEXT['SIGNUP'] = 'Cr&eacute;er un compte';
$TEXT['PHP_ERROR_LEVEL'] = 'Niveau d&apos;erreur PHP';
$TEXT['ADMIN'] = 'Admin';
$TEXT['PATH'] = 'Chemin';
$TEXT['URL'] = 'URL';
$TEXT['FRONTEND'] = 'Page d&apos;accueil';
$TEXT['EXTENSION'] = 'Extension';
$TEXT['TABLE_PREFIX'] = 'Pr&eacute;fixe du nom des tables';
$TEXT['CHANGES'] = 'Modifications';
$TEXT['ADMINISTRATION'] = 'Administration';
$TEXT['FORGOT_DETAILS'] = 'Identifiants oubli&eacute;s ?';
$TEXT['LOGGED_IN'] = 'Connect&eacute;';
$TEXT['WELCOME_BACK'] = 'Bienvenue';
$TEXT['FULL_NAME'] = 'Nom complet';
$TEXT['ACCOUNT_SIGNUP'] = 'Cr&eacute;er un compte';
$TEXT['LINK'] = 'Lien';
$TEXT['ANCHOR'] = 'Ancre';
$TEXT['TARGET'] = 'Cible';
$TEXT['NEW_WINDOW'] = 'Nouvelle fen&ecirc;tre';
$TEXT['SAME_WINDOW'] = 'Fen&ecirc;tre actuelle (this frame)';
$TEXT['TOP_FRAME'] = 'Fen&ecirc;tre actuelle compl&egrave;te (top frame)';
$TEXT['PAGE_LEVEL_LIMIT'] = 'Limite de niveau de page';
$TEXT['SUCCESS'] = 'Op&eacute;ration r&eacute;ussie';
$TEXT['ERROR'] = 'Erreur';
$TEXT['ARE_YOU_SURE'] = 'Etes-vous s&ucirc;r ?';
$TEXT['YES'] = 'Oui';
$TEXT['NO'] = 'Non';
$TEXT['SYSTEM_DEFAULT'] = 'Syst&egrave;me par d&eacute;faut';
$TEXT['PAGE_TITLE'] = 'Titre de la page';
$TEXT['MENU_TITLE'] = 'Titre du menu';
$TEXT['ACTIONS'] = 'Actions';
$TEXT['UNKNOWN'] = 'Inconnu';
$TEXT['BLOCK'] = 'Bloc';
$TEXT['SEARCH'] = 'Rechercher';
$TEXT['SEARCHING'] = 'Rechercher';
$TEXT['POST'] = 'Actualit&eacute;';
$TEXT['COMMENT'] = 'Commentaire';
$TEXT['COMMENTS'] = 'Commentaires';
$TEXT['COMMENTING'] = 'Commentaire en cours';
$TEXT['SHORT'] = 'Court';
$TEXT['LONG'] = 'Long';
$TEXT['LOOP'] = 'Boucle';
$TEXT['FIELD'] = 'Champ';
$TEXT['REQUIRED'] = 'Obligatoire';
$TEXT['LENGTH'] = 'Longueur';
$TEXT['MESSAGE'] = 'Message';
$TEXT['SUBJECT'] = 'Sujet';
$TEXT['MATCH'] = 'correspond';
$TEXT['ALL_WORDS'] = 'Tous les mots';
$TEXT['ANY_WORDS'] = 'Chaque mot';
$TEXT['EXACT_MATCH'] = 'Terme exact';
$TEXT['SHOW'] = 'Montrer';
$TEXT['HIDE'] = 'Cacher';
$TEXT['START_PUBLISHING'] = 'D&eacute;but de publication';
$TEXT['FINISH_PUBLISHING'] = 'Fin de publication';
$TEXT['DATE'] = 'Date';
$TEXT['START'] = 'D&eacute;but';
$TEXT['END'] = 'Fin';
$TEXT['IMAGE'] = 'Image';
$TEXT['ICON'] = 'Ic&ocirc;ne';
$TEXT['SECTION'] = 'Rubrique';
$TEXT['DATE_FORMAT'] = 'Format de la date';
$TEXT['TIME_FORMAT'] = 'Format de l&apos;heure';
$TEXT['RESULTS'] = 'R&eacute;sultats';
$TEXT['RESIZE'] = 'Redimensionner';
$TEXT['MANAGE'] = 'G&eacute;rer';
$TEXT['CODE'] = 'Code';
$TEXT['WIDTH'] = 'Largeur';
$TEXT['HEIGHT'] = 'Hauteur';
$TEXT['MORE'] = 'Plus';
$TEXT['READ_MORE'] = 'En savoir plus';
$TEXT['CHANGE_SETTINGS'] = 'Modifier les r&eacute;glages';
$TEXT['CURRENT_PAGE'] = 'Page courante';
$TEXT['CLOSE'] = 'Fermer';
$TEXT['INTRO_PAGE'] = 'Page d&apos;introduction';
$TEXT['INSTALLATION_URL'] = 'Adresse d&apos;installation (URL)';
$TEXT['INSTALLATION_PATH'] = 'Chemin d&apos;installation';
$TEXT['PAGE_EXTENSION'] = 'Extension des pages';
$TEXT['NO_RESULTS'] = 'Aucun r&eacute;sultat';
$TEXT['WEBSITE_TITLE'] = 'Titre du site';
$TEXT['WEBSITE_DESCRIPTION'] = 'Description du site';
$TEXT['WEBSITE_KEYWORDS'] = 'Mots cl&eacute;s du site';
$TEXT['WEBSITE_HEADER'] = 'Ent&ecirc;te du site';
$TEXT['WEBSITE_FOOTER'] = 'Pied de page du site';
$TEXT['RESULTS_HEADER'] = 'Ent&ecirc;te du mod&egrave;le de recherche';
$TEXT['RESULTS_LOOP'] = 'Mod&egrave;le d&apos;affichage de la boucle de recherche';
$TEXT['RESULTS_FOOTER'] = 'Pied de page du mod&egrave;le de recherche';
$TEXT['LEVEL'] = 'Niveau';
$TEXT['NOT_FOUND'] = 'Non trouv&eacute;';
$TEXT['PAGE_SPACER'] = 'Espacement de page';
$TEXT['MATCHING'] = 'Correspondance';
$TEXT['TEMPLATE_PERMISSIONS'] = 'Permissions sur les th&egrave;mes';
$TEXT['PAGES_DIRECTORY'] = 'R&eacute;pertoire des pages';
$TEXT['MEDIA_DIRECTORY'] = 'R&eacute;pertoire des fichiers media';
$TEXT['FILE_MODE'] = 'Propri&eacute;t&eacute;s des fichiers';
$TEXT['USER'] = 'Utilisateur';
$TEXT['OTHERS'] = 'Autres';
$TEXT['READ'] = 'Lire';
$TEXT['WRITE'] = 'Ecrire';
$TEXT['EXECUTE'] = 'Executer';
$TEXT['SMART_LOGIN'] = 'Identification rapide';
$TEXT['REMEMBER_ME'] = 'Se souvenir de moi';
$TEXT['FILESYSTEM_PERMISSIONS'] = 'Permissions des fichiers syst&egrave;me';
$TEXT['DIRECTORIES'] = 'R&eacute;pertoires';
$TEXT['DIRECTORY_MODE'] = 'Propri&eacute;t&eacute;s des r&eacute;pertoires';
$TEXT['LIST_OPTIONS'] = 'Liste des options';
$TEXT['OPTION'] = 'Option';
$TEXT['ALLOW_MULTIPLE_SELECTIONS'] = 'Autoriser la s&eacute;lection multiple';
$TEXT['TEXTFIELD'] = 'Champ de texte';
$TEXT['TEXTAREA'] = 'Zone de texte';
$TEXT['SELECT_BOX'] = 'S&eacute;lection des bo&icirc;tes';
$TEXT['CHECKBOX_GROUP'] = 'Groupe de checkbox';
$TEXT['RADIO_BUTTON_GROUP'] = 'Groupe de boutons radio';
$TEXT['SIZE'] = 'Taille';
$TEXT['DEFAULT_TEXT'] = 'Texte par d&eacute;faut';
$TEXT['SEPERATOR'] = 'S&eacute;parateur';
$TEXT['BACK'] = 'Retour';
$TEXT['UNDER_CONSTRUCTION'] = 'En construction';
$TEXT['MULTISELECT'] = 'Multi-s&eacute;lection';
$TEXT['SHORT_TEXT'] = 'Texte court';
$TEXT['LONG_TEXT'] = 'Texte long';
$TEXT['HOMEPAGE_REDIRECTION'] = 'Redirection de la page d&apos;accueil';
$TEXT['HEADING'] = 'Haut de page';
$TEXT['MULTIPLE_MENUS'] = 'Menus multiples';
$TEXT['REGISTERED'] = 'Enregistr&eacute;';
$TEXT['SECTION_BLOCKS'] = 'Bloc de rubrique';
$TEXT['REGISTERED_VIEWERS'] = 'Utilisateurs enregistr&eacute;s';
$TEXT['ALLOWED_VIEWERS'] = 'Visiteurs autoris&eacute;s';
$TEXT['SUBMISSION_ID'] = 'Identifiant';
$TEXT['SUBMISSIONS'] = 'Soumissions';
$TEXT['SUBMITTED'] = 'Envoy&eacute;';
$TEXT['MAX_SUBMISSIONS_PER_HOUR'] = 'Maximum de soumissions par heure';
$TEXT['SUBMISSIONS_STORED_IN_DATABASE'] = 'Enregistrement des soumissions dans la base de donn&eacute;es';
$TEXT['EMAIL_ADDRESS'] = 'Adresse email';
$TEXT['CUSTOM'] = 'Adapter';
$TEXT['ANONYMOUS'] = 'Anonyme';
$TEXT['SERVER_OPERATING_SYSTEM'] = 'Syst&egrave;me d&apos;exploitation du serveur';
$TEXT['WORLD_WRITEABLE_FILE_PERMISSIONS'] = 'Permissions d&apos;&eacute;criture sur fichier';
$TEXT['LINUX_UNIX_BASED'] = 'Bas&eacute; sur linux/unix';
$TEXT['WINDOWS'] = 'Windows';
$TEXT['HOME_FOLDER'] = 'R&eacute;pertoire de d&eacute;part';
$TEXT['HOME_FOLDERS'] = 'R&eacute;pertoires de d&eacute;part';
$TEXT['PAGE_TRASH'] = 'Corbeille pour les pages supprim&eacute;es';
$TEXT['INLINE'] = 'En ligne';
$TEXT['SEPARATE'] = 'S&eacute;parer';
$TEXT['DELETED'] = 'Supprim&eacute;';
$TEXT['VIEW_DELETED_PAGES'] = 'Voir les pages supprim&eacute;es';
$TEXT['EMPTY_TRASH'] = 'Vider la corbeille';
$TEXT['TRASH_EMPTIED'] = 'Corbeille vid&eacute;e';
$TEXT['ADD_SECTION'] = 'Ajouter une rubrique';
$TEXT['POST_HEADER'] = 'Ent&ecirc;te de l&apos;actualit&eacute;';
$TEXT['POST_FOOTER'] = 'Pied de page de l&apos;actualit&eacute;';
$TEXT['POSTS_PER_PAGE'] = 'Nombre d&apos;actualit&eacute; par page';
$TEXT['RESIZE_IMAGE_TO'] = 'Redimensionner l&apos;image';
$TEXT['UNLIMITED'] = 'Illimit&eacute;';
$TEXT['OF'] = 'De';
$TEXT['OUT_OF'] = 'Hors de';
$TEXT['NEXT'] = 'Suivant';
$TEXT['PREVIOUS'] = 'Pr&eacute;c&eacute;dent';
$TEXT['NEXT_PAGE'] = 'Page suivante';
$TEXT['PREVIOUS_PAGE'] = 'Page pr&eacute;c&eacute;dente';
$TEXT['ON'] = 'Sur';
$TEXT['LAST_UPDATED_BY'] = 'Mis &agrave; jour par';
$TEXT['RESULTS_FOR'] = 'R&eacute;sultats';
$TEXT['TIME'] = 'Heure';
$TEXT['REDIRECT_AFTER'] = 'Redirection apr&egrave;s coup';
$TEXT['WYSIWYG_STYLE'] = 'Style WYSIWYG';
$TEXT['WYSIWYG_EDITOR'] = 'Editeur WYSIWYG';
$TEXT['SERVER_EMAIL'] = 'Serveur de mail';
$TEXT['MENU'] = 'Menu';
$TEXT['MANAGE_GROUPS'] = 'Gestion des groupes';
$TEXT['MANAGE_USERS'] = 'Gestion des utilisateurs';
$TEXT['PAGE_LANGUAGES'] = 'Langues des pages';
$TEXT['HIDDEN'] = 'Cach&eacute;';
$TEXT['MAIN'] = 'Principal';
$TEXT['RENAME_FILES_ON_UPLOAD'] = 'Renommer les fichiers lors de l&apos;upload';
$TEXT['APP_NAME'] = 'Nom de l&apos;application';
$TEXT['SEC_ANCHOR'] = 'Section d&apos;ancre';
$TEXT['SESSION_IDENTIFIER'] = 'Identifiant de session';
$TEXT['BACKUP'] = 'Sauvegarde';
$TEXT['RESTORE'] = 'Restaurer';
$TEXT['BACKUP_DATABASE'] = 'Sauvegarde de la base de donn&eacute;es';
$TEXT['RESTORE_DATABASE'] = 'Restauration de la base de donn&eacute;es';
$TEXT['BACKUP_ALL_TABLES'] = 'Sauvegarder toutes les tables de la base de donn&eacute;es';
$TEXT['BACKUP_WB_SPECIFIC'] = 'Sauvegarder uniquement les tables li&eacute;es &agrave; WebsiteBaker';
$TEXT['BACKUP_MEDIA'] = 'Sauvegarde des fichiers media';
$TEXT['RESTORE_MEDIA'] = 'Restauration des fichiers media';
$TEXT['ADMINISTRATION_TOOL'] = 'Outils d&apos;administration';
$TEXT['CAPTCHA_VERIFICATION'] = 'V&eacute;rification par captcha ';
$TEXT['VERIFICATION'] = 'V&eacute;rification';
$TEXT['DEFAULT_CHARSET'] = 'Encodage par d&eacute;faut';
$TEXT['CHARSET'] = 'Encodage';
$TEXT['MODULE_ORDER'] = 'Ordre de recherche dans les modules';
$TEXT['MAX_EXCERPT'] = 'Nombre maximum de ligne &agrave; retourner';
$TEXT['TIME_LIMIT'] = 'D&eacute;lai maximal de recherche par module';
$TEXT['PUBL_START_DATE'] = 'Date de d&eacute;but';
$TEXT['PUBL_END_DATE'] = 'Date de fin';
$TEXT['CALENDAR'] = 'Calendrier';
$TEXT['DELETE_DATE'] = 'Date de suppression';
$TEXT['WBMAILER_DEFAULT_SETTINGS_NOTICE'] = 'Merci d&apos;indiquer un nom et une adresse d&apos;exp&eacute;diteur par d&eacute;faut. Il est recommand&eacute; d&apos;utiliser une adresse d&apos;exp&eacute;diteur de la forme : <strong>admin@yourdomain.com</strong>. Certains op&eacute;rateurs de mail (comme <em>mail.com</em>) peuvent rejeter les mails dont l&apos;adresse d&apos;exp&eacute;diteur est de la forme <em>name@mail.com</em> envoy&eacute;s via un relai, c&apos;est leur mani&egrave;re de lutter contre le spam.<br /><br />Les valeur par d&eacute;faut sont uniquement utilis&eacute;es si aucune autre valeur n&apos;est sp&eacute;cifi&eacute;e par WebsiteBaker. Si votre serveur supporte <acronym title="Simple mail transfer protocol">SMTP</acronym>, vous pouvez utiliser cette option pour l&apos;exp&eacute;dition d&apos;emails.';
$TEXT['WBMAILER_DEFAULT_SENDER_MAIL'] = 'Adresse d&apos;exp&eacute;diteur par d&eacute;faut';
$TEXT['WBMAILER_DEFAULT_SENDER_NAME'] = 'Nom d&apos;exp&eacute;diteur par d&eacute;faut';
$TEXT['WBMAILER_NOTICE'] = '<strong>Param&egrave;tres du serveur SMTP :</strong><br />Les param&egrave;tres ci-dessous sont uniquement requis si vous souhaitez envoyer des mails via <acronym title="Simple mail transfer protocol">SMTP</acronym>. Si vous ne connaissez pas votre serveur SMTP ou si vous n&apos;&ecirc;tes pas s&ucirc;r de la valeur des param&egrave;tres requis, conservez simplement le m&eacute;canisme par d&eacute;faut : PHP MAIL.';
$TEXT['WBMAILER_FUNCTION'] = 'M&eacute;canisme d&apos;envoi de mail';
$TEXT['WBMAILER_SMTP_HOST'] = 'H&ocirc;te SMTP';
$TEXT['WBMAILER_PHP'] = 'PHP MAIL';
$TEXT['WBMAILER_SMTP'] = 'SMTP';
$TEXT['WBMAILER_SMTP_AUTH'] = 'Authentification SMTP';
$TEXT['WBMAILER_SMTP_AUTH_NOTICE'] = 'n&apos;utilisez l&apos;authentification que si votre seveur SMTP ne l&apos;exige';
$TEXT['WBMAILER_SMTP_USERNAME'] = 'nom d&apos;utilisateur SMTP';
$TEXT['WBMAILER_SMTP_PASSWORD'] = 'mot de passe SMTP';
$TEXT['PLEASE_LOGIN'] = 'Merci de vous identifier';
$TEXT['CAP_EDIT_CSS'] = 'Editer la feuille CSS';
$TEXT['HEADING_CSS_FILE'] = 'Feuille css actuelle : ';
$TEXT['TXT_EDIT_CSS_FILE'] = 'Editer les styles CSS dans la zone de texte ci-dessous.';
$TEXT['CODE_SNIPPET'] = "Extrait de code";
$TEXT['REQUIREMENT'] = "Param&egrave;tres requis";
$TEXT['INSTALLED'] = "install&eacute;";
$TEXT['NOT_INSTALLED'] = "non install&eacute;";
$TEXT['ADDON'] = "Extension";
$TEXT['EXTENSION'] = "Extension";
$TEXT['UNZIP_FILE'] = "Uploader et décompresser l&apos;archive zip";
$TEXT['DELETE_ZIP'] = "Effacer l&apos;archive zip après décompression";

// Success/error messages
$MESSAGE['FRONTEND']['SORRY_NO_VIEWING_PERMISSIONS'] = 'D&eacute;sol&eacute;, vous n&apos;avez pas les droits pour visualiser cette page';
$MESSAGE['FRONTEND']['SORRY_NO_ACTIVE_SECTIONS'] = 'D&eacute;sol&eacute;, aucun contenu actif &agrave; afficher';

$MESSAGE['ADMIN']['INSUFFICIENT_PRIVELLIGES'] = 'Droits insuffisants pour &ecirc;tre ici';

$MESSAGE['LOGIN']['BOTH_BLANK'] = 'Merci de saisir vos identifiants de connexion';
$MESSAGE['LOGIN']['USERNAME_BLANK'] = 'Merci de saisir votre nom d&apos;utilisateur';
$MESSAGE['LOGIN']['PASSWORD_BLANK'] = 'Merci de saisir votre mot de passe';
$MESSAGE['LOGIN']['USERNAME_TOO_SHORT'] = 'Votre nom d&apos;utilisateur est trop court';
$MESSAGE['LOGIN']['PASSWORD_TOO_SHORT'] = 'Votre mot de passe est trop court';
$MESSAGE['LOGIN']['USERNAME_TOO_LONG'] = 'Votre nom d&apos;utilisateur est trop long';
$MESSAGE['LOGIN']['PASSWORD_TOO_LONG'] = 'Votre mot de passe est trop long';
$MESSAGE['LOGIN']['AUTHENTICATION_FAILED'] = 'Votre nom d&apos;utilisateur ou votre mot de passe est incorrect';

$MESSAGE['SIGNUP']['NO_EMAIL'] = 'L&apos;adresse email est obligatoire';
$MESSAGE['SIGNUP2']['SUBJECT_LOGIN_INFO'] = 'Param&egrave;tres de votre connexion ...';
$MESSAGE['SIGNUP2']['BODY_LOGIN_INFO'] = <<< EOT
Bonjour, {LOGIN_DISPLAY_NAME},

Les param&egrave;tres de connexion au site web '{LOGIN_WEBSITE_TITLE}' sont :
identifiant : {LOGIN_NAME}
mot de passe : {LOGIN_PASSWORD}

Votre mot de passe a &eacute;t&eacute; modifi&eacute; avec la valeur ci-dessus.
Par cons&eacute;quent, votre ancien mot de passe n&apos;est plus valide.

Si vous avez re&ccdil;u ce message par erreur, merci de le supprimer imm&eacute;diatement.
EOT;

$MESSAGE['FORGOT_PASS']['NO_DATA'] = 'Merci de saisir votre adresse email';
$MESSAGE['FORGOT_PASS']['EMAIL_NOT_FOUND'] = 'L&apos;adresse email que vous avez saisi est introuvable dans la base de donn&eacute;es';
$MESSAGE['FORGOT_PASS']['CANNOT_EMAIL'] = 'Impossible de vous renvoyer vos identifiants, merci de contacter l&apos;administrateur du site';
$MESSAGE['FORGOT_PASS']['PASSWORD_RESET'] = 'Vos identifiants vous ont &eacute;t&eacute; envoy&eacute; par email';
$MESSAGE['FORGOT_PASS']['ALREADY_RESET'] = 'D&eacute;sol&eacute;, vous ne pouvez pas modifier votre mot de passe plus d&apos;une fois par heure';

$MESSAGE['START']['WELCOME_MESSAGE'] = 'Bienvenue dans la zone d&apos;administration';
$MESSAGE['START']['INSTALL_DIR_EXISTS'] = 'Attention : le r&eacute;pertoire d&apos;installation existe toujours';
$MESSAGE['START']['CURRENT_USER'] = 'Vous &ecirc;tes connect&eacute; en tant que : ';

$MESSAGE['SETTINGS']['UNABLE_OPEN_CONFIG'] = 'Impossible de lire le fichier de configuration';
$MESSAGE['SETTINGS']['UNABLE_WRITE_CONFIG'] = 'Impossible d&apos;&eacute;crire dans le fichier de configuration';
$MESSAGE['SETTINGS']['SAVED'] = 'R&eacute;glages sauvegard&eacute;s avec succ&egrave;s';
$MESSAGE['SETTINGS']['MODE_SWITCH_WARNING'] = 'Attention : en cliquant sur ce bouton, vous ne sauvegardez pas vos modifications';
$MESSAGE['SETTINGS']['WORLD_WRITEABLE_WARNING'] = 'Recommand&eacute; uniquement pour les environnement de test';

$MESSAGE['USERS']['ADDED'] = 'Utilisateur ajout&eacute; avec succ&egrave;s';
$MESSAGE['USERS']['SAVED'] = 'Utilisateur sauvegard&eacute; avec succ&egrave;s';
$MESSAGE['USERS']['DELETED'] = 'Utilisateur supprim&eacute; avec succ&egrave;s';
$MESSAGE['USERS']['NO_GROUP'] = 'Aucun groupe n&apos;a &eacute;t&eacute; s&eacute;lectionn&eacute;';
$MESSAGE['USERS']['USERNAME_TOO_SHORT'] = 'Le nom d&apos;utilisateur est trop court';
$MESSAGE['USERS']['PASSWORD_TOO_SHORT'] = 'Le mot de passe est trop court';
$MESSAGE['USERS']['PASSWORD_MISMATCH'] = 'Le mot de passe est introuvable';
$MESSAGE['USERS']['INVALID_EMAIL'] = 'L&apos;adresse email n&apos;est pas valide';
$MESSAGE['USERS']['EMAIL_TAKEN'] = 'L&apos;adresse email est d&eacute;ja utilis&eacute;e';
$MESSAGE['USERS']['USERNAME_TAKEN'] = 'Le nom d&apos;utilisateur est d&eacute;ja utilis&eacute;';
$MESSAGE['USERS']['CHANGING_PASSWORD'] = 'Vous ne devez modifier les valeurs ci-dessus uniquement lors d&apos;une modification de mot de passe';
$MESSAGE['USERS']['CONFIRM_DELETE'] = 'Etes-vous s&ucirc;r de vouloir supprimer cet utilisateur ?';

$MESSAGE['GROUPS']['ADDED'] = 'Groupe ajout&eacute; avec succ&egrave;s';
$MESSAGE['GROUPS']['SAVED'] = 'Groupe sauvegard&eacute; avec succ&egrave;s';
$MESSAGE['GROUPS']['DELETED'] = 'Groupe supprim&eacute; avec succ&egrave;s';
$MESSAGE['GROUPS']['GROUP_NAME_BLANK'] = 'Le nom du groupe est vide';
$MESSAGE['GROUPS']['CONFIRM_DELETE'] = 'Etes-vous s&ucirc;r de vouloir supprimer ce groupe (ainsi que tous les utilisateurs de ce groupe) ?';
$MESSAGE['GROUPS']['NO_GROUPS_FOUND'] = 'Groupe introuvable';
$MESSAGE['GROUPS']['GROUP_NAME_EXISTS'] = 'Le nom du groupe est d&eacute;ja existant';

$MESSAGE['PREFERENCES']['DETAILS_SAVED'] = 'Donn&eacute;es sauvegard&eacute;es avec succ&egrave;s';
$MESSAGE['PREFERENCES']['EMAIL_UPDATED'] = 'Adresse email sauvegard&eacute;e avec succ&egrave;s';
$MESSAGE['PREFERENCES']['CURRENT_PASSWORD_INCORRECT'] = 'Le mot de passe entr&eacute; est incorrect';
$MESSAGE['PREFERENCES']['PASSWORD_CHANGED'] = 'Mot de passe modifi&eacute; avec succ&egrave;s';

$MESSAGE['TEMPLATES']['CHANGE_TEMPLATE_NOTICE'] = 'Pour modifier le th&egrave;me du site, vous devez vous rendre dans la rubrique R&eacute;glages';

$MESSAGE['MEDIA']['DIR_DOT_DOT_SLASH'] = 'Impossible d&apos;inclure ../ dans le nom du dossier';
$MESSAGE['MEDIA']['DIR_DOES_NOT_EXIST'] = 'Le r&eacute;pertoire n&apos;existe pas';
$MESSAGE['MEDIA']['TARGET_DOT_DOT_SLASH'] = 'Impossible d&apos;avoir ../ dans le nom du dossier cible';
$MESSAGE['MEDIA']['NAME_DOT_DOT_SLASH'] = 'Impossible d&apos;inclure ../ dans le nom';
$MESSAGE['MEDIA']['NAME_INDEX_PHP'] = 'Vous ne pouvez pas utiliser index.php comme nom';
$MESSAGE['MEDIA']['NONE_FOUND'] = 'Aucun media trouv&eacute; dans ce dossier';
$MESSAGE['MEDIA']['FILE_NOT_FOUND'] = 'Fichier introuvable';
$MESSAGE['MEDIA']['DELETED_FILE'] = 'Fichier supprim&eacute; avec succ&egrave;s';
$MESSAGE['MEDIA']['DELETED_DIR'] = 'Dossier supprim&eacute; avec succ&egrave;s';
$MESSAGE['MEDIA']['CONFIRM_DELETE'] = 'Etes-vous s&ucirc;r de vouloir supprimer ce fichier/dossier ?';
$MESSAGE['MEDIA']['CANNOT_DELETE_FILE'] = 'Impossible de supprimer le fichier s&eacute;lectionn&eacute;';
$MESSAGE['MEDIA']['CANNOT_DELETE_DIR'] = 'Impossible de supprimer le dossier s&eacute;lctionn&eacute;';
$MESSAGE['MEDIA']['BLANK_NAME'] = 'Vous n&apos;avezpas entr&eacute; de nouveau nom';
$MESSAGE['MEDIA']['BLANK_EXTENSION'] = 'Vous n&apos;avez pas entr&eacute; d&apos;extension';
$MESSAGE['MEDIA']['RENAMED'] = 'Renommage r&eacute;ussi avec succ&egrave;s';
$MESSAGE['MEDIA']['CANNOT_RENAME'] = 'Impossible de renommer';
$MESSAGE['MEDIA']['FILE_EXISTS'] = 'Un fichier portant ce nom est d&eacute;j&agrave; existant';
$MESSAGE['MEDIA']['DIR_EXISTS'] = 'Un dossier portant ce nom est d&eacute;j&agrave; existant';
$MESSAGE['MEDIA']['DIR_MADE'] = 'Dossier cr&eacute;&eacute; avec succ&egrave;s';
$MESSAGE['MEDIA']['DIR_NOT_MADE'] = 'Impossible de cr&eacute;er le dossier';
$MESSAGE['MEDIA']['SINGLE_UPLOADED'] = 'Le fichier a &eacute;t&eacute; upload&eacute; avec succ&egrave;s';
$MESSAGE['MEDIA']['UPLOADED'] = 'Les fichiers ont &eacute;t&eacute; upload&eacute;s avec succ&egrave;s';

$MESSAGE['PAGES']['ADDED'] = 'Page ajout&eacute;e avec succ&egrave;s';
$MESSAGE['PAGES']['ADDED_HEADING'] = 'L&apos;ent&ecirc;te de la page a &eacute;t&eacute; ajout&eacute; avec succ&egrave;s';
$MESSAGE['PAGES']['PAGE_EXISTS'] = 'Une page avec le m&ecirc;me nom existe d&eacute;j&agrave;';
$MESSAGE['PAGES']['CANNOT_CREATE_ACCESS_FILE'] = 'Erreur lors de la cr&eacute;ation d&apos;un fichier dans le r&eacute;pertoire des pages (privil&egrave;ges insuffisants)';
$MESSAGE['PAGES']['CANNOT_DELETE_ACCESS_FILE'] = 'Erreur lors de la suppression d&apos;un fichier dans le r&eacute;pertoire des pages (privil&egrave;ges insuffisants)';
$MESSAGE['PAGES']['NOT_FOUND'] = 'Page introuvable';
$MESSAGE['PAGES']['SAVED'] = 'Page sauvegard&eacute;e avec succ&egrave;s';
$MESSAGE['PAGES']['SAVED_SETTINGS'] = 'Param&egrave;tres de la page sauvegard&eacute;s avec succ&egrave;s';
$MESSAGE['PAGES']['NOT_SAVED'] = 'Erreur lors de la sauvegarde de la page';
$MESSAGE['PAGES']['DELETE_CONFIRM'] = 'Etes-vous s&ucirc;r de vouloir supprimer la page s&eacute;lectionn&eacute;e (ainsi que ses sous-rubriques)';
$MESSAGE['PAGES']['DELETED'] = 'Page supprim&eacute;e avec succ&egrave;s';
$MESSAGE['PAGES']['RESTORED'] = 'Page restaur&eacute;e avec succ&egrave;s';
$MESSAGE['PAGES']['BLANK_PAGE_TITLE'] = 'Entrez un titre de page';
$MESSAGE['PAGES']['BLANK_MENU_TITLE'] = 'Entrez un titre de menu';
$MESSAGE['PAGES']['REORDERED'] = 'Page r&eacute;ordonn&eacute;e avec succ&egrave;s';
$MESSAGE['PAGES']['CANNOT_REORDER'] = 'Erreur lors du r&eacute;agencement des pages';
$MESSAGE['PAGES']['INSUFFICIENT_PERMISSIONS'] = 'Vous n&apos;avez pas les droits pour modifier cette pages';
$MESSAGE['PAGES']['INTRO_NOT_WRITABLE'] = 'Impossible d&apos;&eacute;crire dans la page d&apos;introduction (privil&egrave;ges insuffisants)';
$MESSAGE['PAGES']['INTRO_SAVED'] = 'Page d&apos;introduction sauvegard&eacute;e avec succ&egrave;s';
$MESSAGE['PAGES']['LAST_MODIFIED'] = 'Mis &agrave; jour par';
$MESSAGE['PAGES']['INTRO_LINK'] = 'Cliquez ici pour modifier la page d&apos;introduction';
$MESSAGE['PAGES']['SECTIONS_PROPERTIES_SAVED'] = 'Les propri&eacute;t&eacute;s de la rubrique ont &eacute;t&eacute; sauvegard&eacute;es avec succ&egrave;s';
$MESSAGE['PAGES']['RETURN_TO_PAGES'] = 'Retour au contenu';

$MESSAGE['GENERIC']['FILL_IN_ALL'] = 'Merci de remplir tous les champs';
$MESSAGE['GENERIC']['FILE_TYPE'] = 'Les fichiers charg&eacute;s doivent avoir les extensions suivantes : ';
$MESSAGE['GENERIC']['FILE_TYPES'] = 'Les fichiers charg&eacute;s doivent &ecirc;tre aux formats suivants : ';
$MESSAGE['GENERIC']['CANNOT_UPLOAD'] = 'Impossible d&apos;uploader le fichier';
$MESSAGE['GENERIC']['ALREADY_INSTALLED'] = 'D&eacute;j&agrave; install&eacute;';
$MESSAGE['GENERIC']['NOT_INSTALLED'] = 'Non install&eacte;';
$MESSAGE['GENERIC']['CANNOT_UNINSTALL'] = 'Impossible de d&eacute;sinstaller';
$MESSAGE['GENERIC']['CANNOT_UNZIP'] = 'Impossible de d&eacute;zipper le fichier';
$MESSAGE['GENERIC']['INSTALLED'] = 'Installation r&eacute;ussie';
$MESSAGE['GENERIC']['UPGRADED'] = 'Mise &agrave; jour r&eacute;ussie';
$MESSAGE['GENERIC']['UNINSTALLED'] = 'D&eacute;sinstallation r&eacute;ussie';
$MESSAGE['GENERIC']['BAD_PERMISSIONS'] = 'Impossible d&apos;&eacute;crire dans le r&eacute;pertoire cible';
$MESSAGE['GENERIC']['INVALID'] = 'Le fichier charg&eacute; est invalide';
$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IN_USE'] = 'D&eacute;sinstallation impossible : fichier en cours d&apos;utilisation';

$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IN_USE_TMPL'] = "<br /><br />{{type}} <b>{{type_name}}</b> ne peut pas &ecirc;tre déinstall&eacute; car il est actuellement en cours d'utilisation dans les pages {{pages}}.<br /><br />";
$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IN_USE_TMPL_PAGES'] = "cette page;ces pages";
$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IS_DEFAULT_TEMPLATE'] = "Impossible de d&eacute;sinstaller le mod&egrave;le <b>{{name}}</b> parce que c'est le mod&egrave;le par d&eacute;faut !";

$MESSAGE['GENERIC']['WEBSITE_UNDER_CONSTRUCTION'] = 'Site en construction';
$MESSAGE['GENERIC']['PLEASE_CHECK_BACK_SOON'] = 'Merci de revenir plus tard';
$MESSAGE['GENERIC']['PLEASE_BE_PATIENT'] = 'Merci de patienter';
$MESSAGE['GENERIC']['ERROR_OPENING_FILE'] = 'Erreur lors de l&apos;ouverture du fichier';
$MESSAGE['GENERIC']['INVALID_ADDON_FILE'] = 'Fichier d&apos;extension incorrect. V&eacute;rifiez le fichier zip .';
$MESSAGE['GENERIC']['INVALID_LANGUAGE_FILE'] = 'Fichier de langue incorrect. V&eacute;rifiez le fichier de langue.';

$MESSAGE['MOD_FORM']['REQUIRED_FIELDS'] = 'Vous devez renseigner les champs suivants';
$MESSAGE['MOD_FORM']['EXCESS_SUBMISSIONS'] = 'D&eacute;sol&eacute; mais ce formulaire est utilis&eacute; trop fr&eacute;quemment en ce moment. Afin de nous aider &agrave; lutter contre le spam, merci de r&eacute;essayer plus tard';
$MESSAGE['MOD_FORM']['INCORRECT_CAPTCHA'] = 'Le num&eacute;ro de v&eacute;rification (Captcha) que vous avez entr&eacute; est incorrect. Si vous rencontrez des probl&egrave;mes quant &agrave; la lecture de ce num&eacute;ro, merci d&apos;envoyer un email &agrave; : '.SERVER_EMAIL.'';

$MESSAGE['ADDON']['RELOAD'] = 'Mise &agrave; jour de la base de donn&eacute;es avec les informations des extensions (ou apr&egrave;s l&apos;upload via ftp).';
$MESSAGE['ADDON']['ERROR_RELOAD'] = 'Erreur pendant la mise &agrave; jour des informations des modules.';
$MESSAGE['ADDON']['MODULES_RELOADED'] = 'Les modules ont &eacute;t&eacute; correctement recharg&eacute;s';
$MESSAGE['ADDON']['TEMPLATES_RELOADED'] = 'Les th&egrave;mes ont &eacute;t&eacute; correctement recharg&eacute;s';
$MESSAGE['ADDON']['LANGUAGES_RELOADED'] = 'Les langues ont &eacute;t&eacute; correctement recharg&eacute;es';
$MESSAGE['ADDON']['PRECHECK_FAILED'] = 'Echec de l&apos;installation de l&apos;extension. Votre syst&egrave;me ne respecte pas les pr&eacute;-requis de cette extension. Pour la faire fonctionner, merci de solutionner les erreurs list&eacute;es ci-dessous.';
$MESSAGE['ADDON']['MANUAL_INSTALLATION'] = 'Quand les extensions sont upload&eacute;s via ftp (ce qui n&apos;est pas recommand&eacute;), les fichiers d&apos;installation du module <tt>install.php</tt>, <tt>upgrade.php</tt> ou <tt>uninstall.php</tt> ne seront pas ex&eacute;cut&eacute;s automatiquement. Ces modules peuvent ne pas fonctionner ou ne pas se d&eacute;sinstaller correctement.<br /><br />Vous pouvez ex&eacute;cuter les fichiers d&apos;extension manuellement pour les extensions upload&eacute;es via ftp ci-dessous.';
$MESSAGE['ADDON']['MANUAL_INSTALLATION_WARNING'] = 'Attention: les donn&eacute;es de la base de donn&eacute;es de l&apos;extension existante vont &ecirc;tre perdues. Utilisez cette option si vous rencontrez des probl&egrave;mes avec des modules upload&eacute;s via ftp.';
?>