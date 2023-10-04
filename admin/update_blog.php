<?php
// Include the database connection file
include "../admin/databash/dbConnect.php";

// Check if the form was submitted with the name 'updateBlog'
if (isset($_POST['updateBlog'])) {
    // Sanitize and validate input
    $blog_id = intval($_POST['blog_id']);  // Convert 'blog_id' to an integer
    $titel = mysqli_real_escape_string($conn, $_POST['titel']);  // Escape and store 'titel'
    $date = mysqli_real_escape_string($conn, $_POST['date']);    // Escape and store 'date'
    $blog_content = mysqli_real_escape_string($conn, $_POST['editor']);  // Escape and store 'editor'
    $blogUIpra = mysqli_real_escape_string($conn, $_POST['blog-conn-UI']);  // Escape and store 'blog-conn-UI'

    // Check if a file was uploaded
    if (isset($_FILES['file']) && $_FILES['file']['error'] === 0) {
        // Handle file upload
        $file_name = $_FILES['file']['name'];  // Get the original file name
        $file_tmp = $_FILES['file']['tmp_name'];  // Get the temporary file path
        $file_type = $_FILES['file']['type'];  // Get the file type
        $file_size = $_FILES['file']['size'];  // Get the file size

        // Check file size and type here, and move the file to the desired location
        $upload_dir = "../admin/Blog_image/" . $file_name; // Set the upload directory
        $allowed_file_types = ['image/jpeg', 'image/png']; // Allowed file types

        if ($file_size > 2097152) { // Check if file size is greater than 2MB
            echo "File size is too large.";
        } elseif (!in_array($file_type, $allowed_file_types)) { // Check if file type is allowed
            echo "Invalid file type. Only JPG and PNG files are allowed.";
        } else {
            // Generate a unique file name to prevent overwriting existing files
            $file_name = uniqid() . "_" . $file_name;
            
            // Move the file to the upload directory
            if (move_uploaded_file($file_tmp, $upload_dir)) {
                echo "Uploading the file.";
            } else {
                echo "Error uploading the file.";
                exit(); // Exit the script on upload failure
            }
        }
    } else {
        $file_name = null; // No file was uploaded
    }

    // Perform the database update query
    $update_query = "UPDATE `blogs` SET `blog_image`='$file_name', `blog_con`='$blog_content', `blog_tital`='$titel', `blog_UI_pra`='$blogUIpra', `blog_date`='$date' WHERE `blog_id` = $blog_id";
    $update_result = mysqli_query($conn, $update_query);

    if ($update_result) {
        // Blog entry updated successfully
        header("Location: ../admin/Blog_Upload_Dashboard.php"); // Redirect to a dashboard page
        exit(); // Exit the script
    } else {
        echo "Error updating blog entry: " . mysqli_error($conn); // Display an error message if the update fails
    }
} else {
    // Handle invalid request
    echo "Invalid request.";
}
?>
