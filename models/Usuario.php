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

    public function IniciarSesion($email,$password){
        
        $query = "SELECT * FROM usuarios WHERE correo = '{$email}' LIMIT 1 ;";
        $resultado = self::consultarBD($query);
        // debugear($resultado);
        $this->sincronizarDatos($resultado["0"]);

        //comparamos credenciales
        if($this->validarDatoslogin($this->correo, $this->password, $email, $password)){
            return "¡No coinciden las creadenciales!";
        }
        header("Location: /DASWORDS");
    }

    
    public function ActualizarDatos(){

    }

}

