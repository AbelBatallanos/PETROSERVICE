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

    

    public static function consultarBD($query){
        $conexion = BasedeDatos::getInstanciaBD();
        $resultado = $conexion->query($query);
        $respuesta = [];
        while($registro = $resultado->fetch_assoc()){
            $respuesta[] = static::crearObjeto($registro);
        }
        //Libera espacion en memoria
        $resultado->free();

        return $respuesta;
    }

    public static function crearObjeto($registro){
        $objeto = new static;
        foreach($registro as $key => $value){
            if(property_exists($objeto, $key)){
                $objeto->$key = $value;
            }
        }
        return $objeto;
    }

    public static function encontrar($query){
        $conexion = BasedeDatos::getInstanciaBD();
        $resultado = $conexion->query($query);
        $usuario = $resultado->fetch_assoc();
        return $usuario;

    }


}
