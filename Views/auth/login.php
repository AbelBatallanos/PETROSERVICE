
<main>
    <div class="login-container">
        <div class="login-card">
            <div class="logo">
                <span class="logo-icon">P</span>
                <span class="logo-text">PETROSERVICES</span>
            </div>
            
            <h1 class="login-title">Iniciar Sesión</h1>
            <p class="login-subtitle">Ingrese sus credenciales para acceder al sistema de soporte</p>
            
            <form class="login-form" method="POST" action="/iniciarsesion">
                <div class="form-group">
                    <label for="usuario">Correo</label>
                    <input type="text" id="usuario"  name="login[correo]" placeholder="ejemplo@gmail.com" >
                </div>
                
                <div class="form-group">
                    <label for="contrasena">Contraseña</label>
                    <input type="password" id="contrasena"  name="login[password]" placeholder="Contraseña" >
                </div>
                <?php foreach($errores as $error):?>
                    <p class="error-message"> <?php 
                        echo $error?></p>
                <?php endforeach ; ?>

                <input type="submit" class="btn btn-primary" value="Iniciar Sesión"> 
            </form>
            
            <p class="forgot-password">
                Si olvidó su contraseña, contacte al administrador del sistema
            </p>
        </div>
    </div>
</main>