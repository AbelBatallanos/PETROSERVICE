<?php
namespace Model;
class Validaciones {
    protected static $columnasDB = [];
      
    public static function SanitizarDatos($listDatos = []){
        $sanitizado = [];
        foreach($listDatos as $key => $value){
            $sanitizado[$key] = self::$db->escape_string($value);
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

    protected function sanitizarTexto($texto) {
        return htmlspecialchars(strip_tags(trim($texto)));
    }

    protected function validarEntero($numero) {
        return filter_var($numero, FILTER_VALIDATE_INT);
    }

    protected function validarEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
} 
