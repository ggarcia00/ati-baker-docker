<?php
include 'domain/entity/vo/PadraoVO.php';
class NoticiaVO extends PadraoVO {

    private $codRevista = 1;
    private $totalNoticiasPagina;
    private $imagem;
    private $link;
    
    public function getCodRevista() {
        return $this->codRevista;
    }

    public function setTotalNoticiasPagina($tipo) {
        switch ($tipo) {
            case utf8_decode('Noticia'):
                $this->totalNoticiasPagina = 5;
                break;
            case utf8_decode('Noticia com Foto'):
                $this->totalNoticiasPagina = 1;
                break;
            case utf8_decode('Video Portal'):
                $this->totalNoticiasPagina = 1;
                break;
            case utf8_decode('Institucional Portal'):
                $this->totalNoticiasPagina = 1;
                break;           
            case utf8_decode('Acontece na UEL'):
                $this->totalNoticiasPagina = 8;
                break;
            case 'Destaque':
                $this->totalNoticiasPagina = 6;
                break;
            case utf8_decode('Banner Portal'):
                $this->totalNoticiasPagina = 2;
                break;
            case utf8_decode('Evento Portal'):
                $this->totalNoticiasPagina = 3;
                break;
            case utf8_decode('Servicos Portal'):
                $this->totalNoticiasPagina = 1;
                break;
            default:
                $this->totalNoticiasPagina = 15;
                break;
        }
    }

    public function getTotalNoticiasPagina() {
        return $this->totalNoticiasPagina;
    }
    
    public function getLink() {
        if (!$this->getUrl()) {
            return "http://www.uel.br/com/agenciaueldenoticias/index.php?arq=ARQ_not&id=". $this->getNTexto();
        } else {
            return $this->getUrl();
        }
    }
    
    function getImagem($texto, $debug = false) {
        $posIni = strpos($texto, "<foto>") + 6;
        $posFim = strpos($texto, "</foto>");
        $nCaracteres = $posFim - $posIni;

        $this->imagem = substr($texto, $posIni, $nCaracteres);
        return $this->imagem;
    }

    /* Função que remove a string "(com foto)" do final do título de algumas notícias */

    function removeComFoto($titulo, $debug = false) {
        return str_replace("(com foto)", " ", $titulo);
    }
}
