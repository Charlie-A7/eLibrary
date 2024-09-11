<?php
/**
 * Template Name: Materials
 */

get_header();
?>
<style>
	.materials .add_to_cart_button {
		padding: 0.25rem 1.5rem;
	}

</style>
<div class="materials py-5">
	<div class="container-fluid">
		<?php
			// Custom query for WooCommerce products in the "materials" category (limit 3)
			$args1 = array(
				'post_type' => 'product',
				'posts_per_page' => 19,
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
					<div class="col-3 d-flex justify-content-center pb-3">
						<h1>Discover the<br>bookshelf<br><span class="d-flex flex-row-reverse">..........</span></h1>
					</div>

					<?php while ($products_query1->have_posts()) : $products_query1->the_post(); ?>
						<div class="col-3 text-center pb-3">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('medium'); ?>
								<br>
								<?php woocommerce_template_loop_add_to_cart(); ?>
							</a>
						</div>
					<?php endwhile; ?>
				</div>
				<?php wp_reset_postdata(); ?>
			<?php else : ?>
				<p>No products found in the "materials" category.</p>
			<?php endif; ?>
	</div>
</div>
<?php
get_footer();
