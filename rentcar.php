<?php
require_once 'htmlfunc.php';
include_once 'dbConnect.php';
?>
<!DOCTYPE html>
<html>
<head>
<style>
</style>
</head>
</html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Rent a Car</title>
</head>
<?php 
html_header();
buttons();
if(isset($_SESSION['user']))
{
	logged();
	$id = $_SESSION['id'];
}	
else 
	signButtons();
$query="SELECT carID, carName, price, imageName FROM cars";

$result = mysql_query($query);
if(!$result) die ("Access Failed".mysql_error());

$rows=mysql_num_rows($result);
if(!isset($_SESSION['user']))
{
	echo<<<_END
		<center>
_END;
	echo "<h2>Log in to rent a car.</h2>";
	echo<<<_END
		</center>
_END;
}
echo "<center>";
echo "<table>";
for($i=0; $i<$rows; $i++)
{
	$rows=mysql_fetch_row($result);
	if($i%4 ==0) //start a new row in table
		echo "<tr>";
	echo "<td>";
	echo<<<_END
	<form name="menu" method="post" action="cart.php">
  <p><center>$rows[1]</center></p>
  <p><center><img src="./images/$rows[3]" width="142" height="85" alt="$rows[1]" /></center></p>
  <p>Daily Price: $ $rows[2]</p>
  <p>Days to Rent: 
    <input name="quantity" type="number" value="1" size="5" />
  	<input name="carID" type="hidden" value="$rows[0]" />
  	<input name="carName" type="hidden" value="$rows[1]"  />
  	<input name="price" type="hidden" value="$rows[2]" />
  </p>
  <p>
_END;
if(isset($_SESSION['user']))
{
	echo<<<_END
	<center>
  	<input name="customerID" type="hidden" value="$id" />
    <input name="Add to Cart" type="submit" id="button" value="Add to Cart" />
  			</center>
  </p>
  	</form>
_END;
}
	echo "</td>";
	if($i%4 ==4) //last column in the row
		echo "</tr>";
}
if(($rows-1)%4!=3)
	echo "</tr>";
echo "</table>";
echo "</center>";
?>