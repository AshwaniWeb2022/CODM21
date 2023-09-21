<?php
include ("../admin/databash/dbConnect.php");
if (isset($_POST['client_id'])) {
    $client_id = $_POST['client_id'];

    // Perform the deletion in the database
    $query = "DELETE FROM `clients` WHERE id = $client_id";
    if (mysqli_query($conn, $query)) {
        echo '<script>alert("Record deleted successfully!");</script>';
        echo '<script>window.location.href = "../admin/Clients_Upload_Dashboard.php";</script>';
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}


if (isset($_POST['Event_id'])) {
    $Event_id = $_POST['Event_id'];

    // Perform the deletion in the database
    $query = "DELETE FROM `event_images` WHERE id = $Event_id";
    if (mysqli_query($conn, $query)) {
        echo '<script>alert("Record deleted successfully!");</script>';
        echo '<script>window.location.href = "../admin/Event_Upload_Dashboard.php";</script>';
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

?>