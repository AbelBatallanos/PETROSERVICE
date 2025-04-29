<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PETROSERVICES - Sistema de Soporte Técnico</title>
    <link rel="stylesheet" href="/src/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <div class="logo">
                <a href="#">
                    <span class="logo-icon">P</span>
                    <span class="logo-text">PETROSERVICES-SANTA</span>
                </a>
            </div>
            <nav class="main-nav">
                <ul>
                    <li><a href="homepre.php" class="active">Home</a></li>
                    <li><a href="formulario_solicitud.php">Solicitar Soporte</a></li>
                    <li><a href="">Estado de Solicitud</a></li>
                    <li><a href="contactoprev.php">Contacto</a></li>
                </ul>
            </nav>
       
            <div class="mobile-menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1>Sistema de Soporte Técnico</h1>
                <p class="hero-description">
                    Soluciones rápidas y eficientes para mantener la operación de<br>
                    PETROSERVICES S.A.
                </p>
                <div class="hero-buttons">
                    <a href="#" class="btn btn-primary">Solicitar Soporte</a>
                    <a href="#" class="btn btn-outline">Consultar Estado</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section">
        <div class="container">
            <h2 class="section-title">Nuestros Servicios de Soporte</h2>
            
            <div class="services-grid">
                <!-- Service Card 1 -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-pen-to-square"></i>
                    </div>
                    <h3 class="service-title">Registro de Solicitudes</h3>
                    <p class="service-description">
                        Soluciones personalizadas para cada tipo de problema técnico.
                    </p>
                </div>

                <!-- Service Card 2 -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-file-circle-check"></i>
                    </div>
                    <h3 class="service-title">Seguimiento de Estados</h3>
                    <p class="service-description">
                        Visualiza en tiempo real el estado de tus solicitudes.
                    </p>
                </div>

                <!-- Service Card 3 -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3 class="service-title">Gestión Eficiente</h3>
                    <p class="service-description">
                        Administración rápida de casos por técnicos especializados.
                    </p>
                </div>

                <!-- Service Card 4 -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-chart-column"></i>
                    </div>
                    <h3 class="service-title">Estadísticas y Reportes</h3>
                    <p class="service-description">
                        Reportes detallados para mejorar procesos de soporte.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <h2 class="section-title">Acerca de Nuestro Sistema</h2>
            
            <div class="about-content">
                <p>
                    El sistema de soporte técnico de PETROSERVICES S.A. está diseñado para brindar asistencia rápida y eficiente
                    a todos los empleados de la empresa. Nuestro equipo de técnicos especializados está listo para resolver
                    cualquier problema que pueda surgir en sus actividades diarias.
                </p>
                <p>
                    Con un proceso simplificado de solicitud de soporte, seguimiento de casos y resolución de problemas,
                    garantizamos que todas las incidencias sean atendidas con la mayor brevedad posible, minimizando el
                    impacto en la operación de la empresa.
                </p>
            </div>
        </div>
    </section>

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

                <div class="footer-contact">
                    <h3>Contacto</h3>
                    <div class="footer-info">
                        <p><i class="fas fa-phone"></i> +593 2 123 4567</p>
                        <p><i class="fas fa-envelope"></i> soporte@petroservices.com</p>
                        <p><i class="fas fa-map-marker-alt"></i> Av. Principal 123, Quito - Ecuador</p>
                    </div>
                </div>

                <div class="footer-links">
                    <h3>Enlaces Rápidos</h3>
                    <ul>
                        <li><a href="#">Términos y Condiciones</a></li>
                        <li><a href="#">Política de Privacidad</a></li>
                    </ul>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Simple mobile menu toggle
        document.querySelector('.mobile-menu-toggle').addEventListener('click', function() {
            document.querySelector('.main-nav').classList.toggle('show');
        });
    </script>
</body>
</html>