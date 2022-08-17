<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action=".?action=do_amino_combo">
  <p ali
  align="justify"><font color="#009933">This page displays the combination of amino acids of protein in a Pie Chart.</font>
  <table width="510" align="center">
   
    <tr>
      <td width="66">Protein Id</td>
      <td width="414"><span id="sprytextfield1">
        <label for="type2"></label>
        <input type="text" name="type2" id="type2" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      <td width="14">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><input type="submit" name="submit" id="submit" value="Submit"  /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
    <?php
	
	?>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
<script type="text/javascript">
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {validateOn:["change"], invalidValue:"-1"});
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["change"]});
</script>
</body>
</html>