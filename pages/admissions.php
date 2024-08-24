<?php include('../headerPages/header.php'); ?>
<style>
    .courses-offered {
        background-color: #ffffff;
        padding: 20px;
        margin: 20px auto;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 800px;
    }

    .courses-offered h2 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }

    .table-card {
        overflow-x: auto;
        box-shadow: 8px 8px 8px rgba(0, 0, 0, 0.2);

    }


    /* Cards Styling for Other States and Country */
    .card-header {
        background-color: #0ea2bd;
        color: #fff;
        font-weight: bold;
        font-size: 20px;
        text-align: center;
    }

    .card-body {
        background-color: white;
    }

    .card {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
        margin: 10px 0;
        height: 100%;
    }

    .enquiry-form {
        background-color: #fff;
        border-radius: 4px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
    }
</style>

<!-- Features Section -->
<section id="features" class="features section">

    <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row gy-4 d-flex">

            <li class="nav-item col-6 col-md-4 col-lg-3 mb-3">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                    <!-- <i class="bi bi-binoculars" style="color: #0dcaf0;"></i> -->
                    <h4>Diploma</h4>
                </a>
            </li><!-- End Tab 1 Nav -->

            <li class="nav-item col-6 col-md-4 col-lg-3 mb-3">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                    <!-- <i class="bi bi-box-seam" style="color: #6610f2;"></i> -->
                    <h4>Other States</h4>
                </a>
            </li><!-- End Tab 2 Nav -->

            <li class="nav-item col-6 col-md-4 col-lg-3 mb-3">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                    <!-- <i class="bi bi-brightness-high" style="color: #20c997;"></i> -->
                    <h4>Other Countries</h4>
                </a>
            </li><!-- End Tab 3 Nav -->

            <li class="nav-item col-6 col-md-4 col-lg-3 mb-3">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4">
                    <!-- <i class="bi bi-brightness-high" style="color: #20c997;"></i> -->
                    <h4>Enquiry Form</h4>
                </a>
            </li><!-- End Tab 4 Nav -->
        </ul>

        <div class="tab-content">

            <div class="tab-pane fade active show" id="features-tab-1">
                <div class="row gy-4">
                    <div class="col-lg-12 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                        <div>
                            <h3>Diploma Admission Details</h3>
                            <p class="fst-italic">
                                Malik Sandal Polytechnic, Vijaypur is a technical institute that offers Diploma courses in 07
                                disciplines. The following are the courses
                            </p>

                        </div>

                        <div class="mt-3">
                            <h3>Courses Offered</h3>
                            <div class="table-card">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Sl.No</th>
                                            <th>Name of the Course</th>
                                            <th>In-take</th>
                                            <th>Duration</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Civil Engineering</td>
                                            <td>60</td>
                                            <td>Three Years</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Computer Science and Engineering</td>
                                            <td>60</td>
                                            <td>Three Years</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Electrical and Electronics Engineering</td>
                                            <td>30</td>
                                            <td>Three Years</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Electronics and Communication Engineering</td>
                                            <td>30</td>
                                            <td>Three Years</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Mechanical Engineering</td>
                                            <td>30</td>
                                            <td>Three Years</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Commercial Practice</td>
                                            <td>30</td>
                                            <td>Three Years</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Apparel Designing and Fabrication Technology</td>
                                            <td>30</td>
                                            <td>Three Years</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="mt-4">
                            <h3>Why study at M.S.P.T?</h3>
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> Experienced and qualified faculty members</li>
                                <li><i class="bi bi-check-circle-fill"></i> Conduction of need based training programs and in-plant trainings.</li>
                                <li><i class="bi bi-check-circle-fill"></i> Placement drives by top recruiters.</li>
                                <li><i class="bi bi-check-circle-fill"></i> Encouragement for carrying out innovative projects
                                    and participation at state/national level project exhibitions.</li>
                                <li><i class="bi bi-check-circle-fill"></i> Dedicated and separate scholarship cell.</li>
                                <li><i class="bi bi-check-circle-fill"></i> Tutorials and remedial classes are conducted in
                                    subjects where extra coaching needed.</li>
                            </ul>
                        </div>

                        <div>
                            <h3>ELIGIBILITY CRITERIA:</h3>
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> Institute has adopted eligibility criteria fixed by affiliated board (DTE, Bangalore).</li>
                                <li><i class="bi bi-check-circle-fill"></i> Eligibility criteria: Minimum 35% in 10th (SSLC) or PUC IInd Year Science (12th).</li>
                            </ul>

                            <h4>Contact Details:</h4>
                            <p>
                                Nauraspur Bagalkot Road Vijaypur<br>
                                (Bijapur)-586109
                                Karnataka. India.<br>
                                +91 9071449955, 7019900211, 7760944286.<br>
                                Email Id: principalmspt@secab.org
                            </p>
                        </div>
                    </div>
                </div>
            </div><!-- End Tab Content 1 -->

            <div class="tab-pane fade" id="features-tab-2">
                <div class="row gy-4">
                    <div class="col-lg-12 order-2 order-lg-1">
                        <h3>Other States</h3>
                        <p>
                            Students from other states such as Maharashtra, Gujarat, Telangana, Bihar, Uttar Pradesh, Goa enrol in M.S.P.T every year.
                        </p>

                        <h3>Representatives in other states:</h3>
                        <div class="contact-info">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header">Mumbai</div>
                                        <div class="card-body">
                                            <p>Z.A. Punekar,<br>
                                                201 Dheeraj Sapna, Pali-Naka<br>
                                                Bandra (West) Mumbai - 50.<br>
                                                Ph: 0091-22-26401380<br>
                                                Mob: 09619001380<br>
                                                Email: <a href="mailto:zpunekar@yahoo.co.in">zpunekar@yahoo.co.in</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header">Gujrat</div>
                                        <div class="card-body">
                                            <p>Sameer A. Chauhan,<br>
                                                2nd Floor Shiv Complex, Modi Compound<br>
                                                Near Relief Theatre, Panchbatti<br>
                                                Bharuch 392001, Gujrat.<br>
                                                Ph: 02642-251380, 654380<br>
                                                Mobile: 9824172380<br>
                                                Email: <a href="mailto:highedcon@yahoo.com">highedcon@yahoo.com</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header">Kolkata</div>
                                        <div class="card-body">
                                            <p>Janab Gulam Mohd Saheb IDB<br>
                                                Scholarship Office<br>
                                                2/3 Radha Gobindo Saha Lane<br>
                                                Kolkata - 17<br>
                                                Mob: 09331970024</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <div class="card">
                                        <div class="card-header">Bihar</div>
                                        <div class="card-body">
                                            <p>Mohammed Afzal<br>
                                                General Secretary<br>
                                                Bihar Rabita Committee, Patna<br>
                                                Ph: 099426312</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Tab Content 2 -->

            <div class="tab-pane fade" id="features-tab-3">
                <div class="row gy-4">
                    <div class="col-lg-12 order-2 order-lg-1">
                        <h3>Other Countries</h3>
                        <p>
                            Students from countries like Nepal, Srilanka, UAE, Saudi Arabia enroll in MSPT every year.
                        </p>

                        <h3>Representatives in other countries:</h3>
                        <div class="contact-info">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-header">Nepal</div>
                                        <div class="card-body">
                                            <p>Arman Hashim ,<br>
                                                Secretary SEF ,<br>
                                                Kathmandu,Nepal<br>
                                                +977 9843137073<br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-header">Dubai</div>
                                        <div class="card-body">
                                            <p>Mr. Riyaz J. Bagewadi.<br>
                                                Flat no: 307, Building Bin jumma 3,<br>
                                                Al-Nahdha 1, Al-Qusais Dubai, UAE<br>
                                                Mob: 00971502577342<br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-header">Kenya</div>
                                        <div class="card-body">
                                            <p>Syed .S. Javeed,<br>
                                                P.O.Box No. 11311,<br>
                                                Nairobi-Kenya,<br>
                                                East-Africa.<br>
                                                Ph: 00254-20-3749222</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-header">U.K.</div>
                                        <div class="card-body">
                                            <p>S. Punekar,<br>
                                                11, Armaside Road,<br>
                                                Cottam, Preston-PR4 0WH<br>
                                                United Kingdom.<br>
                                                Ph: 0044-1772739838</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Tab Content 3 -->

            <div class="tab-pane fade" id="features-tab-4">
                <div class="row gy-4">
                    <div class="col-lg-12 order-2 order-lg-1">
                        <h3>Enquiry Form</h3>
                        <!-- enquiry forum start-->
                        <div class="enquiry-form p-5">
                            <form method="post" action="../dbFiles/enquiry.php">
                                <h3 class="text-center">MALIK SANDAL POLYTECHNIC, VIJAYPUR.</h3>
                                <p>Date: 24/07/2424</p>

                                <div class="form-group">
                                    <label for="candidate-name">Name Of Candidate</label>
                                    <input type="text" class="form-control" id="candidate-name" name="candidate-name" placeholder="Enter candidate name">
                                </div>

                                <div class="form-group mt-4">
                                    <label for="father-name">Father's Name</label>
                                    <input type="text" class="form-control" id="father-name" placeholder="Enter Father's Name">
                                </div>

                                <div class="form-group mt-4">
                                    <label for="dob">DOB</label>
                                    <input type="date" class="form-control" id="dob" name="dob">
                                </div>

                                <div class="form-group mt-4">
                                    <label>Gender</label><br>
                                    <input type="radio" name="gender" id="male" value="Male">
                                    <label for="male">Male</label>
                                    <input type="radio" name="gender" id="female" value="Female">
                                    <label for="female">Female</label>
                                    <input type="radio" name="gender" id="others" value="Others">
                                    <label for="others">Others</label>
                                </div>

                                <div class="form-group mt-4">
                                    <label for="address">Address</label>
                                    <textarea class="form-control" id="address" rows="3" placeholder="Enter Address"></textarea>
                                </div>

                                <div class="form-group mt-4">
                                    <label for="mobile-1">Mobile 1</label>
                                    <input type="number" class="form-control" id="mobile1" placeholder="Enter Mobile No 1">
                                </div>

                                <div class="form-group mt-4">
                                    <label for="mobile-2">Mobile 2</label>
                                    <input type="number" class="form-control" id="mobile2" placeholder="Enter Mobile No 2">
                                </div>

                                <h4 class="mt-4">Examination Passed</h4>

                                <!-- Dropdown to select qualification -->
                                <div class="form-group mt-4">
                                    <label for="qualification">Select Qualification</label>
                                    <select id="qualification" name="qualification" class="form-control">
                                        <option value="" disabled selected>Select your qualification</option>
                                        <option value="SSLC">SSLC/10th</option>
                                        <option value="ITI">ITI</option>
                                        <option value="PUC">PUC(Science)/12th</option>
                                    </select>
                                </div>

                                <!-- SSLC/10th Form Group -->
                                <div class="form-group mt-4 qualification-form" id="sslc-form" style="display:none;">
                                    <label>SSLC/10th</label>
                                    <input type="number" class="form-control" name="sslc_marks" placeholder="Marks">
                                    <input type="number" class="form-control mt-3" name="sslc_percentage" placeholder="Percentage">
                                    <input type="text" class="form-control mt-3" name="sslc_institution" placeholder="Name of the Institution">
                                </div>

                                <!-- ITI Form Group -->
                                <div class="form-group mt-4 qualification-form" id="iti-form" style="display:none;">
                                    <label>ITI</label>
                                    <input type="number" class="form-control" name="iti_marks" placeholder="Marks">
                                    <input type="number" class="form-control mt-3" name="iti_percentage" placeholder="Percentage">
                                    <input type="text" class="form-control mt-3" name="iti_institution" placeholder="Name of the Institution">
                                </div>

                                <!-- PUC(Science)/12th Form Group -->
                                <div class="form-group mt-4 qualification-form" id="puc-form" style="display:none;">
                                    <label>PUC(Science)/12th</label>
                                    <input type="number" class="form-control" name="puc_marks" placeholder="Marks">
                                    <input type="number" class="form-control mt-3" name="puc_percentage" placeholder="Percentage">
                                    <input type="text" class="form-control mt-3" name="puc_institution" placeholder="Name of the Institution">
                                </div>

                                <div class="form-group mt-4">
                                    <label for="category">Category</label>
                                    <select class="form-control" id="category">
                                        <option>Select Category</option>
                                        <option>GM</option>
                                        <option>ST</option>
                                        <option>SC</option>
                                        <option>OBC</option>
                                        <option>Others</option>
                                    </select>
                                </div>

                                <div class="form-group mt-4">
                                    <label for="branch">Branch Interested</label>
                                    <select class="form-control" id="branch" name="branch">
                                        <option>Select your branch</option>
                                        <option>Computer Science & Engineering</option>
                                        <option>Civil Engineering</option>
                                        <option>Mechanical Engineering</option>
                                        <option>Electrical & Electronics Engineering</option>
                                        <option>Electronics & Communication Engineering</option>
                                        <option>Apparel Design & Fabrication Technology</option>
                                        <option>Commercial Practice</option>
                                    </select>
                                </div>

                                <div class="form-group mt-4">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                                </div>

                                <button type="submit" class="btn btn-primary mt-4" name="enquiry">Submit</button>
                            </form>
                        </div>
                        <!-- enquiry forum end -->
                    </div>
                </div>
            </div><!-- End Tab Content 4 -->
        </div>

    </div>
</section><!-- /Features Section -->

<script>
    document.getElementById('qualification').addEventListener('change', function() {
        // Hide all form groups
        document.querySelectorAll('.qualification-form').forEach(function(form) {
            form.style.display = 'none';
        });

        // Show the selected form group
        var selectedQualification = this.value;
        if (selectedQualification === 'SSLC') {
            document.getElementById('sslc-form').style.display = 'block';
        } else if (selectedQualification === 'ITI') {
            document.getElementById('iti-form').style.display = 'block';
        } else if (selectedQualification === 'PUC') {
            document.getElementById('puc-form').style.display = 'block';
        }
    });
</script>
<?php
include('../headerPages/top_footer.php');
include('../headerPages/footer.php');
?>