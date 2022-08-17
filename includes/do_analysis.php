<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


<?php

$seq=str_split($_POST['s1']);

for($j=0;$j<=20;$j++)
{
	
	$count[$j]=0;
	
	//echo $count[$j];
}

for($i=0;$i<strlen($_POST['s1']);$i++)
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
	else if($seq[$i]==" ")
	{
		str_replace(' ','',$seq[$i]);
	}
	else
	{
		
		?>
        <script>
		alert("Invalid sequence");
		location.href=".?action=analysis";
		</script>
        <?php
		
	}
	
}
  

$seq1=str_split($_POST['s2']);

for($j=0;$j<=20;$j++)
{
	
	$count1[$j]=0;
	
	//echo $count1[$j];
}

for($i=0;$i<strlen($_POST['s2']);$i++)
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
	else if($seq1[$i]==" ")
	{
		str_replace(' ','',$seq1[$i]);
	}
	else
	{
		
		?>
        <script>
		alert("Invalid sequence");
		location.href=".?action=analysis";
		</script>
        <?php
		
	}
	
}

	
  
  ?>
  
<form id="form2" name="form2" method="post" action="">
  <p>Similarity Result with Various Measures</p>
  <font face="Times New Roman, Times, serif">
  <table width="761" align="center">
    <tr>
      <td>Sequence 1</td>
      <td colspan="2"><?php  echo strtoupper($_POST['s1']); ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Sequence 2</td>
      <td colspan="2"><?php  echo strtoupper($_POST['s2']); ?></td>
    </tr>
    
    
    <?php

//length of sequnce

$l1=strlen($_POST['s1']);
$l2=strlen($_POST['s2']);

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

    
    $d=0;
	$c=0;
	$j=0;
	$o=0;
	
	$x=0;
	$m=0;
	$n=0;
	
	for($a=0;$a<20;$a++)
	{
		$x=$x+($count[$a]*$count1[$a]);
			
	}
	for($a=0;$a<20;$a++)
	{
			$m=$m+($count[$a]*$count[$a]);
			$n=$n+($count1[$a]*$count1[$a]);
			
	}
	
	//Jaccard
		$y2=$m+$n-$x;
		if($y2!=0)
		$j=$x/$y2;
	
	//Dice
		$x1=$x*2;
		$y1=$m+$n;
		if($y1!=0)
		$d=$x1/$y1;
		
	
	//Cosine
		$y3=sqrt(($m*$n));
		if($y3!=0)
		$c=$x/$y3;
		
	//Overlap
		$y4=min($m,$n);
		if($y4!=0)
		$o=$x/$y4;
	
	
	?>
    
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="94"><b>Cosine</b></td>
      <td width="400"><?php echo $c; ?></td>
      <td width="251">&nbsp;</td>
    </tr>
    <tr>
      <td><b>Dice</b></td>
      <td><?php echo $d; ?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><b>Jaccard</b></td>
      <td><?php echo $j; ?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><b>Overlap</b></td>
      <td><?php echo $o; ?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  </font>
  <p>&nbsp;</p>
   <p><a  title="Back" onclick="goBack()"><img src="./proimg/arrow_left.png" width="60"  height="60" /></a></p>
</form>

</body>
</html>