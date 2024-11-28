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
    <link rel="stylesheet" href="../css/home_styles.css" />
    <link rel="stylesheet" href="../css/scrollbar.css" />
    <link rel="stylesheet" href="../css/faculty_sidebar.css" />
    <script src="../js/side_bar_script.js" defer></script>
</head>
<body>

<?php include 'config.php'; ?>



<div class="frame_1">
    <div class="d-flex">
        <?php include 'faculty_sidebar.php'; ?>

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
                    <ul class="dropdown-menu" aria-labelledby="filterDropdown">
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
                                    <input 
                                    class="form-check-input" 
                                    type="radio" 
                                    name="quantityFilter" 
                                    id="filterLowStock" 
                                    value="lowStock">
                                    <label class="form-check-label" for="filterLowStock">Low Stock</label>
                            </div>
                            <div class="form-check filter-text">
                                <input 
                                    class="form-check-input" 
                                    type="radio" 
                                    name="quantityFilter" 
                                    id="filterHighStock" 
                                    value="highStock">
                                    <label class="form-check-label" for="filterHighStock">High Stock</label>
                            </div>
                            <div class="form-check filter-text">
                                <input 
                                    class="form-check-input" 
                                    type="radio" 
                                    name="quantityFilter" 
                                    id="filterOutOfStock" 
                                    value="outOfStock">
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
                                <input 
                                    class="form-check-input" 
                                    type="radio" 
                                    name="propertyFilter" 
                                    id="filterConsumable" 
                                    value="consumable">
                                    <label class="form-check-label" for="filterConsumable">Consumable</label>
                            </div>
                            <div class="form-check filter-text">
                                <input 
                                    class="form-check-input" 
                                    type="radio" 
                                    name="propertyFilter" 
                                    id="filterNonConsumable" 
                                    value="nonConsumable">
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
                    data-bs-target="#addModal"
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
                    <span>Add Item</span>
                </button>
            </div>


                <div class="card-container">
                    <link rel="stylesheet" href="../css/home_styles.css" />
                    <?php include 'fetch_items.php'; ?>
                    <!-- Example Card 8 -->
            </section>

            <!-- Status Section: Quick Access -->
            <section class="status-section">
                <div class="status-container">

                    <!-- Request Status Section -->
                    <div class="rectangle request-status">
                        <div class="status-label-container">
                            <p class="status-label">Request Inbox</p>
                            <div class="quick-access-circle request"></div>
                        </div>

                        <div class="request-student-container-list">
                            <!-- Request Entries -->
                            <div class="student-container">
                                <div class="student_pic"></div>
                                <div class="vertical-layout">
                                    <p class="student-name">Alliya Virtucio</p>
                                    <p class="request-date">Nov. 19, 2024</p>
                                </div>
                            </div>

                            <div class="student-container">
                                <div class="student_pic"></div>
                                <div class="vertical-layout">
                                    <p class="student-name">Marvin Cayosa</p>
                                    <p class="request-date">Nov. 21, 2024</p>
                                </div>
                            </div>

                            <div class="student-container">
                                <div class="student_pic"></div>
                                <div class="vertical-layout">
                                    <p class="student-name">Clarizza Reyes</p>
                                    <p class="request-date">Nov. 30, 2024</p>
                                </div>
                            </div>

                            <div class="student-container">
                                <div class="student_pic"></div>
                                <div class="vertical-layout">
                                    <p class="student-name">Vincent Vinas</p>
                                    <p class="request-date">Dec. 21, 2024</p>
                                </div>
                            </div>

                            <!-- See More Link -->
                            <div class="see-more-container">
                                <a href="inbox.php" class="see-more-link" onclick="toggleRequestStatus()">
                                    See more
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Return Status Section -->
                    <div class="rectangle return-status">
                        <div class="status-label-container">
                            <p class="status-label">Due Date</p>
                            <div class="quick-access-circle return"></div>
                        </div>

                        <div class="return-student-container-list">

                        <!-- Return Entries -->
                            <div class="student-container">
                                <div class="two-column-layout">
                                    <p class="student-name">Marvin Cayosa</p>
                                    <p class="return-date">Nov. 21, 2024</p>

                                </div>
                            </div>

                            <div class="student-container">
                                <div class="two-column-layout">
                                    <p class="student-name">Vincent Vinas</p>
                                    <p class="return-date">Nov. 21, 2024</p>
                                </div>
                            </div>

                            <div class="student-container">
                                <div class="two-column-layout">
                                    <p class="student-name">Clarizza Reyes</p>
                                    <p class="return-date">Nov. 21, 2024</p>
                                </div>
                            </div>

                            <div class="student-container">
                                <div class="two-column-layout">
                                    <p class="student-name">Bernadette Virtucio</p>
                                    <p class="return-date">Nov. 21, 2024</p>
                                </div>
                            </div>

                            <!-- See More Link -->
                            <div class="see-more-container">
                                <a href="records.php" class="see-more-link" onclick="toggleRequestStatus()">
                                    See more
                                </a>
                            </div>
                        </div>    
                    </div>

                </div>
            </section>

        </div>
    </div>
