<?php
if (isset($_POST['First_Name']) && isset($_POST['Last_Name']) && isset($_POST['Middle_Name']) && isset($_POST['Mail_c']) && isset($_POST['Contact_c']) && isset($_POST['Address_c']) && isset($_POST['Education_c']) && isset($_FILES['file']) && isset($_POST['radio_S']) && isset($_POST['radio_c'])) {
    $filenameee = $_FILES['file']['name'];
    $fileName = $_FILES['file']['tmp_name'];
    $Job_Profile = $_POST['Job_Profile'];
    $First_Name = $_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $Middle_Name = $_POST['Middle_Name'];
    $email = $_POST['Mail_c'];
    $mobile = $_POST["Contact_c"];
    $address = $_POST["Address_c"];
    $Eduction = $_POST["Education_c"];
    $Sex = $_POST["radio_S"];
    $Select_Civil_Status = $_POST["radio_c"];

    $message = "Name = " . $First_Name . " " . $Middle_Name . " " . $Last_Name . "\r\n SEX = ". $Sex . "\r\n Select Civil Status = ". $Select_Civil_Status . "\r\n Email = " . $email . "\r\n Phone number = " . $mobile . "\r\ nAddress = " . $address . "\r\n Education = " . $Eduction . "\r\n Job Profile = " . $Job_Profile;
    $subject = $Job_Profile;
    $fromname = "CodMsoftware.com";
    $fromemail = $email;
    $mailto = 'ashwani.kumar@codmsoftware.com';

    $content = file_get_contents($fileName);
    $content = chunk_split(base64_encode($content));
    $separator = md5(time());
    $eol = "\r\n";

    $headers = "From: " . $fromname . " <" . $fromemail . ">" . $eol;
    $headers .= "MIME-Version: 1.0" . $eol;
    $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
    $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
    $headers .= "This is a MIME encoded message." . $eol;

    $body = "--" . $separator . $eol;
    $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
    $body .= "Content-Transfer-Encoding: 8bit" . $eol;
    $body .= $message . $eol;

    $body .= "--" . $separator . $eol;
    $body .= "Content-Type: application/octet-stream; name=\"" . $filenameee . "\"" . $eol;
    $body .= "Content-Transfer-Encoding: base64" . $eol;
    $body .= "Content-Disposition: attachment; filename=\"" . $filenameee . "\"" . $eol;
    $body .= $content . $eol;
    $body .= "--" . $separator . "--";

    if (mail($mailto, $subject, $body, $headers)) {
        header("location: success.php");
    } else {
        echo "Mail send... ERROR!";
        print_r(error_get_last());
    }
} else {
    // Handle the case when some form fields are missing
    echo "Some form fields are missing.";
}
?>
