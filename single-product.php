<?php
/**
 * Template Name: single-product
 */

get_header(); ?>

<div class="custom-single-product">

    <?php
    // Check if it's a single product page
    if ( have_posts() ) : 
        while ( have_posts() ) : the_post(); 
        
            // Get the product ID
            $product_id = get_the_ID();
            
            // Fetch custom fields (if using Advanced Custom Fields or similar plugins)
            $product_price = get_post_meta( $product_id, '_price', true );
            $product_description = get_post_meta( $product_id, '_description', true );
            $product_image = get_the_post_thumbnail_url( $product_id, 'full' );

            // Output the product details
            ?>
            <div class="product-header">
                <h1><?php the_title(); ?></h1>
                <div class="product-image">
                    <?php if ( $product_image ) : ?>
                        <img src="<?php echo esc_url( $product_image ); ?>" alt="<?php the_title_attribute(); ?>">
                    <?php endif; ?>
                </div>
                <div class="product-price">
                    <span><?php echo esc_html( $product_price ); ?></span>
                </div>
            </div>
            <div class="product-description">
                <?php echo wp_kses_post( $product_description ); ?>
            </div>
            <?php
            
        endwhile; 
    else :
        echo '<p>No product found.</p>';
    endif; 
    ?>

</div>

<?php get_footer(); ?>
