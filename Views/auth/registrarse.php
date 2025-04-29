
<main>
    <section class="register-section">
        <div class="container">
            <div class="register-container">
                <div class="register-card">
                    <div class="register-header">
                        <h1>Crear Cuenta</h1>
                        <p>Complete el formulario para registrarse en el sistema de soporte</p>
                    </div>
                    
                    <form class="register-form" method="POST" action="/registrarse">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" id="nombre" placeholder="Ingrese su nombre" name="registro[nombre]">
                            </div>
                            
                            <div class="form-group">
                                <label for="apellidos">Apellidos</label>
                                <input type="text" id="apellidos" placeholder="Ingrese sus apellidos" name="registro[apellidos]">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="correo">Correo Electrónico</label>
                            <input type="email" id="correo" placeholder="ejemplo@petroservices.com" name="registro[correo]">
                        </div>
                        
                        <div class="form-group">
                            <label for="contrasena">Contraseña</label>
                            <div class="password-input">
                                <input type="password" id="contrasena" placeholder="Cree una contraseña segura" name="registro[password]">
                                <button type="button" class="toggle-password">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                            <div class="password-strength">
                                <div class="strength-bar">
                                    <div class="strength-progress"></div>
                                </div>
                                <span class="strength-text">Fuerza de contraseña</span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="departamento">Departamento</label>
                            <div class="select-wrapper">
                                <select id="departamento" name="registro[iddepartamento]">

                                    <option value="" disabled selected>Seleccione su departamento</option>
                                    <?php foreach($departamentos as $departamento): ?>
                                        <option  value="<?php echo $departamento->iddepartamento ?>" >
                                         <?php echo $departamento->nombre ;?>
                                         </option>
                                    <?php endforeach ?>  
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group terms-group">
                            <label class="checkbox-container">
                                <input type="checkbox" id="terminos">
                                <span class="checkmark"></span>
                                <span class="terms-text">Acepto los <a href="#">Términos y Condiciones</a> y la <a href="#">Política de Privacidad</a></span>
                            </label>
                        </div>
                        <?php if(!empty($errores)){ ?>
                        <?php foreach($errores as $error){ ?>
                        <div class="alerta error">
                            <?php echo $error; ?>
                        </div>
                        <?php } ?>
                        <?php } ?>
                        <input class="btn btn-primary btn-block" type="submit" value="Registrar">
                    </form>
                    
                    <div class="register-footer">
                        <p>¿Ya tiene una cuenta? <a href="#">Iniciar Sesión</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
    