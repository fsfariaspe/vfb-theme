<?php
/**
 * Template part para navegação
 * 
 * @package Viaje_Facil_Brasil
 * @since 1.0
 */
?>

<!-- Navigation Menu -->
<nav class="hidden md:flex">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'primary',
        'menu_class' => 'flex space-x-8',
        'container' => false,
        'fallback_cb' => 'vfb_fallback_menu',
    ));
    ?>
</nav>

<!-- Mobile Menu Button -->
<button class="md:hidden text-gray-700" onclick="toggleMobileMenu()">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
    </svg>
</button>

<!-- Mobile Menu -->
<div id="mobile-menu" class="md:hidden hidden">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'primary',
        'menu_class' => 'mobile-menu-list',
        'container' => false,
        'fallback_cb' => 'vfb_fallback_mobile_menu',
    ));
    ?>
</div>
