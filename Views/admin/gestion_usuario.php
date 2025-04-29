
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
                <button class="btn btn-primary">Crear Usuario</button>
            </div>
                
            <div class="table-responsive">
                <table class="users-table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellidos</th>
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
                                    <form method="POST" >
                                        <a href="/admin/actualizar/usuario?id=<?php echo $usuario->id ?>" class="btn btn-sm btn-edit" >Editar</button>
                                        <button class="btn btn-sm btn-delete" name="id" value="<?php echo $usuario->id ?>" >Eliminar</button>
                                    </form>
                                </td>
                            </tr>            
                        <?php } endforeach;  ?>
                        <!-- User 2 -->
                        <tr>
                            <td>Ana Rodríguez</td>
                            <td>arodriguez</td>
                            <td>arodriguez@petroservices.com</td>
                            <td><span class="badge badge-tecnico">Técnico</span></td>
                            <td><span class="badge badge-activo">Activo</span></td>
                            <td class="actions-cell">
                                <button class="btn btn-sm btn-edit">Editar</button>
                                <button class="btn btn-sm btn-delete">Eliminar</button>
                            </td>
                        </tr>
                            
                     
                            
                    
                            
                       
                    </tbody>
                </table>
            </div>
        </div>
    </main>