</div>

<!-- Add Modal -->
<div
    class="modal fade"
    id="addModal"
    data-bs-backdrop="true"
    tabindex="-1"
    aria-labelledby="addModalLabel"
    aria-hidden="true"
>
    <div
        class="modal-dialog modal-dialog-centered modal-custom"
        role="document"
    >
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="editModalLabel">
                    Add
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="40"
                        height="40"
                        fill="currentColor"
                        class="bi bi-pencil-square"
                        viewBox="0 0 20 20"
                    >
                        <path
                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"
                        />
                        <path
                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"
                        />
                    </svg>
                </h2>
            </div>

            <div class="modal-body">
                <form method="POST" action="add_items.php" id="add_items">
                    <!-- First row: ID Input and Item Name Input -->
                    <div class="form-row">
                        <div class="input-group">
                            <!-- ID Input -->
                            <div class="input-custom-1">
                                <label for="itemId" class="form-label">ID</label>
                                <input
                                        type="text"
                                        class="form-control input-id"
                                        id="itemId"
                                        name="itemId"
                                        style="font-family: Poppins, sans-serif; font-size: 14px;"
                                        placeholder="#XXXX"
                                />
                            </div>
                            <!-- Item Name Input -->
                            <div class="input-custom-1">
                                <label for="itemName" class="form-label">Item Name</label>
                                <input
                                        type="text"
                                        class="form-control input-item-name"
                                        id="itemName"
                                        name="itemName"
                                        style="font-family: Poppins, sans-serif; font-size: 14px;"
                                        placeholder="Item Name"
                                        required
                                />
                            </div>
                        </div>
                    </div>

                    <!-- Second row: Total Quantity and Consumability Inputs -->
                    <div class="form-row">
                        <div class="input-group">
                            <!-- Total Quantity Input -->
                            <div class="input-custom">
                                <label for="totalQuantity" class="form-label">Quantity</label>
                                <input
                                        type="number"
                                        class="form-control input-quantity"
                                        id="totalQuantity"
                                        name="totalQuantity"
                                        style="font-family: Poppins, sans-serif; font-size: 14px;"
                                        placeholder=""
                                        required
                                        value="1"
                                        min="1"
                                        step="1"
                                />
                            </div>
                            <!-- Consumability Dropdown -->
                            <div class="input-custom">
                                <label for="consumability" class="form-label">Property</label>
                                <div class="dropdown-wrapper">
                                    <select
                                            class="form-control input-property dropdown-toggle"
                                            id="consumability"
                                            name="consumability"
                                            required
                                    >
                                        <option value="" disabled selected style="display: none; font-family: 'Poppins', sans-serif; font-weight: 400;">Select a Property</option>
                                        <option value="consumable" style="font-family: 'Poppins', sans-serif;">Consumable</option>
                                        <option value="non-consumable" style="font-family: 'Poppins', sans-serif;">Non-Consumable</option>
                                    </select>
                                    <span class="dropdown-icon">&#9662;</span> <!-- dropdown arrow -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Third row: Edit Description -->
                    <div class="form-row">
                        <div class="input-group">
                            <div class="input-custom">
                                <label for="itemDescription" class="form-label">Item Description</label>
                                <div class="textarea-wrapper">
                                    <textarea
                                        class="form-control input-description"
                                        id="itemDescription"
                                        name="itemDescription"
                                        rows="2"
                                        maxlength="120"
                                        oninput="updateCharacterCount()"
                                        placeholder="Enter a brief description of the item."
                                        style="font-family: Poppins, sans-serif; font-size: 14px;"
                                    >
                                    </textarea>
                                    <span id="charCount" class="char-counter">0/120</span>
                                </div>
                            </div>

                        </div>
                    </div>

                <div class="image-preview-container">
                    <!-- Image Preview -->
                    <div class="image-preview" style="background-color: #47474771">
                        <!-- Added translucent grey background -->
                        <img id="imagePreview" src="" alt="" class="preview-img" />

                        <!-- SVG Icon that appears by default -->
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="40"
                            height="40"
                            fill="#FDFDFD"
                            class="bi bi-image"
                            viewBox="0 0 16 16"
                            style="
                                position: absolute;
                                top: 45%;
                                left: 50%;
                                transform: translate(-50%, -100%);
                                "
                        >
                            <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0" />
                            <path
                                d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1z"
                            />
                        </svg>

                        <!-- Button that replaces SVG on hover -->
                        <button
                            onclick="document.getElementById('fileInput').click();"
                            style="
                                position: absolute;
                                bottom: 40%;
                                left: 50%;
                                transform: translate(-50%, 50%);
                                padding: 9px 9px;
                                background-color: #4285f4;
                                color: white;
                                border: none;
                                border-radius: 5px;
                                cursor: pointer;
                                font-family: 'Poppins', sans-serif;
                                font-size: 11.5px;
                                width: 150px;
                            "
                        >
                            Select From Computer
                        </button>
                        <input
                            type="file"
                            id="fileInput"
                            style="display: none"
                            onchange="previewImage(event)"
                        />
                    </div>
                </div>

                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn-cancel"
                        data-bs-dismiss="modal"
                    >
                        Cancel
                    </button>
                    <button
                        type="submit"
                        class="btn-save-changes"
                        data-bs-dismiss="modal"
                        form="add_items"
                        name="addItem"
                        onclick="showTemporaryAlert('Changes saved!', 3000)"
                    >
                        Add Item
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div
    class="modal fade"
    id="editModal"
    data-bs-backdrop="true"
    tabindex="-1"
    aria-labelledby="editModalLabel"
    aria-hidden="true"
