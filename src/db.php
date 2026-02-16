
<?php
$servername = "localhost"; // Replace with your MySQL server hostname
$username = "amk1002093";     // Replace with your MySQL username
$password = "vEyfRQoU";     // Replace with your MySQL password
$dbname = "wp_amk1002093";       // Replace with the name of your MySQL database

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>