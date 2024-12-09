<?php

global $conn;
include 'config.php';

if (isset($_GET['itemId'])) {
    $itemId = $_GET['itemId'];

    // Check if the item exists
    $query = "SELECT * FROM items WHERE item_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $itemId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Item exists, proceed to delete
        $deleteQuery = "DELETE FROM items WHERE item_id = ?";
        $deleteStmt = $conn->prepare($deleteQuery);
        $deleteStmt->bind_param("i", $itemId);

        if ($deleteStmt->execute()) {
            echo "success"; // Respond with success
        } else {
            echo "error: Unable to delete item.";
        }

        $deleteStmt->close();
    } else {
        echo "error: Item not found.";
    }

    $stmt->close();
} else {
    echo "error: No item ID provided.";
}

$conn->close();

