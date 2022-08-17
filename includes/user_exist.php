<?php
require '../database/dbconnect.php';

$sql="select * from `login` where `user` like '$_GET[user]'";
$resset=mysql_query($sql,$con);

if(mysql_num_rows($resset)>0)
{
  echo '<div style="color:#831a1a">User Exist</div><script> $("#user").css({"background-color":"#fbb3bd"});</script>';
}
else
  echo '<div style="color:#20e520">user name available</div><script> $("#user").css({"background-color":"#baf3ba"});</script>';

//echo $sql;
?>

