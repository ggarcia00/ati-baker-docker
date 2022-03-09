<?php
/**
 * @category        WebsiteBaker
 * @package         WebsiteBaker_core
 * @author          Ryan Djurovich, WebsiteBaker Project, Werner v.d.Decken
 * @copyright       2009-2019, WebsiteBaker Org. e.V.
 * @link            https://websitebaker.org
 * @license         http://www.gnu.org/licenses/gpl.html
 * @version         $Id: class.order.php 234 2019-03-17 06:05:56Z Luisehahne $
 * @filesource      /framework/class.order.php
 * Ordering class
 * This class will be used to change the order of an item in a table
 * which contains a special order field (type must be integer)
 */
/*******************************************************************************
 * abstract factory for application
 */
/* -------------------------------------------------------- */
// Must include code to prevent this file from being accessed directly
if (!\defined('SYSTEM_RUN')) {\header($_SERVER['SERVER_PROTOCOL'].' 404 Not Found'); echo '404 Not Found'; \flush(); exit;}
/* -------------------------------------------------------- */

if (!\defined('ORDERING_CLASS_LOADED')){\define('ORDERING_CLASS_LOADED', true);}

class order {

    const MOVE_UP   = 0;
    const MOVE_DOWN = 1;

    protected $_Table      = '';
    protected $_FieldOrder = '';
    protected $_FieldId    = '';
    protected $_FieldGroup = '';
    protected $_DB         = null;

    /**
     * Constructor
     * @param string $Table
     * @param string $FieldOrder
     * @param string $FieldId
     * @param string $FieldGroup
     * use $GLOBALS['database']
     */
    public function __construct($Table, $FieldOrder, $FieldId, $FieldGroup) {
        $this->_DB         = \database::getInstance();
        $this->_Table      = $Table;
        $this->_FieldOrder = $FieldOrder;
        $this->_FieldId    = $FieldId;
        $this->_FieldGroup = $FieldGroup;
    }
    /**
     *
     * @param string|int $id
     * @param int $direction
     * @return bool
     */
    public function move($id, $direction = self::MOVE_UP)
    {
        $retval = false;
        $sql  = 'SELECT `'.$this->_FieldOrder.'` `order`, `'.$this->_FieldGroup.'` `group` '
              . 'FROM `'.$this->_Table.'` WHERE `'.$this->_FieldId.'`=\''.$id.'\'';
        // get Position and Group for Element to move
        if (($res1 = $this->_DB->query($sql))) {
            if (($rec1 = $res1->fetchRow(MYSQLI_ASSOC))) {
                $sql  = 'SELECT `'.$this->_FieldId.'` `id`, `'.$this->_FieldOrder.'` `order` '
                      . 'FROM `'.$this->_Table.'` '
                      . 'WHERE `'.$this->_FieldGroup.'`=\''.$rec1['group'].'\' ';
                if ($direction == self::MOVE_UP) {
                    // search for Element with next lower Position
                    $sql .=     'AND `'.$this->_FieldOrder.'`<\''.$rec1['order'].'\' '
                          . 'ORDER BY `'.$this->_FieldOrder.'` DESC';
                }else {
                    // search for Element with next higher Position
                    $sql .=     'AND `'.$this->_FieldOrder.'`>\''.$rec1['order'].'\' '
                          . 'ORDER BY `'.$this->_FieldOrder.'` ASC';
                }
                // get Id and Position of the Element to change with
                if (($res2 = $this->_DB->query($sql))) {
                    if (($rec2 = $res2->fetchRow(MYSQLI_ASSOC))) {
                        $sql  = 'UPDATE `'.$this->_Table.'` '
                              . 'SET `'.$this->_FieldOrder.'`=\''.$rec1['order'].'\' '
                              . 'WHERE `'.$this->_FieldId.'`=\''.$rec2['id'].'\'';
                        // update Position number of target
                        if ($this->_DB->query($sql)) {
                            $sql  = 'UPDATE `'.$this->_Table.'` '
                                  . 'SET `'.$this->_FieldOrder.'`=\''.$rec2['order'].'\' '
                                  . 'WHERE `'.$this->_FieldId.'`=\''.$id.'\'';
                            // update Position number source
                            $retval = $this->_DB->query($sql);
                        }
                    }
                }
            }
        }
        return $retval;
    }

    /**
     * Move a row up
     * @param string|int $id
     * @return bool
     */
    public function move_up($id) {
        // Get current order
        return $this->move($id, self::MOVE_UP);
    }

    /**
     * Move a row down
     * @param string|int $id
     * @return bool
     */
    public function move_down($id) {
        // Get current order
        return $this->move($id, self::MOVE_DOWN);
    }

    /**
     * Get next free number for order
     * @param string|int $group
     * @return integer
     */
    public function getNew($group) {
        // Get last order
        $sql  = 'SELECT MAX(`'.$this->_FieldOrder.'`) FROM `'.$this->_Table.'` ';
        $sql .= 'WHERE `'.$this->_FieldGroup.'`=\''.$group.'\' ';
        $max = \intval($this->_DB->get_one($sql)) + 1;
        return $max;
    }

    /**
     * Renumbering a group from 1 to n (should be called if a row in the middle has been deleted)
     * @param string|int $group
     * @return bool
     */
    public function clean($group) {
        // Loop through all records and give new order
        $sqlSet = 'SET @c:=0;'."\n";
        $this->_DB->query($sqlSet);
        $sqlSet = 'UPDATE `'.$this->_Table.'` SET `'.$this->_FieldOrder.'`=(SELECT @c:=@c+1) '."\n"
                . 'WHERE `'.$this->_FieldGroup.'`=\''.$group.'\' '."\n"
                . 'ORDER BY `'.$this->_FieldOrder.'` ASC;'."\n";
        return $this->_DB->query($sqlSet);
    }

    /**
     * Get next free number for order
     * @param string|int $group
     * @return integer
     */
    public function get_new($group) {
    // Get last order
        $sql = 'SELECT (IFNULL(MAX(`'.$this->_FieldOrder.'`),0)+1) '
        . 'FROM `'.$this->_Table.'` '
        . 'WHERE `'.$this->_FieldGroup.'`=\''.$group.'\' ';
        return $this->_DB->get_one($sql);
    }

} // end of class
