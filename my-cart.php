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
                            <div class="Materials_title">
                                <h2>Materials</h2>
                            </div>
                            <?php
                            // Check if the cart is empty
                            if (WC()->cart->is_empty()) {
                                echo '<p class="left-padding1">Your cart is currently empty.</p>';
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
                                    $stock_quantity = $_product->get_stock_quantity();

                                    // Output the structured HTML for the cart item
                                    echo '

                                    <div class="cart-item z-2 d-flex justify-content-between align-items-center py-3 px-5 mb-3">
                                        <img src="' . esc_url($image_url) . '" class="cart-item-img" alt="' . esc_attr($title) . '">
                                        <div class="cart-item-details">
                                            <h2>' . esc_html($title) . '</h2>
                                            <div class="quantity-selector d-flex align-items-center my-2">
                                                <button class="quantity-btn minus" data-cart-item-key="' . esc_attr($item) . '"><span>-</span></button>
                                                <input type="text" value="' . esc_attr($quantity) . '" class="quantity-input" data-cart-item-key="' . esc_attr($item) . '" data-stock="' . esc_attr($stock_quantity) . '">
                                                <button class="quantity-btn plus" data-cart-item-key="' . esc_attr($item) . '"><span>+</span></button>
                                            </div>
                                            <p class="cart-item-price">Price: <span class="bookPrice">50.000</span> ل.ل</p>
                                        </div>
                                        <button class="cart-item-remove btn" data-cart-item-key="' . esc_attr($item) . '">
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

                            <p class="order-sum-text">Amount of Books: <span class="order-sum-import"></span></p>
                            <p class="order-sum-text-subtotal">Subtotal: <span class="order-sum-subtotal"></span></p>
                        </div>
                        <!-- yes (charlie) pokhetsi a tag eri yev classes aveltsoutsi -->
                        <a href="https://charlie.e-vents.me/my-checkout" class="btn cart-checkout-button w-100 d-flex justify-content-center align-items-center">CHECKOUT NOW</a>
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

        // Select all cart items
        const cartItems = document.querySelectorAll('.cart-item');

        // Loop through each cart item
        cartItems.forEach(function (cartItem) {
            // Get the relevant elements for each cart item
            const quantityInput = cartItem.querySelector('.quantity-input');
            const plusButton = cartItem.querySelector('.plus');
            const minusButton = cartItem.querySelector('.minus');
            const bookPriceElement = cartItem.querySelector('.bookPrice');

            // Get the stock quantity from the data attribute
            const stockQuantity = parseInt(quantityInput.getAttribute('data-stock'));

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

            function updateCartTotals(num, cartItemKey) {
                fetch(ajaxUrl, {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                    body: new URLSearchParams([['action', 'update_cart_totals'], ['quantity', num], ['cart_item_key', cartItemKey]])
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            document.querySelector('.order-sum-import').textContent = data.data.total_quantity;
                            document.querySelector('.order-sum-subtotal').textContent = data.data.fee_total;
                            console.log(data)
                        } else {
                            console.error('Failed to update totals');
                        }
                    })
                    .catch(error => console.error('Error:', error));
            }


            // Increment quantity on "+" button click
            plusButton.addEventListener('click', function () {
                let quantity = parseInt(quantityInput.value);
                const cartItemKey = this.getAttribute('data-cart-item-key');
                // Check if the quantity exceeds the available stock
                if (quantity < stockQuantity) {
                    quantityInput.value = quantity + 1;
                    updatePrice(); // Update the price
                    updateCartTotals(1, cartItemKey);
                } else {
                    alert('Cannot add more than available stock (' + stockQuantity + ').');
                }
            });

            // Decrement quantity on "-" button click
            minusButton.addEventListener('click', function () {
                let quantity = parseInt(quantityInput.value);
                const cartItemKey = this.getAttribute('data-cart-item-key');
                if (quantity > 1) { // Prevent going below 1
                    quantityInput.value = quantity - 1;
                    updatePrice(); // Update the price
                    updateCartTotals(-1, cartItemKey);
                }
            });

            //input event listener
            quantityInput.addEventListener('input', function () {
                let quantity = parseInt(quantityInput.value);
                const cartItemKey = this.getAttribute('data-cart-item-key');
                if (!isNaN(quantity) && quantity > 0 && quantity <= stockQuantity) {
                    updatePrice();
                    updateCartTotals(quantity, cartItemKey);
                } else if (quantity > stockQuantity) {
                    alert('Cannot add more than available stock (' + stockQuantity + ').');
                    quantityInput.value = stockQuantity;
                    updatePrice();
                    updateCartTotals(quantity, cartItemKey);
                } else {
                    quantityInput.value = 1;
                    updatePrice();
                    updateCartTotals(quantity, cartItemKey);
                }
            });

            // Validate on blur (when the user leaves the input field)
            // quantityInput.addEventListener('blur', function () {
            //     let quantity = parseInt(quantityInput.value);
            //     if (isNaN(quantity) || quantity < 1) {
            //         quantityInput.value = 1; // Reset to 1 if invalid
            //     } else if (quantity > stockQuantity) {
            //         quantityInput.value = stockQuantity; // Reset to max stock if too high
            //     }
            //     updatePrice(); // Always update price on blur
            //     updateCartTotals();
            // });
        });


        // --- Remove button functionality ---
        const removeButtons = document.querySelectorAll('.cart-item-remove');

        removeButtons.forEach(function (button) {
            button.addEventListener('click', function (event) {
                event.preventDefault();

                // Get the cart item key
                const cartItemKey = this.getAttribute('data-cart-item-key');
                console.log('Cart Item Key:', cartItemKey); // This should now log the correct key

                // AJAX call to remove the item from the cart
                fetch(ajaxUrl, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: new URLSearchParams([
                        ['action', 'remove_cart_item'], // Action hook for PHP
                        ['cart_item_key', cartItemKey] // Send cart item key to remove the item
                    ])
                })
                    .then(response => response.json())
                    .then(data => {
                        console.log(data); // Log the entire response for debugging

                        if (data.success) {
                            // Remove the cart item from the DOM
                            button.closest('.cart-item').remove();
                            console.log('Item removed successfully!');
                        } else {
                            console.error('Error:', data.message);
                        }
                    })
                    .catch(error => console.error('AJAX Error:', error));
            });
        });
    });

</script>

<?php
get_footer();
