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
                    <div class="col-3 site-branding d-flex justify-content-start align-items-center">
                        <div class="row">
                            <div class="col-4 text-center">
                                <img src="https://charlie.e-vents.me/wp-content/themes/main/inc/assets/images/Life_Agape_Logo.jpg" alt="LifeAgape">
                            </div>
                            <div class="col-8 d-flex align-items-center text-center">
                                <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                rel="home"><?php bloginfo('name'); ?></a></h1>
                            </div>
                        </div>
                    </div>

                    <div class="col-9">
                        <div class="d-flex flex-column">
                                <!-- Navigation Menu -->
                            <nav id="site-navigation" class="main-navigation d-flex" role="navigation"
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

        <div id="content" class="site-content"></div>