<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p><strong><center>RESEARCHER'S DETAILS  </center></strong></p>
  <table width="547" align="center">
    <tr>
      <td width="41"><strong><center>Si.No.</center></strong></td>
      <td width="163"><strong><center>Name</center></strong></td>
      <td width="232"><strong><center>E-Mail Id</center></strong></td>
      <td width="91">&nbsp;</td>
    </tr>
    <?php
	$i=1;
	$sql="select * from reasercher";
	$res=mysql_query($sql,$con);
	while($row=mysql_fetch_array($res))
	{
		$sql1="select * from public where uid=$row[uid]";
		$res1=mysql_query($sql1,$con);
	    $row1=mysql_fetch_array($res1);
	?>
    <tr>
      <td><center><?php echo $i; ?></center></td>
      <td><center>
        <?php echo $row1['fname']." ". $row1['lname']; ?>
      </center></td>
      <td><center>
        <?php echo $row1['mail']; ?>
      </center></td>
      <td><center>
        <a href=".?action=res_more&rid=<?php echo $row['rid']; ?>&id=<?php echo $row['uid']; ?>" class="anchor_button">More Details</a>
      </center></td>
    </tr>
    <?php
	$i++;
	}
	?>
    
  </table>
</form>
</body>
</html>