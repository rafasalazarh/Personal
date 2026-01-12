    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3><?php bloginfo('name'); ?></h3>
                    <p><?php bloginfo('description'); ?></p>
                </div>
                <div class="footer-section">
                    <h4>Enlaces Rápidos</h4>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>#inicio">Inicio</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>#servicios">Servicios</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>#propiedades">Propiedades</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>#contacto">Contacto</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Síguenos</h4>
                    <div class="social-links">
                        <a href="#" aria-label="Facebook">📘 Facebook</a>
                        <a href="#" aria-label="Instagram">📷 Instagram</a>
                        <a href="#" aria-label="LinkedIn">💼 LinkedIn</a>
                        <a href="#" aria-label="Twitter">🐦 Twitter</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

<?php wp_footer(); ?>
</body>
</html>

