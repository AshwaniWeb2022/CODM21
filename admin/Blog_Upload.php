<?php
include("../admin/databash/dbConnect.php");

if (isset($_POST['blogSubmit'])) {

    // Get file information
    $bimgFile = $_FILES['file']['name'];
    $btmp_dir = $_FILES['file']['tmp_name'];
    $bimgSize = $_FILES['file']['size'];
    $bimgType = $_FILES['file']['type'];
    $long_desc = $_POST['editor'];
    $blogTitel = $_POST['titel'];
    $blogdate = $_POST['date'];
    $blogUIConn = $_POST['blog-conn-UI'];
    $bimageStore = '../admin/Blog_image/'.$bimgFile;

    // Check if the file has been uploaded successfully
    if (move_uploaded_file($btmp_dir, $bimageStore)) {

        $BlogQuery = "INSERT INTO `blogs`(`blog_image`, `blog_con`, `blog_tital`, `blog_UI_pra`, `blog_date`) VALUES ('$bimgFile','$long_desc','$blogTitel','$blogUIConn','$blogdate')";
        
        $stmt = mysqli_prepare($conn, $BlogQuery);

        if (mysqli_stmt_execute($stmt)) {
            echo '<script>';
            echo 'window.location.href = "../admin/Blog_Upload_Dashboard.php";';
            echo 'alert("Upload image in database");';
            echo '</script>';
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
    } else {
		     echo '<script>';
            echo 'window.location.href = "../admin/Blog_Upload_Dashboard.php";';
            echo 'alert("Error: Unable to move uploaded file.");';
            echo '</script>';
    }
} else {
			     echo '<script>';
            echo 'window.location.href = "../admin/Blog_Upload_Dashboard.php";';
            echo 'alert("Error: Form not submitted..");';
            echo '</script>';
}
