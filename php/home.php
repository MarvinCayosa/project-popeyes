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
</head>
<body>

<?php include 'config.php'; ?>


<div class="frame_1">
    <div class="d-flex">
        <div
            class="sidebar_custom sidebar d-flex flex-column flex-shrink-0 p-3 fixed-top"
            style="width: 110px; height: 100vh"
        >
            <!--User Icon Dropdown-->
            <a
                href="#"
                class="user_profile m-2 d-flex justify-content-center text-white text-decoration-none"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
            >
                <span class="icon_name">Marvin Cayosa</span>
                <span class="icon_name identifier">Administrator</span>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="avatar bi bi-person-circle"
                    fill="currentColor"
                    viewBox="0 0 16 16"
                >
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                    <path
                        fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"
                    />
                </svg>
            </a>
            <ul class="user_dropdown dropdown-menu">
                <li><a class="dropdown-item" href="#">View Profile</a></li>
                <li><a class="dropdown-item" href="../index.php">Log Out</a></li>
            </ul>

            <hr />
            <!--Navigation Icons-->
            <ul class="nav nav-pills flex-column d-flex align-items-center">
                <li
                    class="nav-item nav-link active d-flex justify-content-center icon-container"
                >
                    <a href="home.php">
                        <svg class="icon" fill="currentColor">
                            <use xlink:href="icons.svg#icon-home"></use>
                        </svg>
                    </a>
                    <span class="icon_name">Home</span>
                </li>
                <li class="nav-item d-flex justify-content-center icon-container">
                    <a href="inbox.php">
                        <svg class="icon" fill="currentColor">
                            <use xlink:href="icons.svg#icon-inbox"></use>
                        </svg>
                    </a>
                    <span
                        class="position-absolute translate-middle badge rounded-pill bg-danger"
                    >10</span
                    >
                    <span class="icon_name">Inbox</span>
                </li>

                <li class="nav-item d-flex justify-content-center icon-container">
                    <a href="records.php">
                        <svg class="icon" fill="currentColor">
                            <use xlink:href="icons.svg#icon-profile"></use>
                        </svg>
                    </a>
                    <span class="icon_name">Records</span>
                </li>
                <li class="nav-item d-flex justify-content-center icon-container">
                    <span class="icon_name">Archive</span>
                    <svg class="icon" fill="currentColor">
                        <use xlink:href="icons.svg#icon-archive"></use>
                    </svg>
                </li>
                <!-- Expand/Collapse Button -->
                <li class="nav-item d-flex justify-content-center icon-container">
                    <button class="btn" id="toggleSidebar">
                        <svg class="icon" fill="currentColor">
                            <use
                                xlink:href="icons.svg#icon-right"
                                id="sidebarToggleIcon"
                            ></use>
                        </svg>
                    </button>
                </li>
            </ul>

            <hr />

            <!--Options Icon-->
            <a
                href="#"
                class="options m-2 d-flex justify-content-center text-white text-decoration-none"
                aria-expanded="false"
            >
                <span class="icon_name">Options</span>
                <svg class="icon" fill="currentColor">
                    <use xlink:href="icons.svg#icon-menu"></use>
                </svg>
            </a>
        </div>

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

                    <form class="search-form d-flex search-container" role="search">
                        <input
                            class="search-bar form-control me-2"
                            type="search"
                            placeholder="Search"
                            aria-label="Search"
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
                    <button class="btn filter-btn" type="button">
                        <svg
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M19 2H5C4.20435 2 3.44129 2.31607 2.87868 2.87868C2.31607 3.44129 2 4.20435 2 5V6.17C1.99986 6.58294 2.08497 6.99147 2.25 7.37V7.43C2.39128 7.75097 2.59139 8.04266 2.84 8.29L9 14.41V21C8.99966 21.1699 9.04264 21.3372 9.12487 21.4859C9.20711 21.6346 9.32589 21.7599 9.47 21.85C9.62914 21.9486 9.81277 22.0006 10 22C10.1565 21.9991 10.3107 21.9614 10.45 21.89L14.45 19.89C14.6149 19.8069 14.7536 19.6798 14.8507 19.5227C14.9478 19.3656 14.9994 19.1847 15 19V14.41L21.12 8.29C21.3686 8.04266 21.5687 7.75097 21.71 7.43V7.37C21.8888 6.99443 21.9876 6.58578 22 6.17V5C22 4.20435 21.6839 3.44129 21.1213 2.87868C20.5587 2.31607 19.7956 2 19 2ZM13.29 13.29C13.1973 13.3834 13.124 13.4943 13.0742 13.6161C13.0245 13.7379 12.9992 13.8684 13 14V18.38L11 19.38V14C11.0008 13.8684 10.9755 13.7379 10.9258 13.6161C10.876 13.4943 10.8027 13.3834 10.71 13.29L5.41 8H18.59L13.29 13.29ZM20 6H4V5C4 4.73478 4.10536 4.48043 4.29289 4.29289C4.48043 4.10536 4.73478 4 5 4H19C19.2652 4 19.5196 4.10536 19.7071 4.29289C19.8946 4.48043 20 4.73478 20 5V6Z"
                            />
                        </svg>
                    </button>
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
                            class="filter-svg"
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
                    </button>
                </div>

                <div class="card-container">
                    <!-- Example Card 1 -->
                    <?php include 'fetch_items.php'; ?>
                    <!-- Example Card 8 -->
            </section>

            <section class="status-section">
                <div class="status-container">
                    <div class="rectangle request-status">
                        <p>Request Status</p>
                    </div>
                    <div class="rectangle return-status">
                        <p>Return Due Date</p>
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
                                        id="itemIdd"
                                        name="itemId"
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
                                        placeholder="Item Name"
                                        required
                                />
                            </div>
                        </div>
                    </div>

                    <!-- Second row: Date Added and Total Quantity Inputs -->
                    <div class="form-row">
                        <div class="input-group">
                            <!-- Date Added Input -->
                            <div class="input-custom">
                                <label for="dateAdded" class="form-label">Date Added</label>
                                <input
                                        type="date"
                                        class="form-control input-date"
                                        id="dateAdded"
                                        name="dateAdded"
                                        required
                                />
                            </div>
                            <!-- Total Quantity Input -->
                            <div class="input-custom">
                                <label for="totalQuantity" class="form-label">Total Quantity</label>
                                <input
                                        type="number"
                                        class="form-control input-quantity"
                                        id="totalQuantity"
                                        name="totalQuantity"
                                        required
                                />
                            </div>
                        </div>
                    </div>

                    <!-- Third row: Date Edited and Available Inputs -->
                    <div class="form-row">
                        <div class="input-group">
                            <!-- Date Edited Input -->
                            <div class="input-custom">
                                <label for="dateEdited" class="form-label">Date Edited</label>
                                <input
                                        type="date"
                                        class="form-control input-date"
                                        id="dateEdited"
                                        name="dateEdited"
                                        required
                                />
                            </div>
                            <!-- Available Quantity Input -->
                            <div class="input-custom">
                                <label for="availableQuantity" class="form-label">Available</label>
                                <input
                                        type="number"
                                        class="form-control input-quantity"
                                        id="availableQuantity"
                                        name="availableQuantity"
                                        required
                                />
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                </form>

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
                        class="btn btn-secondary"
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
            </div>

            <div class="modal-body">
                <form>
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
                                    placeholder="0001"
                                    disabled
                                />
                            </div>
                            <!-- Item Name Input -->
                            <div class="input-custom-1">
                                <label for="itemName" class="form-label">Item Name</label>
                                <input
                                    type="text"
                                    class="form-control input-item-name"
                                    id="itemName"
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
                                <label for="dateAdded" class="form-label">Date Added</label>
                                <input
                                    type="date"
                                    class="form-control input-date"
                                    id="dateAdded"
                                    disabled
                                />
                            </div>
                            <!-- Total Quantity Input -->
                            <div class="input-custom">
                                <label for="totalQuantity" class="form-label"
                                >Total Quantity</label
                                >
                                <input
                                    type="number"
                                    class="form-control input-quantity"
                                    id="totalQuantity"
                                    placeholder="75"
                                />
                            </div>
                        </div>
                    </div>

                    <!-- Third row: Date Edited and Available Inputs -->
                    <div class="form-row">
                        <div class="input-group">
                            <!-- Date Edited Input -->
                            <div class="input-custom">
                                <label for="dateEdited" class="form-label"
                                >Date Edited</label
                                >
                                <input
                                    type="date"
                                    class="form-control input-date"
                                    id="dateEdited"
                                    disabled
                                />
                            </div>
                            <!-- Available Quantity Input -->
                            <div class="input-custom">
                                <label for="availableQuantity" class="form-label"
                                >Available</label
                                >
                                <input
                                    type="number"
                                    class="form-control input-quantity"
                                    id="availableQuantity"
                                    placeholder="15"
                                />
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
                        class="btn btn-secondary"
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

        if (window.innerWidth < 1080) {
            statusSection.style.display = "none"; // Hide the status section
        } else {
            statusSection.style.display = "flex"; // Show the status section
        }
    }

    // Run the function initially to check the window size
    toggleStatusSection();

    // Add event listener to adjust on window resize
    window.addEventListener("resize", toggleStatusSection);

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

