<?php
session_start();
if (isset($_POST['edit-info'])) {
    require '../config/database.php';
    $age = ($_POST['age']);
	$gender = ($_POST['gender']);
	$preference = ($_POST['preference']);
    $biography = htmlspecialchars($_POST['bio']);
    $preference = ($_POST['sex-pref']);
    $love = ($_POST['love']);
    $fun = ($_POST['fun']);
    $fitness = ($_POST['fitness']);
    $nature = ($_POST['nature']);
    $tech = ($_POST['tech']);
    $meme = ($_POST['meme']);
    $science = ($_POST['science']);
    $animals = ($_POST['animals']);
    $foodie = ($_POST['foodie']);
    $user_id = $_SESSION['UserID'];
    if (empty($gender) || empty($preference) || empty($biography) || empty($age)) {
        header("Location: ../update_info.php?error=emptyfields");
        exit();
    } else if (($_POST["age"] < 18 || $_POST["age"] > 60)) {
        header("Location: ../accountupdatedetails.php?error=tooOldorYoung");
        exit();
    } else if (empty($love) && empty($fun) && empty($fitness) && empty($nature) && empty($tech) && empty($meme) && empty($science) && empty($animals) && empty($foodie)) {
        header("Location: ../accountupdatedetails.php?error=tickabox");
        exit();
    } else {
        try {
            $email = htmlspecialchars($_POST['email']);
            $sql = "SELECT * FROM `users` WHERE email = :email";
            $stmt = $db_connect->prepare($sql);
            $stmt->bindParam(":email", $email);
            $stmt->execute();
            $count = $stmt->rowCount();
            if ($count > 0) {
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                $user_id = $result['user_id'];
            }
				echo $user_id;
                $sql = "UPDATE `users` SET `gender` = ? WHERE `user_id` = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(1, $gender);
                $stmt->bindParam(2, $user_id);
				$stmt->execute();
				echo $user_id;
                $sql = "UPDATE `users` SET `preference` = ? WHERE `user_id` = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(1, $preference);
                $stmt->bindParam(2, $user_id);
				$stmt->execute();
				echo $user_id;
                $sql = "UPDATE `users` SET `biography` = ? WHERE `user_id` = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(1, $biography);
                $stmt->bindParam(2, $user_id);
                $stmt->execute();
                echo $user_id;
                $sql = "UPDATE `users` SET `age` = ? WHERE `user_id` = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(1, $age);
                $stmt->bindParam(2, $user_id);
                $stmt->execute();
                echo $user_id;
                $sql = "UPDATE `users` SET `love` = ? WHERE `user_id` = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(1, $love);
                $stmt->bindParam(2, $user_id);
                $stmt->execute();
                echo $user_id;
                $sql = "UPDATE `users` SET `fun` = ? WHERE `user_id` = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(1, $fun);
                $stmt->bindParam(2, $user_id);
                $stmt->execute();
                echo $user_id;
                $sql = "UPDATE `users` SET `fitness` = ? WHERE `user_id` = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(1, $fitness);
                $stmt->bindParam(2, $user_id);
                $stmt->execute();
                echo $user_id;
                $sql = "UPDATE `users` SET `nature` = ? WHERE `user_id` = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(1, $nature);
                $stmt->bindParam(2, $user_id);
                $stmt->execute();
                echo $user_id;
                $sql = "UPDATE `users` SET `tech` = ? WHERE `user_id` = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(1, $tech);
                $stmt->bindParam(2, $user_id);
                $stmt->execute();
                echo $user_id;
                $sql = "UPDATE `users` SET `meme` = ? WHERE `user_id` = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(1, $meme);
                $stmt->bindParam(2, $user_id);
                $stmt->execute();
                echo $user_id;
                $sql = "UPDATE `users` SET `science` = ? WHERE `user_id` = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(1, $science);
                $stmt->bindParam(2, $user_id);
                $stmt->execute();
                echo $user_id;
                $sql = "UPDATE `users` SET `animals` = ? WHERE `user_id` = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(1, $animals);
                $stmt->bindParam(2, $user_id);
                $stmt->execute();
                echo $user_id;
                $sql = "UPDATE `users` SET `foodie` = ? WHERE `user_id` = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(1, $foodie);
                $stmt->bindParam(2, $user_id);
				$stmt->execute();
                echo "<script> window.close(); </script>";
                header("Location: ../profile_info.php?success=InfoUpdated");
                exit();
            } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
} else if (isset($_POST['profile-update'])){
    header("Location: ../edit_details.php");
    exit();
}