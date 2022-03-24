<? 
			$FWS_Num_Edital = $_GET['FWS_Num_Edital'];
        $arrayEdital = explode('/', $FWS_Num_Edital);
        $numEdital = $arrayEdital['0'];
        $anoEdital = $arrayEdital['1'];
        ?>
        <html>
        <head>
           <meta name="Author" content="Zaqueu">
           <title>Pró-Reitoria de Pós-Graduação - Edital <?=$FWS_Num_Edital?></title>
        <link rel='stylesheet' type='text/css' href='http://www.uel.br/css/uel.css'>
        </head>
        <body Onload="this.focus();">

        <div class=topico>Pró-Reitoria de Pós-Graduação - Edital - <?=$FWS_Num_Edital?></div>
        <hr size=1 width=100%>
        <p><p>
        <div class=topico>
        <center>
        <!--
        <b><a href="Edital-<?=ereg_replace("/","-",$FWS_Num_Edital)?>.doc" class=link>Clique aqui para visualizar Edital n.&nbsp;<?=$FWS_Num_Edital?> - Microsoft Word</a></b>
        <p>
        
        <b><a href="Edital-<?=ereg_replace("/","-",$FWS_Num_Edital)?>.pdf" class=link>Clique aqui para visualizar Edital n.&nbsp;<?=$FWS_Num_Edital?> - Adobe Acrobat Reader</a></b>
        -->
        <b><a href="<?=$anoEdital?>/Edital-<?=$numEdital?>-<?=$anoEdital?>.pdf" class=link>Clique aqui para visualizar Edital n.&nbsp;<?=$FWS_Num_Edital?> - Adobe Acrobat Reader</a></b>
        </center>
        </div>

        <br>

        <p class="td_princ"><font face="Verdana">Para visualizar o arquivo disponibilizado na versão em Adobe Acrobat Reader, &eacute; necess&aacute;rio instalar o programa Adobe Acrobat Reader.
        Caso o mesmo n&atilde;o esteja instalado em seu computador, clique <a href="http://www.adobe.com.br/products/acrobat/readstep.html">aqui</a>
        para fazer o download do programa.</font>
        <p>
        <center>
        <a href="http://www.adobe.com.br/products/acrobat/readstep.html" target="_blanck"><img SRC="http://www.uel.br/img/logotipos/getacro.gif" BORDER=0 height=31 width=88></a></center>
        <p>
        </body>
        </html>