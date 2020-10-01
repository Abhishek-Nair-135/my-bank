<?php
include("header.php");
include("dbconnect.php");
$loantypearray = mysqli_query($conn,"select * from loantype");
?>	
  
    <p><strong><a href="addloan.php">Add new loan type</a></strong></p>
    <table width="798" height="37" border="1">
      <tr>
        <th width="112" scope="col">LOAN TYPE</th>
        <th width="82" scope="col">PREFIX</th>
        <th width="186" scope="col">MAXIMUM AMT</th>
        <th width="161" scope="col">MINIMUM AMT</th>
        <th width="98" scope="col">INTEREST</th>
        <th width="119" scope="col"><p>STATUS</p></th>
      </tr>
      <?php	
 while($loantypes = mysqli_fetch_array($loantypearray,MYSQLI_BOTH))
	  {
echo "
      <tr>
        <td>&nbsp;$loantypes[loantype]</td>
        <td>&nbsp;$loantypes[prefix]</td>
        <td>&nbsp;$loantypes[maximumamt]</td>
        <td>&nbsp;$loantypes[minimumamt]</td>
        <td>&nbsp;$loantypes[interest]</td>
        <td>&nbsp;$loantypes[status]</td>
        
      </tr>";
	  }
	  ?>
    </table>
</div><!-- end of content -->
            
      
    
    <?php
	include("footer.php");
	?>