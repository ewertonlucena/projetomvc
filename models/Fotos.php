<?php
/**
 * Description of Fotos
 *
 * @author ewertonlucena@gmail.com
 */
class Fotos extends model{
        
    public function __construct() {
        parent::__construct();
    }
    
    public function getFotos() {
        $array = [];
        
        $sql = "SELECT * FROM fotos";
        $sql = $this->db->query($sql);
        
        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
        
        return $array;
    }
    
}
