  
<?php
if (isset($_POST['sign-up'])) {
    require '../config/database.php';
    $FirstName = $_POST['fName'];
    $LastName = $_POST['lName'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];
    if (empty($FirstName) || empty($LastName) || empty($email) || empty($password) || empty($passwordRepeat)) {
        header("Location: ../register.php?error=emptyfields&name=" . $FirstName . $LastName . "&email=" . $email);
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $FirstName)) {
        header("Location: ../register.php?error=invalidemail");
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../register.php?error=invalidemail&uid=" . $FirstName . $LastName);
        exit();
    } else if ((strlen($password) < 8)) {
        header("Location: ../register.php?error=pwdshort&uid=" . $FirstName . $LastName . "&email=" . $email);
        exit();
    } else if (!preg_match('/[A-Z]/', $password)) {
        header("Location: ../register.php?error=pwdnocap&uid=" . $FirstName . $LastName  . "&email=" . $email);
        exit();
    } else if (!preg_match('/[a-z]/', $password)) {
        header("Location: ../register.php?error=pwdnolow&uid=" . $FirstName . $LastName . "&email=" . $email);
        exit();
    } else if (!preg_match("/[!@#$%^&*()-=`~_+,.\/<>?:;\|]/", $password)) {
        header("Location: ../register.php?error=pwdnospchar&uid=" . $FirstName . $LastName . "&email=" . $email);
        exit();
    } else if (!preg_match('/[0-9]/', $password)) {
        header("Location: ../register.php?error=pwdnodigit&uid=" . $FirstName . $LastName . "&email=" . $email);
        exit();
    } else if (strstr($password, ' ')) {
        header("Location: ../register.php?error=pwdspace&uid=" . $FirstName . $LastName . "&email=" . $email);
        exit();
    } else if ($password !== $passwordRepeat) {
        header("Location: ../register.php?error=passwordcheck&uid=" . $username . "&email=" . $email);
        exit();
    } else {
        try {
            $sql = "SELECT COUNT(*) FROM `users` WHERE email=:email";
            $stmt = $db_connect->prepare($sql);
            $stmt->bindParam(":email", $email);
            $stmt->execute();
            $count = $stmt->fetchColumn();
            if ($count > 0) {
                header("Location: ../register.php?error=mailtaken&uid=" . $FirstName . $LastName);
                exit();
            } else {
                $verificationcode =  md5(uniqid(bin2hex(random_bytes(8)), true));
                $verificationlink = "http://localhost:8080/Matcha/includes/activate.inc.php?code=" . $verificationcode;
                $subject = "Email Verification!";
                $msg = "s
                <p>Hi $FirstName,</p>
                <p>Thank you for signing up, please click the link below to verify your account.<br /><br /></p>
                <p>$verificationlink</p>
                <p>From,<br /> Matcha</p>
                ";
                // Always set content-type when sending HTML email
                //$headers = "MIME-Version: 1.0" . "\r\n";
                $headers = "Content-type:text/html;charset=UTF-8" . "\r\n";
                $headers .= "From: no-reply@gmail.com";
                if (mail($email, $subject, $msg, $headers)) {
                    $sql = "INSERT INTO `Users` (FirstName, LastName, email, password, verification_code) VALUES (?, ?, ?, ?, ?)";
                    $hashed =  password_hash($password, PASSWORD_DEFAULT);
                    $stmt = $db_connect->prepare($sql);
                    $stmt->bindParam(1, $FirstName);
                    $stmt->bindParam(2, $LastName);
                    $stmt->bindParam(3, $email);
                    $stmt->bindParam(4, $hashed);
                    $stmt->bindParam(5, $verificationcode);
                    $stmt->execute();
                    header("Location: ../login.php?success=signup&uid=" . $FirstName . $LastName . "&email=" . $email);
                    exit();
                } else {
                     header("Location: ../register.php?error=mailerror");
                     exit();
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            header("Location: ../register.php?error=sqlerror");
            exit();
        }
    }
    $db_connect = null;
} else {
    header("Location: ../signup.php");
    exit();
}