<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<style>
.text{color:#06F;}
</style>
<body>
<form id="form1" name="form1" method="post" action="includes/dores_more.php">
 <p><strong><center>RESEARCHER'S DETAILS  </center></strong></p>
 <?php
 $s="select * from public where uid=$_GET[id]";
 $res=mysql_query($s,$con);
 $row=mysql_fetch_array($res);
 
 $s1="select * from reasercher where rid=$_GET[rid]";
 $res1=mysql_query($s1,$con);
 $row1=mysql_fetch_array($res1);
 
// $count=0;
 $a="select count(pid) as count from rpaper where rid=$_GET[id]";
 $b=mysql_query($a);
 $c=mysql_fetch_array($b);
 ?>
  <table width="654" align="center">
    <tr>
      <td width="80"><strong>Name</strong></td>
      <td colspan="2" ><?php echo $row['fname']." ".$row['lname'];?></td>
      <td width="25">&nbsp;</td>
      <td width="99"><strong>Research In</strong></td>
      <td width="257"><?php echo $row1['area']; ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td><strong>Occupation</strong></td>
      <td colspan="5"><?php echo $row1['rjob']; ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td><strong>Guide</strong></td>
      <td colspan="5"><?php echo $row1['guide']; ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="5"><?php echo $row1['gdesig']; ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td><strong>Publication</strong></td>
      <td colspan="2"><?php echo $row1['paper']; ?></td>
      <td colspan="3">&nbsp;</td>
    </tr>
     <?php
	 $k=1;
	$a1="select * from rpaper where rid=$_GET[id]";
 $b1=mysql_query($a1);
while( $c1=mysql_fetch_array($b1))
{
	?>
   
    <tr>
      <td>&nbsp;</td>
      <td width="41" ><?php echo "Title ".$k; ?></td>
      <td colspan="4"><?php echo $c1['tt']; ?></td>
    </tr>
    <?php
}
?>
    <tr>
      <td><input type="submit" name="remove" id="remove" value="REMOVE" /></td>
      <td colspan="2">&nbsp;</td>
      <td colspan="2"><input type="hidden" name="r1" id="r1" value="<?php echo $_GET['rid']; ?>" /></td>
      <td><input type="hidden" name="p1" id="p1" value="<?php echo $_GET['id']; ?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td colspan="3">&nbsp;</td>
    </tr>
  </table>
</form>
<p><a  title="Back" onclick="goBack()"><img src="./proimg/arrow_left.png" width="60"  height="60" /></a></p>
</body>
</html>