<?php

require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . "/connection.php";

// post to contact database

function postContact($db, $contactArray) {
    try {
        $query = "INSERT INTO contact (email, name, phone, subject, message, newsletter, date)
                 VALUES (:email, :name, :phone, :subject, :message, :newsletter, :date)";
        $stmt = $db->prepare($query);
        $stmt->bindParam(":email", $contactArray['email']);
        $stmt->bindParam(":name", $contactArray['name']);
        $stmt->bindParam(":phone", $contactArray['phone']);
        $stmt->bindParam(":subject", $contactArray['subject']);
        $stmt->bindParam(":message", $contactArray['message']);
        $stmt->bindParam(":newsletter", $contactArray['newsletter']);
        $stmt->bindParam(":date", $contactArray['date']);
        $stmt->execute();
    } catch (Exception $e) {
        echo "Unable to connect - ";
        echo $e->getMessage();
    }
}

// clean html from a text or textarea input
function cleanHtml($dirty_html) {

    $config = HTMLPurifier_Config::createDefault();
    $purifier = new HTMLPurifier($config);

    $html_purifier_cache_dir = sys_get_temp_dir() . '/HTMLPurifier/DefinitionCache';
    if (!is_dir($html_purifier_cache_dir)) {
      mkdir($html_purifier_cache_dir, 0770, TRUE);
    }

    $config->set('Cache.SerializerPath', $html_purifier_cache_dir);
    $clean_html = $purifier->purify($dirty_html);
    
    return $clean_html;
    
}

// verify and post contact form data

function validateForm() {
    $contactArray = [];
    $errorArray = [];
    $phoneRegex = "/^(((\+44\s?\d{4}|\(?0\d{4}\)?)\s?\d{3}\s?\d{3})|((\+44\s?\d{3}|\(?0\d{3}\)?)\s?\d{3}\s?\d{4})|((\+44\s?\d{2}|\(?0\d{2}\)?)\s?\d{4}\s?\d{4}))(\s?\#(\d{4}|\d{3}))?$/";
    // test if each field is set or not empty, add it to 
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    } else {
        $errorArray[] = "name";
    }
    if (isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $email = $_POST['email'];
    } else {
        $errorArray[] = "email";
    }
    if (isset($_POST['phone']) && preg_match($phoneRegex, $_POST['phone'])) {
        $phone = $_POST['phone'];
    } else {
        $errorArray[] = "phone";
    }
    if (isset($_POST['subject'])) {
        $subject = cleanHtml($_POST['subject']);
    }else {
        $errorArray[] = "subject";
    }
    if (isset($_POST['message'])) {
        $message = cleanHtml($_POST['message']);
    } else {
        $errorArray[] = "message";
    }
    if (isset($_POST['gdpr-checkbox'])) {
        $gdpr = $_POST['gdpr-checkbox'];
    } else {
        $errorArray[] = "privacy policy checkbox";
    }
    if (isset($_POST['newsletter-signup'])) {
        $newsletter = true;
    } else {
        $newsletter = false;
    }
    if (!empty($_POST['g-recaptcha-response'])) {
        $captcha = $_POST['g-recaptcha-response'];

        // test the validity of the captcha
        $secretKey = $_ENV['RECAPTCHA_SECRET'];
        $ip = $_SERVER['REMOTE_ADDR'];
        // post request to server
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
        $response = file_get_contents($url);
        $responseKeys = json_decode($response, true);
        
        // should return JSON with success as true
        if (!$responseKeys["success"]) {
            $errorArray[] = "captcha";
        }

    } else {
        $errorArray[] = "captcha";
    }

    // grab today's date in UK time
    $dt = new DateTime();
    $dt->setTimeZone(new DateTimeZone("Europe/London"));
    $today = $dt->format("Y-m-d H:i:s");

    // if no errors showed up, add variables to an array and submit
    if (empty($errorArray)) {
        $contactArray = [
        "name" => $name,
        "email" => $email,
        "phone" => $phone,
        "subject" => $subject,
        "message" => $message,
        "newsletter" => $newsletter,
        "date" => $today
        ];

        return ["passed" => true, "contact array" => $contactArray];
    } else {
        return ["passed" => false, "error array" => $errorArray];
    }
}

