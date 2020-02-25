<?php
    require '../config/database.php';

    if(isset($_POST['pwd_forgot']))
    {
        try
        {
            $email = trim($_POST['email']);
            $check_email = $db_connect->prepare("SELECT `email` FROM `Users` WHERE `email`=?");
            $check_email->bindParam(1, $email);
            $check_email->execute();
            
            // echo base64_encode($email);

            if($check_email->execute())
            {

                $header = "From: noreply@matcha_sparklepony.com \r\n";
                $subject = "Matcha Password Reset";
                $message = 'Click on the following link to Reset Your Password! 
                            http://localhost:8080/Matcha/reset_pwd.php?ID=' . base64_encode($email);
            
                if (!mail($email, $subject, $message, $header))
                {
                    echo error_get_last()['message'];
                    exit();
                }
                
                else
                {
                    echo 'Password Reset Link has been sent to your E-mail';
                    header('refresh:3; url="../includes/verify_acc.php"');
                    die();
                }
            }
        }

        catch (PDOexception $e)
        {
            echo $e->getMessage ();  
            exit();
        }
    }

    else
    {
        echo 'Username does not Exist! Please register!';
        header('refresh:5; url="../register.php"');
    }
    
?>