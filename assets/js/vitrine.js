/**
 * Viaje Fácil Brasil - Vitrine JavaScript
 * Funcionalidades: Navegação suave, efeitos visuais, interações, Motor de Busca Oner
 */

// ========================================
// VARIÁVEIS GLOBAIS
// ========================================

let isScrolling = false;
let currentSection = 'inicio';
let currentSearchTab = 'flights';

// ========================================
// INICIALIZAÇÃO
// ========================================

document.addEventListener('DOMContentLoaded', function () {
  console.log('🚀 DOM carregado, iniciando funções...');

  initializeNavigation();
  initializeScrollEffects();
  initializeAnimations();
  initializeMobileMenu();
  initializeSmoothScroll();

  console.log('🚀 Viaje Fácil Brasil - Vitrine carregada com sucesso!');
});

// ========================================
// NAVEGAÇÃO E SCROLL
// ========================================

/**
 * Inicializa a navegação suave entre seções
 */
function initializeNavigation() {
  const navLinks = document.querySelectorAll('.nav-link');

  navLinks.forEach(link => {
    link.addEventListener('click', function (e) {
      e.preventDefault();

      const targetId = this.getAttribute('href');
      const targetSection = document.querySelector(targetId);

      if (targetSection) {
        const headerHeight = document.querySelector('.header').offsetHeight;
        const targetPosition = targetSection.offsetTop - headerHeight;

        window.scrollTo({
          top: targetPosition,
          behavior: 'smooth'
        });

        // Atualizar link ativo
        updateActiveNavLink(this);
      }
    });
  });
}

/**
 * Atualiza o link ativo na navegação
 * @param {HTMLElement} activeLink - Link que deve ser marcado como ativo
 */
function updateActiveNavLink(activeLink) {
  // Remover classe ativa de todos os links
  document.querySelectorAll('.nav-link').forEach(link => {
    link.classList.remove('active');
  });

  // Adicionar classe ativa ao link clicado
  activeLink.classList.add('active');
}

/**
 * Inicializa efeitos de scroll
 */
function initializeScrollEffects() {
  const header = document.querySelector('.header');

  window.addEventListener('scroll', function () {
    if (!isScrolling) {
      window.requestAnimationFrame(function () {
        handleScrollEffects();
        isScrolling = false;
      });
      isScrolling = true;
    }
  });
}

/**
 * Gerencia os efeitos de scroll
 */
function handleScrollEffects() {
  const scrollY = window.scrollY;
  const header = document.querySelector('.header');

  // Efeito no header
  if (scrollY > 100) {
    header.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
  }

  // Atualizar seção ativa
  updateActiveSection();

  // Animar elementos quando entram na viewport
  animateOnScroll();
}

/**
 * Atualiza a seção ativa baseada na posição do scroll
 */
function updateActiveSection() {
  const sections = document.querySelectorAll('section[id]');
  const scrollPos = window.scrollY + 200;

  sections.forEach(section => {
    const sectionTop = section.offsetTop;
    const sectionHeight = section.offsetHeight;
    const sectionId = section.getAttribute('id');

    if (scrollPos >= sectionTop && scrollPos < sectionTop + sectionHeight) {
      currentSection = sectionId;

      // Atualizar link ativo correspondente
      const correspondingLink = document.querySelector(`a[href="#${sectionId}"]`);
      if (correspondingLink) {
        updateActiveNavLink(correspondingLink);
      }
    }
  });
}



// ========================================
// ANIMAÇÕES
// ========================================

/**
 * Inicializa as animações
 */
function initializeAnimations() {
  // Animar elementos na inicialização
  setTimeout(() => {
    animateOnScroll();
  }, 500);
}

/**
 * Anima elementos quando entram na viewport
 */
function animateOnScroll() {
  const elements = document.querySelectorAll('.service-card, .destination-card, .contact-card, .about-text, .about-image, .search-panel, .value-item, .stat-item');

  elements.forEach(element => {
    if (isElementInViewport(element)) {
      element.classList.add('animate-in');
    }
  });
}

/**
 * Verifica se um elemento está na viewport
 * @param {HTMLElement} element - Elemento a ser verificado
 * @returns {boolean} - True se o elemento está visível
 */
