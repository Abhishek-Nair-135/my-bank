<?php
//include("header.php");
include("dbconnect.php");
$brancharray = mysqli_query($conn,"SELECT * FROM branch b, address a WHERE b.aid = a.aid");
?>
<div id="templatemo_main"><span class="main_top"></span>
  <table width="883" border="1">
    <tr>
      <th width="113" scope="col"><a href="viewbranch.php">BRANCH</a></th>
      <th width="133" scope="col"><a href="addaccountmaster.php">ACCOUNT TYPES</a></th>
      <th width="87" scope="col"><a href="viewemployee.php">EMPLOYEES</a></th>
      <th width="162" scope="col"><a href="viewloan.php">LOAN</a></th>
    </tr>
  </table>
  <br /><br />
  <table width="883" border="1">
    <tr>
      <th colspan="6" scope="col"><a href="addbranch.php">ADD BRANCH</a></th>
    </tr>
    <tr>
      <th width="113" scope="col">IFSC CODE</th>
      <th width="133" scope="col">BRANCH NAME</th>
      <th width="160" scope="col">AID</th>
      <th width="87" scope="col">CITY</th>
      <th width="114" scope="col">STATE</th>
      <th width="162" scope="col">ADDRESS</th>
    </tr>
      <?php	
 while($branch = mysqli_fetch_array($brancharray,MYSQLI_BOTH))
	  {
echo " <tr>
      <td>&nbsp;$branch[ifsc]</td>
      <td>&nbsp;$branch[bname]</td>
      <td>&nbsp;$branch[aid]</td>
      <td>&nbsp;$branch[city]</td>
      <td>&nbsp;$branch[state]</td>
      <td>&nbsp;$branch[address]</td>

    </tr>";
	  }
	  ?>
  </table>
<div id="templatemo_content"></div><!-- end of content -->
            
              <!--     <td>&nbsp;$branch[address]</td>
      <td>&nbsp;$branch[state]</td>
      <td>&nbsp;$branch[country]</td> -->
                	

                
            <div class="cleaner"></div>
</div>     <!-- end of main -->
    <div id="templatemo_main_bottom"></div><!-- end of main -->
    
    <?php
	include("footer.php");
	?>