<style>
    /*--------------------------------------------------------------
# Testimonials Section
--------------------------------------------------------------*/
    .testimonials {
        padding: 80px 0;
        position: relative;
    }

    .testimonials:before {
        content: "";
        background: color-mix(in srgb, var(--background-color), transparent 30%);
        position: absolute;
        inset: 0;
        z-index: 2;
    }

    .testimonials .testimonials-bg {
        position: absolute;
        inset: 0;
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 1;
    }

    .testimonials .container {
        position: relative;
        z-index: 3;
    }

    .testimonials .testimonials-carousel,
    .testimonials .testimonials-slider {
        overflow: hidden;
    }

    .testimonials .testimonial-item {
        text-align: center;
    }

    .testimonials .testimonial-item .testimonial-img {
        width: 100px;
        border-radius: 50%;
        border: 6px solid color-mix(in srgb, var(--default-color), transparent 85%);
        margin: 0 auto;
    }

    .testimonials .testimonial-item h3 {
        font-size: 20px;
        font-weight: bold;
        margin: 10px 0 5px 0;
    }

    .testimonials .testimonial-item h4 {
        font-size: 14px;
        margin: 0 0 15px 0;
        color: color-mix(in srgb, var(--default-color), transparent 40%);
    }

    /* .testimonials .testimonial-item .stars {
  margin-bottom: 15px;
}

.testimonials .testimonial-item .stars i {
  color: #ffc107;
  margin: 0 1px;
} */

    .testimonials .testimonial-item .quote-icon-left,
    .testimonials .testimonial-item .quote-icon-right {
        color: color-mix(in srgb, var(--default-color), transparent 40%);
        font-size: 26px;
        line-height: 0;
    }

    .testimonials .testimonial-item .quote-icon-left {
        display: inline-block;
        left: -5px;
        position: relative;
    }

    .testimonials .testimonial-item .quote-icon-right {
        display: inline-block;
        right: -5px;
        position: relative;
        top: 10px;
        transform: scale(-1, -1);
    }

    .testimonials .testimonial-item p {
        font-style: italic;
        margin: 0 auto 15px auto;
    }

    .testimonials .swiper-wrapper {
        height: auto;
    }

    .testimonials .swiper-pagination {
        margin-top: 20px;
        position: relative;
    }

    .testimonials .swiper-pagination .swiper-pagination-bullet {
        width: 12px;
        height: 12px;
        background-color: color-mix(in srgb, var(--default-color), transparent 50%);
        opacity: 0.5;
    }

    .testimonials .swiper-pagination .swiper-pagination-bullet-active {
        background-color: var(--default-color);
        opacity: 1;
    }

    @media (min-width: 992px) {
        .testimonials .testimonial-item p {
            width: 80%;
        }
    }
</style>

<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section dark-background mb-5">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
    </div><!-- End Section Title -->

    <img src="../assets/img/mspt_building_final.jpg" class="testimonials-bg" alt="">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
                {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                        "delay": 5000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                    }
                }
            </script>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="../assets/img/vm/msg1.jpg" class="testimonial-img" alt="">
                        <h3>S A Punekar</h3>
                        <h4>Founder &amp; President</h4>
                        <!-- <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div> -->
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>The vision of the management, environment of the institute and endeavor of the faculty
                                members and other staff members has raised this prestigious institute to greater
                                heights, setting SECAB at the place of the pride among all colleges in Vijayapur.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="../assets/img/vm/fac2.jpg" class="testimonial-img" alt="">
                        <h3>Mr. Talha Attar</h3>
                        <h4>Principal</h4>
                        <!-- <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div> -->
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Technical education has entered a new era. India has become a signatory of the
                                Washington accord. Hence we must adopt Outcome Based Education (OBE) and see that our
                                students inculcate the graduate attributes of an engineer. OBE has shifted the focus
                                of education from teacher centric to student centric i.e students should achieve the
                                goals of education.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="../assets/img/vm/v.jpg" class="testimonial-img" alt="">
                        <h3>Institute Vision</h3>
                        <!-- <h4>Store Owner</h4> -->
                        <!-- <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div> -->
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>To import technical education for the progressive transformation of individuals and
                                society.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="../assets/img/vm/m.webp" class="testimonial-img" alt="">
                        <h3>Institute Mission</h3>
                        <!-- <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div> -->
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Malik Sandal Polytechnic is committed to achieve its vision by:
                                <ul>
                                    <li>Delivering effective teaching-learning process through outcomes based education.</li>
                                    <li>Inculcating practical skills to interpret recent tools and technologies.</li>
                                    <li>Preparing students to respond to the technological changes during life-long learning.</li>
                                    <li>Strengthening relationship with stakeholders for overall development of the institute.</li>
                                </ul>
                            </span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>

</section><!-- /Testimonials Section -->