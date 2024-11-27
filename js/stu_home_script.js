

// Process Req Step by Step

document.addEventListener("DOMContentLoaded", () => {
const steps = document.querySelectorAll(".step");
const prevButton = document.getElementById("prevButton");
const cancelButton = document.getElementById("cancelButton");
const nextButton = document.getElementById("nextButton");
const submitButton = document.getElementById("submitButton");
const modalTitle = document.getElementById("reviewItemsModalLabel");

let currentStep = 0;

const stepTitles = ["Review Items", "Request Form"];

// Format the current date as Month Day, Year (e.g., "November 10, 2024")
function getCurrentDate() {
    const currentDate = new Date();
    const options = { year: 'numeric', month: 'long', day: 'numeric' };
    return currentDate.toLocaleDateString('en-US', options);
}

// Update the UI based on the current step
function updateUI() {
    steps.forEach((step, index) => {
        step.style.display = index === currentStep ? "block" : "none";
    });

    modalTitle.textContent = stepTitles[currentStep];
    prevButton.style.display = currentStep === 0 ? "none" : "inline-block";
    cancelButton.style.display = currentStep === 0 ? "inline-block" : "none";
    nextButton.style.display = currentStep === steps.length - 1 ? "none" : "inline-block";
    submitButton.style.display = currentStep === steps.length - 1 ? "inline-block" : "none";

    // Dynamically add the current date to the modal header in step 2
    // Update the UI for Step 2
    if (currentStep === 1) {
        let dateSpan = document.getElementById("currentDate");
        if (!dateSpan) {
            // Create and insert the span element for the date if it doesn't exist
            dateSpan = document.createElement('span');
            dateSpan.id = "currentDate";
            dateSpan.style.fontSize = "14px"; // Set font size to 14px
            dateSpan.style.fontWeight = "400"; // Set font weight to 400
            dateSpan.style.marginLeft = "auto"; // Push it to the far right
            modalTitle.style.display = "flex"; // Ensure modalTitle uses flexbox
            modalTitle.style.justifyContent = "space-between"; // Space out items
            modalTitle.style.alignItems = "center"; // Vertically center items
            modalTitle.style.width = "100%"; // Ensure full width for proper spacing
            modalTitle.appendChild(dateSpan);
        }
        dateSpan.textContent = getCurrentDate();
    }

}

window.changeStep = (direction) => {
    currentStep += direction;
    updateUI();
};

    window.resetModal = () => {
    currentStep = 0;
    updateUI();
    // Close the modal
    $('#reviewItemsModal').modal('hide');
};

window.submitForm = () => {
    alert("Form submitted!");
    // Optionally close the modal
    $('#reviewItemsModal').modal('hide');
    resetModal();
};

// Initialize UI
updateUI();
});



// Character Counter

document.addEventListener("DOMContentLoaded", () => {
const purposeInput = document.getElementById("purposeInput");
const charCounter = document.getElementById("charCount");

// Function to update character count
window.updateCharacterCount = function() {
    const currentLength = purposeInput.value.length;
    const maxLength = purposeInput.getAttribute("maxlength");
    charCounter.textContent = `${currentLength}/${maxLength}`;
};
});


//Course Dropdown
document.addEventListener("DOMContentLoaded", () => {
const dropdownInput = document.getElementById("courseDropdown");
const dropdownMenu = document.getElementById("courseOptions");
const dropdownItems = Array.from(dropdownMenu.getElementsByClassName("dropdown-item"));

// Toggle dropdown visibility based on input focus
dropdownInput.addEventListener("focus", () => {
    dropdownMenu.style.display = "block";
});

dropdownInput.addEventListener("blur", () => {
    setTimeout(() => {
        dropdownMenu.style.display = "none"; // Delay to allow item selection
    }, 100);
});

// Filter dropdown options based on user input
dropdownInput.addEventListener("input", () => {
    const query = dropdownInput.value.toLowerCase();

    dropdownItems.forEach((item) => {
        if (item.textContent.toLowerCase().includes(query)) {
            item.style.display = ""; // Show matching items
        } else {
            item.style.display = "none"; // Hide non-matching items
        }
    });
});

// Set input value and hide dropdown on item click
dropdownMenu.addEventListener("click", (event) => {
    if (event.target.classList.contains("dropdown-item")) {
        dropdownInput.value = event.target.textContent;
        dropdownMenu.style.display = "none"; // Hide dropdown after selection
    }
});
});




