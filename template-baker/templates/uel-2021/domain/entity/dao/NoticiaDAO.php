<?php
require 'domain/entity/dao/DAO.php';
class NoticiaDAO extends DAO {

    public function __construct() {
        parent::__construct();
    }

    public function getById(Noticia $obj, $debug = false) {
        try {
            $sql = sprintf('SELECT * FROM  rev_textos WHERE 
            n_texto=\'%s\'', $obj->getNTexto());
            $this->conex->debug = $debug;
            $rs = $this->conex->Execute($sql);

            if ((!$rs) or ( $rs->EOF)) {
                return false;
            } else {
                foreach ($rs as $rows) {
                    
                }
                $obj->setAll($rows);
                return true;
            }
        } catch (ADODB_Exception $e) {
            $this->enviarMensagem($e);
            return false;
        }
    }

    public function getPorTipo(Noticia $obj, $tipo, $debug = false) {
        try {
            $max = $obj->getTotalNoticiasPagina();
            $limSup = $obj->getPaginaAtual() * $max;
            if (!is_null($limSup)) {
                $limit = ' LIMIT ' . $limSup . ',' . $max;
            }

            //$this->carregarSqlWhere($obj, $tipo);
            $sql = 'SELECT * FROM rev_textos n WHERE n.flg_texto = \''
                    . $tipo . '\' ORDER BY n.top desc, n.posicao desc' . $limit;
            $this->conex->debug = $debug;
            $rs = $this->conex->Execute($sql);

            if ((!$rs) or ( $rs->EOF)) {
                return false;
            } else {
                foreach ($rs as $rows) {
                    $obj->setAll($rows);
                    $return[] = clone $obj;
                }
                $obj->setTotalListaNoticias(count($return));
                $obj->setListaNoticias($return);
                return true;
            }
        } catch (ADODB_Exception $e) {
            $this->enviarMensagem($e);
            return false;
        }
    }

    public function getNoticiasPorFiltro(Noticia $obj, $fwsCondicao, $debug = false) {
        try {

            $termo = "";
            if ($fwsCondicao['pesquisa-termo'] != '') {
                $termo = mysql_real_escape_string($fwsCondicao['pesquisa-termo']);
                $termo = " and tit_texto LIKE '%{$termo}%'";
            }

            $data = "";
            if ($fwsCondicao['data-inicio'] != '' and $fwsCondicao['data-fim'] != '') {
                $data = " and data BETWEEN \"" . $fwsCondicao['data-inicio'] . "\" AND \"" . $fwsCondicao['data-fim'] . "\"";
            }

            $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM rev_textos WHERE flg_texto = '" . $fwsCondicao['tipo-noticia'] . "'" . $data . $termo
                    . " ORDER BY data DESC LIMIT 20 OFFSET " . $fwsCondicao['limite-inferior'];


            $this->conex->debug = $debug;
            $rs = $this->conex->Execute($sql);


            if ((!$rs) or ( $rs->EOF)) {
                return false;
            } else {
                foreach ($rs as $rows) {
                    $obj->setAll($rows);
                    $return[] = clone $obj;
                }
            }

            $rs = $this->conex->Execute("SELECT FOUND_ROWS();");

            if ((!$rs) or ( $rs->EOF)) {
                return false;
            } else {
                foreach ($rs as $rows) {
                    
                }
                $totalSemLimit = $rows;
            }
            
            $return[] = $totalSemLimit[0]; 
            $obj->setListaNoticias($return);
            
            return true;
        } catch (ADODB_Exception $ex) {
            $this->enviarMensagem($ex);
            return false;
        }
    }

    public function getNumeroDeNoticiasPorRevista(Noticia $obj, $debug = false) {
        try {
            $this->carregarSqlWhere($obj);
            $sql = 'SELECT COUNT(*) FROM rev_textos n '
                    . $this->sqlWhere;
            $this->conex->debug = $debug;
            $rs = $this->conex->Execute($sql);

            if ((!$rs) or ( $rs->EOF)) {
                return false;
            } else {
                foreach ($rs as $rows) {
                    return $rows["0"];
                }
            }
        } catch (ADODB_Exception $e) {
            $this->enviarMensagem($e);
            return false;
        }
    }

