<?php
/**
 * Template Name: Homepage
 */

get_header();
?>

<?php
// while (have_posts()):
//     the_post();
//     the_content();
// endwhile;
?> 

<div class="homeDiv py-5  position-relative">
    <div class="blue-left-sidebar position-absolute z-0"></div>
    <div class="blue-right-sidebar position-absolute z-0"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 z-1">
                <h1>Welcome to<br>our resource<br>library</h1>
                <h4>Browse our selection, and order what you need.</h4>
            </div>
            <div class="col-6 z-1">
            </div>
        </div>
    </div>
</div>



<?php
get_footer();