<?php
include("../admin/databash/dbConnect.php");

if (isset($_POST['blogSubmit'])) {

    $bimgFile = $_FILES['file']['name'];
    $btmp_dir = $_FILES['file']['tmp_name'];
    $bimgSize = $_FILES['file']['size'];
    $bimgType = $_FILES['file']['type'];
    $long_desc = $_POST['editor']; 
    $blogTitel = $_POST['titel'];
    $blogdate = $_POST['date'];
    $blogUIConn = $_POST['blog-conn-UI'];
    $bimageStore = '../admin/Blog_images/'.$bimgFile;

    if (move_uploaded_file($btmp_dir, $bimageStore)) {
        echo '<script>';
        echo 'window.location.href = "../admin/Blog_Upload_Dashboard.php"';
        echo '</script>';    } 
    $BlogQuery = "INSERT INTO `blogs`(`blog_image`, `blog_con`, `blog_tital`, `blog_UI_pra`, `blog_date`) VALUES ('$bimgFile','$long_desc','$blogTitel','$blogUIConn','$blogdate')";

    
    $blogdbResult = mysqli_query($conn, $BlogQuery);
    if(!$blogdbResult){
        echo "Failed to upload image in databash";
    }
}

?>

