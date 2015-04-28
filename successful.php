<?php
require_once 'htmlfunc.php';
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
<title>EZ Rent a Car</title>
</head>
<center>
<?php
if(isset($_SESSION['user']))
{
	logged();
	//$id = $_SESSION['id'];
}
html_header();
  echo <<<_END
  
  <body>

_END;
  	buttons();
  echo <<<_END
  <br><br>
  <img src="images/picture1.jpg" alt="EZ Rent A Car" style="height:200px">
<img src="images/picture2.jpg" alt="EZ Rent A Car" style="height:200px">
<img src="images/picture 3.jpg" alt="EZ Rent A Car" style="height:200px">
<div id="map"></div>
  </body>
_END;
     
?>
