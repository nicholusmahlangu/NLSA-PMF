<?php
// PHP script to handle backend operations for NLSA Performance Management System

// Include the database connection file
include_once 'Conn.php';

// Handle POST requests from frontend
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if it's an administrative action
    if (isset($_POST['action'])) {
        $action = $_POST['action'];
        
        // Perform different actions based on the request
        switch ($action) {
            case 'createProgram':
                createProgram();
                break;
            case 'deleteProgram':
                deleteProgram();
                break;
            // Add more cases for other actions if needed
        }
    }
}

// Function to create a new program
function createProgram() {
    if (isset($_POST['newProgram'])) {
        $newProgram = $_POST['newProgram'];
        
        // Insert the new program into the database
        // Example query, replace with actual query to insert into your database
        $sql = "INSERT INTO programs (name) VALUES ('$newProgram')";
        
        // Execute the query
        if (mysqli_query($conn, $sql)) {
            echo "Program created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}

// Function to delete a program
function deleteProgram() {
    if (isset($_POST['selectedProgram'])) {
        $selectedProgram = $_POST['selectedProgram'];
        
        // Delete the selected program from the database
        // Example query, replace with actual query to delete from your database
        $sql = "DELETE FROM programs WHERE name='$selectedProgram'";
        
        // Execute the query
        if (mysqli_query($conn, $sql)) {
            echo "Program deleted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}
?>
