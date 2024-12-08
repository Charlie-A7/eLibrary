<?php
/**
 * Template Name: single-product
 */

get_header(); ?>

<div class="my-custom-product-page position-relative z-0 h100">

    <div class="cart-lightblue-left-sidebar position-absolute z-1"></div>
    <div class="cart-darkblue-right-sidebar position-absolute z-1"></div>


    <div class="container-fluid single-product-container position-relative z-2">

        <?php
        // Check if it's a single product page
        if (have_posts()):
            while (have_posts()):
                the_post();

                // Get the product ID
                $product_id = get_the_ID();

                // Fetch custom fields (if using Advanced Custom Fields or similar plugins)
                $product_description = get_post_field('post_content', $product_id);
                $product_image = get_the_post_thumbnail_url($product_id, 'full');

                // Output the product details
                ?>
                <div class="container-fluid single-product-inner-container z-2">
                    <div class="row">

                        <!-- Product Image Section -->
                        <div class="product-image col-5">
                            <?php if ($product_image): ?>
                                <img src="<?php echo esc_url($product_image); ?>" alt="<?php the_title_attribute(); ?>">
                            <?php endif; ?>
                        </div>

                        <!-- blank -->
                        <div class="col-1"></div>

                        <!-- Product Title and Description Section -->
                        <div class="col-6 product_page_rightSection">
                            <div class="product-header">
                                <h1><?php the_title(); ?></h1>
                            </div>

                            <div class="product-description mt-3">
                                <?php echo wp_kses_post($product_description); ?>
                            </div>

                            <div class="d-flex flex-column">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium'); ?>
                                    <?php woocommerce_template_loop_add_to_cart(); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php

            endwhile;
        else:
            echo '<p>No product found.</p>';
        endif;
        ?>
    </div>
</div>
<?php get_footer(); ?>