>
    <div
        class="modal-dialog modal-dialog-centered modal-custom"
        role="document"
    >
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="editModalLabel">
                    Edit
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="40"
                        height="40"
                        fill="currentColor"
                        class="bi bi-pencil-square"
                        viewBox="0 0 20 20"
                    >
                        <path
                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"
                        />
                        <path
                            fill-rule="evenodd"
                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"
                        />
                    </svg>
                </h2>

                <button
                        id ="delete-btn"
                        class="btn delete-btn"
                        title="Delete Item"
                        aria-label="Delete Item"
                        aria-expanded="false"
                        data-item-id="delete-item-id"

                >
                    <svg class="icon-delete-btn" fill="currentColor">
                        <use xlink:href="icons.svg#icon-delete-item"></use>
                    </svg>
                </button>
            </div>

            <div class="modal-body">
                <form>
                    <!-- First row: ID Input and Item Name Input -->
                    <div class="form-row">
                        <div class="input-group">
                            <!-- ID Input -->
                            <div class="input-custom-1">
                                <label for="item_Id" class="form-label">ID</label>
                                <input
                                    type="text"
                                    class="form-control input-id"
                                    id="item_Id"
                                    style="font-family: Poppins, sans-serif; font-size: 14px;"
                                    placeholder="0001"
                                    disabled
                                />
                            </div>
                            <!-- Item Name Input -->
                            <div class="input-custom-1">
                                <label for="item_name" class="form-label">Item Name</label>
                                <input
                                    type="text"
                                    class="form-control input-item-name"
                                    id="item_Name"
                                    style="font-family: Poppins, sans-serif; font-size: 14px;"
                                    placeholder="Arduino Uno R3"
                                />
                            </div>
                        </div>
                    </div>

                    <!-- Second row: Date Added and Total Quantity Inputs -->
                    <div class="form-row">
                        <div class="input-group">
                            <!-- Date Added Input -->
                            <div class="input-custom">
                                <label for="date_added" class="form-label">Date Added</label>
                                <input
                                    type="date"
                                    class="form-control input-date"
                                    id="date_added"
                                    style="font-family: Poppins, sans-serif; font-size: 14px;"
                                    disabled
                                />
                            </div>
                            <!-- Total Quantity Input -->
                            <div class="input-custom">
                                <label for="total_quantity" class="form-label">Quantity</label>
                                <input
                                    type="number"
                                    class="form-control input-quantity"
                                    id="total_quantity"
                                    style="font-family: Poppins, sans-serif; font-size: 14px;"
                                    placeholder="75"
                                    min="1"
                                    step="1"
                                />
                            </div>

                            <div class="input-custom">
                                <label for="property_type" class="form-label">Property</label>
                                <div class="dropdown-wrapper">
                                    <select
                                    class="form-control input-property dropdown-toggle"
                                    id="property_type"
                                    >
                                        <option value="" disabled selected style="display: none; font-family: 'Poppins', sans-serif;">Select a Property</option>
                                        <option value="consumable" style="font-family: 'Poppins', sans-serif; ">Consumable</option>
                                        <option value="non-consumable" style="font-family: 'Poppins', sans-serif;">Non-Consumable</option>
                                    </select>
                                    <span class="dropdown-icon">&#9662;</span> <!-- dropdown arrow -->
                                </div>
                            </div>
                        </div>
                    </div>

                   <!-- Third row: Edit Description -->
                   <div class="form-row">
                        <div class="input-group">
                            <div class="input-custom">
                                <label for="edit_description" class="form-label">Item Description</label>
                                <div class="textarea-wrapper">
                                <textarea
                                    class="form-control edit-description"
                                    id="edit_description"
                                    rows="2"
                                    maxlength="120"
                                    oninput="updateEditCharacterCount()"
                                    placeholder="Enter a brief description of the item."
                                    style="font-family: Poppins, sans-serif; font-size: 14px;"
                                ></textarea>
                                    <span id="charCountEdit" class="char-counter">0/120</span>
                                </div>
                            </div>

                        </div>
                    </div>

                </form>

                <div class="image-preview-container">
                    <!-- Image Preview -->
                    <div class="image-preview">
                        <!-- Added translucent grey background -->
                        <img
                            id="imagePreview"
                            src="../png/arduino.png"
                            alt="Image Preview"
                            class="preview-img"
                        />

                        <!-- SVG Icon that appears by default -->
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="30"
                            height="30"
                            fill="#FDFDFD"
                            class="bi bi-image svg-icon"
                            viewBox="0 0 16 16"
                        >
                            <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0" />
                            <path
                                d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1z"
                            />
                        </svg>

                        <!-- Button that replaces SVG on hover -->
                        <button
                            class="btn-upload"
                            onclick="document.getElementById('fileInput').click();"
                        >
                            Select From Computer
                        </button>
                        <input
                            type="file"
                            id="fileInput"
                            style="display: none"
                            onchange="previewImage(event)"
                        />
                    </div>
                </div>

                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn-cancel"
                        data-bs-dismiss="modal"
                    >
                        Cancel
                    </button>
                    <button
                        type="button"
                        class="btn-save-changes"
                        data-bs-dismiss="modal"
                        onclick="showTemporaryAlert('Changes saved!', 5000)"
                    >
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('delete-btn').addEventListener('click', function () {
        // Get the item ID from the input field
        const itemId = document.getElementById('item_Id').value;

        if (confirm('Are you sure you want to delete this item?')) {
            // Send the delete request
            fetch(`delete_item.php?itemId=${itemId}`, {
                method: 'GET',
            })
                .then(response => response.text())
                .then(data => {
                    console.log(data); // Debug response

                    if (data.includes('success')) {
                        alert('Item deleted successfully!');
                        // Close modal and optionally update UI
                        location.reload(); // Refresh or dynamically update UI
                    } else {
                        alert('Failed to delete the item.');
                    }
                })
                .catch(error => {
                    alert('An error occurred while deleting the item.');
                    console.error('Error:', error);
                });
        }
    });

