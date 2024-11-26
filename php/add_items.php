<?php
// Include database connection
global $conn;
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $itemName = $_POST['itemName'];
    $totalQuantity = $_POST['totalQuantity'];
    $availableQuantity = $totalQuantity;
    date_default_timezone_set('Asia/Singapore');
    $dateAdded = $_POST['dateAdded'] ?? date('Y-m-d');
    $consumability = $_POST['consumability'];
    $item_description = $_POST['itemDescription'];


    // Prepare and bind statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO items (item_name, total_quantity, available_quantity, date_added, consumability, item_description) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("siisss", $itemName, $totalQuantity, $availableQuantity, $dateAdded, $consumability, $item_description);

    // Execute the statement
    if ($stmt->execute()) {
        // Retrieve the last inserted ID (auto-increment ID)
        $lastInsertId = $conn->insert_id;

        // Fetch the recently added item details using the last inserted ID
        $fetchStmt = $conn->prepare("SELECT * FROM items WHERE item_id = ?");
        $fetchStmt->bind_param("i", $lastInsertId);
        $fetchStmt->execute();
        $result = $fetchStmt->get_result();

        // Fetch the added item's data
        if ($row = $result->fetch_assoc()) {
            // Output the added item's data in a card format
            echo "<div class='card custom-spacing'>";
            echo "<div class='card-menu'>
                    <button class='btn card-menu-btn' type='button' data-bs-toggle='modal' data-bs-target='#editModal'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16' style='position: absolute; top: 10px; right: 10px'>
                            <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                            <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z'/>
                        </svg>
                    </button>
                  </div>";
            echo "<img src='../png/arduino.png' class='card-img-top' alt='...' />";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>" . $row['item_name'] . "</h5>";
            echo "<div class='available-text'>
                    In stock:
                    <span class='available-number' style='background-color: #d31111' id='available-stock'>" . $row['available_quantity'] . "</span>
                  </div>";
            echo "<p class='card-text d-flex justify-content-between align-items-center'>
                    Total Stock: 
                    <span class='stock-number' id='total-stock'>" . $row['total_quantity'] . "</span>
                  </p>";
            echo "</div>";
            echo "</div>";
            header("Location: home.php");
        }

        $fetchStmt->close();
    } else {
        echo "<script>console.log('Failed to Add')</script>" . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
