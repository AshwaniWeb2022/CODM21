<?php
$servername = "localhost";  
$username = "CODM-1";  
$password = "CODM-1"; 
$dbname = "codm--sql";  

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
