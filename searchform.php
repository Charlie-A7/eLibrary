<?php
$slug = get_post_field( 'post_name', get_post() );
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-8"> 
            <div class="search-container d-flex justify-content-center align-items-center">
                <form role="search" method="get" action="<?php echo esc_url( home_url('/') ); ?>" aria-label="Search for">
                    <input type="search" class="search-field" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s">
                    <input type="hidden" name="cat" value="<?php echo isset($_GET['cat']) ? esc_attr($_GET['cat']) : $slug; ?>">
                    <button type="submit" class="search-button">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>
        </div>
        <div class="col-4">
            <div class="filter-container">
                <form method="get" action="<?php echo esc_url( home_url( 'materials' ) ); ?>">
                    <select name="product_cat" id="product_cat" class="dropdown_product_cat">
                        <option value="" selected="selected"></option>
                        <?php
                            // Fetch the parent category dynamically based on the hidden cat value
                            $parent_cat = get_term_by('slug', $slug, 'product_cat');
                            
                            if ($parent_cat && ! is_wp_error($parent_cat)) {
                                // Fetch only subcategories of 'materials'
                                $subcategories = get_terms(array(
                                    'taxonomy' => 'product_cat',
                                    'orderby' => 'name',
                                    'hide_empty' => true,
                                    'parent' => $parent_cat->term_id, // Only subcategories of 'materials'
                                ));

                                // Loop through each subcategory and output an option tag
                                if (!empty($subcategories) && !is_wp_error($subcategories)) {
                                    foreach ($subcategories as $subcategory) {
                                        echo '<option class="level-' . esc_attr($subcategory->parent) . '" value="' . esc_attr($subcategory->slug) . '">';
                                        echo esc_html($subcategory->name) . '&nbsp;&nbsp;(' . esc_html($subcategory->count) . ')';
                                        echo '</option>';
                                    }
                                }
                            }
                        ?>
                    </select>
                    <input type="submit" value="Filter">
                </form>
            </div>
        </div>
    </div>
</div>







