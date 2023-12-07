<!doctype html>

<html>
<head>
<title>Untitled</title>
<meta charset="utf-8">
</head>
<body>

<?php 
//o operador de atribuição é o igual =

$nome = "Eduardo"; 
echo $nome;
echo "<hr>";
$nome = $nome . " Pretel";
echo $nome;
echo "<hr>";
$nome .= " Filho";//$nome = $nome . " Filho";
echo $nome;
echo "<hr>";

$total = 5;
echo $total;
echo "<hr>";
$total = $total + 3;
echo $total;
echo "<hr>";
$total += 4;//$total = $total + 4;
echo $total;
echo "<hr>";

$total **= 5;
echo $total;
/*
=
+=
-=
*=
/=
%=
.=
*/
 ?>
</body>
</html>