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
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class('font-sans'); ?>>
<?php wp_body_open(); ?>

<!-- Header -->
<header class="bg-white shadow-lg fixed w-full top-0 z-40">
    <div class="container mx-auto px-4 py-2">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <div class="logo-container">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/logo-principal.png" alt="<?php bloginfo('name'); ?>" class="logo">
                </a>
            </div>

            <!-- Navigation -->
            <div class="navigation-container">
                <?php get_template_part('template-parts/navigation'); ?>
            </div>
        </div>
    </div>
</header>