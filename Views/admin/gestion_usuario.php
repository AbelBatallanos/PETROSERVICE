<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PETROSERVICES - Gestión de Usuarios</title>
    <link rel="stylesheet" href="/src/css/gestion_usuario.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <div class="logo">
                <a href="#">
                    <span class="logo-icon">P</span>
                    <span class="logo-text">PETROSERVICES</span>
                </a>
            </div>
            <div class="admin-info">
                <span class="admin-label">Administrador:</span>
                <span class="admin-name">Administrador</span>
                <button class="btn btn-outline">Cerrar sesión</button>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <div class="container">
            <h1 class="page-title">Panel de Administrador</h1>

            <!-- Stats Cards -->
            <div class="stats-grid">
                <!-- Stat Card 1 -->
                <div class="stat-card">
                    <div class="stat-info">
                        <h3 class="stat-title">Solicitudes Nuevas</h3>
                        <p class="stat-value">3</p>
                    </div>
                    <div class="stat-icon blue-light">
                        <i class="fas fa-wave-square"></i>
                    </div>
                </div>

                <!-- Stat Card 2 -->
                <div class="stat-card">
                    <div class="stat-info">
                        <h3 class="stat-title">Casos Resueltos</h3>
                        <p class="stat-value">12</p>
                    </div>
                    <div class="stat-icon green-light">
                        <i class="fas fa-file-check"></i>
                    </div>
                </div>

                <!-- Stat Card 3 -->
                <div class="stat-card">
                    <div class="stat-info">
                        <h3 class="stat-title">Usuarios Activos</h3>
                        <p class="stat-value">4</p>
                    </div>
                    <div class="stat-icon purple-light">
                        <i class="fas fa-user"></i>
                    </div>
                </div>

                <!-- Stat Card 4 -->
                <div class="stat-card">
                    <div class="stat-info">
                        <h3 class="stat-title">Técnicos</h3>
                        <p class="stat-value">2</p>
                    </div>
                    <div class="stat-icon orange-light">
                        <i class="fas fa-chart-simple"></i>
                    </div>
                </div>
            </div>

            <!-- Tabs -->
            <div class="tabs">
                <a href="panelAdmin.php" class="tab-btn">Pendientes de Revisión</a>
                <a href="casos_resueltos.php" class="tab-btn ">Casos Resueltos</a>
                <a href="gestion_usuario.php" class="tab-btn active">Gestión de Usuarios</a>
            </div>

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
                                <th>Usuario</th>
                                <th>Correo</th>
                                <th>Rol</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- User 1 -->
                            <tr>
                                <td>Carlos Ramírez</td>
                                <td>cramirez</td>
                                <td>cramirez@petroservices.com</td>
                                <td><span class="badge badge-tecnico">Técnico</span></td>
                                <td><span class="badge badge-activo">Activo</span></td>
                                <td class="actions-cell">
                                    <button class="btn btn-sm btn-edit">Editar</button>
                                    <button class="btn btn-sm btn-delete">Eliminar</button>
                                </td>
                            </tr>
                            
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
                            
                            <!-- User 3 -->
                            <tr>
                                <td>Juan Pérez</td>
                                <td>jperez</td>
                                <td>jperez@petroservices.com</td>
                                <td><span class="badge badge-empleado">Empleado</span></td>
                                <td><span class="badge badge-activo">Activo</span></td>
                                <td class="actions-cell">
                                    <button class="btn btn-sm btn-edit">Editar</button>
                                    <button class="btn btn-sm btn-delete">Eliminar</button>
                                </td>
                            </tr>
                            
                            <!-- User 4 -->
                            <tr>
                                <td>María López</td>
                                <td>mlopez</td>
                                <td>mlopez@petroservices.com</td>
                                <td><span class="badge badge-empleado">Empleado</span></td>
                                <td><span class="badge badge-activo">Activo</span></td>
                                <td class="actions-cell">
                                    <button class="btn btn-sm btn-edit">Editar</button>
                                    <button class="btn btn-sm btn-delete">Eliminar</button>
                                </td>
                            </tr>
                            
                            <!-- User 5 -->
                            <tr>
                                <td>Roberto Martínez</td>
                                <td>rmartinez</td>
                                <td>rmartinez@petroservices.com</td>
                                <td><span class="badge badge-empleado">Empleado</span></td>
                                <td><span class="badge badge-inactivo">Inactivo</span></td>
                                <td class="actions-cell">
                                    <button class="btn btn-sm btn-edit">Editar</button>
                                    <button class="btn btn-sm btn-delete">Eliminar</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <script>
        // Simple tab functionality
        const tabButtons = document.querySelectorAll('.tab-btn');
        
        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                tabButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');
            });
        });
    </script>
</body>
</html>