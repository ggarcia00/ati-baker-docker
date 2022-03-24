<?php
//Das ist ein einzeiliger PHP-Kommentar. Er beginnt mit //
/* Das ist ein mehrzeiliger PHP-Kommentar, Er beginnt mit /* und endet mit  */

//Diese Kommentare helfen dir im folgenden, ein modernes Template zu verstehen.
//Must be: Prevent from direct access:
if (!defined('WB_URL')) {
    header('Location: ../index.php');
    exit(0);
}

//Gleich hier kannst du festlegen, dass der SuperAdmin einen Edit-Schalter im Template bekommt.
//Du kannst das auch erweitern - oder weglassen.
$refreshstring = '?rs=' . time(); //forces refresh
$template_edit_link = false;
/*
  if ($wb->is_authenticated()) {
  if ($wb->ami_group_member('1')) {
  $template_edit_link = true;
  }

  $refreshstring = '?rs=' . time(); //forces refresh
  }
 */
//============================================================================================================
//Der folgende Bereich ist zu 99% bei allen modernen Templates gleich. 
//Du wirst hier bis fast zum Ende des <head> nichts aendern muessen
//============================================================================================================
//So kannst du feststellen, ob die Seite die Startseite ist und dann die Ausgabe anders machen:
$isstartpage = false;
if (!isset($page_id)) {
    $isstartpage = true;
}
if (isset($template_id) AND $page_id == 4) {
    $isstartpage = true;
} // wbce.at presentation, you can remove this line
?>
<!DOCTYPE html>
<html lang="<?php echo strtolower(LANGUAGE); ?>">
    <head>
        <?php
        if (function_exists('simplepagehead')) {
            simplepagehead('/', 1, 0, 0);
        } else {
            ?>
            <title>
            <?php
            ob_start();
                page_title();
                $titleSite = ob_get_contents();
            ob_end_clean();
            if (DEFAULT_CHARSET == 'utf-8') {
                if (mb_detect_encoding($titleSite . 'x', 'UTF-8, ISO-8859-1') == 'UTF-8') {
                    echo htmlentities(utf8_decode($titleSite));
                }
            } else {
                echo htmlentities($titleSite);
            }
            ?>
            </title>
            <meta http-equiv="Content-Type" content="text/html; charset=<?php
//            if (defined('DEFAULT_CHARSET')) {
//                echo DEFAULT_CHARSET;
//            } else {
            echo 'utf-8';
//            }
            ?>" />
            <meta name="description" content="<?php page_description(); ?>" />
            <meta name="keywords" content="<?php page_keywords(); ?>" />
            <?php
        }

//Hier wird alles JS/CSS dazugeladen, was Module und Templates brauchen. Das ist ganz wichtig:
        if (function_exists('register_frontend_modfiles')) {
            register_frontend_modfiles('css');
            register_frontend_modfiles('jquery');
            register_frontend_modfiles('js');
        }
        ?>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo TEMPLATE_DIR; ?>/colorset/colorset.php<?php echo $refreshstring; ?>" rel="stylesheet" type="text/css" />
        <!-- Bootstrap -->
        <link href="<?php $_SERVER['DOCUMENT_ROOT']; ?>template/uel-portal/view/resources/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
        <link href="<?php $_SERVER['DOCUMENT_ROOT']; ?>template/uel-portal/view/resources/css/datepicker.min.css" rel="stylesheet" type="text/css" media="all">
        <link href="<?php $_SERVER['DOCUMENT_ROOT']; ?>template/uel-portal/view/resources/css/jquery.bxslider.min.css" rel="stylesheet" type="text/css" media="all">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <script type="text/javascript">
            jQuery.noConflict();
            $(document).ready(function () {
                (function ($) {

                    //Script para a biblioteca jQuery usando $().

                    $('span').css('color', '');

                })(jQuery)

            });

            //Segue o script para outra biblioteca usando alias $().
            $('#page').show();
            $('body').css('background', 'black');

        </script>


        <?php
// Generate vistor statistic if module is installed 
        if (file_exists(WB_PATH . '/modules/wbstats/count.php')) {
            include (WB_PATH . '/modules/wbstats/count.php');
        }

//============================================================================================================
//Menue: 
//Fuer das Menue ist showmenu2 zustaendig.
//Du kannst das auch direkt dort aufrufen, wo es gebraucht wird.
//Aber hier speichern wir es gleich in eine Variable $mainmenu, damit wir es spaeter griffbereit haben:
//Hier ist sehr viel angegeben, oft kommst du mit weniger aus:
        $mainmenu = show_menu2(1, SM2_ROOT, SM2_ALL, SM2_ALL | SM2_BUFFER, '<li class="[class] lev[level]"><a href="[url]" target="[target]" class="lev[level] [class]" data-pid=[page_id]><span>[menu_title]</span></a>', '</li>', '<ul class="ullev[level]">', '</ul>', false, false);

//============================================================================================================
//Bloecke
//In der info.php des Templates koennen beliebige Inhaltsbloecke angegeben sein.
//Ueblich ist aber eine bestimmte Aufteilung. Weiter unten geben wir diese Bloecke aus, und das Layout aendert sich, je nachdem, ob die Bloecke auch Inhalt haben.
//Auch die Bloecke laden wir gleich hier in eine Variable $contentblock (Array), das hat Vorteile:
#require_once __DIR__ . '/info.php'; //Wir laden die info.php
        /*
          foreach ($block as $k => $v) { //und haengen in einer Schleife alle an.
          if ($k == 99) {
          continue;
          }  //ausser Block 99, der ist fuer "Keine Ausgabe" reserviert.
          ob_start();
          page_content($k);
          $contentblock[$k] = ob_get_clean();
          }
         */
// Manche Module koennen auch einen 2. Block ausgeben, der im ersten Block definiert wurde:
        if (defined('MODULES_BLOCK2') AND MODULES_BLOCK2 != '') {
            $contentblock[2] .= MODULES_BLOCK2; //der 2. Block wird einfach erweitert.
        }

        if (defined('TOPIC_BLOCK2') AND TOPIC_BLOCK2 != '') {
            $contentblock[2] = TOPIC_BLOCK2; //Bei Topics sollte der 2. Block aber vollstaendig ersetzt werden.
        }
//============================================================================================================
//Weiteres:
//Manche Module definieren ein og:image. Das ist das Bild, das Facebook anzeigt, wenn du eine Seite dort verlinkst.
        if (defined('OG_IMAGE') AND OG_IMAGE != '') {
            echo '
	<meta property="og:image" content="' . OG_IMAGE . '"/>
';
        }
