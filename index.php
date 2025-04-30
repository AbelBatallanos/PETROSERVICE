
<?php
require __DIR__."/includes/app.php";

use MVC\Router;
use Controllers\AdminController;
use Controllers\AuthController;
use Controllers\EmpleadoController;
use Controllers\FormSolicitudController;
use Controllers\TecnicoController;

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

    // Empleado
    $router->get("/panel", [EmpleadoController::class,"panel"]);
    $router->get("/formulario/solicitud", [FormSolicitudController::class,"generarSolicitud"]);
    $router->post("/formulario/solicitud", [FormSolicitudController::class,"generarSolicitud"]);
    $router->get("/formulario/solicitud", [FormSolicitudController::class,"generarSolicitud"]);
    
    // Jefe-Tecnico
    $router->get("/panel/Jefe-tecnico", [FormSolicitudController::class,"panel"]);
    $router->get("/formulario/solicitud", [FormSolicitudController::class,"generarSolicitud"]);
    $router->post("/formulario/solicitud", [FormSolicitudController::class,"generarSolicitud"]);
    
    // Tecnico
    $router->get("/panel/tecnico", [TecnicoController::class,"panel"]);
    $router->get("/panel/tecnico/progreso", [TecnicoController::class,"progreso"]);
    $router->post("/formulario/solicitud", [TecnicoController::class,"generarSolicitud"]);
    


    $router->comprobarRutas();

    // debugear("NODA");
?>





