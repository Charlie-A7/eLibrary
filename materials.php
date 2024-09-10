<?php
/**
 * Template Name: Materials
 */

get_header();
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-12">
            <div class="col-4">
                <p>Discover the bookshelf</p>
            </div>
            
			<?php
            //echo do_shortcode('[products]');
            echo do_shortcode('[products category="materials" limit="20" columns="4"]');
			?>
		</div>
	</div>
</div>
<?php
get_footer();
