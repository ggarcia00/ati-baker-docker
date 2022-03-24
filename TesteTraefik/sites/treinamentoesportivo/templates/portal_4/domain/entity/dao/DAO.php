<?php
require_once(dirname(__FILE__)."/../../../lib/config/ConexaoDB.php");
require_once(dirname(__FILE__)."/../../../lib/config/enviarErro.class.php");

class OKException extends Exception {};
class AvisoException extends Exception {};

class DAO{
    private $message;
    public $conex = null;
    public function getConexao(){
        return $this->conex;
    }
    public function  __construct($userDb=false) {
        if($userDb=='web'){
            //echo __LINE__." - ".__FILE__."<br>";
//            $this->cone = fwaDBConnect();
//            $this->conex=$conn;
        }else{
            ConexaoDB::getInstance();
            $this->conex=ConexaoDB::getConexaoDB();
//            if($_SERVER["REMOTE_ADDR"]=='189.90.70.51' or $_SERVER["REMOTE_ADDR"]=='189.90.70.56'){
//                echo "Teste instancia conexao->".print_r($this->conex)."<-<hr>";
//            }            
        }
    }
    // constructor
    public function getMessage() {
        return $this->message;
    }
    public function setMessage($message) {
        $this->message = $message;
    }
    public function enviarMensagem($msgErro,$sql=false)
    {
        $avisodeTela = $msgErro->msg;

        $msgErro="\nUsu�rio Logado:
            Chapa Logado: ".$_SESSION['fwaUser']['chapa']."
            Nome Logado: ".$_SESSION['fwaUser']['Name']."
            Browser: ".getHttpUserAgent()."
            IP:".getIp()."\n
            SQL:".$sql."\n
            Mensagem de Log:\n ".$msgErro."\n";
        $msgSubject="[Insc][".$_SERVER["SERVER_NAME"]."]".get_class($this);

        switch ($_SERVER["REMOTE_ADDR"]) {
            case "189.90.70.57":
                $msgTo="sandrarq@uel.br";
                break;
            case "189.90.70.51":
                $msgTo="altafin@uel.br";
                break;
            default:
                $msgTo="zaka@uel.br";
                break;
        }
        $txtLog = $msgSubject."\nAviso de Tela:".$avisodeTela.$msgErro."\n";
        executarLog($txtLog,"DAO",true);      
        //echo $txtLog;  
        enviarErro::enviarErro($msgTo,$msgSubject,$msgErro);
        echo "<br>Ocorreu um problema durante a execu��o da aplica��o<br>";
        $this->conex->RollbackTrans();
        throw new Exception("N�o foi poss�vel executar o comando desejado: ADODB_Exception.".addslashes($avisodeTela));
    }
}
?>
