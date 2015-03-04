<?php
include_once 'dbConnect.php';
include_once 'main.php';

	$userName= $_POST['userName'];
	$password= $_POST['password'];
	$email= $_POST['email'];
	
	$query="SELECT * FROM userdatabase WHERE BINARY username='$userName' AND BINARY pword='$password'";
	
	$result = mysql_query($query);
	
	if (!$result) {
		echo "Improper login credentials";
	}
	//$row = mysql_fetch_row($result);
	if ($result){
		header("Location: successful.php");
   		exit;
	}	
	
?>
