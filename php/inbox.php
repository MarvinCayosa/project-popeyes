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
    <link rel="stylesheet" href="../css/faculty_sidebar.css" />
    <script src="../js/side_bar_script.js" defer></script>
</head>

<body>
<?php global $filter ?>
<?php include 'config.php'; ?>

<!-- Main Frame -->
<div class="frame_1">
    <div class="d-flex">
        <?php include 'faculty_sidebar.php'; ?>

        <!-- Main Body -->
        <div class="main_body flex-grow-1">
            <div class="inbox-header">
                <h2>Inbox</h2>
            </div>

            <div class="inbox-navigation">
                <a href="?status=all" id="all-link" class="filter-link padding active">All</a>
                <a href="?status=pending" id="pending-link" class="filter-link padding">Pending</a>
                <a href="?status=approved" id="approved-link" class="filter-link padding">Approved</a>
                <a href="?status=rejected" id="rejected-link" class="filter-link padding">Rejected</a>
            </div>

            <section class="inbox-section d-flex flex-column">
                <?php include 'fetch_inbox.php'; ?>
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
                        <div class="modal-pic"></div>
                    </div>

                    <div class="modal-student-info">
                        <div class="modal-student-name">Alliya Bernadette Virtucio</div>
                            <div class="subtext d-flex align-items-center">
                                <p class="modal-student-email text mb-0">virtucio.alliyabernadette@ue.edu.ph</p>
                            <div class="vertical-line mx-2"></div>
                        <   p class="modal-student-num text mb-0">20220126227</p>
                        </div>
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
    // JavaScript to add the active class
    document.addEventListener('DOMContentLoaded', function() {
        // Get all filter links
        const filterLinks = document.querySelectorAll('.filter-link');

        // Add click event to each filter link
        filterLinks.forEach(link => {
            link.addEventListener('click', function(event) {
                // Remove 'active' class from all links
                filterLinks.forEach(link => link.classList.remove('active'));

                // Add 'active' class to the clicked link
                event.target.classList.add('active');
            });
        });
    });

</script>


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
