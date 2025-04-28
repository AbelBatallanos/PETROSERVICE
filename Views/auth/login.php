
    <div class="login-container">
        <div class="login-box">
            <h2>Iniciar Sesión</h2>
            
            <form method="POST" action="/iniciarsesion">
                <label for="email">Correo</label>
                <input type="email" id="email" placeholder="ejemplo@gmail.com" name="login[correo]"  >

                <label for="password">Contraseña</label>
                <input type="password" id="password" name="login[password]" placeholder="123456" >

                <div class="options">
                    <a href="#">Forgot your password?</a>
                </div>

                <div class="checkbox">
                    <input type="checkbox" id="remember">
                    <label for="remember">Remember password</label>
                </div>

                <button type="submit" class="btn-login">Iniciar sesión</button>
            </form>

            <div class="signup-link">
                New user? <a href="#">Create an account!</a>
            </div>
        </div>
    </div>

