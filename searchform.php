<div class="search-container d-flex justify-content-center align-items-center">
    <form role="search" method="get" action="<?php echo esc_url( get_permalink() ); ?>" aria-label="Search for">
        <input type="search" class="search-field" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s">
        <input type="hidden" name="cat" value="<?php echo isset($_GET['cat']) ? esc_attr($_GET['cat']) : (is_page('materials') ? 'materials' : (is_page('library') ? 'library' : '')); ?>">
        <button type="submit" class="search-button">
            <i class="fa fa-search"></i>
        </button>
    </form>
</div>
<div class="filter-container">

    <form method="get" action="<?php echo esc_url( home_url( 'materials' ) ); ?>">
        <select name="product_cat" id="product_cat" class="dropdown_product_cat">
            <option value="" selected="selected">Select a category</option>
            <?php
                // Fetch product categories
                $terms = get_terms( array(
                    'taxonomy' => 'product_cat',
                    'orderby' => 'name',
                    'hide_empty' => false,
                ) );

                // Loop through each category and output an option tag
                if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
                    foreach ( $terms as $term ) {
                        $level = ( $term->parent !== 0 ) ? '&nbsp;&nbsp;&nbsp;' : '';
                        echo '<option class="level-' . esc_attr( $term->parent ) . '" value="' . esc_attr( $term->slug ) . '">';
                        echo $level . esc_html( $term->name ) . '&nbsp;&nbsp;(' . esc_html( $term->count ) . ')';
                        echo '</option>';
                    }
                }
            ?>
        </select>
        <input type="submit" value="Filter">
    </form>
</div>







