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
$sql = "SELECT * FROM `event` WHERE dept ='$department' AND sec ='$sec'";
$result = mysqli_query($conn, $sql);
?>


<div class="guest-lectures">
    <h2>Guest Lectures</h2>
    <ul class="lecture-list">
        <?php
            if ($result->num_rows > 0) {
            // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<li><a>" . $row["title"] . "</a></li>";
                }
            } else {
                echo "<li>No guest lectures found for the selected department and section.</li>";
            }
            $conn->close();
        ?>
        <!-- <li><a>Guest lecture on "'Technical Communication Skills" conducted on 4th February, 2021</li>
        <li><a>Guest lecture on "CS Graduate in IT Field" conducted on 28th January, 2021</li>
        <li><a>A guest lecture "Career Guidance Program" on 06-02-2020</li>
        <li><a>A guest lecture "Soft skills" on 04-01-2020</li>
        <li><a>A Guest lecture "Recent trends in Computer Science" on 05-10-2019</li>
        <li><a>A guest lecture "Employability Training programme" on 18-02-2019</li>
        <li><a>A guest lecture "Smart phone Zombie" on 30-01-2019</li>
        <li><a>A guest lecture "Importance of communication Skills" on 12-10-18</li>
        <li><a>A guest lecture "Bridging Gap between CS graduates and CS Professionals" on 12-03-2018</li>
        <li><a>A guest lecture "Career Opportunities in Computer Science" on 10-10-2017</li>
        <li><a>A guest lecture "Cloud computing" on 15-09-2017</li> -->
    </ul>
</div>