const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

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

// Cards Column Layout

// Status Section Hidden Feature
function toggleStatusSection() {
    const statusSection = document.querySelector(".status-section");

    if (window.innerWidth < 1370) {
        statusSection.style.display = "none"; // Hide the status section
    } else {
        statusSection.style.display = "flex"; // Show the status section
    }
}

function toggleSearchInput() {
    const searchInput = document.getElementById('searchInput');
    if (window.innerWidth < 1080) {
    searchInput.style.display = 'none';
    } else {
    searchInput.style.display = 'block';
    }
}

function updateCharacterCount() {
    const textArea = document.getElementById('itemDescription');
    const charCount = document.getElementById('charCount');
    charCount.textContent = `${textArea.value.length}/120`;
}

// Run the function initially to check the window size
toggleSearchInput();
toggleStatusSection();
updateCharacterCount();


// Add event listener to adjust on window resize
window.addEventListener("resize", toggleStatusSection);
window.addEventListener('resize', toggleSearchInput);

//Save Changes Button
function showTemporaryAlert(message, duration) {
    // Set default duration to 5000ms (5 seconds)
    const alertBox = document.createElement("div");
    alertBox.textContent = message;
    alertBox.style.position = "fixed";
    alertBox.style.bottom = "35px";
    alertBox.style.right = "25px";
    alertBox.style.backgroundColor = "#f8d7da";
    alertBox.style.color = "#721c24";
    alertBox.style.padding = "10px";
    alertBox.style.border = "1px solid #f5c6cb";
    alertBox.style.borderRadius = "10px";
    alertBox.style.zIndex = "1000";
    document.body.appendChild(alertBox);

    setTimeout(() => {
        alertBox.remove();
    }, duration);
}


document.querySelectorAll('.clear-filters-btn').forEach((button) => {
button.addEventListener('click', (event) => {
    event.stopPropagation(); // Prevent dropdown from closing
    // Select all inputs with class "form-check-input" within the dropdown menu
    const allInputs = document.querySelectorAll('.dropdown-menu .form-check-input');
    // Deselect all inputs (radio buttons and checkboxes)
    allInputs.forEach((input) => {
        input.checked = false;
    });
});
});

    // For the global "Clear All Filters" button
document.getElementById('clearAllFilters').addEventListener('click', (event) => {
    event.stopPropagation(); // Prevent dropdown from closing
    // Select all inputs with class "form-check-input"
    const allInputs = document.querySelectorAll('.dropdown-menu .form-check-input');
    // Deselect all inputs
    allInputs.forEach((input) => {
        input.checked = false;
});
});




document.getElementById("addItemForm").addEventListener("submit", function(e) {
    e.preventDefault();  // Prevent form from submitting the normal way

    // Create a FormData object to send the form data
    const formData = new FormData(this);

    // Send the data using AJAX
    fetch('add_items.php', {
        method: 'POST',
        body: formData
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Create new item element in the same format as the form
                const itemElement = document.createElement("div");
                itemElement.classList.add("form-row");

                // HTML structure for displaying the item
                itemElement.innerHTML = `
                <div class="input-group">
                    <div class="input-custom-1">
                        <label for="itemId" class="form-label">ID</label>
                        <input
                            type="text"
                            class="form-control input-id"
                            value="${data.id}"
                            readonly
                        />
                    </div>
                    <div class="input-custom-1">
                        <label for="itemName" class="form-label">Item Name</label>
                        <input
                            type="text"
                            class="form-control input-item-name"
                            value="${data.itemName}"
                            readonly
                        />
                    </div>
                </div>
            `;

                // Append the new item to the items list
                document.getElementById("itemsList").appendChild(itemElement);

                // Optionally, clear the form
                document.getElementById("addItemForm").reset();
            } else {
                alert("Error adding item: " + data.error);
            }
        })
        .catch(error => console.error('Error:', error));
});


