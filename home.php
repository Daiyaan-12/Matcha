<?php
require './config/database.php';
session_start();
$firstName = ($_SESSION['firstName']);
$lastName = ($_SESSION['lastName']);
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <title>Sparklepony</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
<h1 class="mainheading" style="text-align: center; font-weight: bolder;">Ready to fing L&#10084;VE?</h1>
<hr width="75%">
       



<button class="open_chat_button" onclick="openChat()">Chat</button>

<div class="popup_chat" id="myForm">
  <form action="/action_page.php" class="chat_container">
    <h1>Chat</h1>

    <label for="chat_msg"><b>Chat with <?php echo $firstName," ", $lastName ?> </b></label>
    <textarea placeholder="Type message.." name="chat_msg" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeChat()">Close</button>
  </form>
</div>
<script async src="js/chat.js"></script>

    </body>
</html>


<?php
    require "./footer.php"
?>