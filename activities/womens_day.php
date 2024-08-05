<?php include('../headerPages/header.php'); ?>

<style>
    /* .img-hover-container {
        overflow: hidden; 
    } */
    
    .img-hover {
        transition: transform 0.3s ease; 
        border-radius: 0.25rem; 
    }
    
    .img-hover:hover {
        transform: scale(1.1); 
    }
    .card-img-top {
        height: 400px;
        object-fit: cover;
    }

    /* .card-body {
        text-align: center;
    } */

</style>


<section>
    <h2 class="heading " style="width:50%; margin-left:25%;">Women's Day Celebration At MSPT</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm">
                    <img src="../assets/img/activities/womenday1.jpg" class="card-img-top img-hover" alt="Women's Day Image 1">
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm">
                    <img src="../assets/img/activities/womenday2.jpg" class="card-img-top img-hover" alt="Women's Day Image 2">
                    <!-- <div class="card-body">
                        <p class="card-text">Description or caption for the second image goes here.</p>
                    </div> -->
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm">
                    <img src="../assets/img/activities/womenday3.jpg" class="card-img-top img-hover" alt="Women's Day Image 3">
                    <!-- <div class="card-body">
                        <p class="card-text">Description or caption for the third image goes here.</p>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include('../headerPages/top_footer.php');
include('../headerPages/footer.php');
?>