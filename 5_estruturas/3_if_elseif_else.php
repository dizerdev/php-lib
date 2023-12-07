<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$nota = 10;
if($nota >= 7){
	echo "Aprovado<br>";
}elseif($nota >= 5 && $nota <7){
	echo "Recuperação<br>";	
}else{
	echo "Reprovado<br>";	
}
echo "<hr>";
	
if($nota >= 7):
	echo "Aprovado<br>";
elseif($nota >= 5 && $nota <7):
	echo "Recuperação<br>";	
else:
	echo "Reprovado<br>";	
endif;
echo "<hr>";


if($nota >= 7) echo "Aprovado<br>";
elseif($nota >= 5 && $nota <7)	echo "Recuperação<br>";	
else echo "Reprovado<br>";	

echo "<hr>";
?>
</body>
</html>