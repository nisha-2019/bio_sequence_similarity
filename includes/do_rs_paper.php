<?php
session_start();
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


$doc=$_FILES["up"]["name"];
  move_uploaded_file($_FILES["up"]["tmp_name"],
      "paper/".$doc);

$sql="INSERT INTO `rpaper` (
`rid` ,
`place` ,
`date` ,
`at`,
`jr` ,
`file`,
`tt`
)
VALUES (
$_SESSION[cid] , '$_POST[place]', '$_POST[date]', '$_POST[at]','$_POST[journal]','$doc','$_POST[tt]'
)";
//echo $sql;
mysql_query($sql,$con);
?>
<meta http-equiv="Refresh" content="0;URL=../.?action=rs_paper&message=Uploaded Successfully"  /> 
</body>
</html>