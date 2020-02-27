<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Profile Information</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- style -->
    <link rel="stylesheet" href="./css/styles.css">
<!-- NAV_LINKS -->
    <link rel="stylesheet" href="./css/nav.css">

<!-- NAV_FUNC-->
<script>
        function openNav()
        {
            document.getElementById('menu').style.width='250px';
            document.getElementById('opennav').style.width='250px';
        }

        function closeNav() 
        {
            document.getElementById('menu').style.width='0px';
            document.getElementById('opennav').style.width='0px';
            
        }
    </script> <!-- END_NAV_FUNC -->

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

<h3>Register to Sparklepony's Love Chat</h3>
<hr width="75%">

  <div class="form">
    <form action="includes/register.inc.php" method="POST" align="center">
    <h2> Please complete all the fields </h2>
    <label for="firstname"> Name: </label> <br/>
    <input type="text" name="fName" placeholder="First Name" required>
    <br>
    <label for="surname"> Surname: </label> <br/>
    <input type="text" name="lName" placeholder="Last Name" required>
    <br>
    <label for="email"> Email Address: </label> <br/>
    <input type="text" name="email" placeholder="Email-address" required >
    <br>
    <label for="password"> Password: </label> <br/>
    <input type="password" name="pwd" placeholder="Password" required>
    <br>
    <label for="confirmpassword"> Confirm your Password: </label> <br/>
    <input type="password" name="pwd-repeat" placeholder="Password Reapeat" required>
    <br>
    <button type="submit" class="button button1" name="sign-up">Register</button>
    </form>
 </div>
<a href="login.php"><button>Home</button></a>



<!-- <script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}
</script> -->
<!-- <script src="./js/nav.js"></script> -->

</body>
</html>

<?php
    require "./footer.php"
?>
