<?php require_once('./Models/Sms.php'); ?>
<?php require_once('./Models/PhoneCall.php'); ?>
<?php require_once('./Models/MobileData.php'); ?>
<?php require_once('genericHelpers.php'); ?>
<?php

function importFile() {
    $file = file('./tickets_appels_201202.csv');

    foreach($file as $line) {
        $fields[]= explode(';', $line);
    }

    // selon le type, on crée l'entité correspondante
    foreach($fields as $field) {
        if(!is_null($field[3])) {  
            switch($field[7]) {                    
                case (strpos($field[7], "envoi") !== false) :
                    echo 'sms';
                    createSms();
                    break;
                case (strpos($field[7], "connexion") !== false) :
                    echo 'conn';
                    createMobileData($field[6],$field[4], $field[2]);
                    break;
                case (strpos($field[7], "appel") !== false) :
                    echo 'appel';
                    createPhoneCall($field[5], changeDateFormat($field[3]));
                break;
            }
        }
    }
}

importFile();

?>