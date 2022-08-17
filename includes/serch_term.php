<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action="">
 <center> <p><strong>Search Bioinformatics Terminology</strong></p></center>
  <table width="524" align="center">
    <tr>
      <td width="100">Enter the Term</td>
      <td colspan="2"><span id="sprytextfield1">
        <label for="term"></label>
        <input type="text" name="term" id="term" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      <td width="82">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><input type="reset" name="reset" id="reset" value="RESET" /></td>
      <td width="75">&nbsp;</td>
      <td width="247"><input type="submit" name="submit" id="submit" value="SEND" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  
  <?php

if(isset($_POST['term']))
{
	$sql="select * from bioinfo where name like '$_POST[term]'";
	$res=mysql_query($sql,$con);
	if($row=mysql_fetch_array($res))
	{
	?>
    <table align="center" width="">
    <tr>
    <td colspan="2"><b><h3><?php echo $row['name']; ?></h3></b></td>
    </tr>
    <tr>
    <td></td>
    <td align="justify"><?php echo $row['desc']; ?></td>
    </tr>
    </table>
    <?php
	}
	else
	{
		echo "<h1><b>No Result Found!!</b></h1>";
	}
	
}

?>

  
  
</form>



<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["change"]});
</script>
</body>
</html>