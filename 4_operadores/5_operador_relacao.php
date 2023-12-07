<!doctype html>

<html>
<head>
<title>Untitled</title>
<meta charset="utf-8">
</head>
<body>
<?php 
//Operador de relação ou Relacionais

$a = 20;
$b = 20;

//Variável $a é igual a $b?
echo "Variável \$a é igual a \$B: " ;
echo $a == $b;
echo "<hr>";


//Variável $a é diferente a $b?
echo "Variável \$a é diferente a \$B: " ;
echo $a != $b;
echo $a <> $b;
echo "<hr>";

//Variável $a é identica a $b?
echo "Variável \$a é identica a \$B: " ;
echo $a === $b;
echo "<hr>";

//Variável $a não é identica a $b?
echo "Variável \$a não é identica a \$B: " ;
echo $a !== $b;
echo "<hr>";

//Variável $a é maior a $b?
echo "Variável \$a é maior a \$B: " ;
echo $a > $b;
echo "<hr>";
 
 //Variável $a é menor a $b?
echo "Variável \$a é menor a \$B: " ;
echo $a < $b;
echo "<hr>";
 
 //Variável $a é maior ou igual a $b?
echo "Variável \$a é maior ou igual a \$B: " ;
echo $a >= $b;//nao pode =>
echo "<hr>";
 
  //Variável $a é menor ou igual a $b?
echo "Variável \$a é menor ou igual a \$B: " ;
echo $a <= $b;
echo "<hr>";

//spaceship -   <=> 
$c = 20;
$d = 200;
echo $c <=> $d;
//iguais => 0
//primeiro > segundo  => 1
//primeiro < segundo  => -1

/*
http://php.net/manual/pt_BR/language.operators.comparison.php
*/
 ?>
</body>
</html>
