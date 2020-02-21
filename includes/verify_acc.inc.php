<?php
    require '../config/database.php';
    
    if(isset($_POST['verify']))
    {
        $email = trim($_POST['email']);
        $sql = "SELECT `Users` WHERE email='$email'";
        $sql = $db_connect->prepare("UPDATE `Users` WHERE email='$email'");
        $sql->execute();
        
        echo 'Account Successfully Confirmed!';
        
        $stmt = $db_connect->prepare($sql);
        $sql = "UPDATE 'Users' SET 'verified' = 1 WHERE 'verification_code' = ?";
        $stmt->bindParam(1, $_GET['verification_code']);
        
        if ($stmt->execute())
        {
            echo "E-mail verified Successfully!";
            header('refresh:3; url="../login.php"');
            exit();
        }
        else
        {
            echo "Verification Failed! Try to signup again!";
            header('refresh:3; url="../login.php"');
            exit();
        }
    }
?>