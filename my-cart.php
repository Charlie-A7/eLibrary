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
        <div class="row z-2 justify-content-center align-items-center h-100">

            <div class="col-10 z-2 px-0">
                <div class="row Cart-small-container z-2">
                    <div class="col-8 z-2 px-0">
                        <table class="cart-title">
                            <tr>
                                <td class="image-cell">
                                    <img class="cartIconReversed"
                                        src="https://charlie.e-vents.me/wp-content/themes/main/inc/assets/images/header/cart-icon-black.png">
                                </td>
                                <td>
                                    <h1 class="z-2 cart-title-text">YOUR CART</h1>
                                </td>
                            </tr>
                        </table>

                        <div class="cart-items-container">
                            <?php
                            // Check if the cart is empty
                            if (WC()->cart->is_empty()) {
                                echo '<p>Your cart is currently empty.</p>';
                            } else {
                                global $woocommerce;
                                $items = $woocommerce->cart->get_cart();

                                // Loop through the cart items
                                foreach ($items as $item => $values) {
                                    // Get product data
                                    $_product = wc_get_product($values['data']->get_id());

                                    // Get product details
                                    $title = $_product->get_title();
                                    $price = wc_price($_product->get_price()); // Display formatted price
                                    $image_url = wp_get_attachment_url($_product->get_image_id());
                                    $quantity = $values['quantity'];

                                    // Output the structured HTML for the cart item
                                    echo '
                                    <div class="cart-item z-2 d-flex justify-content-between align-items-center py-3 px-5 mb-3">
                                        <img src="' . esc_url($image_url) . '" class="cart-item-img" alt="' . esc_attr($title) . '">
                                        <div class="cart-item-details">
                                            <h2>' . esc_html($title) . '</h2>
                                            <div class="quantity-selector d-flex align-items-center my-2">
                                                <button class="quantity-btn minus">-</button>
                                                <input type="text" value="' . esc_attr($quantity) . '" class="quantity-input">
                                                <button class="quantity-btn plus">+</button>
                                            </div>
                                            <p class="cart-item-price">Price: ' . esc_html($price) . '</p>
                                        </div>
                                        <button class="cart-item-remove btn">
                                            <img src="https://charlie.e-vents.me/wp-content/themes/main/inc/assets/images/bin.png">
                                        </button>
                                    </div>';
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-4 z-2 cart-right-section">
                        <div class="order-summary p-3">
                            <h3>Order Summary</h3>
                            <p class="order-sum-text">Amount of Books: <span class="order-sum-import">
                                    30</span></p>
                            <p class="order-sum-text">Subtotal: <span class="order-sum-import"> LBP:
                                    2,000,000</span></p>
                        </div>
                        <button class="btn cart-checkout-button w-100">CHECKOUT NOW</button>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
</div>
<?php
get_footer();
