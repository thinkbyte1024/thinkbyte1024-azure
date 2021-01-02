<?php
    $servername = "control-database.mysql.database.azure.com";
    $username = "adm_operator@control-database";
    $password = "KacangTanah512";
    $database = "main-db";

    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection Failed: " . mysqli_connect_error());
    }
?>