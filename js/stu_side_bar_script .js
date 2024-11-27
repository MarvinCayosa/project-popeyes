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


