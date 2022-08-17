<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <center>
    <p><strong>Protein Details</strong></p></center>
  <table width="472" align="center">
    <tr>
      <td width="84">List By</td>
      <td colspan="2"><span id="spryselect1">
        <label for="type"></label>
        <select name="type" id="type">
          <option value="-1">SELECT</option>
          <?php
		  

			$sql="select * from organism";
			$res=mysql_query($sql,$con);
			while($row=mysql_fetch_array($res))
			{
		  ?>
          	<option value="<?php echo $row['oid'];  ?>"><?php echo $row['name'];  ?></option>
          <?php
			}
			?>
        </select>
      <span class="selectInvalidMsg">Please select a valid item.</span><span class="selectRequiredMsg">Please select an item.</span></span></td>
      <td width="37">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><input type="submit" name="submit" id="submit" value="SEND" /></td>
      <td width="97">&nbsp;</td>
      <td width="234">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
 
  <p>
  
   <?php
if(isset($_POST['type']))
{
	?>
  <table width="470" align="center">
    <tr>
      <td width="113"><strong> Id</strong></td>
      <td width="259"><strong>Name</strong></td>
      <td width="52">&nbsp;</td>
    </tr>
   
	<?php
		
		$sql1="select * from protein where type like 'Protein' and oid=$_POST[type]";
		$res1=mysql_query($sql1,$con);
	//echo $sql1;
	
	while($row1=mysql_fetch_array($res1))
	{
	  
  	
		
  ?>
  
  
    <tr>
      <td><a href=".?action=view_prot_more&id=<?php echo $row1['pid'];?>">  <?php echo $row1['pid'];?>  </a></td>
      <td><?php echo $row1['pname'];?></td>
      <td>&nbsp;</td>
    </tr>
 
    
    <?php
	}
}
  ?>
   </table>
  </p>
  
  <p>&nbsp;</p>
</form>
<script type="text/javascript">
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {validateOn:["change"], invalidValue:"-1"});
</script>
</body>
</html>