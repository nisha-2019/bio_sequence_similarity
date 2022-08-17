<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php

require '../database/dbconnect.php';


$sql1="insert into login(user,pass,type)values('$_POST[user]',md5('$_POST[pass]'),'researcher')";
$res1=mysql_query($sql1,$con);

if(mysql_affected_rows($con)>0)
{

$sql="INSERT INTO `public`(
`fname` ,
`lname` ,
`ph` ,
`mail` ,
`username`,
`qst`,
`ans`

)VALUES('$_POST[fname]','$_POST[lname]',$_POST[ph],'$_POST[mail]','$_POST[user]','$_POST[sq]','$_POST[sa]')";

$res=mysql_query($sql,$con);

$id=mysql_insert_id($con);
 
 //echo $id;




$sql2="insert into reasercher(uid,area,guide,gdesig,paper,rjob) values($id,'$_POST[spe]','$_POST[gd]','$_POST[deg]',$_POST[num],'$_POST[rjob]')";
$r2=mysql_query($sql2,$con);

?>

<meta http-equiv="Refresh" content="0;URL=../.?message=New Researcher Added"  />

<?php
}
else
{
?>
<meta http-equiv="Refresh" content="0;URL=../.?message=Registration Failed! Try Again !!"  />
<?php
}
?>
<body>
</body>
</html>

