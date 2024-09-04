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

<div class="homeDiv">
    <div class="homeDivInnerWhite"></div>
    <div class="homeDivInnerBlue"></div>
</div>

<?php
get_footer();