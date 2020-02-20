<!DOCTYPE html>
<html>
<head>
<title>Profile Information</title>
</head>
<body>
<h1>Please fill in the following information</h1>
    <form action="includes/register.inc.php" method="POST">
    <br>
    <input style="height:40px; width:150px" type="text" name="fName" placeholder="First Name">
    <br>
    <input style="height:40px; width:150px" type="text" name="lName" placeholder="Last Name">
    <br>
    <input style="height:40px; width:150px" type="text" name="email" placeholder="Email-address">
    <br>
    <input style="height:40px; width:150px" type="password" name="pwd" placeholder="Password">
    <br>
    <input style="height:40px; width:150px" type="password" name="pwd-repeat" placeholder="Password Reapeat">
    <br>
    <button type="submit" name="sign-up">Register</button>
    </form>
<a href="login.php"><button>Home</button></a>
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
