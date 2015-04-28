<?php
require_once 'htmlfunc.php';
require_once 'dbConnect.php';
?>
<html>
<head>
<meta charset="ISO-8859-1">
<title>EZ RAC Summary</title>
</head>
<center>
<?php
if(isset($_SESSION['user']))
{
html_header();
buttons();
logged();
echo<<<_END
<form action="summaryFilled.php" method="POST">
Order Date:<br><br>
<input type="text" name="orderDate" >
<br>Ex: YYYY-MM-DD
<br>
<br>
<input type="submit" value="Submit">

</form>
</center>
_END;
}
else
{
	html_header();
	echo "Please log in to view this page.<br>You will now be redirected to the sign in page.";
	echo '<META HTTP-EQUIV="Refresh" Content="4; URL=signIn.php">';
		exit;
}
?>