<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <meta name="theme-color" content="#C00411" />
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"
    ></script>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../css/stu_home_styles.css" />
    <link rel="stylesheet" href="../css/scrollbar.css" />
    <link rel="stylesheet" href="../css/student_sidebar.css">
</head>
<body>

<?php include 'config.php'; ?>


<div class="frame_1">
    <div class="d-flex">
        <?php include 'student_sidebar.php'; ?>

        <div class="main_body flex-grow-1">
            <nav class="navbar-main navbar">
                <div class="container-nav container-fluid">
                    <a class="navbar-brand" href="#">
                        <svg class="logo logo-light">
                            <use xlink:href="../SVG/Asset_1.svg#Layer_2"></use>
                        </svg>
                        <svg class="logo logo-dark">
                            <use xlink:href="../SVG/Asset 2.svg#Layer_2"></use>
                        </svg>
                    </a>

                    <form 
                    class="search-form d-flex search-container" 
                    role="search" 
                    id="searchForm">
                        <input 
                        class="search-bar form-control me-2" 
                        type="search" 
                        placeholder="Search" 
                        aria-label="Search"
                        id="searchInput" 
                        />
                            <button class="search-btn" type="submit">
                                <svg class="icon icon-search" fill="currentColor">
                                <use xlink:href="icons.svg#icon-search"></use>
                                </svg>
                            </button>
                    </form>
                </div>
            </nav>

            <section class="inventory-section">
                <div class="inventory-container">
                    <h4 class="inventory-text">Inventory</h4>
                    <button class="btn filter-btn" type="button" id="filterDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path
                                    d="M19 2H5C4.20435 2 3.44129 2.31607 2.87868 2.87868C2.31607 3.44129 2 4.20435 2 5V6.17C1.99986 6.58294 2.08497 6.99147 2.25 7.37V7.43C2.39128 7.75097 2.59139 8.04266 2.84 8.29L9 14.41V21C8.99966 21.1699 9.04264 21.3372 9.12487 21.4859C9.20711 21.6346 9.32589 21.7599 9.47 21.85C9.62914 21.9486 9.81277 22.0006 10 22C10.1565 21.9991 10.3107 21.9614 10.45 21.89L14.45 19.89C14.6149 19.8069 14.7536 19.6798 14.8507 19.5227C14.9478 19.3656 14.9994 19.1847 15 19V14.41L21.12 8.29C21.3686 8.04266 21.5687 7.75097 21.71 7.43V7.37C21.8888 6.99443 21.9876 6.58578 22 6.17V5C22 4.20435 21.6839 3.44129 21.1213 2.87868C20.5587 2.31607 19.7956 2 19 2ZM13.29 13.29C13.1973 13.3834 13.124 13.4943 13.0742 13.6161C13.0245 13.7379 12.9992 13.8684 13 14V18.38L11 19.38V14C11.0008 13.8684 10.9755 13.7379 10.9258 13.6161C10.876 13.4943 10.8027 13.3834 10.71 13.29L5.41 8H18.59L13.29 13.29ZM20 6H4V5C4 4.73478 4.10536 4.48043 4.29289 4.29289C4.48043 4.10536 4.73478 4 5 4H19C19.2652 4 19.5196 4.10536 19.7071 4.29289C19.8946 4.48043 20 4.73478 20 5V6Z" />
                        </svg>
                        <span class="filter-text">Filter</span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="filterDropdown"  data-bs-auto-close="outside">
                        <!-- Name Filter -->
                        <li>
                            <div class="filter-header">
                                <div class="filter-category">Name</div>
                                <button 
                                    class="clear-filters-btn" 
                                    title="Clear filters" 
                                    aria-label="Clear filters">
                                        <svg class="icon-reset" fill="currentColor">
                                            <use xlink:href="icons.svg#icon-filter-clear"></use>
                                        </svg>
                                </button>
                            </div>
                            <div class="form-check filter-text">
                                <input 
                                    class="form-check-input" 
                                    type="radio" 
                                    name="nameFilter" 
                                    id="filterNameAsc" 
                                    value="asc">
                                        <label class="form-check-label" for="filterNameAsc">Ascending</label>
                            </div>
                            <div class="form-check filter-text">
                                    <input 
                                    class="form-check-input" 
                                    type="radio" name="nameFilter" 
                                    id="filterNameDesc" 
                                    value="desc">
                                        <label class="form-check-label" for="filterNameDesc">Descending</label>
                            </div>
                        </li>
                        <hr class="filter-separator">
                        <!-- Quantity Filter -->
                        <li>
                            <div class="filter-header">
                                <div class="filter-category">Quantity</div>
                            </div>
                            <div class="form-check filter-text">
                                <input class="form-check-input" type="radio" name="quantityFilter" id="filterLowStock" value="lowStock">
                                <label class="form-check-label" for="filterLowStock">Low Stock</label>
                            </div>
                            <div class="form-check filter-text">
                                <input class="form-check-input" type="radio" name="quantityFilter" id="filterHighStock" value="highStock">
                                <label class="form-check-label" for="filterHighStock">High Stock</label>
                            </div>
                            <div class="form-check filter-text">
                                <input class="form-check-input" type="radio" name="quantityFilter" id="filterOutOfStock" value="outOfStock">
                                <label class="form-check-label" for="filterOutOfStock">Out of Stock</label>
                            </div>
                        </li>
                        <hr class="filter-separator">
                        <!-- Property Filter -->
                        <li>
                            <div class="filter-header">
                                <div class="filter-category">Property</div>
                            </div>
                            <div class="form-check filter-text">
                                <input class="form-check-input" type="radio" name="propertyFilter" id="filterConsumable" value="consumable">
                                <label class="form-check-label" for="filterConsumable">Consumable</label>
                            </div>
                            <div class="form-check filter-text">
                                <input class="form-check-input" type="radio" name="propertyFilter" id="filterNonConsumable" value="nonConsumable">
                                <label class="form-check-label" for="filterNonConsumable">Non-Consumable</label>
                            </div>
                        </li>
                    </ul>


                </div>
            </section>

            <section class="scrollable-section">
                <div>
                    <button
                        class="btn add-btn"
                        type="button"
                        data-bs-toggle="modal"
                        data-bs-target="#reviewItemsModal"
                    >
                        <svg
                            class="add-btn-svg"
                            width="50"
                            height="50"
                            viewBox="0 0 70 70"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <rect width="70" height="70" rx="20" fill="#C00411" />
                            <path
                                d="M34.823 10.8038C30.0724 10.8038 25.4286 12.2125 21.4787 14.8518C17.5287 17.491 14.4501 21.2423 12.6322 25.6312C10.8142 30.0202 10.3386 34.8496 11.2654 39.5089C12.1921 44.1681 14.4797 48.4479 17.8389 51.8071C21.198 55.1662 25.4778 57.4538 30.1371 58.3806C34.7963 59.3074 39.6258 58.8317 44.0147 57.0137C48.4036 55.1958 52.1549 52.1172 54.7941 48.1673C57.4334 44.2174 58.8421 39.5735 58.8421 34.823C58.8421 31.6687 58.2208 28.5454 57.0138 25.6312C55.8067 22.7171 54.0374 20.0693 51.8071 17.8389C49.5767 15.6085 46.9288 13.8393 44.0147 12.6322C41.1006 11.4251 37.9772 10.8038 34.823 10.8038ZM34.823 54.0383C31.0225 54.0383 27.3075 52.9113 24.1475 50.7999C20.9876 48.6885 18.5247 45.6875 17.0703 42.1763C15.616 38.6652 15.2355 34.8016 15.9769 31.0742C16.7183 27.3468 18.5484 23.923 21.2357 21.2357C23.923 18.5484 27.3469 16.7183 31.0743 15.9769C34.8017 15.2354 38.6652 15.616 42.1764 17.0703C45.6875 18.5247 48.6885 20.9876 50.7999 24.1475C52.9113 27.3075 54.0383 31.0225 54.0383 34.823C54.0383 39.9192 52.0138 44.8067 48.4102 48.4102C44.8067 52.0138 39.9192 54.0383 34.823 54.0383ZM44.4306 32.421H37.2249V25.2153C37.2249 24.5783 36.9718 23.9673 36.5214 23.5169C36.0709 23.0665 35.46 22.8134 34.823 22.8134C34.1859 22.8134 33.575 23.0665 33.1246 23.5169C32.6741 23.9673 32.4211 24.5783 32.4211 25.2153V32.421H25.2153C24.5783 32.421 23.9674 32.6741 23.5169 33.1246C23.0665 33.575 22.8134 34.1859 22.8134 34.823C22.8134 35.46 23.0665 36.0709 23.5169 36.5214C23.9674 36.9718 24.5783 37.2249 25.2153 37.2249H32.4211V44.4306C32.4211 45.0676 32.6741 45.6786 33.1246 46.129C33.575 46.5795 34.1859 46.8325 34.823 46.8325C35.46 46.8325 36.0709 46.5795 36.5214 46.129C36.9718 45.6786 37.2249 45.0676 37.2249 44.4306V37.2249H44.4306C45.0677 37.2249 45.6786 36.9718 46.129 36.5214C46.5795 36.0709 46.8325 35.46 46.8325 34.823C46.8325 34.1859 46.5795 33.575 46.129 33.1246C45.6786 32.6741 45.0677 32.421 44.4306 32.421Z"
                                fill="white"
                            />
                        </svg>
                        <span>Process Request</span>
                    </button>
                </div>
                <div class="card-container">
                        <link rel="stylesheet" href="../css/stu_home_styles.css" />
                        <?php include 'fetch_items_student.php'; ?>
            

                </div>
            </section>
        </div>
    </div>
