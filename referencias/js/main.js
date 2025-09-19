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
// FUNÇÕES DO MENU MOBILE
// ========================================

function toggleMobileMenu() {
  const mobileMenu = document.getElementById('mobile-menu');
  mobileMenu.classList.toggle('hidden');
}

// ========================================
// MOTOR DE BUSCAS - ONER TRAVEL WIDGET
// ========================================
// TODO: Substituir por widget real quando autorizado
// Documentação: ONER_TRAVEL_INTEGRATION.md
// Email: widget@onertravel.com
// ========================================

// Função simplificada para o motor de busca compacto
function initializeSearchTabs() {
  // Função mantida para compatibilidade, mas não é mais necessária
  // no layout com motor de busca compacto
}

function searchDestinations(event) {
  if (event) event.preventDefault();

  const origin = document.getElementById('origin-input').value;
  const destination = document.getElementById('destination-input').value;
  const departureDate = document.getElementById('departure-date').value;
  const returnDate = document.getElementById('return-date').value;

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
  const returnText = returnDate ? `\n📅 Volta: ${returnDate}` : '';

  alert(`🔍 Buscando viagens...\n\n` +
    `✈️ Origem: ${origin}\n` +
    `🌍 Destino: ${destination}\n` +
    `📅 Ida: ${departureDate}${returnText}\n\n` +
    `Em breve você terá acesso ao motor de buscas completo da Oner Travel!\n\n` +
    `Funcionalidades que estarão disponíveis:\n` +
    `• ✈️ Passagens aéreas em tempo real\n` +
    `• 🏨 Hotéis com preços atualizados\n` +
    `• 📦 Pacotes completos de viagem\n` +
    `• 🛡️ Seguros de viagem\n` +
    `• 💰 Reservas integradas`);
}

// ========================================
// FUNÇÕES DO CHATBOT VIVI
// ========================================

function toggleChat() {
  const chatWindow = document.getElementById('chat-window');
  const chatbotBtn = document.getElementById('chatbot-btn');

  if (chatWindow.classList.contains('chat-hidden')) {
    chatWindow.classList.remove('chat-hidden');
    chatWindow.classList.add('chat-visible');
    chatbotBtn.innerHTML = '✕';
  } else {
    chatWindow.classList.remove('chat-visible');
    chatWindow.classList.add('chat-hidden');
    chatbotBtn.innerHTML = 'V';
  }
}

function sendMessage() {
  const chatInput = document.getElementById('chat-input');
  const message = chatInput.value.trim();

  if (message) {
    // Add user message to chat
    const chatMessages = document.querySelector('.flex-1.p-4.overflow-y-auto');
    const userMessage = document.createElement('div');
    userMessage.className = 'bg-blue-100 rounded-lg p-3 mb-4 ml-8';
    userMessage.innerHTML = `<p class="text-gray-800">${message}</p>`;
    chatMessages.appendChild(userMessage);

    // Clear input
    chatInput.value = '';

    // Simulate bot response
    setTimeout(() => {
      const botMessage = document.createElement('div');
      botMessage.className = 'bg-gray-100 rounded-lg p-3 mb-4';
      botMessage.innerHTML = '<p class="text-gray-800">Obrigado pela sua mensagem! Em breve nossa equipe entrará em contato para ajudá-lo com seu planejamento de viagem. 😊</p>';
      chatMessages.appendChild(botMessage);

      // Scroll to bottom
      chatMessages.scrollTop = chatMessages.scrollHeight;
    }, 1000);

    // Scroll to bottom
    chatMessages.scrollTop = chatMessages.scrollHeight;
  }
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
    if (destinationName && destinationQuote) {
      destinationName.classList.add('show');
      destinationQuote.classList.add('show');
    }
  }, 1000);
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

  if (!heroSection || !destinations[currentSlide]) return;

  // Hide current text with animation
  if (destinationName && destinationQuote) {
    destinationName.classList.remove('show');
    destinationQuote.classList.remove('show');
  }

  // Update background image
  heroSection.style.backgroundImage = `url('assets/images/${destinations[currentSlide].image}')`;

  // Update text content
  setTimeout(() => {
    if (destinationName && destinationQuote) {
      destinationName.textContent = destinations[currentSlide].name;
      destinationQuote.textContent = destinations[currentSlide].quote;

      // Show new text with animation
      destinationName.classList.add('show');
      destinationQuote.classList.add('show');
    }
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

// Allow Enter key to send message
document.addEventListener('DOMContentLoaded', function () {
  const chatInput = document.getElementById('chat-input');
  if (chatInput) {
    chatInput.addEventListener('keypress', function (e) {
      if (e.key === 'Enter') {
        sendMessage();
      }
    });
  }

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
});
