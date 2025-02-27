<?php
/**
 * Template Name: About us
 */

get_header();
?>

<div class="aboutUsDiv position-relative z-1">

    <div class="ABOUTUS-blue-left-sidebar position-absolute z-2"></div>
    <div class="ABOUTUS-blue-right-sidebar position-absolute z-2"></div>

    <div class="container-fluid h-100">
        <div class="row AbtUsRow">

            <div class="AbtUSPart1 col-lg-8 justify-content-center align-items-center">

                <div class="mobile-AbtUsRow">
                    <img class="AbtUSimg1 z-2"
                        src="https://charlie.e-vents.me/wp-content/themes/main/inc/assets/images/HoldingHands.jpg">
                    <h1 class="main-heading-Eng-Mobile z-3">LIFEAGAPE <br>
                        <span class="main-heading-Ar-Mobile">حياة المحبة</span>
                    </h1>
                </div>
                <img class="AbtUSimg1 remove-on-mobile z-2"
                    src="https://charlie.e-vents.me/wp-content/themes/main/inc/assets/images/HoldingHands.jpg">

                <p id="ENparagraph" class="AboutUsText">
                    LifeAgape Lebanon is a Christian organization that works with all churches and
                    Christian denominations. <br>
                    Our goal is to deliver the message of Jesus Christ for a better life for every person
                    through the various programs and activities that we carry out in different segments of society. Our
                    mission: Spreading the Gospel everywhere.<br><br>
                    <span class="abtUsBold">Our motto:</span> Win, build and send
                    multiplying disciples to fulfill the Great Commission.
                </p>
                <p id="ARparagraph" class="AboutUsText remove-on-mobile">
                    حياة المحبة في لبنان خدمة مسيحية تعمل مع جميع الكنائس والمذاهب المسيحية.. <br>
                    هدفنا توصيل رسالة يسوع المسيح للحياة الأفضل لكل انسان من خلال البرامج و النشاطات المتنوعة التي نقوم
                    بها في مختلف شرائح المجتمع. رسالتنا: نشر الأنجيل في كل مكان. <br> <br>
                    <span class="abtUsBoldAR">شعارنا:</span> ربح، بناء و ارسال تلامين متضاعفين لتحقيق المأمورية العظمى.
                </p>
                <button id="SwitchAR" class="LanguageSwitchBtnAR remove-on-mobile"
                    onclick="Switch('AR')">العربية</button>
                <button id="SwitchEN" class="LanguageSwitchBtnENG remove-on-mobile"
                    onclick="Switch('EN')">English</button>
            </div>
            <div class="AbtUSPart2 col-lg-4 z-3">
                <h1 class="main-heading-Eng remove-on-mobile z-3">LIFEAGAPE <br>
                    <span class="main-heading-Ar remove-on-mobile">حياة المحبة</span>
                </h1>
                <p class="AbtUs-dots-design">&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;</p>
                <img class="AbtUSimg2"
                    src="https://charlie.e-vents.me/wp-content/themes/main/inc/assets/images/test4.jpg">
            </div>
            <div class="z-3 AbtUsARpMobile">
                <p id="ArParagraphMobile" class="AboutUsTextMobile">
                    حياة المحبة في لبنان خدمة مسيحية تعمل مع جميع الكنائس والمذاهب المسيحية.. <br>
                    هدفنا توصيل رسالة يسوع المسيح للحياة الأفضل لكل انسان من خلال البرامج و النشاطات المتنوعة التي
                    نقوم
                    بها في مختلف شرائح المجتمع. رسالتنا: نشر الأنجيل في كل مكان. <br> <br>
                    <span class="abtUsBoldAR">شعارنا:</span> ربح، بناء و ارسال تلامين متضاعفين لتحقيق المأمورية
                    العظمى.
                </p>
            </div>
        </div>
    </div>
</div>
<script>
    function Switch(language) {
        var switchAR = document.getElementById("SwitchAR");
        var switchEN = document.getElementById("SwitchEN");
        var ARparagraph = document.getElementById("ARparagraph");
        var ENparagraph = document.getElementById("ENparagraph");

        if (language === 'AR') {
            switchAR.style.display = "none";  // Hide Arabic Button
            ENparagraph.style.display = "none"; // Hide English Paragraph
            switchEN.style.display = "block"; // Show English Button
            ARparagraph.style.display = "block"; // Show Arabic Paragraph
        } else if (language === 'EN') {
            switchEN.style.display = "none";  // Hide English Button
            ARparagraph.style.display = "none"; //Hide Arabic Paragraph
            switchAR.style.display = "block"; // Show Arabic Button
            ENparagraph.style.display = "block"; // Show English Paragraph
        }
    }
</script>
<?php
get_footer();