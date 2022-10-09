
<?php
    session_start();
    require 'db.php';
?>

<div class="card shadow-lg" style="width: 25rem;">
    <div class="card-head d-flex justify-content-between p-3">        
        <h5 class="card-title">Add Student</h5>
        <i class="bi bi-x-circle" onclick="close_btn()"></i>
    </div>
    <div class="card-body pt-0">
        <hr>
        <form action ="/pages/submitstudent.php" method="POST">
            <div class="input-group mb-3">
                <span class="input-group-text" id="firstname">Firstname</span>
                <input type="text" name="firstname_stud" class="form-control" REQUIRED>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="lastname">Lastname</span>
                <input type="text" name="lastname_stud" class="form-control" REQUIRED>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="section">Section</span>
                <input type="text" name="section_stud" class="form-control" REQUIRED>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="email">Email</span>
                <input type="email" name="email_stud" class="form-control" REQUIRED>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="course">Course</span>
                <input type="text" name="course_stud" class="form-control" REQUIRED>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="date_added">Date Added</span>
                <input type="datetime-local" name="date_added_stud" class="form-control">
            </div>

            <!-- <button class="btn btn-primary" name="submit_student" onclick="submitStudent()">Submit Student</button> -->
            <button class="btn btn-primary" name="submit_student">Submit Student</button>
        </form>
    </div>
</div>

