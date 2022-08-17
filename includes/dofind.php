<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<form id="form1" name="form1" method="post" action="do_ins_prot_per.php">

<?php


$p1=$_POST['p1']; 
$p2=$_POST['p2']; 


$id=explode('-',$p1);
$id1=explode('-',$p2);




$sq="select * from protein where pid like '$id[0]'";

$re=mysql_query($sq,$con);

$rw=mysql_fetch_array($re);


$seq=str_split($rw['seq']);


for($j=0;$j<=20;$j++)
{
	
	$count[$j]=0;
	
	//echo $count[$j];
}

for($i=0;$i<strlen($rw['seq']);$i++)
{
	if($seq[$i]=='a' || $seq[$i]=='A')
	{
		$count[0]++;
	}
	else if($seq[$i]=='c' || $seq[$i]=='C')
	{
		$count[1]++;
	}
	else if($seq[$i]=='d' || $seq[$i]=='D')
	{
		$count[2]++;
	}
	else if($seq[$i]=='e' || $seq[$i]=='E')
	{
		$count[3]++;
	}
	else if($seq[$i]=='f' || $seq[$i]=='F')
	{
		$count[4]++;
	}
	else if($seq[$i]=='g' || $seq[$i]=='G')
	{
		$count[5]++;
	}
	else if($seq[$i]=='h' || $seq[$i]=='H')
	{
		$count[6]++;
	}
	else if($seq[$i]=='i' || $seq[$i]=='I')
	{
		$count[7]++;
	}
	else if($seq[$i]=='k' || $seq[$i]=='K')
	{
		$count[8]++;
	}
	else if($seq[$i]=='l' || $seq[$i]=='L')
	{
		$count[9]++;
	}
	else if($seq[$i]=='m' || $seq[$i]=='M')
	{
		$count[10]++;
	}
	else if($seq[$i]=='n' || $seq[$i]=='N')
	{
		$count[11]++;
	}
	else if($seq[$i]=='p' || $seq[$i]=='P')
	{
		$count[12]++;
	}
	else if($seq[$i]=='q' || $seq[$i]=='Q')
	{
		$count[13]++;
	}
	else if($seq[$i]=='r' || $seq[$i]=='R')
	{
		$count[14]++;
	}
	else if($seq[$i]=='s' || $seq[$i]=='S')
	{
		$count[15]++;
	}
	else if($seq[$i]=='t' || $seq[$i]=='T')
	{
		$count[16]++;
	}
	else if($seq[$i]=='v' || $seq[$i]=='V')
	{
		$count[17]++;
	}
	else if($seq[$i]=='w' || $seq[$i]=='W')
	{
		$count[18]++;
	}
	else if($seq[$i]=='y' || $seq[$i]=='Y')
	{
		$count[19]++;
	}
	
}


for($j=0;$j<=20;$j++)
{
	
	//$count[$j]=0;
	echo "\n";
//	echo $count[$j];
}

?>
<center><strong>Similarity Analysis</strong></center>
<table width="834" align="center">
    <tr>
      <td width="91"><strong>Protein 1</strong></td>
      <td width="35">&nbsp;</td>
      <td width="526"><?php echo $_POST['p1'];  ?> </td>
      <td width="57"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><strong>Sequeunce</strong></td>
      <td align="justify">&nbsp;</td>
      <td align="justify"> <?php echo $rw['seq']; ?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><strong>Size</strong></td>
      <td>&nbsp;</td>
      <td><?php echo $rw['size']; ?></td>
      <td>&nbsp;</td>
    </tr>
    
    <tr>
      <td colspan="3">&nbsp;<hr /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><strong>Protein 2</strong></td>
      <td>&nbsp;</td>
      <td><?php echo $_POST['p2'];  ?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
    <?php
	
	


$sq1="select * from protein where pid like '$id1[0]'";

$re1=mysql_query($sq1,$con);

$rw1=mysql_fetch_array($re1);


$seq1=str_split($rw1['seq']);

for($j=0;$j<=20;$j++)
{
	
	$count1[$j]=0;
	
	//echo $count1[$j];
}

