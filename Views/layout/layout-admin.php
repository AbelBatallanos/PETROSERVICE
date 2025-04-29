<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PETROSERVICES - Panel de Administrador</title>
    <link rel="stylesheet" href="/src/css/styleAdmin.css">
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
                <a href="/logout" class="btn btn-outline">Cerrar sesión</a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    
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

    <?php echo $contenido ?>

    <!-- <script src="/src/js/utils/tabs.js" type="module"></script> -->
</body>
</html>
