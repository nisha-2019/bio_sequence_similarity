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
 
 $a="select username from public where uid=$_POST[p1]";
 $b=mysql_query($a);
 $c=mysql_fetch_array($b);
 
 
 $s="delete from reasercher where rid=$_POST[r1]";
 mysql_query($s);
 
 $p="delete from public where uid=$_POST[p1]";
 mysql_query($p);
 
 //echo $s;
 //echo $p;
 
 $r="delete from login where user like '$c[username]'";
// echo $r;
mysql_query($r);
 
 
?>
<meta http-equiv="Refresh" content="0;URL=../.?message=Deleted&action=revoke_res"  /> 

</body>
</html>