<?php
error_reporting(0);
// Database connection parameters
// Database connection settings
$host = "localhost"; // Change this if your database server is running on a different host
$username = "root"; // Default username for XAMPP MySQL
$password = ""; // Default password for XAMPP MySQL is empty
$database = "nlsa"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $fullname = $_POST['fname'];
    $email = $_POST['email'];
    $telnumber = $_POST['telnumber'];
    $mobilenumber = $_POST['fnumber'];
    $employeenumber = $_POST['idNumber'];
    $password = $_POST['psd'];

    // Prepare SQL statement to insert data into database
    $sql = "INSERT INTO registration_data (fullname, email, telnumber, mobilenumber, employeenumber, password) 
            VALUES ('$fullname', '$email', '$telnumber', '$mobilenumber', '$employeenumber', '$password')";

    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
