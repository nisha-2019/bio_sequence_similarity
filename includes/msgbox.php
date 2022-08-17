<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
<p><center><font size="+1" face="Verdana, Geneva, sans-serif" >Message Box</font></center></p>
  <table width="821" align="center" border="1">
    <tr>
      <td width="60"><strong><center>ID.</center></strong></td>
      <td width="258"><strong><center>Sender ID</center></strong></td>
      <td width="144"><strong><center>Date</center></strong></td>
      <td width="331"><strong><center>Message</center></strong></td>
    </tr>
    <?php
	
	$sql="select * from contact order by sdate desc ";
	$res=mysql_query($sql,$con);
	while($row=mysql_fetch_array($res))
	{
	
	?>
	
    <tr>
      <td align="center"><font size="+1"><a href="includes/do_del_msg.php.?id=<?php echo $row['id'];  ?>" title="Click here to delete" ><?php echo $row['id'];  ?></a></font></td>
      <td align="center"><?php echo $row['mail'];  ?></td>
      <td align="center"><?php echo $row['sdate'];  ?></td>
      <td align="center"><?php echo $row['msg'];  ?></td>
  
    </tr>
    
    <?php
	
	}
	?>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>