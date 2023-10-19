<?php
include "../databash/dbConnect.php";

if (isset($_POST['submitCareer'])) {
    $titel = $_POST['JobTital'];
    $Location = $_POST['Location'];
    $Experience = $_POST['Experience'];
    $WorkLevel = $_POST['Work_Level'];
    $EmployeeType = $_POST['Employee_Type'];
    $JobDescription = $_POST['Job_Description'];


    $JobList_SQl = "INSERT INTO `careers`( `Career_Tital`, `Career_Country`, `Career_Employee_Type`, `Career_Job_Description`, `Career_Minimum _Year`, `Career_WorkLev`)
     VALUES ('$titel','$Location','$EmployeeType','$JobDescription','$Experience','$WorkLevel')";
    if (mysqli_query($conn, $JobList_SQl)) {
        echo '<script>';
        echo 'alert("Data inserted successfully.");';
        echo 'window.location.href = "../career/index.php";';
        echo '</script>';
    } else {
        echo "Error: " . $JobList_SQl . "<br>" . mysqli_error($conn);
    }
} else {
    echo '<script>';
    echo 'window.location.href = "../career/index.php";';
    echo 'alert("Error: Form not submitted.");';
    echo '</script>';
}

?>