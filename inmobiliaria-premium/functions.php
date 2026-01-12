<?php
/**
 * Functions and definitions para el tema Inmobiliaria Premium
 *
 * @package Inmobiliaria_Premium
 */

// Prevenir acceso directo
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Configuración del tema
 */
function inmobiliaria_premium_setup() {
    // Soporte para títulos automáticos
    add_theme_support('title-tag');
    
    // Soporte para imágenes destacadas
    add_theme_support('post-thumbnails');
    
    // Soporte para HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Registrar menús de navegación
    register_nav_menus(array(
        'primary' => __('Menú Principal', 'inmobiliaria-premium'),
    ));
}
add_action('after_setup_theme', 'inmobiliaria_premium_setup');

/**
 * Enqueue scripts y estilos
 */
function inmobiliaria_premium_scripts() {
    // Estilos del tema
    wp_enqueue_style('inmobiliaria-premium-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap', array(), null);
    
    // JavaScript del tema
    wp_enqueue_script('inmobiliaria-premium-script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true);
    
    // Si usas jQuery (opcional)
    // wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'inmobiliaria_premium_scripts');

/**
 * Registrar áreas de widgets (opcional)
 */
function inmobiliaria_premium_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar Principal', 'inmobiliaria-premium'),
        'id'            => 'sidebar-1',
        'description'   => __('Widgets para el sidebar principal', 'inmobiliaria-premium'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'inmobiliaria_premium_widgets_init');

/**
 * Personalizar el formulario de contacto (usar con Contact Form 7 o similar)
 * O crear un shortcode personalizado
 */
function inmobiliaria_premium_contact_form_handler() {
    if (isset($_POST['contact_submit'])) {
        // Procesar formulario aquí
        // Por seguridad, usar wp_mail() o un plugin como Contact Form 7
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $phone = sanitize_text_field($_POST['phone']);
        $service = sanitize_text_field($_POST['service']);
        $message = sanitize_textarea_field($_POST['message']);
        
        // Enviar email
        $to = get_option('admin_email');
        $subject = 'Nuevo contacto desde ' . get_bloginfo('name');
        $body = "Nombre: $name\nEmail: $email\nTeléfono: $phone\nServicio: $service\n\nMensaje:\n$message";
        $headers = array('Content-Type: text/html; charset=UTF-8');
        
        wp_mail($to, $subject, $body, $headers);
        
        // Redirigir con mensaje de éxito
        wp_redirect(add_query_arg('contact', 'success', home_url()));
        exit;
    }
}
add_action('init', 'inmobiliaria_premium_contact_form_handler');

/**
 * Agregar soporte para Customizer
 */
function inmobiliaria_premium_customize_register($wp_customize) {
    // Sección Hero
    $wp_customize->add_section('inmobiliaria_hero', array(
        'title'    => __('Hero / Banner Principal', 'inmobiliaria-premium'),
        'priority' => 25,
    ));
    
    $wp_customize->add_setting('hero_title', array(
        'default'           => 'Encuentra tu hogar ideal',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_title', array(
        'label'   => __('Título del Hero', 'inmobiliaria-premium'),
        'section' => 'inmobiliaria_hero',
        'type'    => 'text',
    ));
    
    $wp_customize->add_setting('hero_subtitle', array(
        'default'           => 'Expertos en bienes raíces con más de 15 años de experiencia',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_subtitle', array(
        'label'   => __('Subtítulo del Hero', 'inmobiliaria-premium'),
        'section' => 'inmobiliaria_hero',
        'type'    => 'textarea',
    ));
    
    // Sección Estadísticas
    $wp_customize->add_section('inmobiliaria_stats', array(
        'title'    => __('Estadísticas / Banner de Información', 'inmobiliaria-premium'),
        'priority' => 26,
    ));
    
    $wp_customize->add_setting('stat_properties', array('default' => '500+', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('stat_properties', array('label' => 'Propiedades Vendidas', 'section' => 'inmobiliaria_stats', 'type' => 'text'));
    
    $wp_customize->add_setting('stat_rating', array('default' => '4.9/5', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('stat_rating', array('label' => 'Calificación', 'section' => 'inmobiliaria_stats', 'type' => 'text'));
    
    $wp_customize->add_setting('stat_clients', array('default' => '1000+', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('stat_clients', array('label' => 'Clientes Satisfechos', 'section' => 'inmobiliaria_stats', 'type' => 'text'));
    
    $wp_customize->add_setting('stat_years', array('default' => '15+', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('stat_years', array('label' => 'Años de Experiencia', 'section' => 'inmobiliaria_stats', 'type' => 'text'));
    
    // Sección Contacto
    $wp_customize->add_section('inmobiliaria_contact', array(
        'title'    => __('Información de Contacto', 'inmobiliaria-premium'),
        'priority' => 27,
    ));
    
    $wp_customize->add_setting('contact_phone_1', array('default' => '+1 (555) 123-4567', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('contact_phone_1', array('label' => 'Teléfono 1', 'section' => 'inmobiliaria_contact', 'type' => 'text'));
    
    $wp_customize->add_setting('contact_phone_2', array('default' => '+1 (555) 987-6543', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('contact_phone_2', array('label' => 'Teléfono 2', 'section' => 'inmobiliaria_contact', 'type' => 'text'));
    
    $wp_customize->add_setting('contact_email_1', array('default' => 'info@inmobiliariapremium.com', 'sanitize_callback' => 'sanitize_email'));
    $wp_customize->add_control('contact_email_1', array('label' => 'Email 1', 'section' => 'inmobiliaria_contact', 'type' => 'email'));
    
    $wp_customize->add_setting('contact_email_2', array('default' => 'ventas@inmobiliariapremium.com', 'sanitize_callback' => 'sanitize_email'));
    $wp_customize->add_control('contact_email_2', array('label' => 'Email 2', 'section' => 'inmobiliaria_contact', 'type' => 'email'));
    
    $wp_customize->add_setting('contact_address_1', array('default' => 'Av. Principal 123, Oficina 45', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('contact_address_1', array('label' => 'Dirección Línea 1', 'section' => 'inmobiliaria_contact', 'type' => 'text'));
    
    $wp_customize->add_setting('contact_address_2', array('default' => 'Ciudad, País 12345', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('contact_address_2', array('label' => 'Dirección Línea 2', 'section' => 'inmobiliaria_contact', 'type' => 'text'));
    
    $wp_customize->add_setting('contact_hours_1', array('default' => 'Lunes - Viernes: 9:00 AM - 6:00 PM', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('contact_hours_1', array('label' => 'Horario Línea 1', 'section' => 'inmobiliaria_contact', 'type' => 'text'));
    
    $wp_customize->add_setting('contact_hours_2', array('default' => 'Sábados: 10:00 AM - 2:00 PM', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('contact_hours_2', array('label' => 'Horario Línea 2', 'section' => 'inmobiliaria_contact', 'type' => 'text'));
    
    // Sección de colores
    $wp_customize->add_section('inmobiliaria_colors', array(
        'title'    => __('Colores del Tema', 'inmobiliaria-premium'),
        'priority' => 30,
    ));
    
    $wp_customize->add_setting('primary_color', array(
        'default'           => '#2563eb',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'primary_color', array(
        'label'    => __('Color Primario', 'inmobiliaria-premium'),
        'section'  => 'inmobiliaria_colors',
        'settings' => 'primary_color',
    )));
}
add_action('customize_register', 'inmobiliaria_premium_customize_register');

