<?php


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<center><h3>Sequence Alignment</h3></center>



<?php

$match=1;
$mismatch=-1;
$gap=-2;

$seq1=str_split($_POST['s1']);
$seq2=str_split($_POST['s2']);


$r=strlen($_POST['s1'])+1;
$c=strlen($_POST['s2'])+1;


$score[0][0]=0;
$bk[0][0]="0-0";

for($i=1;$i<$c;$i++)
{
	$score[0][$i]=$score[0][$i-1]+$gap;
	$bk[0][$i]="0-0";

}

for($i=1;$i<$r;$i++)
{
	$score[$i][0]=$score[$i-1][0]+$gap;
	$bk[$i][0]="0-0";
    
}

for($i=0;$i<$r;$i++)
{
	for($j=0;$j<$c;$j++)
	{
		if($i==0 || $j==0)
		{
			
		}
		else
		{
			$k1=$score[$i][$j-1]+$gap;
			
			$k2=$score[$i-1][$j]+$gap;
			
			if($seq1[$i-1]==$seq2[$j-1])
			{
				$k3=$score[$i-1][$j-1]+$match;
				
			}
			else
				$k3=$score[$i-1][$j-1]+$mismatch;
			
			
			
			$score[$i][$j]=max($k1,$k2,$k3);
			$m=max($k1,$k2,$k3);
			
			if($m==$k1)
			{
				$bk[$i][$j]=$i."-".($j-1);
			}
			else if($m==$k2)
			{
				$bk[$i][$j]=($i-1)."-".$j;
			}
			else if($m==$k3)
				$bk[$i][$j]=($i-1)."-".($j-1);
			
			
		}
	}
}


$s=0;

for($i=0;$i<$r;$i++)
{
	for($j=0;$j<$c;$j++)
	{
		//echo $score[$i][$j]."&nbsp;&nbsp;&nbsp;";
		$s=max($s,$score[$i][$j]);
		$mi=$i;
		$mj=$j;
	}
	//echo "<br>";
}
//echo "Back<br><br>";
for($i=0;$i<$r;$i++)
{
	for($j=0;$j<$c;$j++)
	{
		//echo $bk[$i][$j]."&nbsp;&nbsp;&nbsp;";
	}
	//echo "<br>";
}

//echo $s;


for($b=0,$t=0;$t<$r-1;$t++)
{
		
	$p=explode('-',$bk[$mi][$mj]);
	
	//echo "<br> mi=$mi and mj=$mj";
	
	if($p[0]<$mi && $p[1]==$mj)//above
	{
		$align[0][$b]=$seq1[$mi-1];
		$align[1][$b]="--";
				
	}
	else if($p[1]<$mj && $p[0]==$mi)//side
	{
		$align[0][$b]="--";
		$align[1][$b]=$seq2[$mj-1];
		
	}
	else
	{
		    if($mi==0 && $mj==0)
			{
				$align[1][$b]="--";
				$align[0][$b]="--";
				
			}
			else if($mi==0 && $mj!=0)
			{
				$align[0][$b]="--";
				$align[1][$b]=$seq2[$mj-1];
			}
			else if($mi!=0 && $mj==0)
			{
				$align[1][$b]="--";
				$align[0][$b]=$seq1[$mi-1];
			}
			else
			{	
			$align[0][$b]=$seq1[$mi-1];
			$align[1][$b]=$seq2[$mj-1];
			}
	}
	$b++;
	
	//echo "<br><<>> $mi-$mj====$p[0]-$p[1]";
	
	
	
	$mi=$p[0];
	$mj=$p[1];
		
}
echo "<br>";


//Alignment 

echo "<p style=font-size:18px;color:#C00;font-weight:500;>";
for($a=0;$a<2;$a++)
{
	for($d=$b-1;$d>=0;$d--)
	{
		
		echo strtoupper($align[$a][$d])."&nbsp;&nbsp;&nbsp;&nbsp;";	
		
	}
	echo "<br><br>";
}

echo "</p>";


?>



</body>
</html>