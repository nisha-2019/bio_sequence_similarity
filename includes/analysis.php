<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action=".?action=do_analysis">
  <table width="640" align="center">
    <tr>
      <td width="113">Sequence 1</td>
      <td width="403"><label for="s1"></label>
      <label for="s2"></label>
      <span id="sprytextarea1">
      <label for="s3"></label>
      <textarea name="s1" id="s3" cols="25" rows="2"></textarea>
      <span class="textareaRequiredMsg">A value is required.</span></span></td>
      <td width="108">&nbsp;</td>
    </tr>
    <tr>
      <td>sequence 2</td>
      <td><span id="sprytextarea2">
        <label for="s4"></label>
        <textarea name="s2" id="s4" cols="25" rows="2"></textarea>
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
      <td><input type="submit" name="send" id="send" value="SEND" /></td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p></p>
  </form>

  
  
  
  <p>&nbsp;</p>


<script type="text/javascript">
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {validateOn:["change"]});
var sprytextarea2 = new Spry.Widget.ValidationTextarea("sprytextarea2", {validateOn:["change"]});
</script>
</body>
</html>