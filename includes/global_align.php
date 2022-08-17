<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action=".?action=do_global_align">
  <p><center>
    <strong>GLOBAL ALIGNMENT</strong>
  </center></p>
  <table width="583" align="center">
    <tr>
      <td width="79">Sequence 1</td>
      <td colspan="2"><span id="sprytextarea1">
      <label for="s1"></label>
      <textarea name="s1" id="s1" rows="3"></textarea>
      <span id="countsprytextarea1">&nbsp;</span><span class="textareaRequiredMsg">A value is required.</span><span class="textareaMaxCharsMsg">Exceeded maximum number of characters.</span></span></td>
    </tr>
    <tr>
      <td>Sequence 2</td>
      <td colspan="2"><span id="sprytextarea2">
      <label for="s3"></label>
      <textarea name="s2" id="s3" rows="3"></textarea>
      <span id="countsprytextarea2">&nbsp;</span><span class="textareaRequiredMsg">A value is required.</span><span class="textareaMaxCharsMsg">Exceeded maximum number of characters.</span></span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td><input type="reset" name="rs" id="rs" value="Reset" /></td>
      <td width="114">&nbsp;</td>
      <td width="374"><input type="submit" name="sub" id="sub" value="SEND" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
<script type="text/javascript">
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {validateOn:["change"], maxChars:32, useCharacterMasking:false, counterType:"chars_remaining", counterId:"countsprytextarea1"});
var sprytextarea2 = new Spry.Widget.ValidationTextarea("sprytextarea2", {maxChars:32, validateOn:["change"], useCharacterMasking:false, counterType:"chars_remaining", counterId:"countsprytextarea2"});
</script>
</body>
</html>