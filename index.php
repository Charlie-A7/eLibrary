<?php
/**
 * Template Name: Homepage
 */

get_header();
?>

<div class="homeDiv pb-4 pb-md-5 position-relative">

    <!-- desktop design -->
    <!-- <div class="blue-left-sidebar-desktop position-absolute d-none d-md-block"></div>
    <div class="blue-right-sidebar-desktop position-absolute d-none d-md-block"></div> -->

    <!-- mobile desgin -->
    <div class="blue-left-sidebar-mobile position-absolute d-block d-md-none"></div>
    <div class="blue-right-sidebar-mobile position-absolute d-block d-md-none"></div>

    <div class="container-fluid h-100 position-relative">

        <!-- desktop  row -->
         <div class="desktop d-none d-md-flex flex-column h-100">
            <div class="row h-100">
                <div class="col-12 z-1 h-100 d-flex flex-column justify-content-center align-items-center pb-5">
                    <div id="englishText-index" class="position-absolute visible">
                        <!-- <h1>Welcome to our <br> resource library</h1> -->
                        <h1>Welcome to <br> our resource <br> library</h1>
                        <h4>Browse our selection, and order what you need.</h4>
                    </div>
                    <div id="arabicText-index" class="position-absolute hidden">
                        <h1 class="rtl arabic-medium-font homepage-desktop-arabic-text-big">مرحباً بكم في<br>مكتبة الموارد<br>الخاصة بنا.</h1>
                        <!-- <h1 class="rtl arabic-medium-font homepage-desktop-arabic-text-big">مرحباً بكم في مكتبة<br>.المواردالخاصة بنا</h1> -->
                        <h4 class="rtl arabic-regular-font homepage-desktop-arabic-text-small">تصفح مجموعتنا، واطلب ما تحتاجه.</h4>
                    </div>
                </div>
                <!-- <div class="col-6 z-1 h-100 d-flex align-items-center justify-content-center">
                    <img src="https://charlie.e-vents.me/wp-content/themes/main/inc/assets/images/homepage/pic1.jpg" alt="" class="">
                </div> -->
            </div>
         </div>

        <!-- mobile  rows -->
         <div class="mobile d-flex d-md-none flex-column h-100">
            <div class="row row1 my-0">
                <div class="col-12">
                    <!-- <div class="dots-design text-right">..........</div> -->
                    <div class="text-right">
                        <?php 
                            for ($i = 0; $i < 10; $i++) {
                                echo '<div class="dots-design mx-1"></div>';
                            }
                        ?>
                    </div>
                    <h1>Welcome to our<br>resource library</h1>
                    <h6>Browse our selection, and order what you need.</h6>
                </div>
            </div>
            <div class="row row2 my-3">
                <div class="col-12">
                    <div class="d-flex justify-content-center">
                        <img src="https://charlie.e-vents.me/wp-content/themes/main/inc/assets/images/homepage/pic1.jpg" alt="" class="img-fluid object-fit-cover">
                    </div>
                </div>
            </div>
            <div class="row row3 my-0">
                <div class="col-12">
                    <!-- <div class="dots-design text-left">..........</div> -->
                    <div class="text-left">
                        <?php 
                            for ($i = 0; $i < 10; $i++) {
                                echo '<div class="dots-design mx-1"></div>';
                            }
                        ?>
                    </div>
                    <h1 class=" rtl arabic-medium-font homepage-mobile-arabic-text-big">مرحباً بكم في مكتبة <br>الموارد الخاصة بنا.</h1>
                    <h6 class="rtl arabic-regular-font homepage-mobile-arabic-text-small">تصفح مجموعتنا، واطلب ما تحتاجه.</h6>
                </div>
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