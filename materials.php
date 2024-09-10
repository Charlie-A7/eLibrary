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
			echo do_shortcode('[products category="materials" limit="20" columns="4"]');
			?>
		</div>
	</div>
</div>
<?php
get_footer();