    public function carregarSqlWhere(Noticia $obj, $debug = false) {
        //$this->sqlWhere = " WHERE  n.cod_revista=" . $obj->getCodRevista() . " AND n.cod_status=1";
        $this->sqlWhere = " WHERE  n.cod_revista=" . $obj->getCodRevista();

        if ($obj->getNTexto()) {
            $this->sqlWhere .= " AND  n.n_texto=" . $obj->getNTexto();
        }
        if ($obj->getFlgTexto()) {
            /* | VERIFICA SE O TIPO DE NOT�CIA � COM FOTO E FAZ O TRATAMENTO PARA OBTER OS REGISTROS | */
            if (strtolower($obj->getFlgTexto()) == "Not�cia") {
                $this->sqlWhere .= " AND  n.flg_texto='not�cia' ";
            } else if (strtolower($obj->getFlgTexto()) == "acontece na uel") {
                $this->sqlWhere .= " AND  n.flg_texto='Acontece na UEL' ";
            } else if (strtolower($obj->getFlgTexto()) == "destaque") {
                $this->sqlWhere .= " AND  n.flg_texto='Destaque'";
            } else {
                $this->sqlWhere .= " AND  n.flg_texto='" . $obj->getFlgTexto() . "' ";
            }
        }
        if ($obj->getCodCategoria()) {
            $this->sqlWhere .= " AND   n.cod_categoria=" . $obj->getCodCategoria();
        }
        if ($obj->getAutor()) {
            $this->sqlWhere .= " AND ( n.autor LIKE '%" . $obj->getAutor() . "%')";
        }
        if ($obj->getDataIni() && $obj->getDataFim()) {
            $this->sqlWhere .= " AND n.data
                BETWEEN '" . formatDateInsert($obj->getDataIni()) . "'
                AND '" . formatDateInsert($obj->getDataFim()) . "'";
        }

        if ($obj->getTitTexto()) {
            $explode = explode(' ', $obj->getTitTexto());
            $cont = count($explode);
            for ($i = 0; $i < $cont; $i++) {
                $this->sqlWhere.= " AND ( n.tit_texto LIKE '%" . $explode[$i] . "%')";
            }
        }


        if ($obj->getPalavra()) {
            $explode = explode(' ', $obj->getPalavra());
            $cont = count($explode);
            for ($i = 0; $i < $cont; $i++) {
                $this->sqlWhere.= " AND ( n.texto LIKE '%" . $explode[$i] . "%')";
            }
        }
    }

    public function getAll(Noticia $obj, $debug = false) {
        try {
            $sql = sprintf('
            SELECT n_texto, tit_capa
            FROM rev_textos
            ORDER BY top desc, posicao desc
            LIMIT 0, 5');

            $this->conex->debug = $debug;
            $rs = $this->conex->Execute($sql);

            if ((!$rs) or ( $rs->EOF)) {
                return false;
            } else {
                foreach ($rs as $rows) {
                    $obj->setAll($rows);
                    $return[] = clone $obj;
                }
                $obj->setListaNoticias($return);
                return true;
            }
        } catch (ADODB_Exception $e) {
            $this->enviarMensagem($e);
            return false;
        }
    }

    public function getByIdExiste(Noticia $obj, $debug = false) {
        try {
            $sql = sprintf('SELECT * FROM rev_textos 
                WHERE n_texto=\'%s\'', $obj->getNTexto());

            $this->conex->debug = $debug;
            $rs = $this->conex->Execute($sql);

            if ((!$rs) or ( $rs->EOF)) {
                return false;
            } else {
                return true;
            }
        } catch (ADODB_Exception $e) {
            $this->enviarMensagem($e);
            return false;
        }
    }

    public function getLastId($condicao = false, $debug = false) {
        try {
            $sql = "SELECT MAX(IFNULL(n_texto,0))+1 FROM rev_textos";

            $rs = $this->conex->Execute($sql);
            if ((!$rs) or ( $rs->EOF)) {
                return false;
            } else {
                foreach ($rs as $rows) {
                    
                }
                return $rows['0'];
            }
        } catch (ADODB_Exception $e) {
            $this->enviarMensagem($e);
            return false;
        }
    }

}
