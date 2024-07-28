<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST["send"])) {
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'patrickmulwa012@gmail.com';
    $mail->Password = 'fwww sltz fltu lcry';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('patrickmulwa012@gmail.com');

    $mail->addAddress($_POST["email"]);

    $mail->isHTML(true);

    $mail->firstName = ($_POST['firstName']);
    $mail->lastName = ($_POST['lastName']);
    $mail->service = ($_POST['service']);
    $mail->movingFrom = ($_POST['movingFrom']);
    $mail->movingTo = ($_POST['movingTo']);
    $mail->movingDate = ($_POST['movingDate']);
    $mail->phoneNumber = ($_POST['phoneNumber']);
    $mail->email = ($_POST['email']);

    $mail->submit();

    echo
    "
    <script>
    alert('Sent Successfully');
    document.location.href = 'services.html';
    </script>
    ";
}
?>