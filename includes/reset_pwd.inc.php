<?php
    if(isset($_POST['change_pwd'])) {
    include '../config/database.php';
    $ID = ($_POST['ID']);
    $email = $_POST['email'];
    $new_password = htmlspecialchars($_POST['newpassword']);
    $confirm_new_password = htmlspecialchars($_POST['confirm_new_password']);
        if($new_password !== $confirm_new_password) {       
            echo $new_password;
            echo $confirm_new_password;
            header("Location: ../reset_pwd.php?error=pwdcheck&ID=" . $ID);
            exit();
        }
        else if (strlen($new_password) < 8) {
            header("Location: ../reset_pwd.php?error=pwdshort&ID=" . $ID);
            exit();
        }
        else if (!preg_match('/[0-9]/',$new_password)) {
            header ("Location: ../reset_pwd.php?error=nodigit&ID=" . $ID);
            exit();
        }
        else if (!preg_match('/[a-z]/',$new_password)) {
            echo "Your password must contain at least 1 lower-case letter!";
            header("Location: ../reset_pwd.php?error=pwdnolow&ID=" . $ID);
            exit();
        }
        else if (!preg_match('/[A-Z]/',$new_password)) {
            echo "Your password must contain at least 1 upper-case letter!";
            header("Location: ../reset_pwd.php?pwdnocap&ID=" . $ID);
            exit();
        } else { 
             try { 
                $sql = "UPDATE users SET `password` = ? WHERE `email` = ?";
			    $stmt = $db_connect->prepare($sql);
			    $hashed = password_hash($new_password, PASSWORD_DEFAULT);
			    $stmt->bindParam(1, $hashed);
			    $stmt->bindParam(2, $email);
			    if ($stmt->execute()) {
			    	header("Location: ../login.php?success=pwdchanged");
				    exit();
			}
		} catch (PDOException $e) {
			die("Connection failed: " . $e->getMessage());
		}
	}
    }
?>