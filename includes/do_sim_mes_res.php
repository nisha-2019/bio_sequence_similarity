<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form2" name="form2" method="post" action="">
  <font size="+1">
  <p>Similarity Analysis using <font color="#0033FF"> <?php echo strtoupper($_POST['h1']); ?></font>&nbsp;</p>
  </font>
  <br />
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

?>
  
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
    
    
  <table width="900" align="center">
    <tr>
      <td width="99"><b>Protein 1</b></td>
      <td width="341"><?php echo $_POST['p1'];  ?></td>
      <td width="132"><b>Protein Name 2</b></td>
      <td width="196"><?php echo $rw['pname']; ?></td>
      <td width="108">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="3" align="justify">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><b>sequence</b></td>
      <td colspan="3" align="justify"> <?php echo $rw['seq']; ?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5">&nbsp;<hr  color="#990000"/></td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><b>Protein 2</b></td>
      <td><?php echo $_POST['p2'];  ?></td>
      <td><b>Protein Name 2</b></td>
      <td><?php echo $rw1['pname']; ?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="3">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><b>sequence</b></td>
      <td colspan="3"><?php  echo $rw1['seq'];?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="3">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
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

    
    $similarity=0;
	
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
	
	//Checking Process
	if($_POST['h1']=="jaccard")
	{
			$y2=$m+$n-$x;
			if($y2!=0)
			$similarity=$x/$y2;
	
	}
	else if($_POST['h1']=="dice")
	{
		
		$x1=$x*2;
		$y1=$m+$n;
		if($y1!=0)
		$similarity=$x1/$y1;
		
	}
	else if($_POST['h1']=="cosine")
	{
		$y3=sqrt(($m*$n));
		if($y3!=0)
		$similarity=$x/$y3;
	}
	else if($_POST['h1']=="overlap")
	{
		$y4=min($m,$n);
		if($y4!=0)
		$similarity=$x/$y4;
	}
	
	?>
    <tr>
      <td><b>Similarity</b></td>
      <td colspan="3"> <font face="Times New Roman, Times, serif"> <?php echo $similarity; ?></font></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="3">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="3">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4"><a href=".?action=sim_mes">Check Another Measure</a></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4"></td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>


</body>
</html>