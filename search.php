<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<div class="custom-shop py-2 position-relative">

	<div class="blue-sidebar position-absolute z-0"></div>
	
	<div class="container-fluid">
		<div class="row d-flex justify-content-end py-2">
			<div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4 d-flex justify-content-end align-items-center position relative z-1">
				<?php get_template_part('searchform'); ?>
			</div>
		</div>
		<!-- <div class="row">
			<div class="col-12 position-relative z-1">
				<h2 class="text-center py-4"><?php //printf(esc_html__('Search Results for: %s', 'wp-bootstrap-starter'), '<span>' . get_search_query() . '</span>'); ?></h2>
			</div>
		</div> -->
	
		<?php
		// Define the search term
		$search_term = isset($_GET['s']) ? sanitize_text_field($_GET['s']) : '';

		// get category filter
		$category_filter = isset($_GET['cat']) ? sanitize_text_field($_GET['cat']) : '';


		// Custom query for WooCommerce products in the "materials" category (limit 19)
		$args1 = array(
			'post_type' => 'product',
			'posts_per_page' => 19,
			's' => $search_term, // Ensure the search term is included
			'tax_query' => array(
				array(
					'taxonomy' => 'product_cat',
					'field' => 'slug',
					'terms' => $category_filter,
				),
			),
		);

		$products_query1 = new WP_Query($args1);

		if ($products_query1->have_posts()) : ?>
			<div class="row">
				<div class="col-6 col-lg-4 col-xl-3 pb-3 z-1 d-flex justify-content-center">
					<h1 class="down-to-up">
						<?php
							if($category_filter == 'materials'){
								?>
									Discover the<br>bookshelf<br>
								<?php
							}
							elseif($category_filter == 'library'){
								?>
									Explore<br>the library<br>
								<?php
							}
						?>

						<span class="dots-design">..........</span>
					</h1>
				</div>

				<?php while ($products_query1->have_posts()) : $products_query1->the_post(); ?>
					<div class="col-6 col-lg-4 col-xl-3 text-center pb-3 d-flex flex-column align-items-center z-1 products">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('medium'); ?>
							<?php woocommerce_template_loop_add_to_cart(); ?>
						</a>
					</div>
				<?php endwhile; ?>
			</div>
			<?php wp_reset_postdata(); ?>
		<?php else : ?>
			<div class="row">
				<div class="col-12">
					<h3 class="position-relative text-center z-1 py-3">No books found with the search term "<?php echo esc_html($search_term); ?>".</h3>
				</div>
			</div>
		<?php endif; ?>
	</div>
</div>

<?php
get_footer();

if($category_filter == 'materials'){
	?>
		<script>
			let menuItem = document.getElementById('menu-item-107');
		</script>
	<?php
}
elseif($category_filter == 'library'){
	?>
		<script>
			let menuItem = document.getElementById('menu-item-118');
		</script>
	<?php
}
?>
<script>
	menuItem.classList.add('current-menu-item');
</script>
