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
    <link rel="stylesheet" href="../css/faculty_sidebar.css" />
    <script src="../js/side_bar_script.js" defer></script>
</head>
<body>

    <?php include 'config.php';?>


    <div class="frame_1">
      <div class="d-flex">
        
        <?php include 'faculty_sidebar.php'; ?>

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
                  <svg class="icon-search" fill="currentColor">
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
                    <a class="dropdown-item" id="toggleView" class="btn">List View</a>
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
