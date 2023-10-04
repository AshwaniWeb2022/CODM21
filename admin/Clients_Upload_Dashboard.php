<?php
include "../admin/app/Dashboard_header.php";
include("../admin/databash/dbConnect.php")
?>
<main>
    <div class="container">
        <h2>Clients Upload Form</h2>

        <form action="../admin/Clients_Upload.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="image">Select Image:</label>
                <input type="file" class="form-control-file" name="Clien_image" require>
            </div>
            <div class="form-group">
                <label for="image">Clien Website link</label>
                <input type="text" class="form-control" name="Clien_Website_link" require>
            </div>
            <div class="form-group">
                <label for="image">Clien Image alert</label>
                <input type="text" class="form-control" name="Clien_Image_alert" require>
            </div>

            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
        <hr>
        <div class="row">
            <?php
            // / Fetch client data from the database
            $query = "SELECT * FROM `clients`";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="col-lg-1">
                    <img src="<?php echo $row['clients_image']; ?>" alt="<?php echo $row['Client_name']; ?>">
                    <a href=" <?php echo $row['clients_Weblink']; ?>" target="_blank"><?php echo $row['clients_Weblink']; ?></a>
                    <a href="ClinteDelete.php?id=<?php echo $row['id'];?>" class="btn btn-danger" 
                    onclick="return confirm('Are you sure you want to delete this record?')">Delete</a>
                      </div>


            <?php } ?>
        </div>
    </div>

</main>



<?php
include "../admin/app/Dashboard_Footer.php";
?>