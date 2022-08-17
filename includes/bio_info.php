<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action="includes/dobio_info.php">
  <table width="555" align="center">
    <tr>
      <td width="74">Term</td>
      <td colspan="3"><span id="sprytextfield1">
        <label for="term"></label>
        <input type="text" name="term" id="term" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      <td width="32">&nbsp;</td>
    </tr>
    <tr>
      <td>Description</td>
      <td colspan="3"><label for="des"></label>
        <span id="sprytextarea1">
        <textarea name="des" id="des" cols="30" rows="4"></textarea>
      <span class="textareaRequiredMsg">A value is required.</span></span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="3">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><input type="reset" name="reset" id="reset" value="Reset" /></td>
      <td width="114">&nbsp;</td>
      <td width="77">&nbsp;</td>
      <td width="234"><input type="submit" name="sub" id="sub" value="ADD" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="3">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["change"]});
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {validateOn:["change"]});
</script>
</body>
</html>