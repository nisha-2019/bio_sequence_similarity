<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action="includes/do_change_pass_ad.php">
<p><strong><center>CHANGE YOUR PASSWORD </center></strong></p>
<table width="598" align="center">
  <tr>
    <td width="142">Old password</td>
    <td colspan="2"><span id="sprypassword1">
      <label for="opass"></label>
      <input type="password" name="opass" id="opass" />
      <span class="passwordRequiredMsg">A value is required.</span></span></td>
  </tr>
  <tr>
    <td>New password</td>
    <td colspan="2"><span id="sprypassword2">
    <label for="npass"></label>
    <input type="password" name="npass" id="npass" />
    <span class="passwordRequiredMsg">A value is required.</span><span class="passwordMinCharsMsg">Minimum number of characters not met.</span></span></td>
  </tr>
  <tr>
    <td>Retype new password</td>
    <td colspan="2"><span id="spryconfirm1">
      <label for="retype"></label>
      <input type="password" name="retype" id="retype" />
      <span class="confirmRequiredMsg">A value is required.</span><span class="confirmInvalidMsg">The values don't match.</span></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td><input type="reset" name="reset" id="reset" value="CLEAR" /></td>
    <td width="57">&nbsp;</td>
    <td width="383"><input type="submit" name="submot1" id="submot1" value="SUBMIT" /></td>
  </tr>
</table>
<p>&nbsp;</p>
</form>
<script type="text/javascript">
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1", {validateOn:["change"]});
var sprypassword2 = new Spry.Widget.ValidationPassword("sprypassword2", {validateOn:["change"], minChars:6});
var spryconfirm1 = new Spry.Widget.ValidationConfirm("spryconfirm1", "npass", {validateOn:["change"]});
</script>
</body>
</html>