<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inbox</title>

    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
        rel="stylesheet"
    />

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom Styles -->
    <link rel="stylesheet" href="../css/inbox_styles.css" />
    <link rel="stylesheet" href="../css/scrollbar.css" />
</head>

<body>

<?php include 'config.php'; ?>

<!-- Main Frame -->
<div class="frame_1">
    <div class="d-flex">
        <!-- Sidebar -->
        <div
            class="sidebar_custom sidebar d-flex flex-column flex-shrink-0 p-3 fixed-top"
            style="width: 110px; height: 100vh"
        >
            <!-- User Icon Dropdown -->
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
                    class="avatar"
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

            <!-- User Dropdown -->
            <ul class="user_dropdown dropdown-menu">
                <li><a class="dropdown-item" href="#">View Profile</a></li>
                <li><a class="dropdown-item" href="#">Log Out</a></li>
            </ul>

            <hr />

            <!-- Navigation Icons -->
            <ul class="nav nav-pills flex-column d-flex align-items-center">
                <li class="nav-item d-flex justify-content-center icon-container">
                    <a href="home.php">
                        <svg class="icon" fill="currentColor">
                            <use xlink:href="icons.svg#icon-home"></use>
                        </svg>
                    </a>
                    <span class="icon_name">Home</span>
                </li>

                <li
                    class="nav-item d-flex nav-link active justify-content-center icon-container"
                >
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
                    <svg class="icon" fill="currentColor">
                        <use xlink:href="icons.svg#icon-archive"></use>
                    </svg>
                    <span class="icon_name">Archive</span>
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

            <!-- Options Icon -->
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
        <!-- End of Sidebar -->

        <!-- Main Body -->
        <div class="main_body flex-grow-1">
            <div class="inbox-header">
                <h2>Inbox</h2>
            </div>

            <div class="inbox-navigation">
                <a href="#all" class="padding active">All</a>
                <a href="#pending" class="padding">Pending</a>
                <a href="#approved" class="padding">Approved</a>
                <a href="#rejected" class="padding">Rejected</a>
            </div>

            <section class="inbox-section d-flex flex-column">
                <div class="inbox-item d-flex flex-row">
                    <div class="student_pic"></div>
                    <div class="inbox-student-name">
                        <h5
                            class="student-link"
                            data-bs-toggle="modal"
                            data-bs-target="#studentModal"
                            data-name="Marvin Cayosa"
                            data-status="Pending"
                            data-date="Oct. 28, 2024"
                        >
                            Marvin Cayosa
                        </h5>
                    </div>
                    <div class="inbox-status-circle status-pending"></div>
                    <div class="inbox-status">Pending</div>
                    <div class="inbox-date">Oct. 28, 2024</div>
                </div>

                <div class="inbox-item d-flex flex-row">
                    <div class="student_pic"></div>
                    <div class="inbox-student-name">
                        <h5
                            class="student-link"
                            data-bs-toggle="modal"
                            data-bs-target="#studentModal"
                            data-name="Alliya Bernadette Virtucio"
                            data-status="Accepted"
                            data-date="Oct. 28, 2024"
                        >
                            Alliya Bernadette Virtucio
                        </h5>
                    </div>
                    <div class="inbox-status-circle status-approved"></div>
                    <div class="inbox-status">Approved</div>
                    <div class="inbox-date">Oct. 28, 2024</div>
                </div>

                <div class="inbox-item d-flex flex-row">
                    <div class="student_pic"></div>
                    <div class="inbox-student-name">
                        <h5
                            class="student-link"
                            data-bs-toggle="modal"
                            data-bs-target="#studentModal"
                            data-name="Sean Vincent Vien Viñas"
                            data-status="Rejected"
                            data-date="Oct. 28, 2024"
                        >
                            Sean Vincent Vien Viñas
                        </h5>
                    </div>
                    <div class="inbox-status-circle status-rejected"></div>
                    <div class="inbox-status">Rejected</div>
                    <div class="inbox-date">Oct. 28, 2024</div>
                </div>

                <div class="inbox-item d-flex flex-row">
                    <div class="student_pic"></div>
                    <div class="inbox-student-name">
                        <h5
                            class="student-link"
                            data-bs-toggle="modal"
                            data-bs-target="#studentModal"
                            data-name="Clarizza Reyes"
                            data-status="Pending"
                            data-date="Oct. 28, 2024"
                        >
                            Clarizza Reyes
                        </h5>
                    </div>
                    <div class="inbox-status-circle status-pending"></div>
                    <div class="inbox-status">Pending</div>
                    <div class="inbox-date">Oct. 28, 2024</div>
                </div>
            </section>

            <div id="all"></div>
            <div id="pending"></div>
            <div id="approved"></div>
            <div id="rejected"></div>
        </div>
        <!-- End of Main Body -->
    </div>

    <!-- MODAL -->

    <div
        class="modal fade"
        id="studentModal"
        tabindex="-1"
        aria-labelledby="studentModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog inbox-modal">
            <div class="modal-content">
                <div class="modal-header d-flex flex-row">
                    <div class="modal-student-picture">
                        <div class="student_pic modal-pic modal-pic-pos"></div>
                    </div>
                    <div class="modal-student-info">
                        <div class="modal-student-name">Sean Vincent Vien Viñas</div>
                        <div class="modal-student-year">3rd Year - BSCPE</div>
                        <div class="modal-student-num">SN: 20220101011</div>
                    </div>

                    <div class="modal-student-sched">
                        <div class="modal-student-date">October 28, 2024</div>
                        <div class="modal-student-time">11:59 PM</div>
                    </div>
                </div>

                <hr class="modal-divider" />

                <div class="modal-item-contents">
                    <div class="modal-item-container">
                        <div class="modal-item-label">
                            <div class="item-label">Items</div>
                            <div class="quantity-label">Quantity</div>
                        </div>

                        <div class="modal-item-section">
                            <div class="item-name">Arduino UNO R4</div>

                            <div class="quantity-number">1</div>
                        </div>

                        <div class="modal-item-section">
                            <div class="item-name">ESP32</div>

                            <div class="quantity-number">3</div>
                        </div>

                        <div class="modal-item-section">
                            <div class="item-name">Flame Sensor</div>

                            <div class="quantity-number">20</div>
                        </div>

                        <div class="modal-item-section">
                            <div class="item-name">Piezo</div>

                            <div class="quantity-number">100</div>
                        </div>
                    </div>

                    <div class="modal-item-container2">
                        <div class="modal-borrowID-and-date">
                            <div class="modal-borrowID-label">
                                <div class="borrowID-label">Borrow ID</div>
                                <div class="borrowID-container">
                                    <div class="borrowID">#1001</div>
                                </div>
                            </div>

                            <div class="modal-date-label">
                                <div class="date-label">Date of Return</div>
                                <div class="date-container">
                                    <div class="date">November 20, 2024</div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-purpose">
                            <div class="purpose-label">Purpose</div>
                            <div class="purpose-container">
                                <div class="purpose">Testing purpose</div>
                            </div>
                        </div>

                        <div class="modal-course">
                            <div class="course-label">Course</div>

                            <div class="course-container">
                                <div class="course">
                                    NCP_3106 : Software Design Laboratory
                                </div>
                            </div>
                        </div>

                        <div class="modal-status">
                            <div class="status-label">Status</div>
                            <div class="status-container">
                                <div class="custom-dropdown" id="statusDropdown">
                                    <div class="selected-status">
                                        <span class="status-circle pending"></span>
                                        <span class="status-text">Select Status</span>
                                    </div>
                                    <div class="dropdown-options" id="dropdownOptions">
                                        <div
                                            class="dropdown-option pending"
                                            data-value="pending"
                                        >
                                            <span class="status-circle"></span> Pending
                                        </div>
                                        <div
                                            class="dropdown-option approved"
                                            data-value="approved"
                                        >
                                            <span class="status-circle"></span> Approved
                                        </div>
                                        <div
                                            class="dropdown-option rejected"
                                            data-value="rejected"
                                        >
                                            <span class="status-circle"></span> Rejected
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="finalization-container">
                            <div class="cancel-status">
                                <button class="cancel">Cancel</button>
                            </div>

                            <div class="save-status">
                                <button class="save">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->

