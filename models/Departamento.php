<?php
namespace Model;


class Departamento extends Validaciones{
    public $iddepartamento;
    public $nombre;

    protected static $columnasDB = ["iddepartamento", "nombre"];

    public static function ObtenerDepartamentos(){

       $query = "SELECT * FROM departamentos;";
       $resultado =  self::consultarBD($query);
       return $resultado;
    }

    
}




