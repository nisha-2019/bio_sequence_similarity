<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action=".?action=do_sim_mes_res">
  <p>&nbsp;</p>
  <table width="632" align="center">
    <tr>
      <td width="120">Protein 1</td>
      <td colspan="2"><span id="spryselect1">
        <label for="p1"></label>
        <span id="spryselect3">
        <select name="p1" id="p1">
          <option value="-1">Select</option>
          <?php
		
		 	 $sql="select * from protein where type like 'Protein' and oid=$_POST[o1] ";
			$res=mysql_query($sql,$con);
			while($row=mysql_fetch_array($res))
			{
		  
		  ?>
          <option value="<?php  echo $row['pid'] ?>">
            <?php  echo $row['pid']." - ".$row['pname'];?>
          </option>
          <?php
			}
		  ?>
        </select>
        <span class="selectInvalidMsg">Please select a valid item.</span><span class="selectRequiredMsg">Please select an item.</span></span><span class="selectInvalidMsg">Please select a valid item.</span><span class="selectRequiredMsg">Please select an item.</span></span></td>
      <td width="46">&nbsp;</td>
    </tr>
    <tr>
      <td>Protein 2</td>
      <td colspan="2"><span id="spryselect2">
        <label for="p2"></label>
        <span id="spryselect4">
        <select name="p2" id="p2">
          <option value="-1">Select</option>
          <?php
           $sql1="select * from protein where type like 'Protein' and oid=$_POST[o2]";
			$res1=mysql_query($sql1,$con);
			while($row1=mysql_fetch_array($res1))
			{
		  
		  ?>
          <option value="<?php  echo $row1['pid'] ?>">
            <?php  echo $row1['pid']." - ".$row1['pname'];?>
          </option>
          <?php
			}
		  ?>
        </select>
        <span class="selectInvalidMsg">Please select a valid item.</span><span class="selectRequiredMsg">Please select an item.</span></span><span class="selectInvalidMsg">Please select a valid item.</span><span class="selectRequiredMsg">Please select an item.</span></span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td><input type="hidden" name="h1" id="h1" value="<?php echo $_POST['hiddenField']; ?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td width="101"><input type="submit" name="sim" id="sim" value="Find Similarity" /></td>
      <td width="345">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
<script type="text/javascript">
var spryselect3 = new Spry.Widget.ValidationSelect("spryselect3", {invalidValue:"-1", validateOn:["change"]});
var spryselect4 = new Spry.Widget.ValidationSelect("spryselect4", {validateOn:["change"], invalidValue:"-1"});
</script>
</body>
</html>