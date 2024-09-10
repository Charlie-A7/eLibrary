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

    .LanguageSwitchBtn {
        background-color: var(--Navy-Blue-Color);
        border-radius: 20px;
    }
</style>

<div class="container-fluid aboutUsDiv py-5">
    <div class="row h-100">
        <div class="col-1 homeDivInnerBlue p-2"></div>

        <div class="col-7 h-100">
            <img style="width: 100%; height: 40%"
                src="https://charlie.e-vents.me/wp-content/themes/main/inc/assets/images/HoldingHands.jpg">
            <p style="font: size 12px;">
                LifeAgape Lebanon is a Christian organization that works with all churches and
                Christian denominations.
                Our goal is to deliver the message of Jesus Christ for a better life for every person through the
                various
                programs and activities that we carry out in different segments of society. Our mission: Spreading the
                Gospel everywhere.</p>
            <p><strong>Our motto:</strong> Win, build and send multiplying disciples to fulfill the Great Commission.
            </p>
            <button class="LanguageSwitchBtn">العربية</button>
        </div>



    </div>
</div>

<?php
get_footer();