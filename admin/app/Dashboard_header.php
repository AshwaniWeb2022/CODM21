<?php
require "../admin/databash/dbConnect.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodM Software  </title>
 <!-- Le CSS
    ================================================== -->
    <link rel="stylesheet" href="https://bootadmin.org/style/vendor/library.min.css">
  <link rel="stylesheet" href="https://bootadmin.org/style/vendor/jqueryui-flat/jquery-ui.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

  <link rel="stylesheet" href="https://bootadmin.org/style/core/style.min.css">

   <!-- Le Javascript Pre-loads
    ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body id="landing" class="sidebar-open">
  <div class="loading">
    <div class="loading-center"><img src="https://bootadmin.org/images/loading/map.gif" alt="Loading" /></div>
  </div>
  <div class="page-container animsition">
    <div id="dashboardPage">

      <!-- Main Menu -->
      <div class="topbar">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-5 hidden-xs">
              <div class="logo">
                <a href="/">
                  <span class="logo-emblem"><img src="https://bootadmin.org/images/boot.png" alt="BA" /></span>
                  <span class="logo-full">Bootadmin</span>
                </a>
              </div>
              <a href="#" class="menu-toggle wave-effect">
                <i class="feather icon-menu"></i>
              </a>
            </div>
            <div class="col-md-7 text-right">
              <ul>
                <!-- Offcanvas Menu -->
                <li>
                  <a href="#" class="btn wave-effect offcanvas-toggle"><i class="feather icon-settings"></i></a>
                </li>
                <li class="mobile-menu-toggle">
                  <a href="#" class="menu-toggle wave-effect">
                    <i class="feather icon-menu"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- Main Menu -->
      <div class="sidebar">
        <div class="logo">
          <a href="/">
            <span class="logo-emblem"><img src="https://bootadmin.org/images/boot.png" alt="BA" /></span>
            <span class="logo-full">CodM</span>
          </a>
        </div>
        <ul id="sidebarCookie">
          <li class="nav-item">
            <a class="nav-link wave-effect collapsed wave-effect" href="../admin/Dashboard">
              <i class="feather icon-grid"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link wave-effect collapsed wave-effect" href="../admin/Clients_Upload_Dashboard.php">
              <i class="feather icon-grid"></i>
              <span class="menu-title">Cliens Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link wave-effect collapsed wave-effect" href="../admin/Event_Upload_Dashboard">
              <i class="feather icon-grid"></i>
              <span class="menu-title">Event images Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link wave-effect collapsed wave-effect" href="../admin/Blog_Upload_Dashboard">
              <i class="feather icon-grid"></i>
              <span class="menu-title">Blog Dashboard</span>
            </a>
          </li>
          <li class="spacer"></li>
          <li class="button-container">
            <a href="#!" class="btn btn-primary display-block"><i class="feather icon-download"></i> Download</a>
          </li>
        </ul>
      </div>