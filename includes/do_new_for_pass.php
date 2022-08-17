<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
require('../database/dbconnect.php');
$sql="update login set pass=md5('$_POST[pass2]') where user like '$_POST[uname]'";
//echo $sql;
mysql_query($sql,$con);


?>
<body>
</body>
<meta http-equiv="Refresh" content="0;URL=../.?message=Your Password Changed"  />
</html>