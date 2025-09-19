<?php
/**
 * Template part para a seção de promoções
 * 
 * @package Viaje_Facil_Brasil
 * @since 1.0
 */

$promotions = vfb_get_promotions(3);
?>

<!-- Seção de Promoções -->
<section class="promotions-section">
    <div class="container">
        <h2 class="section-title">
            Promoções em Destaque
        </h2>
        <div class="promotions-grid">
            <?php foreach ($promotions as $promotion) : ?>
                <div class="promotion-card">
                    <div class="promotion-image" style="background-image: url('<?php echo esc_url($promotion['image']); ?>');">
                    </div>
                    <div class="promotion-content">
                        <h3 class="promotion-title"><?php echo esc_html($promotion['title']); ?></h3>
                        <p class="promotion-description"><?php echo esc_html($promotion['description']); ?></p>
                        <div class="promotion-pricing">
                            <span class="promotion-price"><?php echo esc_html($promotion['price']); ?></span>
                            <span class="promotion-original-price"><?php echo esc_html($promotion['original_price']); ?></span>
                        </div>
                        <a href="<?php echo esc_url($promotion['link']); ?>" class="promotion-button">
                            Ver Oferta
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
