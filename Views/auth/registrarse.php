
<main>
    <div class="container">
      <?php if(!empty($errores)){ ?>
       <?php foreach($errores as $error){ ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
       <?php } ?>
      <?php } ?>
      <h1>Registrarse</h1>
    
      <form class="form" method="POST" action="/registrarse">
        <div class="input-group">
          <input name="registro[nombre]" data-tipo="nombre" type="text" placeholder="Nombre" value="<?php echo $usuario->nombre ?>" required>
          <input name="registro[apellidos]" data-tipo="apellidos" type="text" placeholder="Apellidos" value="<?php echo $usuario->apellidos; ?>" require>
        </div>
        <input name="registro[correo]" type="email" data-tipo="correo" placeholder="Correo electronico" value="<?php echo $usuario->correo?>" require>
        <div class="input-group">
          <input name="registro[password]" data-tipo="contraseña"  type="password" placeholder="Contraseña" required>
          <input name="registro[password-reply]" data-tipo="contraseña-reply" class="contraseña_reply" type="password" placeholder="Repetir Contraseña">
        </div>
        
        <select name="registro[iddepartamento]" data-dpto="departamento" required>
              <option value="" selected>--Seleccionar--</option>
              <?php foreach($departamentos as $departamento): ?>
                <option <?php echo $usuario->iddepartamento === $departamento->iddepartamento? 'selected': ''; ?> value="<?php echo $departamento->iddepartamento ?>" > <?php echo $departamento->nombre ;?> </option>
              <?php endforeach ?>  
        </select>
        <input class="btn primary btn-submit" type="submit" value="Registrar">
              
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
</main>

