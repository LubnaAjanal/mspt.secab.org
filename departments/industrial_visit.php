<style>
.guest-lectures {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
    margin-bottom: 20px;
}

.guest-lectures h2 {
    background-color: #0ea2bd;
    color: #fff;
    padding: 15px;
    font-size: 23px;
    margin-bottom: 15px;
    text-align: center;
}

.lecture-list {
    list-style-type: none;
    padding: 0;
}

.lecture-list li {
    box-shadow: 0 6px 8px rgba(0, 0, 0, 0.3);
    height: 60px;
    font-size: 16px;
    line-height: 1.6;
    color: #333;
    padding: 15px;
    position: relative;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    margin-bottom: 10px;
    border-radius: 5px;
}

.lecture-list li:hover {
    transform: scale(1.02);
    box-shadow: 0 6px 8px rgba(0, 0, 0, 0.6);
    background-color: #fff;
}
</style>

<?php
include('../dbFiles/conn.php');
$department = isset($_GET['department']) ? $_GET['department'] : 'No Dept';
$sec = isset($_GET['sec']) ? $_GET['sec'] : 'No sec';


// Query to get the guest lectures from the event table
$sql = "SELECT * FROM `event` WHERE dept ='$department' AND sec ='$sec' order by sdat DESC";
// print_r($sql);
$result = mysqli_query($conn, $sql);
?>


<div class="guest-lectures">
    <h2>Industrial Visit</h2>
    <ul class="lecture-list">
        <?php
            if ($result->num_rows > 0) {
            // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<li><i class='bi bi-check-circle-fill' style='font-size:20px;color:#0ea2bd; margin-right:8px;'></i><a>" . $row["title"] . "</a></li>";
                }
            } else {
                echo "<li><i class='bi bi-check-circle-fill' style='font-size:20px;color:#0ea2bd; margin-right:8px;'></i>No guest lectures found for the selected department and section.</li>";
            }
            $conn->close();
        ?>
    </ul>
</div>
