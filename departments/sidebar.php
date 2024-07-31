<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>departments</title>
    <!-- bootstrap 5 css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <!-- BOX ICONS CSS-->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
    <!-- custom css -->
    <link rel="stylesheet" href="../assets/css/sidebar.css" />
    <!-- Bootstrap 5 icons link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <!-- Side-Nav -->
    <div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column" id="sidebar">
        <ul class="nav flex-column text-white w-100 mt-3">
            <?php
            $departmentName = isset($_GET['department']) ? $_GET['department'] : 'Responsive Sidebar Nav';
            ?>
            <li href=" #" class="nav-link active">
            <i class="bi bi-house-door"></i>
                <span class="mx-2">Home</span>
            </li>
            <li href="#" class="nav-link">
                <i class="bi bi-globe-americas"></i>
                <span class="mx-2">Overview</span>
            </li>
            <li href="#" class="nav-link">
                <i class="bi bi-person"></i>
                <span class="mx-2">HOD Message</span>
            </li>
            <li href="#" class="nav-link">
                <i class="bi bi-person-bounding-box"></i>
                <span class="mx-2">Faculty Profile</span>
            </li>
            <?php if ($departmentName != 'Basic Science') {
                echo '<li class="nav-link">
                    <i class="bi bi-person-exclamation"></i>
                    <span class="mx-2">Non-Teaching Staff</span>
                    </li>';
            }
            ?>
            <li href="#" class="nav-link">
                <i class="bi bi-people"></i>
                <span class="mx-2">Guest Lectures</span>
            </li>
            <?php if ($departmentName != 'Basic Science') {
                echo '<li class="nav-link">
                    <i class="bi bi-caret-right"></i>
                    <span class="mx-2">Industrial/Site Visit</span>
                    </li>';
                echo '<li class="nav-link">
                    <i class="bi bi-caret-right"></i>
                    <span class="mx-2">Workshops and Inplant Trainings</span>
                    </li>';
                echo '<li class="nav-link">
                    <i class="bi bi-caret-right"></i>
                    <span class="mx-2">Recognized Students Projects</span>
                    </li>';
            }
            ?>
            <li href="#" class="nav-link">
            <i class="bi bi-file-earmark"></i>
                <span class="mx-2">E-Resource</span>
            </li>
            <?php if ($departmentName != 'Basic Science') {
                echo '<li class="nav-link">
                    <i class="bi bi-camera"></i>
                    <span class="mx-2">Gallery</span>
                    </li>';
            }
            ?>
        </ul>

    </div>

    <!-- Main Wrapper -->
    <div class="p-1 my-container active-cont">
        <!-- Top Nav -->
        <nav class="navbar top-navbar navbar-light px-5">
            <a class="btn border-0" id="menu-btn"><i class="bx bx-menu"></i></a>
            <h3 class="dept-name"><?php echo htmlspecialchars($departmentName); ?></h3>
        </nav>
        <!--End Top Nav -->
        <h3 class=" text-dark p-3">RESPONSIVE SIDEBAR NAV 💻 📱
        </h3>
        <p class=" px-3">Responsive navigation sidebar built using <a class="text-dark" href="https://getbootstrap.com/">Bootstrap 5</a>.</p>
        <p class="px-3"><a href="https://github.com/harshitjain-hj" class="text-dark">Checkout my Github</a></p>
    </div>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <script src="../assets/js/sidebar.js"></script>
</body>

</html>