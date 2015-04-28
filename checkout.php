<?php
require 'htmlfunc.php';
if(isset($_SESSION['user']))
{
html_header();
buttons();
logged();
	echo "<center><br>The total price for your order is: $". $_SESSION['totalP'].". <br> <br>Enter your credit card number below to confirm your order.";
	echo "<br><br>";
echo <<<_END
<center>
  <form method="POST" action="checkOutValid.php">
		Credit Card Number:<br>
			<input type="text" name="credit" value="">
_END;
echo<<<_END
		<br><br>
			<input type="submit" value="Submit Order">

	</form>
	<form method="post" action="index.php">
_END;
		/*if(isset($_SESSION['totalP']))
		{
			unset($_SESSION['totalP']);
			unset($_SESSION['cart']);
		}*/
		echo<<<_END
		<input type="submit" value="Cancel">
	</form>
  </center>
_END;
}
else
{
	html_header();
	echo <<<_END
	<center>
_END;
	echo "Please log in to view this page.<br>You will now be redirected to the sign in page.";
	header('Refresh: 5; URL=signIn.php');
	echo <<<_END
	</center>
_END;
}

?>