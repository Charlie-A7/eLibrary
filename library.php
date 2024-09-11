<?php
/**
 * Template Name: Library
 */

get_header();
?>
<div class="library py-5">
	<div class="container-fluid">

        <div class="row d-flex justify-content-end py-3">
			<div class="col-3 d-flex justify-content-end align-items-center">
				<form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
					<input type="hidden" name="post_type" value="product" /> <!-- Limit search to products -->
					<input type="search" class="search-field" placeholder="Search products..." value="<?php echo get_search_query(); ?>" name="s" />
					<button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
				</form>
				<button type="submit" class="btn btn-primary">
                	<i class="fas fa-filter"></i>
            	</button>
			</div>
		</div>


		<?php
			// Custom query for WooCommerce products in the "materials" category (limit 3)
			$args1 = array(
				'post_type' => 'product',
				'posts_per_page' => 19,
				'tax_query' => array(
					array(
						'taxonomy' => 'product_cat',
						'field' => 'slug',
						'terms' => 'library',
					),
				),
			);

			$products_query1 = new WP_Query($args1);

			if ($products_query1->have_posts()) : ?>
				<div class="row">	
					<div class="col-3 d-flex justify-content-center pb-3">
						<h1 class="down-to-up">Explore<br>the library<br><span class="dots-design d-flex justify-content-end">..........</span></h1>
					</div>

					<?php while ($products_query1->have_posts()) : $products_query1->the_post(); ?>
						<div class="col-3 text-center pb-3 d-flex flex-column align-items-center">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('medium'); ?>
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
