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
<style>
    /* footer */
    footer {
        background-color: #093f6c;
        bottom: 0;
        padding: 2rem;
    }
</style>

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container">
        <div class="row">
            <!-- Footer Widget Area 1 -->
            <div>
                <!-- <?php if (is_active_sidebar('footer-1')): ?>
                        <?php dynamic_sidebar('footer-1'); ?>
                    <?php endif; ?> -->
            </div>
            <div class="col-4 footer_location">
                <h4 class="" style="color: white;  text-align: center;">Location</h4>
                <p>
                    <img src="https://charlie.e-vents.me/wp-content/themes/main/inc/assets/images/location.png"
                        alt="Location Icon" style="vertical-align: middle; margin-right: 5px; color: white;">
                    Dekweneh, George Matta St.,<br>
                    Semitian Bldg, bloc A, 1st Floor.
                </p>
            </div>
        </div>
    </div>



</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
</body>

footer{
background-color: #093f6c;
bottom: 0;
padding: 2rem;
}

</html>