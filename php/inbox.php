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
        aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered inbox-modal modal-custom">
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
                    <p class="modal-student-num text mb-0">20220126227</p>
                </div>
              </div>

              <div class="modal-student-sched">
                <div class="modal-student-date">October 28, 2024</div>
                <div class="modal-student-time">11:59 PM</div>
              </div>
            </div>

            <hr class="modal-divider"> 

            <div class="modal-item-contents">
              <div class="modal-item-container">
                <div class="modal-item-label">
                  <div class="item-label">Items</div>
                  <div class="quantity-label">Quantity</div>
                  <div class="select-label">Select</div> <!-- New Select Column -->
                </div>
            
                <div class="modal-item-section">
                  <div class="item-name">Arduino UNO R4</div>
                  <div class="quantity-number">1</div>
                  <div class="select-checkbox">
                    <input type="checkbox" class="item-checkbox" id="arduino-uno" />
                  </div>
                </div>
            
                <div class="modal-item-section">
                  <div class="item-name">ESP32</div>
                  <div class="quantity-number">3</div>
                  <div class="select-checkbox">
                    <input type="checkbox" class="item-checkbox" id="esp32" />
                  </div>
                </div>
            
                <div class="modal-item-section">
                  <div class="item-name">Flame Sensor</div>
                  <div class="quantity-number">20</div>
                  <div class="select-checkbox">
                    <input type="checkbox" class="item-checkbox" id="flame-sensor" />
                  </div>
                </div>
            
                <div class="modal-item-section">
                  <div class="item-name">Piezo</div>
                  <div class="quantity-number">100</div>
                  <div class="select-checkbox">
                    <input type="checkbox" class="item-checkbox" id="piezo" />
                  </div>
                </div>

                <div class="modal-item-section">
                  <div class="item-name">Piezo</div>
                  <div class="quantity-number">100</div>
                  <div class="select-checkbox">
                    <input type="checkbox" class="item-checkbox" id="piezo" />
                  </div>
                </div>

                <div class="modal-item-section">
                  <div class="item-name">Piezo</div>
                  <div class="quantity-number">100</div>
                  <div class="select-checkbox">
                    <input type="checkbox" class="item-checkbox" id="piezo" />
                  </div>
                </div>

                <div class="modal-item-section">
                  <div class="item-name">Piezo</div>
                  <div class="quantity-number">100</div>
                  <div class="select-checkbox">
                    <input type="checkbox" class="item-checkbox" id="piezo" />
                  </div>
                </div>

                <div class="modal-item-section">
                  <div class="item-name">Piezo</div>
                  <div class="quantity-number">100</div>
                  <div class="select-checkbox">
                    <input type="checkbox" class="item-checkbox" id="piezo" />
                  </div>
                </div>

                <div class="modal-item-section">
                  <div class="item-name">Piezo</div>
                  <div class="quantity-number">100</div>
                  <div class="select-checkbox">
                    <input type="checkbox" class="item-checkbox" id="piezo" />
                  </div>
                </div>
              </div>

              <div class="modal-body">
                <!-- First row: ID Input and Item Name Input -->
                <div class="form-row">
                  <div class="input-group">
                    <div class="input-custom">
                      <label for="itemId" class="form-label">Borrow ID</label>
                      <input 
                        type="text" 
                        class="form-control input-id" 
                        id="itemId" 
                        placeholder="#XXXX" 
                        disabled/>
                    </div>
                    <div class="input-custom">
                      <label for="dateReturn" class="form-label">Date of Return</label>
                      <input 
                      type="date" 
                      class="form-control input-date" 
                      id="dateAdded" 
                      style="font-family: Poppins, sans-serif; font-size: 12px; font-weight: 400; color: #717171"
                      disabled
                      />
                    </div>
                  </div>
                </div>
              
                <!-- Second row: Quantity and Property -->
                <div class="form-row">
                  <div class="input-purpose">
                    <div class="input-custom">
                      <label for="itemDescription" class="form-label">Purpose</label>
                      <div class="textarea-container">
                        <textarea 
                          class="form-control input-description" 
                          id="itemDescription" 
                          rows="2" 
                          maxlength="120" 
                          oninput="updateCharacterCount()"
                          style="font-family: Poppins, sans-serif; font-size: 12px; font-weight: 400;"
                          placeholder="The purpose of the item request here..."
                          disabled></textarea>
                        <span id="charCount" class="char-counter">0/120</span>
                      </div> 
                    </div>               
                  </div>
                </div>
              
                <!-- Third row: Description -->
                <div class="form-row">
                  <div class="input-group">
                    <div class="input-custom">
                      <div class="input-custom">
                        <label for="itemName" class="form-label">Course</label>
                        <input 
                          type="text" 
                          class="form-control input-course" 
                          id="itemName" 
                          placeholder="NCP3105 - Software Design" 
                          disabled/>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Fourth row: Description -->
                <div class="form-row">
                  <div class="input-group">
                    <div class="input-custom">
                      <label for="propertyType" class="form-label">Status</label>
                      <div class="custom-dropdown" id="statusDropdown">
                        <div class="selected-status">
                          <span class="status-circle grey"></span>
                          <span class="status-text">Select Status</span>
                          <span class="dropdown-icon">&#9662;</span> <!-- Dropdown arrow -->
                        </div>
                        <div class="dropdown-options" id="dropdownOptions">
                          <div class="dropdown-option-click pending" data-value="pending">
                            <span class="status-circle"></span> Pending
                          </div>
                          <div class="dropdown-option-click approved" data-value="approved">
                            <span class="status-circle"></span> Approved
                          </div>
                          <div class="dropdown-option-click rejected" data-value="rejected">
                            <span class="status-circle"></span> Rejected
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                

              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn-cancel" data-bs-dismiss="modal">
                Cancel
              </button>
              <button type="button" class="btn-save-changes" data-bs-dismiss="modal"
                onclick="showTemporaryAlert('Item Added!', 3000)">
                Save Changes
              </button>
            </div>
          </div>
        </div>
      </div>



</div>


<!-- JavaScript -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  const statusDropdown = document.getElementById("statusDropdown");
  const dropdownOptions = document.getElementById("dropdownOptions");
  const statusText = statusDropdown.querySelector(".status-text");
  const statusCircle = statusDropdown.querySelector(".status-circle");

  // Toggle dropdown visibility on click (don't close when clicking the dropdown container)
  statusDropdown.addEventListener("click", (e) => {
    e.stopPropagation(); // Prevent the click from bubbling up to the document listener
    dropdownOptions.classList.toggle("visible");
  });

  // Handle option selection
  dropdownOptions.querySelectorAll(".dropdown-option-click").forEach(option => {
    option.addEventListener("click", (e) => {
        const selectedValue = option.getAttribute("data-value");
        statusText.innerText = option.innerText.trim();
        
        // Update the circle's color
        statusCircle.className = `status-circle ${selectedValue}`;
        
        // Log before and after class removal
        console.log("Before:", dropdownOptions.classList);
        dropdownOptions.classList.remove("visible");
        console.log("After:", dropdownOptions.classList);
    });
    });


  // Hide dropdown if clicked outside
  document.addEventListener("click", (e) => {
    if (statusDropdown.contains(e.target)) {
      dropdownOptions.classList.remove("visible");
    }
  });
});



</script>



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
        if (event.target.classList.contains("dropdown-option-click")) {
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
