<?php
/**
 * Template Name: Homepage
 */

get_header();
?>

<div class="homeDiv py-5 position-relative">

    <!-- desktop design -->
    <div class="blue-left-sidebar-desktop position-absolute d-none d-md-block"></div>
    <div class="blue-right-sidebar-desktop position-absolute d-none d-md-block"></div>

    <!-- mobile desgin -->
    <div class="blue-left-sidebar-mobile position-absolute d-block d-md-none"></div>
    <div class="blue-right-sidebar-mobile position-absolute d-block d-md-none"></div>

    <div class="container-fluid h-100 position-relative">

        <!-- desktop  row -->
        <div class="row h-100 d-none d-md-flex">
            <div class="col-6 z-1 h-100 d-flex flex-column justify-content-center">
                <div id="englishText-index" class="padding-left position-absolute visible">
                    <h1>Welcome to<br>our resource<br>library</h1>
                    <h4>Browse our selection, and order what you need.</h4>
                </div>
                <div id="arabicText-index" class="padding-left position-absolute hidden">
                    <h1 class=" rtl arabic-medium-font">مرحباً بكم في<br>مكتبة الموارد<br>الخاصة بنا.</h1>
                    <h4 class="rtl arabic-regular-font">تصفح مجموعتنا، واطلب ما تحتاجه.</h4>
                </div>
            </div>
            <div class="col-6 z-1 h-100">
            </div>
        </div>

        <!-- mobile  rows -->
        <div class="row d-flex d-md-none">
            <div class="col-12">
                <h1>Welcome to<br>our resource<br>library</h1>
                <h4>Browse our selection, and order what you need.</h4>
            </div>
        </div>
        <div class="row d-flex d-md-none">
            <div class="col-12">
            </div>
        </div>
        <div class="row d-flex d-md-none">
            <div class="col-12">
                <h1 class=" rtl arabic-medium-font">مرحباً بكم في<br>مكتبة الموارد<br>الخاصة بنا.</h1>
                <h4 class="rtl arabic-regular-font">تصفح مجموعتنا، واطلب ما تحتاجه.</h4>
            </div>
        </div>
    </div>
</div>


<?php
get_footer();
?>
<script>
    const englishText = document.getElementById('englishText-index');
    const arabicText = document.getElementById('arabicText-index');

    let isEnglishVisible = true;

    function switchText() {
        if (isEnglishVisible) {
            // Slide out English text
            englishText.classList.remove('visible');
            englishText.classList.remove('slide-in');
            englishText.classList.add('slide-out');

            // Slide in Arabic text after the English text slides out
            setTimeout(() => {
                englishText.classList.add('hidden');

                arabicText.classList.remove('hidden');

                arabicText.classList.remove('slide-out');

                arabicText.classList.add('slide-in');
            }, 500); // Match the duration of the slide-out animation
        } else {
            // Slide out Arabic text
            arabicText.classList.remove('slide-in');
            arabicText.classList.add('slide-out');

            // Slide in English text after the Arabic text slides out
            setTimeout(() => {
                arabicText.classList.add('hidden');

                englishText.classList.remove('hidden');

                englishText.classList.remove('slide-out');

                englishText.classList.add('slide-in');
            }, 500); // Match the duration of the slide-out animation
        }

        isEnglishVisible = !isEnglishVisible;
    }

    setInterval(switchText, 8000);

</script>