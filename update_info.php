<?php 
$name = $_SESSION['FirstName'];?>
<!DOCTYPE html>
<html>
<head>
<title>Profile Update</title>
</head>
<body>
<h1>Enter Your profile Details</h1>
    <form action="/includes/updatebio.inc.php" method="POST">
    <input type="text" name="age" placeholder="Age">
    <p>select your gender</p>
    <select name="gender">
        <option value="m">Male</option>
        <option value="f">Female</option>
        <option value="o">Other</option>
    </select>
    <p>What is your sexual preferance</p>
    <select name="sex-pref">
        <option value="het">Heterosexual</option>
        <option value="homo">Homosexual</option>
        <option value="bi">Bisexual</option>
    </select>
    <textarea placeholder="Let everyone know a litte bit about YOU."></textarea>
    <br>
    <p>choose 3 intrests</p>
    <br>
    <input type="checkbox" id="love" name="love">
<label for="love">#Love</label><br>
<input type="checkbox" id="fun" name="fun">
<label for="fun">#fun</label><br>
<input type="checkbox" id="fitness" name="fitness">
<label for="fitness">#Fitness</label><br>
<input type="checkbox" id="nature" name="nature">
<label for="nature">#Nature</label><br>
<input type="checkbox" id="tech" name="tech">
<label for="tech">#Technology</label><br>
<input type="checkbox" id="meme" name="meme">
<label for="meme">#meme</label><br>
<input type="checkbox" id="science" name="science">
<label for="science">#science</label><br>
<input type="checkbox" id="animals" name="animals">
<label for="animals">#Animals</label><br>
<input type="checkbox" id="foodie" name="foodie">
<label for="foodie">#foodie</label><br>
<textarea>hello</textarea>
    <button type="submit" name="edit-info">Submit changes</button>
    </form>
    <br>
    <form action="includes/login.inc.php" method="post">
    <br>
</form>
<form action="includes/login.inc.php" method="post">
<button type="submit">logout</button>
</form>
<a href="edit_details.php"><button>Edit account details</button></a>