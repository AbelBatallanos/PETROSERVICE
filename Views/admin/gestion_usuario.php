
<div class="tabs">
    <a href="/admin/CasosPendientes" class="tab-btn ">Pendientes de Revisión</a>
    <a href="/admin/CasosResueltos" class="tab-btn">Casos Resueltos</a>
    <a href="/admin" class="tab-btn active">Gestión de Usuarios</a>
</div>
    <main>
        <!-- User Management Section -->
        <div class="user-management">
            <div class="user-management-header">
                <h2 class="section-title">Lista de Usuarios</h2>
                <a href="/registrarse" class="btn btn-primary">Crear Usuario</a>
            </div>
                
            <div class="table-responsive">
                <table class="users-table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Departamento</th>
                            <th>Correo</th>
                            <th>Rol</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- User 1 -->

                        <?php foreach($usuarios as $usuario): if ($usuario->correo !== "diego@gmail.com"){  ?>
                            <tr>
                                <td><?php echo $usuario->nombre ?></td>
                                <td><?php echo $usuario->apellidos ?></td>
                                <td>
                                <?php foreach($departamentos as $departamento): ?>
                                    <?php if($departamento->iddepartamento === $usuario->iddepartamento): ?>
                                        <?php echo $departamento->nombre;  ?>
                                    <?php endif;?>
                                <?php endforeach; ?>  
                                </td>
                                <td><?php echo $usuario->correo ?></td>
                                <td>
                                <?php 
                                    foreach ($roles as $rol) {
                                        if ( ($usuario->idrol == $rol->id) ) {
                                            echo '<span class="badge badge-' . strtolower($rol->nombre) . '">' . ucfirst($rol->nombre) . '</span>';
                                            break;
                                        }
                                    }
                                ?>
                                </td>
                                <td><span class="badge badge-activo">Activo</span></td>
                                <td class="actions-cell">
                                    <a href="/admin/actualizar/usuario?id=<?php echo $usuario->id; ?>" class="btn btn-sm btn-edit">Editar</a>
                                    
                                    <form method="POST">
                                        <input type="hidden" name="id" value="<?php echo $usuario->id; ?>">  
                                        
                                        <button type="submit" name="ele" class="btn btn-sm  btn-delete" >Eliminar</button>
                                    </form>
                                </td>
                            </tr>            
                        <?php } endforeach;  ?>                 
                    </tbody>
                </table>
            </div>
        </div>
    </main>

