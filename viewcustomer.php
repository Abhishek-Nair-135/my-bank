<?php  
// include("header.php"); 
include("dbconnect.php");
session_start();
// mysqli_select_db("mybank", $conn);
$custarray = mysqli_query($conn,"SELECT * FROM mybank.customers c, mybank.address a WHERE c.aid=a.aid");

?>
<div id="templatemo_main">
  <p><a href="addcustomer.php"><strong>Add Customer</strong></a></p>
  <table width="913" height="38" border="1">
    <tr>
      <th width="100" scope="col">CUSTOMER ID</th>
      <th width="89" scope="col">IFSC CODE</th>
      <th width="102" scope="col">FIRSTNAME</th>
      <th width="108" scope="col">LOGINID</th>
      <th width="125" scope="col">PHONENO</th>
      <th width="70" scope="col">EMAILID</th>
      <th width="159" scope="col">ADDRESS</th>
    </tr>
    <?php	
 while($customer = mysqli_fetch_array($custarray,MYSQLI_BOTH))
	  {
echo " <tr>
      <td>&nbsp;$customer[custid]</td>
      <td>&nbsp;$customer[ifsc]</td>
      <td>$customer[fname]&nbsp;$customer[lname]</td>
        <td>&nbsp;$customer[loginid]</td>
      <td>$customer[phoneno]<br> 
      <td>$customer[emailid]</td>
      <td>$customer[address]</td>
    </tr>";
	  }
    mysqli_close($conn);
	 ?>
  </table>
  <span class="main_top"></span>
  <div id="templatemo_content"></div><!-- end of content -->

  <div class="cleaner"></div>
</div>     <!-- end of main -->
    <div id="templatemo_main_bottom"></div><!-- end of main -->
    
    <?php
	// include("footer.php");
	?>