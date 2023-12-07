<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$nota = 6;
// primeira sintaxe
if($nota >= 7){
	echo "Aprovado<br>";
}else{
	echo "Reprovado<br>";	
}
echo "<hr>";

// outra sintaxe
if($nota >= 7):
	echo "Aprovado<br>";
else:
	echo "Reprovado<br>";
endif;
echo "<hr>";

// ultima sintaxe
if($nota >= 7) echo "Aprovado<br>";
else echo "Reprovado<br>";


?>
</body>
</html>