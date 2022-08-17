<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
</html>
<body>

<?php
require('../database/dbconnect.php');
	$sql="select * from public where username like '$_POST[user]' ";
	$res=mysql_query($sql,$con);
	if($row=mysql_fetch_array($res))
	{
		?>
        <script>
		location.href="..?action=qst&uname=<?php echo $_POST['user']; ?>";
        </script>
        <?php
	}
	else
	{
		?>
        <script>
		alert("Invalid Username");
		location.href="..?action=forgot";
		</script>
        <?php
	}
?>
<form id="form1" name="form1" method="post" action="">
  <table width="257">
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>