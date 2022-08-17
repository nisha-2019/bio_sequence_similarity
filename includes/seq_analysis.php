<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action=".?action=do_seq_analysis">
  <table width="607" align="center">
    <tr>
      <td width="123">Sequence 1</td>
      <td width="414"><span id="sprytextarea1">
        <textarea name="s1" id="s1" cols="25" rows="3"></textarea>
      <span class="textareaRequiredMsg">A value is required.</span></span></td>
      <td width="54">&nbsp;</td>
    </tr>
    <tr>
      <td>Sequence 2</td>
      <td><span id="sprytextarea2">
        <label for="s2"></label>
        <textarea name="s2" id="s2" cols="25" rows="3"></textarea>
      <span class="textareaRequiredMsg">A value is required.</span></span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Type</td>
      <td><span id="spryselect1">
        <label for="type"></label>
        <select name="type" id="type">
          <option value="-1">SELECT</option>
          <option value="dna">DNA</option>
          <option value="rna">RNA</option>
        </select>
      <span class="selectInvalidMsg">Please select a valid item.</span><span class="selectRequiredMsg">Please select an item.</span></span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><input type="submit" name="send" id="send" value="SEND" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
<script type="text/javascript">
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {validateOn:["change"]});
var sprytextarea2 = new Spry.Widget.ValidationTextarea("sprytextarea2", {validateOn:["change"]});
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {validateOn:["change"], invalidValue:"-1"});
</script>
</body>
</html>