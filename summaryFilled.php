<?php
require_once 'htmlfunc.php';
require_once 'summary.php';
require_once 'dbConnect.php';
?>

<html>
<head>
<meta charset="ISO-8859-1">
<title>EZ RAC Summary</title>
</head>
<!-- PHP Starts -->

<!-- PHP Ends-->
<center>
<?php
$orderD=$_POST['orderDate'];

$caption="";
?>
<br>
<?php
$query = "SELECT sum(quantity), sum(cars.price*orders.quantity) FROM cars JOIN orders ON cars.carID = orders.carID WHERE DATE(orderDate)='$orderD'";
$cols = array ("Quantity", "Revenue");
retreiveRecords($query, $cols, $caption);
?>