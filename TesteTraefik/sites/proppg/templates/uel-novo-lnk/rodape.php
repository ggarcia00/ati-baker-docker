
        &copy; 2007 Universidade Estadual de Londrina<br>
        <?if(@$creditos){ echo $creditos."<br>"; }?>
        Rodovia Celso Garcia Cid | Pr 445 Km 380 | Campus Universit&aacute;rio<br>
        Cx. Postal 10.011 | CEP 86.057-970 | Londrina - PR<br>

        <?
        if(!$var_fone){
            $var_fone = "3371-4000";
        }
        if(!$var_fax){
            $var_fax = "3328-4440";
        }
        ?>


        Fone: (43) <?=$var_fone?> | Fax: (43)<?=$var_fax?><br>


        <?if(SERVER_EMAIL){?>
             e-mail: <a id="rodapetxt" href="mailto:<?=SERVER_EMAIL?>?subject=[PORTAL]"><?=SERVER_EMAIL?></a>
        <?}else{?>
             e-mail: <a id="rodapetxt" href="mailto:webmaster@uel.br?subject=[PORTAL]">webmaster@uel.br</a>
        <?}?>