<!-- JavaScript for Sidebar Toggle -->

<script>
    // Get elements
    const statusDropdown = document.getElementById("statusDropdown");
    const dropdownOptions = document.getElementById("dropdownOptions");
    const selectedStatus = document.querySelector(".selected-status");
    const statusText = document.querySelector(".status-text");

    // Show/hide dropdown options
    statusDropdown.addEventListener("click", () => {
        dropdownOptions.style.display =
            dropdownOptions.style.display === "block" ? "none" : "block";
    });

    // Handle option selection
    dropdownOptions.addEventListener("click", (event) => {
        if (event.target.classList.contains("dropdown-option")) {
            const selectedValue = event.target.dataset.value;

            // Update the selected status display
            selectedStatus.className = "selected-status " + selectedValue;
            statusText.textContent = event.target.textContent;

            // Hide dropdown options (close dropdown)
            dropdownOptions.style.display = "none";
        }
    });

    // Close dropdown if clicking outside
    document.addEventListener("click", (event) => {
        if (!statusDropdown.contains(event.target)) {
            dropdownOptions.style.display = "none";
        }
    });
</script>

<script>
    const toggleButton = document.getElementById("toggleSidebar");
    const sidebar = document.querySelector(".sidebar_custom");
    const iconNames = document.querySelectorAll(".icon_name");
    const toggleIcon = document.getElementById("sidebarToggleIcon");

    toggleButton.addEventListener("click", () => {
        sidebar.classList.toggle("expanded");

        // Toggle icon names visibility
        iconNames.forEach((name) => {
            name.classList.toggle("visible");
        });

        // Change the icon based on sidebar state
        if (sidebar.classList.contains("expanded")) {
            toggleIcon.setAttribute("xlink:href", "icons.svg#icon-left");
        } else {
            toggleIcon.setAttribute("xlink:href", "icons.svg#icon-right");
        }
    });
