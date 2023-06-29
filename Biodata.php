<?php
$servername = "localhost";
$username = "username";
$password = "password";
$warung = "warkop";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $warkop);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}

// sql to create table
$sql = "CREATE TABLE Biodata (
ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Task_ID VARCHAR(100) NOT NULL,
Nama TEXT(100) NOT NULL,
Antrian VARCHAR(100) NOT NULL,
Tanggal_Kirim VARCHAR(50) NOT NULL,
Waktu TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>


