<?php
require_once 'funcoes.php';

$frutas=['maça','uva','pera','melão'];
$carros=['Jimmy','CRV','Toro','Duster'];
$cursos=['prog'=>'PHP','marc'=>'HTML','form'=>'CSS'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form>
<?= montaSelect($frutas,"frutas") ?>
<hr>
<?= montaSelect($carros,"carros")  ?>
<hr>
<?= montaSelect($cursos,"cursos")  ?>
</form>
</body>
</html>