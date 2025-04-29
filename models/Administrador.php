<?php
namespace Model;
use Model\Usuario;


class Administrador extends Usuario{
    
    public function EliminarCuenta($id){
        
    }

    public static function ListarUsuarios(){
        $query = "SELECT * FROM usuarios;";
        $resultado = self::consultarBD($query);
        return $resultado;
    }

    public function AsignarRol(){
    
    }

    public function AprobarCuenta(){
    
    }

    public function EditarCuenta(){
    
    }
}





?>