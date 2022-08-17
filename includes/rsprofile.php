<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action="includes/dorsprofile.php">
  <table width="562">
  <?php
  $sql="select * from public where uid=$_SESSION[cid]";
	$r=mysql_query($sql,$con);
	$s=mysql_fetch_array($r);
	
	$sql1="select * from reasercher where rid=$_SESSION[rid]";
	$r1=mysql_query($sql1,$con);
	$s1=mysql_fetch_array($r1);
	
	
  ?>
    <tr>
      <td width="145">First Nname</td>
      <td colspan="2"><span id="sprytextfield1">
        <label for="fn"></label>
        <input type="text" name="fn" id="fn" value="<?php echo $s['fname'] ?>"  />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      <td width="89">&nbsp;</td>
    </tr>
    <tr>
      <td>Last Name</td>
      <td colspan="2"><span id="sprytextfield2">
        <label for="ln"></label>
        <input type="text" name="ln" id="ln" value="<?php echo $s['lname'] ?>" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Phone no</td>
      <td colspan="2"><span id="sprytextfield3">
      <label for="ph"></label>
      <input type="text" name="ph" id="ph" value="<?php echo $s['ph'] ?>" />
      <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Mail id</td>
      <td colspan="2"><span id="sprytextfield4">
      <label for="mail"></label>
      <input type="text" name="mail" id="mail" value="<?php echo $s['mail'] ?>" />
      <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Occupation</td>
      <td colspan="2"><span id="sprytextfield11">
        <label for="oc"></label>
        <input type="text" name="oc" id="oc" value="<?php echo $s1['rjob'] ?>" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Area of specialisation</td>
      <td colspan="2"><span id="sprytextfield5">
        <label for="area"></label>
        <input type="text" name="area" id="area" value="<?php echo $s1['area'] ?>"  />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Guide</td>
      <td colspan="2"><span id="sprytextfield6">
        <label for="gd"></label>
        <input type="text" name="gd" id="gd" value="<?php echo $s1['guide'] ?>" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Designation of guide</td>
      <td colspan="2"><span id="sprytextfield7">
        <label for="desgnation"></label>
        <input type="text" name="desgnation" id="desgnation" value="<?php echo $s1['gdesig'] ?>"  />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>No: of paper presented</td>
      <td colspan="2"><span id="sprytextfield8">
      <label for="paper"></label>
      <input type="text" name="paper" id="paper" value="<?php echo $s1['paper'] ?>" />
      <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Your Secret Question</td>
      <td colspan="2"><span id="sprytextfield9">
        <label for="qs"></label>
        <input type="text" name="qs" id="qs" value="<?php echo $s['qst'] ?>" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Answer</td>
      <td colspan="2"><span id="sprytextfield10">
        <label for="an"></label>
        <input type="text" name="an" id="an" value="<?php echo $s['ans'] ?>" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td width="107"><input type="submit" name="change" id="change" value="Change" /></td>
      <td width="201">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["change"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["change"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "integer", {validateOn:["change"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "email", {validateOn:["change"]});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "none", {validateOn:["change"]});
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "none", {validateOn:["change"]});
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7", "none", {validateOn:["change"]});
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8", "integer", {validateOn:["change"]});
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9", "none", {validateOn:["change"]});
var sprytextfield10 = new Spry.Widget.ValidationTextField("sprytextfield10", "none", {validateOn:["change"]});
var sprytextfield11 = new Spry.Widget.ValidationTextField("sprytextfield11", "none", {validateOn:["change"]});
</script>
</body>
</html>