</div>


<!-- Add to list Modal -->
<div
    class="modal fade"
    id="addToListModal"
    data-bs-backdrop="true"
    tabindex="-1"
    aria-labelledby="addToListModalLabel"
    aria-hidden="true"
>
    <div
        class="modal-dialog modal-dialog-centered modal-custom"
        role="document"
    >
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="addToListModalLabel">
                    Add To List
                </h2>
            </div>

            <div class="modal-body">
                <table class="table table-custom">
                    <thead>
                        <tr>
                            <th scope="col">Item Name</th>
                            <th class="qt_col" scope="col">Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Arduino Uno R3</td>
                            <td>
                                <div class="quantity-control d-flex align-items-center">
                                    <input
                                        type="number"
                                        id="quantity"
                                        class="form-control mx-2 text-center"
                                        value="1"
                                        min="1"
                                        style="width: 60px;"
                                    />

                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Cancel
                </button>
                <button type="button" class="btn btn-suc-custom">
                    Save
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Process Request -->
<div
    class="modal fade"
    id="reviewItemsModal"
    data-bs-backdrop="true"
    tabindex="-1"
    aria-labelledby="reviewItemsModalLabel"
    aria-hidden="true"
>
    <div
        class="modal-dialog modal-dialog-centered modal-custom review-modal"
        role="document"
    >
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="reviewItemsModalLabel">
                    Review Items
                </h2>
            </div>

            <div class="modal-body">
                <div class="table-container">
                    <div class="table-wrapper">
                        <table class="table table-custom review">
                            <thead>
                                <tr>
                                    <th scope="col">Item Name</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody id="itemsTable">
                                <tr>
                                    <td>Arduino Uno R3</td>
                                    <td>1</td>
                                    <td>
                                        <button class="btn delete-btn" title="Delete Item" aria-label="Delete Item" aria-expanded="false">
                                            <svg class="icon-delete-btn" fill="currentColor">
                                                <use xlink:href="icons.svg#icon-delete-item"></use>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ESP 32</td>
                                    <td>3</td>
                                    <td>
                                        <button class="btn delete-btn" title="Delete Item" aria-label="Delete Item" aria-expanded="false">
                                            <svg class="icon-delete-btn" fill="currentColor">
                                                <use xlink:href="icons.svg#icon-delete-item"></use>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Flame Sensor</td>
                                    <td>5</td>
                                    <td>
                                        <button class="btn delete-btn" title="Delete Item" aria-label="Delete Item" aria-expanded="false">
                                            <svg class="icon-delete-btn" fill="currentColor">
                                                <use xlink:href="icons.svg#icon-delete-item"></use>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Arduino Uno R3</td>
                                    <td>5</td>
                                    <td>
                                        <button class="btn delete-btn" title="Delete Item" aria-label="Delete Item" aria-expanded="false">
                                            <svg class="icon-delete-btn" fill="currentColor">
                                                <use xlink:href="icons.svg#icon-delete-item"></use>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Arduino Uno R3</td>
                                    <td>5</td>
                                    <td>
                                        <button class="btn delete-btn" title="Delete Item" aria-label="Delete Item" aria-expanded="false">
                                            <svg class="icon-delete-btn" fill="currentColor">
                                                <use xlink:href="icons.svg#icon-delete-item"></use>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Arduino Uno R3</td>
                                    <td>5</td>
                                    <td>
                                        <button class="btn delete-btn" title="Delete Item" aria-label="Delete Item" aria-expanded="false">
                                            <svg class="icon-delete-btn" fill="currentColor">
                                                <use xlink:href="icons.svg#icon-delete-item"></use>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <!-- More rows if necessary -->
                            </tbody>
                        </table>
                    </div>
                </div>


            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Cancel
                </button>
                <button type="button" class="btn btn-suc-custom">
                    Next
                </button>
            </div>
        </div>
    </div>
