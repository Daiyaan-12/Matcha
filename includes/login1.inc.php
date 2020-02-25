<?php
session_start();
echo "1";
if (isset($_POST['change'])){
    echo "2";
    require '../config/database.php';
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    echo "3";
    if (empty($email) || empty($password)) {
        header("Location: ../edit_profile_verify.php?error=emptyfields");
        exit();
    }
    else{
        echo "4";
         try{
         $sql = "SELECT * FROM `users` WHERE email=:email";
         $stmt  = $db_connect->prepare($sql);
         $stmt->bindParam(":email", $email);
         $stmt->execute();
         $result = $stmt->fetch(PDO::FETCH_ASSOC);
         $passCheck = password_verify($password, $result['password']);
         if (!$result)
            {
                header("Location: ../edit_profile_verify.php?error=nouser-or-accountnotverified");
                exit();
            }
            if ($passCheck == false) 
            {
                header("Location: ../edit_profile_verify.php?error=wrongpwd");
                exit();
            }
            else if ($passCheck == true) 
            {
                session_start();
                $_SESSION['UserId'] = $result['user_id'];
                $_SESSION['email'] = $result['email'];
                $_SESSION['pp_src'] = $result['pp_src'];
                $_SESSION['verify'] = $result['verified'];
                header("Location: ../change_details.php");
                exit();
            } 
            else 
            {
                header("Location: ../edit_profile_verify.php?error=wrongpwd");
                exit();
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            header("Location: ../edit_profile_verify.php?error=sqlerror");
            exit();
        }
    }
}
echo "end";