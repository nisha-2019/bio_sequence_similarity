<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action="includes/do_simi_selct_org.php">
  <table width="630" align="center">
    <tr>
      <td width="96">Organism 1</td>
      <td colspan="2"><span id="spryselect1">
        <label for="o1"></label>
        <select name="o1" id="o1">
          <option value="-1">SELECT</option>
          <?php
	
		 	 $sql="select * from organism";
			$res=mysql_query($sql,$con);
			while($row=mysql_fetch_array($res))
			{
		  
		  ?>
          <option value="<?php  echo $row['oid'] ?>">
            <?php echo $row['name'];?>
          </option>
          <?php
			}
		  ?>
        </select>
        <span class="selectInvalidMsg">Please select a valid item.</span><span class="selectRequiredMsg">Please select an item.</span></span></td>
      <td width="39">&nbsp;</td>
      <td width="10">&nbsp;</td>
      <td width="39">&nbsp;</td>
    </tr>
    <tr>
      <td>Organism 2</td>
      <td colspan="2"><span id="spryselect2">
        <label for="o2"></label>
        <select name="o2" id="o2">
          <option value="-1">SELECT</option>
          <?php
		 	 $sql1="select * from organism";
			$res1=mysql_query($sql1,$con);
			while($row1=mysql_fetch_array($res1))
			{
		  
		  ?>
          <option value="<?php  echo $row1['oid'] ?>"> <?php echo $row1['name'];?></option>
          <?php
			}
		  ?>
        </select>
        <span class="selectInvalidMsg">Please select a valid item.</span><span class="selectRequiredMsg">Please select an item.</span></span></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Type</td>
      <td colspan="2"><span id="spryselect3">
        <label for="type"></label>
        <select name="type" id="type">
          <option value="-1">SELECT</option>
          <option value="p">Protein</option>
          <option value="d">DNA</option>
          <option value="r">RNA</option>
        </select>
        <span class="selectInvalidMsg">Please select a valid item.</span><span class="selectRequiredMsg">Please select an item.</span></span></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <?php
	
	
	
	?>
    
    
    <tr>
      <td>&nbsp;</td>
      <td width="136"><input type="submit" name="sub" id="sub" value="SELECT" /></td>
      <td width="226">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
<script type="text/javascript">
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {validateOn:["change"], invalidValue:"-1"});
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2", {invalidValue:"-1", validateOn:["change"]});
var spryselect3 = new Spry.Widget.ValidationSelect("spryselect3", {validateOn:["change"], invalidValue:"-1"});
</script>
</body>
</html>