</div>



<script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

    const toggleButton = document.getElementById("toggleSidebar");
    const sidebar = document.querySelector(".sidebar_custom");
    const iconNames = document.querySelectorAll(".icon_name");
    const toggleIcon = document.getElementById("sidebarToggleIcon"); // Get the icon element

    toggleButton.addEventListener("click", () => {
        sidebar.classList.toggle("expanded");

        // Toggle icon names visibility
        iconNames.forEach((name) => {
            name.classList.toggle("visible"); // Toggle visibility
        });

        // Change the icon based on sidebar state
        if (sidebar.classList.contains("expanded")) {
            toggleIcon.setAttribute("xlink:href", "icons.svg#icon-left"); // Change to icon-left
        } else {
            toggleIcon.setAttribute("xlink:href", "icons.svg#icon-right"); // Change to icon-right
        }
    });

    // Cards Column Layout

    // Status Section Hidden Feature
    function toggleStatusSection() {
        const statusSection = document.querySelector(".status-section");

        if (window.innerWidth < 1370) {
            statusSection.style.display = "none"; // Hide the status section
        } else {
            statusSection.style.display = "flex"; // Show the status section
        }
    }

    function toggleSearchInput() {
      const searchInput = document.getElementById('searchInput');
      if (window.innerWidth < 1080) {
        searchInput.style.display = 'none';
      } else {
        searchInput.style.display = 'block';
      }
    }

    function updateCharacterCount() {
      const textArea = document.getElementById('itemDescription');
      const charCount = document.getElementById('charCount');
      charCount.textContent = `${textArea.value.length}/120`;
    }

    // Run the function initially to check the window size
    toggleSearchInput();
    toggleStatusSection();
    updateCharacterCount();


    // Add event listener to adjust on window resize
    window.addEventListener("resize", toggleStatusSection);
    window.addEventListener('resize', toggleSearchInput);

    //Save Changes Button
    function showTemporaryAlert(message, duration) {
        // Set default duration to 5000ms (5 seconds)
        const alertBox = document.createElement("div");
        alertBox.textContent = message;
        alertBox.style.position = "fixed";
        alertBox.style.bottom = "35px";
        alertBox.style.right = "25px";
        alertBox.style.backgroundColor = "#f8d7da";
        alertBox.style.color = "#721c24";
        alertBox.style.padding = "10px";
        alertBox.style.border = "1px solid #f5c6cb";
        alertBox.style.borderRadius = "10px";
        alertBox.style.zIndex = "1000";
        document.body.appendChild(alertBox);

        setTimeout(() => {
            alertBox.remove();
        }, duration);
    }


    document.querySelectorAll('.clear-filters-btn').forEach((button) => {
    button.addEventListener('click', (event) => {
        event.stopPropagation(); // Prevent dropdown from closing
        // Select all inputs with class "form-check-input" within the dropdown menu
        const allInputs = document.querySelectorAll('.dropdown-menu .form-check-input');
        // Deselect all inputs (radio buttons and checkboxes)
        allInputs.forEach((input) => {
            input.checked = false;
        });
    });
});

        // For the global "Clear All Filters" button
    document.getElementById('clearAllFilters').addEventListener('click', (event) => {
        event.stopPropagation(); // Prevent dropdown from closing
        // Select all inputs with class "form-check-input"
        const allInputs = document.querySelectorAll('.dropdown-menu .form-check-input');
        // Deselect all inputs
        allInputs.forEach((input) => {
            input.checked = false;
    });
});



