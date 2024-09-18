<?php
/**
 * Template Name: My-Cart
 */

get_header();
?>
<div class="my-custom-cart-wrapper position-relative z-1">

    <div class="container-fluid z-1 h-100">
        <div class="row z-1">
            <div class="col-6 z-2">
                <div class="cart-lightblue-left-sidebar position-absolute z-2"></div>
            </div>
            <div class="col-6 z-2">
                <div class="cart-darkblue-right-sidebar position-absolute z-2"></div>
            </div>
            <div class="row z-3">


            </div>
            <!-- <div class="col-12">
                <?php
                // Display WooCommerce Cart
                // echo do_shortcode('[woocommerce_cart]');
                ?>
            </div> -->
        </div>
    </div>
</div>

<?php
get_footer();
