<main>
    <div class="form-container">
        <h2>Actualizar Usuario</h2>
        <form action="/admin/actualizar_usuario" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos:</label>
                <input type="text" id="apellidos" name="apellidos" required>
            </div>
            <div class="form-group">
                <label for="correo">Correo:</label>
                <input type="email" id="correo" name="correo" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="iddepartamento">Departamento:</label>
                <select id="iddepartamento" name="iddepartamento" required>
                    <option value="" selected>--Seleccionar--</option>
                    <?php foreach($departamentos as $departamento): ?>
                        <option value="<?php echo $departamento->iddepartamento ?>"> <?php echo $departamento->nombre ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="idrol">Rol:</label>
                <select id="idrol" name="idrol" required>
                    <option value="" selected>--Seleccionar--</option>
                    <?php foreach($roles as $rol): ?>
                        <option value="<?php echo $rol->id ?>"><?php echo $rol->nombre ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <button type="submit">Actualizar</button>
            </div>
        </form>
    </div>
</main>