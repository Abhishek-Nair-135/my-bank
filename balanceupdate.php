<?php
session_start();
include("dbconnect.php");
?>



<?php
if(isset($_POST["tpassword"])){
	echo "hello";
 $sqlr = "SELECT a.accno FROM mybank.accounts a , mybank.customers c WHERE a.custid = c.custid AND c.loginid = '$_SESSION["loginid"]'";
 $result = mysqli_query($conn,$sqlr);

 if(mysqli_fetch_array($result,MYSQLI_BOTH))
 {
 	//$newvalue = $_POST["debitamount"]-
 	echo "done";
 	// $sql = "CREATE TRIGGER 'updatet' AFTER UPDATE ON 'accounts' FOR EACH ROW  INSERT INTO `bar` (bar) SELECT bar FROM `foo` WHERE `bar`=NEW.`bar`;
 // END;
// ";
// $mysqli->query($sql);
 }else{
 	echo "error";
 }
}
?>