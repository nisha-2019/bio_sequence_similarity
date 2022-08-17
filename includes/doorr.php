<?php
require '../database/dbconnect.php';
$sql="INSERT INTO `organism` (
`name` ,
`genus` ,
`specius` 
)
VALUES (
'$_POST[name]',  '$_POST[genus]',  '$_POST[specs]'
)";

$res=mysql_query($sql,$con);
if(mysql_affected_rows($con)>0)
{

?>

<meta http-equiv="Refresh" content="0;URL=../.?message=New Organism Added"  />
<?php
}
else
{
	
	?>
	<meta http-equiv="Refresh" content="0;URL=../.?message=Already Exist !"  />
    <?php
}
?>