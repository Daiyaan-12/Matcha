<?php

    session_start();

    $server_name = "localhost";
    $db_username = "root";
    $db_password = "Francis1974";
    $db_name = "Matcha";
        
    try
    {
        $db_connect = new PDO("mysql:host=$server_name;dbname=$db_name", $db_username, $db_password);
        $db_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected Successfully to the Database";
    }
    catch (PDOException $e)
    {
        echo "Connection to the Matcha User Database failed: " .$e->getMessage();
    } 
?>