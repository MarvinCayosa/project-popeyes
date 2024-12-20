<?php
// Include database connection
global $conn;
include 'config.php';  // Ensure that your database connection is correct

// Fetch all items from the database
$query = "SELECT * FROM items ORDER BY item_id DESC";  // Orders items by ID in descending order
$result = $conn->query($query);

// Check if there are any items
if ($result->num_rows > 0) {
    // Loop through each item and display it as a card
    while ($row = $result->fetch_assoc()) {
        // Get the item name and replace spaces with underscores to match the image filename
        $itemName = strtolower($row['item_name']);  // Convert to lowercase
        $imageFileName = str_replace(" ", "_", $itemName); // Replace spaces with underscores
        $imagePath = "../png/" . $imageFileName . ".png"; // Assuming images are stored in the 'images' folder

        // Check if the image file exists
        if (!file_exists($imagePath)) {
            $imagePath = "../png/arduino.png"; // If the specific image doesn't exist, use a default image
        }


        if (isset($imagePath) && isset($row)) {
            ?>

            <div class="card-container">
                <div class="card custom-spacing">
                    <div class="card-menu">
                        <button
                                class="btn card-menu-btn"
                                type="button"
                                data-bs-toggle="modal"
                                data-bs-target="#editModal"
                                data-item-id="<?php echo $row['item_id']; ?>"
                                data-item-name ="<?php echo $row['item_name']; ?>"
                                data-item-quantity = "<?php echo $row['total_quantity']; ?>"
                                data-item-date-added = "<?php echo $row['date_added']; ?>"
                                data-item-description = "<?php echo $row['item_description']; ?>"
                                data-item-consumability ="<?php echo $row['consumability']; ?>"
                                onclick="populateModal(this)"
                        >
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="20"
                                    height="20"
                                    fill="currentColor"
                                    class="bi bi-pencil-square"
                                    viewBox="0 0 16 16"
                                    style="position: absolute; top: 10px; right: 10px"
                            >
                                <path
                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"
                                ></path>
                                <path
                                        fill-rule="evenodd"
                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"
                                ></path>
                            </svg>
                        </button>
                    </div>
                    <img
                            src="<?php echo $imagePath; ?>"
                            class="card-img-top"
                            alt="<?php echo $row['item_name']; ?>"
                    />
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['item_name']; ?></h5>
                        <div class="available-text">
                            In stock:
                            <span
                                    class="available-number"
                                    id="available-stock"
                                    style="background-color: #d31111"
                            >
                        <?php echo $row['available_quantity']; ?>
                    </span>
                        </div>
                        <p
                                class="card-text d-flex justify-content-between align-items-center"
                        >
                            Total Stock:
                            <span
                                    class="stock-number"
                                    id="total-stock"
                            >
                        <?php echo $row['total_quantity']; ?>
                    </span>
                        </p>
                    </div>
                </div>
            </div>


            <?php
        } else {
            echo "<p>Error: Required data not available.</p>";
        }
    }
}
$conn->close();