//Am Ende kannst du noch das CSS und Javascript fuer Slider oder Aehnliches einsetzen.
//Hier verwenden wir zb den Flexlider.
        ?>
        <link rel="stylesheet" href="<?php echo TEMPLATE_DIR; ?>/FlexSlider/flexslider.css" type="text/css" media="screen" />
        <?php
        /* ============================================================================================================
          Jetzt haben wir alles, was wir fuer die Ausgabe brauchen.
          Weil manches davon noch im <head> ausgegeben werden soll, haben wir das alles VOR dem schliessenden </head> gemacht.

          Jetzt kommen wir zum </body>.
          Im Body wird das meiste durch kurze Schnippsel direkt in den HTML-Code eingesetzt.

          ============================================================================================================ */
        ?>

        <style>
            .logo-uel{
                background: url("<?php $_SERVER['DOCUMENT_ROOT']; ?>/home/view/resources/image/logo-uel-maior.jpg") no-repeat;
                background-size: 250px;
                width:250px;
                height:60px;
                margin: auto;
            }
            .icone-transparencia {
                width: 20px;
                padding-left: 5px;
                vertical-align: middle;
            }

            nav-transparencia > a {
                display: table-cell;
            }

            .navbar {
                box-shadow: 1px 0 2px 0 rgba(0,0,0,0.75);
                min-height: 37px;    
            }

            .form-control {
                height: 30px;
                width: 200px;
            }

            .navbar-toggle {
                vertical-align: middle;
                margin: 0;
            }

            .navbar-brand {
                float:left;
                padding:0;
                font-size:18px;
                line-height:20px
            }
            .navbar-default .container-fluid {
                padding: 0px;
            }

            .navbar-right {
                margin-right: 0px;
            }

            .nav .navbar-nav{

                padding: 0px 0px 0px 0px;

            }

            #nav-idiomas {

            }
            /*#nav-idiomas a {
                float:left;
            }*/

            #nav-idiomas a > img {
                height: 15px;
            }

            .navbar-default .navbar-header,
            .navbar-default .navbar-brand
            {
                background-color: #ffffff;
            }

            .navbar-default {
                background-color: #00753B;
                border-color: #00753B;
            }

            .navbar-default .navbar-brand {
                color: #535353;
            }

            .navbar-default .navbar-brand:hover,
            .navbar-default .navbar-brand:focus {
                color: #535353;
            }

            .navbar-default .navbar-text {
                color: #535353;
            }

            .navbar-default .navbar-nav > li > a {
                color: #fff;
                padding: 5px 0px 5px 0px;
                margin: 5px 0px 0px 15px;
            }

            .navbar-default .navbar-nav > li > a:hover,
            .navbar-default .navbar-nav > li > a:focus {
                color: #fff;
                padding: 5px 0px 3px 0px;
                /*border-bottom: #67B21F 2px solid;*/
                margin: 5px 0px 0px 15px;
            }

            .navbar-default .navbar-nav > li > ul > li > a {
                color: #535353;
                padding: 5px 0px 5px 0px;
                font-size: 14px;
                background-color: #EEECEE;
            } 

            .navbar-nav>li>a {
                padding-top: 9px;
                padding-bottom: 9px;
            }
            .navbar-default .navbar-nav > li > ul > li > a:hover,
            .navbar-default .navbar-nav > li > ul > li > a:focus {
                color: #ffffff;
                padding: 5px 0px 5px 0px;
                font-size: 14px;
                background-color: #2E7D32;
            }

            .navbar-default .navbar-nav > li > a:hover,
            .navbar-default .navbar-nav > li > a:focus {
                color: #535353;
                padding: 5px 0px 3px 0px;
                /*border-bottom: #67B21F 2px solid;*/
                margin: 5px 0px 0px 15px;
            }

            .navbar-default .navbar-nav > .active > a,
            .navbar-default .navbar-nav > .active > a:hover,
            .navbar-default .navbar-nav > .active > a:focus {
                color: #535353;
                background-color: #ffffff;
            }

            .navbar-default .navbar-nav > .open > a,
            .navbar-default .navbar-nav > .open > a:hover,
            .navbar-default .navbar-nav > .open > a:focus {
                color: #535353;
                background-color: #ffffff;
            }

            .navbar-default .navbar-toggle {
                border-color: #00753B;
            }

            .navbar-default .navbar-toggle:hover,
            .navbar-default .navbar-toggle:focus {
                background-color: #00753B;
            }

            .navbar-default .navbar-toggle .icon-bar {
                background-color: #fff;
            }

            .navbar-default .navbar-collapse,
            .navbar-default .navbar-form {
                background-color: #00753B;
            }

            .navbar-default .navbar-link {
                color: #535353;
            }

            .navbar-default .navbar-link:hover {
                color: #535353;
            }

            .navbar-fixed-bottom .navbar-collapse, .navbar-fixed-top .navbar-collapse {
                max-height: 420px;
            }

            .navbar-default .navbar-collapse, .navbar-default .navbar-form {
                border-color: #00753B;
            }

            .dropdown-menu>li>a {
                font-family: 'Lato';
                font-size: 16px;
                display: block;
                padding: 3px 20px;
                clear: both;
                font-weight: normal;
                line-height: 1.428571429;
                color: #333;
                white-space: nowrap;
            }


            input.gsc-input,
            .gsc-input-box,
            .gsc-input-box-hover,
            .gsc-input-box-focus,
            .gsc-search-button {
                box-sizing: content-box; 
                line-height: normal;
            }

            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                margin:  1% 0 1% 0;
            }
            ._12 {
                font-size: 1.2em;
            }
            ._14 {
                font-size: 1.4em;
            }
            ul {
                padding:0;
                list-style: none;
            }
            .header-social-icons {
                /*width: 191px;*/
                display:block;
                margin: 0 auto;
                height: 0px;
            }
            .social-icon {
                color: #fff;
            }
            ul.social-icons {
                margin-top: 2px;
                position: relative;
                left: 200px;

            }
            .social-icons li {
                vertical-align: middle;
                display: inline;
                height: 100px;
            }
            .social-icons a {
                color: #fff;
                text-decoration: none;
            }

            .fa {
                display: inline-block;
                font: normal normal normal 14px/1 FontAwesome;
                font-size: 17px;
                text-rendering: auto;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }
            .fa-facebook {
                padding:10px 14px;
                -o-transition:.5s;
                -ms-transition:.5s;
                -moz-transition:.5s;
                -webkit-transition:.5s;
                transition: .5s;
                background-color: transparent;
            }
            .fa-facebook:hover {
                background-color: transparent;
            }
            .fa-twitter {
                padding:10px 12px;
                -o-transition:.5s;
                -ms-transition:.5s;
                -moz-transition:.5s;
                -webkit-transition:.5s;
                transition: .5s;
                background-color: transparent;
            }
            .fa-twitter:hover {
                background-color: transparent;
            }
            .fa-rss {
                padding:10px 14px;
                -o-transition:.5s;
                -ms-transition:.5s;
                -moz-transition:.5s;
                -webkit-transition:.5s;
                transition: .5s;
                background-color: transparent;
            }
            .fa-rss:hover {
                background-color: transparent;
            }
            .fa-youtube {
                padding:10px 14px;
                -o-transition:.5s;
                -ms-transition:.5s;
                -moz-transition:.5s;
                -webkit-transition:.5s;
                transition: .5s;
                background-color: transparent;
            }
            .fa-youtube:hover {
                background-color: transparent;
            }
            .fa-linkedin {
                padding:10px 14px;
                -o-transition:.5s;
                -ms-transition:.5s;
                -moz-transition:.5s;
                -webkit-transition:.5s;
                transition: .5s;
                background-color: transparent;
            }
            .fa-linkedin:hover {
                background-color: transparent;
            }
            .fa-google-plus {
                padding:10px 9px;
                -o-transition:.5s;
                -ms-transition:.5s;
                -moz-transition:.5s;
                -webkit-transition:.5s;
                transition: .5s;
                background-color: transparent;
            }
            .fa-google-plus:hover {
                background-color: transparent;
            } 

            @media (max-width: 990px) {

                .navbar-brand-outer {
                    display:flex;
                    align-items:center;
                    height:70px;
                    width:260px;

                    margin-bottom: 17px;

                    padding: 0;
                }


                .navbar-search {
                    padding-left: 0;
                }
                .navbar-header {
                    float: none;
                    width: 260px;
                    height: 70px;
                }
                .navbar-left,.navbar-right {
                    float: none !important;
                }
                .navbar-toggle {
                    display: block;
                }
                .navbar-collapse {
                    border-top: 1px solid transparent;
                    box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
                }
                .navbar-fixed-top {
                    top: 0;
                    /*border-width: 0 0 1px;*/
                }

                .navbar-form {
                    border-top: 0px;
                }

                .navbar-collapse.collapse {
                    display: none!important;
                }

                .navbar-nav {
                    float: none!important;
                    margin-top: 0px;
                    text-align: center;
                }
                .navbar-nav>li {
                    float: none; 
                }
                .navbar-nav>li>a {
                    padding-top: 5px;
                    padding-bottom: 5px;
                }
                .collapse.in{
                    display:block !important;
                }

                .navbar-default .navbar-nav > li > a{
                    color: #fff;
                    background-color: #00753B;
                    margin: 0;
                    padding: 10px 0px 10px 0px;
                    line-height: 10px;
                }

                .navbar-default .navbar-nav > li > a:hover,
                .navbar-default .navbar-nav > li > a:focus {
                    color: #ffffff;
                    background-color: #2E7D32;
                    padding: 10px 0px 10px 0px;
                    border: 0;
                    margin: 0px;
                }

                .navbar-default .navbar-nav > li > a{
                    color: #fff;
                    background-color: #00753B;
                    margin: 0;
                    padding: 10px 0px 10px 0px;
                    line-height: 10px;
                }



                .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
                .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
                    color: #fff;

                }
                .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
                .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
                .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
                    color: #fff;
                    background-color: #ccc; 
                }

                .navbar-form {
                    margin-top:5px;
                    margin-bottom: 0px;
                    padding-right: 0px;
                    padding-left: 30px;
                    width: 300px;
                    position: relative;
                    right: -230px;
                }

                .navbar-nav {
                    margin: 7.5px 0px;
                    margin-top: 7.5px;
                    margin-right: 0px;

                }

                .navbar-collapse .navbar-nav.navbar-right:last-child {
                    margin-right: 0px;
                }

                /*Cor caret*/
                .nav .caret {
                    border-top-color: #fff;
                    border-bottom-color: #fff;
                }
                .nav a:hover .caret {
                    border-top-color: #fff;
                    border-bottom-color: #fff;
                }
            }

            .nav .open > a,
            .nav .open > a:hover,
            .nav .open > a:focus {
                background-color:#c0d1c5;
                border-color: #337ab7;
            }


            @media (max-width: 480px) {
                .navbar-default .navbar-nav > li > a{
                    color: #fff;
                    background-color: #00753B;
                    margin: 0;
                    padding: 10px 0px 10px 0px;
                    line-height: 10px;
                }

                .nav .navbar-nav{
                    font-weight: bold;
                    padding: 0px 0px 0px 14px;
                }

                .navbar-form {
                    margin-top:5px;
                    margin-bottom: 0px;
                    padding-right: 0px;
                    padding-left: 30px;
                    width: 300px;
                    /*position: relative;
                    right: 365px;*/
                }

                .navbar-nav {

                    margin: 7.5px 0px;
                    margin-top: 7.5px;
                    margin-right: 0px;
                }


            }

            @media (max-width: 979px) {
                .navbar-default .navbar-nav > li > a{
                    color: #fff;
                    background-color: #00753B;
                    margin: 0;
                    padding: 10px 0px 10px 0px;
                    line-height: 10px;
                }

                .nav .navbar-nav{
                    font-weight: bold;
                    padding: 0px 0px 0px 14px;
                }

                .navbar-form {
                    margin-top:5px;
                    margin-bottom: 0px;
                    padding-right: 0px;
                    padding-left: 30px;
                    width: 300px;
                    /*position: relative;
                    right: 365px;*/
                }
            }



            * {margin: 0; padding:0;}

            body {
                background-color: #F7F7F7;
                font-family: 'Lato';
            }

            .container {
                background-color: #00753B;
                padding: 0;
            }

            .col-centered {
                float: none;
                margin: 0 auto;
            }
            .card {
                box-shadow: 0 1px 3px 0 rgba(0,0,0,0.2),0 1px 1px 0 rgba(0,0,0,0.14),0 2px 1px -1px rgba(0,0,0,0.12);
                -webkit-box-shadow: 0 1px 3px 0 rgba(0,0,0,0.2),0 1px 1px 0 rgba(0,0,0,0.14),0 2px 1px -1px rgba(0,0,0,0.12);
                -moz-box-shadow: 0 1px 3px 0 rgba(0,0,0,0.2),0 1px 1px 0 rgba(0,0,0,0.14),0 2px 1px -1px rgba(0,0,0,0.12);
                -moz-border-radius: 2px;
                -webkit-border-radius: 2px;
                border-radius: 2px;
                background: #fff;
                padding: 16px;
                margin-bottom: 16px;
                box-sizing: border-box;

            }

            .card-header {
                box-shadow: 0 1px 3px 0 rgba(0,0,0,0.2), 0 1px 1px 0 rgba(0,0,0,0.14), 0 2px 1px -1px rgba(0,0,0,0.12);
                -webkit-box-shadow: 0 1px 3px 0 rgba(0,0,0,0.2), 0 1px 1px 0 rgba(0,0,0,0.14), 0 2px 1px -1px rgba(0,0,0,0.12);
                -moz-box-shadow: 0 1px 3px 0 rgba(0,0,0,0.2),0 1px 1px 0 rgba(0,0,0,0.14),0 2px 1px -1px rgba(0,0,0,0.12);
                -moz-border-radius: 2px;
                -webkit-border-radius: 2px;
                border-radius: 2px;
                background: #fff;
                padding: 16px;
                box-sizing: border-box;
                margin-top: 39px;

            }

            #header-portal {
                height: 36px;
            }

            .menu {
                margin: 5px 0px 10px 0px;
            }

            .menu > li > a{
                color: #333;
                border-bottom: #fff 1px solid;
                padding: 5px 5px 5px 5px;
                font-size: 12px;
            }

            .menu-titulo {
                width: 210px;
                background-color: #d1decf;
                color: #535357;
                display: table-cell;
                padding: 5px 8px 4px 11px;
                border-radius: 2px;
                margin-bottom: 15px;
                border-left: 9px solid #00753B;
            }

            .menu-titulo-2 {
                width: 100%;
                background-color: #d1decf;
                color: #535357;
                display: table-cell;
                padding: 5px 8px 4px 11px;
                border-radius: 2px;
                margin-bottom: 15px;
                position: relative;
                left: 15px;
            }

            .menu-portais {
                margin-bottom: 5px;
            }

            .secao-titulo {
                margin: 15px 0px 15px 0px;
            }
            .secao-icone {
                width: 20px;
                background-color: #cde1e1;
                display: table-cell;
                /*padding: 5px 10px 5px 10px;*/
                border-right: #fff 2px solid;
                margin-bottom: 15px;
            }

            .secao-titulo-nome {
                font-family: 'Lato';
                width: 100%;
                background-color: #edf5f1;
                color: #000;
                padding: 10px 5px 10px 5px;

                font-weight: normal ;
                font-size: 15px;
                margin-bottom: 15px;
                border-left: 9px solid #5fa884;
            }



            .secao-titulo-nome a {
                color: #000;
            }

            #botoes-menu-direito {
                font-weight: bold;  
            }

            #botoes-menu-direito > li > a {
                font-size: 12px;
                margin-bottom: 5px;
                /*    box-shadow: 0 1px 3px 0 rgba(0,0,0,0.2),0 1px 1px 0 rgba(0,0,0,0.14),0 2px 1px -1px rgba(0,0,0,0.12);
                    -webkit-box-shadow: 0 1px 3px 0 rgba(0,0,0,0.2),0 1px 1px 0 rgba(0,0,0,0.14),0 2px 1px -1px rgba(0,0,0,0.12);
                    -moz-box-shadow: 0 1px 3px 0 rgba(0,0,0,0.2),0 1px 1px 0 rgba(0,0,0,0.14),0 2px 1px -1px rgba(0,0,0,0.12);
                    -moz-border-radius: 2px;
                    -webkit-border-radius: 2px;*/
            }

            #botoes-menu-esquerdo > li > a {
                padding: 5px 10px 5px 10px;
                font-size: 12px;
                border-radius: 2px;
                margin-bottom: 5px;
            }

            #ul-agencia {
                margin: 10px 0px 10px 0px;
            }

            .nav-menu > ul > li > a {
                color: #444;
                font-size: 17px;
            }

            .nav-pills > li > a {
                color: #444;
                font-size: 12px;
                border-radius: 4px;
                border: #ccc 1px solid;
                padding: 5px 10px;
            }

            .submenu > li > a {
                color: #222;
                font-size: 12px;
            }


            /*
            #com-slider {
                margin: 10 auto;
            }*/


            .carousel-inner > .item > a > img {
                width: 100%;
                height: 300px;
            }

            .carousel-caption {
                padding: 6px 0px 0px 10px;
                background: #00753B;
                width: 238px;
                height: 34px;
                position: relative;
                bottom: 70px;
                left: 5px;
                text-align: left;
            }

            .tarja-home {
                background-color: #00753B;
                color: #FFF;
                font-size: 100%;
                /* text-transform: uppercase; */
                padding-top: 2px;
                padding-bottom: 1px;
                padding-left: 10px;
                width: 240px;
                display: block;
                margin-top: -50px;
                margin-bottom: 15px;
                position: relative;
                z-index: 2;
                border-bottom: 1px solid #57ab70;
                border-right: 1px solid #57ab70;
                bottom: 35px;
                left: 29px;
            }

            .tarja-home-servicos {
                background-color: #57ab70;
                color: #FFF;
                font-size: 100%;
                /* text-transform: uppercase; */
                padding-top: 2px;
                padding-bottom: 1px;
                padding-left: 10px;
                width: 240px;
                display: block;
                margin-top: -50px;
                margin-bottom: 15px;
                position: relative;
                z-index: 2;
                border-bottom: 1px solid #57ab70;
                border-right: 1px solid #57ab70;
                bottom: 35px;
                left: 19px;
            }

            .titulo-home {
                font-family: 'Lato';
                font-weight: bold;
            }

            .titulo-home > a {
                color: #57ab70;
            }

            .resumo-home{
                font-size: 90%;
                font-family: 'Lato';
                color: #575756;
            }

            .carousel-indicators {
                bottom: 10px;
            }
            .carousel-control {
                opacity: 0;
                width: 20%;
            }

            .carousel-control .glyphicon-chevron-right {
                margin-right: -40px;
            }

            .carousel-control .glyphicon-chevron-left {
                margin-left: -40px;
            }

            .slider li input:checked ~ a h3 {
                color: #fff;
                font-size: 28px;
                font-weight: 300;
                line-height: 60px;
                padding: 0 0 0 10px;
                text-shadow: 1px 1px 1px rgba(20, 20, 20, 0.72);
            }

            .carousel-indicators {
                margin-bottom: -10px;
            }

            /* Estilo para Agï¿½ncia de Notï¿½cias */
            #agencia-noticias ul {
                list-style-type: none;
                text-align: left;
            }

            #agencia-noticias li {
                margin: 5px 5px 10px 5px;
            }

            #agencia-noticias li a {
                color: #575756;
            }

            #row-2-portal {
                margin-top: 0px;
            }

            .row {
                margin-right: 0px; 
                margin-left: 0px; 
            }


            /*Estilo para Vï¿½deos*/
            #videos {
                margin-bottom: 0px;
            }
            #videos ul {
                list-style-type: none;
                text-align: left;
            }

            #videos li {
                margin: 5px 5px 10px 5px;
            }

            #videos li a {
                color: #575756;
            }

            /*Estilo para ï¿½rea do Jornal Notï¿½cia*/
            .imagem-capa {
                border: #ccc 1px solid;
                border-radius: 4px;
                padding: 2px;
            }
            .imagem-capa > a > img {
                width: 100%;
                height: 200px;
            }

            /*Estilo para Atividades Acadï¿½micas*/
            #atividades-academicas li a {
                color: #575756;
            }

            /*Estilo para Rï¿½dio Uel*/
            #radio-uel .thumbnail > img {
                height: 85px;
            }
            .thumbnail {
                padding:0px;
                border: none;
            }

            .thumbnail > img {

                display: block;
                height: auto;
                max-width: 100%;
                border: none;

            }

            /*Estilo para Destaques*

            #destaques .thumbnail img {
                height: auto;
                width: 220px;
            }

            #destaques .thumbnail {
                
                padding-bottom: 10px;
                margin-bottom: 0px;
            }*/

            thumbnail {
                display: inline-block;
                height: 165px;
                max-width: 100%;
                padding: 4px;
                line-height: 1.428571429;
                background-color: #fff;
                border: 1px solid #ddd;
                border-radius: 4px;
                -webkit-transition: all .2s ease-in-out;
                transition: all .2s ease-in-out;
            }

            /*Estilo para Canais*/
            .ul_canal_links > li {
                list-style: none;
                padding: 0px 0px 2px 5px;
            }

            .ul_canal_links > li > a {
                color: #333;
                font-size: 12px;
            }

            .div_canal_titulo {
                margin-bottom: 5px;
                font-weight: bold;
                font-size: 12px;
            }

            .canais-imagem {
                width: 32px;
                height: 100%;
                display: table-cell;
                margin-bottom: 10px;
                vertical-align: middle;
            }

            .canais-titulo {
                width: 100%;
                padding: 5px 5px 5px 5px;
                display: table-cell;
                margin-bottom: 10px;
                font-size: 12px;
                color: #333;
                font-weight: bold;
            }

            .canais-titulo:hover{
                color: #333;
            }

            #links-com-imagem {
                margin-bottom: 20px;
            }

            #links .thumbnail {
                text-align: center;
                padding: 0px;
                border: 0px;
            }

            #links .thumbnail img {
                height: 38px;
            }

            #footer {
                text-align: center;
                font-size: 12px;
                color: #333;
                margin-bottom: 0px;
            }

            #footer a {
                text-decoration: none;
                color: #333;
            }

            #footer a:hover{
                text-decoration: underline;
            }

            .panel {
                margin-bottom: 20px;
                background-color: #fff;
                border: 1px solid transparent;
                border-radius: 4px;
                -webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.05);
                box-shadow: 0 0px 0px rgba(0,0,0,0.05);
            }

            .panel-group {
                margin-bottom: 0px;
            }

            .panel-heading {
                padding: 0px;
                margin-top: 15px;
                margin-bottom: 10px;
            }

            #heading-atividades {
                margin-top: 0px;
            }
            .more-less {
                float: right;
                color: #333;
                /*text-shadow: 1px 1px 1px rgba(40, 40, 40, 0.60);*/
            }

            #collapse-canais {
                margin-right: 0px;
                margin-left: 0px;
            }

            .nav .open > a {
                border: 0px;
            }

            .panel {
                border: 0px;
            }

            /*Estilo para as p?ginas*/
            .paginas {
                margin-bottom: 15px;
            }
            .pagina-icone {
                width: 20px;
                background-color: #EEECEE;
                display: table-cell;
                padding: 5px 10px 5px 10px;
                border-right: #fff 2px solid;
                margin-bottom: 15px;
            }

            .pagina-titulo-nome {
                width: 100%;
                background-color: #EEECEE;
                color: #2E7D32;
                padding: 5px 5px 5px 5px;
                display: table-cell;
                /*display: block;*/
                font-weight: bold;
                margin-bottom: 15px;
                font-size: 18px;
            }

            .paginas blockquote {
                border: 0px;
                padding-left: 20px;
                margin: 0px;
                font-size: 12px;
            }

            .paginas-lista-nome {
                padding-top: 10px;
                font-size: 14px;
                font-weight: bold;
            }

            .paginas-lista-nome > a {
                color: #333;
            }


            .paginas-lista-conteudo {
                padding-left: 20px;
                font-size: 12px;
            }

            .paginas-lista-conteudo li a {
                color: #333;
                line-height: 2;
            }

            /*#informes li {
                list-style-type: none;
            }*/

            /*#informes .paginas-lista-conteudo {
                padding: 0px;
                line-height: 2;
            }*/

            .portal-links .paginas-lista-conteudo {
                margin-top: 15px;
            }

            #form-filtro {
                margin-top: 20px;
            }

            #form-filtro > .well {
                background-color: #F6F6F6;
                margin: 0;
                padding: 10px;
            }

            #form-filtro .form-group {
                width: 100%;
                margin-top: 10px;
            }

            .pagination > li > a {
                color: #333;
                width: 42px;
                text-align: center;
                font-weight: bold;
            }

            .pagination > li > a:hover{
                color: #333;
            }

            .pagination > li > a.pagina-selecionada {
                background-color: #00933B;
                color: #fff;
                border: 1px solid #ddd;
            }

            .pagination > li > a.desativado {
                color: #ccc;
                pointer-events: none;
            }

            .pagination > li > a.desativado:hover {
                color: #ccc;
                background-color: #fff;
            }

            .bx-wrapper {
                -moz-box-shadow: none;
                -webkit-box-shadow: none;
                box-shadow: 0;
                border: 0;
                margin-bottom: 0;
                background: #fff;
            }

            .bx-wrapper .bx-prev {
                left: 0px;
                background: url("/view/resources/images/controls.png") 0 -32px no-repeat;
            }

            .bx-wrapper .bx-next {
                right: 0px;
                background: url("/view/resources/image/controls.png") -43px -32px no-repeat;
            }

            .bx-wrapper .bx-controls-direction a {
                margin-top: -45px;
            }



            .row-striped:nth-of-type(odd){
                background-color: #efefef;
                border-left: 4px #000000 solid;
            }

            .row-striped:nth-of-type(even){
                background-color: #ffffff;
                border-left: 4px #efefef solid;
            }

            .row-striped {
                padding: 15px 0;
            }

            .dropdown-menu-left {
                right: auto;
                left: -5px;
            }


            /*Seta do menu dropdown*/
            .caret {
                display: inline-block;
                width: 0px;
                height: 0px;
                margin-left: 2px;
                vertical-align: middle;
                border-top: 4px dashed;
                border-top: 4px solid\9;
                border-right: 4px solid transparent;
                border-left: 4px solid transparent;
                /* background-color: #397e72; */
            }

            .nav>li>a:focus, .nav>li>a:hover {
                text-decoration: none;
                background-color: #c0d1c5;
            }

            .navbar-nav > li > .dropdown-menu {

                margin-top: 0;
                border-top-left-radius: 0;
                border-top-right-radius: 0;
                /*border-left: 5px solid #259642;*/

            }

            .navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {

                color: #fff;
                /*padding: 5px 0px 3px 0px;
                margin: 5px 0px 0px 15px;*/
            }

            .dropdown-menu > li > a:focus, .dropdown-menu > li > a:hover {

                color: #262626;
                text-decoration: none;
                background-color: #d1decf;
            }



            /*Tabela Radio UEL*/
            #table-wrapper {
                position:relative;
            }
            #table-scroll {
                height:68px;
                overflow:auto;  
                margin-top: 10px;
            }
            #table-wrapper table {
                width:100%;

            }
            #table-wrapper table * {
                background:#f2f2f2;

            }
            #table-wrapper table thead th .text {
                position:absolute;   
                top:-20px;
                z-index:2;
                height:20px;
                width:35%;
                border:1px solid red;
            }

            #menu-header-superior {
                position: relative;
            }


            /*Estilo para Eventos e Cursos*/
            .w3-container, .w3-panel {
                padding: 0.01em 5px;
            }

            .w3-xlarge {
                font-size: 20px!important;
            }
            .w3-badge, .w3-tag {
                background-color: #EEECEE;
                color: #535353;
                display: inline-block;
                padding-left: 8px;
                padding-right: 8px;
                text-align: center;
                box-shadow: 1px 2px 7px 0px rgba(0,0,0,0.75);
            }

            .eventos-mes {
                width: 357px;
                margin-left: 2px;
                margin-top: 18px;
                padding: 0px 5px 0px 8px;
                font-size: 25px;
                border-left: 9px solid #00753B;
            }
            .eventos-mes > a {
                color: #00753B;
                text-decoration: none;
            }

            .eventos-dia {
                font-size: 30px;
                color: #575756;
            }

            .eventos-dia > a {
                color: #575756;
                text-decoration: none;
            }

            .eventos-do-dia {
                display: inline;
                font-size: 19px;
            }

            .eventos-do-dia > a {
                color: #444;
                text-decoration: none;
            }

            /*Tabela Radio UEL*/
            #table-wrapper {
                position:relative;
            }
            #table-scroll {
                height:75px;
                overflow:auto;  

            }
            #table-wrapper table {
                width:100%;

            }
            #table-wrapper table * {
                background:#f2f2f2;

            }
            #table-wrapper table thead th .text {
                position:absolute;   
                top:-20px;
                z-index:2;
                height:20px;
                width:35%;
                border:1px solid red;
            }

            #menu-header-superior {
                position: relative;
            }



            /*Definiï¿½ï¿½es de tamanho de conteiners e elementos */
            @media (max-width: 480px),
            (max-width: 680px) and (max-height: 480px) {
                #agencia-noticias {
                    margin-bottom: 15px;
                } 
            }

            @media (max-width: 480px) {
                .carousel-inner > .item > a > img {
                    height: 150px;
                }

                .carousel-caption {
                    padding: 0px 0px 0px 10px;
                    background: rgba(0,0,0,0.7);
                    width: 300px;
                    height: 50px;
                    position: absolute;
                    bottom: 30px;
                    left:0px;
                    text-align: left;
                    display: table;
                }

                .carousel-caption > h3 {
                    vertical-align: middle;
                    display: table-cell;
                    margin: 0px;
                    font-size: 18px;
                    line-height: normal;
                } 

                .carousel-control .glyphicon-chevron-right {
                    margin-right: 0px;
                }

                .carousel-control .glyphicon-chevron-left {
                    margin-left: 0px;
                }

                .navbar-form {
                    margin-top:5px;
                    margin-bottom: 0px;
                    padding-right: 0px;
                    padding-left: 30px;
                    width: 300px;
                    /*position: relative;
                    right: 365px;*/
                }

                .thumbnail .caption{
                    padding: 0px 0px 0px 0px;
                    text-align: left;
                    color: #575756;
                }
            }

            @media (max-width: 767px) {
                #row-2-portal {
                    margin-top: 0px;
                }

                #conteudo-portal {
                    margin: 0;
                    margin-bottom: 10px;
                }

                #header-portal {
                    /*padding: 0px 15px 0px 15px;*/

                }
                #agencia-noticias {
                    margin-top: 15px;
                }

                .panel {
                    margin-bottom: 15px;
                }

                .panel-group .panel {
                    margin-bottom: 15px;
                }

                .panel-heading {
                    padding: 0px;
                    margin-top: 0px;
                    margin-bottom: 0px;
                }

                .panel-heading > div > a {
                    color: #2E7D32;
                }

                #panel-canais .panel-heading > div > a {
                    color: #333;
                }

                .navbar-form {
                    margin-top:5px;
                    margin-bottom: 0px;
                    padding-right: 0px;
                    padding-left: 30px;
                    width: 300px;
                    position: relative;
                    right: -20px;
                }

                .navbar-nav {

                    margin: 7.5px 0px;
                    margin-top: 7.5px;
                    margin-right: 0px;

                }

                .navbar-collapse {
                    padding-right: 0px;
                    padding-left: 0px;
                    overflow-x: visible;
                    -webkit-overflow-scrolling: touch;
                    border-top: 1px solid transparent;
                    -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.1);
                    box-shadow: inset 0 1px 0 rgba(255,255,255,.1);

                }

                .thumbnail .caption{
                    padding: 0px 0px 0px 0px;
                    text-align: left;
                    color: #575756;
                }
            }

            @media (min-width: 992px) {
                .row.text-center > div {
                    display: inline-block;
                    float: none;
                }
            } 

            @media (max-width: 1199px) {
                .menu-titulo {
                    font-size: 12px;
                    padding: 2px 5px 2px 5px;
                }
                .menu-icone {
                    padding: 2px 5px 2px 5px;
                }

                .tam-ul-dropdown {
                    width: 937px;
                    position: relative;
                    right: 15px;
                }


                .estilo-navbar-drop-li {
                    margin-left: 15px;
                }

                .estilo-navbar-drop-ul {
                    margin-left: 4px;
                }

                .navbar-form {
                    margin-top:5px;
                    margin-bottom: 0px;
                    padding-right: 0px;
                    padding-left: 30px;
                    width: 270px;
                    /*position: relative;
                    right: 365px;*/
                }

                .nav>li>a {
                    position: relative;
                    display: block;
                    padding: 16px 35px;
                }

                ul.social-icons {
                    /*margin-top: 5px;*/
                    position: relative;
                    left: 132px;
                }
            }

            @media (min-width: 1200px) {
                .container {
                    max-width: 1200px;
                }

                .navbar-brand-outer {
                    display:flex;
                    align-items:center;
                    height:70px;
                    width:260px;
                    position: relative;
                    margin-bottom: 17px;
                    left: 420px;
                    padding: 0;
                }

                .navbar-form {
                    margin-top:5px;
                    margin-bottom: 0px;
                    padding-right: 0px;
                    padding-left: 30px;
                    width: 300px;
                    /*position: relative;
                    right: 365px;*/
                }

                .nav>li>a {
                    position: relative;
                    display: block;
                    padding: 16px 59px;
                }

                #menu-header-left {
                    position: relative;
                    left: 365px;
                }

                .estilo-navbar-drop-div {
                    top: 10px;
                }

                /*.estilo-navbar-drop-li {
                    margin-left: 30px;
                }*/

                .estilo-navbar-drop-ul {
                    margin-left: 5px;
                }

                .tam-ul-dropdown {
                    width: 1137px;
                    position: relative;
                    right: 15px;
                }


            }

            @media (min-width: 991) and (max-width: 1199) {



                .estilo-navbar-drop-div {
                    position: relative;
                    left: 69px; 
                    top: 30px;
                }

                .estilo-navbar-drop-li {
                    margin-left: 15px;
                }

                .estilo-navbar-drop-ul {
                    margin-left: 4px;
                }


            }

            @media (min-width: 991px) {
                /*Cor caret*/
                .nav .caret {
                    border-top-color: #00753B;
                    border-bottom-color: #00753B;
                }
                .nav a:hover .caret {
                    border-top-color: #00753B;
                    border-bottom-color: #00753B;
                }



            }

            /*Dropdowns*/
            .dropdown-submenu {
                position: relative;
            }

            .dropdown-submenu>.dropdown-menu {
                top: 0;
                left: 100%;
                margin-top: -6px;
                margin-left: -1px;
                -webkit-border-radius: 0 6px 6px 6px;
                -moz-border-radius: 0 6px 6px;
                border-radius: 0 6px 6px 6px;
            }

            .dropdown-submenu:hover>.dropdown-menu {
                display: block;
            }

            .dropdown-submenu>a:after {
                display: block;
                content: " ";
                float: right;
                width: 0;
                height: 0;
                border-color: transparent;
                border-style: solid;
                border-width: 5px 0 5px 5px;
                border-left-color: #ccc;
                margin-top: 5px;
                margin-right: -10px;
            }

            .dropdown-submenu:hover>a:after {
                border-left-color: #fff;
            }

            .dropdown-submenu.pull-left {
                float: none;
            }

            .dropdown-submenu.pull-left>.dropdown-menu {
                left: -100%;
                margin-left: 10px;
                -webkit-border-radius: 6px 0 6px 6px;
                -moz-border-radius: 6px 0 6px 6px;
                border-radius: 6px 0 6px 6px;
            }


            /* Template css */
            * { margin: 0; padding: 0;}

            body, html {	
                color: #000;	
                margin: 0;	
                background: #F7F7F7;
                height:100%;
            }


            .mainwrapper {
                /*width:63.1%;*/	
                max-width: 1340px;
                /*box-shadow: 0 1px 3px 0 rgba(0,0,0,0.2), 0 1px 1px 0 rgba(0,0,0,0.14), 0 2px 1px -1px rgba(0,0,0,0.12);*/
                min-height:0%;
                margin: 0 auto 0 auto;
                background: #fff url(img/mainwrapper.gif) repeat-x;
                background-size: 87% 10px;
                position:relative;
                background-color: white;
                /*box-shadow: 0 20px 50px 0 rgba(0, 0, 0, 0.1);*/
            }


            #leftbox {
                margin:0 0 0 0; 
                float:left; 
                width: 21.66%; 
                /*min-height: 400px; */
                background: white;

            }

            #leftbox a { 
                color: #000;
            }

            #leftbox .logo img {
                margin: 20px 0 30px 5%; 
                max-width: 90%;
            }


            /*Main Blocks*/
            .mainbox { 
                float:left; 
                width: 78.3333%;
                background-color: white;
                min-height: 288px;
            }

            #titulo1 {

                background-color: #F7F7F7;
                color: green;
                font-size: 12pt;
                font-weight: bold;
                text-align: left;
                padding-top: 7px;
                padding-bottom: 7px;
                padding-left: 7px;
                float: left;
                margin-left: 24px;
                margin-top: 0px;
                margin-right: 0px;
                width: 96.6%;
                height: auto;
                border: 1px solid #ccc;

            }


            .contentbox {
                padding-top:0px;
                padding-left: 25px;
                background-color: white;
            }

            .contentbox, .widetop, .widebottom {width:97%; clear:both; min-height:100px; }
            .contentwide { float:left; width: 100%; }
            .contentnarrow { float:left; width: 74.9%; }

            .sidebar { float:right; width: 25%; font-size:0.92em; }

            .footer {
                width: 100%; 
                margin: 0 ;
            }

            /*iinenabstaende: */
            .contentbox .contentinner {margin: 0 20px 20px 20px ; }
            .sidebar .contentinner {margin: 0 5% 20px 5% ; }
            .widetop .contentinner {}
            .widebottom .contentinner {}

            .footer  {
                border-top: 1px solid #F7F7F7;
            }
            .footer .contentinner  {
                width: 100%; 
                margin: 0 0 0 0 ; 
                padding-top: 10px;
            }

            /*Notbremse fuer responsive Bilder: maximal 100% Breite*/
            .mainbox p img {max-width:100%; height: auto ! important; }

            /*
            .clearer {
                height: 5px; 
                clear:both;
                background-color: white;
            }*/
            #gototopswitch {float:right; margin: 20px 10px 0 0;}



            #mobiletop {
                display:none; 
                padding: 10px 0 33px 0;
                padding-left: 4px;
                background: #fff; 
                height:30px;
                box-shadow: 0 1px 3px 0 rgba(0,0,0,0.2), 0 1px 1px 0 rgba(0,0,0,0.14), 0 2px 1px -1px rgba(0,0,0,0.12);
                -webkit-box-shadow: 0 1px 3px 0 rgba(0,0,0,0.2), 0 1px 1px 0 rgba(0,0,0,0.14), 0 2px 1px -1px rgba(0,0,0,0.12);
                -moz-box-shadow: 0 1px 3px 0 rgba(0,0,0,0.2),0 1px 1px 0 rgba(0,0,0,0.14),0 2px 1px -1px rgba(0,0,0,0.12);
                -moz-border-radius: 2px;
                -webkit-border-radius: 2px;
            }

            #mobiletop a#menuswitch {
                display:block; 
                float:left; 
                width:33px;  
                margin: 0 0 0 0; 
                padding: 10px 20px 0 0;
            }

            #mobiletop a#menuswitch img {
                max-width:100%; 
            }

            /*#mobiletop .mobilelogo img { float:left; max-width:75%; margin-left:5%; max-height:100%;}*/


            #menucheck {width:100%; height:1px; display:block;}


            /*.sliderbox { height: 360px;	color: #ddd; margin:0 0 0 0;}
            .slider { overflow:hidden; height: 100%;}*/

            #static_headerbox {width: 100%; padding-bottom:25%; background: url(img/static_header.jpg) no-repeat fixed top center;}





            .menubox{
                margin: 5px 0px 10px 0px;
                width:100%;
                min-height:245px;
                background-color: white;
            }



            /*menu */
            #nav {width :100%; margin-top:-1px;}

            #nav ul { /* all lists */	
                padding: 0;
                margin: 0;
                list-style-image: none;
                list-style-type: none;
                padding-bottom: 5px;

            }


            #nav li { /* all list items */
                display:block; 
                float:left;
                width:100%;
                list-style-image: none;
                list-style-type: none;	
                font-size : 13px;
                padding-bottom: 0;
            }

            /*Level 1 and more*/
            #nav a {			
                display : block;	
                text-decoration : none;	
                padding: 6px 0 6px 20px;
                transition: 0.5s padding;		
            }

            #nav li a.menu-current, #nav li a.menu-parent {background-color:#fff; border-bottom : 1px #ccc;}
            /*
            #nav li li a.menu-current, #nav li li a.menu-parent {background:none; font-weight:bold}
            */
            #nav  a:hover ul li {z-index: 1000;}
            #nav  a.menu-expand { background: url(/img/haschild.png) no-repeat 2px 12px;}
            #nav  a.menu-expand.isopened { background: url(/img/isclicked.png) no-repeat 2px 12px;}

            #nav li ul {opacity:0.9;}
            #nav li a {font-size:1.1em; }
            #nav li li a {padding-left: 30px; font-size:1em; }
            #nav li li li a {padding-left: 40px; font-size:0.95em;}
            #nav li li li li a {padding-left: 50px; font-size:0.9em;}

            #XXnav a.isopened { padding-top: 12px; }


            #nav li ul { display:none;}

            #nav li.menu-current>ul, #nav li.menu-parent>ul, #nav li.isopened>ul   { display:block ! important;}
            #nav li.menu-current li>ul, #nav li.isopened li>ul  { display:none;}




            /*Search Box */
            #search_box { clear:both; padding: 5px 0 5px 18px; border-bottom : 1px solid #ccc;}
            #search_box .searchstring { 
                color:#555;		
                padding:2px;
                border: 1px solid #999;
                background-color: #f7f7f7;
                width:60%;
            }
            #search_box .submitbutton {
                padding: 0 0 0 10px;
                vertical-align: middle;
            }



            /* Login Box */
            #showlogin {display:none; float:left; position:relative;  width:30px; text-align:left; margin:6px 6px 0 15px; }
            #login-box {position:absolute; width:180px; left:20px; top:0; padding:5px; font-size:11px; }
            #login-box .loginsubmit {border:0; margin:10px 10px 0 0}
            #login-box .inputfield {width:80px; border: 1px solid #c9e8f9; padding:1px;}

            a.template_edit_link{
                display: block; 
                clear:both;
                margin: 40px 0 0 12px; 
                width:16px; 
                height:16px; 
                background: transparent url(/img/edit.gif) no-repeat; 
                text-decoration:none;
            }



            table.frm-field_table td {font-size:0.9em; padding: 8px 2px; vertical-align: top; border-bottom: 1px solid #eee;}



            /*Extra cookie_permission */
            #cookie_permission {position:fixed; top:0; right:0; z-index:9950; width: 200px; padding:10px; background: #555; text-align:center; font-size: 0.9em; line-height:120%; border-radius: 0 0 0 25px; box-shadow: 0 10px 50px 0 rgba(0, 0, 0, 0.2); }
            #cookie_permission p , #cookie_permission a {color:#fff;}
            #cookie_permission a.cookieaccepted {color:#000; background: #eeb300; display:block; padding:5px; border-radius: 15px; border: 1px solid #fff; font-weight:bold;}




            /*Extra Colorpicker */
            #colorpickericon {display:block; width:24px; height:24px; background: url(img/colorpicker.png) no-repeat; z-index:5000; position: absolute; top:200px; right:0; cursor:pointer;}
            #colorpicker {display:none; width:90px; background: #ddd; position: absolute; top:100px; right:0; z-index:5000; font-size:12px;line-height:100%; box-shadow: 0 20px 50px 0 rgba(0, 0, 0, 0.1);}
            .pickerfield {width:100%; height:40px; float:left;}

            .pickerfield input[type="color"] {width:100%; height:20px; padding:0; border:0; cursor:pointer;}
            .pickerfield input[type="text"] {width:90%; height:20px; padding:1px 3%; border: 1px solid #999;; cursor:text;}


            a.colpick-button {display:block; clear:both; width:80%; margin:10px auto; padding:3px; background: rgba(255,255,255,0.2); text-align:center; border: 1px solid #666; border-radius: 15px;  cursor:pointer;}
            #colorpicker-info {display:none; position: absolute; width:160px; padding:10px; top:0; left:-180px; background: #eee; box-shadow: 0 20px 50px 0 rgba(0, 0, 0, 0.1);}

            .menu {
                margin: 5px 0px 10px 0px;
            }

            .submenu > li > a {
                color: #222;
                font-size: 12px;
            }

            .nav {
                padding-left: 0;
                margin-bottom: 0;
                list-style: none;
            }

            .nav-pills > li > a{
                color: #444;
                font-size: 12px;
                border-radius: 4px;
                border: #ccc 1px solid;
                padding: 5px 10px;
            }

            #botoes-menu-esquerdo > li > a {
                padding: 5px 10px 5px 10px;
                font-size: 12px;
                border-radius: 2px;
                margin-bottom: 5px;
            }






            /* ======================================================================
            Smaller Screens */
            @media screen and (max-width: 1100px) {
                body, html { 
                    background-image: none; 
                    background-color:#F7F7F7;		}

                .mainwrapper {
                    background-image: none; 
                    background-color: #fff; 
                    width:100%;		
                }

                #mobiletop {display:block;}


                #leftbox {
                    display:none; 
                    position: absolute; 
                    top:0; 
                    left: 0; 
                    z-index:500; 
                    float: left; 
                    width:220px; 
                    margin: 0 0 0 0; 
                    box-shadow: 0 20px 50px 0 rgba(0, 0, 0, 0.3); 
                }

                #leftbox .menubox {
                    height:auto ;
                    min-height:200px;  
                    padding-bottom:40px ;
                }	

                #leftbox .logo {
                    display: none;
                }

                #leftbox.active {
                    left: 0;
                }


                .mainbox {width: 100%; }
                /*.sliderbox { height:auto;}
                .sliderbox  .flexslider {margin:0 0 0 0;}
                .sliderbox  .flex-direction-nav {display:none;}*/

                #menucheck {display:none;}


                /*Korrekturen*/
                table {max-width:98% ! important; width:98% ! important; }	
                td.frm-field_title {white-space: normal;}


            }


            @media screen and (max-width: 995px) {

                .mainwrapper { background-image: none;  }

                .mainbox, .contentbox, .widetop, .widebottom, .sidebar, .contentnarrow, .contentwide  {float:none; width: 100%; }


                table.responsivetable td {display:block; width:100% ! important; height: auto;}

                #titulo1 {
                    background-color: #F7F7F7;
                    color: green;
                    font-size: 12pt;
                    font-weight: bold;
                    text-align: left;
                    padding-top: 7px;
                    padding-bottom: 7px;
                    padding-left: 7px;
                    float: left;
                    margin-left: 24px;
                    margin-top: 0px;
                    margin-right: 0px;
                    width: 91%;
                    height: auto;
                    border: 1px solid #ccc;
                }

                /*iinenabstaende: */
                .contentbox .contentinner {margin: 0 2% 20px 2% ; }
                .widetop .contentinner {}
                .widebottom .contentinner {}
                .footer .contentinner {width: 90%; }

            }



            @media screen and (max-width: 768px) {

                .mainwrapper { background-image: none;  }

                .mainbox, .contentbox, .widetop, .widebottom, .sidebar, .contentnarrow, .contentwide  {float:none; width: 100%; }


                table.responsivetable td {display:block; width:100% ! important; height: auto;}

                #titulo1 {
                    background-color: #F7F7F7;
                    color: green;
                    font-size: 12pt;
                    font-weight: bold;
                    text-align: left;
                    padding-top: 7px;
                    padding-bottom: 7px;
                    padding-left: 7px;
                    float: left;
                    margin-left: 24px;
                    margin-top: 0px;
                    margin-right: 0px;
                    width: 91%;
                    height: auto;
                    border: 1px solid #ccc;
                }



                /*iinenabstaende: */
                .contentbox .contentinner {margin: 0 2% 20px 2% ; }
                .widetop .contentinner {}
                .widebottom .contentinner {}
                .footer .contentinner {width: 90%; }

            }


            /* ======================================================================
            Smaller Screens */
            @media screen and (max-width: 540px) {


                .mainwrapper { background-image: none;  }

                .mainbox, .contentbox, .widetop, .widebottom, .sidebar, .contentnarrow, .contentwide  {float:none; width: 100%; }


                table.responsivetable td {display:block; width:100% ! important; height: auto;}

                #titulo1 {
                    background-color: #F7F7F7;
                    color: green;
                    font-size: 12pt;
                    font-weight: bold;
                    text-align: left;
                    padding-top: 7px;
                    padding-bottom: 7px;
                    padding-left: 7px;
                    float: left;
                    margin-left: 24px;
                    margin-top: 0px;
                    margin-right: 0px;
                    width: 91%;
                    height: auto;
                    border: 1px solid #ccc;
                }

                /*iinenabstaende: */
                .contentbox .contentinner {margin: 0 2% 20px 2% ; }
                .widetop .contentinner {}
                .widebottom .contentinner {}
                .footer .contentinner {width: 90%; }

            }
        </style>    
    </head>
    <body class="body<?php
    echo $page_id;
    if ($isstartpage == true) {
        echo ' isstartpage';
    }
    ?>">
        <a style="display:none;" href="#beginContent">go to content</a>

        <!-- navbar -->
        <?php include_once('view/html/navbar.html'); ?>

        <div class="container" id="mobiletop">
            <a tabindex="-1" id="menuswitch" onclick="showmenu();
                    return false;" href="#"><img src="<?php echo TEMPLATE_DIR; ?>/img/mobilemenu.png" alt="Mobile Menu" /></a>
            <!--<a tabindex="-1" class="mobilelogo" href="<?php echo WB_URL; ?>"><img src="<?php echo TEMPLATE_DIR; ?>/img/logo.png" alt="to Homepage" /></a>
            <div class="clearer"></div>-->
        </div>

        <div class="card container"> 
            <div class="mainwrapper">
                <div id="leftbox">
                    <div class="secao-titulo-nome">MENUS</div>
                    <div class="menubox">
                        <!--<a tabindex="-1" class="logo" href="<?php #echo WB_URL;                    ?>"><img src="<?php #echo TEMPLATE_DIR;                    ?>/img/logo.png" alt="go to homepage" /></a>-->
                        <div role="navigation" id="nav">
                            <?php echo $mainmenu; ?>
                        </div><!--end nav-->
                        <?php
                        //Das Suche-Feld laden wir einfach per include, wenn die Suche eingeschaltet ist:
                        #if (SHOW_SEARCH) { include 'inc/search.inc.php'; }
                        //Das gleiche mit dem Login-Bereich. Dieser ist normalerweise ausgeschaltet. Hier wird er mit AJAX nachgeladen. 
                        if (FRONTEND_LOGIN) {
                            echo '<div id="showlogin"><a href="#" onclick="showloginbox(); return false;"><img src="' . TEMPLATE_DIR . '/img/key.png" alt="K" /></a><div id="login-box" style="display:none"></div></div><!--LOGIN_URL, LOGOUT_URL,FORGOT_URL-->';
                        }

                        //und optional machen wir einen Edit-Schalter fuer den Admin:
                        if ($template_edit_link == true) {
                            echo '<a tabindex="-1" class="template_edit_link" href="' . ADMIN_URL . '/pages/modify.php?page_id=' . PAGE_ID . '" target="_blank"></a>';
                        }
                        ?>	
                    </div><!-- end menubox -->
                </div><!-- end leftbox -->



                <div class="mainbox">
                    <div class="col-lg-12">
                        <div class="secao-titulo-nome">
                            <?php
                            /**
                            @author Zaka 01/03/2018
                            @description
                            	Retirei o htmlentities porque o Ivan mostrou que estava dando problema nos caracteres do menu do site do gabinete.
                            	Alteramos também a configuração do site para utf8 no painel de configuração do baker
                            	Agora teremos que reescrever os menus que ainda estavam com problema
                            */
                            if (DEFAULT_CHARSET == 'utf-8') {
                                if (mb_detect_encoding(PAGE_TITLE . 'x', 'UTF-8, ISO-8859-1') == 'UTF-8') {
                                    echo htmlentities(utf8_decode(PAGE_TITLE));
                                }
                            } else {
                                echo htmlentities(PAGE_TITLE);
                            }
