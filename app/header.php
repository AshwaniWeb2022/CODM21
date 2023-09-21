<?php
include "../admin/databash/dbConnect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodM Software</title>
    <META HTTP-EQUIV="Content-type" CONTENT="text/php; charset=UTF-8">
    <meta name="google-site-verification" content="pYoNVYcgXP6np5jtGBYQ0-4TJ-93U7N-02fTHm7dtec" />

    <!-- website description for google bot  -->
    <meta name="description" content="CodM Software Pvt. Ltd. is a certified Salesforce partner specializing in digital
    transformation, full-stack development and data migration services. With a skilled, certified team, they deliver
    best-in-class CRM solutions and work with international clients, following best practices and motivating their
    team for optimal performance.">
    <!-- website description for google bot End  -->


    <!-- Custom Css File  -->
    <link rel="stylesheet" href="../assect/css/style.css">

    <!-- font awesome link  start -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- font awesome link  end -->

    <!-- CSS bootstrap start -->
<link rel="stylesheet" href="../assect/plugin/bootstrap.min.css">
    <!-- CSS bootstrap end -->

    <!-- jQuary start -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- jQuary close -->

    <!--jQuary magnific-popup css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--jQuary magnific-popup ENd-->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-PEM3B81MHH"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-PEM3B81MHH');
    </script>
    <!-- Google tag (gtag.js) End-->

</head>

<body>
    <!--=============== HEADER ===============-->
    <div class="topHeding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 right-border text-white">
                    <marquee>Lorem ipsum dolor sit amet consectetur.</marquee>
                </div>
                <div class="col-lg-3 right-border text-white">
                    <span>
                        <i class="fa-solid fa-phone"></i>
                    </span>
                    <span>
                        <a href="tel:9871717425">IND : +91 9871717425</a>
                    </span>
                </div>
                <div class="col-lg-3  text-white">
                    <span>
                        <i class="fa-solid fa-envelope"></i>
                    </span>
                    <span>
                        <a href="mailto:info@codmsoftware.com"> info@codmsoftware.com</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <header class="header">
        <nav class="nav_Header px-5" aria-label="Breadcrumb" role="navigation">
            <div class="nav__data">
                <a href="../index" class="nav__logo">
                    <img src="" alt="websiteLogo" class="header_logo my-2">
                </a>
                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line nav__toggle-menu"></i>
                    <i class="ri-close-line nav__toggle-close"></i>
                </div>
            </div>
            <!--=============== NAV MENU ===============-->

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li>
                        <a href="../index" class="nav__link">Home</a>
                    </li>
                    <!--=============== DROPDOWN 1 ===============-->
                    <li class="dropdown__item">
                        <div class="nav__link dropdown__button">
                            Company <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <div class="dropdown__container">
                            <div class="dropdown__content ">
                               <div class="dropdown__group">
                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="../About-Us/" class="dropdown__link">About Us</a>
                                        </li>
                                        <li>
                                            <a href="../Career/" class="dropdown__link">Career</a>
                                        </li>
                                        <li>
                                            <a href="../Blog/" class="dropdown__link">Blog</a>
                                        </li>
                                    </ul>
                                </div> 
                            </div>
                        </div>
                    </li>
                    <li class="dropdown__item">
                        <div class="nav__link dropdown__button">
                            Products <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <div class="dropdown__container ">
                            <div class="dropdown__content ">
                                <div class="dropdown__group">
                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="../Products/Forms" class="dropdown__link">Titan Form</a>
                                        </li>
                                        <li>
                                            <a href="Docs" class="dropdown__link">Titan doc</a>
                                        </li>
                                        <li>
                                            <a href="e-signature" class="dropdown__link">Titan Sign</a>
                                        </li>
                                        <li>
                                            <a href="clm-contract-lifecycle-management" class="dropdown__link">Titan CLM</a>
                                        </li>
                                        <li>
                                            <a href="survey" class="dropdown__link">Titan Survey</a>
                                        </li>
                                        <li>
                                            <a href="web-application" class="dropdown__link">Titan Web</a>
                                        </li>
                                        <li>
                                            <a href="flow-automation" class="dropdown__link">Titan Flow</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown__item">
                        <div class="nav__link dropdown__button">
                        Services <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <div class="dropdown__container ">
                            <div class="dropdown__content ">
                                <div class="dropdown__group">
                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="../Services/Omni" class="dropdown__link">OMNISTUDIO</a>
                                        </li>
                                        <li>
                                            <a href="Industries_Cloud" class="dropdown__link">SALESFORCE INDUSTRIES CLOUD</a>
                                        </li>
                                        <li>
                                            <a href="API_integration" class="dropdown__link">API INTEGRATION</a>
                                        </li>
                                        <li>
                                            <a href="Implementation" class="dropdown__link">SALESFORCE IMPLEMENTATION</a>
                                        </li>
                                        <li>
                                            <a href="Consulting" class="dropdown__link">CONSULTING SERVICES</a>
                                        </li>
                                        <li>
                                            <a href="Support_And_Maintenance" class="dropdown__link">SUPPORT AND MAINTENANCE</a>
                                        </li>
                                        <li>
                                            <a href="Data_Migration" class="dropdown__link">DATA MIGRATION</a>
                                        </li>
                                        <li>
                                            <a href="Testing_Deployment" class="dropdown__link">TESTING AND DEPLOYMENT</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>                   
                    <li>
                        <a href="../Contact-Us/" class="nav__link">Write To Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>