<?php
include("header.php");
include("dbconnect.php");
?>
<?php
$ifsc=$_POST[ifsc];
$address=$_POST[address];
$city = $_POST[city];
$state = $_POST[state];
$bname = $_POST[bname];
$row = mysqli_fetch_array(mysqli_query($conn, "SELECT MAX(aid) FROM address"),MYSQLI_BOTH);
$aid= $row[0];
$aid++;
if(isset($_POST["addbranch"]))
{
  $sqla="INSERT INTO address (aid,city,state,address) VALUES
('$aid','$city','$state','$address')";
 if (!mysqli_query($conn,$sqla))
  {
  die('Error: 1 ' . mysqli_error());
  }
$sql="INSERT INTO branch (ifsc,bname,aid) VALUES
('$ifsc','$bname','$aid')";

if (!mysqli_query($conn,$sql))
  {
  die('Error: 2' . mysqli_error());
  }
echo "1 record added";
}
?>
<div id="templatemo_main"><span class="main_top"></span>
  <div id="templatemo_content">
   <?php include("topmenu.php"); ?>
         <p>
    <label for="ifsccode"></label>
         <form onsubmit="return true id="form1" name="form1" method="post" action="">
      <table width="739" border="0">
        <tr>
          <th height="36" scope="row">IFSC CODE </th>
          <td><input type="text" name="ifsc" id="ifsccode" /></td>
        </tr>
        <tr>
          <th height="38" scope="row">BRANCH NAME</th>
          <td><input type="text" name="bname" id="branchname"  "/></td>
        </tr>
        <tr>
          <th height="32" scope="row"><label for="city">CITY</label>          </th>
          <td><input type="text" name="city" id="city"   /></td>
        </tr>
        <tr>
          <th height="97" scope="row"><label for="branchaddress2">BRANCH ADDRESS</label>          </th>
          <td><textarea name="address" id="branchaddress" cols="45" rows="5"></textarea></td>
        </tr>
        <tr>
          <th height="37" scope="row"><label for="state2">STATE</label>          </th>
          <td><select name="state" id="state">
            <option value="MAHARASTRA">MAHARASTRA</option>
            <option value="TAMILNADU">TAMILNADU</option>
            <option value="Karnataka">Karnataka</option>
          </select></td>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <td><input type="submit" name="addbranch" id="addbranch" value="ADD BRANCH" /></td>
        </tr>
      </table>

    </form>
  
</div><!-- end of content --
    
    <?php
	include("footer.php");
	?>