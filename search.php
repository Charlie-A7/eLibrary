<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<?php
// Include custom post types and adjust search query
$args = array(
    'post_type' => array('post', 'product'), // Include custom post types here
    's' => get_search_query(),
    'posts_per_page' => 10,
);
$search_query = new WP_Query($args);

if ($search_query->have_posts()) :
    while ($search_query->have_posts()) : $search_query->the_post();
        get_template_part('template-parts/content', 'search');
    endwhile;
    the_posts_navigation();
else :
    get_template_part('template-parts/content', 'none');
endif;

wp_reset_postdata();
?>

<section id="primary" class="content-area col-sm-12 col-lg-8">
    <main id="main" class="site-main" role="main">

    <?php
    if ($search_query->have_posts()) : ?>

        <header class="page-header">
            <h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'wp-bootstrap-starter' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
        </header><!-- .page-header -->

        <?php
        /* Start the Loop */
        while ($search_query->have_posts()) : $search_query->the_post();

            /**
             * Run the loop for the search to output the results.
             * If you want to overload this in a child theme then include a file
             * called content-search.php and that will be used instead.
             */
            get_template_part( 'template-parts/content', 'search' );

        endwhile;

        the_posts_navigation();

    else :

        get_template_part( 'template-parts/content', 'none' );

    endif; ?>

    </main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
