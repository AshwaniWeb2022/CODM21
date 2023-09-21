<?php
include "../client/app/header.php";
include "../admin/databash/dbConnect.php";
?>
<?php
$blogId = $_GET['blog_id'];

$sql = "SELECT * FROM blogs WHERE blog_id = $blogId";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<section id="banner_full" style="background-image:url(../admin/Blog_images/<?php echo $row['blog_image']; ?>);"></section>
<section class="container mt-2">
    <div class="row">
        <div class="col-lg-9">
        <!-- <img src="../admin//Blog_images/cpqprice.png" alt="" class="F-banner-image"> -->

        <div class="pt-5"><?php echo $row['blog_con']; ?></div>
        </div>
        <div class="col-lg-3">
        </div>
    </div>
</section>

<!-- footer include  -->
<?php include "../client/app/footer.php"; ?>
<!-- footer include ENd -->