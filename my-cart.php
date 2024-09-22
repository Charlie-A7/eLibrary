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
            <div class="col-1"></div>

            <div class="col-10 z-2 px-0">
                <div class="row Cart-small-container z-2">
                    <div class="col-8 z-2">
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
                            <div class="cart-item z-2 d-flex justify-content-between align-items-center py-3 px-5 mb-3">
                                <img src="https://charlie.e-vents.me/wp-content/themes/main/inc/assets/images/homepage/Library_img.jpg"
                                    class="cart-item-img">
                                <div class="cart-item-details">
                                    <h2>كتاب ... وقرار - تأليف: جوش ماكدویل</h2>
                                    <div class="quantity-selector d-flex align-items-center my-2">
                                        <button class="quantity-btn minus">-</button>
                                        <input type="text" value="20" class="quantity-input">
                                        <button class="quantity-btn plus">+</button>
                                    </div>
                                    <p class="cart-item-price">LBP: 1,000,000</p>
                                </div>
                                <button class="cart-item-remove btn">
                                    <img
                                        src="https://charlie.e-vents.me/wp-content/themes/main/inc/assets/images/bin.png">
                                </button>
                            </div>
                            <div class="cart-item z-2 d-flex justify-content-between align-items-center py-3 px-5 mb-3">
                                <img src="https://charlie.e-vents.me/wp-content/themes/main/inc/assets/images/homepage/Library_img.jpg"
                                    class="cart-item-img">
                                <div class="cart-item-details">
                                    <h2>كتاب ... وقرار - تأليف: جوش ماكدویل</h2>
                                    <div class="quantity-selector d-flex align-items-center my-2">
                                        <button class="quantity-btn minus">-</button>
                                        <input type="text" value="20" class="quantity-input">
                                        <button class="quantity-btn plus">+</button>
                                    </div>
                                    <p class="cart-item-price">LBP: 1,000,000</p>
                                </div>
                                <button class="cart-item-remove btn">
                                    <img
                                        src="https://charlie.e-vents.me/wp-content/themes/main/inc/assets/images/bin.png">
                                </button>
                            </div>
                            <div class="cart-item z-2 d-flex justify-content-between align-items-center py-3 px-5 mb-3">
                                <img src="https://charlie.e-vents.me/wp-content/themes/main/inc/assets/images/homepage/Library_img.jpg"
                                    class="cart-item-img">
                                <div class="cart-item-details">
                                    <h2>كتاب ... وقرار - تأليف: جوش ماكدویل</h2>
                                    <div class="quantity-selector d-flex align-items-center my-2">
                                        <button class="quantity-btn minus">-</button>
                                        <input type="text" value="20" class="quantity-input">
                                        <button class="quantity-btn plus">+</button>
                                    </div>
                                    <p class="cart-item-price">LBP: 1,000,000</p>
                                </div>
                                <button class="cart-item-remove btn">
                                    <img
                                        src="https://charlie.e-vents.me/wp-content/themes/main/inc/assets/images/bin.png">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 z-2">
                        <div class="order-summary p-3">
                            <h3>Order Summary</h3>
                            <p><strong>Amount of Books:</strong> 30</p>
                            <p><strong>Subtotal:</strong> LBP: 2,000,000</p>
                            <button class="btn cart-checkout-button">CHECKOUT NOW</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-1"></div>
    </div>
</div>
</div>
<?php
get_footer();
