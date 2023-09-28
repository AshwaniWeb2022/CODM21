<?php
include "../admin/databash/dbConnect.php";

if (isset($_POST['updateBlog'])) {
    // Sanitize and validate input
    $blog_id = intval($_POST['blog_id']);
    $titel = mysqli_real_escape_string($conn, $_POST['titel']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $blog_content = mysqli_real_escape_string($conn, $_POST['editor']);
    $blogUIpra = mysqli_real_escape_string($conn, $_POST['blog-conn-UI']);

    // Check if a file was uploaded
    if (isset($_FILES['file']) && $_FILES['file']['error'] === 0) {
        // Handle file upload
        $file_name = $_FILES['file']['name'];
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_type = $_FILES['file']['type'];
        $file_size = $_FILES['file']['size'];

        // Check file size and type here, and move the file to the desired location
        // Example checks:
        // if ($file_size > 2097152) { // 2MB
        //     echo "File size is too large.";
        // } elseif (!in_array($file_type, ['image/jpeg', 'image/png'])) {
        //     echo "Invalid file type. Only JPG and PNG files are allowed.";
        // } else {
        //     move_uploaded_file($file_tmp, "upload_dir/" . $file_name);
        // }

        // You should replace the above comments with your own file handling logic.
    }

    // Perform the database update query
    $update_query = "UPDATE `blogs` SET `blog_image`='$file_name', `blog_con`='$blog_content', `blog_tital`='$titel', `blog_UI_pra`='$blogUIpra', `blog_date`='$date' WHERE `blog_id` = $blog_id";
    $update_result = mysqli_query($conn, $update_query);

    if ($update_result) {
        // Blog entry updated successfully
        header("Location: ../admin/Blog_Upload_Dashboard.php");
        exit();
    } else {
        echo "Error updating blog entry: " . mysqli_error($conn);
    }
} else {
    // Handle invalid request
    echo "Invalid request.";
}
?>
