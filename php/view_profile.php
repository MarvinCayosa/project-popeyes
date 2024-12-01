<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
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
    <link rel="stylesheet" href="../css/view_profile_styles.css"/>
    <link rel="stylesheet" href="../css/scrollbar.css"/>
    <link rel="stylesheet" href="../css/options.css"/>
    <script src="../js/options.js" defer></script>
    <script src="../js/view_profile_script.js" defer></script>
    <script src="../js/side_bar_script.js" defer></script>
    <link rel="stylesheet" href="../css/faculty_sidebar.css" />
</head>
<body>

    <?php include 'config.php';?>


    <div class="frame_1">
      <div class="d-flex">
            <?php include 'faculty_sidebar.php'; ?>
            <div class="main_body flex-grow-1">
                <nav class="navbar-main navbar">
                    <div class="container-nav container-fluid">
                        <h1 class="header">Account Information</h1>


                    </div>
                </nav>
    
                <div class="profile-container">
                    <!-- Left Column for Fields -->
                    <div class="profile-fields">
                        <div class="field">
                            <div class="input-box">
                                <label class="label">Name</label>
                                <span class="editable-content" contenteditable="false">Marvin Cayosa</span>
                                <img 
                                    src="https://img.icons8.com/ios-glyphs/30/ffffff/edit.png" 
                                    alt="Edit" 
                                    class="edit-icon" 
                                    onclick="enableEdit(this)"
                                >
                            </div>
                        </div>
                        <div class="field">
                            <div class="input-box">
                                <label class="label">UE Gmail</label>
                                <span class="editable-content" contenteditable="false">cayosa.marvin@ue.edu.ph</span>
                                <img 
                                    src="https://img.icons8.com/ios-glyphs/30/ffffff/edit.png" 
                                    alt="Edit" 
                                    class="edit-icon" 
                                    onclick="enableEdit(this)"
                                >
                            </div>
                        </div>
                        <div class="field">
                            <div class="input-box">
                                <label class="label">Student Number</label>
                                <span class="editable-content" contenteditable="false">20200114814</span>
                                <img 
                                    src="https://img.icons8.com/ios-glyphs/30/ffffff/edit.png" 
                                    alt="Edit" 
                                    class="edit-icon" 
                                    onclick="enableEdit(this)"
                                >
                            </div>
                        </div>
                        <div class="field">
                            <div class="input-box">
                                <label class="label">Password</label>
                                <div class="editable-content password-container">
                                    <input 
                                        type="password" 
                                        class="password-input" 
                                        id="passwordInput" 
                                        value="marvincayosa1234" 
                                        readonly
                                    />
                                    <img 
                                        src="../assets/eye-slash-fill.svg" 
                                        alt="Toggle Visibility" 
                                        class="visibility-icon" 
                                        id="togglePassword"
                                    />
                                </div>
                                <img 
                                    src="https://img.icons8.com/ios-glyphs/30/ffffff/edit.png" 
                                    alt="Edit" 
                                    class="edit-icon" 
                                    onclick="enableEdit(this)"
                                >
                            </div>
                        </div>

                        <button class="btn btn-save" id="saveBtn">Save</button>
                    </div>

                    <!-- Right Column for Image -->
                    <div class="profile-image">
                        <h2 class="header">Profile Picture</h2>
                        <div class="avatar-container" style="position: relative;">
                            <button id="profileImageButton" class="profile-image-button" data-bs-toggle="tooltip" title="Choose picture">
                                <img src="../png/user.png" alt="User Image" class="circle-img" id="profileImage">
                            </button>

                            <input type="file" id="uploadImage" accept="image/*" style="display: none;" onchange="previewImage(event)">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


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


    <!-- Confirmation Modal -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Confirm Changes</h5>
                </div>
                <div class="modal-body">
                    <p>Are you sure all information is correct?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="confirmSave">Confirm</button>
                </div>
            </div>
        </div>
    </div>



  </body>
</html>
