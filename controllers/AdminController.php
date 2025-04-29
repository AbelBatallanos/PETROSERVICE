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
        
    // debugear($roles);

    $router->render("formulario/formulario_actualizacionuser",
     "layout/layout-updateUser",
    ["departamentos" => $departamentos, "roles"=> $roles,
    "usuario"=> $usuario ]);
    }

    public static function gestionarUsuarios(Router $router){
        $roles = Rol::obtenerRoles();
        $departamentos = Departamento::ObtenerDepartamentos();
        $usuarios = Administrador::ListarUsuarios();   
        // debugear($rol);
        // foreach($rol as $usuario){
        //     debugear($usuario->nombre);
        // }

        $router->render("admin/gestion_usuario", "layout/layout-admin", ["usuarios"=> $usuarios, "departamento" => $departamentos, 
        "roles" => $roles]);
    }

    public static function listarCasosPendientes(Router $router){



        $router->render("admin/panelAdmin", "layout/layout-admin", []);
    }

    public static function listarCasosResueltos(Router $router){

        $router->render("admin/casos_resueltos", "layout/layout-admin", []);
    }


}