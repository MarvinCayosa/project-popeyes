<?php
session_start();

if (!isset($_SESSION['account_id'])) {
    // Redirect to login page if not logged in
    header("Location: index.php");
    exit();
}
$user_name = $_SESSION['name'];
$user_email = $_SESSION['email'];
$user_password = $_SESSION['password'];
$user_picture = $_SESSION['profile_picture'];
$user_role = $_SESSION['role'];
$capitalized_role = ucfirst(strtolower($user_role));
$user_id = $_SESSION['account_id'];

