<?php
include "../app/header.php";
include "../admin/databash/dbConnect.php";
?>
<style>
:root{--body-bg-color:#e5ecef;--theme-bg-color:#fafafb;--body-font:"Poppins",sans-serif;--body-color:#2f2f33;--active-color:#0162ff;--active-light-color:#e1ebfb;--header-bg-color:#fff;--search-border-color:#efefef;--border-color:#d8d8d8;--alert-bg-color:#e8f2ff;--subtitle-color:#83838e;--inactive-color:#f0f0f0;--placeholder-color:#9b9ba5;--time-button:#fc5757;--level-button:#5052d5;--button-color:#fff}.dark-mode{--body-bg-color:#1d1d1d;--theme-bg-color:#13131a;--header-bg-color:#1c1c24;--alert-bg-color:#292932;--body-color:#fff;--inactive-color:#292932;--time-button:#fff;--level-button:#fff;--active-light-color:#263d63;--border-color:#26262f;--search-border-color:#26262f}::-moz-placeholder{color:var(--placeholder-color)}:-ms-input-placeholder{color:var(--placeholder-color)}::placeholder{color:var(--placeholder-color)}.job{display:flex;flex-direction:column;max-width:1400px;height:100vh;margin:0 auto;overflow:hidden;background-color:var(--theme-bg-color)}.wrapper{width:100%;display:flex;flex-direction:column;flex-grow:1;scroll-behavior:smooth;padding:30px 40px;overflow:auto}.main-container{display:flex;flex-grow:1;padding-top:30px}.search-type{width:270px;display:flex;flex-direction:column;height:100%;flex-shrink:0}.search-buttons{border:none;color:var(--button-color);background-color:var(--active-color);padding:8px 10px;border-radius:6px;font-size:13px;font-weight:600;margin-top:14px}.job-card-subtitle,.job-number,.searched-sort,.searched-sort .post-time,.type-container{color:var(--subtitle-color)}.job-time,.job-wrapper{padding-top:20px}.job-time-title{font-size:14px;font-weight:500}.type-container{display:flex;align-items:center;font-size:13px}.type-container label{margin-left:2px;display:flex;align-items:center;cursor:pointer}.type-container+.type-container{margin-top:10px}.job-number{margin-left:auto;background-color:var(--inactive-color);font-size:10px;font-weight:500;padding:5px;border-radius:4px}.detail-page .job-cards,.detail-page .searched-bar,.job-style{display:none}.job-style+label:before{content:"";margin-right:10px;width:16px;height:16px;border:1px solid var(--subtitle-color);border-radius:4px;cursor:pointer}.job-style:checked+label:before{background-color:var(--active-color);border-color:var(--active-color);background-image:url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%23fff' stroke-width='3' stroke-linecap='round' stroke-linejoin='round' class='feather feather-check'%3e%3cpath d='M20 6L9 17l-5-5'/%3e%3c/svg%3e");background-position:50%;background-size:14px;background-repeat:no-repeat}.job-style:checked+label+span{background-color:var(--active-light-color);color:var(--active-color)}.searched-jobs{display:flex;flex-direction:column;flex-grow:1;padding-left:40px}@-webkit-keyframes slideY{0%{opacity:0;transform:translateY(200px)}}@keyframes slideY{0%{opacity:0;transform:translateY(200px)}}.searched-bar{display:flex;align-items:center;justify-content:space-between;-webkit-animation:.6s both slideY;animation:.6s both slideY}.searched-show{font-size:19px;font-weight:600}.searched-sort{font-size:14px}.searched-sort .post-time{font-weight:600}.searched-sort .menu-icon{font-size:9px;color:var(--placeholder-color);margin-left:6px}.job-cards{padding-top:20px;display:grid;grid-template-columns:repeat(3,1fr);grid-column-gap:25px;grid-row-gap:25px;-webkit-animation:.6s both slideY;animation:.6s both slideY}@media screen and (max-width:1212px){.job-cards{grid-template-columns:repeat(2,1fr)}}.job-card{padding:20px 16px;background-color:var(--header-bg-color);border-radius:8px;transition:.2s}.job-card:hover{transform:scale(1.02)}.job-card svg{width:46px;padding:10px;border-radius:8px}.job-card-title{font-weight:600;margin-top:16px;font-size:20px;text-transform: uppercase; }.job-card-subtitle{font-size:13px;margin-top:14px;line-height:1.6em}.overview-card:hover{background:#2b2ecf;transition:none;transform:scale(1)}.overview-card:hover svg{box-shadow:none}.overview-card:hover .job-overview-buttons .search-buttons.level-button,.overview-card:hover .job-overview-buttons .search-buttons.time-button{background-color:#575ad8;color:#fff}.overview-card:hover .job-card-title,.overview-card:hover .job-stat{color:#fff}.overview-card:hover .job-card-subtitle,.overview-card:hover .job-day{color:#dedede}.overview-card:hover .overview-wrapper .heart{color:#fff;border-color:#fff}.overview-card:hover .overview-wrapper .heart:hover{fill:red;stroke:red;transform:scale(1.1)}.detail-button{background-color:var(--active-light-color);color:var(--active-color);font-size:11px;font-weight:500;padding:6px 8px;border-radius:4px}.detail-button+.detail-button{margin-left:4px}.job-card-buttons{display:flex;align-items:center;justify-content:space-between;width:100%;margin-top:4px}.card-buttons,.card-buttons-msg{padding:10px;width:100%;font-size:12px;cursor:pointer}.card-buttons{margin-right:12px}.card-buttons-msg{background-color:var(--inactive-color);color:var(--subtitle-color)}.menu-dot{background-color:var(--placeholder-color);box-shadow:-6px 0 0 0 var(--placeholder-color),6px 0 0 0 var(--placeholder-color);width:4px;height:4px;border:0;padding:0;border-radius:50%;margin-left:auto;margin-right:8px}.header-shadow{box-shadow:0 4px 20px rgba(88,99,148,.17);z-index:1}@-webkit-keyframes slide{0%{opacity:0;transform:translateX(300px)}}@keyframes slide{0%{opacity:0;transform:translateX(300px)}}.job-overview{flex-grow:1;display:none;-webkit-animation:.6s both slide;animation:.6s both slide}.job-overview-cards{display:flex;flex-direction:column;width:330px;height:100%;flex-shrink:0}.job-overview .overview-wrapper,.job-overview-buttons,.job-title-wrapper{display:flex;align-items:center}.job-overview-card+.job-overview-card,.overview-text-item+.overview-text-item{margin-top:20px}.job-overview-buttons{margin-top:12px}.job-overview-buttons .search-buttons{background-color:var(--inactive-color);font-size:11px;padding:6px 8px;margin-top:0;font-weight:500}.job-overview-buttons .job-day,.overview-detail .job-card-subtitle{font-size:12px;font-weight:500}.job-overview-buttons .search-buttons.time-button{color:var(--time-button);margin-right:8px}.job-overview-buttons .search-buttons.level-button{color:var(--level-button)}.job-overview-buttons .job-stat{color:var(--active-color);font-size:12px;font-weight:500;margin-left:auto}.job-overview-buttons .job-day{color:var(--subtitle-color);margin-left:8px}.job-action,.job-subtitle-wrapper{align-items:center;display:flex}.job-overview .overview-wrapper svg:first-child{width:42px;margin-right:10px}.job-overview .overview-wrapper .heart{background:0 0;box-shadow:none;width:24px;padding:4px;color:var(--subtitle-color);border:1px solid var(--border-color);margin-left:auto;margin-bottom:auto}.overview-detail .job-card-subtitle,.overview-detail .job-card-title{margin-top:4px}.job-explain{background-color:var(--header-bg-color);margin-left:40px;border-radius:0 0 8px 8px;width: 100%;}.job-action,.job-subtitle-wrapper .posted{margin-left:auto}.job-bg{border-radius:8px 8px 0 0;-o-object-fit:cover;object-fit:cover;width:100%;height:180px;transition:.3s;position:relative}.job-logos{margin-top:-30px;position:relative;margin-bottom:-36px;padding:0 20px}.job-logos svg{width:66px;padding:12px;background-color:#fff;border-radius:10px;border:4px solid var(--header-bg-color)}.job-title-wrapper .job-card-title{font-size:20px;margin-top:0;font-weight:600}.job-action svg{width:32px;border:1px solid var(--border-color);color:var(--subtitle-color);border-radius:8px;padding:6px}.job-subtitle-wrapper .app-number:before,.job-subtitle-wrapper .comp-location:before{width:3px;height:3px;border-radius:50%;background-color:var(--placeholder-color);position:absolute;content:""}.job-action svg+svg{margin-left:12px}.job-explain-content{padding:50px 25px 30px}.job-subtitle-wrapper{margin-top:20px}.job-subtitle-wrapper .company-name{color:var(--active-color);font-weight:600;font-size:14px}.job-subtitle-wrapper .comp-location,.job-subtitle-wrapper .posted{color:var(--subtitle-color);font-size:12px;font-weight:500}.job-subtitle-wrapper .comp-location{position:relative;margin-left:10px}.job-subtitle-wrapper .comp-location:before{top:49%;left:-8px}.job-subtitle-wrapper .app-number{color:var(--body-color);position:relative;margin-left:12px}.job-subtitle-wrapper .app-number:before{top:50%;left:-7px}.explain-bar{margin-top:20px;border:1px solid var(--border-color);border-radius:8px;display:flex;height:66px;padding:0 16px;align-items:center;justify-content:space-between}.explain-title{color:var(--subtitle-color);font-size:12px;line-height:40px;white-space:nowrap}.explain-subtitle{font-size:13px;font-weight:500;margin-top:-2px;white-space:nowrap}.explain-contents{height:66px}.explain-contents+.explain-contents{border-left:1px solid var(--border-color);padding-left:16px}.overview-text{margin-top:30px}.overview-text-header{font-weight:600;margin-bottom:25px}.overview-text-subheader{font-size:13px;line-height:2em}.overview-text-item{font-size:13px;position:relative;display:flex}.overview-text-item:before{content:"";border:2px solid #61bcff;border-radius:50%;height:8px;width:8px;margin-right:8px;flex-shrink:0}.detail-page .job-overview{display:flex}@media screen and (max-width:1300px){.detail-page .search-type{display:none}.detail-page .searched-jobs{padding-left:0}}@media screen and (max-width:990px){.explain-bar,.explain-contents{height:auto}.explain-bar{flex-wrap:wrap;padding-bottom:14px}.explain-contents{width:50%}.explain-contents+.explain-contents{padding:0;border:0}.explain-contents:nth-child(2)~.explain-contents{margin-top:16px;border-top:1px solid var(--border-color)}.job-subtitle-wrapper{flex-direction:column;align-items:flex-start}.job-subtitle-wrapper .posted{margin-left:0;margin-top:6px}}@media screen and (max-width:930px){.job-cards{grid-template-columns:repeat(1,1fr)}.search-job,.search-salary{display:none}.search-bar{width:auto}}@media screen and (max-width:760px){.detail-page .job-overview-cards,.user-name{display:none}.user-profile{margin-right:0}.job-explain{margin-left:0}}@media screen and (max-width:730px){.search-location,.search-type{display:none}.searched-jobs{padding-left:0}.search-menu div:not(:last-of-type){border:0}.job-cards{grid-template-columns:repeat(2,1fr)}}@media screen and (max-width:620px){.job-cards{grid-template-columns:repeat(1,1fr)}}@media screen and (max-width:520px){.search.item{display:none}.search-bar{flex-grow:1}.search-bar input{padding:0 0 0 30px}.search-button{margin-left:16px}.searched-bar{flex-direction:column;align-items:flex-start}.searched-sort{margin-top:5px}.main-container{padding-top:20px}}@media screen and (max-width:380px){.explain-contents{width:100%;margin:0}.explain-contents:nth-child(2)~.explain-contents{margin:0;border:0}.wrapper{padding:20px}.job-Box-header{padding:0 20px}}
  </style>

<section>
<div class="job">
 <div class="job-Box-header">
  <div class="user-settings">
   <div class="dark-light">
   </div>
  </div>
 </div>
 <!-- job box container  -->
 <div class="wrapper">
  <div class="main-container">
   <div class="search-type">
    <div class="job-time">
     <div class="job-time-title">Type of Employment</div>
     <div class="job-wrapper">
        <!-- left side navBar -->
      <div class="type-container">
       <input type="checkbox" id="job1" class="job-style" checked>
       <label for="job1"><b>Full Time Jobs</b> </label>
       <?php
      $numberCareer_mql = "SELECT * FROM `careers`";
      $NumberFetchCareer = mysqli_query($conn,$numberCareer_mql);
      $careerCounteNumber = mysqli_num_rows( $NumberFetchCareer);
      ?>
       <span class="job-number"><?php printf($careerCounteNumber) ?></span>
      </div>
      <div class="type-container">
       <input type="checkbox" id="job2" class="job-style" disabled>
       <label for="job2">Part Time Jobs</label>
       <span class="job-number">0</span>
      </div>
      <div class="type-container">
       <input type="checkbox" id="job3" class="job-style" disabled>
       <label for="job3">Remote Jobs</label>
       <span class="job-number">0</span>
      </div>
      <div class="type-container">
       <input type="checkbox" id="job4" class="job-style" disabled>
       <label for="job4">Internship Jobs</label>
       <span class="job-number">0</span>
      </div>
      <div class="type-container" >
       <input type="checkbox" id="job5" class="job-style" disabled>
       <label for="job5">Contract</label>
       <span class="job-number">0</span>
      </div>
      <div class="type-container">
       <input type="checkbox" id="job6" class="job-style" disabled>
       <label for="job6">Training Jobs</label>
       <span class="job-number">0</span>
      </div>
     </div>
    </div>
   </div>
   <!-- job wrapper -->
   <div class="searched-jobs">
    <div class="searched-bar">
    <?php
      $numberCareer_mql = "SELECT * FROM `careers`";
      $NumberFetchCareer = mysqli_query($conn,$numberCareer_mql);
      $careerCounteNumber = mysqli_num_rows( $NumberFetchCareer);
      ?>
     <div class="searched-show">Showing <?php printf($careerCounteNumber) ?> Jobs</div>
     <div class="searched-sort">Sort by: <span class="post-time">Newest Post </span><span class="menu-icon">▼</span></div>
    </div>

    <div class="job-cards">
        <!-- job box with titetl -->
        <?php
		   $blogdisplya = "SELECT * FROM `careers`";
       $blogresult = mysqli_query($conn, $blogdisplya);
       while ($blogrow = mysqli_fetch_assoc($blogresult)) {
      ?>

     <div class="job-card">
     <div class="job-card-title"><?php echo $blogrow['Career_Tital'];?></div>
      <div class="job-detail-buttons">
       <button class="search-buttons detail-button"><?php echo $blogrow['Career_Tital'];?></button>
       <button class="search-buttons detail-button"><?php echo $blogrow['Career_Minimum _Year'];?></button>
       <button class="search-buttons detail-button"><?php echo $blogrow['Career_Work_Level'];?></button>
      </div> 
      <div class="job-card-buttons">
       <button class="search-buttons card-buttons">Apply Now</button>
       <a href="viewJob.php?id=<?php echo $blogrow['id']; ?>" class="search-buttons card-buttons-msg text-center">Details</a>
      </div> 
     </div>
     <?php
       }
       ?>
    </div>
   </div>
  </div>
 </div>
</div>

</section>

<?php include "../app/footer.php"; ?>