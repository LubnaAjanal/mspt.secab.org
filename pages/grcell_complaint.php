<?php include '../headerPages/header.php'; ?>

<style>
    .mycontainer {
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

    .hidden {
        display: none;
    }
</style>

<div class="container mycontainer">
    <h2>COMPLAINT FORM FOR GRIEVANCE</h2>
    <form id="complaintForm" method="post" action="../dbFiles/insert.php">
        <div class="row">
            <div class="col-md-6">
                <label for="name">Name:</label>
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
                <label for="role">Select Role:</label>
                <select id="role" name="role" required>
                    <option value="" disabled selected>Select Role</option>
                    <option value="student">Student</option>
                    <option value="staff">Staff</option>
                    <option value="stakeholder">Stakeholder</option>
                </select>
            </div>
        </div>

        <div id="studentFields" class="hidden">
            <div class="row">
                <div class="col-md-6">
                    <label for="usn">University Seat No:</label>
                    <input type="text" id="usn" name="usn" placeholder="Enter University Seat No">
                </div>
                <div class="col-md-6">
                    <label for="studentDescription">Description of the Complaint:</label>
                    <textarea id="studentDescription" name="description"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="studentDate">Date of Complaint:</label>
                    <input type="date" id="studentDate" name="date">
                </div>
            </div>
        </div>

        <div id="staffFields" class="hidden">
            <div class="row">
                <div class="col-md-6">
                    <label for="staffId">Staff ID:</label>
                    <input type="text" id="staffId" name="staffId" placeholder="Enter Staff ID">
                </div>

                <div class="col-md-6">
                    <label for="department">Name of the Department:</label>
                    <select id="department" name="department">
                        <option value="" disabled selected>Select Department</option>
                        <option>Basic Science</option>
                        <option>Civil Engineering</option>
                        <option>Computer Science and Engineering</option>
                        <option>Electrical and Electronics Engineering</option>
                        <option>Electronics and Communication Engineering</option>
                        <option>Mechanical Engineering</option>
                        <option>Apparel Design and Fabrication Technology</option>
                        <option>Commercial Practice</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="staffDescription">Description of the Complaint:</label>
                    <textarea id="staffDescription" name="description"></textarea>
                </div>

                <div class="col-md-6">
                    <label for="staffDate">Date of Complaint:</label>
                    <input type="date" id="staffDate" name="date">
                </div>
            </div>
        </div>

        <div id="stakeholderFields" class="hidden">
            <div class="row">
                <div class="col-md-6">
                    <label for="stakeholderDescription">Description of the Complaint:</label>
                    <textarea id="stakeholderDescription" name="description"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="stakeholderDate">Date of Complaint:</label>
                    <input type="date" id="stakeholderDate" name="date">
                </div>
            </div>
        </div>

        <button type="submit" class="btn" name="griev">Submit</button>
    </form>
</div>

<script>
    document.getElementById('role').addEventListener('change', function() {
        var studentFields = document.getElementById('studentFields');
        var staffFields = document.getElementById('staffFields');
        var stakeholderFields = document.getElementById('stakeholderFields');

        studentFields.classList.add('hidden');
        staffFields.classList.add('hidden');
        stakeholderFields.classList.add('hidden');

        if (this.value === 'student') {
            studentFields.classList.remove('hidden');
        } else if (this.value === 'staff') {
            staffFields.classList.remove('hidden');
        } else if (this.value === 'stakeholder') {
            stakeholderFields.classList.remove('hidden');
        }
    });
</script>