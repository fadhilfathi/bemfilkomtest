<?php
$servername = "localhost";
$username = "bemfilkom";
$password = "rpqrcdfzch";
$dbname = "db_bemfilkom";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection Failed : " . $conn->connect_error);
}
?>

<!--  Coded By Heatcliff  -->
