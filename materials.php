<?php
/**
 * Template Name: Materials
 */

get_header();
?>
<div class="custom-shop py-0 position-relative">
	
	<div class="blue-sidebar position-absolute z-0"></div>
	
	<div class="container-fluid">
		<div class="row d-flex justify-content-end pb-2">
			<div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4 d-flex justify-content-end align-items-center position relative z-1">
				<?php get_template_part('searchform'); ?>
			</div>
		</div>

		<?php

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
			<div class="row">
				<div class="col-12">
					<h3 class="position-relative text-center z-1 py-3">No books found in the Materials.</h3>
				</div>
			</div>
			<?php endif; ?>
	</div>
</div>
<?php
get_footer();
