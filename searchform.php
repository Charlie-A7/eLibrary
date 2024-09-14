<!-- <form role="search" method="get" class="search-form" action="<?php //echo esc_url( home_url( '/' ) ); ?>">
    <label>
        <input type="search" class="search-field form-control" placeholder="<?php //echo esc_attr_x( 'Search &hellip;', 'placeholder', 'wp-bootstrap-starter' ); ?>" value="<?php //echo esc_attr( get_search_query() ); ?>" name="s" title="<?php //_ex( 'Search for:', 'label', 'wp-bootstrap-starter' ); ?>">
    </label>
    <input type="submit" class="search-submit btn btn-default" value="<?php //echo esc_attr_x( 'Search', 'submit button', 'wp-bootstrap-starter' ); ?>">
</form>


 -->

 <!-- <div class="search-container d-flex justify-content-center align-items-center">
    <form role="search" method="get" action="<?php // echo esc_url( home_url( '/' ) ); ?>" aria-label="Search for">
        <input type="search" class="search-field" placeholder="Search..." value="<?php //echo get_search_query(); ?>" name="s">
        <input type="hidden" name="cat" value="<?php //echo isset($_GET['cat']) ? esc_attr($_GET['cat']) : (is_page('materials') ? 'materials' : (is_page('library') ? 'library' : '')); ?>">
        <button type="submit" class="search-button">
            <i class="fa fa-search"></i>
        </button>
    </form>
</div> -->


<?php 
$materials_page = get_page_by_path('materials');
$library_page = get_page_by_path('library');
$action_url = '';

if (is_page('materials') && $materials_page) {
    $action_url = esc_url(get_permalink($materials_page->ID));
} elseif (is_page('library') && $library_page) {
    $action_url = esc_url(get_permalink($library_page->ID));
} else {
    $action_url = esc_url(home_url('/'));
}
?>

<div class="search-container d-flex justify-content-center align-items-center">
    <form role="search" method="get" action="<?php echo $action_url; ?>" aria-label="Search for">
        <input type="search" class="search-field" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s">
        <button type="submit" class="search-button">
            <i class="fa fa-search"></i>
        </button>
    </form>
</div>
