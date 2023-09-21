<?php
include "../admin/app/Dashboard_header.php";
include "../admin/databash/dbConnect.php";
?>
      <main>
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12">
              <h4 class="page-title">Dashboard</h4>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>

        <div class="container-fluid">
          <div class="row">
            <!-- column -->
            <div class="col-sm-12 col-lg-4">
              <div class="card card-hover">
                <div class="card-body">
                    <div class="mx-auto">
                      <small>Total Blogs</small>
                      <?php
                $blogdisplayquery = "SELECT * FROM `blogs`";
                $blogresult = mysqli_query($conn, $blogdisplayquery);
                $blogrowcount = mysqli_num_rows($blogresult);
                ?>
                      <h4><?php printf($blogrowcount); ?></h4>
                    </div>
                </div>
              </div>
            </div>
           
           
            <!-- column -->
            <div class="col-sm-12 col-lg-4">
              <div class="card card-hover  bg-red">
                <div class="card-body">
                    <div class="mx-auto">
                      <small>Total Client</small>
                      <?php
                $clinetQuery = "SELECT * FROM `clients`";
                $clinetresult = mysqli_query($conn, $clinetQuery);
                $clinetrowcount = mysqli_num_rows($clinetresult);
                ?>
                      <h4><?php printf($clinetrowcount); ?></h4>
                    </div>
                </div>
              </div>
            </div>
            <!-- column -->
            <div class="col-sm-12 col-lg-4">
              <div class="card card-hover  bg-green">
                <div class="card-body">
                    <div class="mx-auto">
                      <small>Total Blogs</small>
                      <?php
                $eventdisplayquery = "SELECT * FROM `event_images`";
                $eventresult = mysqli_query($conn, $eventdisplayquery);
                $eventrowcount = mysqli_num_rows($eventresult);
                ?>
                      <h4><?php printf($eventrowcount); ?></h4>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-lg-6">
              <div class="card card-hover ">
                <div class="card-body">
                      <small>Drop Your Message</small>
                      <form action="" method="Post">
                     <input type="text" class="form-control mt-2">
                     <input type="button" value="submit" class="mt-2">
                      </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>

      <?php
include "../admin/app/Dashboard_Footer.php";
?>
<?php



?>


