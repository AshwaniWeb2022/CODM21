<?php
// Database connection
include ("../admin/databash/dbConnect.php");

// File upload
$targetDir = "../admin/event_imags/";
$targetFile = $targetDir . basename($_FILES["Event_image"]["name"]);
move_uploaded_file($_FILES["Event_image"]["tmp_name"], $targetFile);

// Insert data into the database
$image = $targetFile;
$iamge_alert = $_POST["Event_alert_message"];

$sql = "INSERT INTO `event_images`(`image_name`, `image_data`) VALUES ('$iamge_alert','$image')";
if ($conn->query($sql) === TRUE) {
    echo '<script>';
    echo 'window.location.href = "../admin/Event_Upload_Dashboard.php"';
    echo '</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>