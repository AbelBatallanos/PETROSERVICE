<?php
namespace Controllers;

use MVC\Router;

class TecnicoController{

    public static function panel(Router $router){


        $router->render("tecnico/panel", "layout/layout-tecnico", ["saludar" => "saludaedfrfr"]);
    }

    public static function progreso(Router $router){


        $router->render("tecnico/progreso", "layout/layout-tecnico", ["saludar" => "saludaedfrfr"]);
    }



}