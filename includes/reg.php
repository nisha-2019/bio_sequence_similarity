<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationRadio.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationRadio.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action="includes/doreg.php">
  <table width="505" height="493" border="0" align="center">
    <caption><center>
      <p><strong>REGISTRATION</strong>    </p>
    </center>
    </caption>
    <tr>
      <td width="133" height="21">First name</td>
      <td colspan="2"><span id="sprytextfield1">
        <label for="fname"></label>
        <input type="text" name="fname" id="fname" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
</tr>
    <tr>
      <td>Last name</td>
      <td colspan="2"><span id="sprytextfield2">
        <label for="lname"></label>
        <input type="text" name="lname" id="lname" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
</tr>
    <tr>
      <td>House name</td>
      <td colspan="2"><span id="sprytextfield3">
        <label for="hname"></label>
        <input type="text" name="hname" id="hname" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
</tr>
    <tr>
      <td>City</td>
      <td colspan="2"><span id="sprytextfield4">
        <label for="city"></label>
        <input type="text" name="city" id="city" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
</tr>
    <tr>
      <td>Street</td>
      <td colspan="2"><span id="sprytextfield5">
        <label for="street"></label>
        <input type="text" name="street" id="street" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
</tr>
    <tr>
      <td>District</td>
      <td colspan="2"><span id="spryselect1">
        <label for="txtdist"></label>
        <span id="spryselect2">
        <label for="dist"></label>
        <select name="dist" id="dist">
          <option value="-1" selected="selected">Select</option>
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
      <span class="selectInvalidMsg">Please select a valid item.</span><span class="selectRequiredMsg">Please select an item.</span></span></span></td>
</tr>
    <tr>
      <td>Pin code</td>
      <td colspan="2"><span id="sprytextfield6">
      <label for="pin"></label>
      <input name="pin" type="text" id="pin" maxlength="6" />
      <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
</tr>
    <tr>
      <td>Gender</td>
      <td colspan="2"><span id="spryradio1">
        <label>
          <input type="radio" name="gender" value="Male" id="gender_0" />
          Male</label>
        <br />
        <label>
          <input type="radio" name="gender" value="Female" id="gender_1" />
          Female</label>
        <br />
      <span class="radioRequiredMsg">Please make a selection.</span></span></td>
</tr>
    <tr>
      <td>Phone number</td>
      <td colspan="2"><span id="sprytextfield8">
      <label for="ph"></label>
      <input type="text" name="ph" id="ph" />
      <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span><span class="textfieldMaxCharsMsg">Exceeded maximum number of characters.</span></span></td>
</tr>
    <tr>
      <td>E-Mail id</td>
      <td colspan="2"><span id="sprytextfield9">
      <label for="mail"></label>
      <input type="text" name="mail" id="mail" />
      <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
</tr>
    <tr>
      <td height="21">Secret Question</td>
      <td colspan="2"><span id="sprytextfield7">
        <label for="qst"></label>
        <input type="text" name="qst" id="qst" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td height="21">Answer</td>
      <td colspan="2"><span id="sprytextfield11">
        <label for="ans"></label>
        <input type="text" name="ans" id="ans" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td height="43">User name</td>
      
      <td colspan="2"><span id="sprytextfield10">
        <label for="user"></label>
        <input type="text" name="user" id="user" onChange="load()"/>
      <span class="textfieldRequiredMsg">A value is required</span></span>        
      <div id="status" style="width:200px;float: right; overflow: hidden"></div></td>
      
</tr>


   <tr>
      <td>Password</td>
      <td colspan="2"><span id="sprypassword1">
      <label for="pass"></label>
      <input type="password" name="pass" id="pass" />
      <span class="passwordRequiredMsg">A value is required.</span><span class="passwordMinCharsMsg">Minimum number of characters not met.</span></span></td>
</tr>
    <tr>
      <td>Re-Type Password</td>
      <td colspan="2"><span id="spryconfirm1">
        <label for="pass1"></label>
        <input type="password" name="pass1" id="pass1" />
      <span class="confirmRequiredMsg">A value is required.</span><span class="confirmInvalidMsg">The values don't match.</span></span></td>
</tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td><input type="reset" name="cancel" id="cancel" value="Cancel" /></td>
      <td width="7">&nbsp;</td>
      <td width="310"><input type="submit" name="register" id="register" value="Register" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["change"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["change"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {validateOn:["change"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "none", {validateOn:["change"]});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "none", {validateOn:["change"]});
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2", {validateOn:["change"], invalidValue:"-1"});
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "integer", {validateOn:["change"]});
var spryradio1 = new Spry.Widget.ValidationRadio("spryradio1", {validateOn:["change"]});
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8", "integer", {validateOn:["change"], maxChars:10});
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9", "email", {validateOn:["change"]});
var sprytextfield10 = new Spry.Widget.ValidationTextField("sprytextfield10", "none", {validateOn:["change"]});
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1", {validateOn:["change"], minChars:6});
var spryconfirm1 = new Spry.Widget.ValidationConfirm("spryconfirm1", "pass", {validateOn:["change"]});
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7", "none", {validateOn:["change"]});
var sprytextfield11 = new Spry.Widget.ValidationTextField("sprytextfield11", "none", {validateOn:["change"]});
</script>
</body>
</html>