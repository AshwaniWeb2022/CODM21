<?php
include "../app/header.php";
include "../admin/databash/dbConnect.php";
?>
<section id="banner" style="background-image:url(../assect/upload/blog/blog_background.webp);">
    <h3 class="line text-white "> Check out our Blogs, Don’t miss them!!</h3>
</section>
<section class="container mt-5">
    <div class="row mx-auto">
        <?php
        $blogdisplya = "SELECT * FROM `blogs` ORDER BY blog_id DESC ";
        $blogresult = mysqli_query($conn, $blogdisplya);
        while ($blogrow = mysqli_fetch_assoc($blogresult)) {
        ?>

            <div class="col-lg-4 col-md-6 mb-4" id="blog_wepper">
                <a href="Full_Blog_Prevriew.php?blog_id=<?php echo $blogrow['blog_id']; ?>">
                    <img src="../admin/Blog_images/<?php echo $blogrow['blog_image']; ?>" alt="<?php echo $blogrow['blog_tital']; ?>" id="blogimagebanner">
                    <h4 class="mt-2"><?php echo $blogrow['blog_tital']; ?></h4>
                    <p class="mt-2"><?php echo $blogrow['blog_UI_pra']; ?></p>
                </a>
                <a href="Full_Blog_Prevriew.php?blog_id=<?php echo $blogrow['blog_id']; ?>" style="color: #29ade4 !important;">Read More</a>
                <div class="main-blog-info">
                    <span class="text-muted"><?php echo $blogrow['blog_date']; ?></span>
                    <span class="blogLine">|</span>
                    <span>CodM Team</span>
                    <i class="fa-solid fa-eye text-muted"></i>
                </div>

            </div>
        <?php } ?>
    </div>
</section>

<!-- footer include  -->
<?php include "../app/footer.php"; ?>
<!-- footer include ENd -->