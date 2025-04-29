
<?php
require __DIR__."/includes/app.php";

use MVC\Router;
use Controllers\AdminController;
use Controllers\AuthController;
use Controllers\funcionarioController;

    $router = new Router();

    $router->get("/", function(){
      require_once __DIR__."/views/layout/layout-index.php";
    });
    // Registro, Login y Cerrar Sesion
    $router->get("/registrarse", [AuthController::class,"registro"]);
    $router->post("/registrarse", [AuthController::class,"registro"]);
    $router->get("/iniciarsesion", [AuthController::class,"login"]);
    $router->post("/iniciarsesion", [AuthController::class,"login"]);
    $router->get("/logout", [AuthController::class,"logout"]);

    // Administrador
    $router->get("/admin", [AdminController::class,"gestionarUsuarios"]);
    $router->get("/admin/CasosResueltos", [AdminController::class,"listarCasosResueltos"]);
    $router->get("/admin/CasosPendientes", [AdminController::class,"listarCasosPendientes"]);
    $router->get("/admin/actualizar/usuario", [AdminController::class,"actualizarUsuario"]);
    $router->get("/admin/eliminar/usuario", [AdminController::class,"gestionarUsuarios"]);

    // $router->get("", [funcionarioController::class,""]);


    $router->comprobarRutas();

    // debugear("NODA");
?>





