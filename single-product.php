<?php
/**
 * Template Name: single-product
 */

get_header(); ?>

<div class="my-custom-product-page position-relative z-0 h100">

    <div class="singleProduct-lightblue-left-sidebar position-absolute z-1"></div>
    <div class="singleProduct-darkblue-right-sidebar position-absolute z-1"></div>


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

                            <!-- <?php if ($product_image): ?>
                                <img src="<?php echo esc_url($product_image); ?>" alt="<?php the_title_attribute(); ?>">
                            <?php endif; ?> -->

                            <?php
                            // Get the product image and gallery images
                            if ($product_image):
                                echo '<div class="product-slider-container">';
                                echo '<div class="product-slider">';

                                // Display the main product image
                                echo '<img src="' . esc_url($product_image) . '" alt="' . get_the_title() . '" class="product-slider-image">';

                                // Get additional gallery images
                                $gallery_image_ids = $_product->get_gallery_image_ids();

                                // Loop through gallery images
                                if (!empty($gallery_image_ids)) {
                                    foreach ($gallery_image_ids as $gallery_image_id) {
                                        $gallery_image_url = wp_get_attachment_url($gallery_image_id);
                                        echo '<img src="' . esc_url($gallery_image_url) . '" alt="' . get_the_title() . '" class="product-slider-image">';
                                    }
                                }

                                echo '</div>'; // Close slider container
                    
                                // Add navigation arrows
                                echo '<button class="product-slider-prev">&lt;</button>';
                                echo '<button class="product-slider-next">&gt;</button>';

                                echo '</div>'; // Close slider wrapper
                            endif;
                            ?>
                        </div>

                        <!-- Product Title and Description Section -->
                        <div class="col-7 product_page_rightSection">
                            <div class="product-header-box">
                                <h2><?php the_title(); ?></h2>
                            </div>

                            <div class="product-description mt-3">
                                <?php echo wp_kses_post($product_description); ?>
                            </div>

                            <div class="d-flex flex-column">
                                <a href="<?php the_permalink(); ?>" class="singleProduct-addButton">
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

<script>

    document.addEventListener('DOMContentLoaded', function () {
        const slider = document.querySelector('.product-slider');
        const slides = document.querySelectorAll('.product-slider-image');
        const prevButton = document.querySelector('.product-slider-prev');
        const nextButton = document.querySelector('.product-slider-next');
        let currentIndex = 0;

        function updateSliderPosition() {
            slider.style.transform = `translateX(-${currentIndex * 100}%)`;
        }

        prevButton.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                updateSliderPosition();
            }
        });

        nextButton.addEventListener('click', () => {
            if (currentIndex < slides.length - 1) {
                currentIndex++;
                updateSliderPosition();
            }
        });
    });

</script>

<?php get_footer(); ?>