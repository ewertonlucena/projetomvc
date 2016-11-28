<?php
/**
 * Description of homeController
 *
 * @author ewertonlucena@gmail.com
 */
class homeController extends controller{
    //controller padrão
    public function index() {
        echo "Por enquanto, tá tudo bem...</br></br></br>";
        $usuario = new Usuario();
        $usuario->setName('Ewerton');
        
        echo "Meu nome é ".$usuario->getName().'</br></br>';
        
        $dados = array(
            'name' => $usuario->getName()
        );
        
        $this->loadView('home', $dados);
        
        
    }
}
