<?php
$to = "hallo@archgridconsultant.com";
$subject = "EMAIL FROM ".$_POST['fname'];
$txt = $_POST['message'];
$headers = "From: ".$_POST['email']. "\r\n" .
"CC: vanessa@archgridconsultant.com";

mail($to,$subject,$txt,$headers);

header("location: ../contact-us.html");
?>