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

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container-fluid">
        <div class="row">
            <!-- Footer Widget Area 1 -->
            <div>
                <!-- <?php if (is_active_sidebar('footer-1')): ?>
                        <?php dynamic_sidebar('footer-1'); ?>
                    <?php endif; ?> -->
            </div>
            <div class="col-4 footer_location">
                <h5 class="p" style="color: white;  text-align: center;  font-weight: bold;">Location</h5>
                <p>
                    <img src="https://charlie.e-vents.me/wp-content/themes/main/inc/assets/images/location.png"
                        alt="Location Icon"
                        style="vertical-align: middle; margin-right: 5px; filter: brightness(0) invert(1);">
                    <span style="color: darkgray; font-size: 12px;">
                        Dekweneh, George Matta St.,<br>
                        Semitian Bldg, bloc A, 1st Floor.
                    </span>
                </p>
            </div>
        </div>
    </div>



</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
</body>

</html>