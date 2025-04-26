<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Account</title>
  <link rel="stylesheet" href="/src/css/formregistro.css">
</head>
<body>

  <div class="container">
    <h1>Registrarse</h1>
    <form class="form">
      <div class="input-group">
        <input type="text" placeholder="Nombre">
        <input type="text" placeholder="Apellidos">
      </div>
      <input type="email" placeholder="Correo electronico">
      <div class="input-group">
        <input name="password"  type="password" placeholder="Contraseña">
        <input name="password-reply"  type="password" placeholder="Repetir Contraseña">
      </div>
      <select name="departamento">
            
      </select>
      <button class="btn primary">Register Account</button>

      <div class="divider"></div>

      <button class="btn google">
        <span class="icon">G</span> Register with Google
      </button>
      <button class="btn facebook">
        <span class="icon">f</span> Register with Facebook
      </button>

      <div class="links">
        <a href="#">Forgot Password?</a>
        <a href="#">Already have an account? Login!</a>
      </div>
    </form>
  </div>

</body>
</html>
