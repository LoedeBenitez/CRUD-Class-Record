
<?php
    session_start();
    require 'db.php';
?>

<div class="card shadow-lg" style="width: 25rem;">
    <div class="card-head d-flex justify-content-between p-3">        
        <h5 class="card-title">Archive Student</h5>
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

    echo "<div id='view_container' class='container d-flex flex-column align-items-start p-2'>

            <p>ID: $student_id</p>
            <p>Name: $firstname"." $lastname</p>
            <p>Section: $student_id</p>
            <p>Course: $course</p>
            <p>Email: $email</p>
            <p>Date Added: $date_added</p>
            <div>
                <button class='btn btn-primary' name='delete_student' onclick='confirm_deletion(this.value)' value='$student_id'>Confirm</button>
                <button class='btn btn-outline-danger' text-dark name='delete_student' onclick='close_btn()'>Cancel</button>
            </div>
            
            
        </div>        
    </div>
</div>";

?>


<?php
/*
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

    if ($query_run) {
        echo "<div class='container'><p class='alert bg-success'>Student Successfully Added!</p></div>";
        $_SESSION['message'] = "$firstname Archived Successfully!";
        header('Location: ' . $_SERVER['HTTP_REFERER']);

    } else {
        echo "Student failed";
        $_SESSION['message'] = 'Error in archiving student!';
        header('Location: ' . $_SERVER['HTTP_REFERER']);

    }


    //DELETING OF DATA IN THE MAIN TABLE
    $delete = "DELETE FROM class_record.students WHERE student_id = '$query';";
    $query_run_delete = mysqli_query($conn, $delete);
    if($query_run_delete){
        echo "archived successfully";
    }else{
        echo "failed";
    }


*/

?>
