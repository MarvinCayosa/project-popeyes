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
                                class="add-btn-svg"
                                width="30"
                                height="30"
                                viewBox="0 0 70 70"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                style="position: absolute; top: 10px; right: 10px"
                                    >
                                        <path
                                            d="M34.823 10.8038C30.0724 10.8038 25.4286 12.2125 21.4787 14.8518C17.5287 17.491 14.4501 21.2423 12.6322 25.6312C10.8142 30.0202 10.3386 34.8496 11.2654 39.5089C12.1921 44.1681 14.4797 48.4479 17.8389 51.8071C21.198 55.1662 25.4778 57.4538 30.1371 58.3806C34.7963 59.3074 39.6258 58.8317 44.0147 57.0137C48.4036 55.1958 52.1549 52.1172 54.7941 48.1673C57.4334 44.2174 58.8421 39.5735 58.8421 34.823C58.8421 31.6687 58.2208 28.5454 57.0138 25.6312C55.8067 22.7171 54.0374 20.0693 51.8071 17.8389C49.5767 15.6085 46.9288 13.8393 44.0147 12.6322C41.1006 11.4251 37.9772 10.8038 34.823 10.8038ZM34.823 54.0383C31.0225 54.0383 27.3075 52.9113 24.1475 50.7999C20.9876 48.6885 18.5247 45.6875 17.0703 42.1763C15.616 38.6652 15.2355 34.8016 15.9769 31.0742C16.7183 27.3468 18.5484 23.923 21.2357 21.2357C23.923 18.5484 27.3469 16.7183 31.0743 15.9769C34.8017 15.2354 38.6652 15.616 42.1764 17.0703C45.6875 18.5247 48.6885 20.9876 50.7999 24.1475C52.9113 27.3075 54.0383 31.0225 54.0383 34.823C54.0383 39.9192 52.0138 44.8067 48.4102 48.4102C44.8067 52.0138 39.9192 54.0383 34.823 54.0383ZM44.4306 32.421H37.2249V25.2153C37.2249 24.5783 36.9718 23.9673 36.5214 23.5169C36.0709 23.0665 35.46 22.8134 34.823 22.8134C34.1859 22.8134 33.575 23.0665 33.1246 23.5169C32.6741 23.9673 32.4211 24.5783 32.4211 25.2153V32.421H25.2153C24.5783 32.421 23.9674 32.6741 23.5169 33.1246C23.0665 33.575 22.8134 34.1859 22.8134 34.823C22.8134 35.46 23.0665 36.0709 23.5169 36.5214C23.9674 36.9718 24.5783 37.2249 25.2153 37.2249H32.4211V44.4306C32.4211 45.0676 32.6741 45.6786 33.1246 46.129C33.575 46.5795 34.1859 46.8325 34.823 46.8325C35.46 46.8325 36.0709 46.5795 36.5214 46.129C36.9718 45.6786 37.2249 45.0676 37.2249 44.4306V37.2249H44.4306C45.0677 37.2249 45.6786 36.9718 46.129 36.5214C46.5795 36.0709 46.8325 35.46 46.8325 34.823C46.8325 34.1859 46.5795 33.575 46.129 33.1246C45.6786 32.6741 45.0677 32.421 44.4306 32.421Z"
                                            fill="white"
                                        />
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

