<?php
include("header.php");
include("dbconnect.php");
?>
<?php
if(isset($_POST["add"]))
{
$sql="INSERT INTO  mybank.accmaster (acctype,prefix,minbal,interest)
VALUES
('$_POST[acctype]','$_POST[prefix]','$_POST[minbal]','$_POST[interest]')";

if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error());
  }
echo "1 record added";
}
$sql1 = mysqli_query($conn,"SELECT * FROM accmaster");
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
    <p>
    <label for="ifsccode"></label>
    <form onsubmit="return true" id="form1" name="form1" method="post" action="">
      <table width="507" height="179" border="0">
        <tr>
          <th scope="row">ACCOUNT TYPE</th>
          <td><input type="text" name="acctype" id="acctype" /></td>
        </tr>
        <tr>
          <th scope="row">PREFIX</th>
          <td><input type="text" name="prefix" id="prefix" /></td>
        </tr>
        <tr>
          <th scope="row">MINIMUM BALANCE</th>
          <td><input type="text" name="minbal" id="minbalance" /></td>
        </tr>
        <tr>
          <th scope="row">INTEREST</th>
          <td><input type="text" name="interest" id="interest" /></td>
        </tr>
        <tr>
          <th colspan="2" scope="row"><input type="submit" name="add" id="add" value="ADD" />
            <input type="submit" name="update" id="update" value="UPDATE" /></th>
        </tr>
      </table>
      <p>&nbsp;</p>
    </form>
    <table width="500" border="1">
      <tr>
        <th scope="col">ACCOUNT TYPE</th>
        <th scope="col">PREFIX</th>
        <th scope="col">MINIMUM BALANCE</th>
        <th scope="col">INTEREST</th>
      </tr>			
     <?php
     $sql1 = mysqli_query($conn,"SELECT * FROM accmaster");
      while($arrayvar = mysqli_fetch_array($sql1 ,MYSQLI_BOTH))
	  {
echo "	  <tr>
        <td>&nbsp; $arrayvar[acctype] </td>
        <td>&nbsp; $arrayvar[prefix]</td>
        <td>&nbsp; $arrayvar[minbal] </td>
        <td>&nbsp; $arrayvar[interest]</td>
      </tr>";
	  }
    mysqli_close($conn);
	  ?>
    </table>
  </div><!-- end of content -->

<div class="cleaner"></div>
     </div>     <!-- end of main -->
    <div id="templatemo_main_bottom"></div><!-- end of main -->
    
    <?php
	include("footer.php");
	?>