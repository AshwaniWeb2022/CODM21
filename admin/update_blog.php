<?php
include "../admin/databash/dbConnect.php";
if (isset($_POST['updateBlog'])) {
    // Validate and sanitize inputs
    $blog_id = intval($_POST['blog_id']);
    $titel = mysqli_real_escape_string($conn, $_POST['titel']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $blog_content = mysqli_real_escape_string($conn, $_POST['editor']);
    $blogUIpra = mysqli_real_escape_string($conn, $_POST['blog-conn-UI']);
    $oldImage = mysqli_real_escape_string($conn, $_POST['blog_image']);

    // Check if a file was uploaded
    if (isset($_FILES['file']) && $_FILES['file']['error'] === 0) {
        $bimgFile = $_FILES['file']['name'];
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];

        // Rename the uploaded file to avoid overwriting existing files
        $upload_dir = '../admin/Blog_image/' . $bimgFile;
        
        if (move_uploaded_file($file_tmp, $upload_dir)) {
            // File uploaded successfully
        } else {
            echo '<script>';
            echo 'alert("Error uploading the file.");';
            echo '</script>';
            exit(); // Exit the script on upload failure
        }
    } else{
        $current_image_query = "SELECT `blog_image` FROM `blogs` WHERE `blog_id` = $blog_id";
        $result = mysqli_query($conn, $current_image_query);
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $bimgFile = $row['blog_image'];
    }
}

    // Perform the database update using prepared statement
    $update_query = "UPDATE `blogs` SET `blog_image`='$bimgFile', `blog_con`='$blog_content', `blog_tital`='$titel', `blog_UI_pra`='$blogUIpra', `blog_date`='$date' WHERE `blog_id` = $blog_id";
    $stmt = mysqli_prepare($conn, $update_query);
    
    if (mysqli_stmt_execute($stmt)) {
        // Blog entry updated successfully
        header("Location: ../admin/Blog_Upload_Dashboard.php"); // Redirect to a dashboard page with an absolute URL
        exit(); // Exit the script
    } else {
        echo "Error updating blog entry: " . mysqli_error($conn); // Display an error message if the update fails
    }
    mysqli_stmt_close($stmt);
} else {
    echo '<script>';
    echo 'window.location.href = "../admin/Blog_Upload_Dashboard.php";';
    echo 'alert("Invalid request");';
    echo '</script>';
}
?>
