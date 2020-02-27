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
   <!-- NAV_LINKS -->
   <link rel="stylesheet" href="./css/nav.css">


</head>
<body>

<!-- NAV_SYSTEN -->
<section> 
    <nav>
        <span id="opennav" class="open" onclick="openNav()"> &#9776; </span> <!-- burger menu tab -->
        
        <div id="`menu" class="nav"> 
            <a href="#" class="closebtn" onclick="closeNav()"> &times; </a> 
            <br>
            <a href="./home.php"> <b> Home </b> </a> 
            <a href="./index.php"> <b> Index </b> </a> 
            <a href="./register.php"> <b> Sign up </b> </a>
            <a href="./login.php"> <b> Login </b> </a>
            <a href="./change_details.php"> <b> Bio </b> </a> 
        </div>
    </nav>
</section>
        <h1>profile of <?php echo $firstName?> <?php echo $lastName?></h1>

        <form action="./includes/login.inc.php" method="POST">
        <button type="submit">Logout</button>
        </form>
    </body>
    </html>