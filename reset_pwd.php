<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta charset="UTF-8">
        <title>Matcha || Reset Password</title>
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

<!-- PWD_RESET_FORM -->
        <div><div class="form">
            <form action="./includes/reset_pwd.inc.php" method="post" align="center">
            <h2> Reset Your Password</h2>
            <label for="email"><b>Email Address</b></label> <br/>
                    <input type="text" placeholder="Email Address" name="email" required><br/>
                <input type="hidden" name="ID" value="<?php echo ($_GET['ID']);?>">
                <label for="pwd"><b>New Password</b></label><br/>
                    <input type="password" placeholder="Enter Password" name="newpassword" required><br/>
                <label for="pwd_confirm"><b>Confirm Password</b></label><br/>
                    <input type="password" placeholder="Confirm New Password" name="confirm_new_password" required><br/>
                <button type="submit" name="change_pwd" class="button button1">Update Password!</button>
            </form>
        </div> </div>
        
<script async src="./js/nav.js"></script>
</body>
</html>

<?php

    require "../footer.php"

?>
