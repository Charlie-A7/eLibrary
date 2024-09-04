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
            <div style=" text-align: center;">
                <!-- <?php if (is_active_sidebar('footer-1')): ?>
                        <?php dynamic_sidebar('footer-1'); ?>
                    <?php endif; ?> -->
            </div>
            <div class="col-4 footer_location">
                <h5 style="color: white; font-weight: bold; padding-right: 1rem; text-align:center">Location</h5>
                <p style="padding-left: 1rem;">
                    <img src="https://charlie.e-vents.me/wp-content/themes/main/inc/assets/images/location.png"
                        alt="Location Icon"
                        style="vertical-align: middle; margin-right: 5px; filter: brightness(0) invert(1); width: 20px; height: 20px;">
                    <span style="color: darkgray; font-size: 15px;">
                        Dekweneh, George Matta St.,<br>
                        <span style="color: darkgray; font-size: 15px; padding-left:21px">Semitian Bldg, bloc A, 1st
                            Floor.</span>
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