<!DOCTYPE html>
<html>
<head>
<title>Change Profile Information</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- style -->
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
<h1>Update your account</h1>
  <div class="form">
    <form action="./includes/change_details.inc.php" method="POST" align="center">
    <h2> Please complete all the fields </h2>
    <label for="firstname"> Name: </label> <br/>
    <input type="text" name="fName" placeholder="First Name" required>
    <br>
    <label for="surname"> Surname: </label> <br/>
    <input type="text" name="lName" placeholder="Last Name" required>
    <br>
    <label for="email"> Email Address: </label> <br/>
    <input type="text" name="email-new" placeholder="Email-address" required >
    <br>
    <label for="password"> Password: </label> <br/>
    <input type="password" name="pwd" placeholder="Password" required>
    <br>
    <label for="confirmpassword"> Confirm your Password: </label> <br/>
    <input type="password" name="pwd-repeat" placeholder="Password Reapeat" required>
    <br>
    <button type="submit" name="changeInfo">Change info</button>
    </form>
 </div>
<a href="home.php"><button>Home</button></a>
<script>
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
</script>
</body>
</html>