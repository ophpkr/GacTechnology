<?php require_once('./Models/Sms.php'); ?>
<?php require_once('./Models/PhoneCall.php'); ?>
<?php require_once('./Models/MobileData.php'); ?>
<?php require_once('genericHelpers.php'); ?>
<?php

// somme tous les temps en secondes
function sumTimes() {
    $sum = 0;
    $times = getTimeOfCalls();
    foreach($times as $time) {
        $sum = $sum + convertTimeToSec($time[0]);
    }
    return $sum;
}

print_r("le temps total d'appels est de " . sumTimes() . " secondes </br>" .
"le top données mobiles est " . (getVolumePerSubscriber()) .
"</br> le nombre total de sms est " . countTotalSms() )
?>