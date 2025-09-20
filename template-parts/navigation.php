<?php
/**
 * Template part para navegação
 * 
 * @package Viaje_Facil_Brasil
 * @since 1.0
 */
?>

<!-- Navigation Menu Desktop -->
<nav class="desktop-menu">
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
<button class="mobile-menu-btn" onclick="toggleMobileMenu()">
    <span></span>
    <span></span>
    <span></span>
</button>

<!-- Mobile Menu -->
<div id="mobile-menu" class="mobile-menu">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'primary',
        'menu_class' => 'mobile-menu-list',
        'container' => false,
        'fallback_cb' => 'vfb_fallback_mobile_menu',
    ));
    ?>
</div>