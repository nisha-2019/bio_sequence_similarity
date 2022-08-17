<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
</head>
<?php

?>
<body>
<form id="form1" name="form1" method="post" action=".?action=do_find_sim_dna">
  <center>
    <p><strong>FIND DNA SIMILARITY</strong></p></center>
  <table width="477" align="center">
    <tr>
      <td width="104">DNA 1</td>
      <td colspan="2"><span id="spryselect1">
        <label for="r1"></label>
        <select name="r1" id="r1">
          <option value="-1">SELECT</option>
          <?php
		  $sql="select * from protein where type like 'DNA' and oid=$_GET[o1]";
		  $res=mysql_query($sql,$con);
		  while($row=mysql_fetch_array($res))
		  {
		  
		  ?>
          <option value="<?php echo $row['pid']; ?>"> <?php echo $row['pid']."-".$row['pname'];  ?></option>
          
          <?php
		  }
		  ?>
        </select>
      <span class="selectInvalidMsg">Please select a valid item.</span><span class="selectRequiredMsg">Please select an item.</span></span></td>
      <td width="23">&nbsp;</td>
    </tr>
    <tr>
      <td>DNA 2</td>
      <td colspan="2"><span id="spryselect2">
        <label for="r2"></label>
        <select name="r2" id="r2">
          <option value="-1">SELECT</option>
          <?php
		  $sql="select * from protein where type like 'DNA' and oid=$_GET[o2]";
		  $res=mysql_query($sql,$con);
		  while($row=mysql_fetch_array($res))
		  {
		  
		  ?>
          <option value="<?php echo $row['pid']; ?>"> <?php echo $row['pid']."-".$row['pname'];  ?></option>
          
          <?php
		  }
		  ?>
          
          
        </select>
      <span class="selectInvalidMsg">Please select a valid item.</span><span class="selectRequiredMsg">Please select an item.</span></span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><input type="reset" name="reset" id="reset" value="Reset" /></td>
      <td width="111">&nbsp;</td>
      <td width="219"><input type="submit" name="submit" id="submit" value="FIND SIMILARITY" /></td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
<script type="text/javascript">
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {invalidValue:"-1", validateOn:["change"]});
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2", {validateOn:["change"], invalidValue:"-1"});
</script>
</body>
</html>