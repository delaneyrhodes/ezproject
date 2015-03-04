<?php
include_once 'dbConnect.php';

  echo <<<_END
  
  <form method="POST" action="createUser.php">
		First name:<br>
			<input type="text" name="firstName" value="">
		<br>
		Last name:<br>
			<input type="text" name="lastName" value="">
  		<br>
  		Email:<br>
			<input type="text" name="email" value="">
		<br>
  		Phone:<br>
			<input type="number" name="phone" value="">
		<br>
		Username:<br>
			<input type="text" name="username" value="">
  		<br>
  		Password:<br>
			<input type="password" name="password" value="">
		<br>
		<br><br>
			<input type="submit" value="Submit">
	</form>
_END
     
?>
