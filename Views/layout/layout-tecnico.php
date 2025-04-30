<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PETROSERVICES - Paneles</title>
    <link rel="stylesheet" href="/src/css/tecnicostyle.css">
</head>
<body>
   
    <div class="panel" id="panel-tecnico-pendientes">
        <!-- Header -->
        <header>
            <div class="logo">
                <div class="logo-icon">P</div>
                <div class="logo-text">PETROSERVICES</div>
            </div>
           
            <div class="auth-button">
                <p class="auth-rol">Tecnico: <?php echo $_SESSION["nombre"]." ".$_SESSION["apellidos"] ?> </p>
                <a href="/logout" class="btn btn-primary">Cerrar Sesion</a>
            </div>
        </header>
        <h1 class="panel-title">Panel de Técnico</h1>
            <!-- Dashboard Cards -->
            <div class="dashboard-cards">
                <div class="card">
                    <div class="card-header">
                        <span class="card-label">Tickets Pendientes</span>
                        <span class="badge orange">3</span>
                    </div>
                    <div class="card-content">
                        <div class="card-value">3</div>
                        <div class="card-description">Pendientes de asignación</div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header">
                        <span class="card-label">En Progreso</span>
                        <span class="badge blue">1</span>
                    </div>
                    <div class="card-content">
                        <div class="card-value">1</div>
                        <div class="card-description">Tickets siendo atendidos</div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <span class="card-label">Completados Hoy</span>
                        <span class="badge green">2</span>
                    </div>
                    <div class="card-content">
                        <div class="card-value">2</div>
                        <div class="card-description">Tickets resueltos hoy</div>
                    </div>
                </div>
            </div>
        
             <div class="tab-navigation">
                <a href="/panel/tecnico" class="tab active">Tickets Pendientes</a>
                <a href="/panel/tecnico/progreso" class="tab">En Progreso</a>
            </div>
    <?php echo $contenido; ?>

        <footer>
            <div class="footer-content">
                <div class="footer-logo">
                    <div class="logo">
                        <div class="logo-icon">P</div>
                        <div class="logo-text">PETROSERVICES</div>
                    </div>
                    <p class="company-description">
                        Sistema de soporte técnico para empleados de PETROSERVICES S.A.
                        Soluciones rápidas y eficientes para mantener su operación
                        funcionando sin problemas.
                    </p>
                </div>


                <div class="footer-section">
              

                </div>

                <div class="footer-section">
                    <h3>Contacto</h3>
                    <div class="contact-info">
                        <p><i class="fas fa-phone"></i> +593 2 123 4567</p>
                        <p><i class="fas fa-envelope"></i> soporte@petroservices.com</p>
                        <p><i class="fas fa-map-marker-alt"></i> Av. Principal 123, Quito - Ecuador</p>
                    </div>
                </div>

            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 PETROSERVICES S.A. Todos los derechos reservados.</p>
            </div>
        </footer>
    </div>
    <script src="/src/js/utils/panel-tecnico.js">  
    </script>
</body>
</html>