<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action="includes/do_new_findings.php">
  <table width="505" align="center">
    <tr>
      <td width="67">Subject</td>
      <td width="444"><span id="sprytextarea2">
        <label for="sub2"></label>
        <textarea name="sub" id="sub2" cols="25" rows="1"></textarea>
        <span class="textareaRequiredMsg">A value is required.</span></span></td>
      <td width="11">&nbsp;</td>
    </tr>
    <tr>
      <td>Information</td>
      <td><span id="sprytextarea1">
        <label for="com"></label>
        <textarea name="com" id="com" cols="25" rows="4"></textarea>
        <span class="textareaRequiredMsg">A value is required.</span></span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="send11" id="send11" value="POST" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr> </tr>
    <tr> </tr>
  </table>
</form>
<script type="text/javascript">
var sprytextarea2 = new Spry.Widget.ValidationTextarea("sprytextarea2", {validateOn:["change"]});
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {validateOn:["change"]});
</script>
</body>
</html>