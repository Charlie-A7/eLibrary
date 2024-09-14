<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<section id="primary" class="content-area">

	<header class="page-header">
		<h1 class="page-title"><?php printf(esc_html__('Search Results for: %s', 'wp-bootstrap-starter'), '<span>' . get_search_query() . '</span>'); ?></h1>
	</header><!-- .page-header -->

    <main id="main" class="site-main" role="main">
        <?php
        // Define the search term
        $search_term = isset($_GET['s']) ? sanitize_text_field($_GET['s']) : '';

        // Custom query for WooCommerce products in the "materials" category (limit 19)
        $args1 = array(
            'post_type' => 'product',
            'posts_per_page' => 19,
            's' => $search_term, // Ensure the search term is included
            'tax_query' => array(
                array(
                    'taxonomy' => 'product_cat',
                    'field' => 'slug',
                    'terms' => 'materials',
                ),
            ),
        );

        $products_query1 = new WP_Query($args1);

        if ($products_query1->have_posts()) : ?>
            <div class="row">
                <div class="col-6 col-lg-4 col-xl-3 pb-3 z-1 d-flex justify-content-center">
                    <h1 class="down-to-up">
                        Discover the<br>bookshelf<br>
                        <span class="dots-design">..........</span>
                    </h1>
                </div>

                <?php while ($products_query1->have_posts()) : $products_query1->the_post(); ?>
                    <div class="col-6 col-lg-4 col-xl-3 text-center pb-3 d-flex flex-column align-items-center z-1">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium'); ?>
                            <?php woocommerce_template_loop_add_to_cart(); ?>
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p>No products found in the "materials" category with the search term "<?php echo esc_html($search_term); ?>".</p>
        <?php endif; ?>
		
    </main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
