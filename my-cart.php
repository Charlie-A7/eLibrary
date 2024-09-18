<?php
/**
 * Template Name: My-Cart
 */

get_header();
?>
<div class="my-custom-cart-wrapper z-1">

    <div class="cart-lightblue-left-sidebar position-absolute z-2"></div>
    <div class="cart-darkblue-right-sidebar position-absolute z-2"></div>


    <div class="container z-3">
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
