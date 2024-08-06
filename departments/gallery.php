<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lilita+One&display=swap');


        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            height: 100%;
            width: 100%;
        }

        #main {
            margin-top: 50px;
            height: 100%;
            width: 100%;
            font-family: 'Lilita One', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 30px;
        }

        #wrapper {
            height: 70vh;
            display: flex;
            border-radius: 10px;
            border: 3px solid black;
            padding: 20px 50px;
            justify-content: space-around;
            align-items: center;
            gap: 20px;

        }

        #wrapper i {
            font-size: 25px;
            pointer-events: none
        }

        #image-container {
            height: 100%;
            width: 50vw;
            overflow: hidden;
            padding: 0px 30px;

        }

        #image-carousel {
            display: flex;
            height: 100%;
            width: 100%;
            gap: 100px;
            position: relative;
        }

        #image-carousel img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            border-radius: 25px;
            position: absolute;
            transition: 1s;

            padding: 0px 15px;
        }

        button {


            cursor: pointer;
            padding: 10px;
            background-color: transparent;
            border-radius: 10px;
        }
    </style>
</head>

<?php include('../dbFiles/conn.php'); 
$dept = isset($_GET['department']) ? $_GET['department'] : 'No Dept';
?>

<body>
    <div id="main">
        <div id="wrapper">
            <div><button class="active" id="prev" onclick="prev()"><i class="fa-solid fa-arrow-left"></i></button></div>
            <div id="image-container">
                <?php if($dept == 'Computer Science') : ?>
                <div id="image-carousel">
                    <img src="../assets/img/Event/images/glr34.jpg" alt="">
                    <img src="../assets/img/Event/images/glr35.jpg" alt="">
                    <img src="../assets/img/Event/images/glr36.jpg" alt="">
                    <img src="../assets/img/Event/images/glr37.jpg" alt="">
                    <img src="../assets/img/Event/images/glr38.jpg" alt="">
                    <img src="../assets/img/Event/images/glr39.jpg" alt="">
                    <img src="../assets/img/Event/images/glr40.jpg" alt="">
                    <img src="../assets/img/Event/images/glr41.jpg" alt="">
                    <img src="../assets/img/Event/images/glr42.jpg" alt="">
                    <img src="../assets/img/Event/images/glr43.jpg" alt="">
                    <img src="../assets/img/Event/images/glr44.jpg" alt="">
                    <img src="../assets/img/Event/images/glr45.jpg" alt="">
                    <img src="../assets/img/Event/images/glr46.jpg" alt="">
                    <img src="../assets/img/Event/images/glr47.jpg" alt="">
                    <img src="../assets/img/Event/images/glr48.jpg" alt="">
                    <img src="../assets/img/Event/images/glr49.jpg" alt="">
                    <img src="../assets/img/Event/images/glr50.jpg" alt="">
                    <img src="../assets/img/Event/images/glr51.jpg" alt="">
                    <img src="../assets/img/Event/images/glr52.jpg" alt="">
                    <img src="../assets/img/Event/images/glr53.jpg" alt="">
                </div>
                <?php elseif($dept == 'Mechanical'): ?>
                    <div id="image-carousel">
                    <img src="../assets/img/Event/images/glr15.jpg" alt="">
                    <img src="../assets/img/Event/images/glr16.jpg" alt="">
                    <img src="../assets/img/Event/images/glr17.jpg" alt="">
                    <img src="../assets/img/Event/images/glr18.jpg" alt="">
                    <img src="../assets/img/Event/images/glr19.jpg" alt="">
                    <img src="../assets/img/Event/images/glr20.jpg" alt="">
                    <img src="../assets/img/Event/images/glr21.jpg" alt="">
                    <img src="../assets/img/Event/images/glr22.jpg" alt="">
                    <img src="../assets/img/Event/images/glr23.jpg" alt="">
                    <img src="../assets/img/Event/images/glr24.jpg" alt="">
                    <img src="../assets/img/Event/images/glr25.jpg" alt="">
                    <img src="../assets/img/Event/images/glr26.jpg" alt="">
                    <img src="../assets/img/Event/images/glr27.jpg" alt="">
                    <img src="../assets/img/Event/images/glr28.jpg" alt="">
                    <img src="../assets/img/Event/images/glr29.jpg" alt="">
                    <img src="../assets/img/Event/images/glr30.jpg" alt="">
                    <img src="../assets/img/Event/images/glr31.jpg" alt="">
                    <img src="../assets/img/Event/images/glr32.jpg" alt="">
                    <img src="../assets/img/Event/images/glr33.jpg" alt="">
                </div>
                <?php endif; ?>
            </div>
            <div><button class="active" id="next" onclick="next()"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
        </div>
    </div>

    <script>
        const wrapper = document.querySelector('#wrapper')
        const carousel = document.querySelector('#image-carousel')
        const images = document.querySelectorAll('img')
        const btn = document.querySelectorAll('button')
        const previous = document.querySelector('#prev')
        const nxt = document.querySelector('#next')


        images.forEach((slide, index) => {
            slide.style.left = `${index * 100}%`
        })
        let counter = 0;

        const slideImage = () => {
            images.forEach(
                (e) => {
                    e.style.transform = `translateX(-${counter*100}%)`
                }
            )
        }



        const prev = () => {
            if (counter > 0) {

                counter--;
                slideImage();
                console.log(counter);

            }
        }
        const next = () => {
            if (counter <= (images.length - 2)) {

                counter++;
                slideImage();
                console.log(counter);

            }
        }
    </script>
</body>

</html>