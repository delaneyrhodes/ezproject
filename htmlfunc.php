<?php session_start();
?>
<html>
<style>
body
{
	background-image: #A9A9A9;
	background-attachment: fixed;
	margin: 0;
	word-wrap: break-word;	
	
}

.menubutton {
	-moz-box-shadow:inset 0px 0px 7px 0px #97c4fe;
	-webkit-box-shadow:inset 0px 0px 7px 0px #97c4fe;
	box-shadow:inset 0px 0px 7px 0px #97c4fe;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #3d94f6), color-stop(1, #1e62d0) );
	background:-moz-linear-gradient( center top, #3d94f6 5%, #1e62d0 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#3d94f6', endColorstr='#1e62d0');
	background-color:#3d94f6;
	-webkit-border-top-left-radius:0px;
	-moz-border-radius-topleft:0px;
	border-top-left-radius:0px;
	-webkit-border-top-right-radius:0px;
	-moz-border-radius-topright:0px;
	border-top-right-radius:0px;
	-webkit-border-bottom-right-radius:0px;
	-moz-border-radius-bottomright:0px;
	border-bottom-right-radius:0px;
	-webkit-border-bottom-left-radius:0px;
	-moz-border-radius-bottomleft:0px;
	border-bottom-left-radius:0px;
	text-indent:0px;
	border:1px solid #337fed;
	display:inline-block;
	color:#ffffff;
	font-family:Times New Roman;
	font-size:17px;
	font-weight:bold;
	font-style:normal;
	height:49px;
	line-height:49px;
	width:120px;
	text-decoration:none;
	text-align:center;
	text-shadow:0px 0px 0px #1570cd;
}
.menubutton:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #1e62d0), color-stop(1, #3d94f6) );
	background:-moz-linear-gradient( center top, #1e62d0 5%, #3d94f6 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#1e62d0', endColorstr='#3d94f6');
	background-color:#1e62d0;
}.menubutton:active {
	position:relative;
	top:1px;
}
.classname {
	-moz-box-shadow:inset 0px 1px 0px 0px #f5978e;
	-webkit-box-shadow:inset 0px 1px 0px 0px #f5978e;
	box-shadow:inset 0px 1px 0px 0px #f5978e;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #610903), color-stop(1, #bd2d20) );
	background:-moz-linear-gradient( center top, #610903 5%, #bd2d20 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#610903', endColorstr='#bd2d20');
	background-color:#610903;
	-webkit-border-top-left-radius:37px;
	-moz-border-radius-topleft:37px;
	border-top-left-radius:37px;
	-webkit-border-top-right-radius:0px;
	-moz-border-radius-topright:0px;
	border-top-right-radius:0px;
	-webkit-border-bottom-right-radius:37px;
	-moz-border-radius-bottomright:37px;
	border-bottom-right-radius:37px;
	-webkit-border-bottom-left-radius:0px;
	-moz-border-radius-bottomleft:0px;
	border-bottom-left-radius:0px;
	text-indent:0;
	border:1px solid #d02718;
	display:inline-block;
	color:#ffffff;
	font-family:Georgia;
	font-size:15px;
	font-weight:bold;
	font-style:normal;
	height:43px;
	line-height:43px;
	width:100px;
	text-decoration:none;
	text-align:center;
	text-shadow:1px 1px 0px #810e05;
}
.classname:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #bd2d20), color-stop(1, #610903) );
	background:-moz-linear-gradient( center top, #bd2d20 5%, #610903 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#bd2d20', endColorstr='#610903');
	background-color:#bd2d20;
}.classname:active {
	position:relative;
	top:1px;
}
/* This button was generated using CSSButtonGenerator.com */
p.one {
    border-style: dashed;
    border-color: #766347;
}
.two {
	width:500px;
	height: 200px;
    border-style: groove;
    border-color: #953832;
    border-width: 20px;
    border-radius: 25px;
}
p.log_pos{
	position: fixed;
	top: 40px;
	right: 40px;
}
p.log_button{
	position: fixed;
	top: 60px;
	right: 48px;
}

.EZRACtext{
margin-left: auto;
margin-right: auto;
text-align: justify;
width: 60%;
}

.logo{
margin-top: 3%;
margin-bottom: 3%;
}

.aboutPicture{
margin-top: 3%;
margin-bottom: 3%;}

.mainPicture{
margin-top: 10%;
margin-bottom: 3%;}

.map{
border: 5px solid black;
height: 400px;
width: 400px;
}

</style>
</html>

<?php 
function html_header()
{
	if(isset($_SESSION['user']))
	{
		echo<<<_END
<center>
<div class = "logo">
<a href="successful.php"><img src="images/logoez.jpg" alt="EZ Rent A Car" style="height:200px"></a>
	</div>
</center>
<body>
_END;
	}
	else 
	{
	echo<<<_END
<center>
<div class = "logo">
<a href="index.php"><img src="images/logoez.jpg" alt="EZ Rent A Car" style="height:200px"></a>
	</div>
</center>
<body>
_END;
	}
}

function email_error()
{

	echo<<<_END
<center>
<h2>
Email already in use.
</h2>
</center>
<body>
_END;
}

function entry_error()
{

	echo<<<_END
<center>
<h2>
Unsuccessful entry.
</h2>
</center>
<body>
_END;
}

function login_error()
{

	echo<<<_END
<center>
<h2>
Improper login credentials.
</h2>
</center>
<body>
_END;
}

function signInButtons()
{
	echo<<<_END
	<center>
	<a href="about.php"><div class= "menubutton">About EZ</div></a>
			<br>
	<a href="rentcar.php"><div class= "menubutton">Rent a Car</div></a>
	</center>
	<br>
		
_END;
}

function buttons()
{
		echo<<<_END
	<center>
	<a href="about.php"><div class= "menubutton">About EZ</div></a>
	<a href="info.php"><div class= "menubutton">Car Info</div></a>
	<a href="rentcar.php"><div class= "menubutton">Rent a Car</div></a>
	<a href="summary.php"><div class= "menubutton">Summary</div></a>
	<a href="updateInfo.php"><div class= "menubutton">Update Info</div></a>
	<a href="checkOut.php"><div class= "menubutton">Check Out</div></a>
	</center>
	<br>
		
_END;
}
function signButtons()
{
	echo<<<_END
<div style ="position:absolute;top:40px;right:30px;">
	<center>
	<a href="signIn.php"><div class= "classname">Sign In</div></a>
	<a href="create.php"><div class= "classname">Sign Up</div></a>
	</center>
	</div>
_END;
}
function career_button()
{
	echo<<<_END
	<div class="two">
_END;
	echo "<h1>Now Hiring! Click to apply.</h1>";
	echo<<<_END
	<div style ="position:relative;bottom:0px;">
	<center>
	<a href="careers.php"><div class= "menubutton">Careers</div></a>
	</center>
	</div>
	</div>
_END;
}
function html_footer()
{
echo<<<_END
<p class="one">
<div style ="position:relative;bottom:0px;">
<center>
	<a href="contact.php"><div class= "menubutton">Contact</div></a>
	<a href="summary.php"><div class= "menubutton">Summary</div></a>
	<br>
	<img src="images/pizzalogo2.jpg" width="150" height="100" alt="pizza logo2" /></p>
	<br>
</center>
</div>
</p>
_END;
}
function logged()
{
	echo<<<_END
	<p class="log_pos">
_END;
	echo "Hi, ".$_SESSION['user']."<br><br></p>";
	echo <<<_END
	<form method="POST" action="logout.php">
	<p class="log_button">
	<input type="submit" value="Logout">
	</p>
	</form>
_END;
}
/*
 * Add two more fucntions:
 * 
 * function tableheader($caption, $cols)
 * function tablefooter()
*/
function tableheader($caption, $cols)
{
echo<<<_END
<table>
	<caption>$caption</>
_END;

	echo "<tr>";
foreach($cols as $header)
{
	echo "<th>$header</th>";
}
echo "</tr>";
}
function tablefooter()
{
	echo"</table>";	
}
function retreiveRecords($query, $cols, $tableTitle)
{
	$result= mysql_query($query);
	if(!$result) die ("failed.".mysql_error());
	$num= mysql_num_rows($result);
	tableheader($tableTitle, $cols);
	for($i=0; $i<$num; $i++)
	{
		$row=mysql_fetch_row($result);
		echo"<tr>";
		foreach($row as $element)
		{
			echo"<td>$element</td>";
		}
		echo "</tr>";
	}
	tablefooter();
}
function menu()
{
	require_once 'dbconn.php';
	require_once 'htmlfuncs.php';
	
	$query="SELECT pizzaID, pizzaName, price, imagename FROM pizza";
	
	$result = mysql_query($query);
	if(!$result) die ("Access Failed".mysql_error());
	
	$rows=mysql_num_rows($result);
	
	echo "<table>";
	for($i=0; $i<$rows; $i++)
	{
		$rows=mysql_fetch_row($result);
		if($i%4 ==0) //start a new row in table
			echo "<tr>";
		echo "<td>";
		echo<<<_END
	<form name="menu" method="post" action="cart.php">
  <p>$rows[1]</p>
  <p><img src="./images/$rows[3]" width="142" height="85" alt="$rows[1]" /></p>
  <p>price: $rows[2]</p>
</form>
_END;
		echo "</td>";
		if($i%4 ==3) //last column in the row
			echo "</tr>";
	}
	if(($rows-1)%4!=3)
		echo "</tr>";
	echo "</table>";
	
	
}


?>