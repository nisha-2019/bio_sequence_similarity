<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>

<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />

</head>

<body>
<form id="form1" name="form1" method="post" action="">
<?php

$sql="select * from public where username like '$_GET[uname]' ";
	$res=mysql_query($sql,$con);
	$row=mysql_fetch_array($res);
	
		?>
  <table width="584" align="center">
    <tr>
      <td width="173"><?php echo $row['qst']; ?></td>
      <td width="381"><span id="sprytextfield11">
        <label for="ans"></label>
        <input type="text" name="ans" id="ans" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="sub" id="sub" value="SEND" /></td>
    </tr>
  </table>
  </form>

    <?php
  if(isset($_POST['sub']))
  {
	  if($_POST['ans']==$row['ans'])
	  {
		  ?>
   <br />
 <hr />
 <br />
 <script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
 <link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
<form id="form2" name="form2" method="post" action="includes/do_new_for_pass.php">
  <table width="586" align="center">
    <tr>
      <td>&nbsp;</td>
      <td colspan="2"><input type="hidden" name="uname" id="hiddenField" value="<?php echo $_GET['uname']; ?>"/></td>
    </tr>
    <tr>
      <td width="160">New Password</td>
      <td colspan="2"><span id="password1">
      <label for="pass"></label>
      <input type="password" name="pass2" id="pass2" />
      <span class="passwordRequiredMsg">A value is required.</span><span class="passwordMinCharsMsg">Minimum number of characters not met.</span></span></td>
    </tr>
    <tr>
      <td>Retype New password</td>
      <td colspan="2"><span id="demo">
        <label for="passcon"></label>
        <input type="password" name="passcon" id="passcon" />
      <span class="confirmRequiredMsg">A value is required.</span><span class="confirmInvalidMsg">The values don't match.</span></span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td width="152">
      <input type="submit" name="sub2" id="sub2" value="Submit" /></td>
      <td width="258">&nbsp;</td>
    </tr>
  </table>
   
          
  </form>

  
          <?php
	  }
	  else
	  {
		  ?>
  			<script>
		   alert("Wrong Answer");
			location.href="?action=home";
       	   </script>
          <?php
		  
	  }
  }
  ?>
<p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>

<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield11", "none", {validateOn:["change"]});
var sprypassword1 = new Spry.Widget.ValidationPassword("password1", {validateOn:["change"], minChars:6});
var spryconfirm1 = new Spry.Widget.ValidationConfirm("demo", "pass2", {validateOn:["change"]});
</script>
</body>
</html>