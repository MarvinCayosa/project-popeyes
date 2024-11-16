<?php
// Include database connection
global $conn;
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form inputs
    $itemName = $_POST['itemName'];
    $dateAdded = $_POST['dateAdded'];
    $totalQuantity = $_POST['totalQuantity'];
    $dateEdited = $_POST['dateEdited'];
    $availableQuantity = $_POST['availableQuantity'];

    // Prepare and bind statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO items (item_name, total_quantity, available_quantity, date_added, date_edited) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("siiss",$itemName, $totalQuantity, $availableQuantity, $dateAdded,  $dateEdited );

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>console.log('Successfully Added')</script>";
        header("Location: home.php");

    } else {
        echo "<script>console.log('Failed to Add')</script>" . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}

