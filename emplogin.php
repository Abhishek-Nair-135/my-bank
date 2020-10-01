<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<head>

<link rel="stylesheet" type="text/css" href="mystyle.css">
<style type="text/css">

/* Add a black background color to the top navigation */
.topnav {
    background-color: #333;
    overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
    background-color: #4CAF50;
    color: white;
}
</style>

</head>
</head>
<body>

<div>
<font color="gold" size="10"><b align="center"><pre>MYBANK</pre></b></font>
</div>
<div class="topnav" id="myTopnav">
  <a href="emplogin.php">Home</a>
  <a href="viewcustomer.php">Customers</a>
  <a href="viewtransaction.php">Transaction</a>
  <a herf="aboutus.php">About Us</a>
  <a href="index.php">Logout  </a>
<hr>
</div>
</div>
</form>
</body>
</html>