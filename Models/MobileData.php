<?php require_once('databaseConnection.php'); ?>

<?php

/*
@param: (int) $volume, (time)$time, (int)$subscriber
@return : error si erreur sinon void
Crée une entité mobile_data
*/
function createMobileData($volume, $time, $subscriber) {
    $db = dbConnection();
    var_dump($db);
    $req = "INSERT INTO mobile_data (volume_mobile_data, time_mobile_data, id_subscriber) VALUES (?, ?, ?);";

    $stmt = mysqli_stmt_init($db);
    if(!mysqli_stmt_prepare($stmt, $req)) {
        echo mysqli_stmt_error($stmt);
        mysqli_close($db);
    } else {
        echo 'ok';
        mysqli_stmt_bind_param($stmt, "isi", $volume, $time, $subscriber);
        mysqli_stmt_execute($stmt);
        mysqli_close($db);
    }
}

/*
@param: void
@return : array
Récupère mes volume de données par abonné
*/
function getVolumePerSubscriber() {
    $db = dbConnection();
    $req = mysqli_query($db,"SELECT SUM(volume_mobile_data) as vol, id_subscriber 
                            FROM mobile_data
                            WHERE time_mobile_data > '18:00:00' OR time_mobile_data < '08:00:00'
                            GROUP BY id_subscriber
                            ORDER BY vol DESC
                            LIMIT 10");
    if (!$req) {
        printf("Query failed");
        exit;
    }
    while($row = mysqli_fetch_row($req)) {
        $rows[]=$row;
    }
    var_dump($rows);
    //return $rows;
}


?>