<?php
/*
 "Definição"
 "espaço na memória ao qual eu me referencio através de um endereço<br>"
 "locais usados para armazenar informações durante a execução do programa"

Regras
1 - Sempre antecedidas pelo caracter "$"(dolar)
2 - Começa com uma letra ou o simbolo "_"
3 - Não podem conter espaços
4 - Sensitive Case - $NOME <> $nome <> $Nome
5 - Validos - $USER ; $login; $_cidade ; $_UF;";
6 - não válidos - $2mes; $#dia
*/
?>
<!doctype html>
<html>
<head>
<title>Estudo de variável</title>
<meta charset="utf-8">
</head>
<body>
<?php
//iniciando uma variável
$a  = "Impacta";

echo $a;
?>
</body>
</html>