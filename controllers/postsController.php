<?php
/**
 * Description of testeController
 *
 * @author ewertonlucena@gmail.com
 */
class postsController extends controller{
    public function index(){
        echo "Lista das Postagens";
    }
    
    public function ver($nome, $sobrenome) {
        echo "Meu nome é ".$nome." ".$sobrenome;        
    }
}
