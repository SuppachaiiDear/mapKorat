<?php
    $serverName = "192.168.210.42";
    $database = "MapKorat";
    $username = 'sa';
    $password = '123_qazwsx';


    try {
        $conn = new PDO(
            "sqlsrv:server=$serverName;Database=$database",
            $username,
            $password,
            array(
                //PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            )
        );
    }
    catch(PDOException $e) {
        die("Error connecting to SQL Server: " . $e->getMessage());
    }


?>