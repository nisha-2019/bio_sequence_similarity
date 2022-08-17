<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
$s="select * from protein where pid like '$_POST[type2]' and type like 'Protein'";
$g=mysql_query($s);
if(mysql_num_rows($g)>0)
{
?>


<form id="form1" name="form1" method="post" action="">

<p></p>

<?php
    //include the library
    include "libchart-1.3/libchart/libchart/classes/libchart.php";
 
    //new pie chart instance
    $chart = new PieChart( 500, 300 );
 
    //data set instance
    $dataSet = new XYDataSet();
    
    $query = "select * from protein where pid like '$_POST[type2]'";
 
    //execute the query
    $result =mysql_query( $query );
 
	$num_results=20;
 


for($j=0;$j<=20;$j++)
{
	
	$count[$j]=0;
	
	//echo $count[$j];
}
$rw=mysql_fetch_array($result);
$seq=str_split($rw['seq']);


?>
<table width="520">
  <tr>
    <td width="109"><b>Protein Id</b></td>
    <td width="337"><?php echo $rw['pid']; ?></td>
    <td width="58">&nbsp;</td>
  </tr>
  <tr>
    <td><b>Protein Name</b></td>
    <td><?php echo $rw['pname']; ?></td>
    <td>&nbsp;</td>
  </tr>
</table>
<br /><br />
<?php
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

$n[0]="Alanine - A";
$n[1]="Cysteine - C";
$n[2]="Aspartic Acid- D";
$n[3]="Glutamic acid - E";
$n[4]="Phenylalanine - F";
$n[5]="Glycine - G";
$n[6]="Histidine - H";
$n[7]="Isoleucine - I";
$n[8]="Lysine - K";
$n[9]="Leucine - L";
$n[10]="Methionine - M";
$n[11]="Asparagine - N";
$n[12]="Proline - P";
$n[13]="Glutamine - Q";
$n[14]="Arginine - R";
$n[15]="Serine - S";
$n[16]="Threonine - T";
$n[17]="Valine - V";
$n[18]="Tryptophan - W";
$n[19]="Tyrosine - Y";


$i=0;
    if( $num_results > 0){
    
		   while( $i<$num_results)
		   { 
		   
		  	 $a[$i]=($count[$i]/strlen($rw['seq']))*100;
           	 $dataSet->addPoint(new Point($n[$i], $a[$i]));
			 $i++;
           }
    
        //finalize dataset
        $chart->setDataSet($dataSet);
 
        //set chart title
        $chart->setTitle("Amino acid Combosition in a Protein ");
        
        //render as an image and store under "generated" folder
        $chart->render("libchart-1.3/libchart/demo/generated/1.png");
    
        //pull the generated chart where it was stored
        echo "<img alt='Pie chart'  src='libchart-1.3/libchart/demo/generated/1.png' style='border: 1px solid gray;' />";
    
    }
	else
    {
        echo "No Aminoacid found in the database.";
    }
?>


</form>

<?php
}
else
{
	echo "No Data Found";
}
?>
<br />
<br />
<a title="Back" onclick="goBack()"><img src="./proimg/arrow_left.png" width="60"  height="60" /></a>
</body>
</html>