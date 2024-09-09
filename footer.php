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
    .footer_h5 {
        padding-bottom: 0.2rem;
    }

    .footer_lines {
        position: relative;
    }

    .footer_lines::after {
        content: '';
        position: absolute;
        top: 10%;
        bottom: 10%;
        right: 0;
        height: 80%;
        width: 4px;
        background-color: white;
    }
</style>

</div>
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
                <h5 class="footer_h5" style="color: white; font-weight: bold;">Location</h5>
                <a href="https://maps.app.goo.gl/RX31MfYc181fp3X5A" style="text-decoration: none; color: inherit;">
                    <p style="margin:0; cursor: pointer;">
                        <img src="https://charlie.e-vents.me/wp-content/themes/main/inc/assets/images/location.png"
                            alt="Location Icon"
                            style="vertical-align: middle; margin-right: 5px; filter: brightness(0) invert(1); width: 20px; height: 20px;">
                        <span style="color: darkgray; font-size: 15px;">
                            Dekweneh, George Matta St.,<br>
                            Semitian Bldg, bloc A, 1st Floor.
                        </span>
                    </p>
                </a>

            </div>
            <!-- section2 -->
            <div class="col-4 footer_lines contactus_section" style="text-align: center;">
                <h5 class="footer_h5" style="color: white; font-weight: bold;">Contact us</h5>

                <!-- Phone Button (Wrap entire section in <a>) -->
                <a href="tel:+9611688723" style="text-decoration: none; color: inherit;">
                    <p style="margin: 0; cursor: pointer;">
                        <img src="https://charlie.e-vents.me/wp-content/themes/main/inc/assets/images/phone-call.png"
                            alt="Phone Icon"
                            style="vertical-align: middle; width: 20px; height: 20px; filter: brightness(0) invert(1);">
                        <span style="color: darkgray; font-size: 15px;">+961 1 688 723</span>
                    </p>
                </a>

                <!-- Email Button (Wrap entire section in <a>) -->
                <a href="mailto:lebanon.ops@barid.org" style="text-decoration: none; color: inherit;">
                    <p style="margin: 0; cursor: pointer;">
                        <img src="https://charlie.e-vents.me/wp-content/themes/main/inc/assets/images/email.png"
                            alt="Email Icon"
                            style="vertical-align: middle; width: 20px; height: 20px; filter: brightness(0) invert(1);">
                        <span style="color: darkgray; font-size: 15px;">lebanon.ops@barid.org</span>
                    </p>
                </a>
            </div>

            <!-- section3 -->
            <div class="col-4 ministries_section" style="text-align: center;">
                <h5 class="footer_h5" style="color: white; font-weight: bold;">LifeAgape Ministries</h5>
                <p style="margin: 0; color: darkgray; font-size: 15px;">
                    SLM &bull;&bull;&bull; GCM &bull;&bull;&bull; DS &bull;&bull;&bull; LS<br>
                    AIA &bull;&bull;&bull; Relief &bull;&bull;&bull; Ladies Ministry
                </p>
            </div>

        </div>
    </div>



</footer>

<?php wp_footer(); ?>
</body>

</html>