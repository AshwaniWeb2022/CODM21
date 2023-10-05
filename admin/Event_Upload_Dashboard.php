<?php
include "../admin/app/Dashboard_header.php";
include("../admin/databash/dbConnect.php")
?>
<main>
<div class="container">
        <h2>Event Images  Upload Form</h2>
        <form action="../admin/Event_Upload.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="image">Event Image:</label>
                <input type="file" class="form-control-file" name="Event_image" require>
            </div>
            <div class="form-group">
                <label for="image">Event alert message</label>
                <input type="text" class="form-control" name="Event_alert_message" require>
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>

        <hr>

        <div class="row">
        <?php
            // / Fetch client data from the database
            $query = "SELECT * FROM `event_images`";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
          <div class="col-lg-3 mb-2">
          <img src="<?php echo $row['image_data']; ?>" alt="<?php echo $row['image_name']; ?>">
          <a href="EventDelete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a>
          </div>
          <?php } ?>    
        </div>
</div>
</main>

<?php
include "../admin/app/Dashboard_Footer.php";
?>