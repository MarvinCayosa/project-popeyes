function enableEdit(editIcon) {
    const parent = editIcon.closest(".input-box");
    const passwordInput = parent.querySelector(".password-input");
    const span = parent.querySelector(".editable-content"); // Optional for non-password fields
    const isPasswordField = !!passwordInput;
    const isEditing = isPasswordField
        ? !passwordInput.hasAttribute("readonly")
        : span.getAttribute("contenteditable") === "true";

    if (isEditing) {
        // Disable editing
        if (isPasswordField) {
            passwordInput.setAttribute("readonly", "true");
            parent.classList.remove("editing");
        } else {
            span.setAttribute("contenteditable", "false");
        }
        editIcon.src = "https://img.icons8.com/ios-glyphs/30/ffffff/edit.png"; // Change icon back to edit
        editIcon.alt = "Edit";

        // Optionally save changes
        console.log(
            "Saved value:",
            isPasswordField ? passwordInput.value : span.textContent
        );
    } else {
        // Enable editing
        if (isPasswordField) {
            passwordInput.removeAttribute("readonly");
            passwordInput.focus();
            parent.classList.add("editing");
        } else {
            span.setAttribute("contenteditable", "true");
            span.focus(); // Focus for immediate editing
        }
        editIcon.src = "https://img.icons8.com/ios-glyphs/30/ffffff/checkmark.png"; // Change icon to save
        editIcon.alt = "Save";
    }
}

document.addEventListener("DOMContentLoaded", () => {
    const passwordInput = document.getElementById("passwordInput");
    const togglePassword = document.getElementById("togglePassword");

    togglePassword.addEventListener("click", () => {
        if (passwordInput.hasAttribute("readonly")) {
            alert("Enable editing to toggle password visibility.");
            return; // Exit if editing is not enabled
        }

        const isPassword = passwordInput.type === "password";
        passwordInput.type = isPassword ? "text" : "password";
        togglePassword.src = isPassword
            ? "../assets/eye-fill.svg"
            : "../assets/eye-slash-fill.svg";
    });
});


// Get the save button and the confirmation modal
const saveBtn = document.getElementById('saveBtn');
const confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));

// Add an event listener to the save button to open the confirmation modal
saveBtn.addEventListener('click', function() {
    confirmationModal.show();
});

// Preview the uploaded image
function previewImage(event) {
    const file = event.target.files[0]; // Get the selected file
    if (file) {
        const reader = new FileReader(); // Create a new FileReader instance
        reader.onload = function(e) {
            // Set the uploaded image as the source for the profile image
            document.getElementById('profileImage').src = e.target.result;
        };
        reader.readAsDataURL(file); // Read the file as a data URL
    }
}

// Add event listener to the button to trigger the file input click
document.getElementById('profileImageButton').addEventListener('click', function() {
    document.getElementById('uploadImage').click();
});
