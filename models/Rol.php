<?php
namespace Model;
use Model\Validaciones;

class Rol extends Validaciones {
    public $id;
    public $nombre;

    public static function obtenerRoles() {
        $query = "SELECT * FROM roles";
        $resultado = self::consultarBD($query);
        return $resultado;
    }

    

}

