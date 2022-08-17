<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="497">
    <tr>
      <td width="44"><strong> Id</strong></td>
      <td width="68"><strong> Name</strong></td>
      <td width="369">&nbsp;</td>
    </tr>
    
    <?php
	
	$sql="select * from organism ";
	$res=mysql_query($sql,$con);
	while($row=mysql_fetch_array($res))
	{
	
	
	?>
    <tr>
      <td height="21"> <?php echo $row['oid'];   ?> </td>
      <td><?php echo $row['name'];   ?> </td>
      <td><a href=".?action=addprot&id=<?php echo $row['oid'];  ?>&name=<?php echo $row['name']; ?>" >  click here </a> </td>
    </tr>
	
	<?php
	}
	?>
  </table>
</form>
</body>
</html>