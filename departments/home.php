<style>
    /* home carousel slider */
    .carousel .carousel-inner {
        height: 400px;
        object-fit: cover;
    }

    /* end home carousel slider */

    /* home overview content */
    .overview-content {
        margin: 30px 0 30px 0;
    }

    h3 {
        color: #485664;
        font-size: 25px;
        font-weight: bold;
    }

    .overview-content .programme-content {
        text-align: justify;
        background: #fff;
        padding: 20px;
        font-size: 18px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        color: #495057;

    }

    /* end home overview content */

    /* Vision & Mission  */
    .vision,
    .mission {
        border: 2px solid #0ea2bd;
        border-radius: 8px;
        padding: 20px;
        margin: 20px 0;
    }

    p {
        font-size: 16px;
        line-height: 1.6;
    }
</style>
<?php
$department = isset($_GET['department']) ? $_GET['department'] : 'No Dept';
?>

<!-- START GALLERY FOR ALL DEPTS -->
<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
        <?php if ($department == "Applied Science") : ?>
            <div class="carousel-item active">
                <img src="../assets/img/dept/basic/sldr24.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../assets/img/dept/basic/sldr25.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
        <?php elseif ($department == "Civil") : ?>
            <div class="carousel-item active">
                <img src="../assets/img/dept/civil/sldr6.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../assets/img/dept/civil/sldr7.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../assets/img/dept/civil/sldr8.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../assets/img/dept/civil/sldr24.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
        <?php elseif ($department == "Computer Science") : ?>
            <div class="carousel-item active">
                <img src="../assets/img/dept/cs/glr36.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../assets/img/dept/cs/glr47.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../assets/img/dept/cs/glr49.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../assets/img/dept/cs/glr51.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../assets/img/dept/cs/sldr5.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
        <?php elseif ($department == "Electrical and Electronics") : ?>
            <div class="carousel-item active">
                <img src="../assets/img/dept/ee/sldr15.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../assets/img/dept/ee/sldr16.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../assets/img/dept/ee/sldr17.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../assets/img/dept/ee/sldr18.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../assets/img/dept/ee/sldr21.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
        <?php elseif ($department == "Electronics and Communication Engineering") : ?>
            <div class="carousel-item active">
                <img src="../assets/img/dept/ec/sldr22.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../assets/img/dept/ec/sldr23.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
        <?php elseif ($department == "Mechanical") : ?>
            <div class="carousel-item active">
                <img src="../assets/img/dept/mech/sldr10.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../assets/img/dept/mech/sldr11.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../assets/img/dept/mech/sldr12.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../assets/img/dept/mech/sldr14.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
        <?php elseif ($department == "Apparel Design and Fabrication Technology") : ?>
            <div class="carousel-item active">
                <img src="../assets/img/dept/adft/sldr26.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../assets/img/dept/adft/sldr28.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../assets/img/dept/adft/sldr30.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../assets/img/dept/adft/sldr31.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../assets/img/dept/adft/sldr51.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../assets/img/dept/adft/sldr52.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
        <?php elseif ($department == "Commercial Practice") : ?>
            <div class="carousel-item active">
                <img src="../assets/img/dept/cp/sldr32.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
        <?php endif; ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div> <!-- END GALLERY FOR ALL DEPTS -->

