<?php 
session_start();
require_once 'dbConnect.php';
html_header();
buttons();
$id = $_SESSION['id'];
$query="SELECT carName,sum(quantity),imageName,price*quantity FROM orders JOIN cars ON orders.carID=cars.carID WHERE customerID='$id' AND orderDate= CURDATE() GROUP BY cars.carID";

$result = mysql_query($query);
if(!$result) die ("Access Failed".mysql_error());

$rows=mysql_num_rows($result);

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
	<p><center>Car Name:     $rows[0]</center></p>
	<p><center>Quantity:     $rows[1]</center></p>
  <p><center>Subtotal:    $$rows[3]</center></p>
  <p><center><img src="./images/$rows[2]" width="142" height="85" alt="$rows[0]" /></center></p>
  <p>
_END;
	
	echo "</td>";
	if($i%4 ==4) //last column in the row
		echo "</tr>";
}
if(($rows-1)%4!=3)
	echo "</tr>";
echo "</table>";
echo "</center>";

echo"<p><center>Total:    $".$_SESSION['totalP']."</center></p>";
?>