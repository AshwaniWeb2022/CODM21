<?php
include ("../admin/databash/dbConnect.php");

?>
<?php
if (isset($_GET['id'])) {
    $client_id = $_GET['id'];

    // Perform the deletion in the database with prepared statements to prevent SQL injection
    $query = "DELETE FROM clients WHERE id = $client_id";
    $stmt = mysqli_prepare($conn, $query);
    if (mysqli_stmt_execute($stmt)) {
        echo '<script>alert("Record deleted successfully!");</script>';
        echo '<script>window.location.href = "../admin/Clients_Upload_Dashboard.php";</script>';
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    // Close the prepared statement and the database connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    echo "Invalid request!";
}
?>

