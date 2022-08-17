<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
require '../database/dbconnect.php';
//echo $_POST['fn'];
$sql="update public set `fname`='$_POST[fn]',`lname`='$_POST[ln]',`ph` =$_POST[ph],`mail`='$_POST[mail]',`qst`='$_POST[qs]',`ans`='$_POST[an]' where uid=$_SESSION[cid]";
//echo $sql;
mysql_query($sql,$con);


$sql1="update `reasercher` set  `area`='$_POST[area]',`guide`='$_POST[gd]',`gdesig`='$_POST[desgnation]',`paper` =$_POST[paper],rjob='$_POST[oc]' where rid=$_SESSION[rid]";

//echo $sql1;
mysql_query($sql1,$con);


?>

<meta http-equiv="Refresh" content="0;URL=../.?message=Edited Successfully"  />
<body>
</body>
</html>