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

background-color:#FFC;
margin-bottom:15px;

font-family:"Times New Roman", Times, serif;
font-size:14px;
overflow:scroll;
}
</style>
<body>
<form id="form1" name="form1" method="post" action="">
  <p><a href=".?action=discs_forum">Post Your Comments</a></p>
  
  <?php
  $sql="select * from mesg where status like 'user' order by mdate desc";
  $res=mysql_query($sql,$con);
  while($row=mysql_fetch_array($res))
	{

  ?>
  
 
  <table width="913" class="cls">
    <tr>
      <td width="101" rowspan="4"><img src="images/man-icon125X.png" width="98%"  height="22%" /></td>
      <td width="101"><b>Subject</b></td>
      <td colspan="4"><?php echo $row['sub']; ?></td>
    </tr>
    <tr>
      <td><b>Comments</b></td>
      <td colspan="4" align="justify"><?php echo $row['data']; ?></td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
     <?php
	   $sql1="select * from public where username like '$row[from]'";
	 $res1=mysql_query($sql1);
	 $r1=mysql_fetch_array($res1);
	  ?>
    <tr>
      <td>&nbsp;</td>
      <td width="385">&nbsp;</td>
      <td width="20">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3"><?php echo $r1['fname']." ".$r1['lname']; ?></td>
      <td>&nbsp;</td>
      <td width="124">&nbsp;</td>
     
      <td width="154"><?php echo $row['mdate']; ?></td>
    </tr>
  </table>

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