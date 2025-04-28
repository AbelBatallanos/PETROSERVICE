
<?php
require __DIR__."/includes/app.php";

use MVC\Router;
use Controllers\AuthController;

    $router = new Router();

    $router->get("/", function(){
      require_once __DIR__."/views/layout/layout-index.php";
    });
    $router->get("/registrarse", [AuthController::class,"registro"]);
    $router->post("/registrarse", [AuthController::class,"registro"]);
    $router->get("/iniciarsesion", [AuthController::class,"login"]);
    $router->post("/iniciarsesion", [AuthController::class,"login"]);


    $router->comprobarRutas();

    // debugear("NODA");
?>





