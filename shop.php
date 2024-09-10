<?php
/**
 * Template Name: Shop
 */

get_header();
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-12">
            
			<?php
            woocommerce_content();
            echo do_shortcode('[products]');
			// while (have_posts()):
				the_post();
				the_content();
				// get_template_part('template-parts/content', 'page');

				// If comments are open or we have at least one comment, load up the comment template.
				// if (comments_open() || get_comments_number()):
				// 	comments_template();
				// endif;

			endwhile; // End of the loop.
			?>
		</div>
	</div>
</div>
<?php
get_footer();
