<?php
/**
 * Description of homeController
 *
 * @author ewertonlucena@gmail.com
 */
class homeController extends controller{
    //controller padrão
    public function index() {
        $usuario = new Usuario();
        $usuario->setName('Ewerton');
        
        $dados = array(
            'name' => $usuario->getName()
        );
        
        $this->loadTemplate('home', $dados);     
    }
    
    public function sobre(){
        $dados = array();
        $this->loadTemplate('sobre', $dados);
    }
    
    public function fotos(){
        $fotos = new Fotos();
        $dados['fotos'] = $fotos->getFotos();
        
        $this->loadTemplate('fotos', $dados);
    }
}
