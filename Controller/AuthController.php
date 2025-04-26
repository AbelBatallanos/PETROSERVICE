<?php

class AuthController {

    public function login($datos) {
      $usuarioModel = new Usuario();
      $usuario = $usuarioModel->verificarCredenciales($datos['usuario'], $datos['contrasena']);
  
      if ($usuario) {
        session_start();
        $_SESSION['usuario'] = $usuario['nombre'];
        $_SESSION['rol'] = $usuario['rol'];
  
        // Redirigir según el rol
        switch ($usuario['rol']) {
          case 'admin':
            header('Location: /views/admin/dashboard.php');
            break;
          case 'soporte':
            header('Location: /views/soporte/dashboard.php');
            break;
          case 'funcionario':
            header('Location: /views/funcionarios/dashboard.php');
            break;
          case 'jefe_soporte':
            header('Location: /views/jefe_soporte/dashboard.php');
            break;
          default:
            echo "Rol desconocido";
        }
      } else {
        header('Location: /views/auth/login.php?error=1');
      }
    }

    public function IniciarSesion(){
        
    }

}
