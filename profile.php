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

<div class="profile_card">
        <p class="profilename"><?php echo $firstName," ", $lastName ?></p>
        
        <p> Rate my profile: </p> <br>
  <div class="rating">
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
</div> <br> <br>


        <img src="./pp.jpeg" alt="Profile_Pic" height="500 width="500">
        <p class="title">My age is :<?php echo $age?></p>
        <p>I am a  :<?php echo $gender?></p>
        <p>My  Preference is: <?php echo $pref?></p>
        <p>A little bit about myself <br><?php echo $bio?></p>   
        <p class="title">My interests include:</p>
        <p> <?php
        if($fun == 1)
        echo "# Fun<br>";
        if($love == 1)
        echo "# Love<br>";
        if($fit == 1)
        echo "# Fitness<br>";
        if($nature == 1)
        echo "# Nature<br>";
        if($tech == 1)
        echo "# Technology<br>";
        if($meme == 1)
        echo "# Meme Culture<br>";
        if($science == 1)
        echo "# Science<br>";
        if($animals == 1)
        echo "# Animals<br>";
        if($food == 1)
        echo "# Foodie<br>";
        ?>
        </p>
</div>

    <a href="./update_info.php"><button>Bio Page</button></a>
        <form action="./logout.inc.php" method="POST">
        <button class="form button button1" type="submit">Logout</button>
        </form>

<!-- **************** -->


<!-- 
<span class="heading">User Rating</span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<p>4.1 average based on 254 reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5"></div>
    </div>
  </div>
  <div class="side right">
    <div>150</div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4"></div>
    </div>
  </div>
  <div class="side right">
    <div>63</div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3"></div>
    </div>
  </div>
  <div class="side right">
    <div>15</div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2"></div>
    </div>
  </div>
  <div class="side right">
    <div>6</div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1"></div>
    </div>
  </div>
  <div class="side right">
    <div>20</div>
  </div>
</div> -->

<script async src="js/nav.js"></script>
    </body>
    </html>


<?php
    require "./footer.php"
?>