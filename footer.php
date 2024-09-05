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
    .footer_lines {
        position: relative;
    }

    .footer_lines::after {
        content: '';
        position: absolute;
        top: 10%;
        right: 0;
        height: 80%;
        width: 0.2rem;
        background-color: white;
    }
</style>

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container-fluid">
        <div class="row">
            <!-- Footer Widget Area 1 -->
            <div style=" text-align: center;">
                <!-- <?php if (is_active_sidebar('footer-1')): ?>
                        <?php dynamic_sidebar('footer-1'); ?>
                    <?php endif; ?> -->
            </div>
            <!-- section1 -->
            <div class="col-4 footer_lines location_section" style="text-align:center">
                <h5 style="color: white; font-weight: bold;">Location</h5>
                <p style="margin:0">
                    <button onclick="window.location.href='https://maps.app.goo.gl/RX31MfYc181fp3X5A'"
                        style="border: none; background: none; padding: 0;">
                        <img src="https://charlie.e-vents.me/wp-content/themes/main/inc/assets/images/location.png"
                            alt="Location Icon"
                            style="vertical-align: middle; margin-right: 5px; filter: brightness(0) invert(1); width: 20px; height: 20px;">
                    </button>
                    <span style="color: darkgray; font-size: 15px;">
                        Dekweneh, George Matta St.,<br>
                        Semitian Bldg, bloc A, 1st Floor.
                    </span>
                </p>

            </div>
            <!-- section2 -->
            <div class="col-4 footer_lines contactus_section" style="text-align: center;">
                <h5 style="color: white; font-weight: bold;">Contact us</h5>
                <p style="margin: 0">
                    <!-- Phone part-->
                    <button onclick="window.location.href='tel:+9611688723'"
                        style="border: none; background: none; padding: 0;">
                        <img src="https://charlie.e-vents.me/wp-content/themes/main/inc/assets/images/phone-call.png"
                            alt="Phone Icon"
                            style="vertical-align: middle; width: 20px; height: 20px; filter: brightness(0) invert(1);">
                    </button>
                    <span style="color: darkgray; font-size: 15px;">+961 1 688 723</span>
                    <br>
                    <!-- Email part -->
                    <button onclick="window.location.href='mailto:lebanon.ops@barid.org'"
                        style="border: none; background: none; padding: 0;">
                        <img src="https://charlie.e-vents.me/wp-content/themes/main/inc/assets/images/email.png"
                            alt="Email Icon"
                            style="vertical-align: middle; width: 20px; height: 20px; filter: brightness(0) invert(1);">
                    </button>
                    <span style="color: darkgray; font-size: 15px;">lebanon.ops@barid.org</span>
                </p>
            </div>

        </div>
    </div>



</footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>

</html>