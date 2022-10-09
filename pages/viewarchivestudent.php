<?php
    session_start();
    require 'db.php';



    $db_data = "SELECT * FROM class_record.students_archive";
        $result = $conn->query($db_data);
            if($result->num_rows > 0){
                //FIRST PART OF THE TABLE WHERE DATA ISNT INFLUENCED
                echo "
                <table id='class_record_table' class='table border table-striped shadow-lg table-responsive archive_none_msg'>
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
                                <input id='archive_search' class='rounded' type = 'text' placeholder='search'>
                                <button class='btn text-primary' onclick='backToTable()'>Back</button>
                        </th>
                    </tr>
                </thead>";
                echo "<tbody>";
                //NEW LINE EVERY NEW DATA ENTRY
                while($row = $result -> fetch_assoc()){
                    //INSIDE DATA DYNAMIC

                    echo "<tr id='".$row['student_archive_id']."' class='tablerow'>";
                    echo "<td class='tabledata'>".$row['student_archive_id']."</td>";
                    echo "<td class='tabledata'>".$row['student_archive_firstname']."</td>";
                    echo "<td class='tabledata'>".$row['student_archive_lastname']."</td>";
                    echo "<td class='tabledata'>".$row['student_archive_section']."</td>";
                    echo "<td class='tabledata'>".$row['student_archive_email']."</td>";
                    echo "<td class='tabledata'>".$row['student_archive_course']."</td>";
                    echo "<td class='tabledata'>".$row['student_archive_date']."</td>";
                    echo "<td class='d-flex justify-content-end'>
                    
                    <button class='btn btn-warning m-1' onclick='undoStudent(this.value)' value='".$row['student_archive_id']."'><i class='bi bi-arrow-counterclockwise text-dark'></i> undo</button>
                    </td>";
                    echo "</tr>";
                }

                //END OF TABLE
                echo "</tbody></table></div>";

            }else{
                echo "<div id='archive_none_msg' class='archive_none_msg'><br><strong><i class='bi bi-megaphone-fill m-2'></i>ALERT: </strong><p>The table is empty</p><br><button class='btn text-primary' onclick='backToTable()'>Go back to class table</button></div>";
            }


?>