<?php
/**
 * WP Bootstrap Starter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WP_Bootstrap_Starter
 */

if (!function_exists('wp_bootstrap_starter_setup')):
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function wp_bootstrap_starter_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on WP Bootstrap Starter, use a find and replace
         * to change 'wp-bootstrap-starter' to the name of your theme in all the template files.
         */
        load_theme_textdomain('wp-bootstrap-starter', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'primary' => esc_html__('Primary', 'wp-bootstrap-starter'),
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'comment-form',
                'comment-list',
                'caption',
            )
        );

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'wp_bootstrap_starter_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        function wp_boostrap_starter_add_editor_styles()
        {
            add_editor_style('custom-editor-style.css');
        }
        add_action('admin_init', 'wp_boostrap_starter_add_editor_styles');

    }
endif;
add_action('after_setup_theme', 'wp_bootstrap_starter_setup');


/**
 * Add Welcome message to dashboard
 */
function wp_bootstrap_starter_reminder()
{
    $theme_page_url = 'https://afterimagedesigns.com/wp-bootstrap-starter/?dashboard=1';

    if (!get_option('triggered_welcomet')) {
        $message = sprintf(
            __('Welcome to WP Bootstrap Starter Theme! Before diving in to your new theme, please visit the <a style="color: #fff; font-weight: bold;" href="%1$s" target="_blank">theme\'s</a> page for access to dozens of tips and in-depth tutorials.', 'wp-bootstrap-starter'),
            esc_url($theme_page_url)
        );

        printf(
            '<div class="notice is-dismissible" style="background-color: #6C2EB9; color: #fff; border-left: none;">
                        <p>%1$s</p>
                    </div>',
            $message
        );
        add_option('triggered_welcomet', '1', '', 'yes');
    }

}
add_action('admin_notices', 'wp_bootstrap_starter_reminder');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_bootstrap_starter_content_width()
{
    $GLOBALS['content_width'] = apply_filters('wp_bootstrap_starter_content_width', 1170);
}
add_action('after_setup_theme', 'wp_bootstrap_starter_content_width', 0);


/**
 * Enqueue scripts and styles.
 */
function wp_bootstrap_starter_scripts()
{
    // load bootstrap css
    wp_enqueue_style('wp-bootstrap-starter-bootstrap-css', get_template_directory_uri() . '/inc/assets/css/bootstrap.min.css');

    // fontawesome cdn
    wp_enqueue_style('wp-bootstrap-pro-fontawesome-cdn', get_template_directory_uri() . '/inc/assets/css/font-awsome.css');
    // load bootstrap css

    // load WP Bootstrap Starter styles
    wp_enqueue_style('wp-bootstrap-starter-style', get_stylesheet_uri());

    // ============= Load Custom stylesheets =============

    wp_enqueue_style('swiper', get_template_directory_uri() . '/inc/assets/css/swiper.min.css');

    wp_enqueue_style('custom_style', get_template_directory_uri() . '/inc/assets/css/custom_style.css', array(), '1.42');
    wp_enqueue_style('responsive_style', get_template_directory_uri() . '/inc/assets/css/responsive.css', array(), '1.42');

    wp_enqueue_script('jquery');

    // Internet Explorer HTML5 support
    wp_enqueue_script('html5hiv', get_template_directory_uri() . '/inc/assets/js/html5.js', array(), '3.7.0', false);
    wp_script_add_data('html5hiv', 'conditional', 'lt IE 9');

    // load bootstrap js
    wp_enqueue_script('wp-bootstrap-starter-popper', get_template_directory_uri() . '/inc/assets/js/popper.min.js', array(), '', true);
    wp_enqueue_script('wp-bootstrap-starter-bootstrapjs', get_template_directory_uri() . '/inc/assets/js/bootstrap.min.js', array(), '', true);

    // ========================================================================
    // Add all custom js libraries here
    wp_enqueue_script('swiper-js', get_template_directory_uri() . '/inc/assets/js/swiper.min.js', array(), '1', true);

    // query loader
    // jquery visibale
    wp_enqueue_script('queryvisible-js', get_template_directory_uri() . '/inc/assets/js/jquery.visible.js', array(), '1', true);
    // wp_enqueue_script('wp-bootstrap-starter-themejs', get_template_directory_uri() . '/inc/assets/js/theme-script.js', array(), '', true );
    wp_enqueue_script('wp-bootstrap-starter-skip-link-focus-fix', get_template_directory_uri() . '/inc/assets/js/skip-link-focus-fix.min.js', array(), '20151215', true);

}
add_action('wp_enqueue_scripts', 'wp_bootstrap_starter_scripts');


function wp_bootstrap_starter_password_form()
{
    global $post;
    $label = 'pwbox-' . (empty($post->ID) ? rand() : $post->ID);
    $o = '<form action="' . esc_url(site_url('wp-login.php?action=postpass', 'login_post')) . '" method="post">
    <div class="d-block mb-3">' . __("To view this protected post, enter the password below:", "wp-bootstrap-starter") . '</div>
    <div class="form-group form-inline"><label for="' . $label . '" class="mr-2">' . __("Password:", "wp-bootstrap-starter") . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" class="form-control mr-2" /> <input type="submit" name="Submit" value="' . esc_attr__("Submit", "wp-bootstrap-starter") . '" class="btn btn-primary"/></div>
    </form>';
    return $o;
}
add_filter('the_password_form', 'wp_bootstrap_starter_password_form');

function my_myme_types($mime_types)
{
    $mime_types['svg'] = 'image/svg+xml'; //Adding svg extension
    return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);



