<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#C00411">
        <title>UEnventory</title>

        <link rel="stylesheet" href="css/index.css?v=2.2">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap" rel="stylesheet">
    </head>

    <bodys>
        <?php include 'php/config.php'; ?>

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

                <div class="signin-form-container" id="signin-form-container">
                    <form method="POST" action="php/read.php" id="signin-form">
                        <!-- <input type="hidden" name="form_name" value="signin_form"> -->
                        <input type="hidden" name="form_name" value="signin_form_2">
                        <input type="hidden" name="user_type" id="user_type" value="faculty">

                        <div class="signIn-container-content">
                            <div class="signIn-header-container">
                                Sign In
                            </div>

                            <div class="selector-container">
                                <a href="#faculty" id="faculty-link" class="active" onclick="setUserType('faculty')">Faculty</a>
                                <a href="#student" id="student-link" onclick="setUserType('student')">Student</a>
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
                            </div>

                            <div class="link-container">
                                <a id="#forgot-pass" class="forgot-password-link">Forgot Password?</a>
                                <!-- <span class="sign-up-link">Don't have an account? <a id="#sign-up">Sign Up</a></span> -->

                                <span class="sign-up-link">
                                    <div style="padding-right: 10px;">Don't have an account?</div>
                                    <a href="php/sign_up.php" class="signup-btn">
                                        Sign Up
                                    </a>
                                </span>

                            </div>
                            
                            <div class="captcha-container">
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
                                <!-- <button type="button" class="signIn-button" onclick="validateInputs()">Sign In</button> -->
                                <button type="submit" class="signIn-button" onclick="validateInputs()">Sign In</button>

                                <script>
                                    document.addEventListener("DOMContentLoaded", function () {
                                        const emailInput = document.getElementById("email");
                                        const passwordInput = document.getElementById("password");
                                        const userTypeInput = document.getElementById("user_type");
                                        const incorrectPasswordMessage = "The password you entered is incorrect.";
                                        
                                        function validateInputs() {
                                            if(document.getElementById("sigin-form-container").style.display != "block"){
                                                return;
                                            }

                                            if (!emailInput || !passwordInput) {
                                                // alert("Unable to find input fields.");
                                                return;
                                            }

                                            if (!emailInput.checkValidity()) {
                                                // alert("Please enter a valid email address.");
                                                emailInput.focus();
                                            } else if (passwordInput.value.trim() === "") {
                                                // alert("Please enter your password.");
                                                passwordInput.focus();
                                            } else if (!isPasswordCorrect(passwordInput.value)) {
                                                alert(incorrectPasswordMessage);
                                                passwordInput.focus();
                                            } else {
                                                // alert("SIGINING IN FROM VALIDATEINPUTS");
                                                document.getElementById("signin-form").submit();
                                            }
                                            // document.getElementById("signin-form").submit();
                                        }
                                        
                                        function togglePassword() {
                                            const toggleIcon = document.getElementById("toggleIcon");

                                            if (passwordInput.type === "password") {
                                                passwordInput.type = "text";
                                                toggleIcon.src = "assets/eye-fill.svg";
                                            } else {
                                                passwordInput.type = "password";
                                                toggleIcon.src = "assets/eye-slash-fill.svg";
                                            }
                                        }

                                        function setUserType(type) {
                                            userTypeInput.value = type;
                                            if (type === "faculty") {
                                                document.getElementById("faculty-link").classList.add("active");
                                                document.getElementById("student-link").classList.remove("active");
                                            } else {
                                                document.getElementById("student-link").classList.add("active");
                                                document.getElementById("faculty-link").classList.remove("active");
                                            }
                                        }

                                        // function preventBackNavigation() {
                                        //     history.pushState(null, null, window.location.href);
                                        //     window.addEventListener('popstate', function () {
                                        //         history.pushState(null, null, window.location.href);
                                        //     });
                                        // }

                                        window.validateInputs = validateInputs;
                                        window.togglePassword = togglePassword;
                                        window.setUserType = setUserType;
                                    });
                                </script>
                            
                                <div class="seperator">
                                    <div class="line"></div>
                                    <div class="or">or</div>
                                    <div class="line"></div>
                                </div>

                                <button type="button" class="google-button">
                                    <img src="assets/google_logo.svg" alt="Google logo" class="google-logo">
                                    <span class="google-text">Continue with Google</span>
                                </button>

                            </div>
                        </div>
                    </form>
                </div>


            </div>
        </div>

        <script>
            function toggleSignupForm() {
                const signinContainer = document.getElementById("signin-form-container");
                const signupContainer = document.getElementById("signup-form-container");

                // Get the computed display styles
                const signinDisplay = window.getComputedStyle(signinContainer).display;
                const signupDisplay = window.getComputedStyle(signupContainer).display;

                // Toggle visibility
                if (signinDisplay === "none") {
                    // Show sign-in and hide sign-up
                    signinContainer.style.display = "block";
                    signupContainer.style.display = "none";
                } else {
                    // Show sign-up and hide sign-in
                    signinContainer.style.display = "none";
                    signupContainer.style.display = "block";
                }
            }

        </script> 

        <!-- <script>
            history.pushState(null, null, location.href);
            window.addEventListener("popstate", function () {
                history.pushState(null, null, location.href);
            });
        </script> -->

    
    </body>

</html>
