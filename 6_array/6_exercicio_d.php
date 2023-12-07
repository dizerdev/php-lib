<?php
	$carros=['Jimmy','CRV','Toro','Duster', 'Hilux'];

	$saida = "\t<select name=\"carros\" id=\"carros\" class=\"formata\">\n";

	foreach($carros as $ind => $valor){
			$saida = $saida . "\t\t<option value=\"$ind\">$valor</option>\n";
	};
	
	$saida .= "\t</select>\n";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form>
<?= $saida; ?>
</form>
</body>
</html>