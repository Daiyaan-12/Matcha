
<?php
    require './config/database.php';
    if(isset($_POST['del']))
    {
        $email = trim($_POST['email']);
        $sql = $db_connect->prepare("DELETE FROM `Users` WHERE email='$email'");
        $sql->execute();
        echo '&#128577 Your account has been successfully deleted!';
        header("Location: ./register.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">   
    
    <title>Delete My Account</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- NAV_LINKS -->
<link rel="stylesheet" href="./css/nav.css">
<!-- FONT-LINKS-->
    <link rel="stylesheet" href="./css/styles.css">
    
</head>
<body>
<h3>Are you sure you want to leave Sparklepony's Love Chat?</h3>
<hr width="75%">
    <div id="" class="form">
        <form method="POST" action="" align="center">
            <input type="email" name="email" placeholder="Confirm You Email Address to contnite!" required>
            <button type="submit" class="button button1" name="del"><b>DELETE MY ACCOUNT!</b></button>
        </form>
    </div>

    <footer>
  Matcha || Sparklepony <hr> @dbadat | @kfrancis | @kmcgrego <br> </div>

</footer>
</body>
</html>