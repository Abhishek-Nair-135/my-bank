<?php
session_start();
	include("dbconnect.php");

?>

<form name="formt" action="balanceupdate.php" method="POST">
	<p>To<input type="text" name="account"></p>
	  <!-- <select name="bname">
        <?php
        //$resq = "SELECT custid, accno  FROM mybank.accounts ";
    //     while($rta = mysqli_fetch_array($resq,MYSQLI_BOTH) )
		  // {
			 //  echo "<option value='$rta[custid]'>$rta[accno]</option>";
		  // }
	  ?>
      </select> -->

	<p>AMOUNT
		<input type="text" name="debitamount">
    </p>
    <p>ACCOUNT PASSWORD
    	<input type="text" name="apassword" >
    </p>
    <p>TRANSACTION PASSWORD
    	<input type="text" name="tpassword">
    </p>

    <table width="150" border="1">
      <tr>	
        <th width="120" scope="col">Account Numbers</th>
      </tr>
      
      <?php	
      $acc = mysqli_query($conn,"SELECT accno FROM mybank.accounts");
 while($result = mysqli_fetch_array($acc,MYSQLI_BOTH))
	  {
echo "
      <tr>
        <td>&nbsp;$result[accno]</td>
      </tr>";
	  }
	  ?>
    </table>
<input type="submit" name="submit" value = "submit">
</form>
<?php
	
?>

