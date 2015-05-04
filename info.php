<?php
require_once 'htmlfunc.php';
?>
<!DOCTYPE html>
<html>
<head>
<script>
function showInfo(str)
{   
	 if (str == "") {
	        document.getElementById("txtHint").innerHTML = "";
	        return;
	    } else { 
	        if (window.XMLHttpRequest) {
	            // code for IE7+, Firefox, Chrome, Opera, Safari
	            xmlhttp = new XMLHttpRequest();
	        } else {
	            // code for IE6, IE5
	            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	        }
	        xmlhttp.onreadystatechange = function() {
	            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
	            }
	        }
	        xmlhttp.open("GET","getInfo.php?q="+str,true);
	        xmlhttp.send();
	    }
}
</script>
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
<body>

<form>
<select name="cars" onchange="showInfo(this.value)">
  <option value="">Select a car for info:</option>
  <option value="1">Economy</option>
  <option value="2">Compact</option>
  <option value="3">Midsize</option>
  <option value="4">Fullsize</option>
  <option value="5">Standard</option>
  <option value="6">Sport Utility</option>
  <option value="7">Premium</option>
  <option value="8">Minivan</option>
  </select>
</form>
<br>
<div id="txtHint"><b>Car info will be listed here...</b></div>

</body>
</html>
_END;
