<?php 
// $name = $_SESSION['FirstName'];?>
<!DOCTYPE html>
<html>
<head>
    <title>Profile Update</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"

<!-- style -->
   <link rel="stylesheet" href="./css/styles.css">
   
</head>
<body>


<h3>Enter Your profile Details</h3>
<hr width="75%">

<div class="form2">
    <form action="./includes/updatebio.inc.php" method="POST" align="center">
        <h2> Personalize Your Choices</h2>
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

        <label for="bio"> Bio </label> <br/><br/>
            <textarea maxlength="300" placeholder="Let everyone know a litte bit about YOU. <max 300 characters>" name="bio"></textarea> <br><br/>
        
            <label for="pref"> I am interested in: </label> <br/><br/>
                <div class="row">
                    <div class="column" style="background-color:#aaa;" align="left">
                        <input type="checkbox" id="love" name="love"> #Love <br>
                    <input type="checkbox" id="fun" name="fun" > #Fun <br>
                    <input type="checkbox" id="fitness" name="fitness" > #Fitness<br>
                    <input type="checkbox" id="nature" name="nature" > #Nature<br>
                    <input type="checkbox" id="tech" name="tech" > #Technology <br>
</div>
                    <div class="column" style="background-color:#aaa;"  align="left">
                <input type="checkbox" id="meme" name="meme" > #Meme Culture <br>
                <input type="checkbox" id="science" name="science" > #Science<br>
                <input type="checkbox" id="animals" name="animals" > #Animals <br>
                <input type="checkbox" id="foodie" name="foodie" > #Foodie <br>
</div>
</div>
    
        <button type="submit" class="button button1" name="edit_profile">Submit Changes</button>
      
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

    </form>



    <!-- <form action="includes/login.inc.php" method="post">
    <button type="submit">logout</button>
    </form>
    <a href="edit_details.php"><button>Edit account details</button></a> -->
</div>
</body>
</html>