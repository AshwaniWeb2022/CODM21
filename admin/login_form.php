<?php
    include '../admin/databash/dbConnect.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodM Software Admin</title>

        <!-- favicon Icon -->
        <link rel="android-chrome-icon" sizes="512x512" href="../client/faviconIcons/apple-touch-icon.png">
    <link rel="android-chrome-icon" sizes="192x192" href="./client./faviconIcons/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../client/faviconIcons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../client/faviconIcons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../client/faviconIcons/favicon-16x16.png">
    <!-- favicon Icon End -->

    <!-- custam style sheet  -->
    <link rel="stylesheet" href="../admin//cssFile//login.css">
    <!-- custam style sheet  -->
    <!-- style scheet cdn  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- style scheet cdn  -->
<!-- custome javascript  -->
<script src="../admin//javaScriptAdmin//login.js" defer></script>
<!-- custome javascript  -->
    <!-- java script cdn  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js" defer></script>
    <!-- java script cdn  -->
</head>
<body>
  <div class="container">
    <div class="loginForm my-5">
      <h2 class="text-white text-center pt-3">CodM Admin</h2>
    <svg viewBox="0 0 320 300">
        <defs>
          <linearGradient inkscape:collect="always" id="linearGradient" x1="13" y1="193.49992" x2="307" y2="193.49992" gradientUnits="userSpaceOnUse">
            <stop style="stop-color:#ff00ff;" offset="0" id="stop876" />
            <stop style="stop-color:#ff0000;" offset="1" id="stop878" />
          </linearGradient>
        </defs>
        <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
      </svg>
      <form class="form" action="../admin/login.php" method="post">
        <label for="id">Id</label>
        <input type="text" id="id" name="username" required>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        <input type="submit" id="submit" value="Login">
      </form>
    </div>
  </div>
</body>
</html>