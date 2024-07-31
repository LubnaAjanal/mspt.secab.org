<style>
    .hod-message {
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .hod-message h2 {
        color: #0ea2bd;
        font-size: 24px;
        margin-bottom: 15px;
    }

    .hod-message p {
        font-size: 16px;
        line-height: 1.6;
        color: #333;
        margin-bottom: 15px;
    }
</style>

<!-- Get the Department Name -->
<?php
$department = isset($_GET['department']) ? $_GET['department'] : 'No Dept';
?>

<div class="hod-message">
    <h2>HoD's Message</h2>
    <?php if ($department == "Basic Science") : ?>
        <p>The Department of Basic Science is the foundation of any diploma engineering programme. The subjects taught are Engineering Mathematics, Applied Science, Communication Skills in English and Kannada.</p>
        <p>The Department of Basic Science ensures that the students become competent to enter the second year by gaining basic knowledge of all subjects. The faculty of Basic Science welcomes the students with affection as they come from different backgrounds of languages and families after secondary education. All students are considered equal and are helped with their academics.</p>
        <p>Our goal is to see that all the students perform well and become good diploma engineers to fulfill the vision set by our esteemed institution. We hope that our lessons of ethics, along with academics, help the students to lead a fruitful life and good future career.</p>

    <?php elseif ($department == "Civil Engineering") : ?>   
        <p>It gives me an immense pleasure to welcome and introduce the department of Civil Engineering.</p>
        <p>Our faculty recognizes the importance of good classroom teaching and all strive to encourage student-faculty communication—both inside and outside the classroom. At the Department of Civil Engineering, the faculty cares about providing a comprehensive educational experience for our students. Faculty provides professional guidance to students, providing opportunities for students to enhance their knowledge by performing on live academic projects and onsite training. The students of the department have won prizes in state and national level competitions.</p>
        <p>After completion of the civil engineering diploma course students can pursue higher education in B.E. The student can get recruited as a junior engineer, site engineer, project engineer, managing director in various government and private sectors. After the completion of the course the student can become a contractor and start the work on his own to become an entrepreneur.</p>
        <p>I wish all the success to our students and staff.</p>

    <?php elseif ($department == "Computer Science Engineering") : ?>
        <p>Welcome to CSE Department of MSPT, dedicated to ensuring great careers for its students. For us, this means ensuring seamless education using the best technology available.</p>
        <p>I have myself invested a great deal of time and energy in creating strong foundation and will continue to do all that it takes to ensure the best career focused education for our students.</p>
        <p>The teaching faculty of the best kind ensuring quality education such as interaction among students, parents and staff, along with a Training and Placement Cell ensures a bright future to its students. The Department of CSE is striving hard towards the goal of providing innovative and quality education with high standard to achieve academic excellence and provides platform for the students to achieve their career goals. Depending upon the interest of the students, he/she may choose to go for higher studies or if employed can choose to work in development, design, production, application, testing or management in the Information Technology industry.</p>
        <p>The motivation is not just to nurture their technical skills but to provide professional grooming and guidance so that our students come-up as thorough professionals and inspiring individuals.</p>
        <p>I congratulate the team of faculty members and the students for their brilliant and original efforts.</p>   

    <?php elseif ($department == "Electrical and Electronics Engineering") : ?>
        <p>Greetings from department of Electrical and Electronics Engineering (EEE), Malik Sandal Polytechnic, Vijayapura. It gives me immense pride and pleasure to lead the EEE department of this esteemed and prestigious institution.</p>
        <p>The department has specialized faculties in important areas of Electrical and Electronics Engineering such as Power systems engineering, Micro electronics and control systems, Digital electronics and communication With the ever growing demand of Electrical Engineers in all sectors, Department of Electrical and Electronics Engineering is making best efforts to give the society highly knowledgeable, trained and capable engineers, who have hands on experience and would be ready to face challenges of the real world. Our Department consists of various well equipped laboratories like Basic Electrical Engineering, Power Electronics and Machines giving the scope to all students having a hands-on experience individually, which will increase their confidence to face the practical problems in the field of Electrical Engineering.</p>
        <p>The department conducts various programs under the departmental association called as ‘Aavishkar’ , such as Workshops, Technical Trainings, Guest Lectures and Seminars by experts from Industry and Academia for constant knowledge up-gradation of staff and students. These activities help students to know the latest technologies, in the field of Electrical and Electronics Engineering.</p>
        <p>We are playing a key role in our discipline towards creating innovative and effective professional community to contribute to electrical engineering world.</p>
        <p>I extend my warm wishes to all budding Electrical Engineers.</p>   

    <?php elseif ($department == "Electronics and Communication Engineering") : ?>
        <p>I am pleased to welcome you to the Department of Electronics & Communication Engineering which is the most flourishing discipline of engineering stream.</p>
        <p>It develops core, professional and technical knowledge that keeps the students in- line with the latest developments in the field of Electronics and Communication engineering.</p>
        <p>The department conducts skill oriented programs for the students to enhance their carrier prospects to be lifelong learners. Interaction with students, parents, staff and employees along with skill oriented programs ensures bright future to the students. We do take our students for industrial visits to bridge the gap between academics and industries.</p>
        <p>Our goal is to impart quality technical education through Outcome Based Education along with ethics, positive attitude, skills and abilities to apply their acquired knowledge in order to face the challenges of future.</p>
        <p>I wish success to all our students in their forthcoming journey of education and to have a great learning experience with my excellent, loving and caring team. We hope you will explore your full potential as a student and eventually make remarkable achievement in your professional life.</p>
        <p>“All our dreams can come true if we have the courage to pursue them”</p>   

    <?php elseif ($department == "Mechanical Engineering") : ?>
        <p>It is my pleasure to welcome you to the department of Mechanical Engineering at Malik Sandal Polytechnic, Vijayapur. Mechanical Engineering has been thought of traditionally as a professional discipline and the Mechanical Engineers of today are multidisciplinary, with knowledge from other branches of Engineering.</p>
        <p>The Academic Programmes of the department reflect not only the core concept of Mechanical Engineering but also the other fields of Engineering. All the faculty members are working in close co-operation while retaining individual identities. We provide our students with a practical Outcome Based Engineering Education that focuses on creativity, innovation, strong ethical responsibility and place equal emphasis on developing strong leadership qualities in our students.</p>
        <p>As far as the faculty members of the department is concerned, I am very happy to inform you that, we have a great team of well qualified, dedicated, devoted, young, energetic and dynamic as well as well experienced senior faculty members who are very brilliant in handling the challenging subjects in a very easy and graspable way by applying a various new teaching methods and intelligible demonstrations during the course of work. Further, Faculty pay dedicated attention towards curricular and extracurricular activities of the students and their achievements.</p>
        <p>"I wish all the success to the students and the faculty in their endeavors."</p>

    <?php elseif ($department == "Apparel Design and Fabrication Technology") : ?>
        <p>Apparel Design and Fabrication Technology is a three years diploma programme designed by the Department of Technical Education. This is a job oriented programme aiming at training the students in the field of Fashion Designing, Pattern Making, and Garment Construction, Surface ornamentation Knitting, Fashion Merchandising, Textile Designing, Textile Testing, Computerized Pattern Making and Grading. The Curriculum is based on 50% theory and 50% practical subjects to update theoretical knowledge and practical skills. In the final year, students undergo one month inplant training at different garment industries.</p>
        <p>Graduates can become entrepreneur and can open boutique, fashion designing training centre etc. Students are eligible for lateral entry in the second year of B. Sc. in Garment Designing, B. Sc. in Fashion Designing, BFT (Bachelor in Fashion Technology); also there is a wide scope in M.Sc, Ph.D. This course will enable students to become Fashion Designer, Stylist, Visual Merchandiser, Quality Supervisor, Textile Designer, Costume designer, Image constant, CAD Designer, Sampling in-charge, coordinator in Buying House.</p>
        <p>I wish success to all our students and staff.</p>   

    <?php elseif ($department == "Commercial Practice") : ?>
        <p>Ours is the Department named “Commercial Practice”. In other words, it is “Office Management Course”. It is very much essential for all the fields as it provides professionals to maintain accounts, records, etc. properly and also take down notes from Judges, Officers, Managers, Secretaries, etc. in shorthand and type the same in proper formats, by using typewriters or computers.</p>
        <p>Basically, in Govt. Depts., Universities, Banks, Insurance and other National Cos., etc. run their workings through proper channel, with the help of Accountants, Stenographers, Typists, Data Entry Operators, etc. Therefore, it is a very useful course. This Diploma Course is a welldesigned combination of commerce subjects along with English Shorthand (Steno), English typing and computer skills like Basics, DTP, Tally, etc.</p>
        <p>After completing this Diploma, students can take direct admission for B.Com. 3rd Sem. The diploma holders can apply for the posts of S.D.C., Stenos, Typists, etc. in Central and State Govt. Depts., Banks, Railways, etc. They can start their own businesses like giving services of accounting solutions i.e. Sales Tax / Income Tax with Practitioners, Auditors, as DTP Centers, Printing Press, etc.</p>   



    <?php endif; ?>
</div>