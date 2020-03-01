<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <title>Sparklepony</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- style -->
<link rel="stylesheet" href="./css/styles.css">
<!-- NAV_LINKS -->
<link rel="stylesheet" href="./css/nav.css">


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
<h1 class="mainheading" style="text-align: center; font-weight: bolder;">Ready to fing L&#10084;VE?</h1>
<hr width="75%">
        <ul>
            <a href="update_info.php"><li>Update your bio</li></a>
            <a href="edit_profile_verify.php"><li>Update your account info</li></a>
        </ul>
    </body>
</html>


<?php
    require "./footer.php"
?>