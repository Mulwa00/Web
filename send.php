<?php
// Import PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer files
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["send"])) {
    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();                                         // Set mailer to use SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                // Enable SMTP authentication
        $mail->Username   = 'patrickmulwa012@gmail.com';         // Your Gmail address
        $mail->Password   = 'romp htjf gzwb crqk';                 // Gmail App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable SSL encryption
        $mail->Port       = 465;                                 // TCP port to connect to

        // Recipients
        $mail->setFrom('patrickmulwa012@gmail.com', 'Your Name'); // Sender's email and name
        $mail->addAddress('patrickmulwa012@gmail.com');           // Your email address (the recipient)

        // Content
        $mail->isHTML(true);                                     // Set email format to HTML
        $mail->Subject = 'Moving Service Request';
        $mail->Body    = "
            <h1>Service Request Details</h1>
            <p><strong>First Name:</strong> " . htmlspecialchars($_POST['firstName']) . "</p>
            <p><strong>Last Name:</strong> " . htmlspecialchars($_POST['lastName']) . "</p>
            <p><strong>Service:</strong> " . htmlspecialchars($_POST['service']) . "</p>
        ";

        // Send the email
        if ($mail->send()) {
            echo "Message has been sent successfully!";
        } else {
            echo "Message could not be sent. Mailer Error: " . $mail->ErrorInfo;
        }

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>

