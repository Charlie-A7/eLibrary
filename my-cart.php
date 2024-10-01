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
                                    $raw_price = $_product->get_price();
                                    $currency_symbol = get_woocommerce_currency_symbol();
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
                                            <p class="cart-item-price">Price: <span class="bookPrice">50.000</span> ل.ل</p>
                                        </div>
                                        <button class="cart-item-remove btn" data-cart-item-key="<?php echo esc_attr($item); ?>">
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

<script>
    var ajaxUrl = '<?php echo esc_url(admin_url("admin-ajax.php")); ?>';
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const quantityInput = document.querySelector('.quantity-input');
        const plusButton = document.querySelector('.plus');
        const minusButton = document.querySelector('.minus');
        const bookPriceElement = document.querySelector('.bookPrice');

        // Base price of the product (change this to your actual product's unit price)
        const unitPrice = 50000;

        // Create a number formatter for formatting with dots as thousand separators
        const formatter = new Intl.NumberFormat('de-DE', {
            minimumFractionDigits: 0, // No decimal places
            maximumFractionDigits: 3
        });

        // Function to update the price based on the current quantity
        function updatePrice() {
            const quantity = parseInt(quantityInput.value);
            const totalPrice = unitPrice * quantity; // Multiply base price by quantity
            const formattedPrice = formatter.format(totalPrice); // Format the price
            bookPriceElement.textContent = formattedPrice; // Update price span
        }

        // Increment quantity on "+" button click
        plusButton.addEventListener('click', function () {
            let quantity = parseInt(quantityInput.value);
            quantityInput.value = quantity + 1;
            updatePrice(); // Update the price
        });

        // Decrement quantity on "-" button click
        minusButton.addEventListener('click', function () {
            let quantity = parseInt(quantityInput.value);
            if (quantity > 1) { // Prevent going below 1
                quantityInput.value = quantity - 1;
                updatePrice(); // Update the price
            }
        });

        // --- Remove button functionality ---
        const removeButtons = document.querySelectorAll('.cart-item-remove');

        removeButtons.forEach(function (button) {
            button.addEventListener('click', function (event) {
                event.preventDefault();

                // Get the cart item key
                const cartItemKey = this.getAttribute('data-cart-item-key');

                // AJAX call to remove the item from the cart
                fetch(ajaxUrl, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: new URLSearchParams([
                        ['action', 'remove_cart_item'], // Action hook for PHP
                        ['cart_item_key', cartItemKey] // Cart Item Key to remove
                    ])
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Remove the cart item from the DOM
                            button.closest('.cart-item').remove();

                            // Optionally, update total price/quantity
                            console.log(data.message); // For debugging purposes
                            console.log('New Total Price:', data.new_total_price);
                            console.log('Cart Count:', data.cart_count);
                        } else {
                            console.error(data.message);
                        }
                    })
                    .catch(error => console.error('Error:', error));
            });
        });
    });

</script>

<?php
get_footer();
