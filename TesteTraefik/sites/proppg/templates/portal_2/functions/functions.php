<?
#**************************************************************************************************
#require_once("../../scripts/classes/functions/conexao_banco/FWA_Conexao.php");

require_once("conexao_banco/FWA_Conexao.php");
#require_once("../skin/".SKIN."/functions/functions.php");
#**************************************************************************************************

Function FWA_Retorna_Conteudo(){
  global $arq, $arquivo, $cod_arq, $nom_arq;
  global $FWA_Arq, $FWA_MENU_COD_ARQ, $FWA_MENU_NOM_ARQ;
  #global $content;

          
  @$content = $_GET['content'];
  If(@$content==""){
    @$content = $_POST['content'];
    /*
    If(@$content==""){
      @$content="default.php";
    }
    */
  }
  
   if (isset($_GET['pagina'])){
      $content = $_GET['pagina'];
  }
  if($content==""){
    $content = "principal.php";
  }

  return $content;
}

function FWA_Set_Conteudo(){

  #echo "Seta o arquivo que deve aparecer na pagina e se for o caso de uma URL redireciona para a mesma.";

  global $arq, $arquivo, $cod_arq, $nom_arq;
  global $FWA_Arq, $FWA_MENU_COD_ARQ, $FWA_MENU_NOM_ARQ;
  #global $content;

  #$conteudo = "principal.php";
          
  @$content = $_GET['content'];
  If(@$content==""){
    @$content = $_POST['content'];
    /*
    If(@$content==""){
      @$content="default.php";
    }
    */
  }
  
   if (isset($_GET['pagina'])){
      $content = $_GET['pagina'];
  }


//echo strpos($content, "/etc/");
	if(strpos($content, "/etc/")){
			$content = "URL ".$content." não autorizada.<br>";
			//echo "<p>".$content." não foi encontrado.<p>Provavelmente você está tentando acessar um link quebrado.<p>Use o menu ao lado para encontrar a informação de seu interesse, ou entre em contato conosco utilizando o email no rodape desta página.\n";
		
	}



  If (empty($FWA_Arq)){
    For($i=0;$i<count($cod_arq);++$i){
      If (empty($FWS_Pag_Conteudo_Padrao)){           // Se não houver conteudo setado como padrão coloque o primeiro arquivo do array como padrão
        $FWS_Pag_Conteudo_Padrao = $nom_arq[0];
        $FWS_Cod_Conteudo_Padrao = $cod_arq[0];
      }
      If ((isset($arq))and($cod_arq[$i]==$arq)){      // Encontra o arquivo escolhido como conteudo desejado
        $FWS_Pag_Conteudo        = $nom_arq[$i];
        $FWS_Cod_Conteudo        = $cod_arq[$i];
      }
      If (substr($cod_arq[$i],3,3)=="_P_"){           // Encontra o arquivo setado como conteudo padrao
        $FWS_Pag_Conteudo_Padrao = $nom_arq[$i];
        $FWS_Cod_Conteudo_Padrao = $cod_arq[$i];
      }
    }
    If  (isset($FWS_Pag_Conteudo)) {                  // Se o conteudo nao for encontrado
      $arquivo = $FWS_Pag_Conteudo;                   // Abra o conteudo padrao
      $arq     = $FWS_Cod_Conteudo;                   // Define que o link que devera acender no menu, ou seja, o da pagina padrao
    }Else{
      $arquivo = $FWS_Pag_Conteudo_Padrao;            // Abra o conteudo padrao
      $arq     = $FWS_Cod_Conteudo_Padrao;            // Define que o link que devera acender no menu, ou seja, o da pagina padrao
    }
  }Else{
    For($i=0;$i<count($FWA_MENU_COD_ARQ);++$i){
      If ($FWA_MENU_COD_ARQ[$i]==$FWA_Arq){           // Encontra o arquivo referente ao conteudo de sistema desejado
        $FWA_PAG_Conteudo = $FWA_MENU_NOM_ARQ[$i];
      }
      //(substr($FWA_MENU_COD_ARQ[$i],4,5)=="P")
      //($FWA_MENU_COD_ARQ[$i]=="ARQ_P")
      If ($FWA_MENU_COD_ARQ[$i]=="ARQ_P"){            // Encontra o arquivo referente ao conteudo de sistema padrao
        $FWA_PAG_Padrao   = $FWA_MENU_NOM_ARQ[$i];
      }
    }

    If  (isset($FWA_PAG_Conteudo)) {                  // Se o conteudo nao for encontrado
      $arquivo = $FWA_PAG_Conteudo;
    }Else{
      $arquivo = $FWA_PAG_Padrao;                     // Abra o conteudo padrao
      $FWA_Arq     = "ARQ_P";                         // Define que o link que devera acender no menu, ou seja, o da pagina padrao
    }
  }

//-------------------------------------------------------------------------------------------------
  If  (((substr($arq,0,4)=="URL_")or(substr($FWA_Arq,0,4)=="URL_")) && (isset($arquivo))){     // Se o conteudo se refere a uma pagina externa a este sistema
    header("Location: $arquivo");                   // Redireciona o mesmo
  }

//-------------------------------------------------------------------------------------------------
/*
 #Não funcionou por causa dos bloqueiadores de POP UPS - 2005-02-10
 #Para resolver este problema inserimos na criação do menu um item para incluir um target=_blank

  If  (((substr($arq,0,4)=="TAR_")or(substr($FWA_Arq,0,4)=="TAR_")) && (isset($arquivo))){     // Se o conteudo se refere a uma pagina externa a este sistema
    echo "
      <script Language=\"JavaScript\">
      <!--
              window.open('".$arquivo."')
      // -->
      </script>
      ";
  }
*/
//-------------------------------------------------------------------------------------------------

  If (isset($content)){                                              // Para inserir um arquivo que estando ele definido no menu ou não

    If  (((substr($content,0,18)=="http://www.uel.br/")or(substr($FWA_Arq,0,4)=="URL_")) && (isset($arquivo))){     // Se o conteudo se refere a uma pagina externa a este sistema
      $arquivo = $content;                                             // Seta a variavel arquivo com o nome do arquivo a ser inserido,
      header("Location: $arquivo");                                    // Redireciona o mesmo
    }

    $arq = "ARQ_P_Content";                                          // Define um valor para variavel arq no caso do arquivo não estar definido no menu
    For($i=0;$i<count($cod_arq);++$i){                               // Localizar se o arquivo a ser inserido esta definido no menu
      If (($content==$nom_arq[$i])and("subitem"!=$cod_arq[$i])){       // Se estiver definido
        $arq = $cod_arq[$i];                                         // A variavel arq recebera o codigo que esta definido no menu.
      }
    }
    $arquivo = $content;                                             // Seta a variavel arquivo com o nome do arquivo a ser inserido,
  }

  #echo $arquivo." - ".$arq." - ".$content." <--";                                        // Esta linha é muito util para testes

//-------------------------------------------------------------------------------------------------
}

