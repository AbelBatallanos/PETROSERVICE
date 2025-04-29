<?php
namespace MVC;

class Router{
    public $rutasGet = [];
    public $rutasPost = [];
   
    public function get($url, $funcion){
        $this->rutasGet[$url] = $funcion;
    }
    public function post($url, $funcion){
        $this->rutasPost[$url] = $funcion;
    }
    
    public function comprobarRutas(){
        // debugear($this->rutasGet);   
        session_start();
        $auth = $_SESSION["login"] ?? null;
        $authRol = $_SESSION["rol"] ?? null;
        // debugear($auth);
        $rutas_protegidas = ["/admin", "/admin/CasosResueltos", "/admin/CasosPendientes"];

        $urlActual = $_SERVER['PATH_INFO'] ?? '/';

        //  debugear($this->rutasGet);
        $metodo = $_SERVER["REQUEST_METHOD"];
        if($metodo === "GET"){
            $fn = $this->rutasGet[$urlActual] ?? null;

        }else{
            $fn = $this->rutasPost[$urlActual] ?? null; 
        }
        if(in_array($urlActual, $rutas_protegidas) && (!$auth || $authRol !== "2")) {
            header("Location: /");
            exit;
        }
        
        if($fn){
            // debugear($this, $fn);
            call_user_func($fn, $this);  //hace llamado a la funcion de $fn y busca a travez del $this 
        }
    }
    //398 v
    public function render($view, $layout,  $datos = [] ){
        $list = [];
        foreach($datos as $key => $value){
            $$key = $value; //de manera implicita creamos 2 variables , invest sobre ello para mas entendimiento "variables de variables"
            $list[$key] = $$key;    
        }
        // debugear($list); 
        ob_start();
       
        include __DIR__ ."/views/$view.php";

        $contenido = ob_get_clean();
        include __DIR__."/views/$layout.php";
    }//end first

    

}