</script>

<script>
    document.getElementById("addItemForm").addEventListener("submit", function(e) {
        e.preventDefault();  // Prevent form from submitting the normal way

        // Create a FormData object to send the form data
        const formData = new FormData(this);

        // Send the data using AJAX
        fetch('add_items.php', {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Create new item element in the same format as the form
                    const itemElement = document.createElement("div");
                    itemElement.classList.add("form-row");

                    // HTML structure for displaying the item
                    itemElement.innerHTML = `
                    <div class="input-group">
                        <div class="input-custom-1">
                            <label for="itemId" class="form-label">ID</label>
                            <input
                                type="text"
                                class="form-control input-id"
                                value="${data.id}"
                                readonly
                            />
                        </div>
                        <div class="input-custom-1">
                            <label for="itemName" class="form-label">Item Name</label>
                            <input
                                type="text"
                                class="form-control input-item-name"
                                value="${data.itemName}"
                                readonly
                            />
                        </div>
                    </div>
                `;

                    // Append the new item to the items list
                    document.getElementById("itemsList").appendChild(itemElement);

                    // Optionally, clear the form
                    document.getElementById("addItemForm").reset();
                } else {
                    alert("Error adding item: " + data.error);
                }
            })
            .catch(error => console.error('Error:', error));
    });


</script>
</body>
</html>

