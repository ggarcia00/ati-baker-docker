
        &copy; Universidade Estadual de Londrina<br/>
        
        <?if(@$creditos){ echo $creditos."<br/>"; }?>
        
        <?php  if((SERVER_PRE_TITULO!="SERVER_PRE_TITULO")and(SERVER_PRE_TITULO!="")) {
            echo(SERVER_PRE_TITULO."<br/>");
        }?>
        
        <?php if(SERVER_LOCALIZACAO=='HU') {?>
            Av. Robert Koch, 60 | Vila Operária<br/>
            CEP 86038-350 | Londrina - PR<br/>
        <?php } elseif(SERVER_LOCALIZACAO=='EAAJ') {?>
            Rua Brasil, 742<br/>
            CEP 86010-200 | Londrina - PR<br/>
        <?php } else {?>
            Rodovia Celso Garcia Cid | Pr 445 Km 380 | Campus Universit&aacute;rio<br/>
            Cx. Postal  10011 | CEP 86057-970 | Londrina - PR<br/>
        <?php }?>
        <?
				/*
				A condição abaixo foi estabelecida dessa forma pois éra preciso preservar 
				$var_fone caso esta variável ja estivesse sido definida em algum lugar do programa
				*/
        if((SERVER_FONE)and(!$var_fone)){
            $var_fone = SERVER_FONE;
        }
        if((!$var_fone)or($var_fone=='SERVER_FONE')){
            $var_fone = "3371-4000";
        }

        if((SERVER_FAX)and(!$var_fax)){
            $var_fax = SERVER_FAX;
        }
        if((!$var_fax)or($var_fax=='SERVER_FAX')){
            $var_fax = "3328-4440";
        } 
        ?>

        <!--
        Para não exibir o número do fax deve gravar um espaço em branco na variável server_fax
        -->
        Fone: (43) <?=$var_fone?> 
        <?php if(SERVER_FAX!=' ') {?>
        | Fax: (43) <?=$var_fax?>
        <?php }?><br/>

        <?if(SERVER_EMAIL){?>
             e-mail: <a id="rodapetxt" href="mailto:<?=SERVER_EMAIL?>?subject=[PORTAL]"><?=SERVER_EMAIL?></a>
        <?}else{?>
             e-mail: <a id="rodapetxt" href="mailto:webmaster@uel.br?subject=[PORTAL]">webmaster@uel.br</a>
        <?}?>
        <?if((CONTADOR_VISITAS!="CONTADOR_VISITAS")and(CONTADOR_VISITAS!="")){
        	//APP_NAME
        	?>
             <br>Número de visitas: <img src='http://www.uel.br/skin/img/Count.php?ft=0|dd=E|df=<?=CONTADOR_VISITAS?>&text_color=white'>
        <?}?>
        <?
/*        
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
*/
?>