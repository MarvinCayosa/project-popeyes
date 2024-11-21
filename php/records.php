<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Records</title>
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
    <link rel="stylesheet" href="../css/records_styles.css"/>
    <link rel="stylesheet" href="../css/scrollbar.css"/>
    <link rel="stylesheet" href="../css/options.css"/>
    <script src="../php/options.js" defer></script>
</head>
<body>

    <?php include 'config.php';?>


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
              class="avatar"
              fill="currentColor"
              class="bi bi-person-circle"
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
            <li><a class="dropdown-item" href="index.php">Log Out</a></li>
          </ul>

          <hr>
          <!--Navigation Icons-->
          <ul class="nav nav-pills flex-column d-flex align-items-center">
            <li class="nav-item d-flex justify-content-center icon-container">
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

            <li
              class="nav-item nav-link active d-flex justify-content-center icon-container"
            >
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

          <hr>

          <!--Options Icon-->
          <a
            href="#"
            class="options m-2 d-flex justify-content-center text-white text-decoration-none"
            data-bs-toggle="modal"
            data-bs-target="#optionsModal"
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
              <h1 class="header">Records</h1>
              <form class="search-form d-flex search-container" role="search">
                <input
                  class="search-bar form-control me-3"
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

              <!--Utilities Button-->
              <div class="dropdown">
                <button
                  class="utility-button"
                  type="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <svg class="menu-dot" fill="currentColor">
                    <use xlink:href="icons.svg#icon-menu-dot"></use>
                  </svg>
                </button>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" id="toggleView" class="btn"
                      >List View</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          <div class="scrollable-section">
            <div class="card-container">

                <!-- Card 1 -->
                <div class="card">
                    <div class="card-avatar">
                        <img src="../png/user.png" alt="Avatar" class="avatar-student" />
                    </div>
                    <div class="card-content">
                        <h3 class="card-name">Marvin Cayosa</h3>
                        <p class="card-subtitle">20200114814</p>
                        <hr />
                        
                        <button
                        class="view-details"
                        data-bs-toggle="modal"
                        data-bs-target="#detailsModal"
                        >
                        View Profile
                        </button>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="card">
                    <div class="card-avatar">
                        <img src="../png/user.png" alt="Avatar" class="avatar-student" />
                    </div>
                    <div class="card-content">
                        <h3 class="card-name">Alliya Virtucio</h3>
                        <p class="card-subtitle">20200114814</p>
                        <hr />
                        
                        <button
                        class="view-details"
                        data-bs-toggle="modal"
                        data-bs-target="#detailsModal"
                        >
                        View Profile
                        </button>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="card">
                    <div class="card-avatar">
                        <img src="../png/user.png" alt="Avatar" class="avatar-student" />
                    </div>
                    <div class="card-content">
                        <h3 class="card-name">Vince Vinas</h3>
                        <p class="card-subtitle">20200114814</p>
                        <hr />
                        
                        <button
                        class="view-details"
                        data-bs-toggle="modal"
                        data-bs-target="#detailsModal"
                        >
                        View Profile
                        </button>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="card">
                    <div class="card-avatar">
                        <img src="../png/user.png" alt="Avatar" class="avatar-student" />
                    </div>
                    <div class="card-content">
                        <h3 class="card-name">Clarizza Reyes</h3>
                        <p class="card-subtitle">20200114814</p>
                        <hr />
                        
                        <button
                        class="view-details"
                        data-bs-toggle="modal"
                        data-bs-target="#detailsModal"
                        >
                        View Profile
                        </button>
                    </div>
                </div>

              <!-- Add more cards here -->
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Modal for Details -->
    <div class="modal fade" id="detailsModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered detail-modal" role="document">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header position-relative d-flex">
                    <!-- Close Button -->
                    <button type="button" class="btn-close position-absolute top-0 end-0 m-2" aria-label="Close"
                    data-bs-dismiss="modal" 
                    ></button>

                    <img src="../png/user.png" alt="Avatar" class="avatar-student details" />
                    
                    <!-- User Details -->
                    <div>
                        <div class="d-flex align-items-center">
                            <h2 class="modal-tag mb-0" id="detailsModalLabel">Marvin Cayosa</h2>
                        </div>
                        <div class="subtext d-flex align-items-center">
                            <p class="text mb-0">cayosa.marvin@ue.edu.ph</p>
                            <div class="vertical-line mx-2"></div>
                            <p class="text mb-0">20200114814</p>
                        </div>
                    </div>
                </div>



                <!-- Modal Body -->
                <div class="modal-body">
                    <div class="accordion accordion-flush custom-accordion" id="borrow-section-accordion">
                        <!-- Borrowed Item 1 -->
                        <div class="accordion-item">
                
                            <h2 class="accordion-header">
                                <button
                                    class="accordion-button collapsed d-flex justify-content-between align-items-center"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne"
                                    aria-expanded="false"
                                    aria-controls="flush-collapseOne"
                                >
                                    <span class="borrow-id">0001</span>
                                    <span class="item-due">Due: October 30, 2024</span>
                                    <span class="course">Course: NCP_3106 Software Design Laboratory</span>
                                </button>
                            </h2>
                        
                            <div
                                id="flush-collapseOne"
                                class="accordion-collapse collapse"
                                data-bs-parent="#borrow-section-accordion"
                            >
                                <div class="accordion-body">
                                    <table class="table table-custom">
                                        <thead>
                                            <tr>
                                                <th scope="col">Items</th>
                                                <th class="qt-col" scope="col">Quantity</th>
                                                <th class="select-col" scope="col">Select</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Arduino Uno R4</td>
                                                <td class="qt-cell">1</td>
                                                <td class="checkbox-cell"><input type="checkbox" unchecked /></td>
                                            </tr>
                                            <tr>
                                                <td>ESP32</td>
                                                <td class="qt-cell">3</td>
                                                <td class="checkbox-cell"><input type="checkbox" unchecked /></td>
                                            </tr>
                                            <tr>
                                                <td>IR Sensor</td>
                                                <td class="qt-cell">5</td>
                                                <td class="checkbox-cell"><input type="checkbox" unchecked /></td>
                                            </tr>
                                            <tr>
                                                <td>Ultrasonic Sensor</td>
                                                <td class="qt-cell">1</td>
                                                <td class="checkbox-cell"><input type="checkbox" unchecked /></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="button-container">
                                        <button class="btn btn-success">Save Changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Borrowed Item 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button
                                    class="accordion-button collapsed d-flex justify-content-between align-items-center"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo"
                                    aria-expanded="false"
                                    aria-controls="flush-collapseTwo"
                                >
                                    <span class="borrow-id">0002</span>
                                    <span class="item-due">Due: November 19, 2024</span>
                                    <span class="course">Course: NCP_3102 Embedded Systems Laboratory</span>
                                </button>
                            </h2>
                            <div
                                id="flush-collapseTwo"
                                class="accordion-collapse collapse"
                                data-bs-parent="#borrow-section-accordion"
                            >
                                <div class="accordion-body">
                                    <table class="table table-custom">
                                        <thead>
                                            <tr>
                                                <th scope="col">Items</th>
                                                <th class="qt-col" scope="col">Quantity</th>
                                                <th class="select-col" scope="col">Select</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Raspberry Pi 4</td>
                                                <td class="qt-cell">2</td>
                                                <td class="checkbox-cell"><input type="checkbox" unchecked /></td>
                                            </tr>
                                            <tr>
                                                <td>OLED Display</td>
                                                <td class="qt-cell">1</td>
                                                <td class="checkbox-cell"><input type="checkbox" unchecked /></td>
                                            </tr>
                                            <tr>
                                                <td>Temperature Sensor</td>
                                                <td class="qt-cell">4</td>
                                                <td class="checkbox-cell"><input type="checkbox" unchecked /></td>
                                            </tr>
                                            <tr>
                                                <td>Servo Motor</td>
                                                <td class="qt-cell">3</td>
                                                <td class="checkbox-cell"><input type="checkbox" unchecked /></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="button-container">
                                        <button class="btn btn-success">Save Changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

          
    
            </div>
        </div>
    </div>


        <!-- Modal for Options -->

    <div class="modal fade" id="optionsModal" tabindex="-1" aria-labelledby="optionsModalLabel"aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered options-modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="optionsModalLabel">Options</h1>
                </div>
                <div class="modal-body">

                    <div class="themes-dropdown dropdown d-flex justify-content-between align-items-center">
                    <h5>Select a theme</h5>
                    <button class="btn themes-btn btn-secondary dropdown-toggle" type="button" id="themeDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        Select Theme
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="themeDropdown">
                        <li><a class="dropdown-item" href="#" data-theme="light">Light</a></li>
                        <li><a class="dropdown-item" href="#" data-theme="dark">Dark</a></li>
                        <li><a class="dropdown-item" href="#" data-theme="system">System</a></li>
                    </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button
                    type="button"
                    class="btn btn-cancel"
                    data-bs-dismiss="modal"
                    >
                    Cancel
                    </button>
                    <button type="button" class="btn btn-save">Save changes</button>
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

      const toggleButton_2 = document.getElementById("toggleView");
      const cardContainer = document.querySelector(".scrollable-section");

      toggleButton_2.addEventListener("click", () => {
        cardContainer.classList.toggle("list-mode");

        // Update the button text based on the current mode
        if (cardContainer.classList.contains("list-mode")) {
          toggleButton_2.textContent = "Card View";
        } else {
          toggleButton_2.textContent = "List View";
        }
      });
    </script> 
  </body>
</html>
