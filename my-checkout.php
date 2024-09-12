<?php
/**
 * Template Name: My-Checkout
 */

get_header();
?>
<div class="my-custom-checkout-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                    // Display WooCommerce Cart
                    echo do_shortcode('[woocommerce_checkout]');
                ?>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
