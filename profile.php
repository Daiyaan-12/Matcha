<?php
require './config/database.php';
session_start();
$firstName = ($_SESSION['fName']);
$lastName = ($_SESSION['lName']);
$bio = ($_SESSION['bio']);
$age = ($_SESSION['age']);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>My Profile</title>
    </head>
    <body>
        <h1>profile of <?php echo $firstName?> <?php echo $lastName?></h1>

        <form action="./includes/login.inc.php" method="POST">
        <button type="submit">Logout</button>
        </form>
    </body>
    </html>