
        &copy; 2007 Universidade Estadual de Londrina<br>
        <?if(@$creditos){ echo $creditos."<br>"; }?>
        Rodovia Celso Garcia Cid | Pr 445 Km 380 | Campus Universit&aacute;rio<br>
        Cx. Postal 6001 | CEP 86051-990 | Londrina - PR<br>

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


        Fone: (43) <?=$var_fone?> | Fax: (43)<?=$var_fax?><br>


        <?if(SERVER_EMAIL){?>
             e-mail: <a id="rodapetxt" href="mailto:<?=SERVER_EMAIL?>?subject=[PORTAL]"><?=SERVER_EMAIL?></a>
        <?}else{?>
             e-mail: <a id="rodapetxt" href="mailto:webmaster@uel.br?subject=[PORTAL]">webmaster@uel.br</a>
        <?}?>

        <?if(CONTADOR_VISITAS){?>
             <br>Número de visitas: <img src='http://www.uel.br/skin/img/Count.php?ft=0|dd=E|df=<?=CONTADOR_VISITAS?>&text_color=white'>
        <?}