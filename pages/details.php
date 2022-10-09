<?php
require 'db.php';

//FIRST PART OF THE TABLE WHERE DATA ISNT INFLUENCED
echo "<br> <div id='table_data' class='card container shadow-lg table-responsive'>
<table id='class_record_table' class='table border table-striped shadow-lg table-responsive'>
<thead>
    <tr>
        <th>ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Section</th>
        <th>Email</th>
        <th>Course</th>
        <th>Date Added</th>
        <th class='d-flex flex-row justify-content-around'>
                <button class='btn btn-primary d-flex justify-content-around' name ='add_student' value='insert' onclick='addStudent()'>
                    <i class='bi bi-person-plus-fill fs-6 m-2'></i>
                    <p id='add_student_text' class='m-2 text_small'>Add</p>
                </button>
                <button class='btn btn-warning d-flex justify-content-around' name ='archive_student' value='insert' onclick='archiveStudent()'>
                    <i class='bi bi-box-seam fs-6 m-2'></i>
                    <p id='add_student_text' class='m-2 text_small'>Archives</p>
                </button>
        </th>
    </tr>
</thead>";

//DISPLAYING OF TABLES BASED ON DATABASE
    $db_data = "SELECT * FROM class_record.students";
    $result = $conn->query($db_data);
        if($result->num_rows > 0){

            echo"<tbody>";
            //NEW LINE EVERY NEW DATA ENTRY
            while($row = $result -> fetch_assoc()){
                //INSIDE DATA DYNAMIC

                echo "<tr id='".$row['student_id']."' class='tablerow'>";
                echo "<td class='tabledata'>".$row['student_id']."</td>";
                echo "<td class='tabledata'>".$row['firstname']."</td>";
                echo "<td class='tabledata'>".$row['lastname']."</td>";
                echo "<td class='tabledata'>".$row['section']."</td>";
                echo "<td class='tabledata'>".$row['email']."</td>";
                echo "<td class='tabledata'>".$row['course']."</td>";
                echo "<td class='tabledata'>".$row['date_added']."</td>";
                echo "<td class='d-flex justify-content-end'>
                <button class='btn btn-primary m-1' onclick='viewStudent(this.value)' value='".$row['student_id']."'><i class='bi bi-eye text-light'></i></button>
                <button class='btn btn-success m-1' onclick='updateStudent(this.value)' value='".$row['student_id']."'><i class='bi bi-pencil text-light'></i></button>
                <button class='btn btn-danger m-1' onclick='deleteStudent(this.value)' value='".$row['student_id']."'><i class='bi bi-archive'></i></button>
                </td>";
                echo "</tr>";
            }

            //END OF TABLE
            echo "</tbody></table></div>";
        }else{
            echo "<strong><i class='bi bi-megaphone-fill m-2'></i>ALERT: </strong><p>The table is empty <strong>Add one</strong> now</p>";
        }

?>