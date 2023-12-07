<!doctype html>

<html>
<head>
<title>Untitled</title>
<meta charset="utf-8">
</head>
<body>
<?php 



$a = 2;
//$c="Impacta";

$b = $c;
echo "<hr>";
$b = (isset($c))?($c):("Não tem variavel \$c");
echo $b;

echo "<hr>";
$d = $c ?? "Não";
echo $d;
?>
</body>
</html>
