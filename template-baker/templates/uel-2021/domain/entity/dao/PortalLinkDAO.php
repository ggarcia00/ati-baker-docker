<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PortalLinkDAO
 *
 * @author alissar
 */
class PortalLinkDAO extends DAO {

    public function __construct() {
        parent::__construct();
    }

    public function getPorTipo(PortalLink $obj, $tipo, $debug = false) {

        try {
            $sql = 'SELECT * FROM WAtiSuporte.portal_link pl '
                    . 'INNER JOIN WAtiSuporte.portal_tipolink ptl ON pl.codtipo = ptl.codtipo '
                    . 'WHERE ptl.nometipo = \'' . $tipo . '\' '
                    . 'ORDER BY trim(pl.nomelink)';

            $this->conex->debug = $debug;
            $rs = $this->conex->Execute($sql);

            if ($debug) {
                echo $sql;
            }
            if ((!$rs) or ( $rs->EOF)) {
                return false;
            } else {
                foreach ($rs as $rows) {
                    $obj->setAll($rows);
                    $return[] = clone $obj;
                }
                $obj->setListaLinks($return);
                return true;
            }
        } catch (ADODB_Exception $e) {
            $this->enviarMensagem($e);
            return false;
        }
    }

    public function getEventos(PortalLink $obj, $debug = false) {

        try {
            $sql = 'SELECT * FROM WAtiSuporte.view_portal_link ORDER BY nomelink';
            
            $this->conex->debug = $debug;
            $rs = $this->conex->Execute($sql);

            if ($debug) {
                echo $sql;
            }
            if ((!$rs) or ( $rs->EOF)) {
                return false;
            } else {
                foreach ($rs as $rows) {
                    $obj->setAll($rows);
                    $return[] = clone $obj;
                }
                $obj->setListaEventos($return);
                return true;
            }
        } catch (ADODB_Exception $e) {
            $this->enviarMensagem($e);
            return false;
        }
    }

}
