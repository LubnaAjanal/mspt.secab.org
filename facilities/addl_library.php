<?php include('../headerPages/header.php'); ?>


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
</style>

<section>
    <div class="container">
        <div class="renewable">
            <h2 class="mb-3">Renewable Energy Model Lab</h2>
            <div class="content">
                <p>Welcome to the MSPT Renewable Energy Model Laboratory. Models help the students to visualize something that is difficult to see or understand. The lab has various renewable energy models such as Wind and Solar Energy which helps students in understanding the process and allows the students to inculcate the idea of renewable energy sources.</p>
            </div>
            <div class="carousel-gallery">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="../assets/img/facilities/renewable.jpg">
                                <div class="image" style="background-image: url('../assets/img/facilities/renewable.jpg')"></div>
                                <div class="overlay"><em class="mdi mdi-magnify-plus"></em></div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="../assets/img/facilities/renewable1.jpg">
                                <div class="image" style="background-image: url('../assets/img/facilities/renewable1.jpg')"></div>
                                <div class="overlay"><em class="mdi mdi-magnify-plus"></em></div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="../assets/img/facilities/renewable2.jpg">
                                <div class="image" style="background-image: url('../assets/img/facilities/renewable2.jpg')"></div>
                                <div class="overlay"><em class="mdi mdi-magnify-plus"></em></div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>

        <div class="robotics">
            <h2 class="mb-3">Robotics Lab</h2>
            <div class="content">
                <p>Welcome to the MSPT Robotics Laboratory - The Innovation Zone. The lab is powered to acquaint students with state-of-the-art equipment such as 3D printer, robotics and electronics development tools, IoT, sensors etc</p>
                <p>The lab activities are designed to spur the spark of creativity, and go beyond regular curriculum and text book learning. The Robotics lab will let students explore skills of future such as design and computational thinking, adaptive learning and artificial intelligence</p>
            </div>
            <div class="carousel-gallery">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="../assets/img/facilities/renewable.jpg">
                                <div class="image" style="background-image: url('../assets/img/facilities/robotics.jpg')"></div>
                                <div class="overlay"><em class="mdi mdi-magnify-plus"></em></div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="../assets/img/facilities/renewable1.jpg">
                                <div class="image" style="background-image: url('../assets/img/facilities/robotics1.jpg')"></div>
                                <div class="overlay"><em class="mdi mdi-magnify-plus"></em></div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="../assets/img/facilities/renewable2.jpg">
                                <div class="image" style="background-image: url('../assets/img/facilities/robotics2.jpg')"></div>
                                <div class="overlay"><em class="mdi mdi-magnify-plus"></em></div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="../assets/img/facilities/renewable2.jpg">
                                <div class="image" style="background-image: url('../assets/img/facilities/robotics3.jpg')"></div>
                                <div class="overlay"><em class="mdi mdi-magnify-plus"></em></div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="../assets/img/facilities/renewable2.jpg">
                                <div class="image" style="background-image: url('../assets/img/facilities/robotics4.jpg')"></div>
                                <div class="overlay"><em class="mdi mdi-magnify-plus"></em></div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="../assets/img/facilities/renewable2.jpg">
                                <div class="image" style="background-image: url('../assets/img/facilities/robotics5.jpg')"></div>
                                <div class="overlay"><em class="mdi mdi-magnify-plus"></em></div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="../assets/img/facilities/renewable2.jpg">
                                <div class="image" style="background-image: url('../assets/img/facilities/robotics6.jpg')"></div>
                                <div class="overlay"><em class="mdi mdi-magnify-plus"></em></div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>

        <div class="solar_pv">
            <h2 class="mb-3">Solar PV Laboratory</h2>
            <div class="content">
                <p>Welcome to MSPT Solar PV Laboratory. The laboratory has been designed for students to understand practical aspects of solar systems installation and operations. The Solar PV demo unit provides a platform for students to work on industrial equipment, by means of experiments and understand their installation, operations and maintenance aspects in addition to actual site visits accompanied by experts from the solar industry</p>
            </div>
            <div class="carousel-gallery">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="../assets/img/facilities/renewable.jpg">
                                <div class="image" style="background-image: url('../assets/img/facilities/solar1.jpg')"></div>
                                <div class="overlay"><em class="mdi mdi-magnify-plus"></em></div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="../assets/img/facilities/renewable1.jpg">
                                <div class="image" style="background-image: url('../assets/img/facilities/solar2.jpg')"></div>
                                <div class="overlay"><em class="mdi mdi-magnify-plus"></em></div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="../assets/img/facilities/renewable2.jpg">
                                <div class="image" style="background-image: url('../assets/img/facilities/solar3.jpg')"></div>
                                <div class="overlay"><em class="mdi mdi-magnify-plus"></em></div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
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
include('../headerPages/top_footer.php');
include('../headerPages/footer.php');
?>