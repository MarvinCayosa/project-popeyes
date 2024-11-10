<?php
    $servername = "localhost";
    $username = "root";
    $password = ""; // Default password is empty for XAMPP
    $dbname = "uenventory_local";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        echo "db fail";
        die("Connection failed: " . $conn->connect_error);
    }else{
        echo "<script>console.log('Connected Successfully')</script>";
    }
?>