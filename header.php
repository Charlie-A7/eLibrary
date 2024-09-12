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

<body <?php body_class(); ?>>

    <div id="page" class="site main_page_wrapper">

        <header id="masthead" class="site-header" role="banner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-4 site-branding d-flex justify-content-center justify-content-md-start align-items-center px-4">
                        <div class="row">
                            <div class="col-4 text-center">
                                <img src="https://charlie.e-vents.me/wp-content/themes/main/inc/assets/images/Life_Agape_Logo.jpg" alt="LifeAgape">
                            </div>
                            <div class="col-8 d-flex align-items-center text-left px-1">
                                <h5 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                rel="home"> <span class="arabic-bold">حياة المحبة في لبنان</span> <br><?php bloginfo('name'); ?></a></h5>
                            </div>
                        </div>
                    </div>

                    <div class="d-none col-md-8 d-md-flex align-items-center">
                        <div class="d-flex flex-column w-100">
                            <nav id="site-navigation" class="main-navigation" role="navigation"
                                aria-label="<?php esc_attr_e('Primary Menu', 'your-theme-text-domain'); ?>">
                                <?php
                                // Displays the primary menu, you can assign the menu in Appearance > Menus in the WordPress admin
                                wp_nav_menu(array(
                                    'theme_location' => 'primary',  // Use the registered location
                                    'menu_id' => 'primary-menu',
                                    'container' => false,      // Remove the surrounding div
                                ));
                                ?>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div id="content" class="site-content">