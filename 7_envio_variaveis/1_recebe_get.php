<!doctype html>
<html>
<head>
<title>RECEBE GET</title>
<meta charset="utf-8">
</head>
<body>
<?php
//valores acrescentados às variaveis através da URL - recebe_get.php?nome=edu+pretel&idade=34
echo "Seu nome é: <b> $_GET[nome] </b>\n";
echo "<hr>\n";
echo "Sua idade é: <b> ". $_GET['idade'] ."</b>\n";
echo "<hr>\n";
echo "Seu curso é: <b> {$_GET['curso']} </b>\n";
echo "<hr>\n";
echo "<pre>";
var_dump($_GET);
echo "</pre>";
?>
</body>
</html>