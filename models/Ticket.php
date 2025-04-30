<?php
namespace Model;
use Model\BasedeDatos;
use Model\Validaciones;

class Ticket extends Validaciones{
    protected static $columnasDB = ["id", "asunto", "prioridad", "estado", "responsable"];


    public $id;
    public $asunto;
    public $prioridad;
    public $estado;
    public $responsable;
    
    public function __construct($arg = [])
    {
        $this->id = $arg["id"]?? NULL;
        $this->asunto = $arg["asunto"]?? "";
        $this->prioridad = $arg["prioridad"]?? "";
        $this->estado = $arg["estado"] ?? "pendiente";
        $this->responsable = $arg["responsable"] ?? "sin asignar";

    }

    public function crearTicket(){
        $conexion = BasedeDatos::getInstanciaBD();
        $sanitizado = $this->SanitizarDatos();
        $query = "INSERT INTO tickets( " ;
        $query .= join(", ", array_keys($sanitizado)) ;
        $query .= " ) VALUES ( ' ";
        $query .= join("', '", array_values($sanitizado));
        $query .= " ') ;";

        $resultado = $conexion->query($query);
        return $resultado;
    }

}

