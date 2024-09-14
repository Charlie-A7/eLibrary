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
    <form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <?php
        wp_dropdown_categories( array(
            'show_option_all' => 'Select Category',
            'name' => 'category',
            'orderby' => 'name',
            'hierarchical' => true,
            'selected' => get_query_var( 'cat' ),
        ) );
        ?>
        <input type="submit" value="Filter">
    </form>
</div>