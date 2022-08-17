<?php
session_start();
include('../database/dbconnect.php');

$sql="SELECT * FROM  `login` WHERE  `user` LIKE '$_POST[uname]' AND `pass`=md5('$_POST[pass]')";

$resset=mysql_query($sql,$con);

if(mysql_num_rows($resset)>0)
{
    $res=mysql_fetch_array($resset);
    $_SESSION['username']=$res['user'];
    $_SESSION['role']=$res['type'];
	
    $sql1="SELECT * FROM `public` WHERE `username` LIKE '$_SESSION[username]'";
//	echo $sql1;
	
    $resset1=mysql_query($sql1,$con);

    if(mysql_num_rows($resset1)>0)
    {
        $u=mysql_fetch_array($resset1);
        $_SESSION['cid']=$u['uid'];
    }
	if($res['type']=='researcher')
	{				
	$sql2="SELECT * FROM `reasercher` WHERE  `uid` LIKE '$_SESSION[cid]'";
	$set2=mysql_query($sql2,$con);
	
	
	
	if(mysql_num_rows($set2)>0)
	{
		$d=mysql_fetch_array($set2);
	    $_SESSION['rid']=$d['rid']; 
		
		//echo $_SESSION['rid'];
	
	}
	
	
	}
	
    
}
if($_POST['uname']=='admin')
{
	 $_SESSION['role']='admin';
	 $_SESSION['username']='admin';
}


if(isset($_SESSION['username']))
{
	//echo "Welcome $_SESSION[username]";
	?>
   <meta http-equiv="Refresh" content="0;URL=../.?message=You are Login Successfully" /> 
    <?php 
}
else
{

?>	
<meta http-equiv="Refresh" content="0;URL=../.?message=Login Failed"  /> 
 

<?php
}
?>









