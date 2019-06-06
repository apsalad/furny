<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "furn";
$port = "3306";

$conn = new mysqli($servername, $username, $password, $dbname,$port);

// Check connection
if (!$conn) {
    die("Connection failed: " . $conn->error());
}
?>