Function FWA_Inserir_Conteudo(){

//Insere o conteudo na pagina de acordo com o arquivo setado na funcao SET_CONTEUDO.

  global $arquivo, $arq, $FWA_Arq, $text, $FWS_CF_Dir_Conteudo, $FWA_GL_ERRO_001;
//-------------------------------------------------------------------------------------------------

  If (empty($arquivo) or ($arquivo=="")){           // Verifica se foi definido um conteudo a ser inserido
    echo $FWA_GL_ERRO_001."\n";
  }Else{

    //---------------------------------------------------------------------------------------------
    If ((substr($arq,0,4)=="ARQ_")or(substr($FWA_Arq,0,4)=="ARQ_")){           // Inclui um conteudo atravez de duas funcoes: 'fopen()' = jaga o arquivo na variavel $text; 'fpassthru()' = imprime o conteudo da variavel $text;
      //If (!$text=fopen($FWS_CF_Dir_Conteudo.$arquivo,"r")){
      If (FILE_EXISTS($FWS_CF_Dir_Conteudo.$arquivo)!=1){
        echo $FWA_GL_ERRO_001."<p>O arquivo ".$arquivo." não foi encontrado.<p>Provavelmente você está tentando acessar um link quebrado.<p>Use o menu ao lado para encontrar a informação de seu interesse, ou entre em contato conosco utilizando o email no rodape desta página.\n";
      }Else{
        //fpassthru($text);
        include($FWS_CF_Dir_Conteudo.$arquivo);
      }
    }

    //---------------------------------------------------------------------------------------------
    If ((substr($arq,0,4)=="FRM_")or(substr($FWA_Arq,0,4)=="FRM_")){           // Inclui um conteudo atravez de uma tag '<iframe>'
      echo "<iframe src=\"".$arquivo."\" width=\"100%\" height=\"400\"></iframe>";
    }

    //---------------------------------------------------------------------------------------------
    If ((substr($arq,0,4)=="INC_")or(substr($FWA_Arq,0,4)=="INC_")){           // Inclui um conteudo atravez de um a funcao 'include()'
      include ($arquivo);
    }

    //---------------------------------------------------------------------------------------------
    If ((substr($arq,0,4)=="IMG_")or(substr($FWA_Arq,0,4)=="IMG_")){           // Inclui um conteudo atravez de um a funcao 'include()'
      If (FILE_EXISTS($FWS_CF_Dir_Conteudo.$arquivo)!=1){
        echo $FWA_GL_ERRO_001."<p>O arquivo ".$arquivo." não foi encontrado.<p>Provavelmente você está tentando acessar um link quebrado.<p>Use o menu ao lado para encontrar a informação de seu interesse, ou entre em contato conosco utilizando o email no rodape desta página.\n";
      }Else{
        echo "<img src=\"$arquivo\" border=\"0\">";
      }
    }

    //---------------------------------------------------------------------------------------------
  }
//-------------------------------------------------------------------------------------------------

}
