<?php
/**
 * Template Name: My-Cart
 */

get_header();
?>
<div class="my-custom-cart-wrapper position-relative z-0 h-100">

    <div class="cart-lightblue-left-sidebar position-absolute z-1"></div>
    <div class="cart-darkblue-right-sidebar position-absolute z-1"></div>

    <div class="container Cart-container h-100 z-2">
        <div class="row">
            <!-- <div class="col-12">
                <?php
                // Display WooCommerce Cart
                // echo do_shortcode('[woocommerce_cart]');
                ?>
            </div> -->
        </div>
        <div class="row z-2 justify-content-center align-items-center h-100">
            <div class="col-1"></div>

            <div class="col-10 z-2">
                <div class="row z-2">
                    <div class="col-8 z-2">
                        <table>
                            <tr>
                                <td>
                                    <img class="cartIconReversed"
                                        src="https://charlie.e-vents.me/wp-content/themes/main/inc/assets/images/header/cart-icon-black.png">
                                </td>
                                <td>
                                    <h1 class="z-2">YOUR CART</h1>
                                </td>
                            </tr>
                        </table>

                        <div class="BooksInCart z-2">

                        </div>
                    </div>
                    <div class="col-4 z-2">

                    </div>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
</div>
<?php
get_footer();
