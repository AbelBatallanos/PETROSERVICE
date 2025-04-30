<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PETROSERVICES - Registro de Usuario</title>
    <link rel="stylesheet" href="/src/css/regs.css">
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

            <div class="mobile-menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>


        <?php echo $contenido ?>


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

                <div class="footer-links"> </div>

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
        
        // Toggle password visibility
        document.querySelector('.toggle-password').addEventListener('click', function() {
            const passwordInput = document.getElementById('contrasena');
            const icon = this.querySelector('i');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
        
        // Simple password strength indicator
        document.getElementById('contrasena').addEventListener('input', function() {
            const password = this.value;
            const strengthBar = document.querySelector('.strength-progress');
            const strengthText = document.querySelector('.strength-text');
            
            // Calculate strength
            let strength = 0;
            if (password.length > 6) strength += 20;
            if (password.length > 10) strength += 20;
            if (/[A-Z]/.test(password)) strength += 20;
            if (/[0-9]/.test(password)) strength += 20;
            if (/[^A-Za-z0-9]/.test(password)) strength += 20;
            
            // Update UI
            strengthBar.style.width = strength + '%';
            
            if (strength < 40) {
                strengthBar.style.backgroundColor = '#ff4d4d';
                strengthText.textContent = 'Débil';
            } else if (strength < 80) {
                strengthBar.style.backgroundColor = '#ffa64d';
                strengthText.textContent = 'Media';
            } else {
                strengthBar.style.backgroundColor = '#2ecc71';
                strengthText.textContent = 'Fuerte';
            }
        });
    </script>
</body>
</html>