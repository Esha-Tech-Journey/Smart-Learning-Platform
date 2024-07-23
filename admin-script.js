// Additional JavaScript for administrators

// Function to toggle the visibility of user management section
function toggleUserManagement() {
    var userManagementSection = document.getElementById('user-management');
    if (userManagementSection.style.display === 'none') {
        userManagementSection.style.display = 'block';
    } else {
        userManagementSection.style.display = 'none';
    }
}

// Attach click event listener to the toggle button
var toggleButton = document.getElementById('toggle-user-management');
if (toggleButton) {
    toggleButton.addEventListener('click', toggleUserManagement);
}
