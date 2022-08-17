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
<form id="form1" name="form1" method="post" action="includes/do_contact.php">
  <p><b><font size="+1" color="#6666FF">Contact Form</font></b> </p>
  <table width="575" border="0">
    <tr>
      <td width="101">Your Mail Id</td>
      <td colspan="2"><span id="sprytextfield1">
      <label for="mid"></label>
      <input type="text" name="mid" id="mid" />
      <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
    </tr>
    <tr>
      <td>Message</td>
      <td colspan="2"><span id="sprytextarea1">
        <label for="msg"></label>
        <textarea name="msg" id="msg" cols="16" rows="4"></textarea>
      <span class="textareaRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td><input type="reset" name="reset" id="reset" value="Reset" /></td>
      <td width="90">&nbsp;</td>
      <td width="370"><input type="submit" name="submit" id="submit" value="SEND" /></td>
    </tr>
  </table>
</form>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "email", {validateOn:["change"]});
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {validateOn:["change"]});
</script>
</body>
</html>