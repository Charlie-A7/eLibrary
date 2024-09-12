<?php
/**
 * Template Name: My-Cart
 */

get_header();
?>
<div class="my-custom-cart-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <?php
                while (have_posts()):
                    the_post();
                    the_content();
                endwhile;
                ?>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
