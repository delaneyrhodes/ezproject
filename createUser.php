<?php
include_once 'dbConnect.php';
include_once 'create.php';
require_once 'htmlfunc.php';

	$firstName= $_POST['firstName'];
	$lastName= $_POST['lastName'];
	$email= $_POST['email'];
	$phone= $_POST['phone'];
	$userName= $_POST['username'];
	$password= $_POST['password'];
	
	$query="INSERT INTO customers (firstname,lastname,email,phone,username,pass) VALUES('$firstName',
			'$lastName','$email','$phone','$userName','$password')";
	
	$result=mysql_query($query);
	if(!$result){

             email_error();
	}
else{
		$query1="SELECT * FROM customers WHERE username = '$userName' AND pass = '$password'";
		
		$result1 = mysql_query($query1);
		$row1 = mysql_fetch_row($result1);
		
		if (!$row1) {
			entry_error();
		}
		if($row1){
			echo <<<_END
			<meta http-equiv="refresh" content="0; url=main.php">;
_END;
		}
	}
?>
