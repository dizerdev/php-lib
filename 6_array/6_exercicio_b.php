<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form>
	<select name="carros" id="carros" class="formata">	

<?php
	$carros=['Jimmy','CRV','Toro','Duster', 'Hilux'];
	
	foreach($carros as $ind => $valor):
			echo "<option value=\"$ind\">$valor</option>";
	endforeach;
?>

	</select>
</form>
</body>
</html>