<?php
namespace Model;
use Model\BasedeDatos;
class Validaciones {
    protected static $columnasDB = [];

    public function SanitizarDatos(){ //Base de datos
        $conexion = BasedeDatos::getInstanciaBD();
        $atributos = $this->atributos();
        $sanitizado = [];
        foreach($atributos as $key => $value){    
            if(!empty(trim($value))){
                if($key === "password" ){
                    $value = static::validarEntero($value);
                }
                if($key === "correo"){
                    $value = static::validarEmail($value);
                }
                $sanitizado[$key] = $conexion->escape_string($value);
            }
        }
        return $sanitizado;
    }

    public function atributos(){
        $atributos = [];
        foreach(static::$columnasDB as $columna){
            if($columna === "id") continue;
            $atributos[$columna] = $this->$columna;
        }
        return $atributos;
    }

    public static function ValidatearDatos(){
    
    }

    public function sanitizarTexto($texto) {
        return htmlspecialchars(strip_tags(trim($texto)));
    }

    public static function validarEntero($numero) {
        return filter_var($numero, FILTER_VALIDATE_INT);
    }

    public static function validarEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
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

    public static function validarValorInputRegistro($arg = []){
        $datosValidados =  [];
        foreach($arg as $key => $value){ 
            // $password_reply = $key === "password-reply"? $value : "";  
            //Sin valores
           if(!$value){
            $datosValidados[] = "Debes Rellenar ". $key; 
           }
           //identico password
        //    if($key === "password" && $password_reply !== $value){
        //     $datosValidados[] = "No coinciden las contraseñas";
        //    }
        }
        return $datosValidados;
    }

    public function sincronizarDatos($arg = []){
        foreach($arg as $key => $value){
            if(property_exists($this, $key) && !is_null($value)){
                $this->$key = $value;
            }
        }
    }

    public function validarDatoslogin($correous, $passwus,$vrcorreo, $vrpassw){
        if(!($correous === $vrcorreo && $passwus === $vrpassw)){
            return true;
        }
    }
} 
