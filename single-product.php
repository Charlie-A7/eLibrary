<?php
/**
 * Template Name: single-product
 */

get_header(); ?>

<div class="container-fluid single-product-container position-relative">

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
            <div class="single_product_container">
                <div class="row">
                    <div class="singleProduct-blue-left-sidebar col-1"></div>

                    <div class="product-header col-10">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="singleProduct-blue-right-sidebar col-1"></div>
                    <div class="product-image col-4">
                        <?php if ($product_image): ?>
                            <img src="<?php echo esc_url($product_image); ?>" alt="<?php the_title_attribute(); ?>">
                        <?php endif; ?>
                    </div>

                    <div class="product-description col-5">
                        <?php echo wp_kses_post($product_description); ?>
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

<?php get_footer(); ?>