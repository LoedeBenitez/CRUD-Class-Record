
<?php
    session_start();
    require 'db.php';
?>

<div class="card shadow-lg bg-success" style="width: 25rem;">
    <div class="card-head d-flex justify-content-between p-3">        
        <h5 class="card-title text-light">Student Successfully Updated</h5>
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

    if($date_added == '' || $date_added==null){
            $today = date("Y-m-d H:i:s"); 
            $date_added = $today;
    }

    $update = "UPDATE `class_record`.`students` SET `firstname` = '$firstname', `lastname` = 'Wiki', `section` = 'ACEE', `email` = 'babayaga@gmail.com', `course` = 'BSITT' WHERE (`student_id` = '55');";

    // $update = "UPDATE `class_record`.`students` SET `firstname` = '$firstname', `lastname` = '$lastname', `section` = '$section', `email` = '$email', `course` = '$course', `date_added` = '$date_added' WHERE (`student_id` = '$student_id');";
        
    $query_run = mysqli_query($conn, $update);

    if($query_run){
        echo "<div class='container'><p class='alert bg-danger text-light'>$firstname $query $student_id". $_GET['firstname_stud'] ." </p></div>";
    }
    if(!$query_run) {
        echo "<div class='container'><p class='alert bg-danger text-light'>Student Failed Updating</p></div>";
    }

?>

