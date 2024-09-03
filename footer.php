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
                <div>
                    <!-- <?php if (is_active_sidebar('footer-1')): ?>
                        <?php dynamic_sidebar('footer-1'); ?>
                    <?php endif; ?> -->
                </div>
                <div class="col-4 location-widget">
                    <h4>Location</h4>
                    <p>
                        <img src="/inc/assets/images/pngs/location.png" alt="Location Icon"
                            style="vertical-align: middle; margin-right: 5px;">
                        Dekweneh, George Matta St.,<br>
                        Semitian Bldg, bloc A, 1st Floor.
                    </p>
                </div>
            </div>
        </div>
    </div>


</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
</body>

</html>