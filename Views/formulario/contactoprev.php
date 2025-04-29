<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PETROSERVICES - Contacto</title>
    <link rel="stylesheet" href="/src/css/contacto.css">
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
                    <li><a href="homepre.php" class="active">Home</a></li>
                    <li><a href="formulario_solicitud.php">Solicitar Soporte</a></li>
                    <li><a href="">Estado de Solicitud</a></li>
                    <li><a href="contactoprev.php">Contacto</a></li>
                </ul>
            </nav>
            <div class="login-button">
                <a href="#" class="btn btn-primary">Iniciar Sesión</a>
            </div>
            <div class="mobile-menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <div class="container">
            <h1 class="page-title">Contacto</h1>

            <div class="contact-container">
                <!-- Contact Form -->
                <div class="contact-form-container">
                    <div class="card">
                        <h2>Envíenos un mensaje</h2>
                        <form class="contact-form">
                            <div class="form-group">
                                <label for="nombre">Nombre completo</label>
                                <input type="text" id="nombre" placeholder="Ingrese su nombre">
                            </div>
                            <div class="form-group">
                                <label for="email">Correo electrónico</label>
                                <input type="email" id="email" placeholder="correo@ejemplo.com">
                            </div>
                            <div class="form-group">
                                <label for="asunto">Asunto</label>
                                <input type="text" id="asunto" placeholder="Asunto del mensaje">
                            </div>
                            <div class="form-group">
                                <label for="mensaje">Mensaje</label>
                                <textarea id="mensaje" placeholder="Escriba su mensaje aquí"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Enviar Mensaje</button>
                        </form>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="contact-info-container">
                    <div class="card">
                        <h2>Información de contacto</h2>
                        <div class="contact-info">
                            <div class="info-item">
                                <div class="info-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="info-content">
                                    <h3>Correo Electrónico</h3>
                                    <p>soporte@petroservices.com</p>
                                </div>
                            </div>
                            <div class="info-item">
                                <div class="info-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="info-content">
                                    <h3>Teléfono</h3>
                                    <p>+593 2 123 4567</p>
                                </div>
                            </div>
                            <div class="info-item">
                                <div class="info-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="info-content">
                                    <h3>Dirección</h3>
                                    <p>Av. Principal 123</p>
                                    <p>Quito, Ecuador</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-20">
                        <h2>Horario de Atención</h2>
                        <div class="schedule">
                            <div class="schedule-item">
                                <span class="day">Lunes - Viernes</span>
                                <span class="hours">8:00 AM - 5:00 PM</span>
                            </div>
                            <div class="schedule-item">
                                <span class="day">Sábado</span>
                                <span class="hours">9:00 AM - 1:00 PM</span>
                            </div>
                            <div class="schedule-item">
                                <span class="day">Domingo</span>
                                <span class="hours">Cerrado</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

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