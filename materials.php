<?php
/**
 * Template Name: Materials
 */

get_header();
?>

<div class="container-fluid">
    <!-- First Row: Custom Div and Limited Products -->
    <div class="row">
        <div class="col-3">
            <p>Discover the bookshelf</p>
        </div>
        
        <div class="col-9">
            <?php
            // Custom query for the first set of products
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 3,
                'product_cat' => 'materials',
                'columns' => 3
            );
            $loop = new WP_Query($args);
            if ($loop->have_posts()) :
                echo '<ul class="products">';
                while ($loop->have_posts()) : $loop->the_post();
                    wc_get_template_part('content', 'product');
                endwhile;
                echo '</ul>';
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>

    <!-- Second Row: Larger Product Grid -->
    <div class="row">
        <div class="col-12">
            <?php
            // Custom query for the second set of products
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 16,
                'product_cat' => 'materials',
                'columns' => 4
            );
            $loop = new WP_Query($args);
            if ($loop->have_posts()) :
                echo '<ul class="products">';
                while ($loop->have_posts()) : $loop->the_post();
                    wc_get_template_part('content', 'product');
                endwhile;
                echo '</ul>';
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>

<?php
get_footer();
