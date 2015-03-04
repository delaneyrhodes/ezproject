<?php
include_once 'dbConnect.php';

  echo <<<_END
  
  <form method="POST" action="logIn.php">
		Username:<br>
			<input type="text" name="userName" value="">
		<br>
		Password:<br>
			<input type="password" name="password" value="">
  		<input type="hidden" name="email" value=" ">
		<br><br>
			<input type="submit" value="Submit">
	</form>
_END
     
?>
