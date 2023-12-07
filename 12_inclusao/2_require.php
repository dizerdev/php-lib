<?php 
// require sozinho deve ser utilizado somente uma vez para a função nao ser redeclarada
require_once 'function.php';
require_once 'function.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
echo teste();

@require 'listasss.php' ;
// Para inibir o erro, usar (@) mas so funciona por que a funcao é incluida no documento
echo teste();
// também o processamento das demais instruções é interrompido
?>
<hr>
<?php require 'lista.php' ?>
<hr>
<?php require 'lista.php' ?>
</body>
</html>