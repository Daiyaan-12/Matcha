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
        $tech = ($_POST['technology']);
        $meme = ($_POST['meme']);
        $science = ($_POST['science']);
        $animals = ($_POST['animals']);
        $foodie = ($_POST['foodie']);
        
        $sql = $db_connect->prepare("UPDATE `Users` SET age='$age', biography='$bio' WHERE email='$email'");
        $sql->execute(); 
        // echo 'Congratulations!! Your New Identity has been Created!';
        
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
        
        if (empty($foodie) && empty($animals) && empty($science) && empty($meme) && empty($tech) 
        && empty($nature) && empty($fitness) && empty($fun) && empty($love))
        {
            echo("You didn't select any interests.");
        } 
        else 
        {
            if(!empty($love))
            {
                $sql = $db_connect->prepare("UPDATE `Users` SET love = 1 WHERE email='$email'");
                $sql->execute();
            }
            if(!empty($fun))
            {
                $sql = $db_connect->prepare("UPDATE `Users` SET fun = 1 WHERE email='$email'");
                $sql->execute();
            }
            if(!empty($fitness))
            {
                $sql = $db_connect->prepare("UPDATE `Users` SET fitnessnature = 1 WHERE email='$email'");
                $sql->execute();
            }
            if(!empty($nature))
            {
                $sql = $db_connect->prepare("UPDATE `Users` SET nature = 1 WHERE email='$email'");
                $sql->execute();
            }
            if(!empty($tech))
            {
                $sql = $db_connect->prepare("UPDATE `Users` SET tech = 1 WHERE email='$email'");
                $sql->execute();
            }
            if(!empty($meme))
            {
                $sql = $db_connect->prepare("UPDATE `Users` SET meme = 1 WHERE email='$email'");
                $sql->execute();
            }
            if(!empty($science))
            {
                $sql = $db_connect->prepare("UPDATE `Users` SET science = 1 WHERE email='$email'");
                $sql->execute();
            }
            if(!empty($animals))
            {
                $sql = $db_connect->prepare("UPDATE `Users` SET animals = 1 WHERE email='$email'");
                $sql->execute();
            }
            if(!empty($foodie))
            {
                $sql = $db_connect->prepare("UPDATE `Users` SET foodie = 1 WHERE email='$email'");
                $sql->execute();
        }
        echo 'Congratulations!! Your New Identity has been Created!';
        header('refresh:3; url="../profile.php"');
    }
}
?>