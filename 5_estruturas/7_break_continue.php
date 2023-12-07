<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
echo"<hr>";

$parar = 20;
$cont = 1;
while($cont <= 50){
	echo "$cont, ";
	if($cont == $parar){
		break;
	}
	$cont++;
}
echo"<hr>";
#################################################
$pular = 4;
$cont = 1;
while($cont <= 50){
	if($cont == $pular){
		$cont++;
		continue;
	}
	echo "$cont, ";
	$cont++;
}
echo"<hr>";
?>
</body>
</html>