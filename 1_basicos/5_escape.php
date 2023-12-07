<!doctype html>

<html>
<head>
<title>Untitled</title>
<meta charset="utf-8">
</head>
<body>

<?php 
$escola = "Impacta";

echo "Eu não matei Joana D'Arc";
echo "<br>";
echo 'Eu não gosta daquela candidata "engraçada"!!!!!';

echo "<br>";
echo 'Eu não matei Joana D\'Arc';
echo "<br>";
echo "Eu não gosta daquela candidata \"engraçada\"!!!!!";

echo "<hr>";
echo 'A escola se chama $escola';
echo "<br>";
echo "A escola se chama $escola";//interpolação de variavel
echo "<hr>";
echo "O conteudo da \$escola é $escola";
echo "<br>";
echo 'O conteudo da $escola é ' . $escola;
?>
</body>
</html>
