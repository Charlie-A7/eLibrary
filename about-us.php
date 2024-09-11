<?php
/**
 * Template Name: About us
 */

get_header();
?>
<style>
    .aboutUsDiv {
        height: calc(100dvh - var(--header-height) - var(--header-footer));

        .homeDivInnerBlue {
            background-color: var(--Light-Gray-Blue-Color);
        }
    }

    .aboutUsText {
        font: size 12px;
    }

    .LanguageSwitchBtn {
        background-color: var(--Navy-Blue-Color);
        border-radius: 20px;
        color: white;
    }
</style>

<div class="container-fluid aboutUsDiv py-5">
    <div class="row h-100">
        <div class="col-1 homeDivInnerBlue p-2"></div>

        <div class="col-11 h-100 px-3">
            <div class="row h-100">
                <div class="AboutUs-Overlap">
                    <h1>
                        LifeAgape <br>
                        حياة المحبة
                    </h1>
                </div>
                <div class="col-9">
                    <img style="width: 100%; height: 40%"
                        src="https://charlie.e-vents.me/wp-content/themes/main/inc/assets/images/HoldingHands.jpg">
                    <p class="AboutUsText py-3">
                        LifeAgape Lebanon is a Christian organization that works with all churches and
                        Christian denominations. <br>
                        Our goal is to deliver the message of Jesus Christ for a better life for every person through
                        the
                        various programs and activities that we carry out in different segments of society. Our mission:
                        Spreading the
                        Gospel everywhere.</p>
                    <p><strong>Our motto:</strong> Win, build and send multiplying disciples to fulfill the Great
                        Commission.
                    </p>
                    <button class="LanguageSwitchBtn">العربية</button>
                </div>
            </div>
        </div>
        <div class="col-1 homeDivInnerBlue p-2"></div>
    </div>
</div>

<?php
get_footer();