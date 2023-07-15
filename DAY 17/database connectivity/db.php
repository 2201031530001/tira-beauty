<?php
$servername = "localhost";
$username = "root";
$password = "";
$dname = "ilsa";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
?>