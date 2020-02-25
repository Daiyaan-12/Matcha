<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <title>Reset Password || Matcha</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   

<!-- style -->
<link rel="stylesheet" href="./css/styles.css">


</HEAD>
</head>
<body>


<!-- PWD_RESET_FORM -->
<div>
    <h3>Change your Password!</h3>
        <hr width="75%">

        <div class="form">
            <form action="includes/reset_pwd.inc.php" method="post" align="center">
            <br/> 
            <label for="email"><b>Email Address</b></label> <br/>
                    <input type="text" placeholder="Email Address" name="email" required><br/>
                <input type="hidden" name="email" value="<?php echo ($_GET['ID']);?>">
                <label for="pwd"><b>New Password</b></label><br/>
                    <input type="password" placeholder="Enter Password" name="newpassword" required><br/>
                <label for="pwd_confirm"><b>Confirm Password</b></label><br/>
                    <input type="password" placeholder="Confirm New Password" name="confirm_new_password" required><br/>
                <button type="submit" name="change_pwd" class="button button1">Update Password!</button>
            </form>
        </div>

</body>
</html>

<?php

    require "../footer.php"

?>