<!-- START OVERVIEW FOR ALL DEPTS -->
<div class="overview-content">
    <h3>OVERVIEW</h3>
    <?php if ($department == 'Applied Science') : ?>
        <div class="programme-content">
            <p>The Department of Basic Science, which is an integral part of MSPT, offers instructions in Applied Science, Mathematics, English and Kannada to the students of all core branches for their first year Diploma Course.</p>
            <p>The department is devoted to foster the understanding of applied science principles. The objectives of the department is to inform and motivate students to study the fundamental aspect of science and its applications.</p>
            <p>To enable the students to analyze and apply mathematical and scientific techniques in engineering technology, the department motivates the students to have a scientific temperament. The students are inducted into the diploma engineering college through the basic science department.</p>
        </div>

    <?php elseif ($department == 'Civil') : ?>
        <div class="programme-content">
            <p>Civil Engineering is oldest branch of engineering which is growing right from Stone Age civilization.
                Civil Engineers build our quality of life with creativity and technical skills. A civil Engineer is
                responsible for planning, designing, construction, operation, supervision and maintenance of activities
                of public works like road, bridges, tunnels, buildings, dams, waterworks, sewage system etc.
                The Civil Engineering Department at MSPT has qualified faculty members and equipped with well
                established laboratories. We conduct In-Plant trainings, site visits, workshops and guest lectures
                rigorously to enhance employability skills of the students. The students have won national and state
                level prizes in project exhibitions, paper presentations, seminars and events organized by various
                polytechnics and engineering colleges..</p>
        </div>
        <div class="vision">
            <h3>Vision</h3>
            <p><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> To impart technical education in Civil Engineering for the progressive transformation of individuals and society.</p>
        </div>
        <div class="mission">
            <h3>Mission</h3>
            <p>We at Department of Civil Engineering are committed to achieve our vision by:</p>
            <ul>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> Imparting quality education through effective teaching learning environment.</li>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> Inculcating technical skills by conducting In-Plant training, workshops, site/industrial visits, guest lectures etc.</li>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> Preparing students for continuous up gradation of knowledge during life-long learning.</li>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> Strengthening relationship with stakeholders for the benefit of the Department and society.</li>
            </ul>
        </div>
        <div class="mission">
            <h3>Program Educational Objectives (PEOs)</h3>
            <p>Students of Civil Engineering will be able to</p>
            <ul>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> <b>PEO 1:</b> Have a thorough knowledge of planning, designing, construction and maintenance to meet technological needs and socio economic challenges.</li>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> <b>PEO 2:</b> To provide socially responsible environment friendly solutions to Civil Engineering related problems by adopting professional ethics.</li>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> <b>PEO 3:</b> To work collaboratively on multi disciplinary projects and engage themselves in lifelong learning process throughout their profession.</li>
            </ul>
        </div>

    <?php elseif ($department == 'Computer Science') : ?>
        <div class="programme-content">
            <p>The field of computer science is very broad, encompassing all aspects of the design, analysis, implementation and use of computer technology. The major areas of teaching includes Multimedia, Web Design, Data structure, Design Analysis of Algorithms, Operating System, DBMS, Java Programming, Software Testing, Computer Network etc.</p>
            <p>All the laboratories are equipped with hardware and software that are compliant with industry standard in terms of technology and environment. The students get an exposure to various aspects of computer hardware, software and practical handling of computers.</p>
            <p>The department conducts regular Guest Lectures/Workshops/Industrial Visit/In-plant training on latest technologies and also trains the students in soft skills.</p>
        </div>
        <div class="vision">
            <h3>Vision</h3>
            <p><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> To impart technical education in field of Computer Science Engineering for the progressive transformation of students and stakeholders.</p>
        </div>
        <div class="mission">
            <h3>Mission</h3>
            <p>We at the Department of Computer Science and Engineering are committed to achieve our vision by:</p>
            <ul>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> Promoting effective teaching-learning process through outcome based education.</li>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> Conducting industrial visits/inplant trainings/workshops/training programmes rigorously to inculcate technical skills.</li>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> Grooming students for progress in profession and higher education to demonstrate innovative skills, during life-long learning.</li>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> Establishing good relationship with stakeholders for overall development of the department.</li>
            </ul>
        </div>
        <div class="mission">
            <h3>Program Educational Objectives (PEOs)</h3>
            <p>Graduates of Computer Science and Engineering will be able to:</p>
            <ul>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> <b>PEO 1:</b> Analyze and provide solutions to engineering problems through application of computing tools and techniques.</li>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> <b>PEO 2:</b> Adapt the evolving technological changes for lifelong learners.</li>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> <b>PEO 3:</b> Apply professional ethics and commit to social responsibilities during computing practice.</li>
            </ul>
        </div>

    <?php elseif ($department == 'Electrical and Electronics') : ?>
        <div class="programme-content">
            <p>Electrical and Electronics Engineering is an interdisciplinary subject, where the students will have a strong understanding of not only the courses related to electrical engineering but also gain knowledge in the subjects like electronics engineering, communication engineering and computer science engineering.</p>
            <p>The department is equipped with well designed and modern laboratories of electrical machines, power electronics, control system, circuits, measurements and computers etc.</p>
            <p>The department also conducts workshops, training programs, industrial visits and in-plant trainings to inculcate technical skills amongst students to make them industry ready.</p>
            <p>Graduates can pursue their career in vide fields of engineering such as power-generation, transmission and distribution; communication engineering; design and manufacturing of semiconductor devices; control processes and measurements; and electronics.</p>
        </div>
        <div class="vision">
            <h3>Vision</h3>
            <p><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> To impart technical education in the field of Electrical and Electronics Engineering for the sustainable growth of students and stakeholders.</p>
        </div>
        <div class="mission">
            <h3>Mission</h3>
            <p>We, at the department of Electrical and Electronics Engineering, are committed to achieve our vision by:</p>
            <ul>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> Imparting core competencies through outcome based education.</li>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> Inculcating practical competencies through skill oriented courses.</li>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> Grooming students for progress in profession and higher education during life- long learning.</li>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> Collaborating and connecting with stakeholders for the sustainable development of the department.</li>
            </ul>
        </div>
        <div class="mission">
            <h3>Program Educational Objectives (PEOs)</h3>
            <p>After the completion of the program, diploma graduates will be able to:</p>
            <ul>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> <b>PEO 1:</b> Analyze, design and evaluate engineering problems using appropriate tools and techniques.</li>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> <b>PEO 2:</b> Learn and adopt evolving technologies to be lifelong learners.</li>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> <b>PEO 3:</b> Provide ethically responsible and environment-friendly solutions to engineering problems.</li>
            </ul>
        </div>

    <?php elseif ($department == 'Electronics and Communication Engineering') : ?>
        <div class="programme-content">
            <p>We started our journey in the year 1989 with an intake of 60.We intend to impart knowledge through Outcome Based Education with highly qualified faculty members. It aims to deepen the knowledge and skills of the students on the core concepts that will equip them in their professional work involving analysis, system implementation, operation and maintenance of the various applications in the field of Electronics & Communication.</p>
            <p>This stream of engineering deals with Analog electronics and Digital electronics, basic electronics, microprocessor and solid state devices. It also deals with digital and analog signal transmission and reception of data in various communication systems. Electronics & Communication engineers also conceptualize the manufacturing of electronic devices, circuits and broadcast systems.</p>
            <p>It is firmly believed that the prestigious position of this department will be maintained and upheld by our students along with whole hearted and sincere efforts of all the members of the department.</p>
        </div>
        <div class="vision">
            <h3>Vision</h3>
            <p><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> To develop quality technical education in the field of Electronics and Communication Engineering for the progressive transformation with a focus on the need of the students and the department.</p>
        </div>
        <div class="mission">
            <h3>Mission</h3>
            <p>The department of Electronics and Communication Engineering is committed to achieve its vision by</p>
            <ul>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i>
                    Imparting technical knowledge through Outcome Based Education.
                </li>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i>
                    Providing expertise in the form of activities like guest lectures, industrial visits, workshops for developing practical skills on recent tools and technologies.
                </li>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i>
                    Grooming students to pursue higher education and career enhancement programmes.
                </li>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i>
                    Collaborating and connecting with stakeholders for the sustainable development of the department.
                </li>
            </ul>
        </div>
        <div class="mission">
            <h3>Program Educational Objectives (PEOs)</h3>
            <p>After the completion of program, diploma graduates will able to:</p>
            <ul>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> <b>PEO 1:</b>
                    Utilize their core knowledge, skills, resources to design, develop and evaluate engineering problems using creative and innovative tools and techniques.
                </li>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> <b>PEO 2:</b>
                    Acquire education that motivates them for their professional career and adopt evolving technologies to be lifelong learners.
                </li>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> <b>PEO 3:</b>
                    Provide ethically responsible and environment friendly solutions to engineering problems.
                </li>
            </ul>
        </div>

    <?php elseif ($department == 'Mechanical') : ?>
        <div class="programme-content">
            <p>Mechanical Engineering is a most versatile field. Mechanical Engineers are required to design, test, manufacture, install, operate and maintain a wide array of machines and mechanical systems that are used in countless industries. This includes thermodynamics, fluid flow, robotics and computer aided design etc. The development in computer technology has changed the face of mechanical engineering and also it enables mechanical engineering to develop efficient solutions to complex technical problems.</p>
            <p>The department has well equipped central workshop to develop skills in manufacturing and fabrication. The department organizes inplant trainings and industrial visits for the students to gain practical knowledge and develop industry student's relation, which motivate students towards entrepreneurship. The department also conducts various placements drives where the students are placed in high profile companies, and enables students to choose reputed institutions for higher education.</p>
        </div>
        <div class="vision">
            <h3>Vision</h3>
            <p><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i>
                To impart Technical Education in the field of Mechanical Engineering for the progressive transformation of individuals and society.
            </p>
        </div>
        <div class="mission">
            <h3>Mission</h3>
            <p>The mission of the Department of Mechanical Engineering is to achieve our vision by:</p>
            <ul>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i>
                    Providing Outcome Based Education through quality teaching learning process.
                </li>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i>
                    Imparting technical skills by conducting hands-on training programs/workshop on recent trends and technologies.
                </li>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i>
                    Adopting technological changes that encouraged learning at every stage of life.
                </li>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i>
                    Strengthening relationship with stakeholders for overall development of the department.
                </li>
            </ul>
        </div>
        <div class="mission">
            <h3>Program Educational Objectives (PEOs)</h3>
            <p>Graduates of Mechanical Engineering will be able to:</p>
            <ul>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> <b>PEO 1:</b>
                Have successful career in various domains of Mechanical Engineering by demonstrating sound engineering fundamentals.
                </li>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> <b>PEO 2:</b>
                Apply analytical skills so as to enable resolving complex industrial and societal problems in the area of Mechanical Engineering.
                </li>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> <b>PEO 3:</b>
                Develop lifelong learning attitude in the field of Mechanical Engineering by continuously enhancing the knowledge.
                </li>
            </ul>
        </div>

    <?php elseif ($department == 'Apparel Design and Fabrication Technology') : ?>
        <div class="programme-content">
            <p>Apparel technology is a scientific art involving fashion techniques and designing. The aim of this programme is to train the students in Apparel Designing and Fabrication Technology, by sketching, painting, dyeing/printing, draping, embroidery, pattern making and creating designer wears. The department is equipped with quality labs and faculty motivated towards practical aspects.</p>
        </div>
        <div class="vision">
            <h3>Vision</h3>
            <p><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> To produce fashion technocrats by inculcating technical expertise, creativity and managerial proficiency for contributing to the society.</p>
        </div>
        <div class="mission">
            <h3>Mission</h3>
            <p>We commit to achieve our vision by:</p>
            <ul>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> Educating students with relevant curriculum and methodology.</li>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> Imparting value added skills through hands on training programs.</li>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> Instilling entrepreneurial skills and social commitment to contribute towards sustainable fashion.</li>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> Facilitating lifelong learning and economic development by adopting technological changes.</li>
            </ul>
        </div>

    <?php elseif ($department == 'Commercial Practice') : ?>
        <div class="programme-content">
            <p>The Commercial practice course gives emphasis on the practical aspects of Accounting, Shorthand, Type writing, Drafting in English, Office Management etc. The course is designed to equip the students to face challenges of the modern business environment and to make them employable and to develop the skills in wriiten and oral communication.</p>
        </div>
        <div class="vision">
            <h3>Vision</h3>
            <p><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> To provide excellent and value based commerce education.</p>
        </div>
        <div class="mission">
            <h3>Mission</h3>
            <p>We commit to achieve our vision by:</p>
            <ul>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> Empowering students with all the knowledge and guidance that they need to become successful professionals.</li>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> Training them with required skills for self-employment.</li>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> Conducting educational programs that encourage learning at every stage of life.</li>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> Developing social consciousness among students.</li>
            </ul>
        </div>
        <div class="mission">
            <h3>Program Educational Objectives (PEOs)</h3>
            <p>We commit to achieve our vision by:</p>
            <ul>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> <b>PEO 1:</b> Emonstrate a knowledge of core subjects in shorthand, typing and computers, Accountancy, Statistics and business operation skills.</li>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> <b>PEO 2:</b> Apply skills learnt through participation in seminars, projects, team work, competitions and communication activities.</li>
                <li><i class="bi bi-caret-right-fill" style="color:#0ea2bd"></i> <b>PEO 3:</b> Analyse environmental issues, business ethics and inculcate social responsibilities.</li>
            </ul>
        </div>

    <?php endif; ?>
</div>
<!-- END OVERVIEW FOR ALL DEPTS -->