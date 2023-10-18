<?php
include "../app/Dashboard_header.php";
include "../databash/dbConnect.php"
?>
<main>
    <div class="container my-5">
        <form action="../career/career_sql_input.php" method="post">
            <div class="row">
                <div class="form_box_group col-lg-4 mb-3">
                    <label for="JobTital"><b>Job Tital</b></label>
                    <input type="text" name="JobTital" class="form-control">
                </div>
                <div class="form_box_group col-lg-4 mb-3">
                    <label for="Loction"><b>Location</b></label>
                    <input type="text" name="Location" class="form-control">
                </div>
                <div class="form_box_group col-lg-4 mb-3">
                    <label for="Experience"><b>Experience</b></label>
                    <input type="text" name="Experience" class="form-control">
                </div>
                <div class="form_box_group col-lg-4 mb-3">
                    <label for="Work_Level"><b>Work Level</b></label>
                    <input type="text" name="Work_Level" class="form-control">
                </div>
                <div class="form_box_group col-lg-4 mb-3">
                    <label for="Employee_Type"><b>Employee Type</b></label>
                    <input type="text" name="Employee_Type" class="form-control">
                </div>
                <div class="form_box_group col-lg-12 mb-3">
                    <label for="Job_Description"><b>Job Description</b></label>
                    <textarea name="Job_Description" rows="7"></textarea>
                </div>
                <div class="col-lg-3 ">
                    <button name="submitCareer">submit</button>
                </div>
            </div>
        </form>
    </div>
</main>

<?php
include "../app/Dashboard_Footer.php";
?>