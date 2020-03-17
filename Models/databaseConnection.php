<?php

function dbConnection() {
    $connection = new mysqli("host", "user", "pwd", "db");

    if($connection->connect_error) {
        echo $connection->connect_error;
    }
    return $connection;
}

?>