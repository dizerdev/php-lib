<!doctype html>
<html>
<head>
<title>Untitled</title>
<meta charset="utf-8">
</head>
<body>

<?php 
//Operador Aritmetico

$a = 70;
$b = 35;
$c = "2amigos";//conversão implicita
$d = "3animais";

//soma +
$total = $a + $b;
echo "Soma de \$a + \$b é igual a $total<hr>" ;
$total = $c + $d;
echo "Soma de \$c + \$d é igual a $total<hr>" ;

//subtração -
$total = $b - $a;
echo "Subtração de \$b - \$a é igual a $total<hr>";
$total = $d - $c;
echo "Subtração de \$d - \$c é igual a $total<hr>";

//multiplicação *
$total = $a * $b;
echo "Multiplicação de \$a * \$b é igual a $total<hr>";
$total = $c * $d;
echo "Multiplicação de \$c * \$d é igual a $total<hr>";

//divisão /
$total = $b / $a;
echo "Divisão de \$b / \$a é igual a $total<hr>";
$total = $d / $c;
echo "Divisão de \$d / \$c é igual a $total<hr>";

//resto da divisão -- Módulo %

$total = $b % 2;
echo "Resto da divisão de \$b por 2  é igual a $total<hr>";
$total = $d % 2;
echo "Resto da divisão de \$d por 2  é igual a $total<hr>";

//exponenciação - ** - pow(2,3)
$total = $b ** $a;
echo "Potencia  de \$b elevado a \$a é igual a $total<hr>";
$total = $d ** $c;
echo "Potencia de \$d elevado a \$c é igual a $total<hr>";
 ?>

</body>
</html>
