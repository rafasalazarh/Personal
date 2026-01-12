<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <!-- Header -->
    <header class="header">
        <nav class="navbar">
            <div class="container">
                <div class="nav-wrapper">
                    <div class="logo">
                        <h2>
                            <a href="<?php echo esc_url(home_url('/')); ?>" style="text-decoration: none; color: inherit;">
                                🏠 <?php bloginfo('name'); ?>
                            </a>
                        </h2>
                    </div>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class'     => 'nav-menu',
                        'container'      => false,
                        'fallback_cb'    => 'inmobiliaria_premium_fallback_menu',
                    ));
                    ?>
                    <div class="hamburger" id="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </nav>
    </header>

<?php
// Menú de respaldo si no hay menú configurado
function inmobiliaria_premium_fallback_menu() {
    echo '<ul class="nav-menu" id="navMenu">';
    echo '<li><a href="' . esc_url(home_url('/')) . '#inicio">Inicio</a></li>';
    echo '<li><a href="' . esc_url(home_url('/')) . '#servicios">Servicios</a></li>';
    echo '<li><a href="' . esc_url(home_url('/')) . '#propiedades">Propiedades</a></li>';
    echo '<li><a href="' . esc_url(home_url('/')) . '#contacto">Contacto</a></li>';
    echo '</ul>';
}
?>

