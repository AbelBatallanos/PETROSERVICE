<?php
namespace Model;

class BasedeDatos {
    // private static $intance = null;
    protected static $mysqlis;

  

    public static function setBD($conexion){
       self::$mysqlis = $conexion;
    }

    public static function getInstanciaBD(){
        return self::$mysqlis;
    }

    public function cerrarConexionBD(){
        if($this->mysqlis !== null) $this->mysqlis->close(); 
    }
}
