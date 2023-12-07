<!doctype html>

<html>
<head>
<title>Untitled</title>
<meta charset="utf-8">
</head>
<body>

<?php 
//Estudo de isset - testa (verifica) a existência da variavel

$a = 12;

echo "A \$a existe:";
echo isset($a);// Essa variável existe 
echo "<hr>";

echo "A \$b existe:";
echo isset($b);// Essa variável não existe 
echo "<hr>";

echo "A \$a não existe:";
echo !isset($a);// Essa variável existe
echo "<hr>";

echo "A \$b não existe:";
echo !isset($b);// Essa variável não existe


?>
</body>
</html>
