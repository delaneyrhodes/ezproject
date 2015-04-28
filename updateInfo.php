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
<title>EZ RAC Update Information</title>
<script>
function validateEmail() {
	var x = document.forms["updateForm"]["email"].value;
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
	var x = document.forms["updateForm"]["password"].value;
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
buttons();
$x=$_SESSION['user'];
$query1="SELECT firstname, lastname, email, phone, pass FROM customers WHERE username = '$x'";
		
		$result1 = mysql_query($query1);
		$row1 = mysql_fetch_row($result1);
		
if(isset($_POST['submit'])){
	$firstName=$_POST['firstName'];
	$lastName=$_POST['lastName'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$password=$_POST['password'];
	$query1="UPDATE customers SET firstname='$firstName', lastname='$lastName', email='$email',phone='$phone',pass='$password' WHERE username='$x' ";
	
	$result1 = mysql_query($query1);
	$query1="SELECT firstname, lastname, email, phone, pass FROM customers WHERE username = '$x'";
	
	$result1 = mysql_query($query1);
	$row1 = mysql_fetch_row($result1);
	
	
}
echo<<<_END
<br>
		 <form method="POST" submit="updateInfo.php" name="updateForm"  onsubmit="return validateEmail()">
		First Name:<br>
			<input type="text" name="firstName" value=$row1[0]>
		<br>
		<br>
		Last Name:<br>
			<input type="text" name="lastName" value=$row1[1]>
  		<br>
		<br>
  		Email:<br>
			<input type="text" name="email" value="$row1[2]">
		<br>
		<br>
  		Phone:<br>
			<input type="text" name="phone" value="$row1[3]">
		<br>

		<br>
  		Password:<br>
			<input type="password" name="password" value="$row1[4]" onKeyUp="validatePassword()">
			<p id="pwtext"></p>
		<br>
			<input type="submit" name="submit" value="Update">
	</form>
		
_END;
?>