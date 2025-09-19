<?php
/**
 * Rodapé do tema Viaje Fácil Brasil
 * 
 * @package Viaje_Facil_Brasil
 * @since 1.0
 */
?>

<!-- Footer -->
<footer>
    <div class="footer-content">
        <div class="footer-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/logo-footer.png" alt="<?php bloginfo('name'); ?>">
        </div>
        
        <div class="footer-links">
            <a href="<?php echo esc_url(home_url('/')); ?>">Início</a>
            <a href="#">Pacotes</a>
            <a href="#">Passagens Aéreas</a>
            <a href="#">Hotéis</a>
            <a href="<?php echo esc_url(home_url('/quem-somos')); ?>">Quem Somos</a>
            <a href="#">Contato</a>
        </div>
        
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
