<!-- <form role="search" method="get" class="search-form" action="<?php //echo esc_url( home_url( '/' ) ); ?>">
    <label>
        <input type="search" class="search-field form-control" placeholder="<?php //echo esc_attr_x( 'Search &hellip;', 'placeholder', 'wp-bootstrap-starter' ); ?>" value="<?php //echo esc_attr( get_search_query() ); ?>" name="s" title="<?php //_ex( 'Search for:', 'label', 'wp-bootstrap-starter' ); ?>">
    </label>
    <input type="submit" class="search-submit btn btn-default" value="<?php //echo esc_attr_x( 'Search', 'submit button', 'wp-bootstrap-starter' ); ?>">
</form>


 -->

 <div class="search-container d-flex justify-content-center align-items-center">
    <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Search for">
        <input type="search" class="search-field" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s">
        <input type="hidden" name="cat" value="<?php echo isset($_GET['cat']) ? esc_attr($_GET['cat']) : (is_page('materials') ? 'materials' : (is_page('library') ? 'library' : '')); ?>">
        <button type="submit" class="search-button">
            <i class="fa fa-search"></i>
        </button>
    </form>
</div>
<div>
    <!-- <form method="get" action="<?php// echo esc_url( home_url( '/' ) ); ?>">
        <label for="category" class="filter-label">
            <i class="fas fa-filter"></i>
        </label>
        <?php
            // wp_dropdown_categories( array(
            //     'show_option_none' => '',
            //     'name' => 'category',
            //     'orderby' => 'name',
            //     'hierarchical' => true,
            //     'selected' => get_query_var( 'cat' ),
            //     'taxonomy' => 'product_cat' // Use 'product_cat' for WooCommerce product categories
            // ) );
        ?>
        <input type="submit" value="Filter">
    </form> -->

    <form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <select name="category" id="category">
            <option value="">
                <label for="category" class="filter-label">
                    <i class="fas fa-filter"></i> <!-- FontAwesome filter icon -->
                </label>
            </option>
            <?php
                $terms = get_terms( array(
                    'taxonomy' => 'product_cat',
                    'orderby' => 'name',
                    'hide_empty' => false, // Show empty categories as well
                ) );

                if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
                    foreach ( $terms as $term ) {
                        echo '<option value="' . esc_attr( $term->slug ) . '">' . esc_html( $term->name ) . '</option>';
                    }
                }
            ?>
        </select>
        <input type="submit" value="Filter">
    </form>
</div>

<script>
    document.querySelector('.filter-label').addEventListener('click', function() {
        document.querySelector('select[name="category"]').focus(); // Open the dropdown when the icon is clicked
    });
</script>
