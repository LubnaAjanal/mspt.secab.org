<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>card</title>
    <link rel="stylesheet" href="./Profile-card.css" />
    <script src="https://kit.fontawesome.com/66aa7c98b3.js" crossorigin="anonymous"></script>
    <style>
        .card {
            position: relative;
            width: 300px;
            height: 400px;
            background: #fff;
            border-radius: 10px;
            background: linear-gradient(#03a9f4, #03a9f4 45%, #fff 45%, #fff 100%);
            /* background: rgba(255, 255, 255, 0.1); */
            /* border-top: 1px solid rgba(255, 255, 255, 0.5); */
            backdrop-filter: blur(15px);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
            overflow: hidden;
        }

        .img-bx {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 10px;
            overflow: hidden;
            transform: translateY(30px) scale(0.5);
            transform-origin: top;
        }

        .img-bx img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .content {
            position: absolute;
            top: 60%;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            /* align-items: flex-direction; */
            padding-bottom: 2px;
        }

        .content .detail {
            display: inline-block;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            /* height:100%; */
        }

        .content .detail h2 {
            /* margin-top: 0; */
            color: #444;
            font-size: 18px;
            font-weight: bolder;
        }

        .content .detail h2 span {
            font-size: 16px;
            color: #03a9f4;
            font-weight: bold;
        }

        /* .sci {
            position: relative;
            display: flex;
            margin-top: 5px;
        }

        .sci li {
            list-style: none;
            margin: 4px;
        }

        .sci li a {
            width: 45px;
            height: 45px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            background: transparent;
            font-size: 1.5em;
            color: #444;
            text-decoration: none;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
            transition: 0.5s;
        }

        .sci li a:hover {
            background: #03a9f4;
            color: #fff;
        } */
    </style>
</head>
<?php include '../dbFiles/conn.php';

$department = isset($_GET['department']) ? $_GET['department'] : 'No Dept';

// Query to get the faculty details from the faculty table
$sql = "SELECT * FROM `nonteaching` WHERE dept ='$department' order by id";
// print_r($sql);
$result = mysqli_query($conn, $sql);
?>

<body>
    <div class="row">
        <?php if ($result && mysqli_num_rows($result) > 0) : ?>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <div class="col-md-4 mt-4">
                    <div class="card">
                        <div class="img-bx">
                            <img src="../assets/img/<?= $row['img'] ?>" alt="Faculty Image" />
                        </div>
                        <div class="content">
                            <div class="detail">
                                <h2><?= $row['name'] ?><br /><span><?= $row['designation'] ?></span></h2>
                                <h6><?= $row['qualification'] ?></h6>
                                <!-- <ul class="sci">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <p>No faculty members found for this department.</p>
        <?php endif; ?>
    </div>


</body>

</html>