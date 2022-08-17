<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action=".?action=p1">
  <table width="453">
    <tr>
      <td width="87">protein_id</td>
      <td width="354"><span id="spryselect1">
        <label for="pid"></label>
        <select name="pid" id="pid">
          <option value="-1">SELECT</option>
           <?php
		
		 	 $sql="select * from protein where type like 'Protein'";
			$res=mysql_query($sql,$con);
			while($row=mysql_fetch_array($res))
			{
		  
		  ?>
           <option value="<?php  echo $row['pid'] ?>"> <?php  echo $row['pid']." - ".$row['pname'];?></option>
          
          <?php
			}
			$id=explode('-',$_POST['pid']);
			echo $id[0];
			
		  ?>
          
          
        </select>
        <span class="selectInvalidMsg">Please select a valid item.</span><span class="selectRequiredMsg">Please select an item.</span></span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="Submit" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p></p>
  <?php
  		if(isset($_POST['submit']))
		{
			$sql="select * from similarity where (pid1='$id[0]' or pid2='$id[0]') and per>=10";
			$res=mysql_query($sql,$con);
			
			if(mysql_num_rows($res)>0)
			{
			//echo $sql;
			echo "<h3>You are enterd Protein $_POST[pid]</h3><br>"; 
  ?>
  
  
  <table width="732" border="1">
    <tr>
      <td width="133">protein_id</td>
      <td width="236">protein name</td>
      <td width="108">Percentage</td>
      <td width="227">organism</td>
    </tr>
    
    <?php
	while($row=mysql_fetch_array($res))
	{
		?>
    <tr>
    
      <td>
	  <?php if($row['pid1']==$_POST['pid'])
	  	{
		  echo $row['pid2'];
		  $p=$row['pid2'];
	 }
	  else{
		  echo $row['pid1'];
		  $p=$row['pid1'];
		  }  
	  
	  ?>
      
      </td>
      <?php
	   $sql2="select * from protein where pid like '$p'";
			$res2=mysql_query($sql2,$con);
			$row2=mysql_fetch_array($res2);
			
			
			$sql3="select * from organism where oid like '$row2[oid]'";
			$res3=mysql_query($sql3,$con);
			$row3=mysql_fetch_array($res3);
			
	  ?>
      
      <td><?php echo $row2['pname']; ?></td>
      <td><?php echo $row['per']; ?></td>
      <td><?php echo $row3['name']; ?></td>
    </tr>
    <?php
	}
	?>
    
  </table>
  
  <?php
			}
			else
			echo "<h3>No Similar Protein Found ! !</h3>";
		}
		?>
</form>
<script type="text/javascript">
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {validateOn:["change"], invalidValue:"-1"});
</script>
</body>
</html>