<?php 

namespace Controllers;

use MVC\Router;
use Model\FormularioSolicitud;
use Model\Ticket;

class FormSolicitudController{

    public static function generarSolicitud(Router $router){
        $formSolicitud = [];

        if($_SERVER["REQUEST_METHOD"] === "POST"){
            // debugear($_POST);
            $formSolicitud = new FormularioSolicitud($_POST);
            $resultado = $formSolicitud->crearSolicitud();
        
            if($resultado){
                $ticket = new Ticket($_POST);
                // debugear($ticket);
                $ticket->crearTicket();
            }
        }
        $router->render("formulario/form-solicitud", "layout/layout-empleado", ["formSolicitud" => $formSolicitud, ]);
    }




}

