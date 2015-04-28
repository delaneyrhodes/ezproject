<center>
<?php
require_once 'htmlfunc.php';
require_once 'dbConnect.php';
html_header();
buttons();
$price = $_POST['price'];
$quantity=$_POST['quantity'];
$pName=$_POST['carName'];
$pID=$_POST['carID'];
$custID=$_POST['customerID'];
$test="";
$test2="";

if(!isset($_SESSION['totalP']))
{
	$_SESSION['totalP']=$price * $quantity;
}
else
	$_SESSION['totalP']+=$price * $quantity;
if(!isset($_SESSION['cart'][$pID]))
{
	$_SESSION['cart'][$pID]['pID']=$pID;
	//echo $_SESSION['cart'][$pID]['pID'];
	$_SESSION['cart'][$pID]['price']=$price;
	$_SESSION['cart'][$pID]['quantity']=$quantity;
	$_SESSION['cart'][$pID]['carName']=$pName;
}
else
	$_SESSION['cart'][$pID]['quantity']+=$quantity;
if($quantity>1)
{	
	
	$test = $test.$_SESSION['cart'][$pID]['quantity']." ";
	$test2= $test2.$_SESSION['cart'][$pID]['carName'];
	echo "You have rented a(n) ".$test2." car for ".$test." days.<br>";
}

else
{
	$test = $test.$_SESSION['cart'][$pID]['quantity'];
	$test2= $test2.$_SESSION['cart'][$pID]['carName'];
	echo "You have rented an ".$test2." car for ".$test." day.<br>";
}
echo"<br>";
//print_r($_SESSION['cart']);
echo "Your total price is: $". $_SESSION['totalP'].".";
//$query="INSERT INTO orders (customerID, carID, quantity, orderDate) VALUES('$custID','$pID','$quantity', CURDATE())";
echo"<br>";
//$result=mysql_query($query);
echo "<br>You will be redirected back to the menu in a few seconds.";
	echo '<META HTTP-EQUIV="Refresh" Content="5; URL=rentcar.php">';
		exit;
html_footer();
?>
</center>