</script>


<script>
    function populateModal(button) {
        // Get data attributes from the button
        const itemId = button.getAttribute('data-item-id');
        const itemName = button.getAttribute('data-item-name');
        const itemQuantity = button.getAttribute('data-item-quantity')
        const itemDateAdded = button.getAttribute('data-item-date-added')
        const itemDescription = button.getAttribute('data-item-description')
        const itemConsumability = button.getAttribute('data-item-consumability')
        // add lines here

        // Populate the modal fields with the data
        document.getElementById('item_Id').value = itemId;  // Set ID field (disabled)
        document.getElementById('item_Name').value = itemName;  // Set item name
        document.getElementById('total_quantity').value = itemQuantity;  // Set total quantity
        document.getElementById('date_added').value = itemDateAdded;  // Set date added
        document.getElementById('property_type').value = itemConsumability;  // Set consumability
        document.getElementById('edit_description').value = itemDescription;  // Set description
    }

</script>
<script>
    // Status Section Hidden Feature
    function toggleStatusSection() {
        const statusSection = document.querySelector(".status-section");

        if (window.innerWidth < 1285) {
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

    function updateEditCharacterCount() {
      const textArea = document.getElementById('editDescription');
      const charCount = document.getElementById('charCountEdit');
      charCount.textContent = `${textArea.value.length}/120`;
    }

    // Run the function initially to check the window size
    toggleSearchInput();
    toggleStatusSection();
    updateCharacterCount();
    updateEditCharacterCount();

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

