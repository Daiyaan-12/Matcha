<?php
    require '../config/database.php';

    session_start();
    if(isset($_POST['edit_profile']))
    {
        $age = trim($_POST['age']);
        $email = trim($_POST['email']);
        $bio = trim($_POST['bio']);
        $gender =  trim($_POST['gender']);
        $preference = trim($_POST['pref']);
        $love = ($_POST['love']);
        $fun = ($_POST['fun']);
        $fitness = ($_POST['fitness']);
        $nature = ($_POST['nature']);
        $tech = ($_POST['tech']);
        $meme = ($_POST['meme']);
        $science = ($_POST['science']);
        $animals = ($_POST['animals']);
        $foodie = ($_POST['foodie']);

        $sql = $db_connect->prepare("UPDATE `Users` SET age='$age', biography='$bio' WHERE email='$email'");
        $sql->execute();
        var_dump(); 
        echo 'Congratulations!! Your New Identity has been Created!';
        header('refresh:3; url="../profile/profile.php"');
        
        echo $row['gender'];
        if($row['gender'] = "female" || $row['gender'] = "male" || $row['gender'] = "other")
        {
            $sql = $db_connect->prepare("UPDATE `Users` SET gender= '$gender' WHERE email='$email'");
            $sql->execute();
        }
    
        echo $row['pref'];
        if($row['pref'] = "female" || $row['pref'] = "male" || $row['pref'] = "both")
        {
            $sql = $db_connect->prepare("UPDATE `Users` SET preference= '$preference' WHERE email='$email'");
            $sql->execute();
        }

        echo $row['interest'];
        if($row['pref'] = "female" || $row['pref'] = "male" || $row['pref'] = "both")
        {
            $sql = $db_connect->prepare("UPDATE `Users` SET preference= '$preference' WHERE email='$email'");
            $sql->execute();
        }
    }

?> 
