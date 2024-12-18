<?php
/**
 * The template for displaying the footer
 * Contains the closing of the #content div and all content after.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package WP_Bootstrap_Starter
 */
?>

</div>
<footer id="colophon" class="site-footer d-flex align-items-center" role="contentinfo">
    <div class="container-fluid">
        <div class="row align-center-mobile">

            <!-- section1 -->
            <div class="col-12 col-sm-4 footer_lines location_section">
                <p>
                <p class="location-icon-mobile">
                    <img class="footer-icon1-mobile"
                        src="https://charlie.e-vents.me/wp-content/themes/main/inc/assets/images/location.png"
                        alt="Location Icon">
                    <span class="footer_h5_mobile">Location</span>
                </p>
                <h5 class="footer_h5 remove-on-mobile">Location</h5>
                </p>

                <a href="https://maps.app.goo.gl/RX31MfYc181fp3X5A">
                    <p class="location-text-switch-mobile">
                        <img class="footer-icon1"
                            src="https://charlie.e-vents.me/wp-content/themes/main/inc/assets/images/location.png"
                            alt="Location Icon">
                        <span>
                            Dekweneh, George Matta St.,<br>
                            Semitian Bldg, bloc A, 1st Floor.
                        </span>
                    </p>
                </a>
            </div>

            <div class="separator"></div>

            <!-- section2 -->
            <div class="col-12 col-sm-4 footer_lines contactus_section">
                <h5 class="footer_h5">Contact us</h5>

                <!-- Phone Button (Wrap entire section in <a>) -->
                <a href="tel:+9611688723">
                    <p style="margin: 0; cursor: pointer;">
                        <img class="footer-icon2"
                            src="https://charlie.e-vents.me/wp-content/themes/main/inc/assets/images/phone-call.png"
                            alt="Phone Icon">
                        <span>+961 1 688 723</span>
                    </p>
                </a>

                <!-- Email Button (Wrap entire section in <a>) -->
                <a href="mailto:lebanon.ops@barid.org">
                    <p>
                        <img class="footer-icon2"
                            src="https://charlie.e-vents.me/wp-content/themes/main/inc/assets/images/email.png"
                            alt="Email Icon">
                        <span>lebanon.ops@barid.org</span>
                    </p>
                </a>
            </div>

            <div class="separator"></div>

            <!-- section3 -->
            <div class="col-12 col-sm-4 ministries_section ">
                <h5 class="footer_h5 switched_footer_headline">LifeAgape Strategies</h5>
                <p class="last-p">
                    SLM &bull;&bull;&bull; GCM &bull;&bull;&bull; DS &bull;&bull;&bull; LS<br>
                    AIA &bull;&bull;&bull; Relief &bull;&bull;&bull; Ladies Ministry
                </p>
            </div>

        </div>
    </div>
</footer>
</div>

<?php wp_footer(); ?>

<script>
    // Change the h5 text on mobile screens
    document.addEventListener("DOMContentLoaded", function () {
        const strategies = document.querySelector('.switched_footer_headline');
        const locationSpan = document.querySelector('.location-text-switch-mobile span'); // Target the <span>
        // Save the original location text and image position
        const originalLocationText = locationSpan.innerHTML;

        function updateHeadlineText() {
            if (window.innerWidth <= 575) {
                strategies.textContent = "LifeAgape Lebanon";
                locationSpan.innerHTML = "Dekweneh, George Matta St., Semitian Bldg, bloc A, 1st Floor.";

            } else {
                strategies.textContent = "LifeAgape Strategies";
                locationSpan.innerHTML = originalLocationText; // Restore original text
            }
        }
        // Run on page load and on resize
        updateHeadlineText();
        window.addEventListener('resize', updateHeadlineText);
    });
</script>

</body>

</html>