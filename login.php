<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- style -->
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <div>
    <h1>Sparklepony's love club</h1>
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
        <button type="submit" name="login">Login</button>
        <br>  <br>
        </form>
    </div>
    <br>
        <!-- FORGOT_PASSWORD -->
    <div class="form">
        <form action="includes/forgot_pwd.inc.php" method="post" align="center">
        <h2> &#128563; Forgot Password?</h2>
        <label for="pwd-forgot"> Email Address: </label> <br/>
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
        <label for="register"> Click below to create an account </label> <br/>
            <button type="submit" class="button button1" name="register"> Register </button>
            <br>  <br>
        </form>
    </div>
</body>
</html>