?>
                        </div>
                    </div>
                    <div id="beginContent"></div>
                    <?php
                    //Block 3 Wird oft fuer Teaser, Videos oder anderes verwendet. Ist daher breit und ohne Abstand:
                    if ($contentblock[3] != '') {
                        ?>
                        <div class="widetop"><div class="contentinner"><?php echo $contentblock[3]; ?></div></div><!-- //widetop --> 
                    <?php } ?>

                    <div class="contentbox"><?php
                        page_content(1);
                        //Und jetzt die 2 Hauptbloecke
                        //Hier gilt: Wenn Block 2 leer ist, ist Block 1 breiter.
                        //Das legen wir einfach mit einer class fest:
                        if ($contentblock[2] == '') {
                            $mainblockclass = 'contentwide';
                        } else {
                            $mainblockclass = 'contentnarrow';
                        }
                        ?>
                        <div role="main" class="content <?php echo $mainblockclass; ?>"><div class="contentinner"><?php echo $contentblock[1]; ?></div></div><!-- //content -->

                        <?php
                        //und jetzt die sidebar
                        //diese wird nur ausgegeben, wenn sie Inhalt hat:
                        if ($contentblock[2] != '') {
                            ?>
                            <div role="complementary" class="sidebar"><div class="contentinner"><?php echo $contentblock[2]; ?></div></div><!-- //sidebar -->
                        <?php } ?>

                    </div><!-- //contentbox -->
                    <?php
                    //und danach Block 4, dieser ist meistens ganz unten und in ganzer Breite:
                    //Auch dieser wird nur ausgegeben, wenn er Inhalt hat:
                    //Zur Abwechslung geben wir ihn komplett mit echo aus:
                    if ($contentblock[4] != '') {
                        echo '<div class="widebottom"><div class="contentinner">' . $contentblock[4] . '</div></div><!-- //widebottom -->';
                    }

                    //Jetzt kommen wir zum Footer:
                    ?>
                    <div class="clearer"></div>
                    <div role="contentinfo" class="footer">
                        <!--<a id="gototopswitch" href="#" onclick="gototop();return false;"><img src="<?php echo TEMPLATE_DIR; ?>/img/up.png" alt="up" title="Go to top"></a>-->
                        <div class="contentinner">
                            <?php
                            page_footer();
                            //Du kannst das auch entfernen, wenn du den Link zB im Impressum angibst:
                            if (LEVEL > 0 AND $page_id % 5 == 0) {
                                
                            }
                            ?>
                        </div></div><!-- //footer -->	
                </div><!-- //mainbox -->

                <div class="clearer"></div>
                <div class="row panel-group" id="row-2-portal" role="tablist" aria-multiselecttable="true">
                    <?php
                    error_reporting(E_ALL ^ E_NOTICE);
                    ini_set("display_errors", "On");
                    switch ($_SERVER["SERVER_NAME"]) {
                        case "localhost":
                            #define('WB_URL', 'http://localhost');
                            define('WB_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/');
                            define('PATH_SEPARATOR', ':');
                            #define('WB_PATH', 'system/portal-uel');
                            break;
                        case "www.uel.br":
                            #define('WB_URL', 'http://localhost');
                            define('WB_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/');
                            define('PATH_SEPARATOR', ':');
                            #define('WB_PATH', 'system/portal-uel');
                            break;
                        default:
                            #define('WB_URL', 'http://portal.uel.br');
                            define('WB_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/');
                            define('PATH_SEPARATOR', ':');
                            #define('WB_PATH', '../home');
                            break;
                    }
                    $path = WB_ROOT . 'home/controller';
                    $path .= PATH_SEPARATOR . WB_ROOT . 'home/domain';
                    $path .= PATH_SEPARATOR . WB_ROOT . 'home/domain/business';
                    $path .= PATH_SEPARATOR . WB_ROOT . 'home/domain/entity';
                    $path .= PATH_SEPARATOR . WB_ROOT . 'home/domain/entity/dao';
                    $path .= PATH_SEPARATOR . WB_ROOT . 'home/domain/entity/vo';

                    set_include_path(get_include_path() . PATH_SEPARATOR . $path);

                    //function __autoload($class_name) {
                    //    $fileClass = $class_name . ".php";
                    //    require_once $fileClass;
                    //}

                    require_once('GerenciarNoticiaAC.php');
                    require_once('GerenciarAgenciaAC.php');
                    require_once('GerenciarDestaquesAC.php');
                    require_once('PadraoVO.php');
                    require_once('NoticiaVO.php');
                    require_once('DAO.php');
                    require_once('NoticiaDAO.php');
                    require_once('Noticia.php');

                    $objNoticia = new GerenciarAgenciaAC();

                    include_once(WB_ROOT . '/home/view/html/destaques.html');
                    ?>
                    <?php include_once('view/html/canais.html'); ?>
                </div>
            </div><!-- //mainwrapper -->
        </div>

        <?php
        //Ganz am Ende laden wir noch die Javascript Dateien fuer Module
        if (function_exists('register_frontend_modfiles_body')) {
            register_frontend_modfiles_body();
        }
        //und zum Ende noch das Javascript fuer cookie_permission und das Template.
        ?>
        <?php include_once('view/html/rodape.html'); ?>
        <script>
<!--var cookie_permission_url = "<?php echo TEMPLATE_DIR ?>/inc/cookie_permission.php?lang=<?php echo LANGUAGE ?>";-->
        </script>	
        <script type="text/javascript" src="<?php echo TEMPLATE_DIR; ?>/template.js?<?php echo $refreshstring; ?>"></script>

        <?php
        //Und das ist der Farbwaehler. Du kannst das loeschen, wenn du die Farben fixiert hast.
        if ($template_edit_link == true) {
            include 'colorset/colorpicker.inc.php';
        }
        ?>	
        &nbsp;<br>&nbsp;<br>
    </body>
</html>
<style>
	.cse .gsc-control-cse, .gsc-control-cse {
  padding: 0;
}	
</style> 