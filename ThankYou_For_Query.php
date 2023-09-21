<!-- header include  -->
<?php include "../client/app/header.php";
include "../admin/databash/dbConnect.php";
?>
<!-- header include ENd -->
<style>
    .right-tik {
        font-size: 140px;
    }

    .thnaku-wrapper {
        line-height: 10px;
    }

    .thnaku-wrapper h1 {
        font-weight: bold;
        font-size: 65px;
        color: var(--Button-background);
    }

    .thnaku-wrapper p {
        color: var(--Header-background);
        font-weight: 700;

    }

    .thnaku-wrapper .time {
        font-size: 10px;

    }
    .thnaku-wrapper img{
	width: 140px;
}
    .social-buttons {
  text-align: center;
}
.social-buttons .social-margin {
  margin-right: 15px;
}

.social-buttons .social-icon {
  margin-bottom: 15px;
  box-sizing: border-box;
  -moz-border-radius: 138px;
  -webkit-border-radius: 138px;
  border-radius: 138px;
  border: 5px solid;
  text-align: center;
  width: 50px;
  height: 50px;
  display: inline-block;
  line-height: 1px;
  padding-top: 11px;
  transition: all 0.5s;
}
.social-buttons .social-icon:hover {
  transform: rotate(360deg) scale(1.3);
}
.social-buttons .social-icon.twitter {
  font-size: 22px;
  padding-top: 10px;
  padding-left: 2px;
  border-color: #55acee;
  background-color: #55acee;
  color: #ffffff;
}
.social-buttons .social-icon.twitter:hover {
  background-color: #ffffff;
  color: #55acee;
}
.social-buttons .social-icon.linkedin {
  font-size: 24px;
  padding-top: 8px;
  padding-left: 1px;
  background-color: #0976b4;
  color: #ffffff;
  border-color: #0976b4;
}
.social-buttons .social-icon.linkedin:hover {
  background-color: #ffffff;
  color: #0976b4;
}
.social-buttons .social-icon.youtube {
  font-size: 22px;
  padding-top: 9px;
  padding-left: 0px;
  background-color: #bb0000;
  color: #ffffff;
  border-color: #bb0000;
}
.social-buttons .social-icon.youtube:hover {
  background-color: #ffffff;
  color: #bb0000;
}


</style>


<section class="mt-5 mb-5 thnaku-wrapper">
    <div class="text-center ">
    <img src="../client//imageFoleder//Cute simple phone wallpaper.gif" alt="thanku Gif">
        <h1>Thank You</h1>
        <p class="pt-2">Your submission has been received.</p>
        <?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['last_name'];
    echo "<center>$name</center>";
}
?>
        <p class="pt-2 time">This page will redirect in <span id="timer"></span>s.</p>
    </div>
    <div class="social-buttons">
  <!-- LinkedIn Button -->
  <a href="https://www.linkedin.com/company/codmsoftware/mycompany/" class="social-margin" target="blank">
      <div class="social-icon linkedin">
      <i class="fab fa-linkedin-in"></i>
          </div>
    </a>
     <!-- Youtube Button -->
     <a href="https://www.youtube.com/channel/UCXthwczjWNxYx9Ti5bJ2hDg" target="blank" class="social-margin">
      <div class="social-icon youtube">
      <i class="fab fa-youtube"></i>
      </div>
    </a>
     <!-- TwitterButton -->
     <a href="https://twitter.com/CodmSoftwa" target="blank" class="social-margin">
      <div class="social-icon twitter">
      <i class="fab fa-twitter"></i>
          </div>
    </a>
    </div>
</section>
<br>
<br>
<script type="text/javascript">
	var count = 10; 
	var redirect = "ContactUs"; 
	
	function countDown() {
		if(count >= 0){
			document.getElementById("timer").innerHTML = count--;
			setTimeout("countDown()", 1000);
		}else{
			window.location.href = redirect;
		}
	}
	countDown();
</script> 
<!-- footer include  -->
<?php include "../client/app/footer.php"; ?>
<!-- footer include ENd -->