<?php
// Include database connection
global $conn;
include 'config.php';

// Query to get the count of messages (adjust if filtering by unread messages)
$query = "SELECT COUNT(*) AS inbox_count FROM inbox WHERE student_status = 'Pending'";
$result = $conn->query($query);

if ($result) {
    $row = $result->fetch_assoc();
    // Output just the count (no extra HTML or script tags)
    echo $row['inbox_count'];
} else {
    // In case of error, return 0
    echo "0";
}

$conn->close();
