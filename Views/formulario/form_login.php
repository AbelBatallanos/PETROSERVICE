<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PETROSERVICES - Iniciar Sesión</title>
    <link rel="stylesheet" href="/src/css/form_login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <div class="logo">
                <span class="logo-icon">P</span>
                <span class="logo-text">PETROSERVICES</span>
            </div>
            
            <h1 class="login-title">Iniciar Sesión</h1>
            <p class="login-subtitle">Ingrese sus credenciales para acceder al sistema de soporte</p>
            
            <form class="login-form">
                <div class="form-group">
                    <label for="usuario">Usuario</label>
                    <input type="text" id="usuario" placeholder="Nombre de usuario">
                </div>
                
                <div class="form-group">
                    <label for="contrasena">Contraseña</label>
                    <input type="password" id="contrasena" placeholder="Contraseña">
                </div>
                
                <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
            </form>
            
            <p class="forgot-password">
                Si olvidó su contraseña, contacte al administrador del sistema
            </p>
        </div>
    </div>
</body>
</html>