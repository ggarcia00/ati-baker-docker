/*
 #########################################################################################
 # Configure FCKEditor according your needs
 # ---------------------------------------------------------------------------------------
 #  Purpose of this file is to define all settings of FCKEditor without changing the FCK
 #  Javascript core file fckconfig.js. Doing so allows to upgrade to a newer version of
 #  FCKEditor while keeping all your customisations (styles, toolbars...)
 #  
 #  Author: Christian Sommer, (doc)
 #
 #  Follow this link for more information:
 #  http://wiki.fckeditor.net/Developer%27s_Guide/Configuration/Configurations_Settings
 #  
 #########################################################################################
*/

// required settings to make FCKEditor work with Website Baker (do not change them)
    FCKConfig.Plugins.Add( 'WBModules', 'en,nl,de' ) ;
    FCKConfig.Plugins.Add( 'WBDroplets', 'en,nl,de' ) ;
//  FCKConfig.Plugins.Add( 'youtube', 'en,ja,de' );
    FCKConfig.Plugins.Add( 'swfobject', 'en,es') ;
//  FCKConfig.Plugins.Add( 'flvPlayer','en,de') ;

// ----------------------
// Configure Syntax highlighter for 2.0.x
FCKConfig.Plugins.Add('syntaxhighlight2', 'en');
// default language options:
// c++,csharp,css,delphi,java,jscript,php,python,ruby,sql,vb,xhtml
FCKConfig.SyntaxHighlight2LangDefault = 'php';
//
// ----------------------

// FCKConfig.Plugins.Add( 'autogrow' ) ;
// FCKConfig.Plugins.Add( 'dragresizetable' );
FCKConfig.AutoGrowMax = 600 ;

// FCKConfig.ProtectedSource.Add( /<%[\s\S]*?%>/g ) ;	// ASP style server side code <%...%>
// FCKConfig.ProtectedSource.Add( /<\?[\s\S]*?\?>/g ) ;	// PHP style server side code
// FCKConfig.ProtectedSource.Add( /(<asp:[^\>]+>[\s|\S]*?<\/asp:[^\>]+>)|(<asp:[^\>]+\/>)/gi ) ;	// ASP.Net style tags <asp:control>

// #########################################################################################
// # FCKEditor: General settings
// # ---------------------------------------------------------------------------------------
// #  Here you can modify all the options available in the /fckeditor/editor/fckconfig.js
// #  Settings defined here will overrule the ones defined in fckconfig.js without touching
// #  the Javascript core files of FCK.
// #
// #  If you are missing some options, have a look into fckconfig.js and copy the required
// #  code lines here
// #########################################################################################

// set doctype as used in your template to prevent code mix up (example XHTML 1.0 Transitional)
   FCKConfig.DocType = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">' ;

// define FCK default language
   FCKConfig.AutoDetectLanguage		= true ;	// could be turned off, if all users speek same language
   FCKConfig.DefaultLanguage		= 'en' ;	// could be switched to de for German
   FCKConfig.ContentLangDirection	= 'ltr' ;	// left to right

// specify HTML tag used for ENTER and SHIFT+ENTER key
   FCKConfig.EnterMode 			= 'p' ;		// allowed tags: p | div | br
   FCKConfig.ShiftEnterMode 	= 'br' ;	// allowed tags: p | div | br
   FCKConfig.StylesXmlPath		= FCKConfig.EditorPath + 'fckstyles.xml' ;
   // define how FCK should handle empty blocks
   FCKConfig.FillEmptyBlocks	= true ;   //true (default value) sets <p></p> tags to empty blocks

// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// Note: If you miss some options, have a look into fckconfig.js and add the lines below
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


// #########################################################################################
// # FCKEditor: Customised FCKEditor tool bar
// # ---------------------------------------------------------------------------------------
// #  Here you can modify the FCKEditor tool bar to your needs.
// #  A collection of example layouts are provided below.
// #
// #  Note: Per default the tool bar named: "WBToolbar" will be used within FCKEditor.
// #########################################################################################

// ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//  Default toolbar set used by Website Baker
// ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
   FCKConfig.ToolbarSets["Original"] = [
	['Source','Save'],
	['Cut','Copy','Paste','PasteText','PasteWord','-','SpellCheck'],
	['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
	['Smiley','SpecialChar'],
	['FitWindow','-','About'],
	'/',
	['Bold','Italic','Underline','StrikeThrough','-','Subscript','Superscript'],
	['OrderedList','UnorderedList','-','Outdent','Indent'],
	['JustifyLeft','JustifyCenter','JustifyRight','JustifyFull'],
	['Link','Unlink','Anchor'],
	['Image','Flash','Table','Rule'],
	'/',
	['Style','FontFormat','FontName','FontSize'],
	['TextColor','BGColor']
] ;

// ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//  original FCKEditor toolbar
// ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
   FCKConfig.ToolbarSets["WBToolbar"] = [
	['Source','DocProps','-','NewPage','Preview','-','Templates'],
	['Cut','Copy','Paste','PasteText','PasteWord','-','Print','SpellCheck'],
    ['FitWindow','ShowBlocks', '-', 'SyntaxHighLight2',  /**/ /* 'flvPlayer', */ '-','About'],
	'/',
	['Form','Checkbox','Radio','TextField','Textarea','Select','Button','ImageButton','HiddenField'],
    ['TextColor','BGColor'],
	['WBDroplets','WBModules','Link','Unlink','Anchor'],
	['Image','Flash','Table','Rule','Smiley','SpecialChar','PageBreak'],
	'/',
	['Bold','Italic','Underline','StrikeThrough','-','Subscript','Superscript'],
	['OrderedList','UnorderedList','-','Outdent','Indent','Blockquote'],
	['JustifyLeft','JustifyCenter','JustifyRight','JustifyFull'],
	['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
	'/',
	['Style','FontFormat','FontName','FontSize']  // No comma for the last row.

] ;


// ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//  simple toolbar (only basic functions)
// ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
   FCKConfig.ToolbarSets["Simple"] = [
	['Preview',"Print"],
	['Cut','Copy','Paste','PasteText'],
	['Undo','Redo'],
	['Bold','Italic','Underline'],
	['OrderedList','UnorderedList','-','Table'],
	['WBModules','Link','Unlink','Anchor'],
	['RemoveFormat','Image','-','Source'],
	'/',
	['FontFormat','Style']
] ;


// #########################################################################################
// # FCKEditor: CSS / XML / TEMPLATES
// # ---------------------------------------------------------------------------------------
// #  Here you can tweak the layout of the FCKEditor according your needs.
// #  Specify HTML elements shown in the dropdown menu and the XML file which defines your
// #  CSS styles available in the FCKEditor style menu.
// #########################################################################################

// define HTML elements which appear in the FCK "Format" toolbar menu
   FCKConfig.FontFormats	= 'p;div;pre;address;h1;h2;h3;h4;h5;h6' ;
// define font colors which can be set by the user (HEXADECIMAL)
   FCKConfig.FontColors = '000000,993300,333300,003300,003366,000080,333399,333333,800000,FF6600,808000,808080,008080,0000FF,666699,808080,FF0000,FF9900,99CC00,339966,33CCCC,3366FF,800080,999999,FF00FF,FFCC00,FFFF00,00FF00,00FFFF,00CCFF,993366,C0C0C0,FF99CC,FFCC99,FFFF99,CCFFCC,CCFFFF,99CCFF,CC99FF,FFFFFF' ;
// define fonts style and sizes which can be set by the user
   FCKConfig.FontNames	= 'Arial;Comic Sans MS;Courier New;Tahoma;Times New Roman;Verdana;Wingdings' ;
//   FCKConfig.FontSizes	= 'smaller;larger;xx-small;x-small;small;medium;large;x-large;xx-large' ;
   FCKConfig.FontSizes	= '8px;10px;12px;14px;16px;18px;20px;24px;28px;32px;36px;48px;60px;72px' ;
// make the offic2003 skin the default skin
   FCKConfig.SkinPath = FCKConfig.BasePath + 'skins/office2003/'
   FCKConfig.ProtectedSource.Add( /<\?[\s\S]*?\?>/g ) ;
   FCKConfig.TemplateReplaceAll = false;
   FCKConfig.TemplateReplaceCheckbox = true ;
   FCKConfig['StylesXmlPath'] = FCKConfig.BasePath+'/wb_config/wb_fckstyles.xml';

/*
   -----------------------------------------------------------------------------------------
   Note: GENERAL HINTS ON CSS FORMATS AND XML FILES
   -----------------------------------------------------------------------------------------
   Easiest way to display all CSS definitions used in your template is to make a copy of your
   CSS definition file and place it as "editor.css" in your template folder.
   All styles will automatically be updated and used with the FCK editor.

   If you don???t want to put custom "editor.css" files into your templates folder, you can
   try the other approach introduced below:
   
   copy all CSS definitions of your template into file: /my_config/my_fckeditorarea.css
    o Default HTML elements like (h1, p) will appear in the format you have specified via CSS.
    o additional HTML elements like (.title) will appear in the "Styles" toolbar menu of FCK
   
   Via file (/my_config/my_fckstyles.xml) you can define additional styles for default
   elements. Use this option, if you want to display conditional styles only if a special
   HTML element is selected (e.g. after selecting an <img> element, the style menu will
   provide additional elements like align=left, align=right, which don???t show up for other
   elements like <p>

   CSS definitions declared in the XML file are realised as INLINE styles. If you want avoid
   INLINE elements, but the CSS definitions into the /my_config_my_fckeditorarea.css and
   references only the class or ID in the XML file.

   Use /my_config/my_template.xls to define custom Editor templates (e.g. 2 or 3 column).
   This option is usefull if you have several side layouts (e.g. Level 1, Level 2...)
*/


// #########################################################################################
// # FCK Editor: PLUGINS (Link, Image, Flash)
// # ---------------------------------------------------------------------------------------
// #  Plugin Link:   create internal or external links and URL
// #  Plugin Image:  insert images to your WYSIWYG text area form the WB media directory
// #  Plugin Flash:  insert flash elements including upload Option
// #  
// #  Note: 
// #  You need to integrate the plugins into the menu bar so you can use them
// #    FCKConfig.ToolbarSets["MyToolbar"] = [
// #      ['Image',Link','Flash'], ...
// #    ];
// #########################################################################################

// configure the image plugin
   FCKConfig.ImageUpload = false ;		// display/hides image upload tab (allow/disable users to upload images from FCK)
   FCKConfig.ImageBrowser = true ;		// enables/disables the file browser to search for uploaded files in /media folder

// configure the link plugin
   FCKConfig.LinkUpload = false ;		// display/hides link upload tab (allow/disable users to upload files from FCK)
   FCKConfig.LinkBrowser = true ;		// enables/disables the file browser to search for uploaded files in /media folder

// configure the flash plugin
   FCKConfig.FlashUpload = false ;		// display/hides upload tab (allow/disable users to upload flash movies from FCK)
   FCKConfig.FlashBrowser = true;		// enables/disables the file browser to search for uploaded files in /media folder