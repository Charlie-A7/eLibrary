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

<div class="container-fluid homeDiv py-5">
    <div class="row h-100">
        <div class="col-6 position-relative p-0">
            <div class="overlapping-content">
                    <h1>Welcome to our resource library</h1>
                    <h4>Browse our selection, and order you need.</h4>
            </div>
            <div class="row h-100">
                <div class="col-5 homeDivInnerBlue my-3"></div>
                <div class="col-7 homeDivInnerWhite"></div>
            </div>
        </div>
        <div class="col-5">
            <div class="row h-100">
                <div class="col-11 homeDivInnerImage"></div>
                <div class="col-1"></div>
            </div>
        </div>
        <div class="col-1 homeDivInnerBlue"></div>
    </div>
</div>


<?php
get_footer();