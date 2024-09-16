<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<?php
get_header();
?>

<div class="homeDiv py-5 position-relative">
    <div class="blue-left-sidebar position-absolute"></div>
    <div class="blue-right-sidebar position-absolute"></div>
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-6 z-1 h-100 d-flex flex-column justify-content-center">
                <div class="padding-left">
                    <h1>Welcome to<br>our resource<br>library</h1>
                    <h4>Browse our selection, and order what you need.</h4>
                </div>
            </div>
            <div class="col-6 z-1 h-100">
                <!-- WooCommerce Product Display -->
                <?php
                /**
                 * woocommerce_before_main_content hook.
                 *
                 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
                 * @hooked woocommerce_breadcrumb - 20
                 */
                do_action( 'woocommerce_before_main_content' );
                ?>

                <?php while ( have_posts() ) : ?>
                    <?php the_post(); ?>

                    <?php wc_get_template_part( 'content', 'single-product' ); // Main product template ?>

                <?php endwhile; // end of the loop. ?>

                <?php
                /**
                 * woocommerce_after_main_content hook.
                 *
                 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
                 */
                do_action( 'woocommerce_after_main_content' );
                ?>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();