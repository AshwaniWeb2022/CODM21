<?php
include "../app/header.php";
include "../admin/databash/dbConnect.php";
?>

<style>
input:focus,
textarea:focus,
select:focus {
box-shadow: none !important;
}



.job-card-title {
font-size: 25px;
font-weight: bold;
text-transform: uppercase;
}

.explain-bar {
display: flex;
}

.explain-contents {
height: 66px;
width: 100%;
border: 1px solid #000000;
}
</style>
<?php
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
$JObid = $_GET['id'];

// Fetch the blog entry details
$fetch_blog_query = "SELECT * FROM `careers` WHERE `id` = $JObid";
$fetch_blog_result = mysqli_query($conn, $fetch_blog_query);

if ($fetch_blog_result && mysqli_num_rows($fetch_blog_result) > 0) {
    $blog_data = mysqli_fetch_assoc($fetch_blog_result);

    // Display the edit form with the existing blog data
?>
<section class="mt-5">
<div class="container">
<div class="row">
    <div class="col-lg-6 ">

        <div class="job-explain-content mb-2">
            <div class="job-logos">
                <img src="../assect/upload/careerimage-parID.jpg" alt="" class="w-100" style="height:100px;">
            </div>
            <div class="job-card-title ps-2 pt-3"><?php echo $blog_data['Career_Tital'];?></div>
            <hr>
            <div class="job-subtitle-wrapper mb-4 ps-2 pt-3">
                <div class="company-name"><b>Patreon :</b> <span class="comp-location"><?php echo $blog_data['Career_Country'];?></span></div>
            </div>
            <div class="explain-bar mb-4">
                <div class="explain-contents ps-2 pt-1">
                    <div class="explain-title"><b>Experience</b></div>
                    <div class="explain-subtitle"><?php echo $blog_data['Career_Minimum _Year'];?></div>
                </div>
                <div class="explain-contents ps-2 pt-1">
                    <div class="explain-title"><b>Work Level</b></div>
                    <div class="explain-subtitle"><?php echo $blog_data['Career_WorkLev'];?></div>
                </div>
                <div class="explain-contents ps-2 pt-1">
                    <div class="explain-title"><b>Employee Type</b></div>
                    <div class="explain-subtitle"><?php echo $blog_data['Career_Employee_Type'];?></div>
                </div>
            </div>
            <div class="overview-text ps-2 pt-3">
    <div class="overview-text-header"><b>Job Description</b></div>
    <div class="overview-text-item"><?php echo $blog_data['Career_Job_Description'];?></div>
    </div>
        </div>

    </div>
    <div class="col-lg-6">
        <form action="../Career/process.php" enctype="multipart/form-data" class="shadow mb-2" method="POST" id="CarreForm">
            <input type="text" name="Job_Profile" id="Job_Profile" class="form-control border-0 border-bottom mb-4" value="<?php echo $blog_data['Career_Tital'];?>" onchange="validateJobProfile()" onblur="validateJobProfileBuler()" >
            <input type="text" name="First_Name" id="First_Name" class="form-control border-0 border-bottom mb-4" placeholder="First Name">
            <input type="text" name="Last_Name" id="Last_Name" class="form-control border-0 border-bottom mb-4" placeholder="Last Name">
            <input type="text" name="Middle_Name" id="" class="form-control border-0 border-bottom mb-4" placeholder="Middle Name (Optional)">
            <input type="tel" name="Contact_c" id="Contact_c" class="form-control border-0 border-bottom mb-4" placeholder="Contact">
            <input type="mail" name="Mail_c" id="Mail_c" class="form-control border-0 border-bottom mb-4" placeholder="E-mail">
            <div class="form_check mb-4">
                <span><b>SEX : </b></span>
                <span>
                    <input type="radio" name="radio_S" id="radio_S" value="Female">
                    <label for="Female">Female</label>
                </span>
                <span>
                    <input type="radio" name="radio_S" id="radio_S" value="Male">
                    <label for="Female">Male</label>
                </span>
                <span>
                    <input type="radio" name="radio_S" id="radio_S" value="Other">
                    <label for="Female">Other</label>
                </span>
            </div>
            <div class="form_check mb-4">
                <span><b>Select Civil Status : </b></span>
                <span>
                    <input type="radio" name="radio_c" id="radio_c" value="Single">
                    <label for="Female">Single</label>
                </span>
                <span>
                    <input type="radio" name="radio_c" id="radio_c" value="Married">
                    <label for="Female">Married</label>
                </span>
                <span>
                    <input type="radio" name="radio_c" id="radio_c" value="Widow">
                    <label for="Female">Widow</label>
                </span>
            </div>
            <input type="text" name="Education_c" id="Education_c" class="form-control border-0 border-bottom mb-4" placeholder="Educational Attainment">
            <input type="text" name="Address_c" id="Address_c" class="form-control border-0 border-bottom mb-4" placeholder="Address">
            <div class="resume">
                <label class="mb-2">Attach your Resume here.</label>
                <input type="file" name="file" id="file" class="form-control border-0 border-bottom mb-4" accept=".doc,.docx,.pdf,">
            </div>

            <input type="submit" name="submit" value="Submit" class="btn btn btn-primary w-100" />
        </form>
    </div>
</div>
</div>
</section>

<?php
} else {
    echo "career entry not found.";
}
} else {
echo "Invalid career ID.";
}
?>






<?php include "../app/footer.php"; ?>