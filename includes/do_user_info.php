<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
require '../database/dbconnect.php';
$sql="update public set `fname`='$_POST[fn]',`lname`='$_POST[ln]',
hname='$_POST[chn]',
city='$_POST[ccity]',
street='$_POST[cstreet]',
dist='$_POST[cdist]',
pin='$_POST[cpin]',
gender='$_POST[cgen]',
`ph` =$_POST[ph],`mail`='$_POST[mail]',`qst`='$_POST[qst]',`ans`='$_POST[an]' where uid=$_SESSION[cid]";
//echo $sql;
mysql_query($sql,$con);

?>

<meta http-equiv="Refresh" content="0;URL=../.?message=Inserted Successfully"  />

</body>
</html>