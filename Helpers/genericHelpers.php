<?php 

// convertit une date dd/mm/yyyy en yyyy-mm-dd
function changeDateFormat($date) {
    $datep = explode("/", $date);
    return $datep[2] . "-" . $datep[1] . "-" . $datep[0];
}

// convertit un temps hh-mm-ss en secondes
function convertTimeToSec($time) {
    $timep = explode(":", $time);
    $sec = (int)$timep[0]*3600 + (int)$timep[1]*60 + (int)$timep[2];
    return $sec;
}
?>