<?php
/**
 * Template part para a seção de serviços
 * 
 * @package Viaje_Facil_Brasil
 * @since 1.0
 */

$services = vfb_get_services();
?>

<!-- Services Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Nossos Serviços</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Service 1 -->
            <div class="text-center">
                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl">✈️</span>
                </div>
                <h3 class="text-xl font-bold mb-2 text-gray-800">Passagens Aéreas</h3>
                <p class="text-gray-600">Melhores preços e conexões para qualquer destino</p>
            </div>

            <!-- Service 2 -->
            <div class="text-center">
                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl">🏨</span>
                </div>
                <h3 class="text-xl font-bold mb-2 text-gray-800">Hotéis</h3>
                <p class="text-gray-600">Acomodações selecionadas para sua comodidade</p>
            </div>

            <!-- Service 3 -->
            <div class="text-center">
                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl">📦</span>
                </div>
                <h3 class="text-xl font-bold mb-2 text-gray-800">Pacotes Completos</h3>
                <p class="text-gray-600">Viagens organizadas com tudo incluído</p>
            </div>

            <!-- Service 4 -->
            <div class="text-center">
                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl">🛡️</span>
                </div>
                <h3 class="text-xl font-bold mb-2 text-gray-800">Seguros de Viagem</h3>
                <p class="text-gray-600">Proteção completa para sua tranquilidade</p>
            </div>
        </div>
    </div>
</section>
