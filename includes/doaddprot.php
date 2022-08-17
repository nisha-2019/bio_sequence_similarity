<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php

require '../database/dbconnect.php';

$sql="INSERT INTO `protein` (
`pid`,
`oid` ,
`pname`,
`seq` ,
`type`,
`size`
)
VALUES (
'$_POST[pid]','$_POST[id]','$_POST[name]', '$_POST[seq]', '$_POST[type]',length('$_POST[seq]')
)";


//echo $sql;
$res=mysql_query($sql,$con);

if(mysql_affected_rows()>0)
{
?>

<meta http-equiv="Refresh" content="0;URL=../.?action=addprot&id=<?php echo $_POST['id'];?>&name=<?php echo $_POST['oname'];?>&message=Sequence Inserted Successfully"  />
<?php
}
else
{
	?>
 <meta http-equiv="Refresh" content="0;URL=../.?action=addprot&id=<?php echo $_POST['id'];?>&name=<?php echo $_POST['oname'];?>&message=Insertion Failed.The ID Already Exist"  />
    <?php
}
?>
<body>
</body>
</html>