<?php
/**
 * Template part para a seção hero
 * 
 * @package Viaje_Facil_Brasil
 * @since 1.0
 */
?>

<!-- Hero Section with Carousel -->
<section class="hero-bg relative min-h-screen flex items-center justify-center text-white">
    <div class="absolute inset-0 bg-black bg-opacity-40"></div>

    <div class="relative z-10 text-center px-4">
        <h1 class="destination-name text-4xl md:text-6xl font-bold mb-4 font-playfair opacity-0 transform translate-y-8 transition-all duration-1000">
            Fernando de Noronha
        </h1>
        <p class="destination-quote text-lg md:text-xl mb-8 max-w-2xl mx-auto opacity-0 transform translate-y-8 transition-all duration-1000 delay-300">
            "O paraíso brasileiro onde o tempo para e a natureza encanta"
        </p>
        <a href="#search" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded-lg transition-colors duration-300 inline-block">
            Planeje Sua Viagem
        </a>
    </div>

    <!-- Carousel Indicators -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex space-x-3">
        <button class="carousel-indicator w-3 h-3 bg-white rounded-full bg-opacity-50 transition-all duration-300" data-slide="0"></button>
        <button class="carousel-indicator w-3 h-3 bg-white rounded-full bg-opacity-50 transition-all duration-300" data-slide="1"></button>
        <button class="carousel-indicator w-3 h-3 bg-white rounded-full bg-opacity-50 transition-all duration-300" data-slide="2"></button>
        <button class="carousel-indicator w-3 h-3 bg-white rounded-full bg-opacity-50 transition-all duration-300" data-slide="3"></button>
        <button class="carousel-indicator w-3 h-3 bg-white rounded-full bg-opacity-50 transition-all duration-300" data-slide="4"></button>
        <button class="carousel-indicator w-3 h-3 bg-white rounded-full bg-opacity-50 transition-all duration-300" data-slide="5"></button>
        <button class="carousel-indicator w-3 h-3 bg-white rounded-full bg-opacity-50 transition-all duration-300" data-slide="6"></button>
    </div>
</section>
