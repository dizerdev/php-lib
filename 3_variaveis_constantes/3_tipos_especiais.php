<!doctype html>
<html>
<head>
<title>Tpos de Dados</title>
<meta charset="utf-8">
</head>
<body>
<?php

/*
Resources
Um recurso é uma variável especial, que mantém uma referência a um recurso externo.
*/
$arquivo = fopen('4_isset.php','a+');
var_dump($arquivo);
/*
NULL
A variável é considerada null se:

foi atribuída a constante NULL.

ainda não recebeu nenhum valor.

foi apagada com unset().
*/
$a = NULL;
var_dump($a);
?>
</body>
</html>