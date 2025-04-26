<?php

class Empleado{
    public $id;
    public $nombre;
    public $apellidos;
    public $correo;
    public $contraseña;
    
    
    public function __construct($list)
    {
        $this->id = $list["id"];
        $this->nombre = $list["nombre"];
        $this->apellidos = $list["apellidos"];
        $this->correo = $list["correo"];
        $this->contraseña = $list["contraseña"];
    }


}








