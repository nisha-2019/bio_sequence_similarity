<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p><b><font color="#993300" size="+1">Protein Sequence from Potein Id</font></b><br />
  </p>
  <table width="456" border="0" align="center">
    <tr>
      <td width="88">Protein Id</td>
      <td width="288"><span id="sprytextfield1">
      <label for="pid"></label>
      <?php
	  if(!isset($_POST['pid']))
	  $_POST['pid']="";
	  ?>
      <input type="text" name="pid" id="pid" value="<?php echo $_POST['pid'];?>" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      <td width="66">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="sub" id="sub" value="SEND" /></td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <?php
  if(isset($_POST['sub']) )
  {
	 echo "<a href=http://www.ncbi.nlm.nih.gov/protein/$_POST[pid]?report=fasta&log$=seqview&format=text target=_new> <pre> Click Here For Sequence of Id : $_POST[pid] </pre> </a>";
  }
  
  ?>
</form>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["change"]});
</script>
</body>
</html>