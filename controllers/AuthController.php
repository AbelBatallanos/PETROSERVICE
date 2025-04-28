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
        if($_SERVER["REQUEST_METHOD"] === "POST"){
            // debugear($_POST["login"]);
            $post = $_POST["login"];
            $errores = Usuario::validarValorInputRegistro($post);
            // debugear($errores);s
            $correo = Usuario::validarEmail($post["correo"]);
            
            $usuario->IniciarSesion($correo,$post["password"]);
            // $usuario->sincronizarDatos($resul);

          

            if(empty($errores)){

            }
        
        }

        $router->render("auth/login", 
         "layout/layout-login", []
        );
    }


    public static function registro(Router $router){
        // debugear("HOLA");
        $usuario = new Usuario();
        $departamentos = Departamento::ObtenerDepartamentos();
        $errores = [];
        
        // debugear($departamentos);
        if($_SERVER["REQUEST_METHOD"] === "POST"){

            $registro = $_POST["registro"];
            $errores = $usuario::validarValorInputRegistro($registro);
            // debugear($registro);
            if(empty($errores)){
                $usuario->setDatos($registro);
                if($usuario->RegistrarUsuario()){
                    header("Location: /iniciarsesion");
                };
            }

        }
        $router->render("auth/registrarse", 
         "layout/layout-registerUs", 
         [ "departamentos"=> $departamentos,
         "usuario"=> $usuario ,
         "errores" =>$errores
         ],);
    }


    // public function identificarRol(){
    //     $usuarioModel = new Usuario();
    //     $usuario = $usuarioModel->verificarCredenciales($datos['usuario'], $datos['contrasena']);
    
    //     if ($usuario) {
    //       session_start();
    //       $_SESSION['usuario'] = $usuario['nombre'];
    //       $_SESSION['rol'] = $usuario['rol'];
    
    //       // Redirigir según el rol
    //       switch ($usuario['rol']) {
    //         case 'admin':
    //           header('Location: /views/admin/dashboard.php');
    //           break;
    //         case 'soporte':
    //           header('Location: /views/soporte/dashboard.php');
    //           break;
    //         case 'funcionario':
    //           header('Location: /views/funcionarios/dashboard.php');
    //           break;
    //         case 'jefe_soporte':
    //           header('Location: /views/jefe_soporte/dashboard.php');
    //           break;
    //         default:
    //           echo "Rol desconocido";
    //       }
    //     } else {
    //       header('Location: /views/auth/login.php?error=1');
    //     }
    // }
}
