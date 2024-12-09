<?php
global $conn;
include 'config.php'; // Ensure database connection is correct

// Check if a filter is set via GET (e.g., ?status=pending)
$filter = isset($_GET['status']) ? strtolower($_GET['status']) : 'all';

// Build the SQL query
if ($filter === 'all') {
    $query = "SELECT * FROM inbox WHERE LOWER(student_status) = 'pending';
";
} else {
    $query = "SELECT * FROM inbox WHERE LOWER(student_status) = 'pending';
";
}

$result = $conn->query($query);

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $status_class = '';
        $status_text = '';

        // Normalize status to lowercase
        $status = strtolower($row['student_status']);

        // Determine the status class and text
        if ($status === 'pending') {
            $status_class = 'status-pending';
            $status_text = 'Pending';
        }

        $formatted_date = date("F j, Y", strtotime($row['request_date']));

        ?>
        <div class="student-container">
            <div class="student_pic"></div>
            <div class="vertical-layout">
                <p class="student-name"><?php echo htmlspecialchars($row['student_name']); ?></p>
                <p class="request-date"><?php echo htmlspecialchars($formatted_date); ?></p>
            </div>
        </div>
        <?php
    }
} else {
    echo "<p>No records found for the selected filter.</p>";
}

$conn->close();
?>
