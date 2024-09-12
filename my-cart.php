<?php
/**
 * Template Name: My-Cart
 */

get_header();
?>
<div class="my-custom-cart-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                    // Display WooCommerce Cart
                    echo do_shortcode('[woocommerce_cart]');
                ?>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
