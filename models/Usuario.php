<?php 

namespace Model;
use Model\Validaciones;
use Model\BasedeDatos;
class Usuario extends Validaciones{
    public $id;
    public $nombre;
    public $apellidos;
    public $correo;
    public $password;
    public $iddepartamento;
    public $idrol;
    
    protected static $columnasDB = ["id", "nombre", "apellidos", "correo", "password", "iddepartamento", "idrol"];
    
    public function setDatos($arg = [])
    {
        $this->id = $arg["idusuario"] ?? NULL;
        $this->nombre = $arg["nombre"] ?? "";
        $this->apellidos = $arg["apellidos"] ?? "";
        $this->correo = $arg["correo"] ?? "";
        $this->password = $arg["password"] ??"";
        $this->iddepartamento = $arg["iddepartamento"] ?? NULL;
        $this->idrol = $arg["rol"] ?? "1";
    }

    public function RegistrarUsuario(){
        $conexion = BasedeDatos::getInstanciaBD();
        $sanitizado = $this->SanitizarDatos();
        $query = "INSERT INTO usuarios( " ;
        $query .= join(", ", array_keys($sanitizado)) ;
        $query .= " ) VALUES ( ' ";
        $query .= join("', '", array_values($sanitizado));
        $query .= " ') ;";
        // debugear($query);
        $resultado = $conexion->query($query);
        return $resultado;
    }   

    public function existeUsuario($correo){
        $query = "SELECT * FROM usuarios WHERE correo = '{$correo}' LIMIT 1;";
        $resultado = self::consultarBD($query);
        if($resultado){
            $this->sincronizarDatos($resultado["0"]);
            return $resultado;
        }
    }

    public function IniciarSesion(){
        session_start();

        // Llenar el arreglo de sesion
        $_SESSION['id'] = $this->id;
        $_SESSION['usuario'] = $this->correo;
        $_SESSION['rol'] = $this->idrol;
        $_SESSION['login'] = true;

        header('Location: /admin');
    }

    public function buscarUsuario($id){
        $query = "SELECT * FROM usuarios WHERE id = '{$id}' LIMIT 1;";
        $resultado = self::encontrar($query);
        
        $this->sincronizarDatos($resultado);
        
    }

    public function ActualizarDatos(){

    }

}

