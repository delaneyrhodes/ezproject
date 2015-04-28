<!DOCTYPE html>
<html>
<head>
<style>
</style>
</head>
</html>
<?php
require_once 'htmlfunc.php';
include_once 'dbConnect.php';
?>
<html>
<head>
<meta charset="ISO-8859-1">
<title>EZ RAC Create Account</title>
<script>
function validateEmail() {
	var x = document.forms["createForm"]["email"].value;
    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    if(!(re.test(x)))
    {
        alert("Email is invalid.");
    	return false;
    }
    else
        return true;
    	
}

function validatePassword(){
	var x = document.forms["createForm"]["password"].value;
	var y = x.length;
	if(y<6)
	{
		document.getElementById("pwtext").innerHTML = "Password needs to be 6 characters.";
		return false;
	}
	else
		document.getElementById("pwtext").innerHTML = "";
		return true;
	
}
</script>
</head>
<center>
<?php
html_header();
  echo <<<_END
    <h1>Please Enter Your Information Below</h1>
  <form method="POST" action="createUser.php" onsubmit="return validateEmail()" name="createForm">
		First Name:<br>
			<input type="text" name="firstName" value="">
		<br>
		<br>
		Last Name:<br>
			<input type="text" name="lastName" value="">
  		<br>
		<br>
  		Email:<br>
			<input type="text" name="email" value="">
		<br>
		<br>
  		Phone:<br>
			<input type="text" name="phone" value="">
		<br>
		<br>
		Username:<br>
			<input type="text" name="username" value="">
  		<br>
		<br>
  		Password:<br>
			<input type="password" name="password" value="" onKeyUp="validatePassword()">
			<p id="pwtext"></p>
		<br>
		<br>
			<input type="submit" value="Create Account">
	</form>
_END
     
?>
</center>
</html>
