<?php
function montaSelect(Array $conteudo, string $nome):string
{	
	$saida = "\t<select name=\"$nome\" id=\"$nome\">\n";
	foreach($conteudo as $ind => $valor){
			$saida = $saida . "\t\t<option value=\"$ind\">$valor</option>\n";
	};
	$saida .= "\t</select>\n";
	return $saida;
}

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