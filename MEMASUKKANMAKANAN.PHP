<?php
$servername = "localhost";
$username = "username";
$password = "password";
$warkop = "warkop";

// Create connection
$conn = new mysqli ($servername, $username, $password, $warkop);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  $sql = "INSERT INTO makanan (ID, Task ID, Nama, Antrian, Waktu_mulaidilayani, Waktu_selesaidilayani, Tanggal, Status, Response)
  VALUES ('0200', '0000', 'kamu', '0000', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00' ,  '1', 'ok')";
  
  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makanan Masuk</title>
<style>
        table {
            border-collapse: collapse;
            left: 60px;
            top: 40px;
        }
        table, th, td {
            border: 2px solid black;
        }
        th, td {
            padding: 20px;
        }
        th {
            background-color: #430774;
           color: white;
        }

    </style>
</head>
<body>
    <center>    
    <table border="1">
            <tr>
                <th rowspan="2">Nama Mahasiswa</th>
                <th colspan="3">Nilai Mata Kuliah</th>
            </tr>
            <tr>
                <th>Kuliah</th>
                <th>Pemrograman</th>
                <th>Pancasila</th>
            </tr>
            <tr>
                <td>Ayu</td>
                <td>7</td>
                <td>7</td>
                <td>7</td>
            </tr>
            <tr>
                <td>Deni</td>
                <td>8</td>
                <td>8</td>
                <td>8</td>
            </tr>
            <tr>
                <td>Caca</td>
                <td>9</td>
                <td>9</td>
                <td>9</td>
            </tr>
            <tr>
                <td>Farah</td>
                <td>6</td>
                <td>6</td>
                <td>6</td>
            </tr>
        </table>
    </center>
    </body>
</html>

