<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action="includes/doaddreasercher.php">
  <p>&nbsp;</p>
  <table width="577" align="center">
    <tr>
      <td width="142">First Name</td>
      <td colspan="2"><span id="sprytextfield1">
        <label for="ph"></label>
        <span class="textfieldRequiredMsg">A value is required.</span></span><span id="sprytextfield6">
        <input type="text" name="fname" id="fname" />
        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>Last Name</td>
      <td colspan="2"><span id="sprytextfield2">
        <label for="lname"></label>
        <input type="text" name="lname" id="lname" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>Phone No</td>
      <td colspan="2"><span id="sprytextfield3">
        <label for="ph"></label>
        <input type="text" name="ph" id="ph" />
      <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
    </tr>
    <tr>
      <td>Occupation</td>
      <td colspan="2"><span id="sprytextfield13">
        <label for="rjob"></label>
        <input type="text" name="rjob" id="rjob" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>Mail Id</td>
      <td colspan="2"><span id="sprytextfield4">
        <label for="mail"></label>
        <input type="text" name="mail" id="mail" />
      <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
    </tr>
    <tr>
      <td>Area Specialization</td>
      <td colspan="2"><span id="sprytextfield5">
        <label for="spe"></label>
        <input type="text" name="spe" id="spe" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>Guide</td>
      <td colspan="2"><span id="sprytextfield8">
        <label for="gd"></label>
        <input type="text" name="gd" id="gd" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>Designation of Guide</td>
      <td colspan="2"><span id="sprytextfield9">
        <label for="deg"></label>
        <input type="text" name="deg" id="deg" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>No.of paper presented</td>
      <td colspan="2"><span id="sprytextfield10">
        <label for="num"></label>
        <input type="text" name="num" id="num" />
      <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
    </tr>
    <tr>
      <td>Secret Question</td>
      <td colspan="2"><span id="sprytextfield11">
        <label for="sq"></label>
        <input type="text" name="sq" id="sq" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>Answer</td>
      <td colspan="2"><span id="sprytextfield12">
        <label for="sa"></label>
        <input type="text" name="sa" id="sa" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>Username</td>
      <td colspan="2"><span id="sprytextfield7">
        <label for="user"></label>
        <input type="text" name="user" id="user" onchange="load()" />
      <span class="textfieldRequiredMsg">A value is required.</span></span>
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
      <td>Re-type Password</td>
      <td colspan="2"><span id="spryconfirm1">
        <label for="pas"></label>
        <input type="password" name="pas" id="pas" />
       <span class="confirmRequiredMsg">A value is required.</span><span class="confirmInvalidMsg">The values don't match.</span></span></td>
    </tr>
    
      <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    
    <tr>
      <td><input type="reset" name="reset" id="reset" value="Reset" /></td>
      <td width="100">&nbsp;</td>
      <td width="319"><input type="submit" name="sub" id="sub" value="Submit" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
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
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1", {validateOn:["change"], minChars:6});
var spryconfirm1 = new Spry.Widget.ValidationConfirm("spryconfirm1", "pass", {validateOn:["change"]});
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8", "none", {validateOn:["change"]});
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9", "none", {validateOn:["change"]});
var sprytextfield10 = new Spry.Widget.ValidationTextField("sprytextfield10", "integer", {validateOn:["change"]});
var sprytextfield11 = new Spry.Widget.ValidationTextField("sprytextfield11", "none", {validateOn:["change"]});
var sprytextfield12 = new Spry.Widget.ValidationTextField("sprytextfield12", "none", {validateOn:["change"]});
var sprytextfield13 = new Spry.Widget.ValidationTextField("sprytextfield13", "none", {validateOn:["change"]});
</script>
</body>
</html>