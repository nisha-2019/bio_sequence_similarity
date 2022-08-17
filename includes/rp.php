<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="823" align="center" border="1" >
    <tr>
      <td width="72"><center>
      <b>Paper ID.</b>
      </center></td>
      <td width="275"><center><b>Title</b></center></td>
      <td width="308"><center><b>Author</b></center></td>
      <td width="140"><center><b>Download</b></center></td>
    </tr>
    <?php
	$sql="select * from rpaper";
	$res=mysql_query($sql,$con);
	while($row=mysql_fetch_array($res))
	{
		$sql1="select * from public where uid like '$row[rid]'";
		$res1=mysql_query($sql1,$con);
		$row1=mysql_fetch_array($res1);
	
	
	?>
    <tr>
      <td><center><?php echo $row['pid'];  ?></center></td>
      <td><center><?php echo $row['tt'];  ?></center></td>
      <td><center><?php echo $row1['fname']." ".$row1['lname'];  ?></center></td>
      <td><center>  <?php if($row['file']==""){ ?> No File <?php }else{ ?><a href="includes/paper/<?php echo $row['file']; ?>" target="_new">
          Click Here <?php } ?></a> </center></td>
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