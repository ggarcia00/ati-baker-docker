<?
$fw['arq']   =$arq;
$fw['arquivo']=$arquivo;
$fw['cod_arq']=$cod_arq;
$fw['nom_arq']=$nom_arq;
$fw['FWA_Arq']=$FWA_Arq;
    
$ip = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];

if($_SERVER["SERVER_NAME"]=="www.uel.br"){
    $dir_classes=$_SERVER["DOCUMENT_ROOT"]."\..";
}else{
    $dir_classes=$_SERVER["DOCUMENT_ROOT"]."\..\..";
}

require_once("/net/estrutura/functions/functions.php");
if (strstr($content, '/etc/')) {
    header('Location: http://www.uel.br/');
    exit();
}

$fw=FWA_Set_Conteudo($fw);

/*
header("Progma:no-cache");
header("Cache-Control:no-cache, mult-revalidate");
*/
$empresa="Universidade Estadual de Londrina";
?>
<head>
<title>  ::  <?=$sessao?>  ::   <?=$empresa?>  ::  </title>
<meta http-equiv="Content-Type"  content="<?=@$keywords?>uel">
<meta name="verify-v1" content="cAKBuwXsUGSaYr6V4vghgg7bKVqiazr3uyNWSOwl00Q=" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<?
if ((eregi("MSIE 8.0", $_SERVER["HTTP_USER_AGENT"])) or (eregi("MSIE 5.0", $_SERVER["HTTP_USER_AGENT"])) or (eregi("MSIE 5.5", $_SERVER["HTTP_USER_AGENT"])) or (eregi("MSIE 6.0", $_SERVER["HTTP_USER_AGENT"])) or (eregi("MSIE 7.0", $_SERVER["HTTP_USER_AGENT"]))) { #or(eregi("Mozilla/5.0",$_SERVER["HTTP_USER_AGENT"]))or(eregi("Netscape/7.0",$_SERVER["HTTP_USER_AGENT"]))or(eregi("Mozilla/4.0",$_SERVER["HTTP_USER_AGENT"]))
    //echo "<link rel=\"STYLESHEET\" href=\"/skin/portal_1/css/estilo-ie.css\">";
    $fwsIE = true;
} else {
    //echo "<link rel=\"STYLESHEET\" href=\"/skin/portal_1/css/estilo-mozilla.css\">";
    $fwsIE = false;
}
?>

<link rel="STYLESHEET" href="/skin/portal_1/css/estilo-geral.css">
<link rel="STYLESHEET" href="/skin/portal_1/css/menu-drop.css">
<link rel="STYLESHEET" href="/skin/portal_1/css/agencia.css">
<link rel="STYLESHEET" href="/skin/portal_1/css/formulario.css">

<script type="text/javascript" src="/skin/pro-reitorias/javascript/valida.js"></script>
<script type="text/javascript" src="/skin/portal_1/javascript/geral.js"></script>
<?
if(isset($ISSN) && ($ISSN!="")){
  echo "<meta scheme=\"ISSN\" name=\"identifier\" content=\"".$ISSN."\">";
}
?>
</head>
<?php flush()?>
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

        if (!isset($menu)or($menu!='0')){
            if(file_exists("menu/menu-esquerdo.php")){
                include("menu/menu-esquerdo.php");
            }
            if((@$FWS_['portal'])and(FWA_Retorna_Conteudo()=="principal.php")){

                if($ip=="10.90.10.115" or $ip=="10.90.10.88") {
                    include("menu/menu-direito_novo.php");
                } else {
                    include("menu/menu-direito.php");
                }
                echo "<div id=\"portal\">";
                FWA_Inserir_Conteudo($fw);
                echo "</div>";

            }else{
                if($titulo_1){
                    echo "
                    <div id=\"titulo1\">
                    ".$titulo_1."
                    </div>
                    ";
                    echo "<div id=\"conteudoCT\"><div id=\"conteudo2CT\">";
                    FWA_Inserir_Conteudo($fw);
                    echo "</div></div>";

                }else{
                    echo "<div id=\"conteudo\"><div id=\"conteudo2\">";
                    FWA_Inserir_Conteudo($fw);
                    echo "</div></div>";
                }
            }
        }else{
            if($titulo_1){
                echo "
                <div id=\"titulo1SM\">
                ".$titulo_1."
                </div>
                ";
                echo "<div id=\"conteudoCTSM\">";
                FWA_Inserir_Conteudo($fw);
                echo "</div></div>";

            }else{
                echo "<div id=\"conteudoSM\"><div id=\"conteudo2SM\">";
                FWA_Inserir_Conteudo($fw);
                echo "</div></div>";
            }
        }
        ?>
        <div id="rodape"></div>
    </div>
    <div id="rodapeUEL">
        <?include("rodape.php")?>
    </div>
    <!--
        <div id="google_translate_element" style="display:none"></div>
        <div id="translate_link">
        <a href="#" class="topnav"
        onclick="document.getElementById('google_translate_element').style.display='inline';document.getElementById('translate_link').style.display='none';return false;">
        TRANSLATE
        </a>
        </div>
        </div>

        <script type="text/javascript">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({
            pageLanguage: 'en',
            autoDisplay: false,
            gaTrack: true,
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
          }, 'google_translate_element');
        }
        </script><script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>
        <script type="text/javascript" src="/skin/portal_1/javascript/geral.js"></script>
    -->
    <?if (!isset($menu)or($menu!='0')){?>
        <SCRIPT LANGUAGE="JAVASCRIPT">
        <!--
        IEHover("Canais");
        IEHover("nivel-0");
        -->
        </SCRIPT>
    <?}?>
    <?//require_once("/net/estrutura/functions/usuarios_online.php");?>
</body>
</html>
