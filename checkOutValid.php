<?php
include_once 'dbConnect.php';
include_once 'checkout.php';
$cardNum= $_POST['credit'];
if(empty($cardNum))
{
	echo <<<_END
	<center>
_END;
	echo "Enter your credit card number to confirm your order.";
	echo <<<_END
	</center>
_END;
}
else
{
	$custID=$_SESSION['id'];
	foreach($_SESSION['cart'] as $pID){
		
		
	$quantity=$pID['quantity'];
	$val1=$pID['pID'];
	$query="INSERT INTO orders (customerID, carID, quantity, orderDate) VALUES('$custID','$val1','$quantity', CURDATE())";
	$result=mysql_query($query);
	
	if ($result){
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL=showCheckOut.php">';
		//exit;
	}
	}
}



?>