function isElementInViewport(element) {
  const rect = element.getBoundingClientRect();
  const windowHeight = window.innerHeight || document.documentElement.clientHeight;

  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= windowHeight &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

// ========================================
// MENU MOBILE
// ========================================

/**
 * Inicializa o menu mobile
 */
function initializeMobileMenu() {
  console.log('🔧 Inicializando menu mobile SIMPLES...');
  
  const mobileMenuToggle = document.getElementById('mobileMenuToggle');
  const nav = document.querySelector('.nav');

  console.log('📱 Elementos encontrados:', { mobileMenuToggle, nav });

  if (mobileMenuToggle && nav) {
    console.log('✅ Elementos OK, configurando menu...');

    // Função simples para alternar menu
    function toggleMenu() {
      console.log('🔄 Alternando menu...');
      
      if (nav.classList.contains('mobile-active')) {
        console.log('🔒 Fechando menu');
        nav.classList.remove('mobile-active');
        mobileMenuToggle.classList.remove('active');
        document.body.classList.remove('menu-open');
      } else {
        console.log('🔓 Abrindo menu');
        nav.classList.add('mobile-active');
        mobileMenuToggle.classList.add('active');
        document.body.classList.add('menu-open');
      }
    }

    // Remover todos os event listeners existentes
    mobileMenuToggle.onclick = null;
    mobileMenuToggle.ontouchstart = null;
    mobileMenuToggle.ontouchend = null;

    // Event listener simples e direto
    mobileMenuToggle.onclick = function(e) {
      console.log('🖱️ CLIQUE DETECTADO!');
      e.preventDefault();
      e.stopPropagation();
      toggleMenu();
    };

    // Event listener para touch
    mobileMenuToggle.ontouchend = function(e) {
      console.log('👆 TOUCH DETECTADO!');
      e.preventDefault();
      e.stopPropagation();
      toggleMenu();
    };

    console.log('✅ Menu mobile configurado com sucesso!');
  } else {
    console.error('❌ ERRO: Elementos não encontrados!');
    console.error('📱 mobileMenuToggle:', mobileMenuToggle);
    console.error('🧭 nav:', nav);
  }
}

// ========================================
// SCROLL SUAVE
// ========================================

/**
 * Inicializa o scroll suave
 */
function initializeSmoothScroll() {
  // Adicionar CSS para scroll suave
  const style = document.createElement('style');
  style.textContent = `
        html {
            scroll-behavior: smooth;
        }
        
        .animate-in {
            animation: fadeInUp 0.6s ease-out forwards;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .nav-link.active {
            color: var(--primary-color);
        }
        
        .nav-link.active::after {
            width: 100%;
        }
        
        .mobile-active {
            display: flex !important;
            flex-direction: column;
            position: fixed;
            top: 80px;
            left: 0;
            right: 0;
            background: white;
            box-shadow: var(--shadow-lg);
            padding: 2rem;
            z-index: 999;
        }
        
        .mobile-menu-toggle.active span:nth-child(1) {
            transform: rotate(45deg) translate(5px, 5px);
        }
        
        .mobile-menu-toggle.active span:nth-child(2) {
            opacity: 0;
        }
        
        .mobile-menu-toggle.active span:nth-child(3) {
            transform: rotate(-45deg) translate(7px, -6px);
        }
        
        .menu-open {
            overflow: hidden;
        }
        
        @media (max-width: 768px) {
            .nav {
                display: none;
            }
            
            .mobile-menu-toggle {
                display: flex;
                flex-direction: column;
                gap: 4px;
                background: none;
                border: none;
                cursor: pointer;
                padding: 0.5rem;
            }
            
            .mobile-menu-toggle span {
                width: 25px;
                height: 3px;
                background: var(--text-dark);
                transition: var(--transition);
                border-radius: 2px;
            }
        }
    `;
  document.head.appendChild(style);
}

// ========================================
// UTILITÁRIOS
// ========================================

/**
 * Debounce function para otimizar performance
 * @param {Function} func - Função a ser executada
 * @param {number} wait - Tempo de espera em ms
 * @returns {Function} - Função debounced
 */
function debounce(func, wait) {
  let timeout;
  return function executedFunction(...args) {
    const later = () => {
      clearTimeout(timeout);
      func(...args);
    };
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
  };
}

/**
 * Throttle function para otimizar performance
 * @param {Function} func - Função a ser executada
 * @param {number} limit - Limite de tempo em ms
 * @returns {Function} - Função throttled
 */
function throttle(func, limit) {
  let inThrottle;
  return function () {
    const args = arguments;
    const context = this;
    if (!inThrottle) {
      func.apply(context, args);
      inThrottle = true;
      setTimeout(() => inThrottle = false, limit);
    }
  };
}

// ========================================
// INICIALIZAÇÕES ADICIONAIS
// ========================================

// Inicializar efeitos adicionais quando a página carregar
window.addEventListener('load', function () {
  // Adicionar classe loaded ao body para animações CSS
  document.body.classList.add('loaded');
});

// ========================================
// TRATAMENTO DE ERROS
// ========================================

window.addEventListener('error', function (e) {
  console.error('Erro na vitrine:', e.error);
});

// ========================================
// PERFORMANCE
// ========================================

// Otimizar scroll events
const optimizedScrollHandler = throttle(handleScrollEffects, 16); // ~60fps
window.addEventListener('scroll', optimizedScrollHandler);

// Otimizar resize events
const optimizedResizeHandler = debounce(function () {
  // Recalcular posições quando a janela redimensionar
  updateActiveSection();
}, 250);

window.addEventListener('resize', optimizedResizeHandler);

// ========================================
// ANALYTICS E TRACKING (OPCIONAL)
// ========================================

/**
 * Track de cliques em elementos importantes
 */
function trackInteractions() {
  // Track cliques no WhatsApp
  const whatsappButtons = document.querySelectorAll('a[href*="wa.me"]');
  whatsappButtons.forEach(button => {
    button.addEventListener('click', function () {
      console.log('📱 Clique no WhatsApp registrado');
      // Aqui você pode adicionar código de analytics
    });
  });

  // Track cliques nos cards de destino
  const destinationCards = document.querySelectorAll('.destination-card');
  destinationCards.forEach(card => {
    card.addEventListener('click', function () {
      const destination = this.querySelector('h3').textContent;
      console.log(`🌍 Interesse em destino: ${destination}`);
      // Aqui você pode adicionar código de analytics
    });
  });

  // Track mudanças de aba no motor de busca
  const searchTabs = document.querySelectorAll('.search-tab');
  searchTabs.forEach(tab => {
    tab.addEventListener('click', function () {
      const tabType = this.getAttribute('data-tab');
      console.log(`🔍 Busca por ${tabType} ativada`);
      // Aqui você pode adicionar código de analytics
    });
  });
}

// Inicializar tracking
document.addEventListener('DOMContentLoaded', trackInteractions);

// ========================================
// FUNCIONALIDADES ESPECÍFICAS DA LANDING PAGE
// ========================================

/**
 * Inicializa funcionalidades específicas da landing page
 */
function initializeLandingPageFeatures() {
  initializeCarousel();
  initializeCounterAnimation();
  initializeSmoothScrollToSection();
  initializeContactFormHandling();
}

/**
 * Inicializa o carrossel do hero
 */
function initializeCarousel() {
  const slides = document.querySelectorAll('.carousel-slide');
  const indicators = document.querySelectorAll('.indicator');
  const prevBtn = document.getElementById('carouselPrev');
  const nextBtn = document.getElementById('carouselNext');

  let currentSlide = 0;
  let autoPlayInterval;

  if (slides.length === 0) return;

  // Função para mostrar slide específico
  function showSlide(index) {
    // Remover classe active de todos os slides e indicadores
    slides.forEach(slide => slide.classList.remove('active'));
    indicators.forEach(indicator => indicator.classList.remove('active'));

    // Adicionar classe active ao slide e indicador atuais
    slides[index].classList.add('active');
    indicators[index].classList.add('active');

    currentSlide = index;
  }

  // Função para próximo slide
  function nextSlide() {
    const nextIndex = (currentSlide + 1) % slides.length;
    showSlide(nextIndex);
  }

  // Função para slide anterior
  function prevSlide() {
    const prevIndex = (currentSlide - 1 + slides.length) % slides.length;
    showSlide(prevIndex);
  }

  // Event listeners para navegação
  if (nextBtn) {
    nextBtn.addEventListener('click', nextSlide);
  }

  if (prevBtn) {
    prevBtn.addEventListener('click', prevSlide);
  }

  // Event listeners para indicadores
  indicators.forEach((indicator, index) => {
    indicator.addEventListener('click', () => {
      showSlide(index);
      resetAutoPlay();
    });
  });

  // Auto play
  function startAutoPlay() {
    autoPlayInterval = setInterval(nextSlide, 5000); // 5 segundos
  }

  function stopAutoPlay() {
    clearInterval(autoPlayInterval);
  }

  function resetAutoPlay() {
    stopAutoPlay();
    startAutoPlay();
  }

  // Pausar auto play ao passar o mouse
  const carousel = document.querySelector('.carousel-container');
  if (carousel) {
    carousel.addEventListener('mouseenter', stopAutoPlay);
    carousel.addEventListener('mouseleave', startAutoPlay);
  }

  // Navegação por teclado
  document.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowLeft') {
      prevSlide();
      resetAutoPlay();
    } else if (e.key === 'ArrowRight') {
      nextSlide();
      resetAutoPlay();
    }
  });

  // Iniciar auto play
  startAutoPlay();

  console.log('🎠 Carrossel inicializado com sucesso!');
}

