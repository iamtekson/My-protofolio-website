<?php
$servername = "localhost";
$username = "id11898088_admin";
$password = "admin";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// mysqli_select_db ("id11898088_protofolio");
mysqli_select_db($conn, 'id11898088_protofolio') or die(mysqli_error($conn));
?>