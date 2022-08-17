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
 $i=explode('-',$_POST['o1']);
 $s="delete from organism where oid=$i[0]";
 mysql_query($s);
 
 $p="delete from protein where oid=$i[0]";
 mysql_query($p);
 
 //echo $s;
 //echo $p;
?>
<meta http-equiv="Refresh" content="0;URL=../.?message=Deleted"  /> 
</body>
</html>