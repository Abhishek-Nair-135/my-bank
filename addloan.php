<?php
include("header.php");
include("dbconnect.php");
?> 

<?php
if(isset($_POST["add"]))
{
$sql="INSERT INTO loantype (loantype,prefix,maximumamt,minimumamt,interest,status)
VALUES
('$_POST[loantype]','$_POST[prefix]','$_POST[maxamt]','$_POST[minamt]','$_POST[interest]','$_POST[status]')";
if (!mysqli_query($conn,$sql))
  {
  die('Error: 1' . mysqli_error());
  }
echo "1 record added";
}
?>  
<div id="templatemo_main"><span class="main_top"></span>
  <div id="templatemo_content">

         <p>
    <label for="ifsccode"></label>
    <form  id="form1" name="form1" method="post" action="">
      <p>
        <label for="loantype">LOAN TYPE</label>
        <input type="text" name="loantype" id="loantype" />
      </p>
      <p>
        <label for="prefix">PREFIX</label>
        <input type="text" name="prefix" id="prefix" />
      </p>
      <p>MAXIMUM AMOUNT 
        <label for="maxamt"></label>
        <input type="text" name="maxamt" id="maxamt" />
      </p>
      <p>MINIMUM AMOUNT
        <label for="minamt"></label>
        <input type="text" name="minamt" id="minamt" />
      </p>
      <p>INTEREST 
        <label for="interest"></label>
        <input type="text" name="interest" id="interest" />
      </p>
      <p>LOANTYPE STATUS 
    <label for="textfield"></label>
    <select name="status" >
    <option value="select">Select</option>
      <option value="active">active</option>
      <option value="inactive">inactive</option>
    </select>
  </p>
      <p>
        <input type="submit" name="add" id="add" value="ADD" />
      </p>
    </form>
    <table width="758" border="1">
      <tr>
        <th width="120" scope="col">LOAN  TYPE</th>
        <th width="101" scope="col">PREFIX</th>
        <th width="188" scope="col">MAXIMUM AMOUNT</th>
        <th width="162" scope="col">MINIMUM AMOUNT</th>
        <th width="79" scope="col">INTEREST</th>
        <th width="68" scope="col">STATUS</th>
      </tr>
      <?php
      $sqll = "SELECT * FROM loantype";
      //	mysqli_query($conn,$sql2);
      if (!$loanarray=mysqli_query($conn,$sqll))
	  {
	  die('Error: 1' . mysqli_error());
	  }
       while($arrayvar = mysqli_fetch_array($loanarray,MYSQLI_BOTH))
	  {
     echo " <tr>
        <td>&nbsp;$arrayvar[loantype]</td>
        <td>&nbsp;$arrayvar[prefix]</td>
        <td>&nbsp;$arrayvar[maximumamt]</td>
        <td>&nbsp;$arrayvar[minimumamt]</td>
        <td>&nbsp;$arrayvar[interest]</td>
        <td>&nbsp;$arrayvar[status]</td>
      </tr>
	  ";
	  }	
      ?>
     
    </table>
    <p>&nbsp;</p>
<p>&nbsp; </p>
</div><!-- end of content -->
    
    <?php
	include("footer.php");
	?>