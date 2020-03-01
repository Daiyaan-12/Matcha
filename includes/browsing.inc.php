<?php
session_start();
$love = $_SESSION['love'];
$fun = $_SESSION['fun'];
$fit = $_SESSION['fitness'];
$nature = $_SESSION['nature'];
$tech = $_SESSION['tech'];
$meme = $_SESSION['meme'];
$science = $_SESSION['science'];
$animals = $_SESSION['animals'];
$food = $_SESSION['foodie'];
try{
         $sql = "SELECT UserID FROM `users` WHERE (`love`=? AND `love`=1) OR (`fun`=? AND `fun`=1) OR (`fitness`=? AND `fitness`=1) OR (`nature`=? AND `nature`=1) OR (`tech`=? AND `tech`=1) OR (`meme`=? AND `meme`=1) OR (`science`=? AND `science`=1) OR (`animals`=? AND `animals`=1) OR (`foodie`=? AND `foodie`=1)";
         $stmt  = $db_connect->prepare($sql);
         $stmt->bindParam(1, $love);
         $stmt->bindParam(2, $fun);
         $stmt->bindParam(3, $fit);
         $stmt->bindParam(4, $nature);
         $stmt->bindParam(5, $tech);
         $stmt->bindParam(6, $meme);
         $stmt->bindParam(7, $science);
         $stmt->bindParam(8, $animals);
         $stmt->bindParam(9, $food);
         $stmt->execute();
         $result = $stmt->fetch(PDO::FETCH_ASSOC);
         if (!$result)
            {
                echo "There are currently no users that match your interests";
                header("Location: ../browsing.php?NoMatches");
                exit();
            }
            else if ($passCheck == true) 
            {
                session_start();
                $sql = "SELECT * FROM `users` WHERE email=:email AND verified = 1 AND age IS NOT NULL";
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
                if(!empty($_SESSION['age']))
                {
                    header("Location: ../profile.php");
                    exit();
                }


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
?>