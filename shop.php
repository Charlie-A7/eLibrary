<?php
/**
 * Template Name: Materials
 */

get_header();
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-12">
            
			<?php
            echo do_shortcode('[products]');
			?>
		</div>
	</div>
</div>
<?php
get_footer();
