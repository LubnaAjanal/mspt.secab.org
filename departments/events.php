<?php
include('../dbFiles/conn.php'); // Make sure to include your database connection

$dept = isset($_GET['department']) ? $_GET['department'] : 'No Dept';
$tab = isset($_GET['tab']) ? $_GET['tab'] : 'No tab';
$id = isset($_GET['id']) ? $_GET['id'] : null;

if ($tab == 'news') {
    // Query to get the guest lecture details
    $sql = "SELECT * FROM `event` WHERE dept ='$dept' AND id ='$id'";
    $result = mysqli_query($conn, $sql);
    $lecture = mysqli_fetch_assoc($result);
    //print_r($lecture);
} elseif($tab == 'project1'){
    $sql = "SELECT * FROM `project` WHERE dept ='$dept' AND id ='$id'";
    $result = mysqli_query($conn, $sql);
    $lecture = mysqli_fetch_assoc($result);
    //print_r($lecture);
}
?>

<style>
.guest-lectures {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
    margin-bottom: 20px;
}

.guest-lectures h3 {
    background-color: #0ea2bd;
    color: #fff;
    padding: 15px;
    font-size: 23px;
    margin-bottom: 15px;
    text-align: center;
}

.guest-lectures img {
    max-height: 280px;
    width: 80%;
    margin: 20px auto;
    display: block;
}

.guest-lectures p {
    text-align: justify;
}
</style>

<?php if ($tab == 'news' && $lecture) : ?>
    <div class="guest-lectures">
        <div class="col-sm-12">
            <div class="row jumbotron" style="padding:18px 0 5px 0px;margin:20px 0 0px 0px;">
                <div class="col-sm-12 middle-post" id="cont" style="text-align: justify;">
                    <h3><?php echo htmlspecialchars($lecture["title"]); ?></h3>
                    <center>
                        <img src='../assets/img<?php $lecture["pic"] ?>' class='img-responsive' alt=''>
                    </center>
                    <br>
                    <p><?php echo $lecture["dsc"]; ?></p>
                </div>
            </div>
        </div>
    </div>
<?php elseif($tab == 'project1' && $lecture) : ?>
    <div class="guest-lectures">
        <div class="col-sm-12">
            <div class="row jumbotron" style="padding:18px 0 5px 0px;margin:20px 0 0px 0px;">
                <div class="col-sm-12 middle-post" id="cont" style="text-align: justify;">
                    <h3><?php echo htmlspecialchars($lecture["title"]); ?></h3>
                    <center>
                        <img src='../assets/img<?php $lecture["pic"] ?>' class='img-responsive' alt=''>
                    </center>
                    <br>
                    <p><?php echo $lecture["dsc"]; ?></p>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php $conn->close(); ?>
