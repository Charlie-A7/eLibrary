<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> class="quicksand-regular-font">

    <div id="page" class="site main_page_wrapper">

        <header id="masthead" class="site-header d-flex align-items-center" role="banner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 col-lg-4 site-branding d-flex justify-content-start align-items-center px-4">
                        <div class="row w-100">
                            <div class="col-4 text-center px-1">
                                <img src="https://charlie.e-vents.me/wp-content/themes/main/inc/assets/images/header/Life_Agape_Logo.jpg" alt="LifeAgape">
                            </div>
                            <div class="col-8 d-flex align-items-center text-left px-1">
                                <h4 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                rel="home"> <span class="arabic-mediumbold-font">حياة المحبة في لبنان</span> <br><?php bloginfo('name'); ?></a></h4>
                            </div>
                        </div>
                    </div>

                    <div class="d-none col-lg-8 d-lg-flex align-items-center">
                        <div class="d-flex flex-column w-100">
                            <nav id="site-navigation" class="main-navigation" role="navigation"
                                aria-label="<?php esc_attr_e('Primary Menu', 'your-theme-text-domain'); ?>">
                                <?php
                                // Displays the primary menu, you can assign the menu in Appearance > Menus in the WordPress admin
                                wp_nav_menu(array(
                                    'theme_location' => 'primary',
                                    'menu_id' => 'primary-menu',
                                    'container' => false,
                                ));
                                ?>
                            </nav>
                        </div>
                    </div>

                    <div class="col-6 d-lg-none d-flex align-items-center justify-content-end mobile-menu-div">
                        <button class="hamburger p-3" aria-label="Menu" id="hamburger-button">
                            <i class="fas fa-bars"></i>
                        </button>
                        <a href="<?php echo esc_url(get_permalink('cart')); ?>" class="mobile-cart-button p-3">
                            <img src="https://charlie.e-vents.me/wp-content/themes/main/inc/assets/images/header/cart-icon-black.png" alt="cart">
                        </a>
                        <nav id="site-mobile-navigation" class=" d-none mobile-navigation position-absolute" role="navigation"
                            aria-label="<?php esc_attr_e('Primary Menu', 'your-theme-text-domain'); ?>">
                            <?php
                            // Displays the primary menu, you can assign the menu in Appearance > Menus in the WordPress admin
                            wp_nav_menu(array(
                                'theme_location' => 'mobile',
                                'menu_id' => 'movile-menu',
                                'container' => false,
                            ));
                            ?>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <div id="content" class="site-content">

<script>
    document.getElementById('hamburger-button').addEventListener('click', function() {
        const mobileNav = document.getElementById('site-mobile-navigation');
        
        if (mobileNav.classList.contains('d-none')) {
            mobileNav.classList.remove('d-none');
            mobileNav.classList.add('d-block');
        } else {
            mobileNav.classList.add('d-none');
            mobileNav.classList.remove('d-block');
        }
    });
</script>