<?php

global $conn;
include 'config.php'; // Ensure database connection is correct

// Check if a filter is set via GET (e.g., ?status=pending)
$filter = isset($_GET['status']) ? strtolower($_GET['status']) : 'all';

// Build the SQL query
if ($filter === 'all') {
    $query = "SELECT * FROM inbox ORDER BY student_id DESC";
} else {
    $query = "SELECT * FROM inbox WHERE LOWER(student_status) = '$filter' ORDER BY student_id DESC";
}

$result = $conn->query($query);

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $status_class = '';
        $status_text = '';

        // Normalize status to lowercase
        $status = strtolower($row['student_status']);

        // Determine the status class and text
        switch ($status) {
            case 'approved':
                $status_class = 'status-approved';
                $status_text = 'Approved';
                break;
            case 'rejected':
                $status_class = 'status-rejected';
                $status_text = 'Rejected';
                break;
            case 'pending':
                $status_class = 'status-pending';
                $status_text = 'Pending';
                break;
            default:
                $status_class = 'status-unknown';
                $status_text = 'Unknown';
                break;
        }

        ?>
        <div class="inbox-item d-flex flex-row" data-status="<?php echo $status; ?>">
            <div class="student_pic"></div>
            <div class="inbox-student-name">
                <h5
                        class="student-link"
                        data-bs-toggle="modal"
                        data-bs-target="#studentModal"
                        data-name="<?php echo htmlspecialchars($row['student_name']); ?>"
                        data-status="<?php echo htmlspecialchars($row['student_status']); ?>"
                        data-date="<?php echo htmlspecialchars($row['request_date']); ?>"
                >
                    <?php echo htmlspecialchars($row['student_name']); ?>
                </h5>
            </div>
            <div class="inbox-status-circle <?php echo $status_class; ?>"></div>
            <div class="inbox-status"><?php echo $status_text; ?></div>
            <div class="inbox-date"><?php echo date('M. d, Y', strtotime($row['request_date'])); ?></div>
        </div>
        <?php
    }
} else {
    echo "<p>No records found for the selected filter.</p>";
}

$conn->close();

