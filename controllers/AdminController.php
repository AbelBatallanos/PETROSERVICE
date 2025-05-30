<?php
namespace Controllers;

use MVC\Router;
use Model\Rol;
use Model\Departamento;
use Model\Administrador;
use Model\Usuario;

class AdminController{

    public static function actualizarUsuario(Router $router){
        $id = $_GET['id'] ?? null;
        if (!$id) {
        header("Location: /admin");
        exit;
        }
        $usuario = new Usuario();
        $usuario->buscarUsuario($id);
        // debugear($usuario);
        $departamentos = Departamento::ObtenerDepartamentos();
        $roles = Rol::obtenerRoles();

        $router->render("formulario/formulario_actualizacionuser",
        "layout/layout-updateUser",
        ["departamentos" => $departamentos, "roles"=> $roles,
        "usuario"=> $usuario ]);
    }

    public static function gestionarUsuarios(Router $router){
        $roles = Rol::obtenerRoles();
        $departamentos = Departamento::ObtenerDepartamentos();
        $usuarios = Administrador::ListarUsuarios();   
        if($_SERVER["REQUEST_METHOD"] === "POST"){
            debugear($_POST);
        }
        $router->render("admin/gestion_usuario", "layout/layout-admin", ["usuarios"=> $usuarios, "departamentos" => $departamentos, 
        "roles" => $roles]);
    }

    public static function eliminarUsuario(Router $router){
            if($_SERVER["REQUEST_METHOD"] === "POST"){
                // debugear($_POST);
            }
            $router->render("admin/gestion_usuario", "layout/layout-admin", []);
    }

    public static function listarCasosPendientes(Router $router){



        $router->render("admin/panelAdmin", "layout/layout-admin", []);
    }

    public static function listarCasosResueltos(Router $router){

        $router->render("admin/casos_resueltos", "layout/layout-admin", []);
    }


}