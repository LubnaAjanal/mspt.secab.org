<?php
include '../headerPages/header.php';
?>
<style>
    .table {
        /* margin: 20px auto; */
        width: 100%;
        border-collapse: collapse;
    }

    .table th,
    .table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    .table th {
        padding-top: 12px;
        padding-bottom: 12px;
        background-color: #0ea2bd;
        color: white;
    }

    .table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .table tr:hover {
        background-color: #ddd;
    }

    .table a {
        color: #007bff;
        text-decoration: none;
    }

    .table a:hover {
        text-decoration: underline;
    }

    .table caption {
        caption-side: top;
        font-size: 1.5em;
        font-weight: bold;
        border-bottom: 1px solid #0ea2bd;
    }
</style>

<!-- Features Section -->
<section id="features" class="features section">

    <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row gy-4 d-flex">

            <li class="nav-item col-6 col-md-6 col-lg-3">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                    <!-- <i class="bi bi-binoculars" style="color: #0dcaf0;"></i> -->
                    <h4>Scholarship Details</h4>
                </a>
            </li><!-- End Tab 1 Nav -->

            <li class="nav-item col-6 col-md-6 col-lg-3">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                    <!-- <i class="bi bi-box-seam" style="color: #6610f2;"></i> -->
                    <h4>Scheduled Castes</h4>
                </a>
            </li><!-- End Tab 2 Nav -->

            <li class="nav-item col-6 col-md-6 col-lg-3">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                    <!-- <i class="bi bi-brightness-high" style="color: #20c997;"></i> -->
                    <h4>Scheduled Tribes</h4>
                </a>
            </li><!-- End Tab 3 Nav -->

            <li class="nav-item col-6 col-md-6 col-lg-3">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4">
                    <!-- <i class="bi bi-brightness-high" style="color: #20c997;"></i> -->
                    <h4>Other Backward classes</h4>
                </a>
            </li><!-- End Tab 4 Nav -->

            <li class="nav-item col-6 col-md-6 col-lg-3 mb-3">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-5">
                    <!-- <i class="bi bi-brightness-high" style="color: #20c997;"></i> -->
                    <h4>Minority Community</h4>
                </a>
            </li><!-- End Tab 5 Nav -->

            <li class="nav-item col-6 col-md-6 col-lg-3 mb-3">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-6">
                    <!-- <i class="bi bi-brightness-high" style="color: #20c997;"></i> -->
                    <h4>SSP TUTRIAL</h4>
                </a>
            </li><!-- End Tab 6 Nav -->
        </ul>

        <div class="tab-content">

            <div class="tab-pane fade active show" id="features-tab-1">
                <div class="row gy-3">
                    <div class="col-lg-12 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                        <h3>2017-18</h3>
                        <div class="table-card">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Sl.No</th>
                                        <th>Name of the Scholarship</th>
                                        <th>Caste</th>
                                        <th>Sanctioned</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Fee Concession</td>
                                        <td>Other Backward Classes</td>
                                        <td>3,65,330</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Post Matric</td>
                                        <td>Minority Community</td>
                                        <td>31,98,000</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Fee Concession SC/ST</td>
                                        <td>Scheduled Castes & Scheduled Tribe</td>
                                        <td>5,96,000</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>KMDC Loan (Education Loan)</td>
                                        <td>Minority Community</td>
                                        <td>7,90,000</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><strong>TOTAL</strong></td>
                                        <td><strong>49,49,330</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h3 class="mt-3">2018-19</h3>
                        <div class="table-card">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Sl.No</th>
                                        <th>Name of the Scholarship</th>
                                        <th>Caste</th>
                                        <th>Sanctioned</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Fee Concession</td>
                                        <td>Other Backward Classes</td>
                                        <td>1,87,410</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Post Matric</td>
                                        <td>Minority Community</td>
                                        <td>18,81,900</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Fee Concession SC/ST</td>
                                        <td>Scheduled Castes & Scheduled Tribe</td>
                                        <td>2,84,660</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>KMDC Loan (Education Loan)</td>
                                        <td>Minority Community</td>
                                        <td>8,90,000</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><strong>TOTAL</strong></td>
                                        <td><strong>32,43,970</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h3 class="mt-3">2019-20</h3>
                        <div class="table-card">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Sl.No</th>
                                        <th>Name of the Scholarship</th>
                                        <th>Caste</th>
                                        <th>Sanctioned</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Fee Concession</td>
                                        <td>Other Backward Classes</td>
                                        <td>96,320</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Post Matric</td>
                                        <td>Minority Community</td>
                                        <td>20,97,000</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Fee Concession SC/ST</td>
                                        <td>Scheduled Castes & Scheduled Tribe</td>
                                        <td>2,21,010</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>KMDC Loan (Education Loan)</td>
                                        <td>Minority Community</td>
                                        <td>7,50,000</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><strong>TOTAL</strong></td>
                                        <td><strong>31,64,330</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- End Tab Content 1 -->

            <div class="tab-pane fade" id="features-tab-2">
                <div class="row gy-4">
                    <div class="col-lg-12 order-2 order-lg-1">
                        <table class="table table-bordered">
                            <caption>Malik Sandal Polytechnic, Bijapur</caption>
                            <caption>Scholarship Section</caption>
                            <caption class="mb-4">Scheduled Castes</caption>
                            <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Name of Scholarship</th>
                                    <th>Eligibility</th>
                                    <th>Website</th>
                                    <th>Amount to be Sanctioned</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Post Matric</td>
                                    <td>Annual Income below 2.5 lakh</td>
                                    <td><a href="https://swdservices.karnataka.gov.in/" target="_blank">http://sw.kar.nic.in/</a></td>
                                    <td>100% Tuition fee</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Fee Concession UG, (DTE)</td>
                                    <td>Annual Income above 2.5 lakh</td>
                                    <td>Offline application form Department</td>
                                    <td>100% Tuition fee</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Post-Matric for Disability Scholarship</td>
                                    <td>Physically disabled students with Annual Income 2.5 lakh</td>
                                    <td><a href="https://scholarships.gov.in/" target="_blank">https://scholarships.gov.in/</a></td>
                                    <td>100% Tuition fee</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Pragati and Saksham (AICTE)</td>
                                    <td>Only for First Year students with Annual Income 6.0 lakh (CET)</td>
                                    <td><a href="https://www.aicte-pragati-saksham-gov.in/login.php?r=session_invalid" target="_blank">https://www.aicte-pragati-saksham-gov.in/</a></td>
                                    <td>15,000.00</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Defense Scholarship</td>
                                    <td>Parents in Defense (CET)</td>
                                    <td>Offline application form Department</td>
                                    <td>100% Tuition fee</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>National Foundation for Teachers Welfare</td>
                                    <td>Parents in Govt Teaching profession</td>
                                    <td>Offline application form Department</td>
                                    <td>3000 to 5000</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Sitaram Jindal Foundation</td>
                                    <td>Students securing above 75% with Annual Income below 4 lakh</td>
                                    <td><a href="https://www.sitaramjindalfoundation.org/" target="_blank">https://www.sitaramjindalfoundation.org/</a></td>
                                    <td>10,000.00</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>NHFSC for Disability</td>
                                    <td>Physically disabled students with Annual Income 6 lakh</td>
                                    <td><a href="https://www.nhfdc.nic.in/" target="_blank">http://www.nhfdc.nic.in/</a></td>
                                    <td>100% Tuition fee</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Prize Money</td>
                                    <td>First Attempt Examination Pass above 75%</td>
                                    <td><a href="https://swdservices.karnataka.gov.in/" target="_blank">http://sw.kar.nic.in/</a></td>
                                    <td>12,000.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- End Tab Content 2 -->

            <div class="tab-pane fade" id="features-tab-3">
                <div class="row gy-4">
                    <div class="col-lg-12 order-2 order-lg-1">
                        <table class="table table-bordered">
                            <caption>Malik Sandal Polytechnic, Bijapur</caption>
                            <caption>Scholarship Section</caption>
                            <caption class="mb-4">Scheduled Tribes</caption>
                            <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Name of Scholarship</th>
                                    <th>Eligibility</th>
                                    <th>Website</th>
                                    <th>Amount to be Sanctioned</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Post Matric</td>
                                    <td>Annual Income below 2.5 lakh</td>
                                    <td><a href="https://swdservices.karnataka.gov.in/" target="_blank">http://sw.kar.nic.in/</a></td>
                                    <td>100% Tuition fee</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Fee Concession UG, (DTE)</td>
                                    <td>Annual Income above 2.5 lakh</td>
                                    <td>Offline application form Department</td>
                                    <td>100% Tuition fee</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Post-Matric for Disability Scholarship</td>
                                    <td>Physically disabled students with Annual Income 2.5 lakh</td>
                                    <td><a href="https://scholarships.gov.in/" target="_blank">https://scholarships.gov.in/</a></td>
                                    <td>100% Tuition fee</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Pragati and Saksham (AICTE)</td>
                                    <td>Only for First Year students with Annual Income 6.0 lakh (CET)</td>
                                    <td><a href="https://www.aicte-pragati-saksham-gov.in/login.php?r=session_invalid" target="_blank">https://www.aicte-pragati-saksham-gov.in/</a></td>
                                    <td>15,000.00</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Defense Scholarship</td>
                                    <td>Parents in Defense (CET)</td>
                                    <td>Offline application form Department</td>
                                    <td>100% Tuition fee</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>National Foundation for Teachers Welfare</td>
                                    <td>Parents in Govt Teaching profession</td>
                                    <td>Offline application form Department</td>
                                    <td>3000 to 5000</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Sitaram Jindal Foundation</td>
                                    <td>Students securing above 75% with Annual Income below 4 lakh</td>
                                    <td><a href="https://www.sitaramjindalfoundation.org/" target="_blank">https://www.sitaramjindalfoundation.org/</a></td>
                                    <td>10,000.00</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>NHFSC for Disability</td>
                                    <td>Physically disabled students with Annual Income 6 lakh</td>
                                    <td><a href="https://www.nhfdc.nic.in/" target="_blank">http://www.nhfdc.nic.in/</a></td>
                                    <td>100% Tuition fee</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Prize Money</td>
                                    <td>First Attempt Examination Pass above 75%</td>
                                    <td><a href="https://swdservices.karnataka.gov.in/" target="_blank">http://sw.kar.nic.in/</a></td>
                                    <td>12,000.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- End Tab Content 3 -->

            <div class="tab-pane fade" id="features-tab-4">
                <div class="row gy-4">
                    <div class="col-lg-12 order-2 order-lg-1">
                        <table class="table table-bordered">
                            <caption>Malik Sandal Polytechnic, Bijapur</caption>
                            <caption>Scholarship Section</caption>
                            <caption class="mb-4">Other Backward Classes</caption>
                            <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Name of Scholarship</th>
                                    <th>Eligibility</th>
                                    <th>Website</th>
                                    <th>Amount to be Sanctioned</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Fee Concession</td>
                                    <td rowspan="3">Backwardclasses</td>
                                    <td><a href="https://karepass.cgg.gov.in/" target="_blank">https://karepass.cgg.gov.in/</a></td>
                                    <td>4000 to 5000</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Expenditure for boarding and Lodging</td>
                                    <!-- <td>Annual Income above 2.5 lakh</td> -->
                                    <td><a href="https://karepass.cgg.gov.in/" target="_blank">https://karepass.cgg.gov.in/</a></td>
                                    <td>15,000.00</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Post matric</td>
                                    <!-- <td>Physically disabled students with Annual Income 2.5 lakh</td> -->
                                    <td><a href="https://karepass.cgg.gov.in/" target="_blank">https://karepass.cgg.gov.in/</a></td>
                                    <td>3,500.00</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Post-Matric for disability Scholarship</td>
                                    <td>Physically disabled students with Annual Income 2.5 lakh</td>
                                    <td><a href="https://scholarships.gov.in/" target="_blank">https://scholarships.gov.in/</a></td>
                                    <td>100% Tution fee</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Pragati and Saksham (AICTE)</td>
                                    <td>Only for First Year students with Annual Income 6.0 lakh (CET)</td>
                                    <td><a href="https://www.aicte-pragati-saksham-gov.in/login.php?r=session_invalid" target="_blank">https://www.aicte-pragati-saksham-gov.in/</a></td>
                                    <td>15,000.00</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Defense Scholarship</td>
                                    <td>Parents in Defense (CET)</td>
                                    <td>Offline application form Department</td>
                                    <td>100% Tuition fee</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>National Foundation for Teachers Welfare</td>
                                    <td>Parents in Govt Teaching profession</td>
                                    <td>Offline application form Department</td>
                                    <td>3000 to 5000</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Sitaram Jindal Foundation</td>
                                    <td>Students securing above 75% with Annual Income below 4 lakh</td>
                                    <td><a href="https://www.sitaramjindalfoundation.org/" target="_blank">https://www.sitaramjindalfoundation.org/</a></td>
                                    <td>10,000.00</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>NHFSC for Disability</td>
                                    <td>Physically disabled students with Annual Income 6 lakh</td>
                                    <td><a href="https://www.nhfdc.nic.in/" target="_blank">http://www.nhfdc.nic.in/</a></td>
                                    <td>100% Tuition fee</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Education Loan (D. Devraj Urs,)</td>
                                    <td>UG/PG, Annual Income below 6 lakh (CET)</td>
                                    <td><a href="https://www.backwardclasses.kar.nic.in/" target="_blank">http://www.backwardclasses.kar.nic.in/</a></td>
                                    <td>100% Tution fee</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Post Matric</td>
                                    <td>Students from Bihar State, Annual Income 2.5 Lakh</td>
                                    <td><a href="https://scholarships.gov.in/" target="_blank">https://scholarships.gov.in/</a></td>
                                    <td>12,000.00 to 15,000.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div><!-- End Tab Content 4 -->

            <div class="tab-pane fade" id="features-tab-5">
                <div class="row gy-4">
                    <div class="col-lg-12 order-2 order-lg-1">
                        <table class="table table-bordered">
                            <caption>Malik Sandal Polytechnic, Bijapur</caption>
                            <caption>Scholarship Section</caption>
                            <caption class="mb-4">Minority Community</caption>
                            <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Name of Scholarship</th>
                                    <th>Eligibility</th>
                                    <th>Website</th>
                                    <th>Amount to be Sanctioned</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Post matric</td>
                                    <td rowspan="2">Annual Income below 2.5 lakh</td>
                                    <td rowspan="2"><a href="https://scholarships.gov.in/" target="_blank">https://scholarships.gov.in/</a></td>
                                    <td>12,500.00</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Fee Reimbursement</td>
                                    <!-- <td>Annual Income below 2.5 lakh</td> -->
                                    <!-- <td><a href="https://scholarships.gov.in/" target="_blank">https://scholarships.gov.in/</a></td> -->
                                    <td>3,000.00</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Post-Matric for disability Scholarship</td>
                                    <td>Physically disabled students with Annual Income 2.5 lakh</td>
                                    <td><a href="https://scholarships.gov.in/" target="_blank">https://scholarships.gov.in/</a></td>
                                    <td>100% Tution fee</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Pragati and Saksham (AICTE)</td>
                                    <td>Only for First Year students with Annual Income 6.0 lakh (CET)</td>
                                    <td><a href="https://www.aicte-pragati-saksham-gov.in/login.php?r=session_invalid" target="_blank">https://www.aicte-pragati-saksham-gov.in/</a></td>
                                    <td>15,000.00</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Defense Scholarship</td>
                                    <td>Parents in Defense (CET)</td>
                                    <td>Offline application form Department</td>
                                    <td>100% Tuition fee</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Vidyasiri scholarship</td>
                                    <td>UG/PG, Annual Income below 2.5 lakh, students should be Rural</td>
                                    <td>Offline application form Department</td>
                                    <td>15,000.00</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>NHFSC for Disability</td>
                                    <td>Physically disabled students with Annual Income 6 lakh</td>
                                    <td><a href="https://www.nhfdc.nic.in/" target="_blank">http://www.nhfdc.nic.in/</a></td>
                                    <td>100% Tuition fee</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>National Foundation for Teachers Welfare</td>
                                    <td>Parents in Govt Teaching profession</td>
                                    <td>Offline application form Department</td>
                                    <td>3000 to 5000</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Sitaram Jindal Foundation</td>
                                    <td>Students securing above 75% with Annual Income below 4 lakh</td>
                                    <td>Offline application form<a href="https://www.sitaramjindalfoundation.org/" target="_blank"><br>https://www.sitaramjindalfoundation.org/</a></td>
                                    <td>10,000.00</td>
                                </tr>

                                <tr>
                                    <td>10</td>
                                    <td>KMDC Education Loan</td>
                                    <td>UG/PG, Annual Income below 6 lakh</td>
                                    <td><a href="https://kmdc.kar.nic.in/arivu2/" target="_blank">https://kmdc.kar.nic.in/arivu2/</a></td>
                                    <td>100% Tution fee</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- End Tab Content 5 -->

            <div class="tab-pane fade" id="features-tab-6">
                <div class="row gy-4">
                    <div class="col-lg-12 order-2 order-lg-1">
                        <table class="table table-bordered">
                            <caption>Malik Sandal Polytechnic, Bijapur</caption>
                            <caption>Scholarship Section</caption>
                            <caption class="mb-4">SSP TUTRIAL</caption>
                            <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Name of Scholarship</th>
                                    <th>Eligibility</th>
                                    <th>Website</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>STATE SCHOLARSHIP PORTAL (SSP)</td>
                                    <td>Only SC, ST and Minority category students should apply through this portal</td>
                                    <td><a href="http://ssp.postmatric.karnataka.gov.in/homepage.aspx" target="_blank">http://ssp.postmatric.karnataka.gov.in/homepage.aspx</a>
                                        <br>Youtube Link1: <a href="https://www.youtube.com/watch?v=ex3jx8FS54A" target="_blank"> https://www.youtube.com/watch?v=ex3jx8FS54A</a>
                                        <br>Youtube Link2: <a href="https://www.youtube.com/watch?v=T9rX0wi46rQ" target="_blank"> https://www.youtube.com/watch?v=T9rX0wi46rQ</a>
                                        <br>PPT: <a href="../assets/pdf/SSP 2019-20.pptx" target="_blank"> click here to view</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- End Tab Content 6 -->
        </div>
    </div>
</section><!-- /Features Section -->

<?php
include '../headerPages/top_footer.php';
include '../headerPages/footer.php';
?>