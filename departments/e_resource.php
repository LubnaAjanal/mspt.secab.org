<style>
    .resources-table {
        width: 100%;
        margin: 20px auto;
        border-collapse: collapse;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    .resources-table th,
    .resources-table td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .resources-table th {
        background-color: #f2f2f2;
        color: #333;
    }

    .resources-table tr:hover {
        background-color: #f5f5f5;
    }

    .resources-table a {
        color: #007bff;
        text-decoration: none;
    }

    .resources-table a:hover {
        text-decoration: underline;
    }
</style>
<!-- Get the Department Name -->
<?php
$department = isset($_GET['department']) ? $_GET['department'] : 'No Dept';
?>
<?php if ($department == "Applied Science") : ?>
    <table class="resources-table">
        <thead>
            <tr>
                <th>Staff Name</th>
                <th>Subject Name</th>
                <th>Subject Code</th>
                <th>Link</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Jasmeen I</td>
                <td>Maths-II</td>
                <td>15SC02M</td>
                <td><a href="https://jasmeenimandarm2.blogspot.com" target="_blank">View Resource</a></td>
            </tr>
            <tr>
                <td>Unis Malanur</td>
                <td>Mathematics</td>
                <td>15SC02M</td>
                <td><a href="https://youtu.be/V4ayqrbZqsM" target="_blank">View Resource</a></td>
            </tr>
            <tr>
                <td>Savita Kotli</td>
                <td>Applied Science</td>
                <td>15SC03S</td>
                <td><a href="savitakscience.blogspot.com" target="_blank">View Resource</a></td>
            </tr>
            <tr>
                <td>B. S. Thorat</td>
                <td>Communication Skills in English</td>
                <td>15CP01E</td>
                <td><a href="https://youtu.be/fpzOB2REbLY" target="_blank">View Resource 1</a><br>
                    <a href="https://thorat-b.blogspot.com" target="_blank">View Resource 2</a>
                </td>
            </tr>
            <tr>
                <td>I. M. Kaladagi</td>
                <td>Tantrika Kannada,<br>Kannada Kali</td>
                <td>15KA3KT,<br>15KA3NT</td>
                <td><a href="http://kaladagikannada1234.blogspot.com" target="_blank">View Resource 1</a><br>
                    <a href="https://youtu.be/gKD4dR9nKPc" target="_blank">View Resource 2</a><br>
                    <a href="https://youtu.be/v4LaAJeZ_o4" target="_blank">View Resource 3</a>
                </td>
            </tr>
        </tbody>
    </table>
<?php endif; ?>


<?php if ($department == "Civil") : ?>
    <table class="resources-table">
        <thead>
            <tr>
                <th>Subject Name</th>
                <th>Subject Code</th>
                <th>Title</th>
                <th>Link</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Survey-I</td>
                <td>15CE21T</td>
                <td>Introduction to contouring</td>
                <td><a href="https://msptcivil.blogspot.com" target="_blank">View Resource</a></td>
            </tr>
            <tr>
                <td>Engineering Drawing-2</td>
                <td>15CE22D</td>
                <td>Introduction to Isometric and Orthographic views</td>
                <td><a href="https://msptciviled2.blogspot.com" target="_blank">View Resource</a></td>
            </tr>
            <tr>
                <td>Concrete Technology</td>
                <td>15CE43T</td>
                <td>Under water concreting</td>
                <td><a href="https://ataullahtp.blogspot.com" target="_blank">View Resource</a></td>
            </tr>
            <tr>
                <td>Hydraulics</td>
                <td>15CE41T</td>
                <td>Turbines</td>
                <td><a href="https://kushalmspt.blogspot.com" target="_blank">View Resource</a></td>
            </tr>
            <tr>
                <td>Project Management and Valuation</td>
                <td>15CE62T</td>
                <td>Introduction to entrepreneurships and entrepreneur</td>
                <td><a href="https://thecivilknowledge.blogspot.com" target="_blank">View Resource</a></td>
            </tr>
            <tr>
                <td>Design of steel and masonry structures</td>
                <td>15CE61T</td>
                <td>Design of masonry dams</td>
                <td><a href="https://youtu.be/3MgGBsPMp10" target="_blank">View Resource</a></td>
            </tr>
            <tr>
                <td>Design of steel and masonry structures</td>
                <td>15CE61T</td>
                <td>Design of tension members</td>
                <td><a href="https://youtu.be/q7yK4qwpgBA" target="_blank">View Resource</a></td>
            </tr>
        </tbody>
    </table>
<?php endif; ?>

<?php if ($department == 'Computer Science') : ?>
    <h1>PDF Files</h1>
    <table class="resources-table">
        <thead>
            <tr>
                <th>Subject Name</th>
                <th>Subject Code</th>
                <th>Title</th>
                <th>Doc</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Green Computing</td>
                <td>15CS54T</td>
                <td>Unit 1 to 4</td>
                <td><a href="../assets/pdf/cs/green computing_unit_1_4.pdf" target="_blank">Download</a></td>
            </tr>
            <tr>
                <td>Green Computing</td>
                <td>15CS54T</td>
                <td>Unit 5</td>
                <td><a href="../assets/pdf/cs/computing_unit_5.pdf" target="_blank">Download</a></td>
            </tr>
            <tr>
                <td>Operating System</td>
                <td>15CS43T</td>
                <td>Unit 1 to 3</td>
                <td><a href="../assets/pdf/cs/OS.pdf" target="_blank">Download</a></td>
            </tr>
            <tr>
                <td>OOPs with Java</td>
                <td>15CS42T</td>
                <td>Unit 1 to 6</td>
                <td><a href="../assets/pdf/cs/java programming unit_1_6.pdf" target="_blank">Download</a></td>
            </tr>
            <tr>
                <td>Network Security & Management</td>
                <td>15CS62T</td>
                <td>Unit 1</td>
                <td><a href="../assets/pdf/cs/NSM-UNIT-PRINTED.pdf" target="_blank">Download</a></td>
            </tr>
            <tr>
                <td>Network Security & Management</td>
                <td>15CS62T</td>
                <td>Unit_1</td>
                <td><a href="../assets/pdf/cs/NSM_UNIT.pdf" target="_blank">Download</a></td>
            </tr>
            <tr>
                <td>Network Security & Management</td>
                <td>15CS62T</td>
                <td>UNIT-3_4_5</td>
                <td><a href="../assets/pdf/cs/NSM_unit_3_4&5.pdf" target="_blank">Download</a></td>
            </tr>
            <tr>
                <td>Software Engineering</td>
                <td>15CS51T</td>
                <td>Unit 1</td>
                <td><a href="../assets/pdf/cs/UNIT1.pdf" target="_blank">Download</a></td>
            </tr>
            <tr>
                <td>Software Engineering</td>
                <td>15CS51T</td>
                <td>Unit 2</td>
                <td><a href="../assets/pdf/cs/UNIT2.pdf" target="_blank">Download</a></td>
            </tr>
            <tr>
                <td>Software Engineering</td>
                <td>15CS51T</td>
                <td>Unit 3</td>
                <td><a href="../assets/pdf/cs/UNIT3.pdf" target="_blank">Download</a></td>
            </tr>
            <tr>
                <td>Software Engineering</td>
                <td>15CS51T</td>
                <td>Unit 4</td>
                <td><a href="../assets/pdf/cs/UNIT4.pdf" target="_blank">Download</a></td>
            </tr>
        </tbody>
    </table>

    <h1>Videos</h1>
    <table class="resources-table">
        <thead>
            <tr>
                <th>Subject Name</th>
                <th>Subject Code</th>
                <th>Title</th>
                <th>Link</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Software Testing</td>
                <td>15CS61T</td>
                <td>Alignment to the process of Project</td>
                <td><a href="https://youtu.be/SJM8dZxrUYU" target="_blank">Watch Video</a></td>
            </tr>
            <tr>
                <td>Network Security Management</td>
                <td>15CS62T</td>
                <td>Secure Electronic Transaction</td>
                <td><a href="https://youtu.be/qBtLkM70nNw" target="_blank">Watch Video</a></td>
            </tr>
            <tr>
                <td>Professional Ethics & Indian Constitution</td>
                <td>15CS44T</td>
                <td>Introduction to Human Rights</td>
                <td><a href="https://youtu.be/vt6NVB8G0M0" target="_blank">Watch Video</a></td>
            </tr>
            <tr>
                <td>Tantrika Kannada</td>
                <td>15KA4KT</td>
                <td>ಮಾಹಿತಿ ತಂತ್ರಜ್ಞಾನ</td>
                <td><a href="https://youtu.be/gKD4dR9nKPc" target="_blank">Watch Video</a></td>
            </tr>
            <tr>
                <td>Tantrika Kannada</td>
                <td>15KA4KT</td>
                <td>ಮೋಕ್ಷಗುಂಡಂ ವಿಶ್ವೇಶ್ವರಯ್ಯ</td>
                <td><a href="https://youtu.be/v4LaAJeZ_o4" target="_blank">Watch Video</a></td>
            </tr>
            <tr>
                <td>OOPs with Java</td>
                <td>15CS42T</td>
                <td>Unit 1 to Unit 6 (Search keyword=Java)</td>
                <td><a href="http://164.100.133.129:81/econtent/KeywordSearch.aspx" target="_blank">Watch Video</a></td>
            </tr>
            <tr>
                <td>DBMS</td>
                <td>15CS33T</td>
                <td>Unit 1 to Unit 6 (Search keyword=DBMS)</td>
                <td><a href="http://164.100.133.129:81/econtent/KeywordSearch.aspx" target="_blank">Watch Video</a></td>
            </tr>
            <tr>
                <td>Programming with C</td>
                <td>15CS31T</td>
                <td>Unit 1 to Unit 6 (Search keyword=C programming)</td>
                <td><a href="http://164.100.133.129:81/econtent/KeywordSearch.aspx" target="_blank">Watch Video</a></td>
            </tr>
            <tr>
                <td>Linux Lab</td>
                <td>15CS47P</td>
                <td>(Search keyword=Linux Operating System)</td>
                <td><a href="http://164.100.133.129:81/econtent/KeywordSearch.aspx" target="_blank">Watch Video</a></td>
            </tr>
            <tr>
                <td>Software Engineering</td>
                <td>15CS51T</td>
                <td>(Search keyword=Software Engineering)</td>
                <td><a href="http://164.100.133.129:81/econtent/KeywordSearch.aspx" target="_blank">Watch Video</a></td>
            </tr>
            <tr>
                <td>Operating System</td>
                <td>15CS43T</td>
                <td>Lecture 1 NPTEL</td>
                <td><a href="https://www.youtube.com/watch?v=783KAB-tuE4" target="_blank">Watch Video</a></td>
            </tr>
            <tr>
                <td>Operating System</td>
                <td>15CS43T</td>
                <td>Lecture 3 NPTEL</td>
                <td><a href="https://www.youtube.com/watch?v=Bxx2_aQVeeg&list=PLIemF3uozcAKTgsCIj82voMK3TMR0YE_f&index=3" target="_blank">Watch Video</a></td>
            </tr>
            <tr>
                <td>Operating System</td>
                <td>15CS43T</td>
                <td>Lecture 5 NPTEL</td>
                <td><a href="https://www.youtube.com/watch?v=9YRxhlvt9Zo&list=PLIemF3uozcAKTgsCIj82voMK3TMR0YE_f&index=5" target="_blank">Watch Video</a></td>
            </tr>
            <tr>
                <td>Operating System</td>
                <td>15CS43T</td>
                <td>Lecture 6 NPTEL</td>
                <td><a href="https://www.youtube.com/watch?v=NShBeqTkXnQ&list=PLIemF3uozcAKTgsCIj82voMK3TMR0YE_f&index=7" target="_blank">Watch Video</a></td>
            </tr>
            <tr>
                <td>Operating System</td>
                <td>15CS43T</td>
                <td>Lecture 7 NPTEL</td>
                <td><a href="https://www.youtube.com/watch?v=nlEMU8TawJ0&list=PLIemF3uozcAKTgsCIj82voMK3TMR0YE_f&index=6" target="_blank">Watch Video</a></td>
            </tr>
        </tbody>
    </table>
<?php endif; ?>

<?php if ($department == 'Electrical and Electronics') : ?>
    <table class="resources-table">
        <thead>
            <tr>
                <th>SI. No</th>
                <th>SUBJECT</th>
                <th>SUBJECT CODE</th>
                <th>Title Name</th>
                <th>LINK</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Elements of Electrical Engg</td>
                <td>15EE11T</td>
                <td>Unit 1</td>
                <td><a href="https://www.youtube.com/watch?v=3TR_DS_7z2w&list=PLbRMhDVUMngfdEXVcdf_ijj2Eub-UHs_y">Link</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Elements of Electrical Engg</td>
                <td>15EE11T</td>
                <td>Unit 2</td>
                <td><a href="https://www.youtube.com/watch?v=y0YMedo4vRU&list=PLbRMhDVUMngfdEXVcdf_ijj2Eub-UHs_y&index=5">Link</a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Electrical Circuits</td>
                <td>15EE21T</td>
                <td>Unit 1 (DC Circuits)</td>
                <td><a href="https://www.youtube.com/watch?v=mc979OhitAg&list=PLWv9VM947MKi_7yJ0_FCfzTBXpQU-Qd3K">Link</a>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>DC Machines and Alternators</td>
                <td>15EE31T</td>
                <td>Unit 1 and 2 Unit 3 to 6</td>
                <td><a href="../assets/pdf/ee/D C Machine Unit 1-2.pdf">PDFs Link</a< /td>
            </tr>
            <tr>
                <td>5</td>
                <td>Electrical Power Generation</td>
                <td>15EE32T</td>
                <td>Steam Power Generation Nuclear Energy</td>
                <td><a href="https://drive.google.com/open?id=1MEnjc9Rx7RXWZrXUFFOGdWK44SLB2IiI">Link</a><br><a href="https://drive.google.com/open?id=1aaQ9cIktuJODj1SjTM7ACwALVjnniAvk">Link</a></td>
            </tr>
            <tr>
                <td>6</td>
                <td>Digital Electronics</td>
                <td>15EE34T</td>
                <td>Unit 1</td>
                <td><a href="http://freevideolectures.com/Course/3164/Digital-Electronics">Link</a></td>
            </tr>
            <tr>
                <td>7</td>
                <td>Digital Electronics</td>
                <td>15EE34T</td>
                <td>Unit 2</td>
                <td><a href="https://www.youtube.com/watch?v=Ri0VhKhw7dY&list=PLBlnK6fEyqRjMH3mWf6kwqiTbT798eAOm&index=40">Link</a>
                </td>
            </tr>
            <tr>
                <td>8</td>
                <td>Digital Electronics</td>
                <td>15EE34T</td>
                <td>Unit 3</td>
                <td><a href="https://www.youtube.com/watch?v=crSGS1uBSNQ&list=PLBlnK6fEyqRjMH3mWf6kwqiTbT798eAOm&index=29">Link</a>
                </td>
            </tr>
            <tr>
                <td>9</td>
                <td>Electrical Measurements & Measuring Instruments</td>
                <td>15EE42T</td>
                <td>Unit 1,2,3 and 4</td>
                <td><a href="https://nptel.ac.in/courses/108/105/108105153/">Link</a><br><a href="https://drive.google.com/drive/folders/18kGSuTu2VT3OqCFIxqPwJRf02OGjjmX9?usp=sharing">Link</a>
                </td>
            </tr>
            <tr>
                <td>10</td>
                <td>Communication & Computer Networks</td>
                <td>15EE43T</td>
                <td>Unit 3</td>
                <td><a href="../assets/pdf/ee/CCN Notes Unit 1-6.pdf">PDF Link</a></td>
            </tr>
            <tr>
                <td>11</td>
                <td>Power Electronics</td>
                <td>15EE51T</td>
                <td>Unit 1, 2 and 4</td>
                <td><a href="../assets/pdf/ee/PE Unit 1 2 4.pdf">PDF Link</a< /td>
            </tr>
            <tr>
                <td>12</td>
                <td>Transmission and Distribution</td>
                <td>15EE52T</td>
                <td>Unit 1 and 2</td>
                <td><a href="../assets/pdf/ee/TD Unit 1 2.pdf">PDF Link</a< /td>
            </tr>
            <tr>
                <td>13</td>
                <td>Electrical Estimation and Costing</td>
                <td>15EE54T</td>
                <td>Guidelines For Electrical Wiring In Residential Buildings</td>
                <td><a href="http://ocw.ump.edu.my/pluginfile.php/11228/mod_resource/content/1/ST%20Guidelines%20For%20Electrical%20Wiring.pdf">Link</a>
                </td>
            </tr>
            <tr>
                <td>14</td>
                <td>Basic Management Skills and Energy Management</td>
                <td>15EE62T</td>
                <td>Unit 3. Energy Management And Audit</td>
                <td><a href="https://beeindia.gov.in/sites/default/files/1Ch3.pdf">Link</a></td>
            </tr>
        </tbody>
    </table>

    <h1>Videos</h1>
    <table class="resources-table">
        <thead>
            <tr>
                <th>SI. No</th>
                <th>SUBJECT</th>
                <th>SUBJECT CODE</th>
                <th>Title Name</th>
                <th>LINK</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Sl No.</th>
                <th>Subject</th>
                <th>Subject Code</th>
                <th>Topic</th>
                <th>Video Link</th>
            </tr>
            <tr>
                <td>1</td>
                <td>PLC Motor Control Lab</td>
                <td>15EE64P</td>
                <td>Development and testing ladder program of DOL starter local and remote control using PLC software</td>
                <td><a href="https://www.youtube.com/watch?v=GVYz3UhoN_A">Link</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>PLC Motor Control Lab</td>
                <td>15EE64P</td>
                <td>Explanation of development and testing the ladder program of DOL starter using PLC software</td>
                <td><a href="https://www.youtube.com/watch?v=ij5F8dRBb1U">Link</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>PLC Motor Control Lab</td>
                <td>15EE64P</td>
                <td>Explanation of Development and testing the ladder program of Alarm system Using PLC Software</td>
                <td><a href="https://www.youtube.com/watch?v=1oWIrP53SsQ">Link</a></td>
            </tr>
            <tr>
                <td>4</td>
                <td>PLC Motor Control Lab</td>
                <td>15EE64P</td>
                <td>Explanation of logic functions using PLC software</td>
                <td><a href="https://www.youtube.com/watch?v=swL0wOLMHRg">Link</a></td>
            </tr>
            <tr>
                <td>5</td>
                <td>PLC Motor Control Lab</td>
                <td>15EE64P</td>
                <td>Understanding and using of PLC software with example</td>
                <td><a href="https://www.youtube.com/watch?v=xpqp-BIsivA">Link</a></td>
            </tr>
            <tr>
                <td>6</td>
                <td>Tantrika Kannada</td>
                <td>15KA4KT</td>
                <td>ಮಾಹಿತಿ ತಂತ್ರಜ್ಞಾನ</td>
                <td><a href="https://youtu.be/gKD4dR9nKPc">Link</a></td>
            </tr>
            <tr>
                <td>7</td>
                <td>Tantrika Kannada</td>
                <td>15KA4KT</td>
                <td>ಮೋಕ್ಷಗುಂಡಂ ವಿಶ್ವೇಶ್ವರಯ್ಯ</td>
                <td><a href="https://youtu.be/v4LaAJeZ_o4">Link</a></td>
            </tr>
            <tr>
                <td>8</td>
                <td>Professional Ethics & Indian Constitution</td>
                <td>15EE43T</td>
                <td>Introduction to Engineering Ethics Part-I</td>
                <td><a href="https://youtu.be/msHeObt4RE8">Link</a></td>
            </tr>
            <tr>
                <td>9</td>
                <td>Professional Ethics & Indian Constitution</td>
                <td>15EE43T</td>
                <td>Engineering Ethics Part-II</td>
                <td><a href="https://youtu.be/msHeObt4RE8">Link</a></td>
            </tr>
        </tbody>
    </table>
<?php endif; ?>

<?php if ($department == 'Electronics and Communication') : ?>


<?php endif; ?>

<?php if ($department == 'Mechanical') : ?>
    <table class="resources-table">
        <thead>
            <tr>
                <th>Subject Name</th>
                <th>Subject Code</th>
                <th>Title</th>
                <th>Link</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Professional Ethics & Indian Constitution</td>
                <td>15ME43T</td>
                <td>Introduction to Engineering Ethics Part-I</td>
                <td><a href="https://youtu.be/msHeObt4RE8" target="_blank">View Video</a></td>
            </tr>
            <tr>
                <td>Professional Ethics & Indian Constitution</td>
                <td>15ME43T</td>
                <td>Engineering Ethics Part-II</td>
                <td><a href="https://youtu.be/R8R2Fn7H2_4" target="_blank">View Video</a></td>
            </tr>
            <tr>
                <td>Estimation and Costing</td>
                <td>15ME61T</td>
                <td>Wages and Incentives </td>
                <td><a href="https://youtu.be/yBLeHGksppM" target="_blank">View Video</a></td>
            </tr>
            <tr>
                <td>Tantrika Kannada</td>
                <td>15KA4KT</td>
                <td>ಮಾಹಿತಿತಂತ್ರಜ್ಞಾನ </td>
                <td><a href="https://youtu.be/gKD4dR9nKPc" target="_blank">View Video</a></td>
            </tr>
            <tr>
                <td>Tantrika Kannada</td>
                <td>15KA4KT</td>
                <td>ಮೋಕ್ಷಗುಂಡಂವಿಶ್ವೇಶ್ವರಯ್ಯ </td>
                <td><a href="https://youtu.be/v4LaAJeZ_o4" target="_blank">View Video</a></td>
            </tr>
        </tbody>
    </table>
<?php endif; ?>

<?php if ($department == 'Apparel Design and Fabrication Technology') : ?>
    <table class="resources-table">
        <thead>
            <tr>
                <th>Subject Name</th>
                <th>Subject Code</th>
                <th>Title</th>
                <th>Link</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Fiber Textures</td>
                <td>15FT43T</td>
                <td>Introduction to leather</td>
                <td><a href="https://youtu.be/Kg1Zuz4nVXw" target="_blank">View Video</a></td>
            </tr>
            <tr>
                <td>Pattern Illustration</td>
                <td>15FT21T</td>
                <td>Paper pattern</td>
                <td><a href="http://maherunnissakolar.blogspot.com/2020/06/paper-pattern_10.html" target="_blank">View Resource</a></td>
            </tr>
            <tr>
                <td>Fiber Textures</td>
                <td>15FT43T</td>
                <td>Felted and nonwoven fabrics</td>
                <td><a href="http://tejashwinisheelavant.blogspot.com/2020/06/felted-and-nonwoven-fabrics.html" target="_blank">View Resource</a></td>
            </tr>
        </tbody>
    </table>
<?php endif; ?>