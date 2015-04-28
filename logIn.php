<?php
require_once 'htmlfunc.php';
include_once 'dbConnect.php';
include_once 'main.php';


	$userName= $_POST['userName'];
	$password= $_POST['password'];
	$email= $_POST['email'];
	
	$query="SELECT * FROM customers WHERE BINARY username='$userName' AND BINARY pass='$password'";
	
	$result = mysql_query($query);
	
	if (!$result) {
		login_error();
	}
	else{
		$query2="SELECT customerID FROM customers WHERE username ='$userName'";
		$result2=mysql_query($query2);
		$row = mysql_fetch_row($result2);
		$_SESSION['id'] = $row[0];
		$_SESSION['user'] = $userName;
		echo <<<_END
			<meta http-equiv="refresh" content="0; url=successful.php">;
_END;
	}	
	
?>
