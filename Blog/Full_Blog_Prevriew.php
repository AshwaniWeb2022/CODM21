<?php
include "../app/header.php";
include "../admin/databash/dbConnect.php";
?>
<?php
$blogId = $_GET['blog_id'];

$sql = "SELECT * FROM blogs WHERE blog_id = $blogId";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<style>
    #banner_full-blog {
        width: 100%;
        height: 450px;
    }
</style>
<section>
    <img src="../admin/Blog_image/<?php echo $row['blog_image']; ?>" id="banner_full-blog">
</section>
<hr>
<section class="container mt-2">
    <div class="row">
        <div class="col-lg-8">
            <div class="pt-5"><?php echo $row['blog_con']; ?></div>
        </div>

            <div class="col-lg-4">
            <?php
        $blogdisplya = "SELECT * FROM `blogs` ORDER BY blog_id DESC ";
        $blogresult = mysqli_query($conn, $blogdisplya);
        while ($blogrow = mysqli_fetch_assoc($blogresult)) {
        ?>
        <a href="Full_Blog_Prevriew.php?blog_id=<?php echo $blogrow['blog_id']; ?>">
        <div class="card mb-3" >
                <div class="row g-0" >
                    <div class="col-lg-5">
                        <img src="../admin/Blog_image/<?php echo $blogrow['blog_image']; ?>" class="img-fluid rounded-start w-100" >
                    </div>
                    
                    <div class="col-lg-7">
                    <div class="card-body p-0 ps-2">
                        <h6 style="font-size:15px" class="text-dark"><?php echo $blogrow['blog_tital']; ?></h6>
                        <p style="white-space: nowrap; overflow: hidden;  text-overflow: ellipsis; font-size:13px" class="text-muted"><?php echo $blogrow['blog_UI_pra']; ?></p>
                    </div>
                </div>
                </div>
                </div>
        </a>
                <?php } ?>
            </div>
  
    </div>
</section>

<!-- footer include  -->
<?php include "../app/footer.php"; ?>
<!-- footer include ENd -->