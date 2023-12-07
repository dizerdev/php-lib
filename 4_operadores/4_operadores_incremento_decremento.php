<!doctype html>

<html>
<head>
<title>Operadores de Incremento e Decremento </title>
<meta charset="utf-8">
</head>
<body>
<?php 
$a = 4; // 4
echo $a;
$a++;//$a = $a + 1
echo $a;
++$a;//6
echo $a;

echo $a++;//priemiro escreve 6 e depois atribui 7 à $a - pos incremento
echo $a;//7

echo ++$a;//primeiro incrementa a variavel - 8 - e depois escreve o conteudo - pre incremento
/*
http://php.net/manual/pt_BR/language.operators.increment.php
*/

$a--;//7
echo $a;
--$a;//6
echo $a;
echo $a--;//escrevera 6 e depois atribuira 5
echo $a;
echo --$a;
 ?>

</body>
</html>
