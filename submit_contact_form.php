<?php

if (isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $service = $_POST['service'];
    $movingFrom = $_POST['movingFrom'];
    $movingTo = $_POST['movingTo'];
    $movingDate = $_POST['movingDate'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];

$mailTo = "patrickmulwa012@gmail.com";
$headers = "From: ".$email;
$txt = You have received an E-mail from ".$firstName."."\n\n".$service;

mail($mailTo, $service, $txt, $headers);
header("Location: index.php?mailsend")
}