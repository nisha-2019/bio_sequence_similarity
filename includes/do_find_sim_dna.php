<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <center>
    <p><strong>DNA SIMILARITY</strong>  </p></center>
  
  <?php


	$r1=$_POST['r1']; 
	$r2=$_POST['r2']; 


	$id=explode('-',$r1);


	$sq="select * from protein where pid like '$id[0]'";
	$re=mysql_query($sq,$con);
	$rw=mysql_fetch_array($re);


	$seq=str_split($rw['seq']);
	
	
	for($j=0;$j<=20;$j++)
	{
		$count[$j]=0;
	}

for($i=0;$i<strlen($rw['seq']);$i++)
{
	if($seq[$i]=='a' || $seq[$i]=='A')
	{
		$count[0]++;
	}
	else if($seq[$i]=='g' || $seq[$i]=='G')
	{
		$count[1]++;
	}
	else if($seq[$i]=='c' || $seq[$i]=='C')
	{
		$count[2]++;
	}
	else if($seq[$i]=='t' || $seq[$i]=='T')
	{
		$count[3]++;
	}
}

  ?>
  
  <table width="744" align="center">
    <tr>
      <td width="140">DNA1</td>
      <td width="26">&nbsp;</td>
      <td width="327"><?php echo $rw['pid'];  ?></td>
      <td width="231">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Sequence</td>
      <td>&nbsp;</td>
      <td colspan="2"><?php echo $rw['seq'];  ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4"><hr /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
    <?php
	
	$id1=explode('-',$r2);

	$sq1="select * from protein where pid like '$id1[0]'";
	$re1=mysql_query($sq1,$con);
	$rw1=mysql_fetch_array($re1);

	$seq1=str_split($rw1['seq']);
	
	
	for($j=0;$j<=20;$j++)
	{
		$count1[$j]=0;
	}

for($i=0;$i<strlen($rw1['seq']);$i++)
{
	if($seq1[$i]=='a' || $seq1[$i]=='A')
	{
		$count1[0]++;
	}
	else if($seq1[$i]=='g' || $seq1[$i]=='G')
	{
		$count1[1]++;
	}
	else if($seq1[$i]=='c' || $seq1[$i]=='C')
	{
		$count1[2]++;
	}
	else if($seq1[$i]=='t' || $seq1[$i]=='T')
	{
		$count1[3]++;
	}
}

  ?>
    
    
    
    <tr>
      <td>DNA 2</td>
      <td>&nbsp;</td>
      <td><?php echo $rw1['pid'];  ?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="23">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Sequence</td>
      <td>&nbsp;</td>
      <td colspan="2"><?php echo $rw1['seq'];  ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4"><hr /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <center>
    <p><strong>Count Details of DNA 1</strong>  </p>
  </center>
  <table width="471" align="center">
    <tr>
      <td width="103"><strong>Sequence</strong></td>
      <td width="94">A</td>
      <td width="90">G</td>
      <td width="76">C</td>
      <td width="84">T</td>
    </tr>
    <tr>
      <td><strong>Count</strong></td>
      <?php
	  for($i=0;$i<4;$i++)
	  {
		  ?>
      <td><?php echo $count[$i]; ?></td>
      <?php
	  }
      ?>
    </tr>
  </table>
  <center>
  <p>&nbsp;</p>
  <p><strong>Count Details of DNA 2</strong> </p>
  </center>
  <table width="468" align="center">
    <tr>
      <td width="102"><strong>Sequence</strong></td>
      <td width="89">A</td>
      <td width="90">G</td>
      <td width="72">C</td>
      <td width="76">T</td>
    </tr>
    <tr>
      <td><strong>Count</strong></td>
      
       <?php
	  for($i=0;$i<4;$i++)
	  {
		  ?>
      <td><?php echo $count1[$i]; ?></td>
      <?php
	  }
      ?>
    </tr>
  </table>
  <?php
  //similarity calculation
  
 //length of sequnce

	$l1=strlen($rw['seq']);
	$l2=strlen($rw1['seq']);

	//normalizing sequence
	if($l1>$l2)
	{
	$r=$l1/$l2;
	
		for($k=0;$k<20;$k++)
		{
		$count[$k]=round($count[$k]*$r);
		}
	
	}
	else
	{
	$r=$l2/$l1;

		for($k=0;$k<20;$k++)
		{
		$count1[$k]=round($count1[$k]*$r);
		}
}

//matching
$c=0;
for($k=0;$k<20;$k++)
{
	//$sim[$k]=round(($count[$k]+$count1[$k])/2);
	
	$stot=$count[$k]+$count1[$k];
	$ratio=$stot/10;
	$sdiff=abs($count[$k]-$count1[$k]);
	if($sdiff<=$ratio)
		$sim[$k]=1;
	else
		$sim[$k]=0;
	
	
	//echo $k. "--". $sim[$k]."<br>";
}
for($i=0;$i<20;$i++)
{
	if($sim[$i]==1)
		$c++;	
}

$c=($c/20)*100;
echo "<h2><br><center>Percenatage of Similarity=$c %</center></h2>";


?>
  
  <p>&nbsp;</p><center>
  <a href="includes/do_ins_dna_per.php?id1=<?php echo $id[0]; ?>&id2=<?php echo $id1[0]; ?>&p=<?php echo $c; ?>">SAVE RESULT</a></center>
  <p>&nbsp;</p>
</form>
</body>
</html>


