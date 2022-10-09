<?php

    $server = "localhost";
    $username = "root";
    $password = "12345";
    $database = "class_record";
    $conn = new mysqli($server, $username, $password, $database);


    //CONNECTION OF DATABASE FROM WORKBENCH
    if($conn->connect_error){
        die("Connection failed ".mysqli_connect_error());
    }

?>