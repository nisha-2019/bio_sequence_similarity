<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form2" name="form2" method="post" action=".?action=do_edit_seq">
 
  
  <table width="423" align="center">
    <tr>
      <td width="94">Sequence id</td>
      <td width="317"><span id="sprytextfield2">
        <label for="seq"></label>
        <input type="text" name="seq" id="seq" class="sq" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="sub" id="sub" value="Submit" /></td>
    </tr>
  </table>
  
  <p>&nbsp;</p>
</form>


<script type="text/javascript">
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["change"]});
</script>
</body>
</html>