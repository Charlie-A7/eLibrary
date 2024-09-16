<?php
/**
 * Template Name: About us
 */

get_header();
?>
<style>


</style>

<div class="aboutUsDiv position-relative">

    <div class="ABOUTUS-blue-left-sidebar position-absolute"></div>
    <div class="ABOUTUS-blue-right-sidebar position-absolute"></div>

    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="AbtUSPart1 col-8 justify-content-center align-items-center h-100">

                <img class="AbtUSimg1 img-fluid"
                    src="https://charlie.e-vents.me/wp-content/themes/main/inc/assets/images/HoldingHands.jpg">

                <p class="AboutUsText">
                    LifeAgape Lebanon is a Christian organization that works with all churches and
                    Christian denominations. <br>
                    Our goal is to deliver the message of Jesus Christ for a better life for every person
                    through the various programs and activities that we carry out in different segments of society. Our
                    mission:Spreading the Gospel everywhere. <br>
                    <span class="MOTTO-padding"><span class="abtUsBold">Our motto:</span> Win, build and send
                        multiplying disciples to fulfill the
                        Great Commission.
                    </span>
                </p>
                <button id="SwitchAR" class="LanguageSwitchBtnAR" onclick="Switch('AR')">العربية</button>
                <button id="SwitchEN" class="LanguageSwitchBtnENG" onclick="Switch('EN')">English</button>
            </div>
            <div class="AbtUSPart2 col-4">
                <h1 class="main-heading">LIFEAGAPE<br>حياة المحبة</h1>
                <img class="AbtUSimg2"
                    src="https://charlie.e-vents.me/wp-content/themes/main/inc/assets/images/trees.jpg">

            </div>
        </div>
    </div>
</div>
<script>
    function Switch(language) {
        var switchAR = document.getElementById("SwitchAR");
        var switchEN = document.getElementById("SwitchEN");
        // var ARparagraph = document.getElementById("SwitchEN");
        // var ENparagraph = document.getElementById("SwitchAR");

        if (language === 'AR') {
            switchAR.style.display = "none";  // Hide Arabic button
            switchEN.style.display = "block"; // Show English button
        } else if (language === 'EN') {
            switchEN.style.display = "none";  // Hide English button
            switchAR.style.display = "block"; // Show Arabic button
        }
    }
</script>
<?php
get_footer();