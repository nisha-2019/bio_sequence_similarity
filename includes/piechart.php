<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
   <?php
 
 include 'libchart-1.3/libchart/libchart/classes/libchart.php';

  $pie = new PieChart();
   
  $pie->setTitle( "ChartLogix Pie Chart" );
   
  $pie->addData( 'Bananas', 420, 'FFCC00' );
  $pie->addData( 'Apples', 400, '99FF00' );
  $pie->addData( 'Strawberries', 210, 'FF6666' );
  $pie->addData( 'Grapes', 350, '009900' );
  $pie->addData( 'Plums', 100, '9900CC' );
  $pie->addData( 'Others', 190, 'AAAAAA' );
   
  $pie->drawPNG( 500, 400 );
?>
</body>
</html>