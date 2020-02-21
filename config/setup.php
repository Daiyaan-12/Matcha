<?php

    $host = "localhost";
    $user = "root";
    $pass = "Francis1974";
    $db = "Matcha";

    try
    {
       $db_connect = new PDO("mysql:host=$host", $user, $pass);
       $db_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       echo "Connected to localhost <br/>";
    }

    catch (PDOException $e)
    {
        echo "error ".$e->getMessage();
    }

    try
    {
       $sql = "CREATE DATABASE IF NOT EXISTS ".$db;
       $db_connect->exec($sql);
       echo "Matcha Database created <br/>";
    }

    catch (PDOException $e)
    {
       echo "Failed to create Matcha Database ".$e->getMessage();
    }

    try 
    {
        //creating user database table
        $db_connect = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        $db_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $user_table = "CREATE TABLE IF NOT EXISTS Users (
            UserID INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            FirstName VARCHAR(255) NOT NULL,
            LastName VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL,
            password varchar(264) NOT NULL,
            verification_code varchar(264) NOT NULL,
            verified BOOLEAN
        )";

    $db_connect->exec($user_table);
    echo "Table 'User' successfully created";

        //creating image database table
      $img_table = "CREATE TABLE Images (
        ImageID INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        UserID VARCHAR(30) NOT NULL, 
        img_title TEXT,
        likes INT(11) UNSIGNED,
        img_base64 LONGBLOB NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";

        $db_connect->exec($img_table);
        echo "Table 'User' successfully created";

        header('refresh:3; url="../register.php"');
    }

    catch(PDOException $e)
    {
        echo "Error creating table".$e->getMessage();
    }

    $db_connect = null;

?>
