<?php 
// $name = $_SESSION['FirstName'];?>
<!DOCTYPE html>
<html>
<head>
<title>Profile Update</title>
<meta http-equiv="X-UA-Compatible" content="ie=edge">
   

   <!-- style -->
   <link rel="stylesheet" href="./css/styles.css">
   
</head>
<body>


<h1>Enter Your profile Details</h1>

<hr width="75%">

<div class="form">
    <form action="./includes/updatebio.inc.php" method="POST" align="center">

    <label for="email"> Email Address: </label> <br/>
        <input type="email" name="email" placeholder="Email Address" required>
        <br>
    <input type="text" name="age" min="18" max="40" placeholder="Age" required>
    <p>select your gender</p>
    <input type="radio" name="gender" value="male" /> male <br />
    <input type="radio" name="gender" value="female" /> female <br />
    <input type="radio" name="gender" value="other" /> other <br />
     
    </select>
    <p>What is your sexual preferance</p>
    <!-- <input type="radio" name="pref" value="male" /> male <br />
    <input type="radio" name="pref" value="female" /> female <br />
    <input type="radio" name="pref" value="other" /> other <br /> -->

    <select name="sex-pref">
        <option name="pref" value="male">Male</option>
        <option name="pref" value="female">Female</option>
        <option name="pref" value="both">Both</option>
    </select>

    <textarea maxlength="300" placeholder="Let everyone know a litte bit about YOU." name="bio"></textarea>
    <br>
    <p>choose 3 interests</p>
    <br>

    <label for='formCountries[]'>Select the countries that you have visited:</label><br>
<select multiple="multiple" name="interests[]" size="1">
    <option value="love">#Love </option>
    <option value="fun">#Fun </option>
    <option value="fitness">#Fitness</option>
    <option value="nature">#Nature</option>
    <option value="technology">#Technology</option>
  
</select>
 

    <!-- <input type="checkbox" name="interest[]" value="" /><br />
    <input type="checkbox" name="interest[]" value="" /><br />
    <input type="checkbox" name="interest[]" value="" /><br />
    <input type="checkbox" name="interest[]" value="" /><br />
    <input type="checkbox" name="interest[]" value="" /> -->

    <!-- <input type="checkbox" id="love" name="love">
<label for="love">#Love</label><br>
<input type="checkbox" id="fun" name="fun" >
<label for="fun">#fun</label><br>
<input type="checkbox" id="fitness" name="fitness" >
<label for="fitness">#Fitness</label><br>
<input type="checkbox" id="nature" name="nature" >
<label for="nature">#Nature</label><br>
<input type="checkbox" id="tech" name="tech" >
<label for="tech">#Technology</label><br>
<input type="checkbox" id="meme" name="meme" >
<label for="meme">#meme</label><br>
<input type="checkbox" id="science" name="science" >
<label for="science">#science</label><br>
<input type="checkbox" id="animals" name="animals" >
<label for="animals">#Animals</label><br>
<input type="checkbox" id="foodie" name="foodie" >
<label for="foodie">#foodie</label><br> -->

    <button type="submit" name="edit_profile">Submit changes</button>
    </form>



<!-- <form action="includes/login.inc.php" method="post">
<button type="submit">logout</button>
</form>
<a href="edit_details.php"><button>Edit account details</button></a> -->