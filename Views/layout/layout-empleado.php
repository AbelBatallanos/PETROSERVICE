<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PETROSERVICES - Solicitud de Soporte</title>
    <link rel="stylesheet" href="/src/css/styleEmpleado.css">
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
            <nav class="main-nav">
                <ul>
                    <li><a href="/panel" class="tab">Estado de Solicitud</a></li>
                    <li><a href="/formulario/solicitud" class="tab active">Solicitar Soporte</a></li>
                </ul>
            </nav>
            <div class="user-menu">
                <div class="user-info">
                
                    <span class="user-name"><?php  echo $_SESSION["nombre"]." " .$_SESSION["apellidos"] ;?></span>
                    <span class="user-role">Empleado</span>
                </div>
                <div class="user-avatar">
                    <i class="fas fa-user"></i>
                </div>
                <div class="dropdown-menu">
                    <a href="#"><i class="fas fa-user-circle"></i> Mi Perfil</a>
                    <a href="#"><i class="fas fa-cog"></i> Configuración</a>
                    <a href="/logout"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a>
                </div>
            </div>
            <div class="mobile-menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
</header>

<h2 class="title-panel">Panel de Empleado</h2>
 
    <?php echo $contenido; ?>
 
 
 
 
 <!-- Footer -->
<footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <div class="logo">
                        <span class="logo-icon">P</span>
                        <span class="logo-text">PETROSERVICES</span>
                    </div>
                    <p class="company-description">
                        Sistema de soporte técnico para empleados de PETROSERVICES S.A.
                        Soluciones rápidas y eficientes para mantener su operación
                        funcionando sin problemas.
                    </p>
                </div>

                <div class="footer-links"></div>

                <div class="footer-contact">
                    <h3>Soporte Técnico</h3>
                    <div class="footer-info">
                        <p><i class="fas fa-phone"></i> +593 2 123 4567</p>
                        <p><i class="fas fa-envelope"></i> soporte@petroservices.com</p>
                        <p><i class="fas fa-clock"></i> Lun - Vie: 8:00 AM - 5:00 PM</p>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2025 PETROSERVICES S.A. Todos los derechos reservados.</p>
            </div>
        </div>
</footer>
    
</body>
</html>