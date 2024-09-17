<?php
/**
 * Template Name: Homepage
 */

get_header();
?>

<div class="homeDiv py-5 position-relative">
    <div class="blue-left-sidebar position-absolute"></div>
    <div class="blue-right-sidebar position-absolute"></div>
    <div class="container-fluid h-100 position-relative">
        <div class="row h-100">
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
            }, 1000); // Match the duration of the slide-out animation
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
            }, 1000); // Match the duration of the slide-out animation
        }

        isEnglishVisible = !isEnglishVisible;
    }

    setInterval(switchText, 8000);

</script>