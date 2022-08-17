<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script><script src="SpryAssets/SpryValidationRadio.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationRadio.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action="includes/do_user_info.php">
  <table width="562" align="center">
    <?php
  $sql="select * from public where uid=$_SESSION[cid]";
	$r=mysql_query($sql,$con);
	$s=mysql_fetch_array($r);
	
	//$sql1="select * from reasercher where rid=$_SESSION[rid]";
	//$r1=mysql_query($sql1,$con);
	//$s1=mysql_fetch_array($r1);
	
  ?>
    <tr>
      <td width="156">First Name</td>
      <td colspan="2"><span id="fname">
        <label for="fn"></label>
        <span id="sprytextfield7">
        <input type="text" name="fn" id="fn" value="<?php echo $s['fname'] ?>"  />
        <span class="textfieldRequiredMsg">A value is required.</span></span><span class="textfieldRequiredMsg">A value is required.</span></span></td>
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
      <td>House Name</td>
      <td colspan="2"><span id="sprytextfield8">
        <label for="chn"></label>
        <input type="text" name="chn" id="chn" value="<?php echo $s['hname'] ?>" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>City</td>
      <td colspan="2"><span id="sprytextfield9">
        <label for="ccity"></label>
        <input type="text" name="ccity" id="ccity" value="<?php echo $s['city'] ?>" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Street</td>
      <td colspan="2"><span id="sprytextfield10">
        <label for="cstreet"></label>
        <input type="text" name="cstreet" id="cstreet" value="<?php echo $s['street'] ?>" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>District</td>
      <td colspan="2"><span id="spryselect3">
        <label for="cdist"></label>
        <select name="cdist" id="cdist">
         
          <option value="Trivandrum">Trivandrum</option>
          <option value="Kollam">Kollam</option>
           <option value="Pathanamthitta">Pathanamthitta</option>
          <option value="Alappuzha">Alappuzha</option>
          <option value="Kottayam">Kottayam</option>
          <option value="Idukki">Idukki</option>
          <option value="Eranakulam">Eranakulam</option>
          <option value="Thrissur">Thrissur</option>
          <option value="Palakkad">Palakkad</option>
          <option value="Malappuram">Malappuram</option>
          <option value="Kozhikode">Kozhikode</option>
          <option value="Wayanad">Wayanad</option>
          <option value="Kannur">Kannur</option>
          <option value="Kasaragod">Kasaragod</option>
          
          
        </select>
        <span class="selectInvalidMsg">Please select a valid item.</span><span class="selectRequiredMsg">Please select an item.</span></span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Pin Code</td>
      <td colspan="2"><span id="sprytextfield11">
        <label for="cpin"></label>
        <input type="text" name="cpin" id="cpin" value="<?php echo $s['pin'] ?>" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Gender</td>
       <?php
		
		
		?>
      
      <td colspan="2"><span id="spryradio1">
        <label>
          <input type="radio" name="cgen" value="Male" id="cgen_0" <?php if($s['gender']=="Male"){ ?> checked="checked" <?php } ?> />
          Male</label>
        <br />
        <label>
          <input type="radio" name="cgen" value="Female" id="cgen_1" <?php if($s['gender']=="Female"){ ?>  checked="checked" <?php } ?> />
          Female</label>
        <br />
      <span class="radioRequiredMsg">Please make a selection.</span></span></td>
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
      <td>Secret Question</td>
      <td colspan="2"><span id="sprytextfield5">
        <label for="area"></label>
        <input type="text" name="qst" id="qst" value="<?php echo $s['qst'] ?>"  />
        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Answer</td>
      <td colspan="2"><span id="sprytextfield6">
        <label for="gd"></label>
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
      <td><input type="reset" name="reset" id="reset" value="Reset" /></td>
      <td width="96"><input type="submit" name="change" id="change" value="Change" /></td>
      <td width="201">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
<script type="text/javascript">
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "none", {validateOn:["change"]});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "none", {validateOn:["change"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "email", {validateOn:["change"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "integer", {validateOn:["change"]});
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["change"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["change"]});
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8", "none", {validateOn:["change"]});
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9", "none", {validateOn:["change"]});
var sprytextfield10 = new Spry.Widget.ValidationTextField("sprytextfield10", "none", {validateOn:["change"]});
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {validateOn:["change"], invalidValue:"-1"});
var sprytextfield11 = new Spry.Widget.ValidationTextField("sprytextfield11", "none", {validateOn:["change"]});
var spryradio1 = new Spry.Widget.ValidationRadio("spryradio1", {validateOn:["change"]});
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect22", {validateOn:["change"], invalidValue:"-1"});
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7", "none", {validateOn:["change"]});
var spryselect3 = new Spry.Widget.ValidationSelect("spryselect3", {validateOn:["change"], invalidValue:"-1"});
</script>
</body>
</html>