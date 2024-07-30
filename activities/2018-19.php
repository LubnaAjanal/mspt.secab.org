<style>
    /* Carousel Gallery */
    .carousel-gallery {
        margin: 50px 0;
        padding: 0 30px;
        text-align: center;
    }

    .carousel-gallery .swiper-container {
        width: 100%;
    }

    .carousel-gallery .swiper-wrapper {
        display: inline-block;
        flex-wrap: nowrap;
    }

    .carousel-gallery .swiper-slide {
        display: inline-block;
        width: calc(33.33% - 10px) !important;
        /* 33.33% width for 3 slides per view */
        margin-right: 5px !important;
        justify-content: center;
    }

    .carousel-gallery .swiper-slide a {
        display: block;
        width: 100%;
        height: 200px !important;
        border-radius: 4px;
        overflow: hidden;
        position: relative;
        box-shadow: 3px 2px 20px 0px rgba(0, 0, 0, .2);
        transition: transform 0.2s ease-in-out;
    }

    .carousel-gallery .swiper-slide a:hover {
        transform: scale(1.1);
    }

    .carousel-gallery .swiper-slide .image {
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center center;
        position: absolute;
    }

    .carousel-gallery .swiper-slide .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(20, 20, 20, .8);
        text-align: center;
        opacity: 0;
        transition: all .2s linear;
    }

    .carousel-gallery .swiper-slide:hover .overlay {
        opacity: 0.4;
    }

    .carousel-gallery .swiper-slide .overlay em {
        color: #fff;
        font-size: 26px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: inline-block;
    }

    .carousel-gallery .swiper-pagination {
        position: relative !important;
        bottom: auto !important;
        text-align: center !important;
        margin-top: 25px !important;
    }

    .carousel-gallery .swiper-pagination .swiper-pagination-bullet {
        transition: all .2s linear;
    }

    .carousel-gallery .swiper-pagination .swiper-pagination-bullet:hover {
        opacity: .7;
    }

    .carousel-gallery .swiper-pagination .swiper-pagination-bullet-active {
        background-color: #d63031;
        transform: scale(1.1, 1.1);
    }
</style>

<!-- Gallery -->
<div class="carousel-gallery">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <!-- Add your swiper slides here -->
            <div class="swiper-slide">
                <a href="../assets/img/activities/sports/Picture1.jpg" data-fancybox="gallery">
                    <div class="image" style="background-image: url(../assets/img/activities/sports/Picture1.jpg)">
                        <div class="overlay">
                            <em class="mdi mdi-magnify-plus"></em>
                        </div>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="../assets/img/activities/sports/Picture2.jpg" data-fancybox="gallery">
                    <div class="image" style="background-image: url(../assets/img/activities/sports/Picture2.jpg)">
                        <div class="overlay">
                            <em class="mdi mdi-magnify-plus"></em>
                        </div>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="../assets/img/activities/sports/Picture3.jpg" data-fancybox="gallery">
                    <div class="image" style="background-image: url(../assets/img/activities/sports/Picture3.jpg)">
                        <div class="overlay">
                            <em class="mdi mdi-magnify-plus"></em>
                        </div>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="../assets/img/activities/sports/Picture4.jpg" data-fancybox="gallery">
                    <div class="image" style="background-image: url(../assets/img/activities/sports/Picture4.jpg)">
                        <div class="overlay">
                            <em class="mdi mdi-magnify-plus"></em>
                        </div>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="../assets/img/activities/sports/Picture5.jpg" data-fancybox="gallery">
                    <div class="image" style="background-image: url(../assets/img/activities/sports/Picture5.jpg)">
                        <div class="overlay">
                            <em class="mdi mdi-magnify-plus"></em>
                        </div>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="../assets/img/activities/sports/Picture6.jpg" data-fancybox="gallery">
                    <div class="image" style="background-image: url(../assets/img/activities/sports/Picture6.jpg)">
                        <div class="overlay">
                            <em class="mdi mdi-magnify-plus"></em>
                        </div>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="../assets/img/activities/sports/Picture7.jpg" data-fancybox="gallery">
                    <div class="image" style="background-image: url(../assets/img/activities/sports/Picture7.jpg)">
                        <div class="overlay">
                            <em class="mdi mdi-magnify-plus"></em>
                        </div>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="../assets/img/activities/sports/Picture8.jpg" data-fancybox="gallery">
                    <div class="image" style="background-image: url(../assets/img/activities/sports/Picture8.jpg)">
                        <div class="overlay">
                            <em class="mdi mdi-magnify-plus"></em>
                        </div>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="../assets/img/activities/sports/Picture9.jpg" data-fancybox="gallery">
                    <div class="image" style="background-image: url(../assets/img/activities/sports/Picture9.jpg)">
                        <div class="overlay">
                            <em class="mdi mdi-magnify-plus"></em>
                        </div>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="../assets/img/activities/sports/Picture10.jpg" data-fancybox="gallery">
                    <div class="image" style="background-image: url(../assets/img/activities/sports/Picture10.jpg)">
                        <div class="overlay">
                            <em class="mdi mdi-magnify-plus"></em>
                        </div>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="../assets/img/activities/sports/Picture11.jpg" data-fancybox="gallery">
                    <div class="image" style="background-image: url(../assets/img/activities/sports/Picture11.jpg)">
                        <div class="overlay">
                            <em class="mdi mdi-magnify-plus"></em>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<script>
    $(function() {
        var swiper = new Swiper('.carousel-gallery .swiper-container', {
            effect: 'slide',
            speed: 900,
            slidesPerView: 3, // Updated to 4 slides per view
            spaceBetween: 20,
            simulateTouch: true,
            autoplay: {
                delay: 5000,
                stopOnLastSlide: false,
                disableOnInteraction: false
            },
            pagination: {
                el: '.carousel-gallery .swiper-pagination',
                clickable: true
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 5
                },
                425: {
                    slidesPerView: 2,
                    spaceBetween: 10
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 15
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 20
                }
            }
        });
    });
</script>
<!--/ End Gallery -->