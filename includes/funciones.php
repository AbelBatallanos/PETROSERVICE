<?php




function sanitizarAtributos(){
    $atributos = atributos();
    $sanitizado = [];
    foreach($atributos as $key => $value){
        $sanitizado[$key] = self::$db->escape_string($value);
    }
    return $sanitizado;

}

function atributos(){
    $atributos = [];
    foreach(static::$columnasDB as $columna){
        if($columna === "id") continue;
        $atributos[$columna] = $this->$columna;
    }
    return $atributos;
}

