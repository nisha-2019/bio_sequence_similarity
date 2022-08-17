<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action="includes/doforgot.php">
  <table width="506" align="center">
    <tr>
      <td width="140">Enter Your Username</td>
      <td width="321"><span id="pass">
        <label for="user"></label>
        <input type="text" name="user" id="user" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      <td width="29">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="Submit" /></td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("pass", "none", {validateOn:["change"]});
</script>
</body>
</html>