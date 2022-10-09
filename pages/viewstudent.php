
<?php
    session_start();
    require 'db.php';
?>

<div class="card shadow-lg" style="width: 25rem;">
    <div class="card-head d-flex justify-content-between p-3">        
        <h5 class="card-title">View Student</h5>
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

    $select_user = "SELECT * FROM class_record.students WHERE student_id = '".$query."';";
    $result = mysqli_query($conn, $select_user);

    while($row = mysqli_fetch_array($result)){
        $student_id = $row['student_id'];
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $section = $row['section'];
        $course = $row['course'];
        $email = $row['email'];
        $date_added = $row['date_added'];
    }
    echo "<div id='view_container' class='container d-flex flex-column align-items-start p-3'>

            <p class='fw-bold m-0'>ID: ". "<p class='text-muted'>$student_id</p></p>
            <p class='fw-bold m-0'>First Name: ". "<p class='text-muted'>$firstname</p></p>
            <p class='fw-bold m-0'>Last Name: ". "<p class='text-muted'>$lastname</p></p>
            <p class='fw-bold m-0'>Section: ". "<p class='text-muted'>$section</p></p>
            <p class='fw-bold m-0'>Course: ". "<p class='text-muted'>$course</p></p>
            <p class='fw-bold m-0'>Email: ". "<p class='text-muted'>$email</p></p>
            <p class='fw-bold m-0 text-muted'>Date Added: ". "<p class='text-muted'>$date_added</p></p>
            <hr>

        </div>        
    </div>
</div>";

?>
