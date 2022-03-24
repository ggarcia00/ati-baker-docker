
<?php
/**
 * Description of PadraoVO
 *
 * @author zaka
 */
class PadraoVO {
    function __construct() {
        $this->setDatIncl(date('Y-m-d H:i:s'));
        $this->setResIncl($fwaUser["chapa"]);            
        $this->setDatAlter(date('Y-m-d H:i:s'));
        $this->setResAlter($fwaUser["chapa"]);        
    }
    
    public function __call($metodo, $parametros)
    {
        // Selecionando os 3 primeiros caracteres do método chamado
        $prefixo  = substr($metodo, 0, 3);
        // Definido nome de variavel, padrão primeira palavra inicia com letra minuscula
        $preVar = strtolower(substr($metodo, 3,1));
        $variavel = substr($metodo, 4);
        $variavel = $preVar.$variavel;

        // se for set*, "seta" um valor para a propriedade
        if( $prefixo == 'set' ) {
            $this->$variavel = $parametros[0];
            //echo $variavel."<br>";
        }
        // se for get*, retorna o valor da propriedade
        elseif( $prefixo  == 'get' ) {
//            echo "variável:".$variavel." - ";
//            echo $this->$variavel."<br>";
            return $this->$variavel;
        }
        // Retorna exception dizendo que não existe o método chamada
        else {
            throw new Exception('O método ' . $metodo . ' não existe!');
        }
    }
    public function setAll($rows,$isForm=false,$debug=false){
        /*
         * Primeiro percorrer o array $rows a procura de seus indices
         * Depois localizado seu indices, formar o metodos set
         * Depois de formar os métodos é necessário executalos
         * E a forma de se fazer isso é executando os seguinte comando
         *$this->$metodo($fws_);
         * onde: $this     reflete ao objeto atual, $metodo
         *       $metodos  reflete ao método contruido a partir do indice do array
         *       $fws_     reflete ao valor a ser setador pelo método
         */
        foreach ($rows as $campo=>$value) {
            
            $atributo = "";
            $setMetodo = "";
            $getMetodo = "";  
            //removi no dia 16/12/2011 porque naõ estava salvando, os campos ja 
            //vem do formulario com as letras maisculas definidas corretamente
            //$campo = strtolower($campo);
//            echo "set->".$campo." - ".$value."<br>";
                
            //echo "set->".$campo."-".."<br>";
            $arrayVar1 = explode('_',$campo);
            if(is_string($campo)){

                /**
                 * Quando setAll for chamado para setar atributos vindos de um formulário
                 * subentende-se que os campos ja estão no formato padrão de nomes de atributos,
                 * necessitando apenas deixar o nome do campo com sua primeira letra em maiuscula
                 * e concatendo a este o prefixo set para executar o metodo setNomeCampo($fws_['nomeCampo']).
                 */
                if($isForm)
                {
                    $setMetodo = "set".ucwords($campo);
                }
                else
                {                
                    
                    foreach ($arrayVar1 as $key => $value1)
                    {
                        //17/12/2011
                        //Esta linha foi acrescentada em virtude no nome do campo
                        //retornado pelo Oracle esta em maiuscula
                        $value1 = strtolower($value1);
                        //Definindo padrão de variaveis
                        if($key!=0){
                            $atributo = $atributo.ucwords($value1);
                        }else{
                            $atributo = $value1;
                        }
                        //Definindo padrão para metodos sets
                        if($key!=0){
                            $setMetodo = $setMetodo.ucwords($value1);
                        }else{
                            $setMetodo = "set".ucwords($value1);
                        }            
                    }
                }
                if($campo=="_submit_check"){
                    break;
                } 
                $this->$setMetodo(stripslashes($value));
                echo ($debug)? $setMetodo." - ".$value."<br>" : "";
            }
        }
        echo ($debug)? "<hr>" : "";

    }    

    /*
     * Utilizado em DAOs antes de gerar o Sql de insert ou update automáticamente
     * Para criar uma array a partir dos campos de uma tabela
     * Fornece um array contendo os campos da tabela
     * Esse array é utilizado em DAO's em funções de Insert e Update para gerar SQL's automaticos
     * @access public
     * @param array[] $arrayCampo Array com campos de uma tabela de BD.
     * @return array $fws_['nomeDoCampoDaTabela']
    */    
    public function getAllForArray($arrayCampo,$debug=false){
        
        foreach($arrayCampo as $campo) {
            echo ($debug)? "get->".$campo."<br>" : "";
            
            $atributo = "";
            $setMetodo = "";
            $getMetodo = "";  
            
            $arrayVar1 = split('_',$campo);
            if(is_string($campo)){

                foreach ($arrayVar1 as $key => $value1)
                {
                    //Definindo padrão de variaveis
                    if($key!=0){
                        $atributo = $atributo.ucwords($value1);
                    }else{
                        $atributo = $value1;
                    }
                    //Definindo padrão para metodos sets
                    if($key!=0){
                        $getMetodo = $getMetodo.ucwords($value1);
                    }else{
                        $getMetodo = "get".ucwords($value1);
                    }            
                }
                $fws_[$campo] = $this->$getMetodo();
            }
        }
        echo ($debug)? "<hr>" : "";
        return $fws_;
    }    
}
?>