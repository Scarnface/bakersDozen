<?php

require __DIR__ . '/../../vendor/autoload.php';


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
    $clean_html = $purifier->purify($dirty_html);
    
    return $clean_html;
    
    }