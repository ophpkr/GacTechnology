<?php require_once('databaseConnection.php'); ?>

<?php

/*
@param: void
@return : error si erreur sinon void
*/
function createSms() {
    $db = dbConnection();
    $req = "INSERT INTO sms (id_sms) VALUES (null) ;";

    $stmt = mysqli_stmt_init($db);
    if(!mysqli_stmt_prepare($stmt, $req)) {
        echo mysqli_stmt_error($stmt);
        mysqli_close($db);
    } else {
        echo'ok';
        mysqli_stmt_execute($stmt);
        mysqli_close($db);
    }
}

/*
@param: void
@return : int
Récupère le nombre de sms envoyés
*/
function countTotalSms() {
    $db = dbConnection();
    $req = mysqli_query($db,"SELECT COUNT(id_sms) as nb from sms;");
    $rep = mysqli_fetch_assoc($req);
    // var_dump($rep);
    return $rep['nb'];
}
?>