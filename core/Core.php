<?php
/**
 * Core do sistema
 * 
 * Faz a conexão entre index.php e as classes do MVC.
 *
 * @author ewertonlucena@gmail.com
 */
class Core {
    
    public function run(){ //inicia class Core
       //$url = substr($_SERVER['PHP_SELF'], 10);//verifica url digitada e retira "index.php"
       //$url = explode('index.php', $_SERVER[]);
       //$url = end($url);
       $url = $_SERVER;
       print_r($url);
       exit;
       $params = array();
       
       
       
       if (!empty($url)){ //Se variavel $url não estiver vazia
           //execute o código abaixo
           $url = explode('/', $url);//converte a url em array usando "/" como delimitador
           array_shift($url);//retira o primeiro valor do array $url
       
           $currentController = $url[0].'Controller';//set Controller
           array_shift($url); //retira o Controller do array $url
           
           if(isset($url[0])){ //Se $url[1](Action) foi digitada
               $currentAction = $url[0];//set Action = $url[1]
               array_shift($url);//retira o Action do array $url
           } else{ //Senão, valor nÃo digitado
               $currentAction = 'index';//set Action = 'index'
           }
           
           if(count($url) > 0){
               $params = $url;
           }
           
       } else { //senão, execute isso
           //execução padrão para $url vazia
           $currentController = 'homeController';//set Controler = 'home'
           $currentAction = 'index';//set Action = 'index'
           
       }
       
       require_once 'core/controller.php';
       
       $c = new $currentController();
       call_user_func_array(array($c, $currentAction), $params);
   }
}
