<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>
<body>
<h1>Sparklepony's love club</h1>
<h2>Login to existing account</h2>
    <form action="includes/login.inc.php" method="POST">

    <input style="height:40px; width:150px" type="text" name="email" placeholder="Email-address">
    <br>
    <input style="height:40px; width:150px" type="password" name="pwd" placeholder="Password">
    <br>
    <button type="submit" name="login">Login</button>
    </form>
    <h3>Don't have an account yet? Sign up <a href="register.php">HERE</a></h3>
    <button>Forgot password</button>
</body>
</html>