<?php
include("../admin/databash/dbConnect.php");

if (isset($_POST['blogSubmit'])) {

    // Check if the file input field is set and not empty
    if (isset($_FILES['file']) && !empty($_FILES['file']['name'])) {
        $bimgFile = $_FILES['file']['name'];
        $btmp_dir = $_FILES['file']['tmp_name'];
        $bimgSize = $_FILES['file']['size'];
        $bimgType = $_FILES['file']['type'];

        // Define the target directory where the image will be stored
        $bimageStore = '../admin/Blog_image/'.$bimgFile;

        // Move the uploaded file to the target directory
        if (move_uploaded_file($btmp_dir, $bimageStore)) {
            // Image uploaded successfully, continue with database insertion
            $long_desc = mysqli_real_escape_string($conn, $_POST['editor']);
            $blogTitel = mysqli_real_escape_string($conn, $_POST['titel']);
            $blogdate = mysqli_real_escape_string($conn, $_POST['date']);
            $blogUIConn = mysqli_real_escape_string($conn, $_POST['blog-conn-UI']);

            // Create the SQL query using prepared statements to prevent SQL injection
            $BlogQuery = "INSERT INTO `blogs`(`blog_image`, `blog_con`, `blog_tital`, `blog_UI_pra`, `blog_date`) VALUES (?, ?, ?, ?, ?)";
            $stmt = mysqli_prepare($conn, $BlogQuery);

            if ($stmt) {
                // Bind the parameters and execute the query
                mysqli_stmt_bind_param($stmt, "sssss", $bimgFile, $long_desc, $blogTitel, $blogUIConn, $blogdate);
                if (mysqli_stmt_execute($stmt)) {
                    // Redirect to the success page
                    header("Location: ../admin/Blog_Upload_Dashboard.php");
                    exit();
                } else {
                    echo "Failed to execute the SQL query.";
                }
                mysqli_stmt_close($stmt);
            } else {
                echo "Failed to prepare the SQL statement.";
            }
        } else {
            echo "Failed to move the uploaded file to the target directory.";
        }
    } else {
        echo "No file was uploaded.";
    }
}
?>
