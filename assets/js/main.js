/**
 * Viaje Fácil Brasil - JavaScript Principal
 * Funcionalidades: Menu Mobile, Motor de Busca, Chatbot, Carrossel
 */

// ========================================
// VARIÁVEIS GLOBAIS
// ========================================

let currentSearchType = 'packages';
let currentSlide = 0;
const totalSlides = 7;

// Dados do carrossel
const destinations = [
  {
    image: 'destinations/fernando-noronha.jpg',
    name: 'Fernando de Noronha',
    quote: '"O paraíso brasileiro onde o tempo para e a natureza encanta"'
  },
  {
    image: 'destinations/chapada-diamantina.jpg',
    name: 'Chapada Diamantina',
    quote: '"Cachoeiras cristalinas e paisagens que tocam a alma"'
  },
  {
    image: 'destinations/alberta-canada.jpg',
    name: 'Alberta, Canadá',
    quote: '"Montanhas majestosas e lagos de águas cristalinas"'
  },
  {
    image: 'destinations/egito.jpg',
    name: 'Egito',
    quote: '"Mistérios milenares e histórias que atravessam o tempo"'
  },
  {
    image: 'destinations/kyoto-japao.jpg',
    name: 'Kyoto, Japão',
    quote: '"Tradição e modernidade se encontram em harmonia perfeita"'
  },
  {
    image: 'destinations/santiago-chile.jpg',
    name: 'Santiago, Chile',
    quote: '"Entre os Andes e o Pacífico, uma cidade de contrastes únicos"'
  },
  {
    image: 'destinations/toronto-canada.jpg',
    name: 'Toronto, Canadá',
    quote: '"Diversidade cultural e inovação em cada esquina"'
  }
];

// ========================================
// FUNÇÕES DO MENU MOBILE ELEGANTE
// ========================================

function toggleMobileMenu() {
  const mobileMenu = document.getElementById('mobile-menu');
  const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
  const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
  
  if (mobileMenu.classList.contains('active')) {
    closeMobileMenu();
  } else {
    openMobileMenu();
  }
}

function openMobileMenu() {
  const mobileMenu = document.getElementById('mobile-menu');
  const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
  const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
  
  // Adicionar classes ativas
  mobileMenu.classList.add('active');
  mobileMenuOverlay.classList.add('active');
  mobileMenuToggle.classList.add('active');
  
  // Prevenir scroll do body
  document.body.style.overflow = 'hidden';
}

function closeMobileMenu() {
  const mobileMenu = document.getElementById('mobile-menu');
  const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
  const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
  
  // Remover classes ativas
  mobileMenu.classList.remove('active');
  mobileMenuOverlay.classList.remove('active');
  mobileMenuToggle.classList.remove('active');
  
  // Restaurar scroll do body
  document.body.style.overflow = '';
}

// Fechar menu ao clicar em um link
function closeMenuOnLinkClick() {
  const menuLinks = document.querySelectorAll('.mobile-menu-list a');
  menuLinks.forEach(link => {
    link.addEventListener('click', () => {
      closeMobileMenu();
    });
  });
}

// Fechar menu com tecla ESC
function closeMenuOnEscape() {
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      closeMobileMenu();
    }
  });
}

// ========================================
// MOTOR DE BUSCAS - ONER TRAVEL WIDGET
// ========================================
// TODO: Substituir por widget real quando autorizado
// Documentação: ONER_TRAVEL_INTEGRATION.md
// Email: widget@onertravel.com
// ========================================

// Tab functionality
function initializeSearchTabs() {
  const tabs = document.querySelectorAll('.search-tab');
  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      // Remove active class from all tabs
      tabs.forEach(t => t.classList.remove('active'));
      // Add active class to clicked tab
      tab.classList.add('active');
      // Update current search type
      currentSearchType = tab.getAttribute('data-type');

      // Show/hide flight class field based on search type
      const flightClassField = document.getElementById('flight-class');
      if (flightClassField) {
        if (currentSearchType === 'flights') {
          flightClassField.classList.remove('hidden');
        } else {
          flightClassField.classList.add('hidden');
        }
      }
    });
  });
}

function searchDestinations(event) {
  if (event) event.preventDefault();

  const origin = document.getElementById('origin-input').value;
  const destination = document.getElementById('destination-input').value;
  const departureDate = document.getElementById('departure-date').value;
  const returnDate = document.getElementById('return-date').value;
  const adults = document.getElementById('adults').value;
  const children = document.getElementById('children').value;
  const flightClass = document.getElementById('class').value;

  if (!origin.trim()) {
    alert('Por favor, digite a cidade de origem.');
    return;
  }

  if (!destination.trim()) {
    alert('Por favor, digite um destino para buscar.');
    return;
  }

  if (!departureDate) {
    alert('Por favor, selecione a data de ida.');
    return;
  }

  // PLACEHOLDER - Será substituído pelo widget da Oner Travel
  const searchTypeNames = {
    'packages': 'Pacotes de Viagem',
    'flights': 'Passagens Aéreas',
    'hotels': 'Hotéis'
  };

  const classNames = {
    'economy': 'Econômica',
    'premium': 'Premium Economy',
    'business': 'Executiva',
    'first': 'Primeira Classe'
  };

  const searchTypeName = searchTypeNames[currentSearchType];
  const className = classNames[flightClass];
  const returnText = returnDate ? `\n📅 Volta: ${returnDate}` : '';
  const childrenText = children > 0 ? ` + ${children} criança(s)` : '';

  alert(`🔍 Buscando ${searchTypeName}...\n\n` +
    `✈️ Origem: ${origin}\n` +
    `🌍 Destino: ${destination}\n` +
    `📅 Ida: ${departureDate}${returnText}\n` +
    `👥 Passageiros: ${adults} adulto(s)${childrenText}\n` +
    `💺 Classe: ${className}\n\n` +
    `Em breve você terá acesso ao motor de buscas completo da Oner Travel!\n\n` +
    `Funcionalidades que estarão disponíveis:\n` +
    `• ✈️ Passagens aéreas em tempo real\n` +
    `• 🏨 Hotéis com preços atualizados\n` +
    `• 📦 Pacotes completos de viagem\n` +
    `• 🛡️ Seguros de viagem\n` +
    `• 💰 Reservas integradas`);
}


