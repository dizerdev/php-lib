<?php
//5.0 - Obj
//5.1 - array
//5.4 = callable 
//7 - bool, float, int , string
//padrao => modo coercivo
declare(strict_types = 1);
function potencia(float $num):float
{
	//$num = 5;
	$pot = $num * $num;
	return $pot;
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
<?= (potencia(2) + potencia(8)) ?>
<hr>


</body>
</html>