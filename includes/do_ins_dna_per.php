<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
require '../database/dbconnect.php';

$sql="INSERT INTO `similarity` (
`pid1` ,
`pid2` ,
`per`,
`edate`
)
VALUES (
'$_GET[id1]', '$_GET[id2]', $_GET[p],CURRENT_TIMESTAMP
)";

$res=mysql_query($sql,$con);


?>
<body>
</body>
</html>

<meta http-equiv="Refresh" content="0;URL=../.?message=Result Saved Successfully&action=prot_sim"  />
