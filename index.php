
<?php

include("dbconnect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>MyBank.com</title>
</head>
<body>
	<div class="login-page">
	  <div class="form">
	  	<label>Customer Login</label>
	    <form class="login-form" action="customer.php" method="POST">
	      <input type="text" name="username1"/><br>
	      <input type="password" name="password1"/><br>
	        <button type="submit" name="submit1">Login</button>
	     <!-- <input type="submit" name="submit" class="button" value="LOGIN">-->
	    </form>
	    <label>Employee Login</label>
	    <form class="login-form" action="employee.php" method="POST">
	      <input type="text" name="username"/><br>
	      <input type="password" name="password"/><br>
	        <button type="submit" name="submit2">Login</button>
	     <!-- <input type="submit" name="submit" class="button" value="LOGIN">-->
	    </form>
	  </div>
	</div>
</body>
</html>
