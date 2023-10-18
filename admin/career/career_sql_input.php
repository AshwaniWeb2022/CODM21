<?php
include "../databash/dbConnect.php";

if(isset($_POST['submitCareer'])){

    $titel = $_POST['JobTital'];
    $Location = $_POST['Location'];
    $Experience = $_POST['Experience'];
    $WorkLevel = $_POST['Work_Level'];
    $EmployeeType = $_POST['Employee_Type'];
    $JobDescription = $_POST['Job_Description'];

$careerSQL = "INSERT INTO `careers`(`Career_Tital`, `Career_Country`, `Career_Minimum _Year`, `Career_Work_Level`, `Career_Employee_Type`, `Career_Job_Description`) 
VALUES ('$titel','$Location','$Experience','$WorkLevel','$EmployeeType','$JobDescription')";

if($conn->query($careerSQL)){
    echo '<script>';
    echo 'window.location.href = "../career/index.php";';
    echo 'alert("test");';
    echo '</script>';
  
}else {
    echo "Error: " . mysqli_error($conn);
}

}

?>