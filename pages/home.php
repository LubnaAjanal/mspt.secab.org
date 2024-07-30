<style>
    .swiper-container {
        width: 100%;
        height: 100vh;
        position: relative;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .swiper-slide img {
        width: 100%;
        height: 100%;
    }

    .swiper-button-next,
    .swiper-button-prev {
        color: #fff;
    }

    .main_container {
        display: grid;
        grid-template-columns: 4fr 1.5fr;
        gap: 20px;
        padding: 10px;
    }

    .content-section {
        padding: 20px;
        background: #eef5f9;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    .content-section h2 {
        margin-top: 0;
        color: #333;
    }

    .about-college {
        background: #eef5f9;
        display: block;
        grid-template-columns: 1fr 2fr;
        gap: 20px;
    }

    .about-college img {
        width: 100%;
        border-radius: 10px;
        object-fit: cover;
    }

    .news-events {
        width: 100%;
        float: right;
    }

    .event-item {
        background: #fff;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 10px;
        box-shadow: -4px 4px 8px rgba(0, 0, 0, 0.4);
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .event-item i {
        color: #007bff;
        font-size: 20px;
    }

    .event-item a {
        text-decoration: none;
        color: black;
        flex-grow: 1;
    }

    .event-item a:hover {
        text-decoration: underline;
    }

    marquee {
        height: 400px;
        overflow: hidden;
    }

    .event-heading h2 {
        background-color: #0ea2bd;
    }
</style>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<main class="main">
    <!-- Gallery Section -->
    <!-- Swiper -->
    <!-- <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="../assets/img/home_gallery/s1.jpg" alt="Image 1"></div>
            <div class="swiper-slide"><img src="../assets/img/home_gallery/s2.jpg" alt="Image 2"></div>
            <div class="swiper-slide"><img src="../assets/img/home_gallery/s3.jpg" alt="Image 3"></div>
            <div class="swiper-slide"><img src="../assets/img/home_gallery/s4.jpg" alt="Image 4"></div>
            <div class="swiper-slide"><img src="../assets/img/home_gallery/s5.jpg" alt="Image 5"></div>
            <div class="swiper-slide"><img src="../assets/img/home_gallery/s6.jpg" alt="Image 6"></div>
            <div class="swiper-slide"><img src="../assets/img/home_gallery/s7.jpg" alt="Image 7"></div>
            <div class="swiper-slide"><img src="../assets/img/home_gallery/s9.jpg" alt="Image 9"></div>
            <div class="swiper-slide"><img src="../assets/img/home_gallery/s10.jpg" alt="Image 10"></div>
            <div class="swiper-slide"><img src="../assets/img/home_gallery/s11.jpg" alt="Image 11"></div>
            <div class="swiper-slide"><img src="../assets/img/home_gallery/s12.jpg" alt="Image 12"></div>
            <div class="swiper-slide"><img src="../assets/img/home_gallery/s13.jpg" alt="Image 13"></div>
            <div class="swiper-slide"><img src="../assets/img/home_gallery/s14.jpg" alt="Image 14"></div>
            <div class="swiper-slide"><img src="../assets/img/home_gallery/s15.jpg" alt="Image 15"></div>
            <div class="swiper-slide"><img src="../assets/img/home_gallery/s16.jpg" alt="Image 16"></div>
            <div class="swiper-slide"><img src="../assets/img/home_gallery/s17.jpg" alt="Image 17"></div>
            <div class="swiper-slide"><img src="../assets/img/home_gallery/s18.jpg" alt="Image 18"></div>
            <div class="swiper-slide"><img src="../assets/img/home_gallery/s19.jpg" alt="Image 19"></div>
            <div class="swiper-slide"><img src="../assets/img/home_gallery/campus_drive.jpg" alt="Image 20"></div>
        </div> -->
        <!-- Add Pagination -->
        <!-- <div class="swiper-pagination"></div> -->
        <!-- Add Navigation -->
        <!-- <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div> -->
    <!-- /Gallery Section -->

    <!-- College and News Section -->
    <section>
        <div class=" main_container">
            <div class="content-section about-college">
                <div>
                    <img src="../assets/img/mspt_building_final.jpg" alt="College Image">
                </div>
                <div class="mt-3">
                    <h2>ABOUT - MSPT</h2>
                    <p>Malik Sandal Polytechnic was the first institution to name itself after the renowned architect of the 16 th Century. It is one of the oldest Institution in the historic city of Vijayapur. It was established in the year 1983 by Sri S.A Punekar Founder and President of SECAB, with an objective to provide appropriate technical education for the students of vicinity. It is known for imparting quality education. It has highly qualified and committed staff with adequate Infrastructure. During its tenure it has produced a good number of Diploma holders who are working in various fields in India and abroad.</p>
                    <p>Malik Sandal Polytechnic, Vijayapur is recognized by the
                        Directorate of Technical Education (DTE), Government of
                        Karnataka and approved by All India Council for Technical
                        Education (AICTE),New Delhi.
                    </p>
                    <p>The Institute is located on a sprawling 5 acres of land in
                        the heart of city within 1.5 km from central bus stand and 0.5 km from Ibrahimpur railway station.
                        The Institute has spacious lecture halls, well equipped laboratories, workshops and a vast play
                        ground.
                    </p>
                </div>
            </div>

            <div class="content-section news-events">
                <div class="event-heading text-center bg-black">
                    <h2><a href='https://mspt.secab.org/pdf/coe/2021-22.pdf' target="_blank" style="color:#fff;">Calendar of Events</a></h2>
                </div>
                <div class="event-heading text-center bg-black">
                    <h2><a href='#' style="color:#fff;">News and Events</a></h2>
                </div>
                <marquee direction="up" ONMOUSEOVER="this.stop();" ONMOUSEOUT="this.start();" scrollamount="2" width="100%" height="400px" loop="true">
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>PTM of Even Semester 2023-24 Academic Year was
                            conducted on 24/02/2024 with a view to collaborating efforts for quality enhancement.</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>Republic day Celebration on 26/01/2024.</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>MSPT: Sports Usher Even Semester 2023-24.</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>Celebrated the Engineer’s Day- 2023</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>POOL CAMPUS DRIVE 02/09/2023</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>'Induction Program' was conducted on 27 August 2023</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>Independence day Celebration on 15/08/2023</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>WOMEN’S DAY Celebration on 8th march 2023</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>Independence day Celebration 2023</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>Republic day Celebration on 26/01/2022</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>An Essay Competition was conducted on 21st January 2022</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>MSPT Sports Day, on 12th and 13th January 2022</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>SECAB Founder's Day was celebrated on 10th January 2022</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>Parents Meet was conducted on 18th December 2021</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>'Induction Program' was conducted on 29th November 2021. The Chief Guest, Dr. Sowmya T. G.,
                            Senior Grade (English) Lecturer, Government Polytechnic Vijayapur</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>Malik Sandal Polytechnic and Secab Junior PU college for women, jointly celebrated the
                            victory of Indian Athletes in Tokyo Olympics 2020 on 02-08-2021</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>Malik Sandal Polytechnic, department of CIVIL Engineering students secured second prize in
                            the National Level Technical Paper Presentation ANNUM 2K21, held at A.G Patil Polytechnic, Solapur,
                            Maharashtra on 7/07/2021.</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>Malik Sandal Polytechnic, Vijayapur organised VACCINATION DRIVE in association with District
                            Administration Vijayapur and Department of Health & Family Welfare Government of Karnataka on 5/7/2021.</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>Inter School Badminton Competition 2020-2021</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>Motivational talk by Dr. Zia Abideen Punekar on 23rd march 2021</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>WOMEN’S DAY Celebration on 8th march 2021</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>FATHER'S DAY Celebration 2022</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>Mechanical department of MSPT organized a parent’s meet on 6th march 2021</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>Civil engineering department conducted parent’s meet on 6th march 2021</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>Computer Science Department conducted Parent-Faculty Meet on 5th march 2021</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>MSPT cultural committee conducted an Essay competition “The Importance of Trees” on 4th March 2021</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>Course outcome of Environmental sustainability</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>Civil Engineering students visited Water Treatment Plant at Kolar on 20 February 2021.</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>E&C Department conducted Parent-Faculty Meet on 20 February 2021, regarding students progress.</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>Mechanical Department of MSPT organized a two days industrial visit , Kelsons groups of industries
                            Kolhapur on 20 Feb 2021</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>EC Department Guest Lecturer 20-02-2021</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>20 Feb 2021 -Carrier Guidance Program at Morarji Desai High School, Afzalpur Takke</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>Carrier Guidance Program -16 February 2021</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>EEE Fresher party -16 feb 2021</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>Mr. Suhaib Mohammed Assistant Professor, EEE, addressing OBE(Outcome Based Education)
                            session on 14 February 2021</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>Forum for Character Building in Youth and Communal Harmony organized a speech by Adrushya
                            Kadasiddeshwara Swamiji on 8th February 2021.</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>Word Of Appreciation by Principal Sir to Mechanical department</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>Mechanical Engineering Department organized Freshers' Party</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>CSE Department conducted an industrial visit to 'BSNL Telephone Exchange' for
                            Final Year Students on 6th February 2021.</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>'Site Visit' for First Year Civil Department was carried out on 6th February 2021.</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>Apparel Designing & Fabrication Technology Department celebrated 'Freshers' Day'
                            on 5th February 2021.
                        </a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>Guest lecture on "Technical Communication Skills" conducted on 4th February, 2021</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>Guest lecture on "CS Graduate in IT Field" conducted on 28th January, 2021</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>Mr. Shishir Kengnal, Research Scholar, NIT Rourkela, addressing OBE(Outcome Based Education)
                            session on 23rd January 2021</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>CSE Department organized 'Freshers Day' with welcome jubilation, on 22nd January 2021.
                        </a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>College Level 'Pick and Speak Competition' and 'Speech Competition'</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>Malik sandal polytechnic vijaypur in Association with AMP Mumbai Organised Employability
                            Training Program on 02/07/2022 for the final year student .Topics :1. Presentation Skills 2.How to face Interview</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>COVID-19(RT-PCR) Test (26th to 28th Nov-2020) For Students and Staff
                        </a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>A webinar on “Intellectual property right” organized by the Department of Electrical and
                            Electronics Engineering in association with Student Alliance, NLP, Mumbai and SECAB Business School,
                            Vijayapura on 14 th May, 2020.</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>Online FDP on “LINUX” organized by the Department of Electrical and Electronics Engineering
                            in association with Spoken tutorial, IIT, Bombay from 11 th to 15 th May, 2020.</a>
                    </div>
                    <div class="event-item">
                        <i class="bi bi-caret-right"></i>
                        <a href="../" target=_self>Online FDP on “JOOMLA” organized by the Department of Computer Science and Engineering in
                            association with Spoken tutorial, IIT, Bombay from 11 th to 15 th May, 2020.</a>
                    </div>
                </marquee>
            </div>
        </div>
    </section>
    <!-- /College and News Section -->
</main>

<script>
    var swiper = new Swiper('.swiper-container', {
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>