</script>

<script>
    document.querySelectorAll(".inbox-navigation a").forEach((link) => {
        link.addEventListener("click", function () {
            // Remove the active class from all links
            document.querySelectorAll(".inbox-navigation a").forEach((item) => {
                item.classList.remove("active");
            });

            // Add the active class to the clicked link
            this.classList.add("active");
        });
    });
</script>

<script>
    // Event listener for student name clicks
    document.querySelectorAll(".student-link").forEach((link) => {
        link.addEventListener("click", function () {
            const name = this.getAttribute("data-name");
            const status = this.getAttribute("data-status");
            const date = this.getAttribute("data-date");

            // Populate modal content
            document.getElementById("studentName").innerText = `Name: ${name}`;
            document.getElementById(
                "studentStatus"
            ).innerText = `Status: ${status}`;
            document.getElementById("studentDate").innerText = `Date: ${date}`;
        });
    });

    document.querySelector(".cancel").addEventListener("click", () => {
        // Close the modal
        const modal = bootstrap.Modal.getInstance(
            document.getElementById("studentModal")
        );
        if (modal) {
            modal.hide(); // Close the modal (Bootstrap 5 way)
        }
    });

    // Save button functionality
    document.querySelector(".save").addEventListener("click", () => {
        // Close the modal after saving
        const modal = bootstrap.Modal.getInstance(
            document.getElementById("studentModal")
        );
        if (modal) {
            modal.hide(); // Close the modal (Bootstrap 5 way)
        }
    });
</script>
</body>
</html>
