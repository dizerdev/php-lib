<!doctype html>
<html>
<head>
<title>RECEBE GET</title>
<meta charset="utf-8">
</head>
<body>
<?php 

echo "Seu nome é: <b> $_POST[nome] </b>\n";
echo "<hr>\n";
echo "Sua idade é: <b> ". $_POST['idade'] ."</b>\n";
echo "<hr>\n";
echo "Seu curso é: <b> {$_POST['curso']} </b>\n";
echo "<hr>\n";
echo "<pre>";
var_dump($_POST);
echo "</pre>";
?>
</body>
</html>