<?php
//Load Composer's autoloader
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../../vendor/autoload.php';

function sendMail($contactArray) {

    $message = "<h1>Your Enquiry with Baker's Dozen</h1>\n";
    $message .= "<ul>\n";

    foreach($contactArray as $key => $value) {
        if ($key !== "newsletter" || $key !== "date") {
            $message .= "<li><strong>$key:</strong> $value</li>\n";
        }
    }

    $message .= "</ul>\n";

    try {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = $_ENV['SMTP_HOST'];
    $mail->Port       = $_ENV['SMTP_PORT'];
    $mail->SMTPSecure = $_ENV['SMTP_SECURE'];
    $mail->SMTPAuth   = $_ENV['SMTP_AUTH'];
    $mail->Username = $_ENV['SMTP_USERNAME'];
    $mail->Password = $_ENV['SMTP_PASSWORD'];
    $mail->SetFrom('adam@adampearson.design', 'Baker\'s Dozen');
    $mail->addAddress($contactArray["email"], $contactArray["name"]);
    $mail->addAddress("adam@adampearson.design", "Baker's Dozen");
    $mail->IsHTML(true);

    $mail->Subject = 'Your Enquiry with Baker\'s Dozen';
    $mail->Body    = $message;
    $mail->AltBody = $message;

    $mail->send();
    return true;
    } catch (Exception $e) {
        echo $e->getMessage();
        return false;
    }
}