<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action="includes/doedit_org1.php">

  <p><strong><center>EDIT ORGANISM</center></strong></p>
  <table width="396" align="center">
  <?php
$id=explode('-',$_POST['oid']);
$s="select * from organism where oid=$id[0]";
$a=mysql_query($s);
$b=mysql_fetch_array($a);


?>
    <tr>
      <td width="55">Name</td>
      <td width="343"><span id="sprytextfield1">
        <label for="oname"></label>
        <input type="text" name="oname" id="oname" value="<?php echo $b['name']; ?>" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>Genus</td>
      <td><span id="sprytextfield2">
        <label for="genus"></label>
        <input type="text" name="genus" id="genus" value="<?php echo $b['genus']; ?>" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>Specius</td>
      <td><span id="sprytextfield3">
        <label for="ospe"></label>
        <input type="text" name="ospe" id="ospe" value="<?php echo $b['specius']; ?>" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><input type="hidden" name="val" id="val" value="<?php echo $id[0]; ?>" /></td>
      <td><input type="submit" name="change" id="change" value="EDIT" /></td>
    </tr>
  </table>
</form>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["change"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["change"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
</script>
</body>
</html>