<?php
include "../app/header.php";
include "../admin/databash/dbConnect.php";
?>

<section class="header-wrapper">
    <div style="background-image: url(../assect/upload/home/herontower2_large.jpg);" class="zoominheader">
        <div class="zoomoutheader">
            <h1 id="typewriter" class="text-center  text-white"></h1>
            <p class="tagLine mb-5 text-white">Optimizing Sales with Salesforce CRM Solutions</p>
            <a href="../About-Us/" class="btnLearn"><i class="fa-solid fa-user"></i>&nbsp;Learn More</a>
        </div>
    </div>
</section>

<section class="section_heading_p-top" style="position:relative;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div id="aboutImage_Wapper">
                    <img src="../assect/upload/home/AboutImage.jpg" alt="about" class="w-100 h-100">
                    <div id="Experiens_cound">
                        <?php
                        $clinetQuery = "SELECT * FROM `clients`";
                        $clinetresult = mysqli_query($conn, $clinetQuery);
                        $clinetrowcount = mysqli_num_rows($clinetresult);
                        ?>
                        <div id="count_Exp"><?php printf($clinetrowcount); ?>+</div>
                        <div class="text_count">total projects</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ps-sm-5 ">
                <h5 class="mb-3" style="color:#00A1E0;">WELCOME TO CodM</h5>
                <h2 class="about-titel_h2">Reliable Salesforce CRM partner since 2021</h2>
                <div class=" pt-4" style="line-height: 30px;">Founded in 2021, CodM specializes in world-class
                    Salesforce CRM implementation and consulting services. Our expert team of certified architects,
                    consultants and developers has successfully delivered numerous Salesforce projects across various
                    industries. With a focus on security reviews and best practices, we have earned the distinction of
                    being an official Salesforce Consulting Partner since 2021.</div>
                <div class="mt-5">
                    <a href="../About-Us/" class="hireButton"><i class="fa-solid fa-user"></i>&nbsp;Learn More</a>
                </div>
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

