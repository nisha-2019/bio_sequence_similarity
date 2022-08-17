<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p>
    <?php
$p1=$_POST['p1']; 

$id=explode('-',$p1);

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
    
    
  </p>
  <table width="834" align="center">
    <tr>
      <td width="91"><strong>Protein 1</strong></td>
      <td width="35">&nbsp;</td>
      <td width="526"><?php echo $_POST['p1'];  ?></td>
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
      <td align="justify"><?php echo $rw['seq']; ?></td>
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
      <td colspan="3">&nbsp;
        <hr color="#990000" /></td>
      <td>&nbsp;</td>
    </tr>
   
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <table width="741" align="center">
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
  <p>&nbsp;</p>
  
  
  
  
  
</form>
</body>
</html>