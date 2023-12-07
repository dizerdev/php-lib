<!DOCTYPE html>
<html>
<head>
	<title>Qualquer</title>
</head>
<body>
<?php

##########################################
//atribuição implicita
$cor[]="verde";
$cor[]="vermelho";
$cor[]="azul";
$cor[]="amarelo";
$cor[]="pink";

echo "<pre>";
var_dump($cor);
echo "</pre>";
echo "<hr>";

###########################################
//construtor Array - atribução explicita
//$impacta = array('livres' => 'Paulista', 'Superior'=>'Barra Funda');
$impacta = array('livres' => 'Paulista',
				 'Superior'=>'Barra Funda',
				);

echo "<pre>";
var_dump($impacta);
echo "</pre>";
echo "<hr>";

###############################################
//construtor Array - atribução implicita
$cursos = array('PHP','MySql', 'JavaScript','Linux');

echo "<pre>";
var_dump($cursos);
echo "</pre>";
echo "<hr>";

###############################################
//forma reduzida
$design=['InDesign','Photoshop','Ilustrator'];

echo "<pre>";
var_dump($design);
echo "</pre>";
echo "<hr>";

###############################################
//forma reduzida
$design2=[0=>'InDesign','Imagens'=>'Photoshop',20=>'Ilustrator'];

echo "<pre>";
var_dump($design2);
echo "</pre>";
echo "<hr>";

###############################################
//outra formas
$string="Rodrigo,Juçara,Mariana,Suzana,Paulo";
$array = explode(",",$string);

echo "<pre>";
var_dump($array);
echo "</pre>";
echo "<hr>";
?>
</body>
</html>