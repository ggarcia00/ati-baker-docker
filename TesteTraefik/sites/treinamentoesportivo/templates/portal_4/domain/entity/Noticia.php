<?php
include 'domain/entity/vo/NoticiaVO.php';
include 'domain/entity/dao/NoticiaDAO.php';
class Noticia extends NoticiaVO {

    protected $objDAO;

    function __construct() {
        $this->objDAO = new NoticiaDAO();
    }

    public function getNoticiaById($debug = false) {
       echo ($debug) ? __FILE__ . "-" . __LINE__ . ":" . $this->getNTexto() . "<-<br>" : "";
        if ((($this->getNTexto()) != '-1') and ( $this->getNTexto() != '')) {
            $this->objDAO->getById($this, $debug);
        } else {
            $this->novo();
        }
    }

    public function getNumeroDeNoticias($debug = false) {
        $this->setNNoticias($this->objDAO->getNumeroDeNoticiasPorRevista($this, $debug));
        return $this->getNNoticias();
    }

    public function noticiaExiste() {
        if (!$this->getNTexto()) {
            throw new Exception('Número da notícia é inválido ou não informado.');
        }
        if (!$this->objDAO->getByIdExiste($this)) {
            throw new Exception("Nenhuma noticia foi encontrada para o código informado: " . $this->getNTexto() . ".");
        }
    }

    public function getListaNoticias($debug = false) {
        $this->objDAO->getAll($this, $debug);
        return $this->listaNoticias;
    }
    
    public function getListaNoticiasPorTipo($tipo, $debug = false) {
        $this->objDAO->getPorTipo($this, $tipo, $debug);
        return $this->listaNoticias;
    }
    
    public function getListaNoticiasPorFiltro($fwsCondicao, $debug = false) {
        $this->objDAO->getNoticiasPorFiltro($this, $fwsCondicao, $debug);
        return $this->listaNoticias;
    }
    
    public function getListaCategoria($debug = false) {
        $obj = new Categoria();
        $obj->carregarListaCategorias($debug);
        return $obj->getListaCategorias();
    }
    
    public function getListaNoticiasPorRevista($debug = false) {
        $this->objDAO->getPorRevista($this, $debug);
        return $this->listaNoticias;
    }
    
    public function getListaStatus($debug = false) {
        $obj = new Status();
        $obj->carregarListaStatus($debug);
        return $obj->getListaStatus();
    }

    public function getListaArea($debug = false) {
        $obj = new Area();
        $obj->carregarListaArea($debug);
        return $obj->getListaArea();
    }
}