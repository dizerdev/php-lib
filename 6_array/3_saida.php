<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

$carros=[	'Suzuki'=>'Jimmy',
			'Jeep'=>'Renegade',
			'Honda'=>'CRV',
			'Fiat'=>'Toro',
			'Renault'=>'Duster',
		];

echo $carros['Suzuki'];
echo "<hr>";

echo "o carro que comprei é um ".$carros['Suzuki']." verde";
echo "<hr>";

echo "o carro que comprei é um ".$carros['Suzuki']." verde";
echo "<hr>";

echo "o carro que comprei é um $carros[Suzuki] verde";
echo "<hr>";

echo "o carro que comprei é um {$carros['Suzuki']} verde";
echo "<hr>";
?>
</body>
</html>