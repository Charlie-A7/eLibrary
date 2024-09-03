<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="footer-widgets">
        <div class="container">
            <div class="row">
                <!-- Footer Widget Area 1 -->
                <div class="col-md-4">
                    <!-- <?php if (is_active_sidebar('footer-1')): ?>
                        <?php dynamic_sidebar('footer-1'); ?>
                    <?php endif; ?> -->
                </div>
            </div>
        </div>
    </div>

    <div class="site-info text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="footer-nav">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer',
                            'menu_id' => 'footer-menu',
                            'menu_class' => 'footer-menu',
                        ));
                        ?>
                    </nav>



                    <!-- Social Media Links (Optional) -->
                    <!-- <div class="footer-social">
                        <a href="https://facebook.com/yourpage" target="_blank" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com/yourprofile" target="_blank" aria-label="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://instagram.com/yourprofile" target="_blank" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
    </div><!-- .site-info -->
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
</body>

</html>