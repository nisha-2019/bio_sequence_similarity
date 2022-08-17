<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php

require '../database/dbconnect.php';

$sql="INSERT INTO `bio`.`bioinfo` (
`name` ,
`desc`
)
VALUES (
'$_POST[term]', '$_POST[des]'
)";

mysql_query($sql,$con);
//echo $sql;

if(mysql_affected_rows()>0)
{
?>
<body>
</body>
</html>

<meta http-equiv="Refresh" content="0;URL=../.?message=New Term Added"  />
<?php
}
else
{
	?>
    <meta http-equiv="Refresh" content="0;URL=../.?message=Term already exist&action=add_term"  />
    <?php
}?>