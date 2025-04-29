<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PETROSERVICES - Solicitar Soporte Técnico</title>
    <link rel="stylesheet" href="/src/css/form_solicitud.css">
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
            <h1 class="page-title">Solicitar Soporte Técnico</h1>

            <div class="form-container">
                <div class="support-form-card">
                    <h2 class="form-title">Formulario de solicitud</h2>
                    <p class="form-subtitle">Complete la información para registrar su solicitud de soporte técnico</p>
                    
                    <form class="support-form">
                        <div class="form-group">
                            <label for="nombre">Nombre completo</label>
                            <input type="text" id="nombre" placeholder="Ingrese su nombre completo">
                        </div>
                        
                        <div class="form-group">
                            <label for="departamento">Departamento</label>
                            <div class="select-wrapper">
                                <select id="departamento">
                                    <option value="" disabled selected>Seleccione su departamento</option>
                                    <option value="it">Tecnología</option>
                                    <option value="rrhh">Recursos Humanos</option>
                                    <option value="finanzas">Finanzas</option>
                                    <option value="operaciones">Operaciones</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="descripcion">Descripción del problema</label>
                            <textarea id="descripcion" placeholder="Describa detalladamente el problema que está experimentando"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="prioridad">Prioridad</label>
                            <div class="select-wrapper">
                                <select id="prioridad">
                                    <option value="" disabled selected>Seleccione el nivel de prioridad</option>
                                    <option value="baja">Baja</option>
                                    <option value="media">Media</option>
                                    <option value="alta">Alta</option>
                                    <option value="critica">Crítica</option>
                                </select>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-block">Enviar Solicitud</button>
                    </form>
                    
                    <p class="form-note">Su solicitud será asignada a un técnico según disponibilidad y prioridad.</p>
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
        <div class="copyright">
            <div class="container">
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