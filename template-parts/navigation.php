<?php
/**
 * Template part para navegação
 * 
 * @package Viaje_Facil_Brasil
 * @since 1.0
 */
?>

<!-- Navigation Menu Desktop -->
<nav class="desktop-nav">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'primary',
        'menu_class' => 'desktop-menu-list',
        'container' => false,
        'fallback_cb' => 'vfb_fallback_menu',
    ));
    ?>
</nav>

<!-- Mobile Menu Button -->
<button class="mobile-menu-toggle" onclick="toggleMobileMenu()" aria-label="Abrir menu">
    <span class="hamburger-line"></span>
    <span class="hamburger-line"></span>
    <span class="hamburger-line"></span>
</button>

<!-- Mobile Menu Overlay -->
<div id="mobile-menu-overlay" class="mobile-menu-overlay" onclick="closeMobileMenu()"></div>

<!-- Mobile Menu -->
<div id="mobile-menu" class="mobile-menu">
    <div class="mobile-menu-header">
        <h3>Menu</h3>
        <button class="mobile-menu-close" onclick="closeMobileMenu()" aria-label="Fechar menu">
            <svg class="close-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
    
    <div class="mobile-menu-content">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class' => 'mobile-menu-list',
            'container' => false,
            'fallback_cb' => 'vfb_fallback_mobile_menu',
        ));
        ?>
    </div>
</div>