/**
 * Inicializa animação de contadores
 */
function initializeCounterAnimation() {
  const counters = document.querySelectorAll('.stat-number');

  const animateCounter = (counter) => {
    const target = parseInt(counter.textContent.replace(/\D/g, ''));
    const duration = 2000; // 2 segundos
    const step = target / (duration / 16); // 60fps
    let current = 0;

    const timer = setInterval(() => {
      current += step;
      if (current >= target) {
        current = target;
        clearInterval(timer);
      }

      const suffix = counter.textContent.includes('+') ? '+' : '';
      counter.textContent = Math.floor(current) + suffix;
    }, 16);
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        animateCounter(entry.target);
        observer.unobserve(entry.target);
      }
    });
  });

  counters.forEach(counter => {
    observer.observe(counter);
  });
}

/**
 * Inicializa scroll suave para seções
 */
function initializeSmoothScrollToSection() {
  const buttons = document.querySelectorAll('[href^="#"]');

  buttons.forEach(button => {
    button.addEventListener('click', function (e) {
      e.preventDefault();

      const targetId = this.getAttribute('href');
      const targetSection = document.querySelector(targetId);

      if (targetSection) {
        const headerHeight = document.querySelector('.header').offsetHeight;
        const targetPosition = targetSection.offsetTop - headerHeight;

        window.scrollTo({
          top: targetPosition,
          behavior: 'smooth'
        });
      }
    });
  });
}

