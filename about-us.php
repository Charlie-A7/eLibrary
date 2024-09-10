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
</style>

<div class="container-fluid aboutUsDiv py-5">
    <div class="row">
        <div class="col-1 homeDivInnerBlue p-5"></div>

        <div class="col-7">
            <img style="width: 100%;"
                src="https://charlie.e-vents.me/wp-content/themes/main/inc/assets/images/HoldingHands.jpg">

        </div>



    </div>
</div>

<?php
get_footer();