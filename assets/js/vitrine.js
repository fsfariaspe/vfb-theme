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
  initializeNavigation();
  initializeScrollEffects();
  initializeAnimations();
  initializeMobileMenu();
  initializeSmoothScroll();
  initializeSearchTabs();
  initializeOnerWidget();

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
// MOTOR DE BUSCA ONER
// ========================================

/**
 * Inicializa as abas do motor de busca
 */
function initializeSearchTabs() {
  const searchTabs = document.querySelectorAll('.search-tab');
  const searchPanels = document.querySelectorAll('.search-panel');

  searchTabs.forEach(tab => {
    tab.addEventListener('click', function () {
      const tabType = this.getAttribute('data-tab');

      // Remover classe ativa de todas as abas
      searchTabs.forEach(t => t.classList.remove('active'));

      // Adicionar classe ativa à aba clicada
      this.classList.add('active');

      // Esconder todos os painéis
      searchPanels.forEach(panel => panel.classList.remove('active'));

      // Mostrar o painel correspondente
      const targetPanel = document.getElementById(`${tabType}-panel`);
      if (targetPanel) {
        targetPanel.classList.add('active');
      }

      // Atualizar variável global
      currentSearchTab = tabType;

      // Recarregar widget se necessário
      reloadOnerWidget(tabType);
    });
  });
}

/**
 * Inicializa o widget da Oner
 */
function initializeOnerWidget() {
  // Verificar se o script da Oner foi carregado
  if (typeof window.OnerTravel !== 'undefined') {
    loadOnerWidget(currentSearchTab);
  } else {
    // Aguardar o script carregar
    setTimeout(initializeOnerWidget, 500);
  }
}

/**
 * Carrega o widget da Oner para o tipo especificado
 * @param {string} type - Tipo do widget (flights, hotels, packages)
 */
function loadOnerWidget(type) {
  const widgetContainer = document.querySelector(`#${type}-panel .oner-search-widget`);

  if (widgetContainer && window.OnerTravel) {
    try {
      // Limpar container
      widgetContainer.innerHTML = '';

      // Configurar widget baseado no tipo
      let widgetConfig = {
        container: widgetContainer,
        theme: 'light',
        language: 'pt-BR',
        currency: 'BRL'
      };

      switch (type) {
        case 'flights':
          widgetConfig.type = 'flights';
          widgetConfig.features = ['calendar', 'passengers', 'cabin_class'];
          break;
        case 'hotels':
          widgetConfig.type = 'hotels';
          widgetConfig.features = ['calendar', 'guests', 'rooms'];
          break;
        case 'packages':
          widgetConfig.type = 'packages';
          widgetConfig.features = ['calendar', 'passengers', 'destinations'];
          break;
      }

      // Inicializar widget
      window.OnerTravel.init(widgetConfig);

      console.log(`✅ Widget Oner ${type} carregado com sucesso`);

    } catch (error) {
      console.error(`❌ Erro ao carregar widget Oner ${type}:`, error);

      // Fallback: mostrar mensagem de erro
      widgetContainer.innerHTML = `
                <div style="text-align: center; padding: 2rem; color: #666;">
                    <i class="fas fa-exclamation-triangle" style="font-size: 2rem; margin-bottom: 1rem; color: #f59e0b;"></i>
                    <h3>Motor de busca temporariamente indisponível</h3>
                    <p>Entre em contato conosco para buscar sua viagem ideal!</p>
                    <a href="https://wa.me/5581992429403" class="btn btn-primary" style="margin-top: 1rem;" target="_blank">
                        <i class="fab fa-whatsapp"></i>
                        Falar no WhatsApp
                    </a>
                </div>
            `;
    }
  }
}

/**
 * Recarrega o widget da Oner
 * @param {string} type - Tipo do widget a ser recarregado
 */
function reloadOnerWidget(type) {
  // Aguardar um pouco para a transição da aba
  setTimeout(() => {
    loadOnerWidget(type);
  }, 300);
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
  const mobileMenuToggle = document.getElementById('mobileMenuToggle');
  const nav = document.querySelector('.nav');

  if (mobileMenuToggle && nav) {
    mobileMenuToggle.addEventListener('click', function () {
      nav.classList.toggle('mobile-active');
      this.classList.toggle('active');
      document.body.classList.toggle('menu-open');
    });

    // Fechar menu ao clicar em um link
    const navLinks = nav.querySelectorAll('.nav-link');
    navLinks.forEach(link => {
      link.addEventListener('click', function () {
        nav.classList.remove('mobile-active');
        mobileMenuToggle.classList.remove('active');
        document.body.classList.remove('menu-open');
      });
    });

    // Fechar menu ao clicar fora
    document.addEventListener('click', function (e) {
      if (!nav.contains(e.target) && !mobileMenuToggle.contains(e.target)) {
        nav.classList.remove('mobile-active');
        mobileMenuToggle.classList.remove('active');
        document.body.classList.remove('menu-open');
      }
    });
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
    initializeParallaxHero();
    initializeCounterAnimation();
    initializeSmoothScrollToSection();
    initializeContactFormHandling();
}

/**
 * Inicializa efeito parallax no hero
 */
function initializeParallaxHero() {
    const heroSection = document.querySelector('.hero-section');
    const heroBackground = document.querySelector('.hero-background');
    
    if (heroSection && heroBackground) {
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const parallaxSpeed = 0.5;
            
            if (scrolled < heroSection.offsetHeight) {
                heroBackground.style.transform = `translateY(${scrolled * parallaxSpeed}px)`;
            }
        });
    }
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
        button.addEventListener('click', function(e) {
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
        button.addEventListener('click', function(e) {
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
        element.addEventListener('focus', function() {
            this.style.outline = '2px solid var(--primary-color)';
            this.style.outlineOffset = '2px';
        });
        
        element.addEventListener('blur', function() {
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
    
    skipLink.addEventListener('focus', function() {
        this.style.top = '6px';
    });
    
    skipLink.addEventListener('blur', function() {
        this.style.top = '-40px';
    });
    
    document.body.insertBefore(skipLink, document.body.firstChild);
}

// Inicializar funcionalidades da landing page
document.addEventListener('DOMContentLoaded', function() {
    initializeLandingPageFeatures();
    initializeLazyLoading();
    initializeAccessibility();
});

console.log('✅ Landing Page JavaScript carregado com sucesso!');
