<?php

class basededatos {
    private static $intance = null;
    private $mysqli;

    private function __construct(){
        $this->mysqli = new mysqli("localhost","root","root", "petroservice");
        if($this->mysqli->connect_error){
            die("Error de Conexion en la BD". $this->mysqli->connect_error);
        }
    }

    public static function getInstanciaBD(){
        if(self::$intance === null){
            self::$intance = new basededatos();
        }
        return self::$intance;
    }

    public function cerrarConexionBD(){
        if($this->mysqli !== null) $this->mysqli->close(); 
    }
}
