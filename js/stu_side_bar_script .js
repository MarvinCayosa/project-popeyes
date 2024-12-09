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


// Function to fetch the message count from the server
function updateMessageCount() {
    fetch('inbox_count.php') // The PHP script we just created
        .then(response => response.text()) // Parse the response as text
        .then(count => {
            // Get the element for the badge
            const messageBadge = document.getElementById('inbox_num');
            // Set the count as the text content (ensure it's a number or string without additional tags)
            messageBadge.textContent = count.trim(); // Use .trim() to remove any unwanted whitespace or extra characters
        })
        .catch(error => {
            console.error('Error fetching message count:', error);
        });
}

// Call the function to update the message count on page load
window.onload = updateMessageCount;

