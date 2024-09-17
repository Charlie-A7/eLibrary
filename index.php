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
                <div class="padding-left">
                    <h1 id="englishText" class="visible position-absolute">Welcome to<br>our resource<br>library</h1>
                    <h4 id="englishSub" class="visible position-absolute">Browse our selection, and order what you need.</h4>
                    <h1 id="arabicText" class="hidden rtl arabic-medium-font position-absolute">مرحباً بكم في<br>مكتبة الموارد<br>الخاصة بنا.</h1>
                    <h4 id="arabicSub" class="hidden rtl arabic-regular-font position-absolute">تصفح مجموعتنا، واطلب ما تحتاجه.</h4>
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
    const englishText = document.getElementById('englishText');
    const englishSub = document.getElementById('englishSub');
    const arabicText = document.getElementById('arabicText');
    const arabicSub = document.getElementById('arabicSub');

    let isEnglishVisible = true;

    function switchText() {
        if (isEnglishVisible) {
            // Slide out English text
            englishText.classList.remove('visible');
            englishText.classList.add('slide-out');
            englishSub.classList.remove('visible');
            englishSub.classList.add('slide-out');

            // Slide in Arabic text after the English text slides out
            setTimeout(() => {
                englishText.classList.add('hidden');
                englishSub.classList.add('hidden');

                arabicText.classList.remove('hidden');
                arabicSub.classList.remove('hidden');

                arabicText.classList.remove('slide-out');
                arabicSub.classList.remove('slide-out');

                arabicText.classList.add('slide-in');
                arabicSub.classList.add('slide-in');
            }, 1000); // Match the duration of the slide-out animation
        } else {
            // Slide out Arabic text
            arabicText.classList.remove('slide-in');
            arabicText.classList.add('slide-out');
            arabicSub.classList.remove('slide-in');
            arabicSub.classList.add('slide-out');

            // Slide in English text after the Arabic text slides out
            setTimeout(() => {
                arabicText.classList.add('hidden');
                arabicSub.classList.add('hidden');

                englishText.classList.remove('hidden');
                englishSub.classList.remove('hidden');

                englishText.classList.remove('slide-out');
                englishSub.classList.remove('slide-out');

                englishText.classList.add('slide-in');
                englishSub.classList.add('slide-in');
            }, 1000); // Match the duration of the slide-out animation
        }

        isEnglishVisible = !isEnglishVisible;
    }

    // Loop the animation every 5 seconds (adjust timing as needed)
    setInterval(switchText, 5000);

</script>