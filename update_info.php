<?php

require 'config/database.php'; 
// $name = $_SESSION['FirstName'];?
$UserID = $_SESSION['UserId'];
//$username = $_SESSION['username'];
//$email = $_SESSION['email'];
$sql = "SELECT * FROM `images` ORDER BY ImageID DESC";
$stmt = $db_connect->prepare($sql);
$stmt1 = $db_connect->prepare($sql);
// $stmt->bindParam(":userId", $user_id);
$stmt->execute();
$stmt1->execute();
$count = $stmt->rowCount();
if ($count > 0) {
    $result = $stmt->fetchAll(PDO::FETCH_COLUMN, 2);
    $image_id = $stmt1->fetchAll(PDO::FETCH_COLUMN, 0);
    $total = count($result);
    // $username = $result['image_src'];
}
else
{
    $total = 0;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title>Matcha || Profile Update</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- style -->
   <link rel="stylesheet" href="./css/styles.css">
   
<!-- NAV_LINKS -->
<link rel="stylesheet" href="./css/nav.css">


</head>
<body>

<!-- NAV_SYSTEN -->
<section> 
    <nav>
        <span id="opennav" class="open" onclick="openNav()"> &#9776; </span> <!-- burger menu tab -->
        
        <div id="menu" class="nav"> 
            <a href="#" class="closebtn" onclick="closeNav()"> &times; </a> 
            <br>
            <a href="./home.php"> <b> Home </b> </a> 
            <a href="./index.php"> <b> Index </b> </a> 
            <a href="./register.php"> <b> Sign up </b> </a>
            <a href="./login.php"> <b> Login </b> </a>
            <a href="./change_details.php"> <b> Bio </b> </a> 
        </div>
    </nav>
</section>

<h1 class="mainheading" style="text-align: center; font-weight: bolder;">Enter Your profile Details</h1>
<hr width="75%">

<div class="form2">
    <form action="./includes/updatebio.inc.php" method="POST" align="center">
        <h2> Personalize Your Choices</h2>
<br>
            <label for="email"> Account Confirmation: </label> <br/>
                <input type="email" name="email" placeholder="Email Address" required> <br>

            <label for="age"> Age: </label> <br/>
                <input type="text" name="age" min="18" max="40" placeholder="Age" required>  <br>

            <label for="gender"> I identify as: </label> <br/><br/>
                <div>
                    <input type="radio" name="gender" value="female" /> Female | 
                    <input type="radio" name=" gender" value="male" /> Male | 
                    <input type="radio" name="gender" value="other" /> Other |
                </div> <br/><br/>

        <label for="pref"> I am interested in meeting: </label> <br/><br/>
                <div>
                    <input type="radio" name="pref" value="female" /> Females | 
                    <input type="radio" name="pref" value="male" /> Males | 
                    <input type="radio" name="pref" value="both" /> Both |
                </div><br/><br/>

                        <!-- <select name="sex-pref">
                        <option name="pref" value="male">Male</option>
                        <option name="pref" value="female">Female</option>
                        <option name="pref" value="both">Both</option>
                        </select> -->

        <label for="bio"> Bio </label> <br/>
            <textarea rows="5" cols="100" maxlength="300" placeholder="Let everyone know a litte bit about YOU. <max 300 characters>" name="bio"></textarea> <br><br/>
        
            <label for="pref"> I am interested in: </label> <br/><br/>
                <div class="row">
                    <div class="column" maxsize="3" align="left">
                        <input type="checkbox" id="love" name="love"> #Love <br>
                    <input type="checkbox" id="fun" name="fun" > #Fun <br>
                    <input type="checkbox" id="fitness" name="fitness" > #Fitness<br>
                    <input type="checkbox" id="nature" name="nature" > #Nature<br>
                    <input type="checkbox" id="tech" name="tech" > #Technology <br>
</div>
                    <div class="column" align="left">
                <input type="checkbox" id="meme" name="meme" > #Meme Culture <br>
                <input type="checkbox" id="science" name="science" > #Science<br>
                <input type="checkbox" id="animals" name="animals" > #Animals <br>
                <input type="checkbox" id="foodie" name="foodie" > #Foodie <br>
</div>
</div>
<br/>
<br/>
<br/>
<br/>
<br/>
<button name="upload" style="float: center;">submit changes</button>
</form>
<br>
<div style="align-self: center; float: center; position: relative; margin-top: 8%; border-color: grey; border-width: 10px; border-style: solid;">
        <video id="video" width="640" height="400" autoPlay playsInline></video>
    </div>

    <!-- Trigger canvas web API -->
    <div style="align-self: center; float: left;">
        <button id="snap" class="btn2" onclick="capture_img()">Capture</button>
        <form action="includes/save_image.inc.php" method="post">
            <button id="upload" type="submit" class="btn2" name="upload" style="float;center:" onclick="upload_img()">Upload</button>
        </form>
        <input type="file" class="btn2" name="submit" value="Choose from gallery" id="fileToUpload" onclick="load_image()">
    </div>
    
    <!-- Webcam Video Snapshot -->
    <canvas id="canvas" style="align-self: center; float: center; position: relative; margin-top: 8%; border-color: grey; border-width: 10px; border-style: solid;" width="640px" height="400px"></canvas>
​
    <div class="gallery">
		<h2>Thumbnail</h2>
			<?php
            $i = 0;
			while ($i < $total)
            { ?>
                <form action="./includes/updatebio.inc.php" method="POST">
                <img style ="float:center; margin: auto; margin-top: 20px; border-radius: 10px;" src="<?php echo $result[$i]; ?>">
                <input type="hidden" name="imgid" value="<?php echo $image_id[$i];?>">
                <button type="submit" name="profile_image" style="float: left;">Set as Profile Photo</button>
            </form>
                <form action='includes/delete.inc.php' method="post">
                <input type="hidden" name="img_id" value="<?php echo $image_id[$i];?>">
                <button type="submit" name="delete_image" style="float: right;">Delete</button>
                </form>
    </form>
                
            <?php 
            $i++;
            } 
            ?>
        </div>
        <!-- <label for='formCountries[]'>Select the countries that you have visited:</label><br>
        <select multiple="multiple" name="interests[]" size="1">
        <option value="love">#Love </option>
        <option value="fun">#Fun </option>
        <option value="fitness">#Fitness</option>
        <option value="nature">#Nature</option>
        <option value="technology">#Technology</option>

        </select>
        -->

        <!-- <input type="checkbox" name="interest[]" value="" /><br />
        <input type="checkbox" name="interest[]" value="" /><br />
        <input type="checkbox" name="interest[]" value="" /><br />
        <input type="checkbox" name="interest[]" value="" /><br />
        <input type="checkbox" name="interest[]" value="" /> -->





    <!-- <form action="includes/login.inc.php" method="post">
    <button type="submit">logout</button>
    </form>
    <a href="edit_details.php"><button>Edit account details</button></a> -->
    <script type="text/javascript" async src="js/photo.js"></script>
</div>

<script async src="./js/nav.js"></script>
</body>
</html>

<?php
    require "./footer.php"
?>
