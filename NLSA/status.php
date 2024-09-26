<?php
// Include database connection
include_once 'Conn.php';

// Check if form is submitted
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $quarter = $_POST['quarter'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];

    // Prepare SQL statement to update quarter details
    $sql = "UPDATE quarters SET start_date='$startDate', end_date='$endDate' WHERE quarter='$quarter'";

    if ($conn->query($sql) === TRUE) {
        echo "Quarter details updated successfully";
    } else {
        echo "Error updating quarter details: " . $conn->error;
    }
}

// Close database connection (only close after all operations are completed)
$conn->close();
?>