for($i=0;$i<strlen($rw1['seq']);$i++)
{
	if($seq1[$i]=='a' || $seq1[$i]=='A')
	{
		$count1[0]++;
	}
	else if($seq1[$i]=='c' || $seq1[$i]=='C')
	{
		$count1[1]++;
	}
	else if($seq1[$i]=='d' || $seq1[$i]=='D')
	{
		$count1[2]++;
	}
	else if($seq1[$i]=='e' || $seq1[$i]=='E')
	{
		$count1[3]++;
	}
	else if($seq1[$i]=='f' || $seq1[$i]=='F')
	{
		$count1[4]++;
	}
	else if($seq1[$i]=='g' || $seq1[$i]=='G')
	{
		$count1[5]++;
	}
	else if($seq1[$i]=='h' || $seq1[$i]=='H')
	{
		$count1[6]++;
	}
	else if($seq1[$i]=='i' || $seq1[$i]=='I')
	{
		$count1[7]++;
	}
	else if($seq1[$i]=='k' || $seq1[$i]=='K')
	{
		$count1[8]++;
	}
	else if($seq1[$i]=='l' || $seq1[$i]=='L')
	{
		$count1[9]++;
	}
	else if($seq1[$i]=='m' || $seq1[$i]=='M')
	{
		$count1[10]++;
	}
	else if($seq1[$i]=='n' || $seq1[$i]=='N')
	{
		$count1[11]++;
	}
	else if($seq1[$i]=='p' || $seq1[$i]=='P')
	{
		$count1[12]++;
	}
	else if($seq1[$i]=='q' || $seq1[$i]=='Q')
	{
		$count1[13]++;
	}
	else if($seq1[$i]=='r' || $seq1[$i]=='R')
	{
		$count1[14]++;
	}
	else if($seq1[$i]=='s' || $seq1[$i]=='S')
	{
		$count1[15]++;
	}
	else if($seq1[$i]=='t' || $seq1[$i]=='T')
	{
		$count1[16]++;
	}
	else if($seq1[$i]=='v' || $seq1[$i]=='V')
	{
		$count1[17]++;
	}
	else if($seq1[$i]=='w' || $seq1[$i]=='W')
	{
		$count1[18]++;
	}
	else if($seq1[$i]=='y' || $seq1[$i]=='Y')
	{
		$count1[19]++;
	}
	
}

	
	?>
    
    
    <tr>
      <td><strong>Sequence</strong></td>
      <td>&nbsp;</td>
      <td align="justify"><?php  echo $rw1['seq'];?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><strong>Size</strong></td>
      <td>&nbsp;</td>
      <td><?php echo $rw1['size']; ?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;<hr /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <center>
<p><strong>Count Details</strong> <strong>of Protein 1</strong></p></center>
<table width="732" align="center">
  <tr>
  <td width="53"><strong>Seq</strong></td>
    <td width="29">A</td>
    <td width="26">C</td>
    <td width="33">D</td>
    <td width="24">E</td>
    <td width="37">F</td>
    <td width="31">G</td>
    <td width="29">H</td>
    <td width="28">I</td>
    <td width="27">K</td>
    <td width="31">L</td>
    <td width="29">M</td>
    <td width="31">N</td>
    <td width="26">P</td>
    <td width="27">Q</td>
    <td width="27">R</td>
    <td width="35">S</td>
    <td width="28">T</td>
    <td width="28">V</td>
    <td width="32">W</td>
    <td width="33">Y</td>
    
  </tr>
  <tr>
    <td><strong>Count</strong></td>
    
    <?php
	$s1="";
	for($i=0;$i<20;$i++)
	{
		$s1=$s1.$count[$i]." ";
		?>
        <td><?php echo $count[$i];   ?></td>
        <?php
	}
	?>
    
   
  </tr>
</table>
<p>&nbsp;</p>

<center>
<p><strong>Count Details of Protein 2</strong></p></center>

<table width="732" align="center">
  <tr>
  <td width="53"><strong>Seq</strong></td>
    <td width="29">A</td>
    <td width="26">C</td>
    <td width="33">D</td>
    <td width="24">E</td>
    <td width="37">F</td>
    <td width="31">G</td>
    <td width="29">H</td>
    <td width="28">I</td>
    <td width="27">K</td>
    <td width="31">L</td>
    <td width="29">M</td>
    <td width="31">N</td>
    <td width="26">P</td>
    <td width="27">Q</td>
    <td width="27">R</td>
    <td width="35">S</td>
    <td width="28">T</td>
    <td width="28">V</td>
    <td width="32">W</td>
    <td width="33">Y</td>
    
  </tr>
  <tr>
    <td><strong>Count</strong></td>
    
    <?php
	$m="";
	for($i=0;$i<20;$i++)
	{
		$m=$m.$count1[$i]." ";
		?>
        <td><?php echo $count1[$i];   ?></td>
        <?php
	}
	?>
    
  </tr>
</table>

<p>
  <?php

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
echo "<h2><br><br><center>Percenatage of Similarity=$c %</center></h2>";


?>
</p>
<p>&nbsp;</p>

<?php
$a="update protein set count='$s1' where pid like '$_POST[p1]'";



$b="update protein set count='$m' where pid like '$_POST[p2]'";



mysql_query($a,$con);


mysql_query($b,$con);

	
	//Checking

$a1="select * from similarity where (pid1 like '$p1' or pid1 like '$p2') and (pid2 like '$p1' or pid2 like '$p2')";
$b1=mysql_query($a1,$con);

if(!($c1=mysql_fetch_array($b1)))
{
	

//end checking
	
?>



<p><center>
  <a href=".?action=do_ins_prot_per&id1=<?php echo $id[0]; ?>&id2=<?php echo $id1[0]; ?>&p=<?php echo $c; ?>">SAVE RESULT</a></center>
</p>
<?php
}
?>
<p>&nbsp;</p>
</form>
</body>
</html>