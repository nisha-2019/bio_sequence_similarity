<?php
require '../database/dbconnect.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$s=$_POST['seq'];
$k=strlen($s);

if(isset($_POST['send']))
{

$sql="UPDATE `protein` SET 
`pid` ='$_POST[id2]',
`pname` = '$_POST[name]',
`seq` = '$_POST[seq]',
`size` = $k
 WHERE `pid` = '$_POST[s1]' ";


$res=mysql_query($sql);
if(mysql_affected_rows($con)>0)
{
?>
<meta http-equiv="Refresh" content="0;URL=../.?message=Update Successfull"  /> 
<?php
}
else
{
	?>
     <meta http-equiv="Refresh" content="0;URL=../.?message=No Updation Done !"  /> 
    <?php
}
//echo $sql;
}
else if(isset($_POST['del']))
{
	$a="delete from protein where pid like '$_POST[s1]'";
	//echo $a;

	mysql_query($a);
	?>
     <meta http-equiv="Refresh" content="0;URL=../.?message=Deleted !"  /> 
    <?php
	
}
?>
</body>
</html>