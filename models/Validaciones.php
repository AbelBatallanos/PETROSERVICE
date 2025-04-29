<?php
namespace Model;
use Model\BasedeDatos;
class Validaciones extends BasedeDatos{
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


    public static function validarValorInput($arg = []){
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

    public function comprobarPassword($password){
        if(!($password === $this->password)){
            return false;
        }
        return true;
    }

    public function sincronizarDatos($arg = []){
        foreach($arg as $key => $value){
            if(property_exists($this, $key) && !is_null($value)){
                $this->$key = $value;
            }
        }
    }

    public function validarDatoslogin($correous, $passwus,$vrcorreo, $vrpassw){
       return !($correous === $vrcorreo && $vrpassw === $passwus);
            
        
    }
} 
