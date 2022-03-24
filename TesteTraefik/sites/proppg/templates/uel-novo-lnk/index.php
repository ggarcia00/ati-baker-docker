<html>
    <head>
        <title><?php page_title(); ?></title>
        <?
        if(eregi("MSIE",$_SERVER["HTTP_USER_AGENT"])){
                #echo $_SERVER["HTTP_USER_AGENT"]." - sim";
                echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\">";
                echo "<link rel=\"STYLESHEET\" href=\"".TEMPLATE_DIR."/css/estilo.css\">";
        }else{
                #echo $_SERVER["HTTP_USER_AGENT"]." - não";
                echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\">";
                echo "<link rel=\"STYLESHEET\" href=\"".TEMPLATE_DIR."/css/estilo-mozilla.css\">";
        }
        ?>
        
        
				<!--link rel="stylesheet" type="text/css" href="<?=TEMPLATE_DIR?>/css/print.css" media="print" /-->

        <script type="text/javascript" src="<?=TEMPLATE_DIR?>/javascript/valida.js"></script>

        <?
        if(isset($ISSN) && ($ISSN!="")){
          echo "<meta scheme=\"ISSN\" name=\"identifier\" content=\"".$ISSN."\">";
        }
        ?>

    </head>


    <!--body onload="alinhamento();IEHoverPseudo();" onresize="alinhamento()"-->
    <?if (!isset($menu)or($menu!='0')){?>
    <body onload="IEHoverPseudo();">
    <?}else{?>
    <body>
    <?}?>
         <div id="barra">
         <?include("barra.php")?>
         </div>
         <div id="alinha">
                <div id="aba">
                <?include("aba.php")?>
                </div>
                <div id="conteudo-portal">
                        <div id="borda-sup-esq"></div>
                        <div id="borda-sup-dir"></div>


                    <?
                    /*
                    Obs:
                     SM -> Sem menu esquerdo
                     CT -> Com titulo_1
                    */


                    if (!isset($menu)or($menu!='0')){
                        ?>
                        <div id="menu-esquerdo">
                            <div id="menu-titulo">
                                <div id="menu-titulo-esq"></div>
                                <div id="menu-titulo-centro"><div id="menu-conteudo-titulo">::. MENU</div></div>
                                <div id="menu-titulo-dir"></div>
                            </div>
                            <?php page_menu_uel(); ?>
                        </div>

                        <?
                        if((@$FWS_['portal'])and(FWA_Retorna_Conteudo()=="principal.php")){

                                include("menu/menu-direito.php");
                                echo "<div id=\"portal\">";
                                page_content();
                                echo "</div>";
                        }else{
                            if(WEBSITE_TITLE){
                                echo "
                                <div id=\"titulo1\">
                                ".WEBSITE_TITLE."
                                </div>
                                ";
                                echo "<div id=\"conteudoCT\"><div id=\"conteudo2CT\">";
                                page_content();
                                echo "</div></div>";

                            }else{
                                echo "<div id=\"conteudo\"><div id=\"conteudo2\">";
                                page_content();
                                echo "</div></div>";
                            }
                        }
                    }else{
                        if(WEBSITE_TITLE){
                            echo "
                                <div id=\"titulo1SM\">
                                ".WEBSITE_TITLE."
                                </div>
                                ";
                                echo "<div id=\"conteudoCTSM\">";
                                page_content();
                                echo "</div></div>";

                        }else{
                                echo "<div id=\"conteudoSM\"><div id=\"conteudo2SM\">";
                                page_content();
                                echo "</div></div>";
                        }
                    }
                    ?>
                </div>
         </div>
         <div id="rodape">
         <?include("rodape.php")?>
         <?require_once("/net/estrutura/functions/usuarios_online.php");?>
         </div>
    </body>
</html>
