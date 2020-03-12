<?php
session_start();

if (isset($_POST['upload'])) {
	include '../config/database.php';
	
	$UserID = $_SESSION['UserId'];
	$img = $_POST['upload'];
	$upload_dir = '../gallery/';
	if (!file_exists($upload_dir)) {
		mkdir($upload_dir, 0775, true);
	}
	
	$img = str_replace('data:image/png;base64,', '', $img);
	$img = str_replace(' ', '+', $img);
	$data = base64_decode($img);
	$file = $upload_dir.mktime().'.png';
	$success = file_put_contents($file, $data);
	echo $success ? $file : 'Unable to save the file.';
	$file = str_replace('../', '', $file);
	try{
		$sql = "INSERT INTO `images` (`img_base64`, `UserID`, `img_title`) VALUES (?, ?, ?)";
		$stmt = $db_connect->prepare($sql);
		$stmt->bindParam(1, $data);
		$stmt->bindParam(2, $UserID);
		$stmt->bindParam(3, $file);
		$stmt->execute();
		header("Location: ../update_info.php");
		exit();
	} catch (PDOException $e)
	{
		die("Connection failed: " . $e->getMessage());
	}
}