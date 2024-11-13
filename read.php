<?php
global $conn;
include 'config.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $form_name = $_POST["form_name"];

    if ($form_name == "signin_form") {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user_type = $_POST['user_type'];

        $table = $user_type === 'faculty' ? 'faculty' : 'students';
        $query = "SELECT * FROM $table WHERE email = ? AND password = ?";

        // Check the connection first
        if (!$conn) {
            die("Database connection failed: " . mysqli_connect_error());
        }

        // Prepare the statement
        $stmt = $conn->prepare($query);
        if (!$stmt) {
            die("Prepare failed: " . $conn->error);
        }

        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            // Successful login
            header("Location: home.html");
            exit();
        } else {
            // Failed login
            header("Location: index.php?error=invalid_credentials");
            exit();
        }

        $stmt->close();
    }
}

$conn->close();

