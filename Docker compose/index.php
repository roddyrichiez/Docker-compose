<?php
$servername = $_SERVER['MYSQL_HOST'];
$username = $_SERVER['MYSQL_USER'];
$password = $_SERVER['MYSQL_PASSWORD'];
$dbname = $_SERVER['MYSQL_DATABASE'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
