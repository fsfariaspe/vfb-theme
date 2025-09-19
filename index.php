<?php
/**
 * Template principal do tema Viaje Fácil Brasil
 * Abordagem híbrida: HTML estático + WordPress dinâmico
 * 
 * @package Viaje_Facil_Brasil
 * @since 1.0
 */

get_header(); ?>

<!-- Search Bar -->
<section class="bg-blue-600 py-4">
  <div class="container mx-auto px-4">
    <div class="max-w-4xl mx-auto">
      <form class="flex flex-wrap items-center gap-4">
        <div class="flex-1 min-w-48">
          <input type="text" placeholder="De onde?" class="w-full px-4 py-2 rounded-lg border-0 focus:ring-2 focus:ring-yellow-400">
        </div>
        <div class="flex-1 min-w-48">
          <input type="text" placeholder="Para onde?" class="w-full px-4 py-2 rounded-lg border-0 focus:ring-2 focus:ring-yellow-400">
        </div>
        <div class="flex-1 min-w-32">
          <input type="date" class="w-full px-4 py-2 rounded-lg border-0 focus:ring-2 focus:ring-yellow-400">
        </div>
        <div class="flex-1 min-w-32">
          <input type="date" class="w-full px-4 py-2 rounded-lg border-0 focus:ring-2 focus:ring-yellow-400">
        </div>
        <button type="submit" class="bg-yellow-400 hover:bg-yellow-500 text-gray-800 font-semibold px-6 py-2 rounded-lg transition-colors duration-300">
          Buscar
        </button>
      </form>
    </div>
  </div>
</section>

<main id="main" class="site-main">
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

  <!-- Promotions Section -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Promoções Especiais</h2>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Promotion 1 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/destinations/fernando-noronha.jpg" alt="Fernando de Noronha" class="w-full h-48 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-bold mb-2 text-gray-800">Fernando de Noronha</h3>
            <p class="text-gray-600 mb-4">5 dias / 4 noites com voo + hospedagem</p>
            <div class="flex items-center justify-between">
              <span class="text-2xl font-bold text-blue-600">R$ 2.499</span>
              <span class="text-sm text-gray-500 line-through">R$ 3.199</span>
            </div>
            <button class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition-colors duration-300">
              Ver Detalhes
            </button>
          </div>
        </div>

        <!-- Promotion 2 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/destinations/kyoto-japao.jpg" alt="Kyoto, Japão" class="w-full h-48 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-bold mb-2 text-gray-800">Kyoto, Japão</h3>
            <p class="text-gray-600 mb-4">8 dias / 7 noites com voo + hospedagem</p>
            <div class="flex items-center justify-between">
              <span class="text-2xl font-bold text-blue-600">R$ 4.999</span>
              <span class="text-sm text-gray-500 line-through">R$ 6.299</span>
            </div>
            <button class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition-colors duration-300">
              Ver Detalhes
            </button>
          </div>
        </div>

        <!-- Promotion 3 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/destinations/alberta-canada.jpg" alt="Alberta, Canadá" class="w-full h-48 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-bold mb-2 text-gray-800">Alberta, Canadá</h3>
            <p class="text-gray-600 mb-4">10 dias / 9 noites com voo + hospedagem</p>
            <div class="flex items-center justify-between">
              <span class="text-2xl font-bold text-blue-600">R$ 5.999</span>
              <span class="text-sm text-gray-500 line-through">R$ 7.499</span>
            </div>
            <button class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition-colors duration-300">
              Ver Detalhes
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

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

</main>

<?php get_footer(); ?>