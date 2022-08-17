<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
$o1=$_POST['o1'];
$o2=$_POST['o2'];
$t=$_POST['type'];

if($t=='p')
{
	echo "adssfs";
?>
<script>
location.href="..?action=find_similarity&o1=<?php echo $o1; ?>&o2=<?php echo $o2; ?>";
</script>
<?php
}
else if($t=='d')
{
	?>
    <script>
	location.href="..?action=find_simi_dna&o1=<?php echo $o1; ?>&o2=<?php echo $o2; ?>";
	</script>
    <?php
	
}
else if($t=='r')
{
	?>
     <script>
	location.href="..?action=find_similarity_rna&o1=<?php echo $o1; ?>&o2=<?php echo $o2; ?>";
	</script>
    <?php
	
}
?>
<body>
</body>
</html>