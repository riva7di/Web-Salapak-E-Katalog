<?php

    //database configuration
    $host       = "localhost";
    $user       = "id19006135_salapak_db";
    $pass       = "Z_Ygt=QNu)6&{U{I";
    $database   = "id19006135_salapak";

    $connect = new mysqli($host, $user, $pass, $database);

    if (!$connect) {
        die ("connection failed: " . mysqli_connect_error());
    } else {
        $connect->set_charset('utf8');
    }

?>