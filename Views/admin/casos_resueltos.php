<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PETROSERVICES - Casos Resueltos</title>
    <link rel="stylesheet" href="/src/css/cs_resueltos.css">
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
                <span class="admin-label">Administrador::</span>
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
                <a href="casos_resueltos.php" class="tab-btn active">Casos Resueltos</a>
                <a href="gestion_usuario.php" class="tab-btn">Gestión de Usuarios</a>
            </div>

            <!-- Resolved Cases List -->
            <div class="cases-list">
                <!-- Case 1 -->
                <div class="case-card">
                    <div class="case-header">
                        <div class="case-id">
                            <h3>SOL-2023-008</h3>
                            <span class="case-date">Resuelto: 2023-04-19</span>
                        </div>
                        <div class="case-status">
                            <span class="badge badge-approved">Aprobado</span>
                        </div>
                    </div>
                    
                    <div class="case-body">
                        <div class="case-details">
                            <div class="case-column">
                                <div class="detail-group">
                                    <h4>Empleado</h4>
                                    <p>Luis Morales - Finanzas</p>
                                </div>
                                
                                <div class="detail-group">
                                    <h4>Problema</h4>
                                    <p>Excel se cierra inesperadamente</p>
                                </div>
                                
                                <div class="detail-group">
                                    <h4>Solución</h4>
                                    <p>Se reparó la instalación de Office y se actualizó a la última versión.</p>
                                </div>
                            </div>
                            
                            <div class="case-column tech-column">
                                <div class="detail-group">
                                    <h4>Técnico</h4>
                                    <p>Carlos Ramírez</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Case 2 -->
                <div class="case-card">
                    <div class="case-header">
                        <div class="case-id">
                            <h3>SOL-2023-009</h3>
                            <span class="case-date">Resuelto: 2023-04-16</span>
                        </div>
                        <div class="case-status">
                            <span class="badge badge-approved">Aprobado</span>
                        </div>
                    </div>
                    
                    <div class="case-body">
                        <div class="case-details">
                            <div class="case-column">
                                <div class="detail-group">
                                    <h4>Empleado</h4>
                                    <p>Carmen Suárez - Recursos Humanos</p>
                                </div>
                                
                                <div class="detail-group">
                                    <h4>Problema</h4>
                                    <p>No puede acceder al sistema de nómina</p>
                                </div>
                                
                                <div class="detail-group">
                                    <h4>Solución</h4>
                                    <p>Se restableció la contraseña y se verificaron los permisos de acceso.</p>
                                </div>
                            </div>
                            
                            <div class="case-column tech-column">
                                <div class="detail-group">
                                    <h4>Técnico</h4>
                                    <p>Ana Rodríguez</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Case 3 -->
                <div class="case-card">
                    <div class="case-header">
                        <div class="case-id">
                            <h3>SOL-2023-010</h3>
                            <span class="case-date">Resuelto: 2023-04-23</span>
                        </div>
                        <div class="case-status">
                            <span class="badge badge-rejected">Rechazado</span>
                        </div>
                    </div>
                    
                    <div class="case-body">
                        <div class="case-details">
                            <div class="case-column">
                                <div class="detail-group">
                                    <h4>Empleado</h4>
                                    <p>Jorge Vásquez - Operaciones</p>
                                </div>
                                
                                <div class="detail-group">
                                    <h4>Problema</h4>
                                    <p>El monitor muestra líneas horizontales</p>
                                </div>
                                
                                <div class="detail-group">
                                    <h4>Solución</h4>
                                    <p>Se reemplazó el cable HDMI defectuoso.</p>
                                </div>
                                
                                <div class="observation">
                                    <h4>Observación</h4>
                                    <p>No se verificó si el problema persiste con otro monitor. Por favor, completar el diagnóstico.</p>
                                </div>
                            </div>
                            
                            <div class="case-column tech-column">
                                <div class="detail-group">
                                    <h4>Técnico</h4>
                                    <p>Carlos Ramírez</p>
                                </div>
                            </div>
                        </div>
                    </div>
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