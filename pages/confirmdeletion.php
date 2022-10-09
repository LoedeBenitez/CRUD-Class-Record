
<?php
    session_start();
    require 'db.php';
?>

<div class="card shadow-lg bg-success" style="width: 25rem;">
    <div class="card-head d-flex justify-content-between p-3">        
        <h5 class="card-title text-light">Student Successfully Archived</h5>
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

    
    //INSERT TO NEW ARCHIVE TABLE
    $insert = "INSERT INTO `class_record`.`students_archive` (`student_archive_id`, `student_archive_firstname`, `student_archive_lastname`, `student_archive_section`, `student_archive_email`, `student_archive_course`, `student_archive_date`) VALUES ('$student_id', '$firstname', '$lastname', '$section', '$email', '$course', '$date_added');";
        
    $query_run = mysqli_query($conn, $insert);

    //DELETING OF DATA IN THE MAIN TABLE
    $delete = "DELETE FROM class_record.students WHERE student_id = '$query';";
    $query_run_delete = mysqli_query($conn, $delete);
    
    if(!$query_run_delete || !$query_run){
        echo "<div class='container'><p class='alert bg-danger text-light'>Student Failed Archiving</p></div>";
    }

?>

