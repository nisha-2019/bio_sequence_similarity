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

  <table width="456" align="center">
    <tr>
      <td width="111">Organism</td>
      <td width="257"><span id="spryselect1">
        <label for="o1"></label>
        <select name="o1" id="o1">
          <option value="-1">SELECT</option>
        <?php
	
	$sql="select * from organism ";
	$res=mysql_query($sql,$con);
	while($row=mysql_fetch_array($res))
	{
	
	
	?>
    <option value="<?php echo $row['oid']; ?>"><?php echo $row['name']; ?></option>
    <?php
	}
	?>
        </select>
      <span class="selectInvalidMsg">Please select a valid item.</span><span class="selectRequiredMsg">Please select an item.</span></span></td>
      <td width="72">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><input type="submit" name="select" id="select" value="SELECT" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
<?php
if(isset($_POST['select']))
{
	?>
<form id="form2" name="form2" method="post" action=".?action=do_matrix_count">


  <table width="437" align="center">
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="94">Protein Id</td>
      <td width="280"><span id="spryselect2">
        <label for="p1"></label>
        <select name="p1" id="p1">
          <option value="-1">SELECT</option>
          
          <?php
$sql1="select * from protein where type like 'Protein' and oid=$_POST[o1]";
		$res1=mysql_query($sql1,$con);
	//echo $sql1;
	
	while($row1=mysql_fetch_array($res1))
	{
	  ?>
          <option value="<?php echo $row1['pid']."-".$row1['pname']; ?>"><?php echo $row1['pid']."-".$row1['pname']; ?></option>
          <?php
	}
	?>
        </select>
        <span class="selectInvalidMsg">Please select a valid item.</span><span class="selectRequiredMsg">Please select an item.</span></span></td>
      <td width="47">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><input type="submit" name="send" id="send" value="SEND" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
<?php
}
?>
<script type="text/javascript">
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {validateOn:["change"], invalidValue:"-1"});
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2", {validateOn:["change"], invalidValue:"-1"});
</script>
</body>
</html>