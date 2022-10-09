<?php
    session_start();
    require 'db.php';
?>

<?php
    if(isset($_POST['submit_student'])){
        $firstname = mysqli_real_escape_string($conn, $_POST['firstname_stud']);
        $lastname = mysqli_real_escape_string($conn, $_POST['lastname_stud']);
        $section = mysqli_real_escape_string($conn, $_POST['section_stud']);
        $course = mysqli_real_escape_string($conn, $_POST['course_stud']);
        $email = mysqli_real_escape_string($conn, $_POST['email_stud']);
        
        if(empty($_POST['date_added_stud'])){
            $today = date("Y-m-d H:i:s"); 
            $date_added = $today;
        }else{
            $date_added = mysqli_real_escape_string($conn, $_POST['date_added_stud']);
        }
        

        $insert = "INSERT INTO students (firstname, lastname, section, email, course, date_added) VALUES('$firstname','$lastname','$section','$email','$course','$date_added');";
        
        $query_run = mysqli_query($conn, $insert);

        if ($query_run) {
            echo "<div class='container'><p class='alert bg-success'>Student Successfully Added!</p></div>";
            $_SESSION['message'] = "$firstname Created Successfully!";
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit(0);
        } else {
            echo "Student failed";
            $_SESSION['message'] = 'Error in creating student!';
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit(0);
        }
    }
?>

<?php

    if(isset($_POST['update_student'])){
        
        $studentID = mysqli_real_escape_string($conn, $_POST['studentID']);
        $firstname = mysqli_real_escape_string($conn, $_POST['firstname_stud']);
        $lastname = mysqli_real_escape_string($conn, $_POST['lastname_stud']);
        $section = mysqli_real_escape_string($conn, $_POST['section_stud']);
        $course = mysqli_real_escape_string($conn, $_POST['course_stud']);
        $email = mysqli_real_escape_string($conn, $_POST['email_stud']);
        
        if(empty($_POST['date_added_stud'])){
            $today = date("Y-m-d H:i:s"); 
            $date_added = $today;
        }else{
            $date_added = mysqli_real_escape_string($conn, $_POST['date_added_stud']);
        }


        $update = "UPDATE `class_record`.`students` SET `firstname` = '$firstname', `lastname` = '$lastname', `section` = '$section', `email` = '$email', `course` = '$course', `date_added` = '$date_added' WHERE (`student_id` = '$studentID');";
        
        $query_run = mysqli_query($conn, $update);

        if ($query_run) {
            echo "<div class='container'><p class='alert bg-success'>Student Successfully Added!</p></div>";
            $_SESSION['message'] = "$firstname Updated Successfully!";
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit(0);
        } else {
            echo "Student failed";
            $_SESSION['message'] = 'Error in updating student!';
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit(0);
        }
    }

?>

