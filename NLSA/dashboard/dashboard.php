<?php
// This is a basic example of a PHP backend to handle requests from the frontend

// Function to display all users (just a placeholder for demonstration)
function showAllUsers() {
    // Here you would typically fetch data from the database
    // For demonstration, we'll just return a sample array of users
    $users = array(
        array('id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com'),
        array('id' => 2, 'name' => 'Jane Smith', 'email' => 'jane@example.com'),
        array('id' => 3, 'name' => 'Bob Johnson', 'email' => 'bob@example.com')
    );
    // Convert the array to JSON and echo it
    echo json_encode($users);
}

// Function to add a new user (just a placeholder for demonstration)
function addUser() {
    // Here you would typically receive data from the frontend and insert it into the database
    // For demonstration, we'll just return a success message
    echo "User added successfully.";
}

// Function to reset password for a user (just a placeholder for demonstration)
function resetPassword() {
    // Here you would typically receive data from the frontend and update the password in the database
    // For demonstration, we'll just return a success message
    echo "Password reset successfully.";
}

// Check if the request is an AJAX request
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    // If it's an AJAX request, determine which function to call based on the 'action' parameter sent from the frontend
    if(isset($_POST['action'])) {
        $action = $_POST['action'];
        switch($action) {
            case 'showAllUsers':
                showAllUsers();
                break;
            case 'addUser':
                addUser();
                break;
            case 'resetPassword':
                resetPassword();
                break;
            default:
                echo "Invalid action.";
        }
    } else {
        echo "Action parameter not specified.";
    }
} else {
    echo "This endpoint only accepts AJAX requests.";
}
?>
