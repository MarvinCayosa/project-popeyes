<?php

global $conn;
include 'config.php';
include 'fetch_items.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the item_id from the POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $item_id = $_POST['item_id'] ?? null;

    if ($item_id) {
        // Prepare the delete query
        $stmt = $conn->prepare("DELETE FROM items WHERE item_id = ?");
        $stmt->bind_param("i", $item_id);

        if ($stmt->execute()) {
            header('Location: home.php');
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "No item ID provided.";
    }
}

$conn->close();
