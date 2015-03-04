<?php
include_once 'dbConnect.php';
include_once 'create.php';

	$firstName= $_POST['firstName'];
	$lastName= $_POST['lastName'];
	$email= $_POST['email'];
	$phone= $_POST['phone'];
	$userName= $_POST['username'];
	$password= $_POST['password'];
	
	$query="INSERT INTO userdatabase (firstName,lastName,email,phoneNumber,username,pword) VALUES('$firstName',
			'$lastName','$email','$phone','$userName','$password')";
	
	$result=mysql_query($query);
	if(!$result){

             echo "Email already in use";
	}
else{
		$query1="SELECT * FROM userdatabase WHERE username = '$userName' AND pword = '$password'";
		
		$result1 = mysql_query($query1);
		$row1 = mysql_fetch_row($result1);
		
		if (!$row1) {
			echo "Unsuccessful Entry";
		}
		if($row1){
			header("Location: main.php");
			exit;
		}
	}
?>
