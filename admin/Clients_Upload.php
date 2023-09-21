<?php
// Database connection
include ("../admin/databash/dbConnect.php");

// File upload
$targetDir = "../admin/client_images/";
$targetFile = $targetDir . basename($_FILES["Clien_image"]["name"]);
move_uploaded_file($_FILES["Clien_image"]["tmp_name"], $targetFile);

// Insert data into the database
$image = $targetFile;
$website = $_POST["Clien_Website_link"];
$ClienAlert = $_POST["Clien_Image_alert"];

$sql = "INSERT INTO `clients`(`clients_image`, `clients_Weblink`, `Client_name`) VALUES ('$image','$website','$ClienAlert')";
if ($conn->query($sql) === TRUE) {
    echo '<script>';
    echo 'window.location.href = "../admin/Clients_Upload_Dashboard.php"';
    echo '</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>