<?php
namespace Controllers;
// use Model\Usuario;
use Model\Departamento;
use MVC\Router;
use Model\Usuario;

class AuthController {

    public static function login(Router $router) {
        $usuario = new Usuario();
        $errores = [];
        // $errorCredenciales = "";
        if($_SERVER["REQUEST_METHOD"] === "POST"){
            // debugear($_POST["login"]);
            $post = $_POST["login"];
            $errores = $usuario::validarValorInput($post);
            // debugear($errores);s
            $correo = $usuario::validarEmail($post["correo"]);

            $resultado = $usuario->existeUsuario($correo);
            if(!$resultado){
                $errores[] = "No existe ese Usuario";
            } else {
                $autentificado = $usuario->comprobarPassword($post["password"]);
                if($autentificado){
                   $usuario->IniciarSesion();
                }else{
                    $errores[] = " La Contraseña es Incorrecta";
                }
                // $usuario->sincronizarDatos($resul);
                // debugear($errorCredenciales);
              
            }
            // debugear($errorCredenciales);
        }

        $router->render("auth/login", 
         "layout/layout-login", ["errores" =>$errores     
         ]
        );
    }


    public static function registro(Router $router){
        // debugear("HOLA");
        $usuario = new Usuario();
        $departamentos = Departamento::ObtenerDepartamentos();
        $errores = [];
        
        // debugear($departamentos);
        if($_SERVER["REQUEST_METHOD"] === "POST"){
            // debugear($_POST);
            $registro = $_POST["registro"];
            $errores = $usuario::validarValorInput($registro);
            // debugear($registro);
            if(empty($errores)){
                $usuario->setDatos($registro);
                if($usuario->RegistrarUsuario()){
                    header("Location: /iniciarsesion");
                    exit;
                };
            }

        }
        // debugear($departamentos);
        $router->render("auth/registrarse", 
         "layout/layout-registerUs", 
         [ "departamentos"=> $departamentos,
         "usuario"=> $usuario ,
         "errores" =>$errores
         ],);
    }

    public static function logout(){
        session_start(); // Asegurarnos de que la sesión está iniciada
        session_unset(); // Vacía todas las variables de sesión
        session_destroy(); // Destruye la sesión completamente
        header("Location: /"); // Redirige al inicio o página de login
        exit; // Asegura que la ejecución se detenga
    }

}
