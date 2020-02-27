<?php
if (isset($_POST['login'])){
    require '../config/database.php';
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    if (empty($email) || empty($password)) {
        header("Location: ../login.php?error=emptyfields");
        exit();
    }
    else{
         try{
         $sql = "SELECT * FROM `users` WHERE email=:email AND verified = 1";
         $stmt  = $db_connect->prepare($sql);
         $stmt->bindParam(":email", $email);
         $stmt->execute();
         $result = $stmt->fetch(PDO::FETCH_ASSOC);
         var_dump($result);
         $passCheck = password_verify($password, $result['password']);
         echo $result['password'];
         echo $result['preference'];
         if (!$result)
            {
                header("Location: ../login.php?error=nouser-or-accountnotverified");
                exit();
            }
            if ($passCheck == false) 
            {
                header("Location: ../login.php?error=wrongpwd");
                exit();
            }
            else if ($passCheck == true) 
            {
                session_start();
                $_SESSION['UserId'] = $result['UserID'];
                $_SESSION['email'] = $result['email'];
                $_SESSION['bio'] = $result['biography'];
                $_SESSION['verify'] = $result['verified'];
                $_SESSION['firstName'] = $result['FirstName'];
                $_SESSION['lastName'] = $result['LastName'];
                $_SESSION['age'] = $result['age'];
                $_SESSION['gender'] = $result['gender'];
                $_SESSION['preference'] = $result['preference'];
                $_SESSION['love'] = $result['love'];
                $_SESSION['fun'] = $result['fun'];
                $_SESSION['fitness'] = $result['fitness'];
                $_SESSION['nature'] = $result['nature'];
                $_SESSION['tech'] = $result['tech'];
                $_SESSION['meme'] = $result['meme'];
                $_SESSION['science'] = $result['science'];
                $_SESSION['animals'] = $result['animals'];
                $_SESSION['foodie'] = $result['foodie'];
                if(!empty($age))
                {
                    header("Location: ../profile.php");
                }
               echo$_SESSION['UserId'];
                echo $_SESSION['email'];
               echo $_SESSION['bio'];
                echo$_SESSION['verify'];
               echo $_SESSION['firstName'];
               echo $_SESSION['lastName'];
               echo $_SESSION['age'];
               echo $_SESSION['gender'];
               echo $result['preference'];
               
               header("Location: ../update_info.php");
                exit();
            } 
            else 
            {
                header("Location: ../login.php?error=wrongpwd");
                exit();
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            header("Location: ../login.php?error=sqlerror");
            exit();
        }
    }
}
else if (isset($_POST['logout-submit'])){
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../login.php");
    exit();
}
else{
    header("Location: ../login.php");
    exit();
}
?>