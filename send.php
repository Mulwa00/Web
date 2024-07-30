<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["send"])) {
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'patrickmulwa012@gmail.com';
        $mail->Password = 'fwww sltz fltu lcry';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        // Recipients
        $mail->setFrom('patrickmulwa012@gmail.com');
        $mail->addAddress($_POST["email"]);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Moving Service Request';
        $mail->Body = "
            <h1>Service Request Details</h1>
            <p>First Name: " . htmlspecialchars($_POST['firstName']) . "</p>
            <p>Last Name: " . htmlspecialchars($_POST['lastName']) . "</p>
            <p>Service: " . htmlspecialchars($_POST['service']) . "</p>
            <p>Moving From: " . htmlspecialchars($_POST['movingFrom']) . "</p>
            <p>Moving To: " . htmlspecialchars($_POST['movingTo']) . "</p>
            <p>Moving Date: " . htmlspecialchars($_POST['movingDate']) . "</p>
            <p>Phone Number: " . htmlspecialchars($_POST['phoneNumber']) . "</p>
            <p>Email: " . htmlspecialchars($_POST['email']) . "</p>
        ";

        $mail->send();
        echo "
        <script>
        alert('Sent Successfully');
        document.location.href = 'services.html';
        </script>
        ";
    } catch (Exception $e) {
        echo "
        <script>
        alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');
        document.location.href = 'services.html';
        </script>
        ";
    }
}
?>
