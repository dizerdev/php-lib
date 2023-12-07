<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form>
<?php
	$carros=['Jimmy','CRV','Toro','Duster', 'Hilux'];
?>
	<select name="carros" id="carros" class="formata">

<?php foreach($carros as $ind => $valor):?>

		<option value="<?= $ind ?>"><?= $valor ?></option>

<?php endforeach; ?>

	</select>

</form>
</body>
</html>