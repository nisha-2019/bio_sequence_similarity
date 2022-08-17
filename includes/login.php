<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action="dologin.php">
  <table width="365" align="center">
    <tr>
      <td width="77">Username</td>
      <td width="276"><span id="sprytextfield1">
        <label for="uname"></label>
        <input name="uname" type="text" id="uname" size="15" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><span id="sprytextfield2">
        <label for="pass"></label>
        <input name="pass" type="password" id="pass" size="15" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="Login" /></td>
    </tr>
    <tr>
      <td colspan="2">New here?<a href="reg.php">Click to create an account</a></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["change"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["change"]});
</script>
</body>
</html>