<?php include('../headerPages/header.php'); ?>

<main class="main">
    <!-- Page Title -->
    <div class="page-title">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">MSPT Gallery</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="../headerPages/index.php">Home</a></li>
                    <li class="current">Gallery</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details">

        <!-- Section Title -->
        <!-- <div class="container section-title" data-aos="fade-up">
            <h2>MSPT Gallery</h2>
        </div> -->
        <!-- End Section Title -->

        <div class="container" data-aos="fade-up">

            <div class="portfolio-details-slider swiper init-swiper">
                <script type="application/json" class="swiper-config">
                    {
                        "loop": true,
                        "speed": 600,
                        "autoplay": {
                            "delay": 5000
                        },
                        "slidesPerView": "auto",
                        "navigation": {
                            "nextEl": ".swiper-button-next",
                            "prevEl": ".swiper-button-prev"
                        },
                        "pagination": {
                            "el": ".swiper-pagination",
                            "type": "bullets",
                            "clickable": true
                        }
                    }
                </script>
                <div class="swiper-wrapper align-items-center" id="swiper-wrapper">

                    <div class="swiper-slide">
                        <img src="../assets/img/gallery/glr15.jpg" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="../assets/img/gallery/glr16.jpg" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="../assets/img/gallery/glr17.jpg" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="../assets/img/gallery/glr18.jpg" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="../assets/img/gallery/glr19.jpg" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="../assets/img/gallery/glr20.jpg" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="../assets/img/gallery/glr21.jpg" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="../assets/img/gallery/glr22.jpg" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="../assets/img/gallery/glr23.jpg" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="../assets/img/gallery/glr24.jpg" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="../assets/img/gallery/glr25.jpg" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="../assets/img/gallery/glr26.jpg" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="../assets/img/gallery/glr27.jpg" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="../assets/img/gallery/glr28.jpg" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="../assets/img/gallery/glr29.jpg" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="../assets/img/gallery/glr31.jpg" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="../assets/img/gallery/glr32.jpg" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="../assets/img/gallery/glr34.jpg" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="../assets/img/gallery/glr35.jpg" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="../assets/img/gallery/glr36.jpg" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="../assets/img/gallery/glr37.jpg" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="../assets/img/gallery/glr38.jpg" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="../assets/img/gallery/glr39.jpg" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="../assets/img/gallery/glr40.jpg" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="../assets/img/gallery/glr41.jpg" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="../assets/img/gallery/glr42.jpg" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="../assets/img/gallery/glr43.jpg" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="../assets/img/gallery/glr44.jpg" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="../assets/img/gallery/glr45.jpg" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="../assets/img/gallery/glr46.jpg" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="../assets/img/gallery/glr47.jpg" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="../assets/img/gallery/glr48.jpg" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="../assets/img/gallery/glr49.jpg" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="../assets/img/gallery/glr50.jpg" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="../assets/img/gallery/glr51.jpg" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="../assets/img/gallery/glr52.jpg" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img src="../assets/img/gallery/glr53.jpg" alt="">
                    </div>

                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section><!-- /Portfolio Details Section -->
</main>

<?php
include('../headerPages/top_footer.php');
include('../headerPages/footer.php');
?>