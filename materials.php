<?php
/**
 * Template Name: Materials
 */

get_header();
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-3">
			<p>Discover the bookshelf</p>
		</div>
		
		<div class="col-9">
			<?php
			// echo do_shortcode('[products category="materials" limit="3" columns="3"]');

			// Query for the first 3 products
			$args_first_row = array(
				'post_type' => 'product',
				'posts_per_page' => 3,
				'product_cat' => 'materials',
				'orderby' => 'date',
				'order' => 'DESC'
			);
			$first_row_query = new WP_Query($args_first_row);

			if ($first_row_query->have_posts()) {
				echo '<ul class="products">';
				while ($first_row_query->have_posts()) {
					$first_row_query->the_post();
					wc_get_template_part('content', 'product');
				}
				echo '</ul>';
			}
			wp_reset_postdata();


			?>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<?php
			// echo do_shortcode('[products category="materials" limit="16" columns="4"]');

			// Query for the remaining products excluding the first 3
			$args_second_row = array(
				'post_type' => 'product',
				'posts_per_page' => 16,
				'product_cat' => 'materials',
				'offset' => 3, // Skip the first 3 products
				'orderby' => 'date',
				'order' => 'DESC'
			);
			$second_row_query = new WP_Query($args_second_row);

			if ($second_row_query->have_posts()) {
				echo '<ul class="products">';
				while ($second_row_query->have_posts()) {
					$second_row_query->the_post();
					wc_get_template_part('content', 'product');
				}
				echo '</ul>';
			}
			wp_reset_postdata();





			?>
		</div>
	</div>
</div>
<?php
get_footer();