// PHP Check if time is between two times regardless of date
function TimeIsBetweenTwoTimes($from, $till, $input)
{
    $f = DateTime::createFromFormat('H:i', $from);
    $t = DateTime::createFromFormat('H:i', $till);
    $i = DateTime::createFromFormat('H:i', $input);
    if ($f > $t)
        $t->modify('+1 day');
    return ($f <= $i && $i <= $t) || ($f <= $i->modify('+1 day') && $i <= $t);
}
function wpb_custom_new_menu()
{
    register_nav_menus(
        array(
            'main-menu' => __('Main-Menu'),
        )
    );
}
add_action('init', 'wpb_custom_new_menu');
function add_additional_class_on_li($classes, $item, $args)
{
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
function overrideSubmenuClasses($classes)
{
    $classes[] = 'dropdown-menu';
    $classes[] = '';

    return $classes;
}
add_action('nav_menu_submenu_css_class', 'overrideSubmenuClasses');

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(
        array(
            'page_title' => 'Website Settings',
            'menu_title' => 'Website Settings',
            'menu_slug' => 'website-settings',
            'capabality' => 'edit_posts'
        )
    );
}

add_image_size('main_homepage_img', 1903, 690, true);
add_image_size('main_img_company_services', 1903, 300, true);
add_image_size('services_img', 656, 580, true);
add_image_size('footer_img', 1903, 340, true);


// Add backend styles for Gutenberg.
add_action('enqueue_block_editor_assets', 'gutenberg_editor_assets');

function gutenberg_editor_assets()
{
    // Load the theme styles within Gutenberg.
    wp_enqueue_style('my-gutenberg-editor-styles', get_theme_file_uri('/assets/gutenberg-editor-styles.css'), FALSE);
}
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types()
{

    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // register a testimonial block.
        acf_register_block_type(
            array(
                'name' => 'Block1',
                'title' => __('Block1'),
                'description' => __('This is the first Block of Homepage'),
                'render_template' => 'blocks/Homepage_Blocks/block1.php',
                'category' => 'formatting',
                'icon' => 'admin-comments',
                'keywords' => array('testimonial', 'quote'),
            )
        );
    }
}



function your_theme_setup()
{
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'your-theme-text-domain'),
        'mobile' => esc_html__('Mobile Menu', 'your-theme-text-domain'), // Register mobile menu
    ));
}
add_action('after_setup_theme', 'your_theme_setup');


//Remove the Sale Flash Badge from product listings (content-product.php)
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10);

// Change "Add to Cart" button text to "Select" for products in the "library" category
add_filter('woocommerce_product_add_to_cart_text', 'custom_woocommerce_add_to_cart_text', 10, 2);

function custom_woocommerce_add_to_cart_text($text, $product)
{
    // Check if it's a product and if it belongs to the "library" category
    if ($product->is_type('simple') && has_term('library', 'product_cat', $product->get_id())) {
        return __('Select', 'woocommerce');
    }
    return $text; // Return original text for other product types or categories
}



//cart remove button ajax request

// Add the AJAX action hook
add_action('wp_ajax_remove_cart_item', 'remove_cart_item');
add_action('wp_ajax_nopriv_remove_cart_item', 'remove_cart_item');

function remove_cart_item()
{
    //  the cart item key from the AJAX request
    $cart_item_key = sanitize_text_field($_POST['cart_item_key']);

    // Check if the item exists in the cart
    if ($cart_item_key && WC()->cart->get_cart_item($cart_item_key)) {
        // Remove the item from the cart
        WC()->cart->remove_cart_item($cart_item_key);

        // Optionally, you can return the updated cart totals
        wp_send_json_success([
            'message' => 'Item removed successfully!',
            'new_total_price' => WC()->cart->get_cart_total(), // Updated total price
            'cart_count' => WC()->cart->get_cart_contents_count(), // Updated cart count
        ]);
    } else {
        wp_send_json_error(['message' => 'Item not found in cart!']);
    }

    wp_die(); // This is required to properly terminate the AJAX request
}

// AJAX endpoint to update cart totals on quantity change
add_action('wp_ajax_update_cart_totals', 'update_cart_totals');
add_action('wp_ajax_nopriv_update_cart_totals', 'update_cart_totals');

function update_cart_totals()
{

    $quantity = sanitize_text_field($_POST['quantity']);
    $cart_item_key = sanitize_text_field($_POST['cart_item_key']);
    $is_input = sanitize_text_field($_POST['is_input']);
    $current_quantity = WC()->cart->get_cart()[$cart_item_key]['quantity'];
    if ($quantity == 1 && $is_input == -1) {
        $new_quantity = $current_quantity + 1;
    } else if ($quantity == -1 && $current_quantity > 1) {
        $new_quantity = $current_quantity - 1;
    } else if ($quantity >= 1 && $current_quantity > 1) {
        $new_quantity = $quantity;
    }
    // Update the cart item quantity
    WC()->cart->set_quantity($cart_item_key, $new_quantity);
    // Recalculate the totals after adjustment
    WC()->cart->calculate_totals();
    // Get updated total quantity and feeTotal
    $total_quantity = WC()->cart->get_cart_contents_count();
    $fee_total = WC()->cart->get_cart_contents_total();

    // Send the totals as a JSON response
    wp_send_json_success([
        'total_quantity' => $total_quantity,
        'fee_total' => $fee_total,
    ]);
}


// checkout fields

add_filter('woocommerce_checkout_fields', 'custom_override_checkout_fields');

function custom_override_checkout_fields($fields)
{
    unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_city']);
    unset($fields['billing']['billing_address_1']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_state']);
    return $fields;
}





