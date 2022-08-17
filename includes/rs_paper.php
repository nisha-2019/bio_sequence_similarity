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
<form action="includes/do_rs_paper.php" method="post" enctype="multipart/form-data" name="form1" id="form1"><center><h3><font color="#0066FF">Upload Your Research Paper Here</font>  </h3></center>
  <table width="466" align="center">
    <tr>
      <td width="120">Place of Publishing</td>
      <td colspan="2"><span id="sprytextfield1">
        <label for="place"></label>
        <input type="text" name="place" id="place" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>Date of Publishing</td>
      <td colspan="2"><span id="sprytextfield2">
        <label for="date"></label>
        <input type="text" name="date" id="date" class="dt" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>Title</td>
      <td colspan="2"><span id="sprytextfield4">
        <label for="tt"></label>
        <input type="text" name="tt" id="tt" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>Journal/Conference</td>
      <td colspan="2"><span id="sprytextfield3">
        <label for="journal"></label>
        <input type="text" name="journal" id="journal" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>Author's Details</td>
      <td colspan="2"><label for="author"></label>
        <span id="sprytextarea1">
        <label for="at"></label>
        <textarea name="at" id="at" cols="21" rows="4"></textarea>
      <span class="textareaRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>Upload</td>
      <td colspan="2"><label for="up"></label>
      <input name="up" type="file" id="up" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td><input type="reset" name="reset" id="reset" value="Reset" /></td>
      <td width="123">&nbsp;</td>
      <td width="207"><input type="submit" name="submit" id="submit" value="Submit" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["change"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["change"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {validateOn:["change"]});
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {validateOn:["change"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "none", {validateOn:["change"]});
</script>
</body>
</html>