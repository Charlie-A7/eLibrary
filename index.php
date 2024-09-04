<?php
/**
 * Template Name: Homepage
 */

get_header();
?>

<?php
while (have_posts()):
    the_post();
    the_content();
endwhile;
?>

<div class="container-fluid homeDiv">
    <div class="row">
        <div class="col-10 homeDivInnerWhite"></div>
        <div class="col-2 homeDivInnerBlue"></div>
    </div>
</div>


<?php
get_footer();