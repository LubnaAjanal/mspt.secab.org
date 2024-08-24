<?php

include 'conn.php';

if (isset($_POST['ragging'])) {
    $name1 = $_POST['name'];
    $email1 = $_POST['email'];
    $mobile1 = $_POST['mobile'];
    $course1 = $_POST['course'];
    $usn1 = $_POST['usn'];
    //$designation3=$_POST['desig3'];
    //$category3=$_POST['cat3'];
    //$college3=$_POST['clg3'];
    $department1 = $_POST['department'];
    $complaint1 = $_POST['incident'];
    $address1 = $_POST['address'];
    $incident1 = $_POST['place'];
    $date1 = $_POST['date'];
    $witness1 = $_POST['witness'];
    $q1 = $conn->query("select max(id) as mid from ragging");
    $r1 = $q1->fetch_assoc();
    $mid = $r1['mid'];
    $mid = $mid + 1;
    $year = date("Y");
    $complaint_id = "r" . $year . "_" . $mid;
    //die(print($complaint_id.$mid.$year));
    $query = $conn->query("insert into ragging (name,email,complaint_id,mobile,course,usn,dept,complaint,address,incident,date,witness,action,status) values
('$name1','$email1','$complaint_id','$mobile1','$course1','$usn1','$department1','$complaint1','$address1','$incident1','$date1','$witness1','','Pending')");
    if ($query) {
        echo "<script>alert('Complaint Submitted Successfully. To view status please use this ID: $complaint_id')</script>";
        echo "<script>setTimeout(\"location.href = 'http://localhost/Lubna_Projects/mspt.secab.org/pages/complaintStatus.php';\",100);</script>";
    } else {
        //echo"error!";
    }
} else if (isset($_POST['harass'])) {
    $name2 = $_POST['name'];
    $email2 = $_POST['email'];
    $mobile2 = $_POST['mobile'];
    $course2 = $_POST['course'];
    $usn2 = $_POST['usn'];
    $designation2 = $_POST['design'];
    // $category3 = $_POST['cat'];
    //$college3=$_POST['clg3'];
    $department2 = $_POST['department'];
    $complaint2 = $_POST['incident'];
    $address2 = $_POST['place'];
    //$incident2=$_POST['place3'];
    $date2 = $_POST['date'];
    $witness2 = $_POST['witness'];
    $q1 = $conn->query("select max(id) as mid from harass");
    $r1 = $q1->fetch_assoc();
    $mid = $r1['mid'];
    $mid = $mid + 1;
    $year = date("Y");
    $complaint_id = "sh" . $year . "_" . $mid;
    // id name email mobile course usn designation category dept complaint address incident date witness status
    $query = $conn->query("insert into harass (name,email,complaint_id,mobile,course,usn,designation,category,dept,complaint,address,incident,date,witness,action,status) values
('$name2','$email2','$complaint_id','$mobile2','$course2','$usn2','$designation2','','$department2','$complaint2','$address2','','$date2','$witness2','','Pending')");
    if ($query) {
        //die("Complaint Submitted Successfully");
        //header('location:https://siet.secab.org/grievance.php');
        echo "<script>alert('Complaint Submitted Successfully. To view status please use this ID: $complaint_id')</script>";
        // echo "<script>setTimeout(\"location.href = 'http://localhost/Lubna_Projects/mspt.secab.org/pages/complaintStatus.php';\",100);</script>";
    } else {
        //echo"error!";
    }
} else if (isset($_POST['cast'])) {
    $name3 = $_POST['name'];
    $email3 = $_POST['email'];
    $mobile3 = $_POST['mobile'];
    $course3 = $_POST['course'];
    $usn3 = $_POST['usn'];
    $designation3 = $_POST['design'];
    $category3 = $_POST['category'];
    //$college3=$_POST['clg3'];
    $department3 = $_POST['department'];
    $complaint3 = $_POST['incident'];
    $address3 = $_POST['address'];
    $incident3 = $_POST['place'];
    $date3 = $_POST['date'];
    $witness3 = $_POST['witness'];

    $q1 = $conn->query("select max(id) as mid from complaint");
    $r1 = $q1->fetch_assoc();
    $mid = $r1['mid'];
    $mid = $mid + 1;
    $year = date("Y");
    $complaint_id = "c" . $year . "_" . $mid;

    $query = $conn->query("insert into complaint (name,email,complaint_id,mobile,course,usn,designation,category,college,
dept,complaint,address,incident,date,witness,action,status) values
('$name3','$email3','$complaint_id','$mobile3','$course3','$usn3','$designation3','$category3','SIET',
'$department3','$complaint3','$address3','$incident3','$date3','$witness3','','Pending')");
    if ($query) {
        //die("Complaint Submitted Successfully");
        //header('location:https://siet.secab.org/grievance.php');
        echo "<script>alert('Complaint Submitted Successfully. To view status please use this ID: $complaint_id')</script>";
        echo "<script>setTimeout(\"location.href = 'http://localhost/Lubna_Projects/mspt.secab.org/pages/complaintStatus.php';\",100);</script>";
    }
} else if (isset($_POST['complaint_id'])) {
    $complaint_id = $_POST['complaint_id'];
    //echo $complaint_id;
    $query = $con->query("select * from ragging where complaint_id='$complaint_id'");
    $cnt = $query->rowCount();
    if ($cnt == 0) {
        echo "Invalid ID";
    } else {
        $r = $query->fetch();
        $action = $r['action'];
        echo $action;
    }
} else if (isset($_POST['griev'])) {
    $name = $_POST['name'];
    $eid = $_POST['email'];
    $mno = $_POST['mobile'];
    $roll = $_POST['role'];
    $usn = $_POST['usn'];
    $staff = $_POST['staffId'];
    $grievance = $_POST['description'];
    $dt = $_POST['date'];
    if ($_POST['department'] == '') {
        $dept = '';
    } else {
        $dept = $_POST['department'];
    }
    $q1 = $conn->query("select max(id) as mid from grievance");
    $r1 = $q1->fetch_assoc();
    $mid = $r1['mid'];
    $mid = $mid + 1;
    $year = date("Y");
    $complaint_id = "g" . $year . "_" . $mid;
    //id name emailid mobile roll usn staffid grievance_dis cdate

    $query = $conn->query("insert into grievance (name,emailid,complaint_id,mobile,role,usn,staffid,dept,grievance_dis,cdate,action,status) values
('$name','$eid','$complaint_id','$mno','$roll','$usn','$staff','$dept','$grievance','$dt','','Pending')");
    if ($query) {
        //die("Complaint Submitted Successfully");
        //header('location:https://siet.secab.org/grievance.php');
        echo "<script>alert('Complaint Submitted Successfully. To view status please use this ID: $complaint_id')</script>";
        echo "<script>setTimeout(\"location.href = 'http://localhost/Lubna_Projects/mspt.secab.org/pages/complaintStatus.php';\",100);</script>";
    } else {
        echo "<script>alert('Error')</script>";
    }
} else {
    //echo"error!";
}
