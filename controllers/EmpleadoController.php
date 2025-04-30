<?php 
namespace Controllers;

use MVC\Router;

class EmpleadoController{


    public static function panel(Router $router){
        

        $router->render("empleado/panelEmpleado", "layout/layout-empleado", []);
    }

}






