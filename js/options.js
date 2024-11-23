let selectedTheme = 'system'; // Default theme

// Theme switching logic
const setTheme = (theme) => {
  if (theme === 'light') {
    document.documentElement.setAttribute('data-theme', 'light');
  } else if (theme === 'dark') {
    document.documentElement.setAttribute('data-theme', 'dark');
  } else if (theme === 'system') {
    const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)").matches;
    document.documentElement.setAttribute('data-theme', prefersDarkScheme ? 'dark' : 'light');
  }
};

// Function to change dropdown label
const updateDropdownLabel = (themeName) => {
  document.getElementById('themeDropdown').textContent = themeName;
};

// Event listeners for dropdown items
document.querySelectorAll('.dropdown-item').forEach(item => {
  item.addEventListener('click', (e) => {
    selectedTheme = e.target.getAttribute('data-theme'); // Store the selected theme
    const themeLabel = e.target.textContent;
    updateDropdownLabel(themeLabel); // Update the dropdown button label
  });
});

// Event listener for the "Save Changes" button
document.getElementById('saveChangesBtn').addEventListener('click', () => {
  setTheme(selectedTheme); // Set the theme when the button is clicked
});

// Set the initial theme based on system preference or default
setTheme('system');

// Listen for changes in system preference
window.matchMedia("(prefers-color-scheme: dark)").addEventListener('change', (e) => {
  const theme = e.matches ? 'dark' : 'light';
  if (selectedTheme === 'system') { // Only change if system is selected
    setTheme(theme);
  }
});
