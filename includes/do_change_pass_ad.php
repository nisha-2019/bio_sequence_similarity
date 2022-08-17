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
$a="select pass from login where pass=md5('$_POST[opass]')";
$b=mysql_query($a);
//$c=mysql_fetch_array($b);
if(mysql_num_rows($b)>0)
{

$sql="update login set pass=md5('$_POST[npass]') where user like 'admin'";
$row=mysql_query($sql,$con);


?>
<meta http-equiv="Refresh" content="0;URL=../.?message=Password Changed"  /> 
<?php
}
else
{
?>
<meta http-equiv="Refresh" content="0;URL=../.?message=Incorrect Old password&action=change_pass_ad"  /> 
<?php
}
?>
</body>
</html>