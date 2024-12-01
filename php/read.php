<?php
global $conn;
include 'config.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $form_name = $_POST["form_name"];

    // Check if form name matches
    if ($form_name == "signin_form_2") {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $table = "accounts";
        $query = "SELECT * FROM $table WHERE email = ?";  // Only use email to find the user

        // Check if the database connection is working
        if (!$conn) {
            die("Database connection failed: " . mysqli_connect_error());
        }

        // Prepare and execute the statement
        $stmt = $conn->prepare($query);
        if (!$stmt) {
            die("Prepare failed: " . $conn->error);
        }

        $stmt->bind_param("s", $email);  // Bind the email parameter
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            // Fetch user data
            $user_data = $result->fetch_assoc();

            // Check if the password matches (plain text comparison)
            if ($password === $user_data['password']) {
                // Password is correct, set session variables
                $_SESSION['account_id'] = $user_data['account_id'];
                $_SESSION['name'] = $user_data['name'];
                $_SESSION['email'] = $user_data['email'];
                $_SESSION['password'] = $user_data['password'];
                $_SESSION['profile_picture'] = $user_data['picture'] ?? '../assets/profile_images/default.png'; // Default picture
                $_SESSION['role'] = $user_data['role'];

                // Redirect based on role
                if ($user_data['role'] === 'faculty') {
                    header("Location: home.php");  // Redirect to faculty homepage
                } else {
                    header("Location: stu_home.php");  // Redirect to student homepage
                }
                exit();
            } else {
                // Invalid password
                echo "<script>alert('Invalid password!');</script>";
                header("Location: ../index.php");
                exit();
            }
        } else {
            // Email not found
            echo "<script>alert('Email not found!');</script>";
            header("Location: ../index.php");
            exit();
        }

        $stmt->close();
    }
}

$conn->close();

