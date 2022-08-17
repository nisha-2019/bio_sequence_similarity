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
$sql="UPDATE `organism` SET `name` = '$_POST[oname]',
`genus` = '$_POST[genus]',
`specius` = '$_POST[ospe]' WHERE `oid` =$_POST[val] ";


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
?>
</body>
</html>