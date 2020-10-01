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

?>
<div id="templatemo_main"><span class="main_top"></span>
  <div id="templatemo_content">
    <p>
    <label for="ifsccode"></label>
    <form onsubmit="return true" id="form1" name="form1" method="post" action="">
      <table width="507" height="179" border="0">
        <tr>
          <th scope="row">IFSC Code</th>
          <td><input type="text" name="ifsc" id="acctype" /></td>
        </tr>
        <tr>
          <th scope="row">Branch name</th>
          <td><input type="text" name="name" id="prefix" /></td>
        </tr>
        <tr>
          <th scope="row">city</th>
          <td><input type="text" name="city" id="minbalance" /></td>
        </tr>
        <tr>
          <th scope="row">Branch Address</th>
          <td><input type="text" name="address" id="interest" /></td>
        </tr>
        <tr>
          <th scope="row">State</th>
          <td><input type="text" name="state" id="interest" /></td>
        </tr>
        <tr>
          <th colspan="2" scope="row"><input type="submit" name="add" id="add" value="ADD" />
            <input type="submit" name="update" id="update" value="UPDATE" /></th>
        </tr>
      </table>
      <p>&nbsp;</p>
    </form>
  </div><!-- end of content -->
<div class="cleaner"></div>
     </div>     <!-- end of main -->
    <div id="templatemo_main_bottom"></div><!-- end of main -->
