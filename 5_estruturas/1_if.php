<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$nota = 10;

// primeira sintaxe
if($nota == 10){
	echo "Parabéns, você tirou a nota máxima<br>";
}
echo "<hr>";

// outra sintaxe
if($nota == 10):
	echo "Parabéns, você tirou a nota máxima<br>";
endif;
echo "<hr>";

// outra sintaxe
if($nota == 10)
	echo "Parabéns, você tirou a nota máxima<br>";
echo "<hr>";

// outra sintaxe
if($nota == 10) echo "Parabéns, você tirou a nota máxima<br>";
echo "<hr>";
?>
</body>
</html>