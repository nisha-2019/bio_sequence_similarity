<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
require '../database/dbconnect.php';
$sql="INSERT INTO `contact` (
`mail` ,
`msg` ,
`sdate`
)
VALUES (
'$_POST[mid]','$_POST[msg]',CURRENT_TIMESTAMP
)";

$res=mysql_query($sql,$con);

?>

<meta http-equiv="Refresh" content="0;URL=../.?message=Your Message Send Successfully"  />


</body>
</html>