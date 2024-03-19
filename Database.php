<?php
$servername = "localhost";
$username = "aaron";
$password = "password";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->	connect_error) {
    die("Connection failed: ". $conn->connect_error);
}
echo "Connected successfully";

$conn->close();
?>