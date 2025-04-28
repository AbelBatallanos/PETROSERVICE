<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PETROSERVICES - Panel de Administrador</title>
    <link rel="stylesheet" href="/src/css/panelAdmin.css">
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
                <!-- Card 1 -->
                <div class="stat-card">
                    <div class="stat-info">
                        <h3 class="stat-title">Solicitudes Nuevas</h3>
                        <p class="stat-value">3</p>
                    </div>
                    <div class="stat-icon blue-light">
                        <i class="fas fa-chart-line"></i>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="stat-card">
                    <div class="stat-info">
                        <h3 class="stat-title">Casos Resueltos</h3>
                        <p class="stat-value">12</p>
                    </div>
                    <div class="stat-icon green-light">
                        <i class="fas fa-file-circle-check"></i>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="stat-card">
                    <div class="stat-info">
                        <h3 class="stat-title">Usuarios Activos</h3>
                        <p class="stat-value">4</p>
                    </div>
                    <div class="stat-icon purple-light">
                        <i class="fas fa-user"></i>
                    </div>
                </div>

                <!-- Card 4 -->
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
                <a href="panelAdmin.php" class="tab-btn active">Pendientes de Revisión</a>
                <a href="casos_resueltos.php" class="tab-btn">Casos Resueltos</a>
                <a href="gestion_usuario.php" class="tab-btn">Gestión de Usuarios</a>
            </div>

            <!-- Tickets List -->
            <div class="tickets-list">
                <!-- Ticket 1 -->
                <div class="ticket-card">
                    <div class="ticket-header">
                        <div class="ticket-id">
                            <h3>SOL-2023-001</h3>
                            <span class="ticket-status">Resuelto: 2023-04-21</span>
                        </div>
                    </div>
                    
                    <div class="ticket-body">
                        <div class="ticket-details">
                            <div class="ticket-column">
                                <div class="detail-group">
                                    <h4>Empleado</h4>
                                    <p>Juan Pérez - Producción</p>
                                </div>
                                
                                <div class="detail-group">
                                    <h4>Problema</h4>
                                    <p>La computadora no enciende</p>
                                </div>
                                
                                <div class="detail-group">
                                    <h4>Solución aplicada</h4>
                                    <p>Se reemplazó la fuente de poder por una nueva.</p>
                                </div>
                                
                                <div class="detail-group">
                                    <h4>Materiales utilizados</h4>
                                    <p>Fuente de poder ATX 650W</p>
                                </div>
                                
                                <div class="detail-group">
                                    <h4>Tiempo de resolución</h4>
                                    <p>Entre 30 minutos y 1 hora</p>
                                </div>
                            </div>
                            
                            <div class="ticket-column tech-column">
                                <div class="detail-group">
                                    <h4>Técnico</h4>
                                    <p>Carlos Ramírez</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="ticket-actions">
                            <button class="btn btn-reject"><i class="fas fa-times"></i> Rechazar</button>
                            <button class="btn btn-approve"><i class="fas fa-check"></i> Aprobar</button>
                        </div>
                    </div>
                </div>

                <!-- Ticket 2 -->
                <div class="ticket-card">
                    <div class="ticket-header">
                        <div class="ticket-id">
                            <h3>SOL-2023-007</h3>
                            <span class="ticket-status">Resuelto: 2023-04-26</span>
                        </div>
                    </div>
                    
                    <div class="ticket-body">
                        <div class="ticket-details">
                            <div class="ticket-column">
                                <div class="detail-group">
                                    <h4>Empleado</h4>
                                    <p>Diana Mendoza - Administrativo</p>
                                </div>
                                
                                <div class="detail-group">
                                    <h4>Problema</h4>
                                    <p>No puedo imprimir documentos desde mi computadora</p>
                                </div>
                                
                                <div class="detail-group">
                                    <h4>Solución aplicada</h4>
                                    <p>Se reinstalaron los drivers de la impresora y se verificó la conexión de red.</p>
                                </div>
                                
                                <div class="detail-group">
                                    <h4>Tiempo de resolución</h4>
                                    <p>Menos de 30 minutos</p>
                                </div>
                            </div>
                            
                            <div class="ticket-column tech-column">
                                <div class="detail-group">
                                    <h4>Técnico</h4>
                                    <p>Ana Rodríguez</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="ticket-actions">
                            <button class="btn btn-reject"><i class="fas fa-times"></i> Rechazar</button>
                            <button class="btn btn-approve"><i class="fas fa-check"></i> Aprobar</button>
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