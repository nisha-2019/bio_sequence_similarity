<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action="includes/doaddprot.php">
  <table width="1070">
    <tr>
      <td width="122"><strong>Organism Id</strong></td>
      <td colspan="2"> <input name=id type=text value="<?php echo $_GET['id']; ?>" size="20" readonly="readonly"  /></td>
      <td width="165">&nbsp;</td>
    </tr>
    <tr>
      <td><strong>Organism Name</strong></td>
      <td colspan="2"><input name=oname type="text" value=" <?php echo $_GET['name']; ?>" size="20" readonly="readonly" />
      <input type="hidden" name="oname" id="oname" value="<?php echo $_GET['name']; ?>" /></td>
      <td>  </td>
    </tr>
    
    <tr>
    <td colspan="3"><hr color="#99CCCC"  /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2"><label for="ii"></label>        <label for="id"></label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td> Id</td>
      <td colspan="2"><span id="sprytextfield2">
        <label for="pid"></label>
        <input type="text" name="pid" id="pid" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Name</td>
      <td colspan="2"><span id="sprytextfield3">
        <label for="name"></label>
        <input type="text" name="name" id="name" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td> Sequence</td>
      <td colspan="2"><label for="seq"></label>
        <span id="sprytextarea1">
        <label for="seq2"></label>
        <textarea name="seq" id="seq2" cols="40" rows="6"></textarea>
      <span class="textareaRequiredMsg">A value is required.</span></span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Type</td>
      <td colspan="2"><span id="spryselect1">
        <label for="type"></label>
        <select name="type" id="type">
        	<option value="-1">Select</option>
          <option value="Protein">Protein</option>
          <option value="DNA">DNA</option>
          <option value="RNA">RNA</option>
        </select>
        <span class="selectInvalidMsg">Please select a valid item.</span><span class="selectRequiredMsg">Please select an item.</span></span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><input type="reset" name="send2" id="send2" value="Reset" /></td>
      <td width="69">&nbsp;</td>
      <td width="694">  <input type="submit" name="send" id="send" value="Submit" /> </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
<script type="text/javascript">
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {invalidValue:"-1", validateOn:["change"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["change"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {validateOn:["change"]});
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {validateOn:["change"]});
</script>
</body>
</html>