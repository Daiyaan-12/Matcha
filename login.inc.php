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
         $sql = "SELECT * FROM `users` WHERE email=:email";
         $stmt  = $db_connect->prepare($sql);
         $stmt->bindParam(":email", $email);
         $stmt->execute();
         $result = $stmt->fetch(PDO::FETCH_ASSOC);
         $passCheck = password_verify($password, $result['password']);
         if (!$result)
            {
                header("Location: ../login.php?error=nouser");
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
                $_SESSION['UserId'] = $result['user_id'];
                $_SESSION['email'] = $result['email'];
                $_SESSION['pp_src'] = $result['pp_src'];
                $_SESSION['verify'] = $result['verified'];
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