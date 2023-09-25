
<?php
include "../app/header.php";
include "../admin/databash/dbConnect.php";
$aboutImageBefore = "../assect/upload/about/cur.png";
?>
<style>
    .about-FullpageWare::before {
        content: '';
        position: absolute;
        top: -50px;
        left: -60px;
        bottom: 0px;
        right: 0px;
        background-image: url('<?php echo $aboutImageBefore; ?>');
        background-repeat: no-repeat;

    }
</style>

<section style="background-image: url(../assect/upload/about/about_background.jpg);" id="banner">
    <h3 class="line-1  text-white ">Maximize your potential with codm software Experts!!</h3>
</section>


<section class="section_heading_p-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-md-2 mb-4">
                <div class="about-FullpageWare">
                    <img src="../assect/upload/about/team.jpg" alt="team" class="w-100" style="position: relative;">
                </div>
            </div>
            <div class="col-lg-6 pe-5 mb-4">
                <h5 class="mb-3 " style="color:#00A1E0;">About CodM software</h5>
                <h2 class="pb-3">Reliable Salesforce CRM partner since 2021</h2>
                <div class="tabsAbout mt-3">
                    <input type="radio" name="tabsAbout" id="tabone" checked="checked">
                    <label for="tabone">Our Mission</label>
                    <div class="tab">
                        Providing best Salesforce Solutions to the industries and to boost the business growth of our clients.
                    </div>

                    <input type="radio" name="tabsAbout" id="tabtwo">
                    <label for="tabtwo">Our Vision</label>
                    <div class="tab">
                        To make CodM pioneer in Salesforce Consulting, Implementation, and Delivery
                        of services around the world with providing customised solutions to our clients. </div>

                    <input type="radio" name="tabsAbout" id="tabthree">
                    <label for="tabthree">Our Values</label>
                    <div class="tab">
                        At CodM we believe in building relationships and partnerships with our
                        clients and this collaboration helps getting best possible results.
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="section_heading_M-top" style="background-image:url(../assect/upload/home/contact-us-background.jpg)" id="contact_Home">
    <div class="container">
        <div class="p-5">
            <h4 class="text-center text-white" style="font-weight: 700;">Hire Our Developer</h4>
            <p class="sub_titel_p text-center mb-5 mt-2 text-white">Looking for certified and experienced developers
                    to work on any projects, you are in the right place. CodM provides top notch developers with
                    hands-on expertise in Salesforce implementation, support and consultation services. Highly skilled
                    developers who are dedicated in providing best quality work to the client within the defined time.
                    Hire a direct plugin developer who can handle the ongoing projects without any hassle. Doesn’t
                    matter what the project is, we assure to avail the right person for the job.</p>
            <div class="mt-4 text-center">
                <a href="../Career/" class="hireButton "><i class="fa-solid fa-user"></i>&nbsp;Learn More</a>
            </div>
        </div>
    </div>
</section>
<section class="section_heading_M-top">
    <div class="container">
        <h5 class="text-center" style="color:#00A1E0;">We Serve To Industries</h5>
        <h2 class="sub_titel text-center mb-5 mt-2">We offer customised solutions for various industries and ensure smooth.</h2>
        <div class="row">
            <div class="col-lg-2 col-6 mb-3">
                <div class="Industreie_wrrap">
                    <i class="fa fa-bank"></i>
                    <h4>BANKING</h4>
                </div>
            </div>
            <div class="col-lg-2 col-6 mb-3">
                <div class="Industreie_wrrap">
                    <i class="fa fa-graduation-cap "></i>
                    <h4>Education</h4>
                </div>
            </div>
            <div class="col-lg-2 col-6 mb-3">
                <div class="Industreie_wrrap">
                    <i class="fas fa-medkit"></i>
                    <h4>Healthcare</h4>
                </div>
            </div>
            <div class="col-lg-2 col-6 mb-3">
                <div class="Industreie_wrrap">
                    <i class="fa fa-industry"></i>
                    <h4>Manufactur</h4>
                </div>
            </div>
            <div class="col-lg-2 col-6 mb-3 ">
                <div class="Industreie_wrrap">
                    <i class="fas fa-dollar-sign"></i>
                    <h4>Finance</h4>
                </div>
            </div>
            <div class="col-lg-2 col-6 mb-3">
                <div class="Industreie_wrrap">
                    <i class="fas fa-shield-alt insurance-icon "></i>
                    <h4>Insurance</h4>
                </div>
            </div>
            <div class="col-lg-2 col-6 mb-3">
                <div class="Industreie_wrrap">
                    <i class="fas fa-hand-holding-heart"></i>
                    <h4>NGO</h4>
                </div>
            </div>
            <div class="col-lg-2 col-6 mb-3">
                <div class="Industreie_wrrap">
                    <i class="fas fa-truck"></i>
                    <h4>Shipping</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section_heading_M-top " style="position: relative;">
<div class="grid-container" id="Events">
<?php
            // / Fetch client data from the database
            $query = "SELECT * FROM `event_images`";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
    <div class="grid-item">
        <a href="<?php echo $row['image_data']; ?>">
            <img src="<?php echo $row['image_data']; ?>" alt="<?php echo $row['image_name']; ?>" class="w-100 h-100">
        </a>
    </div>
    <?php } ?>
    </div>
</section>
<?php include "../app/footer.php"; ?>
