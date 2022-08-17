<html>
<body>

<?php

$sql="select * from protein where pid like '$_GET[id]'";

$res=mysql_query($sql,$con);

if($row=mysql_fetch_array($res))
{
	?>
    
    <form id="form2" name="form2" method="post" action="">
  <center><p><strong>Protein Details</strong></p></center>
  <table width="866" align="center">
  
  <?php
  
 	 $sql1="select * from organism where oid=$row[oid]";
	$res1=mysql_query($sql1,$con);

	$row1=mysql_fetch_array($res1)
	
  ?>
  
    <tr>
      <td width="101"><strong>Protein Id</strong></td>
      <td width="10">&nbsp;</td>
      <td width="292"><?php echo $row['pid'];?> </td>
      <td width="10">&nbsp;</td>
      <td width="65"><strong>Organism</strong></td>
      <td width="360"><?php echo $row1['genus']." ".$row1['specius'];?></td>
    </tr>
    <tr>
      <td><strong>Protein Name</strong></td>
      <td>&nbsp;</td>
      <td><?php echo $row['pname'];?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
    </tr>
  
    <tr>
      <td><strong>Sequence</strong></td>
      <td>&nbsp;</td>
      <td colspan="4" align="justify"><?php echo $row['seq'];?> </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
    <?php
	
	$st=str_split($row['seq']);
	//print_r($st);
	$a=0;
	$g=0;
	$c=0;
	$t=0;
	for($i=0;$i<strlen($row['seq']);$i++)
	{
		$seq[$i]=$st[$i];
		if($seq[$i]=='a' || $seq[$i]=='A')
		$a++;
		if($seq[$i]=='g' || $seq[$i]=='G')
		$g++;
		if($seq[$i]=='c' || $seq[$i]=='C')
		$c++;
		
		if($seq[$i]=='t' || $seq[$i]=='T')
		$t++;
		else if($seq[$i]=='u' || $seq[$i]=='U')
		$t++;
	}
	
	?>
    
   
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
 
  <p><a href=".?action=view_prot" title="Back" ><img src="./proimg/arrow_left.png" width="60"  height="60" /></a></p>
</form>
	<?php
}

?>
</body>
</html>