/**
 * Inicializa tratamento de formulários de contato
 */
function initializeContactFormHandling() {
  // Adicionar funcionalidade aos botões de contato
  const contactButtons = document.querySelectorAll('.contact-link, .service-btn, .destination-btn');

  contactButtons.forEach(button => {
    button.addEventListener('click', function (e) {
      // Se for um link interno, não fazer nada
      if (this.getAttribute('href')?.startsWith('#')) {
        return;
      }

      // Para links externos, adicionar tracking
      const buttonText = this.textContent.trim();
      console.log(`📞 Clique em: ${buttonText}`);

      // Aqui você pode adicionar código de analytics
      // gtag('event', 'click', {
      //     'event_category': 'contact',
      //     'event_label': buttonText
      // });
    });
  });
}

/**
 * Inicializa lazy loading para imagens
 */
function initializeLazyLoading() {
  const images = document.querySelectorAll('img[data-src]');

  const imageObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const img = entry.target;
        img.src = img.dataset.src;
        img.classList.remove('lazy');
        imageObserver.unobserve(img);
      }
    });
  });

  images.forEach(img => {
    imageObserver.observe(img);
  });
}

/**
 * Inicializa funcionalidades de acessibilidade
 */
function initializeAccessibility() {
  // Adicionar suporte a navegação por teclado
  const focusableElements = document.querySelectorAll('button, a, input, textarea, select');

  focusableElements.forEach(element => {
    element.addEventListener('focus', function () {
      this.style.outline = '2px solid var(--primary-color)';
      this.style.outlineOffset = '2px';
    });

    element.addEventListener('blur', function () {
      this.style.outline = 'none';
    });
  });

  // Adicionar skip links para acessibilidade
  const skipLink = document.createElement('a');
  skipLink.href = '#hero';
  skipLink.textContent = 'Pular para conteúdo principal';
  skipLink.className = 'skip-link';
  skipLink.style.cssText = `
        position: absolute;
        top: -40px;
        left: 6px;
        background: var(--primary-color);
        color: white;
        padding: 8px;
        text-decoration: none;
        z-index: 10000;
        transition: top 0.3s;
    `;

  skipLink.addEventListener('focus', function () {
    this.style.top = '6px';
  });

  skipLink.addEventListener('blur', function () {
    this.style.top = '-40px';
  });

  document.body.insertBefore(skipLink, document.body.firstChild);
}

// Inicializar funcionalidades da landing page
document.addEventListener('DOMContentLoaded', function () {
  initializeLandingPageFeatures();
  initializeLazyLoading();
  initializeAccessibility();
});

console.log('✅ Landing Page JavaScript carregado com sucesso!');
