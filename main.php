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
<title>EZ RAC Login</title>
</head>
<center>
<?php
html_header();
  echo <<<_END
  <h1>Please Log In</h1>
  <form method="POST" action="logIn.php">
		Username:<br>
			<input type="text" name="userName" value="">
		<br>
		<br>
		Password:<br>
			<input type="password" name="password" value="">
  		<input type="hidden" name="email" value=" ">
		<br><br>
			<input type="submit" value="Submit">
	</form>
_END
     
?>
</center>
</html>