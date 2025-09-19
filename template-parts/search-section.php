<?php
/**
 * Template part para a seção de busca dedicada
 * 
 * @package Viaje_Facil_Brasil
 * @since 1.0
 */
?>

<!-- Search Section -->
<section id="search" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">Encontre Sua Próxima Aventura</h2>

            <!-- Search Tabs -->
            <div class="flex justify-center mb-8">
                <div class="bg-white rounded-lg p-1 shadow-sm">
                    <button class="search-tab active px-6 py-3 rounded-md font-medium transition-colors" data-type="packages">
                        📦 Pacotes
                    </button>
                    <button class="search-tab px-6 py-3 rounded-md font-medium transition-colors" data-type="flights">
                        ✈️ Passagens
                    </button>
                    <button class="search-tab px-6 py-3 rounded-md font-medium transition-colors" data-type="hotels">
                        🏨 Hotéis
                    </button>
                </div>
            </div>

            <!-- Search Form -->
            <form class="bg-white rounded-lg shadow-lg p-6" onsubmit="searchDestinations(event)">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-6">
                    <!-- Origin -->
                    <div>
                        <label for="origin-input" class="block text-sm font-medium text-gray-700 mb-2">Origem</label>
                        <input type="text" id="origin-input" placeholder="Cidade de origem"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <!-- Destination -->
                    <div>
                        <label for="destination-input" class="block text-sm font-medium text-gray-700 mb-2">Destino</label>
                        <input type="text" id="destination-input" placeholder="Para onde você quer ir?"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <!-- Departure Date -->
                    <div>
                        <label for="departure-date" class="block text-sm font-medium text-gray-700 mb-2">Data de Ida</label>
                        <input type="date" id="departure-date"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <!-- Return Date -->
                    <div>
                        <label for="return-date" class="block text-sm font-medium text-gray-700 mb-2">Data de Volta</label>
                        <input type="date" id="return-date"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <!-- Adults -->
                    <div>
                        <label for="adults" class="block text-sm font-medium text-gray-700 mb-2">Adultos</label>
                        <select id="adults"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="1">1 Adulto</option>
                            <option value="2" selected>2 Adultos</option>
                            <option value="3">3 Adultos</option>
                            <option value="4">4 Adultos</option>
                            <option value="5">5 Adultos</option>
                            <option value="6">6 Adultos</option>
                        </select>
                    </div>

                    <!-- Children -->
                    <div>
                        <label for="children" class="block text-sm font-medium text-gray-700 mb-2">Crianças</label>
                        <select id="children"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="0" selected>0 Crianças</option>
                            <option value="1">1 Criança</option>
                            <option value="2">2 Crianças</option>
                            <option value="3">3 Crianças</option>
                            <option value="4">4 Crianças</option>
                        </select>
                    </div>
                </div>

                <!-- Flight Class (only for flights) -->
                <div id="flight-class" class="mb-6 hidden">
                    <label for="class" class="block text-sm font-medium text-gray-700 mb-2">Classe</label>
                    <select id="class"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option value="economy">Econômica</option>
                        <option value="premium">Premium Economy</option>
                        <option value="business">Executiva</option>
                        <option value="first">Primeira Classe</option>
                    </select>
                </div>

                <!-- Search Button -->
                <div class="text-center">
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-4 px-12 rounded-lg transition-colors duration-300 text-lg">
                        🔍 Buscar Viagens
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

