<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 70%;
    border-collapse: collapse;
    text-align:center;
    margin: 0 auto;
    
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
    
}

th {text-align: center;}
</style>
</head>
<body>

<?php
include_once 'dbConnect.php';
$q = intval($_GET['q']);


$sql="SELECT * FROM carinfo WHERE carID = '".$q."'";
$result = mysql_query($sql);
if(!$result) die ("Access Failed".mysql_error());

$rows=mysql_num_rows($result);

echo "<table>
<tr>
<th>Car Name</th>
<th>Description</th>
<th>Price</th>
<th>Capacity</th>
<th>Storage</th>
<th>Miles Per Gallon</th>		
</tr>";
while($row = mysql_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row[1] . "</td>";
    echo "<td>" . $row[2] . "</td>";
    echo "<td>$" . $row[3] . ".00</td>";
    echo "<td>" . $row[4] . "</td>";
    echo "<td>" . $row[5] . "</td>";
    echo "<td>" . $row[6] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>