<?php
namespace Model;

use Model\BasedeDatos;
use Model\Validaciones;

class FormularioSolicitud extends Validaciones {
    public static $columnasDB = ["id", "fechacreacion", "descripcion", "estado", "empleado", "prioridad", "asunto"];

    public $id;
    public $fechacreacion;
    public $descripcion;
    public $estado;
    public $empleado; // Asociado al Usuario que la creó
    public $prioridad;
    public $asunto;

    public function __construct($arg =[]) {
        $this->id = $arg["id"]?? null;
        $this->fechacreacion = date("Y/m/d");
        $this->descripcion = $arg["descripcion"] ?? "";
        $this->estado = $arg["estado"]?? "Pendiente";
        $this->empleado =  ($arg["nombre"] ?? "") . " " . ($arg["apellidos"] ?? "");
        $this->prioridad = $arg["prioridad"]?? "";
        $this->asunto = $arg["asunto"]?? "";
    }

    public function crearSolicitud() {
        $conexion = BasedeDatos::getInstanciaBD();
        $sanitizado = $this->SanitizarDatos();
        
         $query = "INSERT INTO formsolicitudes"."( ";
         $query .= join(", ", array_keys($sanitizado));
         $query .= "  ) VALUES ( ' ";
         $query .= join("', '", array_values($sanitizado));
         $query .= " ') ;"; 
        //  var_dump($query);
        //  exit;
        $resultado = $conexion->query($query);
        // debugear($resultado);
        return $resultado;
    }

    public function generarEstado($nuevoEstado) {
        $this->estado = $nuevoEstado;
    }

    public function obtenerDescripcion() {
        return $this->descripcion;
    }

    public function ListarSolicitudes(){
        $query = "SELECT * FROM formsoluciones;";
        $resultado =  self::consultarBD($query);
        return $resultado;
    }

    // public function mostrarResponsable() {
    //     return $this->idusuario->mostrarDatos();
    // }
}
?>
