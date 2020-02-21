<?php

include '../config/database.php';

$sql = "SELECT UserID FROM users WHERE verification_code = ? AND verified = 0";
$stmt = $db_connect->prepare($sql);
$stmt->bindParam(1, $_GET['code']);
$stmt->execute();
$num = $stmt->rowCount();
if ($num == 1)
{
	$sql = "UPDATE users SET verified = 1 WHERE verification_code = ?";
	$stmt = $db_connect->prepare($sql);
	$stmt->bindParam(1, $_GET['code']);
	if ($stmt->execute())
	{
		header("Location: ../login.php?success=verified");
		exit();
	}
	else {
		header("Location: ../login.php?error=updatefailed");
		exit();
	}
}
else{
	header("Location: ../login.php?error=nouser");
	exit();
}
?>
