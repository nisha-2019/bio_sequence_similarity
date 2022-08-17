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
	}
	
if($_POST['type']=="dna")
{

for($i=0;$i<strlen($_POST['s1']);$i++)
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
	else if($seq[$i]==" ")
	{
		str_replace(' ','',$seq[$i]);
	}
	else
	{
		
		?>
        <script>
		alert("Invalid sequence");
		location.href=".?action=seq_analysis";
		</script>
        <?php
		
	}
}

}
else
{
	
		for($i=0;$i<strlen($_POST['s1']);$i++)
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
	else if($seq[$i]=='u' || $seq[$i]=='U')
	{
		$count[3]++;
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
		location.href=".?action=seq_analysis";
		</script>
        <?php
		
	}
}

}

//sequence 2

$seq1=str_split($_POST['s2']);
	
	
	for($j=0;$j<=20;$j++)
	{
		$count1[$j]=0;
	}
	
	
if($_POST['type']=="dna")
{

for($i=0;$i<strlen($_POST['s2']);$i++)
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
	else if($seq1[$i]==" ")
	{
		str_replace(' ','',$seq1[$i]);
	}
	else
	{
		
		?>
        <script>
		alert("Invalid sequence");
		location.href=".?action=seq_analysis";
		</script>
        <?php
		
	}
	
}

}
else
{
	for($i=0;$i<strlen($_POST['s2']);$i++)
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
	else if($seq1[$i]=='u' || $seq1[$i]=='U')
	{
		$count1[3]++;
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
		location.href=".?action=seq_analysis";
		</script>
        <?php
		
	}
	
}
}

  ?>

<form id="form1" name="form1" method="post" action="">
  <p>Similarity Result with Various Measures</p>
  <p>&nbsp;</p>
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
</form>
</body>
</html>