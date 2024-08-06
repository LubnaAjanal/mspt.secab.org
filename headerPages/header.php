<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>MSPT</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- <link href="assets/img/favicon.png" rel="icon"> -->
    <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="../assets/css/main.css" rel="stylesheet">
    <script>
        // Function to set the active class
        function setActiveNav() {
            const currentPath = window.location.pathname.split('/').pop();
            const navItems = document.querySelectorAll('.navmenu ul li a');

            let activeSet = false;

            navItems.forEach(item => {
                const linkPath = item.getAttribute('href').split('/').pop();
                if (linkPath == currentPath) {
                    item.classList.add('active');
                    let parent = item.parentElement;
                    while (parent && parent.classList.contains('dropdown')) {
                        parent = parent.parentElement.closest('li');
                        if (parent) {
                            parent.querySelector('a').classList.add('active');
                        }
                    }
                    activeSet = true;
                } else {
                    item.classList.remove('active');
                }
            });

            if (!activeSet) {
                document.querySelector('.navmenu ul li a[href="index.html"]').classList.add('active');
            }
        }

        document.addEventListener('DOMContentLoaded', setActiveNav);
    </script>

</head>

<body class="index-page">
    <header id="header" class="header align-items-center sticky-top">
        <!-- Flexible Image -->
        <div class="sticky-top">
            <img src="../assets/img/mspt large.jpg" alt="Flexible Image" style="width:100%;height:150px;">
        </div>
        <div class="container-fluid position-relative d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
            </a>
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="../headerPages/index.php" class="active">Home<br></a></li>
                    <li class="dropdown"><a href="#"><span>Governance</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="https://mspt.secab.org/pdf/1.Governing%20council.pdf">Governing Council</a></li>
                            <li><a href="https://mspt.secab.org/pdf/2.Organization_Structure.pdf">Organization Structure</a></li>
                            <li><a href="../pages/clg_committe.php">College Committees</a></li>
                            <li><a href="../pages/approval_letter.php">Approval Letters</a></li>
                            <li class="dropdown"><a href="#"><span>Rules and Regulation</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="https://mspt.secab.org/pdf/Student%20rules%20and%20regulations.pdf">Student's Rules</a></li>
                                    <li><a href="https://mspt.secab.org/pdf/Service%20rules.pdf">Service Rules</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="../pages/admissions.php">Admissions</a></li>
                    <li class="dropdown"><a href="#"><span>Departments</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="../departments/sidebar.php?department=Applied%20Science">Basic Science</a></li>
                            <li><a href="../departments/sidebar.php?department=Civil">Civil Engineering</a></li>
                            <li><a href="../departments/sidebar.php?department=Computer%20Science">Computer Science & Engineering</a></li>
                            <li><a href="../departments/sidebar.php?department=Electrical%20and%20Electronics">Electrical & Electronics Engineering</a></li>
                            <li><a href="../departments/sidebar.php?department=Electronics%20and%20Communication%20Engineering">Electronics & Communication Engineering</a></li>
                            <li><a href="../departments/sidebar.php?department=Mechanical">Mechanical Engineering</a></li>
                            <li><a href="../departments/sidebar.php?department=Apparel%20Design%20and%20Fabrication%20Technology">Apparel Design & Fabrication Technology</a></li>
                            <li><a href="../departments/sidebar.php?department=Commercial%20Practice">Commercial Practice</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Activities</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li class="dropdown"><a href="#"><span>National/International Days</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="../activities/independence.php">Independence Day</a></li>
                                    <li><a href="../activities/republic.php">Republic Day</a></li>
                                    <li><a href="../activities/womens_day.php">Womens Day</a></li>
                                    <li><a href="../activities/environmental.php">Environmental Day</a></li>
                                    <li><a href="../activities/world_dignity.php">World Dignity Day</a></li>
                                </ul>
                            </li>
                            <li><a href="../activities/cultural.php">Cultural Events</a></li>
                            <li><a href="../activities/sports.php">Sports</a></li>
                            <li><a href="../activities/tech_zeal.php">Tech Zeal</a></li>
                            <li><a href="../activities/project_exhibition.php">Project Exhibition</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Facilities</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="../facilities/library.php">Library</a></li>
                            <li><a href="../facilities/addl_library.php">Additional Laboratories</a></li>
                            <li><a href="../facilities/badminton.php">Badminton Court & Sports Room</a></li>
                            <li><a href="../facilities/auditorium.php">Open Auditorium</a></li>
                            <li><a href="../facilities/hostel.php">Hostel</a></li>
                        </ul>
                    </li>
                    <li><a href="../pages/gallery.php">Gallery</a></li>
                    <li><a href="../pages/contact.php">Contact Us</a></li>
                    <li><a href="../pages/fee_payment.php">Online Fee Payment</a></li>
                    <li><a href="../pages/grcell.php">Grievance Redressal Cell</a></li>
                    <li><a href="../pages/scholarship.php">Scholarship Cell</a></li>
                    <li><a href="../pages/mou.php">MOU's</a></li>
                    <li><a href="https://students.secab.org/">Student Feedback</a></li>
                    <li><a href="https://alumni.secab.org/" target="_blank">Alumni</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>