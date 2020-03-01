<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
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

    <div>
    <h1 class="mainheading" style="text-align: center; font-weight: bolder;">Sparklepony's Love Club</h1>
    <hr width="75%">
    </div>
    <div class="form">
        <form action="includes/login.inc.php" method="POST" align="center">
        <h2>Login</h2>
        <label for="email"> Email Address: </label> <br/>
        <input type="email" name="email" placeholder="Email Address" required>
        <br>
        <label for="password"> Password: </label> <br/>
        <input type="password" name="pwd" placeholder="Password" required>
        <br>
        <button type="submit" class="button button1" name="login">Login</button>
        <br>  <br>
        </form>
    </div>
    <br>
        <!-- FORGOT_PASSWORD -->
    <div class="form">
        <form action="includes/forgot_pwd.inc.php" method="post" align="center">
        <h2> &#128563; Forgot Password?</h2>
        <input type="email" name="email" placeholder="Email address" required> <br/>
            <button type="submit" class="button button1" name="pwd_forgot"> Reset My Password</button>
            <br>  <br>
        </form>
    </div>

    <br>
        <!-- SIGNUP_FORM -->
    <div class="form">
        <form action="./register.php" method="post" align="center">
        <h2> Don't have an account yet?</h2>
            <button type="submit" class="button button1" name="register"> Register </button>
            <br>  <br>
        </form>
    </div>

    <script async src="./js/nav.js"></script>
</body>
</html>

<?php
    require "./footer.php"
?>