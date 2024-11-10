<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- automatic dark mode -->
        <meta name="theme-color" content="#C00411">

        <title>UEnventory</title>

        <link rel="stylesheet" href="index.css">

        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 

    </head>
    
    <body>

        <?php include 'db_connect.php'; ?>

        <!--  -->

        <div class="page-background-container">
            <div class="background-container">
                <img id="bg_light" src="assets/bg_image_l.svg">
                <img id="bg_dark" src="assets/bg_image_dark.svg">
            </div>
        </div>

        <div class="land-page-student poppins-regular">

            <div class="land-page-student-header">

                <div class="light-mode-logo">
                    <img class="logo-light" src="assets/logo_light.png">
                </div>

                <div class="dark-mode-logo">
                    <img class="logo-dark" src="assets/logo_dark.png">
                </div>

            </div>

            <div class="land-page-student-sub-header">
                An Inventory for UE Computer Engineering Department
            </div>

            <div class="land-page-student-signIn-container">

                <form method="POST" action="submit_form.php">

                    <input type="hidden" name="form_name" value="signin_form">

                    <div class="signIn-container-content">

                        <div class="signIn-header-container">
                            Sign In
                        </div>

                        <div class="selector-container">
                            <a href="#faculty" id="faculty-link" class="active">Faculty</a>
                            <a href="#student" id="student-link">Student</a>
                        </div>

                        <div class="signIn-signUp-container">
                            
                            <div class="email-container">
                                <label for="email" class="ue-mail">UE Email</label>
                                <input type="email" class="email-textbox" id="email" name="email" required>
                            </div>

                            <div class="password-container">
                                <label for="password" class="password">Password</label>
                                <div class="password-wrapper">
                                    <input type="password" class="email-textbox" id="password" name="password" required>
                                    <span class="eye-icon" onclick="togglePassword()">
                                        <img src="assets/eye-slash-fill.svg" id="toggleIcon" alt="Show/Hide Password">
                                    </span>
                                </div>
                            </div>

                            <!--Styles for password-->
                    
                            <style>
                                .password-wrapper {
                                    position: relative;
                                }
                    
                                .password-wrapper input {
                                    width: 100%;
                                    padding-right: 40px;
                                }
                    
                                .eye-icon {
                                    position: absolute;
                                    right: 10px;
                                    top: 58%;
                                    transform: translateY(-50%);
                                    cursor: pointer;
                                    width: 18px;
                                    height: 18px;
                                    display: none; /* Initially hidden */
                                }
                    
                                .eye-icon img {
                                    width: 18px;
                                    height: 18px;
                                    fill: #818181a5;
                                }
                            </style>
                    
                            

                        </div>

                        <div class="link-container">
                            <a href="#forgot-pass" class="forgot-password-link">Forgot Password?</a>
                            <span class="sign-up-link">    
                                Don't have an account?
                                <a href="#sign-up" >Sign Up</a>
                            </span>
                        
                        </div>



                        <div class="captcha-container">
                            
                            <!-- <img id="captcha_light" src="assets/captcha.svg"> -->
                            
                            <div class="content-container">
                                <div class="left-side">
                                    <label class="checkbox-label">
                                        <input type="checkbox" class="checkbox-input">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                </div>

                                <div class="middle-side">
                                    I'm not a robot
                                </div>

                                <div class="right-side">
                                    <div class="captcha-logo">
                                        <img id="captcha_light" src="assets/captcha_logo.svg">
                                    </div>
                                    
                                </div>
                            </div>

                        </div>



                    
                        <div class="button-section">

                            
                            <!-- <button type="button" class="signIn-button" onclick="window.location.href='home.html';">Sign In</button> -->
                        
                            <!-- start: POP UP NOTIFICATION FOR ERROR USERNAME AND PASSWORD -->

                            <button type="submit" class="signIn-button" onclick="validateInputs()">Sign In</button>

                            <script>
                                function validateInputs() {
                                    // Get the email and password input fields
                                    const emailInput = document.getElementById("email");
                                    const passwordInput = document.getElementById("password");
                            
                                    // Check if email and password are valid
                                    if (!emailInput.checkValidity()) {
                                        alert("Please enter a valid email address.");
                                        emailInput.focus();
                                    } else if (passwordInput.value.trim() === "") {
                                        alert("Please enter your password.");
                                        passwordInput.focus();
                                    }
                                }
                            
                                function togglePassword() {
                                    const passwordInput = document.getElementById("password");
                                    const toggleIcon = document.getElementById("toggleIcon");
                            
                                    if (passwordInput.type === "password") {
                                        passwordInput.type = "text";
                                        toggleIcon.src = "assets/eye-fill.svg"; // Change icon to "eye open" when showing password
                                    } else {
                                        passwordInput.type = "password";
                                        toggleIcon.src = "assets/eye-slash-fill.svg"; // Change icon back to "eye slash" when hiding password
                                    }
                                }
                            </script>


                            <!-- end  -->

                            <div class="seperator">
                                <div class="line"></div>
                                <div class="or"> or </div>
                                <div class="line"></div>
                            </div>

                            <button type="signin" class="google-button">
                                <img src="assets/google_logo.svg" alt="Google logo" class="google-logo">
                                <span class="google-text">Continue with Google</span>
                            </button>

                            

                    

                        </div>

                        

                    </div>

                </form>

            </div>

        </div>
    

        <script>
            function togglePassword() {
                const passwordInput = document.getElementById('password');
                const toggleIcon = document.getElementById('toggleIcon');
                
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    toggleIcon.src = 'assets/eye-fill.svg'; // Switch to "closed eye" icon
                } else {
                    passwordInput.type = 'password';
                    toggleIcon.src = 'assets/eye-slash-fill.svg'; // Switch back to "open eye" icon
                }
            }

            // Show/hide eye icon based on focus
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.querySelector('.eye-icon');

            passwordInput.addEventListener('focus', () => {
                eyeIcon.style.display = 'inline-block';
            });

            passwordInput.addEventListener('blur', () => {
                // Only hide if the input is not being typed into
                if (!passwordInput.value) {
                    eyeIcon.style.display = 'none';
                }
            });


            // Active Link on Faculty or Student

            document.getElementById('faculty-link').addEventListener('click', function() {
                setActiveLink('faculty-link', 'student-link');
            });

            document.getElementById('student-link').addEventListener('click', function() {
                setActiveLink('student-link', 'faculty-link');
            });

            function setActiveLink(activeId, inactiveId) {
                document.getElementById(activeId).classList.add('active');
                document.getElementById(inactiveId).classList.remove('active');
            }



        </script>

    </body>

</html>