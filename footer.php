<?php
/**
 * Rodapé do tema Viaje Fácil Brasil
 * 
 * @package Viaje_Facil_Brasil
 * @since 1.0
 */
?>

<!-- Footer -->
<footer class="footer">
    <div class="footer-content">
        <div class="footer-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/logo-footer.png" alt="<?php bloginfo('name'); ?>">
        </div>
        <ul class="footer-links">
            <li><a href="<?php echo esc_url(home_url('/')); ?>">Início</a></li>
            <li><a href="#">Pacotes</a></li>
            <li><a href="#">Passagens Aéreas</a></li>
            <li><a href="#">Hotéis</a></li>
            <li><a href="<?php echo esc_url(home_url('/quem-somos')); ?>">Quem Somos</a></li>
            <li><a href="#">Contato</a></li>
        </ul>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Todos os direitos reservados.</p>
            <p>📞 (81) 99242-9403 | 📧 atendimento@viajefacilbrasil.com.br | 📍 Recife/PE</p>
        </div>
    </div>
</footer>

<!-- JavaScript Principal -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

<?php wp_footer(); ?>
</body>
</html>
