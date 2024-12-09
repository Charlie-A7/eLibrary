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
                        <div class="product-image-slider col-lg-5 p-0">

                            <!-- <?php if ($product_image): ?>
                                <img src="<?php echo esc_url($product_image); ?>" alt="<?php the_title_attribute(); ?>">
                            <?php endif; ?> -->

                            <?php
                            // Get the main product image
                            $main_image = get_the_post_thumbnail_url($product_id, 'full');

                            // Get gallery images
                            $gallery_images = get_post_meta($product_id, '_product_image_gallery', true);
                            $images = array();

                            // Add main image to the array
                            if ($main_image) {
                                $images[] = $main_image;
                            }

                            // Add gallery images to the array
                            if (!empty($gallery_images)) {
                                $gallery_ids = explode(',', $gallery_images); // Convert to array
                                foreach ($gallery_ids as $id) {
                                    $image_url = wp_get_attachment_url($id);
                                    if ($image_url) {
                                        $images[] = $image_url;
                                    }
                                }
                            }

                            // Check if there are any images
                            if (!empty($images)):
                                ?>
                                <!-- Slider Wrapper -->
                                <button class="slider-arrow left-arrow">&#10094;</button>

                                <div class="slider-wrapper">
                                    <div class="slider-images">
                                        <?php foreach ($images as $image): ?>
                                            <img src="<?php echo esc_url($image); ?>" alt="<?php the_title_attribute(); ?>"
                                                class="slider-image">
                                        <?php endforeach; ?>
                                    </div>

                                    <!-- Navigation Arrows -->


                                </div>
                                <button class="slider-arrow right-arrow">&#10095;</button>
                            <?php endif; ?>

                        </div>

                        <!-- Product Title and Description Section -->
                        <div class="col-lg-7 product_page_rightSection">
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
        const sliderImages = document.querySelector('.slider-images');
        const images = document.querySelectorAll('.slider-image');
        const leftArrow = document.querySelector('.left-arrow');
        const rightArrow = document.querySelector('.right-arrow');

        let currentIndex = 0;

        function updateSlider() {
            const offset = currentIndex * -100; // Move by 100% of the width
            sliderImages.style.transform = `translateX(${offset}%)`;
        }

        leftArrow.addEventListener('click', function () {
            currentIndex = (currentIndex === 0) ? images.length - 1 : currentIndex - 1;
            updateSlider();
        });

        rightArrow.addEventListener('click', function () {
            currentIndex = (currentIndex === images.length - 1) ? 0 : currentIndex + 1;
            updateSlider();
        });
    });
</script>

<?php get_footer(); ?>