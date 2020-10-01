<?php
  session_start();
//include("header.php");
include("dbconnect.php");
?>
<?php
$_SESSION["loginid"]=$_POST[username1];
?>
<?php

if(isset($_POST['username1']))
{
    $uname=$_POST["username1"];

   $sql = "SELECT loginid, passwd FROM mybank.login WHERE loginid='$uname'";
   if(!mysqli_query($conn,$sql)){
      echo "error";
   }
    $retval = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($retval, MYSQLI_BOTH);
      $uname=$row[0];
      $pass=$row[1];
  if($_POST["username1"]==$uname && $_POST["password1"]==$pass){

}else{
     // header("Location: index.php");

die();
}
	// header("Location: accountalerts.php");
}
      $result = mysqli_query($conn ,"SELECT * FROM mybank.login l ,mybank.customers c, mybank.address a WHERE l.loginid='$_POST[username1]' AND l.passwd='$_POST[password1]' AND l.loginid = c.loginid AND c.aid = a.aid") ;
          ?>
      <table width="883" border="1">
    <tr>
      <th colspan="4" scope="col"><a href="transaction.php">Transaction</a></th>
      <th colspan="4" scope="col"><a href="loan.php">Apply Loan</a></th>
    </tr>
    <tr>
      <th width="10" scope="col">ACCOUNT NUMBER</th>
      <th width = "113 "scope="col">FIRST NAME</th>
      <th width = "113"scope="col">LAST NAME</th>
      <th width="113" scope="col">PHONENO</th>
      <th width="114" scope="col">EMAILID</th>
      <th width="162" scope="col">ADDRESS</th>
      <th width="162" scope="col">LOGINID</th>
      <th width="162" scope="col">PASSWORD</th>
    </tr>

    <?php
  while($recarr = mysqli_fetch_array($result,MYSQLI_BOTH))
    {

echo "<tr>
<td>&nbsp;$recarr[custid]</td>
<td>&nbsp;$recarr[fname]</td>
<td>&nbsp;$recarr[lname]</td>
<td>&nbsp;$recarr[phoneno]</td>
<td>&nbsp;$recarr[emailid]</td>
<td>&nbsp;$recarr[address]</td>
<td>&nbsp;$recarr[loginid]</td>
<td>&nbsp;$recarr[passwd]</td>
";
}
?>
</table>
    <?php
	//include("footer.php");
	?>
