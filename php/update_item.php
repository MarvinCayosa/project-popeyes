<?php
// Include the database connection
global $conn;
include 'config.php';

// Check if item_id is set
if (isset($_POST['item_id'])) {
    $itemId = $_POST['item_id'];

    // Sanitize the input data
    $itemName = $_POST['item_name'];
    $totalQuantity = $_POST['total_quantity'];
    $propertyType = $_POST['property_type'];
    $itemDescription = $_POST['item_description'];

    // Ensure itemId is a valid number
    if (!is_numeric($itemId)) {
        echo json_encode(["success" => false, "message" => "Invalid item ID."]);
        exit;
    }

    // Prepare and check if the item exists
    $query = "SELECT * FROM items WHERE item_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $itemId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Item exists, proceed to update
        $updateQuery = "UPDATE items SET item_name = ?, total_quantity = ?, consumability = ?, item_description = ? WHERE item_id = ?";
        $updateStmt = $conn->prepare($updateQuery);
        $updateStmt->bind_param("sisss", $itemName, $totalQuantity, $propertyType, $itemDescription, $itemId);

        // Execute the update query
        if ($updateStmt->execute()) {
            echo json_encode(["success" => true, "message" => "Item updated successfully."]);
        } else {
            echo json_encode(["success" => false, "message" => "Error updating item."]);
        }

        $updateStmt->close();
    } else {
        echo json_encode(["success" => false, "message" => "Item not found."]);
    }

    $stmt->close();
} else {
    echo json_encode(["success" => false, "message" => "No item ID provided."]);
}

$conn->close(); // Close the database connection

