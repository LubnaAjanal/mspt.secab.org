<?php
$department = isset($_GET['department']) ? $_GET['department'] : 'No Dept';
//echo $departmentName;
$name = $department;
if ($department === 'Applied Science') {
    $name = 'Basic Science';
} elseif ($department === 'Civil') {
    $name = 'Civil Engineering';
} elseif ($department === 'Computer Science') {
    $name = 'Computer Science Engineering';
} elseif ($department === 'Electrical and Electronics') {
    $name = 'Electrical and Electronics Engineering';
} elseif ($department === 'Electronics and Communication Engineering') {
    $name = 'Electronics and Communication Engineering';
} elseif ($department === 'Mechanical') {
    $name = 'Mechanical Engineering';
} elseif ($department === 'Apparel Design and Fabrication Technology') {
    $name = 'Apparel Design and Fabrication Technology';
} elseif ($department === 'Commercial Practice') {
    $name = 'Commercial Practice';
}

$currentPage = isset($_GET['page']) ? $_GET['page'] : 'home';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo ($name); ?></title>
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
        <ul class="nav flex-column text-white mt-3">
            <li class="nav-item">
                <a href="?page=home&department=<?php echo $department ?>" class="nav-link <?php echo $currentPage == 'home' ? 'active' : ''; ?>">
                    <i class="bi bi-house-door"></i>
                    <span class="mx-2" style="font-size:15px;">Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="?page=home&department=<?php echo $department ?>" class="nav-link <?php echo $currentPage == 'home' ? 'active' : ''; ?> ">
                    <i class="bi bi-globe-americas"></i>
                    <span class="mx-2" style="font-size:15px;">Overview</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="?page=hod_msg&department=<?php echo $department ?>" class="nav-link <?php echo $currentPage == 'hod_msg' ? 'active' : ''; ?>">
                    <i class="bi bi-person"></i>
                    <span class="mx-2" style="font-size:15px;">HOD Message</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="?page=faculty_profile&department=<?php echo $department ?>" class="nav-link <?php echo $currentPage == 'faculty_profile' ? 'active' : ''; ?>">
                    <i class="bi bi-person-bounding-box"></i>
                    <span class="mx-2" style="font-size:15px;">Faculty Profile</span>
                </a>
            </li>
            <?php if ($department != 'Applied Science') {
                echo '<li class="nav-item">
                <a href="?page=non_teaching_staff&department=' . $department . '" class="nav-link '. ($currentPage == 'non_teaching_staff' ? 'active' : '') .'">
                    <i class="bi bi-person-exclamation"></i>
                    <span class="mx-2" style="font-size:15px;">Non-Teaching Staff</span>
                </a>
            </li>';
            }
            ?>
            <li class="nav-item">
                <a href="?page=guest_lectures&department=<?php echo $department ?>&sec=Talk%20By%20Visitors" class="nav-link <?php echo $currentPage == 'guest_lectures' ? 'active' : ''; ?>">
                    <i class="bi bi-people"></i>
                    <span class="mx-2" style="font-size:15px;">Guest Lectures</span>
                </a>
            </li>
            <?php if ($department != 'Applied Science') {
                echo '<li class="nav-item">
                    <a href="?page=industrial_visit&department=' . $department . '&sec=Industrial%20Visit" class="nav-link '. ($currentPage == 'industrial_visit' ? 'active' : '') .'">
                        <i class="bi bi-caret-right"></i>
                        <span class="mx-2" style="font-size:15px;">Industrial/Site Visit</span>
                    </a>
                </li>';
                echo '<li class="nav-item">
                    <a href="?page=workshops_trainings&department=' . $department . '&sec=Student%20Activities" class="nav-link '. ($currentPage == 'workshops_trainings' ? 'active' : '') .'">
                        <i class="bi bi-caret-right"></i>
                        <span class="mx-2" style="font-size:15px;">Workshops and Inplant Trainings</span>
                    </a>
                </li>';
                echo '<li class="nav-item">
                    <a href="?page=recognized_projects&department=' . $department . '" class="nav-link '. ($currentPage == 'recognized_projects' ? 'active' : '') .'">
                        <i class="bi bi-caret-right"></i>
                        <span class="mx-2" style="font-size:15px;">Recognized Students Projects</span>
                    </a>
                </li>';
            } ?>
            <li class="nav-item">
                <a href="?page=e_resource&department=<?php echo $department ?>" class="nav-link <?php echo $currentPage == 'e_resource' ? 'active' : ''; ?>">
                    <i class="bi bi-file-earmark"></i>
                    <span class="mx-2" style="font-size:15px;">E-Resource</span>
                </a>
            </li>
            <?php if ($department != 'Applied Science') {
                echo '<li class="nav-item">
                    <a href="?page=gallery&department=' . $department . '" class="nav-link '. ($currentPage == 'gallery' ? 'active' : '') .'">
                        <i class="bi bi-camera"></i>
                        <span class="mx-2" style="font-size:15px;">Gallery</span>
                    </a>
                </li>';
            } ?>
        </ul>
    </div>

    <!-- Main Wrapper -->
    <div class="p-1 my-container active-cont">
        <!-- Top Nav -->
        <nav class="navbar top-navbar navbar-light px-5">
            <a class="btn border-0" id="menu-btn"><i class="bx bx-menu"></i></a>
            <h2 class="dept-name"><?php echo ($name); ?></h2>
        </nav>
        <!--End Top Nav -->

        <!-- main right side content -->
        <div class="container mt-1">
            <?php
            $page = isset($_GET['page']) ? $_GET['page'] : 'home';
            // echo $page;
            $allowed_pages = ['home', 'hod_msg', 'faculty_profile', 'non_teaching_staff', 'guest_lectures', 'industrial_visit', 'workshops_trainings', 'recognized_projects', 'e_resource', 'gallery','events'];
            if (in_array($page, $allowed_pages)) {
                include "../departments/{$page}.php";
            } else {
                include '../departments/home.php';
            }
            ?>
        </div>
    </div>


    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <script src="../assets/js/sidebar.js"></script>
</body>

</html>