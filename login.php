<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- style -->
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
<h1>Sparklepony's love club</h1>
<h2>Login to existing account</h2>
    
    <div class="form">
        <form action="includes/login.inc.php" method="POST" align="center">
        <label for="email"> Email Address: </label> <br/>
        <input type="email" name="email" placeholder="Email Address" required>
        <br>
        <label for="password"> Password: </label> <br/>
        <input type="password" name="pwd" placeholder="Password" required>
        <br>
        <button type="submit" name="login">Login</button>
        
        </form>
    </div>
    <br>
        <!-- FORGOT_PASSWORD -->
    <div class="form">
        <form action="../includes/pwd_forgot.php" method="post" align="center">
        <label for="pwd-forgot"> &#128563;Forgot Password? </label> <br/>
        <input type="email" name="email" placeholder="Email address" required> <br/>
            <button type="submit" class="button button1" name="pwd_forgot"> Reset My Password</button>
        </form>
    </div>

    <br>
    <!-- SIGNUP_FORM -->
    <div class="form">
        <form action="./register.php" method="post" align="center">
        <label for="register"> Don't have an account yet? </label> <br/>
            <button type="submit" class="button button1" name="register"> Register </button>
        </form>
    </div>
</body>
</html>