<?php 

namespace Model;
use Model\Validaciones;

class Usuario extends Validaciones{
    protected $idusuario;
    protected $nombre;
    protected $apellidos;
    protected $correo;
    protected $password;
    protected $departamento;
    protected $rol;

    

    public function __construct($nombre, $apellidos, $correo, $password, $iddepartamento, $rol){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->correo = $correo;
        $this->password = $password;
        $this->departamento = $iddepartamento;
        $this->rol = $rol;
    }

    public function RegistrarUsuario(){

        $query = "INSERT INTO usuario()";
    }   

    public static function IniciarSesion(){
        
    }

    public

}

