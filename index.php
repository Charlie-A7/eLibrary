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

<div class="container-fluid homeDiv p-0 py-5">
    <div class="row h-100">
        <div class="col-3 homeDivInnerBlue py-3"></div>
        <div class="col-8 homeDivInnerWhite"></div>
        <div class="col-1 homeDivInnerBlue"></div>
    </div>
</div>


<?php
get_footer();