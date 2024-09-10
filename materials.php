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
		
		<div class="col-3">
			<?php
			echo do_shortcode('[products category="materials" limit="19" columns="1"]');
			?>
		</div>
	</div>
</div>
<?php
get_footer();
