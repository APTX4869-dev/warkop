<?php
$servername = "localhost";
$username = "username";
$password = "password";
$makanan = "makanan";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $makanan);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makanan</title>
</head>
<body>
    
</body>
</html>