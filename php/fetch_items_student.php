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
                                data-bs-target="#addToListModal"
                                data-bs-toggle="tooltip" 
                                data-bs-title="Add to list"
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
                                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
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

