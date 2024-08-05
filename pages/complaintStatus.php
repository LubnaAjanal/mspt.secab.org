<?php include('../headerPages/header.php'); ?>
<style>
    .card-center {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .card{
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
    }

    .card-header {
        background-color: #0ea2bd;
    }
    .card-header h3{
        color: white;
    }
</style>

<!-- <main class="main"> -->
    <section>
        <div class="container card-center">
            <div class="card" style="width: 30rem; height:15rem;">
                <div class="card-header text-center">
                    <h3>Complaint Status</h3>
                </div>
                <div class="card-body mt-3">
                    <form>
                        <div class="form-group">
                            <label for="usn" class="mb-2">Enter Your ID</label>
                            <input type="text" class="form-control" id="cid" placeholder="Enter your ID">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mt-3 float-end">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

<!-- </main> -->


<?php
include('../headerPages/top_footer.php');
include('../headerPages/footer.php');
?>