<section class="mt-5 pt-3 " style="background-color:#c6e3ff;">
    <div class="container py-5">
        <div class="row mb-5">
            <div class="col-lg-5 mb-2">
                <div style="color:#1239ac; font-weight:600;">Our Expertise</div>
                <div class="ourExpertiseTittel pt-3">Easy access to attractive services.</div>
            </div>
            <div class="col-lg-7">
                <div class="ourExpertiseSubTittel text-dark">
                    We're IT specialists delivering tailored Salesforce solutions, from implementation to support, for an optimized CRM experience.
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-2">
                <div class="expertiseBox blue">
                    <img src="../assect/upload/home/API-Integrationicon.png" alt="ExpertiseIcon" class="mb-2">
                    <div class="expertiseBoxTitel mb-3 mt-2">API Integration</div>
                    <div class="expertiseBoxSubTitel text-muted">Utilizes APIs for robust platform capabilities and seamless cloud service
                        integration, enhancing business agility. By fostering application networks, it promotes flexibility and asset reuse,
                        empowering teams to address evolving business needs. This enables end-users to access vital data and create strategic
                        integrations for business growth.</div>
                </div>
            </div>
            <div class="col-lg-4 mb-2">
                <div class="expertiseBox blue">
                    <img src="../assect/upload/home/omnistudio_icon.png" alt="ExpertiseIcon" class="mb-2">
                    <div class="expertiseBoxTitel mb-3 mt-2">Omnistudio (Vlocity)</div>
                    <div class="expertiseBoxSubTitel text-muted">Omnistudio: enabling seamless experiences. Our state-of-the-art
                        platform revolutionizes customer engagement with comprehensive solutions for multi-channel
                        marketing, sales automation, and data analytics. Leverage the power of Omnistudio to unlock
                        new opportunities, drive growth, and create lasting connections with your target audience.</div>
                </div>
            </div>
            <div class="col-lg-4 mb-2">
                <div class="expertiseBox blue">
                    <img src="../assect/upload/home/salesforce-industry-clouds_icon.png" alt="ExpertiseIcon" class="mb-2">
                    <div class="expertiseBoxTitel mb-3 mt-2">Industries Cloud</div>
                    <div class="expertiseBoxSubTitel text-muted">Industries Cloud revolutionizes businesses with customized
                        industry-specific solutions, driving efficiency, innovation and growth. It harnesses the power of
                        Salesforce's advanced technologies and expertise to address the unique challenges and opportunities
                        industries face and drive their success in today's competitive environment.</div>
                </div>
            </div>
            <div class="col-lg-4 mb-2">
                <div class="expertiseBox blue">
                    <img src="../assect/upload/home/ServiceCloudIcon.png" alt="ExpertiseIcon" class="mb-2">
                    <div class="expertiseBoxTitel mb-3 mt-2">Service Cloud</div>
                    <div class="expertiseBoxSubTitel text-muted">Service Cloud is at the heart of personalized service, delivering efficient and connected experiences. It streamlines workflows, automates processes and provides expert support to customer service representatives. With the goal of driving one-to-one marketing relationships, it empowers companies to engage customers across all channels and devices
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-2">
                <div class="expertiseBox blue">
                    <img src="../assect/upload/home/CPQicon.png" alt="ExpertiseIcon" class="mb-2">
                    <div class="expertiseBoxTitel mb-3 mt-2">Salesforce CPQ</div>
                    <div class="expertiseBoxSubTitel text-muted">Our solutions drive profitability by helping companies work smarter,
                        shorten sales cycles, and achieve predictable revenue growth. Our easy-to-use CPQ capabilities
                        empower sales reps to create accurate, fast price quotes that meet customers' needs and give
                        them what they really want. Work efficiently and grow profitably with us.</div>
                </div>
            </div>
            <div class="col-lg-4 mb-2">
                <div class="expertiseBox blue">
                    <img src="../assect/upload/home/ExperienceCloudIcon.png" alt="ExpertiseIcon" class="mb-2">
                    <div class="expertiseBoxTitel mb-3 mt-2">Experience Cloud</div>
                    <div class="expertiseBoxSubTitel text-muted">Experience Cloud, a Salesforce platform, enables personalized
                        CRM-connected websites and portals. It offers flexibility, customizability, security, and robust analytics tools. It's perfect for digital transformation, saving time,
                        enhancing service, lowering costs, increasing productivity, and driving revenue. Unlock the
                        incredible potential for your business' success.</div>
                </div>
            </div>

            <div class="col-lg-4 mb-2">
                <div class="expertiseBox blue">
                    <img src="../assect/upload/home/DataMigrationicon.png" alt="ExpertiseIcon" class="mb-2">
                    <div class="expertiseBoxTitel mb-3 mt-2">Data Migration</div>
                    <div class="expertiseBoxSubTitel text-muted">We provide Data Coalition, comprehensive storage, data monitoring
                        and Salesforce data migration services. Salesforce data migration is an important and challenging
                        pre-go-live task influenced by factors such as data volume, quality and source complexity.
                        Trust us for seamless and efficient Salesforce data migration solutions</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="expertiseBox blue">
                    <img src="../assect/upload/home/manu.png" alt="ExpertiseIcon" class="mb-2">
                    <div class="expertiseBoxTitel mb-3 mt-2">Manufacturing cloud</div>
                    <div class="expertiseBoxSubTitel text-muted">Salesforce Manufacturing Cloud is a new solution
                        designed specifically for manufacturers to unify account planning and forecasting,
                        providing greater visibility and collaboration across their ecosystem.</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="expertiseBox blue">
                    <img src="../assect/upload/home/SalesCloudIcon.png" alt="ExpertiseIcon" class="mb-2">
                    <div class="expertiseBoxTitel mb-3 mt-2">Sales Cloud</div>
                    <div class="expertiseBoxSubTitel text-muted">Increase sales productivity with our data driven CRM platform. Designed for B2B and B2C contexts,
                        it supports sales, marketing, and customer support. Salesforce Sales Cloud, part of Salesforce.com
                        (SFDC), maximizes the effectiveness of your sales team and drives revenue growth. Increase efficiency
                        and revenue with our intelligent automation</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-5 container-fluid mb-5">
    <h5 class="text-center" style="color:#00A1E0;"> Our Recent Clients</h5>
    <h2 class="sub_titel text-center mb-5 mt-2">Recent Success Stories</h2>
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  offset-md-3">
            <div class="clinet owl-carousel  text-center" id="ourclinet">
                <?php
                // / Fetch client data from the database
                $query = "SELECT * FROM clients";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="col-lg-4">
                        <a href=" ../<?php echo $row['clients_Weblink']; ?>" target="_blank">
                            <img src="<?php echo $row['clients_image']; ?>" alt="<?php echo $row['Client_name']; ?>" style="width:100px;">
                        </a>
                    </div>
                <?php } ?>
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



<?php include "../app/footer.php"; ?>