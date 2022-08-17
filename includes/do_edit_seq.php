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
<form id="form1" name="form1" method="post" action="includes/do_edit_seq1.php">
  <p><strong><center>EDIT PROTEIN SEQUENCE </center></strong></p>
  <?php
  $id=explode('-',$_POST['seq']);
$s="select * from  `protein` where pid like '$id[0]'";
$a=mysql_query($s);
$b=mysql_fetch_array($a);


$s1="select * from organism where oid=$b[oid]";
$a1=mysql_query($s1);
$b1=mysql_fetch_array($a1);



  ?>
  <table width="670" align="center">
    <tr>
      <td width="115"><strong>Organism Id</strong></td>
      <td colspan="3"> <input name=id type=text value="<?php echo $b['oid']; ?>" size="20" readonly="readonly"  /></td>
      <td width="15">&nbsp;</td>
    </tr>
    <tr>
      <td><strong>Organism Name</strong></td>
      <td colspan="3"><input name=oname type="text" value=" <?php echo $b1['name']; ?>" size="20" readonly="readonly" /></td>
      <td>  </td>
    </tr>
    
    <tr>
    <td colspan="4"><hr color="#99CCCC"  /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="3"><label for="ii"></label>        <label for="id"></label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td> Id</td>
      <td colspan="3"><span id="sprytextfield1">
        <label for="id2"></label>
        <input type="text" name="id2" id="id2" value="<?php echo $b['pid']; ?>" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Name</td>
      <td colspan="3"><span id="sprytextfield2">
        <label for="name"></label>
        <input type="text" name="name" id="name" value="<?php echo $b['pname']; ?>" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td> Sequence</td>
      <td colspan="3"><label for="seq"><span id="sprytextarea1">
        <textarea name="seq" id="seq2" cols="25" rows="4"><?php echo $b['seq']; ?></textarea>

        
      <span class="textareaRequiredMsg">A value is required.</span></span></label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="3">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><input type="submit" name="del" id="del" value="DELETE" /></td>
      <td width="163">&nbsp;</td>
      <td width="58"><input type="submit" name="send" id="send" value="EDIT" /></td>
      <td width="295"><input type="hidden" name="s1" id="s1" value="<?php echo $id[0]; ?>" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="3">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["change"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {validateOn:["change"]});
</script>
</body>
</html>