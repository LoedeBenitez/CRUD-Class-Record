
<?php
    session_start();
    require 'db.php';
?>

<div class="card shadow-lg bg-success" style="width: 25rem;">
    <div class="card-head d-flex justify-content-between p-3">        
        <h5 class="card-title text-light">Student Successfully Retrieved</h5>
        <i class="bi bi-x-circle text-light" onclick="close_btn()"></i>
    </div>
    <div class="card-body pt-0">
        <hr class="text-light">
    </div>  
</div>  

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

    //INSERT TO NEW ARCHIVE TABLE

    $insert = "INSERT INTO `class_record`.`students` (`student_id`, `firstname`, `lastname`, `section`, `email`, `course`, `date_added`) VALUES ('$student_id', '$firstname', '$lastname', '$section', '$email', '$course', '$date_added');";


    $query_run = mysqli_query($conn, $insert);

    // DELETING OF DATA IN THE MAIN TABLE
    $delete = "DELETE FROM class_record.students_archive WHERE student_archive_id = '$query';";
    $query_run_delete = mysqli_query($conn, $delete);
    
    if(!$query_run_delete || !$query_run){
        echo "<div class='container'><p class='alert bg-danger text-light'>Student Failed Archiving</p></div>";
    }

?>

