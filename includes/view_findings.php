<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<style>
.cls{
	
padding-bottom:10px;
padding-top:10px;

margin-bottom:15px;

font-family:"Times New Roman", Times, serif;
font-size:14px;
overflow:scroll;
}
</style>
<body>
<form id="form1" name="form1" method="post" action="">
 
  
  <?php
  $sql="select * from mesg where status like 'rs' order by mdate desc";
  $res=mysql_query($sql,$con);
  while($row=mysql_fetch_array($res))
	{

  ?>
  
 
  <table width="887" class="cls">
    <tr>
      <td colspan="5"><b><font size="+1"><?php echo $row['sub']; ?></font></b></td>
    </tr>
    <tr>
      <td colspan="5" align="justify"><?php echo $row['data']; ?></td>
    </tr>
    <tr>
      <td width="100">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td><font color="#0033FF" face="Arial, Helvetica, sans-serif">Posted By</font></td>
      <td width="380">&nbsp;</td>
      <td width="20">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    
     <?php
	 $sql1="select * from public where username like '$row[from]'";
	 $res1=mysql_query($sql1);
	 $r1=mysql_fetch_array($res1);
	 
	 $s2="select * from reasercher where uid=$r1[uid]";
	 $a1=mysql_query($s2);
	 $b1=mysql_fetch_array($a1);
	 ?>
     
    
    <tr>
      <td colspan="2"><?php echo $r1['fname']."  ".$r1['lname']; ?><br />
      <?php  echo "Researcher of ".$b1['area']  ?>
    
     </td>
      <td>&nbsp;</td>
      <td width="135"><?php echo $row['mdate']; ?></td>
      <td width="138">&nbsp;</td>
    </tr>
  </table>
<hr  width="900px"/>
  <?php
	}
	?>
<p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>