<?php
require './config/database.php';
//require './includes/login.inc.php';
session_start();
$firstName = ($_SESSION['firstName']);
$lastName = ($_SESSION['lastName']);
$bio = ($_SESSION['bio']);
$age = ($_SESSION['age']);

?>


<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <title>Matcha || My Profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- style -->
    <!-- <link rel="stylesheet" href="./css/styles.css"> -->
<!-- NAV_LINKS -->
    <link rel="stylesheet" href="./css/nav.css">
 <!-- RATING_LINKS -->
    <link rel="stylesheet" href="./css/rating.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
 <!-- profilecard_LINKS -->
     <link rel="stylesheet" href="./css/profile_card.css">


</head>
<body>

<!-- NAV_SYSTEN -->
<section> 
    <nav>
        <span id="opennav" class="open" onclick="openNav()"> &#9776; </span> <!-- burger menu tab -->
        
        <div id="menu" class="nav"> 
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

<div class="container">
  <img src="" alt="Avatar" style="width:90px">
  <p><span><?php echo $firstName," ", $lastName ?></span> <?php echo $age?> years old</p>
  <p> <div class="rating">
  <input type="radio" name="star" id="star1">
   <label for="star1"></label> 
  <input type="radio" name="star" id="star2">
  <label for="star2"></label> 
  <input type="radio" name="star" id="star3">
  <label for="star3"> </label>
  <input type="radio" name="star" id="star4">
  <label for="star4"> </label>
  <input type="radio" name="star" id="star5">
  <label for="star5"> </label>
</div></p>
</div>

<div class="container">
  <img src="" alt="Avatar" style="width:90px">
  <p><span><?php echo $firstName," ", $lastName ?></span> <?php echo $age?> years old</p>
  <p><div class="rating">
  <input type="radio" name="star" id="star1">
   <label for="star1"></label> 
  <input type="radio" name="star" id="star2">
  <label for="star2"></label> 
  <input type="radio" name="star" id="star3">
  <label for="star3"> </label>
  <input type="radio" name="star" id="star4">
  <label for="star4"> </label>
  <input type="radio" name="star" id="star5">
  <label for="star5"> </label>
</div></p>
</div>
<br>


<script async src="js/nav.js"></script>
    </body>
    </html>


<?php
    require "./footer.php"
?>