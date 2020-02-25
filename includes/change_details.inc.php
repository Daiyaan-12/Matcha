<?php
session_start();
require '../config/database.php';

	if (isset($_POST['changeInfo'])) {
	$firstName = htmlspecialchars($_POST['fName']);
    $lastName = htmlspecialchars($_POST['lName']);
    $newMail = htmlspecialchars($_POST['email-new']);
	$password = htmlspecialchars($_POST['pwd']);
	$passwordRepeat = htmlspecialchars($_POST['pwd-repeat']);
	$email = htmlspecialchars($_SESSION['email']);
	echo $firstName;
	echo $lastName;
	echo $password;
    echo $newMail;
    echo $email;
    echo "0";
	if (empty($firstName) || empty($lastName) || empty($newMail) || empty($password) || empty($passwordRepeat)) {
		header("Location: ../change_details.php?error=emptyfields");
		exit();
	}
	if ((strlen($password) < 8)) {
		header("Location: ../change_details.php?error=PasswordShort");
		exit();
	} else if (!preg_match('/[A-Z]/', $password)) {
		header("Location: ../change_details.php?error=NoCaps");
		exit();
	} else if (!preg_match('/[a-z]/', $password)) {
		header("Location: ../change_details.php?error=AddLowerCase");
		exit();
    } 
    else if (!preg_match('/[0-9]/', $password)) {
        header("Location: ../change_details.php?error=AddDigitsToPassword");
		exit();
	} else if (strstr($password, ' ')) {
        header("Location: ../change_details.php?error=NoSpacesAllowed");
		exit();
	} 
	else if (strstr($firstName, ' ')) {
        header("Location: ../change_details.php?error=NoSpacesAllowed");
		exit();
    }else if(strstr($lastName, ' ')){
        header("Location: ../change_details.php?error=NoSpacesAllowed");
        exit();
    }else if ($password !== $passwordRepeat) {
        header("Location: ../change_details.php?error=PasswordsDontMatch");
		exit();
	} else {
        echo "3";
		try {
            echo "4";
			$email = htmlspecialchars($_SESSION['email']);
			$sql = "SELECT * FROM `users` WHERE email = :mail";
			$stmt = $db_connect->prepare($sql);
			echo "4.5";
			$stmt->bindParam(":mail", $email);
			echo "5";
			$stmt->execute();
			$count = $stmt->rowCount();
            echo "2";
			if ($count > 0) {
				$result = $stmt->fetch(PDO::FETCH_ASSOC);
				$user_id = $result['UserID'];
				echo "hey";
				echo $user_id;
			}
			echo "pass";
				$sql = "UPDATE `users` SET `password` = ?, `email` = ?, `FirstName` = ?, `LastName` = ? WHERE `UserID` = ?";
				$hashed =  password_hash($password, PASSWORD_DEFAULT);
				$stmt = $db_connect->prepare($sql);
				$stmt->bindParam(1, $hashed);
				$stmt->bindParam(2, $newMail);
				$stmt->bindParam(3, $firstName);
				$stmt->bindParam(4, $lastName);
				$stmt->bindParam(5, $user_id);
				$stmt->execute();
				echo $user_id;
				header("Location: ../home.php?success=Infochanged");
				exit();
			} catch (PDOException $e) {
			die("Connection failed: " . $e->getMessage());
		}
	}
} else {
	header("Location: ../profile.php");
	exit();
}