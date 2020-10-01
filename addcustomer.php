<?php
include("dbconnect.php");
?>
<?php
{
  $sqle= "SELECT MAX(custid), MAX(aid) FROM mybank.customers";
  if(!$row=mysqli_fetch_array(mysqli_query($conn,$sqle),MYSQLI_BOTH)){
    die('Error:1 here ' . mysqli_error());
  }
  
	$row[0]=$row[0]+1;
	$row[1]= $row[1]+1;
  
  	$resq = mysqli_query($conn,"SELECT ifsc, bname FROM mybank.branch");

  	/*$sqlbs = "SELECT ifsc FROM mybank.branch WHERE bname = '$bname' ";
	mysqli_query($conn,$sqlbs);
	$branchvalue = mysqli_fetch_array($sqlbs,MYSQLI_BOTH);*/

if(isset($_POST["button"])) {
$loginid = $_POST[loginid];
$passwd = $_POST[passwd];
$transcpasswd =$_POST[transcpasswd];

$bname = $_POST[bname];
$fname = $_POST[fname];
$lname = $_POST[lname];
$phoneno = $_POST[phoneno];
$emailid = $_POST[email];

$state = $_POST[state];
$city = $_POST[city];
$address = $_POST[address];

$sqla = "INSERT INTO mybank.address VALUES ('$row[1]','$_POST[city]', '$_POST[state]', '$_POST[address]')";
mysqli_query($conn,$sqla);
 $sqlb = "INSERT INTO mybank.branch(bname,aid) VALUES ('$bname','$row[1]')";
 mysqli_query($conn,$sqlb);
$sqll = "INSERT INTO mybank.login VALUES ('$_POST[loginid]','$_POST[passwd]','$_POST[transcpasswd]')";
mysqli_query($conn,$sqll);



$sql="INSERT INTO mybank.customers (custid, ifsc, fname, lname, loginid, aid, phoneno, emailid) VALUES ('$row[0]','$_POST[bname]','$_POST[fname]','$_POST[lname]','$_POST[loginid]','$row[1]','$_POST[phoneno]','$_POST[email]')";

if (!mysqli_query($conn,$sql))
  {
  die('Error:2 ' . mysqli_error());
  }
 $succres ="1 CUSTOMER RECORD ADDED SUCCESSFULLY.....";
   $sqle= "SELECT MAX(custid), MAX(aid) FROM mybank.customers";
  if(!$row=mysqli_fetch_array(mysqli_query($conn,$sqle),MYSQLI_BOTH)){
    die('Error:1 here ' . mysqli_error());
  }
  $active = "active";
 $sqlc="INSERT INTO mybank.accounts (custid,accstatus,balance) VALUES ('$row[0]','$active','$_POST[amount]')";

 if (!mysqli_query($conn,$sqlc))
  {
  die('Error:3 ' . mysqli_error());
  }
 //  $sqls = "SELECT MAX(accno),MAX(balance) FROM mybank.accounts";
 // $array = mysqli_fetch_array(mysqli_query($conn,$sqls),MYSQLI_BOTH);
 // $sqlu = "UPDATE accounts SET custid = "$row[0]" WHERE acccno ="$array[0]" ";
}
}
?>
<div id="templatemo_main"><span class="main_top"></span>
  <div id="templatemo_content">
  
<form id="form1" name="form1" method="POST" action="">
    <p>&nbsp;<?php echo $succres; ?></p>
    <p>&nbsp;<?php echo $statement; ?></p>
    <p>BRANCH NAME  
      <select name="bname">
        <?php
	  while($rta = mysqli_fetch_array($resq,MYSQLI_BOTH) )
	  {
		  echo "<option value='$rta[ifsc]'>$rta[bname]</option>";
	  }
	  ?>
      </select>
    </p>
    <p>FIRST NAME  
      <label for="firstname"></label>
      <input type="text" name="fname" />
    </p>
    <p>LAST NAME  
      <label for="lastname"></label>
      <input type="text" name="lname"/>
  </p>
  <p>PHONE NUMBER
    <input type="text" name="phoneno" />
  </p>
      <p>EMAILID 
      <input type="text" name="email" />
    </p>
<p>LOGIN ID   
  <input type="text" name="loginid"/>
</p>
<p>ACCOUNT PASSWORD 
  <input type="password" name="passwd" />
</p>
  <p>TRANSACTION PASSWORD
    <input type="password" name="transcpasswd"  />
  </p>  
  <p>ADD AMOUNT
      <input type="text" name="amount" />
  </p>   
  <p>STATE
    <label for="textfield"></label>
    <select name="state" id="state">
    <option value="select">Select</option>
    <option value="KARNATAKA">KARNATAKA</option>
      <option value="KERALA">KERALA</option>
    </select>
  </p>
  <p>CITY

    <input type="text" name="city" id="city" />
  </p>
   <p>ADDRESS
    <input type="text" name="address"  />
  </p>
  <p>
    <input type="submit" name="button" id="button" value="button" />
  </p>
</form>
<p>&nbsp;</p>
<p>&nbsp; </p>
  </div><!-- end of content -->

  <div class="cleaner"></div>
     </div>     <!-- end of main -->
    <div id="templatemo_main_bottom"></div><!-- end of main -->