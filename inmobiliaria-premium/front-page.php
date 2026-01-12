<?php
/**
 * Template para la página de inicio (Front Page)
 *
 * @package Inmobiliaria_Premium
 */

get_header();
?>

    <!-- Hero Banner -->
    <section id="inicio" class="hero">
        <div class="hero-content">
            <h1><?php echo get_theme_mod('hero_title', 'Encuentra tu hogar ideal'); ?></h1>
            <p><?php echo get_theme_mod('hero_subtitle', 'Expertos en bienes raíces con más de 15 años de experiencia'); ?></p>
            <div class="hero-buttons">
                <a href="#propiedades" class="btn btn-primary">Ver Propiedades</a>
                <a href="#contacto" class="btn btn-secondary">Contactar</a>
            </div>
        </div>
        <div class="hero-overlay"></div>
    </section>

    <!-- Banner de Información -->
    <section class="info-banner">
        <div class="container">
            <div class="info-grid">
                <div class="info-item">
                    <div class="info-icon">📊</div>
                    <h3><?php echo get_theme_mod('stat_properties', '500+'); ?></h3>
                    <p>Propiedades Vendidas</p>
                </div>
                <div class="info-item">
                    <div class="info-icon">⭐</div>
                    <h3><?php echo get_theme_mod('stat_rating', '4.9/5'); ?></h3>
                    <p>Calificación de Clientes</p>
                </div>
                <div class="info-item">
                    <div class="info-icon">👥</div>
                    <h3><?php echo get_theme_mod('stat_clients', '1000+'); ?></h3>
                    <p>Clientes Satisfechos</p>
                </div>
                <div class="info-item">
                    <div class="info-icon">🏆</div>
                    <h3><?php echo get_theme_mod('stat_years', '15+'); ?></h3>
                    <p>Años de Experiencia</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Servicios -->
    <section id="servicios" class="services">
        <div class="container">
            <div class="section-header">
                <h2>Nuestros Servicios</h2>
                <p>Ofrecemos soluciones completas para todas tus necesidades inmobiliarias</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">🏘️</div>
                    <h3>Compra y Venta</h3>
                    <p>Te ayudamos a encontrar la propiedad perfecta o a vender tu inmueble al mejor precio del mercado.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🔑</div>
                    <h3>Alquiler</h3>
                    <p>Amplia variedad de propiedades en alquiler para satisfacer todas tus necesidades.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">💰</div>
                    <h3>Asesoría Financiera</h3>
                    <p>Te orientamos en temas de créditos hipotecarios y financiamiento para tu propiedad.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">📋</div>
                    <h3>Tasación</h3>
                    <p>Valuaciones profesionales y precisas para tu propiedad con los mejores estándares.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🏢</div>
                    <h3>Inversión</h3>
                    <p>Oportunidades de inversión inmobiliaria con excelente retorno y asesoría especializada.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">📞</div>
                    <h3>Gestión</h3>
                    <p>Administración completa de propiedades con servicios profesionales y confiables.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Propiedades / Galería -->
    <section id="propiedades" class="properties">
        <div class="container">
            <div class="section-header">
                <h2>Propiedades Destacadas</h2>
                <p>Explora nuestra selección de propiedades exclusivas</p>
            </div>
            <div class="properties-grid">
                <?php
                // Puedes usar Custom Post Type para propiedades o mostrar contenido estático
                // Ejemplo con posts personalizados (requiere crear CPT)
                $properties = array(
                    array(
                        'title' => 'Casa Moderna en Zona Premium',
                        'location' => 'Ciudad, Zona Residencial',
                        'image' => 'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=800&h=600&fit=crop',
                        'badge' => 'Venta',
                        'badge_class' => '',
                        'rooms' => '4 Habitaciones',
                        'baths' => '3 Baños',
                        'size' => '250 m²',
                        'price' => '$350,000'
                    ),
                    array(
                        'title' => 'Apartamento Elegante Centro',
                        'location' => 'Centro de la Ciudad',
                        'image' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=800&h=600&fit=crop',
                        'badge' => 'Alquiler',
                        'badge_class' => 'property-badge-rent',
                        'rooms' => '2 Habitaciones',
                        'baths' => '2 Baños',
                        'size' => '120 m²',
                        'price' => '$1,200/mes'
                    ),
                    array(
                        'title' => 'Villa de Lujo con Piscina',
                        'location' => 'Zona Exclusiva',
                        'image' => 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=800&h=600&fit=crop',
                        'badge' => 'Venta',
                        'badge_class' => '',
                        'rooms' => '5 Habitaciones',
                        'baths' => '4 Baños',
                        'size' => '400 m²',
                        'price' => '$750,000'
                    ),
                    array(
                        'title' => 'Casa Familiar Espaciosa',
                        'location' => 'Barrio Residencial',
                        'image' => 'https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=800&h=600&fit=crop',
                        'badge' => 'Venta',
                        'badge_class' => '',
                        'rooms' => '3 Habitaciones',
                        'baths' => '2 Baños',
                        'size' => '180 m²',
                        'price' => '$280,000'
                    ),
                    array(
                        'title' => 'Loft Moderno Minimalista',
                        'location' => 'Zona Trendy',
                        'image' => 'https://images.unsplash.com/photo-1600585154084-4e5fe7c39198?w=800&h=600&fit=crop',
                        'badge' => 'Alquiler',
                        'badge_class' => 'property-badge-rent',
                        'rooms' => '1 Habitación',
                        'baths' => '1 Baño',
                        'size' => '80 m²',
                        'price' => '$900/mes'
                    ),
                    array(
                        'title' => 'Penthouse con Vista Panorámica',
                        'location' => 'Torre Premium',
                        'image' => 'https://images.unsplash.com/photo-1600607687644-c7171b42498b?w=800&h=600&fit=crop',
                        'badge' => 'Venta',
                        'badge_class' => '',
                        'rooms' => '3 Habitaciones',
                        'baths' => '3 Baños',
                        'size' => '200 m²',
                        'price' => '$550,000'
                    ),
                );
                
                foreach ($properties as $property) :
                ?>
                <div class="property-card">
                    <div class="property-image">
                        <img src="<?php echo esc_url($property['image']); ?>" alt="<?php echo esc_attr($property['title']); ?>">
                        <span class="property-badge <?php echo esc_attr($property['badge_class']); ?>"><?php echo esc_html($property['badge']); ?></span>
                    </div>
                    <div class="property-info">
                        <h3><?php echo esc_html($property['title']); ?></h3>
                        <p class="property-location">📍 <?php echo esc_html($property['location']); ?></p>
                        <div class="property-details">
                            <span>🛏️ <?php echo esc_html($property['rooms']); ?></span>
                            <span>🚿 <?php echo esc_html($property['baths']); ?></span>
                            <span>📐 <?php echo esc_html($property['size']); ?></span>
                        </div>
                        <div class="property-price"><?php echo esc_html($property['price']); ?></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Contacto -->
    <section id="contacto" class="contact">
        <div class="container">
            <div class="section-header">
                <h2>Contáctanos</h2>
                <p>Estamos aquí para ayudarte a encontrar tu propiedad ideal</p>
            </div>
            <div class="contact-wrapper">
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">📞</div>
                        <div>
                            <h3>Teléfono</h3>
                            <p><?php echo get_theme_mod('contact_phone_1', '+1 (555) 123-4567'); ?></p>
                            <p><?php echo get_theme_mod('contact_phone_2', '+1 (555) 987-6543'); ?></p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">✉️</div>
                        <div>
                            <h3>Email</h3>
                            <p><?php echo get_theme_mod('contact_email_1', 'info@inmobiliariapremium.com'); ?></p>
                            <p><?php echo get_theme_mod('contact_email_2', 'ventas@inmobiliariapremium.com'); ?></p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">📍</div>
                        <div>
                            <h3>Dirección</h3>
                            <p><?php echo get_theme_mod('contact_address_1', 'Av. Principal 123, Oficina 45'); ?></p>
                            <p><?php echo get_theme_mod('contact_address_2', 'Ciudad, País 12345'); ?></p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">🕒</div>
                        <div>
                            <h3>Horario</h3>
                            <p><?php echo get_theme_mod('contact_hours_1', 'Lunes - Viernes: 9:00 AM - 6:00 PM'); ?></p>
                            <p><?php echo get_theme_mod('contact_hours_2', 'Sábados: 10:00 AM - 2:00 PM'); ?></p>
                        </div>
                    </div>
                </div>
                <form class="contact-form" id="contactForm" method="post" action="">
                    <?php wp_nonce_field('contact_form', 'contact_nonce'); ?>
                    <div class="form-group">
                        <input type="text" id="name" name="name" placeholder="Nombre completo" required>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" id="phone" name="phone" placeholder="Teléfono" required>
                    </div>
                    <div class="form-group">
                        <select id="service" name="service" required>
                            <option value="">Selecciona un servicio</option>
                            <option value="compra">Compra</option>
                            <option value="venta">Venta</option>
                            <option value="alquiler">Alquiler</option>
                            <option value="tasacion">Tasación</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea id="message" name="message" rows="5" placeholder="Mensaje" required></textarea>
                    </div>
                    <button type="submit" name="contact_submit" class="btn btn-primary">Enviar Mensaje</button>
                    <?php if (isset($_GET['contact']) && $_GET['contact'] === 'success') : ?>
                        <p style="color: green; margin-top: 1rem;">¡Mensaje enviado con éxito! Te contactaremos pronto.</p>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </section>

<?php
get_footer();
?>

