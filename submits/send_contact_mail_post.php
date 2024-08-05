<?php
include "../includes/config.php";
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
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
    $message = $_POST["message"];

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

        //Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress($_ENV['MAIL_RECEIVER'], $_ENV['RECEIVER']);
        //$mail->addAddress('ellen@example.com');               //Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'Golden Eyes Contact Lead';
        $mail->Body = "
            <table style='border-collapse: collapse; border: 1px solid #000;'>
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
                    <td style='border: 1px solid #000; padding: 8px;'><a href='tel:+971" . htmlspecialchars($phone) . "'>+971 " . htmlspecialchars($phone) . "</a></td>
                </tr>
                    <td style='border: 1px solid #000; padding: 8px;'>Message:</td>
                    <td style='border: 1px solid #000; padding: 8px;'>" . htmlspecialchars($message) . "</td>
                </tr>
            </table>";


        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        $response['status'] = 1;
        $response['message'] = 'Our team will contact you shortly.';
    } catch (Exception $e) {
        $response['status'] = 0;
        $response['message'] = 'Message Sending Failed, try again';
    }
    header('Content-Type: application/json');
    echo json_encode($response);
}



