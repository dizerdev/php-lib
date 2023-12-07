<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
/*
$musica['rock'][0]="Led Zepelin";
$musica['rock'][1]="Ramones";
$musica['rock'][2]="The Clash";
$musica['mpb'][0]="Chico";
$musica['mpb'][1]="Caetano";
$musica['mpb'][2]="Gil";
$musica['pop'][0]="Madona";
$musica['pop'][1]="M Jackson";
$musica['pop'][2]="GaGA";
$musica['forro']="Dominguinhos";
*/
$musica = [
			'rock'=>["Led Zepelin", "Ramones", "The Clash"],
			'mpb'=>["Chico", "Caetano", "Gil", "Gal"],
			'pop'=>["Madona", "M Jackson"],
			'forro'=>['Dominguinhos'],
			];

echo count($musica);
echo "<hr>";
echo count($musica,true);
echo "<hr>";
echo $musica['mpb'][1];
echo "<hr>";

###############################################
foreach($musica as $estilo => $aux){
	foreach($aux as $ind => $artista){
			echo "\$musica[$estilo][$ind] = $artista<br>";
	}
}
echo "<hr>";

###############################################
echo "<pre>";
var_dump($musica);
echo "</pre>";
?>
</body>
</html>