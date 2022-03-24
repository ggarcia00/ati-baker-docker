<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PortalLink
 *
 * @author alissar
 */
class PortalLink extends PortalLinkVO {
    protected $objDAO;

    function __construct() {
        $this->objDAO = new PortalLinkDAO();
    }
    
    public function getListaLinksPorTipo($tipo, $debug = false) {
        $this->objDAO->getPorTipo($this, $tipo, $debug);
        return $this->listaLinks;
    }
    
    public function getEventos($debug = false) {
        $this->objDAO->getEventos($this, $debug);
        return $this->listaEventos;
    }
}
