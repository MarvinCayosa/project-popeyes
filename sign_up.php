<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/sign_up_styles.css">
</head>
<body>
    <div class="page-background-container">
        <div class="background-container">
            <img id="bg_light" src="assets/bg_image_l.svg">
            <img id="bg_dark" src="assets/bg_image_dark.svg">
        </div>
    </div>

    <div class="form-container">
        <div class="form-content">
            <!-- Sign Up Heading -->
            <div class="sign-up-heading">
                <h2>Sign Up</h2>
                <p>Create an account</p>
                <div class="sign-in-acc">Already have an account?
                    <a href="index.php">Sign In</a>
                </div>
            </div>

            <!-- Form Section -->
            <form id="signupForm">
                <div class="step active" id="step1">
                    <label for="fullName">Full Name</label>
                    <input type="text" id="fullName" name="fullName" placeholder="Enter your full name" required>

                    
                    <div class="button-group">
                        <button style="display: none;" type="button" onclick="prevStep(1)">Back</button>
                        <button type="button" onclick="nextStep(2)">Next</button>
                    </div>
                </div>


                <div class="step" id="step2">
                    <label for="email">UE Email</label>
                    <input type="email" id="email" name="email" placeholder="example@ue.edu.ph" required 
                        pattern="^[a-zA-Z0-9._%+-]+@ue\.edu\.ph$" title="Email must end with @ue.edu.ph">
                    
                    <label for="studentNumber">Student Number</label>
                    <input type="text" id="studentNumber" name="studentNumber" placeholder="Enter your student number" required 
                        pattern="^\d{11}$" maxlength="11" title="Student number must be exactly 11 digits">
                    
                    <div class="button-group">
                        <button type="button" onclick="prevStep(1)">Back</button>
                        <button type="button" onclick="validateStep2()">Next</button>
                    </div>
                </div>
                <div class="step" id="step3">
                    <label for="password">Password</label>
                    <div class="password-container">
                        <input type="password" id="password" name="password" placeholder="Enter a password" required>
                        <img src="assets/eye-slash-fill.svg" id="toggleIcon" alt="Show/Hide Password" onclick="togglePasswordVisibility('password')">
                    </div>

                    <label for="confirmPassword">Confirm Password</label>
                    <div class="password-container">
                        <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm your password" required>
                        <img src="assets/eye-slash-fill.svg" id="toggleIconConfirm" alt="Show/Hide Password" onclick="togglePasswordVisibility('confirmPassword')">
                    </div>
                    <div class="button-group">
                        <button type="button" onclick="prevStep(2)">Back</button>
                        <button type="button" onclick="validatePassword()">Next</button>
                    </div>
                </div>
                <div class="step" id="step4">
                    <label for="profilePicture">Profile Picture</label>
                    <!-- Placeholder Avatar -->
                    <div class="avatar-container">
                        <img id="avatar" src="png/user.png" alt="Avatar" class="avatar">
                    </div>
                    
                    <!-- Upload Button below the preview -->
                    <div class="upload-btn-container">
                        <label for="profilePicture" class="upload-btn">Choose Image</label>
                        <input type="file" id="profilePicture" name="profilePicture" accept="image/*" onchange="previewImage(event)" style="display: none;">
                    </div>
                    
                    <div class="button-group">
                        <button type="button" onclick="prevStep(3)">Back</button>
                        <button type="button" onclick="submitForm(event)">Finish</button>

                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="js/sign_up_script.js"></script>
</body>
</html>
