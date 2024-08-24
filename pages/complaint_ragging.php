<?php include '../headerPages/header.php'; ?>

<style>
    /* body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        } */

    .mycontainer {
        /* max-width: 600px; */
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        border-radius: 5px;
    }

    h2 {
        text-align: center;
        color: #333;
    }

    label {
        display: block;
        margin-top: 10px;
        color: #555;
    }

    input,
    textarea,
    select {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ddd;
        border-radius: 3px;
    }

    textarea {
        height: 100px;
    }

    .btn {
        display: block;
        width: 15%;
        padding: 10px;
        margin-top: 20px;
        margin-left: 40%;
        background-color: #0ea2bd;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 25px;
        font-weight: bold;
        text-align: center;
    }

    .btn:hover {
        background-color: #0ea2bd;
    }
</style>

<div class="container mycontainer">
    <h2>Ragging Complaint Form</h2>
    <form method="post" action="../dbFiles/insert.php">

        <div class="row">
            <div class="col-md-6">
                <label for="name">Name of the Student:</label>
                <input type="text" id="name" name="name" required placeholder="Enter Name Of Student">
            </div>

            <div class="col-md-6">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required placeholder="Enter Email">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label for="mobile">Mobile:</label>
                <input type="tel" id="mobile" name="mobile" required placeholder="Enter Mobile No">
            </div>

            <div class="col-md-6">
                <label for="course">Course being pursued:</label>
                <input type="text" id="course" name="course" required placeholder="Enter Course Pursued">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label for="usn">University seat no.:</label>
                <input type="text" id="usn" name="usn" required placeholder="Enter seat no">
            </div>

            <div class="col-md-6">
                <label for="department">Name of the department:</label>
                <select id="department" name="department" required>
                    <option value="" disabled selected>Select Department</option>
                    <!-- Add department options here -->
                     <option>Basic Science</option>
                     <option>Civil Engineering</option>
                    <option>Computer Science and Engineering</option>
                    <option>Electrical and Electronics Engineering</option>
                    <option>Electronics and Communication Engineering</option>
                    <option>Mechanical Engineering</option>
                    <option>Apparel Design and Fabrication technology</option>
                    <option>Commercial Practice</option>
                    <!-- More departments can be added here -->
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label for="incident">Description of the incident (in brief):</label>
                <textarea id="incident" name="incident" required placeholder="Enter Description"></textarea>
            </div>

            <div class="col-md-6">
                <label for="address">Postal Address:</label>
                <textarea id="address" name="address" required placeholder="Enter Postal Address"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label for="place">Place of incident:</label>
                <input type="text" id="place" name="place" required placeholder="Enter Place Name">
            </div>

            <div class="col-md-6">
                <label for="date">Date of incident:</label>
                <input type="date" id="date" name="date" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <label for="witness">Any witness of incident:</label>
                <input type="text" id="witness" name="witness" placeholder="Enter Any Witness of Incident">
            </div>
        </div>

        <button type="submit" class="btn" name="ragging">Submit</button>
    </form>
</div>