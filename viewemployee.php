<?php
include("header.php");
include("dbconnect.php");
$emparray = mysqli_query($conn,"SELECT * FROM mybank.employee");
?>	
<div id="templatemo_main"><span class="main_top"></span>
  <div id="templatemo_content">
  
   <table width="883" border="1">
    <tr>
      <th width="113" scope="col"><a href="viewbranch.php">BRANCH</a></th>
      <th width="133" scope="col"><a href="addaccountmaster.php">ACCOUNT TYPES</a></th>
      <th width="87" scope="col"><a href="viewemployee.php">EMPLOYEES</a></th>
      <th width="162" scope="col"><a href="viewloan.php">LOAN</a></th>
    </tr>
  </table>
    <table width="901" border="1">
    	<tr>
      <th colspan="6" scope="col"><a href="addemployee.php">ADD EMPLOYEE</a></th>
    </tr>
      <tr>
        <th width="105" scope="col">EMPLOYEE ID</th>
        <th width="93" scope="col">EMP NAME</th>
        <th width="101" scope="col">LOGIN ID</th>
        <th width="144" scope="col">EMAIL ID</th>
        <th width="188" scope="col">CONTACT NO</th>
        <th width="132" scope="col">CREATE DATE</th>
        <th width="332" scope="col">LAST LOGIN</th>
      </tr>
      <?php	
 while($employee = mysqli_fetch_array($emparray,MYSQLI_BOTH))
	  {
echo "
      <tr>
        <td>&nbsp;$employee[empid]</td>
        <td>&nbsp;$employee[fname]</td>
        <td>&nbsp;$employee[lname]</td>
        <td>&nbsp;$employee[loginid]</td>
        <td>&nbsp;$employee[passwd]</td>
        <td>&nbsp;$employee[phoneno]</td>
        <td>&nbsp;$employee[emailid]</td>
      </tr>";
	  }
	  ?>
    </table>
</div><!-- end of content -->
            
            
                
		<div class="cleaner"></div>
  </div>     <!-- end of main -->
    <div id="templatemo_main_bottom"></div><!-- end of main -->
    
    <?php
	include("footer.php");
	?>