<?php
/**
 * Template Name: Materials
 */

get_header();
?>
<div class="materials">
	<div class="container-fluid">
		<div class="row">
			<div class="col-3 d-flex justify-content-center pb-2">
				<h1>Discover the<br>bookshelf</h1>
			</div>
			
			<div class="col-9">

			<?php
				// Custom query for WooCommerce products in the "materials" category (limit 3)
				$args1 = array(
					'post_type' => 'product',
					'posts_per_page' => 3,
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
						<?php while ($products_query1->have_posts()) : $products_query1->the_post(); ?>
							<div class="col">
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('medium'); ?>
									<h2><?php the_title(); ?></h2>
									<p><?php echo wc_get_product()->get_price_html(); ?></p>
								</a>
							</div>
						<?php endwhile; ?>
					</div>
					<?php wp_reset_postdata(); ?>
				<?php else : ?>
					<p>No products found in the "materials" category.</p>
				<?php endif; ?>

				<?php
				// echo do_shortcode('[products category="materials" limit="3" columns="3"]');
				?>
			</div>
			
			<!-- <div class="col-12">
				<?php
				// echo do_shortcode('[products category="materials" limit="16" columns="4"]');
				?>
			</div> -->
		</div>
	</div>
</div>
<?php
get_footer();
