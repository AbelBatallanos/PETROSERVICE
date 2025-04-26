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
    
    public function comprovarRutas(){
        // debugear($this->rutasGet);   
        $urlActual = $_SERVER['PATH_INFO'] ?? '/';
       
        $metodo = $_SERVER["REQUEST_METHOD"];

        if($metodo === "GET"){
            $fn = $this->rutasGet[$urlActual] ?? null;
            
        }else{
            $fn = $this->rutasPost[$urlActual] ?? null; 
        }
        if($fn){
            // debugear($this, $fn);
            call_user_func($fn, $this);  //hace llamado a la funcion de $fn y busca a travez del $this 
        }
    }
    //398 v
    public function render($view, $datos = []){
        $list = [];
        foreach($datos as $key => $value){
            $$key = $value; //de manera implicita creamos 2 variables , invest sobre ello para mas entendimiento "variables de variables"
            $list[$key] = $$key;    
        }
        // debugear($list); 
        ob_start();
        include __DIR__ ."/views/$view.php";
        $contenido = ob_get_clean();
        include __DIR__."/views/layout.php";
    }//end first
}

