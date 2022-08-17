<html>
<body>
<?php

require '../database/dbconnect.php';


 if($_POST['register'])
 {
  
  $sql =" INSERT INTO `public`(
`fname` ,
`lname` ,
`hname` ,
`city` ,
`street` ,
`dist` ,
`pin` ,
`gender` ,
`ph` ,
`mail` ,
`username`,
`qst`,
`ans`
)VALUES('$_POST[fname]', '$_POST[lname]', '$_POST[hname]', '$_POST[city]', '$_POST[street]', '$_POST[dist]', $_POST[pin],'$_POST[gender]',$_POST[ph],'$_POST[mail]','$_POST[user]','$_POST[qst]','$_POST[ans]')";
  
  $s="INSERT INTO `login` VALUES ('$_POST[user]',MD5('$_POST[pass]'),'user')";
  $k=mysql_query($s,$con);
  
  //echo $sql;

 }
  
 // echo $sql;
  
  if(mysql_affected_rows($con)>0)
  {
	
	 $res=mysql_query($sql,$con);
	  
     
?>
<meta http-equiv="Refresh" content="0;URL=../.?action=home&message=Your are registered Successfully" />

<?php
  }
  else
  {
	 ?>
    <meta http-equiv="Refresh" content="0;URL=../.?action=home&message=Registration Failed ! Try again!" />
     <?php 
	  
  }
  ?>
 </body>
 </html>