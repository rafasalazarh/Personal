// Menú móvil
const hamburger = document.getElementById('hamburger');
const navMenu = document.getElementById('navMenu');

if (hamburger && navMenu) {
    hamburger.addEventListener('click', () => {
        navMenu.classList.toggle('active');
        hamburger.classList.toggle('active');
    });

    // Cerrar menú al hacer clic en un enlace
    document.querySelectorAll('.nav-menu a').forEach(link => {
        link.addEventListener('click', () => {
            navMenu.classList.remove('active');
            hamburger.classList.remove('active');
        });
    });
}

// Formulario de contacto
const contactForm = document.getElementById('contactForm');

if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();
        
        // Obtener valores del formulario
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const phone = document.getElementById('phone').value;
        const service = document.getElementById('service').value;
        const message = document.getElementById('message').value;
        
        // Validación básica
        if (!name || !email || !phone || !service || !message) {
            alert('Por favor, completa todos los campos');
            return;
        }
        
        // Simulación de envío (aquí se conectaría con un backend)
        console.log('Formulario enviado:', {
            name,
            email,
            phone,
            service,
            message
        });
        
        // Mensaje de éxito
        alert('¡Gracias por contactarnos! Nos pondremos en contacto contigo pronto.');
        
        // Limpiar formulario
        contactForm.reset();
    });
}

// ========== FILTROS DE PROPIEDADES ==========
const filterButtons = document.querySelectorAll('.filter-btn');
const propertyCards = document.querySelectorAll('.property-card');

filterButtons.forEach(button => {
    button.addEventListener('click', () => {
        // Remover active de todos los botones
        filterButtons.forEach(btn => btn.classList.remove('active'));
        // Agregar active al botón clickeado
        button.classList.add('active');
        
        const filter = button.getAttribute('data-filter');
        
        propertyCards.forEach(card => {
            if (filter === 'all') {
                card.classList.remove('hidden');
            } else {
                const cardType = card.getAttribute('data-type');
                if (cardType === filter) {
                    card.classList.remove('hidden');
                } else {
                    card.classList.add('hidden');
                }
            }
        });
    });
});

// ========== MODAL TOUR 360 ==========
const tourModal = document.getElementById('tourModal');
const tourModalClose = document.querySelector('.tour-modal-close');
const panoramaViewer = document.getElementById('panorama');
const tourModalTitle = document.getElementById('tourModalTitle');
let viewer = null;

// Datos de los tours 360 (en producción, estos vendrían de una API o base de datos)
const tours360 = {
    tour1: {
        title: 'Casa Moderna en Zona Premium',
        // Usando una imagen panorámica de ejemplo (en producción usarías tus propias imágenes 360)
        image: 'https://pannellum.org/images/alma.jpg'
    },
    tour2: {
        title: 'Apartamento Elegante Centro',
        image: 'https://pannellum.org/images/alma.jpg'
    },
    tour3: {
        title: 'Villa de Lujo con Piscina',
        image: 'https://pannellum.org/images/alma.jpg'
    },
    tour4: {
        title: 'Casa Familiar Espaciosa',
        image: 'https://pannellum.org/images/alma.jpg'
    },
    tour5: {
        title: 'Loft Moderno Minimalista',
        image: 'https://pannellum.org/images/alma.jpg'
    },
    tour6: {
        title: 'Penthouse con Vista Panorámica',
        image: 'https://pannellum.org/images/alma.jpg'
    }
};

// Función para abrir el modal con el tour 360
function openTour360(tourId, title) {
    const tour = tours360[tourId];
    if (!tour) {
        console.error('Tour no encontrado:', tourId);
        return;
    }
    
    // Actualizar título
    tourModalTitle.textContent = title || tour.title;
    
    // Mostrar modal
    tourModal.classList.add('active');
    document.body.style.overflow = 'hidden';
    
    // Inicializar Pannellum
    if (viewer) {
        viewer.destroy();
    }
    
    viewer = pannellum.viewer('panorama', {
        "type": "equirectangular",
        "panorama": tour.image,
        "autoLoad": true,
        "autoRotate": 0,
        "compass": true,
        "showControls": true,
        "keyboardZoom": true,
        "mouseZoom": true,
        "hfov": 100,
        "minHfov": 50,
        "maxHfov": 120
    });
}

// Función para cerrar el modal
function closeTour360() {
    tourModal.classList.remove('active');
    document.body.style.overflow = '';
    if (viewer) {
        viewer.destroy();
        viewer = null;
    }
}

// Event listeners para botones de tour 360
document.querySelectorAll('.btn-tour-360').forEach(button => {
    button.addEventListener('click', (e) => {
        e.stopPropagation();
        const tourId = button.getAttribute('data-tour');
        const title = button.getAttribute('data-title');
        openTour360(tourId, title);
    });
});

// Cerrar modal al hacer clic en X
if (tourModalClose) {
    tourModalClose.addEventListener('click', closeTour360);
}

// Cerrar modal al hacer clic fuera del contenido
tourModal.addEventListener('click', (e) => {
    if (e.target === tourModal) {
        closeTour360();
    }
});

// Cerrar modal con tecla ESC
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && tourModal.classList.contains('active')) {
        closeTour360();
    }
});

// ========== ANIMACIONES AL SCROLL ==========
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Observar elementos para animación
document.addEventListener('DOMContentLoaded', () => {
    const animateElements = document.querySelectorAll('.service-card, .property-card, .contact-item');
    
    animateElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
});

// Smooth scroll para enlaces de navegación
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            const headerOffset = 80;
            const elementPosition = target.getBoundingClientRect().top;
            const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

            window.scrollTo({
                top: offsetPosition,
                behavior: 'smooth'
            });
        }
    });
});

// Efecto parallax suave en el hero
window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    const hero = document.querySelector('.hero');
    if (hero) {
        hero.style.transform = `translateY(${scrolled * 0.5}px)`;
    }
});

// Agregar clase activa al header al hacer scroll
let lastScroll = 0;
const header = document.querySelector('.header');

if (header) {
    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset;
        
        if (currentScroll > 100) {
            header.style.boxShadow = '0 4px 6px -1px rgba(0, 0, 0, 0.1)';
        } else {
            header.style.boxShadow = '0 4px 6px -1px rgba(0, 0, 0, 0.1)';
        }
        
        lastScroll = currentScroll;
    });
}
