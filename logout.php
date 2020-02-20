<?php

require '../config/database.php';

session_start();
session_unset();
session_destroy();
echo '&#128521 Hope you found your Match!';
header("Location: ../index.php");

?> 