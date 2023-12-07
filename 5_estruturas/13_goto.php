<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
//O operador goto pode ser usado para pular para outra seção do programa.
$nota = 2;
if($nota == 10){
	goto ancora;
}
echo "<hr>";
echo "texto 1 <br>";

echo "<hr>";

ancora:
echo "texto pós ancora;"
?>
</body>
</html>