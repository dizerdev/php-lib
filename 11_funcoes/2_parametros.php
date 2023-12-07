<?php
//5.0 - Obj
//5.1 - array
//5.4 = callable 
//7 - bool, float, int , string
//padrao => modo coercivo, somente 1 tipo de dado sera aceito, no caso o declarado no parametro
declare(strict_types = 1);
function potencia(float $num)
{
	//$num = 5;
	$pot = $num * $num;
	echo $pot;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<meta charset="utf-8">
</head>
<body>
<?= potencia(true) ?>
<hr>
<?= potencia("8") ?>

</body>
</html>