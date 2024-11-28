<?php
global $conn;
include 'config.php';  // Database connection

// Check if the 'id' parameter is passed
if (isset($_GET['itemId'])) {
    $itemId = $_GET['itemId'];


    // Fetch item data based on item_id
    $query = "SELECT * FROM items WHERE item_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $itemId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $item = $result->fetch_assoc();
        // Return the item data as JSON
        echo json_encode($item);
        header("location: home.php");
    } else {
        // If no item is found, return an error message
        echo json_encode(['error' => 'Item not found']);
    }

    $stmt->close();
} else {
    echo json_encode(['error' => 'No item ID provided']);
}

$conn->close();

