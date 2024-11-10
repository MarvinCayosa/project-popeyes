<?php
// submit_form.php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $form_name = $_POST["form_name"];

    if ($form_name == "signin_form") {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Debugging outputs
        echo "<script>console.log('POST REQUEST: ')</script>";
        echo "<script>console.log('" . $email . "')</script>";
        echo "<script>console.log('" . $password . "')</script>";

        // Prepared statement to prevent SQL injection
        $stmt = $conn->prepare("SELECT * FROM students WHERE user = ? AND pass = ?");
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if any row matched the query
        if ($result->num_rows > 0) {
            echo "<script>console.log('User exists proceed to login')</script>";
            header("Location: home.html");

        } else {

            // alert message here
            // echo "<script>console.log('User does not exists, incorrect email or password')</script>";
            
            // echo "<script>alert('Email or Password does not match a user in the database')</script>";
            header("Location: index.php");
        }

        $stmt->close();
    }
}

// Close the database connection
$conn->close();
?>
