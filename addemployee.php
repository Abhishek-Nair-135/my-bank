<?php

include("header.php");
include("dbconnect.php");
//session_start();
?>

<?php
//$row = mysqli_fetch_array(mysqli_query($conn,"SELECT MAX(empid) FROM mybank.employee"),MYSQLI_BOTH);
//++$row[0];
if(isset($_POST["button2"]))
{
// $sqll = "INSERT INTO login (loginid,passwd,tpasswd) VALUES ('$_POST[loginid]','$_POST[passwd]','')";
// if (!mysqli_query($conn,$sqll))
//   {
//   die('Error: 1 ' . mysqli_error());
//   }
$sql="INSERT INTO employee (empid, fname, lname ,loginid, passwd, phoneno , emailid) VALUES
('','$_POST[fname]','$_POST[lname]','$_POST[loginid]','$_POST[passwd]','$_POST[phoneno]','$_POST[emailid]')";

if (!mysqli_query($conn,$sql))
  {
  die('Error:  2' . mysqli_error());
  }
  if(mysqli_affected_rows() == 1)
	{
$succ = "EMPLOYEE RECORD ADDED SUCCESSFULLY...";
}
mysqli_close($conn);
}
?>
  
<p>&nbsp;</p>
   	<p><strong><h2>ADD EMPLOYEE</h2></strong></p>
   	<p>
   <?php 
	echo $succ;
	 ?>  
   	</p>
   	<blockquote>
   	  <form id="form1" name="form1" method="POST" action="">
   	    <table width="407" border="0">
   	      <tr>
   	        <th scope="col"><div align="left">FIRST NAME </div></th><th>
              <div align="left">
                <input type="text" name="fname">
            </div></th>
          </tr>
   	      <tr>
            <tr>
            <th scope="col"><div align="left">LASTNAME NAME </div></th><th>
              <div align="left">
                <input type="text" name="lname" >
            </div></th>
          </tr>
   	        <th scope="row"><div align="left">LOGIN ID </div></th><th>
            <input type="text" name="loginid"></td>
          </tr>     
   	      <tr>
   	        <th scope="row"><div align="left">PASSWORD</div></th><th>
   	        
            <input type="password" name="passwd" ></td>
          </tr>
   	      <tr>
   	        <th scope="row"><div align="left"> CONTACT NUMBER</div></th><th>
   	        
            <input type="text" name="phoneno" ></td>
          </tr>
   	      <tr>
   	        <th scope="row"><div align="left">E-MAIL ID </div></th><th>
   	       
              <div align="left">
                <input type="text" name="emailid">
            </div></td>
          </tr>
   	      <tr>
   	        <th colspan="2" scope="row"> <div align="center">
   	          <input type="submit" name="button2" id="button2" value="ADD" />
            </div></th>
          </tr>
        </table>
      </form>
 </div><!-- end of content -->
 <?php
	include("footer.php");
	?>