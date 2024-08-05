<?php
include "../includes/config.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/src/Exception.php';
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $remarks = $_POST["remarks"];

    try {
        $mail = new PHPMailer(true);
        $mail->SMTPDebug = false;
        $mail->isSMTP();
        $mail->Host       = $_ENV['MAIL_HOST'];
        $mail->SMTPAuth   = $_ENV['MAIL_SMTPAUTH'];
        $mail->Username   = $_ENV['MAIL_USERNAME'];
        $mail->Password   = $_ENV['SENDER_PASSWORD'];
        $mail->SMTPSecure = $_ENV['MAIL_SMTPSECURE'];
        $mail->Port       = $_ENV['MAIL_PORT'];
    
        $mail->setFrom($email, $name);
        $mail->addAddress($_ENV['MAIL_RECEIVER'], $_ENV['RECEIVER']);
        $mail->isHTML(true);
        $mail->Subject = 'Golden Eyes Inquiry Lead';
        $mail->Body = "<table style='border-collapse: collapse; border: 1px solid #000;'>
            <tr>
                <td style='border: 1px solid #000; padding: 8px;'>Name:</td>
                <td style='border: 1px solid #000; padding: 8px;'>" . htmlspecialchars($name) . "</td>
            </tr>
            <tr>
                <td style='border: 1px solid #000; padding: 8px;'>Email:</td>
                <td style='border: 1px solid #000; padding: 8px;'><a href='mailto:" . htmlspecialchars($email) . "'>" . htmlspecialchars($email) . "</a></td>
            </tr>
            <tr>
                <td style='border: 1px solid #000; padding: 8px;'>Phone:</td>
                <td style='border: 1px solid #000; padding: 8px;'><a href='tel:" . htmlspecialchars($phone) . "'>" . htmlspecialchars($phone) . "</a></td>
            </tr>
            <tr>
                <td style='border: 1px solid #000; padding: 8px;'>Remarks:</td>
                <td style='border: 1px solid #000; padding: 8px;'>" .  htmlspecialchars($remarks) . "</td>
            </tr>
        </table>";
    
        $mail->send();
        echo "Message successfully sent!";
    } catch (Exception $e) {
        echo "Message Sending Failed, try again";
    }
}

?>
