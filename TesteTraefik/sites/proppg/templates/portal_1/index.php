<?
require_once("/net/estrutura/functions/liberarRecursos/liberarRecursos.php");
$liberarPortalTransparencia = liberarRecursos::liberarPortalTransparencia();
if(SERVER_LOGO==1){
	$logo_site = "<img src='".WB_URL."/pages/arquivos/logo/logo.gif' width='22px'>&nbsp;&nbsp;";
}else{
	$logo_site = "";
}
?>
<html>
    <head>
        <title><?php page_title(); ?></title>
        <link rel="STYLESHEET" href="<?= TEMPLATE_DIR ?>/css/estilo-geral.css">
        <link rel="STYLESHEET" href="<?= TEMPLATE_DIR ?>/css/menu-drop.css">
        <link rel="STYLESHEET" href="<?= TEMPLATE_DIR ?>/css/agencia.css">
        <link rel="STYLESHEET" href="<?= TEMPLATE_DIR ?>/css/formulario.css">        
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

        <meta http-equiv="Content-Type"  content="<?= @$keywords ?>uel">
        <meta name="verify-v1" content="cAKBuwXsUGSaYr6V4vghgg7bKVqiazr3uyNWSOwl00Q=" />

        <meta name="google-site-verification" content="jzwHTlsRC51d5RjB2XoS_s_fDimtcOgNlg9YvPEicx0" />
        <script type="text/javascript">
            var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
            document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
            this.focus();
        </script> 

        <?
        if (eregi("MSIE", $_SERVER["HTTP_USER_AGENT"])) {
            #echo $_SERVER["HTTP_USER_AGENT"]." - sim";
            //echo "<link rel=\"STYLESHEET\" href=\"".TEMPLATE_DIR."/css/estilo.css\">";
        } else {
            #echo $_SERVER["HTTP_USER_AGENT"]." - não";
            //echo "<link rel=\"STYLESHEET\" href=\"".TEMPLATE_DIR."/css/estilo-mozilla.css\">";
        }
        ?>

                        <!--link rel="stylesheet" type="text/css" href="<?= TEMPLATE_DIR ?>/css/print.css" media="print" /-->
        <script type="text/javascript" src="<?= TEMPLATE_DIR ?>/javascript/valida.js"></script>
        <?
        if (isset($ISSN) && ($ISSN != "")) {
            echo "<meta scheme=\"ISSN\" name=\"identifier\" content=\"" . $ISSN . "\">";
        }
        ?>
    </head>

    <!--body onload="alinhamento();IEHoverPseudo();" onresize="alinhamento()"-->
    <? if (!isset($menu) or ($menu != '0')) { ?>
        <body onload="window.focus();
                    IEHoverPseudo();">
              <? } else { ?>
        <body onload="window.focus();">
        <? } ?>
        <div id="barra">
            <? include("barra.php") ?>
        </div>
        <?
        /*
         * O padrão é 758 
         * transparencia 996 - 758 = 238px menos multilingual fica 158px
         * multilingua 838 - 758 = 80px
         */
        $width = 758;
        if($liberarPortalTransparencia == 1){
            $width = $width + 158;
        }
        if (MULTILINGUAL == true) { 
            $width = $width + 80;
        }
        ?>
    <div id="alinha" style="width: <?=$width?>px;">
            <div id="aba">
                <?
//include("aba.php") 
                include("/net/estrutura/skin/portal_1_padrao/aba.php");
                ?>
            </div>
        </div>
        <div id="tudo"><!--removeu conteudo_portal-->
            <div id="borda-sup-esq"></div>
            <div id="borda-sup-dir"></div>
            <div id="topo"></div>

            <?
            /*
              Obs:
              SM -> Sem menu esquerdo
              CT -> Com titulo_1
             */


            if (!isset($menu) or ($menu != '0')) {
                ?>
                <div id="menu-esquerdo">
                    <div id="menu-titulo">
                        <div id="menu-titulo-esq"></div>
                        <div id="menu-titulo-centro"><div id="menu-conteudo-titulo">::. MENU</div></div>
                        <div id="menu-titulo-dir"></div>
                    </div>
                    <?php
                    if (MULTILINGUAL == "true") {
                        page_menu_uel(1, 1);
                    }else if (MULTISITE == "true") {
                        page_menu_uel(1, 1);
                    } else {
                        page_menu_uel();
                    }
                    //page_menu_uel();
                    ?>
                </div>

                <?
                if ((@$FWS_['portal']) and (FWA_Retorna_Conteudo() == "principal.php")) {

                    include("menu/menu-direito.php");
                    echo "<div id=\"portal\">";
                    page_content();
                    echo "</div>";
                } else {
                    if (WEBSITE_TITLE) {
                        echo "
                                <div id=\"titulo1\">
                                " . $logo_site . "
                                " . WEBSITE_TITLE . "
                                </div>
                                ";
                        echo "<div id=\"conteudoCT\"><div id=\"conteudo2CT\">";
                        page_content();
                        echo "</div></div>";
                    } else {
                        echo "<div id=\"conteudo\"><div id=\"conteudo2\">";
                        page_content();
                        echo "</div></div>";
                    }
                }
            } else {
                if (WEBSITE_TITLE) {
                    echo "
                                <div id=\"titulo1SM\">
                                " . $logo_site . "
                                " . WEBSITE_TITLE . "
                                </div>
                                ";
                    echo "<div id=\"conteudoCTSM\"><div id=\"conteudo2CT\">";
                    page_content();
                    echo "</div></div>";
                } else {
                    echo "<div id=\"conteudoSM\"><div id=\"conteudo2SM\">";
                    page_content();
                    echo "</div></div>";
                }
            }
            ?>
            <div id="rodape">
                <?php
                //if($liberarPortalTransparencia==1) {
                include("canal.php");
                //}
                ?>	
            </div>
        </div>
        <div id="rodapeUEL">
            <? include("rodape.php") ?>
        </div>

        <!--/div></div><div id="rodape"-->
        <? //include("rodape.php") ?>
        <? //require_once("/net/estrutura/functions/usuarios_online.php");?>
        <!--/div-->
        <?require_once("/net/estrutura/functions/google/analyticstracking.php");?>
    </body>
</html>