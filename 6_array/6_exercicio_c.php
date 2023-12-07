<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form>
<?php
	$carros=['Jimmy','CRV','Toro','Duster','Hilux'];

	echo "\t<select name=\"carros\" id=\"carros\" class=\"formata\">\n";

	foreach($carros as $ind => $valor):
			echo "\t\t<option value=\"$ind\">$valor</option>\n";
	endforeach;
	
	echo "\t</select>\n";
?>
</form>
</body>
</html>