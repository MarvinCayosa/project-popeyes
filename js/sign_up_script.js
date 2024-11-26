let currentStep = 1;

function showStep(step) {
    const steps = document.querySelectorAll('.step');
    steps.forEach((stepDiv, index) => {
        if (index + 1 === step) {
            stepDiv.classList.add('active');
        } else {
            stepDiv.classList.remove('active');
        }
    });
}

function nextStep(step) {
    currentStep = step;
    showStep(step);
}

function prevStep(step) {
    currentStep = step;
    showStep(step);
}

// Show the first step on page load
document.addEventListener('DOMContentLoaded', () => {
    showStep(1);
});

function validatePassword() {
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirmPassword").value;
    const passwordPattern = /^(?=.*\d)(?=.*[\W_]).{8,}$/; // At least 8 chars, 1 digit, and 1 symbol



    console.log("Password: " + password);  // Debugging line
    console.log("Confirm Password: " + confirmPassword);  // Debugging line
    if (!password || !confirmPassword) {
        alert("Please enter both password and confirm password.");
        return;
    }

    // Check if passwords do not match
    if (password !== confirmPassword) {
        alert("Passwords do not match. Please try again.");
        return;
    }

    if (!passwordPattern.test(password)) {
        alert("Password must be at least 8 characters long, include at least 1 digit, and 1 symbol.");
        return; // Exit if password doesn't meet the criteria
    }

    // If passwords match and are not empty, proceed to the next step
    
    nextStep(4);
}

function validateStep2() {
    const email = document.getElementById("email").value;
    const studentNumber = document.getElementById("studentNumber").value;
    
    // Check if the email matches the UE email pattern
    const emailPattern = /^[a-z0-9._%+-]+@ue\.edu\.ph$/i; // Case-insensitive regex
    if (!emailPattern.test(email)) {
        // alert("Please enter a valid UE email ending with @ue.edu.ph.");
        return false;
    }

    // Check if the student number is exactly 11 digits
    const studentNumberPattern = /^\d{11}$/;
    if (!studentNumberPattern.test(studentNumber)) {
        // alert("Student number must be exactly 11 digits.");
        return false;
    }

    nextStep(3); // Proceed to the next step if validation is successful
}

function previewImage(event) {
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function() {
        const avatar = document.getElementById('avatar');
        avatar.src = reader.result; // Set the avatar to the selected image
    }

    if (file) {
        reader.readAsDataURL(file); // Read the file as a data URL
    }
}

function submitForm(event) {
    // Prevent the form from submitting
    event.preventDefault();

    // Show the success message
    alert("Account created successfully!");

    // Optionally, you can reset the form after the success message
    document.getElementById("signupForm").reset();

    // Redirect to the sign-in page after the account is created
    window.location.href = "index.php"; // Replace "index.php" with the URL of your sign-in page
}

function togglePasswordVisibility(inputId) {
    var input = document.getElementById(inputId);
    var icon = document.getElementById(inputId === 'password' ? 'toggleIcon' : 'toggleIconConfirm');
    
    // Toggle password visibility
    if (input.type === "password") {
        input.type = "text";
        // icon.src = "assets/eye-fill.svg";  // Show the eye icon
        icon.src = "assets/eye-fill.svg";

    } else {
        input.type = "password";
        icon.src = "assets/eye-slash-fill.svg";  // Show the eye-slash icon
    }
}

