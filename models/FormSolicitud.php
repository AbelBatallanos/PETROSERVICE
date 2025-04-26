<?php
class FormularioSolicitud {
    protected $idformsolicitud;
    private $fechacreacion;
    private $descripcion;
    private $estado;
    private $usuario; // Asociado al Usuario que la creó

    protected static $columnasDB = [];

    public function __construct($idformsolicitud, $fecha, $descripcion, $estado, $usuario) {
        $this->idformsolicitud = $idformsolicitud;
        $this->fechacreacion = date("Y/m/d");
        $this->descripcion = $descripcion;
        $this->estado = $estado;
        $this->usuario = $usuario;
    }

    public function crearSolicitud() {
        $atributos = $this->sanitizarAtributos();
        
         $query = "INSERT INTO formsolicitud"."( ";
         $query .= join(", ", array_keys($atributos));
         $query .= "  ) VALUES ( ' ";
         $query .= join("', '", array_values($atributos));
         $query .= " ') ;"; 
        //  var_dump($query);
        //  exit;
         $resultado = self::$db->query($query);
 
    }

    public function generarEstado($nuevoEstado) {
        $this->estado = $nuevoEstado;
    }

    public function obtenerDescripcion() {
        return $this->descripcion;
    }

    public function ListarSolicitudes(){
       
    }

    public function mostrarResponsable() {
        return $this->usuario->mostrarDatos();
    }
}
?>
