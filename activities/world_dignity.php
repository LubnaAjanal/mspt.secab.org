<?php include('../header.php'); ?>

<style>
    .environmental {
        text-align: center;
        margin-top: 20px;
    }

    .image-container {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin: 20px 0; /* Adds space around the image container */
    }

    .environmental img {
        max-width: 100%;
        height: auto;
        border-radius: 0.25rem;
        margin: 20px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .environmental img:hover {
        transform: scale(1.1); 
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); 
    }

    h4 {
        text-align: center;
        margin-top: 0;
        margin-bottom: 10px;
    }
</style>

<section>
    <h2 class="heading" style="width:50%; margin-left:25%;">World Dignity Day celebrated at MSPT</h2>
    <h4>Presided by Shree S.A Punekar, President SECAB Association.</h4>
    <div class="container">
        <div class="environmental">
            <div class="image-container">
                <img src="../assets/img/activities/dignity1.jpg" alt="Dignity Day Photo 1">
            </div>
            <div class="image-container">
                <img src="../assets/img/activities/dignity2.jpg" alt="Dignity Day Photo 2">
            </div>
        </div>
    </div>
</section>

<?php
include('../top_footer.php');
include('../footer.php');
?>
