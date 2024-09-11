<?php
/**
 * Template Name: About us
 */

get_header();
?>
<style>

    .aboutUsDiv.homeDivInnerBlue {
        background-color: var(--Light-Gray-Blue-Color);
    }

    .aboutUsText {
        font: size 12px;
    }

    .LanguageSwitchBtn {
        background-color: $text_color;
        border-radius: 20px;
        color: $text_white;
    }

    .AboutUs-Overlap {
        position: absolute;
        top: 15%;
        /* 10% empty space at the top */
        right: 10%;
        /* 10% empty space on the left */
        width: 40%;
        /* 90% width of parent container */
        height: 40%;
        /* 80% height of parent container */
        z-index: 10;
        transform: none;
        /* Remove centering transformation */
        box-sizing: border-box;
        /* Include padding and border in width/height calculations */
    }

    .h1 {
        font-weight: bold;
        font-size: 5rem;
        text-transform: uppercase;
    }
</style>

<div class="container-fluid aboutUsDiv py-5">
    <div class="row">
        <div class="col-1 homeDivInnerBlue p-2"></div>

        <div class="col-11 px-3 position-relative">
            <div class="row">
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
                <div class="col-1 homeDivInnerBlue p-2"></div>
            </div>

        </div>

    </div>
</div>

<?php
get_footer();