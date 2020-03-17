<?php require_once('databaseConnection.php'); ?>

<?php

/*
@param: (time) $duration, (date)$date
@return : error si erreur sinon void
Crée un phone_call
*/
function createPhoneCall($duration, $date) {
    $db = dbConnection();
    var_dump($db);
    $req = "INSERT INTO phone_call (duration_call, date_call) VALUES (?, ?);";

    $stmt = mysqli_stmt_init($db);
    if(!mysqli_stmt_prepare($stmt, $req)) {
        echo "SQL error";
        echo mysqli_stmt_error($stmt);
        mysqli_close($db);
    } else {
        echo'ok';
        mysqli_stmt_bind_param($stmt, "ss", $duration, $date);
        mysqli_stmt_execute($stmt);
        mysqli_close($db);
    }
}
/*
@param: void
@return : array de durées d'appels
*/
function getTimeOfCalls() {
    $db = dbConnection();
    $req = mysqli_query($db,"SELECT duration_call
                             FROM phone_call
                             WHERE date_call > '2012-02-15';");
    if (!$req) {
        printf("Query failed");
        exit;
    }
    while($row = mysqli_fetch_row($req)) {
        $rows[]=$row;
    }
    return $rows;
}
?>