// ========================================
// FUNÇÕES DO CARROSSEL
// ========================================

function initializeCarousel() {
  const heroSection = document.querySelector('.hero-bg');
  const indicators = document.querySelectorAll('.carousel-indicator');

  // Add click events to indicators
  indicators.forEach((indicator, index) => {
    indicator.addEventListener('click', () => {
      goToSlide(index);
    });
  });

  // Auto-advance carousel every 4 seconds
  setInterval(() => {
    currentSlide = (currentSlide + 1) % totalSlides;
    updateCarousel();
  }, 4000);

  // Initialize first slide
  updateCarousel();

  // Show initial text
  setTimeout(() => {
    const destinationName = document.querySelector('.destination-name');
    const destinationQuote = document.querySelector('.destination-quote');
    destinationName.classList.add('show');
    destinationQuote.classList.add('show');
  }, 1000);

  // Force initial image load
  setTimeout(() => {
    const heroSection = document.querySelector('.hero-bg');
    const currentThemeUrl = window.location.origin + '/wp-content/themes/viaje-facil-brasil';
    const imageUrl = `${currentThemeUrl}/assets/images/${destinations[0].image}`;
    console.log('Forcing initial image load:', imageUrl);

    // Test if image exists
    const img = new Image();
    img.onload = function () {
      console.log('Initial image loaded successfully:', imageUrl);
      heroSection.style.backgroundImage = `url('${imageUrl}')`;
    };
    img.onerror = function () {
      console.error('Failed to load initial image:', imageUrl);
      // Keep CSS background as fallback
    };
    img.src = imageUrl;
  }, 500);
}

function goToSlide(slideIndex) {
  currentSlide = slideIndex;
  updateCarousel();
}

function updateCarousel() {
  const heroSection = document.querySelector('.hero-bg');
  const indicators = document.querySelectorAll('.carousel-indicator');
  const destinationName = document.querySelector('.destination-name');
  const destinationQuote = document.querySelector('.destination-quote');

  // Hide current text with animation
  destinationName.classList.remove('show');
  destinationQuote.classList.remove('show');

  // Update background image
  const currentThemeUrl = window.location.origin + '/wp-content/themes/viaje-facil-brasil';
  const imageUrl = `${currentThemeUrl}/assets/images/${destinations[currentSlide].image}`;
  console.log('Carousel image URL:', imageUrl);

  // Test if image exists
  const img = new Image();
  img.onload = function () {
    console.log('Image loaded successfully:', imageUrl);
    heroSection.style.backgroundImage = `url('${imageUrl}')`;
  };
  img.onerror = function () {
    console.error('Failed to load image:', imageUrl);
    // Fallback to CSS background
    heroSection.style.backgroundImage = '';
  };
  img.src = imageUrl;

  // Update text content
  setTimeout(() => {
    destinationName.textContent = destinations[currentSlide].name;
    destinationQuote.textContent = destinations[currentSlide].quote;

    // Show new text with animation
    destinationName.classList.add('show');
    destinationQuote.classList.add('show');
  }, 500);

  // Update indicators
  indicators.forEach((indicator, index) => {
    if (index === currentSlide) {
      indicator.classList.remove('bg-opacity-50');
      indicator.classList.add('bg-opacity-100', 'scale-110');
    } else {
      indicator.classList.remove('bg-opacity-100', 'scale-110');
      indicator.classList.add('bg-opacity-50');
    }
  });
}

// ========================================
// EVENT LISTENERS E INICIALIZAÇÃO
// ========================================

document.addEventListener('DOMContentLoaded', function () {

  // Allow Enter key to search
  const destinationInput = document.getElementById('destination-input');
  if (destinationInput) {
    destinationInput.addEventListener('keypress', function (e) {
      if (e.key === 'Enter') {
        searchDestinations();
      }
    });
  }

  // Set minimum date to today
  const today = new Date().toISOString().split('T')[0];
  const departureDate = document.getElementById('departure-date');
  const returnDate = document.getElementById('return-date');

  if (departureDate) departureDate.setAttribute('min', today);
  if (returnDate) returnDate.setAttribute('min', today);

  // Initialize components
  initializeCarousel();
  initializeSearchTabs();
  closeMenuOnLinkClick();
  closeMenuOnEscape();
});