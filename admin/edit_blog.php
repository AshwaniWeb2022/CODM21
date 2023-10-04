<?php
include "../admin/app/Dashboard_header.php";
include "../admin/databash/dbConnect.php";

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $blog_id = $_GET['id'];

    // Fetch the blog entry details
    $fetch_blog_query = "SELECT * FROM `blogs` WHERE `blog_id` = $blog_id";
    $fetch_blog_result = mysqli_query($conn, $fetch_blog_query);

    if ($fetch_blog_result && mysqli_num_rows($fetch_blog_result) > 0) {
        $blog_data = mysqli_fetch_assoc($fetch_blog_result);

        // Display the edit form with the existing blog data
?>

        <main class="mb-5">
            <div class="container">
                <h3 class="Edit_Blog_Title">Edit Blog Entry</h3>
                <form action="../admin/update_blog.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="blog_id" value="<?php echo $blog_data['blog_id']; ?>">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="input_box">
                                <input type="text" name="titel" value="<?php echo $blog_data['blog_tital']; ?>" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <div class="input_box">
                                <input type="date" name="date" value="<?php echo $blog_data['blog_date']; ?>" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <div class="input_box">
                                <input type="file" name="file" class="form-control">
                                <input type="text"  disabled value="<?php echo htmlspecialchars($blog_data['blog_image']); ?>" class="form-control mt-2">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <textarea name="blog-conn-UI" class="form-control mb-3" placeholder="Blog Title Content"> <?php echo $blog_data['blog_UI_pra']; ?></textarea>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <textarea name="editor" id="editor"><?php echo $blog_data['blog_con']; ?></textarea>
                            <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
                            <script type="text/javascript">
                                CKEDITOR.replace('editor', {
                                    height: '350px',
                                    filebrowserUploadUrl: "Blog_Con_Upload.php",
                                    filebrowserUploadMethod: 'form'
                                });
                            </script>

                        </div>
                        <div class="col-2">
                            <button class="btn btn-primary btn-block" type="submit" name="updateBlog">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </main>
<?php
    } else {
        echo "Blog entry not found.";
    }
} else {
    echo "Invalid blog ID.";
}

include "../admin/app/Dashboard_Footer.php";
?>