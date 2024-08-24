<?php

include 'conn.php';

if (isset($_POST['enquiry'])) {
    // var data={"cname":cname,"gender":gender,"qual":qual,"cmob":cmob,
    //"pmob":pmob,"state":state,"dis":dis,"city":city,"email":email,"branch":branch,"enquiry":1};        
    $cname = $_POST['candidate-name'];
    $gender = $_POST['gender'];
    $qual = $_POST['qualification'];
    $cmob = $_POST['mobile1'];
    $pmob = $_POST['mobile2'];
    // $state=$_POST['state'];
    // $dis=$_POST['dis'];
    //$state='';
    //$dis='';
    // $city=$_POST['city'];
    $email = $_POST['email'];
    $branch = $_POST['branch'];
    //echo $cname.$gender.$qual.$cmob.$pmob.$state.$dis.$city.$email.$branch;
    //id,cname,gender,qualification,cmob,pmob,state,district,city,email,branch,cdate,udate Query results operations
    $q1 = $dbcon->query("insert into ad_enquiry(cname,gender,qualification,cmob,pmob,state,district,city,email,branch) values ('$cname','$gender','$qual','$cmob','$pmob','$state','$dis','$city','$email','$branch')");
    if (!$q1) {
        // die('not slected'.$q1->errorInfo());
        echo "Error";
    } else {
        echo "Submitted Successfully";
    }
}
