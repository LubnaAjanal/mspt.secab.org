<?php include('../header.php'); ?>
<style>
    .carousel-gallery {
        margin: 50px 0;
        padding: 0 30px;
        text-align: center;
    }

    .swiper-slide {
        display: flex;
        justify-content: space-around;
        margin-right: 10px;
    }

    .swiper-slide a {
        display: inline-block;
        width: 50%;
        height: 400px;
        border-radius: 4px;
        overflow: hidden;
        position: relative;
        box-shadow: 3px 2px 20px 0px rgba(0, 0, 0, .2);
        transition: transform 0.2s ease-in-out;
    }

    .swiper-slide a:hover {
        transform: scale(1.1);
    }

    .swiper-slide .image {
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center center;
        position: relative;
    }

    .swiper-slide .overlay {
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

    .swiper-slide:hover .overlay {
        opacity: 0.4;
    }

    .swiper-slide .overlay em {
        color: #fff;
        font-size: 26px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: inline-block;
    }

    .swiper-pagination {
        position: relative;
        bottom: auto;
        text-align: center;
        margin-top: 25px;
    }

    .swiper-pagination .swiper-pagination-bullet {
        transition: all .2s linear;
    }

    .swiper-pagination .swiper-pagination-bullet:hover {
        opacity: .7;
    }

    .swiper-pagination .swiper-pagination-bullet-active {
        background-color: #d63031;
        transform: scale(1.1, 1.1);
    }

    .cultural-event p {
        justify-content: center;
    }

    .img-hover {
        transition: transform 0.3s ease;
        border-radius: 0.25rem;
    }

    .img-hover:hover {
        transform: scale(1.1);
    }

    .card-img-top {
        height: 400px;
        object-fit: cover;
    }
</style>


<section>
    <h2 class="heading" style="width:20%; margin-left:40%;">Cultural Event</h2>
    <div class="container">
        <div class="cultural-event">
            <h3>'Pick & Speak' And 'Prepared Speech'</h3>
            <p>MSPT Organized 'Pick & Speak' And 'Prepared Speech' Competition On 4th December 2021. More Than 20 Students Delivered Eloquent Speeches. The Jury Comprised Mrs. Gayatri Bajantri, Assistant Professor SIET And Mr. V S Dolli, The Principal MSPT. This Is One Of The Activities Which Orient To Diploma's New Curriculum Of Skill-Development.</p>
            <div class="carousel-gallery">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="../assets/img/activities/cultural/pick_speak1.jpg">
                                <div class="image" style="background-image: url('../assets/img/activities/cultural/pick_speak1.jpg')"></div>
                                <div class="overlay"><em class="mdi mdi-magnify-plus"></em></div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="../assets/img/activities/cultural/pick_speak2.jpg">
                                <div class="image" style="background-image: url('../assets/img/activities/cultural/pick_speak2.jpg')"></div>
                                <div class="overlay"><em class="mdi mdi-magnify-plus"></em></div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="../assets/img/activities/cultural/pick_speak3.jpg">
                                <div class="image" style="background-image: url('../assets/img/activities/cultural/pick_speak3.jpg')"></div>
                                <div class="overlay"><em class="mdi mdi-magnify-plus"></em></div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        <div class="inter_dept">
            <h3>Inter Department Cooking Competition</h3>
            <img src="../assets/img/activities/cultural/Cooking.jpg" alt="cooking photo" />
        </div>

        <div class="cultural-event mt-4">
            <h3>Fashion Show Competition For Kids Organized By The Dept. Of ADFT, 2017-2018.</h3>
            <div class="carousel-gallery">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="../assets/img/activities/cultural/kids1.jpg">
                                <div class="image" style="background-image: url('../assets/img/activities/cultural/kids1.jpg')"></div>
                                <div class="overlay"><em class="mdi mdi-magnify-plus"></em></div>
                            </a>
                        </div>
                        <!-- <div class="swiper-slide">
                            <a href="../assets/img/activities/cultural/kids2.jpg">
                                <div class="image" style="background-image: url('../assets/img/activities/cultural/kids2.jpg')"></div>
                                <div class="overlay"><em class="mdi mdi-magnify-plus"></em></div>
                            </a>
                        </div> -->
                        <!-- <div class="swiper-slide">
                            <a href="../assets/img/activities/cultural/kids3.jpg">
                                <div class="image" style="background-image: url('../assets/img/activities/cultural/kids3.jpg')"></div>
                                <div class="overlay"><em class="mdi mdi-magnify-plus"></em></div>
                            </a>
                        </div> -->
                        <div class="swiper-slide">
                            <a href="../assets/img/activities/cultural/kids4.jpg">
                                <div class="image" style="background-image: url('../assets/img/activities/cultural/kids4.jpg')"></div>
                                <div class="overlay"><em class="mdi mdi-magnify-plus"></em></div>
                            </a>
                        </div>
                        <!-- <div class="swiper-slide">
                            <a href="../assets/img/activities/cultural/kids5.jpg">
                                <div class="image" style="background-image: url('../assets/img/activities/cultural/kids5.jpg')"></div>
                                <div class="overlay"><em class="mdi mdi-magnify-plus"></em></div>
                            </a>
                        </div> -->
                        <div class="swiper-slide">
                            <a href="../assets/img/activities/cultural/kids6.jpg">
                                <div class="image" style="background-image: url('../assets/img/activities/cultural/kids6.jpg')"></div>
                                <div class="overlay"><em class="mdi mdi-magnify-plus"></em></div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm">
                    <img src="../assets/img/activities/cultural/kids2.jpg" class="card-img-top img-hover" alt="Women's Day Image 1">
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm">
                    <img src="../assets/img/activities/cultural/kids3.jpg" class="card-img-top img-hover" alt="Women's Day Image 2">
                    <!-- <div class="card-body">
                        <p class="card-text">Description or caption for the second image goes here.</p>
                    </div> -->
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm">
                    <img src="../assets/img/activities/cultural/kids5.jpg" class="card-img-top img-hover" alt="Women's Day Image 3">
                    <!-- <div class="card-body">
                        <p class="card-text">Description or caption for the third image goes here.</p>
                    </div> -->
                </div>
            </div>
        </div>

        <div class="cultural-event mt-4">
            <h3>Inter Department Hair Style Competition</h3>
            <div class="carousel-gallery">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="../assets/img/activities/cultural/hair1.jpg">
                                <div class="image" style="background-image: url('../assets/img/activities/cultural/hair1.jpg')"></div>
                                <div class="overlay"><em class="mdi mdi-magnify-plus"></em></div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="../assets/img/activities/cultural/hair2.jpg">
                                <div class="image" style="background-image: url('../assets/img/activities/cultural/hair2.jpg')"></div>
                                <div class="overlay"><em class="mdi mdi-magnify-plus"></em></div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>

        <h3 class="mb-4">Inter Department Fashion Show Competition, 2019-2020.</h3>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card border-0 shadow-sm">
                    <img src="../assets/img/activities/cultural/inter3.jpg" class="card-img-top img-hover" alt="Women's Day Image 1">
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card border-0 shadow-sm">
                    <img src="../assets/img/activities/cultural/inter1.jpg" class="card-img-top img-hover" alt="Women's Day Image 2">
                    <!-- <div class="card-body">
                        <p class="card-text">Description or caption for the second image goes here.</p>
                    </div> -->
                </div>
            </div>
        </div>

        <h3 class="mb-4">Inter Department Mehandi Competition</h3>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm">
                    <img src="../assets/img/activities/cultural/mehandi1.jpg" class="card-img-top img-hover" alt="Women's Day Image 1">
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm">
                    <img src="../assets/img/activities/cultural/mehandi2.jpg" class="card-img-top img-hover" alt="Women's Day Image 2">
                    <!-- <div class="card-body">
                        <p class="card-text">Description or caption for the second image goes here.</p>
                    </div> -->
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm">
                    <img src="../assets/img/activities/cultural/mehandi3.jpg" class="card-img-top img-hover" alt="Women's Day Image 2">
                    <!-- <div class="card-body">
                        <p class="card-text">Description or caption for the second image goes here.</p>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="inter_dept">
            <h3>Inter Department Rangoli Competition</h3>
            <img src="../assets/img/activities/cultural/rangoli.jpg" alt="rangoli photo" />
        </div>
    </div>
</section>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
    });

    document.querySelectorAll('.swiper-slide a').forEach(item => {
        item.addEventListener('click', event => {
            event.preventDefault();
            const imgSrc = item.getAttribute('href');
            const swiperWrapper = document.querySelector('.swiper-wrapper');
            const newSlide = document.createElement('div');
            newSlide.classList.add('swiper-slide');
            newSlide.innerHTML = `
                <a href="${imgSrc}">
                    <div class="image" style="background-image: url('${imgSrc}')"></div>
                    <div class="overlay"><em class="mdi mdi-magnify-plus"></em></div>
                </a>
            `;
            swiperWrapper.appendChild(newSlide);
            swiper.slideTo(swiperWrapper.children.length - 1);
        });
    });
</script>



<?php
include('../top_footer.php');
include('../footer.php');
?>