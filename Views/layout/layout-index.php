
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PETROSERVICES - Sistema de Soporte Técnico</title>
    <link rel="stylesheet" href="/src/css/pruebahome.css">
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
            
            <!-- <nav class="main-nav">
                <ul>
                    <li><a href="#" class="active">Home</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav> -->
            <!-- <div class="auth-buttons">
                <a href="/registrarse" class="btn btn-outline">Registrarse</a>
                <a href="/iniciarsesion" class="btn btn-primary">Iniciar Sesión</a>
            </div> -->
            <div class="mobile-menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1>Bienvenido al Sistema de Soporte Técnico</h1>
                <p class="hero-description">
                    La plataforma integral para gestionar y resolver todas sus necesidades de soporte técnico.<br>
                    Soluciones rápidas y eficientes para mantener la operación de PETROSERVICES S.A.
                </p>
                <div class="hero-buttons">
                    <a href="/iniciarsesion" class="btn btn-primary btn-lg">Iniciar Sesión</a>
                    <a href="/registrarse" class="btn btn-outline btn-lg">Crear Cuenta</a>
                </div>
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

                <div class="footer-links">
                    <!-- <h3>Enlaces Rápidos</h3>
                    <ul>
                        <li><a href="#">Iniciar Sesión</a></li>
                        <li><a href="#">Registrarse</a></li>
                        <li><a href="#">Servicios</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul> -->
                </div>

                <div class="footer-contact">
                    <h3>Contacto</h3>
                    <div class="footer-info">
                        <p><i class="fas fa-phone"></i> +593 2 123 4567</p>
                        <p><i class="fas fa-envelope"></i> soporte@petroservices.com</p>
                        <p><i class="fas fa-map-marker-alt"></i> Av. Principal 123, Quito - Ecuador</p>
                    </div>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2025 PETROSERVICES S.A. Todos los derechos reservados.</p>
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