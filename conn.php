<?php
// DB CONNECT

$hostname = 'localhost:8080';
$username = 'root';
$password = '';
$database = 'homework';

// Connecting to database
$conn = mysqli_connect(
$hostname,
$username,
$password,
$database
);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
?>