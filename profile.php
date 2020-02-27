<?php
require './config/database.php';
//require './includes/login.inc.php';
session_start();
$firstName = ($_SESSION['firstName']);
$lastName = ($_SESSION['lastName']);
$bio = ($_SESSION['bio']);
$age = ($_SESSION['age']);
$gender = ($_SESSION['gender']);
$pref = ($_SESSION['preference']);
$love = $_SESSION['love'];
$fun = $_SESSION['fun'];
$fit = $_SESSION['fitness'];
$nature = $_SESSION['nature'];
$tech = $_SESSION['tech'];
$meme = $_SESSION['meme'];
$science = $_SESSION['science'];
$animals = $_SESSION['animals'];
$food = $_SESSION['foodie'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>My Profile</title>
    </head>
    <body>
        <h1>profile of <?php echo $firstName?> <?php echo $lastName ?></h1>
        <h2>My age is :<?php echo $age?></h2>
        <h2>I am a  :<?php echo $gender?></h2>
        <h2>My  Preference is: <?php echo $pref?></h2>
        <h2>A little bit about myself ;p<br><?php echo $bio?></h2>
        <br>
        <br>
        <h2>My interests include:<br>
        <?php
        if($fun == 1)
        echo "Fun<br>";
        if($love == 1)
        echo "Love<br>";
        if($fit == 1)
        echo "Fitness<br>";
        if($nature == 1)
        echo "Nature<br>";
        if($tech == 1)
        echo "Technology<br>";
        if($meme == 1)
        echo "Meme Culture<br>";
        if($science == 1)
        echo "Science<br>";
        if($animals == 1)
        echo "Animals<br>";
        if($food == 1)
        echo "Foodie<br>";
        ?>
        </h2>
    <a href="./update_info.php"><button>Bio Page</button></a>
        <form action="./includes/login.inc.php" method="POST">
        <button type="submit">Logout</button>
        </form>
    </body>
    </html>