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
<title>EZ RAC About</title>
</head>
<center>
<?php
html_header();
buttons();
if(isset($_SESSION['user']))
{
	logged();
	//$id = $_SESSION['id'];
}
  echo <<<_END
  <div class="EZRACtext">
		Since 1994, E-Z Rent-A-Car has continued to provide a great rental experience to every customer we serve.
		Each car rental associate receives specific training to provide the best customer service, while being an 
		ambassador of the city you are visiting. We understand that, in most cases, your interaction with an E-Z 
		Rent-A-Car rental agent is your first opportunity to experience the hospitality and culture of the city you are
		 visiting. Each E-Z Rent-A-Car employee is especially proud of creating that fantastic first impression of their 
		city and we hope to deliver that first impression to you at every step along the way.
<br>
		<br>
E-Z Rent-A-Car holds a strong commitment to delivering the Best Value in Car Rental. Since our beginnings, 
		we have provided this value by offering current model year vehicles at incredible prices while practicing 
		our signature and customer reviewed, top notch customer service. We look forward to providing you with rental
		 transportation on your next vacation or business trip from our many locations.
		</div>

		<div class="aboutPicture">
 <img src="images/new-cars.jpg" alt="Cars" style="height:400px">
  </div>
_END
     
?>
</center>
</html>