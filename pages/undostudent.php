
<?php
    session_start();
    require 'db.php';
?>

<div class="card shadow-lg" style="width: 25rem;">
    <div class="card-head d-flex justify-content-between p-3">        
        <h5 class="card-title">Unarchive Student</h5>
        <i class="bi bi-x-circle" onclick="close_btn()"></i>
    </div>
    <div class="card-body pt-0">
        <hr>



<?php

    $query = $_GET['id'];

    $student_id = '';
    $firstname = '';
    $lastname = '';
    $section = '';
    $course = '';
    $email = '';
    $date_added = '';


    //SELECTING USER
    $select_user = "SELECT * FROM class_record.students_archive WHERE student_archive_id = '".$query."';";
    $result = mysqli_query($conn, $select_user);

    while($row = mysqli_fetch_array($result)){
        $student_id = $row['student_archive_id'];
        $firstname = $row['student_archive_firstname'];
        $lastname = $row['student_archive_lastname'];
        $section = $row['student_archive_section'];
        $course = $row['student_archive_course'];
        $email = $row['student_archive_email'];
        $date_added = $row['student_archive_date'];
    }

    echo "<div id='view_container' class='container d-flex flex-column align-items-start p-2'>

            <p>ID: $query</p>
            <p>Name: $firstname"." $lastname</p>
            <p>Section: $student_id</p>
            <p>Course: $course</p>
            <p>Email: $email</p>
            <p>Date Added: $date_added</p>
            <div>
                <button class='btn btn-primary' name='delete_student' onclick='confirm_undoStud(this.value)' value='$student_id'>Confirm</button>
                <button class='btn btn-outline-danger' text-dark name='delete_student' onclick='close_btn()'>Cancel</button>

            </div>
            
            
        </div>        
    </div>
</div>";

?>

