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

<div class="container-fluid">
    <div class="row">
        <div class="homeDiv">
            <div class="col-10">
                <div class="homeDivInnerWhite"></div>
            </div>
            <div class="col-2">
                <div class="homeDivInnerBlue"></div>
            </div>
        </div>
    </div>
</div>


<?php
get_footer();