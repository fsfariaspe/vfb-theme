<?php
/**
 * Cabeçalho do tema Viaje Fácil Brasil
 * 
 * @package Viaje_Facil_Brasil
 * @since 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/logos/favicon.ico">
    
    <!-- Motor de busca Oner -->
    <link rel="stylesheet" href="https://static.onertravel.com/widget/search/production/styles.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class('font-sans'); ?>>
<?php wp_body_open(); ?>

<!-- Header -->
<header>
    <div class="container">
        <div class="header-content">
            <!-- Logo -->
            <div class="logo-section">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/logo-principal.png" alt="<?php bloginfo('name'); ?>" class="logo">
                </a>
            </div>

            <!-- Navigation -->
            <div class="nav-section">
                <?php get_template_part('template-parts/navigation'); ?>
            </div>
        </div>
    </div>
    <!-- Botão Hambúrguer Mobile -->
    <button class="mobile-menu-toggle mobile-menu-btn" aria-label="Abrir menu" onclick="toggleMobileMenu()">
        <span></span>
        <span></span>
        <span></span>
    </button>

    <!-- Overlay do Menu Mobile -->
    <div id="mobile-menu-overlay" class="mobile-menu-overlay" onclick="closeMobileMenu()"></div>

    <!-- Menu Mobile -->
    <nav id="mobile-menu" class="mobile-menu" aria-label="Menu Mobile">
        <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'menu_class' => 'mobile-menu-list',
                'container' => false,
            ]);
        ?>
    </nav>
</header>