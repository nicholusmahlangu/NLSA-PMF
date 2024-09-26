<?php
// Check if the form is submitted
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $auditedOutput = $_POST['auditedOutput'];
    $annualTarget = $_POST['annualTarget'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];

    // Process the data, for example, save it to a database
    // Here you would write code to save the data to your database
    // For demonstration purposes, we'll just print the data
    echo "Audited Output: " . $auditedOutput . "<br>";
    echo "Annual Target: " . $annualTarget . "<br>";
    echo "Q2: " . $q2 . "<br>";
    echo "Q3: " . $q3 . "<br>";
    echo "Q4: " . $q4 . "<br>";
    // You can add more processing here as needed
}
?>
